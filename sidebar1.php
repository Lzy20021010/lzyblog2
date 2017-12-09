<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
		<div class="panel panel-danger">
			<div class="panel-heading"><span class="glyphicon glyphicon-comment"><?php _e('联系我'); ?></span></div>
			<div class="panel-body">
				<img src="<?php $this->options->themeUrl('images/avatar.jpg'); ?>" alt="联系我" class="img-responsive" >
				<p class="text-center"><?php $this->options->authorName(); ?></p>
				<?php if ($this->options->socialQQ): ?>
					<a class="btn btn-primary" href="tencent://message/?uin=<?php $this->options->socialQQ(); ?>&Site=junichi&Menu=yes"><span class="iconfont icon-qq"></span></a>
				<?php endif; ?> 
				<?php if ($this->options->socialWeixin): ?>
					<a class="btn btn-success" href="<?php $this->options->socialWeixin(); ?>"><span class="iconfont icon-weixin"></span></a>
				<?php endif; ?>
				<?php if ($this->options->socialGithub): ?>
					<a class="btn btn-info" href="<?php $this->options->socialGithub(); ?>"><span class="iconfont icon-github"></span></a>
				<?php endif; ?>
				<?php if ($this->options->socialWeibo): ?>
					<a class="btn btn-warning" href="<?php $this->options->socialWeibo(); ?>"><span class="iconfont icon-weibo"></span></a>
				<?php endif; ?>	
			</div>
		</div>
		<div class="panel panel-info">
			<div class="panel-heading"><span class="glyphicon glyphicon-th-list"><?php _e('文章分类'); ?></span></div>
			<ul class="list-group">
			    <?php $this->widget('Widget_Metas_Category_List')->to($category); ?>
			    <?php while ($category->next()): ?>
			    <a href="<?php $category->permalink(); ?>" class="text-center list-group-item"><?php $category->name(); ?></a>
			    <?php endwhile; ?>			  
			</ul>
		</div>	
		<div class="panel panel-success">
			<div class="panel-heading"><span class="glyphicon glyphicon-link"><?php _e('友情链接'); ?></span></div>
			<!--友情链接-->
			<!--链接增加格式：<a href="链接" class="text-center list-group-item">网站名称</a> -->
			<ul class="list-group">
				
			</ul>
		</div>