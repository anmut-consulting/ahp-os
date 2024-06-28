<?php
/* Text for AhpDb.php */

class AhpDbRU
{
    public $titles = array(
    'h3pDat'	=>	"<h3>Данные проекта</h3>",
    'h3pPart'	=>	"<h3>Участники проекта</h3>\n",
    'h3pAlt'	=>	"<h3>Проектные альтернативы</h3>"   //Project Alternatives
    );

    public $err = array(
    'dbType'	=>	"Отсутствует тип базы данных SQL: ",      //No such SQL Database type
    'scInv'		=>	"Неправильный код сессии ",            //Invalid Session Code 

    'scInUse'	=>	"Используемый код сессии ",             //Session code in use
    'dbWrite'	=>	"Не удалось сохранить данные в базу данных. Пожалуйста, повторите попытку позже.",   //Data could not be written to the database. Please try again later
    'dbWriteA'	=>	"Ошибка базы данных, не удалось сохранить альтернативы ",            //Database error, could not store alternatives
    'dbUpd'		=>	"Не удалось обновить данные. Пожалуйста, повторите попытку позже.",       //Data could not be updated. Please try again later
    'dbSubmit'	=>	"Данные успешно отправлены ",                                  //Data already submitted
    'noSess'	=>	"Нет сохраненных сессий ",                                      //No stored sessions
    'dbReadSc'	=>	"Ошибка базы данных при получении данных для ",                         //Database error getting data for
    'pClosed'	=>	"Проект закрыт. Ввод данных для попарного сравнения невозможен.", //Project is closed. No pairwise comparison input allowed
    'pNoMod'	=>	"В проекте есть участники, иерархия не может быть изменена."   //Project has participants, hierarchy cannot be modified
    );

    public $msg = array(
    'noSess' 		=> "Нет сохраненных сессий"
    );

    public $tbl = array(
    'scTblTh'	=> "<thead><tr>
					<th>Нет</th>
					<th>Сессия</th>
					<th>Проект</th>
					<th>Тип<sup>1</sup></th>
					<th>Статус</th>
					<th>Описание</th>
					<th>Часть.<sup>2</sup></th>
					<th>создано</th></tr></thead>",
    'scTblFoot'	=> 	"<tfoot><tr><td colspan='8'>
					<sup>1</sup> H: Иерархия приоритетных оценок, A: Альтернативная оценка, 
					<sup>2</sup> Количество участников</td>
					</tr></tfoot>",
    'pdTblTh'	=>	"<thead><tr>
					<th>Поле</th>
					<th>Содержание</th></tr></thead>\n",
    'pdTblR1'	=>	"<tr><td>Код сессии</td><td class='res'>%s</td></tr>\n",
    'pdTblR2'	=>	"<tr><td>Название проекта</td><td class='res'>%s</td></tr>\n",
    'pdTblR3'	=>	"<tr><td>Описание </td><td class='res'>%s</td></tr>\n",
    'pdTblR4'	=>	"<tr><td>Автор</td><td class='res'>%s</td></tr>\n",
    'pdTblR5'	=>	"<tr><td>Дата</td><td class='res'>%s</td></tr>\n",
    'pdTblR6'	=>	"<tr><td>Статус</td><td class='res'>%s</td></tr>\n",
    'pdTblR7'	=>	"<tr><td>Тип</td><td class='res'>%s</td></tr>\n",
    'paTblTh'	=>	"<thead><tr>
					<th>Нет</th>
					<th>Альтернатив</th>
					</tr></thead>\n",
    'ppTblTh'	=>	"<thead><tr>
					<th>Нет</th>
					<th>Выбр</th>
					<th>Имя</th>
					<th>Дата</th>
					</tr></thead>\n",
    'ppTblLr1'	=>	"<tr><td colspan='4'><input id='sbm0' type='submit' name='pselect' value='Refresh Selection'>&nbsp;<small>
					<input class='onclk0' type='checkbox' name='ptick' value='0' ",
    'ppTblLr2'	=>	">&nbsp;check all&nbsp;<input class='onclk0' type='checkbox' name='ntick' value='0' ",
    'ppTblLr3'	=>	">&nbsp;uncheck all</small></td></tr>",
    'ppTblFoot'	=>	"<tfoot><tr><td colspan='4'>
					<small>ли не выбрано ни одно из них, будут включены все.</small>
					</td></tr></tfoot>"
    );

    public $info = array(
    'shPart'		=> "<p><span class='var'>%g</span> участники. 
					<button class='toggle'>Показать/Скрыть</button> все.</p>"
    );
}
