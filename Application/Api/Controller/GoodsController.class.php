<?php
namespace Api\Controller;
use Common\Controller\CommonController;
use Think\Controller;

class GoodsController extends Controller {

	public function index(){
	    $data = I();
	    if(isset($data['type_id'])){
	        $type_id = $data['type_id'];
        }else{
            $type_id = 1;
        }
        $goods      = M('goods');
        $count      = $goods->where('type_id ='.$type_id)->count();// 查询满足要求的总记录数
        $Page       = new \Think\Page($count,10);// 实例化分页类 传入总记录数和每页显示的记录数(25)
        $show       = $Page->show();// 分页显示输出
        // 进行分页数据查询 注意limit方法的参数要使用Page类的属性
        $list = $goods->where('type_id ='.$type_id)->limit($Page->firstRow.','.$Page->listRows)->select();
        
        if(!$list){
            returnjson('400','fail','数据查询失败,暂无相关数据');
        }else{
            returnjson('200','success',$list);
        }
	}



}