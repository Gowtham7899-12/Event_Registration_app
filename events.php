<?php 
  include 'db_connect.php'; 
  $id=$_GET['eventid'];
  $showresult=false;
  $showerror=false;
  if($id==1)
  {
    if($_SERVER['REQUEST_METHOD']=='POST')
    {
      $name=$_POST['name'];
      $email=$_POST['email'];
      $usn=$_POST['usn'];
      $semester=$_POST['sem'];
      $branch=$_POST['branch'];
      $section=$_POST['sec'];
      $phonenumber=$_POST['phonenumber'];
      $sql="INSERT INTO `quiz` (`quiz_id`, `name`, `email`, `usn`, `semester`,`branch`, `section`, `phonenumber`, `datetime`) VALUES (NULL , '$name', '$email', '$usn', '$semester','$branch', '$section', '$phonenumber', current_timestamp());";
      $result=mysqli_query($conn,$sql);
      if(!$result)
      {
          $showerror='Unable to process your request !';
      }
      else{
        $showresult='Your responce has been submitted.';
      }
    }
  }
  if($id==2)
  {
    if($_SERVER['REQUEST_METHOD']=='POST')
    {
      $name=$_POST['name'];
      $email=$_POST['email'];
      $usn=$_POST['usn'];
      $semester=$_POST['sem'];
      $branch=$_POST['branch'];
      $section=$_POST['sec'];
      $phonenumber=$_POST['phonenumber'];
      $sql="INSERT INTO `drawing` (`drawing_id`, `name`, `email`, `usn`, `semester`,`branch`, `section`, `phonenumber`, `datetime`) VALUES (NULL , '$name', '$email', '$usn', '$semester','$branch', '$section', '$phonenumber', current_timestamp());";
      $result=mysqli_query($conn,$sql);
      if(!$result)
      {
          $showerror='Unable to process your request !';
      }
      else{
        $showresult='Your responce has been submitted.';
      }
    }
  }
  if($id==3)
  {
    if($_SERVER['REQUEST_METHOD']=='POST')
    {
      $name=$_POST['name'];
      $email=$_POST['email'];
      $usn=$_POST['usn'];
      $semester=$_POST['sem'];
      $branch=$_POST['branch'];
      $section=$_POST['sec'];
      $type=$_POST['type'];
      $phonenumber=$_POST['phonenumber'];
      $sql="INSERT INTO `singing` (`sing_id`, `name`, `email`, `usn`, `semester`,`branch`, `section`, `type`,`phonenumber`, `datetime`) VALUES (NULL , '$name', '$email', '$usn', '$semester','$branch', '$section','$type','$phonenumber', current_timestamp());";
      $result=mysqli_query($conn,$sql);
      if(!$result)
      {
          $showerror='Unable to process your request !';
      }
      else{
        $showresult='Your responce has been submitted.';
      }
    }
  }

  if($id==4)
  {
    if($_SERVER['REQUEST_METHOD']=='POST')
    {
      $name=$_POST['name'];
      $email=$_POST['email'];
      $usn=$_POST['usn'];
      $semester=$_POST['sem'];
      $branch=$_POST['branch'];
      $section=$_POST['sec'];
      $type=$_POST['type'];
      $phonenumber=$_POST['phonenumber'];
      $sql="INSERT INTO `sports` (`sport_id`, `name`, `email`, `usn`, `semester`,`branch`, `section`, `sport_name`,`phonenumber`, `datetime`) VALUES (NULL , '$name', '$email', '$usn', '$semester','$branch', '$section','$type','$phonenumber', current_timestamp());";
      $result=mysqli_query($conn,$sql);
      if(!$result)
      {
          $showerror='Unable to process your request !';
      }
      else{
        $showresult='Your responce has been submitted.';
      }
    }
  }

  if($id==5)
  {
    if($_SERVER['REQUEST_METHOD']=='POST')
    {
      $name=$_POST['name'];
      $email=$_POST['email'];
      $usn=$_POST['usn'];
      $semester=$_POST['sem'];
      $branch=$_POST['branch'];
      $section=$_POST['sec'];
      $type=$_POST['type'];
      $phonenumber=$_POST['phonenumber'];
      $sql="INSERT INTO `dancing` (`dance_id`, `name`, `email`, `usn`, `semester`,`branch`, `section`, `type`,`phonenumber`, `datetime`) VALUES (NULL , '$name', '$email', '$usn', '$semester','$branch', '$section','$type','$phonenumber', current_timestamp());";
      $result=mysqli_query($conn,$sql);
      if(!$result)
      {
          $showerror='Unable to process your request !';
      }
      else{
        $showresult='Your responce has been submitted.';
      }
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
    <link rel="stylesheet" href="index.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">

    <title>CBIT_Samarpan</title>
  </head>
  <body>
    <?php include 'header.php';?>
    <?php
      $sql="SELECT * FROM `events` WHERE `event_id`=$id";
      $result=mysqli_query($conn,$sql);
      if(!$result)
      {
        echo mysqli_error($result);
      }else{
        while($row=mysqli_fetch_assoc($result))
        {
          echo'<div class="  jumbotron jumbotron-fluid my-3 mx-4 shadow-sm rounded" id="jumbotitle">
          <div class="container ml-5">
            <h1 class="font-weight-normal" >'.$row['event_title'].'</h1>
            <h6 class="d-inline font-weight-bold">Co-ordinated by: </h6>'.$row['event_coordinator'].'
            <p class="lead">This is a modified jumbotron that occupies the entire horizontal space of its parent.</p>
          </div>
        </div>';
        }
      }
    
    ?>
    <div class="  jumbotron jumbotron-fluid my-3 mx-4 shadow-sm rounded " id="form">

      <div class="container" id="formdetails">
          <h1>Register below :</h1>
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
            if($showresult)
            {
              echo '
              <div class="alert alert-warning alert-dismissible fade show" role="alert">
                <strong>Success !</strong> '.$showresult.'
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
            </div>';
            }
            if($id== 1 || $id==2 )
            {
              include 'quiz_drawing_form.php';
            }
            elseif($id == 3 || $id==5 )
            {
              include 'singing_dancing_form.php';
            }
            elseif($id == 4 )
            {
              include 'sportsform.php';
            }
            else{
              echo "error in loading the form ...... ";
            }
          ?>

        </div>

    </div>



    <?php include 'footer.php';?>
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>

    
  </body>
</html>