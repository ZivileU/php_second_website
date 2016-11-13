<?php
  session_start();
  include_once('db.php');

  if(isset($_POST['email'])){
    require_once('db.php');
    $email = $_POST['email'];
    $pwd = $_POST['password'];
    $sql = "select * from members where email = '$email' and password = '$pwd'";
    $result = $db->query($sql);
    $row = $result->fetchObject();

    if($row){
      $_SESSION['id'] = $row->id;
      $_SESSION['name'] = $row->first_name;
      $_SESSION['email'] = $row->email;
      $_SESSION['image'] = $row->image;
      $name = $_SESSION['name'];

      if(isset($_COOKIE[$name])){
        setcookie($name, $_COOKIE[$name] + 1, time()+60*60*24*30, "/");
      }else{
        setcookie($name, 1, time()+60*60*24*30, "/");
      }
      header('Location: ../admin.php');

    }else{
      header('Location: ../login_page.php?rejected');
    }
  }else{
    header('Location: ../index.php');
  }

?>
