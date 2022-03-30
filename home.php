<?php require 'includes/link_style.php';


// $usr= $_GET ['username'];
// $pass= $_GET ['password'];

// $usr= $_POST['username'];
// $pass= $_POST ['password'];

$usr= $_REQUEST ['username'];
$pass= $_REQUEST ['password'];


echo "<a href='https://www.google.com'>{$_REQUEST['username']}</a>";
echo $_REQUEST ['password'];

require 'includes/footer.php';?>
