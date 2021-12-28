<?php 
include('inclides/header.php');
if (isset($_POST['btnUpdate'])) {
        $err = [];
        $id = $_GET['id'];

    
        if (isset($_POST['code']) && !empty($_POST['code'])) {
            $code = $_POST['code'];
        } else {
            $err['code'] = "*Enter MPN code";
        }   
    
        if (isset($_POST['name']) && !empty($_POST['name'])) {
            $name = $_POST['name'];
        } else {
            $err['name'] = "*Enter Name";
        }  
    
        if (isset($_POST['gender']) && !empty($_POST['gender'])) {
            $gender = $_POST['gender'];
        } else {
            $err['gender'] = "*Enter gender";
        }
    
        if (isset($_POST['age']) && !empty($_POST['age'])) {
            $age = $_POST['age'];
        } else {
            $err['age'] = "*Enter age";
        }
    
        if (isset($_POST['birthplace']) && !empty($_POST['birthplace'])) {
            $birthplace = $_POST['birthplace'];
        } else {
            $err['birthplace'] = "*Enter birthplace";
        }
    
        if (isset($_POST['language']) && !empty($_POST['language'])) {
            $language = $_POST['language'];
        } else {
            $err['language'] = "*Enter language";
        }
    
        if (isset($_POST['description']) && !empty($_POST['description'])) {
            $description = $_POST['description'];
        } else {
            $err['description'] = "*Enter description";
        }
    
        if (isset($_POST['occupation']) && !empty($_POST['occupation'])) {
            $occupation = $_POST['occupation'];
        } else {
            $err['occupation'] = "*Enter occupation";
        }
    
        if (isset($_POST['religion']) && !empty($_POST['religion'])) {
            $religion = $_POST['religion'];
        } else {
            $err['religion'] = "*Enter religion";
        }
    
        if (isset($_POST['info_giver']) && !empty($_POST['info_giver'])) {
            $info_giver = $_POST['info_giver'];
        } else {
            $err['info_giver'] = "*Enter info_giver";
        }
    
        if (isset($_POST['moreinfo']) && !empty($_POST['moreinfo'])) {
            $moreinfo = $_POST['moreinfo'];
        } else {
            $err['moreinfo'] = "*Enter other information";
        }
    
	if (count($err) == 0) {
		require_once "db.php";
		 $sql = "update tbl_miss set 
         mpncode='$code',name='$name',gender='$gender',age='$age',birthplace='$birthplace',language='$language',description='$description',occupation='$occupation',religion='$religion',info_giver='$info_giver',others='$moreinfo' where id=$id";
		$conn->query($sql);
		// print_r($conn);
		if ($conn->affected_rows == 1) {
			header('location:missing_table.php');
		} else {
            echo "<script> alert('added failed') </script>";
            header('location:missing_table.php');

			$msg = "Category creation failed!!: " . $conn->error ;
		}
	}
}
 ?>

<?php 
require_once "db.php";
$id = $_GET['id'];
$sql = "select *  from tbl_miss where id=$id";
$res= $conn->query($sql);
if ($res->num_rows != 1) {
	header('location:missing_table.php');
}
$row = $res->fetch_assoc();
// print_r($row);
 ?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit </title>
    <link href="css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/footer.css">
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
        <li><a href="index.php">About</a></li>
        <li>
          <a href="#" class="desktop-item">View Report</a>
          <input type="checkbox" id="showDrop">
          <label for="showDrop" class="mobile-item">View Report</label>
          <ul class="drop-menu">
            <li><a href="table.php">Dead body</a></li>
            <li><a href="missing_table.php">Missing Body</a></li>
          </ul>
        </li>
        <li>
          <a href="login.php" class="desktop-item">Login</a>
        </li>
        <li><a href="signup.php">Sign Up</a></li>
      </ul>
      <label for="menu-btn" class="btn menu-btn"><i class="fas fa-bars"></i></label>
    </div>
  </nav>
<br>
<br>
<br>



