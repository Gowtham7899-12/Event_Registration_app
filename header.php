<?php include 'db_connect.php'; ?>
<nav class="navbar navbar-expand-lg navbar-light bg-warning " id="header">
  <a class="navbar-brand" href="index.php"><h3>Samarpan</h3></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavDropdown">
    <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link " href="index.php"><h5><i class="bi bi-house"></i> Home</h5><span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-expanded="false">
          <h5 style="display: inline;"><i class="bi bi-calendar-event"></i> Events</h5>
        </a>
        <div class="dropdown-menu bg-light">
          <!-- <a class="dropdown-item" href="#">Action</a>
          <a class="dropdown-item" href="#">Another action</a>
          <a class="dropdown-item" href="#">Something else here</a> -->
          <?php 
              $sql="SELECT * FROM `events`;";
              $result=mysqli_query($conn,$sql);
              if(!$result)
              {
                echo mysqli_error($result);
              }else{
                while($row=mysqli_fetch_assoc($result))
                {
                  echo '<a class="dropdown-item " href="events.php?eventid='.$row['event_id'].'"><h5>'.$row['event_title'].'</h5></a>';
                }
              }
              
              ?>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="winner.php"><h5><i class="bi bi-trophy"></i> Winners</h5></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="adminloginpanel.php"><h5><i class="bi bi-person-badge"></i> Admin </h5></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#"><h5></h5></a>
      </li>
      
    </ul>
  </div>
</nav>