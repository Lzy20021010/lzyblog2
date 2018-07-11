<?php
if (!defined('__TYPECHO_ROOT_DIR__')) exit;
$this->need('header.php');
?>
</div>
<div class="container">
  <div class="row">
  	<div class="col-md-8">
	    <ol class="breadcrumb text-center">
	        <span>当前位置:</span>
	        <li><a href="<?php $this->options->siteUrl(); ?>">首页</a></li>
	        <?php if ($this->is('index')): ?><!-- 页面为首页时 -->
	        <?php elseif ($this->is('post')): ?><!-- 页面为文章单页时 -->
	            <li><?php $this->category(); ?></li>
	            <li class="active"><a href="<?php $this->permalink() ?>"><?php $this->title() ?></a></li>
	        <?php else: ?><!-- 页面为其他页时 -->
	            <li class="active"><a href="<?php $this->permalink() ?>"><?php $this->archiveTitle(array(
            'category'  =>  _t('分类 %s 下的文章'),
            'search'    =>  _t('包含关键字 %s 的文章'),
            'tag'       =>  _t('标签 %s 下的文章'),
            'author'    =>  _t('%s 发布的文章')
        ), ''); ?></a></li>
	        <?php endif; ?>
	    </ol>
	    <?php if ($this->have()): ?>
		<?php while($this->next()): ?>
		<div class="blog-border blog-background">
 			<div class="blog-timg">
				<img class="pull-left img-responsive" height="300" width="300" src="<?php echo img_postthemb($this,'/admin/img/noscreen.png')?>" alt="<?php $this->title() ?>" />
			</div> 
			<div>
				<div class="text-title">
					<span class="badge bg-blue link-white"><?php $this->category(','); ?></span>&nbsp;&nbsp;&nbsp;&nbsp;
					<a href="<?php $this->permalink() ?>"><?php $this->title() ?></a>
				</div>
				<span class="text-warning index-span glyphicon glyphicon-time"><?php $this->date('Y-m-d H:i:s'); ?></span>
				<span class="text-warning index-span glyphicon glyphicon-user"><a href="<?php $this->author->permalink(); ?>">@<?php $this->author(); ?></a></span>
				<span class="text-warning index-span glyphicon glyphicon glyphicon-comment"><?php $this->commentsNum('%d'); ?></span>
				<span class="text-warning index-span glyphicon glyphicon glyphicon-eye-open"><?php $this->viewsNum(); ?></span>
				<p><?php $this->excerpt(120);?></p><br/><br/>
			</div>	
		</div>
		<hr>
		<?php endwhile; ?>
        <?php else: ?>
            <div>
                <h4 class="text-center"><?php _e('没有找到所求的内容'); ?></h4>
            </div>
        <?php endif; ?>
		<nav aria-label="...">
		  <ul class="pager">
		    <li class="previous"><?php $this->pageLink('&laquo; 上一页','prev');?></li>
            <li class="next"><?php $this->pageLink('下一页 &raquo;','next');?></li>
		  </ul>
		</nav>
	</div>
	<div class="col-md-4">
		<?php $this->need('sidebar.php'); ?>		
	</div>
  </div>
</div>
<?php $this->need('footer.php'); ?>