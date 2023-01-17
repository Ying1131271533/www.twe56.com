<?php /*a:2:{s:54:"D:\Web\www.wse.com\app\admin\view\category\update.html";i:1672803657;s:56:"D:\Web\www.wse.com\app\admin\view\public\base_layui.html";i:1672799469;}*/ ?>
<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<title>分类更新</title>
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
                        <th colspan="2">分类更新</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td width="150" align="right"><strong>分类标题：</strong></td>
                        <td>
                            <div class="layui-input-inline">
                                <input class="layui-input" type="text" name="title" placeholder="分类标题">
                            </div>
                            <div class="layui-input-inline">
                                <span style="color: red;">*</span> 例如：首页
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td width="150" align="right"><strong>链接：</strong></td>
                        <td>
                            <div class="layui-input-inline">
                                <input class="layui-input" type="text" name="url" placeholder="url">
                            </div>
                            <div class="layui-input-inline">
                                <span style="color: red;">*</span> 例如：/article
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td width="150" align="right"><strong>图标：</strong></td>
                        <td>
                            <div class="layui-upload">
                                <button type="button" class="layui-btn" id="upload-img">上传图片</button>
                                <div class="layui-upload-list">
                                  <img class="layui-upload-img" id="upload-preview">
                                  <input type="hidden" name="image">
                                </div>
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
                        <td width="150" align="right"><strong>链接打开方式：</strong></td>
                        <td>
                            <div class="layui-input-inline">
                                <input class="layui-input" type="text" name="target" placeholder="_blank">
                            </div>
                            <div class="layui-input-inline">
                                默认打开新窗口：_blank
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td width="150" align="right"><strong>显示：</strong></td>
                        <td>
                            <div class="layui-input-inline">
                                <input type="radio" name="show" value="1" title="是" checked>
                                <input type="radio" name="show" value="0" title="否">
                            </div>
                            <div class="layui-input-inline">
                                是否显示在导航
                            </div>
                        </td>
                    </tr>

                    <tr>
                        <td align="right"><strong>状态：</strong></td>
                        <td>
                            <div class="layui-input-inline">
                                <input type="radio" name="status" value="1" title="正常" checked>
                                <input type="radio" name="status" value="0" title="禁止">
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td align="right"></td>
                        <td>
                            <div class="layui-input-inline">
                                <button class="layui-btn" lay-submit lay-filter="formSubmit">立即提交</button>
                                <input type="hidden" name="parent_id" value="0">
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

    layui.use(['form', 'layer', 'upload'], function () {
        var form = layui.form,
            upload = layui.upload,
            layer = layui.layer;
        // 获取数据
        var data = ajax_read('/category');
        console.log(data);
        // 表单赋值
        form.val("form", data);
        // 图片
        $('#upload-preview').attr('src', data.image);
        // 上传图片
        layui_upload_image(upload);
        // 更新数据
        layui_ajax_update(form, '/category');
    });
</script>

<body>

</html>