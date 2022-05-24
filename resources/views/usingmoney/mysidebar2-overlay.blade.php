<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>MySidebar 2 - Navigation Overlay</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700&display=swap');

        body {
            margin: 0px;
            font-family: "Poppins", sans-serif;
        }

        .sidebar {
            height: 100%;
            width: 0;
            position: fixed;
            z-index: 1;
            background-color: #111;
            top: 0;
            left: 0;
            /* overflow-x: hidden; */
            transition: 0.5s;
            padding-top: 60px;
        }

        .sidebar a {
            padding: 8px 8px 8px 32px;
            text-decoration: none;
            font-size: 25px;
            color: #818181;
            display: block;
            transition: 0.3s;
        }

        .sidebar a:hover {
            color: #f1f1f1;
        }

        .sidebar .closebtn {
            /* position: absolute; */
            top: 0;
            right: 25px;
            font-size: 36px;
            margin-left: 50px;
        }

        #content {
            transition: margin-left . 5s;
            padding: 20px;
        }

        @media screen and (max-height: 450px) {
            .sidebar {padding-top: 15px;}
            .sidebar a {font-size: 18px;}
        }

        span {
            background-color: yellow;
        }
    </style>
</head>
<body>
    <div class="sidebar" id="sidebar">
        <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
        <a href="#home">Home</a>
        <a href="#home">Mercurius</a>
        <a href="#home">Venus</a>
        <a href="#home">Mars</a>
        <a href="#home">Jupiter</a>
        <a href="#home">Uranus</a>
        <a href="#home">Saturnus</a>
        <a href="#home">Moon</a>
        <a href="#home">Asteroid</a>
    </div>
    <span onclick="openNav()">open</span>
    <div class="content" id="content"></div>

    <script>
        function openNav() {
            document.getElementById("sidebar").style.width = "250px";
        }

        function closeNav() {
            document.getElementById("sidebar").style.width = "0px";
        }
    </script>
</body>
</html>
