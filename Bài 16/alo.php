<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trang Đăng Nhập</title>
    <style>
        /* Cấu hình tổng thể màn hình */
        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
        }

        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
        }

 
        .login-card {
            background-color: #1cf1a0; 
            border: 1px solid #1cf1a0;
            border-radius: 8px;
            padding: 30px 40px;
            width: 320px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.08);
            text-align: center;
        }

        /* Tiêu đề Đăng nhập */
        .login-card h2 {
            font-size: 28px;
            color: #333;
            margin-bottom: 25px;
            font-weight: normal;
        }

        /* Các dòng nhập liệu */
        .input-group {
            margin-bottom: 15px;
        }

        .input-group input {
            width: 100%;
            padding: 10px 12px;
            border: 1px solid #b5b5b5;
            border-radius: 4px;
            font-size: 14px;
            outline: none;
            background-color: #ffffff;
        }

        .input-group input:focus {
            border-color: #666;
        }
    </style>
</head>
<body>

    <div class="login-card">
        <h2>ĐĂNG NHẬP</h2>
        <form action="dangnhap.php" method="POST">
            <div class="input-group">
                <input type="text" name="tenDangNhap" placeholder="Tên đăng nhập" required>
            </div>
            <div class="input-group">
                <input type="password"name="matKhau" placeholder="Mật khẩu" required>
            </div>
            <button type="submit" class="btn-login">Đăng nhập</button>
        </form>
    </div>
    <?php
    if(isset($_POST['tenDangNhap']) && isset($_POST['matKhau']) ) {
    $tenDangNhap = $_POST['tenDangNhap'];
    $matKhau = $_POST['matKhau'];
    if($tenDangNhap == "admin" && $matKhau == "123"){
        header("Location: trangchu.php");
    }
    else{
        echo "Tên đăng nhập hoặc mật khẩu không chính xác";
    }
}
?>

</body>
</html>
