<?php
namespace Api\Model;

use Think\Model;

class WorkerOrderOperationRecordModel extends Model
{
    public function getoperation($id)
    {
        return $this->where("worker_order_id = $id")
            ->order('create_time desc')
            ->limit(5)
            ->select();
    }
}
?>