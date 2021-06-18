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
  

  <div class="col-md-10 mx-auto">


  <div class="container-fluid">



    <div class="row">


       <div class="card shadow mb-4 m-5 mx-auto w-100">



          <div class="card-header py-3 text-center pr-5">


                                        
                                  
                <h4 class="m-0 font-weight-bold text-primary"><?php echo $_SESSION['College_Office']; ?></h4>

                                  


                                        

          </div>


 




        <div class="card-body">
          <div class="table-responsive">  

            
          <table class="table table-bordered table-hover" id="dataTable" width="100%" cellspacing="0">

            
            

  
              <thead class="bg-dark">
                <tr>
                  <th class="text-light">List ID</th>
                  <th>List Name</th>
                  
                  <th>Action</th>
                </tr>
              </thead>


              


              <tbody>

                <?php 


                  $dept_id = $_SESSION['deptID'];


                  $sql = "SELECT * FROM tbl_list WHERE deptID = $dept_id";
                  $results = $db->query($sql);
                  while($row = mysqli_fetch_assoc($results)){ 
                    
                    $list_id = $row['list_id'];
                    $list_name = $row['list_name'];
                    $dept_id = $row['deptID'];



              ?>
                
                  <tr>
                    <td><?= $list_id; ?></td>
                    <td><?= $list_name; ?></td>
                   
                  
                    <td class="text-center">

                        <a href="ppmp_list.php?source=<?php echo $list_id; ?>" class="btn btn-md btn-primary" type="button" title="Open List">Open</a>

                        <a onclick="return confirm('Are you sure you want to delete this item?');" href="delete_dept_item.php?delete_item_list=<?php echo $list_id; ?>" type="button" class="btn btn-md btn-danger" title="Delete">Remove</a></a>

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




</section>


















  <?php include "includes/footer.php"; ?>









<?php 

}else{
  header("Location: ../login/dept_login.php");
  exit();
}

?>