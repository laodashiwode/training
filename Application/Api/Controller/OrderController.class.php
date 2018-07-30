<?php

namespace Api\Controller;

use Think\Controller\RestController;

class OrderController extends RestController
{
    protected $allowMethod    = array('get', 'post', 'put'); // REST允许的请求类型列表
    protected $allowType      = array('html', 'xml', 'json'); // REST允许请求的资源类型列表

    public function read()
    {
        $list = D('WorkerOrder')->getlist();
        if (!$list) {
            returnjson('404', '暂无相关数据', '');
        } else {
            $order_id_list = array_column($list, 'id');
            $res = D('WorkerOrderOperationRecord')->getoperation($order_id_list);

            $res = reset_array_index($res, 'worker_order_id');
            foreach ($list as $key => $val){
                $list[$key]['operation'] = $res[$val['id']];
            }

            returnjson('200', 'success', $list);
        }
    }
}