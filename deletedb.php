<?php    

$connection = mysqli_connect('localhost', 'root', '', 'user');

if(!$connection){
    die ("Not Connected.". mysqli_error($connection));
}




?>