


<?php


$servername="localhost";

$username="root";

$password="qwerty";

$con=mysqli_connect($servername,$username,$password);


$sql="CREATE DATABASE php12";
$result=mysqli_query($con,$sql);

if($result){

    echo "Created Successfully";
}
else{
    die();
}

$db="php12";

$con=mysqli_connect($servername,$username,$password,$db);


?>
