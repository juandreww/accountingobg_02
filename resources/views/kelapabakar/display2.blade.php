<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Display: 2 Kanban</title>
    <style>

        body {
            margin: 0;
            /* background-color: #e4e4e4 !important; */
        }
        .pg_header {
            height: 80px;
            width: 100%;
            position: fixed;
            z-index: 1;
            top: 0;
            left: 0;
            /* border-bottom: 2px solid #d9d9d9; */
            background-color: white;
            box-shadow: 0px 0.1px 3px #888888;
        }

        .pg_sidenav {
            position: fixed;
            top: 80px;
            background-color: #fafbfd;
            height: 100%;
            width: 250px;

        }
        .pg_sidenav_shadow {
            position: fixed;
            top: 80px;
            left: 250px;
            background-color: #d9d9d9;
            width: 0.5px;
            height: 100%;
            box-shadow: -0.1px 0px 1px #888888;
        }

        .ct_header {
            position: fixed;
            top: 80px;
            left: 260px;
            height: 200px;
        }

        .ct_body {
            position: fixed;
            top: 300px;
            left: 260px;
            height: 100%;
        }

        .kb_today {
            display: inline-block;
            position: relative;
            height: 100%;
            width: 200px;
            background-color: #f5f5f5;
            margin-left: 10px;
            margin-right: 10px;
            padding: 8px;
        }

        .kb_tomorrow {
            display: inline-block;
            position: relative;
            height: 100%;
            width: 200px;
            background-color: #f5f5f5;
            margin-left: 10px;
            margin-right: 10px;
            padding: 8px;
        }

        .kb_nextweek {
            display: inline-block;
            position: relative;
            height: 100%;
            width: 200px;
            background-color: #f5f5f5;
            margin-left: 10px;
            margin-right: 10px;
            padding: 8px;
        }

        .kb_done {
            display: inline-block;
            position: relative;
            height: 100%;
            width: 200px;
            background-color: #f5f5f5;
            margin-left: 10px;
            margin-right: 10px;
            padding: 8px;
        }
    </style>
</head>
<body>
    <div class="pg_header">This is Page Header</div>
    <div class="pg_sidenav">This is Page Sidenav</div>
    <div class="pg_sidenav_shadow"></div>
    <div class="ct_header">This is Content Header</div>
    <div class="ct_body">
        <div class="kb_today">Kanban Today</div>
        <div class="kb_tomorrow">Kanban Tomorrow</div>
        <div class="kb_nextweek">Kanban NextWeek</div>
        <div class="kb_done">Kanban Done</div>
    </div>
</body>
</html>
