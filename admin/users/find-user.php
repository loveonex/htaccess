<?php
include_once("./../layout/start-admin.php");
include_once("./../functions.php");
$id = $_GET['id'];
$result = getSelect_one('khach_hang', 'ma_khach_hang', $id);
?>
<div class="content-wrapper">
    
    <section class="content-header">
        <h1>
            Thông Tin User
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i>Quản Lý User</a></li>
            <li class="active">Danh Sách User</li>
        </ol>
    </section>
    <section class="content">
        <div class="col-xs-12">
            <div class="box">
                <div class="box-header">
                    <a href="add-user.php" class="btn btn-success">+Thêm mới User</a>

                    <div class="box-tools">
                        <form action="<?=$website?>/admin/users/find-user.php" class="input-group input-group-sm" style="width: 150px;" method="GET">
                            <input type="text" name="id" class="form-control pull-right"placeholder="Search ID">
                            <div class="input-group-btn">
                                <button type="submit" class="btn btn-default"><i class="glyphicon glyphicon-search"></i></button>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="box-body table-responsive no-padding">
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <td>ID</td>
                                <td>Tài Khoản</td>
                                <td>Tên</td>
                                <td>Địa Chỉ</td>
                                <td>Số Điện Thoại</td>
                                <td>Email</td>
                                <td>Ngày Thêm</td>
                                <td colspan="2">Thao Tác</td>
                            </tr>
                        </thead>

                        <tbody>
                            <?php if(empty($result)){
                            } else {
                            ?>
                            <tr>
                                <td>
                                    <br>
                                    <?php echo $result['ma_khach_hang']?>
                                </td>
                                <td>
                                    <br>
                                    <?php echo $result['tai_khoan']?>
                                </td>
                                <td>
                                    <br>
                                    <?php echo $result['ten']?>
                                </td>
                                <td>
                                    <br>
                                    <?php echo $result['dia_chi']?>
                                </td>
                                <td>
                                    <br>
                                    <?php echo $result['sdt']?>
                                </td>
                                <td>
                                    <br>
                                    <?php echo $result['email']?>
                                </td>
                                <td>
                                    <br>
                                    <?php echo $result['ngay_them']?>
                                </td>
                                <td>
                                    <br>
                                    <a href="<?=$website?>/admin/users/update-user.php?id=<?php echo $result['ma_khach_hang']?>" class="btn btn-success">Update</a>
                                    <a href="<?=$website?>/admin/users/delete-user.php?id=<?php echo $result['ma_khach_hang']?>" onclick="return confirm('Bạn có chắc muốn xóa không ? ')" class="btn btn-danger">Delete</a>
                                </td>
                            </tr>
                            <?php } ?>
                        <tbody>
                    </table>
                </div>
            </div>
        </div>
    </section>
</div>
<?php
include_once("./../layout/end-admin.php");
?>
