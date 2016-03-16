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
        <div class="introduction" style="background-image: url('./UI/express3.jpg');"></div>
    </div>

    <!--  入驻企业部分  -->
    <div class="content bottomshadow autoPadding" style="height: 300px;">
        <div class="entrances">
            <div class="entrance fullwidth">
                <div class="wrap">
                    <a href="javascript:///">
                        <span class="title"> 入驻企业 </span>
                        <span class="more"> MORE </span>
                    </a>
                </div>
            </div>
        </div>
        <div class="companyIntro">
            <div class="intro">
                <div id="companysTag" class="express" style="background-image: url('./UI/companys/express2_06.jpg')"></div>
                <p class="title">东方麦田</p>商招商招商招商招商招商招商招商招商招商招商招商招商招商招商招商招商招商招商招商招商招商招商招商招商招商招商招商招商招商招商招商招商
                商招商招商商招商招商招商招商招商<span class="nowNav"> 查看更多>> </span>
            </div>
            <div class="links">
                <div class="blue">
                    <p class="zhaoshang-tag iconfont icon-zhengce"></p>
                    <p class="zhaoshang-tag">招商政策</p>
                    </div>
                <div class="red">
                    <p class="zhaoshang-tag iconfont icon-zhaoshang"></p>
                    <p class="zhaoshang-tag">招商对象</p>
                    </div>
                <div class="gren">
                    <p class="zhaoshang-tag iconfont icon-jiaru"></p>
                    <p class="zhaoshang-tag">申请入驻</p>
                    </div>
            </div>
        </div>

        <div id="companys" class="companys">
            <div class="company" style="background-image: url('./UI/companys/express2_06.jpg')"></div>
            <div class="company" style="background-image: url('./UI/companys/express2_08.jpg')"></div>
            <div class="company" style="background-image: url('./UI/companys/express2_10.jpg')"></div>
            <div class="company" style="background-image: url('./UI/companys/express2_15.jpg')"></div>
            <div class="company" style="background-image: url('./UI/companys/express2_16.jpg')"></div>
            <div class="company" style="background-image: url('./UI/companys/express2_17.jpg')"></div>
            <div class="company" style="background-image: url('./UI/companys/express2_22.jpg')"></div>
            <div class="company" style="background-image: url('./UI/companys/express2_23.jpg')"></div>
            <div class="company" style="background-image: url('./UI/companys/express2_24.jpg')"></div>
            <div class="company" style="background-image: url('./UI/companys/express2_06.jpg')"></div>
            <div class="company" style="background-image: url('./UI/companys/express2_08.jpg')"></div>
            <div class="company" style="background-image: url('./UI/companys/express2_10.jpg')"></div>
        </div>
        <script>
            var company = document.querySelector('.company');
            var companys = document.querySelector('#companys');
            var companysTag =document.querySelector('#companysTag');

            companys.addEventListener('click',function(e){
                console.log(e.target);
                if(e.target.className == "company"){
                    companysTag.style.backgroundImage = e.target.style.backgroundImage;
                }else{
                    console.log(e.target.className);
                }

            })
        </script>
    </div>
    <!-- 底部 -->
    <div class="footlink">
        <p>地址：湖南省长沙市中国（长沙）创新设计产业园 邮政编码：410001 联系电话：0731-88888888</p>
        <p>中国（长沙）创新设计产业园 版权所有 © 2016-2018 All Right Reserved</p>
    </div>
    <?php getFoot()?>
