<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>MySidebar1</title>
    <style>

        body {
            margin: 0;
        }

        .sidebar {
            background-color: #9FEAFF;
            width: 200px;
            margin: 0;
            padding: 0;
            position: fixed;
            height: 100%;
            overflow: auto;
        }

        .sidebar a {
            display: block;
            color: #043A5B;
            padding: 10%;
            text-decoration: none;
        }

        .sidebar a.active {
            background-color: #04AA6D;
            color: white;
        }

        .sidebar a:hover:not(.active) {
            background-color: #555;
            color: white;
        }

        @media screen and (max-width: 700spx) {
            .sidebar {
                width: 100%;
                height: auto;
                position: relative;
            }

            .sidebar a {float: left;}
            div.content {margin-left: 0;}
        }

        @media screen and (max-width: 400px) {
            .sidebar a {
                text-align: center;
                float: none;
            }
        }


    </style>
</head>
<body>
    <div class="sidebar">
        <a href="/usingmoney/sidebar1" class="logo">HOME</a>
        <a href="#list1">HTML</a>
        <a href="#list2">CSS</a>
        <a href="#list3">JAVASCRIPT</a>
        <a href="#list4">SQL</a>
        <a href="#list5">PYTHON</a>
        <a href="#list6">PHP</a>
        <a href="#list7">BOOTSTRAP</a>
        <a href="#list8">JQUERY</a>
    </div>
</body>
</html>
