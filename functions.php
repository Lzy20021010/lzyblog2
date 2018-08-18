<?php
if (!defined('__TYPECHO_ROOT_DIR__')) exit; 
function img_postthemb($thiz,$default_img){
    $content = $thiz->content;
    $ret = preg_match("/\<img.*?src\=\"(.*?)\"[^>]*>/i", $content, $thumbUrl);
    if($ret === 1 && count($thumbUrl) == 2){
        return $thumbUrl[1];
    }else{
        return $default_img;
    }
}
 function ampInit($archive)
    {
        if ($archive->is('single')) {
            $archive->content = str_replace('<img','<amp-img width="900" height="675" layout="responsive" ',$archive->content);
            $archive->content = str_replace('img>','amp-img>',$archive->content);
            $archive->content = str_replace('<!- toc end ->','',$archive->content);
            $archive->content = str_replace('javascript:content_index_toggleToc()','#',$archive->content);
        }
    
    }
    
    
    function get_post_img($archive)
    {
        $cid = $archive->cid;
        $db = Typecho_Db::get();
        $rs = $db->fetchRow($db->select('table.contents.text')
                                   ->from('table.contents')
                                   ->where('cid=?', $cid));
        $text = $rs['text'];
        $pattern = '/\<img.*?src\=\"(.*?)\"[^>]*>/i';
        $patternMD = '/\!\[.*?\]\((http(s)?:\/\/.*?(jpg|png))/i';
        $patternMDfoot = '/\[.*?\]:\s*(http(s)?:\/\/.*?(jpg|png))/i';
            if (preg_match($patternMDfoot, $text, $img)) {
                $img_url = $img[1];
            } else if (preg_match($patternMD, $text, $img)) {
                $img_url = $img[1];
            } else if (preg_match($pattern, $text, $img)) {
                preg_match("/(?:\()(.*)(?:\))/i", $img[0], $result);
                $img_url = $img[1];
            } else {
                $img_url ='https://holmesian.org/usr/themes/Holmesian/images/holmesian.png?type=markdown';
            }
            return $img_url;
    }
function timeZoneold($from){
    $now = new Typecho_Date(Typecho_Date::gmtTime());
    return $now->timeStamp - $from > 17520*60*60 ? true : false;
}
function yiyan($c = ''){
    $apiurl = 'https://v1.hitokoto.cn/?c='.$c.'&charset=utf8';//定义API的链接
    $json = file_get_contents($apiurl);//从API链接中采集内容
    $array = json_decode ($json ,$assoc = true);//将采集到的JSON形式信息转换为PHP数组形式信息
    return $array;//返回信息
}
function getHotView($limit = 10,$hr = 'nodisplay'){
    $db = Typecho_Db::get();
    $result = $db->fetchAll($db->select()->from('table.contents')
        ->where('status = ?','publish')
        ->where('type = ?', 'post')
        ->where('created <= unix_timestamp(now())', 'post') //添加这一句避免未达到时间的文章提前曝光
        ->limit($limit)
        ->order('viewsNum', Typecho_Db::SORT_DESC)
    );
    if($result){
        foreach($result as $val){           
            $val = Typecho_Widget::widget('Widget_Abstract_Contents')->push($val);
            $post_title = htmlspecialchars($val['title']);
            $permalink = $val['permalink'];
            if($hr == 'display'){
                echo '<li><a href="'.$permalink.'" title="'.$post_title.'" target="_blank">'.$post_title.'</a></li><hr id="hr-sidebar" />';                  
            }elseif($hr == 'nodisplay'){
                echo '<li><a href="'.$permalink.'" title="'.$post_title.'" target="_blank">'.$post_title.'</a></li>';
            }
        }
    }
}
function themeFields($reprint) {
    $sitename = new Typecho_Widget_Helper_Form_Element_Text('sitename', NULL, NULL, _t('参考/转载网站名称'), _t('如文章内容涉及参考/转载，请输入参考/转载网站名称'));
    $siteurl = new Typecho_Widget_Helper_Form_Element_Text('siteurl', NULL, NULL, _t('参考/转载网站文章链接'), _t('如文章内容涉及参考/转载，请输入参考/转载网站文章链接'));
    $reprint->addItem($sitename);
    $reprint->addItem($siteurl);
}
function themeConfig($form) {
	echo "<b>Lzy Techonology (2.5.5) 主题设置</b><br/>";
    echo "主题作者：Lzy20021010 https://www.lzy20021010.xyz";

    $sub = new Typecho_Widget_Helper_Form_Element_Text('sub', NULL, NULL, _t('网站副标题'), _t('在这里填入一行文字，作为首页Title的副标题'));
    $form->addInput($sub);

    $socialICP = new Typecho_Widget_Helper_Form_Element_Text('socialICP', NULL, NULL, _t('ICP备案号'), _t('请输入工业和信息化部ICP备案号'));
    $form->addInput($socialICP);

    $socialGA = new Typecho_Widget_Helper_Form_Element_Text('socialGA', NULL, NULL, _t('公安备案号'), _t('请输入公安网安部门备案号'));
    $form->addInput($socialGA);

    $socialGAURL = new Typecho_Widget_Helper_Form_Element_Text('socialGAURL', NULL, NULL, _t('公安查询结果'), _t('请输入公安网安部门备案查询结果链接'));
    $form->addInput($socialGAURL);

    $Notice = new Typecho_Widget_Helper_Form_Element_Textarea('Notice', NULL, NULL, _t('公告'), _t('请输入公告内容 (支持HTML)'));
    $form->addInput($Notice);

    $Ad1 = new Typecho_Widget_Helper_Form_Element_Textarea('Ad1', NULL, NULL, _t('首页公告下方广告位'), _t('请输入广告代码 (支持HTML)'));
    $form->addInput($Ad1);

    $Ad2 = new Typecho_Widget_Helper_Form_Element_Textarea('Ad2', NULL, NULL, _t('文章标题下方广告位'), _t('请输入广告代码 (支持HTML)'));
    $form->addInput($Ad2);

    $Ad3 = new Typecho_Widget_Helper_Form_Element_Textarea('Ad3', NULL, NULL, _t('侧边栏广告位'), _t('请输入广告代码 (支持HTML)'));
    $form->addInput($Ad3);

    $Ad4 = new Typecho_Widget_Helper_Form_Element_Textarea('Ad4', NULL, NULL, _t('404页面广告位'), _t('请输入广告代码 (支持HTML)'));
    $form->addInput($Ad4);

    $Friends = new Typecho_Widget_Helper_Form_Element_Textarea('Friends', NULL, NULL, _t('“朋友圈”功能'), _t('请输入“朋友圈”功能代码(代码格式同a标签)'));
    $form->addInput($Friends);

    $StatsCode = new Typecho_Widget_Helper_Form_Element_Textarea('StatsCode', NULL, NULL, _t('统计代码'), _t('请输入统计代码'));
    $form->addInput($StatsCode);

}
?>