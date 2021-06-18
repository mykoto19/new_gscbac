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




  <section>


     <div class="container-fluid">

                        <div class="row">



                        <!-- Content Column -->
                        <div class="col-lg-4 mb-4 mx-auto">

                            <!-- Project Card Example -->
                            <div class="card border-left-primary border-bottom-primary shadow mb-4">
                                <div class="card-header py-3">
                                    <h6 class="m-0 font-weight-bold text-primary"><i class="fas fa-calendar text-gray-800 mr-2"></i> Create List</h6>
                                </div>
                                <div class="card-body">

                                  <?php 

                                    $dept_id = $_SESSION['deptID'];

                                   /*$sql = "SELECT * FROM departmenttb WHERE deptID = $dept_id";
                                    $results = $db->query($sql);
                                    while($row = mysqli_fetch_assoc($results)){ 
                                                                    
                                        $goal_id = $row['goal_id'];
                                        $title = $row['title'];
                                        $goals = $row['goals'];
                                        $objectives = $row['objectives'];
                                        $deptID = $row['deptID'];
                                        */

                                 ?>

                                    <form action="create_list_check.php" method="post">

                                        <div class="container-fluid">

                                            <div class="row">


                                              
                                                <div class="col-sm-12 m-3">
                                                    <div>List ID:</div>
                                                    <input type="text" name="list_id" required="" autofocus="">
                                                </div>

                                                

                                                <div class="col-sm-12 m-3">
                                                    <div>List Name:</div>
                                                    <input type="text" name="list_name" required="">
                                                </div>


                                               

                                                <div class="col-sm-12 m-3">
                                                    <div>Department ID:</div>
                                                    <input type="number" name="dept_id" required="" autofocus="" value="<?php echo $dept_id; ?>">
                                                </div>

                                                


                                               


                                                



                                                <div class="col-sm-12 m-1 text-right">

                                                    <hr>
                                                    
                                                    <button type="submit" name="submit" class="btn btn-md btn-primary mt-1">Create</button>
                                                    <button type="reset" name="clear" class="btn btn-md btn-primary mt-1">Reset</button>

                                                    
                                                </div>
                                                


                                            </div>
                                            


                                        </div>
                                        




                                    </form>
                                    


                                </div>
                            </div>

                        </div>


                            


                           


                           






                    </div>



                </div>
    


  </section>




  <?php include "includes/footer.php"; ?>



  <?php 

}else{
  header("Location: ../login/dept_login.php");
  exit();
}

?>
