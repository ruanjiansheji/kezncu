<?php
session_start();
if (empty($_SESSION['rno'])) {
	Header("HTTP/1.1 303 See Other");
	Header("Location: ../../index.php");
}
?>
<!DOCTYPE html>
<html lang="zh-CN" class="ax-vertical-centered">
<head>
<?php include ('../../frame/header.php');?>
<script src="/js/common.js"></script>
    <script src="/js/borrow-info_s.js"></script>
</head>
<body class="bootstrap-admin-with-small-navbar">
<?php require_once '../../frame/welcome.php';?>
<div class="container">
    <!-- left, vertical navbar & content -->
    <div class="row">
        <!-- left, vertical navbar -->
<?php include ("../left_frame.php");?>
        <!-- content -->
        <div class="col-md-10">
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default bootstrap-admin-no-table-panel">
                        <div class="panel-heading">
                            <div class="text-muted bootstrap-admin-box-title">查询</div>
                        </div>
                        <div class="bootstrap-admin-no-table-panel-content bootstrap-admin-panel-content collapse in">
                            <form class="form-horizontal">
                                <div class="row">
                                    <div class="col-lg-5 form-group">
                                        <label class="col-lg-4 control-label" for="query_bno">图书编号</label>
                                        <div class="col-lg-8">
                                            <input class="form-control" id="query_bno" type="text" value="">
                                            <label class="control-label" for="query_bno" style="display: none;"></label>
                                        </div>
                                    </div>
                                    <div class="col-lg-5 form-group">
                                        <label class="col-lg-4 control-label" for="query_bname">图书名称</label>
                                        <div class="col-lg-8">
                                            <input class="form-control" id="query_bname" type="text" value="">
                                            <label class="control-label" for="query_bname" style="display: none;"></label>
                                        </div>
                                    </div>
                                    <div class="col-lg-2 form-group">
                                        <button type="button" class="btn btn-primary" id="btn_query" onclick="query()">查询</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <table id="data_list" class="table table-striped table-bordered" cellspacing="0" width="100%">
                        <thead>
                        <tr>
                            <th>图书编号</th>
                            <th>图书名称</th>
                            <th>作者</th>
                            <th>价格</th>
                            <th>账号</th>
                            <th>姓名</th>
                            <th>借阅日期</th>
                            <th>截止还书日期</th>
                        </tr>
                        </thead>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>