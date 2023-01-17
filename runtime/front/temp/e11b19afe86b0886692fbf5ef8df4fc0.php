<?php /*a:3:{s:57:"D:\Web\www.wse.com\app\front\view\user\user_register.html";i:1673858739;s:50:"D:\Web\www.wse.com\app\front\view\layout\base.html";i:1673859856;s:52:"D:\Web\www.wse.com\app\front\view\layout\footer.html";i:1670492943;}*/ ?>
<!DOCTYPE html>
<html lang="zh-CN">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title>会员注册 - 威速易一站式跨境供应链服务平台</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="{block name=" description"} 俄罗斯海外仓、邮政小包、俄罗斯专线、海外仓、速卖通无忧线上仓、亚马逊FBA头程
        、速卖通无忧物流、国际eub,
        英国专线、海外仓、广州小包、佛山小包、东莞小包、wish邮、荷兰邮政小包、广州eub、带电邮政小包、欧洲专线、俄罗斯cdek专线、美国专线、国际快递、中东专线、东南亚专线、ups快递、dhl快递、美国海加派、欧洲空加派、欧洲海加派、美国空加派
        {/block}">
    <meta name="keywords" content="{block name=" keywords"}俄罗斯海外仓、邮政小包、俄罗斯专线、海外仓、速卖通无忧线上仓、亚马逊FBA头程 、速卖通无忧物流、国际eub,
        英国专线、海外仓、广州小包、佛山小包、东莞小包、wish邮、荷兰邮政小包、广州eub、带电邮政小包、欧洲专线、俄罗斯cdek专线、美国专线、国际快递、中东专线、东南亚专线、ups快递、dhl快递、美国海加派、欧洲空加派、欧洲海加派、美国空加派{/block}">

    <link rel="shortcut icon" href="favicon.ico">
    <link rel="canonical" href="<?php echo url(); ?>">

    <!-- css -->
    <link href="/static/common/lib/layui/css/layui.css" rel="stylesheet" type="text/css">

    <!-- js -->
    <script src="/static/front/js/jquery.min.js" type="text/javascript"></script>
    <script src="/static/common/lib/layer/layer.js" type="text/javascript" charset="utf-8"></script>
    <script src="/static/common/lib/layui/layui.js" type="text/javascript" charset="utf-8"></script>
    <script src="/static/common/js/jquery.cookie.js" charset="utf-8"></script>
    <script src="/static/common/js/common.js" charset="utf-8"></script>
    <script src="/static/common/js/ajax_layui.js" charset="utf-8"></script>
    <script src="/static/front/js/common.js" charset="utf-8"></script>
    <script src="/static/common/js/ajax_api.js" charset="utf-8"></script>
    <script>
        // 获取token
        var token = getApiToken();
        // 是否已登录过
        if (!empty(token)) {
            layer.msg('已登录！', { time: 1000, icon: 2}, function () {
                $(window).attr('location', '/');
            });
        }
    </script>
    
<!-- css -->
<link rel="stylesheet" href="/static/front/css/register.css">
<link rel="stylesheet" href="/static/front/css/style.css">
<link href="/static/front/css/chosen.css" rel="stylesheet">
<style type="text/css">
  .clearfix:after {
    content: "\20";
    display: block;
    height: 0;
    clear: both;
  }

  .imgItem img {
    width: 200px;
    height: 160px;
  }

  .imgItem label {
    width: 100%;
  }
</style>
<!-- js -->
<script src="/static/front/js/nav.js"></script>
<script src="/static/front/js/chosen.jquery.min.js"></script>

</head>

<body>
    <!-- 头部文件载入 -->

    <div class="l_container">
        <div class="l_c_m">
            <!-- 主体内容 -->
            

<!-- 中间内容开始 -->

<div class="l_c_bar">
  <div class="l_c_center">
    <div class="l_t">
      <strong>会员注册</strong>
    </div>
    <div class="clear"></div>
  </div>
