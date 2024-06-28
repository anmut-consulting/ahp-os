<?php

class AhpGroupResRU
{
    // for ahp-group.php AND  ahp-g-input.php
    /* Titles and headings */
    public $titles = array(
    "pageTitle1"    =>    "AHP Результаты группы - AHP-OS",
    "h1title1"      =>    "<h1>AHP результаты группы</h1>",
    "h2subTitle1"   =>    "<h2>Результаты проекта</h2>",

    "pageTitle2"    =>    "AHP Входные данные проекта - AHP-OS",
    "h1title2"      =>    "<h1>AHP Результаты проекта</h1>",
    "h2subTitle2"   =>    "<h2>Входные данные проекта</h2>",

    "h2hier"        =>    "<h2>Иерархия с консолидированными приоритетами</h2>",
    "h2consP"       =>    "<h2>Консолидированные глобальные приоритеты</h2>",
    "h2consA"       =>    "<h2>Консолидированные веса альтернатив</h2>",
    "h2sens"        =>    "<h2>Анализ чувствительности</h2>",
    "h3wUncrt"      =>    "<h3>Неопределенности в отношении весов</h3>",
    "h2nodes"       =>    "\n<h2>Разбивка по узлам</h2>",
    "h4wCons"       =>    "<h4>Консолидированные приоритеты</h4>",
    "h4mCons"       =>    "<h4>Сводная матрица решений</h4>",
    "h4part"        =>    "<h4>Групповой результат и приоритеты отдельных участников</h4>",
    "h2pGlob"       =>    "<h2>Глобальные приоритеты</h2>",
    "h3rob"         =>    "<h3>Устойчивость</h3>",
    "h2alt"         =>    "<h2>Альтернативы по участниками</h2>",
    "h2crit"        =>    "<h2>Разбивка по критериям</h2>",
    "h4group"       =>    "<h4>Групповой результат и приоритеты отдельных участников</h4>",
    "h2grMenu"      =>    "<h2>Меню групповых результатов</h2>",

    "h2dm"          =>    "<h2>Матрицы принятия решений для попарного сравнения</h2>",
    "h4dm"          =>    "<h4>Матрица принятия решений</h4>",
    "h4crit"        =>    "<h4>Критерий: <span class='res'>%s</span></h4>",
    "h3part"        =>    "<h3>Участник <span class='res'>%s</span></h3>",
    "h4nd"          =>    "<h4>Узел: <span class='res'>%s</span></h4>"
);

    /* Individual words */
    public $wrd  = array(
    "crit"          =>    "критерий",
    "alt"           =>    "альтернатива"
);

    /* Result output */
    public $res  = array(
    "cr"            =>    "Коэффициент согласованности (CR): <span class='res'>%02.1f%%</span>",
    "consens1"      =>    "<p>Согласованное среднее группы AHP <i>S</i>*: <span class='res'>%02.1f%%</span>",
    "consens2"      =>    " Критерий: <span class='res'>%s</span> - CR: <span class='res'>%g%%</span>",
    "consens3"      =>    "<br>Отн. Однородность <i>S</i>: <span class='res'>%02.1f%%</span>",
    "gCons"         =>    " - среднее AHP группы: <span class='res'>%02.1f%%</span> ",
    "consens4"      =>    "<p><small>Среднее при оценке альтернатив в соответствии с критерием 
                            <span class='res'>%s</span>: <span class='res'>%02.1f%%</span>",
    "nodeCr"        =>    " Узел: <span class='res'>%s</span> - CR: <span class='res'>%g%%</span>",
    "ovlp"          =>    "Следующие %s не пересекаются:<br>",
    "ovlpNo"        =>    "Отсутствие совпадения %s в пределах неопределенности",
    "ovlpAll"       =>    "Все %s перекрываются в пределах неопределенности.",
    "ovlpGrp"       =>    "Следующие группы %s перекрываются в пределах неопределенности:<br>",
    "rtrb"          =>    "<p class='msg'>1. Решение для лучшей альтернативы является на <span class='res'>%s</span> надежным.<br>",
    "rt10"          =>    "<p class='msg'>1. <i>Самый значимый</i> критический критерий в проценнтах <span class='res'>%s</span>: 
                            это изменение с <span class='res'>%g%%</span> на абсолютное <span class='res'>%g%%</span>, 
                            которое измененит соотношения  между альтернативами <span class='res'>%s</span> и <span class='res'>%s</span>.<br>",
    "rt11"          =>    "2. <i>Любой</i>? критический критерий, в процентах<span class='res'>%s</span>: 
                            это изменение с <span class='res'>%g%%</span> на абсолютное <span class='res'>%g %%</span> 
                            которое изменит соотношения между альтернативами <span class='res'>%s</span> и 
                            <span class='res'>%s</span>.<br>",
    "rt11s"         =>    "2. <i>Любой</i> критический критерий такой же, как и выше.<br>",
    "rt20"          =>    "3. <i>Любой</i> критический показатель эффективности предназначен для альтернативы  <span class='res'>%s</span> 
                            в соответствии с критерием <span class='res'>%s</span>. Изменение по сравнению с <span class='res'>%g%%</span> на абсолютную величину
                            <span class='res'>%g%%</span> изменит рейтинг между <span class='res'>%s</span> и 
                            <span class='res'>%s</span>."
    );

