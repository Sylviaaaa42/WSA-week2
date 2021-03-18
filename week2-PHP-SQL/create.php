<?php
	session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title>Exercise 2</title>
    <link rel="stylesheet" href="https://cdn.staticfile.org/twitter-bootstrap/3.3.7/css/bootstrap.min.css">  
</head>
<body>
	<form name='customers' method='post' action='create2.php' class="text-center">
        <br><label><h2>Create-Customer-Information</h2></label><br><hr>
        <label>Customer ID : </label><input name="customerID" type="text" required><br><br>
        <label>Cutomer Name : </label><input name="custname" type="text" required><br><br>
        <label>Address Line : </label><input name="Addressline1" type="text" required><br><br>
        <label>Town : </label><input name="Town" type="text" required><br><br>
        <label>Country : </label><input name="Country" type="text" required><br><br>
        <label>Phone : </label><input name="Tel" type="text" required><br><br>
        <input type="submit" value="Submit"><br><br>
    </form>

</body>
</html>