<?php

namespace Api\Controller;

use Think\Controller\RestController;

class AdminController extends RestController
{
    protected $allowMethod    = array('get', 'post', 'put'); // REST允许的请求类型列表
    protected $allowType      = array('html', 'xml', 'json'); // REST允许请求的资源类型列表
    
    public function _initialize()
    {
        $this->admin = D('Admin');
    }

    public function getlist()
    {
        $list = $this->admin->getlist();
        if (!$list) {
            returnjson('404', '暂无相关数据', '');
        } else {
            returnjson('200', 'success', $list);
        }
    }

    public function add()
    {
        $data = I('get.');
        $res = $this->admin->addinfo($data);
        if (!$res) {
            returnjson('400', '操作失败', $res);
        } else {
            returnjson('201', '操作成功', $res);
        }
    }

    public function read()
    {
        $data = I('get.');
        $list = $this->admin->getinfo($data['id']);
        if (!$list) {
            returnjson('404', '暂无相关数据', '');
        } else {
            returnjson('200', 'success', $list);
        }
    }

    public function update()
    {
        $data = I('put.');
        $data['id'] = I('get.id');
        $res  = $this->admin->editinfo($data);
        if (!$res) {
            returnjson('400', '操作失败', $res);
        } else {
            returnjson('200', '操作成功', $res);
        }
    }

    public function delete()
    {
        $data = I('get.');
        $res  = $this->admin->delinfo($data['id']);
        if (!$res) {
            returnjson('400', '操作失败', $res);
        } else {
            returnjson('204', '操作成功', $res);
        }
    }


}