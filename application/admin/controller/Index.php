<?php
/*
 * @Description: 
 * @version: V 1.0
 * @Author: Zoey Cheung
 * @Date: 2020-09-12 13:40:14
 * @LastEditors: Zoey Cheung
 * @LastEditTime: 2020-09-12 20:14:40
 */

namespace app\admin\controller;

use think\View;

class Index
{
    public function index()
    {
        return view('goods');
    }

    public function create()
    {
        return view('create', ['title' => 'Goods Create']);
    }
    public function save()
    {
        return 'save';
    }
    public function edit()
    {
        return view('edit', ['title' => 'Goods Edit', 'goods' => array()]);
    }
    public function update()
    {
        return 'update';
    }
    public function delete()
    {
        return 'delete';
    }
}
