<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>MySidebar 3 - Without Animation</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700&display=swap');
        body {
            margin: 0;
        }
        .sidebar {
            height: 100%;
            width: 0;
            position: fixed;
            z-index: 1;
            top: 0;
            left: 0;
            background-color: teal;
            overflow-x: hidden;
            padding-top: 60px;
            transition: 3s;
        }

        .sidebar a {
            padding: 8px 8px 8px 32px;
        }

        .sidebar a:hover {
            color: magenta;
        }

        .sidebar .closebtn {
            position: absolute;
            top: 0;
            right: 25px;
            font-size: 36px;
            margin-left: 50px;
        }

        .content {
            transition: 3s;
            padding: 20px;
        }

        .openbtn {
            position: fixed;
            top: 20px;
            left: 300px;
        }

        .openbtn:hover {
            color:burlywood;
        }

    </style>
</head>
<body>
    <div class="sidebar" id="sidebar">
        <a href="javascript:void(0)" class="closebtn" onClick="closeNav()">&times;</a>
        <a href="#">Home</a>
        <a href="#">Jade</a>
        <a href="#">Sapphire</a>
        <a href="#">Ruby</a>
        <a href="#">Gems</a>
        <a href="#">Topaz</a>
        <a href="#">Diamond</a>
        <a href="#">Gold</a>
    </div>
    <div class="content" id="content">
        <span onclick="openNav()" class="openbtn">OPEN SIDEBAR NAVIGATION</span>
    </div>

    <script>

    </script>
</body>
</html>
