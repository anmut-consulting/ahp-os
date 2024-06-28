<?php

class AhpCalcRU
{
// Titles
    public $titles = array(
    'h3ResP'	=>	"<h3>Приоритеты</h3>",
    'h3ResDm'	=>	"<h3>Матрица решений </h3>" //Decision Matrix
    );

    // Errors
    public $err = array(
    'ePwc'		=>	"<span class='err'>Ошибка ввода</span>",
    'adjPwc'	=>	"<span class='err'>Скорректируйте выделенные суждения, чтобы улучшить согласованность</span>",              //Adjust highlighted judgments to improve consistency
    'nCrit'		=>	"<span class='err'>Внимание, n должно быть в диапазоне от 1 до %g, n было установлено по умолчанию.</span>" //Warning, n should be between 1 and %g, n was set to default.
    );

    // Result text
    public $res = array(
    'npc'		=>	"Количество сравнений = <span class='res'>%g</span><br>",
    'cr'		=>	"<b>Отношение Согласованности CR</b> = <span class='res'>%2.1f%%</span><br>",
    'ev'		=>	"Главное собственное значение = <span class='res'>%2.3f</span><br>",            //Principal eigen value
    'it'		=>	"Собственный вектор (Локальный вектор приоритетов): <span class='res'>%d</span> итераций,
                     delta = <span class='res'>%01.1E</span>"                                       //Eigenvector solution...iterations...delta
    );
    // Messages
    public $msg = array(
    'ok'		=>	"<span class='msg'>OK</span>",
    'sPwc'		=>	"<span class='msg'>Пожалуйста, начните попарные сравнения</span>",
    'def'		=>	"<span class='msg'>Некоторые названия установлены по умолчанию.</span>"         //Some names set to default.
    );
    
    // Information
    public $info= array(
    'pwcAB'		=>	"A - Важнее - или B? ",
    'resP'		=>	"Результирующие веса для критериев, основанные на попарных сравнениях:", //These are the resulting weights for the criteria based on your pairwise comparisons:
    'resDm'		=>	"Результирующие веса, основанные на главном собственном векторе матрицы принятия решений:", //The resulting weights are based on the principal eigenvector of the decision matrix:
    'cNbr'		=>	"<span class='hl'>ВВеденный номер и имена (2 - %g) </span>",                             //Input number and names
    'wlMax'		=>	"<small>max. %g character ea. (!уточнить)</small>"
    );
    
    // Tables
    public $tbl	= array(
    'cTblTh'	=>	"<thead><tr class='header'>
                    <th colspan='3' class='ca' >%s</th>
                    <th>Равный</th>
                    <th class='ca' >Насколько больше?</th></tr></thead>",
    'pTblTh'     => "<th colspan='2' class='la' >Категория</th>
                    <th>Приоритет</th>
                    <th>Ранг</th>",
    'gcTblTh'	=>	"<tr><th colspan='2' class='ca' >Имя %s</th></tr>"
    );
    
    // Menu and buttons
    public $mnu = array(
    'btnChk'	=>	"<input id='sbm1' %s type='submit' value='Calculate' name='pc_submit' />",
    'btnSbm'	=>	"<input type='submit' value='%s' name='%s' %s %s />",
    'btnDl'		=>	"dec. comma(!уточнить)"
    );
    
}
