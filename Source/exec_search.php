<?php
 session_start();
    $username="panos";$password="123456";$database="hy360";
    $conn=mysqli_connect("localhost",$username,$password,$database);
    $name = $_SESSION["name"];
    $pwd= $_SESSION["pwd"];
    $type=$_SESSION["type"];
    if($type=="emporos"){
        $Cname = filter_input(INPUT_POST, 'Cname');
        if(!empty(filter_input(INPUT_POST, 'TransId'))){
            $Tid=filter_input(INPUT_POST, 'TransId');
             $sql="SELECT * FROM `transaction` WHERE `Id`=$Tid AND `Dname`='$name';";
        }else{
             if (!empty(filter_input(INPUT_POST, 'Fdate'))) {
                $Fdate=filter_input(INPUT_POST, 'Fdate');
            }else{
                 $d=strtotime("-1 Years");
                 $Fdate=date("Y-m-d", $d);
            }
            if (!empty(filter_input(INPUT_POST, 'Tdate'))) {
                $Tdate=filter_input(INPUT_POST, 'Tdate');
            }else{
                $Tdate=date("Y-m-d");
            }
            if (!empty(filter_input(INPUT_POST, 'Cname'))) {
                $Cname=filter_input(INPUT_POST, 'Cname');
                $sql="SELECT * FROM `transaction` WHERE `Cname` = '$Cname' AND `Dname` = '$name' AND `Date` >= '$Fdate' AND `Date` <= '$Tdate' ;";
            }else{
            $sql="SELECT * FROM `transaction` WHERE `Dname` = '$name' AND `Date` >= '$Fdate' AND `Date` <= '$Tdate' ;";
            }
        }
       
      
         $result= mysqli_query($conn, $sql);
         if(mysqli_num_rows($result)>0){
     while($row= mysqli_fetch_assoc($result)){
             echo "<table>";
        echo "<tr>";
        echo "<td>Transactions:</td>";
        echo "</tr>";
        echo "<tr>";
        echo "<td>Client's Name:" .$row["Cname"]."</td>";
        echo "</tr>";
        echo "<tr>";
        echo "<td>Merchant's Name:" .$row["Dname"]."</td>";
        echo "</tr>";
        echo "<tr>";
        echo "<td>Date:" .$row["Date"]."</td>";
        echo "</tr>";
        echo "<tr>";
        echo "<td>Amount:" .$row["Amount"]."</td>";
        echo "</tr>";
        echo "<tr>";
        echo "<td>Type:" .$row["Type"]."</td>";
        echo "</tr>";
        echo "<tr>";
        echo "<td>Id:" .$row["Id"]."</td>";
        echo "</tr>";
        echo "</table>"; 
            echo "<button onclick=\"window.location.href='logedin.php'\" class=\"btn btn-default\">Main Page</button>";
     }
     }else{
         echo "No Transactions Found";
            echo "<button onclick=\"window.location.href='logedin.php'\" class=\"btn btn-default\">Main Page</button>";
     }
    }else if($type=="idiotis"){
        $Mname = filter_input(INPUT_POST, 'Mname');
        if(!empty(filter_input(INPUT_POST, 'TransId'))){
            $Tid=filter_input(INPUT_POST, 'TransId');
             $sql="SELECT * FROM `transaction` WHERE `Id`=$Tid AND `Cname`='$name' ;";
        }else{
            if (!empty(filter_input(INPUT_POST, 'Fdate'))) {
                $Fdate=filter_input(INPUT_POST, 'Fdate');
            }else{
                $d=strtotime("-1 Years");
                $Fdate=date("Y-m-d", $d);
            }
            if (!empty(filter_input(INPUT_POST, 'Tdate'))) {
                $Tdate=filter_input(INPUT_POST, 'Tdate');
            }else{
                $Tdate=date("Y-m-d");
            }
            if (!empty(filter_input(INPUT_POST, 'Mname'))) {
                $Mname=filter_input(INPUT_POST, 'Mname');
                 $sql="SELECT * FROM `transaction` WHERE `Cname` = '$name' AND `Dname` = '$Mname' AND `Date` >= '$Fdate' AND `Date` <= '$Tdate' ;";
            }else{
               $sql="SELECT * FROM `transaction` WHERE `Cname` = '$name'  AND `Date` >= '$Fdate' AND `Date` <= '$Tdate' ;";
            }
        }
        
        
       
         $result= mysqli_query($conn, $sql);
             if(mysqli_num_rows($result)>0){
     while($row= mysqli_fetch_assoc($result)){
             echo "<table>";
        echo "<tr>";
        echo "<td>Transactions:</td>";
        echo "</tr>";
        echo "<tr>";
        echo "<td>Client's Name:" .$row["Cname"]."</td>";
        echo "</tr>";
        echo "<tr>";
        echo "<td>Merchant's Name:" .$row["Dname"]."</td>";
        echo "</tr>";
        echo "<tr>";
        echo "<td>Date:" .$row["Date"]."</td>";
        echo "</tr>";
        echo "<tr>";
        echo "<td>Amount:" .$row["Amount"]."</td>";
        echo "</tr>";
        echo "<tr>";
        echo "<td>Type:" .$row["Type"]."</td>";
        echo "</tr>";
         echo "<tr>";
        echo "<td>Id:" .$row["Id"]."</td>";
        echo "</tr>";
        echo "</table>"; 
           echo "<button onclick=\"window.location.href='logedin.php'\" class=\"btn btn-default\">Main Page</button>";
         
     }
     }else{
         echo "No Transactions Found";
            echo "<button onclick=\"window.location.href='logedin.php'\" class=\"btn btn-default\">Main Page</button>";
     }
    }else{
         $Mname = filter_input(INPUT_POST, 'Mname');
         
         if(!empty(filter_input(INPUT_POST, 'TransId'))){
            $Tid=filter_input(INPUT_POST, 'TransId');
             $sql="SELECT * FROM `transaction` WHERE `Id`=$Tid AND `Cname`='$name';";
        }else{
            if (!empty(filter_input(INPUT_POST, 'Fdate'))) {
                $Fdate=filter_input(INPUT_POST, 'Fdate');
            }else{
                $d=strtotime("-1 Years");
                $Fdate=date("Y-m-d", $d);
            }
            if (!empty(filter_input(INPUT_POST, 'Tdate'))) {
                $Tdate=filter_input(INPUT_POST, 'Tdate');
            }else{
                $Tdate=date("Y-m-d");
            }
            if (!empty(filter_input(INPUT_POST, 'empname'))) {
                $empname=filter_input(INPUT_POST, 'empname');
            }else{
                $empname="";
            }
               if (!empty(filter_input(INPUT_POST, 'Mname')) && $empname!="") {
                $Mname=filter_input(INPUT_POST, 'Mname');
                 $sql="SELECT * FROM `transaction` WHERE `Cname` = '$name' AND `Dname` = '$Mname' AND `Empname`='$empname' AND `Date` >= '$Fdate' AND `Date` <= '$Tdate' ;";
            }else if(empty(filter_input(INPUT_POST, 'Mname')) && $empname!=""){
              $sql="SELECT * FROM `transaction` WHERE `Cname` = '$name'  AND `Empname`='$empname' AND `Date` >= '$Fdate' AND `Date` <= '$Tdate' ;";
            }else if(empty(filter_input(INPUT_POST, 'Mname')) && $empname=="" ){
                $sql="SELECT * FROM `transaction` WHERE `Cname` = '$name'  AND `Date` >= '$Fdate' AND `Date` <= '$Tdate' ;";
            }else{
                 $sql="SELECT * FROM `transaction` WHERE `Cname` = '$name' AND `Dname` = '$Mname'  AND `Date` >= '$Fdate' AND `Date` <= '$Tdate' ;";
            }
        }
       
        
         $result= mysqli_query($conn, $sql);
             if(mysqli_num_rows($result)>0){
     while($row= mysqli_fetch_assoc($result)){
             echo "<table>";
        echo "<tr>";
        echo "<td>Transactions:</td>";
        echo "</tr>";
        echo "<tr>";
        echo "<td>Client's Name:" .$row["Cname"]."</td>";
        echo "</tr>";
        echo "<tr>";
        echo "<td>Merchant's Name:" .$row["Dname"]."</td>";
        echo "</tr>";
        echo "<tr>";
        echo "<td>Employee's Name:" .$row["Empname"]."</td>";
        echo "</tr>";
        echo "<tr>";
        echo "<td>Date:" .$row["Date"]."</td>";
        echo "</tr>";
        echo "<tr>";
        echo "<td>Amount:" .$row["Amount"]."</td>";
        echo "</tr>";
        echo "<tr>";
        echo "<td>Type:" .$row["Type"]."</td>";
        echo "</tr>";
         echo "<tr>";
        echo "<td>Id:" .$row["Id"]."</td>";
        echo "</tr>";
        echo "</table>"; 
           echo "<button onclick=\"window.location.href='logedin.php'\" class=\"btn btn-default\">Main Page</button>";
         
     }
     }else{
         echo "No Transactions Found";
            echo "<button onclick=\"window.location.href='logedin.php'\" class=\"btn btn-default\">Main Page</button>";
     }
        
    }
     mysqli_close($conn);

