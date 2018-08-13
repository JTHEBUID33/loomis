<?php
  $servername = "localhost";
$username = "flypadic_001";
$password = "An0therrichard3303";
$dbname = "flypadic_001";
$stop = $_POST['stop'];
$status = $_POST['status'];

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if (isset($_POST['stop'])){
    
    $sql = "SELECT * FROM tracking WHERE trackingid='$stop'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    
    
        $sql = "UPDATE tracking SET status='$status' WHERE trackingid='$stop'";
if ($conn->query($sql) === TRUE) {
   
 
    	
    	// Process your response here
    echo '<script>
    alert("CHANGES MADE SUCESSFULLY");

</script>
</script> <script>window.location = 

"https://loomislogistics.com/register.php"</script>';
exit();
}
    
}else{
      echo '<script>

    alert("Wrong Tracking ID Crosscheck");

</script>
</script> <script>window.location = 

"https://loomislogistics.com/register.php"</script>';
exit();
    
}
    
}else{
    
    echo '<script>

    alert("Missing Token");

</script>
</script> <script>window.location = 

"https://loomislogistics.com"</script>';
exit();
}

?> 