<?php
  if (!empty($_POST)) {
    print_r("Are we getting here?");
    exit(1);
    require 'dbh.inc.php';
    print_r("Are we not even getting here?);
    if (!$conn) {
        print_r("Are we here?");
        exit(1);
        printf("Connect failed: %s\n", mysqli_connect_error());
        exit();
    }
    $first = $_POST['first'];
    $last = $_POST['last'];
    $email = $_POST['email-id'];
    $password = $_POST['pass'];
    $confirmpass = $_POST['confirm_pass'];
    print_r($_POST);
    exit(1);
    if(empty($first) || empty($last) || empty($email) || empty($password)) {
      header("Location: ../register.php?error=emptyfields&uid=&email=" .$email);
      exit();
    }
    else if ($password != $confirmpass) {
      print_r($password.' '.$confirmpass);
      header("Location: ../register.php?error=passwordcheck&mail=".$email);
      exit();
    }
    else {
      $sql ="SELECT email from users WHERE email=?";
      $sql->bind_param("s", $email);
      $sql->execute();
      $resultCheck = $sql->affected_rows;
      if ($resultCheck > 0) {
        header("Location: ../register.php?error=usertaken&email=".$email);
        exit();
      }
      else {
          $sql = $conn->prepare("INSERT INTO users (first_name, last_name, email) VALUES (?, ?, ?)");
          $hashedPwd = password_hash($password, PASSWORD_DEFAULT);
          $sql->bind_param("sss", $first, $last, $email);
          $sql->execute();
          print_r($sql->affected_rows));
          print_r($first.' '.$last.' '.$email);
          header("Location: ../profile.html?signup=success");
          exit();
      }
    }
    print_r("Did we get here?");
    exit(1);
    $sql->close();
    $conn->close();
  }

 ?>
