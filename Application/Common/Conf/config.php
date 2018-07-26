<?php
return array(
	//'配置项'=>'配置值'
	'DEFAULT_MODULE'=>'Admin',
//    'URL_MODEL' => 2,

    'URL_ROUTER_ON' => true, // 开启URL路由
    'URL_ROUTE_RULES' => array(
        array('admin/:id','admin/read', 'status=1', array('ext'=>'json','method'=>'get')),
        array('admin/:id','admin/update', '', array('ext'=>'json','method'=>'put')),
        array('admin/:id','admin/delete', '', array('ext'=>'json','method'=>'delete')),


        array('order/:id','order/read',array('ext'=>'json','method'=>'get')),
    ),

    'TMPL_PARSE_STRING' => array(
        '__PUBLIC__' => __ROOT__ . '/Public',
        '__JS__' => __ROOT__ . '/Public/js',
        '__CSS__' => __ROOT__ . '/Public/style',
        '__IMAGE__' => __ROOT__ . '/Public/img',
        '__FONT__' => __ROOT__ . '/Public/font',
        '__UPLOAD__' => __ROOT__ . '/Uploads/',
    ),

    'DB_TYPE'               =>  'mysql',     // 数据库类型
    'DB_HOST'               =>  'localhost', // 服务器地址
    'DB_NAME'               =>  'test',          // 数据库名
    'DB_USER'               =>  'root',      // 用户名
    'DB_PWD'                =>  'root',          // 密码
    'DB_PORT'               =>  '3306',        // 端口
);


