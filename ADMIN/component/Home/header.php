<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../../assets/CSS/STYLE_GLOBAL.css">
    <script src="https://kit.fontawesome.com/yourcode.js" crossorigin="anonymous"></script>
    <style>
        #header {
            background: rgb(54, 129, 243);
            width: calc(100vw - 300px);
            height: 80px;
            position: relative;
            top: 0;
        }

        #header .user {
            justify-content: flex-end;
            align-items: center;
            height: 80px;
            margin-right: 20px;
        }

        #header .logout {
            font-size: 20px;
            font-weight: bold;
            margin-left: 8px;
        }

        #header a {
            text-decoration: none;
            color: #fff;
        }

        #header img {
            width: 30px;
            border-radius: 50px;
        }
        #header .sub-menu {
            display: none;
        }
    </style>
</head>

<body>
    <div id="header">
        <?php
        if (session_id() === '') {
            session_start();
        }
        $conn = new mysqli('localhost', 'root', '', 'quanlykhothuoc');
        $username = $_SESSION['username'];
        $password = $_SESSION['password'];

        $sql = "SELECT * FROM `admin` WHERE TaiKhoan = '$username' && MatKhau = '$password'";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                echo '
                <div class="row user">
                    <a href=""><img src="http://localhost/PharmacyManager/assets/anh/user.png" alt=""></a>
                    <p class="logout"><a class="link-top" href="http://localhost/PharmacyManager/ADMIN/page/Login/index.php">Đăng xuất</a></p>
                </div> 
                ';
            }
        }
        $conn->close();
        ?>

    </div>
</body>

</html>