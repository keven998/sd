<?php
/**
 * Created by PhpStorm.
 * User: zhangjincheng
 * Date: 17-3-10
 * Time: 下午5:58
 */
//node的名字，每一个都必须不一样
$config['log']['active'] = 'file';
$config['log']['log_level'] = \Monolog\Logger::DEBUG;
$config['log']['log_name'] = 'OneShop';


$config['log']['graylog']['udp_send_port'] = 12500;
$config['log']['graylog']['ip'] = '127.0.0.1';
$config['log']['graylog']['port'] = '12201';
$config['log']['graylog']['api_port'] = '9000';
$config['log']['graylog']['efficiency_monitor_enable'] = true;

$config['log']['file']['log_path'] = '/../../';
$config['log']['file']['log_max_files'] = 15;
$config['log']['file']['efficiency_monitor_enable'] = false;
return $config;