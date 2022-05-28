<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../assets/CSS/STYLE_GLOBAL.css">
    <style>
        #header{
            background: rgb(54, 129, 243);
            width: calc(100vw - 300px);
            height: 80px;
            position: relative;
            top: 0;
        }
        #header .logout{
			font-size: 20px;
			font-weight: bold;
            padding-top: 20px;
            padding-right: 20px;
            display: flex;
            justify-content: flex-end;
		}
        #header .link-top {
            text-decoration: none;
            color: #fff;
        }
    </style>
</head>
<body>
    <div id="header">
        <p class="logout"><a class="link-top" href="Login.php">Đăng xuất</a></p>
    </div>
</body>
</html>