<?php
/* ========================================================================
 * PPPHP入口文件，用于定义常量
 * 作者：李虎头
 * ======================================================================== */
//--------------------------------------------------------------------------------
//如果是多模块,可以通过动态设置module的形式,动态条用不同模块
//修改HTTP_HOST 为 SERVER_NAME方式，适配非80端口访问无法访问其他模块的BUG 详情见issues #6 https://github.com/kphcdr/ppphp/issues/6
//提交修改时间：2017-1-9 17:37:36 修改者 h4dex 
//--------------------------------------------------------------------------------
if ($_SERVER['SERVER_NAME'] == 'ppphpadmin.m.com' || $_SERVER['SERVER_NAME'] == 'ppphpadmin.kphcdr.com') {
    $MODULE_NAME = 'admin';
} else {
    $MODULE_NAME = 'app';
}
define('DEBUG', true);//调试模式

define('PPPHP', realpath('./../'));    // 根目录
//系统路径
define('CORE', PPPHP . '/core/');
define('APP', PPPHP . '/' . $MODULE_NAME . '/');
define('MODULE', $MODULE_NAME);
//载入composer
include PPPHP . '/vendor/autoload.php';
