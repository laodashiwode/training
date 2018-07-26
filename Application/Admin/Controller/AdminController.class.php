<?php
namespace Admin\Controller;

use Think\Controller;

class AdminController extends Controller
{
    private  $admin;

    public function _initialize()
    {
        $this->admin = D('Admin');
    }

	public function index()
    {
        $list = $this->admin->getlist();
        $this->assign([
            'list'=>$list['list'],
            'page'=>$list['page']
        ]);
        $this->display();
	}

    public function add()
    {
        $this->display();
    }

    public function edit()
    {
        $id = I('get.id');
        $info =$this->admin->getinfo($id);
        $this->assign('info',$info);
        $this->display();
    }

    public function del()
    {
        $id = I('id');
        if($this->admin->delinfo($id)){
            $this->ajaxReturn($id);
        }
    }

    public function handle()
    {
        $data = I();
        if(isset($data['id'])){
            $res = $this->admin->editinfo($data);
        }else{
            $res = $this->admin->addinfo($data);
        }
        if($res){
            $this->redirect('index');
        }
    }

}