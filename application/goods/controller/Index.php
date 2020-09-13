<?php
/*
 * @Description: 
 * @version: V 1.0
 * @Author: Zoey Cheung
 * @Date: 2020-09-11 10:02:32
 * @LastEditors: Zoey Cheung
 * @LastEditTime: 2020-09-13 15:31:01
 */
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