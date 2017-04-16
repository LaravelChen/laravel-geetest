<?php namespace LaravelChen\Geetest;


trait GeetestCaptcha
{
    /**
     * ajax请求的函数返回相应的数据
     */
    public function getGeetest()
    {
        $user_id = "test";
        $status = Geetest::pre_process($user_id);
        session()->put('gtserver', $status);
        session()->put('user_id', $user_id);
        echo Geetest::get_response_str();
    }
}