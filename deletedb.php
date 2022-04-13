<?php    

$connection = mysqli_connect('localhost', 'root', '', 'user');

if(!$connection){
    die ("Not Connected.". mysqli_error($connection));
}

$recv= $_REQUEST['Id'];

$query= "DELETE FROM user_info WHERE Id = $recv";

$run_delete_query= mysqli_query($connection, $query);

if($run_delete_query){
    header("location: index.php?deleted");
}


?>