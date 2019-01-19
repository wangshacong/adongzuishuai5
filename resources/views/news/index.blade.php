<!DOCTYPE html>
<!-- saved from url=(0019)http://yl.szhk.com/ -->
<html>

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

    <title>浙江实创新闻</title>
    <meta name="Keywords" content="最新娱乐新闻,香港娱乐新闻,八卦娱乐新闻,娱乐新闻,明星绯闻,电影,电视">
    <meta name="Description" content="深港在线娱乐新闻频道提供深圳香港两地的最新娱乐新闻资讯，包含明星绯闻、电影、电视等最新娱乐新闻。香港娱乐新闻是被关注的娱乐焦点，特别是香港八卦娱乐新闻，所以香港八卦娱乐新闻是娱乐频道的重点。">
    <link href="/css/common.css" rel="stylesheet">
    <link rel="stylesheet" href="/css/style.css" type="text/css" />
    <link rel="stylesheet" href="/css/layout_yl.css">
    <link rel="stylesheet" href="/css/dashang.css" type="text/css" />
    <script src="/js/hm.js"></script>
    <script type="text/javascript" src="/js/jquery-3.1.0.min.js"></script>
    <!--轮播JS-->
    <script type="text/javascript" src="/js/foucs.js"></script>
    <!--结束-->
    <script type="text/javascript" src="/js/jquery.tabso_yeso.js"></script>

</head>

