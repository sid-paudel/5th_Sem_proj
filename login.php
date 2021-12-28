<?php
include('includes/header.php');

if (isset($_POST['submit'])) {
	$err = [];
	if (isset($_POST['username']) && !empty($_POST['username'])) {
		$username =  $_POST['username'];
	} else {
		$err['username'] =  "Enter Username";
	}

	if (isset($_POST['password']) && !empty($_POST['password'])) {
		$password =  $_POST['password'];
	} else {
		$err['password'] =  "Enter password";
	}
	if (count($err) == 0) {
		// //login process
		require_once "db.php";

		// sql query to select data from database
		$sql = "select * from  tbl_signup where username='$username' and password='$password'";
		
		//execute query
		$res = $conn->query($sql);		
		$login = false;		
		if ($res->num_rows == 1) {
			$login = true;
			$data = $res->fetch_assoc();
		}
		if ($login) {
			// echo "login success";
			//start session
			session_start();
			//store username into session
			$_SESSION['username'] = $username;
			$_SESSION['name'] = $data['name'];
			$_SESSION['user_id'] = $data['id'];


			$_SESSION['login']  = true;

			//code to check remeber me
			if (isset($_POST['remember'])) {
				setcookie('username',$username,time() + 7*24*60*60);
			}
			//redirect to next page
			header("location:dashboard.php");
		} else {
			echo "<script> alert('login failed') </script>";
			$err['message'] =  "Invalid Username or password";

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
        <title>Login Form</title>   
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/nav.css">
        <link rel="stylesheet" href="css/footer.css">

        <script src="js/bootstrap.min.js"></script>
            
    </head>
    <body>
		<br>
		<br>
		<div id="login">
            <h3 class="text-center text-white pt-5">Login form</h3>
            <div class="container">
                <div id="login-row" class="row justify-content-center align-items-center">
                    <div id="login-column" class="col-md-6">
                        <div id="login-box" class="col-md-12">
                            <form name="myform"  action="<?php echo $_SERVER['PHP_SELF'] ?>"  method="post">
                                <h3 class="text-center text-info">Login</h3>
                                <div class="form-group">
                                    <label for="username" class="text-info">Username:</label><br>
                                    <input type="text" name="username" id="username" class="form-control">
                                    <span class="text-danger"><?php echo (isset($err['username']))?$err['username']:""; ?></span>
                                </div>
                                <div class="form-group">
                                    <label for="password" class="text-info">Password:</label><br>
                                    <input type="password" name="password" id="password" class="form-control">
                                    <span class="text-danger"><?php echo (isset($err['password']))?$err['password']:""; ?></span>
                                </div>
                                <div class="form-group">
                                    <label for="remember-me" class="text-info"><span>Remember me</span> <span>
                                        <input id="remember-me" name="remember" type="checkbox"></span></label><br>
                                    <input type="submit" name="submit" class="btn btn-info btn-md" value="submit" >
                                </div>
                                <div id="register-link" class="text-right">
                                    <a href="signup.php" class="text-info">Register here</a>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

<br/>
<br/>
       
<!-- Footer -->

<?php
	include('includes/footer.php');
?>
		<!-- ./Footer -->        

    </body> 
</html>