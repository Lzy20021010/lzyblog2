<?php
if (!defined('__TYPECHO_ROOT_DIR__')) exit;
$this->need('header.php');
?>
</div>
<div class="container">
  <div class="row">
	<div class="col-md-2">
		<?php $this->need('sidebar1.php'); ?>
	</div>
  	<div class="col-md-8">
        <ol class="breadcrumb">
        	<span>当前位置:</span>
            <li><a href="<?php $this->options->siteUrl(); ?>">首页</a></li>
            <?php if ($this->is('index')): ?><!-- 页面为首页时 -->
            <?php elseif ($this->is('post')): ?><!-- 页面为文章单页时 -->
                <li><?php $this->category(); ?></li>
                <li class="active"><a href="<?php $this->permalink() ?>"><?php $this->title() ?></a></li>
            <?php else: ?><!-- 页面为其他页时 -->
                <li class="active"><a href="<?php $this->permalink() ?>"><?php $this->archiveTitle('','',''); ?></a></li>
            <?php endif; ?>
        </ol>
        <?php if ($this->have()): ?>
		<?php while($this->next()): ?>
		<div class="blog-border blog-background">
			<div>
				<img class="pull-right img-responsive" height="500" width="300" src="<?php echo img_postthemb($this,'/admin/img/noscreen.png')?>" alt="<?php $this->title() ?>" ></a>
			</div>
			<div>
				<h4><a class="title" href="<?php $this->permalink() ?>"><?php $this->title() ?></a></h4>
				<span class="text-warning index-span glyphicon glyphicon-time"><?php $this->date('Y-m-d H:i:s'); ?></span>
				<span class="text-warning index-span glyphicon glyphicon-user"><a href="<?php $this->author->permalink(); ?>">@<?php $this->author(); ?></a></span>
				<span class="text-warning index-span glyphicon glyphicon-folder-close"><?php $this->category(','); ?></span>	
				<p><?php $this->excerpt(120);?></p>		
				<a class="btn btn-info btn-sm" href="<?php $this->permalink() ?>">继续阅读 »</a>
			</div>	
		</div>
		<hr>
		<?php endwhile; ?>
        <?php else: ?>
            <div>
                <h4 class="text-center"><?php _e('该分类暂时还没有文章'); ?></h4>
            </div>
        <?php endif; ?>
		<nav aria-label="...">
		  <ul class="pager">
		    <li class="previous"><?php $this->pageLink('&laquo; 上一页','prev');?></li>
            <li class="next"><?php $this->pageLink('下一页 &raquo;','next');?></li>
		  </ul>
		</nav>
	</div>
	<div class="col-md-2">
		<?php $this->need('sidebar2.php'); ?>		
	</div>
  </div>
</div>
<?php $this->need('footer.php'); ?>