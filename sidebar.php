<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
    <div class="blog-background">
        <div class="sidebar-search">
	        <div class="form-group has-success has-feedback">
		        <form id="search" method="post" class="clearfix"><label class="control-label sr-only" for="inputSuccess5">Hidden label</label>
		        <input type="text" class="form-control" id="inputSuccess5" aria-describedby="inputSuccess5Status" placeholder="输入关键词后回车搜索" name="s">
		        <span class="glyphicon glyphicon-search form-control-feedback" aria-hidden="true"></span>
		        <span id="inputSuccess5Status" class="sr-only">(success)</span></form>
	        </div>
        </div>
        <!--搜索结束-->
       	<div>
       		<h5 class="blog-line"><?php _e('文章分类'); ?></h5>
			<ul class="list-group">
			    <?php $this->widget('Widget_Metas_Category_List')->to($category); ?>
			    <?php while ($category->next()): ?>
			    <a href="<?php $category->permalink(); ?>" class="list-group-item"><?php $category->name(); ?></a>
			    <?php endwhile; ?>			  
			</ul>
       	</div>
       	<div>
       		<h5 class="blog-line">最新文章</h5>
       		<ul>
    			<?php $this->widget('Widget_Contents_Post_Recent')
               ->parse('<li><a href="{permalink}">{title}</a></li><hr id="hr-sidebar" />'); ?>
			</ul>
       	</div>
       	<div class="tag-cloud">
       		<h5 class="blog-line">标签云</h5>
			<?php $this->widget('Widget_Metas_Tag_Cloud', array('sort' => 'count', 'ignoreZeroCount' => true, 'desc' => true, 'limit' => 50))->to($tags); ?>  
			<?php while($tags->next()): ?>  
			<a rel="tag" href="<?php $tags->permalink(); ?>"><?php $tags->name(); ?></a>
			<?php endwhile; ?>
       	</div>
       	<?php if($this->options->Ad3):?>
        <div id="ad-sidebar">
          	<h5 class="blog-line">广而告之</h5>
          	<?php echo $this->options->Ad3;?>
        	</div>
    	<?php endif;?>
   	</div>	
