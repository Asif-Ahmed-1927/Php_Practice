<!-- passwprd generate -->

<?php

$all_keys= array('a','b','c','d','e','f','g','A','B','C','D','E','F','G','H','=','@','1','2','3','4','5','6','7','8','9','0','#','$','%','^','*','_+','?','/','!',':',';','~','`','&');

$length= array(8,9,10,11,12,13,14,15);

shuffle($length);
$final_length= $length[0];

echo"<br/> Password length is $final_length <br/> <br/>";
$str= "";

for($i=0; $i< $final_length; $i++){
    shuffle($all_keys);
    $str= $str.$all_keys[0];
}

echo "<br> Your rendom pass: $str";






















?>