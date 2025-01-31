<?php
    /* used for both login and registration */

    class LoginRU
    {
        public $titles = array(
        "h1edit"    => "Изменить свои данные",
        "h2info"    => "Информация об учетной записи",
        "h2act"     => "Последняя активность",
        "h2lgin"    => "Пожалуйста, войдите",
        "h1reg"     => "Регистрация пользователя",
        "h2reg"     => "Форма регистрации",
        "h1pwR"     => "Сброс пароля"
    );

        public $err  = array(
        "aNact"     =>  "Ваша учетная запись еще не активирована. Пожалуйста, нажмите на ссылку подтверждения в письме.",
        "dbCon"     =>  "Проблема подключения к базе данных.",
        "emlE"      =>  "Поле 'Электронная почта' не может быть пустой",
        "emlL"      =>  "Поле 'Электронная почта' не может быть длиннее 64 символов",
        "emlD"      =>  "Извините, этот адрес электронной почты совпадает с вашим текущим. Пожалуйста, выберите другой.",
        "emlI"      =>  "Ваш адрес электронной почты не соответствует формату электронной почты",
        "emlR"      =>  "Этот адрес электронной почты уже зарегистрирован. Пожалуйста, используйте страницу \"Я забыл мой пароль\", если не помните его.",
        "emlNc"     =>  "К сожалению, не удалось изменить адрес вашей электронной почты.",
        "emlVns"    =>  "Извините, мы не смогли отправить вам письмо для подтверждения. Ваша учетная запись НЕ была создана.",
        "emlNs"     =>  "Письмо для подтверждения НЕ было отправлено! Ошибка: ",
        "pwW"       =>  "Ошибка входа. Попробуйте еще раз.",
        "pwW3"      =>  "Вы уже ввели неверный пароль 3 или более раз. Пожалуйста, подождите 30 секунд, прежде чем повторить попытку.",
        "pwS"       =>  "Пароль должен содержать не менее 6 символов",
        "pwE"       =>  "Поле пароля было пустым",
        "pwNi"      =>  "Пароль и кго повтор не совпадают",
        "pwCf"      =>  "Извините, смена вашего пароля не удалась.",
        "pwRf"      =>  "Письмо для сброса пароля НЕ было успешно отправлено! Ошибка: ",
        "pwOw"      =>  "Ваш СТАРЫЙ пароль был неверным.",
        "unNe"      =>  "Такого пользователя/электронной почты не существует",
        "unTk"      =>  "Извините, это имя пользователя уже занято. Пожалуйста, выберите другое.",
        "unIv"      =>  "Имя пользователя не соответствует формату: разрешены только a-Z и цифры, от 2 до 64 символов",
        "unDb"      =>  "Извините, это имя пользователя совпадает с вашим текущим. Пожалуйста, выберите другое.",
        "unF"       =>  "Извините, переименование вашего имени пользователя не удалось",
        "unE"       =>  "Поле имени пользователя было пустым",
        "unL"       =>  "Имя пользователя не может быть короче 2 или длиннее 64 символов",
        "lnkExp"    =>  "Истек срок действия вашей ссылки для сброса пароля. Пожалуйста, используйте ссылку для сброса пароля в течение одного часа.",
        "lnkE"      =>  "Пустые данные параметра ссылки.",
        "regF"      =>  "Извините, ваша регистрация не удалась. Пожалуйста, вернитесь назад и попробуйте еще раз.",
        "wVc"       =>  "Извините, нет такой комбинации id/кода подтверждения...",
        "iCk"       =>  "Недопустимый файл куки",
        "wCp"       =>  "Капча была неправильной!"
    );

        public $msg = array(
        "lgOut"     =>  "Вы вышли из системы.",
        "emlN"      =>  "Пожалуйста, укажите действительный адрес электронной почты!",
        "emlCok"    =>  "Ваш адрес электронной почты был успешно изменен. Новый адрес электронной почты: %s",
        "unCok"     =>  "Ваше имя пользователя было успешно изменено. Новое имя пользователя: ",
        "pwCok"     =>  "Пароль успешно изменен!",
        "pwRms"     =>  "Письмо для сброса пароля успешно отправлено!",
        "aOk"       =>  "Ваша учетная запись была успешно активирована. Пожалуйста, войдите, чтобы завершить процесс!",
        "regOk"     =>  "Ваша учетная запись была успешно создана, и мы отправили вам письмо (проверьте также папку со спамом).
                        Нажмите на ССЫЛКУ ПОДТВЕРЖДЕНИЯ в этом письме, чтобы активировать свою учетную запись.",
        "verOk"     =>  "Ваша учетная запись была успешно активирована. ",
        "deact"     =>  "Учетная запись %s была успешно деактивирована",
        "deactm"    =>  " и отправлено письмо для повторной активации."
    );

        public $info = array(
        "reg"     =>    "Пожалуйста, заполните форму ниже для регистрации и укажите действительный адрес электронной почты.",
        "delA"    =>    "<p><span class='err'>далить учетную запись и все связанные с ней данные</span>.
                        Ваша учетная запись будет немедленно деактивирована, и вы получите письмо с ссылкой для повторной активации.
                        Если вы не активируете повторно учетную запись, все данные учетной записи и все связанные данные будут удалены полностью через два дня.</p>",
        "conf"    =>    "Регистрируясь, я даю согласие на получение электронных писем для повторной активации после каждого трехмесячного периода неактивности учетной записи.
                        Если учетная запись не будет повторно активирована в течение 48 часов, моя учетная запись и все данные будут автоматически удалены.",
        "pwRes"   =>    "Введите свой адрес электронной почты, и вы получите письмо с инструкциями:<br>",
        "nlgin"   =>    "Вам необходима учетная запись для доступа к этому сайту.",
        "nReg"    =>    "Пожалуйста, обратитесь к <a href='mailto:webmaster@bpmsg.com'>вебмастеру</a>, чтобы зарегистрировать учетную запись."
    );

        public $wrd = array(
        "crC"     =>  "Изменить свои данные здесь:",
        "emlC"    =>  "Изменить электронную почту",
        "emlN"    =>  "Новая электронная почта:",
        "pwC"     =>  "Изменить пароль",
        "pwO"     =>  "СТАРЫЙ пароль:",
        "pwN"     =>  "Новый пароль:",
        "pwNr"    =>  "Повторите новый пароль:",
        "unC"     =>  "Изменить имя пользователя",
        "unN"     =>  "Новое имя пользователя (от 2 до 30 символов, azAZ09):",
        "delA"    =>  "Удалить мою учетную запись",
        "cont"    =>  "Продолжить",
        "done"    =>  "Готово",
        "eml"     =>  "Электронная почта пользователя (пожалуйста, предоставьте действительный адрес электронной почты, вы получите письмо для подтверждения с ссылкой для активации)",
        "pw"      =>  "Пароль (минимум 6 символов!)",
        "pwr"     =>  "Повторите пароль",
        "un"      =>  "Имя пользователя (только буквы и цифры, от 2 до 30 символов)",
        "pwRes"   =>  "Сбросить мой пароль",
        "pwSbm"   =>  "Отправить новый пароль",
        "hlPw"    =>  "пароль",
        "hlUn"    =>  "имя пользователя или электронная почта",
        "hlAc"    =>  "Учетная запись",
        "hlLo"    =>  "Выйти",
        "hlFg"    =>  "забыли?",
        "hlReg"   =>  "Зарегистрироваться",
        "hlWlc"   =>  "Добро пожаловать "
    );

        public $tbl = array(
        "tbEdTd1"  =>  "ID пользователя:",
        "tbEdTd2"  =>  "Имя пользователя:",
        "tbEdTd3"  =>  "Электронная почта:",
        "tbEdTd4"  =>  "Зарегистрирован с:",
        "tbEdTd5"  =>  "Запомнить куки:"
    );
}
