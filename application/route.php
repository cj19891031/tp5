<?php
// +----------------------------------------------------------------------
// | ThinkPHP [ WE CAN DO IT JUST THINK ]
// +----------------------------------------------------------------------
// | Copyright (c) 2006~2016 http://thinkphp.cn All rights reserved.
// +----------------------------------------------------------------------
// | Licensed ( http://www.apache.org/licenses/LICENSE-2.0 )
// +----------------------------------------------------------------------
// | Author: liu21st <liu21st@gmail.com>
// +----------------------------------------------------------------------
// $Id$

return [
	//'__domain__' => ['test.tp.cn', 'test2.tp.cn'],

    '__pattern__' => [
        'name' => '\w+',
    ],
    '[hello]'     => [
        '[:id]'   => ['index/hello', ['method' => 'get'], ['id' => '\d*']],
        ':name' => ['index/hello', ['method' => 'post']],
    ],

    //'hello2/[:name]' => 'index/hello2',

];
