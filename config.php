<?php
define('DB_SERVER', 'localhost');
define('DB_USERNAME' , 'root');
define('DB_PASSWORD' , '');
define('DB_NAME' , 'login-system');

$link = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);

if ($link==false)
{
      die(" Error: Couldn't connect :" . mysqli_connect_error());
}
?>