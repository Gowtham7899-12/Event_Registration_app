<form method="post" action="<?php echo $_SERVER['REQUEST_URI']?> ">
  <div class="form-group ">
    <label for="name" class="font-weight-bold">Name</label>
    <input type="text" class="form-control  shadow-md rounded" id="name" name="name" placeholder="enter your name">
  </div>
  <div class="form-group">
    <label for="email" class="font-weight-bold">Email address</label>
    <input type="email" class="form-control shadow-md rounded" id="email" name="email" aria-describedby="emailHelp" placeholder="enter your email">
    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
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
    <label for="sec" class="font-weight-bold">Section</label>
    <input type="text" class="form-control shadow-md rounded" name="sec" id="sec" placeholder="section">
  </div>
  <div class="form-group">
    <label for="type" class="font-weight-bold">Select sport</label>
        <select class="form-control shadow-md rounded" name="type" id="type">
                <option class="text-muted">select</option>
                <option>Cricket</option>
                <option>Throw ball</option>
                <option>Tug of war</option>
                <option>Volley ball</option>
                <option>Shot put</option>
                <option>Long jump</option>
                <option>High jump</option>
                <option>Javelin</option>
        </select>
  </div>
  <div class="form-group">
    <label for="phonenumber" class="font-weight-bold">Contact no</label>
    <input type="number" class="form-control shadow-md rounded" name="phonenumber" id="phonenumber" placeholder="Ph.no">
  </div>

  
  <button type="submit" class="btn btn-warning" id="registerbtn">Submit</button>
</form>