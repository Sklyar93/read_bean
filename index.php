<?php 
require 'rb/rb.php';

R::setup('mysql:host=localhost;dbname=db_test','root','root');

if(!R::testConnection()){
	exit('нет подключения к БД');
}else{
	echo 'есть подключение';
}