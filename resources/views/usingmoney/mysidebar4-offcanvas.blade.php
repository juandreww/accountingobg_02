<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>MySidebar4 - Off Canvas</title>
    <style>
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
            /* overflow-x: hidden; */
            background-color: crimson;
            transition: 3s;
            padding-top: 60px;
        }

        .sidebar a {
            padding: 8px 8px 8px 32px;
            text-decoration: none;
            font-size: 25px;
            color: coral;
            display: block;
            transition: 10s;
        }

        .sidebar a:hover {
            color: black;
        }

        .sidebar .closebtn {
            position: absolute;
            top: 0;
            right: 25px;
            font-size: 36px;
            margin-left: 50px;
        }

        #content {
            transition: margin-left .5s;
            padding: 16px;
        }

        @media screen and (max-height: 450px) {
            .sidebar {padding-top: 15px;}
            .sidebar a {font-size: 18px;}
        }

    </style>
</head>
<body>
    <div class="sidebar" id="sidebar">
        <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
        <a href="#">Bit</a>
        <a href="#">Byte</a>
        <a href="#">Kilo</a>
        <a href="#">Mega</a>
        <a href="#">Giga</a>
        <a href="#">Tera</a>
    </div>
    <div class="content">
        <span style="font-size:30px;cursor:pointer" onclick="openNav()">&#9776; Open</span>
    </div>
    <script>
        function openNav() {
            document.getElementById("sidebar").style.width = "250px";
            document.getElementById("content").style.marginLeft = "250px";
        }

        function closeNav() {
            document.getElementById("sidebar").style.width = "0px";
            document.getElementById("content").style.marginLeft = "0";
        }
    </script>
</body>
</html>
