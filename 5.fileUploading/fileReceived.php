<?php

$pro= $_FILES['profile'];


/**?
 echo "<pre>";
print_r($picture);
echo "</pre>";
 */

 echo $name= $pro['name'];
 echo "<br>";
echo $type= $pro['type'];
echo "<br>";
echo $tmp_name= $pro['tmp_name'];
echo "<br>";
echo $error= $pro['error'];
echo "<br>";
$size= $pro['size'];

echo floor($size/1000) . "kb";

echo "<br>";

if (!empty($name)) {
    $loc="uploads/";
    move_uploaded_file($tmp_name, $loc . $name );
    echo "successfully file uploaded";
    $path= $loc . $name;
    echo "<br>";
    echo "<img src='$path' width='300px' height='300px' >";

}else {
    echo "file not upload";
}





?>


<!-- 
    1.prothome amra profile diye ager page er file k dhorsi
    2.print_r diyeo array dekte pari image er
    3.abar amra associative array te key and value jevabe kaj hy ,,sevabe
    key ke niye ,,array er bivinno content dekte pari
    4.if else condition
    akane amra upload krito file k upload nam a folder a raksi
    then setake $name location diye complete korsi,,finally folder a pic joma hy
    5. then amra image a website dekar jonno img tag bebohar korsi
-->