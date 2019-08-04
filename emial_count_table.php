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

$sql = "SELECT A.Borrower, A.C AS Total_HW, B.c as Missing_HW  FROM (select Borrower, count(*) c from employee group by Borrower having c>0) AS A LEFT OUTER JOIN (select Borrower, count(*) c from employee WHERE (Other_fileds1 is NULL OR Other_fileds1 = '')  group by Borrower having c>0)  AS B ON A.Borrower =B.Borrower ORDER BY missing_HW DESC;";
$id_num =1;
$result = $conn->query($sql);       
$my_file = 'xlsx_coverage.txt';
$handle = fopen($my_file, 'w') or die('Cannot open file:  '.$my_file);
fwrite($handle, "");
fclose($handle);
if ($result->num_rows >= 0) {
    // output data of each row
	while($row = $result->fetch_assoc()) {
	
  		
        $Borrower = str_replace("\n","",$row["Borrower"]);
		$Total_HW = str_replace("\n","",$row["Total_HW"]);

		$Missing_HW = str_replace("\n","",$row["Missing_HW"]);
		

		if(empty($row['Borrower'])) {
			$Borrower = "No-Name";
		}if(empty($row['Total_HW'])) {
			$Total_HW = "-";
		}if(empty($row['Missing_HW'])) {
			$Missing_HW = "-";
		}else {
   		
		}
		echo $Borrower." ".$Total_HW . " ",  $Missing_HW. "\n";
		
		

		 
	}    

}


$conn->close();
?> 