<div class="container">
        <h1 class="well">Registration Of Missing Body</h1>
        <br/>
        <div class="col-lg-12 well">
        <div class="row">
                    <form name="myform" action="" method="POST">
                        <div class="col-sm-12">
                            <div class="row">
                                <div class="col-sm-12 form-group">
                                    <label>MPN Code</label>
                                    <input type="number" name="code"  class="form-control">
                                    <span class="text-danger"> <?php echo (isset($err['code'])?$err['code']:"") ?></span>

                                </div>
                            </div>	
                            <div class="row">
                                <div class="col-sm-12 form-group">
                                    <label>Name of missing person </label>
                                    <input type="text" name="name" placeholder="Enter  Name Here.." class="form-control">
                                    <span class="text-danger"> <?php echo (isset($err['name'])?$err['name']:"") ?></span>

                                </div>
                            </div>					
                            <div class="form-group">
                                <label>Gender&nbsp;:&nbsp;</label>
                                <input type="radio" name="gender" >Male&#9;
                                <input type="radio" name="gender">Female&#9;
                                <input type="radio" name="gender">Other
                                <span class="text-danger"> <?php echo (isset($err['gender'])?$err['gender']:"") ?></span>


                            </div>	
                            <div class="row">
                                <div class="col-sm-4 form-group">
                                    <label>Age</label>
                                    <input type="text" name="age" placeholder="Enter Age Here.." class="form-control">
                                    <span class="text-danger"> <?php echo (isset($err['age'])?$err['age']:"") ?></span>

                                </div>	
                                <div class="col-sm-4 form-group">
                                    <label>Birthplace</label>
                                    <input type="text" name="birthplace" placeholder="Enter Birthplace Here.." class="form-control">
                                    <span class="text-danger"> <?php echo (isset($err['birthplace'])?$err['birthplace']:"") ?></span>

                                </div>	
                                <div class="col-sm-4 form-group">
                                    <label>Language</label>
                                    <input type="text" name="language" placeholder="Enter Language Here.." class="form-control">
                                    <span class="text-danger"> <?php echo (isset($err['language'])?$err['language']:"") ?></span>

                                </div>		
                            </div>
                            <div class="form-group">
                                <label>Description of body for recognization</label>
                                <textarea type="text"  name="description" class="form-control"></textarea>
                                <span class="text-danger"> <?php echo (isset($err['description'])?$err['description']:"") ?></span>

                            </div>
                            <div class="row">
                                <div class="col-sm-6 form-group">
                                    <label>Occupation</label>
                                    <input type="text" name="occupation" placeholder="Enter Occupation Here.." class="form-control">
                                    <span class="text-danger"> <?php echo (isset($err['occupation'])?$err['occupation']:"") ?></span>

                                </div>		
                                <div class="col-sm-6 form-group">
                                    <label>Religion</label>
                                    <input type="text" name="religion" placeholder="Enter Your Religion Here.." class="form-control">
                                    <span class="text-danger"> <?php echo (isset($err['religion'])?$err['religion']:"") ?></span>

                                </div>	
                            </div>						
                        		
                        <div class="row">
                            <div class="col-sm-12 form-group">
                                <label>Name Of Information Giver</label>
                                <input type="text" name="info_giver" placeholder="Enter  Name Here.." class="form-control">
                                <span class="text-danger"> <?php echo (isset($err['info_giver'])?$err['info_giver']:"") ?></span>

                            </div>
                        </div>
                        <div class="form-group">
                            <label>Any Other information of information Giver</label>
                            <textarea type="text" name="moreinfo" class="form-control"></textarea>
                            <span class="text-danger"> <?php echo (isset($err['moreinfo'])?$err['moreinfo']:"") ?></span>

                        </div>
                        <button type="submit" name="btnUpdate" class="btn btn-lg btn-info">Submit</button>					
                        </div>

                    </form> 
                    </div>
        </div>
        </div>
        <br/>
        <br/>


        <?php include('includes/footer.php'); ?>
</body>
</html>