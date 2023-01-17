<?php /*a:2:{s:49:"D:\Web\www.wse.com\app\admin\view\slide\save.html";i:1672628436;s:56:"D:\Web\www.wse.com\app\admin\view\public\base_layui.html";i:1672383045;}*/ ?>
<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<title>轮播图保存</title>
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
	<script src="/static/common/js/ajax.js" charset="utf-8"></script>
	<script src="/static/common/js/ajax_layui.js" charset="utf-8"></script>
	<script>
		// 验证登录
		isAdminLogin();
	</script>
	
<!-- css -->
<link rel="stylesheet" href="/static/common/lib/eleTree/eleTree/eleTree.css" media="all">
<link rel="stylesheet" href="/static/common/lib/eleTree/layui/css/layui.css" media="all">
<!-- js -->

</head>

<body>
	
<div class="layui-fluid">
    <div class="layui-form" lay-filter="form">
        <form action="" method="post" name="example">
            <table class="layui-table" lay-size="lg" lay-skin="line">
                <thead>
                    <tr>
                        <th colspan="2">轮播图添加</th>
                    </tr>
                </thead>
                <tbody>

                    <tr>
                        <td align="right"><strong>轮播图分类：</strong></td>
                        <td>
                            <div class="layui-form">
                                <div class="layui-form-item">
                                    <!-- <label class="layui-form-label">输入框</label> -->
                                    <div class="layui-input-inline">
                                        <input type="text" name="category_id" required="" lay-verify="required" placeholder="请选择分类" readonly="" autocomplete="off" class="layui-input">
                                        <div class="eleTree ele5" lay-filter="data5"></div>
                                    </div>
                                </div>
                            </div>
                            <!-- <div style="margin-bottom:10px;">
                                <div class="layui-input-inline">
                                    <select id="layui-select" name="about_cate_id">
                                        <option value="">请选择</option>
                                    </select>
                                </div>
                            </div> -->
                        </td>
                    </tr>

                    <tr>
                        <td width="150" align="right"><strong>轮播图标题：</strong></td>
                        <td>
                            <div class="layui-input-inline">
                                <input class="layui-input" type="text" name="title" placeholder="轮播图名称"
                                    style="width: 400px;">
                            </div>
                            <div class="layui-input-inline">
                                <span style="color: red;">*</span> 将会成为轮播图唯一标题
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td width="150" align="right"><strong>简介：</strong></td>
                        <td>
                            <div class="layui-form-item layui-form-text">
                                <div class="layui-input-inline">
                                    <textarea name="description" placeholder="请输入内容，不能超过255个字符" class="layui-textarea"
                                        rows="5" cols="60"></textarea>
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
                                <script id="container" name="content" type="text/plain"
                                    style="height:300px;width:1000px;"></script>
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
                            </div>
                        </td>
                    </tr>
                </tbody>
            </table>
        </form>
    </div>
</div>

<script src="/static/common/lib/eleTree/layui/layui.js"></script>
<script>

    layui.config({
        base: "/static/common/lib/eleTree/layui/lay/mymodules/"
    }).use(['jquery', 'table', 'eleTree', 'code', 'form', 'slider'], function () {
        var $ = layui.jquery;
        var eleTree = layui.eleTree;
        var table = layui.table;
        var code = layui.code;
        var form = layui.form;
        var slider = layui.slider;

        var el5;
        // 获取分类数据
        var categoryList = ajax_list('/category');
        console.log(categoryList);
        $("input[name='category_id']").on("click", function (e) {
            e.stopPropagation();
            if (!el5) {
                el5 = eleTree.render({
                    elem: '.ele5',
                    data: categoryList,
                    request: {
                        name: "title",
                        key: "id",
                        children: "children",
                    },
                    defaultExpandAll: false, // 是否默认展开所有节点
                    expandOnClickNode: false, // 只有点箭头图标的时候才会展开或者收缩节点
                    highlightCurrent: true // 是否高亮当前选中节点，默认值是 false
                });
            }
            $(".ele5").toggle();
        })
        eleTree.on("nodeClick(data5)", function (d) {
            $("input[name='category_id']").val(d.data.currentData.label)
            $(".ele5").hide();
        })
        $(document).on("click", function () {
            $(".ele5").hide();
        })
    });

</script>

<script>

    // 获取轮播图分类数据
    // var role = ajax_list('/category');
    // console.log(role);
    // for (let value of role) {
    //     $('#layui-select').append('<option value="' + value['id'] + '">' + value['title'] + '</option>');
    // }

    layui.use(['form', 'layer', 'upload', 'jquery'], function () {
        $ = layui.jquery;
        var form = layui.form,
            upload = layui.upload,
            layer = layui.layer;

        // 建立编辑器
        // layedit.build('layedit');
        // 封面
        layui_upload_image(upload);
        // 保存
        layui_ajax_save(form, '/slide');

    });

</script>

<body>

</html>