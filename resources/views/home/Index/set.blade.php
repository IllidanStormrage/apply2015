    @extends('home.layout.container')

    @section('container')

        <div id="page-wrapper">

            <div class="page-content">
                <div class="row">
                    <div class="col-lg-12">
                    <div class="portlet box portlet-green">
                        <div class="portlet-body">
                            <div id="rootwizard-custom-circle">
                                <div class="navbar">
                                    <div class="navbar-inner">
                                        <ul class="bwizard-steps-o">
                                            <li class="active"><a href="#tab1-wizard-custom-circle" data-toggle="tab"><i class="fa fa-pencil"></i><p class="anchor">笔试</p></a>
                                            </li>
                                            <li><a href="#tab2-wizard-custom-circle" data-toggle="tab"><i class="fa fa-microphone"></i><p class="anchor">面试</p></a>
                                            </li>
                                            <li><a href="#tab3-wizard-custom-circle" data-toggle="tab"><i class="glyphicon glyphicon-check"></i><p class="anchor">录取</p></a>
                                            </li>
                                            <li>
                                                <a href="###">
                                                    <i data-target="#modal-add-department" data-toggle="modal" class=" glyphicon glyphicon-plus"></i>
                                                    <p class="anchor">添加流程</p>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div id="bar" class="progress active">
                                    <div class="bar progress-bar progress-bar-primary" style="width: 15%;"></div>
                                </div>
                                <div class="tab-content">
                                    <div id="tab1-wizard-custom-circle" class="tab-pane active">
                                        <div class="row">
                                            <div class="col-lg-12">
                                                <h3 class="mbxl">红岩网校工作站夏季招新 笔试流程详情</h3>
                                                <div class="form-horizontal">
                                                    <div class="form-group">
                                                        <p class="col-sm-3 control-label">类型 :</p><p class="col-sm-9 control-label" style="text-align: left;">面试</p>
                                                    </div>
                                                    <div class="form-group">
                                                        <p class="col-sm-3 control-label">时间 :</p><p class="col-sm-9 control-label" style="text-align: left;">九月五号下午两点到四点</p>
                                                    </div>1
                                                    <div class="form-group">
                                                        <p class="col-sm-3 control-label">地点 :</p><p class="col-sm-9 control-label" style="text-align: left;">2201</p>
                                                    </div>
                                                    <div class="form-group">
                                                        <p class="col-sm-3 control-label">备注 :</p><p class="col-sm-9 control-label" style="text-align: left;">巴拉拉小魔仙</p>
                                                    </div>
                                                    <button type="button" class="btn btn-primary" style="float: right;margin-left: 10px;">删除</button>
                                                    <button type="button" class="btn btn-default" style="float: right;margin-left: 10px;">修改</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div id="tab2-wizard-custom-circle" class="tab-pane">
                                        <div class="row">
                                            <div class="col-lg-12">
                                                <h3 class="mbxl">红岩网校工作站夏季招新 面试流程详情</h3>
                                                <div class="form-horizontal">
                                                    <div class="form-group">
                                                        <p class="col-sm-3 control-label">类型 :</p><p class="col-sm-9 control-label" style="text-align: left;">面试</p>
                                                    </div>
                                                    <div class="form-group">
                                                        <p class="col-sm-3 control-label">时间 :</p><p class="col-sm-9 control-label" style="text-align: left;">九月五号下午两点到四点</p>
                                                    </div>
                                                    <div class="form-group">
                                                        <p class="col-sm-3 control-label">地点 :</p><p class="col-sm-9 control-label" style="text-align: left;">2201</p>
                                                    </div>
                                                    <div class="form-group">
                                                        <p class="col-sm-3 control-label">备注 :</p><p class="col-sm-9 control-label" style="text-align: left;">巴拉拉小魔仙</p>
                                                    </div>
                                                    <button type="button" class="btn btn-primary" style="float: right;margin-left: 10px;">删除</button>
                                                    <button type="button" class="btn btn-default" style="float: right;margin-left: 10px;">修改</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div id="tab3-wizard-custom-circle" class="tab-pane fadeIn">

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="modal-add-department" tabindex="-1" role="dialog" aria-labelledby="modal-prompt-label" aria-hidden="true" class="modal fade" style="display: none;">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" data-dismiss="modal" aria-hidden="true" class="close">×</button>
                                    <h4 id="modal-prompt-label" class="modal-title">添加流程</h4>
                                </div>
                                <div class="modal-body">
                                    <form action="#" class="form-horizontal">
                                        <div class="form-body pal">
                                            <div class="form-group">
                                                <label for="type" class="col-md-3 control-label">类型</label>
                                                <div class="col-md-9">
                                                    <div class="input-icon right">
                                                        <select class="form-control" id="type" style="height: 31px;font-size: 12px;">
                                                            <option>面试</option>
                                                            <option>笔试</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="time" class="col-md-3 control-label">时间</label>
                                                <div class="col-md-9">
                                                    <div class="input-icon right">
                                                        <select class="form-control" id="type" style="height: 31px;font-size: 12px;">
                                                            <option>面试</option>
                                                            <option>笔试</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>

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
                        {{--<ul id="tableactiondTab" class="nav nav-tabs">--}}
                            {{--<li class="active"><a href="#table-0" data-toggle="tab">笔试</a></li>--}}
                            {{--<li><a href="#table-1" data-toggle="tab">第一次面试</a></li>--}}
                            {{--<li><a href="#table-2" data-toggle="tab">第二次面试</a></li>--}}
                            {{--<li><a href="#table-3" data-toggle="tab">第三次面试</a></li>--}}
                            {{--<li><i class="glyphicon glyphicon-plus" style="font-size: 16px;line-height: 35px;padding: 0 10px;cursor: pointer"></i></li>--}}
                        {{--</ul>--}}
                        {{--<div id="tableactionTabContent" class="tab-content">--}}
                            {{--<div id="table-0" class="tab-pane fade active in">--}}
                                {{--<div class="row">--}}
                                    {{--<div class="col-lg-12">--}}
                                        {{--<p>类型：面试</p>--}}
                                        {{--<p>时间：九月五号下午两点到四点</p>--}}
                                        {{--<p>地点：2201</p>--}}
                                        {{--<p>备注：</p>--}}
                                        {{--<button type="button" class="btn btn-default">修改</button>--}}
                                        {{--<button type="button" class="btn btn-default">删除</button>--}}
                                    {{--</div>--}}
                                {{--</div>--}}
                            {{--</div>--}}
                            {{--<div id="table-1" class="tab-pane fade">--}}
                                {{--<div class="row">--}}
                                    {{--<div class="col-lg-12">--}}

                                    {{--</div>--}}
                                {{--</div>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                    </div>
                </div>
            </div>
        </div>

    @stop


