<?php 
require 'rb/rb.php';

R::setup('mysql:host=localhost;dbname=db_test','root','root');
R::freeze(false);

if(!R::testConnection()){
	exit('нет подключения к БД');
}else{
	echo 'есть подключение';
}

/*$id = 1;

R::exec('DELETE FROM `test` WHERE `id` = :id', array(':id' => $id));*/

R::ext('xdispense', function($name){
	return R::getRedBean()->dispense($name);
});


$user = R::xdispense('user_names');
$user->name = 'valera';
$user->age = 27;
$user->country = 'Russia';
$user->city = 'Krasnodar';
$user->citys = 'Krasnodar';
R::store($user);