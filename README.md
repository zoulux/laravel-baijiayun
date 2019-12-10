# laravel-baijiayun

laravel 版本的百家云 sdk，基于 [jake/baijiayun](https://github.com/zoulux/baijiayun)

## 框架要求

Laravel/Lumen >= 5.1

## 安装
```bash
$ composer require jake/laravel-baijiayun
```

## 配置
- 在 config/app.php 注册 ServiceProvider  (Laravel 5.5 + 无需手动注册)

```bash
'providers' => [
    // ...
    Jake\LaravelBaijiayun\BaiJiaCloudServiceProvider::class,,
],
```
- 创建配置文件：

```bash
$ php artisan vendor:publish --provider="Jake\LaravelBaijiayun\BaiJiaCloudServiceProvider"
```

- 修改应用根目录下的 config/baijiacloud.php 中对应的参数即可。

## 使用 
请直接参考项目 [jake/baijiayun](https://github.com/zoulux/baijiayun) 

## License
MIT
