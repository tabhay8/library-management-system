<?php
$name = $_POST["name"];
$num = $_POST["number"];
$usr = $_POST["username"];
$pass = $_POST["password"];
$lik = "<script>window.open('login.html')</script>";


$link = mysqli_connect("localhost", "root", "", "abhay");
if($link == false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}

$sql = "insert into students(name,number,username,password) values('$name','$num','$usr','$pass')";
if(mysqli_query($link, $sql)){
    echo "Student Registration Complete.";
    echo $lik;
}
else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
?>