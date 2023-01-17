<?php /*a:2:{s:54:"D:\Web\www.wse.com\app\admin\view\platform\update.html";i:1673409015;s:56:"D:\Web\www.wse.com\app\admin\view\public\base_layui.html";i:1672799469;}*/ ?>
<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<title>平台保存</title>
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
                        <th colspan="2">平台添加</th>
                    </tr>
                </thead>
                <tbody>

                    <tr>
                        <td width="150" align="right"><strong>平台标题：</strong></td>
                        <td>
                            <div class="layui-input-inline">
                                <input class="layui-input" type="text" name="title" placeholder="平台名称" style="width: 400px;">
                            </div>
                            <div class="layui-input-inline">
                                <span style="color: red;">*</span> 将会成为平台唯一标题
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td width="150" align="right"><strong>封面：</strong></td>
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
                        <td width="150" align="right"><strong>内容：</strong></td>
                        <td>    
                            <div class="layui-input-inline">
                                <!-- 加载编辑器的容器 -->
                                <script id="container" name="content" type="text/plain" style="height:300px;width:1000px;"></script>
                                <!-- 配置文件 -->
                                <script src="/static/common/lib/ueditor/ueditor.config.js" charset="utf-8"></script>
                                <!-- 编辑器源码文件 -->
                                <script src="/static/common/lib/ueditor/ueditor.all.js" charset="utf-8"></script>
                                <!-- 实例化编辑器 -->
                                <script type="text/javascript">
                                    var ue = UE.getEditor('container');
                                </script>
                            </div>
                        </td>
                    </tr>
                    
                    <tr>
                        <td align="right"></td>
                        <td>
                            <div class="layui-input-inline">
                                <button class="layui-btn" lay-submit lay-filter="formSubmit">立即提交</button>
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

    // 获取文章数据
    let platform = ajax_read('/platform');
    
    layui.use(['form', 'layer', 'upload', 'jquery'], function () {
        $ = layui.jquery;
        var form = layui.form,
            upload = layui.upload;

        // 赋值
        form.val("form", platform);
        form.val("form", {
            'content': HtmlUtil.htmlDecode(platform.desc.content)
        });
        // 图片赋值
        $('#upload-preview').attr('src', platform.image);
        // 上传图片
        layui_upload_image(upload);
        // 更新数据
        layui_ajax_update(form, '/platform');

    });

</script>

<body>

</html>