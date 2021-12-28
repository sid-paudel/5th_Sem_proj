<?php 
include('db.php');
include('includes/header.php');

if (isset($_POST['submit'])) {
    $err = [];
    

    if (isset($_POST['code']) && !empty($_POST['code'])) {
        $code = $_POST['code'];
    } else {
        $err['code'] = "*Enter B/Bp code";
    }

    if (isset($_POST['name']) && !empty($_POST['name'])) {
        $name = $_POST['name'];
    } else {
        $err['name'] = "*Enter name";
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

    if (isset($_POST['height']) && !empty($_POST['height'])) {
        $height = $_POST['height'];
    } else {
        $err['height'] = "*Enter height";
    }

    if (isset($_POST['weight']) && !empty($_POST['weight'])) {
        $weight = $_POST['weight'];
    } else {
        $err['weight'] = "*Enter weight";
    }

    if (isset($_POST['type']) && !empty($_POST['type'])) {
        $type = $_POST['type'];
    } else {
        $err['type'] = "*Enter type of accident";
    }

    if (isset($_POST['area']) && !empty($_POST['area'])) {
        $area = $_POST['area'];
    } else {
        $err['area'] = "*Enter area";
    }

    if (isset($_POST['description']) && !empty($_POST['description'])) {
        $description = $_POST['description'];
    } else {
        $err['description'] = "*Enter description";
    }

    if (isset($_POST['info_giver']) && !empty($_POST['info_giver'])) {
        $info_giver = $_POST['info_giver'];
    } else {
        $err['info_giver'] = "*Enter info_giver";
    }
    if (count($err) == 0) {
     $code = $_POST['code'];
     $name=$_POST['name'];
     $gender=$_POST['gender'];
     $age=$_POST['age'];
     $height=$_POST['height'];
     $weight=$_POST['weight'];
     $type=$_POST['type'];
     $area=$_POST['area'];
     $description=$_POST['description'];
     $info_giver=$_POST['info_giver'];



     $query=mysqli_query($conn, "insert into persons (bpcode,probablename,gender,age,height,weight,type,area,description,info_giver) values('$code','$name','$gender','$age','$height','$weight','$type','$area','$description','$info_giver')");

     if ($query) {
         echo "<script> alert('added successfully') </script>";
         header('location:table.php');

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
    <title>Registration Form</title>
    <link href="css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <link rel="stylesheet" href="css/nav.css">
    <link rel="stylesheet" href="css/footer.css">
    <script src="js/bootstrap.min.js"></script>
    
</head>
<body>

    

<br>
<br>



    <div class="container">
        <h1 class="well">Registration Of Dead Body</h1>
        <br/>
        <div class="col-lg-12 well">
        <div class="row">
                    <form name="myform" action="" method="POST">
                        <div class="col-sm-12">
                        <div class="row">
                                <div class="col-sm-4 form-group">
                                    <input type="hidden" name="id" >
                                </div>
                        </div>        
                            <div class="row">
                                <div class="col-sm-12 form-group">
                                    <label>B/BP Code</label>
                                    <input type="number" name="code"  class="form-control">
                                    <span class="text-danger"> <?php echo (isset($err['code'])?$err['code']:"") ?></span>
                                </div>
                            </div>	
                            <div class="row">
                                <div class="col-sm-12 form-group">
                                    <label>Probable Name</label>
                                    <input type="text" name="name" placeholder="Enter  Name Here.." class="form-control">
                                    <span class="text-danger"> <?php echo (isset($err['name'])?$err['name']:"") ?></span>
                                </div>
                            </div>					
                            <div class="form-group">
                                <label>Gender&nbsp;:&nbsp;</label>
                                <input type="radio" name="gender" value="male" >Male&#9;
                                <input type="radio" name="gender" value="female">Female&#9;
                                <input type="radio" name="gender" value="unrecognized">Unrecognized
                                <span class="text-danger"> <?php echo (isset($err['gender'])?$err['gender']:"") ?></span>

                                

                            </div>	
                            <div class="row">
                                <div class="col-sm-4 form-group">
                                    <label>Age</label>
                                    <input type="text" name="age" placeholder="Enter Age Here.." class="form-control">
                                    <span class="text-danger"> <?php echo (isset($err['age'])?$err['age']:"") ?></span>

                                </div>	
                                <div class="col-sm-4 form-group">
                                    <label>height</label>
                                    <input type="text" name="height" placeholder="Enter height Here.." class="form-control">
                                    <span class="text-danger"> <?php echo (isset($err['height'])?$err['height']:"") ?></span>

                                </div>	
                                <div class="col-sm-4 form-group">
                                    <label>Weight</label>
                                    <input type="text" name="weight" placeholder="Enter Weight Here.." class="form-control">
                                    <span class="text-danger"> <?php echo (isset($err['weight'])?$err['weight']:"") ?></span>

                                </div>		
                            </div>
                            <div class="row">
                                <div class="col-sm-6 form-group">
                                    <label>Type of accident</label>
                                    <input type="text" name="type" placeholder="Enter Type of accident Here.." class="form-control">
                                    <span class="text-danger"> <?php echo (isset($err['type'])?$err['type']:"") ?></span>

                                </div>		
                                <div class="col-sm-6 form-group">
                                    <label>Area</label>
                                    <input type="text" name="area" placeholder="Enter Your area Here.." class="form-control">
                                    <span class="text-danger"> <?php echo (isset($err['area'])?$err['area']:"") ?></span>

                                </div>	
                            </div>						
                        <div class="form-group">
                            <label>Description of body</label>
                            <textarea type="text" name="description" class="form-control"></textarea>
                            <span class="text-danger"> <?php echo (isset($err['description'])?$err['description']:"") ?></span>

                        </div>		
                        <div class="row">
                            <div class="col-sm-12 form-group">
                                <label>Name Of Information Giver</label>
                                <input type="text" name="info_giver" placeholder="Enter  Name Here.." class="form-control">
                                <span class="text-danger"> <?php echo (isset($err['info_giver'])?$err['info_giver']:"") ?></span>

                            </div>
                        </div>
                        <button type="submit" name="submit" class="btn btn-lg btn-info">Submit</button>					
                        </div>
                    </form> 
                    </div>
        </div>
        </div>
        <br/>
        <br/>
        <!--Start of the Footer-->
      <?php
        include('includes/footer.php');
      ?>

</body>
</html>