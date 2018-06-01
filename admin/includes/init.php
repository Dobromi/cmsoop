<?php
/**
 * Created by PhpStorm.
 * User: X
 * Date: 24.5.2018 г.
 * Time: 15:15
 */

defined('DS') ? null : define('DS',DIRECTORY_SEPARATOR);
define('SITE_ROOT','C:'.DS.'xampp'.DS.'htdocs'.DS.'cmsoop');
defined('INCLUDES_PATH') ? null : define('INCLUDES_PATH',SITE_ROOT.DS.'admin'.DS.'includes');



require_once ("functions.php");
require_once("new_config.php");
require_once ("database.php");
require_once ("Db_object.php");
require_once ("user.php");
require_once ("session.php");