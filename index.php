<?php
/**
 * Lzy Technology主题
 * 
 * @package Lzy Technology
 * @author Lzy20021010
 * @version 2.0.0
 * @link http://www.lzy20021010.xyz
 */

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
		<div class="alert alert-success" role="alert">
			<button type="button" class="close" data-dismiss="alert" aria-label="Close">
		  		<span aria-hidden="true">&times;</span>
			</button>	
			<p>公告：</p>
			<?php $this->options->Notice(); ?>
		</div>
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