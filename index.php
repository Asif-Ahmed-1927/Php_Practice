<?php require "includes/link_style.php"; ?>

<?php    

$connection = mysqli_connect('localhost', 'root', '', 'user');

if(!$connection){
    die ("Not Connected.". mysqli_error($connection));
}

$query= "SELECT * FROM user_info";

$adanprodan= mysqli_query($connection, $query);

$count= mysqli_num_rows($adanprodan);

if($count > 0){

?>

<table class="table">
    <thead>
        <tr>
            <th>ID</th>
            <th>NAME</th>
            <th>EMAIL</th>
            <th>PASSWORD</th>
            <th>ACTION</th>
        </tr>

    </thead>

<?php    

while($row= mysqli_fetch_assoc($adanprodan)){

    $db_Id= $row['Id'];
    $username= $row['username'];
    $email= $row['email'];
    $password= $row['password'];
?>

<tbody>
        <tr>
            <td><?php echo $db_Id ?></td>
            <td><?php echo $username ?></td>
            <td><?php echo $email ?></td>
            <td><?php echo $password ?></td>
            <td><a href="#">DELETE</td>
        </tr>
    </tbody>

<?php
}
?>
</table>

<?php
}else{
echo "You dont have any data on your database";
}

?>

<?php require 'includes/footer.php';?>