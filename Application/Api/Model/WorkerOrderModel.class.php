<?php
namespace Api\Model;

use Think\Model;

class WorkerOrderModel extends Model
{
    public function getlist($id)
    {
        return $this->where("id = $id")->find();
    }
}
?>