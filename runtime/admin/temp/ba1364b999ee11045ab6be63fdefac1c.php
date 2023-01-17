<?php /*a:2:{s:49:"D:\Web\www.wse.com\app\admin\view\role\index.html";i:1672383045;s:56:"D:\Web\www.wse.com\app\admin\view\public\base_layui.html";i:1672799469;}*/ ?>
<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<title>角色列表</title>
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
            <a href="/view/role_save" class="layui-btn layui-btn-danger">添加角色</a>
        </div>
    </div>
    <form class="layui-form" action="" method="post">
        <table class="layui-table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>角色名称</th>
                    <th>描述</th>
                    <th>管理员拥有</th>
                    <th>操作</th>
                </tr>
            </thead>
            <tbody>
            </tbody>
        </table>
    </form>
</div>

<script>

    let roleList = ajax_list('/role');
    // console.log(roleList);

    for (let value of roleList) {
        var admin = '';
        for(let val of value['admins']){
            admin += val['username'] + '、';
        }
        $('tbody').append(
            '<tr>'+
                '<td>'+value['id']+'</td>'+
                '<td>'+value['name']+'</td>'+
                '<td>'+value['explain']+'</td>'+
                '<td>'+ admin + '</td>'+
                '<td>'+
                    '<a href="javascript:update('+value['id']+');" class="layui-btn">'+
                        '<i class="layui-icon">&#xe642;</i> 修改'+
                    '</a>'+
                    '<a class="layui-btn layui-bg-black" href="javascript:;" onclick="del(this, '+value['id']+');">'+
                        '<i class="layui-icon">&#xe640;</i> 删除'+
                    '</a>'+
                    '<a class="layui-btn layui-bg-blue" href="javascript:;" onclick="auth('+value['id']+')">'+
                        '<i class="layui-icon">&#xe66e;</i> 权限'+
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
            area: ['700px', '500px'],
            content: "/view/role_update?id=" + id,
        });
    }

    function auth(id) {
        //修改信息
        layer.open({
            id: '1',
            type: 2,
            title: '角色ID:' + id,
            shadeClose: true,
            shade: [0.8, '#000000'],
            area: ['700px', '500px'],
            content: "/view/role_auth?id=" + id,
        });
    }

    function del(obj, id) {
        layui_form_delete(obj, '/role/' + id);
    }
</script>

<body>

</html>