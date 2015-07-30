    @extends('home.layout.container')

    @section('container')

        <div id="page-wrapper">
            <div class="page-content">
                <div class="row">
                    <div class="col-lg-12">
                        <div id="tableactionTabContent" class="tab-content">
                            <div id="" class="tab-pane fade active in">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <h3 class="mbxl">红岩网校工作站WEB研发部夏季招新 第二轮面试 批量审核</h3>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="table-container">
                                            <table class="table table-hover">
                                                <thead>
                                                    <tr>
                                                        <th>学号</th>
                                                        <th>姓名</th>
                                                        <th>性别</th>
                                                        <th>手机号</th>
                                                        <th>学院</th>
                                                        <th>添加进入的环节</th>
                                                        <th>操作</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>2013213000</td>
                                                        <td>德玛西亚</td>
                                                        <td>男</td>
                                                        <td>139****8888</td>
                                                        <td>妓院</td>
                                                        <td>一面</td>
                                                        <td><span class="label label-sm label-primary">删除</span></td>
                                                    </tr>
                                                    <tr>
                                                        <td>2013213000</td>
                                                        <td>德玛西亚</td>
                                                        <td>男</td>
                                                        <td>139****8888</td>
                                                        <td>妓院</td>
                                                        <td>一面</td>
                                                        <td><span class="label label-sm label-primary">删除</span></td>
                                                    </tr>
                                                    <tr>
                                                        <td style="padding: 5px 8px;"><input id="studentID" type="text" placeholder="输入需要添加的线下报名人员的学号" class="form-control input-sm" style="max-width: 220px;height: 24px"></td>
                                                        <td></td>
                                                        <td></td>
                                                        <td></td>
                                                        <td></td>
                                                        <td></td>
                                                        <td></td>
                                                    </tr>
                                                    <tr>
                                                        <td style="padding: 5px 8px;"><input id="studentID" type="text" value="2013213000" placeholder="输入需要添加的线下报名人员的学号" class="form-control input-sm" style="max-width: 220px;height: 24px"></td>
                                                        <td>德玛西亚</td>
                                                        <td>男</td>
                                                        <td>139****8888</td>
                                                        <td>妓院</td>
                                                        <td>一面</td>
                                                        <td><span class="label label-sm label-success">确认</span></td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <button type="button" class="btn btn-default" style="float: right;margin-left:10px;background-color: #fff;">全部通过</button>
                    </div>
                </div>
            </div>
        </div>

    @stop


