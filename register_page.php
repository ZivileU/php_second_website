<?php
  include_once('include/header.php');
?>

  <h2>Register</h2>
  <form action="include/register.php" method="post" enctype="multipart/form-data" id="registerForm">
    <div class="form-group">
      <label for="exampleInputEmail1">First name</label>
      <input type="text" class="form-control" id="exampleInputEmail1" placeholder="First name" name="first_name" required>
    </div>
    <div class="form-group">
      <label for="exampleInputEmail1">Last name</label>
      <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Last name" name="last_name" required>
    </div>
    <div class="form-group">
      <label for="exampleInputEmail1">Email</label>
      <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Email" name="email" required>
    </div>
    <div class="form-group">
      <label for="exampleInputPassword1">Password</label>
      <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password" name="password" required>
    </div>
    <div class="form-group">
      <label for="exampleInputFile">Profile image (optional)</label>
      <input type="file" id="exampleInputFile" name="myimage">
      <p class="help-block">Example block-level help text here.</p>
    </div>
    <div class="checkbox">
      <label>
        <input type="checkbox"> Check me out
      </label>
    </div>
    <button type="submit" class="btn btn-default">Submit</button>
  </form>

<?php
  include_once('include/footer.php');
?>


