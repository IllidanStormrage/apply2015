<!doctype html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>{{$title}}</title>
        <link rel="stylesheet" href="{{asset('css/amazeui.min.css')}}"/>
        <link rel="stylesheet" href="{{asset('css/admin.css')}}"/>
        <link rel="stylesheet" href="{{asset('css/app.css')}}"/>
    </head>

    <body>
	    <header class="am-topbar admin-header">
            <div class="am-topbar-brand">
                <strong>Amaze UI</strong> <small>后台管理模板</small>
            </div>
            <button class="am-topbar-btn am-topbar-toggle am-btn am-btn-sm am-btn-success am-show-sm-only" data-am-collapse="{target: '#topbar-collapse'}"><span class="am-sr-only">导航切换</span> <span class="am-icon-bars"></span></button>
            <div class="am-collapse am-topbar-collapse" id="topbar-collapse">
                <ul class="am-nav am-nav-pills am-topbar-nav am-topbar-right admin-header-list">
                    <li><a href="javascript:;"><span class="am-icon-envelope-o"></span> 收件箱 <span class="am-badge am-badge-warning">5</span></a></li>
                    <li class="am-dropdown" data-am-dropdown>
                        <a class="am-dropdown-toggle" data-am-dropdown-toggle href="javascript:;">
                            <span class="am-icon-users"></span> 管理员 <span class="am-icon-caret-down"></span>
                        </a>
                        <ul class="am-dropdown-content">
                            <li><a href="#"><span class="am-icon-user"></span> 资料</a></li>
                            <li><a href="#"><span class="am-icon-cog"></span> 设置</a></li>
                            <li><a href="#"><span class="am-icon-power-off"></span> 退出</a></li>
                        </ul>
                    </li>
                    <li class="am-hide-sm-only"><a href="javascript:;" id="admin-fullscreen"><span class="am-icon-arrows-alt"></span> <span class="admin-fullText">开启全屏</span></a></li>
                </ul>
            </div>
        </header>


        <div class="am-cf admin-main">
            <!-- sidebar start -->
            <div class="admin-sidebar am-offcanvas" id="admin-offcanvas">
                <div class="am-offcanvas-bar admin-offcanvas-bar">
                    <ul class="am-list admin-sidebar-list">
                        <li><a href="admin-index.html"><span class="am-icon-home"></span> 首页</a></li>
                        <li class="admin-parent">
                            <a class="am-cf" data-am-collapse="{target: '#collapse-nav'}"><span class="am-icon-file"></span> 页面模块<span class="am-icon-angle-right am-fr am-margin-right"></span></a>
                            <ul class="am-list am-collapse admin-sidebar-sub am-in" id="collapse-nav">
                                <li><a href="admin-user.html" class="am-cf"><span class="am-icon-check"></span> 个人资料<span class="am-icon-star am-fr am-margin-right admin-icon-yellow"></span></a></li>
                                <li><a href="admin-help.html"><span class="am-icon-puzzle-piece"></span> 帮助页</a></li>
                                <li><a href="admin-gallery.html"><span class="am-icon-th"></span> 相册页面<span class="am-badge am-badge-secondary am-margin-right am-fr">24</span></a></li>
                                <li><a href="admin-log.html"><span class="am-icon-calendar"></span> 系统日志</a></li>
                                <li><a href="admin-404.html"><span class="am-icon-bug"></span> 404</a></li>
                            </ul>
                        </li>
                        <li><a href="admin-table.html"><span class="am-icon-table"></span> 表格</a></li>
                        <li><a href="admin-form.html"><span class="am-icon-pencil-square-o"></span> 表单</a></li>
                        <li><a href="#"><span class="am-icon-sign-out"></span> 注销</a></li>
                    </ul>

                    <div class="am-panel am-panel-default admin-sidebar-panel">
                        <div class="am-panel-bd">
                          <p><span class="am-icon-bookmark"></span> 公告</p>
                          <p>时光静好，与君语；细水流年，与君同。—— Amaze UI</p>
                        </div>
                    </div>

                    <div class="am-panel am-panel-default admin-sidebar-panel">
                        <div class="am-panel-bd">
                          <p><span class="am-icon-tag"></span> wiki</p>
                          <p>Welcome to the Amaze UI wiki!</p>
                        </div>
                    </div>
                </div>
          </div>
          <!-- sidebar end -->



		
		
