<?php
	session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title>Create2</title>
</head>
<body>
	<?php
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "wsa";

		$conn =new mysqli($servername,$username,$password,$dbname);

		$sql = "INSERT INTO customerweek2 VALUES ('".$_POST["customerID"]."',".$_POST["custname"].",'".$_POST["Addressline1"]."',".$_POST["Town"].",'".$_POST["Country"]."','".$_POST["Tel"]."')";
		
		if($conn->query($sql)===TRUE){
			echo "Thank you!!!<br>";
			echo "<a href='show-information.php'>Back</a>";
		}
		else{
			echo "Sorry, you failed.";
            echo "<a href='show-information.php'>Back</a>";
		}
		$conn->close();
	?>

</body>
</html>