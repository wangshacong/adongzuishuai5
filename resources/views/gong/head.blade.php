<!--导航菜单代码开始-->
<div id="nav" class="layout mt10">
	<div class="nav">
		<ul>
			<li><a href="/" target="_blank" title="首页">首页</a></li>
			@foreach($fenlei as $v)
			<li><a href="/fenlei/{{$v['id']}}" target="_blank" title="{{$v['fenlei_name']}}">{{$v['fenlei_name']}}</a></li>
			@endforeach
		</ul>
	</div>
</div>
<!--导航菜单代码结束-->