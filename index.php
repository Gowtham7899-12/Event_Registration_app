<?php include 'db_connect.php'; ?>
<!doctype html>

<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="index.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">

    <title>CBIT_Samarpan</title>
  </head>
  <body>
    <?php include 'header.php';?>
    <div class="container-fluid mt-2 " id="college">
        <div id="img"><img src="img/cbit _logo.jpeg" alt="error in loading img....!" srcset=""></div>
        <div id="collegedetails">
            <h2><b class="text-uppercase">C Byregowda Institute Of Technology, Kolar </b></h2>
            <p>
                <h5>An ISO 9001 2015 Certified Institute</h5>
                <h5><b>Department of Computer Science and Engineering</b></h5>
                <h5>Srinivaspura Road, Kolar – 563101 </h5>
                <h5>2023-2024</h5>
            
            </p>

        </div>
    </div>
<div class="container-fluid shadow-lg bg-white rounded" id="carousel">
    <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
          <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
          <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
          <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="img/car1.jpeg" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
              <h5>First slide label</h5>
              <p>Some representative placeholder content for the first slide.</p>
            </div>
          </div>
          <div class="carousel-item">
            <img src="img/car2.jpg" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
              <h5>Second slide label</h5>
              <p>Some representative placeholder content for the second slide.</p>
            </div>
          </div>
          <div class="carousel-item">
            <img src="img/car3.jpg" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
              <h5>Third slide label</h5>
              <p>Some representative placeholder content for the third slide.</p>
            </div>
          </div>
        </div>
        <button class="carousel-control-prev" type="button" data-target="#carouselExampleCaptions" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-target="#carouselExampleCaptions" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </button>
      </div>
</div>
<h2 class="text-center my-4">Samarpan Events</h2>

<div class="container" id="cards">
  <?php 
  $sql="SELECT * FROM `events`;";
  $result=mysqli_query($conn,$sql);
  if(!$result)
  {
    echo mysqli_error($result);
  }else{
    while($row=mysqli_fetch_assoc($result))
    {
      echo '<div class="card m-3 shadow-lg bg-white rounded" style="width: 20rem;">
      <img class="card-img-top" src="img/card'.$row['event_id'].'.png" alt="Card image cap">
      <div class="card-body">
        <h4 class="card-title font-weight-bold">'.$row['event_title'].'</h4>
       <h6 class="d-inline font-weight-bold">Co-ordinated by: </h6>'.$row['event_coordinator'].'
        <a href="events.php?eventid='.$row['event_id'].'" class="btn btn-warning mt-3"  >Register</a>
      </div>
    </div>';
    }
  }
  
  ?>

</div>


    <?php include 'footer.php';?>
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>

    
  </body>
</html>