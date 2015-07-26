    @extends('home.layout.container')

    @section('container')

        <div id="page-wrapper">

            <div class="page-content">
                <div class="row">
                    <div class="col-lg-12">
                        <ul id="tableactiondTab" class="nav nav-tabs">
                            <li class="active"><a href="#table-0" data-toggle="tab">管理规划部</a></li>
                            <li><a href="#table-1" data-toggle="tab">视觉设计部</a></li>
                            <li><a href="#table-2" data-toggle="tab">web研发部</a></li>
                            <li><a href="#table-3" data-toggle="tab">移动开发部</a></li>
                            <li><a href="#table-4" data-toggle="tab">运营维护部</a></li>
                        </ul>
                        <div id="tableactionTabContent" class="tab-content">
                            <div id="table-0" class="tab-pane fade active in">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="table-container">
                                            <table class="table table-hover">
                                                <thead>
                                                    <tr>
                                                        <th>职位</th>
                                                        <th>学号</th>
                                                        <th>姓名</th>
                                                        <th>性别</th>
                                                        <th>手机号</th>
                                                        <th>学院</th>
                                                        <th width="60px">操作</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>部长</td>
                                                        <td>2013210000</td>
                                                        <td>管理腿毛</td>
                                                        <td>男</td>
                                                        <td>13988888888</td>
                                                        <td>妓院</td>
                                                        <td></td>
                                                    </tr>
                                                    <tr>
                                                        <td>副部长</td>
                                                        <td>2013210000</td>
                                                        <td>腿毛妹</td>
                                                        <td>女</td>
                                                        <td>13988888888</td>
                                                        <td>妓院</td>
                                                        <td><span class="label label-sm label-primary">删除</span></td>
                                                    </tr>
                                                    <tr>
                                                        <td>干事</td>
                                                        <td>2013210000</td>
                                                        <td>小腿毛</td>
                                                        <td>男</td>
                                                        <td>13988888888</td>
                                                        <td>妓院</td>
                                                        <td><span class="label label-sm label-primary">删除</span></td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <select class="form-control">
                                                                <option>副部长</option>
                                                                <option>干事</option>
                                                                <option>学员</option>
                                                            </select>
                                                        </td>
                                                        <td>
                                                            <input id="new" type="text" placeholder="输入需要新添加人员的学号" class="form-control" style="height: 31px;font-size: 12px;-webkit-border-radius:4px !important;-moz-border-radius: 4px !important;border-radius: 4px !important">
                                                        </td>
                                                        <td></td>
                                                        <td></td>
                                                        <td></td>
                                                        <td></td>
                                                        <td></td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div id="table-1" class="tab-pane fade">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="table-container">
                                            <table class="table table-hover">
                                                <thead>
                                                    <tr>
                                                        <th>职位</th>
                                                        <th>学号</th>
                                                        <th>姓名</th>
                                                        <th>性别</th>
                                                        <th>手机号</th>
                                                        <th>学院</th>
                                                        <th width="60px">操作</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>部长</td>
                                                        <td>2013210000</td>
                                                        <td>视觉腿毛</td>
                                                        <td>男</td>
                                                        <td>13988888888</td>
                                                        <td>妓院</td>
                                                        <td></td>
                                                    </tr>
                                                    <tr>
                                                        <td>副部长</td>
                                                        <td>2013210000</td>
                                                        <td>腿毛妹</td>
                                                        <td>女</td>
                                                        <td>13988888888</td>
                                                        <td>妓院</td>
                                                        <td><span class="label label-sm label-primary">删除</span></td>
                                                    </tr>
                                                    <tr>
                                                        <td>干事</td>
                                                        <td>2013210000</td>
                                                        <td>小腿毛</td>
                                                        <td>男</td>
                                                        <td>13988888888</td>
                                                        <td>妓院</td>
                                                        <td><span class="label label-sm label-primary">删除</span></td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <select class="form-control">
                                                                <option>副部长</option>
                                                                <option>干事</option>
                                                                <option>学员</option>
                                                            </select>
                                                        </td>
                                                        <td>
                                                            <input id="new" type="text" placeholder="输入需要新添加人员的学号" class="form-control" style="height: 31px;font-size: 12px;-webkit-border-radius:4px !important;-moz-border-radius: 4px !important;border-radius: 4px !important">
                                                        </td>
                                                        <td></td>
                                                        <td></td>
                                                        <td></td>
                                                        <td></td>
                                                        <td></td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div id="table-2" class="tab-pane fade">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="table-container">
                                            <table class="table table-hover">
                                                <thead>
                                                    <tr>
                                                        <th>职位</th>
                                                        <th>学号</th>
                                                        <th>姓名</th>
                                                        <th>性别</th>
                                                        <th>手机号</th>
                                                        <th>学院</th>
                                                        <th width="60px">操作</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>部长</td>
                                                        <td>2013210000</td>
                                                        <td>web腿毛</td>
                                                        <td>男</td>
                                                        <td>13988888888</td>
                                                        <td>妓院</td>
                                                        <td></td>
                                                    </tr>
                                                    <tr>
                                                        <td>副部长</td>
                                                        <td>2013210000</td>
                                                        <td>腿毛妹</td>
                                                        <td>女</td>
                                                        <td>13988888888</td>
                                                        <td>妓院</td>
                                                        <td><span class="label label-sm label-primary">删除</span></td>
                                                    </tr>
                                                    <tr>
                                                        <td>干事</td>
                                                        <td>2013210000</td>
                                                        <td>小腿毛</td>
                                                        <td>男</td>
                                                        <td>13988888888</td>
                                                        <td>妓院</td>
                                                        <td><span class="label label-sm label-primary">删除</span></td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <select class="form-control">
                                                                <option>副部长</option>
                                                                <option>干事</option>
                                                                <option>学员</option>
                                                            </select>
                                                        </td>
                                                        <td>
                                                            <input id="new" type="text" placeholder="输入需要新添加人员的学号" class="form-control" style="height: 31px;font-size: 12px;-webkit-border-radius:4px !important;-moz-border-radius: 4px !important;border-radius: 4px !important">
                                                        </td>
                                                        <td></td>
                                                        <td></td>
                                                        <td></td>
                                                        <td></td>
                                                        <td></td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div id="table-3" class="tab-pane fade">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="table-container">
                                            <table class="table table-hover">
                                                <thead>
                                                    <tr>
                                                        <th>职位</th>
                                                        <th>学号</th>
                                                        <th>姓名</th>
                                                        <th>性别</th>
                                                        <th>手机号</th>
                                                        <th>学院</th>
                                                        <th width="60px">操作</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>部长</td>
                                                        <td>2013210000</td>
                                                        <td>移动腿毛</td>
                                                        <td>男</td>
                                                        <td>13988888888</td>
                                                        <td>妓院</td>
                                                        <td></td>
                                                    </tr>
                                                    <tr>
                                                        <td>副部长</td>
                                                        <td>2013210000</td>
                                                        <td>腿毛妹</td>
                                                        <td>女</td>
                                                        <td>13988888888</td>
                                                        <td>妓院</td>
                                                        <td><span class="label label-sm label-primary">删除</span></td>
                                                    </tr>
                                                    <tr>
                                                        <td>干事</td>
                                                        <td>2013210000</td>
                                                        <td>小腿毛</td>
                                                        <td>男</td>
                                                        <td>13988888888</td>
                                                        <td>妓院</td>
                                                        <td><span class="label label-sm label-primary">删除</span></td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <select class="form-control">
                                                                <option>副部长</option>
                                                                <option>干事</option>
                                                                <option>学员</option>
                                                            </select>
                                                        </td>
                                                        <td>
                                                            <input id="new" type="text" placeholder="输入需要新添加人员的学号" class="form-control" style="height: 31px;font-size: 12px;-webkit-border-radius:4px !important;-moz-border-radius: 4px !important;border-radius: 4px !important">
                                                        </td>
                                                        <td></td>
                                                        <td></td>
                                                        <td></td>
                                                        <td></td>
                                                        <td></td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div id="table-4" class="tab-pane fade">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="table-container">
                                            <table class="table table-hover">
                                                <thead>
                                                    <tr>
                                                        <th>职位</th>
                                                        <th>学号</th>
                                                        <th>姓名</th>
                                                        <th>性别</th>
                                                        <th>手机号</th>
                                                        <th>学院</th>
                                                        <th width="60px">操作</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>部长</td>
                                                        <td>2013210000</td>
                                                        <td>运维腿毛</td>
                                                        <td>男</td>
                                                        <td>13988888888</td>
                                                        <td>妓院</td>
                                                        <td></td>
                                                    </tr>
                                                    <tr>
                                                        <td>副部长</td>
                                                        <td>2013210000</td>
                                                        <td>腿毛妹</td>
                                                        <td>女</td>
                                                        <td>13988888888</td>
                                                        <td>妓院</td>
                                                        <td><span class="label label-sm label-primary">删除</span></td>
                                                    </tr>
                                                    <tr>
                                                        <td>干事</td>
                                                        <td>2013210000</td>
                                                        <td>小腿毛</td>
                                                        <td>男</td>
                                                        <td>13988888888</td>
                                                        <td>妓院</td>
                                                        <td><span class="label label-sm label-primary">删除</span></td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <select class="form-control">
                                                                <option>副部长</option>
                                                                <option>干事</option>
                                                                <option>学员</option>
                                                            </select>
                                                        </td>
                                                        <td>
                                                            <input id="new" type="text" placeholder="输入需要新添加人员的学号" class="form-control" style="height: 31px;font-size: 12px;-webkit-border-radius:4px !important;-moz-border-radius: 4px !important;border-radius: 4px !important">
                                                        </td>
                                                        <td></td>
                                                        <td></td>
                                                        <td></td>
                                                        <td></td>
                                                        <td></td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    @stop


