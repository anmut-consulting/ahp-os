    <?php

class AhpHierRU
{
    public $wrd = array(
    "lvl"				=>	"Уровень",
    "nd"				=>	"Узел",
    "lvls"			    =>	"Уровень(и) иерархии",
    "lfs"				=>	"Листы (ветви) иерархии",
    "nds"				=>	"Узел(ы) иерархии",
    "chr"				=>	"Признаки иерархии",
    "glbP"			    =>	"Глб. приоритет",
    "alt"				=>	"Альтернативы"
);

    public $wrn = array(
    "glbPrioS"	    =>  "Сумма глобальных приоритетов не равна 100%. Проверьте иерархию! ",
    "prioSum"		=>	"Предупреждение! Сумма приоритетов не на 100% по категории: %s"
);

    public $err  = array(
    "hLmt"			=>	"Превышены лимиты программы. ",
    "hLmtLv"		=>	"Слишком много уровней иерархии. ",
    "hLmtLf"		=>	"Слишком много ветвей иерархии. ",
    "hLmtNd"		=>	"Слишком много узлов иерархии. ",
    "hEmpty"		=>	"Иерархия пустая или без узла, пожалуйста, определите иерархию. ",
    "hSemicol"	    =>	"Пропущена точка с запятой в конце ",
    "hTxtlen"		=>	"Превышена максимальная длина введенного текста! ",
    "hNoNum"		=>	"Названия категорий/подкатегорий не должны содержать цифр; найдено: ",
    "hEmptyCat" 	=>	"Пустое название категории ",
    "hEmptySub"	    =>	"Пустое название подкатегории ",
    "hSubDup"		=>	"Повторяющиеся названия подкатегории(й): ",
    "hNoSub"		=>	"В категории менее 2-х подкатегорий ",
    "hCatDup"		=>	"Повторяющиеся названия категории(й): ",
    "hColSemi"	    =>	"Неравное количество <i>двоеточий</i> и <i>точек с запятой</i>, проверьте определение иерархии",
    "hHier"			=>	"Ошибка в иерархии, пожалуйста, проверьте текст. ",
    "hMnod"			=>	"Иерархия начинается с нескольких узлов - ",
    "unkn"			=>	"<span class='err'>Неизвестная ошибка - Пожалуйста, повторите проверку %s </span>"
);

    public $msg = array(
    "sbmPwc1"		=>	"<small><span class='msg'>Пожалуйста, выполните попарные сравнения (Нажмите на \"AHP\")</span></small>",
    "sbmPwc2"		=>	"<small><span class='msg'>OK. Отправить заявку на групповую или альтернативную оценку.</span></small>",
    "aPwcCmplN"	    =>	"<small><span class='msg'>%g из %g завершенных сравнений</span></small>",
    "aPwcCmplA"	    =>	"<small><span class='msg'>Все оценки завершены.</span></small>"
);

    public $tbl	= array(
    "hTblCp"		=>	"<caption>Иерархия принятия решений</caption>",
    "aTblCp"		=>	"<caption>Иерархия с альтернативами</caption>",
    "aTblTh"		=>	"<th>Нет</th><th>Узел</th><th>Критерий</th><th>Глоб. приоритет</th><th>Сравнить</th>",
    "aTblTd1"		=>	"Общее количество альтернатив: "
);
}
