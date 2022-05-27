<?php
session_start();
?>





<html>
    <head>
        <title>Execute Transaction</title>
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
        $date=date("Y-m-d");
        $d=strtotime("+2 Months");
        $expdate=date("Y-m-d", $d);
        $Cname=$_SESSION["name"];
        $empname=$_SESSION["empname"];
        $sql2="SELECT * FROM `idiotis` WHERE `Name` = '$Cname'; ";
        $result2= mysqli_query($conn, $sql2);
        if(mysqli_num_rows($result2)>0){
              
            $row= mysqli_fetch_assoc($result2);
             if ($row['Available_fund']>$amount){
                  $sql="INSERT INTO `transaction` (`Cname`, `Dname`, `Date`, `Amount`, `Type`, `Empname`) VALUES ('$Cname', '$Dname', '$date', '$amount', 'xrewsi','');";
                 $result= mysqli_query($conn, $sql); 
                 
                $fund=$row['Available_fund']-$amount;
                $running_debt=$row['Running_debt']+$amount;
                $sql1="UPDATE `idiotis` SET `Running_debt` = '$running_debt',`Expdate`='$expdate', `Available_fund` = '$fund' WHERE `idiotis`.`Name` = '$Cname';";
                $result1= mysqli_query($conn, $sql1); 
                
                $sql3="SELECT * FROM `emporos` WHERE `Name` = '$Dname'";
                $result3= mysqli_query($conn, $sql3);
                $row3= mysqli_fetch_assoc($result3);
                $debt=$row3['Debt']+($row3['Commision']*$amount)/100;
                $profit=$row3['Profit']+$amount;
                $sql4="UPDATE `emporos` SET `Profit` = '$profit', `Debt`='$debt'  WHERE `emporos`.`Name` = '$Dname';";
                $result4= mysqli_query($conn, $sql4);
                
                 echo "The transaction was Completed Successfully " ;
                  echo $amount;
                echo " euros were payed to ";
                echo $Dname;
                echo " from ";
                echo $Cname;
             }else{
                echo "not enough funds available";
            }
            
        } else {
            $sql4="SELECT * FROM `etairia` WHERE `Name` = '$Cname'; ";
            $result4= mysqli_query($conn, $sql4);
            
            $row= mysqli_fetch_assoc($result4);
        
            if ($row['Available_fund']>$amount){
                  $sql="INSERT INTO `transaction` (`Cname`, `Dname`, `Date`, `Amount`, `Type`, `Empname`) VALUES ('$Cname', '$Dname', '$date', '$amount', 'xrewsi','$empname');";
                 $result= mysqli_query($conn, $sql);
                 
                 $fund=$row['Available_fund']-$amount;
                $running_debt=$row['Running_debt']+$amount;
                $sql1="UPDATE `etairia` SET `Running_debt` = '$running_debt', `Expdate`='$expdate' ,`Available_fund` = '$fund' WHERE `etairia`.`Name` = '$Cname';";
                $result1= mysqli_query($conn, $sql1);
                
                $sql3="SELECT * FROM `emporos` WHERE `Name` = '$Dname'";
                $result3= mysqli_query($conn, $sql3);
                $row3= mysqli_fetch_assoc($result3);
                $debt=$row3['Debt']+($row3['Commision']*$amount)/100;
                $profit=$row3['Profit']+$amount;
                $sql4="UPDATE `emporos` SET `Profit` = '$profit', `Debt`='$debt'  WHERE `emporos`.`Name` = '$Dname';";
                $result4= mysqli_query($conn, $sql4);
                
                echo "The transaction was Completed Successfully " ;
                echo $amount;
                echo " euros were payed to ";
                echo $Dname;
                echo " from ";
                echo $Cname;
            }else{
                echo "not enough funds available";
            }
           
            
        }
     
        
    
        
        
         mysqli_close($conn);
        ?>
         <button onclick="window.location.href='logedin.php'" class="btn btn-default">Main Page</button>
    </body>

