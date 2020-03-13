<!doctype html>
<html class="x-admin-sm">
<?php
session_start();

?>
    <head>
        <meta charset="UTF-8">
        <title>车辆管理系统</title>
        <meta name="renderer" content="webkit|ie-comp|ie-stand">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <meta name="viewport" content="width=device-width,user-scalable=yes, minimum-scale=0.4, initial-scale=0.8,target-densitydpi=low-dpi" />
        <meta http-equiv="Cache-Control" content="no-siteapp" />
        <link rel="stylesheet" href="./css/font.css">
        <link rel="stylesheet" href="./css/xadmin.css">
        <!-- <link rel="stylesheet" href="./css/theme5.css"> -->
        <script src="./lib/layui/layui.js" charset="utf-8"></script>
        <script type="text/javascript" src="./js/xadmin.js"></script>
        <!-- 让IE8/9支持媒体查询，从而兼容栅格 -->
        <!--[if lt IE 9]>
          <script src="https://cdn.staticfile.org/html5shiv/r29/html5.min.js"></script>
          <script src="https://cdn.staticfile.org/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->
        <script>
            // 是否开启刷新记忆tab功能
            // var is_remember = false;
        </script>
    </head>
    <body class="index">
        <!-- 顶部开始 -->
        <div class="container">
            <div class="logo">
                <a href="./admin.php">车辆管理系统</a></div>
           
            <ul class="layui-nav right" lay-filter="">
                <li class="layui-nav-item">
                    <a href="javascript:;">
        				<?php echo $_SESSION['username']; ?>
                    	</a>
                    <dl class="layui-nav-child">
                        <!-- 二级菜单 -->
                        <dd>
                            <a href="./index.html">退出</a></dd>
                    </dl>
                </li>
                <li class="layui-nav-item to-index">
            </ul>
        </div>
        <!-- 顶部结束 -->
        <!-- 中部开始 -->
        <!-- 左侧菜单开始 -->
        <div class="left-nav">
            <div id="side-nav">
                <ul id="nav">
                    <li>
                        <a href="javascript:;">
                            <i class="iconfont left-nav-li" lay-tips="用户管理">&#xe6b8;</i>
                            <cite>生产线信息录入</cite>
                            <i class="iconfont nav_right">&#xe697;</i></a>
                        <ul class="sub-menu">
                            <li>
                                <a onclick="xadmin.add_tab('公共信息录入','public.php')">
                                    <i class="iconfont">&#xe6a7;</i>
                                    <cite>公共信息录入</cite></a>
                            </li>
                            <li>
                                <a onclick="xadmin.add_tab('特殊信息录入','special.php')">
                                    <i class="iconfont">&#xe6a7;</i>
                                    <cite>特殊信息录入</cite></a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a onclick="xadmin.add_tab('特殊发动机录入','motor.php')">
                            <i class="iconfont left-nav-li" lay-tips="特殊发动机录入">&#xe723;</i>
                            <cite>特殊发动机录入</cite>
                            <i class="iconfont nav_right">&#xe697;</i></a>
                    </li>
                    <li>
                        <a onclick="xadmin.add_tab('计划用颜色配置','color.php')">
                            <i class="iconfont left-nav-li" lay-tips="计划用颜色配置">&#xe723;</i>
                            <cite>计划用颜色配置</cite>
                            <i class="iconfont nav_right">&#xe697;</i></a>
                    </li>
                    <li>
                        <a onclick="xadmin.add_tab('订单车信息管理','order.php')">
                            <i class="iconfont left-nav-li" lay-tips="订单车信息管理">&#xe723;</i>
                            <cite>订单车信息管理</cite>
                            <i class="iconfont nav_right">&#xe697;</i></a>
                    </li>
                </ul>
            </div>
        </div>
        <!-- <div class="x-slide_left"></div> -->
        <!-- 左侧菜单结束 -->
        <!-- 右侧主体开始 -->
        <div class="page-content">
            <div class="layui-tab tab" lay-filter="xbs_tab" lay-allowclose="false">
                <ul class="layui-tab-title">
                    <li class="home">
                        <i class="layui-icon">&#xe68e;</i>欢迎访问</li></ul>
                <div class="layui-unselect layui-form-select layui-form-selected" id="tab_right">
                    <dl>
                        <dd data-type="this">关闭当前</dd>
                        <dd data-type="other">关闭其它</dd>
                        <dd data-type="all">关闭全部</dd></dl>
                </div>
                <div class="layui-tab-content">
                    <div class="layui-tab-item layui-show">
                        <iframe src='log.php' frameborder="0" scrolling="yes" class="x-iframe"></iframe>
                    </div>
                </div>
                <div id="tab_show"></div>
            </div>
        </div>
        <div class="page-content-bg"></div>
        <style id="theme_style"></style>
        <!-- 右侧主体结束 -->
        <!-- 中部结束 -->
    </body>

</html>