<?php
/*
    Copyright (C) 2022  <Klaus D. Goepel>

    This program is free software: you can redistribute it and/or modify
    it under the terms of the GNU General Public License as published by
    the Free Software Foundation, either version 3 of the License, or
    (at your option) any later version.

    This program is distributed in the hope that it will be useful,
    but WITHOUT ANY WARRANTY; without even the implied warranty of
    MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
    GNU General Public License for more details.

    You should have received a copy of the GNU General Public License
    along with this program.  If not, see <https://www.gnu.org/licenses/>.
 */
include __DIR__ . '/../../config.php';
include('../../../vendor/autoload.php');

$title="User Registration";
$version = substr('$LastChangedDate: 2022-02-28 13:59:16 +0800 (Mo, 28 Feb 2022) $', 18, 10);
$rev = trim('$Rev: 177 $', "$");

session_start();

// --- First check for suspicious IP
$block = false;
if (defined('HPAPIKEY') && !empty('HPAPIKEY')) {
    $ip = $phpUtil->get_client_ip();
    $res = $phpUtil->my_httpbl_check($ip);
    if ($res != "ok" || !isset($_COOKIE['notabot'])
            && $res[0] == 127 && $res[2] >20) {
        $block = true;
        $_SESSION['block'] = $ip;
        trigger_error(
            "do-register.php: block of suspicious IP $ip",
            E_USER_NOTICE
        );
    } elseif (isset($_COOKIE['notabot']) && $_SESSION['block'] == $ip) {
        trigger_error(
            "do-register.php: NOTABOT cookie set for $ip ",
            E_USER_NOTICE
        );
        unset($_SESSION['block']);
    } elseif (isset($_SESSION['block'])) {
        unset($_SESSION['block']);
    }
}

// --- start timer to measure time needed to fill form
if (isset($_SESSION['reg_s'])) {
    $reg_s = $_SESSION['reg_s'];
    $reg_e = microtime(true);
    $reg_t = round(1000*($reg_e -$reg_s), 0);
} else {
    $reg_t = 0.;
}
$_SESSION['reg_s'] = microtime(true);


$registration = new Registration();

    if (!isset($_SESSION['REFERER']) && isset($_SERVER['HTTP_REFERER'])) {
        $_SESSION['REFERER'] = htmlspecialchars($_SERVER['HTTP_REFERER']);
        $url = $_SESSION['REFERER'];
    } else {
        $url = SITE_URL;
    }

    if (!empty($_POST['website'])) {
        die();
    }


// --- MAIN
$webHtml = new WebHtml($registration->rgTxt->titles['h1reg'], 600);
    echo "<div style='display:block;float:left;padding:2px;'>",
                "<a href='" . SITE_URL . "'>" . APP . " Home</a></div>";
    echo "<div style='padding:2px;float:right;'><a href='$url'>back</a></div>";
    echo "<div style='clear:both;'></div>";
    echo "<h1>",$registration->rgTxt->titles['h1reg'],"</h1>";
    if ((SELFREG && !$block) 
        || (!SELFREG && in_array($_SESSION['user_id'], $admin))) 
    {
        $formToken = $_SESSION['formToken'] = uniqid();
        if (DEBUG) {
            echo "<p class='msg'>Execution time $reg_t mS</p>";
        }
        // Antispam measure: time needed to fill up form
        if ($reg_t != 0. && $reg_t < 3000) {
            echo "<p class='err'>You are very fast in filling out the form";
            trigger_error("do-register.php: Probably Spam!", E_USER_NOTICE);
        }
        // show potential errors / feedback (from registration object)
        if (isset($registration) && $registration->errors) {
            echo "<p class='err'>", implode(' ', $registration->errors), "</p>";
        }
        if (isset($registration) && $registration->messages) {
            echo "<p class='msg'>", implode(' ', $registration->messages), "</p>";
        }
        if (!$registration->registration_successful
            && !$registration->verification_successful) {
            //-- show registration form, if not successfully submitted yet
            include('../form.registration.php');
        } else {
            echo "<div class='ca'><p><a href='" . SITE_URL .  "'>"
            . $registration->rgTxt->wrd['cont'] . "</a></p></div>";
        }
    } elseif (!SELFREG) {
        echo "<p class='msg'>",$registration->rgTxt->info['nReg'],"</p>";
    } else {
        echo "<script src='../../../js/letmein.js'></script><p class='err'>Sorry!</p>";
        echo "<p>You are using a suspicious IP. If you <strong>ARE NOT</strong> 
            a bot of any kind, please <a href='javascript:letmein()'>click here</a> 
            to access the page (Java needs to be enabled!).</p>";
        if (!empty('HONEYPOT')) {
            echo "<p>Otherwise, please have fun  
            <a href='" . HONEYPOT . "' ></a>here</a>.</p>";
        }
    }
$webHtml->webHtmlFooter($version);
