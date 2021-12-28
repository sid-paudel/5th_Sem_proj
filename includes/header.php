<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/style.css">
        <script src="js/bootstrap.min.js"></script>

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
        <li><a href="dashboard.php">Home</a></li>
       
        <li>
          <a href="#" class="desktop-item">View Report</a>
          <input type="checkbox" id="showDrop">
          <label for="showDrop" class="mobile-item">View Report</label>
          <ul class="drop-menu">
            <li><a href="cdeadtable.php">Dead body</a></li>
            <li><a href="cmisstable.php">Missing Body</a></li>
          </ul>
        </li> 
        <!-- <li>
          <a href="#" class="desktop-item">Manage</a>
          <input type="checkbox" id="showDrop">
          <label for="showDrop" class="mobile-item">Manage</label>
          <ul class="drop-menu">
            <li><a href="table.php">Dead body</a></li>
            <li><a href="missing_table.php">Missing Body</a></li>
          </ul>
        </li> -->
        <li>
          <a href="login.php" class="desktop-item">Login</a>
        </li>
        <li><a href="signup.php">Sign Up</a></li>
      </ul>
      <label for="menu-btn" class="btn menu-btn"><i class="fas fa-bars"></i></label>
    </div>
  </nav>

  
  <br>
  
</body>
</html>