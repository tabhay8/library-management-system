<?php
$usr = $_POST["username"];
$pass = $_POST["password"];
$lik = "<script>window.open('student.php')</script>";
$adm = "<script>window.open('addbook.html')</script>";

$link = mysqli_connect("localhost", "root", "", "abhay");
if($link == false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}


$sql = "select * from students where username='$usr' and password='$pass'";
if($usr=="Admin" && $pass=="admin"){
    echo "Admin Login Successfully";
    echo $adm;
}
else{


if($result = mysqli_query($link, $sql)){
    if(mysqli_num_rows($result) > 0){
        echo "Log In Successfully";
        echo $lik;
    }
    else{
        echo "Something Wrong";
    }
}
}
?>