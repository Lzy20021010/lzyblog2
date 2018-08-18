<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
<?php if (isset($_GET['amp'])){; ?>
    <!doctype html>
    <html amp lang="zh">
      <head>
        <meta charset="utf-8">
        <script async src="https://cdn.ampproject.org/v0.js"></script>
        <title><?php $this->title() ?></title>
        <link rel="canonical" href="<?php $this->permalink() ?>" />
        <meta name="viewport" content="width=device-width,minimum-scale=1,initial-scale=1">
<meta name="description" content="<?php $this->description(); ?>" />
<meta name="keywords" content="<?php $this->tags(',', false, 'none'); ?>" />
        <script type="application/ld+json">
          {
            "@context": "http://schema.org",
            "@type": "BlogPosting",
            "headline": "<?php $this->title(); ?>",
            "mainEntityOfPage": "<?php $this->permalink() ?>",
            "author": {
              "@type": "Person",
              "name": "<?php $this->author(); ?>"
            },
            "datePublished": "<?php $this->date('F j, Y'); ?>",
            "dateModified": "<?php $this->date('F j, Y'); ?>",
            "image": {
              "@type": "ImageObject",
              "url": "<?php  print_r(get_post_img($this));?>",
              "width": 700,
              "height": 400
            },
             "publisher": {
              "@type": "Organization",
              "name": "<?php $this->options->title(); ?>",
              "logo": {
                "@type": "ImageObject",
                "url": "https://qqdie.com/tu/400x400l.png",
                "width": 200,
                "height": 200
              }
            },
            "description": "<?php $this->excerpt(60, '...'); ?>"
          }
        </script>
         <style amp-custom>*{margin:0;padding:0}html,body{height:100%}body{background:#fff;color:#666;font-size:14px;font-family:"-apple-system","Open Sans","HelveticaNeue-Light","Helvetica Neue Light","Helvetica Neue",Helvetica,Arial,sans-serif}::selection,::-moz-selection,::-webkit-selection{background-color:#2479CC;color:#eee}h1{font-size:1.5em}h3{font-size:1.3em}h4{font-size:1.1em}a{color:#2479CC;text-decoration:none}article{padding:85px 15px 0}article .entry-content{color:#444;font-size:16px;font-family:Arial,'Hiragino Sans GB',冬青黑,'Microsoft YaHei',微软雅黑,SimSun,宋体,Helvetica,Tahoma,'Arial sans-serif';-webkit-font-smoothing:antialiased;line-height:1.8;word-wrap: break-word;word-break: break-all;}article h1.title{color:#333;font-size:2em;font-weight:300;line-height:35px;margin-bottom:25px}article .entry-content p{margin-top:15px}article h1.title a{color:#333;transition:color .3s}article h1.title a:hover{color:#2479CC}article blockquote{background-color:#f8f8f8;border-left:5px solid #2479CC;margin-top:10px;overflow:hidden;padding:15px 20px}article code{background-color:#eee;border-radius:5px;font-family:Consolas,Monaco,'Andale Mono',monospace;font-size:80%;margin:0 2px;padding:4px 5px;vertical-align:middle}article pre{background-color:#f8f8f8;border-left:5px solid #ccc;color:#5d6a6a;font-size:14px;line-height:1.6;overflow:hidden;padding:0.6em;position:relative;white-space:pre-wrap;word-break:break-word;word-wrap:break-word}article table{border:0;border-collapse:collapse;border-spacing:0}article pre code{background-color:transparent;border-radius:0 0 0 0;border:0;display:block;font-size:100%;margin:0;padding:0;position:relative}article table th,article table td{border:0}article table th{border-bottom:2px solid #848484;padding:6px 20px;text-align:left}article table td{border-bottom:1px solid #d0d0d0;padding:6px 20px}article .copyright-info,article .amp-info{font-size:14px}article .expire-tips{background-color:#f5d09a;border:1px solid #e2e2e2;border-left:5px solid #fff000;color:#333;font-size:15px;padding:5px 10px;margin:20px 0px}article .post-info,article .entry-content .date{font-size:14px}article .entry-content blockquote,article .entry-content ul,article .entry-content ol,article .entry-content dl,article .entry-content table,article .entry-content h1,article .entry-content h2,article .entry-content h3,article .entry-content h4,article .entry-content h5,article .entry-content h6,article .entry-content pre{margin-top:15px}article pre b.name{color:#eee;font-family:"Consolas","Liberation Mono",Courier,monospace;font-size:60px;line-height:1;pointer-events:none;position:absolute;right:10px;top:10px}article .entry-content .date{color:#999}article .entry-content ul ul,article .entry-content ul ol,article .entry-content ul dl,article .entry-content ol ul,article .entry-content ol ol,article .entry-content ol dl,article .entry-content dl ul,article .entry-content dl ol,article .entry-content dl dl,article .entry-content blockquote > p:first-of-type{margin-top:0}article .entry-content ul,article .entry-content ol,article .entry-content dl{margin-left:25px}.header{background-color:#fff;box-shadow:0 0 40px 0 rgba(0,0,0,0.1);box-sizing:border-box;font-size:14px;height:60px;padding:0 15px;position:absolute;width:100%}.footer{font-size:.9em;padding:15px 0 25px;text-align:center;width:auto}.header h1{font-size:30px;font-weight:400;line-height:30px;margin:15px 0px}.menu-list li a,.menu-list li span{border-bottom:solid 1px #ededed;color:#000;display:block;font-size:18px;height:60px;line-height:60px;text-align:center;width:86px}.header h1 a{color:#333}.tex .hljs-formula{background:#eee8d5}</style>
<style amp-boilerplate>body{-webkit-animation:-amp-start 8s steps(1,end) 0s 1 normal both;-moz-animation:-amp-start 8s steps(1,end) 0s 1 normal both;-ms-animation:-amp-start 8s steps(1,end) 0s 1 normal both;animation:-amp-start 8s steps(1,end) 0s 1 normal both}@-webkit-keyframes -amp-start{from{visibility:hidden}to{visibility:visible}}@-moz-keyframes -amp-start{from{visibility:hidden}to{visibility:visible}}@-ms-keyframes -amp-start{from{visibility:hidden}to{visibility:visible}}@-o-keyframes -amp-start{from{visibility:hidden}to{visibility:visible}}@keyframes -amp-start{from{visibility:hidden}to{visibility:visible}}</style>
        <noscript><style amp-boilerplate>body{-webkit-animation:none;-moz-animation:none;-ms-animation:none;animation:none}</style></noscript>
      </head>
      <body>
      <header class="header"><div class="header-title"><h1><a href="/"><?php $this->options->title(); ?></a></h1></div></header>
      
      <article class="post"><h1 class="title"><?php $this->title(); ?></h1>
        <div class="entry-content">
        <?php  ampInit($this);?>
        <?php $this->content(); ?>
        </div>
        <p class="expire-tips">当前页面是本站的「<a href="//www.ampproject.org/zh_cn/">Google AMP</a>」版。查看和发表评论请点击：<a href="<?php $this->permalink() ?>">完整版 »</a></p>
    
      </article>
    
      </body>
    </html>
    <?php } else {?>
      <?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
      <?php $this->need('header.php'); ?>
      <div class="container">
        <div class="row">
          <div class="col-md-8">
            <div class="blog-border blog-background">
              <ol class="breadcrumb text-center">
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
              <div class="text-center">
                <h4 class="text-title" ><?php $this->title() ?></h4>
                <span class="text-warning index-span glyphicon glyphicon-time"><?php $this->date('Y-m-d H:i:s'); ?></span>
                <span class="text-warning index-span glyphicon glyphicon-user"><a href="<?php $this->author->permalink(); ?>">@<?php $this->author(); ?></a></span>
                <span class="text-warning index-span glyphicon glyphicon-folder-close"><?php $this->category(','); ?></span>
                <span class="text-warning index-span glyphicon glyphicon glyphicon-eye-open"><?php $this->viewsNum(); ?></span>
                <hr/>
              </div>
              <?php if($this->options->Ad2):?>
              <div id="ad-post">
                <?php echo $this->options->Ad2;?>
              </div>
              <hr/>
              <?php endif;?>
              <?php if(timeZoneold($this->date->timeStamp)):?>
                <div class="alert alert-warning" role="alert">
                  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                  </button> 
                  <span class="glyphicon glyphicon-info-sign"></span>
                  <span>本文可能 <b>超过2年没有更新</b>，今后内容也许不会被维护或者支持，部分内容可能具有时效性，涉及技术细节或者软件使用方面，本文不保证相应的技术更新和实践可操作性。</span>
                </div>
              <?php endif; ?>
              <div class="content"><?php $this->content(); ?></div>
              <hr/>   
              <blockquote>              
                <small>标签: <?php $this->tags(',', true, '本文章没有标签'); ?></small> 
                <small>本文链接：<?php $this->permalink() ?> (转载时请注明本文出处及文章链接)</small>
                <small>参考/转载来源：<a href="<?php $this->fields->siteurl();?>"><?php $this->fields->sitename();?></a> (本站文章除注明出处外，皆为作者原创文章)</small>
                <small>版权说明：本站使用<a href="https://creativecommons.org/licenses/by/4.0/deed.zh">「署名 4.0 国际」创作共享协议</a>，可自由转载、引用。但请署名作者且注明文章出处，谢谢。</small>
              </blockquote>
              <nav aria-label="...">
                <ul class="pager">
                  <li class="previous"><?php $this->thePrev('%s',''); ?></li>
                  <li class="next"><?php $this->theNext('%s',''); ?></li>
                </ul>
              </nav>
              <hr/>
              <div>
                <h5 class="blog-line">相关推荐</h5>
                <?php $this->related(5)->to($relatedPosts); ?>
                    <ul>
                    <?php while ($relatedPosts->next()): ?>
                    <li><a href="<?php $relatedPosts->permalink(); ?>" title="<?php $relatedPosts->title(); ?>"><?php $relatedPosts->title(); ?></a></li>
                    <?php endwhile; ?>
                </ul>
              </div>
              <div id="yiyan">
                <?php $yiyan = yiyan();echo $yiyan['hitokoto'];echo '&nbsp;&nbsp;——';echo $yiyan['from'];?>
              </div>
              <div id="dcontainer">
                <div class="donate"><p>创作不易，用心坚持，欢迎请博主喝一怀爱心咖啡！</p>
                      <p><a class="btn btn-danger" href="javascript:void(0)" onclick="dashangToggle()" title="打赏，支持一下" style="color:white">打赏支持</a></p>
                      <div class="hide_box"></div>
                      <div class="shang_box">
                        <a class="shang_close" href="javascript:void(0)" onclick="dashangToggle()" title="关闭"><img src="<?php $this->options->themeUrl('images/dashang/close.jpg'); ?>" alt="取消" /></a>
                         
                        <div class="shang_tit">
                          <p>感谢您的支持，我会继续努力的!</p>
                        </div>
                        <div class="shang_payimg">
                          <img src="<?php $this->options->themeUrl('images/dashang/alipayimg.png'); ?>" alt="扫码支持" title="扫一扫" />
                        </div>
                          <div class="pay_explain">扫码打赏，你说多少就多少</div>
                        <div class="shang_payselect">
                          <div class="pay_item checked" data-id="alipay">
                            <span class="radiobox"></span>
                            <span class="pay_logo"><img src="<?php $this->options->themeUrl('images/dashang/alipay.jpg'); ?>" alt="支付宝" /></span>
                          </div>
                          <div class="pay_item" data-id="weipay">
                            <span class="radiobox"></span>
                            <span class="pay_logo"><img src="<?php $this->options->themeUrl('images/dashang/wechat.jpg'); ?>" alt="微信" /></span>
                          </div>
                        </div>
                        <div class="shang_info">
                          <p>打开<span id="shang_pay_txt">支付宝</span>扫一扫，即可进行扫码打赏哦</p>
                     
                        </div>
                      </div>
                  </div> 
              </div>
              <hr/>
              <?php $this->need('comments.php'); ?>   
            </div>
        </div>
        <div class="col-md-4">
          <?php $this->need('sidebar.php'); ?>   
        </div>
        </div>
      </div>
      <?php $this->need('footer.php'); ?>
    <?php  }?>