<?php
class LoginModel
{
    public static function getUser($userName, $userPassword)
    {
        $query = "select * from users where username=?";
        $sth = DataBase::connect()->prepare($query);
        $sth->bindParam('userName', $userName, PDO::PARAM_STR);
        $result = $sth->execute();

        return $result;
    }
}
