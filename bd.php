<?php
require_once 'connect.php';

/*
 * Создаем переменные со значениями, которые были получены с $_POST
 */
$name = $_POST['name'];
$surname = $_POST['surname'];
$city = $_POST['city'];
$email = $_POST['email'];
$number = $_POST['number'];

/*
 * Делаем запрос на добавление новой строки в таблицу products
 */

mysqli_query($connect,"INSERT INTO `info` (`name`, `surname`, `number`, `email`, `city`) VALUES (	'$name', '$surname', '$number', '$email', '$city')");

