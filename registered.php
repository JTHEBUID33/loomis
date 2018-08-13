<?php
    $servername = "localhost";
$username = "flypadic_001";
$password = "An0therrichard3303";
$dbname = "flypadic_001";
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$phone = $_POST['CPhone'];
$shipdate = $_POST['shipdate'];
$shippersname = $_POST['shippersname'];
$shippersaddress = $_POST['shippersaddress'];
$deliverydate = $_POST['deliverydate'];
$receiversname = $_POST['receiversname'];
$receiversaddress = $_POST['receiversaddress'];
$weight = $_POST['weight'];
$address1 = $_POST['address1'];
$address2 = $_POST['address2'];
$address3 = $_POST['address3'];
$address4 = $_POST['address4'];
$trackingid = $_POST['trackingid'];
$status = '0';
$a = $_POST['a'];
date_default_timezone_set('UTC');
$date = date('d-m-Y H:m:s');
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT 	trackingid FROM tracking WHERE 	trackingid='$trackingid'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo '<script>

    alert("Tracking ID EXISTS TRY ANOTHER ONE");

</script>
</script> <script>window.location = 

"https://loomislogistics.com"</script>';
exit();
    }
}else { 
$sql = "INSERT INTO tracking (shipdate, shippersname, shippersaddress, deliverydate, receiversname, receiversaddress, weight, address1, address2, address3, address4, trackingid, a, status)
VALUES ('$shipdate', '$shippersname', '$shippersaddress', '$deliverydate', '$receiversname', '$receiversaddress', '$weight', '$address1', '$address2', '$address3', '$address4', '$trackingid', '$a', '$status')";
   // send sms.
 // Account details
    	$apiKey = urlencode('Px74TYkN/n4-UuLClOY7GJfVDkZ0ftnAL41eL8KrRu');
    	$customised="Good day,$receiversname.your package is being processed.Thank you for Choosing dtodlogistics";
    	// Message details
    	$numbers = array($phone);
    	$sender = urlencode('LOOMIS');
    	$message = rawurlencode($customised);
     
    	$numbers = implode(',', $numbers);
     
    	// Prepare data for POST request
    	$data = array('apikey' => $apiKey, 'numbers' => $numbers, "sender" => $sender, "message" => $message);
     
    	// Send the POST request with cURL
    	$ch = curl_init('https://api.txtlocal.com/send/');
    	curl_setopt($ch, CURLOPT_POST, true);
    	curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
    	curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    	$response = curl_exec($ch);
    	curl_close($ch);

if ($conn->query($sql) === TRUE) {
   
 
    	
    	// Process your response here
    echo '<script>
    alert("CLIENT REGISTRATION SUCCESSFULL");

</script>
</script> <script>window.location = 

"https://loomislogistics.com"</script>';
exit();
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
}
$conn->close();
?> 