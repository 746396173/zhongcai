<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">

	<head>
		<meta charset="UTF-8">
		<meta name="renderer" content="webkit">
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
		<title>广彩管理平台</title>
		<link rel="stylesheet" href="/Static/Public/Cs/frame/layui/css/layui1.css">
		<link rel="stylesheet" href="/Static/Public/Cs/frame/static/css/style.css">
		<link rel="icon" href="/Static/Public/Cs/frame/static/image/code.png">
	</head>

	<body>

		<!-- layout admin -->
		<div class="layui-layout layui-layout-admin">
			<!-- 添加skin-1类可手动修改主题为纯白，添加skin-2类可手动修改主题为蓝白 -->
			<!-- header -->
			<div class="layui-header my-header">
				<a href="index.html">
					<!--<img class="my-header-logo" src="" alt="logo">-->
					<div class="my-header-logo">广彩管理平台</div>
				</a>
				<div class="my-header-btn">
					<button class="layui-btn layui-btn-small btn-nav"><i class="layui-icon">&#xe620;</i></button>
				</div>

				<!-- 顶部左侧添加选项卡监听 -->
				<!-- <ul class="layui-nav" lay-filter="side-top-left">
					<li class="layui-nav-item"><a href="javascript:;" href-url="demo/btn.html"><i class="layui-icon">&#xe621;</i>按钮</a></li>
		            <li class="layui-nav-item">
		                <a href="javascript:;"><i class="layui-icon">&#xe621;</i>基础</a>
		                <dl class="layui-nav-child">
		                    <dd><a href="javascript:;" href-url="demo/btn.html"><i class="layui-icon">&#xe621;</i>按钮</a></dd>
		                    <dd><a href="javascript:;" href-url="demo/form.html"><i class="layui-icon">&#xe621;</i>表单</a></dd>
		                </dl>
		            </li>
				</ul> -->

				<!-- 顶部右侧添加选项卡监听 -->
				<ul class="layui-nav my-header-user-nav" lay-filter="side-top-right">
					<li class="layui-nav-item">
					    <a href="javascript:;" href-url="<?php echo U('Pay/recharge');?>">充值<span class="layui-badge" id="recharge-count"><?php echo ($rCount); ?></span></a>
					</li>
					<li class="layui-nav-item" style="margin-right: 15px;">
					    <a href="javascript:;" href-url="<?php echo U('Pay/draw');?>">提现<span class="layui-badge" id="draw-count"><?php echo ($dCount); ?></span></a>
					</li>
					<li class="layui-nav-item">
						<a class="name" href="javascript:;"><i class="layui-icon">&#xe629;</i>主题</a>
						<dl class="layui-nav-child">
							<dd data-skin="0">
								<a href="javascript:;">默认</a>
							</dd>
							<dd data-skin="1">
								<a href="javascript:;">纯白</a>
							</dd>
							<dd data-skin="2">
								<a href="javascript:;">蓝白</a>
							</dd>
						</dl>
					</li>
					<li class="layui-nav-item">
						<a class="name" href="javascript:;"><img src="/Static/Public/Cs/frame/static/image/code.png" alt="logo"> 管理员 </a>
						<dl class="layui-nav-child">
							<dd>
								<a href="<?php echo U('Login/logout');?>"><i class="layui-icon">&#x1006;</i>退出</a>
							</dd>
						</dl>
					</li>
				</ul>

			</div>
			<!-- side -->
			<div class="layui-side my-side">
				<div class="layui-side-scroll">
					<!-- 左侧主菜单添加选项卡监听 -->
					<ul class="layui-nav layui-nav-tree" lay-filter="side-main">
						<?php if(is_array($list)): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$data): $mod = ($i % 2 );++$i;?><li class="layui-nav-item">
							<a href="javascript:;"><i class="layui-icon">&#xe628;</i><?php echo ($data['name']); ?></a>
							<dl class="layui-nav-child">
								<?php if(is_array($data['list'])): $i = 0; $__LIST__ = $data['list'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$value): $mod = ($i % 2 );++$i;?><dd>
									<a href="javascript:;" href-url="<?php echo ($value['url']); ?>"><i class="layui-icon">&#xe621;</i><?php echo ($value['name']); ?></a>
								</dd><?php endforeach; endif; else: echo "" ;endif; ?>
							</dl>
						</li>
						<!-- <li class="layui-nav-item layui-nav-itemed">
							<a href="javascript:;"><i class="layui-icon">&#xe628;</i><?php echo ($data['name']); ?></a>
							<dl class="layui-nav-child">
								<?php if(is_array($data['list'])): $i = 0; $__LIST__ = $data['list'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$value): $mod = ($i % 2 );++$i;?><dd>
									<a href="javascript:;" href-url="<?php echo ($value['url']); ?>"><i class="layui-icon">&#xe621;</i><?php echo ($value['name']); ?></a>
								</dd><?php endforeach; endif; else: echo "" ;endif; ?>
							</dl>
						</li> --><?php endforeach; endif; else: echo "" ;endif; ?>
					</ul>
				</div>
			</div>
			<!-- body -->
			<div class="layui-body my-body">
				<div class="layui-tab layui-tab-card my-tab" lay-filter="card" lay-allowClose="true">
					<ul class="layui-tab-title">
						<li class="layui-this" lay-id="1"><span><i class="layui-icon">&#xe638;</i>首页</span></li>
					</ul>
					<div class="layui-tab-content">
						<div class="layui-tab-item layui-show">
							<iframe id="iframe" src="<?php echo U('Index/home');?>" frameborder="0"></iframe>
						</div>
					</div>
				</div>
			</div>
			<!-- footer -->
			<div class="layui-footer my-footer">
				<p>
					<a href="http://vip-admin.com" target="_blank">广彩后台1.0</a>
				</p>
				<p>2017 © copyright Packy</p>
			</div>
		</div>
		<!-- 右键菜单 -->
		<div class="my-dblclick-box none">
			<table class="layui-tab dblclick-tab">
				<tr class="card-refresh">
					<td><i class="layui-icon">&#x1002;</i>刷新当前页面</td>
				</tr>
				<tr class="card-close">
					<td><i class="layui-icon">&#x1006;</i>关闭当前页面</td>
				</tr>
			</table>
		</div>
		<audio src="/Static/Public/Cs/frame/static/image/r.mp3" id="audio"></audio>
		<script type="text/javascript" src="/Static/Public/Cs/frame/layui/layui.js"></script>
		<script type="text/javascript" src="/Static/Public/Cs/frame/static/js/index.js"></script>
		<script type="text/javascript">
			layui.use(['layer'], function() {
				var layer = layui.layer, $ = layui.jquery;

				// 获取现待充值和待提现数
				var rCount = $('#recharge-count').text();
				var dCount = $('#draw-count').text();
				window.setInterval(function() {
					$.post("<?php echo U('Index/payWaiting');?>",{},function(res){
						if (res.data.rCount > rCount || res.data.dCount > dCount) {
							document.getElementById("audio").play();
						}
						// 赋值
						rCount = res.data.rCount;
						dCount = res.data.dCount;
						$('#recharge-count').text(rCount);
						$('#draw-count').text(dCount);
				    },'json');
				}, 2000);
			});
		</script>
	</body>

</html>