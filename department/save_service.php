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

      $service_id = $_GET['save'];

     

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

                                            $service_name = $_POST['service_name'];
                                            $service_type = $_POST['service_type'];
                                            $service_detail = $_POST['service_detail'];
                                            $service_cost = $_POST['service_cost'];
                                            $list_id = $_POST['list_id'];
                                            $dept_id = $_POST['dept_id'];




                                            $service_name = mysqli_real_escape_string($db,$service_name);
                                            $service_type = mysqli_real_escape_string($db,$service_type);
                                            $service_detail = mysqli_real_escape_string($db,$service_detail);
                                            $service_cost = mysqli_real_escape_string($db,$service_cost);
                                            $list_id = mysqli_real_escape_string($db,$list_id);
                                            $dept_id = mysqli_real_escape_string($db,$dept_id);

                                            $sql = "INSERT INTO tbl_itemlist(item_name, item_type, item_details, item_cost, list_id, deptID) 
                                                    VALUES('$service_name','$service_type','$service_detail','$service_cost','$list_id','$dept_id')";            
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

                                    $sql = "SELECT * FROM service_offer WHERE serveOffer_ID = $service_id";
                                    $results = $db->query($sql);
                                    while($row = mysqli_fetch_assoc($results)){ 
                                                                    
                                        $service_id_db = $row['serveOffer_ID'];
                                        $service_name = $row['serveOffer_Name'];
                                        
                                        $service_detail = $row['serveOffer_Details'];
                                        $service_cost = $row['serveOffer_Cost'];
                                        

                                 ?>

                                    <form method="post">

                                        <div class="container-fluid">

                                            <div class="row">


                                              
                                                <div class="col-sm-12 m-3">
                                                    <div>Plan Type:</div>
                                                    <input type="text" name="service_type">
                                                </div>

                                                

                                                <div class="col-sm-12 m-3">
                                                    <div>Plan Name:</div>
                                                    <input type="text" name="service_name" value="<?= $service_name; ?>">
                                                </div>


                                                <div class="col-sm-12 m-3">
                                                    <div>Plan Details:</div>
                                                    
                                                    <textarea name="service_detail" id="" cols="30" rows="10" class="span11" required=""><?= $service_detail; ?></textarea>
                                                </div>


                                               

                                                <div class="col-sm-12 m-3">
                                                    <div>Plan Cost:</div>
                                                    <input type="number" name="service_cost" required="" autofocus="" value="<?= $service_cost; ?>">
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
