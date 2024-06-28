<?php

class AhpGroupRU
{
    public $wrn = array(
    //"noPart"		=>	"Project has no participants",
    "noPart"		=>	"В проекте нет участников",
    //"noPwc"		=>	"<br>Node(s) <span class='res'>%s</span>no pairwise comparison data",
    "noPwc"			=>	"<br>Node(s) <span class='res'>%s</span>отсутсвуют данные для парного сравнения",
    //"fUncEst"		=>	"<br>Node <span class='res'>%s</span> only %g uncertainty estimations",
    "fUncEst"		=>	"<br>Node <span class='res'>%s</span> только %g оценок неопределенности",
    //"nUncEst1"	=>	"<br>Node <span class='res'>%s</span> no uncertainty estimations",
    "nUncEst1"	    =>	"<br>Node <span class='res'>%s</span> отсутствуют оценки неопределенности",
    //"nUncEst2"	=>	"<br>Node(s) <span class='res'>%s</span>, no uncertainty estimation "
    "nUncEst2"	    =>	"<br>Node(s) <span class='res'>%s</span>, отсутствуют оценки неопределенности "
);
    public $err  = array(
    //"noAlt"		=>	"No alternatives",
    "noAlt"		    =>	"Нет альтернатив",
    //"invSc"		=>	"Invalid Session Code",
    "invSc"		    =>	"Неверный код сессии",
    //"dbE"			=>	"PWC from participant <span class='var'>%s</span> does not match with the hierarchy node <span class='var'>%s</span>"
    "dbE"			=>	"PWC от участника <span class='var'>%s</span> не совпадает с узлом иерархии <span class='var'>%s</span>"
);
    public $info = array(
    //"cont"		=>	"<p><br><small>cont'd</small></p>"
    "cont"			=>	"<p><br><small>продолжение</small></p>"

);
    public $tbl	= array(
    //"grTblTh"		=> 	"\n<thead><tr class='header'><th>Participant</th>",
    "grTblTh"		=> 	"\n<thead><tr class='header'><th>Участник</th>",
    //"grTblTd1"	=>	"<td><strong>Group result</strong></td>"
    "grTblTd1"		=>	"<td><strong>Групповой результат</strong></td>"

);
}
