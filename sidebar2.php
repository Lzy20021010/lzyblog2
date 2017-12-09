<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
			<form role="search">
				<div class="form-group">
					<label for="s" class="sr-only"><?php _e('搜索关键字'); ?></label>
					<input type="text" name="s" class="form-control" placeholder="<?php _e('输入关键字搜索'); ?>" />
				</div>
			</form>	
			<div class="panel panel-warning">
				<div class="panel-heading"><span class="glyphicon glyphicon-calendar"><?php _e('近期文章'); ?></span></div>
				<ul class="list-group">
            		<?php $this->widget('Widget_Contents_Post_Recent')
                	->parse('<a href="{permalink}" class="text-center list-group-item">{title}</a>'); ?>		  
				</ul>
			</div>
			<div class="panel panel-primary">
				<div class="panel-heading"><span class="glyphicon glyphicon-tag"><?php _e('标签云'); ?></span></div>
				<div class="panel-body">
		            <?php $this->widget('Widget_Metas_Tag_Cloud', array('sort' => 'count', 'ignoreZeroCount' => true, 'desc' => true, 'limit' => 30))->to($tags); ?>
		            <?php while($tags->next()): ?>
		                <a href="<?php $tags->permalink(); ?>" class="label label-default blog-tag"><?php $tags->name(); ?></a>
		            <?php endwhile; ?>
				</div>
			</div>