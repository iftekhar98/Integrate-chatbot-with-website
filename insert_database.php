<html>
<head>
	
</head>
<body>
<?php

	$servername = "localhost";
	$username = "root";
	$password = "";
	$db = "robot_movement";

	$conn = new mysqli($servername, $username, $password, $db);

	if ($conn->connect_error) {
				die("Error: Connection to DB Server Fails </body></html>");
			}

	 if ($_POST['direction'] == 'F') {
      $sql = "INSERT INTO directions (toLeft, toRight, forward,backward, stop)
			VALUES (0, 0, 'F',0,0)";
	   $conn->query($sql);
     } 
     elseif ($_POST['direction'] == 'B') {
        $sql = "INSERT INTO directions (toLeft, toRight, forward,backward, stop)
			VALUES (0, 0, 0,'B',0)";
		$conn->query($sql);
     } 
     elseif ($_POST['direction'] == 'R') {
        $sql = "INSERT INTO directions (toLeft, toRight, forward,backward, stop)
			VALUES (0, 'R', 0,0,0)";
		$conn->query($sql);
     }
     elseif ($_POST['direction'] == 'L') {
        $sql = "INSERT INTO directions (toLeft, toRight, forward,backward, stop)
			VALUES ('L', 0, 0,0,0)";
		$conn->query($sql);
     }
     elseif ($_POST['direction'] == 'S') {
        $sql = "INSERT INTO directions (toLeft, toRight, forward,backward, stop)
			VALUES (0, 0, 0,0,'S')";
		$conn->query($sql);
     }   
     else {
    echo "invalid";
     }
     echo '<script language="javascript">';
                echo '</script>';
                echo"<script type=\"text/javascript\">
                document.location.href='http://localhost/Smart_Methods_Training/Control_panel.html';
                </script>";

 $conn->close();
?>
</body>
</html>