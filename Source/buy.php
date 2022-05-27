
    <html>
    <head>
        <title>Buy a Product</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    </head>
    <body>
        <div class="container">
  <h2>Enter Details for the Transaction</h2>
  <form action="execute.php" method="post">
    <div class="form-group">
      <label for="name">Merchant's Name:</label>
      <input type="text" class="form-control" id="name" name="Dname" placeholder="Enter name">
    </div>
    <div class="form-group">
      <label for="Amount">Amount:</label>
      <input type="text" class="form-control" id="Amount" name="Amount" placeholder="Enter amount">
    </div>
    
      
    <button type="submit" class="btn btn-default">Submit</button>
  </form>
  <button onclick="window.location.href='logedin.php'" class="btn btn-default">Main Page</button>
</div>
         
    </body>
</html>


