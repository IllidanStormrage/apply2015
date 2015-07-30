    @extends('home.layout.container')

    @section('singlePageCss')
        <link rel="stylesheet" href="{{asset('home/css/info.css')}}">
    @stop

    @section('singlePageJS')
        <script src="{{asset('home/js/info.js')}}"></script>
    @stop

    @section('container')

        <div id="page-wrapper">
            <div class="page-content">
                <div class="row">
                    <div class="col-lg-12">
                        <div id="tableactionTabContent" class="tab-content">
                            <div id="" class="tab-pane fade active in">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <h3 class="mbxl">
                                            <span>红岩网校工作站WEB研发部夏季招新 第二轮面试 新生信息</span>
                                            <div class="input-group col-lg-3">
                                                <input type="text" class="form-control" placeholder="Search for...">
                                                <span class="input-group-btn">
                                                    <button class="btn btn-default" type="button"><i class="fa fa-search"></i></button>
                                                </span>
                                            </div>
                                        </h3>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="table-container">
                                            <table class="table table-hover info-table">
                                                <thead class="info-table-thead">
                                                    <tr>
                                                        <th class="pointer" data-sortnum="1" arrangement="0">面试编号<i class="fa fa-unsorted upAndDown"></i></th>
                                                        <th class="pointer" data-sortnum="2" arrangement="0">学号<i class="fa fa-unsorted upAndDown"></i></th>
                                                        <th>姓名</th>
                                                        <th>性别</th>
                                                        <th>学院</th>
                                                        <th>手机号</th>
                                                        <th class="pointer" data-sortnum="8" arrangement="0">当前状态<i class="fa fa-unsorted upAndDown"></i></th>
                                                    </tr>
                                                </thead>
                                                <tbody class="info-table-tboby">

                                                </tbody>
                                                <tfoot class="info-table-tfoot">
                                                    <tr>
                                                        <td colspan="6"></td>
                                                    </tr>
                                                    <tr class="more">
                                                        <td colspan="7">点击显示更多</td>
                                                    </tr>
                                                </tfoot>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <button type="button" data-target="#message" data-toggle="modal" class="btn btn-default" style="margin-left: 10px;float: right;background-color: #fff;">消息推送</button>
                        <button type="button" class="btn btn-default" style="margin-left: 10px;float: right;background-color: #fff;">进入下一流程</button>
                        <button type="button" class="btn btn-default" style="margin-left: 10px;float: right;background-color: #fff;">导出</button>
                        <div id="message" tabindex="-1" role="dialog" aria-labelledby="modal-prompt-label" aria-hidden="true" class="modal fade" style="display: none;">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <button type="button" data-dismiss="modal" aria-hidden="true" class="close">×</button>
                                        <h4 id="modal-prompt-label" class="modal-title">消息推送预览</h4>
                                    </div>
                                    <div class="modal-body">
                                        <form action="#" class="form-horizontal">
                                            <div class="form-body pal">
                                                <div class="form-group">
                                                    <p class="col-md-2 control-label">XX同学：</p>
                                                    <p class="col-md-10 control-label" style="text-align: left">您好！恭喜您通过红岩网校工作站WEB研发部的第一轮面试，请于九月三日下午五点至七点到太极西六门三楼参加第二轮面试。</br>您本次面试的编号为****号。</p>
                                                </div>
                                            </div>
                                            <div class="form-body pal">
                                                <div class="form-group">
                                                    <p class="col-md-2 control-label">XX同学：</p>
                                                    <p class="col-md-10 control-label" style="text-align: left">您好！恭喜您通过红岩网校工作站WEB研发部的第三轮面试，欢迎您加入红岩网校工作站这个大家庭。</p>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" data-dismiss="modal" class="btn btn-default">修改</button>
                                        <button type="button" class="btn btn-primary">推送</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div id="information" tabindex="-1" role="dialog" aria-labelledby="modal-prompt-label" aria-hidden="true" class="modal fade" style="display: none;">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <button type="button" data-dismiss="modal" aria-hidden="true" class="close">×</button>
                                        <h4 id="modal-prompt-label" class="modal-title">新生详细信息</h4>
                                    </div>
                                    <div class="modal-body">
                                        <form action="#" class="form-horizontal">
                                            <div class="form-body pal">
                                                <div class="name form-group">
                                                    <p class="col-md-3 control-label">姓名</p>
                                                    <p class="col-md-9 control-label" style="text-align: left"></p>
                                                </div>
                                                <div class="sex form-group">
                                                    <p class="col-md-3 control-label">性别</p>
                                                    <p class="col-md-9 control-label" style="text-align: left"></p>
                                                </div>
                                                <div class="num form-group">
                                                    <p class="col-md-3 control-label">面试编号</p>
                                                    <p class="col-md-9 control-label" style="text-align: left"></p>
                                                </div>
                                                <div class="ID form-group">
                                                    <p class="col-md-3 control-label">学号</p>
                                                    <p class="col-md-9 control-label" style="text-align: left"></p>
                                                </div>
                                                <div class="academy form-group">
                                                    <p class="col-md-3 control-label">学院</p>
                                                    <p class="col-md-9 control-label" style="text-align: left"></p>
                                                </div>
                                                <div class="phoneNum form-group">
                                                    <p class="col-md-3 control-label">手机号</p>
                                                    <p class="col-md-9 control-label" style="text-align: left"></p>
                                                </div>
                                                <div class="introduction form-group">
                                                    <p class="col-md-3 control-label">当前状态</p>
                                                    <p class="col-md-9 control-label" style="text-align: left"></p>
                                                </div>
                                                <div class="introduction form-group">
                                                    <p class="col-md-3 control-label">自我简介</p>
                                                    <p class="col-md-9 control-label" style="text-align: left"></p>
                                                </div>
                                                <div class="bool form-group">
                                                    <p class="col-md-3 control-label" alt="该校级组织中不包括红岩网校工作站">是否报名其他校级组织的部门</p>
                                                    <p class="col-md-9 control-label" style="text-align: left"></p>
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


