<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>MySidebar5 - Push Opacity</title>
    <style>
        body {
            margin: 0;
        }

        .sidebar {
            height: 100%;
            width: 0;
            top: 0;
            left: 0;
            z-index: 1;
            position: fixed;
            background-color: #111;
            transition: 0.5s;
            padding-top: 60px;
        }

        .sidebar a {
            padding: 8px 8px 8px 32px;
            text-decoration: none;
            font-size: 25px;
            color: #818181;
            display: block;
            transition: 0.5s;
        }

        .sidebar a:hover {
            color: #f1f1f1;
        }

        .sidebar .closebtn {
            position: absolute;
            top: 0;
            right: 25px;
            font-size: 36px;
            margin-left: 50px;
        }

        #content {

        }
    </style>
</head>
<body>
    <div class="sidebar" id="sidebar">
        <a href="#">&times;</a>
        <a href="#">Alpha</a>
        <a href="#">Beta</a>
        <a href="#">Charlie</a>
        <a href="#">Delta</a>
        <a href="#">Emmet</a>
        <a href="#">Fantasy</a>
    </div>
    <div class="content" id="content"></div>
    <script>
        function openNav() {
            document.getElementById("sidebar").style.width = "250px";
            document.getElementById("content").style.marginLeft = "250px";
            document.body.style.backgroundColor = "rgba(0,0,0,0.4)";
        }

        function closeNav() {
            document.getElementById("sidebar").style.width = "0px";
            document.getElementById("content").style.marginLeft = "0px";
            document.body.style.backgroundColor = "white";
        }

    </script>
</body>
</html>
