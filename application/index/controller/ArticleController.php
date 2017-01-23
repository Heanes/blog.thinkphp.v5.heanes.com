<?php
/**
 * @doc 文章控制器
 * @author Heanes <heanes@163.com>
 * @time: 2016-11-23 14:59:29 周三
 */
namespace app\index\controller;
use app\common\model\Article as ArticleModel;
defined('InHeanes') ?: die('Access Invalid!');
class ArticleController extends BaseIndexController {
    
    /**
     * @doc 起始页
     * @author Heanes
     * @time 2017-01-14 18:42:28 周六
     */
    public function indexOp() {
        return $this->listOp();
    }
    
    /**
     * @doc 所有文章列表
     * @return mixed
     * @author Heanes
     * @time 2017-01-14 18:42:53 周六
     */
    public function listOp() {
        $articleModel = new ArticleModel();
        $articleList = $articleModel->paginate(20);
        // 获取分页显示
        $page = $articleList->render();
        // 模板变量赋值
        $this->assign('list', $articleList);
        $this->assign('page', $page);
        $this->assign('title', "文章列表");
        // 渲染模板输出
        return $this->display();
    }
}