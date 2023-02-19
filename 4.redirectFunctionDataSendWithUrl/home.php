<?php
$user= $_REQUEST['username'];
$pass= $_REQUEST['password'];

echo $user . "<br>";
echo $pass;

if ($user=="google") {

    header("location: http://www.google.com");
}elseif ($user=="show") {
    header("location:show.php?test=$user");
}
else {
    echo "didn't find location";
}


?>


 <!--
    1.username a google likhle,., header er vitor duke ,,goole link a jabe
    2.username a show likhle ,,,header file a dukbe ,,amra location create kore disi
    new php file shop.php a jno jai,,,sekane amnite jabe na ,,setar jonno question 
    mark kore test=temporary file crete korte hba .
    temporary file a $user k reke diyeci,,ja amra username a likhi .
    3.jodi uporer conditionm thik na thake tahole else run hba sudu
 -->