<?php
namespace think;
// 加载基类
require __DIR__ . '/base.php';
// 应用开始
//App::run()->send();
// 执行应用并响应
Container::get('app')->run()->send();
