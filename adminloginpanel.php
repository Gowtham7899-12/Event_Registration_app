<?php include 'db_connect.php';
$showerror=false;
if($_SERVER['REQUEST_METHOD']=='POST')
{
    $email=$_POST['email'];
    $password=$_POST['password'];
    if($email=='admin@admin.com' && $password=='cbitexam')
    {
        // echo "login successful";
        session_start();
        $_SESSION['status']=true;
        header('location:adminpanel.php');
    }else{
        $showerror="Invalide credentials !";
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
    <link rel="stylesheet" href="admin.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">

    <title>CBIT_Samarpan</title>
  </head>
  <body>
    <?php include 'header.php';?>
    
    <div class="outercontainer">

            <div id="innercontainer" class="shadow-lg rounded">
                <h2 class="mt-4" id="title">Admin Login Panel</h2>
                <div id="adminimg"><h1 id="adminlogo"><i class="bi bi-person-circle" ></i></h1></div>
                <div  class="container" id="loginform">
                <?php
                    if($showerror)
                    {
                      echo'
                      <div class="alert alert-danger alert-dismissible fade show" role="alert">
                        <strong>Error !</strong> '.$showerror.'
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                        </button>
                      </div>';
                    }
    
                ?>

                <form action="adminloginpanel.php" method="post">
                    <div class="form-group">
                        <label for="input"><h5>Email address</h5></label>
                        <input type="email" class="form-control " id="input" name="email" aria-describedby="emailHelp" placeholder="Enter email">
                    </div>
                    <div class="form-group">
                        <label for="input1"><h5>Password</h5></label>
                        <input type="password" class="form-control" id="input1" name="password" placeholder="Password">
                    </div>
                    
                    <button type="submit" class="btn btn-warning">Submit</button>
                </form>
                </div>
            </div>
    </div>
    
    <?php include 'footer.php';?>
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>

    
  </body>
</html>