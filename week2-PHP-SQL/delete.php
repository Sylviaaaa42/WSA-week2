<!DOCTYPE html>
<html>
<head>
	<title>delete</title>
</head>
<body>
	<?php
		$servername = "localhost";
		$username = "root";
		$password = "";
		$dbname = "wsa";

		$conn = new mysqli($servername, $username, $password, $dbname);

		$sqldelete = "DELETE FROM customerweek2 WHERE customerID= ".$_GET['customerID'];
		?>

		 <form action="delete.php?id=<?php echo $_GET['customerID']; ?>&name=<?php echo $_GET['custname']; ?>" method='post'>
			<lable> Please tick this box if you 100% want to delete the pokemon <?php echo $_GET['custname']; ?> from your Pokedex</lable><br>
			<input type="checkbox" name="confirm">
			<input type="submit" name="submit">	
		</form> -->


		<?php
			if ($_SERVER["REQUEST_METHOD"] == "POST"){
				if ($_POST['confirm'] == "on"){
					$sqldelete = "DELETE FROM customerweek2 WHERE customerID= ".$_GET['customerID'];
					
					if ($connection->query($sqldelete) === TRUE){
						echo "New record deleted successfully, <a href='show-information.php'>click here</a> to leave this page";
					}
					else{
						echo "Delete Failed, please try again later";
					}
				}
				else{
					echo "To delete this kabutack, please ensure you select the box above.";
				}

			}





	?>

</body>
</html>