<?php
namespace Api\Controller;

use Think\Controller\RestController;

class OrderController extends RestController
{
    protected $allowMethod    = array('get', 'post', 'put'); // REST允许的请求类型列表
    protected $allowType      = array('html', 'xml', 'json'); // REST允许请求的资源类型列表

    public function read()
    {
        switch ($this->_method){
            case 'get':
                $list = D('WorkerOrder')->getlist();
                if(!$list){
                    returnjson('404', '暂无相关数据', '');
                }else{
                    foreach ( $list as $key =>$val){
                        $list[$key]['operation_list'] = D('WorkerOrderOperationRecord')
                            ->getoperation($val['id']);
                    }
                    returnjson('200', 'success', $list);
                }
                break;
            case 'put':
                break;
            case 'post':
                break;
        }
    }
}