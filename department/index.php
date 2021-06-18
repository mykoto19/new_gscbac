<?php 
session_start();
if (isset($_SESSION['deptID']) && isset($_SESSION['deptName']) && isset($_SESSION['College_Office'])) {

?>


<!DOCTYPE html>
<html lang="en">

<head>

    <link href="../img/gsc.png" rel="shortcut icon">

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title><?php echo $_SESSION['acro_name']; ?> - GSC-BAC Information System</title>

  <!-- Bootstrap core CSS -->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <link rel="stylesheet" type="text/css" href="../style.css">

  <!-- Custom styles for this template -->
  <link href="css/scrolling-nav.css" rel="stylesheet">

</head>

<body id="page-top">

    <?php

        require_once "../includes/initdb.php";

     ?>

  <!-- Navigation -->
  <nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav">
    <div class="container">
      <a class="navbar-brand js-scroll-trigger" href="#page-top"><img src="../img/gsc.png" alt="Logo" style="width: 50px; margin-right: 15px;"> Welcome, <?php echo $_SESSION['College_Office']; ?></a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">

            <li class="nav-item">
                <a class="nav-link js-scroll-trigger" href="#about">About</a>
            </li>


            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">Lists</a>
                <div class="dropdown-menu dropdown-menu-right">

                  <a class="dropdown-item" href="create_list.php">Create List</a>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item" href="item_list.php">Item Lists</a>
                  
                  
                  

                </div>
            </li>

            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">Procurement</a>
                <div class="dropdown-menu dropdown-menu-right">
                  <a class="dropdown-item" href="ppmp.php">PPMP</a>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item" href="app.php">APP</a>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item" href="pur_req.php">Purchase Requests</a>
                  
                  

                </div>
            </li>

            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">Projects</a>
                <div class="dropdown-menu dropdown-menu-right">
                  <a class="dropdown-item" href="login/dept_monitor.php">Monitor</a>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item" href="login/dept_report.php">Reports</a>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item" href="dept_sched.php">Schedules</a>
                  

                </div>
            </li>

          
          
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="#" data-toggle="modal" data-target="#logoutModal">Logout</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <header>
    <div class="container mr-5 pl-5 mb-5 pb-5">


        <h1>Guimaras State College</h1>
        <h1>Bids and Awards Committee</h1>
        <h1>Information System</h1>
      
    </div>
  </header>

  <?php 

                $dept_id = $_SESSION['deptID'];

                $sql = "SELECT * FROM tbl_goals WHERE deptID = $dept_id";
                $results = $db->query($sql);
                while($row = mysqli_fetch_assoc($results)){ 
                                                
                    $goal_id = $row['goal_id'];
                    $title = $row['title'];
                    $goals = $row['goals'];
                    $objectives = $row['objectives'];
                    $deptID = $row['deptID'];

             ?>

  <section id="about">
    <div class="container">
      <div class="row">
        <div class="col-lg-8 mx-auto">

            

          <h2><?php echo $title; ?></h2>
          <br>
          <br>
          <p class="lead"><?php echo $goals; ?></p>
          <br>
          <p class="lead"><?php echo $objectives; ?></p>
          

         

        </div>
      </div>
    </div>
  </section>



  


   <?php 

            }

     ?>

  

  <!-- Footer -->
  <footer class="py-4">
    <div class="container">
      <p class="m-0 text-center text-white">Copyright &copy; GSC-BAC Information System 2020-<?php echo date("Y");?></p>
    </div>
    <!-- /.container -->
  </footer>



  <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-primary" href="dept_logout.php">Logout</a>
                </div>
            </div>
        </div>
    </div>

  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Plugin JavaScript -->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom JavaScript for this theme -->
  <script src="js/scrolling-nav.js"></script>

</body>

</html>




<?php 

}else{
  header("Location: ../login/dept_login.php");
  exit();
}

?>