<?php
$servername = "localhost";
$username = "flypadic_001";
$password = "An0therrichard3303";
$dbname = "flypadic_001";
$date = date('m-d-Y');
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";

// sql to create table
$sql = "CREATE TABLE tracking (
id INT(8) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
shipdate VARCHAR(60) NOT NULL,
shippersname VARCHAR(60) NOT NULL,
shippersaddress VARCHAR(60) NOT NULL,
deliverydate VARCHAR(60) NOT NULL,
receiversname VARCHAR(60) NOT NULL,
receiversaddress VARCHAR(60) NOT NULL,
weight VARCHAR(60) NOT NULL,
address1 VARCHAR(60) NOT NULL,
address2 VARCHAR(60) NOT NULL,
address3 VARCHAR(60) NOT NULL,
address4 VARCHAR(60) NOT NULL,
address5 VARCHAR(60) NOT NULL,
status VARCHAR(60) NOT NULL,
trackingid VARCHAR(60) NOT NULL,
a VARCHAR(60) NOT NULL,
reg_dateauto TIMESTAMP
)";

if ($conn->query($sql) === TRUE) {
    echo "Table register created successfully";
} else {
    echo "Error creating table: " . $conn->error;
}

$conn->close();
/*try {
    $dbh = new PDO('mysql:host=localhost;dbname=ddxlogis_001', 'ddxlogis_001', 'An0therrichard3303');
    
  echo 'connected';

} catch (PDOException $e) {
    print "Error!: " . $e->getMessage() . "<br/>";
    die();
}*/
?> 