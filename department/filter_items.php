<?php 
session_start();
if (isset($_SESSION['deptID']) && isset($_SESSION['deptName']) && isset($_SESSION['College_Office'])) {

?>

<?php include "includes/head.php"; ?>


<?php 
    require_once '../includes/initdb.php';
    $id = $_POST['itemNewCount'];
	$id = (int)$id;

	




        
?>



<?php ob_start(); ?>











<div class="container-fluid">

	<div class="row">


	<div class="card shadow mb-4 m-5 mx-auto w-100">


		<div class="card-header py-3 text-center pr-5">


                                        
                                  
                <h4 class="m-0 font-weight-bold text-primary"><?php echo $_SESSION['College_Office']; ?></h4>

                                  


                                        

          </div>


    <div class="card-body">


	<div class="table-responsive" id="ofis">

		
	
    <table class="table table-bordered table-hover" id="dataTable" width="100%" cellspacing="0">
	
		<thead class="bg-secondary">
			<tr>
				<th>Item Type</th>
				<th>Item Name</th>
				<th>Item Details</th>
				<th>Item Cost</th>
				<th>Action</th>
			</tr>
		</thead>
		<tbody id="myTable">
			<?php 




			$sql = "SELECT * FROM goods_items WHERE goodsID = 1";
			$results = $db->query($sql);
			while($row = mysqli_fetch_assoc($results)){ 
				
				$items_id_db = $row['itemID'];
				$itemType = $row['itemType'];
				$itemName = $row['itemName'];
				$itemDetails = $row['itemDetails'];
				$itemCost = $row['itemCost'];
				
				
				
			?>
				<tr>
					<td><?= $itemType; ?></td>
					<td><?= $itemName; ?></td>
					<td><?= $itemDetails; ?></td>
					<td>P<?= $itemCost; ?></td>
					<td>
						<div class="text-center">

												<a href="save_item.php?save=<?php echo $items_id_db; ?>" class="btn btn-md btn-primary" type="button" title="Save"><span> Save</span></a>

												

											</div>
					</td>
				</tr>
				
				<?php 
				
				}
				
				?>

		</tbody>
	</table>

	</div>

</div>

</div>

</div>

</div>
<!--
	<div class="container text-center">
		<button type="button" class="btn btn-lg btn-info" data-toggle="modal" onclick="addItemModal('id')">Add item</button>
	</div>
	-->


<div class="table-responsive" id="med">

    <table class="table table-hover table-bordered data-table">
		<thead class="bg-secondary">
			<tr>
				<th>Item Type</th>
				<th>Item Name</th>
				<th>Item Details</th>
				<th>Item Cost</th>
				<th>Action</th>
			</tr>
		</thead>
		<tbody>
			<?php 
			$sql = "SELECT * FROM goods_items WHERE goodsID = 2";
			$results = $db->query($sql);
			while($row = mysqli_fetch_assoc($results)){ 
				
				$items_id_db = $row['itemID'];
				$itemType = $row['itemType'];
				$itemName = $row['itemName'];
				$itemDetails = $row['itemDetails'];
				$itemCost = $row['itemCost'];
				
				
				
			?>
				<tr>
					<td><?= $itemType; ?></td>
					<td><?= $itemName; ?></td>
					<td><?= $itemDetails; ?></td>
					<td>P<?= $itemCost; ?></td>
					<td>
						<div class="text-center">

												<a href="save_item.php?save=<?php echo $items_id_db; ?>" class="btn btn-md btn-primary" type="button" title="Save"><span> Save</span></a>

												

											</div>
					</td>
				</tr>
				
				<?php 
				
				}
				
				?>		
		</tbody>
	</table>
	<!--
	<div class="container text-center">
		<button type="button" class="btn btn-lg btn-info" data-toggle="modal" onclick="addItemModal('id')">Add item</button>
	</div>
	-->
</div>

<div class="table-responsive" id="other">

    <table class="table table-hover table-bordered data-table">
		<thead class="bg-secondary">
			<tr>
				<th>Item Type</th>
				<th>Item Name</th>
				<th>Item Details</th>
				<th>Item Cost</th>
				<th>Action</th>
			</tr>
		</thead>
		<tbody>
			<?php 
			$sql = "SELECT * FROM goods_items WHERE goodsID = 3";
			$results = $db->query($sql);
			while($row = mysqli_fetch_assoc($results)){ 
				
				$items_id_db = $row['itemID'];
				$itemType = $row['itemType'];
				$itemName = $row['itemName'];
				$itemDetails = $row['itemDetails'];
				$itemCost = $row['itemCost'];
				
				
				
			?>
				<tr>
					<td><?= $itemType; ?></td>
					<td><?= $itemName; ?></td>
					<td><?= $itemDetails; ?></td>
					<td>P<?= $itemCost; ?></td>
					<td>
						<div class="text-center">

												<a href="save_item.php?save=<?php echo $items_id_db; ?>" class="btn btn-md btn-primary" type="button" title="Save"><span> Save</span></a>

												

											</div>
					</td>
				</tr>
				
				<?php 
				
				}
				
				?>			
		</tbody>
	</table>
	<!--
	<div class="container text-center">
		<button type="button" class="btn btn-lg btn-info" data-toggle="modal" onclick="addItemModal('id')">Add item</button>
	</div>
	-->
</div>


<div class="table-responsive" id="constSup">
                                <table class="table table-bordered table-hover" id="dataTable" width="100%" cellspacing="0">
                                    <thead class="bg-secondary">
                                        <tr>
                                            <th>Construction Item</th>
                                            <th>Construction Item Details</th>
                                            <th>Construction Item Cost</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    

                                        <?php 
                                            $sql = "SELECT * FROM plan_infra WHERE planID = 1";
                                            $results = $db->query($sql);
                                            while($row = mysqli_fetch_assoc($results)){ 
                                                
                                                $plan_id_db = $row['planInfra_ID'];
                                                $planInfra_Name = $row['planInfra_Name'];
                                                $planInfra_Details = $row['planInfra_Details'];
                                                $planInfra_Cost = $row['planInfra_Cost'];
                                                
                                                
                                                
                                            ?>






                                        <tr>
                                            
                                            <td><?= $planInfra_Name; ?></td>
                                            <td><?= $planInfra_Details; ?></td>
                                            <td>P<?= $planInfra_Cost; ?></td>
                                            <td>

                                                <div class="text-center">

                                                   

													<a href="save_plan.php?save=<?php echo $plan_id_db; ?>" class="btn btn-md btn-primary" type="button" title="Save"><span> Save</span></a>

												

													

                                                </div>


                                            </td>
                                            
                                        </tr>

                                        <?php

                                            }

                                            ?>

                                        


                                    </tbody>
                                </table>
                            </div>



<div class="table-responsive" id="infraPlan">
                                <table class="table table-bordered table-hover" id="dataTable" width="100%" cellspacing="0">
                                    <thead class="bg-secondary">
                                        <tr>
                                            <th>Infrastructure Name</th>
                                            <th>Infrastructure Item Details</th>
                                            <th>Infrasturcture Item Cost</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    
                                    <tbody>


                                        <?php 
                                            $sql = "SELECT * FROM plan_infra WHERE planID = 2";
                                            $results = $db->query($sql);
                                            while($row = mysqli_fetch_assoc($results)){ 
                                                
                                                $plan_id_db = $row['planInfra_ID'];
                                                $planInfra_Name = $row['planInfra_Name'];
                                                $planInfra_Details = $row['planInfra_Details'];
                                                $planInfra_Cost = $row['planInfra_Cost'];
                                                
                                                
                                                
                                            ?>






                                        <tr>
                                            
                                            <td><?= $planInfra_Name; ?></td>
                                            <td><?= $planInfra_Details; ?></td>
                                            <td>P<?= $planInfra_Cost; ?></td>
                                            <td>

                                                <div class="text-center">

                                                    <a href="save_plan.php?save=<?php echo $plan_id_db; ?>" class="btn btn-md btn-primary" type="button" title="Save"><span> Save</span></a>

                                                </div>


                                            </td>
                                            
                                        </tr>

                                        <?php

                                            }

                                            ?>

                                        


                                    </tbody>
                                </table>
                            </div>
                        



<div class="table-responsive" id="repairPlan">
                                <table class="table table-bordered table-hover" id="dataTable" width="100%" cellspacing="0">
                                    <thead class="bg-secondary">
                                        <tr>
                                            <th>Maintenance Type</th>
                                            <th>Maintenance Details</th>
                                            <th>Maintenance Cost</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    
                                    <tbody>


                                        <?php 
                                            $sql = "SELECT * FROM plan_infra WHERE planID = 3";
                                            $results = $db->query($sql);
                                            while($row = mysqli_fetch_assoc($results)){ 
                                                
                                                $plan_id_db = $row['planInfra_ID'];
                                                $planInfra_Name = $row['planInfra_Name'];
                                                $planInfra_Details = $row['planInfra_Details'];
                                                $planInfra_Cost = $row['planInfra_Cost'];
                                                
                                                
                                                
                                            ?>






                                        <tr>
                                            
                                            <td><?= $planInfra_Name; ?></td>
                                            <td><?= $planInfra_Details; ?></td>
                                            <td>P<?= $planInfra_Cost; ?></td>
                                            <td>

                                                <div class="text-center">

                                                    <a href="save_plan.php?save=<?php echo $plan_id_db; ?>" class="btn btn-md btn-primary" type="button" title="Save"><i class="fas fa-fw fa-edit"></i> Save</a>

                                                    

                                                </div>


                                            </td>
                                            
                                        </tr>

                                        <?php

                                            }

                                            ?>

                                        


                                    </tbody>
                                </table>
                            </div>
				




<div class="table-responsive" id="internet_service">
                                <table class="table table-bordered table-hover" id="dataTable" width="100%" cellspacing="0">
                                    <thead class="bg-secondary">
                                        <tr>
                                            
                                            <th>Service Name</th>
                                            <th>Service Details</th>
                                            <th>Service Cost</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    


                                        <?php 
                                            $sql = "SELECT * FROM service_offer WHERE serviceID = 1";
                                            $results = $db->query($sql);
                                            while($row = mysqli_fetch_assoc($results)){ 
                                                
                                                $service_id_db = $row['serveOffer_ID'];
                                                $service_name = $row['serveOffer_Name'];
                                                $service_details = $row['serveOffer_Details'];
                                                $service_cost = $row['serveOffer_Cost'];
                                                
                                                
                                                
                                            ?>






                                        <tr>
                                            
                                            <td><?= $service_name; ?></td>
                                            <td><?= $service_details; ?></td>
                                            <td>P<?= $service_cost; ?></td>
                                            <td>

                                                <div class="text-center">

                                                    <a href="save_service.php?save=<?php echo $service_id_db; ?>" class="btn btn-md btn-primary" type="button" title="Save"><i class="fas fa-fw fa-edit"></i> Save</a>

                                                    

                                                </div>


                                            </td>
                                            
                                        </tr>

                                        <?php

                                            }

                                            ?>

                                        


                                    </tbody>
                                </table>
                            </div>





 <div class="table-responsive" id="repairService">
                                <table class="table table-bordered table-hover" id="dataTable" width="100%" cellspacing="0">
                                    <thead class="bg-secondary">
                                        <tr>
                                            
                                            <th>Service Name</th>
                                            <th>Service Details</th>
                                            <th>Service Cost</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    
                                    <tbody>


                                        <?php 
                                            $sql = "SELECT * FROM service_offer WHERE serviceID = 2";
                                            $results = $db->query($sql);
                                            while($row = mysqli_fetch_assoc($results)){ 
                                                
                                                $service_id_db = $row['serveOffer_ID'];
                                                $service_name = $row['serveOffer_Name'];
                                                $service_details = $row['serveOffer_Details'];
                                                $service_cost = $row['serveOffer_Cost'];
                                                
                                                
                                                
                                            ?>






                                        <tr>
                                            
                                            <td><?= $service_name; ?></td>
                                            <td><?= $service_details; ?></td>
                                            <td>P<?= $service_cost; ?></td>
                                            <td>

                                                <div class="text-center">

                                                    <a href="save_service.php?save=<?php echo $service_id_db; ?>" class="btn btn-md btn-primary" type="button" title="Save"><i class="fas fa-fw fa-edit"></i> Save</a>


                                                </div>


                                            </td>
                                            
                                        </tr>

                                        <?php

                                            }

                                            ?>

                                        


                                    </tbody>
                                </table>
                            </div>





<div class="table-responsive" id="securityService">
                                <table class="table table-bordered table-hover" id="dataTable" width="100%" cellspacing="0">
                                    <thead class="bg-secondary">
                                        <tr>
                                            
                                            <th>Service Name</th>
                                            <th>Service Details</th>
                                            <th>Service Cost</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    
                                    <tbody>


                                        <?php 
                                            $sql = "SELECT * FROM service_offer WHERE serviceID = 3";
                                            $results = $db->query($sql);
                                            while($row = mysqli_fetch_assoc($results)){ 
                                                
                                                $service_id_db = $row['serveOffer_ID'];
                                                $service_name = $row['serveOffer_Name'];
                                                $service_details = $row['serveOffer_Details'];
                                                $service_cost = $row['serveOffer_Cost'];
                                                
                                                
                                                
                                            ?>






                                        <tr>
                                            
                                            <td><?= $service_name; ?></td>
                                            <td><?= $service_details; ?></td>
                                            <td>P<?= $service_cost; ?></td>
                                            <td>

                                                <div class="text-center">

                                                    <a href="save_service.php?save=<?php echo $service_id_db; ?>" class="btn btn-md btn-primary" type="button" title="Save"><i class="fas fa-fw fa-edit"></i> Save</a>

                                                    

                                                </div>


                                            </td>
                                            
                                        </tr>

                                        <?php

                                            }

                                            ?>

                                        


                                    </tbody>
                                </table>
                            </div>





 <div class="table-responsive" id="otherService">
                                <table class="table table-bordered table-hover" id="dataTable" width="100%" cellspacing="0">
                                    <thead class="bg-secondary">
                                        <tr>
                                            
                                            <th>Service Name</th>
                                            <th>Service Details</th>
                                            <th>Service Cost</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    
                                    <tbody>


                                        <?php 
                                            $sql = "SELECT * FROM service_offer WHERE serviceID = 4";
                                            $results = $db->query($sql);
                                            while($row = mysqli_fetch_assoc($results)){ 
                                                
                                                $service_id_db = $row['serveOffer_ID'];
                                                $service_name = $row['serveOffer_Name'];
                                                $service_details = $row['serveOffer_Details'];
                                                $service_cost = $row['serveOffer_Cost'];
                                                
                                                
                                                
                                            ?>






                                        <tr>
                                            
                                            <td><?= $service_name; ?></td>
                                            <td><?= $service_details; ?></td>
                                            <td>P<?= $service_cost; ?></td>
                                            <td>

                                                <div class="text-center">

                                                    <a href="save_service.php?save=<?php echo $service_id_db; ?>" class="btn btn-md btn-primary" type="button" title="Save"><i class="fas fa-fw fa-edit"></i> Save</a>

                                                    

                                                </div>


                                            </td>
                                            
                                        </tr>

                                        <?php

                                            }

                                            ?>

                                        


                                    </tbody>
                                </table>
                            </div>














<script>
$(document).ready(function(){
  $("#myInput").on("keyup", function() {
    var value = $(this).val().toLowerCase();
    $("#myTable tr").filter(function() {
      $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
    });
  });
});
</script>


<!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Plugin JavaScript -->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Page level plugins -->
   <script src="vendor/datatables/jquery.dataTables.min.js"></script>
   <script src="vendor/datatables/dataTables.bootstrap4.min.js"></script>
   <!-- Page level custom scripts -->
    <script src="js/demo/datatables-demo.js"></script>

    

  <!-- Custom JavaScript for this theme -->
  <script src="js/scrolling-nav.js"></script>





                
<?php echo ob_get_clean(); ?>


 


<?php 

}else{
  header("Location: ../login/dept_login.php");
  exit();
}

?>