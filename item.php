<!DocType HTML>
<html lang="en">
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
        <meta charset="UTF-8">
        <link rel="stylesheet" type="text/css" href="/CSS/main.css">
        <title>Items </title>
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
        <div class="itemTitle">
            <strong>The Wonderful, Majastic, and Wimsical Time Machine</strong>
        </div>
        <img src="IMAGES/timeMachine.jpg">
        <br>
        <div class="itemText">
            One of One from the famous Dr's collection, this actual device will send you foward or back in time.  
            <br>*Disclaimer Do not own a cat, we have seen many cases where the cat trips on the settings buttons *
        </div>
        <form method="post">
            <div class="text-center">
            <!--a href="cart.php"-->
                <br>
                Price: $69.95
                <br>
                <br>
            <input type="submit" name="submit" value="submit" class="btn btn-primary">
            <!--/a-->
            </div>
        </form>
        
        <?php
        if(isset($_POST['submit'])){
            $mysqli = new mysqli("localhost", "bob", "virtue25", "bobenterprise");
            if ($mysqli->connect_error) {
                die("Connection failed: " . $mysqli->connect_error);
            }
            $queryInsertGuest = "Insert into bobenterprise.buyers(fName,lName,email) values('guest', 'yahoo', 'guest@email.com')";
            echo "here";
            $queryInserttoCart = "Insert into bobenterprise.purchase(id, userId) values(1, select id from bobenterprise.buyers where id = '1';)";
            mysqli_query($mysqli, $queryInsertGuest ) or die("Query fail: " . mysqli_error());
            mysqli_query($mysqli, $queryInserttoCart);
            //run/execute mysql query
            echo "<h2>PHP is Fun!</h2>";
        }
        ?>
    </body>
</html>