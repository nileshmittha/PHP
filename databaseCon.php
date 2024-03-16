<?php


$localhost1="localhost";

$username="root";

$password="qwerty";
$db="blood";



$con=mysqli_connect($localhost1,$username,$password,$db);

if($con){

    echo "Successfully Connected";
}
else{

    die("OOps Sorry we can't coonect to the MYSQL server by".mysqli_connect_error());
}

?>