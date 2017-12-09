<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
	<footer class="blog-footer text-center">
	  <div class="container">
	    &copy; <?php echo date('Y'); ?><a href="<?php $this->options->siteUrl(); ?>"> <?php $this->options->title(); ?></a>.
    	<?php _e('由 <a href="http://www.typecho.org">Typecho</a> 强力驱动'); ?>.<p>Theme By<a href="https://www.lzy20021010.xyz"> Lzy20021010</a></p>
    	<?php if ($this->options->socialICP): ?>
    		<img src="<?php $this->options->themeUrl('/images/icp.ico');?>" alt="工信部ICP备案号"><a href="http://www.miibeian.gov.cn/publish/query/indexFirst.action" target="_blank"> <?php $this->options->socialICP(); ?></a>
    	<?php endif; ?>
    	<?php if ($this->options->socialGA): ?>
			<img src="<?php $this->options->themeUrl('/images/ga.png');?>" alt="公安机关备案号"><a href="<?php $this->options->socialGAURL(); ?>" target="_blank"> <?php $this->options->socialGA(); ?></a>
		<?php endif; ?>
	  </div>
	</footer>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://cdn.bootcss.com/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="<?php $this->options->themeUrl('public/js/bootstrap.min.js'); ?>"></script>
    <script src="<?php $this->options->themeUrl('public/js/prism.js'); ?>"></script>
    <?php $this->options->StatsCode(); ?>
    <?php $this->footer(); ?>
  </body>
</html>