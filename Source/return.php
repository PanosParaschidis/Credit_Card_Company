<?php
session_start();
?>


    <html>
    <head>
        <title>Return a Product</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    </head>
    <body>
        <div class="container">
  <h2>Enter Details to Return your Products</h2>
  <form action="exec_return.php" method="post">
    <div class="form-group">
      <label for="name">Merchant's Name:</label>
      <input type="text" class="form-control" id="name" name="Dname" placeholder="Enter name">
    </div>
    <div class="form-group">
      <label for="Amount">Amount:</label>
      <input type="text" class="form-control" id="Amount" name="Amount" placeholder="Enter amount">
    </div>
       <div class="form-group">
      <label for="date">Date:</label>
      <input type="date" class="form-control" id="Date" name="Date" placeholder="Enter date YYYY-MM-DD">
    </div>
    <button type="submit" class="btn btn-default">Submit</button>
  </form>
</div>
        <button onclick="window.location.href='logedin.php'" class="btn btn-default">Main Page</button>

    </body>
</html>

    
