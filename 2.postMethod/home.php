<?php
    echo "<pre>";
    print_r($_POST);  //post method er jonno localhost server vslue gulo  jegulo open dekaccilo ,,segulo hide hye jabe
    echo"</pre>";


    $name= $_POST['username']; //ai username ti holo test.php er input tag er name ti.

    $pass= $_POST['password'];  //ai password ti holo test.php er input password tag er name password ti 

    echo $name;
    echo "<br>";
    echo $pass;

?>