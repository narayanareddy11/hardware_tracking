<?php
$servername = "127.0.0.1";
$username = "root";
$password = "";
$dbname = "test1";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

//$sql = "SELECT id, employee_name, employee_salary FROM employee";

$sql = "SELECT * FROM employee";

$id_num =1;


$result = $conn->query($sql);       
$my_file = 'database_retrive.txt';
$handle = fopen($my_file, 'w') or die('Cannot open file:  '.$my_file);
fwrite($handle, "");
fclose($handle);



if ($result->num_rows > 0) {
    // output data of each row
	while($row = $result->fetch_assoc()) {
		$database_x = $row["Serial_Number"];
        $id_num = $row["id"];
		$handle1 = fopen($my_file, 'a') or die('Cannot open file:  '.$my_file);
		fwrite($handle1, $database_x . " ". $id_num .  "\n");	
		 
	}
	echo $id_num;
	fclose($handle1);
}

else {
   
    echo $id_num;
}
$conn->close();
?> 
