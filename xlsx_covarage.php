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
$my_file = 'xlsx_coverage.txt';
$handle = fopen($my_file, 'w') or die('Cannot open file:  '.$my_file);
fwrite($handle, "");
fclose($handle);
if ($result->num_rows > 0) {
    // output data of each row
	while($row = $result->fetch_assoc()) {
	
  		
        $id_num = str_replace("\n","",$row["id"]);
		$Serial_Number = str_replace("\n","",$row["Serial_Number"]);
		$Part = str_replace("\n","",$row["Part"]);
		$Revision = str_replace("\n","",$row["Revision"]);
		$Project = str_replace("\n","",$row["Project"]);
		$User_Defined_Description = str_replace("\n","",$row["User_Defined_Description"]);
		$Status = str_replace("\n","",$row["Status"]);
		$Manufacturer = str_replace("\n","",$row["Manufacturer"]);
		$Manufacturer_Part_Number = str_replace("\n","",$row["Manufacturer_Part_Number"]);
		$PartLocation = str_replace("\n","",$row["PartLocation"]);
		$Frozen_Cost = str_replace("\n","",$row["Frozen_Cost"]);
		$AgilePartType = str_replace("\n","",$row["AgilePartType"]);
		$CountryofOrigin = str_replace("\n","",$row["CountryofOrigin"]);
		$Category = str_replace("\n","",$row["Category"]);
		$TestStatus =str_replace("\n","", $row["TestStatus"]);
		$PurchasingCC = str_replace("\n","",$row["PurchasingCC"]);
		$User_Defined_Original_Cost = str_replace("\n","",$row["User_Defined_Original_Cost"]);
		$AllocatedBorrower = str_replace("\n","",$row["AllocatedBorrower"]);
		$Asset = str_replace("\n","",$row["Asset"]);
		$RecallDate = str_replace("\n","",$row["RecallDate"]);
		$ShippingInfo = str_replace("\n","",$row["ShippingInfo"]);
		$BondingInfo = str_replace("\n","",$row["BondingInfo"]);
		$PONumber = str_replace("\n","",$row["PONumber"]);
		$Bulk_Qunatity = str_replace("\n","",$row["Bulk_Qunatity"]);
		$PartComment = str_replace("\n","",$row["PartComment"]);
		$CurrentOwner = str_replace("\n","",$row["CurrentOwner"]);
		$Borrower_CC = str_replace("\n","",$row["Borrower_CC#"]);
		$Borrower = str_replace("\n","",$row["Borrower"]);
		$TimesOut = str_replace("\n","",$row["TimesOut"]);
		$Reason = str_replace("\n","",$row["Reason"]);
		$Due_Date = str_replace("\n","",$row["Due_Date"]);
		$Last_Inventoried_Date = str_replace("\n","",$row["Last_Inventoried_Date"]);
		$File_Attachment_Title = str_replace("\n","",$row["File_Attachment_Title"]);
		$System_Service_Tag = str_replace("\n","",$row["System_Service_Tag"]);
		$Other_fileds1 = str_replace("\n","",$row["Other_fileds1"]);

		
		$handle1 = fopen($my_file, 'a') or die('Cannot open file:  '.$my_file);
		
		fwrite($handle1, $id_num."#@".$Serial_Number."#@".$Other_fileds1."#@".$Part. "#@".$Revision."#@".$Project. "#@".$User_Defined_Description."#@".$Status."#@".$Manufacturer."#@".$Manufacturer_Part_Number."#@".$PartLocation."#@".$Frozen_Cost."#@".$AgilePartType."#@".$CountryofOrigin."#@".$Category."#@".$TestStatus."#@".$PurchasingCC."#@".$User_Defined_Original_Cost."#@".$AllocatedBorrower."#@".$Asset."#@".$RecallDate."#@".$ShippingInfo."#@".$BondingInfo."#@".$PONumber."#@".$Bulk_Qunatity."#@".$PartComment."#@".$CurrentOwner."#@".$Borrower_CC."#@".$Borrower."#@".$TimesOut."#@".$Reason ."#@".$Due_Date."#@".$Last_Inventoried_Date."#@".$File_Attachment_Title."#@".$System_Service_Tag."\n");
		

		 
	}    
	echo $id_num;
	fclose($handle1);
}

else {
   
    echo $id_num;
}
$conn->close();
?> 
