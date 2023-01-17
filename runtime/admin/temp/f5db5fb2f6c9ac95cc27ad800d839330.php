<?php /*a:2:{s:53:"D:\Web\www.wse.com\app\admin\view\article\update.html";i:1672390904;s:56:"D:\Web\www.wse.com\app\admin\view\public\base_layui.html";i:1672799469;}*/ ?>
<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<title>文章保存</title>
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
                        <th colspan="2">文章添加</th>
                    </tr>
                </thead>
                <tbody>

                    <tr>
                        <td align="right"><strong>文章分类：</strong></td>
                        <td>
                            <div style="margin-bottom:10px;">
                                <div class="layui-input-inline">
                                    <select id="layui-select" name="article_cate_id">
                                        <option value="">请选择</option>
                                    </select>
                                </div>
                            </div>
                        </td>
                    </tr>

                    <tr>
                        <td width="150" align="right"><strong>文章标题：</strong></td>
                        <td>
                            <div class="layui-input-inline">
                                <input class="layui-input" type="text" name="title" placeholder="文章标题" style="width: 400px;">
                            </div>
                            <div class="layui-input-inline">
                                <span style="color: red;">*</span> 将会成为文章唯一标题
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td width="150" align="right"><strong>简介：</strong></td>
                        <td>
                            <div class="layui-form-item layui-form-text">
                                <div class="layui-input-inline">
                                    <textarea name="description" placeholder="请输入内容，不能超过255个字符" class="layui-textarea" rows="5" cols="60"></textarea>
                                </div>
                            </div>
                        </td>
                    </tr>
                    <!-- <tr>
                        <td width="150" align="right"><strong>作者：</strong></td>
                        <td>
                            <div class="layui-input-inline">
                                <input class="layui-input" type="text" name="author" placeholder="作者">
                            </div>
                        </td>
                    </tr> -->
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
                                <script id="container" name="content" type="text/plain" style="height:150px;width:1000px;"></script>
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
                    <!-- <tr>
                        <td width="150" align="right"><strong>链接：</strong></td>
                        <td>
                            <div class="layui-input-inline">
                                <input class="layui-input" type="text" name="url" placeholder="链接">
                            </div>
                        </td>
                    </tr> -->
                    <!-- <tr>
                        <td width="150" align="right"><strong>排序：</strong></td>
                        <td>
                            <div class="layui-input-inline">
                                <input class="layui-input" type="text" name="sort" placeholder="排序">
                            </div>
                        </td>
                    </tr> -->
                    
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
    
    // 获取文章分类数据
    var role = ajax_list('/article_cate');
    console.log(role);
    for (let value of role) {
        $('#layui-select').append('<option value="' + value['id'] + '">' + value['cate_name'] + '</option>');
    }

    // 获取文章数据
    let data = ajax_read('/article');
    
    layui.use(['form', 'layer', 'upload', 'jquery'], function () {
        $ = layui.jquery;
        var form = layui.form,
            upload = layui.upload,
            layer = layui.layer;

        // 赋值
        form.val("form", data);
        form.val("form", {
            'article_cate_id': data.cate.id,
            'content': HtmlUtil.htmlDecode(data.desc.content)
        });
        // 图片赋值
        $('#upload-preview').attr('src', data.image);
        // 上传图片
        layui_upload_image(upload);
        // 更新数据
        layui_ajax_update(form, '/article');

    });

</script>

<body>

</html>