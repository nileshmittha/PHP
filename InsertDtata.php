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

$sno=3;
$name="rohit";
$city="Kolhapur";


$sql="INSERT INTO `student` (`sno`,`name`,`city`) values('$sno','$name','$city')";

$result=mysqli_query($conn,$sql);

if($result){

    echo "inserted Successfully";


}
else{

    echo "Failed to Insert into table";
}


?>