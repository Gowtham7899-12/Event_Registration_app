<?php include 'db_connect.php'; ?>
<!doctype html>

<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="index.css">
    <link rel="stylesheet" href="//cdn.datatables.net/2.0.7/css/dataTables.dataTables.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">

    <title>CBIT_Samarpan</title>
  </head>
  <body>
    <?php include 'header.php';?>
    <h1 class="my-3 text-center text-weight-bold ">Winners</h1>
    <div class="container  col-md-10 my-5 shadow p-3 rounded bg-white" >
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
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>
    <script src="//cdn.datatables.net/2.0.7/js/dataTables.min.js"></script>
    <script>

    // Data table scroll horizontally
    // type data table in chrome 
    // scroll below and select references 
    // Under referencess select options 
    // Later on select scroller
    // Under scroll select boundary scale copy the code and paste it 
     let table =new DataTable('#myTable', {
    scrollY: true,
    scroller: {
        boundaryScale: 0.75 
    }
});
    </script>
    
  </body>
</html>