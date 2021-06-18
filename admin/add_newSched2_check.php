

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
                            $sched_date = $_POST['sched_date'];
                            $day_time = $_POST['day_time'];
                            $timeline = $_POST['timeline'];
                            $activity = $_POST['activity'];

                            $sched_id = mysqli_real_escape_string($db,$sched_id);
                            $sched_date = mysqli_real_escape_string($db,$sched_date);
                            $day_time = mysqli_real_escape_string($db,$day_time);
                            $timeline = mysqli_real_escape_string($db,$timeline);
                            $activity = mysqli_real_escape_string($db,$activity);

                            $sql = "INSERT INTO proj_sched(sched_date, day_time, timeline, activities, sched_id) 
                                    VALUES('$sched_date','$day_time','$timeline','$activity','$sched_id')";            
                            $result = mysqli_query($db, $sql);


                            CheckQuery($result);
                            header("Location: bac_sched.php?success=New data successfully added to existing schedule!");

                            



                        }



?>