<?php
  session_start();
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <title> for Zivile</title>
    <meta name="viewport" content="initial-scale=1, width=device-width" />
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css" media="screen, projection"/>
    <link rel="stylesheet" type="text/css" href="css/style.css" media="screen, projection"/>

    <!-- <link rel="shortcut icon" href="images/favicon.ico" /> -->
  </head>
  <body id="bootstrap_overrides">
      <div id="navigation">
        <nav class="navbar navbar-custom" role="navigation">
          <div class="container">
            <div class="row">
              <div class="col-md-2">
               <div class="site-logo">
                  <a href="#page-top" class="brand">
                    <p id="kea">LOGO</p>
                    <p id="slogan">Company Slogan</p>
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
              <div class="collapse navbar-collapse" id="menu">
                <ul class="nav navbar-nav navbar-right">
                  <li class="active"><a href="index.php">Home</a></li>
                  <li><a href="members.php">Members</a></li>
                  <li><a href="login_page.php">Login</a></li>
                </ul>
              </div>
              <!-- /.Navbar-collapse -->

              </div>
            </div>
          </div>
          <!-- /.container -->
        </nav>
      </div>
