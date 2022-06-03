<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="_token" content="{{csrf_token()}}" />
    <title>Report</title>
    <style>
@import url('https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700&display=swap');
        body {
            margin: 0;
            font-family: "Poppins", sans-serif;
        }
        .sidenav .sidenav-button {
            font-size: 32px;
        }

        #upper-sidenav-button {
            font-size: 60px;
        }

        .sidenav {
            height: 100%;
            width: 80px;
            position: fixed;
            z-index: 1;
            top: 0;
            left: 0;
            background-color: #F5EDF6;
            overflow-x:  hidden;
            padding-top: 20px;
        }

        .sidenav li a {
            padding: 0px 5px 0px 20px;
            text-decoration: none;
            align-items: center;
        }


    </style>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://fonts.sandbox.google.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
</head>
<body>
    <div class="sidenav">
        <li><a href="#"><span class="material-symbols-outlined md-36 sidenav-button" id="upper-sidenav-button">menu</span></a></li>
        <li><a href="/usingmoney/list"><span class="material-symbols-outlined md-36 sidenav-button">house</span></a></li>
        <li><a href="/usingmoney/report"><span class="material-symbols-outlined md-36 sidenav-button">receipt_long</span></a></li>
        <li><a href="/usingmoney/formtransaction"><span class="material-symbols-outlined md-36 sidenav-button">account_balance_wallet</span></a></li>
        <li><a href="/usingmoney/dashboard"><span class="material-symbols-outlined md-36 sidenav-button">logout</span></a></li>
    </div>
    <div class="content"></div>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.min.js" integrity="sha384-VHvPCCyXqtD5DqJeNxl2dtTyhF78xXNXdkwX1CZeRusQfRKp+tA7hAShOK/B/fQ2" crossorigin="anonymous"></script>
</body>
</html>
