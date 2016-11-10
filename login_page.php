<?php
  include_once('include/header.php');
?>

<?php
  if (isset($_GET['rejected'])) {
    echo "<h2>Wrong name or password</h2>";
  }else{
    echo "<h2>Please login</h2>";
  }
?>

  <h3>Please, log in</h3>
  <form action="include/login.php" method="post" id="loginForm">
    <label>First name</label>
    <input type="text" name="first_name">
    <br />
    <label>Last name</label>
    <input type="text" name="last_name">
    <br />
    <label>Password</label>
    <input type="password" name="password">
    <input type="submit" name="button">
  </form>
<?php
  include_once('include/footer.php');
?>
