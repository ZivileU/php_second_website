<?php
  session_start();
  include_once('db.php');

  if(isset($_POST['first_name'])){
    require_once('db.php');
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $email = $_POST['email'];
    $pwd = $_POST['password'];

    if($_FILES['myimage']['name']!=""){
      $image = $_FILES['myimage']['name'];
      $path="../images/".$image;
      move_uploaded_file($_FILES['myimage']['tmp_name'], $path);
    }else{
      $name = "dummy.jpg";
    }

    $sql = "INSERT INTO members
    (first_name, last_name, email, image, password, reg_date)
    VALUES
    ('$first_name','$last_name', '$email', '$image', '$pwd', NOW())";

    $result = $db->query($sql);

    if($result){
      header('Location: ../login_page.php?registered');
    }else{
      header('Location: ../register_page.php?fail');
    }
  }else{
    header('Location: ../index.php');
  }

?>
