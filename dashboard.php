<?php 
require_once "checklogin.php";
 ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Accident Management System</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/footer.css">
    <link rel="stylesheet" href="css/style.css">
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>


</head>

<body>
<nav>
    <div class="wrapper">
      <div class="logo"> 
        <a class="navbar-brand" href="index.php">
          <img src="images/logo.png" alt="logo thyo" height="80px" style="margin-top: 5px;">
         </a>
      </div>
      <input type="radio" name="slider" id="menu-btn">
      <input type="radio" name="slider" id="close-btn">
      <ul class="nav-links">
        <label for="close-btn" class="btn close-btn"><i class="fas fa-times"></i></label>
        <li><a href="index.php">Home</a></li>
       
        <li>
          <a href="#" class="desktop-item">View Report</a>
          <input type="checkbox" id="showDrop">
          <label for="showDrop" class="mobile-item">View Report</label>
          <ul class="drop-menu">
            <li><a href="cdeadtable.php">Dead body</a></li>
            <li><a href="missing_table.php">Missing Body</a></li>
          </ul>
        </li> <li>
          <a href="#" class="desktop-item">Manage</a>
          <input type="checkbox" id="showDrop">
          <label for="showDrop" class="mobile-item">Manage</label>
          <ul class="drop-menu">
            <li><a href="table.php">Dead body</a></li>
            <li><a href="missing_table.php">Missing Body</a></li>
          </ul>
        </li>
        <li>
          <a href="logout.php" class="desktop-item">logout</a>
        </ul>
      <label for="menu-btn" class="btn menu-btn"><i class="fas fa-bars"></i></label>
    </div>
  </nav>

  
  <br>

<br>
        
    <!--start of content-->
    <div class="slider">
        <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
                <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="images/2.JPG" class="d-block w-100" alt="first slide">
                    <div class="carousel-caption d-none d-md-block">
                       <h5>Bike Accident</h5>
                        <p>One of the main cause of death in Nepal.</p>
                    </div>
                </div>
            <div class="carousel-item">
                <img src="images/3.jpg" class="d-block w-100" alt="Second slide">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>Siddhu</h5>
                         <p></p>
                    </div>
            </div>
            <div class="carousel-item">
                <img src="images/12.JPG" class="d-block w-100" alt="Third slide">
                      <div class="carousel-caption d-none d-md-block">
                        <h5>sid</h5>
                        <p></p>
                    </div>
                </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </div>
    <br/>
    

    <div class="left" style=" width: 5%;float: right;">.</div>
    <div class="content" style="width: 80%;height: 250px;background-color:cornsilk;margin-left:150px;}">
        <h3 align="center" style="font-family:fantasy;">Accident Management System</h3><br>
        <p>Nepal is a country with great diversity in its geography. It contains <i>himalaya</i> region with high mountains, <i>hilly</i> region with different valleys in it and <i>terai</i> region which is flat.
        So, there are different types of accident occuring in different area like </i>avalanche</i> in mountain region, landslide and flood in hilly region whereas flood in terai region. So, by this accident many
        people dies. And some are those people ho arenot even of those area. In this case, This system helps. This system helps to identify the body and keep the information of those in the website and the concern
        people can see whether there relatives are dead or missing on those accident. The mail aim of this system is to make sure that no dead body goes unknown from the accident.</p>
    
    </div>
    <div class="right" style=" width: 5%;float: left;"></div>
        <!--end of the content-->
<br>


       <?php
       include('includes/footer.php');
       ?>



        <!--end of the footer-->
        <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
    </body>

</html>