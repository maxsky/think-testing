<?php
// +----------------------------------------------------------------------
// | ThinkPHP [ WE CAN DO IT JUST THINK IT ]
// +----------------------------------------------------------------------
// | Copyright (c) 2006-2015 http://thinkphp.cn All rights reserved.
// +----------------------------------------------------------------------
// | Licensed ( http://www.apache.org/licenses/LICENSE-2.0 )
// +----------------------------------------------------------------------
// | Author: yunwuxin <448901948@qq.com>
// +----------------------------------------------------------------------
namespace tests;

use think\Container;

class TestCase extends \think\testing\TestCase
{
    protected $currentUri = 'http://localhost';

    protected function setUp()
    {
        require_once __DIR__ . '/../thinkphp/base.php';

        // 初始化 App 对象，并将 APP_PATH 指向项目的 application 目录
        Container::get('app')->path(__DIR__ . '/../application/')->initialize();
    }
}
