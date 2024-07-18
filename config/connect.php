<?php
define('HOST', 'MySQL-8.2');
define('USER', 'root');
define('PASSWORD', '');
define('DATABASE', 'demisTest');


$connect = mysqli_connect(HOST, USER, PASSWORD, DATABASE);


if (!$connect) {
    die('Error connect to database!');
}