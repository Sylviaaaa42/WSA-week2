<?php
	session_start();
?>
<html>
<head></head>
<link rel="stylesheet" href="https://cdn.staticfile.org/twitter-bootstrap/3.3.7/css/bootstrap.min.css">  
<body>
<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "wsa";

    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);

    // // Check connection
    // if ($conn->connect_error) {
    //     die("Connection failed: " . $conn->connect_error);
    //     exit();
    // } else
    // echo "Connected successfully to the ".$dbname." database.\n";

	$sql = "SELECT * FROM customerweek2";
    $result = mysqli_query($conn, $sql);
    echo "<div class='container'>
        <table class='table'> 
            <caption class='text-center'><h2>how-Customer-Information</h2></caption>
            <thead> 
                <tr>
                    <th>Customer ID</th>
                    <th>Customer Name</th>
                    <th>Address line1</th>
                    <th>Town</th>
                    <th>Country</th>
                    <th>Phone</th>  
                </tr>
            </thead>"; 
    if (mysqli_num_rows($result) > 0) {
        // output data of each row
        while($row = mysqli_fetch_assoc($result)) {
            echo "<tbody><tr>
                <td> ". $row['customerID'] . "</td>
                <td> ". $row['custname'] . "</td>
                <td> ". $row['Addressline1'] ." </td>
                <td> ". $row['Town'] . "</td>
                <td> ". $row['Country'] . "</td>
                <td> ". $row['Tel'] ." </td>
                <td><a href='create.php'>Create</a></td>
                <td><a href='delete.php'>Delete</a></td>
                <td><a href='update.php'>Update</a></td>
                </tr></tbody>";              
        }
    } 
            echo"</table></div>";
            mysqli_close($conn);
        
        ?>

</body>
</html>