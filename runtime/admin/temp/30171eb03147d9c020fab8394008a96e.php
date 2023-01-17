<?php /*a:2:{s:48:"D:\Web\www.wse.com\app\admin\view\role\save.html";i:1671692334;s:56:"D:\Web\www.wse.com\app\admin\view\public\base_layui.html";i:1671868177;}*/ ?>
<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<title>角色保存</title>
	<meta name="renderer" content="webkit">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="viewport"
		content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=0">

	<link href="/static/common/lib/layui/css/layui.css" rel="stylesheet">
	<!-- <link href="/static/admin/lib/layuiadmin/layui/css/layui.css" rel="stylesheet"> -->
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
<!-- js -->

</head>

<body>
	
<div class="layui-fluid">
    <div class="layui-form" lay-filter="form">
        <form action="" method="post" name="example">
            <table class="layui-table" lay-size="lg" lay-skin="line">
                <thead>
                    <tr>
                        <th colspan="2">角色添加</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td width="150" align="right"><strong>角色名称：</strong></td>
                        <td>
                            <div class="layui-input-inline">
                                <input class="layui-input" type="text" name="name" placeholder="角色名称">
                            </div>
                            <div class="layui-input-inline">
                                <span style="color: red;">*</span>  例如：用户管理员
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td width="150" align="right"><strong>角色说明：</strong></td>
                        <td>
                            <div class="layui-input-inline">
                                <input class="layui-input" type="text" name="explain" placeholder="角色说明">
                            </div>
                            <div class="layui-input-inline">
                                <span style="color: red;">*</span>  例如：拥有管理用户权限
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
                            </div>
                        </td>
                    </tr>
                </tbody>
            </table>
        </form>
    </div>
</div>

<script>
    layui.use(['form', 'layer'], function () {
        // 表单实例化
        var form = layui.form;
        
        // 保存
        layui_ajax_save(form, '/role');
        // layui_ajax_save(form, '/role', '/view/role_index');
    });
</script>


	<!-- 打开放大图片窗口 - 容器 -->
	<div id="akali" class="hide layui-layer-wrap" style="display: none;">
		<img src="" id="" />
	</div>
	<!-- 打开放大图片窗口 - js -->
	<script>
		function open_img(obj) {
			layui.use(['jquery', 'layer', 'table', 'flow', 'form'], function () {
				var table = layui.table
					, $ = layui.$
					, layer = layui.layer

				var src = obj.src;
				$('#akali img').attr('src', src);

				// 获取图片的真实宽高
				$('<img/>').attr("src", $('#akali img').attr("src")).load(function () {

					var pic_real_width = this.width > 1280 ? 1280 : this.width;   // Note: $(this).width() will not
					var pic_real_height = this.height; // work for in memory images.

					// 设置图片的宽度不能超过1280px
					$('#akali img').attr('width', pic_real_width);

					// 页面层-佟丽娅
					layer.open({
						type: 1,
						title: false,
						closeBtn: 0,
						area: pic_real_width + 'px',
						skin: 'layui-layer-nobg', //没有背景色
						shadeClose: true,
						content: $('#akali')
					});
				});
			});
		}
	</script>

	<body>

</html>