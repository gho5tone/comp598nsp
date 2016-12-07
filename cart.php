<?php
        session_start();
        if($_SESSION['GUEST'] != "guest"){
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
        
    </body>
    <div><strong>Your Cart </strong>
    </div>
    <form method="get">
    <?php
//    session_start();
//    if(isset($_SESSION['cartNum'])) {
//      echo "Your session is running " . $_SESSION['cartNum'];
//    }
        $mysqli = new mysqli("localhost", "bob", "virtue25", "bobenterprise");
        if ($mysqli->connect_error) {
                die("Connection failed: " . $mysqli->connect_error);
            }
        $query="select numberOfItems from bobenterprise.purchaseitem where buyersId = (SELECT id FROM buyers ORDER BY id DESC LIMIT 1);";
        $result = mysqli_query($mysqli, $query);
        while($row = mysqli_fetch_array($result))
          {
          echo '<div class="col-xs-1">
          Time Machine
            <input class="form-control" name="cartAmount" type="text" placeholder=" '.$row['numberOfItems']. '"></div>'; 
          echo "<br />";
          }
        $cartAmt = $_GET['cartAmount'];
        $update = "update bobenterprise.purchaseItem set numberOfItems= $cartAmt where buyersId = (SELECT id FROM buyers ORDER BY id DESC LIMIT 1)";
        mysqli_query($mysqli, $update);
    ?>
        <strong> Change amount and Press enter then click next page</strong>
        </form>
    <a href="order.php">Next Page</a>
</html>