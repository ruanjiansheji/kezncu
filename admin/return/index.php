<?php
session_start();
if ($_SESSION['rdept'] != "管理员") {
	Header("HTTP/1.1 303 See Other");
	Header("Location: ../../index.php");
}
?>
<!DOCTYPE html>
<html lang="zh-CN" class="ax-vertical-centered">
<head>
<?php require_once '../../frame/header.php';?>
<script src="/js/return.js"></script>
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
                            <div class="text-muted bootstrap-admin-box-title">还书</div>
                        </div>
                        <div class="bootstrap-admin-no-table-panel-content bootstrap-admin-panel-content collapse in">
                            <form class="form-horizontal">
                                <div class="row">
                                    <div class="col-lg-5 form-group">
                                        <label class="col-lg-4 control-label" for="return_sno"><label class="text-danger">*&nbsp;</label>用户编号</label>
                                        <div class="col-lg-8">
                                            <input class="form-control" id="return_sno" type="text" value="">
                                            <label class="control-label" for="return_sno" style="display: none"></label>
                                        </div>
                                    </div>
                                    <div class="col-lg-5 form-group">
                                        <label class="col-lg-4 control-label" for="return_bno"><label class="text-danger">*&nbsp;</label>图书编号</label>
                                        <div class="col-lg-8">
                                            <input class="form-control" id="return_bno" type="text" value="">
                                            <label class="control-label" for="return_bno" style="display: none"></label>
                                        </div>
                                    </div>
                                    <div class="col-lg-2 form-group">
                                        <button type="button" class="btn btn-primary" id="btn_return" onclick="returnBook()">还书</button>
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
                            <th>部门</th>
                            <th>实际还书日期</th>
                            <th>罚金</th>
                        </tr>
                        </thead>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="modal_info" tabindex="-1" role="dialog" aria-labelledby="addModalLabel">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="deleteModalLabel">提示</h4>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-lg-12" id="div_info"></div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" id="btn_delete_close" data-dismiss="modal">关闭</button>
                </div>
            </div>
        </div>
    </div>

</div>
</body>
</html>