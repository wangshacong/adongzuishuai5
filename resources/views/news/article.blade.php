<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
    <title>{{$content['title']}}</title>
    <meta name="keywords" content="联赛,出现,操作,爱小,猴子,任开球,开球,嘉宾,引发,争议" />
    <meta name="description" content="请嘉宾来为比赛开球在足坛并不是什么新鲜事，可如果担任开球嘉宾的不是人类而是动物，那会是怎样的一番景象呢？在上周末（11月26日）进行的日本J联赛第33轮，大阪樱花主场迎战神户胜利船的比赛开始之前，主队就别出心裁地请来了一只可爱的小猴子为比赛开球。" />
    <meta http-equiv="mobile-agent" content="format=xhtml;url=/m/view.php?aid=82">
    <script type="text/javascript">
        if (window.location.toString().indexOf('pref=padindex') != -1) {} else {
            if (/AppleWebKit.*Mobile/i.test(navigator.userAgent) || (
                    /MIDP|SymbianOS|NOKIA|SAMSUNG|LG|NEC|TCL|Alcatel|BIRD|DBTEL|Dopod|PHILIPS|HAIER|LENOVO|MOT-|Nokia|SonyEricsson|SIE-|Amoi|ZTE/
                    .test(navigator.userAgent))) {
                if (window.location.href.indexOf("?mobile") < 0) {
                    try {
                        if (/Android|Windows Phone|webOS|iPhone|iPod|BlackBerry/i.test(navigator.userAgent)) {
                            window.location.href = "/m/view.php?aid=82";
                        } else if (/iPad/i.test(navigator.userAgent)) {} else {}
                    } catch (e) {}
                }
            }
        }
    </script>
    <link rel="stylesheet" href="/css/style.css" type="text/css" />
    <link rel="stylesheet" href="/css/dashang.css" type="text/css" />
    <script type="text/javascript" src="/js/jquery.min.js"></script>
    <script type="text/javascript" src="/js/gotop.js"></script>
</head>

<body>
    @include('gong.head')
    <?php 
        $fenlei = \DB::Table('fenlei5s')->where('id',$content['fenlei_id'])->first();
    ?>
    <div class="weizhi"> 您的当前位置：<a href='/'>浙江实创</a> > <a href='/fenlei/{{$fenlei->id}}'>{{$fenlei->fenlei_name}}</a> >新闻 > </div>
    <div class="main1">
        <div class="left_1">
            <div class="g_con">
                <h1>{{$content['title']}}</h1>
                <div class="info"> <span>{{$content['create_time']}}</span><span> {{$content['zuozhe']}} </span>
                    <div class="share">
                        <div class="bdsharebuttonbox"> <a href="#" class="bds_more" data-cmd="more"></a><a href="#"
                                class="bds_qzone" data-cmd="qzone" title="分享到QQ空间"></a><a href="#" class="bds_tsina"
                                data-cmd="tsina" title="分享到新浪微博"></a><a href="#" class="bds_tqq" data-cmd="tqq" title="分享到腾讯微博"></a><a
                                href="#" class="bds_renren" data-cmd="renren" title="分享到人人网"></a><a href="#" class="bds_weixin"
                                data-cmd="weixin" title="分享到微信"></a> </div>
                        <script>
                            window._bd_share_config = {
                                "common": {
                                    "bdSnsKey": {},
                                    "bdText": "",
                                    "bdMini": "2",
                                    "bdMiniList": false,
                                    "bdPic": "",
                                    "bdStyle": "1",
                                    "bdSize": "16"
                                },
                                "share": {}
                            };
                            with(document) 0[(getElementsByTagName('head')[0] || body).appendChild(createElement(
                                    'script')).src =
                                'http://bdimg.share.baidu.com/static/api/js/share.js?v=89860593.js?cdnversion=' + ~
                                (-new Date() /
                                    36e5)];
                        </script>
                    </div>
                </div>
                <div class="bd_Article">
                        <?php echo $content['content']; ?>
                </div>
                <div class="b_box7">
                    <p> 相关推荐： </p>
                    <ul class="box">
                        <?php 
                            $tuijian = \DB::Table('article5s')->orderBy('id','desc')->where('fenlei_id',$content['fenlei_id'])->skip(5)->limit(2)->get();
                        ?>
                        @foreach($tuijian as $v)
                        <li><a href="/article/{{$v->id}}">{{$v->title}}</a></li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
        <div class="right_1">
            <div class="g_box2 u_2">
                <div class="t_1"> 最新资讯 </div>
                <?php 
                    $new_article = \DB::Table('article5s')->orderBy('id','desc')->where('fenlei_id',$content['fenlei_id'])->limit(10)->get();
                ?>
                <ul class="b_box3 u_1">
                    @foreach($new_article as $v)
                    <li><a href="/article/{{$v->id}}">{{$v->title}}</a></li>
                    @endforeach
                </ul>
            </div>

            <div class="g_box2 u_2">
                <div class="t_1"> 热门排行 </div>
                <ul class="b_box1">
                    <?php 
                        $hot_article = \DB::Table('article5s')->orderBy('dianji','desc')->where('fenlei_id',$content['fenlei_id'])->limit(15)->get();
                    ?>
                    @foreach($hot_article as $v)
                    <li><a href="/article/{{$v->id}}">{{$v->title}}</a></li>
                    @endforeach
                </ul>
            </div>
        </div>
        <div class="clear"> </div>
    </div>
    <link href="/css/common.css" rel="stylesheet">
    <link rel="stylesheet" href="/css/layout_yl.css">
    @include('gong.footer')
    <div class="foot"> Copyright &copy; www.tjscxw.com 版权所有<br /></div>

</body>

</html>