<!doctype html>
<html lang="en">
    <head>
    <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
        <link href="cart.css" rel="stylesheet" type = "text/css"/>
        <title>Starbucks Coffee Company</title>
 
    </head>

    <body>
        <?php
            require('mysqli_connect.php'); //Connect to the db
            $query= "SELECT * FROM cart2"; 
            $run = mysqli_query($dbc,$query);//Run the query 
            $count = mysqli_num_rows($run);
            $result = mysqli_query($dbc,'SELECT SUM(teaPrice) AS value_sum FROM cart2'); 
            $row = mysqli_fetch_assoc($result); 
            $subtotal = $row['value_sum']; 
            $tax = round($subtotal * 0.08875,2);
            $total = round($subtotal + $tax,2);
        ?>

        <div class="row">
            <div class="col-md-4 fixed-top">
                <img id="logo" src="starbucks.png">
                <a href="index.php">
                    <p class="back-to-menu">
                        &lt;    Back to menu
                    </p>
                </a>
                <div class="review">
                    <p><strong>Review Order (<span id="amount"><?php echo $count;?></span>)</strong></p>
                    <p class="pickup">
                        <span>Pickup at:</span><br>
                        <span id="bold">254-21 Horace Harding Expressway</span><br>
                        <span>Prep time 3 to 6 minutes</span>
                    </p>
                </div>
            </div>

            <div class="col-md-8 offset-md-4">
                <div id='content'>
                    <?php
                        while($row = mysqli_fetch_array($run, MYSQLI_ASSOC)){
                            echo "<div class='item'>
                            <img class='orderimage' src='images/{$row['teaName']}.jpg'>
                            <div class='description'>
                                <p class='itemname'>{$row['teaName']}</p>
                                <p>
                                {$row['sizeName']}<br>
                                    150&#9734 item
                                </p>
                                <button type='button' class='button'><img class='icons' src='icons/heart.jpg'></button>
                                <a href='delete.php?id=".$row['id']."'><button type='button' class='delete_button'><img class='icons' src='icons/minus.jpg'></button></a>
                                <a href='duplicate.php?id=".$row['id']."'><button type='button' class='add_button'><img class='icons' src='icons/plus.jpg'></button></a>
                            </div>
                            <div id='price'>\${$row['teaPrice']}</div>
                        </div>";
                        }; 
                    ?>
                    

                    <div class="balance">
                        <ul>
                            <li>Subtotal.......................................................................<strong  id="subtotal">$<?php echo $subtotal; ?></strong></li>
                            <li>Tax 8.875%..................................................................<strong id="tax">$<?php echo $tax; ?></strong></li>
                            <li><strong>Total</strong>............................................................................<strong class="total">$<?php echo $total; ?></strong></li>
                        </ul>  
                    </div>
                </div>
                <div class="buttonplacement">
                    <button type="submit" class="roundedbutton btn btn-success">Checkout: <span class="total">$<?php echo $total; ?></span></button>
                </div>
            </div>
        </div>
        <?php
                mysqli_close($dbc); //close database
        ?> 
    </body>
</html>
