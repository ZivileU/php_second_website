<?php
  session_start();
  include_once('include/db.php');

  if(isset($_POST['first_name'])){
    $name = $_POST['first_name'];
    $pwd = $_POST['password'];
    $incpwd = sha1($pwd);
    require_once('db.php');
    $sql = "select * from members where first_name = '$name' and password = '$pwd'";
    $result = $db->query($sql);
    $row = $result->fetchObject();
    if($row){
      $_SESSION['id'] = $row->id;
      $_SESSION['first_name'] = $row->first_name;
      $_SESSION['email'] = $row->email;
      $_SESSION['image'] = $row->image;
      header('Location: ../admin.php');
    }else{
      header('Location: ../login_page.php?rejected');
    }
  }else{
    header('Location: ../index.php');
  }

?>
