<div id="page-wrapper" class="gray-bg dashbard-1">
    <div class="row border-bottom">
        <nav class="navbar navbar-static-top" role="navigation" style="margin-bottom: 0">
            <div class="navbar-header"><a class="navbar-minimalize minimalize-styl-2 btn btn-primary " href="#"><i
                            class="fa fa-bars"></i> </a>
                <form role="search" class="navbar-form-custom" method="post" action="search_results.html">
                    <div class="form-group">
                        <input type="text" placeholder="请输入您需要查找的内容 …" class="form-control" name="top-search"
                               id="top-search">
                    </div>
                </form>
            </div>
            <ul class="nav navbar-top-links navbar-right">
                <li class="dropdown hidden-xs">
                    <a class="right-sidebar-toggle" aria-expanded="false">
                        <i class="fa fa-tasks"></i> 主题
                    </a>
                </li>
                <li class="hidden-xs">
                    <a href="javascript:void(0);" class="login_destroy"><i class="fa fa fa-sign-out"></i> 退出</a>
                </li>
            </ul>
        </nav>
    </div>
    <div class="row J_mainContent" id="content-main">
        @section('page')
        @show
    </div>
    <div class="footer">
        <div class="pull-right">&copy; 2017-2020 <a href="http://www.simonwang.xin" target="_blank">Simon's Blog</a>
        </div>
    </div>
</div>