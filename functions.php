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
function themeFields($reprint) {
    $sitename = new Typecho_Widget_Helper_Form_Element_Text('sitename', NULL, NULL, _t('转载网站名称'), _t('如文章来源为转载，请输入转载网站名称'));
    $siteurl = new Typecho_Widget_Helper_Form_Element_Text('siteurl', NULL, NULL, _t('转载网站文章链接'), _t('如文章来源为转载，请输入转载网站文章链接'));
    $reprint->addItem($sitename);
    $reprint->addItem($siteurl);
}
function themeConfig($form) {
	echo "<b>Lzy Techonology (2.5.0) 主题设置</b><br/>";
    echo "主题作者：Lzy20021010 https://www.lzy20021010.xyz";

    $Notice = new Typecho_Widget_Helper_Form_Element_Textarea('Notice', NULL, NULL, _t('公告'), _t('请输入公告内容 (支持HTML)'));
    $form->addInput($Notice);

    $socialICP = new Typecho_Widget_Helper_Form_Element_Text('socialICP', NULL, NULL, _t('ICP备案号'), _t('请输入工业和信息化部ICP备案号'));
    $form->addInput($socialICP);

    $socialGA = new Typecho_Widget_Helper_Form_Element_Text('socialGA', NULL, NULL, _t('公安备案号'), _t('请输入公安网安部门备案号'));
    $form->addInput($socialGA);

    $socialGAURL = new Typecho_Widget_Helper_Form_Element_Text('socialGAURL', NULL, NULL, _t('公安查询结果'), _t('请输入公安网安部门备案查询结果链接'));
    $form->addInput($socialGAURL);

    $Friends = new Typecho_Widget_Helper_Form_Element_Textarea('Friends', NULL, NULL, _t('“朋友圈”功能'), _t('请输入“朋友圈”功能代码(代码格式同a标签)'));
    $form->addInput($Friends);

    $StatsCode = new Typecho_Widget_Helper_Form_Element_Textarea('StatsCode', NULL, NULL, _t('统计代码'), _t('请输入统计代码'));
    $form->addInput($StatsCode);

}
?>