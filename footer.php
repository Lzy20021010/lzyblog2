<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
	<footer class="blog-footer text-center">
        <div class="container">
            <div class="col-md-3">
                <h5 class="blog-line">关于本站</h5>
                <!-- 请手动输入内容 -->
            </div>
            <div class="col-md-3">
                <h5 class="blog-line">热门文章</h5>
                <?php getHotView('5');?>
            </div>
            <div class="col-md-3">
                <h5 class="blog-line">最新评论</h5>
                <ul>
                    <?php $this->widget('Widget_Comments_Recent','pageSize=5')->to($comments); ?>
                    <?php while($comments->next()): ?>
                        <li><?php $comments->author(false); ?>: <a href="<?php $comments->permalink(); ?>"><?php $comments->excerpt(10, '[...]'); ?></a></li>
                    <?php endwhile; ?>
                </ul>
            </div>
            <div class="col-md-3 tag-cloud">
                <h5 class="blog-line">朋友圈</h5>
                <?php echo $this->options->Friends;?>
            </div>
        </div>
	    <div class="container">
            <hr/>
            &copy; <?php echo date('Y'); ?><a href="<?php $this->options->siteUrl(); ?>"> <?php $this->options->title(); ?></a>.
        	<?php _e('由 <a href="http://www.typecho.org">Typecho</a> 强力驱动'); ?>.<p>Theme By<a href="https://www.lzy20021010.com"> Lzy20021010</a></p>
        	<?php if ($this->options->socialICP): ?>
        		<img src="<?php $this->options->themeUrl('/images/icp.png');?>" alt="工信部ICP备案号"><a href="http://www.miibeian.gov.cn/publish/query/indexFirst.action" target="_blank"> <?php $this->options->socialICP(); ?></a>
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
    <script type="text/javascript">
    [].slice.call(document.querySelectorAll('table')).forEach(function(el){
        var wrapper = document.createElement('div');
        wrapper.className = 'table-area';
        el.parentNode.insertBefore(wrapper, el);
        el.parentNode.removeChild(el);
        wrapper.appendChild(el);
    })
    </script>
    <?php if($this->is('post') or $this->is('page')):?>
    <script type="text/javascript">
    $(function(){
        $(".pay_item").click(function(){
            $(this).addClass('checked').siblings('.pay_item').removeClass('checked');
            var dataid=$(this).attr('data-id');
            $(".shang_payimg img").attr("src","<?php $this->options->themeUrl('images/dashang'); ?>/"+dataid+"img.png");
            $("#shang_pay_txt").text(dataid=="alipay"?"支付宝":"微信");
        });
    });
    function dashangToggle(){
        $(".hide_box").fadeToggle();
        $(".shang_box").fadeToggle();
    }
    </script>
    <!--Prism代码高亮插件,如需开启请去掉注释--> 
    <!--<script src="<?php $this->options->themeUrl('public/js/prism.js'); ?>"></script>-->
    <?php endif;?>
    <?php $this->options->StatsCode(); ?>
    <?php $this->footer(); ?>
  </body>
</html>