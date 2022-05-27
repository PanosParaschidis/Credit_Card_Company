<?php

    session_start();
    $username="panos";$password="123456";$database="hy360";
    $conn=mysqli_connect("localhost",$username,$password,$database);
    $date=date("Y-m-d");
    $sql="SELECT * FROM `emporos`;";
    $result= mysqli_query($conn, $sql);
    $emporoi=array();
     if(mysqli_num_rows($result)>0){
     while($row= mysqli_fetch_array($result)){
        $emporoi[] = $row["Name"];
        
        }
     }

     $sum= array();
     $num = mysqli_num_rows($result);
     for($i=0;$i<$num;$i++){
          $sql1="SELECT * FROM `transaction` WHERE `Dname`='$emporoi[$i]';";
          $result1= mysqli_query($conn, $sql1);
          if(mysqli_num_rows($result1)>0){
          $sum[$i]=mysqli_num_rows($result1);
     } else {
        $sum[$i]=0;
     }
     }
     $max=$sum[0];
     for($i=0;$i<$num;$i++){
      if($sum[$i]>=$max){
          $max=$sum[$i];
          $y=$i;
          
      }
     }
     // emporoi[y],sum[y].
     $sql2="SELECT * FROM `emporos` WHERE `Name`='$emporoi[$y]';";
     $result2= mysqli_query($conn, $sql2);
     $row= mysqli_fetch_assoc($result2);
     $discount=(5*$row['Debt'])/100;
     $newDebt=$row['Debt']-$discount;
     $sql3="UPDATE `emporos` SET `Debt` = '$newDebt' WHERE `emporos`.`Name` = '$emporoi[$y]';";
    $result3= mysqli_query($conn, $sql3);
     $sql4="INSERT INTO `transaction` (`Cname`, `Dname`, `Date`, `Amount`, `Type`, `Empname`) VALUES ('$emporoi[$y]', 'CCC', '$date', '$discount', 'pistwsi', '');";
        $result4= mysqli_query($conn, $sql4);    
    echo "The Merchant of the Month is: ";
    echo $emporoi[$y];
    echo " The discount has been applied";
    
     mysqli_close($conn);
     
      
      