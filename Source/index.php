<!DOCTYPE html>
<!--
@author Panagiotis Paraschidis, AM: 3164
@author Magdalini Marina Tsifountidou, AM: 3029


-->
<html>
    <head>
        <title>CCC homepage</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    </head>
    <body>
        <div class="container">
  <h2>Log in</h2>
  <form action="login.php" method="post">
    <div class="form-group">
      <label for="name">Name:</label>
      <input type="text" class="form-control" id="name" name="name" placeholder="Enter name">
    </div>
    <div class="form-group">
      <label for="pwd">Password:</label>
      <input type="password" class="form-control" id="pwd" name="pwd" placeholder="Enter password">
    </div>
       <div class="form-group">
      <label for="empname">Employee's name(only for companies):</label>
      <input type="text" class="form-control" id="empname" name="empname" placeholder="Enter name">
    </div>
    
    <button type="submit" class="btn btn-default">Submit</button>
  </form>
     <button onclick="window.location.href='signup.php'" class="btn btn-default">Signup</button>
</div>

        
        
        <?php
   
        ?>
    </body>
</html>
