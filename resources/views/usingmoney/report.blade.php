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
            background-color: #F5EDF6;
            overflow-x:  hidden;
            /* padding-top: 20px; */
        }

        .sidenav li a {
            padding: 0px 5px 0px 20px;
            text-decoration: none;
            align-items: center;
            color:#94849C;
        }

        .sidenav li a:hover {
            color: #d66565;
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
            border: 1px solid black;
            height: 100%;
            max-width: 640px;
            padding-left: 10px;
            padding-right: 10px;
            background-color: white;
        }

        .content-body .container .card .card-body {

        }

        #report-totalheader {
            display: flex;
            justify-content: center;
            font-size: 20px;
        }
        #report-totalamount {
            display: flex;
            justify-content: center;
            font-size: 24px;
        }

        #bargraph {
            border: 1px solid black;
            width: 100%;
            height: 320px;
            max-height: 320px;
        }

        #piechart {
            border: 1px solid black;
            width: 100%;
            height: 320px;
            max-height: 320px;
        }


    </style>
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
                <div class="h-col col-2" id="h-total">Total: <strong>{{ number_format(0,2) }}</strong></div>
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
                        <div class="report-totalheader" id="report-totalheader">Net Expense</div>
                        <div class="report-totalamount" id="report-totalamount"><strong>{{ number_format(0,2) }}</strong></div>
                        <div class="report-bargraph" id="report-bargraph"><canvas id="bargraph">BarGraph</canvas></div>
                        <div class="report-piechart" id="report-piechart"><canvas id="piechart">PieChart</canvas></div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.min.js" integrity="sha384-VHvPCCyXqtD5DqJeNxl2dtTyhF78xXNXdkwX1CZeRusQfRKp+tA7hAShOK/B/fQ2" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script>
        var xValues = [];
        var yValues = [];
        var newxValues = [];
        var newyValues = [];

        var data = {!! json_encode($rawdata) !!};
        var group1 = {!! json_encode($group1) !!};
        var total = 0;
        // data.forEach(functionBarchart);
        group1.forEach(functionPiechart);

        function functionPiechart(value) {
            newxValues.push(value.name);
            newyValues.push(value.total);
        }

        for (let i = 1; i <= 31; i++) {
            xValues.push(i);
            data.forEach(function(value) {
                const d = new Date(value.date);
                if (d == i) {
                    total += value.amount;
                }
            });
            console.info(total);

            yValues.push(Math.floor(Math.random() * 1000000) + 1);
        }


        var barColors = "#c6267b";

        new Chart("bargraph", {
            type: "bar",
            data: {
                labels: xValues,
                datasets: [{
                    backgroundColor: barColors,
                    data: yValues
                }]
            },
            options: {
                plugins: {
                    legend: {
                        display: false
                    }
                }
            }
        });

        var barColors = [
            "#f06292",
            "#aeea00",
            "#ffc400",
            "#03a9f4"
        ];

        new Chart("piechart", {
            type: "doughnut",
            data: {
                labels: newxValues,
                datasets: [{
                backgroundColor: barColors,
                data: newyValues
                }]
            },
            options: {
                title: {
                display: true,
                text: "Category 1"
                }
            }
        });

        </script>
    </script>
</body>
</html>
