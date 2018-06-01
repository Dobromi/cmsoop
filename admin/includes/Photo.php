<?php

/**
 * Created by PhpStorm.
 * User: X
 * Date: 1.6.2018 г.
 * Time: 18:02
 */
class Photo extends Db_object
{

    protected static $db_table="photos";
    protected static $db_table_fields=array('id','title','description','filename','type','size');
    public $id;
    public $title;
    public $description;
    public $filename;
    public $type;
    public $size;

    public function set_file()

}