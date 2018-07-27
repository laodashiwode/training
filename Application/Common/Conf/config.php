<?php
return array(
	//'配置项'=>'配置值'
	'DEFAULT_MODULE'=>'Api',
//    'URL_MODEL' => 2,

    'URL_ROUTER_ON' => true, // 开启URL路由
    'URL_ROUTE_RULES' => array(
        array('admins/:id', 'Admin/read', 'status=1', array('ext'=>'', 'method'=>'get')),
        array('admins/:id', 'Admin/update', '', array('ext'=>'', 'method'=>'put')),
        array('admins/:id', 'Admin/delete', '', array('ext'=>'', 'method'=>'delete')),

        array('orders', 'Order/read', array('ext'=>'', 'method'=>'get')),

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


