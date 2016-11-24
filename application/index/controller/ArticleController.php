<?php
/**
 * @doc 文章控制器
 * @author Heanes <heanes@163.com>
 * @time: 2016-11-23 14:59:29 周三
 */
namespace app\index\controller;
use app\common\model\Article;
defined('InHeanes') ?: die('Access Invalid!');
class ArticleController extends BaseIndexController {
    
    public function indexOp() {
        $this->listOp();
    }
    
    public function listOp() {
        $articleModel = new Article();
        $articleList = $articleModel->paginate(1, 10);
        // 获取分页显示
        $page = $articleList->render();
        // 模板变量赋值
        $this->assign('list', $articleList);
        $this->assign('page', $page);
        // 渲染模板输出
        return $this->fetch();
    }
}