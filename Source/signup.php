<html>
<head> 
    <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head> 
<body> 
  <div class="container">
  <h2>Sign up</h2>
  <form action="register.php" method="post">
    <div class="form-group">
      <label for="name">Name:</label>
      <input type="text" class="form-control" id="name" name="name" placeholder="Enter name">
    </div>
    <div class="form-group">
      <label for="pwd">Password:</label>
      <input type="password" class="form-control" id="pwd" name="pwd" placeholder="Enter password">
    </div>
      <div class="form-group">
      <label for="type">Type(emporos,idiotis,etairia):</label>
      <input type="text" class="form-control" id="type" name="type" placeholder="Enter type">
    </div>  
     <div class="form-group">
      <label for="empname">Employee's Name(only for companies):</label>
      <input type="text" class="form-control" id="empname" name="empname" placeholder="Enter name">
    </div>
    
  
    <button type="submit" class="btn btn-default">Submit</button>
  </form>
     
</div>
</body> 

<html>