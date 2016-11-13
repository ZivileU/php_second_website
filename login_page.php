<?php
  include_once('include/header.php');
?>

<?php
  if (isset($_GET['rejected'])) {
    echo "<h2>Wrong name or password</h2>";
  }else if (isset($_GET['registered'])) {
    echo "<h2>You have registered successfuly! Please, login now...</h2>";
  }else {
    echo "<h2>Log in</h2>";
  }
?>

<form class="form-horizontal" action="include/login.php" method="post" id="loginForm">
  <div class="form-group">
    <label for="inputEmail3" class="col-sm-2 control-label">Email</label>
    <div class="col-sm-10">
      <input type="email" class="form-control" id="inputEmail3" placeholder="Email" name="email">
    </div>
  </div>
  <div class="form-group">
    <label for="inputPassword3" class="col-sm-2 control-label">Password</label>
    <div class="col-sm-10">
      <input type="password" class="form-control" id="inputPassword3" placeholder="Password" name="password">
    </div>
  </div>
  <div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
      <div class="checkbox">
        <label>
          <input type="checkbox"> Remember me
        </label>
      </div>
    </div>
  </div>
  <div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
      <button type="submit" class="btn btn-default" name="button">Log in</button>
    </div>
  </div>
</form>


<?php
  include_once('include/footer.php');
?>

