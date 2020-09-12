<?php
namespace app\goods\controller;

class Index
{
    public function index()
    {
    	return view();
    }
    public function detail(){
    	return view('goods_detail');
    }
}
?>