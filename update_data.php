
<?php

$connection = mysqli_connect('localhost', 'root', '', 'user');

if(!$connection){
    die ("Not Connected.". mysqli_error($connection));
}

if(isset($_REQUEST['submit'])){

    $user= $_REQUEST['username'];
    $email= $_REQUEST['email'];
    $pass= $_REQUEST['password'];
    $hidden_id= $_REQUEST['update_hidden_id'];

    $update_query= "UPDATE user_info SET username=' $user', email='$email', password='$pass' WHERE Id= $hidden_id" ;

    $final_update_query= mysqli_query($connection, $update_query);

    if($final_update_query){
        header("location: index.php?updated");
    }

}
?>