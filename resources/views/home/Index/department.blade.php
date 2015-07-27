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
                            <li><a href="#table-1" data-toggle="tab">视觉设计部</a></li>
                            <li><a href="#table-2" data-toggle="tab">web研发部</a></li>
                            <li><a href="#table-3" data-toggle="tab">移动开发部</a></li>
                            <li><a href="#table-4" data-toggle="tab">运营维护部</a></li>
                            <li><a href="#table-1" data-toggle="tab">视觉设计部</a></li>
                            <li><a href="#table-2" data-toggle="tab">web研发部</a></li>
                            <li><a href="#table-3" data-toggle="tab">移动开发部</a></li>
                            <li><a href="#table-4" data-toggle="tab">运营维护部</a></li>
                            <li><a href="#table-1" data-toggle="tab">视觉设计部</a></li>
                            <li><a href="#table-2" data-toggle="tab">web研发部</a></li>
                            <li><a href="#table-3" data-toggle="tab">移动开发部</a></li>
                            <li><a href="#table-4" data-toggle="tab">运营维护部</a></li>
                            <button type="button" data-target="#modal-add-department" data-toggle="modal" class="btn btn-default glyphicon glyphicon-plus" style="font-size: 16px;background-color: transparent;border-color: transparent;"></button>
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
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <button type="button" data-target="#modal-add-people" data-toggle="modal" class="btn btn-default" style="float: right;background-color: #fff;">人员添加</button>
                        <div id="modal-add-people" tabindex="-1" role="dialog" aria-labelledby="modal-prompt-label" aria-hidden="true" class="modal fade" style="display: none;">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <button type="button" data-dismiss="modal" aria-hidden="true" class="close">×</button>
                                        <h4 id="modal-prompt-label" class="modal-title">新人员添加</h4>
                                    </div>
                                    <div class="modal-body">
                                        <form action="#" class="form-horizontal">
                                            <div class="form-body pal">
                                                <div class="form-group">
                                                    <label for="department" class="col-md-3 control-label">部门</label>
                                                    <div class="col-md-9">
                                                        <div class="input-icon right">
                                                            <select class="form-control" id="department" style="height: 31px;font-size: 12px;">
                                                                <option>管理规划部</option>
                                                                <option>视觉设计部</option>
                                                                <option>web研发部</option>
                                                                <option>移动开发部</option>
                                                                <option>运营维护部</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label for="job" class="col-md-3 control-label">职位</label>
                                                    <div class="col-md-9">
                                                        <div class="input-icon right">
                                                            <select class="form-control" id="job" style="height: 31px;font-size: 12px;">
                                                                <option>部长</option>
                                                                <option>副部长</option>
                                                                <option>干事</option>
                                                                <option>学员</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label for="studentID" class="col-md-3 control-label">学号</label>
                                                    <div class="col-md-9">
                                                        <div class="input-icon right">
                                                            <input id="studentID" type="text" placeholder="输入需要新添加人员的学号" class="form-control" style="height: 31px;font-size: 12px;-webkit-border-radius:4px !important;-moz-border-radius: 4px !important;border-radius: 4px !important">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <p class="col-md-3 control-label">姓名</p>
                                                    <p class="col-md-9 control-label" style="text-align: left">隆综艺</p>
                                                </div>
                                                <div class="form-group">
                                                    <p class="col-md-3 control-label">性别</p>
                                                    <p class="col-md-9 control-label" style="text-align: left">男</p>
                                                </div>
                                                <div class="form-group">
                                                    <p class="col-md-3 control-label">手机号</p>
                                                    <p class="col-md-9 control-label" style="text-align: left">13888888888</p>
                                                </div>
                                                <div class="form-group">
                                                    <p class="col-md-3 control-label">学院</p>
                                                    <p class="col-md-9 control-label" style="text-align: left">妓院</p>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" data-dismiss="modal" class="btn btn-default">取消</button>
                                        <button type="button" class="btn btn-primary">确认</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div id="modal-add-department" tabindex="-1" role="dialog" aria-labelledby="modal-prompt-label" aria-hidden="true" class="modal fade" style="display: none;">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <button type="button" data-dismiss="modal" aria-hidden="true" class="close">×</button>
                                        <h4 id="modal-prompt-label" class="modal-title">新增部门</h4>
                                    </div>
                                    <div class="modal-body">
                                        <form action="#" class="form-horizontal">
                                            <div class="form-body pal">
                                                <div class="form-group">
                                                    <label for="studentID" class="col-md-3 control-label">部门名称</label>
                                                    <div class="col-md-9">
                                                        <div class="input-icon right">
                                                            <input id="studentID" type="text" placeholder="请输入新增部门的名称" class="form-control" style="height: 31px;font-size: 12px;-webkit-border-radius:4px !important;-moz-border-radius: 4px !important;border-radius: 4px !important">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" data-dismiss="modal" class="btn btn-default">取消</button>
                                        <button type="button" class="btn btn-primary">确认</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    @stop

