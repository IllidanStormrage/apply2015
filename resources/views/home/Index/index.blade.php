    @extends('home.layout.container')

        @section('container')
            <div class="row-fluid" style="margin-top: 20px;">
                <div class="span12">
                    <ul class="breadcrumb">
                        <li>
                            <a href="#">首页</a>
                            <span class="divider">/</span>
                        </li>
                        <li class="active">
                            控制台
                        </li>
                        <li class="pull-right search-wrap">
                            <form action="http://www.js-css.cn/divcss/admin/metro/search_result.html" class="hidden-phone">
                                <div class="input-append search-input-area">
                                    <input class="" id="appendedInputButton" type="text">
                                    <button class="btn" type="button"><i class="icon-search"></i> </button>
                                </div>
                            </form>
                        </li>
                    </ul>
                </div>
            </div>




        @stop