<?php
require('../base/controller/UserController.php');
require('../base/models/UserModel.php');
require_once('../base/models/dbh.inc.php');
    $posted_data = $_POST;
    $return_array = array();
    $request_name = $posted_data['request_name'];
    unset($posted_data['request_name']);
    if($request_name == 'register_user'){
        $return_array = register_user();
    }

    /**
     * Register user will send paramters to the controller
     * that will make sure data gets inserted if need be
     */
    function register_user(){
        global $posted_data, $return_array;
        $register = new UserController();
        return $register->RegisterUser($posted_data);
    }
    echo json_encode($return_array);


