# Laravel-Geetest For Laravel5
> 采用了Germeyd的package，在此基础上增加了官方version3.0的使用
## 效果图
### Version3.0
![image](https://github.com/LaravelChen/laravel-geetest/raw/master/images/one.png)

### Version2.0
![image](https://github.com/LaravelChen/laravel-geetest/raw/master/images/two.png)

## 安装
### composer安装package
```
composer require laravelchen/laravel-geetest
```
### 配置(在config目录的app文件下)
```
'providers' => [
       LaravelChen\Geetest\GeetestServiceProvider::class,
   ];
'aliases'=>[
      'Geetest' => LaravelChen\Geetest\Geetest::class,
]
```
### 生成配置文件
#### 会在config目录下生成geetest配置文件，同时在resources目录下生成视图文件
```$xslt
php artisan vendor:publish
```
### 用法
#### 直接在form表单中加入```{!! Geetest::render() !!}```
#### 具体如下:
```
<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="//cdn.bootcss.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet">
    <title>Laravel</title>
</head>
<body style="margin-top: 200px">
<div class="col-md-4 col-md-offset-4">
    <form action="/" method="post">
        <div class="form-group">
            <label for="name" class="control-label">User:</label>
            <input id="name" name="name" type="text" class="form-control">
        </div>
        {!! Geetest::render() !!}
        <br>
        <button type="submit" class="btn btn-success form-control">提交</button>
    </form>
</div>
</body>
</html>
```




