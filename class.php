<?php
session_start();
class User{

public $name;
public $surname;
public $role;
public $lang;

public function __construct($role, $name,$surname,$lang)
	{
		$this->role = $role;
		$this->name = $name;
		$this->surname = $surname;
		$this->lang = $lang;
	}

public function printInf()
   {
	    echo lang::trans('Hello').' '.lang::trans($_SESSION['role']).' '.lang::trans($_SESSION['name']).'.<br/><br/>';
 	}

}


class admin extends user{
	
public function printInf()
   {
   		parent::printInf();
   	    echo lang::trans('Admin information');
 	}
}

class client extends user{

public function printInf()
   {
   	    parent::printInf();
   	    echo lang::trans('Client information');
 	}
}

class manager extends user{

public function printInf()
   {
     	parent::printInf();
		echo lang::trans('Manager information'); 	
	}	
}

class lang {

public static $translate=[
		'ru'=>['Hello'=>'Привет', '3'=>'админ', '2'=>'менеджер', '1'=>'клиент', 'Василий'=>'Василий','Афанасий'=>'Афанасий','Петр'=>'Петр','Педро'=>'Педро','Александр'=>'Александр','Admin information'=>'Информация администраторов', 'Manager information'=>'Информация менеджера','Client information'=>'Информация клиента', 'Continue'=>'Продолжить', 'Log out'=>'Выйти','Choose'=>'Выбрать', 'Users List'=>'Список пользователей', 'Add new user'=>'Добавить нового пользователя', 'Back'=>'Назад', 'Choose your language'=>'Выберите ваш язык', 'Find'=>'Поиск', 'Add'=>'Добавить', 'Change'=>'Изменить', 'User'=>'Пользователь', 'successfully deleted'=>'успешно удален', 'Select a category'=>'Выберите категорию', 'Settings'=>'Настройки'],
		'en'=>['Hello'=>'Hello','3'=>'admin', '2'=>'manager', '1'=>'client', 'Василий'=>'Vasisualiy','Афанасий'=>'Afanasiy','Петр'=>'Petro','Педро'=>'Pedro','Александр'=>'Sasha', 'Admin information'=>'Admin information', 'Manager information'=>'Manager information','Client information'=>'Client information','Continue'=>'Continue', 'Log out'=>'Log out','Choose'=>'Choose', 'Users List'=>'Users list', 'Add new user'=>'Add new user', 'Back'=>'Back', 'Choose your language'=>'Choose your language', 'Find'=>'Search', 'Add'=>'Add', 'Change'=>'Change', 'User'=>'User', 'successfully deleted'=>'successfully deleted', 'Select a category'=>'Select a category', 'Settings'=>'Settings'],
		'uk'=>['Hello'=>'Привіт','3'=>'адмін','2'=>'менеджер', '1'=>'клієнт','Василий'=>'Василь','Афанасий'=>'Афанасій','Петр'=>'Петро','Педро'=>'Педро','Александр'=>'Олександр','Admin information'=>'Iнформація адміністраторів', 'Manager information'=>'Інформація менеджера','Client information'=>'Інформація клієнта','Continue'=>'Продовжити', 'Log out'=>'Вийти','Choose'=>'Вибрати', 'Users List'=>'Список користувачів', 'Add new user'=>'Додати нового користувача','Back'=>'Назад', 'Choose your language'=>'Виберіть вашу мову', 'Find'=>'Пошук', 'Add'=>'Добавити', 'Change'=>'Змінити', 'User'=>'Користувач', 'successfully deleted'=>'успішно видалений', 'Select a category'=>'Оберіть категорію', 'Settings'=>'Настройки'],
];


public static function trans($text)
	{

	if (empty($_SESSION['lang']))
		{
			$_SESSION['lang']='ru';
		}
    return self::$translate[$_SESSION['lang']][$text];
    }

}	

function auth(){
	if (empty($_SESSION['role'])){
			return null;
		}
	
	if ($_SESSION['role']=='3'){
		return new admin($_SESSION['role'],$_SESSION['name'],$_SESSION['surname'],$_SESSION['lang']);
	}
	if ($_SESSION['role']=='2'){
		return new manager($_SESSION['role'],$_SESSION['name'],$_SESSION['surname'],$_SESSION['lang']);
	}
	if ($_SESSION['role']=='1'){
		return new client($_SESSION['role'],$_SESSION['name'],$_SESSION['surname'],$_SESSION['lang']);
	}
}

?>