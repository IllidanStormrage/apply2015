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
                                                        <td>红岩网校站长</td>
                                                        <td>2013210000</td>
                                                        <td>咬不碎</td>
                                                        <td>男</td>
                                                        <td>13988888888</td>
                                                        <td>妓院</td>
                                                        <td></td>
                                                    </tr>
                                                    <tr>
                                                        <td>红岩网校副站长</td>
                                                        <td>2013210000</td>
                                                        <td>龙妹</td>
                                                        <td>男</td>
                                                        <td>13988888888</td>
                                                        <td>妓院</td>
                                                        <td><span class="label label-sm label-primary">删除</span></td>
                                                    </tr>
                                                    <tr>
                                                        <td>红岩网校副站长</td>
                                                        <td>2013210000</td>
                                                        <td>龙妹</td>
                                                        <td>男</td>
                                                        <td>13988888888</td>
                                                        <td>妓院</td>
                                                        <td><span class="label label-sm label-primary">删除</span></td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <select class="form-control">
                                                                <option>红岩网校副站长</option>
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


