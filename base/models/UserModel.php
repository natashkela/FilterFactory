<?php


class UserModel{

    function InsertUser($user_data){
        global $conn;
        if(!$conn){
            print_r("Connection Error sorry");
        }
        $sql = $conn->prepare("SELECT * FROM users WHERE email = ?");
        $sql->bind_param("s",$user_data['email-id']);
        $sql->execute();
        $result = $sql->get_result();
        $return_data = array();
        if($result->num_rows == 0){
            $sql = $conn->prepare("INSERT INTO users (first_name, last_name, email) VALUES (?, ?,? )");
            $sql->bind_param("sss", $user_data['first'], $user_data['last'], $user_data['email-id']);
            $sql->execute();
            return true;
        }
        else{
            return false;
        }
    }
}