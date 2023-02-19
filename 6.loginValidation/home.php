<?php
 $name=$_REQUEST['username'];
$email=$_REQUEST['email'];
 $pass=$_REQUEST['password'];


 echo $name . $email . $pass  ;

 $countpass=strlen($pass);

if ($countpass>=5 && $countpass<=10) {
    echo "successfull";
} else {
   header("location: login.php?wrongpass=wrong password= $pass please enter a correct password");
}


?>

<!-- 
    1.if condition match hyle success
    2.match na hole bole disi header diye j,,,tumi aabr login a jao,,and sekane giye wrongpass variable k niye dhoro.    
->