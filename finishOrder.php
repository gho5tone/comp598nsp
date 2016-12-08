<!DocType HTML>
<html lang="en">
        <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
        <meta charset="UTF-8">
        <link rel="stylesheet" type="text/css" href="/CSS/main.css">
        <title>the bob </title>
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
        <div>
        <strong>Thank you for ordering the time machine!</strong>
        </div>
    </body>
        <?php
        session_unset(); 
        // destroy the session 
        session_destroy(); 
        ?>
</html>