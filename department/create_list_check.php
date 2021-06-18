

<?php 



	require_once "../includes/initdb.php";


	function CheckQuery($query){

	    global $db;

	    	if(!$query){

	        die("QUERY FAILED". mysqli_error($db));
	    }

	}




	if (isset($_POST['submit'])){

                            
                            $list_id = $_POST['list_id'];
                            $list_name = $_POST['list_name'];
                            $dept_id = $_POST['dept_id'];
                            

                            $list_id = mysqli_real_escape_string($db,$list_id);
                            $list_name = mysqli_real_escape_string($db,$list_name);
                            $dept_id = mysqli_real_escape_string($db,$dept_id);
                            

                            $sql = "INSERT INTO tbl_list(list_id, list_name, deptID) 
                                    VALUES('$list_id','$list_name','$dept_id')";            
                            $result = mysqli_query($db, $sql);


                            
                            CheckQuery($result);
                            header("Location: dept_items.php?goto=$list_id");

                            



                        }



?>