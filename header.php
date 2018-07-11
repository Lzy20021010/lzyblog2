<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
<!DOCTYPE html>
<html lang="zh-CN">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- 上述3个meta标签*必须*放在最前面，任何其他内容都*必须*跟随其后！ -->
    <title><?php $this->archiveTitle(array(
            'category'  =>  _t('分类 %s 下的文章'),
            'search'    =>  _t('包含关键字 %s 的文章'),
            'tag'       =>  _t('标签 %s 下的文章'),
            'author'    =>  _t('%s 发布的文章')
        ), '', ' - '); ?><?php $this->options->title(); ?></title>
    <!-- Bootstrap -->
    <link href="<?php $this->options->themeUrl('public/css/bootstrap.min.css'); ?>" rel="stylesheet">
    <link href="<?php $this->options->themeUrl('public/css/prism.css'); ?>" rel="stylesheet">    
    <link href="<?php $this->options->themeUrl('public/css/base.css'); ?>" rel="stylesheet"> 
    <?php if ($this->is('post')): ?>
      <link rel="amphtml" href="<?php $this->permalink() ?>?amp=1">
    <?php endif; ?>
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://cdn.bootcss.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://cdn.bootcss.com/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    <?php $this->header(); ?>
  </head>
  <body>
    <div class="blog-headercolor">
      <div class="container" >
        <a href="<?php $this->options->siteUrl(); ?>" class="navbar-brand" style="margin-bottom: 30px;"><img src="<?php $this->options->themeUrl('images/logo.png'); ?>" alt="<?php $this->options->title() ?>"></a>
      </div>
    </div>
    <nav class="navbar navbar-default">
      <div class="container">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
            <span class="sr-only">导航切换</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
        </div>
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
          <ul class="nav navbar-nav">
            <!-- 导航：
            链接增加格式：<li class="nav-hover"><a href="链接">名称</a></li>
             -->
            <li class="nav-hover"><a href="<?php $this->options->siteUrl(); ?>">主页</a></li>
            <?php $this->widget('Widget_Contents_Page_List')
                       ->parse('<li class="nav-hover"><a href="{permalink}">{title}</a></li>'); ?>
            <li class="nav-hover"><a href="<?php $this->options->feedUrl(); ?>"><?php _e('RSS'); ?></a></li>
          </ul>
          <ul class="nav navbar-nav navbar-right">
            <?php if($this->user->hasLogin()): ?>
              <li class="nav-hover"><a href="<?php $this->options->siteUrl(); ?>/admin">管理后台 (<?php $this->user->screenName(); ?>)</a></li>
            <?php endif; ?>            
          </ul>
        </div><!-- /.navbar-collapse -->
      </div><!-- /.container-fluid -->
    </nav>