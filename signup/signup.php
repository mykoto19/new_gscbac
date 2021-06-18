<!DOCTYPE html>
<html lang="en">

<head>

<link href="img/gsc.png" rel="shortcut icon">

<link href="../img/gsc.png" rel="shortcut icon">

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>GSC-BAC Information System</title>

  <!-- Bootstrap core CSS -->
  <link href="../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  

  <link rel="stylesheet" type="text/css" href="../style.css">
  <link rel="stylesheet" type="text/css" href="signup.css">

  <!-- Custom styles for this template -->
  <link href="../scrolling/css/scrolling-nav.css" rel="stylesheet">

  <link href="../font-awesome/css/font-awesome.css" rel="stylesheet" />

  <style type="text/css">
    .btn {
      min-width: 250px;
      min-height: 30px;
    }

    .card {
      
      border-radius: 25px;
      box-shadow: 10px 10px;
    }
  </style>



</head>

<body id="page-top">


<!-- Navigation -->
  <nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav">
    <div class="container">
      <a class="navbar-brand js-scroll-trigger" href="#page-top"><img src="../img/gsc.png" alt="Logo" style="width: 50px; margin-right: 15px;"> GSC-BAC Information System</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="../index.php">Back to Dashboard</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <section>


      <div class="container-fluid">

       


          <div class="col-md-3 mx-auto"></div>


          <div class="col-md-6 mx-auto">
            

            <div class="card shadow mb-4">
              <div class="card-body">
                <div class="container text-center">
                    <h1 class="card-title"><b>Sign Up</b></h1>
                    <p>Please fill in this form to sign up for bidding.</p> 
                </div>

                <hr>
              
                

                  <form action="signup_check.php" method="post">

                    <div class="container-fluid">
                      <div class="row">

                        <?php if (isset($_GET['error'])) { ?>
                          <p class="error"><?php echo $_GET['error']; ?></p>
                        <?php } ?>

                        <?php if (isset($_GET['success'])) { ?>
                          <p class="success"><?php echo $_GET['success']; ?></p>
                        <?php } ?>



                          <div class="col-md-12 m-3">
                            
                            <div><b>Company/Supplier Name:</b></div>

                          </div>


                          <div class="col-md-12 m-0">  
                            <?php if (isset($_GET['name'])) { ?>
                              <input type="text"
                                      
                                     placeholder="Supplier Name" 
                                     name="name" 
                                     value="<?php echo $_GET['name']; ?>">
                            <?php }else{ ?>
                              <input type="text"
                                      
                                     placeholder="Supplier Name" 
                                     name="name"><br>
                            <?php }?>
                          </div>


                          
                            <div class="col-md-12 m-3">

                              <div><b>Representative Name:</b></div>

                            </div>

                            <div class="col-md-6 m-0">
                              <?php if (isset($_GET['fname'])) { ?>
                                <input type="text"
                                        
                                       placeholder="Firstname" 
                                       name="fname" 
                                       value="<?php echo $_GET['fname']; ?>">
                              <?php }else{ ?>
                                <input type="text"
                                        
                                       placeholder="Firstname" 
                                       name="fname">
                              <?php }?>
                            </div>
                          



                          
                            <div class="col-md-6 m-0">
                              <?php if (isset($_GET['lname'])) { ?>
                                <input type="text"
                                        
                                       placeholder="Lastname" 
                                       name="lname" 
                                       value="<?php echo $_GET['lname']; ?>">
                              <?php }else{ ?>
                                <input type="text"
                                        
                                       placeholder="Lastname" 
                                       name="lname"><br>
                              <?php }?>
                            </div>
                          


                          <div class="col-md-12 m-3">
                            <div><b>Email:</b></div>
                          </div>


                          <div class="col-md-12 m-0">
                            <?php if (isset($_GET['emailAd'])) { ?>
                              <input type="email"
                                      
                                     placeholder="Email" 
                                     name="emailAd" 
                                     value="<?php echo $_GET['emailAd']; ?>">
                            <?php }else{ ?>
                              <input type="email"
                                      
                                     placeholder="Email" 
                                     name="emailAd"><br>
                            <?php }?>
                          </div>




                          <div class="col-md-12 m-3">
                            <div><b>Password:</b></div>
                          </div>


                          <div class="col-md-6 m-0">
                            <input type="password" 
                                   placeholder="Password" 
                                   name="psw">
                          </div>


                            <br>

                          <div class="col-md-6 m-0">
                            <input type="password" 
                                   placeholder="Repeat Password" 
                                   name="psw_repeat">
                          </div>         

                            <br>
                          <div class="col-md-12 m-3">
                            <p>By creating an account you agree to our <a href="#">Terms & Privacy</a>.</p>
                          </div>

                            
                          <div class="col-sm-12 text-center">
                              
                            <button type="submit" class="btn btn-primary m-1">Signup</button>
                            <button type="reset" class="btn btn-primary m-1">Reset</button>

                          </div>




                            

                          <div class="col-md-12 m-3">
                            <a href="supplier/suppLogin.php">Already have an account?</a>
                          </div>

                        </div>

                      </div>
                      

                  </form>
                  
              </div>
            </div>



          </div>




          <div class="col-md-3 mx-auto"></div>
          




        
        



      </div>
    




  </section>




   <!-- Footer -->
  <?php include '../includes/footer.php';?>


   <!-- Bootstrap core JavaScript -->
  <script src="../vendor/jquery/jquery.min.js"></script>
  <script src="../vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Plugin JavaScript -->
  <script src="../vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom JavaScript for this theme -->
  <script src="../scrolling/js/scrolling-nav.js"></script>


</body>
</html>