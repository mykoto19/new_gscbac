<?php 
session_start();
if (isset($_SESSION['deptID']) && isset($_SESSION['deptName']) && isset($_SESSION['College_Office'])) {

?>






<?php include "includes/head.php"; ?>



<div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">

          

          
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="index.php">Back</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>




  <?php 

  if(isset($_GET['save'])){

      $plan_id = $_GET['save'];

     

  ?>




  <section>


     <div class="container-fluid">

                        <div class="row">



                        <!-- Content Column -->
                        <div class="col-lg-4 mb-4 mx-auto">

                            <!-- Project Card Example -->
                            <div class="card border-left-primary border-bottom-primary shadow mb-4">
                                <div class="card-header py-3">
                                    <h6 class="m-0 font-weight-bold text-primary"><i class="fas fa-calendar text-gray-800 mr-2"></i> Save Item to List</h6>
                                </div>
                                <div class="card-body">




                                  <?php

                                              if(isset($_POST['submit'])){

                                            $plan_name = $_POST['plan_name'];
                                            $plan_type = $_POST['plan_type'];
                                            $plan_detail = $_POST['plan_detail'];
                                            $plan_cost = $_POST['plan_cost'];
                                            $list_id = $_POST['list_id'];
                                            $dept_id = $_POST['dept_id'];




                                            $plan_name = mysqli_real_escape_string($db,$plan_name);
                                            $plan_type = mysqli_real_escape_string($db,$plan_type);
                                            $plan_detail = mysqli_real_escape_string($db,$plan_detail);
                                            $plan_cost = mysqli_real_escape_string($db,$plan_cost);
                                            $list_id = mysqli_real_escape_string($db,$list_id);
                                            $dept_id = mysqli_real_escape_string($db,$dept_id);

                                            $sql = "INSERT INTO tbl_itemlist(item_name, item_type, item_details, item_cost, list_id, deptID) 
                                                    VALUES('$plan_name','$plan_type','$plan_detail','$plan_cost','$list_id','$dept_id')";            
                                            $result = mysqli_query($db, $sql);
                                            if($result){

                                                header("Location: dept_items.php?goto=$list_id");
                                                exit();
                                            }else{
                                                header("Location: save_item.php?error=Unknown error occured");
                                                exit();
                                            }


                                            


                                        }

                                  ?>






                                  <?php 

                                    $dept_id = $_SESSION['deptID'];

                                    $sql = "SELECT * FROM plan_infra WHERE planInfra_ID = $plan_id";
                                    $results = $db->query($sql);
                                    while($row = mysqli_fetch_assoc($results)){ 
                                                                    
                                        $plan_id_db = $row['planInfra_ID'];
                                        $plan_name = $row['planInfra_Name'];
                                        
                                        $plan_detail = $row['planInfra_Details'];
                                        $plan_cost = $row['planInfra_Cost'];
                                        

                                 ?>

                                    <form method="post">

                                        <div class="container-fluid">

                                            <div class="row">


                                              
                                                <div class="col-sm-12 m-3">
                                                    <div>Plan Type:</div>
                                                    <input type="text" name="plan_type">
                                                </div>

                                                

                                                <div class="col-sm-12 m-3">
                                                    <div>Plan Name:</div>
                                                    <input type="text" name="plan_name" value="<?= $plan_name; ?>">
                                                </div>


                                                <div class="col-sm-12 m-3">
                                                    <div>Plan Details:</div>
                                                    
                                                    <textarea name="plan_detail" id="" cols="30" rows="10" class="span11" required=""><?= $plan_detail; ?></textarea>
                                                </div>


                                               

                                                <div class="col-sm-12 m-3">
                                                    <div>Plan Cost:</div>
                                                    <input type="number" name="plan_cost" required="" autofocus="" value="<?= $plan_cost; ?>">
                                                </div>



                                                <div class="col-sm-12 m-3">
                                                    <div>List ID:</div>
                                                    <input type="text" name="list_id">
                                                </div>


                                                <div class="col-sm-12 m-3">
                                                    <div>Department ID:</div>
                                                    <input type="text" name="dept_id" value="<?= $dept_id; ?>">
                                                </div>

                                                


                                               


                                                



                                                <div class="col-sm-12 m-1 text-right">

                                                    <hr>
                                                    
                                                    <button type="submit" name="submit" class="btn btn-md btn-primary mt-1">Create</button>
                                                    <button type="reset" name="clear" class="btn btn-md btn-primary mt-1">Reset</button>

                                                    
                                                </div>
                                                


                                            </div>
                                            


                                        </div>
                                        




                                    </form>


                                    <?php

                                      }


                                    ?>
                                    


                                </div>
                            </div>

                        </div>


                            


                           


                           






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
