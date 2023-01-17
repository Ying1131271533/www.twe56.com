<?php /*a:2:{s:50:"D:\Web\www.wse.com\app\admin\view\node\update.html";i:1672383045;s:56:"D:\Web\www.wse.com\app\admin\view\public\base_layui.html";i:1672799469;}*/ ?>
<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<title>节点更新</title>
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
    <div class="layui-form" lay-filter="form">
        <form action="" method="post" name="example">
            <table class="layui-table" lay-size="lg" lay-skin="line">
                <thead>
                    <tr>
                        <th colspan="2">节点更新</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td width="150" align="right"><strong>节点名称：</strong></td>
                        <td>
                            <div class="layui-input-inline">
                                <input class="layui-input" type="text" name="name" placeholder="节点名称">
                            </div>
                            <div class="layui-input-inline">
                                <span style="color: red;">*</span> 例如：一级 admin 二级 admin/index
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td width="150" align="right"><strong>节点标题：</strong></td>
                        <td>
                            <div class="layui-input-inline">
                                <input class="layui-input" type="text" name="title" placeholder="节点标题">
                            </div>
                            <div class="layui-input-inline">
                                <span style="color: red;">*</span> 例如：管理员列表
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td width="150" align="right"><strong>视图节点：</strong></td>
                        <td>
                            <div class="layui-input-inline">
                                <input class="layui-input" type="text" name="view" placeholder="视图标题">
                            </div>
                            <div class="layui-input-inline">
                                例如：view/admin_save
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td width="150" align="right"><strong>层级：</strong></td>
                        <td>
                            <div class="layui-input-inline">
                                <input class="layui-input" type="text" name="level" placeholder="层级">
                            </div>
                            <div class="layui-input-inline">
                                层级从0开始
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td width="150" align="right"><strong>图标：</strong></td>
                        <td>
                            <div class="layui-input-inline">
                                <!-- <input class="layui-input" type="text" name="icon" placeholder="节点图标" > -->
                                <input class="layui-input" type="text" name="icon" placeholder="&amp;#xe6a7;" value="">
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td width="150" align="right"><strong>排序：</strong></td>
                        <td>
                            <div class="layui-input-inline">
                                <input class="layui-input" type="text" name="sort" placeholder="排序">
                            </div>
                            <div class="layui-input-inline">
                                排序：数值越小位置越前，最大65535
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td width="150" align="right"><strong>显示：</strong></td>
                        <td>
                            <div class="layui-input-inline">
                                <input type="radio" name="show" value="1" title="是">
                                <input type="radio" name="show" value="0" title="否">
                            </div>
                            <div class="layui-input-inline">
                                是否显示在左侧导航
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td width="150" align="right"><strong>刷新页面：</strong></td>
                        <td>
                            <div class="layui-input-inline">
                                <input type="radio" name="refresh" value="1" title="是" >
                                <input type="radio" name="refresh" value="0" title="否">
                            </div>
                            <div class="layui-input-inline">
                                左侧导航栏点击时，是否刷新页面
                            </div>
                        </td>
                    </tr>

                    <tr>
                        <td align="right"><strong>状态：</strong></td>
                        <td>
                            <div class="layui-input-inline">
                                <input type="radio" name="status" value="1" title="正常">
                                <input type="radio" name="status" value="0" title="禁止">
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td align="right"></td>
                        <td>
                            <div class="layui-input-inline">
                                <button class="layui-btn" lay-submit lay-filter="formSubmit">立即提交</button>
                                <input type="hidden" name="parent_id">
                                <input type="hidden" name="id">
                            </div>
                        </td>
                    </tr>
                </tbody>
            </table>
        </form>
    </div>
</div>

<script>

    // var id = getParams()['id'];
    // console.log(id);
    // $('input[name="id"]').val(id);

    layui.use(['form', 'layer'], function () {
        var form = layui.form;
        // 获取数据
        var data = ajax_read('/node');
        console.log(data);
        // 表单赋值
        form.val("form", data);

        // 更新数据
        layui_ajax_update(form, '/node');
    });
</script>

<body>

</html>