<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/html">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<style>
    html{font-size: 12px;font-family: Consolas, "Liberation Mono", Menlo, Courier, monospace;}
    body,ul,a{padding: 0;margin: 0;list-style: none;text-decoration: none;}
    div{border:1px dashed grey}

    #head{background-color: #fff;position: relative}
    .autoPadding{padding: 0 10%;width: 80%}
    .pinkHover{color: #202020;transition: all 1s ease}
    .pinkHover:hover{color: #e66766;transition: none}
    .udlnHover{color: #dadada;transition: all 1s ease}
    .udlnHover:hover{color:#fff;text-decoration:underline;text-shadow: 0 0 5px #fff;transition:all .5s ease}

    #header{margin-top: 20px;background-color: #202020;height: 40px;}
    #header>span{float: right;color: #fff;line-height: 40px;margin-left: 20px;}
    .nav{height: 50px;}
    .nav ul{float: right;height:100%;line-height: 50px;}
    .nav ul li{float: left;margin-left:20px;font-weight: 900;}

    .logo{position:absolute;left:10%;top:0}

    .banner{height: 200px;width: 100%;}
    .banner .pice{background: 50% 100% no-repeat;background-size: cover;height:100%}
    .content{margin-top: 60px;border-top: 1px solid #dadada;overflow: hidden}
    .content .box{width: 45%;overflow: hidden;margin-top: 0;float: left}
    .floatright{float: right!important;}
    .datepick{display: block;float: left;width: 12%;margin-right: 5%;}
    .datepick span{display: block;text-align: center;padding: 5px;}
    .datepick .day{font-size: 18px;font-weight: 900;color:#e66766 }
    .datepick .month{font-size: 14px;font-weight: 900;color:#656565;background-color: #dbdbdb}
    .newsdesc p{margin: 0;line-height: 20px;overflow: hidden}
    .newsdesc .title{color: #e66766;height: 20px;}
    .newsdesc .desc{color: #656565;height: 40px;}
</style>
<body>
    <!-- 顶部 -->
    <div id="head" class="">
        <!-- 页眉 -->
        <div id="header" class="autoPadding">
            <span><a class="udlnHover" href="#">0731-88888888</a></span>
            <span><a class="udlnHover" href="#">Call Us</a></span>
            <span><a class="udlnHover" href="#">人才招聘</a></span>
        </div>
        <!--    导航    -->
        <div id="nav" class="nav autoPadding">
            <ul>
                <li><a class="pinkHover" href="#">园区首页</a></li>
                <li><a class="pinkHover" href="#">走进园区</a></li>
                <li><a class="pinkHover" href="#">新闻资讯</a></li>
                <li><a class="pinkHover" href="#">入驻企业</a></li>
                <li><a class="pinkHover" href="#">园区招商</a></li>
                <li><a class="pinkHover" href="#">专题活动</a></li>
                <li><a class="pinkHover" href="#">联系我们</a></li>
            </ul>
        </div>
        <!--   logo     -->
        <div id="logo" class="logo">
            <a href="javascript:///"><img src="./UI/logo.jpg"></a>
        </div>
    </div>
    <!--  banner  -->
    <div id="banner" class="banner">
        <div class="pice" style="background-image: url('./UI/banner.jpg')"></div>
    </div>
    <!--  content  -->
    <div class="content autoPadding">
        <div class="box">
            <div class="entrance">
                媒体报道
            </div>
            <p class="newslabel">
                <div class="datepick">
                    <span class="day">25</span>
                    <span class="month">2月</span>
                </div>
                <div class="newsdesc">
                    <p class="title">图解：国务院常务会议--促进科技与经济深度融合</p>
                    <p class="desc">导读：国务院总理李克强2月17日主持召开国务院常务会议，听取
                        2015年全国两会建议提案办理工作回报，汇聚众智提高公共决策水
                        平；确定支持科技成果转移转化</p>
                </div>
            </p>

            <p class="newslabel">
            <div class="datepick">
                <span class="day">25</span>
                <span class="month">2月</span>
            </div>
            <div class="newsdesc">
                <p class="title">图解：国务院常务会议--促进科技与经济深度融合</p>
                <p class="desc">导读：国务院总理李克强2月17日主持召开国务院常务会议，听取
                    2015年全国两会建议提案办理工作回报，汇聚众智提高公共决策水
                    平；确定支持科技成果转移转化</p>
            </div>
            </p>

            <p class="newslabel">
            <div class="datepick">
                <span class="day">25</span>
                <span class="month">2月</span>
            </div>
            <div class="newsdesc">
                <p class="title">图解：国务院常务会议--促进科技与经济深度融合</p>
                <p class="desc">导读：国务院总理李克强2月17日主持召开国务院常务会议，听取
                    2015年全国两会建议提案办理工作回报，汇聚众智提高公共决策水
                    平；确定支持科技成果转移转化</p>
            </div>
            </p>
        </div>


        <div class="box floatright">
            <p class="newslabel">
            <div class="datepick">
                <span class="day">25</span>
                <span class="month">2月</span>
            </div>
            <div class="newsdesc">
                <p class="title">图解：国务院常务会议--促进科技与经济深度融合</p>
                <p class="desc">导读：国务院总理李克强2月17日主持召开国务院常务会议，听取
                    2015年全国两会建议提案办理工作回报，汇聚众智提高公共决策水
                    平；确定支持科技成果转移转化</p>
            </div>
            </p>

            <p class="newslabel">
            <div class="datepick">
                <span class="day">25</span>
                <span class="month">2月</span>
            </div>
            <div class="newsdesc">
                <p class="title">图解：国务院常务会议--促进科技与经济深度融合</p>
                <p class="desc">导读：国务院总理李克强2月17日主持召开国务院常务会议，听取
                    2015年全国两会建议提案办理工作回报，汇聚众智提高公共决策水
                    平；确定支持科技成果转移转化</p>
            </div>
            </p>

            <p class="newslabel">
            <div class="datepick">
                <span class="day">25</span>
                <span class="month">2月</span>
            </div>
            <div class="newsdesc">
                <p class="title">图解：国务院常务会议--促进科技与经济深度融合</p>
                <p class="desc">导读：国务院总理李克强2月17日主持召开国务院常务会议，听取
                    2015年全国两会建议提案办理工作回报，汇聚众智提高公共决策水
                    平；确定支持科技成果转移转化</p>
            </div>
            </p>
        </div>
    </div>

    <div class="content">
        <div class="box"></div>
        <div class="box"></div>
    </div>
</body>
</html>

