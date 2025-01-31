<?php

class AhpRU
{
    public $titles = array(
    'pageTitle'     =>    "AHP Онлайн система - AHP-OS",
    'h1title'       =>    "<h1>AHP Онлайн система - AHP-OS</h1>",
    'h2subTitle'    =>    "<h2>Многокритериальное принятие решений с использованием метода анализа иерархий</h2>",
    'h2contact'     =>    "<h2>Контакты и обратная связь</h2>"
    );

    public $msg = array(
    'tu'    =>    "Спасибо!",
    'cont'  =>    "Продолжить"
    );

    public $info = array(
    'contact'    =>    "<p>
                        Пожалуйста, оставьте <a href='%s'>комментарий</a>.</p>",
    'intro11'    =>    "<div class='entry-content'><p style='text-align:justify;'>
                        Этот бесплатный <b>веб-инструмент использует Метод анализа иерархий</b> и предназначен для помощи в принятии решений.
                        Он может быть полезен как для решения простых задач в повседневной работе, так и для принятия сложных решений.
                        Ознакомьтесь с <a href='https://bpmsg.com/participate-in-an-ahp-group-session-ahp-practical-example/'>примерами использования </a> 
                        (на английском языке). 
                        Скачайте <a href='docs/BPMSG-AHP-OS-QuickReference.pdf' target='_blank'>краткое справочное руководство</a> 
                        или <a href='docs/BPMSG-AHP-OS.pdf' target='_blank'>Руководство по AHP-OS</a>. 
                        Чтобы воспользоваться всеми функциями, вам необходимо авторизоваться. 
                        Если у вас еще нет учетной записи, пожалуйста, <a href='includes/login/do/do-register.php'>зарегистрируйтесь</a>. 
                        Это бесплатно!
                        </p></div>",

    'intro12'    =>    "<ol style='line-height:150%;'>
                        <li><span style='cursor:help;' 
                        title='Управление AHP проектами и групповыми сессиями. Для этого необходимо быть зарегистрированным пользователем и войти в систему.' >
                        <a href='ahp-session-admin.php'>Мои AHP проекты</a></span></li>
                        <li><span style='cursor:help;' 
                        title='Калькулятор приоритетов AHP вычисляет приоритеты или веса для набора критериев на основе попарных сравнений.' >
                        <a href='ahp-calc.php'>Калькулятор приоритетов AHP</a></span></li>
                        <li><span style='cursor:help;' 
                        title='Принятие решений с использованием AHP. Определите иерархию критериев и оцените альтернативы.' >
                        <a href='ahp-hierarchy.php'>Иерархии AHP</a></span></li>
                        <li><span style='cursor:help;' 
                        title='Примите участие в групповых сессиях AHP для оценки критериев или альтернатив в качестве участника группы.' >
                        <a href='ahp-hiergini.php'>Групповые сессии AHP</a></span></li>
                        <li><span style='cursor:help;' 
                        title='Анализ консенсуса в группе' >
                        <a href='ahp-cluster.php'>Анализ кластеров группового консенсуса </a></span> 
                        <small>(экспериментальный)</small></li>
                        </ol>",

    'intro13'    =>    "<p style='text-align:justify;'>
                        При использовании разделов 'Калькулятор приоритетов AHP' и 'Иерархии AHP' вы можете экспортировать результаты в формате CSV (значения, разделенные запятыми) для дальнейшей
                        обработки в Excel.</p>",

    'intro14'    =>    "<p style='text-align:justify;'>
                        <b>Перед использованием, пожалуйста, ознакомьтесь</b> 
                        <a href='https://bpmsg.com/about/user-agreement-and-privacy-policy/' >
                        с пользовательским соглашением и политикой конфиденциальности.</a> (на английском языке)</p>",

    'intro15'    =>    "<p style='text-align:justify;'>
                        Если Вам понравилась наше веб-решение, <span class='err'>пожалуйста, подумайте о помощи и рассмотрите возможность 
                        <a href='ahp-news.php'>пожертвования</a> для поддержки сайта</span>.</p>",

    'intro16'    =>    "<p><b>При публикации ваших научных работ используйте ссылку:</b><br>
                        <code>Goepel, K.D. (2018). Implementation of an Online Software Tool for the Analytic Hierarchy 
                        Process (AHP-OS). <i>International Journal of the Analytic Hierarchy Process</i>, Vol. 10 Issue 3 2018, pp 469-487,
                        <br><a href='https://doi.org/10.13033/ijahp.v10i3.590'>https://doi.org/10.13033/ijahp.v10i3.590</a>
                        </code></p>",

    'intro21'    => "<h3>Введение</h3>
                        <div style='display:inline;'>
                        <img src='images/AHP-icon-150x150.png' alt='AHP' style='float: left; height:15%; width:15%; padding:5px;'>
                        </div><div class='entry-summary'><p style='text-align:justify;'>
                        AHP (МАИ) расшифровывается как <i>Analytic Hierarchy Process (Метод Анализа Иерархий)</i>. Это метод 
                        поддержки принятия многокритериальных решений, разработанный профессором Томасом Л. Саати. В AHP используется 
                        <i>шкала отношений</i> на основе парных сравнений критериев (суждений) и допускаются некоторые небольшие несоответствия в суждениях.
                        Входными данными могут быть как фактические измеримые данные, так и субъективные мнения (суждения). 
                        В результате будут рассчитаны <i>приоритеты</i> (веса) и <i>коэффициент согласованности</i> суждений.
                        В международной практике AHP используется в широком спектре приложений, например, для оценки
                         поставщиков в области управления проектами, в процессе найма персонала или оценке эффективности компании.</p></div>",

    'intro22'    =>"    <div style='display:block;clear:both;'>
                        <h3>Преимущества AHP</h3>
                        <p style='text-align:justify;'>
                        Использование AHP в качестве вспомогательного инструмента для принятия решений поможет
                        <i>лучше разобраться в сложных задачах принятия решений.</i>
                        Поскольку вам будет необходимо структурировать рассматриваемую проблему в виде иерархии, 
                        это заставит вас продумать ее наполнение, рассмотреть возможные критерии принятия решения и выбрать
                        из них наиболее значимые с точки зрения цели решения. Использование попарных сравнений 
                        позволит обнаружить и исправить логические несоответствия.
                        Метод также позволяет \"переводить\" субъективные суждения, такие как предпочтения или ощущения,
                        в измеримые числовые соотношения. AHP помогает принимать решения более рациональным образом и делать их более прозрачными и понятными.
                        </p>",

    'intro23'    =>"    <h3>Метод</h3>
                        <p style='text-align:justify;'>
                        Математически метод AHP представляет из себя задачу по вычислению собственных значений. 
                        Результаты попарного сравнения суждений записываются в виде обратно-симметричной матрицы.
                        Нормализованный собственный вектор этой матрицы определяет коэффициенты (веса) в иерархии,
                        а собственное значение матрицы определяет коэффициент согласованности суждений.
                        </p>",

    'intro24'    =>"    <h3>Примеры AHP</h3>
                        <p style='text-align:justify;'>
                        Чтобы упростить понимание метода и показать широкий спектр возможных применений, 
                        мы приводим несколько <a href='ahp-examples.php'>примеров</a> (на англ.) для различных иерархий в области принятия решений.
                        </p>
                        <p style='text-align:justify;'>
                        Простое введение в метод AHP приведено <a href='docs/AHP-articel.Goepel.en.pdf' target='_blank'>здесь</a> (англ.).
                        </p></div>"
    );

    public $tbl    = array(
    'grTblTh'    =>     "\n<thead><tr class='header'><th>Participant</th>",
    'grTblTd1'   =>    "<td><strong>Group result</strong></td>"
    );
}
