<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Kelapa Bakar - List</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700&display=swap');
        body {
            background-color: #e4e4e4 !important;
            margin: 0;
            font-family: "Poppins", sans-serif;
        }

        .sidenav .sidenav-button {
            font-size: 32px;

            font-variation-settings:
                'FILL' 1,
                'wght' 400,
                'GRAD' 0,
                'opsz' 48;

            margin-bottom: 20px;
        }

        #upper-sidenav-button {
            font-size: 32px;
            margin-bottom: 30px;
            justify-content: center;
            align-items: flex-start;
            display: flex;
            position: relative;
            top: 0px;
        }

        .sidenav {
            height: 100%;
            width: 80px;
            position: fixed;
            z-index: 1;
            top: 0;
            left: 0;
            background-color: #81C784;
            overflow-x:  hidden;
            /* padding-top: 20px; */
        }

        .sidenav li a {
            padding: 0px 5px 0px 20px;
            text-decoration: none;
            align-items: center;
            color:#2E7D32;
        }

        .sidenav li a:hover {
            color: #f2c75b;
        }

        .content .content-header {
            height: 80px;
            width: 100%;
            position: fixed;
            z-index: -1;
            /* z-index: 99; */
            top: 0;
            left: 0;
            border-bottom: 1px solid #d9d9d9;
            background-color: white;
        }

        .content .content-header .table {
            border-collapse: collapse;
            height: 80px;
            max-height: 80px;
            width: 100%;
            margin-bottom: 0px;
        }

        .content .content-header .table > :not(:first-child) {
            border-top: 0px;
        }

        #h-total {
            display: flex;
            justify-content: left;
            align-items: center;
            font-size: 20px;
        }

        #h-logo {
            display: flex;
            justify-content: left;
            align-items: center;
        }

        .content .content-body {
            margin-top: 100px;
            margin-left: 100px;
            margin-right: 20px;
        }

        .content-body .container {
            border: 2px solid black;
            height: 100%;
            height: 780px;
            max-height: 780px;
            max-width: 1280px;
            padding-left: 10px;
            padding-right: 10px;
            background-color: white;
            position: fixed;
            left: 100px;
            top: 100px;
        }

        .content-addtransaction .container {
            border: 2px solid black;
            height: 100%;
            height: 720px;
            max-height: 720px;
            max-width: 500px;
            padding-left: 10px;
            padding-right: 10px;
            background-color: white;
            position: fixed;
            left: 1400px;
            top: 100px;
        }


    </style>
    {{-- CSS --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://fonts.sandbox.google.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />

</head>
<body>
    <div class="sidenav">
        <li><a href="#"><div class="sidenav-button" id="upper-sidenav-button"><img src="{{ URL::to('/assets/img/logo_black_32.png') }}"></div></a></li>
        <li><a href="/usingmoney/list"><span class="material-symbols-outlined md-36 sidenav-button">house</span></a></li>
        <li><a href="/usingmoney/report"><span class="material-symbols-outlined md-36 sidenav-button">receipt_long</span></a></li>
        <li><a href="/usingmoney/formtransaction"><span class="material-symbols-outlined md-36 sidenav-button">account_balance_wallet</span></a></li>
        <li><a href="/usingmoney/dashboard"><span class="material-symbols-outlined md-36 sidenav-button">logout</span></a></li>
    </div>
    <div class="content">
        <div class="content-header">
            <div class="table table-responsive col-12 row">
                <div class="h-col col-1"></div>
                <div class="h-col col-2" id="h-total"><strong>KEDAI KELAPA BAKAR</strong></div>
                <div class="h-col col-1" id="h-logo"></div>
                <div class="h-col col-4"></div>
                <div class="h-col col-2" id="h-buttonadd"> </div>
                <div class="h-col col-2"></div>
            </div>
        </div>
        <div class="content-body">
            <div class="container">
                <div class="card">
                    <div class="card-body">
                        a
                    </div>
                </div>
            </div>
        </div>
        <div class="content-addtransaction">
            <div class="container">
                <div class="card">
                    <div class="card-body">b</div>
                </div>
            </div>
        </div>
    </div>

    {{-- JS --}}
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.min.js" integrity="sha384-VHvPCCyXqtD5DqJeNxl2dtTyhF78xXNXdkwX1CZeRusQfRKp+tA7hAShOK/B/fQ2" crossorigin="anonymous"></script>

</body>
</html>
