<?php
//error_reporting(E_ALL);
//ini_set('display_errors',1);

/**
 * kiểm tra sesion user
 */
session_start();
if (!isset($_SESSION['user'])) {
    header("location: login.php");
}

require_once ('dbhelp.php');
?>
<!DOCTYPE html>
<html>
<head>
    <title>Student Management</title>
    <?php require_once 'layouts/head.php'; ?>
</head>
<body style="padding: 0 20px">
<h1 class="text-primary text-center">
    Quản lý thông tin sinh viên
</h1>
<div class="text-right">
    <a class="text-danger" href="logout.php">Đăng xuất</a>
</div>
<form method="get" style="margin-top: 20px">
    <div class="input-group mb-3">
        <input type="text" name="s" class="form-control" placeholder="Tìm kiếm theo tên">
        <div class="input-group-append">
            <button class="btn btn-outline-success" type="button"><i class="fa fa-search"></i></button>
        </div>
    </div>
</form>
<table class="table table-striped">
    <thead>
    <tr>
        <th>STT</th>
        <th>Họ & Tên</th>
        <th>Tuổi</th>
        <th>Địa chỉ</th>
        <th width="60px"></th>
        <th width="60px"></th>
    </tr>
    </thead>
    <tbody>
    <?php
    if (isset($_GET['s']) && $_GET['s'] != '') {
        $sql = 'select * from student where fullname like "%'.$_GET['s'].'%"';
    } else {
        $sql = 'select * from student';
    }

    $studentList = executeResult($sql);

    $index = 1;
    foreach ($studentList as $std) {
        echo '<tr>
			<td>'.($index++).'</td>
			<td>'.$std['fullname'].'</td>
			<td>'.$std['age'].'</td>
			<td>'.$std['address'].'</td>
			<td><a href="javascript:void()" class="text-warning" onclick=\'window.open("input.php?id='.$std['id'].'","_self")\'><i class="fa fa-pencil"></i></a></td>
			<td><a href="javascript:void()" class="text-danger" onclick="deleteStudent('.$std['id'].')"><i class="fa fa-trash"></i></a></td>
		</tr>';
    }
    ?>
    </tbody>
</table>
<div class="text-right">
    <button class="btn btn-success" onclick="window.open('input.php', '_self')">Thêm sinh viên</button>
</div>

<script type="text/javascript">
    function deleteStudent(id) {
        option = confirm('Bạn có muốn xoá sinh viên này không')
        if(!option) {
            return;
        }

        $.post('delete_student.php', {
            'id': id
        }, function(data) {
            alert(data)
            location.reload()
        })
    }
</script>
</body>
</html>