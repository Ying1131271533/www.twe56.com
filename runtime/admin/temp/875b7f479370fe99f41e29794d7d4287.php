<?php /*a:2:{s:61:"D:\Web\www.wse.com\app\admin\view\customer_service\index.html";i:1672716789;s:56:"D:\Web\www.wse.com\app\admin\view\public\base_layui.html";i:1672799469;}*/ ?>
<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<title>客服</title>
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
            <a href="/view/customer_service_save" class="layui-btn layui-btn-danger">添加客服</a>
        </div>
    </div>
    <form class="layui-form" action="" method="post">
        <table class="layui-table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>客服名称</th>
                    <th>客服真实姓名</th>
                    <th>QQ号码</th>
                    <th>微信</th>
                    <th>手机号码</th>
                    <th>客服描述</th>
                    <th>排序</th>
                    <th>状态</th>
                    <th>创建时间</th>
                    <th>操作</th>
                </tr>
            </thead>
            <tbody>
            </tbody>
        </table>
    </form>
</div>

<script>

    let customerServiceList = ajax_list('/customer_service');
    console.log(customerServiceList);

    for (let value of customerServiceList) {
        var calss_name = value['status'] == 1 ? '' : 'layui-btn-danger';
        var status = value['status'] == 1 ? '开启' : '关闭';
        $('tbody').append(
            '<tr>'+
                '<td>'+value['id']+'</td>'+
                '<td>'+value['name']+'</td>'+
                '<td>'+value['real_name']+'</td>'+
                '<td>'+value['qq']+'</td>'+
                '<td>'+value['wechat']+'</td>'+
                '<td>'+value['phone']+'</td>'+
                '<td>'+value['description']+'</td>'+
                '<td>'+value['sort']+'</td>'+
                '<td>'+
                    '<a onclick="ajax_change_status(this)"'+
                        'data-id="'+value['id']+'"'+
                        'data-value="'+value['status']+'"'+
                        'data-field="status"'+
                        'data-db="customer_service"'+
                        'class="layui-btn layui-btn-sm '+calss_name+' }}">'+
                        status+
                    '</a>'+
                '</td>'+
                '<td>'+timestampToTime(value['create_time'])+'</td>'+
                '<td>'+
                    '<a href="javascript:update('+value['id']+');" class="layui-btn">'+
                        '<i class="layui-icon">&#xe642;</i> 修改'+
                    '</a>'+
                    '<a class="layui-btn layui-bg-black" href="javascript:;" onclick="del(this, '+value['id']+');">'+
                        '<i class="layui-icon">&#xe640;</i> 删除'+
                    '</a>'+
                '</td>'+
            '</tr>'
        );
    }

    function update(id) {
        //修改信息
        layer.open({
            id: '1',
            type: 2,
            title: '角色ID:' + id,
            shadeClose: true,
            shade: [0.8, '#000000'],
            area: ['800px', '600px'],
            content: "/view/customer_service_update?id=" + id,
        });
    }

    function del(obj, id) {
        layui_form_delete(obj, '/customer_service/' + id);
    }
</script>

<body>

</html>