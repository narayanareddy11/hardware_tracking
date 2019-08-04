
<?php
	//include connection file 
	include_once("connection.php");
	
	$db = new dbObj();
	$connString =  $db->getConnstring();

	$params = $_REQUEST;
	
	$action = isset($params['action']) != '' ? $params['action'] : '';
	$empCls = new Employee($connString);

	switch($action) {
	 case 'add':
		$empCls->insertEmployee($params);
	 break;
	 case 'edit':
		$empCls->updateEmployee($params);
	 break;
	 case 'delete':
		$empCls->deleteEmployee($params);
	 break;
	 default:
	 $empCls->getEmployees($params);
	 return;
	}
	
	class Employee {
	protected $conn;
	protected $data = array();
	function __construct($connString) {
		$this->conn = $connString;
	}
	
	public function getEmployees($params) {
		
		$this->data = $this->getRecords($params);
		
		echo json_encode($this->data);
	}
	function insertEmployee($params) {
		$data = array();;
		$sql = "INSERT INTO `employee` (Serial_Number, Part, Revision, Project, Borrower, Status, Category, Other_fileds1, User_Defined_Description) VALUES('" . $params["Serial_Number"] . "', '" . $params["Part"] . "', '" . $params["Revision"] . "', '" . $params["Project"] . "', '" . $params["Borrower"] . "', '" . $params["Status"] . "', '" . $params["Category"] . "', '" . $params["Other_fileds1"] . "', '" . $params["User_Defined_Description"] . "');  ";	
		echo $result = mysqli_query($this->conn, $sql) or die("error to insert employee data");		
	}
	
	function getRecords($params) {
		$rp = isset($params['rowCount']) ? $params['rowCount'] : 25;
		
		if (isset($params['current'])) { $page  = $params['current']; } else { $page=1; };  
        $start_from = ($page-1) * $rp;
		
		$sql = $sqlRec = $sqlTot = $where = '';
		
		if( !empty($params['searchPhrase']) ) {   
			$where .=" WHERE ";
			$where .=" ( Serial_Number LIKE '".$params['searchPhrase']."%' ";    
			$where .=" OR Part LIKE '".$params['searchPhrase']."%' ";
            $where .=" OR Revision LIKE '".$params['searchPhrase']."%' ";
			$where .=" OR Project LIKE '".$params['searchPhrase']."%' ";
			$where .=" OR Borrower LIKE '".$params['searchPhrase']."%' ";
			$where .=" OR Status LIKE '".$params['searchPhrase']."%' ";
			$where .=" OR Category LIKE '".$params['searchPhrase']."%' ";
			$where .=" OR Other_fileds1 LIKE '".$params['searchPhrase']."%' ";
			$where .=" OR User_Defined_Description LIKE '".$params['searchPhrase']."%' )";
	   }
	   if( !empty($params['sort']) ) {  
			$where .=" ORDER By ".key($params['sort']) .' '.current($params['sort'])." ";
		}
	   // getting total number records without any search
		$sql = "SELECT * FROM `employee` ";
		$sqlTot .= $sql;
		$sqlRec .= $sql;
		
		//concatenate search sql if value exist
		if(isset($where) && $where != '') {

			$sqlTot .= $where;
			$sqlRec .= $where;
		}
		if ($rp!=-1)
		$sqlRec .= " LIMIT ". $start_from .",".$rp;
		
		
		$qtot = mysqli_query($this->conn, $sqlTot) or die("error to fetch tot employees data");
		$queryRecords = mysqli_query($this->conn, $sqlRec) or die("error to fetch employees data");
		
		while( $row = mysqli_fetch_assoc($queryRecords) ) { 
			$data[] = $row;
		}

		$json_data = array(
			"current"            => intval($params['current']), 
			"rowCount"            => 25, 			
			"total"    => intval($qtot->num_rows),
			"rows"            => $data   // total data array
			);
		
		return $json_data;
	}
	function updateEmployee($params) {
		$data = array();
		//print_R($_POST);die;
		$sql = "Update `employee` set Serial_Number = '" . $params["edit_Serial_Number"] . "', Part='" . $params["edit_Part"] ."', Revision='" . $params["edit_Revision"]."', Project='" . $params["edit_Project"]."', Borrower='" . $params["edit_Borrower"]."', Status='" . $params["edit_Status"]."', Category='" . $params["edit_Category"]."', Other_fileds1='" . $params["edit_Other_fileds1"]."', User_Defined_Description='" . $params["edit_User_Defined_Description"] . "' WHERE id='".$_POST["edit_id"]."'";
		
		echo $result = mysqli_query($this->conn, $sql) or die("error to update employee data");
	}
	
	function deleteEmployee($params) {
		$data = array();
		//print_R($_POST);die;
		$sql = "delete from `employee` WHERE id='".$params["id"]."'";
		
		echo $result = mysqli_query($this->conn, $sql) or die("error to delete employee data");
	}
}
?>
	
