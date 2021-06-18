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

      $item_id = $_GET['save'];

     

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

                                            $item_name = $_POST['item_name'];
                                            $item_type = $_POST['item_type'];
                                            $item_detail = $_POST['item_detail'];
                                            $item_cost = $_POST['item_cost'];
                                            $list_id = $_POST['list_id'];
                                            $dept_id = $_POST['dept_id'];




                                            $item_name = mysqli_real_escape_string($db,$item_name);
                                            $item_type = mysqli_real_escape_string($db,$item_type);
                                            $item_detail = mysqli_real_escape_string($db,$item_detail);
                                            $item_cost = mysqli_real_escape_string($db,$item_cost);
                                            $list_id = mysqli_real_escape_string($db,$list_id);
                                            $dept_id = mysqli_real_escape_string($db,$dept_id);

                                            $sql = "INSERT INTO tbl_itemlist(item_name, item_type, item_details, item_cost, list_id, deptID) 
                                                    VALUES('$item_name','$item_type','$item_detail','$item_cost','$list_id','$dept_id')";            
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

                                    $sql = "SELECT * FROM goods_items WHERE itemID = $item_id";
                                    $results = $db->query($sql);
                                    while($row = mysqli_fetch_assoc($results)){ 
                                                                    
                                        $item_id_db = $row['itemID'];
                                        $item_name = $row['itemName'];
                                        $item_type   = $row['itemType'];
                                        $item_detail = $row['itemDetails'];
                                        $item_cost = $row['itemCost'];
                                        

                                 ?>

                                    <form method="post">

                                        <div class="container-fluid">

                                            <div class="row">


                                              
                                                <div class="col-sm-12 m-3">
                                                    <div>Item Type:</div>
                                                    <input type="text" name="item_type" autofocus="" value="<?= $item_type; ?>">
                                                </div>

                                                

                                                <div class="col-sm-12 m-3">
                                                    <div>Item Name:</div>
                                                    <input type="text" name="item_name" value="<?= $item_name; ?>">
                                                </div>


                                                <div class="col-sm-12 m-3">
                                                    <div>Item Details:</div>
                                                    
                                                    <textarea name="item_detail" id="" cols="30" rows="10" class="span11" required=""><?= $item_detail; ?></textarea>
                                                </div>


                                               

                                                <div class="col-sm-12 m-3">
                                                    <div>Item Cost:</div>
                                                    <input type="number" name="item_cost" required="" autofocus="" value="<?= $item_cost; ?>">
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
