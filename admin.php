<?php
  include_once('include/header.php');

  if(isset($_SESSION['id'])){
    $name = $_SESSION['first_name'];
    $image = $_SESSION['image'];
    $email = $_SESSION['email'];

?>

<h3>Hi <?php echo $name ?>. This is your profile admin page</h3>
<img src="images/<? echo $image ?>.jpg" alt="profile image of <?php $name ?>">
<p>Your registered email is <?php echo $email?></p>

<?php
  include_once('include/footer.php');

  }else{
    header('Location: index.php?rejected');
  }
?>
