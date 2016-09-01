<?php
namespace app\index\controller;

class Index
{
    public function index()
    {
        // echo url('User/Member/info', ['uid'=>10001], 'exp', true);
        dump(config('template.type'));
        $data = ['name'=>'thinkphp','url'=>'thinkphp.cn'];
        // 指定json数据输出
        // return json(['data'=>$data,'code'=>1,'message'=>'操作完成']);
    }
}
