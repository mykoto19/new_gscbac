



<?php 



	require_once "../includes/initdb.php";


	function CheckQuery($query){

	    global $db;

	    	if(!$query){

	        die("QUERY FAILED". mysqli_error($db));
	    }

	}




	if (isset($_POST['submit'])){

                            
                            $service_item = $_POST['service_item'];
                            $service_details = $_POST['service_details'];
                            $service_cost = $_POST['service_cost'];
                            $service_id = $_POST['service_id'];

                            $service_item = mysqli_real_escape_string($db,$service_item);
                            $service_details = mysqli_real_escape_string($db,$service_details);
                            $service_cost = mysqli_real_escape_string($db,$service_cost);
                            $service_id = mysqli_real_escape_string($db,$service_id);

                            $sql = "INSERT INTO service_offer(serveOffer_Name, serveOffer_Details, serveOffer_Cost, serviceID) 
                                    VALUES('$service_item','$service_details','$service_cost','$service_id')";            
                            $result = mysqli_query($db, $sql);


                            CheckQuery($result);
                            header("Location: service.php?success=New item successfully added!");

                            



                        }



?>