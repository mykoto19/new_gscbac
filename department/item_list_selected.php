<?php 
session_start();
if (isset($_SESSION['deptID']) && isset($_SESSION['deptName']) && isset($_SESSION['College_Office'])) {

?>






<?php include "includes/head.php"; ?>





<div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">

          

          
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="item_list.php">Back</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>


  <?php 


        if(isset($_GET['source'])){

             $source_id = $_GET['source'];


             






        ?>




  <section class="m-5 p-5">



    <div class="container-fluid">
        <div class="row">


    


    <div class="col-md-8 mx-auto">


  	<div class="container-fluid">

                   <div class="row">

                            	<!-- DataTables Example -->
			                    <div class="card shadow mb-4 m-5 mx-auto w-100">
			                        <div class="card-header py-3 text-right pr-5">


                                        <?php 

                                            $mysql = "SELECT * FROM tbl_list WHERE list_id = '$source_id'";
                                            $query = mysqli_query($db,$mysql);
                                            while($name = mysqli_fetch_assoc($query)){

                                                $list_id = $name['list_id'];
                                                $list_name = $name['list_name'];



                                        ?>
			                            
			                            <h4 class="m-0 font-weight-bold text-primary"><?php echo $list_id; ?></h4>

			                            <h2 class="m-0 font-weight-bold text-primary text-left"><?php echo $list_name; ?></h2>


                                        <?php

                                            }

                                            ?>

			                        </div>

			                        <div class="card-body">



                                        <div class="table-responsive">
                                            <table class="table table-bordered table-hover" id="dataTable" width="100%" cellspacing="0">
                                                <thead class="bg-secondary">
                                                    <tr>
                                                        <th>Item Description</th>
                                                        <th>Item Cost</th>
                                                        
                                                        <th>Action</th>
                                                    </tr>
                                                </thead>
                                                
                                                <tbody>




                                                    <?php 

                                                                $sql = "SELECT * FROM tbl_itemlist WHERE list_id = '$source_id'";
                                                                $result = mysqli_query($db,$sql);
                                                                

                                                                while($row = mysqli_fetch_assoc($result)){



                                                                  $db_id = $row['id'];
                                                                  $item_name = $row['item_name'];
                                                                  $item_type = $row['item_type'];
                                                                  $item_details = $row['item_details'];
                                                                  $item_cost = $row['item_cost'];
                                                                  $list_id = $row['list_id'];
                                                                  $dept_id = $row['deptID'];




                                                            ?>
                             

                                

                                                             <tr>

                                                                <td><?= $item_name; ?>, <?= $item_details; ?></td>


                                                                <td><?= $item_cost; ?></td>

                                                               

                                                                

                                                                <td class="text-center">
                                                                  <!--
                                                                    <a href="edit_sched.php?edit=<?php echo $proj_sched_id; ?>" class="btn btn-md btn-primary" type="button" title="Edit"><i class="fas fa-fw fa-edit"></i> Edit</a>
                                                                  -->
                                                                    <a onclick="return confirm('Are you sure you want to delete this item?');" href="delete_dept_item.php?delete_item_select=<?php echo $db_id; ?>" type="button" class="btn btn-md btn-primary" title="Delete"> Remove</a>

                                                                    

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
  	











</div>


<!--

<div class="col-md-3 m-5 p-5 mx-auto shadow">
      <div class="container-fluid">
        

        <div class="row">
          

          T

        </div>





      </div>


    </div>


-->



</div>
</div>

  </section>




 <?php




			}

      if(isset($_GET['goto'])){

             $list_id = $_GET['goto'];


?>



<section class="m-5 p-5">



    <div class="container-fluid">
        <div class="row">


    


    <div class="col-md-8 mx-auto">


    <div class="container-fluid">

                   <div class="row">

                              <!-- DataTables Example -->
                          <div class="card shadow mb-4 m-5 mx-auto w-100">
                              <div class="card-header py-3 text-right pr-5">


                                        <?php 

                                            $mysql = "SELECT * FROM tbl_list WHERE list_id = '$list_id'";
                                            $query = mysqli_query($db,$mysql);
                                            while($name = mysqli_fetch_assoc($query)){

                                                $list_id = $name['list_id'];
                                                $list_name = $name['list_name'];



                                        ?>
                                  
                                  <h4 class="m-0 font-weight-bold text-primary"><?php echo $list_id; ?></h4>

                                  <h2 class="m-0 font-weight-bold text-primary text-left"><?php echo $list_name; ?></h2>


                                        <?php

                                            }

                                            ?>

                              </div>

                              <div class="card-body">



                                        <div class="table-responsive">
                                            <table class="table table-bordered table-hover" id="dataTable" width="100%" cellspacing="0">
                                                <thead class="bg-secondary">
                                                    <tr>
                                                        <th>Item Description</th>
                                                        <th>Item Cost</th>
                                                        
                                                        <th>Action</th>
                                                    </tr>
                                                </thead>
                                                
                                                <tbody>




                                                    <?php 

                                                                $sql = "SELECT * FROM tbl_itemlist WHERE list_id = '$list_id'";
                                                                $result = mysqli_query($db,$sql);
                                                                

                                                                while($row = mysqli_fetch_assoc($result)){



                                                                  $db_id = $row['id'];
                                                                  $item_name = $row['item_name'];
                                                                  $item_type = $row['item_type'];
                                                                  $item_details = $row['item_details'];
                                                                  $item_cost = $row['item_cost'];
                                                                  $list_id = $row['list_id'];
                                                                  $dept_id = $row['deptID'];




                                                            ?>
                             

                                

                                                             <tr>

                                                                <td><?= $item_name; ?>, <?= $item_details; ?></td>


                                                                <td><?= $item_cost; ?></td>

                                                               

                                                                

                                                                <td class="text-center">
                                                                  <!--
                                                                    <a href="edit_sched.php?edit=<?php echo $proj_sched_id; ?>" class="btn btn-md btn-primary" type="button" title="Edit"><i class="fas fa-fw fa-edit"></i> Edit</a>
                                                                  -->
                                                                    <a onclick="return confirm('Are you sure you want to delete this item?');" href="delete_dept_item.php?delete_item_select=<?php echo $db_id; ?>" type="button" class="btn btn-md btn-primary" title="Delete"> Remove</a>

                                                                    

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
    











</div>



<!--
<div class="col-md-3 m-5 p-5 mx-auto shadow">
      <div class="container-fluid">
        

        <div class="row">
          

          This is a list to save for PPMP

        </div>





      </div>


    </div>
-->





</div>
</div>

  </section>



  <?php

}



?>























   <?php include "includes/footer.php"; ?>









<?php 

}else{
  header("Location: ../login/dept_login.php");
  exit();
}

?>