<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Box1 - Position</title>
    <style>

        body {
            margin: 0px;
        }
        #box1a {
            height: 250px;
            width: 250px;
            background-color: seagreen;
            top: 0px;
            left: 0px;
            position: fixed;
        }
        #box1b {
            height: 250px;
            width: 250px;
            background-color: seagreen;
            top: 0px;
            right: 0px;
            position: fixed;
        }

        #box1c {
            height: 250px;
            width: 250px;
            background-color: seagreen;
            right: 0px;
            bottom: 0px;
            position: fixed;
        }

        #box1d {
            height: 250px;
            width: 250px;
            background-color: seagreen;
            left: 0px;
            bottom: 0px;
            position: fixed;
        }

        #box1e {
            height: 250px;
            width: 250px;
            background-color: seagreen;
            margin-left: auto;
            margin-right: auto;
            position: fixed;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
        }

        #box2a {
            height: 175px;
            width: 175px;
            background-color: darksalmon;
            z-index: 1;
            position: absolute;
            top: 100px;
            left: 0px;
        }

        #box3a {
            height: 125px;
            width: 125px;
            background-color: aqua;
            z-index: 2;
            position: absolute;
            top: 0px;
            left: 100px;
        }


    </style>
</head>
<body>
    <div id="box1a"></div>
    <div id="box1b"></div>
    <div id="box1c"></div>
    <div id="box1d"></div>
    <div id="box1e"></div>

    <div id="box2a"></div>
    <div id="box2b"></div>
    <div id="box2c"></div>
    <div id="box2d"></div>
    <div id="box2e"></div>

    <div id="box3a"></div>
    <div id="box3b"></div>
    <div id="box3c"></div>
    <div id="box3d"></div>
    <div id="box3e"></div>
</body>
</html>
