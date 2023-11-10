<?php

$server ="localhost";
$user ="u695223803_shivam123";
$password ="|05#nSb1V";
$db ="u695223803_shiv";

$conn= mysqli_connect($server,$user,$password,$db);

if ($conn) {
    /*?>
    <script>
        alert("Connection Sucessfully");
    </script>
    <?php*/
}
else
{
    die("ERROR: Could not connect. " 
    . mysqli_connect_error());
}



?>