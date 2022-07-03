<!doctype html>
<html lang="en">
  <head>
    <title>Student Login</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  </head>
  <body>
  <?php
      $link = mysqli_connect("localhost", "root", "", "abhay");
 
      // Check connection
      if($link === false){
          die("ERROR: Could not connect. " . mysqli_connect_error());
      }

      

      $sql = "select * from addbook";
      if($result = mysqli_query($link, $sql)){
        if(mysqli_num_rows($result) > 0){
          echo "<div class=\"table-responsive\">";
            echo "<table class=\"table table-bordered\">";
            echo "<thead>";
            echo "<tr align=\"center\">";
            echo "<th>User Name</th>";              
            echo "<th>Issue Date</th>";
            echo "<th>Return Date</th>";
            echo "<th>Book Name</th>";
            
            echo "</tr>";
            echo "</thead>";

            while($row = mysqli_fetch_array($result)){
              echo "<tbody>";
              echo "<tr>";
              echo "<td>" . $row['username'] . "</td>";
              echo "<td>" . $row['date'] . "</td>";
              echo "<td>" . $row['returndate'] . "</td>";
              echo "<td>" . $row['bookname'] . "</td>";
              
              echo "</tr>";
              echo "</tbody>";

              echo "</div>";
        }
      }
    }
      ?>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>
