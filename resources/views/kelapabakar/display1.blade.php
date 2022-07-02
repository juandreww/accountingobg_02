<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Display: 1</title>
    <style>
        .div1 {
            background-color: whitesmoke;
            display:block;
        }

        #span1 {
            display: none;
            background-color: peachpuff;
        }

        #img {
            width: 100px;
            height: 100px;
        }

        #span2 {
            display: inline-block;
            background-color: seagreen;
            width: 300px;
            height: 200px;
        }

        .div2 {
            background-color: sandybrown;
            display:inline;
        }
    </style>
</head>
<body>
    <div class="div1">
        this is div1 Layer 1
        <div class="div1a">
            this is div1a Layer 6
        </div>
    </div>
    <span id="span1">this is span1 Layer 2</span>
    <img src="{{ URL::to('/assets/img/logo_black_32.png') }}" alt="" id="img">
    <span id="span2">this is span2 Layer 4</span>
    <div class="div2">this is div2 Layer 5</div>
</body>
</html>
