<?php
if (!defined('__TYPECHO_ROOT_DIR__')) exit;
$this->need('header.php');
?>
<div class="container">
  <div class="row">
    <div class="col-md-8">
      <div class="blog-border blog-background">
        <h2 class="text-center">页面不存在</h2>
        <h4 class="text-center">Page Not Found</h4><br/>
        <p class="text-center">很抱歉，你所要访问的内容不存在或因为某些原因被删除。</p>
        <p class="text-center">请检查您输入的网址是否正确，如有问题请联系本站站长。</p>
        <p class="text-center">再悄悄告诉你，使用侧边栏的搜索会非常棒哦!</p>
        <div>
          <h5 class="blog-line">热门文章</h5>
          <ul>
            <?php getHotView('5','display');?>
          </ul>               
        </div>
        <?php if($this->options->Ad4):?>
        <div id="ad-404">
          <h5 class="blog-line">广而告之</h5>
          <?php echo $this->options->Ad4;?>
        </div>
        <?php endif;?>
      </div>
    </div>
    <div class="col-md-4">
      <?php $this->need('sidebar.php'); ?>   
    </div>
  </div>  
</div>
<?php $this->need('footer.php'); ?> 
