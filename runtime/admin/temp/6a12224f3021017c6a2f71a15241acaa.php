<?php /*a:2:{s:49:"D:\Web\www.wse.com\app\admin\view\node\index.html";i:1673062987;s:56:"D:\Web\www.wse.com\app\admin\view\public\base_layui.html";i:1672799469;}*/ ?>
<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<title>威速易</title>
	<meta name="renderer" content="webkit">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="viewport"
		content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=0">

	<!-- <link href="/static/common/lib/layui/css/layui.css" rel="stylesheet"> -->
	<link href="/static/admin/lib/layuiadmin/layui/css/layui.css" rel="stylesheet">
	<link href="/static/admin/lib/layuiadmin/style/admin.css" rel="stylesheet">

	<!-- 加载layuijs -->
	<!-- <script src="/static/common/lib/layui/layui.js" charset="utf-8"></script> -->
	<script src="/static/admin/lib/layuiadmin/layui/layui.js" charset="utf-8"></script>

	<script src="/static/common/js/jquery.min.js" charset="utf-8"></script>
	<script src="/static/common/js/jquery.cookie.js" charset="utf-8"></script>
	<script src="/static/common/js/common.js" charset="utf-8"></script>
	<script src="/static/common/js/ajax_admin.js" charset="utf-8"></script>
	<script src="/static/common/js/ajax_layui.js" charset="utf-8"></script>
	<script>
		// 验证登录
		isAdminLogin();
	</script>
	
</head>

<body>
	
<div class="layui-fluid">
	<div class="layui-row layui-col-sm10 layui-col-md-offset0" style="margin-bottom:20px;">
		<div class="layui-col-md9"><a href="javascript:add(0);" class="layui-btn layui-btn-danger">添加节点</a></div>
	</div>

	<div class="layui-col-sm10 layui-col-md-offset1">
		<div id="test1" class="demo-tree"></div>
	</div>
</div>

<script>
	layui.use(['jquery', 'layer', 'table', 'tree'], function () {
		var table = layui.table
			, $ = layui.$
			, layer = layui.layer
			, tree = layui.tree

		// 获取数据
		let data = ajax_list('/node');
        data = get_chlidren(data);
		console.log(data);
		// return false;
		
		// 树形菜单
		tree.render({
			elem: '#test1'
			, data: data
			//,showCheckbox: true  // 是否显示复选框
			, id: 'demoId'  // 定义索引名称
			, spread: true  // 展开节点(依赖于 key 参数)
			, accordion: true //是否开启手风琴模式
			, edit: ['add', 'update', 'del'] // 操作节点的图标
			// , showLine: false // 是否开启连接线。默认 true，若设为 false，则节点左侧出现三角图标。

			// 节点被点击的回调
			, click: function (obj) {
				//layer.msg('状态：'+ obj.state + '<br>节点数据：' + JSON.stringify(obj.data)); //获取当前选中的节点数据
				//layer.alert(JSON.stringify(obj));
			}

			// 复选框被点击的回调
			, oncheck: function (obj) {
				console.log(obj.data); //得到当前点击的节点数据
				console.log(obj.checked); //得到当前节点的展开状态：open、close、normal
				console.log(obj.elem); //得到当前节点元素
				console.log(obj.hasChild); //当前节点下是否有子节点
			}

			// 节点增/删/改的回调
			, operate: function (obj) {
				var type = obj.type; //得到操作类型：add、edit、del
				var data = obj.data; //得到当前节点的数据
				var elem = obj.elem; //得到当前节点元素

				console.log(data);
				//Ajax 操作

				// 得到节点索引
				var id = data.id ? data.id : 0;
				var data_id = elem.attr('data-id');
				var pid = data_id ? data_id : 0;

				// 增加节点
				if (type === 'add') {
					// var title = elem.find('.layui-tree-txt').html();
					add(pid);

				} else if (type === 'update') { //修改节点
					// var title = elem.find('.layui-tree-txt').html();
					edit(id);

				} else if (type === 'del') //删除节点
				{
					del(elem, id);
				};
			}
		});

		// 自动触发修改
		$('.layui-icon-edit').click(function () {
			// 延时 触发失去焦点事件.
			setTimeout(function () { $('input').trigger("blur"); }, 100);
		});

	});


	// 添加
	function add(pid) {
		layer.open({
			type: 2,
			title: '添加节点',
			shadeClose: true,
			shade: [0.8, '#000000'],
			area: ['800px', '600px'],
			content: "/view/node_save?parent_id=" + pid,
		});
	}


	// 修改
	function edit(id) {
		layer.open({
			type: 2,
			title: '节点ID:' + id,
			shadeClose: true,
			shade: [0.8, '#000000'],
			area: ['800px', '600px'],
			content: "/view/node_update?id=" + id,
		});
	}

	// 删除
	function del(elem, id) {
		var result = ajax_delete('/node/' + id);
		if (!result) {
			setInterval(function () {
				location.reload();
			}, 2000);
		}
	}
</script>

<body>

</html>