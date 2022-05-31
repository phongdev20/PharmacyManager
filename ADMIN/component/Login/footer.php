<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        footer {
            position: absolute;
            bottom: 0%;
            width: 100%;
        }

        #trapezium {
            height: 0;
            width: 420px;
            border-bottom: 100px solid rgb(24, 205, 229);
            border-right: 50px solid transparent;
        }

        #trapezium2 {
            height: 0;
            width: 360px;
            border-bottom: 100px solid rgb(1, 74, 153);
            border-right: 50px solid transparent;
            padding-top: 20px;
        }

        #rec {
            width: 100%;
            height: 80px;
            background: rgb(1, 74, 153);
        }

        .lh {
            float: left;
            color: white;
            font-weight: bold;
            font-size: 25px;
            line-height: 0px;
            margin-left: 30px;
        }
        .row {
            display: flex;
            flex-direction: row;
            align-items: center;
        }
    </style>
</head>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <footer>
        <div id="trapezium">
            <div id="trapezium2">
                <h1 style="font-size: 25px; padding-left: 20px; padding-top: 10px; color: white;">Chăm sóc khách hàng</h1>
            </div>
        </div>
        <div id="rec" class="row">
            <p class="lh">Liên hệ:</p>
            <div class="row">
                <img src="../../../assets/anh/call.png" height="30px" width="30px" alt="" / style="float: left; margin-left: 500px; margin-top: 10px;">
                <p class="lh">0123123321</p>
            </div>
            <div class="row">
                <img src="../../../assets/anh/email.png" height="50px" width="50px" alt="" / style="float: left; margin-left: 100px;">
                <p class="lh">ktxteam012@gmail.com</p>
            </div>
        </div>
    </footer>
    
</body>
</html>
