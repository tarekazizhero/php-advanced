<?php
  $all_key=array('a','b','c','d','f','e','g','h','i','j','k','l','m','n','o','p','q','r','s','A','S','D','F','G','H','J','K','L','Z','X','C','V','B','N','M','.','?','%','#','@','$','1','2','3','4','5','6','7','8','9','0');

  shuffle($all_key); //suffle mane uporer key theke randomly nibe jekono key
echo $all_key[4]; //randomly 1 ti kore dekabe

echo "<br>";

$length=array(8,9,10,11,12,13,14,15,16,17);
 shuffle($length);
 $final=$length[0];
echo "password length is $final ";

echo "<br>";

$str=" ";

for ($i=0; $i < $final; $i++) { 
    shuffle($all_key);
    //echo $all_key[0];
    $str .=$all_key[0]; //$str=$str . $all_key
    echo "<br> your final passworde is . $str";
}





?>