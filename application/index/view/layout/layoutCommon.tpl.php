<?php
/**
 * @doc 公共布局文件
 * @author Heanes <heanes@163.com>
 * @time: 2017-01-14 18:57:08 周六
 */
?>
<!DOCTYPE html>
<html lang="zh-cmn-Hans">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="renderer" content="webkit">
    <meta name="author" content="Heanes heanes.com email(heanes@163.com)">
    <meta name="keywords" content="软件,商务,HTML,tutorials,source codes">
    <meta name="description" content="描述">
    <link rel="shortcut icon" href="/public/static/image/favicon/favicon.ico"/>
    <link rel="bookmark" href="/public/static/image/favicon/favicon.ico"/>
    {include file="layout/headerCommon" /}
    <title><?php echo $title;?></title>
</head>
<body>
<div class="center wrap">
    <!-- S 主要内容 S -->
    <div class="main">
        <!-- 顶部全宽度内容区域 -->
        <div class="main-top-block"></div>
        <!-- 主体内容 -->
        <div class="main-content main-wrap clearfix">
            <!-- 左侧区域 -->
            <div class="left-block left-wrap left-width"></div>
            <!-- 中心区域 -->
            <div class="center-block center-wrap">
                {__CONTENT__}
            </div>
            <!-- 右侧区域 -->
            <div class="right-block right-wrap"></div>
        </div>
        <!-- 底部区域 -->
        <div class="main-bottom-content main-wrap"></div>
        <!-- 底部全宽度内容区域 -->
        <div class="main-bottom-block"></div>
    </div>
    <!-- E 主要内容 E -->
</div>
<cite>
    <!-- S js S -->
    {include file="layout/jsCommon" /}
    <!-- E js E -->
</cite>
</body>
</html>
