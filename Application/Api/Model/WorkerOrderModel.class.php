<?php

namespace Api\Model;

use Think\Model;

class WorkerOrderModel extends Model
{
    public function getlist()
    {
        $count      = $this->count();
        $Page       = new \Think\Page($count,10);
        $show       = $Page->show();
        $list       = $this
            ->limit($Page->firstRow.','.$Page->listRows)
            ->select();
        return $list;
    }
}
