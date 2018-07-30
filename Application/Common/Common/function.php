<?php

function returnjson($code, $msg="", $data=array())
{
    $result=array(
        'code' => $code,
        'msg' => $msg,
        'data' => $data
    );
    //输出json
    echo json_encode($result);
    exit;
}

/**
 * 重构数组索引
 * @param array  $arr      数组
 * @param string $field    字段名
 * @return array
 */
function reset_array_index(array $arr, $field='id')
{
    $tmp = [];
    foreach ($arr as $val) {
        if (!isset($val[$field])) {
            continue;
        }
        $tmp[$val[$field]][] = $val;
    }
    return $tmp;
}