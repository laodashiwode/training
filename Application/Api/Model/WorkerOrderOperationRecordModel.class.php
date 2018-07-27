<?php

namespace Api\Model;

use Think\Model;

class WorkerOrderOperationRecordModel extends Model
{
    public function getoperation($list)
    {
        $where['worker_order_id'] = array('in', $list);
        return $this->where($where)
            ->order('create_time desc')
            ->select();
    }
}
