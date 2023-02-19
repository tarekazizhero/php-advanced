<?php

$name=$_REQUEST['username'];
$email=$_REQUEST['email'];
$pass=$_REQUEST['password'];



 $hash_format="$6$";
 $salt="kjefefioef22";
  $varCon= $hash_format . $salt;

  echo $pass;
  echo "<br>";
  echo crypt($pass, $varCon);


   ?>

   <!-- 
            1.1st a login page theke ai page a udername ,password,email diye dhorsi.
            2.then hash_format hisebe bebohar korsi "$6$" ja   https://www.php.net/manual/en/function.crypt.php
                ai link theke format gula nite pari
            3. #salt ai variable akta long kisu add korsi
            4.$barCon a aksathe kore nisi
            5. then crypt function a user deya password er sathe ,,ai password ak kore disi
   ->