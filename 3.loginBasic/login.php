<?php
echo "db save information <br>";
$dbusername="aziz";
$dbuserpassword="123";
echo $dbusername . "<br>";
echo $dbuserpassword;
echo "<hr>";


echo "user input information" . "<br>";
$userinput=$_REQUEST['username'];
$userpassword=$_REQUEST['password'];
echo $userinput . "<br>" ;
echo $userpassword;
echo "<hr>";

if ($dbusername==$userinput && $dbuserpassword==$userpassword ) {
    echo "login successful";
}else {
    echo "login failed";
}

?>