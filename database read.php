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


while($row= mysqli_fetch_assoc($adanprodan)){

    // echo "<pre>";

    // print_r($row);

    // echo "</pre>";

    echo "{$row['Id']}";
    echo"<br>";

    echo"{$row['username']}";
    echo"<br>";

}

echo "$count";

}else{
echo "You dont have any data on your database";
}

?>

// read database end

<?php require 'includes/footer.php';?>