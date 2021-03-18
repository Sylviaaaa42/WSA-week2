<html>
<head></head>
<link rel="stylesheet" href="https://cdn.staticfile.org/twitter-bootstrap/3.3.7/css/bootstrap.min.css">  
<body>
<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "classicmodels";

    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);

    // // Check connection
    // if ($conn->connect_error) {
    //     die("Connection failed: " . $conn->connect_error);
    //     exit();
    // } else
    // echo "Connected successfully to the ".$dbname." database.\n";

	$sql = "SELECT * FROM customers";
    $result = mysqli_query($conn, $sql);
        

    echo "<div class='container'>
                <table class='table'> 
                    <caption class='text-center'><h2>Exercise2-Customers</h2></caption>
                   <thead> 
                        <tr>
                            <th>CustomerNumber</th>
                            <th>CustomerName</th>
                            <th>Phone</th>
                            <th>Addressline1</th>
                            <th>Addressline2</th> 
                            <th>city</th>
                            <th>PostalCode</th>
                            <th>SalesRepEmployeeNumber</th>
                            <th>CreditLimit</th>    
                        </tr>
                    </thead>"; 
    if (mysqli_num_rows($result) > 0) {
        // output data of each row
        while($row = mysqli_fetch_assoc($result)) {
           echo "<tbody><tr>
                 <td> ". $row['customerNumber'] . "</td>
                <td> ". $row['customerName'] . "</td>
                <td> ". $row['phone'] . "</td>
                <td> ". $row['addressLine1'] ." </td>
                <td> ". $row['addressLine2'] . "</td>
                <td> ". $row['city'] . "</td>
                <td> ". $row['postalCode'] . "</td>
                <td> ". $row['salesRepEmployeeNumber'] ." </td>
                <td>" . $row['creditLimit'] . "</td>
                </tr></tbody>";              
        }
    } else {
        echo "0 results";
    }
    echo"</table></div>";
    mysqli_close($conn);

?>

</body>
</html>