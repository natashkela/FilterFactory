<?php


class UserModel{

    function InsertUser($user_data){
        global $conn;
        $sql = $conn->prepare("INSERT INTO users (first_name, last_name, email) VALUES (?, ?, ?)");
        $sql->bind_param("sss", $first, $last, $email);
        $sql->execute();
        print_r($sql->affected_rows);
        print_r($first.' '.$last.' '.$email);

    }
}