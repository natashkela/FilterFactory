<?php
namespace FilterFactory;
use FilterFactory\Register as Register;
ini_set("display_errors","On");
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
        $register = new Register();
        return $register->RegisterUser($posted_data);
    }

    return json_encode($return_array);
