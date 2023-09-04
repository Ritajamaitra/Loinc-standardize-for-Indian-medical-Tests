<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<style>
</style>
</head>
<body>
<div class="header">
<?php
$active="home";
include('head.php'); ?>

</div>
<?php include'ticker.php'; ?>
 <body style="background-color:rgb(210,180,140);">
<div id="page-container" style="margin-top:50px; position: relative;min-height: 84vh;   ">
    <div class="container">
    <div id="content-wrap"style="padding-bottom:75px;">
  <!--<div id="demo" class="carousel slide" data-ride="carousel">-->

    <!-- Indicators 
    <ul class="carousel-indicators">
      <li data-target="#demo" data-slide-to="0" class="active"></li>
      <li data-target="#demo" data-slide-to="1"></li>
    </ul>

   

    </div>-->

    <!-- Left and right controls 
    <a class="carousel-control-prev" href="#demo" data-slide="prev">
      <span class="carousel-control-prev-icon"></span>
    </a>
    <a class="carousel-control-next" href="#demo" data-slide="next">
      <span class="carousel-control-next-icon"></span>
    </a>
  </div>-->
<br>
        <h1 style="text-align:center;font-size:45px;">Help LOINC Standardize the Names of Indian Lab Tests </h1>
<br>
        
                        
                           </div>
            </div>
            

        <h2></h2>
        <?php
        include 'conn.php';

        $limit = 500;
        if(isset($_GET['page'])){
          $page = $_GET['page'];
        }else{
          $page = 1;
        }
        $offset = ($page - 1) * $limit;
        $count=$offset+1;
        $sql= "select * from tests LIMIT {$offset},{$limit}";
        $result=mysqli_query($conn,$sql);
        
          if(mysqli_num_rows($result)>0)   {
            ?>
             <h3 class="table-title">Table : LOINC VALUES </h3>
       <div class="table-responsive">
      <table class="table table-bordered" style="text-align:center">
          <thead style="text-align:center">
          <th style="text-align:center">S.no</th>
          <th style="text-align:center">Test ID</th>
          <th style="text-align:center">Test Order Name</th>
          <th style="text-align:center">Order LOINC CODE</th>
          <th style="text-align:center">LOINC Atrributes</th>
          <th style="text-align:center">Method Name</th>
         
          </thead>
          <tbody>
            <?php
            while($row = mysqli_fetch_assoc($result)) { ?>
          <tr>
                  <td><?php echo $count++; ?></td>
                  <td><?php echo $row['Test_id']; ?></td>
                  <td><?php echo $row['Order_name']; ?></td>
                  <td><?php echo $row['Loinc_code']; ?></td>
                  <td><?php echo $row['Loinc_attribute']; ?></td>
                  <td><?php echo $row['method_name']; ?></td>
                   
                </td>



              </tr>
            <?php } ?>
          </tbody>
      </table>
      
      
    </div>
    <?php } ?>
    <br><br><br>

  <div class="footer">
<?php
$active="home";
include('footer.php'); ?>

</div>
</body>

</html>
