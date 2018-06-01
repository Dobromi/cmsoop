<?php
/**
 * Created by PhpStorm.
 * User: X
 * Date: 27.5.2018 г.
 * Time: 15:45
 */

require_once ("init.php");

if($session->is_signed_in()){
    $user=user::find_user_id($session->user_id);
    $session->logout($user);
    redirect("../index.php");
}
else{
    redirect("../index.php");
}