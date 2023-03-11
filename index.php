<?php 
    session_start();
    if(!isset($_SESSION['user'])){
        header('location: ./login/index.php');
    }
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Demo Login</title>
    <link rel="stylesheet" href="./assets/vendor/bootstrap/css/bootstrap.min.css" type="text/css" />
    <link rel="stylesheet" href="./assets/vendor/boxicons/css/boxicons.min.css" type="text/css" />
</head>

<body>

    <main>
        <div class="p-5 mb-4">
            <p class="fw-bold"># Task bổ sung (Vui lòng tìm hiểu git và github hoặc tài liệu gửi kèm trước khi thực hiện
                yêu cầu)</p>
            <p class="fw-bold"> 1. Thực hành cập nhật trang login có ứng dụng boostrap đẹp hơn.
            <p class="fw-bold"> 2. Tạo table phân quyền mới theo định dạng:
            <p class="text-muted border">
                phanquyen
                <br>
                - id_phan_quyen: int auto_increment <br>
                - ten_phan_quyen: varchar(50) <br>
                - ghi_chu: text <br>
            </p>

            <p class="fw-bold"> 3. Cập nhật table tài khoản liên kết với table phân quyền theo định dạng:
            <p class="fw-bold"> 4. Thêm model phanquyen có các function thực hiện các chức năng thêm, sửa, xóa:
            <p class="fw-bold"> 5. Tạo 1 tài khoản với phân quyền admin và 1 tài khoản với phân quyền user
            <p class="text-muted border">
                - Nếu đăng nhập với tài khoản có phân quyền admin thì điều hướng đến trang admin/index.php
                <br>
                - Nếu đăng nhập với tài khoản có phân quyền user thì điều hướng đến trang user/index.php
            </p>
            <p class="fw-bold"> 6. Commit và Push lên github theo branch có tên của mình.</p>

            <hr>
            <p class="fw-bold">
                Lưu ý:
                <br>
                - Deadline: 19:00 thứ 3 ngày 14/03/2023
                <br>
                - Nếu không thực hiện được hết cũng không sao nhưng cần phải thực hiện việc commit những gì làm được
                trước deadline.
            </p>
            <hr>
            <a href="./login/action.php?req=logout" class="btn btn-danger">Đăng xuất</a>
        </div>

    </main>

    <script src="./assets/vendor/jquery/jquery.min.js"></script>
    <script src="./assets/vendor/sweetalert2@11.js"></script>
    <script src="./assets/vendor/bootstrap/js/bootstrap.min.js"></script>

</body>

</html>