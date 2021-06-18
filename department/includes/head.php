


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

  <link href="vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">

  <link rel="stylesheet" type="text/css" href="../style.css">

  <link rel="stylesheet" type="text/css" href="sidenav.css">

  <!-- Custom styles for this template -->
  <link href="css/scrolling-nav.css" rel="stylesheet">

  <link href="../font-awesome/css/font-awesome.css" rel="stylesheet" />

  

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
      