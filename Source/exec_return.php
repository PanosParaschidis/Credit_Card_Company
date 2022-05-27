<?php
session_start();
?>





<html>
    <head>
        <title>Execute Return</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    </head>
    <body>
        <?php
        $username="panos";$password="123456";$database="hy360";
        $conn=mysqli_connect("localhost",$username,$password,$database);
     
        $Dname = filter_input(INPUT_POST, 'Dname');
        $amount= filter_input(INPUT_POST, 'Amount');
        $date=filter_input(INPUT_POST, 'Date');
        $Cname=$_SESSION["name"];
        $empname=$_SESSION["empname"];
        $sql5="  SELECT * FROM `transaction` WHERE `Cname` = '$Cname' AND `Dname` = '$Dname' AND `Date` = '$date' AND `Amount` = '$amount' AND `Type` = 'xrewsi';";
        $result5= mysqli_query($conn, $sql5);
        
        if(mysqli_num_rows($result5)>0){
             $sql="INSERT INTO `transaction` (`Cname`, `Dname`, `Date`, `Amount`, `Type`, `Empname`) VALUES ('$Cname', '$Dname', '$date', '$amount', 'pistwsi', '$empname');";
        $result= mysqli_query($conn, $sql);     
        $sql2="SELECT * FROM `idiotis` WHERE `Name` = '$Cname' ";
        $result2= mysqli_query($conn, $sql2);
        if(mysqli_num_rows($result2)>0){
            $row= mysqli_fetch_assoc($result2);
           
                $fund=$row['Available_fund']+$amount;
               
                $sql1="UPDATE `idiotis` SET `Available_fund` = '$fund' WHERE `idiotis`.`Name` = '$Cname';";
                $result1= mysqli_query($conn, $sql1); 
                
                $sql3="SELECT * FROM `emporos` WHERE `Name` = '$Dname'";
                $result3= mysqli_query($conn, $sql3);
                $row3= mysqli_fetch_assoc($result3);
               
                $profit=$row3['Profit']-$amount;
                $sql4="UPDATE `emporos` SET `Profit` = '$profit'  WHERE `emporos`.`Name` = '$Dname';";
                $result4= mysqli_query($conn, $sql4);
                
                echo "The transaction was Completed Successfully " ;
                echo $amount;
                echo " euros were returned to ";
                echo $Cname;
                echo " from ";
                echo $Dname;
           
            
        } else {
            $sql4="SELECT * FROM `etairia` WHERE `Name` = '$Cname' ";
            $result4= mysqli_query($conn, $sql4);
            $row= mysqli_fetch_assoc($result4);
           
                 $fund=$row['Available_fund']+$amount;
                
                $sql1="UPDATE `etairia` SET  `Available_fund` = '$fund' WHERE `etairia`.`Name` = '$Cname';";
                $result1= mysqli_query($conn, $sql1);
                
                $sql3="SELECT * FROM `emporos` WHERE `Name` = '$Dname'";
                $result3= mysqli_query($conn, $sql3);
                $row3= mysqli_fetch_assoc($result3);
               
                $profit=$row3['Profit']+$amount;
                $sql5="UPDATE `emporos` SET `Profit` = '$profit', `Debt`='$debt'  WHERE `emporos`.`Name` = '$Dname';";
                $result5= mysqli_query($conn, $sql5);
                
                echo "The transaction was Completed Successfully " ;
                echo $amount;
                echo " euros were returned to ";
                echo $Cname;
                echo " from ";
                echo $Dname;
           
           
            
        }
     
        }else{
            echo "The transaction wasn't found please try again and check the validity of your input";
         
        }
       
        
    
        
        
         mysqli_close($conn);
        ?>
         <button onclick="window.location.href='logedin.php'" class="btn btn-default">Main Page</button>
    </body>





