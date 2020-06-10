<?php 
require 'rb/rb.php';

R::setup('mysql:host=localhost;dbname=db_test','root','root');

if(!R::testConnection()){
	exit('нет подключения к БД');
}else{
	echo 'есть подключение';
}

/*$id = 1;

R::exec('DELETE FROM `test` WHERE `id` = :id', array(':id' => $id));*/

$user = R::dispense('user');
$user->name = 'valera';
$user->age = 27;

R::store($user);