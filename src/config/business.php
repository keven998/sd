<?php
/**
 * Created by PhpStorm.
 * User: zhangjincheng
 * Date: 16-7-14
 * Time: 下午1:58
 */
/**
 * tcp访问时方法的前缀
 */
$config['tcp']['method_prefix'] = '';
/**
 * http访问时方法的前缀
 */
$config['http']['method_prefix'] = 'http_';
/**
 * websocket访问时方法的前缀
 */
$config['websocket']['method_prefix'] = '';

//默认访问的页面
$config['http']['index'] = 'index.html';

//是否服务器启动时自动清除群组信息
$config['autoClearGroup'] = true;

$config['jwt_key'] = 'oneshop';

/**
 * 设置域名和Root之间的映射关系
 */

$config['http']['root'] = [
    'default' =>
        [
            'root' => 'localhost',
            'index' => 'index.html'
        ]
];

return $config;
