<?php
      $link = mysqli_connect("localhost", "root", "", "abhay");
      if($link === false){
        die("ERROR: Could not connect. " . mysqli_connect_error());
    }
    $username = $_POST["username"];
    $date = $_POST["date"];
    $returndate = $_POST["returndate"];
    $bookname = $_POST["bookname"];
    

    $sql = "insert into addbook values('$username','$date','$returndate','$bookname')";

    if(mysqli_query($link, $sql)){
       
        echo "<p class=\"display-4 headline\" style=\"font-size: 30px; margin-left:50px; margin-top:100px;\">Book Added Succesfully. </p>";
        
    
    }
    else{
        echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
    }
 
      ?>