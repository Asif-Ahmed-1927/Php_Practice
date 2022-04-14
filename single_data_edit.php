<?php require "includes/link_style.php"; ?>

<?php    

$connection = mysqli_connect('localhost', 'root', '', 'user');

if(!$connection){
    die ("Not Connected.". mysqli_error($connection));
}

if(isset($_REQUEST['edit_id'])){
    $recv_id= $_REQUEST['edit_id'];

    $get_info= "SELECT * FROM user_info where id = $recv_id";

    $select_info= mysqli_query($connection, $get_info);
    
    while($row= mysqli_fetch_assoc($select_info)){

    
?>

<form action="update_data.php" method="post">

<input type="text" name="username" value= "<?php echo $row['username'];?>" placeholder="username"><br><br>    
<input type="email" name="email" value= "<?php echo $row['email'];?>" placeholder="email"><br><br>    
<input type="password" name="password" value= "<?php echo $row['password'];?>" placeholder="password"><br><br>    
<input type="submit" value="update data" name="submit">
<input type="hidden" name="update_hidden_id" value="<?php echo $recv_id; ?>">


</form>


<?php
    }
}



?>

