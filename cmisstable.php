<?php 
    require_once "db.php"; 
    include('includes/header.php');
 ///check database connection
    if($conn->connect_errno!= 0 )
    {
        die('Database connection error' .$conn ->connect_error);
    }
  $sql = "select * from tbl_miss";
  $result = $conn->query($sql);
  $data = [];
  while($row = $result->fetch_assoc()){
    array_push($data,$row);
    }
   ?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>List of Victims</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/footer.css">
        <link rel="stylesheet" href="css/nav.css">

<script src="js/bootstrap.min.js"></script>
</head>
<body>
<br>
<br>
<br />
<form class="form-inline my-4 my-lg-0" style="margin-left:120px;">
                    <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
                </form>
<br />
<h2 style="margin-left:120px;">Details of Missing body</h2>
    <div class="container">
        <div class="row col-md-6 col-md-offset-2 custyle">
        <table class="table table-striped custab">
        <thead>
            <tr>
                <th>MPN code</th>
                <th>Name</th>
                <th>Gender</th>
                <th>Age</th>
                <th>Birthplace</th>
                <th>Language</th>
                <th>Description</th>
                <th>Occupation</th>
                <th>Religion</th>
                <th>Information Giver</th>
                <th>More detail</th>
            </tr>
        </thead>
        <?php foreach ($data as $key=>$tbl_miss) { ?>
      <tr>
        <td><?php echo $tbl_miss['mpncode'] ?></td>
        <td><?php echo $tbl_miss['name'] ?></td>
        <td><?php echo $tbl_miss['gender']?></td>
        <td><?php echo $tbl_miss['age'] ?></td>
        <td><?php echo $tbl_miss['birthplace'] ?></td>
        <td><?php echo $tbl_miss['language'] ?></td>
        <td><?php echo $tbl_miss['description'] ?></td>
        <td><?php echo $tbl_miss['occupation'] ?></td>
        <td><?php echo $tbl_miss['religion'] ?></td>
        <td><?php echo $tbl_miss['info_giver'] ?></td>
        <td><?php echo $tbl_miss['others'] ?></td>
          </tr>
    <?php }
   mysqli_close($conn);
     ?>
                
        </table>
        </div>
        <!-- <a href="missingform.php" class="btn btn-primary btn-xs pull-right"><b>+</b> Add new Data</a> -->
    </div>

    <br/>
    <br/>
        <!--Start of the Footer-->
        <?php
            include('includes/footer.php');
        ?>


</body>
</html>