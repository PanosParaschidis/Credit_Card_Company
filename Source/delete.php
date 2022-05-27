<?php

session_start();
 $username="panos";$password="123456";$database="hy360";
    $conn=mysqli_connect("localhost",$username,$password,$database);
    $name = $_SESSION["name"];
    $pwd= $_SESSION["pwd"];
    $type=$_SESSION["type"];
    $empname=$_SESSION["empname"];
    
    if($type=="etairia"){
        $find="DELETE FROM `etairia` WHERE `Name`= '$name' AND `Running_debt`=0;";
        $result= mysqli_query($conn, $find);
        $find0="DELETE FROM `employees` WHERE  `Company`='$name';";
        $result0= mysqli_query($conn, $find0);
        if($result==true and $result0==true ){
             echo "your account was deleted";
        }else{
            echo "there seems to be a problem deleting your acount, please make sure your debts are paid";
        }
        
    }else if($type=="emporos"){
        $find1="DELETE FROM `emporos` WHERE `Name`= '$name' AND `Debt`=0;";
        $result1= mysqli_query($conn, $find1);
        if($result1==true){
             echo "your account was deleted";
        }else{
            echo "there seems to be a problem deleting your acount, please make sure your debts are paid";
        }
    }else{
         $find2="DELETE FROM `idiotis` WHERE `Name`= '$name' AND `Running_debt`=0;";
        $result2= mysqli_query($conn, $find2);
        if($result2==true){
             echo "your account was deleted";
        }else{
            echo "there seems to be a problem deleting your acount, please make sure your debts are paid";
        }
    }
    
    
  
     
    
if(($result==true && $result0==true) || $result1==true || $result2==true ){
    echo "your account was deleted";
}else{
    echo "there seems to be a problem deleting your acount, please make sure your debts are paid";
}
 mysqli_close($conn);
?>

<html>
    <head>
        <title>Delete Account</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <body>
         <button onclick="window.location.href='index.php'" class="btn btn-default">Start Page</button>
    </body>
    </head>
