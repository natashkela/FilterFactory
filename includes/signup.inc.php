<?php
  if (isset($_POST['signup-submit'])) {
    require 'dbh.inc.php';

    $first = $_POST['first'];
    $last = $_POST['last'];
    $email = $_POST['email-id'];
    $password = $_POST['pass'];
    $confirmpass = $_POST['confirm_pass'];

    if(empty($first) || empty($last) || empty($email) || empty($password)) {
      header("Location: ../register.php?error=emptyfields&uid=&email=" .$email);
      exit();
    }
    else if ($password !== $confirmpass) {
      header("Location: ../register.php?error=passwordcheck&mail=".$email);
      exit();
    }
    else {
      $sql ="SELECT email from users WHERE email=?";
      $stmt = mysqli_stmt_init($conn);
      if (!mysqli_stmt_prepare($stmt, $sql)) {
        header("Location: ../register.php?error=sqlerror");
        exit();
      }
      else {
        mysqli_stmt_bind_param($stmt, "s", $username);
        mysqli_stmt_execute($stmt);
        mysqli_stmt_store_result($stmt);
        $resultCheck = mysqli_stmt_num_rows($stmt);
        if ($resultCheck > 0) {
          header("Location: ../register.php?error=usertaken&email=".$email);
          exit();
        }
        else {
          $sql = "INSERT INTO users (first_name, last_name, email, pwd)
            VALUES (?, ?, ?, ?, ? )";
          $stmt = mysqli_stmt_init($conn);
          if (!mysqli_stmt_prepare($stmt, $sql)) {
            header("Location: ../register.php?error=sqlerror");
            exit();
          }
          else {
            $hashedPwd = password_hash($password, PASSWORD_DEFAULT);

            mysqli_stmt_bind_param($stmt, "sssss", $first, $last, $email, $hashedPwd);
            mysqli_stmt_execute($stmt);
            header("Location: ../profile.html?signup=success");
            exit();
          }
        }
      }
    }
    mysqli_stmt_close($stmt);
    mysqli_close($conn);
  }

 ?>
