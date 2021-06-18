



<?php 



	require_once "../includes/initdb.php";


	function CheckQuery($query){

	    global $db;

	    	if(!$query){

	        die("QUERY FAILED". mysqli_error($db));
	    }

	}




	if (isset($_POST['submit'])){

                            
                            $plan_item = $_POST['plan_item'];
                            $plan_details = $_POST['plan_details'];
                            $plan_cost = $_POST['plan_cost'];
                            $planID = $_POST['planID'];

                            $plan_item = mysqli_real_escape_string($db,$plan_item);
                            $plan_details = mysqli_real_escape_string($db,$plan_details);
                            $plan_cost = mysqli_real_escape_string($db,$plan_cost);
                            $planID = mysqli_real_escape_string($db,$planID);

                            $sql = "INSERT INTO plan_infra(planInfra_Name, planInfra_Details, planInfra_Cost, planID) 
                                    VALUES('$plan_item','$plan_details','$plan_cost','$planID')";            
                            $result = mysqli_query($db, $sql);


                            CheckQuery($result);
                            header("Location: planning.php?success=New item successfully added!");

                            



                        }



?>