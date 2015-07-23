<!doctype html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>{{$title}}</title>
        <link href="{{asset('home/css/bootstrap.min.css')}}" rel="stylesheet" />
        <link href="{{asset('home/css/bootstrap-responsive.min.css')}}" rel="stylesheet" />
        <link href="{{asset('home/css/bootstrap-fileupload.css')}}" rel="stylesheet" />
        <link href="{{asset('home/css/font-awesome.css')}}" rel="stylesheet" />
        <link href="{{asset('home/css/style.css')}}" rel="stylesheet" />
        <link href="{{asset('home/css/style-responsive.css')}}" rel="stylesheet" />
        <link href="{{asset('home/css/style-default.css')}}" rel="stylesheet" id="style_color" />
        <link href="{{asset('home/css/bootstrap-fullcalendar.css')}}" rel="stylesheet" />
        <link href="{{asset('home/css/jquery.easy-pie-chart.css')}}" rel="stylesheet" media="screen">
    </head>

	<body class="fixed-top">

           <div id="header" class="navbar navbar-inverse navbar-fixed-top">
               <div class="navbar-inner">
                   <div class="container-fluid">

                       <!--
                       <div class="sidebar-toggle-box hidden-phone">
                           <div class="icon-reorder tooltips" data-placement="right" data-original-title="Toggle Navigation"></div>
                       </div>
                       -->

                       <a class="brand" href="index.html">
                           <img src="{{asset('home/images/logo.png')}}" alt="Metro Lab" />
                       </a>

                       <a class="btn btn-navbar collapsed" id="main_menu_trigger" data-toggle="collapse" data-target=".nav-collapse">
                           <span class="icon-bar"></span>
                           <span class="icon-bar"></span>
                           <span class="icon-bar"></span>
                           <span class="arrow"></span>
                       </a>

                       <div id="top_menu" class="nav notify-row">

                           <ul class="nav top-menu">
                               <li class="dropdown">
                                   <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                       <i class="icon-tasks"></i>
                                       <span class="badge badge-important">6</span>
                                   </a>
                                   <ul class="dropdown-menu extended tasks-bar">
                                       <li>
                                           <p>你有6条任务</p>
                                       </li>
                                       <li>
                                           <a href="#">
                                               <div class="task-info">
                                                 <div class="desc">控制台</div>
                                                 <div class="percent">44%</div>
                                               </div>
                                               <div class="progress progress-striped active no-margin-bot">
                                                   <div class="bar" style="width: 44%;"></div>
                                               </div>
                                           </a>
                                       </li>
                                       <li>
                                           <a href="#">
                                               <div class="task-info">
                                                   <div class="desc">数据库更新</div>
                                                   <div class="percent">65%</div>
                                               </div>
                                               <div class="progress progress-striped progress-success active no-margin-bot">
                                                   <div class="bar" style="width: 65%;"></div>
                                               </div>
                                           </a>
                                       </li>
                                       <li>
                                           <a href="#">
                                               <div class="task-info">
                                                   <div class="desc">手机开发进度</div>
                                                   <div class="percent">87%</div>
                                               </div>
                                               <div class="progress progress-striped progress-info active no-margin-bot">
                                                   <div class="bar" style="width: 87%;"></div>
                                               </div>
                                           </a>
                                       </li>
                                       <li>
                                           <a href="#">
                                               <div class="task-info">
                                                   <div class="desc">手机App进度</div>
                                                   <div class="percent">33%</div>
                                               </div>
                                               <div class="progress progress-striped progress-warning active no-margin-bot">
                                                   <div class="bar" style="width: 33%;"></div>
                                               </div>
                                           </a>
                                       </li>
                                       <li>
                                           <a href="#">
                                               <div class="task-info">
                                                   <div class="desc">控制台</div>
                                                   <div class="percent">90%</div>
                                               </div>
                                               <div class="progress progress-striped progress-danger active no-margin-bot">
                                                   <div class="bar" style="width: 90%;"></div>
                                               </div>
                                           </a>
                                       </li>
                                       <li class="external">
                                           <a href="#">查看所有任务</a>
                                       </li>
                                   </ul>
                               </li>
                               <li class="dropdown" id="header_inbox_bar">
                                   <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                       <i class="icon-envelope-alt"></i>
                                       <span class="badge badge-important">5</span>
                                   </a>
                                   <ul class="dropdown-menu extended inbox">
                                       <li>
                                           <p>你有5条消息</p>
                                       </li>
                                       <li>
                                           <a href="#">
                                               <span class="photo"><img src="avatar-mini.png" alt="avatar" /></span>
        									<span class="subject">
        									<span class="from">Jonathan Smith</span>
        									<span class="time">Just now</span>
        									</span>
        									<span class="message">
        									    Hello, 这是个消息列子.
        									</span>
                                           </a>
                                       </li>
                                       <li>
                                           <a href="#">
                                               <span class="photo"><img src="avatar-mini.png" alt="avatar" /></span>
        									<span class="subject">
        									<span class="from">Jhon Doe</span>
        									<span class="time">10 mins</span>
        									</span>
        									<span class="message">
        									 Hi, 最近咋样?
        									</span>
                                           </a>
                                       </li>
                                       <li>
                                           <a href="#">
                                               <span class="photo"><img src="avatar-mini.png" alt="avatar" /></span>
        									<span class="subject">
        									<span class="from">Jason Stathum</span>
        									<span class="time">3 hrs</span>
        									</span>
        									<span class="message">
        									    This is awesome dashboard.
        									</span>
                                           </a>
                                       </li>
                                       <li>
                                           <a href="#">
                                               <span class="photo"><img src="avatar-mini.png" alt="avatar" /></span>
        									<span class="subject">
        									<span class="from">Jondi Rose</span>
        									<span class="time">Just now</span>
        									</span>
        									<span class="message">
        									    Hello, this is metrolab
        									</span>
                                           </a>
                                       </li>
                                       <li>
                                           <a href="#">See all messages</a>
                                       </li>
                                   </ul>
                               </li>
                               <li class="dropdown" id="header_notification_bar">
                                   <a href="#" class="dropdown-toggle" data-toggle="dropdown">

                                       <i class="icon-bell-alt"></i>
                                       <span class="badge badge-warning">7</span>
                                   </a>
                                   <ul class="dropdown-menu extended notification">
                                       <li>
                                           <p>你有7条提示信息</p>
                                       </li>
                                       <li>
                                           <a href="#">
                                               <span class="label label-important"><i class="icon-bolt"></i></span>
                                               Server #3 overloaded.
                                               <span class="small italic">34 mins</span>
                                           </a>
                                       </li>
                                       <li>
                                           <a href="#">
                                               <span class="label label-warning"><i class="icon-bell"></i></span>
                                               Server #10 not respoding.
                                               <span class="small italic">1 Hours</span>
                                           </a>
                                       </li>
                                       <li>
                                           <a href="#">
                                               <span class="label label-important"><i class="icon-bolt"></i></span>
                                               Database overloaded 24%.
                                               <span class="small italic">4 hrs</span>
                                           </a>
                                       </li>
                                       <li>
                                           <a href="#">
                                               <span class="label label-success"><i class="icon-plus"></i></span>
                                               New user registered.
                                               <span class="small italic">Just now</span>
                                           </a>
                                       </li>
                                       <li>
                                           <a href="#">
                                               <span class="label label-info"><i class="icon-bullhorn"></i></span>
                                               Application error.
                                               <span class="small italic">10 mins</span>
                                           </a>
                                       </li>
                                       <li>
                                           <a href="#">See all notifications</a>
                                       </li>
                                   </ul>
                               </li
                           </ul>
                       </div>

                       <div class="top-nav ">
                           <ul class="nav pull-right top-menu" >

                               <li class="dropdown mtop5">

                                   <a class="dropdown-toggle element" data-placement="bottom" data-toggle="tooltip" href="#" data-original-title="Chat">
                                       <i class="icon-comments-alt"></i>
                                   </a>
                               </li>
                               <li class="dropdown mtop5">
                                   <a class="dropdown-toggle element" data-placement="bottom" data-toggle="tooltip" href="#" data-original-title="Help">
                                       <i class="icon-headphones"></i>
                                   </a>
                               </li>


                               <li class="dropdown">
                                   <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                       <img src="{{asset('home/images/avatar1_small.jpg')}}" alt="">
                                       <span class="username">Jhon Doe</span>
                                       <b class="caret"></b>
                                   </a>
                                   <ul class="dropdown-menu extended logout">
                                       <li><a href="#"><i class="icon-user"></i>我的资料</a></li>
                                       <li><a href="#"><i class="icon-cog"></i>我的设置</a></li>
                                       <li><a href="login.html"><i class="icon-key"></i>退出</a></li>
                                   </ul>
                               </li>

                           </ul>

                       </div>
                   </div>
               </div>
           </div>
