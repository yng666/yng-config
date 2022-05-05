<?php
namespace yng\config;

/**
 * 定义框架常量文件
 * 作者: 野牛哥
 * 时间: 2022-01-22 19:45:00
*/

// define('DEBUG',true);//控制debug报错

define('DS',DIRECTORY_SEPARATOR);//路径分隔符(反斜杠),window(/或\), linux(/)
define('ROOT',dirname(dirname(__DIR__)).DS);//根目录

define('APP_PATH',ROOT.'app'.DS);//app目录
define('CONFIG_PATH',ROOT.'config'.DS);//config目录
define('APP_CONTROLLER_PATH',APP_PATH.'controller'.DS);//app目录下的controller目录
define('APP_MODEL_PATH',APP_PATH.'model'.DS);//app目录下的model目录
define('APP_VIEW_PATH',APP_PATH.'view'.DS);//app目录下的view目录

define('CACHE_PATH',ROOT.'cache'.DS);//cache目录
define('EXTEND_PATH',ROOT.'extend'.DS);//extend目录
define('LOG_PATH',ROOT.'log'.DS);//log目录
define('PUBLIC_PATH',ROOT.'public'.DS);//public目录
define('YNG_PATH',ROOT.'yng'.DS);//yng目录

define('YNG_COMMON_PATH',YNG_PATH.'common'.DS);//yng目录下的common目录
define('YNG_CONFIG_PATH',YNG_PATH.'config'.DS);//yng目录下的config目录
define('YNG_LIBRARY_PATH',YNG_PATH.'library'.DS);//yng目录下的library目录
define('YNG_TPL_PATH',YNG_PATH.'tpl'.DS);//yng目录下的tpl目录
