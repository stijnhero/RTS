<?php
/**
 * Created by PhpStorm.
 * User: Ruud
 * Date: 17-3-2015
 * Time: 00:28
 */

use Game\Models\Model;

class TestModel extends Model{

    public $fields = array(
        "naam",
        "username",
        "last_name",
        "first_name"
    );

    public $collection = "test_collection";
}