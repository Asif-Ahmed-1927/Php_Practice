<?php require "includes/link_style.php"; ?>
<?php

if (isset($_POST['submit'])){
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    if($username && $email && $password){


    $connection = mysqli_connect('localhost', 'root', '', 'user');

    if(!$connection){
        die ("Not Connected.". mysqli_error($connection));
    }

    $query = "INSERT INTO user_info (username, email, password) VALUES ('$username', '$email', '$password')";

    $result= mysqli_query($connection, $query);

     if(!$result){
        die ("Insert not success" . mysqli_error());
     }
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
