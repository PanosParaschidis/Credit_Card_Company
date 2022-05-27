<?php
session_start();
 $username="panos";$password="123456";$database="hy360";
    $conn=mysqli_connect("localhost",$username,$password,$database);
    $name = $_SESSION["name"];
    $pwd= $_SESSION["pwd"];
    $type=$_SESSION["type"];
    $empname=$_SESSION["empname"];
    $amount = filter_input(INPUT_POST, 'amount');
     if($type=="emporos"){
         $sql="SELECT * FROM `emporos` WHERE `Name` = '$name'";
         $result= mysqli_query($conn, $sql);
         $row= mysqli_fetch_assoc($result);
         if($row["Profit"]>=$amount){
             
             if($row["Debt"]>=$amount){
                 $newDebt=$row["Debt"]-$amount;
                 $profit=$row["Profit"]-$amount;
             }else{
                 $newDebt='0';
                 $profit=$row["Profit"]-$row["Debt"];
             }
             
             $sql1="UPDATE `emporos` SET `Profit` = '$profit', `Debt`='$newDebt'  WHERE `emporos`.`Name` = '$name';";
         $result1= mysqli_query($conn, $sql1);
        echo "Your Debt has been reduced by ";
         echo $amount;
         echo " euros";
         }else{
             echo "not enough funds";
             echo "<button onclick=\"window.location.href='logedin.php'\" class=\"btn btn-default\">Main Page</button>";

         }
         
         
     }else if($type=="idiotis"){
         $sql="SELECT * FROM `idiotis` WHERE `Name` = '$name'";
         $result= mysqli_query($conn, $sql);
         $row= mysqli_fetch_assoc($result);
         if($row["Running_debt"]>=$amount){
             $newDebt=$row["Running_debt"]-$amount;
             $newFunds=$row["Available_fund"]+$amount;
         }else{
             $newDebt='0';
             $newFunds=$row["Available_fund"]+$row["Running_debt"];
         }
         
         
         $sql1="UPDATE `idiotis` SET `Running_debt` = '$newDebt', `Available_fund` = '$newFunds' WHERE `idiotis`.`Name` = '$name';";
         $result1= mysqli_query($conn, $sql1); 
         echo "Your Debt has been reduced by ";
         echo $amount;
         echo " euros";
     } else {
         $sql="SELECT * FROM `etairia` WHERE `Name` = '$name'";
         $result= mysqli_query($conn, $sql);
         $row= mysqli_fetch_assoc($result);
         if($row["Running_debt"]>=$amount){
             $newDebt=$row["Running_debt"]-$amount;
             $newFunds=$row["Available_fund"]+$amount;
         }else{
             $newDebt='0';
              $newFunds=$row["Available_fund"]+$row["Running_debt"];
            
         }
         
          $sql1="UPDATE `etairia` SET `Running_debt` = '$newDebt', `Available_fund` = '$newFunds' WHERE `etairia`.`Name` = '$Cname';";
                $result1= mysqli_query($conn, $sql1);
                echo "Your Debt has been reduced by ";
                echo $amount;
                echo " euros";
}
mysqli_close($conn);
?>
<html>
    <head>
        <title>Pay Debt</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <body>
         <button onclick="window.location.href='logedin.php'" class="btn btn-default">Main Page</button>
    </body>
    </head>
