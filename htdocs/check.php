
<?php
$uid = $_POST['uid'];
$pw = $_POST['pw'];

if($uid == 'admin' and $pw == 'admin')
{	
	session_start();
	$_SESSION['sid']=session_id();
	header("location:lab.php");
}

else
	{
		header("location:index.php");
	}
?>
