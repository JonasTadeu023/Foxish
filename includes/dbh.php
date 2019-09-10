<?php
define('HOST', 'localhost');
define('USER', 'dar');
define('PASSWORD', 'usbw');
define('BD', 'foxish');

$conn = mysqli_connect(HOST, USER, PASSWORD, BD) or die("No possible conectar ao bd");
