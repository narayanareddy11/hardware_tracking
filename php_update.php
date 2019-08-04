<?php
$servername = "127.0.0.1";
$username = "root";
$password = "";
$dbname = "test1";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} else{
	echo "";
}
foreach(file('php_update.txt') as $file_database) {
	$f_database =  explode(" ",$file_database); 
	
	$sql = "UPDATE employee SET Status='CHECKED IN' WHERE id=". $f_database[1];
	if ($conn->query($sql) === TRUE) {
		echo "Updated successfully  : " . $file_database ;
	} else {
		echo "Error updating record: " . $conn->error;
	}
}
$conn->close();
?>







