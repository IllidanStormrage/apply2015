

    @include('home.layout.header')

		<div id="container" class="row-fluid">

            <div class="sidebar-scroll">
                <div id="sidebar" class="nav-collapse collapse">
                    <div class="navbar-inverse">
                        <form class="navbar-search visible-phone">
                           <input type="text" class="search-query" placeholder="Search" />
                        </form>
                    </div>
                    <ul class="sidebar-menu">
                        <li class="sub-menu active">
                            <a class="" href="index.html">
                                <i class="icon-dashboard"></i>
                                <span>控制台</span>
                            </a>
                        </li>
                      <li class="sub-menu">
                          <a href="javascript:;" class="">
                              <i class="icon-book"></i>
                              <span>组织详情</span>
                              <span class="arrow"></span>
                          </a>
                          <ul class="sub">
                              <li><a class="" href="general.html">主修团详情</a></li>
                              <li><a class="" href="button.html">部门详情</a></li>
                          </ul>
                      </li>
                      <li class="sub-menu">
                          <a href="javascript:;" class="">
                              <i class="icon-cogs"></i>
                              <span>新生报名</span>
                              <span class="arrow"></span>
                          </a>
                          <ul class="sub">
                              <li><a class="" href="calendar.html">审核流程</a></li>
                              <li><a class="" href="grids.html">新生报名审核</a></li>
                              <li><a class="" href="chartjs.html">线下添加</a></li>
                              <li><a class="" href="flot_chart.html">短信通知</a></li>
                          </ul>
                      </li>
                      {{--<li class="sub-menu">--}}
                          {{--<a href="javascript:;" class="">--}}
                              {{--<i class="icon-tasks"></i>--}}
                              {{--<span>表单</span>--}}
                              {{--<span class="arrow"></span>--}}
                          {{--</a>--}}
                          {{--<ul class="sub">--}}
                              {{--<li><a class="" href="form_layout.html">表单布局</a></li>--}}
                              {{--<li><a class="" href="form_component.html">表单组件</a></li>--}}
                              {{--<li><a class="" href="form_wizard.html">表单提示</a></li>--}}
                              {{--<li><a class="" href="form_validation.html">表单验证</a></li>--}}
                              {{--<li><a class="" href="dropzone.html">文件上传</a></li>--}}
                          {{--</ul>--}}
                      {{--</li>--}}
                      {{--<li class="sub-menu">--}}
                          {{--<a href="javascript:;" class="">--}}
                              {{--<i class="icon-th"></i>--}}
                              {{--<span>数据表格</span>--}}
                              {{--<span class="arrow"></span>--}}
                          {{--</a>--}}
                          {{--<ul class="sub">--}}
                              {{--<li><a class="" href="basic_table.html">简单表格</a></li>--}}
                              {{--<li><a class="" href="dynamic_table.html">动态表格</a></li>--}}
                              {{--<li><a class="" href="editable_table.html">可编辑表格</a></li>--}}
                          {{--</ul>--}}
                      {{--</li>--}}
                      {{--<li class="sub-menu">--}}
                          {{--<a href="javascript:;" class="">--}}
                              {{--<i class="icon-fire"></i>--}}
                              {{--<span>Icon图标</span>--}}
                              {{--<span class="arrow"></span>--}}
                          {{--</a>--}}
                          {{--<ul class="sub">--}}
                              {{--<li><a class="" href="font_awesome.html">FontAwesome图标</a></li>--}}
                              {{--<li><a class="" href="glyphicons.html">Glyphicons图标</a></li>--}}
                          {{--</ul>--}}
                      {{--</li>--}}
                      {{--<li class="sub-menu">--}}
                          {{--<a class="" href="javascript:;">--}}
                              {{--<i class="icon-trophy"></i>--}}
                              {{--<span>代码片段</span>--}}
                              {{--<span class="arrow"></span>--}}
                          {{--</a>--}}
                          {{--<ul class="sub">--}}
                              {{--<li><a href="general_portlet.html" class="">通用片段</a></li>--}}
                              {{--<li><a href="draggable_portlet.html" class="">可拖拽片段</a></li>--}}
                          {{--</ul>--}}
                      {{--</li>--}}
                      {{--<li class="sub-menu">--}}
                          {{--<a class="" href="javascript:;">--}}
                              {{--<i class="icon-map-marker"></i>--}}
                              {{--<span>地图</span>--}}
                              {{--<span class="arrow"></span>--}}
                          {{--</a>--}}
                          {{--<ul class="sub">--}}
                              {{--<li><a href="vector_map.html" class="">Vector地图</a></li>--}}
                              {{--<li><a href="google_map.html" class="">Google地图</a></li>--}}
                          {{--</ul>--}}
                      {{--</li>--}}
                      {{--<li class="sub-menu">--}}
                          {{--<a href="javascript:;" class="">--}}
                              {{--<i class="icon-file-alt"></i>--}}
                              {{--<span>基本页面</span>--}}
                              {{--<span class="arrow"></span>--}}
                          {{--</a>--}}
                          {{--<ul class="sub">--}}
                              {{--<li><a class="" href="blank.html">空白页面</a></li>--}}
                              {{--<li><a class="" href="blog.html">博客</a></li>--}}
                              {{--<li><a class="" href="timeline.html">时间轴</a></li>--}}
                              {{--<li><a class="" href="profile.html">个人资料</a></li>--}}
                              {{--<li><a class="" href="about_us.html">关于我们</a></li>--}}
                              {{--<li><a class="" href="contact_us.html">联系我们</a></li>--}}
                          {{--</ul>--}}
                      {{--</li>--}}
                      {{--<li class="sub-menu">--}}
                          {{--<a href="javascript:;" class="">--}}
                              {{--<i class="icon-glass"></i>--}}
                              {{--<span>其他</span>--}}
                              {{--<span class="arrow"></span>--}}
                          {{--</a>--}}
                          {{--<ul class="sub">--}}
                              {{--<li><a class="" href="lock.html">锁屏</a></li>--}}
                              {{--<li><a class="" href="invoice.html">购物单</a></li>--}}
                              {{--<li><a class="" href="pricing_tables.html">价目单</a></li>--}}
                              {{--<li><a class="" href="search_result.html">搜索展示</a></li>--}}
                              {{--<li><a class="" href="faq.html">帮助页面</a></li>--}}
                              {{--<li><a class="" href="404.html">404错误页面</a></li>--}}
                              {{--<li><a class="" href="500.html">500错误页面</a></li>--}}
                          {{--</ul>--}}
                      {{--</li>--}}
                      {{--<li>--}}
                          {{--<a class="" href="login.html">--}}
                            {{--<i class="icon-user"></i>--}}
                            {{--<span>登录页面</span>--}}
                          {{--</a>--}}
                      {{--</li>--}}
                    </ul>
                </div>
            </div>


            <div id="main-content">
                <div class="container-fluid">

                    @yield('container')
                </div>
            </div>

        </div>

	@include('home.layout.footer')