<?php


$servername="localhost";
$username="root";

$password="qwerty";




$db="PHP";

$conn=mysqli_connect($servername,$username,$password,$db);

if($conn){

    echo "SuucessFully Created Connection";


}
else{

    die(mysqli_connect_error());


}


$sqlquery="CREATE table `emplo`(`sno`INT AUTO_INCREMENT PRIMARY KEY,`name` varchar(20) NOT NULL, `City` varchar(10) NOT NULL)";

$result=mysqli_query($conn,$sqlquery);

if($result){

    echo "Successfully created Table employy";


    
}

else{

    echo "Failed to create table";
}




?>