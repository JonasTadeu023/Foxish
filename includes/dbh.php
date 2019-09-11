<?php
define('HOST', 'localhost');
define('USER', 'root');
define('PASSWORD', '');
define('BD', 'foxish');

$conn = mysqli_connect(HOST, USER, PASSWORD, BD) or die("No possible conectar ao bd");
