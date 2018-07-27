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

    public function read()
    {
        $data = I();
        switch ($this->_method){
            case 'get':
                $list = $this->admin->getinfo($data['id']);
                if (!$list) {
                    returnjson('404', '暂无相关数据', '');
                } else {
                    returnjson('200', 'success', $list);
                }
                break;
            case 'put':
                break;
            case 'post':
                break;
        }

    }

    public function update()
    {
        $data = I('put.');
        switch ($this->_method){
            case 'get':
                break;
            case 'put':
                foreach ($data as $key => $val){
                    $data = $key;
                }
                $data = json_decode($data,true);
                $res  = $this->admin->editinfo($data);
                if (!$res) {
                    returnjson('400', '操作失败', '');
                } else {
                    returnjson('200', '操作成功', '');
                }
                break;
            case 'post':
                break;
        }
    }

    public function delete()
    {
        $data = I();
        switch ($this->_method){
            case 'get':
                $res  = $this->admin->delinfo($data['id']);
                if (!$res) {
                    returnjson('400', '操作失败', '');
                } else {
                    returnjson('200', '操作成功', '');
                }
                break;
            case 'post':
                break;
        }
    }


}