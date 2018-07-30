<?php

namespace Api\Model;

use Think\Model;

class WorkerOrderOperationRecordModel extends Model
{
    public function getoperation($list)
    {
        $sql = [];
        foreach ($list as $key => $val) {
            $sql[] = '(select * from worker_order_operation_record where worker_order_id = '.$val.' order by create_time desc limit 5)';
        }
        $sql_query = implode('union all', $sql);
        return $this->query($sql_query);
    }
}
