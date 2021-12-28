<?php 
    require_once "db.php"; 
    include('includes/header.php');
 ///check database connection
    if($conn->connect_errno!= 0 )
    {
        die('Database connection error' .$conn ->connect_error);
    }
  $sql = "select * from persons";
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

<script src="js/bootstrap.min.js"></script>
</head>
<body>
<br/>
<br />
<br/>
<form class="form-inline my-4 my-lg-0" style="margin-left:120px;">
                    <input class="form-control mr-sm-2" type="search" placeholder="Search" name="search" aria-label="Search">
                    <button class="btn btn-outline-success my-2 my-sm-0" name="search" type="submit">Search</button>
                </form>
<br />


<h2 style="margin-left:120px;">Details of unknown body</h2>
    <div class="container">
        <div class="row col-md-6 col-md-offset-2 custyle">
        <table class="table table-striped custab">
        <thead>
            <tr>
                <th>B/BP code</th>
                <th>Name of the Victim</th>
                <th>Gender</th>
                <th>Age</th>
                <th>Height</th>
                <th>Weight</th>
                <th>Type of accident</th>
                <th>Area of accident</th>
                <th>Description of body</th>
                <th>Information Giver</th>
            </tr>
        </thead>
        <?php foreach ($data as $key=>$persons) { ?>
      <tr>
        <td><?php echo $persons['bpcode'] ?></td>
        <td><?php echo $persons['Probablename'] ?></td>
        <td><?php echo $persons['gender']?></td>
        <td><?php echo $persons['Age'] ?></td>
        <td><?php echo $persons['height'] ?></td>
        <td><?php echo $persons['weight'] ?></td>
        <td><?php echo $persons['type'] ?></td>
        <td><?php echo $persons['area'] ?></td>
        <td><?php echo $persons['description'] ?></td>
        <td><?php echo $persons['info_giver'] ?></td>
    <?php }
     ?>
                
        </table>
        </div>
    </div>

    <br/>
    <br/>
        <?php
            include('includes/footer.php');
        ?>




<?php
if(isset($_POST["search"]))
{
    $str= $_POST["search"];
    $sth = $conn-> prepare("select * from 'persons' where probablename ='$str'");

    $sth->setFetchMode(PDO:: FETCH_OBJ);
    $sth->execute();

    if($row = $sth->fetch())
    {
       
    }
}

?>

</body>
</html>