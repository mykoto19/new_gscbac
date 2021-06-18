<?php 
session_start();
if (isset($_SESSION['deptID']) && isset($_SESSION['deptName']) && isset($_SESSION['College_Office'])) {

?>






<?php include "includes/head.php"; ?>





<div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">

          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="#my_list">My List</a>
          </li>

          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="#search_item">Search</a>
          </li>

          
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="index.php">Back</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>


  <?php 

	if(isset($_GET['goto'])){

	    $list_id = $_GET['goto'];

	   

	?>




<section class="m-5 p-5" id="my_list">

	<h2 class="text-center"><b>Purchase Item</b></h2>
	<hr class="mb-3 pb-3">

	<div class="container-fluid">
		<div class="row">
			<?php ob_start(); ?>


			<!-- top -->
			<!-- Create list first -->
			<!-- This is going to be a table for creatin list -->
			<div class="col-md-11 mx-auto shadow m-5 p-5">


				<h5><?php echo $list_id; ?></h5>
				<!-- List Code -->
				<!-- List Name -->
				<h3 class="text-center">My List</h3>
				<div class="table-responsive">
					<table class="table table-bordered table-hover" width="100%" cellspacing="0">
						<thead class="text-primary">
							<tr>
								<th>Item Description</th>
								<th>Item Cost</th>
								<th>Action</th>
							</tr>
						</thead>







						<tbody>







							<?php 
                                            $sql = "SELECT * FROM tbl_itemlist WHERE list_id = '$list_id'";
                                            $results = $db->query($sql);
                                            while($row = mysqli_fetch_assoc($results)){ 
                                                
                                                $item_id_db = $row['id'];
                                                $item_name = $row['item_name'];
                                                $item_type = $row['item_type'];
                                                $item_details = $row['item_details'];
                                                $item_cost = $row['item_cost'];
                                                
                                                
                                                
                                            ?>








							<tr>
								<td><?= $item_name; ?> <br> <?= $item_details; ?></td>
								<td>P<?= $item_cost; ?></td>
								<td class="text-center">
									<a onclick="return confirm('Are you sure you want to delete this item?');" href="delete_dept_item.php?delete_dept_item=<?php echo $item_id_db; ?>" type="button" class="btn btn-md btn-primary" title="Delete">Remove</a></a>
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

</section>


<?php 

}


?>





			<hr>


<section class="m-5 p-5" id="search_item">

	<div class="container-fluid">
		<div class="row">




			<!-- left side bar -->
			<div class="col-md-2 mx-auto">

<!--

				<div class="sidenav dropdown dropright">
				  <a href="">Goods<span class="icon-caret-right"></span></a>
				</div>

				<div class="sidenav dropdown dropright">
				  <a href="">Planning<span class="icon-caret-right"></span></a>
				</div>

				<div class="sidenav dropdown dropright">
				  <a href="">Services<span class="icon-caret-right"></span></a>
				  
				</div>

			-->

							  
					<div class="d-flex flex-column mb-3">
						<div class="list-group">
							<a href="" class="list-group-item list-group-item-action list-group-item-primary">Purchases</a>
							<div class="dropdown dropright">
								<a href="" class="list-group-item list-group-item-action" data-toggle="dropdown">Goods<span class="icon-caret-right"></span></a>
								<div class="dropdown-menu">
									<button class="dropdown-item" id="ofcsup" onclick="document.getElementById('subtypes').innerHTML='Office Supplies'">Office Supplies</button>
									<div class="dropdown-divider"></div>
									<button class="dropdown-item" id="medsup" onclick="document.getElementById('subtypes').innerHTML='Medical Supplies'">Medical Supplies</button>
									<div class="dropdown-divider"></div>
									<button class="dropdown-item" id="othersup" onclick="document.getElementById('subtypes').innerHTML='Other Supplies'">Other Supplies</button>
								</div>
							</div>
							<div class="dropdown dropright">
								<a href="" class="list-group-item list-group-item-action" data-toggle="dropdown">Planning<span class="icon-caret-right"></span></a>
								<div class="dropdown-menu">
									<button class="dropdown-item" id="construct" onclick="document.getElementById('subtypes').innerHTML='Construction Supplies'">Construction Supplies</button>
									<div class="dropdown-divider"></div>
									<button class="dropdown-item" id="infra" onclick="document.getElementById('subtypes').innerHTML='Infrastructures'">Infrastructures</button>
									<div class="dropdown-divider"></div>
									<button class="dropdown-item" id="repair_plan" onclick="document.getElementById('subtypes').innerHTML='Repair and Maintenance'">Repair and Maintenance</button>
								</div>
							</div>
							<div class="dropdown dropright">
								<a href="" class="list-group-item list-group-item-action" data-toggle="dropdown">Services<span class="icon-caret-right"></span></a>
								<div class="dropdown-menu">
									<button class="dropdown-item" id="internet" onclick="document.getElementById('subtypes').innerHTML='Internet'">Internet</button>
									<div class="dropdown-divider"></div>
									<button class="dropdown-item" id="repair_service" onclick="document.getElementById('subtypes').innerHTML='Repair and Maintenance'">Repair and Maintenance</button>
									<div class="dropdown-divider"></div>
									<button class="dropdown-item" id="security" onclick="document.getElementById('subtypes').innerHTML='Security'">Security</button>
									<div class="dropdown-divider"></div>
									<button class="dropdown-item" id="other_service" onclick="document.getElementById('subtypes').innerHTML='Other Services'">Other Services</button>
								</div>
							</div>
						</div>
					</div>		

						  
			</div>

			



			<!-- right side bar -->
			<div class="col-md-9 mx-auto shadow">


				<div>
			
						
							

							<br>
							<h5 id="subtypes"></h5>

							<br>
						
					</div>




				<div id="purchase">
				<div class="table-responsive">	

					  
					<table class="table table-bordered table-hover" id="dataTable" width="100%" cellspacing="0">

						
						

	
							<thead class="text-primary">
								<tr>
									<th>Item Type</th>
									<th>Item Name</th>
									<th>Item Details</th>
									<th>Item Cost</th>
									<th>Action</th>
								</tr>
							</thead>


							<tbody>
								
									<tr>
										<td></td>
										<td></td>
										<td></td>
										<td></td>
										<td class="text-center">

											

										</td>
									</tr>
									
									

							</tbody>
						</table>

					</div>
					</div>







				


		


		</div>



	</div>
	


</section>
<!--
<section>
	
	<p>Click on the buttons inside the tabbed menu:</p>

<div class="tab">
  <button class="tablinks" onclick="openCity(event, 'London')" id="defaultOpen">London</button>
  <button class="tablinks" onclick="openCity(event, 'Paris')">Paris</button>
  <button class="tablinks" onclick="openCity(event, 'Tokyo')">Tokyo</button>
</div>

<div id="London" class="tabcontent">
  <h3>London</h3>
  <p>London is the capital city of England.</p>
</div>

<div id="Paris" class="tabcontent">
  <h3>Paris</h3>
  <p>Paris is the capital of France.</p> 
</div>

<div id="Tokyo" class="tabcontent">
  <h3>Tokyo</h3>
  <p>Tokyo is the capital of Japan.</p>
</div>


</section>
-->





<?php include "includes/footer.php"; ?>
<!--

<script>
function openCity(evt, cityName) {
    var i, tabcontent, tablinks;
    tabcontent = document.getElementsByClassName("tabcontent");
    for (i = 0; i < tabcontent.length; i++) {
        tabcontent[i].style.display = "none";
    }
    tablinks = document.getElementsByClassName("tablinks");
    for (i = 0; i < tablinks.length; i++) {
        tablinks[i].className = tablinks[i].className.replace(" active", "");
    }
    document.getElementById(cityName).style.display = "block";
    evt.currentTarget.className += " active";
}

// Get the element with id="defaultOpen" and click on it
document.getElementById("defaultOpen").click();
</script>

-->

<script>

	 $(document).ready(function (){
		var itemCount = 0;
		$("#ofcsup").click(function() {
			$("#purchase").load("filter_items.php #ofis", {
				itemNewCount: itemCount
			});
		});
	  });


	 $(document).ready(function (){
		var itemCount = 0;
		$("#medsup").click(function() {
			$("#purchase").load("filter_items.php #med", {
				itemNewCount: itemCount
			});
		});
	  });



	 $(document).ready(function (){
		var itemCount = 0;
		$("#othersup").click(function() {
			$("#purchase").load("filter_items.php #other", {
				itemNewCount: itemCount
			});
		});
	  });
	

	$(document).ready(function (){
		var itemCount = 0;
		$("#construct").click(function() {
			$("#purchase").load("filter_items.php #constSup", {
				itemNewCount: itemCount
			});
		});
	  });


	$(document).ready(function (){
		var itemCount = 0;
		$("#infra").click(function() {
			$("#purchase").load("filter_items.php #infraPlan", {
				itemNewCount: itemCount
			});
		});
	  });


	$(document).ready(function (){
		var itemCount = 0;
		$("#repair_plan").click(function() {
			$("#purchase").load("filter_items.php #repairPlan", {
				itemNewCount: itemCount
			});
		});
	  });


	$(document).ready(function (){
		var itemCount = 0;
		$("#internet").click(function() {
			$("#purchase").load("filter_items.php #internet_service", {
				itemNewCount: itemCount
			});
		});
	  });


	$(document).ready(function (){
		var itemCount = 0;
		$("#repair_service").click(function() {
			$("#purchase").load("filter_items.php #repairService", {
				itemNewCount: itemCount
			});
		});
	  });



	$(document).ready(function (){
		var itemCount = 0;
		$("#security").click(function() {
			$("#purchase").load("filter_items.php #securityService", {
				itemNewCount: itemCount
			});
		});
	  });


	$(document).ready(function (){
		var itemCount = 0;
		$("#other_service").click(function() {
			$("#purchase").load("filter_items.php #otherService", {
				itemNewCount: itemCount
			});
		});
	  });



</script>







<?php 

}else{
  header("Location: ../login/dept_login.php");
  exit();
}

?>