</div>
<div class="l_c_center">
  <div class="l_content">
    <!-- banner 开始 -->
    <div id="full-screen-slider">
      <ul id="slides">
        <li><img alt="" src="/static/front/images/lg_bj.png" width="520px" height="400px"></li>
      </ul>
    </div>
    <!-- banner 开始 -->

    <!-- 注册内容 开始 -->
    <form action="" method="post" name="example">
      <div class="form_main_box" id="login-register">
        <div class="form_main">
          <div class="f_l_title">帐户信息</div>
          <ul class="f_l_cont">
            <li>
              <span class="label"><span class="red">*</span>用户名：</span>
              <div class="inputBox">
                <input type="text" id="username" name="username" class="text input-value" tabindex="1"
                  placeholder="英文或数字, 禁止中文" title="用户名">
              </div>
            </li>
            <li>
              <span class="label"><span class="red">*</span>设置密码：</span>
              <div class="inputBox">
                <input title="密码" type="password" id="password" name="password" class="text input-value" tabindex="2"
                  placeholder="6~20位" maxlength="50" minlength="6">
              </div>
            </li>
            <li>
              <span class="label"><span class="red">*</span>公司名：</span>
              <div class="inputBox">
                <input title="公司名" type="text" id="company_name" name="company_name" class="text input-value"
                  tabindex="3" placeholder="个人填姓名即可">
              </div>
            </li>
            <li style="margin-bottom: 5px;">
              <span class="label"><span class="red">*</span>联系方式：</span>
              <div class="inputBox">
                <input title="联系方式" type="text" id="contact" name="contact" class="text input-value" tabindex="4"
                  placeholder="务必填写联系方式,以便我司和您联系">
              </div>
              <div style="width: 330px;height: 22px; padding-left: 80px;padding-top: 5px;padding-right: 5px;">
                <input title="联系方式类型" type="radio" name="contact_type" class="input-value"
                  style="width: 15px;height: 15px;vertical-align:middle;" id="qq" value="qq" checked="checked">
                <label for="qq"><span style="margin-right:10px;margin-left:2px;">QQ</span></label>
                <input title="联系方式类型" type="radio" name="contact_type" class="input-value"
                  style="width: 15px;height: 15px;vertical-align:middle;" id="taobao" value="taobao">
                <label for="taobao"><span style="margin-right:10px;margin-left:2px;">淘宝</span></label>
                <input title="联系方式类型" type="radio" name="contact_type" class="input-value"
                  style="width: 15px;height: 15px;vertical-align:middle;" id="facebook" value="facebook">
                <label for="facebook"><span style="margin-right:10px;margin-left:2px;">FaceBook</span></label>
                <input title="联系方式类型" type="radio" name="contact_type" class="input-value"
                  style="width: 15px;height: 15px;vertical-align:middle;" id="line" value="line">
                <label for="line"><span style="margin-left:2px;">LINE</span></label>
                <input title="联系方式类型" type="radio" name="contact_type" class="input-value"
                  style="width: 15px;height: 15px;vertical-align:middle;" id="wechat" value="wechat">
                <label for="wechat"><span style="margin-left:2px;">微信</span></label>
              </div>
            </li>
            <li>
              <span class="label">邮箱：</span>
              <div class="inputBox">
                <input title="邮箱" type="text" id="email" name="email" class="text input-value" tabindex="4"
                  placeholder="请填写正确的邮箱地址">
              </div>
            </li>
            <li>
              <span class="label"><span class="red">*</span>联系电话：</span>
              <div class="inputBox">
                <input title="联系电话" type="text" id="telephone" name="telephone" class="text input-value" tabindex="5"
                  placeholder="手机号或固话均可">
              </div>
            </li>
            <li class="line">
              <span class="label">邀请码：</span>
              <input title="邀请码" type="text" id="invitation_code" name="invitation_code" class="text input-value"
                value="" placeholder="选填，邀请人信息" maxlength="12" tabindex="6">
            </li>

            <li class="line">
              <span class="label"><span class="red">*</span>验证码：</span>
              <input title="验证码" type="text" id="captcha" name="captcha" class="text input-value text-1  min-input"
                maxlength="4" tabindex="4">
              <img id="captcha_img" src="" onclick="get_captcha('captcha_img', 'uniqid');" title="看不清？点击更换">
              <input type="hidden" name="uniqid" title="uniqid" class="input-value">
            </li>

            <li class="line">
              <a id="toUploadFile">上传证件</a>
            </li>

            <!-- 文件div -->
            <div class="ui-dialog-cntainer hide" id="uploadDiv">
              <div class="ui-dialog-cover"></div>
              <div class="ui-dialog ui-dialog-lg" style="height: 350px;width: 900px;left: 42%;">
                <div class="ui-dialog-header">
                  <div class="ui-dialog-close">X</div>
                  <h3>证件上传</h3>
                </div>


                <div class="ui-dialog-body" style="height: 98%;">
                  <div class="panel panel-nobottom clearfix" style="padding-bottom: 10px;">
                    <div class="panel-body clearfix">

                      <div class="imgItem">
                        <div class="layui-upload">
                          <button type="button" class="layui-btn" id="license">上传营业执照</button>
                          <div class="layui-upload-list">
                            <img class="layui-upload-img" id="upload-preview">
                            <input title="营业执照" type="hidden" name="license" class="input-value">
                          </div>
                        </div>
                      </div>
                      <div class="imgItem">
                        <div class="layui-upload">
                          <button type="button" class="layui-btn" id="idcard_front">上传身份证正面照(国徽面)</button>
                          <div class="layui-upload-list">
                            <img class="layui-upload-img" id="upload-preview">
                            <input title="身份证正面照" type="hidden" name="idcard_front" class="input-value">
                          </div>
                        </div>
                      </div>
                      <div class="imgItem">
                        <div class="layui-upload">
                          <button type="button" class="layui-btn" id="idcard_back">上传身份证反面照(人物面)</button>
                          <div class="layui-upload-list">
                            <img class="layui-upload-img" id="upload-preview">
                            <input title="身份证反面照" type="hidden" name="idcard_back" class="input-value">
                          </div>
                        </div>
                      </div>
                      <div class="col-md-12">
                        <button type="button" style="margin-left: 646px;margin-top: 25px;"
                          class="btn btn-primary btn-w-xs" id="close">确认</button>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <li class="error">
              <div class="clear"></div>
              <span class="red"></span>
            </li>
            <li>
              <span class="label">&nbsp;</span>
              <button type="submit" class="l_btn">注 册</button>
            </li>
          </ul>

          <div class="l_f_reg">
            已有帐号？<a href="/login">立即登录</a>
          </div>
        </div>
      </div>
    </form>
    <!-- 注册内容 结束 -->
  </div>
