


<?php 



	require_once "../includes/initdb.php";


	function CheckQuery($query){

	    global $db;

	    	if(!$query){

	        die("QUERY FAILED". mysqli_error($db));
	    }

	}




	if (isset($_POST['submit'])){

                            
                            $name = $_POST['name'];
                            $position = $_POST['position'];
                            
                            

                            $name = mysqli_real_escape_string($db,$name);
                            $position = mysqli_real_escape_string($db,$position);
                            
                            

                            $sql = "INSERT INTO bac_compose(Name, Position) 
                                    VALUES('$name','$position')";            
                            $result = mysqli_query($db, $sql);


                            CheckQuery($result);
                            header("Location: manage_bac_compose.php?success=New item successfully added!");

                            



                        }



?>