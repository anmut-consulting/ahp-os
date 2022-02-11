<?php
/*
 * 	Restore user from the backup database
 *  User will still be deactivated when restored.
 *
 *  Copyright (C) 2022  <Klaus D. Goepel>
 *
 *  This program is free software: you can redistribute it and/or modify
 *  it under the terms of the GNU General Public License as published by
 *  the Free Software Foundation, either version 3 of the License, or
 *  (at your option) any later version.
 *
 *  This program is distributed in the hope that it will be useful,
 *  but WITHOUT ANY WARRANTY; without even the implied warranty of
 *  MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 *  GNU General Public License for more details.
 *
 *  You should have received a copy of the GNU General Public License
 *  along with this program.  If not, see <https://www.gnu.org/licenses/>.
 *
 *  Revision: $Rev: 120 $
 *
 */

include 'includes/config.php';

/*
 * for sqlite database name has to include extension db
 */
$backupDb = 'ahp-os_bck';
//$backupDb = 'ahp_os.2021-12-26.db';

$storedUsers = array();  // users in active database
$deletedUsers = array(); // users in backup db but not in active db
$errMsg = "";
$userName= "";
$ahpUser = array();

$pageTitle ='AHP recover';
$title="AHP-OS User Recovery";
$subTitle = "User recovery from bachup database";
$version = substr('$LastChangedDate: 2022-02-11 08:19:55 +0800 (Fr, 11 Feb 2022) $', 18, 10);
$rev = trim('$Rev: 120 $', "$");

// productive database
$login =  new Login();
$ahpAdm = new AhpAdmin();
$ahpDb =  new AhpDb();

// backup database
$ahpAdmBck = new AhpAdmin($backupDb);
$ahpDbBck =  new AhpDb($backupDb);

// reset in case back from edit form
if (isset($_SESSION['REFERER'])) {
    unset($_SESSION['REFERER']);
}

/* --- MENU ACTIONS --- */

if (isset($_POST['EXIT']) || !$login->isUserLoggedIn()) {
    header('HTTP/1.0 200 ok');
    header("Location: " . "includes/login/do/do-user-admin.php");
}
if (isset($_POST['DEL']) || isset($_POST['OPEN']) || isset($_POST['REACT'])) {
    $para = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
    if (filter_has_var(INPUT_POST, 'userName')) {
        $userName = mb_substr(preg_replace('~[^\p{L}\p{N}]++~u', '', 
			$para['userName']), 0, 64);
    }

    // TODO: add menu point to download $ahpUser JSON to
    if (isset($_POST['REACT'])) {
        $ahpUser = $ahpDbBck->getUser($userName);
        // JSON encoded
        $ahpJs = json_encode($ahpUser);

        if ($ahpDb->restoreUser($ahpUser['user'], $ahpUser['projects'], 
				$ahpUser['pwc'], $ahpUser['a'])) {
            $errMsg = "<p class='msg'><br>Account of $userName was successfully 
				restored with " . count($ahpUser['projects']) . " projects</p>";
        } else {
            $errMsg = "<p class='err'><br>Restore error for $userName ";
            $errMsg .= $ahpDb->getErrors() . "</p>";
        }

        $sessionName = "";
    } else {
        // view
    }
} elseif (isset($_POST['CLOSE'])) {
    $userName = "";
}

$storedUsers  = $ahpAdm->getUserNames();
$deletedUsers = $ahpAdmBck->getUserNames();
$deletedUsers = array_diff($deletedUsers, $storedUsers);
$storedUsers = array_values($deletedUsers);

if ($userName !="") {
    $i = array_search($userName, $storedUsers);
    if ($i >0) {
        $storedUsers[$i] = $storedUsers[0];
        $storedUsers[0] = $userName;
    }
}


/* --- Web Page HTML OUTPUT --- */
$webHtml = new WebHtml($pageTitle);
    include 'includes/login/form.login-hl.php';
    if (!empty($login->errors)) {
        echo $login->getErrors();
    }
    echo "<h1>$title</h1>";
    echo "<h2>$subTitle</h2>";

    echo "<h2>Deleted Users</h2>";
    echo "<p>Prod. database: <span class='var'>" . DBNAME . "</span>";
    echo "<br>Backup database: <span class='var'>$backupDb</span>. <br><span class='var'>",
    count($storedUsers), "</span> Users can be recovered.</p>";
    echo "<h2>AHP User Recovery Menu</h2>";
        include 'views/ahpUserRecoverMenu.html';
    echo $errMsg;
    // --- TODO: add a menu point to export users as JSON file
    //if(!empty($ahpJs))
    //	echo "<p>$ahpJs</p>";

    echo "<h2>User Details</h2>";
    if ($userName !="") {
        echo "<p>User details for user <span class='hl'>$userName</span></p>";
        echo "<h3>E-mail, registration and last login</h3>";
        $userDetails = $ahpAdmBck->getUserDetails($userName);
        $ahpAdm->displayUserTable(array($userDetails));

        echo "<h3>Projects</h3>";
        $projects = $ahpDbBck->getAllProjects($userName);
        if (is_array($projects)) {
            $pcnt = count($projects);
        } else {
            $pcnt = 0;
        }
        echo "<p class='msg'>User has $pcnt project(s)</p>";
        $ahpDbBck->displaySessionTable($userName);
    } else {
        echo "<p>No data</p>";
    }

$webHtml->webHtmlFooter($version);
