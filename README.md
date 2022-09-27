# think-testing

ThinkPHP 5.1 应用单元测试组件

## 安装

**`PHP >= 7.1`**

```php
composer require maxsky/think-testing --dev
```

## 使用

复制 `example` 文件夹内所有内容至项目根目录，修改项目 `composer.json`，加入下面这段：

```json
"autoload-dev": {
    "psr-4": {
        "tests\\": "tests"
    }
}
```

然后项目目录下运行下方命令测试：

```bash
php think unit
```

## 常见问题

由于官方 5.1 版本框架未兼容 PSR 规范，本库中对项目根目录下 `thinkphp` 目录进行了自动加载

打开 `composer.json` 即可看到如下两个命名空间指定及助手函数文件加载：

```json
"think\\": "../../../thinkphp/library/think"
"traits\\": "../../../thinkphp/library/traits"

"../../../thinkphp/helper.php"
```

如果项目本身已使用加载可能存在冲突，需移除项目中的自动加载

**需注意，一定要在测试环境下确认无误才进行线上部署**
