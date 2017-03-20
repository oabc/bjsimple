<?php
$title ="生产企业信息管理";
$first_title ="基础管理";
$toolname =["新增","修改","删除","导入","导出",];
//$toolname =["新增","修改","删除","审核","导入","导出",];
$model_title ="新增";

$_f='
企业名称-企业简称-行政区域-经营类型-企业类型-注册法人-注册时间-注册地址-企业识别码-证件代码-企业联系人-联系人手机号
';
//sel-date
$_t='
企业名称-企业简称-sel-sel-sel-注册法人-date-注册地址-企业识别码-证件代码-企业联系人-联系人手机号
';
$_t = str_replace(PHP_EOL, '', $_t);
$_f = str_replace(PHP_EOL, '', $_f);
$field =explode('-',$_f); ;
$field_type =explode('-',$_t); ;

require_once '/bjsimple/web/.user_mgr.php';
?>