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

$table= "CREATE TABLE IF NOT EXISTS `employee` (
 `id` int(255) NOT NULL AUTO_INCREMENT COMMENT 'primary key',
  `Serial_Number` varchar(255) NOT NULL COMMENT 'Serial Number',
  `Part` varchar(255) NOT NULL COMMENT 'Part',
  `Revision` varchar(255) NOT NULL COMMENT 'Revision',
  `Project` varchar(255) NOT NULL COMMENT 'Project',
  `User_Defined_Description` varchar(255) NOT NULL COMMENT 'User Defined Description',
  `Status` varchar(255) NOT NULL COMMENT 'Status',
  `Manufacturer` varchar(255) NOT NULL COMMENT 'Manufacturer',
  `Manufacturer_Part_Number` varchar(255) NOT NULL COMMENT 'Manufacturer Part Number',
  `Location` varchar(255) NOT NULL COMMENT 'Location',
  `PartLocation` varchar(255) NOT NULL COMMENT 'PartLocation',
  `Frozen_Cost` varchar(255) NOT NULL COMMENT 'Frozen Cost',
  `AgilePartType` varchar(255) NOT NULL COMMENT 'AgilePartType',
  `CountryofOrigin` varchar(255) NOT NULL COMMENT 'CountryofOrigin',
  `Category` varchar(255) NOT NULL COMMENT 'Category',
  `TestStatus` varchar(255) NOT NULL COMMENT 'TestStatus',
  `PurchasingCC` varchar(255) NOT NULL COMMENT 'PurchasingCC',
  `User_Defined_Original_Cost` varchar(255) NOT NULL COMMENT 'User Defined Original Cost',
  `AllocatedBorrower` varchar(255) NOT NULL COMMENT 'AllocatedBorrower',
  `Asset` varchar(255) NOT NULL COMMENT 'Asset',
  `RecallDate` varchar(255) NOT NULL COMMENT 'RecallDate',
  `ShippingInfo` varchar(255) NOT NULL COMMENT 'ShippingInfo',
  `BondingInfo` varchar(255) NOT NULL COMMENT 'BondingInfo',
  `PONumber` varchar(255) NOT NULL COMMENT 'PONumber',
  `Bulk` varchar(255) NOT NULL COMMENT 'Bulk',
  `Bulk_Qunatity` varchar(255) NOT NULL COMMENT 'Bulk Qunatity',
  `PartComment` varchar(255) NOT NULL COMMENT 'PartComment',
  `CurrentOwner` varchar(255) NOT NULL COMMENT 'CurrentOwner',
  `Borrower_CC#` varchar(255) NOT NULL COMMENT 'Borrower CC#',
  `Borrower` varchar(255) NOT NULL COMMENT 'Borrower',
  `TimesOut` varchar(255) NOT NULL COMMENT 'TimesOut',
  `Reason` varchar(255) NOT NULL COMMENT 'Reason',
  `Due_Date` varchar(255) NOT NULL COMMENT 'Due Date',
  `Last_Inventoried_Date` varchar(255) NOT NULL COMMENT 'Last Inventoried Date',
  `File_Attachment_Title` varchar(255) NOT NULL COMMENT 'File Attachment Title',
  `System_Service_Tag` varchar(255) NOT NULL COMMENT 'System Service Tag',
  `Other_fileds1` varchar(255) NOT NULL COMMENT 'Other fileds1',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 COMMENT='datatable demo table' AUTO_INCREMENT=300";

$re_table = $conn->query($table); 


$sql = "SELECT * FROM employee";
$result = $conn->query($sql); 
   
if ($result->num_rows >= 0) {
    // output data of each row
	foreach(file('database_add.txt') as $file_database) {
		$f_database =  explode(" ",$file_database); 
	$sql = "INSERT INTO `employee` (`id`, `Serial_Number`, `Part`, `Revision`, `Project`, `User_Defined_Description`, `Status`, `Manufacturer`, `Manufacturer_Part_Number`, `Location`, `PartLocation`, `Frozen_Cost`, `AgilePartType`, `CountryofOrigin`, `Category`, `TestStatus`, `PurchasingCC`, `User_Defined_Original_Cost`, `AllocatedBorrower`, `Asset`, `RecallDate`, `ShippingInfo`, `BondingInfo`, `PONumber`, `Bulk`, `Bulk_Qunatity`, `PartComment`, `CurrentOwner`, `Borrower_CC#`, `Borrower`, `TimesOut`, `Reason`, `Due_Date`, `Last_Inventoried_Date`, `File_Attachment_Title`, `System_Service_Tag`, `Other_fileds1`) VALUES" . $file_database;
	sleep(0.001);

	if ($conn->query($sql) === TRUE) {
	    echo "New record created successfully \n";
	} else {
	    echo "Errorrrrrrrrrrrrrrrrrrrrr: " . $file_database . "<br>" . $conn->error . "Errorrrrrrrrrrrrrrrr \n";
	}	 
    }
} else {
    echo "0 results";
}

$conn->close();
?> 

