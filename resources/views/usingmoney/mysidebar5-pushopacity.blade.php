<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>MySidebar5 - Push Opacity</title>
</head>
<body>
    <div class="sidebar" id="sidebar"></div>
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
