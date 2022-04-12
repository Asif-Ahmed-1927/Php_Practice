<?php require "includes/link_style.php"; ?>

<!-- <form action="home.php" method="get">

<input type="text" name="username" placeholder="username"><br><br>
<input type="password" name="password" placeholder="password"><br><br>
<input type="submit" value="submit"> -->

<!-- login -->

<!-- <form action="login.php" method="post">
    <input type="text" name="username" placeholder="username">
    <input type="password" name="password" placeholder="password">
    <input type="submit" value="submit" name="submit">
</form> -->

<!-- redirect -->

<!---<form action="home.php" method="post">
    <input type="text" name="username" placeholder="username"><br><br>    
    <input type="password" name="password" placeholder="password"><br><br>    
    <input type="submit" value="submit" name="submit">    

</form> -->

<!-- uploading file -->

<!-- <form action="profile.php" method="post" enctype="multipart/form-data">
    <input type="file" name="profile" placeholder="username"><br><br>    
    <input type="submit" value="upload">    

</form> -->

<!-- login validation -->

<!-- <form action="login.php" method="get">

    <input type="text" name="username" placeholder="username"><br><br>    
    <input type="email" name="email" placeholder="email"><br><br>    
    <input type="password" name="password" placeholder="password"><br><br>    
    <input type="submit" value="submit">

</form>-->

 <?php

//if(isset($_REQUEST['wrongPass'])){
    //echo $_REQUEST['wrongPass'];

//}


?> 

<!-- PASS ENCRYPTED -->

<!-- <form action="login.php" method="get">

    <input type="text" name="username" placeholder="username"><br><br>    
    <input type="email" name="email" placeholder="email"><br><br>    
    <input type="password" name="password" placeholder="password"><br><br>    
    <input type="submit" value="submit">

</form> -->

<!-- cookie -->

<?php

// $name= "user";
// $value="Asif";

// setcookie($name, $value, time()+20);

// if (isset($_COOKIE['user'])){
//     echo "saved cookie is= {$_COOKIE['user']}";
// }else{
//     echo "Cookie is not set";
// }

//session

// session_start();

// $_SESSION['user']="Asif"

?>

<!-- Database connect -->


<?php

if (isset($_POST['submit'])){
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    $connection = mysqli_connect('localhost', 'root', '', 'user');

    if(!$connection){
        die ("Not Connected.". mysqli_error());
    }

    $query = "INSERT INTO user_info (username, email, password) VALUES ('$username', '$email', '$password')";

    $result= mysqli_query($connection, $query);

     if(!$result){
        die ("Insert not success" . mysqli_error());
     }
}

?>


<form action="test.php" method="post">

    <input type="text" name="username" placeholder="username" autocomplete="on"><br><br>    
    <input type="email" name="email" placeholder="email" autocomplete="on"><br><br>    
    <input type="password" name="password" placeholder="password" autocomplete="on"><br><br>    
    <input type="submit" value="submit" name="submit">

</form>

<?php require 'includes/footer.php';?>
