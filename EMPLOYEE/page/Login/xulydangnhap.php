<?php
    session_start();

    if (isset($_POST['dangnhap'])) {
        $conn = new mysqli('localhost', 'root', '', 'quanlykhothuoc');
        $username = addslashes($_POST['username']);
        $password = addslashes($_POST['password']);

        // Kiểm tra đã nhập đủ tên đăng nhập với mật khẩu chưa
        if (!$username || !$password) {
            echo '<script language="javascript">alert("Tên đăng nhập hoặc mật khẩu không chính xác!"); window.location="index.php";</script>';
        }


        //Kiểm tra tên đăng nhập có tồn tại không
        $sql = "SELECT * FROM `nhan_vien` WHERE Ten_Dang_Nhap = '$username' && Mat_Khau = '$password'";

        $result = $conn->query($sql);
        if ($result->num_rows >0) {
            while ($row = $result->fetch_assoc()) {
                echo '<script language="javascript">window.location=".././Home/Khothuoc.php";</script>';
                //Lưu tên đăng nhập
                $_SESSION['username'] = $username;
                $_SESSION['password'] = $password;
            }
            
        } else {
            echo '<script language="javascript">alert("Tên đăng nhập hoặc mật khẩu không chính xác!"); window.location="index.php";</script>';
        }

        
        
        $connect->close();
    }
?>