<?php
/**
 * Created by PhpStorm.
 * User: X
 * Date: 24.5.2018 г.
 * Time: 16:41
 */

class User extends Db_object {

    protected static $db_table="users";
    protected static $db_table_fields=array('username','password','first_name','last_name');
    public $id;
    public $username;
    public $password;
    public $first_name;
    public $last_name;








    public static function verify_user($username,$password){
        global $database;
        $username=$database->escape_string($username);
        $password=$database->escape_string($password);
        $query=$database->query("SELECT * FROM" .self::$db_table ." WHERE username='$username' AND password='$password'");
        $rows=mysqli_num_rows($query);
        if($rows==1){
            $user=mysqli_fetch_object($query);
            return $user;
        }
        else{
            return null;
        }
    }


    
}