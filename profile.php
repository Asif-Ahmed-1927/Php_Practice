<pre>
<?php

$pro = $_FILES['profile'];

$name= $pro["name"];
$type= $pro["type"];
$tmp_name= $pro["tmp_name"];



if(!empty($name)){
    $loc= "includes/";
    if(move_uploaded_file($tmp_name , $loc.$name)){
        echo "file upload successfuly. <br>";
        $path = $loc.$name;
        echo "<img src='$path' width='200' height='200'>";


    }else{
        echo "failed";
    }
}else{
    echo "file not found";
}





?>



</pre>