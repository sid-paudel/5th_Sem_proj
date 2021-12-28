<?php 
include('db.php');
include('includes/header.php');

if (isset($_POST['submit'])) {
    $err = [];
    

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

    $code = $_POST['code'];
    $name=$_POST['name'];
    $gender=$_POST['gender'];
    $age=$_POST['age'];
    $birthplace=$_POST['birthplace'];
    $language=$_POST['language'];
    $description=$_POST['description'];
    $occupation=$_POST['occupation'];
    $religion=$_POST['religion'];
    $info_giver=$_POST['info_giver'];
    $moreinfo=$_POST['moreinfo'];



    $query=mysqli_query($conn, "insert into tbl_miss (mpncode,name,gender,age,birthplace,language,description,occupation,religion,info_giver,others) values('$code','$name','$gender','$age','$birthplace','$language','$description','$occupation','$religion','$info_giver','$moreinfo')");

    if ($query) {
        echo "<script> alert('added successfully') </script>";
        header('location:missing_table.php');

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
    <title>Missing body Form</title>
    <link href="css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <link rel="stylesheet" href="css/footer.css">
    <script src="js/bootstrap.min.js"></script>
</head>
<body>
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
                                <input type="radio" name="gender" value="male" >Male&#9;
                                <input type="radio" name="gender" value="female">Female&#9;
                                <input type="radio" name="gender" valuue="other">Other
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
                        <button type="submit" name="submit" class="btn btn-lg btn-info">Submit</button>					
                        </div>

                    </form> 
                    </div>
        </div>
        </div>
        <br/>
        <br/>
<?php
    include('includes/footer.php');

?>
</body>
</html>