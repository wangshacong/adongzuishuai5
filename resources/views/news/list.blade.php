<!DOCTYPE html>
<!-- saved from url=(0025)http://yl.szhk.com/music/ -->
<html>

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

    <title>{{$dangqian_fenlei['fenlei_name']}}</title>
    <meta name="Keywords" content="最新音乐,最新流行音乐, 2010最新流行音乐,最新伤感音乐,演唱会2010">
    <meta name="Description" content="深港在线音乐栏目提供各种最新音乐,最新流行音乐, 2010最新流行音乐,最新伤感音乐,演唱会2010等音乐资讯,想了解最新音乐就去深港在线音乐栏目.">
    <meta http-equiv="Cache-Control" content="no-transform ">
    <link href="/css/common.css" rel="stylesheet">
    <link rel="stylesheet" href="/css/layout_yl.css">
    <link rel="stylesheet" href="/css/pagination.css">
    <link rel="stylesheet" href="/css/r_list.css">
    <script src="/js/hm.js"></script>
    <script type="text/javascript" src="/js/jquery-3.1.0.min.js"></script>
    <script type="text/javascript" src="/js/jquery.pagination.js"></script>

</head>

<body>
    <div id="BAIDU_DUP_fp_wrapper" style="position: absolute; left: -1px; bottom: -1px; z-index: 0; width: 0px; height: 0px; overflow: hidden; visibility: hidden; display: none;"><iframe
            id="BAIDU_DUP_fp_iframe" src="/images/o.html" style="width: 0px; height: 0px; visibility: hidden; display: none;"></iframe></div>
    <!--顶部开始-->
    <div id="top"></div>
    @include('gong.head')
    <!--位置代码开始-->
    <div id="weatherItem">
        <span><b>您当前的位置：</b><a href="http://www.szhk.com/">首页</a> &gt;&gt; <a href="http://yl.szhk.com/"> 深港娱乐 </a>
            &gt;&gt; <a href="http://yl.szhk.com/music/">
                音乐</a>
        </span>
    </div>
    <!--位置代码开始-->
    <!--内容代码开始-->
    <div class="layout mt10">
        <!--左侧部分开始-->
        <div class="w680">
            <div class="channelNav1">
                <div role="navigation1" aria-labelledby="channel_nav_title" aria-owns="channelNavPart1" tabindex="0" id="navigation1">
                    
                </div>
            </div>
            
            <div class="content-left mb16">
                @foreach($article as $v)
                <div class="Q-tpList1">
                    <a target="_blank" class="pic" href="/article/{{$v->id}}">
                <img src='<?php if(mb_substr($v->news_pic,0,1) == "/")$v->news_pic="http://www.people.com.cn$v->news_pic"; echo $v->news_pic?>' alt=""></a></li>
                    </a><em class="f14 l24"><a target="_blank" class="linkto" href="/article/{{$v->id}}">{{$v->title}}</a>
                    </em>
                    <p class="l22">{{$v->create_time}}<a target="_blank" class="linkto_ys" href="/article/{{$v->id}}">浏览全文&gt;&gt;</a>
                    </p>
                </div>
                @endforeach
            </div>
            <div class="pages">
                    {{$article->appends(request()->all())->links()}}
            </div>
            <script type="text/javascript">
                $(document).ready(function () {
                    var pagenum = $(".allPage").text().replace(/,/g, "");
                    $("#Pagination").pagination(pagenum, {
                        callback: function (page_id) {
                            location.href =
                                "http://www.szhk.com/news/newlist/gb/28148690514744445/" + (
                                    parseInt(page_id) +
                                    parseInt(1)) + ".htm";
                        }
                    });
                });

                function gotoDesignated() {
                    var design_page = $("#designated").val();
                    if (design_page == 0 || design_page == null) {
                        return;
                    }
                    if (!isNaN(design_page)) {
                        location.href = "http://www.szhk.com/news/newlist/gb/28148690514744445/" + design_page + ".htm";
                    }
                }
            </script>
        </div>
        <!--左侧部分结束-->
        <!--右侧侧部分开始-->
        <div class="article_r">
            <div class="fl">
            </div>
            <div class="block2"></div>
            <div class="mt10 fl">
                <div class="look_bt">热门点击</div>
                <ul class="look_list">
                    <?php 
                        $hot_article = \DB::Table('article5s')->orderBy('dianji','desc')->where('fenlei_id',$dangqian_fenlei['id'])->limit(10)->get();
                    ?>
                    @foreach($hot_article as $v)
                    <li><a href="/article/{{$v->id}}" title="{{$v->title}}"
                            target="_blank">{{$v->title}}</a></li>
                    @endforeach
                </ul>
            </div>
            <div class="block2"></div>
            <div class="mt10 fl">

            </div>
            <div class="block2"></div>
            <div class="mt10 fl">
            </div>
            <div class="block2"></div>
            <div class="mt10 fl">
                <div class="look_bt">频道相关</div>
                <ul class="look_list">
                    <?php 
                        $xg_article = \DB::Table('article5s')->orderBy('id','desc')->where('fenlei_id',$dangqian_fenlei['id'])->limit(10)->get();
                    ?>
                    @foreach($xg_article as $v)
                    <li><a href="/article/{{$v->id}}" title="{{$v->title}}"
                            target="_blank">{{$v->title}}</a></li>
                    @endforeach
                </ul>
            </div>
            <div class="block2"></div>
        </div>
        <div style="display:none;">
            <script src="/images/z_stat.php" language="JavaScript"></script>
            <script src="/images/core.php" charset="utf-8" type="text/javascript"></script><a href="https://www.cnzz.com/stat/website.php?web_id=1008625"
                target="_blank" title="站长统计">站长统计</a>
        </div>


        <!--右侧部分结束-->
    </div>
    <!--内容代码结束-->
    @include('gong.footer')


</body>

</html>