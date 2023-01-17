<?php /*a:2:{s:51:"D:\Web\www.wse.com\app\admin\view\slides\index.html";i:1673406223;s:56:"D:\Web\www.wse.com\app\admin\view\public\base_layui.html";i:1672799469;}*/ ?>
<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<title>列表</title>
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
	
<!-- css -->
<!-- js -->

</head>

<body>
	
<div class="layui-fluid">
  <div class="layui-row layui-col-md-offset0" style="margin-bottom:20px;">
    <div class="layui-col-md9">
      <a href="/view/slides_save" class="layui-btn layui-btn-danger">添加轮播图</a>
    </div>
  </div>
  <div class="layui-form">
    <div class="layui-input-inline">
      <input class="layui-input" type="text" name="id" value="" placeholder="ID" id="idReload">
    </div>
    <div class="layui-input-inline">
      <input class="layui-input" type="text" name="title" value="" placeholder="标题" id="titleReload">
    </div>
    <div class="layui-input-inline">
      <button class="layui-btn" id="search" data-type="reload">搜索<button>
    </div>
  </div>


  <table id="table_akali" lay-filter="table_akali"></table>
</div>

<script type="text/html" id="imageTpl">
  <img src="{{ d.image }}" width="70" style="cursor:pointer;" onclick="open_img(this)" />
</script>

<script type="text/html" id="createTimeTpl">
  <p>{{ d.create_time ? timestampToTime(d.create_time) : '--' }}</p>
</script>

<script type="text/html" id="statusTpl">
    <a onclick="ajax_change_status(this)"
    data-id="{{ d.id }}"
    data-value="{{ d.status }}"
    data-field="status"
    data-db="slides"
      class="layui-btn layui-btn-sm {{ d.status == 1 ? '' : 'layui-btn-danger' }}">
      {{ d.status == 1 ? '开启' : '关闭' }}
    </a>
</script>

<script type="text/html" id="operationTpl">
    <button class="layui-btn layui-btn-sm" lay-event="update">
			<i class="layui-icon">&#xe642;</i>
			修改
		</button>
    <button class="layui-btn layui-btn-sm layui-bg-black" lay-event="delete">
			<i class="layui-icon">&#xe640;</i>
			删除
		</button>
</script>

<script>
  layui.use(['jquery', 'layer', 'table', 'flow', 'form'], function () {
    var table = layui.table
      , $ = layui.$
      , layer = layui.layer
      , flow = layui.flow
      , form = layui.form

    // 第一个实例
    var ins1 = table.render({
      elem: '#table_akali'
      , url: '/slides' // 数据接口
      , method: 'GET'  // 可选项。HTTP类型
      , headers: { 'access-token': getToken() }
      , page: true // 开启分页
      , id: 'table_akali'
      , limit: 20
      , limits: [20, 100, 200, 500]
      , size: 'lg'
      , cols: [[ //表头
        { field: 'id', title: 'ID', width: 80, sort: true, fixed: 'left' }
        , { field: 'title', title: '标题', width: 400 }
        , { field: 'imgs', title: '图片', width: 150, templet: '#imageTpl' }
        , { field: 'sort', title: '排序', width: 120, sort: true }
        , { field: 'create_time', title: '创建时间', width: 180, sort: true, templet: '#createTimeTpl' }
        // 下面这里的ajax修改状态，在changeFieldValue那边的redis匹配不到key，删除不了缓存
        // , { field: 'status', title: '状态', width: 90, templet: '#statusTpl', fixed: 'right' }
        , { field: 'edit', title: '操作', minwidth: 160, templet: '#operationTpl', fixed: 'right' }
      ]]
    });



    var $ = layui.$, active = {
      reload: function () {
        var idReload = $('#idReload');
        var titleReload = $('#titleReload');

        //执行重载
        table.reload('table_akali', {
          where: {
            idReload: idReload.val(),
            titleReload: titleReload.val(),
          }
        });
      }
    };

    //点击事件
    $('#search').on('click', function () {
      var type = $(this).data('type');
      active[type] ? active[type].call(this) : '';
    });

    // 监听排序事件
    table.on('sort(table_akali)', function (obj) {
      console.log(obj.field);
      console.log(obj.type);
      console.log(this);

      table.reload('table_akali', {
        initSort: obj
        , where: {
          field: obj.field
          , order: obj.type
        }
      });

    });

    //监听工具条
    table.on('tool(table_akali)', function (obj) {
      var data = obj.data; // 获得当前行数据
      var layEvent = obj.event; // 获得 lay-event 对应的值（也可以是表头的 event 参数对应的值）

      // 修改
      if (layEvent === 'update') {
        layer.open({
          type: 2,
          title: '更新',
          content: '/view/slides_update?id=' + data.id,
          shadeClose: true,
          shade: [0.8, '#000000'],
          area: ['1280px', '600px'],
        });

        // 删除
      }else if (layEvent === 'delete') {
        layui_form_delete(this, '/slides/' + data.id);
      }
    });
  });
  
</script>

<body>

</html>