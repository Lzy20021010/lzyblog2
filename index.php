<?php
/**
 * Lzy Technology主题
 * 
 * @package Lzy Technology
 * @author Lzy20021010
 * @version 2.5.5
 * @link https://www.lzy20021010.com
 */

if (!defined('__TYPECHO_ROOT_DIR__')) exit;
$this->need('header.php');
?>
</div>
<div class="container">
  <div class="row">
  	<div class="col-md-8">
  		<!--[if lt IE 8]>
			<div class="alert alert-danger">
			    <a href="#" class="close" data-dismiss="alert">
			        &times;
			    </a>
			    <?php _e('当前网页 <strong>不支持</strong> 你正在使用的浏览器. 为了正常的访问, 请 <a href="http://browsehappy.com/">升级你的浏览器</a>'); ?>.
			</div>
    	<![endif]-->
		<div class="alert alert-success" role="alert">
			<button type="button" class="close" data-dismiss="alert" aria-label="Close">
		  		<span aria-hidden="true">&times;</span>
			</button>	
			<p class="glyphicon glyphicon-bullhorn"> <?php echo $this->options->Notice();?></p>
		</div>
        <?php if($this->options->Ad1):?>
        <div id="ad-index">
            <?php echo $this->options->Ad1;?>
        </div>
        <?php endif;?>
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