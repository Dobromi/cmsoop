<?php
/**
 * Created by PhpStorm.
 * User: X
 * Date: 24.5.2018 г.
 * Time: 14:12
 */

define('DB_HOST','localhost');
define('DB_USER','root');
define('DB_PASSWORD','');
define('DB_NAME','cmsoop');

$connection=mysqli_connect(DB_HOST,DB_USER,DB_PASSWORD,DB_NAME);

