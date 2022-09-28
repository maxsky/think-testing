# think-testing

ThinkPHP 5.1 应用单元测试组件

## 安装

**`PHP >= 7.1`**

```php
composer require maxsky/think-testing --dev
```

## 配置

复制 `example` 文件夹内所有内容至项目根目录，修改项目 `composer.json`

`autoload` 中修改为如下

```json
"autoload": {
    "psr-4": {
        "app\\": "application",
        "think\\": "thinkphp/library/think"
    }
}
```

然后新增 `autoload-dev` 如下

```json
"autoload-dev": {
    "psr-4": {
        "tests\\": "tests"
    }
}
```

最后执行

```bash
composer dumpautoload
```

## 使用

项目目录下运行命令：

```bash
php think unit
```

## 其它

**需注意，一定要在测试环境下确认无误才进行线上部署**
