<?php /*a:3:{s:54:"D:\Web\www.wse.com\app\front\view\user\user_login.html";i:1673859595;s:50:"D:\Web\www.wse.com\app\front\view\layout\base.html";i:1673859866;s:52:"D:\Web\www.wse.com\app\front\view\layout\footer.html";i:1670492943;}*/ ?>
<!DOCTYPE html>
<html lang="zh-CN">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title>会员登录 - 威速易一站式跨境供应链服务平台</title>
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
<link rel="stylesheet" href="/static/front/css/style4.css">
<style>
  @-moz-keyframes nodeInserted {
    from {
      opacity: 0.99;
    }

    to {
      opacity: 1;
    }
  }

  @-webkit-keyframes nodeInserted {
    from {
      opacity: 0.99;
    }

    to {
      opacity: 1;
    }
  }

  @-o-keyframes nodeInserted {
    from {
      opacity: 0.99;
    }

    to {
      opacity: 1;
    }
  }

  @keyframes nodeInserted {
    from {
      opacity: 0.99;
    }

    to {
      opacity: 1;
    }
  }

  embed,
  object {
    animation-duration: .001s;
    -ms-animation-duration: .001s;
    -moz-animation-duration: .001s;
    -webkit-animation-duration: .001s;
    -o-animation-duration: .001s;
    animation-name: nodeInserted;
    -ms-animation-name: nodeInserted;
    -moz-animation-name: nodeInserted;
    -webkit-animation-name: nodeInserted;
    -o-animation-name: nodeInserted;
  }
</style>
<!-- js -->

</head>

<body>
    <!-- 头部文件载入 -->

    <div class="l_container">
        <div class="l_c_m">
            <!-- 主体内容 -->
            

<!-- 中间内容开始 -->

<!-- 头部 结束 -->
<div class="l_c_bar">
  <div class="l_c_center">
    <div style="float:left;">
      <a href="/">
        <img src="/static/front/images/hl.png" style="width:auto;max-width:90px;height:55px;"
          onerror="this.src='newpage/images/hl.png'">
      </a>
    </div>
    <div class="l_t">
      <strong>威速易供应链管理-会员登录</strong>
    </div>
    <div class="clear"></div>
  </div>
</div>
<div class="l_c_center">
  <div class="l_content">
    <!-- banner 开始 -->
    <div id="full-screen-slider">
      <ul id="slides">
        <li><img alt="" src="/static/front/images/lg_bj.png" width="520px" height="400px">
        </li>
      </ul>
    </div>
    <!-- banner 开始 -->

    <!-- 登录内容 开始 -->
    <form method="post" action="">
      <div class="form_main_box">
        <div class="form_main">
          <div class="f_l_title">登录</div>
          <ul class="f_l_cont">
            <li>
              <div class="int_ui">
                <input class="int-user input-value" id="username" type="text" name="username" value="" placeholder="请输入用户名" title="用户名">
              </div>
            </li>
            <li>
              <div class="int_ui">
                <input class="int-pwd input-value" id="password" type="password" name="password" placeholder="请输入密码" title="密码">
              </div>
            </li>
            <li>
              <div class="clear"></div>
              <span style="color:red;"></span>
            </li>
          </ul>
          <input type="submit" class="l_btn" value="登 录">
          <div class="l_f_reg"> 还没有帐号？<a href="/register">免费注册 &gt;</a></div>

        </div>
      </div>
    </form>
    <!-- 登录内容 结束 -->
  </div>
</div>
<script type="text/javascript" charset="utf-8">

  $("form").submit(function (e) {
    // 获取数据
    let data = get_input_value(true);
    if(!data) return false;
    console.log(data);
    // 发送
    $.ajax({
      type: "POST",
      contentType: "application/x-www-form-urlencoded",
      url: api_domain + '/user/login',
      data: data,
      success: function (res) {
        console.log(res);
        if (res.code !== config('success')) {
          layer.msg(res.msg, { icon: 2 });
          return false;
        }
        $.cookie('api_login_token', res.data.token, { expires: 100 * 365, path: '/' });
        layer.msg('登录成功！', { icon: 1, time: 500 }, function () {
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