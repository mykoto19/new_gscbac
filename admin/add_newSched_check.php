

<?php 



	require_once "../includes/initdb.php";


	function CheckQuery($query){

	    global $db;

	    	if(!$query){

	        die("QUERY FAILED". mysqli_error($db));
	    }

	}




	if (isset($_POST['submit'])){

                            
                            $sched_id = $_POST['sched_id'];
                            $sched_name = $_POST['sched_name'];
                            

                            $sched_id = mysqli_real_escape_string($db,$sched_id);
                            $sched_name = mysqli_real_escape_string($db,$sched_name);
                            

                            $sql = "INSERT INTO schedules(sched_id, sched_name) 
                                    VALUES('$sched_id','$sched_name')";            
                            $result = mysqli_query($db, $sql);


                            
                            CheckQuery($result);
                            header("Location: add_new_sched2.php?goto=$sched_id");

                            



                        }



?>