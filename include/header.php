<?php
  session_start();
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <title>PHP</title>
    <meta name="viewport" content="initial-scale=1, width=device-width" />
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css" media="screen, projection"/>
    <link rel="stylesheet" type="text/css" href="css/style.css" media="screen, projection"/>
    <link rel="shortcut icon" href="images/favicon.ico" />

    <!-- <link rel="shortcut icon" href="images/favicon.ico" /> -->
  </head>
  <body id="bootstrapOverrides">
    <div id="navigation">
      <nav class="navbar navbar-custom" role="navigation">
        <div class="container-fluid" id="menu">
          <div class="row">
            <div class="col-md-2">
             <div class="site-logo">
                <a href="index.php" class="brand">
                  <img src="images/logo_small.png" id="logo">
                  <p id="slogan">Think outside the box</p>
                </a>
              </div>
            </div>

            <div class="col-md-10">

                        <!-- Brand and toggle get grouped for better mobile display -->
              <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#menu">
                  <i class="fa fa-bars"></i>
                </button>
              </div>
              <!-- Collect the nav links, forms, and other content for toggling -->
              <div class="collapse navbar-collapse">
                <ul class="nav navbar-nav navbar-right" id="nav-tabs">
                  <li class="active"><a href="index.php">Home</a></li>
                  <?php
                    if(isset($_SESSION['id'])) {
                      echo ' <li><a href="members.php">Members</a></li> ';
                      echo ' <li><a href="admin.php">Profile</a></li> ';
                      echo ' <li><a href="include/logout.php">Logout</a></li> ';
                    }else{
                      echo ' <li><a href="login_page.php">Log in</a></li> ';
                      echo ' <li><a href="register_page.php">Register</a></li> ';
                    }
                  ?>
                </ul>
              </div>
            <!-- /.Navbar-collapse -->

            </div>
          </div>
        </div>
        <!-- /.container -->
      </nav>
    </div>

