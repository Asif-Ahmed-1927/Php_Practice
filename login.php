<?php
echo "DB Information: <br>";
$dbUserName= "asifbin8@gmail.com";
$dbPassword= "12345";

echo $dbUserName;
echo"<br>";
echo $dbPassword;

echo"<hr>";

echo "User Information: <br>";
$user= $_REQUEST['username'];
$pass= $_REQUEST['password'];

echo $user;
echo"<br>";
echo $pass;

echo"<hr>";




?>