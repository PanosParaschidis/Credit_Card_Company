<?php
    session_start();
    $username="panos";$password="123456";$database="hy360";
    $conn=mysqli_connect("localhost",$username,$password,$database);
    
    $find_user="SELECT * FROM `etairia` WHERE `Running_debt`>0 ORDER BY `Running_debt` ASC ;"; 
    $result= mysqli_query($conn, $find_user);
   
    if(mysqli_num_rows($result)>0){
     while($row= mysqli_fetch_assoc($result)){
         
         
        echo "<table>";
         echo "<tr>";
        echo "<td>Etairia</td>";
        echo "</tr>";
        echo "<tr>";
        echo "<td>Name:" .$row["Name"]." </td>";
        echo "</tr>";
        echo "<tr>";
        echo "<td>Account Number:" .$row["Accountno"]." </td>";
        echo "</tr>";
        echo "<tr>";
        echo "<td>Credit Limit:" .$row["Credit_limit"]." </td>";
        echo "</tr>";
         echo "<tr>";
        echo "<td>Running Debt:" .$row["Running_debt"]." </td>";
        echo "</tr>";
         echo "<br>";
     
     }
     }
     $find_user1="SELECT * FROM `idiotis` WHERE `Running_debt`>0 ORDER BY `Running_debt` ASC ;"; 
    $result1= mysqli_query($conn, $find_user1);
    if(mysqli_num_rows($result1)>0){
    while($row1= mysqli_fetch_assoc($result1)){
        echo "<table>";
         echo "<tr>";
        echo "<td>Idiotis</td>";
        echo "</tr>";
        echo "<tr>";
        echo "<td>Name:" .$row1["Name"]." </td>";
        echo "</tr>";
        echo "<tr>";
        echo "<td>Account Number:" .$row1["Accountno"]." </td>";
        echo "</tr>";
        echo "<tr>";
        echo "<td>Credit Limit:" .$row1["Credit_limit"]." </td>";
        echo "</tr>"; 
        echo "<tr>";
        echo "<td>Running Debt:" .$row1["Running_debt"]." </td>";
        echo "</tr>";
        echo "<br>";
        
     }
     }
         $find_user2="SELECT * FROM `emporos` WHERE `Debt`>0 ORDER BY `Debt` ASC ;"; 
    $result2= mysqli_query($conn, $find_user2);
    if(mysqli_num_rows($result2)>0){
     
     while($row2= mysqli_fetch_assoc($result2)){
          
         
        echo "<table>";
         echo "<tr>";
        echo "<td>Emporos</td>";
        echo "</tr>";
        echo "<tr>";
        echo "<td>Name:" .$row2["Name"]." </td>";
        echo "</tr>";
        echo "<tr>";
        echo "<td>Account Number:" .$row2["Accountno"]." </td>";
        echo "</tr>";
        echo "<tr>";
        echo "<td>Commision:" .$row2["Commision"]." </td>";
        echo "</tr>"; 
            echo "<tr>";
        echo "<td>Running Debt:" .$row2["Debt"]." </td>";
        echo "</tr>";
       echo "<br>";
         
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
  
</html>