    /* Messages */
    public $msg  = array(
    "scaleSel"        =>    "<p class='msg'>Выбранный масштаб: <span class ='hl'>%s</span></p>",
    "wMethod"         =>    "<p>Метод: <span class ='hl'>Метод взвешенного продукта (Weighted product method, WPM)</span></p>",
    "rMethod"         =>    "<p>Случайная изменение: <span class ='hl'>на основе стандартного отклонения</span></p>",
    "mcVar"           =>    "<p class='msg'>Оценочная неопределенность веса, основанная на <span class='res'>%g</span> вариации суждений.",
    "pSel"            =>    "<p>Отобранные участники: <span class='res'>%s</span></p>",
    "noSens"          =>    "<p class='msg'>Анализ чувствительности невозможен.</p>",
    "noPwc1"          =>    "<span class='msg'> - Нет данных для попарного сравнения.</span>",
    "noPwc2"          =>    "<p class='msg'>Данные попарного сравнения от участников отсутствуют</p>",
    "noPwc3"          =>    " - Данные попарного сравнения от участников отсутствуют.",
    "noPwc4"          =>    "<p>Предупреждение: <span class='msg'>%s</span></p>",
    "noRt"            =>    "<p class='msg'>Проверка на надежность невозможна.</p>",
    "pCnt"            =>    "Обобщение индивидуальных суждений для %g участников",
    "nlgin"           =>    "<p class='msg'>Вам необходимо быть зарегистрированным пользователем и войти в систему, чтобы управлять проектами.</p>"
);

    /* Errors */
    public $err  = array(
    "incompl"         =>    "<p class='err'>Оценка проекта является неполной</p>",
    "consens0"        =>    "<p>Консенсус группы AHP: <span class='err'>n/a</span>",
    "consens1"        =>    " - Консенсус <span class='res err'>n/a</span>",
    "consens2"        =>    "<p><small>при оценке альтернатив в соответствии с критерием <span class='res err'>n/a</span>"
);

    /* Information output */
    public $info = array(
    "sensDl"          =>    "<p><small>Примечание: завершите анализ с помощью загрузки.</small></p>",
    "cpbd"            =>    "Консолидированные предпочтения в отношении альтернатив по каждому критерию",
    "pwcfor"          =>    "Попарные сравнения для: <br>"
);

    /* Menu and buttons */
    public $mnu = array(
    "btnNdD"      =>    "<p><button href='#%s' class='nav-toggle'>Подробности</button>",
    "lgd1"        =>    "Меню групповых результатов",
    "lbl4"        =>    "дес. запятая",
    "btn1"        =>    "Обновить",
    "btn2"        =>    "Просмотр входных данных",
    "btn3"        =>    "Скачать (.csv)",
    "btn4"        =>    "Определите альтернативы",
    "btn5"        =>    "Готово",
    "lgd2"        =>    "Меню входных данных проекта"
);
}
