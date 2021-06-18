<?php 
session_start();
include '../includes/initdb.php';

if (isset($_POST['name']) && isset($_POST['fname']) 
    && isset($_POST['lname']) && isset($_POST['emailAd']) 
    && isset($_POST['psw']) && isset($_POST['psw_repeat'])){

	function validate($data){
		$data = trim($data);
		$data = stripslashes($data);
		$data = htmlspecialchars($data);
		return $data;
	}


    $cname = validate($_POST['name']);
    $fname = validate($_POST['fname']);
    $lname = validate($_POST['lname']);
    $email = validate($_POST['emailAd']);
    $pass = validate($_POST['psw']);
    $repass = validate($_POST['psw_repeat']);

    $user_data = 'name='. $cname. '&fname='. $fname. '&lname='. $lname;

    

	if (empty($cname)) {
		header("Location: signup.php?error=Company name is required&$user_data");
		exit();
	}else if(empty($fname)){
		header("Location: signup.php?error=Representative name is required&$user_data");
		exit();
    }else if(empty($lname)){
		header("Location: signup.php?error=Representative name is required&$user_data");
		exit();
	}else if(empty($email)){
		header("Location: signup.php?error=Email is required&$user_data");
		exit();
	}else if(empty($pass)){
		header("Location: signup.php?error=Password is required&$user_data");
		exit();
	}else if(empty($repass)){
		header("Location: signup.php?error=Please re-type your password&$user_data");
		exit();
    }else if($pass !== $repass){
        header("Location: signup.php?error=Passwords does not match&$user_data");
        exit();
    }else{

        // HASHING OF PASSWORD
        $pass = md5($pass);

		$sql = "SELECT * FROM suppliertb WHERE companyName ='$cname'";
		$result = mysqli_query($db, $sql);
		if (mysqli_num_rows($result) > 0) {
            header("Location: signup.php?error=The supplier name is taken, try another &$user_data");
            exit();
        } else {
            $sql2 = "INSERT INTO suppliertb(companyName, Firstname, Lastname, Email, supPass) 
                    VALUES('$cname','$fname','$lname','$email','$pass')";            
            $result2 = mysqli_query($db, $sql2);

            if($result2){
                header("Location: signup.php?success=Your account created succesfully!");
                exit();
            }else{
                header("Location: signup.php?error=Unknown error occured&$user_data");
                exit();
            }
        }
	}

}else{
	header("Location: signup.php");
	exit();
}


?>