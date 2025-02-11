<?php
    include "db_connect.php";
    $showerror=false;
    $showalert=false;
    session_start();

    if(!isset($_SESSION['status']))
    {
        header('location:index.php');
    }

    if($_SERVER['REQUEST_METHOD']=='POST')
    {
      $name=$_POST['name'];
      $usn=$_POST['usn'];
      $semester=$_POST['sem'];
      $branch=$_POST['branch'];
      $event=$_POST['event'];
      $position=$_POST['position'];
      $sql="INSERT INTO `winners` (`winner_id`, `name`, `usn`, `semester`, `branch`, `event`, `position`, `datetime`) VALUES (NULL, '$name', '$usn', '$semester', '$branch', '$event', '$position', current_timestamp());";
      $result=mysqli_query($conn,$sql);
      if($result){
        $showalert='winner added successfully.';
      }
      else{
        $showerror='Something went wrong. Uable to add the record ';
      }
    }

?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="adminpanel.css">
    
    <link rel="stylesheet" href="//cdn.datatables.net/2.0.7/css/dataTables.dataTables.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <title>CBIT_Samarpan</title>
  </head>
  <body id="body">
        <?php 

        echo '
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <div class="container-fluid " id="navcontainer">
                <h3 class="text-light"><i class="bi bi-person-circle"></i> Admin Panel</h3>
                
                <div  id="logout" >
                    <a class="text-dark" href="logout.php"><button class="btn btn-light ">Logout</button></a>
                </div>
            </div>
 
      </nav>
        ';
        ?>
        <h1 class="my-3 text-center text-weight-bold ">Add Winners</h1>
        <div class="container  col-md-6  my-4 shadow-lg rounded" id="oform">
          <div id="iform" class="col-md-8 my-5 ">
            <?php 
            if($showerror)
            {
              echo '
              <div class="alert alert-danger alert-dismissible fade show" role="alert">
                <strong>Error !</strong> '.$showerror.'
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
            </div>';
            }
            if($showalert)
            {
              echo '
              <div class="alert alert-warning alert-dismissible fade show" role="alert">
                <strong>Success!</strong> '.$showalert.'
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
            </div>';
            }
            
            ?>

            <form  method="post" action="<?php echo $_SERVER['REQUEST_URI']?> ">
                <div class="form-group ">
                  <label for="name" class="font-weight-bold">Name</label>
                  <input type="text" class="form-control  shadow-md rounded" id="name" name="name" placeholder="enter winner name">
                </div>
                
                <div class="form-group">
                  <label for="usn" class="font-weight-bold">USN</label>
                  <input type="text number" class="form-control shadow-md rounded" id="usn" name="usn" placeholder="USN">
                </div>
                <div class="form-group">
                  <label for="sem" class="font-weight-bold">Semester</label>
                  <input type="number" class="form-control shadow-md rounded" name="sem" id="sem" placeholder="In numbers">
                </div>
                <div class="form-group">
                  <label for="branch" class="font-weight-bold">Branch</label>
                      <select class="form-control shadow-md rounded" name="branch" id="branch">
                              <option class="text-muted">select</option>
                              <option>AIML</option>
                              <option>CIVIL</option>
                              <option>CSE</option>
                              <option>EC</option>
                      </select>
                </div>
                <div class="form-group">
                  <label for="event" class="font-weight-bold">Event</label>
                      <select class="form-control shadow-md rounded" name="event" id="event">
                      <option class="text-muted">select</option>
                          <?php 
                              $sql="SELECT * FROM `events`;";
                              $result=mysqli_query($conn,$sql);
                              if(!$result)
                              {
                                echo mysqli_error($result);
                              }else{
                                while($row=mysqli_fetch_assoc($result))
                                {
                                  echo '<option >'.$row['event_title'].'</option>';
                                }
                              }
                              
                          ?>
                          
                      </select>
                </div>
                <div class="form-group">
                  <label for="position" class="font-weight-bold">Position</label>
                      <select class="form-control shadow-md rounded" name="position" id="position">
                              <option class="text-muted">select</option>
                              <option>1st</option>
                              <option>2nd</option>
                              <option>3rd</option>
                      </select>
                </div>
    
                <button type="submit" class="btn btn-warning" id="registerbtn">Submit</button>
              </form>
          </div>

        </div>
    <h1 class="my-3 text-center text-weight-bold ">Winners</h1>
    <div class="container col-md-10 my-5 shadow p-3 rounded bg-white" id="winners">
    <table class="table table-striped" id="myTable">
      <thead class="thead-dark">
        <tr>
          <th scope="col">Sno</th>
          <th scope="col">Name</th>
          <th scope="col">USN</th>
          <th scope="col">Semester</th>
          <th scope="col">Branch</th>
          <th scope="col">Event</th>
          <th scope="col">Position</th>
        </tr>
      </thead>
      <tbody>
        <?php 
            $sql="SELECT * FROM `winners`;";
            $result=mysqli_query($conn,$sql);
            if(!$result)
            {
              echo mysqli_error($result);
            }else{
              $sno=0;
              while($row=mysqli_fetch_assoc($result))
              {
                  $sno+=1;
                  echo '
                      <tr>
                        <th scope="row">'.$sno.'</th>
                        <td>'.$row['name'].'</td>
                        <td>'.$row['usn'].'</td>
                        <td>'.$row['semester'].'</td>
                        <td>'.$row['branch'].'</td>
                        <td>'.$row['event'].'</td>
                        <td>'.$row['position'].'</td>
                    </tr>';
              }
            }                       
        ?>
        
      </tbody>
</table>
    </div>

    <?php include 'footer.php';?>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
   
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.3/dist/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <script src="//cdn.datatables.net/2.0.7/js/dataTables.min.js"></script>
    <script>
      let table = new DataTable('#myTable',{
                                            scrollY: true,
                                            scroller: {
                                                          boundaryScale: 0.75
                                                      }
                                          });
    </script>
  </body>
</html>