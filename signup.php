<?php 
include('db.php');
include('includes/header.php');
if (isset($_POST['submit'])) {
    $err = [];
    if (isset($_POST['name']) && !empty($_POST['name'])) {
        $name = $_POST['name'];
    } else {
        $err['name'] = "*Enter fullname";
    }

    if (isset($_POST['username']) && !empty($_POST['username'])) {
        $username = $_POST['username'];
    } else {
        $err['username'] = "*Enter username";
    }

    if (isset($_POST['password']) && !empty($_POST['password'])) {
        $password = $_POST['password'];
    } else {
        $err['password'] = "*Enter password";
    }

	if (isset($_POST['address']) && !empty($_POST['address'])) {
        $address = $_POST['address'];
    } else {
        $err['address'] = "*Enter address";
    }

	if (isset($_POST['state']) && !empty($_POST['state'])) {
        $state = $_POST['state'];
    } else {
        $err['state'] = "*Enter state";
    }

	if (isset($_POST['district']) && !empty($_POST['district'])) {
        $district = $_POST['district'];
    } else {
        $err['district'] = "*Enter district";
    }

	if (isset($_POST['city']) && !empty($_POST['city'])) {
        $city = $_POST['city'];
    } else {
        $err['city'] = "*Enter city";
    }

	if (isset($_POST['police_id']) && !empty($_POST['police_id'])) {
        $police_id = $_POST['police_id'];
    } else {
        $err['police_id'] = "*please add the photo";
    }

	if (isset($_POST['post']) && !empty($_POST['post'])) {
        $post = $_POST['post'];
    } else {
        $err['post'] = "*Enter post";
    }

	if (isset($_POST['area']) && !empty($_POST['area'])) {
        $area = $_POST['area'];
    } else {
        $err['area'] = "*Enter area";
    }

	if (isset($_POST['phone']) && !empty($_POST['phone'])) {
        $phone = $_POST['phone'];
    } else {
        $err['phone'] = "*Enter phone";
    }

	 if (isset($_POST['email']) && !empty($_POST['email'])) {
        $email = $_POST['email'];
    } else {
        $err['email'] = "*Enter email";
    }

    if (count($err) == 0) {
    $name=$_POST['name'];
    $username=$_POST['username'];
    $password=$_POST['password'];
    $address=$_POST['address'];
    $state=$_POST['state'];
    $district=$_POST['district'];
    $city=$_POST['city'];
    $police_id=$_POST['police_id'];
    $post=$_POST['post'];
    $area=$_POST['area'];
    $phone=$_POST['phone'];
    $email=$_POST['email'];
    $query=mysqli_query($conn, "insert into tbl_signup (fullname,username,password,addresss,state,district,city,police_id,post,area,phone,email) values('$name','$username','$password','$address','$state','$district','$city','$police_id','$post','$area','$phone','$email')");

    if ($query) {
		header("location:dashboard.php");
	}else{
        echo "<script> alert('added failed') </script>";

    	}

	}	
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
	<link rel="stylesheet" href="css/footer.css">
     <link rel="stylesheet" href="css/nav.css">
	<script src="js/bootstrap.min.js"></script>
</head>
<body>
    
<br>
<br>
<div class="container">
    <h1 class="well">Registration Form</h1>
	<div class="col-lg-12 well">
	<div class="row">
				<form  name="myform" method="post">
					<div class="col-sm-12">
						<div class="row">
							<div class="col-sm-12 form-group">
								<label>Full Name</label>
								<input type="text" placeholder="Enter full Name Here.." name="name" class="form-control">
								<span class="text-danger"> <?php echo (isset($err['name'])?$err['name']:"") ?></span>

							</div>
						</div>					
						<div class="row">
							<div class="col-sm-12 form-group">
								<label>Username</label>
								<input type="text" name="username" placeholder="Enter Username Here.." class="form-control">
								<span class="text-danger"> <?php echo (isset($err['username'])?$err['username']:"") ?></span>

							</div>
						</div>	
                        <div class="row">
							<div class="col-sm-12 form-group">
								<label>Password</label>
								<input type="password" name="password" placeholder="Enter Password Here.." class="form-control">
								<span class="text-danger"> <?php echo (isset($err['password'])?$err['password']:"") ?></span>

							</div>	
						</div>	
                        <div class="row">
							<div class="col-sm-12 form-group">
								<label>Confirm Password</label>
								<input type="password" placeholder="Enter password again Here.." class="form-control">
							</div>
						</div>																	
                        <div class="form-group">
							<label>Address</label>
							<input type="text" name="address" placeholder="Enter Address Here.."  class="form-control">
							<span class="text-danger"> <?php echo (isset($err['address'])?$err['address']:"") ?></span>

						</div>	
                        
						<div class="row">
							<div class="col-sm-4 form-group">
								<label>State</label>
								<input type="text" name="state" placeholder="Enter State Here.." class="form-control">
								<span class="text-danger"> <?php echo (isset($err['state'])?$err['state']:"") ?></span>

							</div>	
							<div class="col-sm-4 form-group">
								<label>District</label>
								<input type="text" name="district" placeholder="Enter District Name Here.." class="form-control">
								<span class="text-danger"> <?php echo (isset($err['district'])?$err['district']:"") ?></span>

							</div>	
							<div class="col-sm-4 form-group">
								<label>City</label>
								<input type="text" name="city" placeholder="Enter City Here.." class="form-control">
								<span class="text-danger"> <?php echo (isset($err['city'])?$err['city']:"") ?></span>

							</div>		
						</div>
                        <div class="form-group">
                            <label>Police ID :</label>
                            <input type="file" name="police_id" accept=".jpg" multiple />
							<span class="text-danger"> <?php echo (isset($err['police_id'])?$err['police_id']:"") ?></span>

                        </div>
						<div class="row">
							<div class="col-sm-6 form-group">
								<label>Post</label>
								<input type="text" name="post" placeholder="Enter Post Here.." class="form-control">
								<span class="text-danger"> <?php echo (isset($err['post'])?$err['post']:"") ?></span>

							</div>		
							<div class="col-sm-6 form-group">
								<label>Area</label>
								<input type="text" name="area" placeholder="Enter area Here.." class="form-control">
								<span class="text-danger"> <?php echo (isset($err['area'])?$err['area']:"") ?></span>

							</div>	
						</div>						
					<div class="form-group">
						<label>Phone Number</label>
						<input type="text" name="phone" placeholder="Enter Phone Number Here.." class="form-control">
						<span class="text-danger"> <?php echo (isset($err['phone'])?$err['phone']:"") ?></span>

					</div>		
					<div class="form-group">
						<label>Email Address</label>
						<input type="text" name="email" placeholder="Enter Email Address Here.." class="form-control">
						<span class="text-danger"> <?php echo (isset($err['email'])?$err['email']:"") ?></span>

					</div>	
					
					<button type="submit" name="submit" class="btn btn-lg btn-info">Submit</button>					
					</div>
				</form> 
				</div>
	</div>
	</div>

<br>
<br>
<?php
	include('includes/footer.php');
?>
</body>
</html>