<?php

require('mysqli_connect.php');

$id = $_GET['id']; // get id through query string

$del = mysqli_query($dbc,"DELETE FROM cart2 WHERE id = '$id'"); // delete query

if($del)
{
    mysqli_close($dbc); // Close connection
    header("Refresh:0; URL=cart.php"); // redirects to all records page
    exit;	
}
else
{
    echo "Error deleting record"; // display error message if not delete
    echo "<p>".mysqli_error($dbc)."</p>";
}
?>