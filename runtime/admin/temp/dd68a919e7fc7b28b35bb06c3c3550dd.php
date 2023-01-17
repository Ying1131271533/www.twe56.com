<?php /*a:2:{s:49:"D:\Web\www.wse.com\app\admin\view\admin\save.html";i:1671784882;s:56:"D:\Web\www.wse.com\app\admin\view\public\base_layui.html";i:1671247639;}*/ ?>
<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<title>管理员保存</title>
	<meta name="renderer" content="webkit">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="viewport"
		content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=0">

	<link href="/static/admin/lib/layuiadmin/layui/css/layui.css" rel="stylesheet">
	<link href="/static/admin/lib/layuiadmin/style/admin.css" rel="stylesheet">

	<!-- 加载layuijs -->
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
                        <th colspan="2">管理员添加</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td width="150" align="right"><strong>管理员名称：</strong></td>
                        <td>
                            <div class="layui-input-inline">
                                <input class="layui-input" type="text" name="username" placeholder="用户名">
                            </div>
                            <div class="layui-input-inline">
                                <span style="color: red;">*</span> 将会成为管理员唯一的登入名
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td width="150" align="right"><strong>真实名字：</strong></td>
                        <td>
                            <div class="layui-input-inline">
                                <input class="layui-input" type="text" name="real_name" placeholder="真实名字">
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td width="150" align="right"><strong>手机：</strong></td>
                        <td>
                            <div class="layui-input-inline">
                                <input class="layui-input" type="text" name="phone" placeholder="手机">
                            </div>
                            <div class="layui-input-inline">
                                联系手机
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td width="150" align="right"><strong>微信：</strong></td>
                        <td>
                            <div class="layui-input-inline">
                                <input class="layui-input" type="text" name="wechat" placeholder="微信">
                            </div>
                            <div class="layui-input-inline">
                                联系微信
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td align="right"><strong>密码：</strong></td>
                        <td>
                            <div class="layui-input-inline">
                                <input class="layui-input" type="password" name="password" placeholder="密码">
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td align="right"><strong>确认密码：</strong></td>
                        <td>
                            <div class="layui-input-inline">
                                <input class="layui-input" type="password" name="password_confirm" placeholder="确认密码">
                            </div>
                        </td>
                    </tr>

                    <tr>
                        <td align="right"><strong>角色：</strong></td>
                        <td id="role-td">
                            <div style="margin-bottom:10px;" class="role-div">
                                <div class="layui-input-inline">
                                    <select id="role-select">
                                        <option value="">请选择</option>
                                    </select>
                                </div>
                                <a href="javascript:;" class="layui-btn layui-btn-sm" onclick="add(this)">
                                    <i class="layui-icon">&#xe654;</i> 增加
                                </a>
                            </div>
                        </td>
                    </tr>

                    <tr>
                        <td align="right"><strong>登录状态：</strong></td>
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

    // 获取角色数据
    var role = ajax_list('/role');
    console.log(role);
    for (let value of role) {
        $('#role-select').append('<option value="' + value['id'] + '">' + value['name'] + '</option>');
    }

    layui.use(['form', 'layer'], function () {
        $ = layui.jquery;
        var form = layui.form,
            layer = layui.layer;

        // 自定义验证规则
        form.verify({
            username: function (value) {
                if (empty(value)) {
                    return '登录名不能为空！';
                }
                if (value.length < 2 || value.length > 25) {
                    return '登录名为2到25个字符！';
                }
            },
            password: [/(.+){6,50}$/, '密码必须6到50位'],
            password_confirm: function (value) {
                if ($('#L_password').val() != $('#L_password_confirm').val()) {
                    return '两次密码不一致';
                }
            }
        });

        // 保存
        layui_ajax_save(form, '/admin');

    });

    // 增加权限下拉框
    function add(obj) {
        var value = $('#role-select').val();
        var name = $('#role-select').find("option:selected").text();
        console.log(empty(value));
        console.log(name);
        
        if (empty(value)) {
            return false;
        }

        $('#role-td').append(
            '<div class="layui-input-inline" style="margin-right:10px;">' +
            '<button type="button" class="layui-btn">'+name+'</button>' +
            '<input type="hidden" name="roles[]" value="'+value+'">' +
            '<a href="javascript:;" class="layui-btn layui-bg-black" onclick="del(this)">删除</a>' +
            '</div>'
        );

        layui.use(['form'], function () {
            var form = layui.form
            form.render();
        });
    }

    function del(obj) {
        $(obj).parents('.layui-input-inline').remove();
        layui.use(['form'], function () {
            var form = layui.form
            form.render();
        });
    }

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