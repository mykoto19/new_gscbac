


<?php 



	require_once "../includes/initdb.php";


	function CheckQuery($query){

	    global $db;

	    	if(!$query){

	        die("QUERY FAILED". mysqli_error($db));
	    }

	}




	if (isset($_POST['submit'])){

                                      
        $dept_name = $_POST['dept_name'];
        $acronym = $_POST['acronym'];
        $title = $_POST['title'];
        $lname = $_POST['lname'];
        $fname = $_POST['fname'];
        $mname = $_POST['mname'];
        $usr = $_POST['usr'];
        $pass = $_POST['pass'];
        

        
        $dept_name = mysqli_real_escape_string($db,$dept_name);
        $acronym = mysqli_real_escape_string($db,$acronym);
        $title = mysqli_real_escape_string($db,$title);
        $lname = mysqli_real_escape_string($db,$lname);
        $fname = mysqli_real_escape_string($db,$fname);
        $mname = mysqli_real_escape_string($db,$mname);
        $usr = mysqli_real_escape_string($db,$usr);
        $pass = mysqli_real_escape_string($db,$pass);
                                      
        $sql = "INSERT INTO departmenttb(College_Office, acro_name, Title, head_lname, head_fname, head_mid_init, deptName, deptPass) 
                VALUES('$dept_name','$acronym','$title','$lname', '$fname', '$mname', '$usr', '$pass')";            
        $result = mysqli_query($db, $sql);

        CheckQuery($result);
        header("Location: department_accounts.php?success=New department/office successfully added!");


                                      



    }



?>