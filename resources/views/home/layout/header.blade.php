<!doctype html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <title>{{$title}}</title>
        {{--<link rel="stylesheet" href="{{asset('http://fonts.googleapis.com/css?family=Open+Sans:400italic,400,300,700')}}">--}}
        {{--<link rel="stylesheet" href="{{asset('http://fonts.googleapis.com/css?family=Oswald:400,700,300')}}">--}}
        <link rel="stylesheet" href="{{asset('home/vendors/font-awesome/css/font-awesome.min.css')}}">
        <link rel="stylesheet" href="{{asset('home/vendors/bootstrap/css/bootstrap.min.css')}}">
        <!--LOADING STYLESHEET FOR PAGE-->
        <link rel="stylesheet" href="{{asset('home/vendors/intro.js/introjs.css')}}">
        <link rel="stylesheet" href="{{asset('home/vendors/calendar/zabuto_calendar.min.css')}}">
        <link rel="stylesheet" href="{{asset('home/vendors/sco.message/sco.message.css')}}">
        <link rel="stylesheet" href="{{asset('home/vendors/intro.js/introjs.css')}}">
        <!--Loading style vendors-->
        <link rel="stylesheet" href="{{asset('home/vendors/animate.css/animate.css')}}">
        <link rel="stylesheet" href="{{asset('home/vendors/jquery-pace/pace.css')}}">
        <link rel="stylesheet" href="{{asset('home/vendors/iCheck/skins/all.css')}}">
        <link rel="stylesheet" href="{{asset('home/vendors/jquery-notific8/jquery.notific8.min.css')}}">
        <link rel="stylesheet" href="{{asset('home/vendors/bootstrap-daterangepicker/daterangepicker-bs3.css')}}">
        <!--Loading style-->
        {{--<link rel="stylesheet" href="{{asset('home/css/themes/style1/orange-blue.css" class="default-style')}}">--}}
        <link rel="stylesheet" href="{{asset('home/css/themes/style1/orange-blue.css')}}" id="theme-change" class="style-change color-change">
        <link rel="stylesheet" href="{{asset('home/css/style-responsive.css')}}">
        @yield('singlePageCss');
    </head>

    <body class=" ">
        <div>
            <!--BEGIN BACK TO TOP-->
            <a id="totop" href="javascript:void">
                <i class="fa fa-angle-up"></i>
            </a>
            <!--END BACK TO TOP-->

            <!--BEGIN TOPBAR-->
            <div id="header-topbar-option-demo" class="page-header-topbar">
                <nav id="topbar" class="navbar navbar-default navbar-static-top" style="margin-bottom: 0; z-index: 2;" role="navigation">
                    <div class="navbar-header">
                        <button type="button" data-toggle="collapse" data-target=".sidebar-collapse" class="navbar-toggle">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <a id="logo" href="index.html" class="navbar-brand">
                            <span class="fa fa-rocket"></span>
                            <span class="logo-text" style="font-size: 20px;">学生组织管理系统</span>
                            <span style="display: none" class="logo-text-icon">µ</span>
                        </a>
                    </div>

                    <div class="topbar-main">
                        <a id="menu-toggle" href="#">
                            <i class="fa fa-bars"></i>
                        </a>
                        <ul class="nav navbar-nav">
                            <li class="active"><a href="index.html">Dashboard</a>
                            </li>
                        </ul>
                        <!-- 顶部搜索 -->
                        <form id="topbar-search">
                            <div class="input-group">
                                <input type="text" placeholder="Search..." class="form-control" /><span class="input-group-btn"><a href="javascript:;" class="btn submit"><i class="fa fa-search"></i></a></span>
                            </div>
                        </form>
                        <!-- -->
                        <ul class="nav navbar navbar-top-links navbar-right mbn">
                            <li class="dropdown">
                                <a data-hover="dropdown" href="#" class="dropdown-toggle">
                                    <i class="fa fa-bell fa-fw"></i>
                                    <span class="badge badge-green">3</span>
                                </a>
                                <ul class="dropdown-menu dropdown-alerts">
                                    <li>
                                        <p>You have 14 new notifications</p>
                                    </li>
                                    <li>
                                        <div class="dropdown-slimscroll">
                                            <ul>
                                                <li><a href="extra-user-list.html" target="_blank"><span class="label label-blue"><i class="fa fa-comment"></i></span>New Comment<span class="pull-right text-muted small">4 mins ago</span></a>
                                                </li>
                                                <li><a href="extra-user-list.html" target="_blank"><span class="label label-violet"><i class="fa fa-twitter"></i></span>3 New Followers<span class="pull-right text-muted small">12 mins ago</span></a>
                                                </li>
                                                <li><a href="extra-user-list.html" target="_blank"><span class="label label-pink"><i class="fa fa-envelope"></i></span>Message Sent<span class="pull-right text-muted small">15 mins ago</span></a>
                                                </li>
                                                <li><a href="extra-user-list.html" target="_blank"><span class="label label-green"><i class="fa fa-tasks"></i></span>New Task<span class="pull-right text-muted small">18 mins ago</span></a>
                                                </li>
                                                <li><a href="extra-user-list.html" target="_blank"><span class="label label-yellow"><i class="fa fa-upload"></i></span>Server Rebooted<span class="pull-right text-muted small">19 mins ago</span></a>
                                                </li>
                                                <li><a href="extra-user-list.html" target="_blank"><span class="label label-green"><i class="fa fa-tasks"></i></span>New Task<span class="pull-right text-muted small">2 days ago</span></a>
                                                </li>
                                                <li><a href="extra-user-list.html" target="_blank"><span class="label label-pink"><i class="fa fa-envelope"></i></span>Message Sent<span class="pull-right text-muted small">5 days ago</span></a>
                                                </li>
                                            </ul>
                                        </div>
                                    </li>
                                    <li class="last"><a href="extra-user-list.html" class="text-right">See all alerts</a>
                                    </li>
                                </ul>
                            </li>

                            <li class="dropdown">
                                <a data-hover="dropdown" href="#" class="dropdown-toggle">
                                    <i class="fa fa-envelope fa-fw"></i>
                                    <span class="badge badge-orange">7</span>
                                </a>
                                <ul class="dropdown-menu dropdown-messages">
                                    <li>
                                        <p>You have 14 new messages</p>
                                    </li>
                                    <li>
                                        <div class="dropdown-slimscroll">
                                            <ul>
                                                <li><a href="email-view-mail.html" target="_blank"><span class="avatar"><img src="" alt="" class="img-responsive img-circle"/></span><span class="info"><span class="name">Jessica Spencer</span><span class="desc">Lorem ipsum dolor sit amet...</span></span></a>
                                                </li>
                                                <li><a href="email-view-mail.html" target="_blank"><span class="avatar"><img src="" alt="" class="img-responsive img-circle"/></span><span class="info"><span class="name">John Smith<span class="label label-blue pull-right">New</span></span><span class="desc">Lorem ipsum dolor sit amet...</span></span></a>
                                                </li>
                                                <li><a href="email-view-mail.html" target="_blank"><span class="avatar"><img src="" alt="" class="img-responsive img-circle"/></span><span class="info"><span class="name">John Doe<span class="label label-orange pull-right">10 min</span></span><span class="desc">Lorem ipsum dolor sit amet...</span></span></a>
                                                </li>
                                                <li><a href="email-view-mail.html" target="_blank"><span class="avatar"><img src="" alt="" class="img-responsive img-circle"/></span><span class="info"><span class="name">John Smith</span><span class="desc">Lorem ipsum dolor sit amet...</span></span></a>
                                                </li>
                                                <li><a href="email-view-mail.html" target="_blank"><span class="avatar"><img src="" alt="" class="img-responsive img-circle"/></span><span class="info"><span class="name">John Smith</span><span class="desc">Lorem ipsum dolor sit amet...</span></span></a>
                                                </li>
                                            </ul>
                                        </div>
                                    </li>
                                    <li class="last"><a href="email-view-mail.html" target="_blank">Read all messages</a>
                                    </li>
                                </ul>
                            </li>

                            <li class="dropdown">
                                <a data-hover="dropdown" href="#" class="dropdown-toggle">
                                    <i class="fa fa-tasks fa-fw"></i>
                                    <span class="badge badge-yellow">8</span>
                                </a>
                                <ul class="dropdown-menu dropdown-tasks">
                                    <li>
                                        <p>You have 14 pending tasks</p>
                                    </li>
                                    <li>
                                        <div class="dropdown-slimscroll">
                                            <ul>
                                                <li><a href="page-blog-item.html" target="_blank"><span class="task-item">Fix the HTML code<small class="pull-right text-muted">40%</small></span><div class="progress progress-sm"><div role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 40%;" class="progress-bar progress-bar-orange"><span class="sr-only">40% Complete (success)</span></div></div></a>
                                                </li>
                                                <li>
                                                    <a href="page-blog-item.html" target="_blank"> <span class="task-item">Make a wordpress theme<small class="pull-right text-muted">60%</small></span>
                                                        <div class="progress progress-sm">
                                                            <div role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%;" class="progress-bar progress-bar-blue"><span class="sr-only">60% Complete (success)</span>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="page-blog-item.html" target="_blank"> <span class="task-item">Convert PSD to HTML<small class="pull-right text-muted">55%</small></span>
                                                        <div class="progress progress-sm">
                                                            <div role="progressbar" aria-valuenow="55" aria-valuemin="0" aria-valuemax="100" style="width: 55%;" class="progress-bar progress-bar-green"><span class="sr-only">55% Complete (success)</span>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="page-blog-item.html" target="_blank"> <span class="task-item">Convert HTML to Wordpress<small class="pull-right text-muted">78%</small></span>
                                                        <div class="progress progress-sm">
                                                            <div role="progressbar" aria-valuenow="78" aria-valuemin="0" aria-valuemax="100" style="width: 78%;" class="progress-bar progress-bar-yellow"><span class="sr-only">78% Complete (success)</span>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </li>
                                    <li class="last"><a href="page-blog-item.html" target="_blank">See all tasks</a>
                                    </li>
                                </ul>
                            </li>

                            <li class="dropdown topbar-user">
                                <a data-hover="dropdown" href="#" class="dropdown-toggle">
                                    <img src="" alt="" class="img-responsive img-circle" />&nbsp;
                                    <span >John Doe</span>&nbsp;
                                    <span class="caret"></span>
                                </a>
                                <ul class="dropdown-menu dropdown-user pull-right">
                                    <li><a href="page-calendar.html"><i class="fa fa-calendar"></i>My Calendar</a>
                                    </li>
                                    <li>
                                        <a href="email-inbox.html"><i class="fa fa-envelope"></i>My Inbox<span class="badge badge-danger">3</span></a>
                                    </li>
                                    <li class="divider"></li>

                                    <li>
                                        <a href="extra-lock-screen.html">
                                            <i class="fa fa-lock"></i>Lock Screen
                                        </a>
                                    </li>
                                    <li>
                                        <a href="extra-signin.html">
                                            <i class="fa fa-key"></i>Log Out
                                        </a>
                                    </li>
                                </ul>
                            </li>

                            <li id="topbar-chat" >
                                <a href="javascript:void(0)" class="btn-chat">
                                    <i class="fa fa-comments"></i>
                                    <span class="badge badge-info">3</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </nav>

            </div>
            <!--END TOPBAR-->
            
            <div id="wrapper">

                <!--BEGIN SIDEBAR MENU-->
                <nav id="sidebar" class="navbar-default navbar-static-side" role="navigation">
                    <div class="sidebar-collapse menu-scroll">
                        <ul id="side-menu" class="nav">
                            <li class="user-panel">
                                <div class="thumb"><img src="" alt="" class="img-circle" /></div>
                                <div class="info">
                                    <p>John Doe</p>
                                    <ul class="list-inline list-unstyled">
                                        <li><a href="extra-profile.html" data-hover="tooltip" title="Profile"><i class="fa fa-user"></i></a>
                                        </li>
                                        <li><a href="email-inbox.html" data-hover="tooltip" title="Mail"><i class="fa fa-envelope"></i></a>
                                        </li>
                                        <li><a href="#" data-hover="tooltip" title="Setting" data-toggle="modal" data-target="#modal-config"><i class="fa fa-cog"></i></a>
                                        </li>
                                        <li><a href="extra-signin.html" data-hover="tooltip" title="Logout"><i class="fa fa-sign-out"></i></a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="clearfix"></div>
                            </li>
                            <li>
                                <a href="index">
                                    <i class="fa fa-tachometer fa-fw">
                                        <div class="icon-bg bg-orange"></div>
                                    </i>
                                    <span class="menu-title">Dashboard</span>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="glyphicon glyphicon-th fa-fw">
                                        <div class="icon-bg bg-pink"></div>
                                    </i>
                                    <span class="menu-title">组织详情</span>
                                    <span class="fa arrow"></span>
                                </a>
                                <ul class="nav nav-second-level">
                                    <li>
                                        <a href="presidium">
                                            <i class="fa fa-group"></i>
                                            <span class="submenu-title">主席团详情</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="department">
                                            <i class="fa fa-sitemap"></i>
                                            <span class="submenu-title">部门详情</span>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="fa fa-bullhorn fa-fw">
                                        <div class="icon-bg bg-red"></div>
                                    </i>
                                    <span class="menu-title">新生报名</span>
                                    <span class="fa arrow"></span>
                                    <span class="label label-red">Hot</span>
                                </a>
                                <ul class="nav nav-second-level">
                                    <li>
                                        <a href="set">
                                            <i class="fa fa-cogs"></i>
                                            <span class="submenu-title">审核流程设置</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="info">
                                            <i class="fa fa-check"></i>
                                            <span class="submenu-title">新生报名信息</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="audit">
                                            <i class="fa fa-file-o"></i>
                                            <span class="submenu-title">新生报名批量审核</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="add">
                                            <i class="fa fa-plus"></i>
                                            <span class="submenu-title">线下报名人员添加</span>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a href="">
                                    <i class="fa fa-dribbble fa-fw">
                                        <div class="icon-bg bg-green"></div>
                                    </i>
                                    <span class="menu-title">组织活动</span>
                                    <span class="fa arrow"></span>
                                </a>
                                <ul class="nav nav-second-level">
                                    <li>
                                        <a href="#">
                                            <i class="fa fa-pencil"></i>
                                            <span class="submenu-title">弹幕活动申请</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="fa fa-magic"></i>
                                            <span class="submenu-title">参与活动</span>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a href="">
                                    <i class="fa fa-list-ul fa-fw">
                                        <div class="icon-bg bg-green"></div>
                                    </i>
                                    <span class="menu-title">管理员操作明细</span>
                                    <span class="fa arrow"></span>
                                </a>
                                <ul class="nav nav-second-level">
                                    <li>
                                        <a href="">
                                            <i class="fa fa-list-ul"></i>
                                            <span class="submenu-title">管理员添加报名人员明细</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="fa fa-list-ul"></i>
                                            <span class="submenu-title">短信推送明细</span>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </nav>
                <!--END SIDEBAR MENU-->

