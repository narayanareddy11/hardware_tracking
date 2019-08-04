
<?php
// coverage report
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
$my_file = 'database_coverage.txt';
$handle = fopen($my_file, 'w') or die('Cannot open file:  '.$my_file);
fwrite($handle, "");
fclose($handle);
if ($result->num_rows > 0) {
    // output data of each row
	while($row = $result->fetch_assoc()) {
        $id_num = $row["id"];
		$Serial_Number = $row["Serial_Number"];
		$Part = $row["Part"];
		$Category = $row["Category"];
		$Project = $row["Project"];
		$Borrower = $row["Borrower"];

		$Status = $row["Status"];
		if ($row['Status'] == 'CHECKED IN'){
			$sql = "UPDATE employee SET Other_fileds1='CHECKED IN' WHERE Status='CHECKED IN'";
			if ($conn->query($sql) === TRUE) {
				echo $row['Status']. ": ".$row['Other_fileds1']. "\n";
			} else {
				echo "Error updating record: " . $conn->error;
			}
		}
		if(empty($row['Other_fileds1'])) {
		//	if ($row['Status'] != 'IN SYSTEM'){
				
			$handle1 = fopen($my_file, 'a') or die('Cannot open file:  '.$my_file);
			fwrite($handle1, $id_num."#$".$Serial_Number."#$".$Part."#$".$Category."#$".$Project."#$".$Borrower."\n");
			//}

		} else {
   		
		}	
		 
	}    
	echo $id_num;
	fclose($handle1);
}

else {
   
    echo $id_num;
}
$conn->close();
?> 
