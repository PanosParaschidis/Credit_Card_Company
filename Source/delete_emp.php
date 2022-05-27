<?php
session_start();
 $username="panos";$password="123456";$database="hy360";
    $conn=mysqli_connect("localhost",$username,$password,$database);
    $name = $_SESSION["name"];
  
    $empname=$_SESSION["empname"];
    
   
       
        $find0="DELETE FROM `employees` WHERE `Empname`='$empname' AND `Company`='$name';";
        $result0= mysqli_query($conn, $find0);
        if($result0==true ){
             echo "your account was deleted";
             echo '<script type="text/javascript">
           window.location.href = "index.php"
            </script>';
        }else{
            echo "there seems to be a problem deleting your acount, please make sure your debts are paid";
        }
    