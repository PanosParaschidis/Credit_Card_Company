<?php
    session_start();
    $username="panos";$password="123456";$database="hy360";
    $conn=mysqli_connect("localhost",$username,$password,$database);
    $name = $_SESSION["name"];
    $pwd= $_SESSION["pwd"];
    $type=$_SESSION["type"];
    if($type=="emporos"){
         $find_user="SELECT * FROM `emporos` WHERE `Name` = '$name' AND `Password` = '$pwd'  ";
      $result= mysqli_query($conn, $find_user);
      if(mysqli_num_rows($result)>0){
     while($row= mysqli_fetch_assoc($result)){
         echo "<body>";
        echo "<div class='container'>";
        echo"  <h2>Search</h2>";
        echo "<form action='exec_search.php' method='post'>";
           echo "<div class='form-group'>";
             echo "<label for='name'>Name of Client(optional):</label>";
             echo "<input type='text' class='form-control' id='name' name='Cname' placeholder='Enter name of Client'>";
           echo "</div>";
           echo "<div class='form-group'>";
             echo "<label for='Fdate'>From Date(optional):</label>";
             echo "<input type='date' class='form-control' id='Fdate' name='Fdate' placeholder='Enter Date'>";
           echo "</div>";
                echo "<div class='form-group'>";
             echo "<label for='Tdate'>To Date(optional):</label>";
             echo "<input type='date' class='form-control' id='Tdate' name='Tdate' placeholder='Enter Date'>";
           echo "</div>";
           echo "<div class='form-group'>";
             echo "<label for='TransId'>Transaction Id(optional):</label>";
             echo "<input type='text' class='form-control' id='TransId' name='TransId' placeholder='Enter Transaction Id'>";
           echo "</div>";
           echo "<button type='submit' class='btn btn-default'>Submit</button>";
           echo "</form>";
         echo "</body>";
         
     }
     }
    }else if($type=="idiotis"){
           $find_user="SELECT * FROM `idiotis` WHERE `Name` = '$name' AND `Password` = '$pwd'  ";
      $result= mysqli_query($conn, $find_user);
      if(mysqli_num_rows($result)>0){
     while($row= mysqli_fetch_assoc($result)){
         echo "<body>";
        echo "<div class='container'>";
        echo"  <h2>Search</h2>";
        echo "<form action='exec_search.php' method='post'>";
           echo "<div class='form-group'>";
             echo "<label for='name'>Name of Merchant(optional):</label>";
             echo "<input type='text' class='form-control' id='name' name='Mname' placeholder='Enter name of Merchant'>";
           echo "</div>";
           echo "<div class='form-group'>";
             echo "<label for='Fdate'>From Date(optional):</label>";
             echo "<input type='date' class='form-control' id='Fdate' name='Fdate' placeholder='Enter Date'>";
           echo "</div>";
                echo "<div class='form-group'>";
             echo "<label for='Tdate'>To Date(optional):</label>";
             echo "<input type='date' class='form-control' id='Tdate' name='Tdate' placeholder='Enter Date'>";
           echo "</div>";
           echo "<div class='form-group'>";
             echo "<label for='TransId'>Transaction Id(optional):</label>";
             echo "<input type='text' class='form-control' id='TransId' name='TransId' placeholder='Enter Transaction Id'>";
           echo "</div>";
           echo "<button type='submit' class='btn btn-default'>Submit</button>";
           echo "</form>";
           echo "</body>";

         
     }
     }
    }else{
         $find_user2="SELECT * FROM `etairia` WHERE `Name` = '$name' AND `Password` = '$pwd'  ";
       $result2= mysqli_query($conn, $find_user2);
       if(mysqli_num_rows($result2)>0){
     while($row= mysqli_fetch_assoc($result2)){
             echo "<body>";
        echo "<div class='container'>";
        echo"  <h2>Search</h2>";
        echo "<form action='exec_search.php' method='post'>";
           echo "<div class='form-group'>";
             echo "<label for='name'>Name of Merchant(optional):</label>";
             echo "<input type='text' class='form-control' id='name' name='Mname' placeholder='Enter name of Merchant'>";
           echo "</div>";
           echo "<div class='form-group'>";
             echo "<label for='Fdate'>From Date(optional):</label>";
             echo "<input type='date' class='form-control' id='Fdate' name='Fdate' placeholder='Enter Date'>";
           echo "</div>";
                echo "<div class='form-group'>";
             echo "<label for='Tdate'>To Date(optional):</label>";
             echo "<input type='date' class='form-control' id='Tdate' name='Tdate' placeholder='Enter Date'>";
           echo "</div>";   
           echo "<div class='form-group'>";
             echo "<label for='empname'>Employee's Name(optional):</label>";
             echo "<input type='text' class='form-control' id='empname' name='empname' placeholder='Enter Employee's name>";
           echo "</div>";
           echo "<div class='form-group'>";
             echo "<label for='TransId'>Transaction Id(optional):</label>";
             echo "<input type='text' class='form-control' id='TransId' name='TransId' placeholder='Enter Transaction Id'>";
           echo "</div>";
           echo "<button type='submit' class='btn btn-default'>Submit</button>";
           echo "</form>";
           echo "</body>";
         
     }
     }
    }
    mysqli_close($conn);
 
  ?>
<html>
    <head>
        <title>Search</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    </head>
    <body>
         <button onclick="window.location.href='logedin.php'" class="btn btn-default">Main Page</button>
    </body>
</html>
