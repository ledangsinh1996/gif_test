<?php
/**
 * Created by PhpStorm.
 * User: LE DANG SINH
 * Date: 8/4/2018
 * Time: 10:14 PM
 */

class productModel extends baseModel
{
    public function get_product(){
        return false;
    }
    public function add($data){
        global $db;
        return $db->insert($data,'product');
    }

}