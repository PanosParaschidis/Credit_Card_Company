 <?php
 // Start the session
session_start();
    $username="panos";$password="123456";$database="hy360";
    $conn=mysqli_connect("localhost",$username,$password,$database);
    $name = filter_input(INPUT_POST, 'name');
    $pwd= filter_input(INPUT_POST, 'pwd');
    $empname=filter_input(INPUT_POST, 'empname');
    
    if($name=="admin" && $pwd=="admin"){
        echo '<script type="text/javascript">
           window.location.href = "ccc.php"
            </script>';
    }
    
    
    $find_user="SELECT * FROM `emporos` WHERE `Name` = '$name' AND `Password` = '$pwd'  ";
       $result= mysqli_query($conn, $find_user);
       $_SESSION["name"]=$name;
       $_SESSION["pwd"]=$pwd;
       $_SESSION["empname"]=$empname;
 if(mysqli_num_rows($result)>0){
     while($row= mysqli_fetch_assoc($result)){
          $_SESSION["type"]="emporos";
          echo "<table>";
     echo "<tr>";
        echo "<td>Emporos:</td>";
        echo "</tr>";
        echo "<tr>";
        echo "<td>name:" .$row["Name"]."</td>";
        echo "</tr>";
        echo "<tr>";
        echo "<td>Account Number:" .$row["Accountno"]."</td>";
        echo "</tr>";
        echo "<tr>";
        echo "<td>Commision:" .$row["Commision"]."</td>";
        echo "</tr>";
        echo "<tr>";
        echo "<td>Profit:" .$row["Profit"]."</td>";
        echo "</tr>";
        echo "<tr>";
        echo "<td>Debt:" .$row["Debt"]."</td>";
        echo "</tr>";
        echo "</table>";  

       }
 }else{
     $find_user1="SELECT * FROM `idiotis` WHERE `Name` = '$name' AND `Password` = '$pwd'  ";
       $result1= mysqli_query($conn, $find_user1);
       if(mysqli_num_rows($result1)>0){
     while($row= mysqli_fetch_assoc($result1)){
         $_SESSION["type"]="idiotis";
         echo "<table>";
        echo "<tr>";
        echo "<td>Idiotis</td>";
           echo "</tr>";
            echo "<tr>";
        echo "<td>name:" .$row["Name"]."</td>";
           echo "</tr>";
            echo "<tr>";
        echo "<td>Account Number:" .$row["Accountno"]."</td>";
           echo "</tr>";
            echo "<tr>";
        echo "<td>Expiration Date:" .$row["Expdate"]."</td>";
           echo "</tr>";
            echo "<tr>";
        echo "<td>Credit Limit:" .$row["Credit_limit"]."</td>";
           echo "</tr>";
            echo "<tr>";
        echo "<td>Running Debt:" .$row["Running_debt"]."</td>";
           echo "</tr>";
            echo "<tr>";
        echo "<td>Available Funds:" .$row["Available_fund"]."</td>";
        echo "</tr>";
        echo "</table>";  
        echo "<br>";
        
             echo "<button onclick=\"window.location.href='buy.php'\" class=\"btn btn-default\">Buy Something</button>";
         echo "<button onclick=\"window.location.href='return.php'\" class=\"btn btn-default\">Return Something</button>";
     }
     }else{
         $find_user2="SELECT * FROM `etairia` WHERE `Name` = '$name' AND `Password` = '$pwd'  ";
       $result2= mysqli_query($conn, $find_user2);
       $find_emp="SELECT * FROM `employees` WHERE `Empname` = '$empname' AND `Company`='$name' ;";
       $result3= mysqli_query($conn, $find_emp);
       if(mysqli_num_rows($result2)>0 && mysqli_num_rows($result3)>0){
     while($row= mysqli_fetch_assoc($result2)){
         $_SESSION["type"]="etairia";
         
       echo "<table>";
        echo "<tr>";
        echo "<td>Etairia</td>";
        echo "</tr>";
            echo "<tr>";
        echo "<td>name:" .$row["Name"]."</td>";
        echo "</tr>";
            echo "<tr>";
        echo "<td>Account Number:" .$row["Accountno"]."</td>";
        echo "</tr>";
            echo "<tr>";
        echo "<td>Expiration Date:" .$row["Expdate"]."</td>";
        echo "</tr>";
            echo "<tr>";
        echo "<td>Credit Limit:" .$row["Credit_limit"]."</td>";
        echo "</tr>";
            echo "<tr>";
        echo "<td>Running Debt:" .$row["Running_debt"]."</td>";
        echo "</tr>";
            echo "<tr>";
        echo "<td>Available Funds:" .$row["Available_fund"]."</td>";
        echo "</tr>";
            
         
         while($row1= mysqli_fetch_assoc($result3)){
             echo "<tr>";
             echo "<td>Employee's Name:" .$row1["Empname"]."</td>";
             echo "</tr>";
               echo "<tr>";
             echo "<td>Employee's Id:" .$row1["Empid"]."</td>";
             echo "</tr>";
         }
         echo "</table>"; 
         echo "<br>";
         echo "<button onclick=\"window.location.href='delete_emp.php'\" class=\"btn btn-default\">Close Employee's Account</button>";
         
         echo "<button onclick=\"window.location.href='buy.php'\" class=\"btn btn-default\">Buy Something</button>";
         echo "<button onclick=\"window.location.href='return.php'\" class=\"btn btn-default\">Return Something</button>";
     }
     }else{
          echo "Wrong name/password please try again, or sign up";
     }
     }
     
     
    
 }    
  mysqli_close($conn);
 ?>
<html>
    <head>
        <title>Login</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    </head>
    <body>
        <div class="container">
<button onclick="window.location.href='delete.php'" class="btn btn-default">Close Account</button>

<button onclick="window.location.href='search.php'" class="btn btn-default">Search Transactions</button>
<button onclick="window.location.href='pay_debt.php'" class="btn btn-default">Pay Debts</button>

        </div>
  </body>
</html>

          