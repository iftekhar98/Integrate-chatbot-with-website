<?php
    $servername = "localhost";
	$username = "root";
	$password = "";
	$db = "robot_movement";
echo "<style> body { background-color:#438b94 ; } </style>";

$conn = new mysqli($servername, $username, $password, $db);

if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql =mysqli_query($conn,"SELECT * FROM directions ORDER BY id DESC LIMIT 1");
$check_data = mysqli_fetch_row($sql);


for ($i=1; $i < 6 ; $i++) { 
  if ($check_data[$i] !== '0') {
    echo $check_data[$i];
  }
}


$conn->close();
?>