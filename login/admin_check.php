<?php 
session_start();
include '../includes/initdb.php';

if (isset($_POST['usr']) && isset($_POST['pswd'])){

	function validate($data){
		$data = trim($data);
		$data = stripslashes($data);
		$data = htmlspecialchars($data);
		return $data;
	}


	$uname = validate($_POST['usr']);
	$pass = validate($_POST['pswd']);
	

	if (empty($uname)) {
		header("Location: admin_login.php?error=Admin ID is required");
		exit();
	}else if(empty($pass)){
		header("Location: admin_login.php?error=Password is required");
		exit();
	}else{

		$sql = "SELECT * FROM admintb WHERE AdminName='$uname' AND AdminPass='$pass'";
		$result = mysqli_query($db, $sql);
		
		if (mysqli_num_rows($result) === 1) {
			$row = mysqli_fetch_assoc($result);
			if ($row['AdminName'] === $uname && $row['AdminPass'] === $pass) {
				$_SESSION['AdminName'] = $row['AdminName'];
				$_SESSION['AdminID'] = $row['AdminID'];
				$_SESSION['admin_fname'] = $row['admin_fname'];
				header("Location: ../admin/index.php?goto=this page is for authorized used only so stay away");
				exit();
			}else{
				header("Location: admin_login.php?error=Incorrect Admin ID or Password");
				exit();
			}
		}else{
			header("Location: admin_login.php?error=Incorrect Admin ID or Password");
			exit();
		}
	}

}else{
	header("Location: admin_login.php");
	exit();
}


?>