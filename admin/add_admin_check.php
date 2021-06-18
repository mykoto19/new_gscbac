

<?php 



	require_once "../includes/initdb.php";


	function CheckQuery($query){

	    global $db;

	    	if(!$query){

	        die("QUERY FAILED". mysqli_error($db));
	    }

	}




	if (isset($_POST['submit'])){

                                      
        $fname = $_POST['fname'];
        $lname = $_POST['lname'];
        $adminName = $_POST['adminName'];
        $pass = $_POST['pass'];
        $date_added = date('d-m-y');

        $fname = mysqli_real_escape_string($db,$fname);
        $lname = mysqli_real_escape_string($db,$lname);
        $adminName = mysqli_real_escape_string($db,$adminName);
        $pass = mysqli_real_escape_string($db,$pass);
                                      
        $sql = "INSERT INTO admintb(admin_fname, admin_lname, AdminName, AdminPass, date_added) 
                VALUES('$fname','$lname','$adminName','$pass', now())";            
        $result = mysqli_query($db, $sql);

        CheckQuery($result);
        header("Location: admin_accounts.php?success=New admin successfully added!");


                                      



    }



?>