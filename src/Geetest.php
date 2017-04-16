<?php namespace LaravelChen\Geetest;

use Illuminate\Support\Facades\Facade;

class Geetest extends Facade
{
    /**
     * 获取绑定到IOC容器
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'geetest';
    }

}