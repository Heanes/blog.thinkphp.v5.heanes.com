<?php
/**
 * @doc 前端公共controller
 * @author Heanes <heanes@163.com>
 * @time: 2016-11-23 14:44:13 周三
 */
namespace app\index\controller;
use think\Controller;
use think\Request;

class BaseIndexController extends Controller  {
    
    public function __construct(Request $request = null) {
        parent::__construct($request);
        $this->view->engine->layout(true);
        $this->view->engine->layout('layout/layoutCommon');
    }
    
}