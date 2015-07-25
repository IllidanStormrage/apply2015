    @extends('home.layout.container')

    @section('container')
        <div id="page-wrapper">
                <!--BEGIN TITLE & BREADCRUMB PAGE-->
                <div id="title-breadcrumb-option-demo" class="page-title-breadcrumb">
                    <div class="page-header pull-left">
                        <div class="page-title">Basic Tables</div>
                    </div>
                    <ol class="breadcrumb page-breadcrumb">
                        <li><i class="fa fa-home"></i>&nbsp;<a href="index.html">Home</a>&nbsp;&nbsp;<i class="fa fa-angle-right"></i>&nbsp;&nbsp;</li>
                        <li><a href="#">Tables</a>&nbsp;&nbsp;<i class="fa fa-angle-right"></i>&nbsp;&nbsp;</li>
                        <li class="active">Basic Tables</li>
                    </ol>
                    <div class="btn btn-blue reportrange hide"><i class="fa fa-calendar"></i>&nbsp;<span></span>&nbsp;report&nbsp;<i class="fa fa-angle-down"></i>
                        <input type="hidden" name="datestart" />
                        <input type="hidden" name="endstart" />
                    </div>
                    <div class="clearfix"></div>
                </div>
                <!--END TITLE & BREADCRUMB PAGE-->
                <!--BEGIN CONTENT-->
                <div class="page-content">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="panel panel-yellow">
                                <div class="panel-heading">Simple Table</div>
                                <div class="panel-body">
                                    <table class="table table-hover">
                                        <thead>
                                            <tr>
                                                <th>#</th>
                                                <th>Username</th>
                                                <th>Age</th>
                                                <th>Status</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>1</td>
                                                <td>Henry</td>
                                                <td>23</td>
                                                <td><span class="label label-sm label-success">Approved</span>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>2</td>
                                                <td>John</td>
                                                <td>45</td>
                                                <td><span class="label label-sm label-info">Pending</span>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>3</td>
                                                <td>Larry</td>
                                                <td>30</td>
                                                <td><span class="label label-sm label-warning">Suspended</span>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>4</td>
                                                <td>Lahm</td>
                                                <td>15</td>
                                                <td><span class="label label-sm label-danger">Blocked</span>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div class="panel panel-green">
                                <div class="panel-heading">Bordered Table</div>
                                <div class="panel-body">
                                    <table class="table table-hover table-bordered">
                                        <thead>
                                            <tr>
                                                <th>#</th>
                                                <th>Username</th>
                                                <th>Age</th>
                                                <th>Status</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>1</td>
                                                <td>Henry</td>
                                                <td>23</td>
                                                <td><span class="label label-sm label-success">Approved</span>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>2</td>
                                                <td>John</td>
                                                <td>45</td>
                                                <td><span class="label label-sm label-info">Pending</span>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>3</td>
                                                <td>Larry</td>
                                                <td>30</td>
                                                <td><span class="label label-sm label-warning">Suspended</span>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>4</td>
                                                <td>Lahm</td>
                                                <td>15</td>
                                                <td><span class="label label-sm label-danger">Blocked</span>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div class="panel panel-red">
                                <div class="panel-heading">Contextual Row</div>
                                <div class="panel-body">
                                    <table class="table table-hover table-bordered">
                                        <thead>
                                            <tr>
                                                <th>#</th>
                                                <th>Column</th>
                                                <th>Column</th>
                                                <th>Column</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr class="active">
                                                <td>1</td>
                                                <td>active</td>
                                                <td>active</td>
                                                <td>active</td>
                                            </tr>
                                            <tr class="success">
                                                <td>2</td>
                                                <td>success</td>
                                                <td>success</td>
                                                <td>success</td>
                                            </tr>
                                            <tr class="warning">
                                                <td>3</td>
                                                <td>warning</td>
                                                <td>warning</td>
                                                <td>warning</td>
                                            </tr>
                                            <tr class="danger">
                                                <td>4</td>
                                                <td>danger</td>
                                                <td>danger</td>
                                                <td>danger</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div class="panel panel-blue">
                                <div class="panel-heading">Variations Table</div>
                                <div class="panel-body">
                                    <table class="table table-hover table-bordered">
                                        <thead>
                                            <tr>
                                                <th>#</th>
                                                <th>Username</th>
                                                <th>Age</th>
                                                <th>Status</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>1</td>
                                                <td>Henry</td>
                                                <td>23</td>
                                                <td><span class="label label-sm label-success">Approved</span>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>2</td>
                                                <td>John</td>
                                                <td>45</td>
                                                <td><span class="label label-sm label-info">Pending</span>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>3</td>
                                                <td>Larry</td>
                                                <td>30</td>
                                                <td><span class="label label-sm label-warning">Suspended</span>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>4</td>
                                                <td>Lahm</td>
                                                <td>15</td>
                                                <td><span class="label label-sm label-danger">Blocked</span>
                                                </td>
                                            </tr>
                                        </tbody>
                                        <tfoot>
                                            <tr>
                                                <th></th>
                                                <th><i>4 People</i>
                                                </th>
                                                <th></th>
                                                <th><i>1 Approved</i>
                                                </th>
                                            </tr>
                                        </tfoot>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="panel panel-violet">
                                <div class="panel-heading">Striped Table</div>
                                <div class="panel-body">
                                    <table class="table table-hover table-striped">
                                        <thead>
                                            <tr>
                                                <th>#</th>
                                                <th>Username</th>
                                                <th>Age</th>
                                                <th>Status</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>1</td>
                                                <td>Henry</td>
                                                <td>23</td>
                                                <td><span class="label label-sm label-success">Approved</span>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>2</td>
                                                <td>John</td>
                                                <td>45</td>
                                                <td><span class="label label-sm label-info">Pending</span>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>3</td>
                                                <td>Larry</td>
                                                <td>30</td>
                                                <td><span class="label label-sm label-warning">Suspended</span>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>4</td>
                                                <td>Lahm</td>
                                                <td>15</td>
                                                <td><span class="label label-sm label-danger">Blocked</span>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div class="panel panel-pink">
                                <div class="panel-heading">Condensed Table</div>
                                <div class="panel-body">
                                    <table class="table table-hover table-condensed">
                                        <thead>
                                            <tr>
                                                <th>#</th>
                                                <th>Username</th>
                                                <th>Age</th>
                                                <th>Status</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>1</td>
                                                <td>Henry</td>
                                                <td>23</td>
                                                <td><span class="label label-sm label-success">Approved</span>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>2</td>
                                                <td>John</td>
                                                <td>45</td>
                                                <td><span class="label label-sm label-info">Pending</span>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>3</td>
                                                <td>Larry</td>
                                                <td>30</td>
                                                <td><span class="label label-sm label-warning">Suspended</span>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>4</td>
                                                <td>Lahm</td>
                                                <td>15</td>
                                                <td><span class="label label-sm label-danger">Blocked</span>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div class="panel panel-grey">
                                <div class="panel-heading">Contextual Column</div>
                                <div class="panel-body">
                                    <table class="table table-hover table-bordered">
                                        <thead>
                                            <tr>
                                                <th>#</th>
                                                <th>Column</th>
                                                <th>Column</th>
                                                <th>Column</th>
                                                <th>Column</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>1</td>
                                                <td class="active">active</td>
                                                <td class="success">success</td>
                                                <td class="warning">warning</td>
                                                <td class="danger">danger</td>
                                            </tr>
                                            <tr>
                                                <td>2</td>
                                                <td class="active">active</td>
                                                <td class="success">success</td>
                                                <td class="warning">warning</td>
                                                <td class="danger">danger</td>
                                            </tr>
                                            <tr>
                                                <td>3</td>
                                                <td class="active">active</td>
                                                <td class="success">success</td>
                                                <td class="warning">warning</td>
                                                <td class="danger">danger</td>
                                            </tr>
                                            <tr>
                                                <td>4</td>
                                                <td class="active">active</td>
                                                <td class="success">success</td>
                                                <td class="warning">warning</td>
                                                <td class="danger">danger</td>
                                            </tr>
                                            <tr>
                                                <td>5</td>
                                                <td class="active">active</td>
                                                <td class="success">success</td>
                                                <td class="warning">warning</td>
                                                <td class="danger">danger</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div class="panel panel-orange">
                                <div class="panel-heading">Hover Table - Opion 1</div>
                                <div class="panel-body">
                                    <table class="table table-hover">
                                        <thead>
                                            <tr>
                                                <th>#</th>
                                                <th>Username</th>
                                                <th>Age</th>
                                                <th>Status</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>1</td>
                                                <td>Henry</td>
                                                <td>23</td>
                                                <td><span class="label label-sm label-success">Approved</span>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>2</td>
                                                <td>John</td>
                                                <td>45</td>
                                                <td><span class="label label-sm label-info">Pending</span>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>3</td>
                                                <td>Larry</td>
                                                <td>30</td>
                                                <td><span class="label label-sm label-warning">Suspended</span>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>4</td>
                                                <td>Lahm</td>
                                                <td>15</td>
                                                <td><span class="label label-sm label-danger">Blocked</span>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div class="panel panel-green">
                                <div class="panel-heading">Hover Table - Opion 2</div>
                                <div class="panel-body">
                                    <table class="table table-hover-color">
                                        <thead>
                                            <tr>
                                                <th>#</th>
                                                <th>Username</th>
                                                <th>Age</th>
                                                <th>Status</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>1</td>
                                                <td>Henry</td>
                                                <td>23</td>
                                                <td><span class="label label-sm label-success">Approved</span>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>2</td>
                                                <td>John</td>
                                                <td>45</td>
                                                <td><span class="label label-sm label-info">Pending</span>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>3</td>
                                                <td>Larry</td>
                                                <td>30</td>
                                                <td><span class="label label-sm label-warning">Suspended</span>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>4</td>
                                                <td>Lahm</td>
                                                <td>15</td>
                                                <td><span class="label label-sm label-danger">Blocked</span>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--END CONTENT-->
            </div>

    @stop