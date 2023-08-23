<html>

<head>


<style>

.header {
  overflow:hidden;
  background-color: #333;
  top: 0;
  width:100%;
  padding: 10px 5px;
  color:#FF0404  ;
}

/* Style the header links */
.header a {
  float: left;
  color: white;
  text-align: center;
  padding: 12px;
  text-decoration: none;
  font-size: 18px;
  line-height: 25px;
  border-radius: 4px;
  font-weight:bold;
}

/* Style the logo link (notice that we set the same value of line-height and font-size to prevent the header to increase when the font gets bigger */
.header a.logo {
  font-size: 25px;
  font-weight: bold;
  color:#FF0404  ;
}

/* Change the background color on mouse-over */
.header a:hover {
  background-color: #ddd;
  color: black;
}

.center {
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
    height: 150px;
  }

  .custom-button {
    background-color: #f44336;
    color: white;
    padding: 20px;
    border: none;
    border-radius: 4px;
    cursor: pointer;
    font-size: 24px;
  }


/* Float the link section to the right */
.header-right {
  float: right;
}

/* Add media queries for responsiveness - when the screen is 500px wide or less, stack the links on top of each other */
@media screen and (max-width: 500px) {
  .header a {
    float: none;
    display: block;
    text-align: left;
  }
  .header-right {
    float: none;
  }
}
/* Style the active/current link*/
a.act{
background: linear-gradient(to right, #fd746c 0%, #ff9068 100%);
color: white;
border-radius:30px;
}
a.logo2{
  background-color: #333;
}
</style>
</head>
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

          <h1 class="page-title">Indian Medical Laboratory Tests </h1>

        </div>

      </div>
     
      <div class="center">
  <a href="list1.php">
    <button class="custom-button">Indian Medical Laboratory Tests at Villages<br>and Subcentres</button>
  </a>
</div>
<div class="center">
  <a href="list2.php">
    <button class="custom-button">Indian Medical Laboratory Tests at <br> Primary and Community Health Centres</button>
  </a>
</div>
<div class="center">
  <a href="list3.php">
    <button class="custom-button">Indian Medical Laboratory Tests at <br> Sub-District and District Health Centres</button>
  </a>
</div>
</body>
</html>
