
        <?php
        
        $username="panos";$password="123456";$database="hy360";
        $conn=mysqli_connect("localhost",$username,$password,$database);
        
        $name = filter_input(INPUT_POST, 'name');
 $d=strtotime("+2 Months");
 $date=date("Y-m-d", $d);

$pwd= filter_input(INPUT_POST, 'pwd');
$type=filter_input(INPUT_POST, 'type');
$empname=filter_input(INPUT_POST, 'empname');

if($type=='emporos'){
   $sql="INSERT INTO `emporos` (`Name`, `Password`, `Accountno`, `Commision`, `Profit`, `Debt`) VALUES ('$name', '$pwd', '', '2', '0', '0')";
        $result= mysqli_query($conn, $sql);
}else if($type=='etairia'){
    $sql="INSERT INTO `etairia` (`Name`, `Password`, `Accountno`, `Expdate`, `Credit_limit`, `Running_debt`, `Available_fund`) VALUES ('$name', '$pwd', '', '$date', '10000', '0', '10000')";
        $result= mysqli_query($conn, $sql);
        $sql1="INSERT INTO `employees` (`Empname`,`Empid`,`Company`) VALUES ('$empname','','$name');";
         $result1= mysqli_query($conn, $sql1);
}else if($type=='idiotis'){
    $sql="INSERT INTO `idiotis` (`Name`, `Password`, `Accountno`, `Expdate`, `Credit_limit`, `Running_debt`, `Available_fund`) VALUES ('$name', '$pwd', '', '$date', '3000', '0', '3000')";
        $result= mysqli_query($conn, $sql);
}
        
       echo $name;
       echo " ";
      echo "sucessful registration";
       mysqli_close($conn);
      ?>
<html>
    <head>
        <title>Register</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    </head>
    <body>
        <button onclick="window.location.href='index.php'" class="btn btn-default">Start Page</button>
    </body>