<body>
    <!-- 新闻头部导航开始 -->

   @include('gong.head')

    <!--正文第一版面代码开始-->
    <div class="layout mt20">
        <!--焦点图开始-->
        <div class="mod_focus_show mr16" id="divimgplay">
            <?php 
                $lunbo_big = \DB::Table('article5s')->orderBy('id','desc')->where('news_pic','<>','')->limit(7)->get();
            ?>
            <ul class="mod_focus_pic" id="divimginfog_imgPlayer">
                @foreach($lunbo_big as $v)
                <li style="display: none;"><a href="/article/{{$v->title}}" title="{{$v->title}}" target="_blank">
                <img src='<?php if(mb_substr($v->news_pic,0,1) == "/")$v->news_pic="http://www.people.com.cn$v->news_pic"; echo $v->news_pic?>' alt=""></a></li>
                @endforeach
            </ul>
            <ul class="mod_focus_title" id="ptitleg_imgPlayer">
                <li class="current">
                    <h3><a target="_blank"></a></h3>
                    <p></p>
                </li>
            </ul>
            <div class="focus_switch"><a href="javascript:;" class="icon_prev"></a><a href="javascript:;" class="icon_next"></a></div>
            <ul class="mod_focus_list" id="divpageinfog_imgPlayer">
                @foreach($lunbo_big as $v)
                <li class=""><a href="/article/{{$v->id}}" target="_blank">
                <img src="{{$v->news_pic}}" alt="{{$v->title}}"><span class="border"></span><span class="mask"></span></a></li>
                @endforeach
            </ul>
        </div>
        <script type="text/javascript">
            foucsbox(2500);
        </script>
        <!--焦点图结束-->
        <!--娱乐热点开始-->
        <div class="w324">
            <div class="redian" id="redian">
                <div class="rdbt">
                    <h3 class="l">最新新闻</h3>
                </div>
                <div class="white">
                    <div class="newhot">
                        <ul>
                            <?php 
                                $new2_article = \DB::Table('article5s')->orderBy('id','desc')->limit(2)->get();
                                $new_article = \DB::Table('article5s')->orderBy('id','desc')->skip(2)->limit(4)->get();
                            ?>
                            @foreach($new2_article as $v)
                             <li>
                                <h1><a target="_blank" href="/article/{{$v->id}}">{{$v->title}}</a></h1>
                                <p><a target="_blank" href="http://yl.szhk.com/2019/01/18/283022067924199.html">近日，网曝一组向佐和郭碧婷手牵手的照</a></p>
                            </li>
                            @endforeach
                        </ul>
                    </div>
                    <div class="newhot1">
                        <ul>
                            @foreach($new_article as $v)
                            <li><a target="_blank" href="/article/{{$v->id}}">{{$v->title}}</a></li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!--娱乐热点结束-->
    </div>
    {{--  <!--明星电视综艺电影新闻-->
    <div class="layout mt10">
        <div class="w660">
            <div class="content_l">
                <div class="bk">
                    <h3><a href="http://yl.szhk.com/starnews/" target="_blank">明 星</a></h3>
                </div>
                <div class="tabcon01" id="mingxing">
                    <div class="sublist">
                        <ul>
                            <h4><a target="_blank" title="杨威一家五口为双胞胎女儿庆生 网友感叹基因强大" href="http://yl.szhk.com/2019/01/17/283022067924069.html">杨威一家五口为双胞胎女儿庆生
                                    网友感叹基</a></h4>
                            <li><span>▪</span><a href="http://yl.szhk.com/2019/01/16/283022067923888.html" target="_blank">秦海璐身穿裸金色薄纱长裙
                                    亮相亚洲彩虹盛典红毯</a></li>
                            <li><span>▪</span><a href="http://yl.szhk.com/2019/01/16/283022067923884.html" target="_blank">秦岚拍写真露精美锁骨
                                    气质优雅化身文艺女神</a></li>
                            <li><span>▪</span><a href="http://yl.szhk.com/2019/01/16/283022067923882.html" target="_blank">央视主持李思思素颜出镜直播
                                    皮肤白皙超显气质</a></li>
                            <li><span>▪</span><a href="http://yl.szhk.com/2019/01/16/283022067923839.html" target="_blank">Baby现身语言类节目终审
                                    穿长款羽绒服显腿长</a></li>
                            <li><span>▪</span><a href="http://yl.szhk.com/2019/01/16/283022067923753.html" target="_blank">金星戴大沿帽造型复古
                                    举止优雅贵妇范儿十足</a></li>
                            <li><span>▪</span><a href="http://yl.szhk.com/2019/01/16/283022067923740.html" target="_blank">吴镇宇被传耍大牌
                                    正面回应网友：请说话自重</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="content_r">
                <ul class="tabbtn" id="normaltab">
                    <li class="current"><a href="http://yl.szhk.com/tv/" target="_blank">电视</a></li>
                    <li><a href="http://yl.szhk.com/movie/" target="_blank">电影</a></li>
                </ul>
                <!--tabbtn end-->
                <div class="tabcon" id="normalcon">
                    <div class="sublist" style="display: block;">
                        <ul>
                            <h4><a target="_blank" title="各位国民女2是谁演?金敏贞个人资料介绍" href="http://yl.szhk.com/2019/01/17/283022067924132.html">各位国民女2是谁演?金敏贞个人资料介</a></h4>
                            <li><span>▪</span><a href="http://yl.szhk.com/2019/01/17/283022067924127.html" target="_blank">各位国民崔始源哪个角色?角色介绍</a></li>
                            <li><span>▪</span><a href="http://yl.szhk.com/2019/01/17/283022067924125.html" target="_blank">各位国民崔始源播出时间是几号?哪一台?剧情介绍</a></li>
                            <li><span>▪</span><a href="http://yl.szhk.com/2019/01/17/283022067924120.html" target="_blank">加油吧威基基第二季播出时间是几号?剧情介绍</a></li>
                            <li><span>▪</span><a href="http://yl.szhk.com/2019/01/17/283022067924109.html" target="_blank">绝世千金张稷扮演者是谁?刘天宝个人资料介绍</a></li>
                            <li><span>▪</span><a href="http://yl.szhk.com/2019/01/17/283022067924103.html" target="_blank">绝世千金钟世离扮演者是谁?李亭哲个人资料介绍</a></li>
                            <li><span>▪</span><a href="http://yl.szhk.com/2019/01/17/283022067924100.html" target="_blank">绝世千金花应云扮演者是谁?刘庭羽个人资料介绍</a></li>
                        </ul>
                    </div>
                    <!--tabcon end-->
                    <div class="sublist" style="display: none;">
                        <ul>
                            <h4><a target="_blank" title="青春励志电影《若如初见》10月19日登录爱奇艺独播" href="http://yl.szhk.com/2018/10/25/283013859794836.html">青春励志电影《若如初见》10月19日登录</a></h4>
                            <li><span>▪</span><a href="http://yl.szhk.com/2018/10/25/283013859794771.html" target="_blank">动画电影《阿里巴巴三根金发》2018年12月30日全国上映
                                </a></li>
                            <li><span>▪</span><a href="http://yl.szhk.com/2018/10/25/283013859794768.html" target="_blank">电影《昨日青空》首映礼
                                    王一博献声齐景轩助力导演圆梦</a></li>
                            <li><span>▪</span><a href="http://yl.szhk.com/2018/10/24/283013859794509.html" target="_blank">电影《爱不可及》发布剧照
                                    繁华过后是迷失还是安定</a></li>
                            <li><span>▪</span><a href="http://yl.szhk.com/2018/10/24/283013859794488.html" target="_blank">《波西米亚狂想曲》伦敦首映
                                    马雷克还原皇后主唱</a></li>
                            <li><span>▪</span><a href="http://yl.szhk.com/2018/10/24/283013859794464.html" target="_blank">电影《昨日青空》24城全国路演收官
                                    3万学生泪荐</a></li>
                            <li><span>▪</span><a href="http://yl.szhk.com/2018/10/24/283013859794459.html" target="_blank">《神奇动物2》发人物关系海报
                                    史诗大战迫在眉睫</a></li>
                        </ul>
                    </div>
                    <!--tabcon end-->
                </div>
                <!--tabcon end-->
                <script type="text/javascript">
                    $(document).ready(function ($) {
                        //默认选项卡切换
                        $("#normaltab").tabso({
                            cntSelect: "#normalcon",
                            tabEvent: "mouseover",
                            tabStyle: "normal"
                        });


                    });
                </script>
            </div>
        </div>
        <div class="w324">
            <div class="bk">
                <h3><a href="http://yl.szhk.com/zongyi/" target="_blank">综艺</a></h3>
            </div>
            <div class="bd mt16">
                <div class="img_part l">
                    <div id="img_partpic">
                        <a target="_blank" href="http://yl.szhk.com/2019/01/11/283022067923015.html"><img src="/images/1547197571250.jpg">
                        </a>
                    </div>
                    <p id="img_part1word">
                        <a target="_blank" href="http://yl.szhk.com/2019/01/11/283022067923015.html">《上新了·故宫》收官</a>
                    </p>
                </div>
                <div class="img_part r">
                    <div id="img_part2pic">
                        <a target="_blank" href="http://yl.szhk.com/2018/12/21/283018970912497.html"><img src="/images/1.jpg">
                        </a>
                    </div>
                    <p id="img_part2word">
                        <a target="_blank" href="http://yl.szhk.com/2018/12/21/283018970912497.html">王朝阳《演员的品格》</a>
                    </p>
                </div>
            </div>
            <div class="newnr mt10">
                <ul>
                    <li> <a target="_blank" href="http://yl.szhk.com/2019/01/17/283022067924011.html">鹿晗“御用作词人”是谁?
                            朱婧汐&amp;柳李组合介绍</a></li>
                    <li> <a target="_blank" href="http://yl.szhk.com/2019/01/17/283022067924000.html">青春有你陈涛是谁？青春有你陈涛个人资料介绍</a></li>
                    <li> <a target="_blank" href="http://yl.szhk.com/2019/01/17/283022067923996.html">青春有你楼炅择是谁？青春有你楼炅择个人资料介绍</a></li>
                </ul>
            </div>
        </div>
    </div>
    <!--明星电视综艺电影新闻结束-->  --}}


    <!--内容区代码开始-->
    <div id="content">

        <!--电视代码开始-->
        @foreach($fenlei as $v)
        <div id="content02" class="content">    
            <div class="bd">
                <div class="w660">
                    <div class="w274">
                        <h3><a target="_blank" href="/fenlei/{{$v->id}}">{{$v->fenlei_name}}</a></h3>
                        <?php 
                            $pic_article = \DB::Table('article5s')->orderBy('id','desc')->where('fenlei_id',$v->id)->where('news_pic','<>','')->limit(1)->get();
                            $article = \DB::Table('article5s')->orderBy('id','desc')->where('fenlei_id',$v->id)->skip(1)->limit(3)->get();
                            $article8 = \DB::Table('article5s')->orderBy('id','desc')->where('fenlei_id',$v->id)->skip(4)->limit(8)->get();
                        ?>
                        <div class="news_pic mt10">
                            @foreach($pic_article as $val)
                            <a href="/article/{{$val->id}}" target="_blank" class="news_PicStyle2">
                            <img src='<?php if(mb_substr($val->news_pic,0,1) == "/")$val->news_pic="http://www.people.com.cn$val->news_pic"; echo $val->news_pic?>' alt="">
                            <p class="Q-vBg"><span>{{$val->title}}</span></p></a>
                            @endforeach
                        </div>
                        <div class="dsj_bt">
                            <ul>
                                @foreach($article as $val)
                                <li><span>▪</span><a target="_blank" href="/article/{{$val->id}}">{{$val->title}}</a></li>
                                @endforeach
                            </ul>
                        </div>

                    </div>
                    <div class="w370">
                        <div class="xingda">
                            <ul>
                                @foreach($article8 as $val)
                                <li><a target="_blank" href="/article/{{$val->id}}">{{$val->title}}</a></li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="w324">
                    <h3><a target="_blank" href="/fenlei/{{$v->id}}">热点</a></h3>
                    <div class="redian xingda1">
                        <div class="white1">
                            <ul>
                                <?php 
                                    $hot_article = \DB::Table('article5s')->orderBy('dianji','desc')->where('fenlei_id',$v->id)->where('news_pic','<>','')->limit(4)->get();
                                ?>
                                @foreach($hot_article as $val)
                                <li><a target="_blank" href="/article/{{$val->id}}">
                                    <img src='<?php if(mb_substr($val->news_pic,0,1) == "/")$val->news_pic="http://www.people.com.cn$val->news_pic"; echo $val->news_pic; ?>' alt=""></a>       
                                    <div class="yl_tubt">
                                        <a target="_blank" title="{{$val->title}}" href="/article/{{$val->id}}"><span>{{mb_substr($val->title,0,10)}}</span>
                                        </a>
                                        <p>{{mb_substr(preg_replace('/<.*?>/','',$val->content),0,15)}}</p>
                                    </div>
                                </li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
        <!--电视代码结束-->
    </div>


    <!--底部代码开始-->
    @include('gong.footer')
</body>

</html>