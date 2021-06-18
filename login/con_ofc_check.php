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
		header("Location: con_office_login.php?error=Office username is required");
		exit();
	}else if(empty($pass)){
		header("Location: con_office_login.php?error=Password is required");
		exit();
	}else{
		$sql = "SELECT * FROM officetb WHERE office_usr='$uname' AND officePass='$pass'";
		$result = mysqli_query($db, $sql);
			if (mysqli_num_rows($result) === 1) {
			$row = mysqli_fetch_assoc($result);
			if ($row['office_usr'] === $uname && $row['officePass'] === $pass) {
				$_SESSION['officeName'] = $row['officeName'];
				$_SESSION['officeID'] = $row['officeID'];
				header("Location: ../connected-office/connected_office.php?goto=This is the connected office page");
				exit();
			}else{
				header("Location: con_office_login.php?error=Incorrect Office username or Password");
				exit();
			}
		}else{
			header("Location: con_office_login.php?error=Incorrect Office username or Password");
			exit();
		}
	}

}else{
	header("Location: con_office_login.php");
	exit();
}


?>