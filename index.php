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
<!-- 头部 -->
<?php include './widget/head.php'?>
    <!-- 顶部 -->
    <?php include './widget/nav.php'?>
    <!--  content  -->
    <div class="content autoPadding">
        <?php getNewBox($news)?>
        <?php getNewBox($news,"floatright")?>
    </div>

    <div class="content autoPadding">
        <?php getNewBox($news)?>
        <?php getNewBox($news,"floatright")?>
    </div>
    <!-- 底部 -->
    <?php include './widget/foot.php'?>
