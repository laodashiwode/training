<?php
namespace Admin\Model;

use Think\Model;

class AdminModel extends Model
{
    public function getlist()
    {
        $count      = $this->count();
        $Page       = new \Think\Page($count,10);
        $show       = $Page->show();
        $list       = $this->field('id, user_name, nickname, nickout')
            ->limit($Page->firstRow.','.$Page->listRows)
            ->select();
        return  ['list'=>$list, 'page'=>$show];
    }

    public function getinfo($id)
    {
        return $this->field('id, nickname, nickout')
            ->where("id = $id")
            ->find();
    }

    public function addinfo($data)
    {
        return $this->add($data);
    }

    public function editinfo($data)
    {
        return $this->where('id  ='. $data['id'])
           ->save(['nickname' => $data['nickname'], 'nickout' => $data['nickout']]);
    }

    public function delinfo($id)
    {
        return $this->where('id =' .$id)->delete();
    }
}
?>