<?php
use yii\helpers\Html;
use yii\web\JqueryAsset;
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="<?= Yii::$app->charset ?>"/>
    <link href="/css/util.css" rel="stylesheet" />
    <link href="/css/base.css" rel="stylesheet" />
    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>
    <div class="wrapper">
        <div id="top" class="column">
            <div class="nav">
                <div class="logo">
                    <a href="#"><img src="/img/icon/logo.png" height="80" width="80" alt=""/></a>
                </div>
                <div class="menu">
                   <ul>
                       <li><a class="fs-17" href="#">产品</a></li>
                       <li><a class="fs-17" href="#">观点</a></li>
                       <li><a class="fs-17" href="#">专栏</a></li>
                       <li><a class="fs-17" href="#">社区</a></li>
                   </ul>
                </div>
                
                <div class="search">
                    <div class="search-btn">
                       <a href=""><img src="/img/icon/search.png" height="30" width="30" alt=""/> </a>
                    </div>
                    <div class="field">
                        <input id="top-search-field" type="text" placeholder="搜索文章"/>
                    </div>
                </div>
                <div class="user fr">
                    <div class="info mt-20 ml-25">
                        <img class="fl ml-30 mt-10" src="/img/icon/user.png" width="20" height="20" alt=""/>
                        <a class="fs-14 orange fl ml-10" href="#">用户名</a> 
                    </div>
                    
                </div>
                <div class="item fr bg-orange">
                   <ul>
                        <li><img class="fl ml-52 mt-7" src="/img/icon/homepage.png" width="20" height="20" alt=""><a class="fl fs-14 sw pt-4 ml-17" href="#">我的主页</a></li>
                        <li><img class="fl ml-52 mt-7" src="/img/icon/notification.png" width="20" height="20" alt=""><a class="fl fs-14 sw pt-4 ml-17" href="#">通知中心</a></li>
                        <li><img class="fl ml-52 mt-7" src="/img/icon/settings.png" width="20" height="20" alt=""><a class="fl fs-14 sw pt-4 ml-17" href="#">个人设置</a></li>
                        <li><img class="fl ml-52 mt-7" src="/img/icon/save.png" width="20" height="20" alt=""><a class="fl fs-14 sw pt-4 ml-17" href="#">我的收藏</a></li>
                        <li><img class="fl ml-52 mt-7" src="/img/icon/log-out.png" width="20" height="20" alt=""><a class="fl fs-14 sw pt-4 ml-17" href="#">注销登录</a></li>
                    </ul> 
                </div>
                <!--<div class="login">
                    <a href="javascript:;" class="btn">登陆</a>
                </div>-->
            </div>
            <!--<div class="carousel">
                <div class="carousel-inner">
                    <div class="navigation-left">
                        
                    </div>

                </div>
            </div>-->
        </div>

        <?= $content ?>

        <div id="bottom" class="column footer">
            <div class="cont">
                <div class="left">
                   <div class="left-up">
                        <div class="about">
                            <label class="fs-18 orange">关于我们</label>
                            <a class="fr fs-13 wt" href="#">了解更多>></a>
                        </div>
                        <p class="lightgray fl fs-14 lp-2">是一家全球视野的前沿科技媒体，提供关于中国于美国的最前沿科技创业资讯，致力于成为沟通者两个全球最大互联网/移动市场的互联网社区。</p>
                   </div> 
                   <div class="left-down">
                        <div class="about">
                            <label class="fs-18 orange">联系我们</label>
                            <a class="fr fs-13 wt" href="#">详细信息</a>
                        </div>
                        <p class="lightgray fl fs-14 lp-2">电话：400-633-5715</br>邮件：hi@chuangxinsheji.com</p>
                   </div>
                </div>
                <div class="mid">
                   <div class="about">
                       <label class="fs-18 orange">加入我们</label>
                       <a class="fr fs-13 wt" href="#">了解更多>></a>
                   </div>
                   <p class="lightgray fl fs-14 lp-2">我们欢迎那些聪明、热衷科技创新、视野开阔、反传统思维、能双语工作、行动力强、对创造高质量的科技新闻和评论充满兴趣的家伙加入团队，无论你在那里（不过北京与硅谷优先）。</p>
                </div>
                <div class="right">
                        <div class="about">
                            <label class="fs-18 orange">合作伙伴</label>
                        </div>
                        <p class="lightgray fl fs-14 lp-2">光华设计基金会</br>中国工业设计协会</br>创新设计工程实验室</br></p> 
                </div>
            
        </div>    
        <div class="bottom">
            <p class="text fs-12 wt">&copy;2013-2014 创新设计 浙ICP备13036478号-5</p> 
        </div>    
    </div>
    <script src="/js/jquery-1.11.1.min.js"></script>
    <script src="/js/PCASClass.js" charset="gb2312"></script>
    <script>
        new PCAS("province, 请选择省份", "city, 请选择城市", "area, 请选择地区");
    </script>
    <script>
    $(function(){
        // post滑过效果 <span class="orange">#移动互联网&nbsp;#电子商务&nbsp;#融资</span>
        $(".post").mouseenter(function(){
            //加载POST右上角TAG
            var btndiv = document.createElement("div"); //btn
            $(btndiv).addClass("btn");
            $(this).append(btndiv);
            var hint = document.createElement("div"); // hint
            $(hint).addClass("hint");
            $(this).children(".btn").append(hint);
            var img_cont = document.createElement("p");
            $(img_cont).text("更多这类文章");
            $(this).children(".btn").children(".hint").append(img_cont);

            var icon_menu = document.createElement("div"); // icon-menu
            $(icon_menu).addClass("icon-menu");
            $(this).children(".btn").append(icon_menu);
            //TAG-1
            var icon_like = document.createElement("div");
            var img_icon_like = document.createElement("img");
            $(icon_like).addClass("icon icon-like fl");
            $(this).children(".btn").children(".icon-menu").append(icon_like);
            $(this).children(".btn").children(".icon-menu").children(".icon-like").append(img_icon_like);
            $(this).children(".btn").children(".icon-menu").children(".icon-like").children("img").attr({src:"/img/icon/btn-1.png"});
 
            //TAG-3
            var icon_add = document.createElement("div");
            var img_icon_add = document.createElement("img");
            $(icon_add).addClass("icon icon-add fl");
            $(this).children(".btn").children(".icon-menu").append(icon_add);
            $(this).children(".btn").children(".icon-menu").children(".icon-add").append(img_icon_add);
            $(this).children(".btn").children(".icon-menu").children(".icon-add").children("img").attr({src:"/img/icon/btn-1.png"});

            //TAG-3
            var icon_del = document.createElement("div");
            var img_icon_del = document.createElement("img");
            $(icon_del).addClass("icon icon-del fl");
            $(this).children(".btn").children(".icon-menu").append(icon_del);
            $(this).children(".btn").children(".icon-menu").children(".icon-del").append(img_icon_del);
            $(this).children(".btn").children(".icon-menu").children(".icon-del").children("img").attr({src:"/img/icon/delete.png"});

            $(".icon-add").click(function(){
                console.log("hehe");
            });

            //加载 #移动互联网 #电子商务 #融资 标签
            var label = document.createElement("span");
            $(label).addClass("orange").text("#移动互联网 ;#电子商务 ;#融资");
            $(this).addClass("bg-click");
            $(this).children(".btn").show();
        }),$(".post").mouseleave(function(){
            $(this).removeClass("bg-click");
            $(this).children(".btn").hide();
            $(this).children(".text").children("p:eq(1)").children("span").remove();
            $(this).children(".btn").remove();
        });
        $(".user").mouseenter(function(e){
                $(".user").addClass("bg-orange");
                $(".user a").removeClass("orange").addClass("sw");
                $(".item").show();
        }),$(".user").mouseleave(function(e){
            if(e.offsetX < 0 || e.offsetX > 200 || e.offsetY < 0){
                $(".user").removeClass("bg-orange");
                $(".user a").addClass("orange").removeClass("sw");
                $(".item").hide();
            }
        });
        
        $(".item").mouseleave(function(e){
            console.log(e);
            if(e.offsetX < 0 || e.offsetX > 200 || e.offsetY > 36){
                $(".user").removeClass("bg-orange");
                $(".user a").addClass("orange").removeClass("sw");
                $(".item").hide();
            }
        })
        $(".item li").each(function(){
            $(this).mouseover(function(){
                $(this).addClass("nav-active");
            });
            $(this).mouseout(function(){
                $(this).removeClass("nav-active");
            });
        });
        

    });
    </script>
<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
