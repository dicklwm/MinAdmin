<?php
return array(
    /* 数据库设置 */
    'DB_TYPE' => 'mysql',     // 数据库类型
    //'DB_HOST'               => 'www.mitarl.com', // 服务器地址
    'DB_HOST' => 'localhost',       // 服务器地址
    'DB_NAME' => 'v3',          // 数据库名
    'DB_USER' => 'root',      // 用户名
    'DB_PWD' => 'root',          // 密码
    'DB_PORT' => 3306,        // 端口
    'DB_PREFIX' => '',    // 数据库表前缀

    'SESSION_AUTO_START'    =>  true,    // 是否自动开启Session

    'WEBAPI_URL' => 'http://localhost:8080/webapi/',        //V3的WebAPI接口的URL地址
);