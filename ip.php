<?php
// MySQL credentials
    $host = "yourdb";
    $user = "user";
    $pass = "pass";
    $db = "your_db";

// Connect to MySQL server
$conn = new mysqli($host, $user, $pass, $db);

if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
$ip = $_GET['ip'];
$deviceno = $_GET['devicenomer'];
                   
$check_query = "SELECT * FROM dataADD WHERE devicenomer = '$deviceno'";
$result = $conn->query($check_query);

if ($result->num_rows > 0) {
  // Device number already exists, update the IP
  $update_query = "UPDATE dataADD SET ip = '$ip' WHERE devicenomer = '$deviceno'";

  if ($conn->query($update_query) === TRUE) {
    echo "IP berhasil diperbarui";
  } else {
    echo "Error: " . $update_query . "<br>" . $conn->error;
  }
} 
else {
  // Device number doesn't exist, add a new entry
  $insert_query = "INSERT INTO dataADD (devicenomer, ip) VALUES ('$deviceno', '$ip')";

  if ($conn->query($insert_query) === TRUE) {
    echo "Entri baru berhasil ditambahkan";
  } else {
    echo "Error: " . $insert_query . "<br>" . $conn->error;
  }
}

$query_hapus_duplikat=mysqli_query($conn,"DELETE t1 FROM dataADD t1,dataADD t2 WHERE t1.devicenomer=t2.devicenomer AND t1.id<t2.id");

// Close MySQL connection
$conn->close();

?>
<!-- o0X4hxog%jPa[Vy{ -->
<!-- wEJaoys%o#ufZ!k^an5I -->

