

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
  <link rel="stylesheet" type="text/css" href="admin_login.css">

  <!-- Custom styles for this template -->
  <link href="../scrolling/css/scrolling-nav.css" rel="stylesheet">

  <link href="../font-awesome/css/font-awesome.css" rel="stylesheet" />



</head>

<body>


<!-- Navigation -->
  <nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav">
    <div class="container">
      <a class="navbar-brand js-scroll-trigger" href="../index.php"><img src="../img/gsc.png" alt="Logo" style="width: 50px; margin-right: 15px;"> GSC-BAC Information System</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="client_login_option.php">Back to Login Option</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <section>

    <div class="container-fluid p-5">

      <div class="row">

                <div class="col-md-4 my-auto text-center"></div>



                <div class="col-md-4 my-auto shadow text-center">
                  

                  <form action="con_ofc_check.php" method="post">
                    
                    

                    <div>
                      <br>
                      <h2>Connected Office Login</h2>
                    </div>

                    <br>

                    <?php if (isset($_GET['error'])) { ?>
                      <p class="error"><?php echo $_GET['error']; ?></p>
                    <?php } ?>

                    <div>
                      <input type="text" name="usr" placeholder="Username" autofocus="">

                      <input type="password" name="pswd" placeholder="Password">
                      
                    </div>

                     <div class="text-center">
                      <button type="submit" class="btn btn-primary m-3">Login</button>
                      <button type="reset" class="btn btn-primary m-3">Reset</button>
                    </div>






                  </form>

                </div>






                <div class="col-md-4 my-auto text-center"></div>
    



      </div>
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