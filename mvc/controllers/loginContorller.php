<?php
include "../models/loginModel.php";


class LoginController
{
    public static function CheckUser($userName, $userPassword)
    {
        $result = LoginModel::getUser("", "");
        if(!$result) { response("user_name_error"); }
        if ($result && password_hash($userPassword, $result['userpassword'])) {
        }
    }

    public static function LogUp($userName, $userPassword)
    {}
}