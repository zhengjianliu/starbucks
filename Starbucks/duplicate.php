<?php

require('mysqli_connect.php');

$id = $_GET['id']; // get id through query string
$add = mysqli_query($dbc,"INSERT INTO cart2 (teaName,sizeName, addIn, Toppings, Flavors, CupOptions, teaPrice) SELECT teaName,sizeName, addIn, Toppings, Flavors, CupOptions, teaPrice FROM cart2 WHERE id = '$id'"); // add query

if($add)
{
    mysqli_close($dbc); // Close connection
    header("Refresh:0; URL=cart.php"); // redirects to all records page
    exit;	
}
else
{
    echo "Error adding record"; // display error message if not delete
    echo "<p>".mysqli_error($dbc)."</p>";
}
?>