</div>
<script type="text/javascript" charset="utf-8">

  // 上传图片
  upload_image('license');
  upload_image('idcard_front');
  upload_image('idcard_back');

  // 获取验证码
  get_captcha('captcha_img', 'uniqid');

  // 显示上传文件
  $('#toUploadFile').click(function () {
    $('#uploadDiv').removeClass('hide');
  });
  // 隐藏上传文件
  $('.ui-dialog-close, #close').click(function () {
    $('#uploadDiv').addClass('hide');
  });


  $("form").submit(function (e) {
    let data = get_input_value();
    console.log(data);
    $.ajax({
      type: "POST",
      contentType: "application/x-www-form-urlencoded",
      url: api_domain + '/user/register',
      data: data,
      success: function (res) {
        console.log(res);
        if (res.code !== config('success')) {
          layer.msg(res.msg, { icon: 2 });
          // 重新生成验证码，好像不需要
          get_captcha('captcha_img', 'uniqid');
          return false;
        }
        $.cookie('api_login_token', res.data.token, { expires: 100 * 365, path: '/' });
        layer.msg('注册成功！', { icon: 1, time: 1000 }, function () {
          $(window).attr('location', '/');
        });
      }
    });
    return false;
  });

</script>
<!--中间内容 结束-->


        </div>
    </div>

    <!-- 底部文件载入 -->
    
<!--底部 开始-->
<div class="l_footer">
    技术支持：<a href="http://www.sz56t.com/" target="_blank">华磊科技</a>&nbsp;&nbsp;&nbsp;服务热线：0755-32859534
    &nbsp;&nbsp;&nbsp;网址<a href="http://www.sz56t.com/" target="_blank">http://www.sz56t.com</a>
</div>
<!--底部 结束-->
</body>

</html>