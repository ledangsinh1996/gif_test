<?php
/**
 * Created by PhpStorm.
 * User: LE DANG SINH
 * Date: 8/4/2018
 * Time: 10:13 PM
 */

class productController extends baseController
{
    public function index()
    {
        //$this->render("product","index");
        $this->view->data['title']='Đây là trang sản phẩm';
        $this->view->show('product/index');
    }
    public function form(){
        //$this->render("product","form");
        $this->view->show("product/add");
    }
}