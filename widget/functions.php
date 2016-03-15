<?php
/**
 * Created by PhpStorm.
 * User: chenkuan
 * Date: 16/3/15
 * Time: 上午9:30
 */

function getNewBox(){
    $args = func_get_args();
    if(count($args)>=2 && $args[1]=="floatright"){
        echo "<div class=\"box floatright\">";
    }else{
        echo "<div class=\"box\">";
    }
    foreach($args[0] as $news){
        echo '<div class="newslabel">
                    <div class="datepick">
                        <span class="day">'.$news['day'].'</span>
                        <span class="month">'.$news['month'].'</span>
                    </div>
                    <div class="newsdesc">
                        <p class="title">'.$news['title'].'</p>
                        <p class="desc">'.$news['desc'].'</p>
                    </div>
                </div>';
    }
    echo "</div>";
}

function getNav($navNow){


}

function getBanner($url){
    echo '<div id="banner" class="banner">';
    echo '<div class="pice" style="background-image: url(\''.$url.'\')"></div>';
    echo '</div>';
}

function getHead($navNow ,$logo){
    $navData = array(
        "园区首页",
        "走进园区",
        "新闻资讯",
        "入驻企业",
        "园区招商",
        "专题活动",
        "联系我们"
    );
    echo '<!DOCTYPE html>';
    echo '<html lang="en" xmlns="http://www.w3.org/1999/html">';
    echo '<head>';
    echo '    <meta charset="UTF-8">';
    echo '    <title>'.$navNow.'</title>';
    echo '    <link href="./CSS/default.css" rel="stylesheet" type="text/css">';
    echo '</head>';
    echo '<body>';

    echo '<!-- 头部 -->';
    echo '<div id="head" class="">';
    echo '<!-- 页眉 -->';
    echo '<div id="header" class="autoPadding">';
    echo '    <span><a class="udlnHover" href="#">0731-88888888</a></span>';
    echo '    <span><a class="udlnHover" href="#">Call Us</a></span>';
    echo '    <span><a class="udlnHover" href="#">人才招聘</a></span>';
    echo '</div>';
    echo '<!--导航-->';
    echo '<div id="nav" class="nav autoPadding">';
    echo '<ul>';

    foreach($navData as $nav){
        if($navNow == $nav){
            echo '<li><a class="pinkHover nowNav" href="#">'.$nav.'</a></li>';
        }else{
            echo '<li><a class="pinkHover" href="#">'.$nav.'</a></li>';
        }
    }

    echo '</ul>';
    echo '</div>';
    echo '<!--   logo     -->';
    echo '<div id="logo" class="logo">';
    echo '    <a href="javascript:///"><img src="'.$logo.'"></a>';
    echo '</div>';
    echo '</div>';

}

function getFoot(){
    echo '</body>';
    echo '</html>';
}