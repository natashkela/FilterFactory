<?php
  if (isset($_POST['login-submit'])) {
    require 'dbh.inc.php';

    $username = $_POST['username'];
    $password = $_POST['pass'];

    if(empty($username) || empty($password)) {
      header("Location: ../index.html?error=emptyfields");
      exit();
    }
    else {
      $sql = "SELECT * FROM user WHERE email=?;";
      $stmt = mysqli_stmt_init($conn);
      if (!mysqli_stmt_prepare($stmt, $sql)) {
        header("Location: ../index.html?error=sqlerror");
        exit();
      }
      else {
        mysqli_stmt_bind_param($stmt, "ss", $email, $email);
        mysqli_stmt_execute($stmt);
        $result = mysqli_stmt_get_result($stmt);
        if ($row = mysqli_fetch_assoc($result)) {
          $pwdCheck = password_verify($pass, $row['pwd']);
          if($pwdCheck == false) {
            header("Location: ../index.html?error=wrongpwd");
            exit();
          }
          else if($pwdCheck == false){
            session_start();
            // $_SESSION['userId'] = $row['userid'];
            // $_SESSION['username'] = $row['username'];

            header("Location: ../index.html?login=success");
          }
        }
        else {
          header("Location: ../index.html?error=nouser");
          exit();
        }
      }
    }
