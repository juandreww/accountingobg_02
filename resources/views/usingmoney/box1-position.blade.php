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
        #box2b {
            height: 175px;
            width: 175px;
            background-color: darksalmon;
            z-index: 1;
            position: absolute;
            top: 100px;
            right: 0px;
        }
        #box2c {
            height: 175px;
            width: 175px;
            background-color: darksalmon;
            z-index: 1;
            position: absolute;
            bottom: 100px;
            right: 0px;
        }
        #box2d {
            height: 175px;
            width: 175px;
            background-color: darksalmon;
            z-index: 1;
            position: absolute;
            bottom: 100px;
            left: 0px;
        }
        #box2e {
            height: 175px;
            width: 175px;
            background-color: darksalmon;
            z-index: 1;
            position: absolute;
            bottom: 50%;
            left: 50%;
            transform: translateY(50%)
        }

        #second {
            width: 0.1em;
            height: 150em;
            background-color: #00f;
            position: absolute;
            top: 1em;
            left: 2em;
        }

        #box3a {
            height: 125px;
            width: 125px;
            background-color: aqua;
            z-index: 2;
            position: relative;
            top: -100px;
            left: 100px;
        }

        #box3b {
            height: 125px;
            width: 125px;
            background-color: aqua;
            z-index: 2;
            position: relative;
            top: -100px;
            right: 50px;
        }

        #box3c {
            height: 125px;
            width: 125px;
            background-color: aqua;
            z-index: 2;
            position: relative;
            bottom: -150px;
            right: 50px;
        }

        #box3d {
            height: 125px;
            width: 125px;
            background-color: aqua;
            z-index: 2;
            position: relative;
            bottom: -150px;
            left: 100px;
        }

        #box3e {
            height: 125px;
            width: 125px;
            background-color: aqua;
            z-index: 2;
            position: relative;
            top: 25px;
            left: 75px;
        }


    </style>
</head>
<body>
    <div id="box1a"></div>
    <div id="box1b"></div>
    <div id="box1c"></div>
    <div id="box1d"></div>
    <div id="box1e"></div>

    <div id="box2a">
        <div id="box3a"></div>
    </div>
    <div id="box2b">
        <div id="box3b"></div>
    </div>
    <div id="box2c">
        <div id="box3c"></div>
    </div>
    <div id="box2d">
        <div id="box3d"></div>
    </div>
    <div id="box2e">
        <div id="box3e"></div>
    </div>






    <div id="second"></div>
</body>
</html>
