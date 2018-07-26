<?php
namespace Api\Controller;

use Think\Controller\RestController;

class OrderController extends RestController
{
    protected $allowMethod    = array('get','post','put'); // REST允许的请求类型列表
    protected $allowType      = array('html','xml','json'); // REST允许请求的资源类型列表

    public function read_json()
    {
        switch ($this->_method){
            case 'get':
                $id = I('id');
                $list = D('WorkerOrder')->getlist($id);
                if(!$list){
                    returnjson('404','暂无相关数据','');
                }else{
                    $list['operation'] = D('WorkerOrderOperationRecord')
                        ->getoperation($id);
                    returnjson('200','success',$list);
                }
                // 输出id为1的Info的json数据
                break;
            case 'put':
                break;
            case 'post':
                break;
        }

    }

}