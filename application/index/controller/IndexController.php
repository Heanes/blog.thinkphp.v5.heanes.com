<?php
namespace app\index\controller;
defined('InHeanes') ?: die('Access Invalid!');
class IndexController extends BaseIndexController  {
    
    public function indexOp() {
        return 'Hello World';
    }
}
