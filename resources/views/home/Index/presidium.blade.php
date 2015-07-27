    @extends('home.layout.container')

    @section('container')

        <div id="page-wrapper">
            <div class="page-content">
                <div class="row">
                    <div class="col-lg-12">
                        <ul id="tableactiondTab" class="nav nav-tabs">
                            <li class="active"><a href="#" data-toggle="tab">红岩网校工作站</a></li>
                        </ul>
                        <div id="tableactionTabContent" class="tab-content">
                            <div id="" class="tab-pane fade active in">
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
                                                        <td>红岩网校工作站主席</td>
                                                        <td>2013210000</td>
                                                        <td>咬不碎</td>
                                                        <td>男</td>
                                                        <td>13988888888</td>
                                                        <td>妓院</td>
                                                        <td></td>
                                                    </tr>
                                                    <tr>
                                                        <td>红岩网校工作站副主席</td>
                                                        <td>2013210000</td>
                                                        <td>龙妹</td>
                                                        <td>男</td>
                                                        <td>13988888888</td>
                                                        <td>妓院</td>
                                                        <td><span class="label label-sm label-primary">删除</span></td>
                                                    </tr>
                                                    <tr>
                                                        <td>红岩网校工作站副主席</td>
                                                        <td>2013210000</td>
                                                        <td>龙妹</td>
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
                                                    <label for="presidium" class="col-md-3 control-label">组织</label>
                                                    <div class="col-md-9">
                                                        <div class="input-icon right">
                                                            <select class="form-control" id="presidium" style="height: 31px;font-size: 12px;">
                                                                <option>红岩网校工作站</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label for="job" class="col-md-3 control-label">职位</label>
                                                    <div class="col-md-9">
                                                        <div class="input-icon right">
                                                            <select class="form-control" id="job" style="height: 31px;font-size: 12px;">
                                                                <option>副主席</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label for="studentID" class="col-md-3 control-label">学号</label>
                                                    <div class="col-md-9">
                                                        <div class="input-icon right">
                                                            <input id="studentID" type="text" placeholder="请输入需要新添加人员的学号" class="form-control" style="height: 31px;font-size: 12px;-webkit-border-radius:4px !important;-moz-border-radius: 4px !important;border-radius: 4px !important">
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
                    </div>
                </div>
            </div>
        </div>

    @stop


