<?php 
    session_start();
      if($_SESSION["GUEST"] != "guest"){
          header("Location: item.php");  
      exit();
      } 
?>
<!DocType HTML>
<html lang="en">
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
        <meta charset="UTF-8">
        <link rel="stylesheet" type="text/css" href="/CSS/main.css">
        <title>Cart </title>
    </head>
    <body>
        <nav class="navbar narbar-default">
            <div class="container-fluid">
                <div class="navbar-header">
                    <a class="navbar-brand" href="index.php">BobEnterprise</a>
                </div>
                <ul class="nav navbar-nav">
                    <li><a href="item.php"><b>Items</b></a></li>
                    <li><a href="cart.php"><img id="symbol" src= "IMAGES/cart.png"></a></li>
                </ul>
            </div>
        </nav>
        <form class="formInputs">
            <div class="form-group row">
              <label for="example-text-input" class="col-xs-2 col-form-label">Address</label>
              <div class="text-center col-xs-6">
                  <input class="form-control" type="text" placeholder="Address" id="example-text-input">
              </div>
            </div>
            <div class="form-group row">
              <label for="example-email-input" class="col-xs-2 col-form-label">Email</label>
              <div class="col-xs-6">
                <input class="form-control" type="email" placeholder="bootstrap@example.com" id="example-email-input">
              </div>
            </div>
            <div class="form-group row">
              <label for="example-tel-input" class="col-xs-2 col-form-label">Telephone</label>
              <div class="col-xs-6">
                <input class="form-control" type="tel" placeholder="1-(555)-555-5555" id="example-tel-input">
              </div>
            </div>
<!--            <div class="form-group row">
              <label for="example-password-input" class="col-xs-2 col-form-label">Password</label>
              <div class="col-xs-10">
                <input class="form-control" type="password" value="hunter2" id="example-password-input">
              </div>
            </div>-->
        </form>
    </body>
    <a href="finishOrder.php">Next Page</a>
    <?php
    session_unset(); 

// destroy the session 
session_destroy(); 
?>
</html>