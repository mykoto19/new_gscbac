

<?php 



	require_once "../includes/initdb.php";


	function CheckQuery($query){

	    global $db;

	    	if(!$query){

	        die("QUERY FAILED". mysqli_error($db));
	    }

	}




	if (isset($_POST['submit'])){

                            
                            $itemName = $_POST['itemName'];
                            $itemType = $_POST['itemType'];
                            $itemDetails = $_POST['itemDetails'];
                            $itemCost = $_POST['itemCost'];
                            $goodsID = $_POST['goodsID'];

                            $itemName = mysqli_real_escape_string($db,$itemName);
                            $itemType = mysqli_real_escape_string($db,$itemType);
                            $itemDetails = mysqli_real_escape_string($db,$itemDetails);
                            $itemCost = mysqli_real_escape_string($db,$itemCost);
                            $goodsID = mysqli_real_escape_string($db,$goodsID);

                            $sql = "INSERT INTO goods_items(itemName, itemType, itemDetails, itemCost, goodsID) 
                                    VALUES('$itemName','$itemType','$itemDetails','$itemCost','$goodsID')";            
                            $result = mysqli_query($db, $sql);


                            CheckQuery($result);
                            header("Location: goods.php?success=New item successfully added!");

                            



                        }



?>