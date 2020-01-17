<?php

class UserController
{
    /**
     * Function that will call model to
     * register the function
     * @param array $user_data
     * @return array $return
     */
    function RegisterUser($user_data)
    {
        $errors = array();
        if(!isset($user_data['first'])){
            $errors[] = array('missing_field'=>'first','message'=>'First name is missing');
        }
        if(!isset($user_data['last'])){
            $errors[] = array('missing_field'=>'first','message'=>'Last name is missing');
        }
        if(!isset($user_data['email-id'])){
            $errors[] = array('missing_field'=>'email-id','message'=>'Email is missing');
        }
        $return = array();
        if(empty($errors)){
            $user = new UserModel();
            $return = $user->InsertUser($user_data);
            $return['status'] = $return['data'] ? 1 : 0;
            if($return['status'] == 0){
                $return['errors'] = array('error_type'=>'user_exists','message'=>'User Already Exists');
                $return['status'] = 0;
                $return['data']=array();
            }
        }
        else{
            $return['errors'] = $errors;
            $return['status'] = 0;
            $return['data']=array();
        }
        return $return;
    }

}