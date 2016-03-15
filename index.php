<?php
    $news = array(
        array(
            'day' => '25',
            'month' => '2月',
            'title' => '图解：国务院常务会议--促进科技与经济深度融合',
            'desc' => '导读：国务院总理李克强2月17日主持召开国务院常务会议，听取
                        2015年全国两会建议提案办理工作回报，汇聚众智提高公共决策水
                        平；确定支持科技成果转移转化'
        ),
        array(
            'day' => '25',
            'month' => '2月',
            'title' => '图解：国务院常务会议--促进科技与经济深度融合',
            'desc' => '导读：国务院总理李克强2月17日主持召开国务院常务会议，听取
                        2015年全国两会建议提案办理工作回报，汇聚众智提高公共决策水
                        平；确定支持科技成果转移转化'
        ),
        array(
            'day' => '25',
            'month' => '2月',
            'title' => '图解：国务院常务会议--促进科技与经济深度融合',
            'desc' => '导读：国务院总理李克强2月17日主持召开国务院常务会议，听取
                        2015年全国两会建议提案办理工作回报，汇聚众智提高公共决策水
                        平；确定支持科技成果转移转化'
        )
    );
    require('./widget/functions.php')
?>
<?php getHead('园区首页','./UI/logo.jpg')?>
    <!--  banner  -->
    <?php getBanner('./UI/banner.jpg')?>
    <!--  content  -->
    <div class="content autoPadding">
        <div class="entrances">
            <div class="entrance floatleft">
                <div class="wrap">
                    <a href="javascript:///">
                        <span class="title"> 媒体报道 </span>
                        <span class="more"> MORE </span>
                    </a>
                </div>
            </div>
            <div class="entrance floatright"><div class="wrap">
                    <a href="javascript:///">
                        <span class="title"> 园区动态 </span>
                        <span class="more"> MORE </span>
                    </a>
                </div>
            </div>
        </div>
        <?php getNewBox($news)?>
        <?php getNewBox($news,"floatright")?>
    </div>

    <div class="content autoPadding">
        <div class="entrances">
            <div class="entrance floatleft">
                <div class="wrap">
                    <a href="javascript:///">
                        <span class="title"> 行业资讯 </span>
                        <span class="more"> MORE </span>
                    </a>
                </div>
            </div>
            <div class="entrance floatright"><div class="wrap">
                    <a href="javascript:///">
                        <span class="title"> 人物专访 </span>
                        <span class="more"> MORE </span>
                    </a>
                </div>
            </div>
        </div>
        <?php getNewBox($news)?>
        <?php getNewBox($news,"floatright")?>
    </div>

    <!-- 走进园区部分 -->
    <div class="content">
        <div class="entrances fullwidth">
            <div class="entrance fullwidth">
                <div class="wrap">
                    <a href="javascript:///">
                        <span class="title"> 走进园区 </span>
                        <span class="more"> MORE </span>
                    </a>
                </div>
            </div>
        </div>
    </div>

    <!--  入驻企业部分  -->
    <div class="content bottomshadow">
        <div class="entrances fullwidth">
            <div class="entrance fullwidth">
                <div class="wrap">
                    <a href="javascript:///">
                        <span class="title"> 入驻企业 </span>
                        <span class="more"> MORE </span>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <!-- 底部 -->
    <div class="footlink"></div>
    <?php getFoot()?>
