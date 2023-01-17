<?php /*a:2:{s:53:"D:\Web\www.wse.com\app\admin\view\admin\password.html";i:1671697688;s:57:"D:\Web\www.wse.com\app\admin\view\public\base_xadmin.html";i:1672727556;}*/ ?>
<!DOCTYPE html>
<html class="x-admin-sm">

<head>
    <meta charset="UTF-8">
    <title>更改密码 - 威速易一站式跨境供应链服务平台</title>
    <meta name="renderer" content="webkit">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport"
        content="width=device-width,user-scalable=yes, minimum-scale=0.4, initial-scale=0.8,target-densitydpi=low-dpi" />
    <link href="/static/admin/lib/xadmin/css/font.css" rel="stylesheet">
    <link href="/static/admin/lib/xadmin/css/xadmin.css" rel="stylesheet">
    <script src="/static/admin/lib/xadmin/lib/layui/layui.js" charset="utf-8"></script>
    <script src="/static/admin/lib/xadmin/js/xadmin.js" type="text/javascript"></script>
    <script src="/static/common/js/jquery.min.js" charset="utf-8"></script>
    <script src="/static/common/js/jquery.cookie.js" charset="utf-8"></script>
    <script src="/static/common/js/common.js" charset="utf-8"></script>
    <script src="/static/common/js/ajax_admin.js" charset="utf-8"></script>
    <script src="/static/common/js/ajax_layui.js" charset="utf-8"></script>
</head>
<script>
    // 验证登录
    isAdminLogin();
</script>

<!-- css -->
<!-- js -->


<body>
    <!-- 主体内容 -->
    
<div class="layui-fluid">
    <div class="layui-row">
        <form class="layui-form">
            <div class="layui-form-item">
                <label for="L_password" class="layui-form-label">
                    <span class="x-red">*</span>密码
                </label>
                <div class="layui-input-inline">
                    <input type="password" id="L_password" name="password" required="" lay-verify="password"
                        autocomplete="off" class="layui-input">
                </div>
                <div class="layui-form-mid layui-word-aux">
                    6到50个字符
                </div>
            </div>
            <div class="layui-form-item">
                <label for="L_password_confirm" class="layui-form-label">
                    <span class="x-red">*</span>确认密码
                </label>
                <div class="layui-input-inline">
                    <input type="password" id="L_password_confirm" name="password_confirm" required=""
                        lay-verify="password_confirm" autocomplete="off" class="layui-input">
                </div>
            </div>
            <div class="layui-form-item">
                <label for="" class="layui-form-label">
                </label>
                <button class="layui-btn" lay-filter="form" lay-submit="">
                    保存
                </button>
            </div>

            <input type="hidden" id="id" name="id" required="" value="">
        </form>
    </div>
</div>
<script>
    // 表单赋值
    $('#id').val(getParams()['id']);
    
    // layui
    layui.use(['form', 'layer'], function () {
        
        $ = layui.jquery;
        var form = layui.form,
            layer = layui.layer;
        
        // 自定义验证规则
        form.verify({
            password: [/(.+){6,50}$/, '密码必须6到50位'],
            password_confirm: function (value) {
                if ($('#L_password').val() != $('#L_password_confirm').val()) {
                    return '两次密码不一致';
                }
            }
        });

        // 更新数据
        layui_ajax_update(form, '/admin/password', layer, false);

    });
</script>

</body>

</html>