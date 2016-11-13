<?php
  include_once('include/header.php');
  include_once('include/db.php');
  if (isset($_SESSION['id'])) {
?>
<div class="container">
  <div class="row">
    <h2>These are our members:</h2>
    <ul>
      <?php
        $sql = "select first_name, email from members";
        $result = $db->query($sql);
        while($row = $result->fetchObject()){
          echo "<li>$row->first_name, <a href='mailto:$row->email'>$row->email</a></li>";
        }
      ?>
    </ul>
    <p>These are the people who have registered and have a <a href="admin.php">profile</a> in this system.</p>
  </div>
</div>
<?php
  include_once('include/footer.php');
}else {
  header('Location: login_page.php?rejected');
}
?>
