<?php

class AhpGroupRU
{
    public $wrn = array(
    "noPart"		=>	"В проекте нет участников",
    "noPwc"			=>	"<br>Node(s) <span class='res'>%s</span>отсутсвуют данные для парного сравнения",
    "fUncEst"		=>	"<br>Node <span class='res'>%s</span> только %g оценок неопределенности",
    "nUncEst1"	    =>	"<br>Node <span class='res'>%s</span> отсутствуют оценки неопределенности",
    "nUncEst2"	    =>	"<br>Node(s) <span class='res'>%s</span>, отсутствуют оценки неопределенности "
);
    public $err  = array(
    "noAlt"		    =>	"Нет альтернатив",
    "invSc"		    =>	"Неверный код сессии",
    "dbE"			=>	"PWC от участника <span class='var'>%s</span> не совпадает с узлом иерархии <span class='var'>%s</span>"
);
    public $info = array(
    "cont"			=>	"<p><br><small>продолжение</small></p>"

);
    public $tbl	= array(
    "grTblTh"		=> 	"\n<thead><tr class='header'><th>Участник</th>",
    "grTblTd1"		=>	"<td><strong>Групповой результат</strong></td>"

);
}
