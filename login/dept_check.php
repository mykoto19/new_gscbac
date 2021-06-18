<?php 
session_start();
include '../includes/initdb.php';

if (isset($_POST['usr']) && isset($_POST['pwd'])){

	function validate($data){
		$data = trim($data);
		$data = stripslashes($data);
		$data = htmlspecialchars($data);
		return $data;
	}


	$uname = validate($_POST['usr']);
	$pass = validate($_POST['pwd']);

	if (empty($uname)) {
		header("Location: dept_login.php?error=Department name is required");
		exit();
	}else if(empty($pass)){
		header("Location: dept_login.php?error=Password is required");
		exit();
	}else{
		$sql = "SELECT * FROM departmenttb WHERE deptName='$uname' AND deptPass='$pass'";
		$result = mysqli_query($db, $sql);
		if (mysqli_num_rows($result) === 1) {
			$row = mysqli_fetch_assoc($result);
			if ($row['deptName'] === $uname && $row['deptPass'] === $pass) {
				$_SESSION['deptName'] = $row['deptName'];
				$_SESSION['deptID'] = $row['deptID'];
				$_SESSION['College_Office'] = $row['College_Office'];
				$_SESSION['acro_name'] = $row['acro_name'];
				header("Location: ../department/index.php?goto=This is a department page.");
				exit();
			}else{
				header("Location: dept_login.php?error=Incorrect Department name or Password");
				exit();
			}
		}else{
			header("Location: dept_login.php?error=Incorrect Department name or Password");
			exit();
		}
	}

}else{
	header("Location: dept_login.php");
	exit();
}


?>