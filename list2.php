<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</head>
<style>

#sidebar{position:relative;margin-top:-20px}
#content{position:relative;margin-left:210px}
@media screen and (max-width: 600px) {
  #content {
    position:relative;margin-left:auto;margin-right:auto;
  }
}
  #he{
      font-size: 14px;
      font-weight: 600;
      text-transform: uppercase;
      padding: 3px 7px;
      color: #fff;
      text-decoration: none;
      border-radius: 3px;
      align:center
  }
</style>
<body>


<?php 
$active ='list';
include('head.php');

?>
<div id="content" >
  <div class="content-wrapper">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-12 lg-12 sm-12">

          <h1 class="page-title">Indian Medical Laboratory Tests at Primary and Community Health Centres</h1>

        </div>

      </div>
      <hr>
     
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
        $sql= "select * from indiantests LIMIT {$offset},{$limit}";
        $result=mysqli_query($conn,$sql);
        
          if(mysqli_num_rows($result)>0)   {
            ?>
             <h3 class="table-title">Table 1: List of diagnostic tests at Primary Health Centres </h3>
       <div class="table-responsive">
      <table class="table table-bordered" style="text-align:center">
          <thead style="text-align:center">
          <th style="text-align:center">S.no</th>
          <th style="text-align:center">Test Category</th>
          <th style="text-align:center">Diagnostic Test</th>
          <th style="text-align:center">Specimen Type</th>
          <th style="text-align:center">Equipment used for test</th>
         
          </thead>
          <tbody>
            <?php
            while($row = mysqli_fetch_assoc($result)) { ?>
          <tr>
                  <td><?php echo $count++; ?></td>
                  <td><?php echo $row['Test_category']; ?></td>
                  <td><?php echo $row['Diagnostic_Test']; ?></td>
                  <td><?php echo $row['Specimen_Type']; ?></td>
                  <td><?php echo $row['Equipments_used']; ?></td>
                   
                </td>
              </tr>
            <?php } ?>
          </tbody>
      </table>
      
    </div>
    <?php } ?>
<br><br><br>
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
       
        $sql1= "select * from ind LIMIT {$offset},{$limit}";
        $result1=mysqli_query($conn,$sql1);
          
          if(mysqli_num_rows($result1)>0)   {
            ?>
             <h3 class="table-title">Table 2: List of diagnostic tests at Community Health Centres </h3>
       <div class="table-responsive">
      <table class="table table-bordered" style="text-align:center">
          <thead style="text-align:center">
          <th style="text-align:center">S.no</th>
          <th style="text-align:center">Test Category</th>
          <th style="text-align:center">Diagnostic Test</th>
          <th style="text-align:center">Specimen Type</th>
          <th style="text-align:center">Equipment used for test</th>
         
          </thead>
          <tbody>
            <?php
            while($row = mysqli_fetch_assoc($result1)) { ?>
          <tr>
                  <td><?php echo $count++; ?></td>
                  <td><?php echo $row['Test_category']; ?></td>
                  <td><?php echo $row['Diagnostic_Test']; ?></td>
                  <td><?php echo $row['Specimen_Type']; ?></td>
                  <td><?php echo $row['Equipments_used']; ?></td>
                   
                </td>
              </tr>
            <?php } ?>
          </tbody>
      </table>
      
    </div>
    <?php } ?>
<br><br><br>
