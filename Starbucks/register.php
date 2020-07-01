<?php
	if($_SERVER["REQUEST_METHOD"] == "POST"){

		require('mysqli_connect.php');// Connect to the db	
		$name = mysqli_real_escape_string($dbc,$_POST['teaName']);
		$size = mysqli_real_escape_string($dbc,$_POST['sizeName']);
		$addIn = mysqli_real_escape_string($dbc, $_POST['addIn']);
		$topping = mysqli_real_escape_string($dbc, $_POST['Toppings']);
		$flavor = mysqli_real_escape_string($dbc, $_POST['Flavors']);
		$cupOption = mysqli_real_escape_string($dbc, $_POST['CupOptions']);
		$price = floatval($_POST['teaPrice']);
		$query = "INSERT INTO cart2 (teaName,sizeName, addIn, Toppings, Flavors, CupOptions, teaPrice) VALUES ('$name', '$size','$addIn','$topping','$flavor','$cupOption', '$price' )";
		
		mysqli_query($dbc, $query); //Run the query

		if (mysqli_affected_rows($dbc) == 1) {
			header("Refresh:0; URL=cart.php");
		}else {
			echo "<p>Something went wrong! Please try again.</p>";
			echo "<p>".mysqli_error($dbc)."</p>";
		}

		mysqli_close($dbc);//Close the db connection
	}
?>
