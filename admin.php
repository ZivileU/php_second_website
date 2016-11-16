<?php
include_once('include/header.php');

if(isset($_SESSION['id'])){
  $id = $_SESSION['id'];
  $name = $_SESSION['name'];
  $image = $_SESSION['image'];
  $email = $_SESSION['email'];
  $num_visits = $_COOKIE[$name];
?>

<div class="container">
  <div class="row">
    <h3>Hi <?php echo $name ?>. This is your profile admin page</h3>
    <img src="images/<? echo $image ?>" alt="profile image of <?php $name ?>">
    <p>Your registered email is <?php echo $email?></p>
  </div>
</div>

<?php
    include_once('include/footer.php');
  }else{
    header('Location: index.php?rejected');
  }
?>
