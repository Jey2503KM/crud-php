<?php
$server="localhost";
$db="tienda";
$user="root";
$passw="";

try {
    $conn=mysqli_connect($server,$user,$passw,$db);
} catch (Exception $th) {
    echo $th->getMessage();
}

?>
