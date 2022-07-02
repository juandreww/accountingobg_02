<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Display:3</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Merriweather&display=swap');

        body {
            margin: 0;
            font-family: 'Merriweather', serif;
        }

        .pg_header {
            height: 80px;
            width: 100%;
            position: fixed;
            z-index: 1;
            top: 0;
            left: 0;
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
            position: absolute;
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

        #kb_header {
            display: inline-block;
            width: 100%;
            padding: 2px;
            color: grey;
            font-size: 14px;
            margin-bottom: 20px
        }

        #kb_today_content {
            display: inline-block;
            height: 50px;
            width: 195px;
            background-color: bisque;
            font-size: 16px;
            padding: 2px;
            margin-top: 5px;
            margin-bottom: 5px;
        }

    </style>
</head>
<body>
    <div class="pg_header">This is page Header</div>
    <div class="pg_sidenav">This is page Sidenav</div>
    <div class="pg_sidenav_shadow"></div>
    <div class="ct_header">This is Content Header</div>
    <div class="ct_body">
        <div class="kb_today">
            <span id="kb_header">Kanban Today</span>
            <span id="kb_today_content">Beli Jeruk 10 pcs</span>
            {{-- <span id="kb_today_content">Beli Apel 10 pcs</span>
            <span id="kb_today_content">Beli Anggur 10 pcs</span>
            <span id="kb_today_content">Kupas Jeruk 3 pcs</span>
            <span id="kb_today_content">Masukkan Jeruk, Apel, Anggur ke Kulkas</span>
            <span id="kb_today_content">Kupas Anggur 5 pcs</span> --}}
        </div>
        {{-- <div class="kb_tomorrow"><span id="kb_header">Kanban Tomorrow</span>a<br>d</div>
        <div class="kb_nextweek"><span id="kb_header">Kanban NextWeek</span>c</div>
        <div class="kb_done"><span id="kb_header">Kanban Done</span>d</div> --}}
    </div>
</body>
</html>
