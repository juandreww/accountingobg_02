<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="_token" content="{{csrf_token()}}" />
    <title>List - Try 2</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700&display=swap');

        body {
            margin: 0;
            font-family: "Poppins", sans-serif;
        }

        .filter {
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            z-index: 1;
            opacity: .7;
            background-color: #85FFBD;
            background-image: linear-gradient(45deg, #85FFBD 0%, #FFFB7D 100%);
        }

        table {
            border-radius: 12px 12px 0 0;
            overflow : hidden;
            background : #fafafa;
            text-align: center;
            width: 60%;
            border-collapse: collapse;
            border-spacing: 0;
            box-shadow: 0 2px 12px rgba(32,32,32,0.3);
        }

        .content {
            position: absolute;
            left: 50%;
            top: 50%;
            transform: translate(-50%, -50%);
            z-index: 2;
        }

        .content .content-body .list .card {
            background-color: transparent;
            border: none;
        }

        th {
            background-color: #eeff41 !important;
        }

        tr:nth-child(odd) {
            background-color: #eeeeee;
        }

    </style>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://fonts.sandbox.google.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
</head>
<body>
    <div class="filter"></div>
    <div class="sidenav"></div>
    <div class="content">
        <div class="content-header"></div>
        <div class="content-body">
            <div class="list">
                <div class="container card card-body">
                    <table class="table table-bordered">
                        <tr>
                            <th style="width: 250px;">DATE</th>
                            <th style="width: 350px;">DESCRIPTION</th>
                            <th style="width: 250px;">AMOUNT</th>
                        </tr>
                        <tr>
                            <td>2010-05-09</td>
                            <td>Partying like a G-6</td>
                            <td>{{number_format(7000000,2)}}</td>
                        </tr>
                        <tr>
                            <td>2010-05-09</td>
                            <td>Partying like a G-6</td>
                            <td>{{number_format(7000000,2)}}</td>
                        </tr>
                        <tr>
                            <td>2010-05-09</td>
                            <td>Partying like a G-6</td>
                            <td>{{number_format(7000000,2)}}</td>
                        </tr>
                        <tr>
                            <td>2010-05-09</td>
                            <td>Partying like a G-6</td>
                            <td>{{number_format(7000000,2)}}</td>
                        </tr>
                        <tr>
                            <td>2010-05-09</td>
                            <td>Partying like a G-6</td>
                            <td>{{number_format(7000000,2)}}</td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.min.js" integrity="sha384-VHvPCCyXqtD5DqJeNxl2dtTyhF78xXNXdkwX1CZeRusQfRKp+tA7hAShOK/B/fQ2" crossorigin="anonymous"></script>
</body>
</html>
