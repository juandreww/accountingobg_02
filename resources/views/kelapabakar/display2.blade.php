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
            height: 40px;
            width: 100%;
            position: fixed;
            z-index: 1;
            top: 0;
            left: 0;
            /* border-bottom: 2px solid #d9d9d9; */
            background-color: white;
            box-shadow: 0px 0.1px 3px #888888;
        }

        .pg_body {
            position: fixed;
            top: 40px;
            background-color: #fafbfd;

        }

        .pg_sidenav {
            display: inline-block;
            height: 100%;
            width: 150px;
        }

        .ct_header {
            display: inline-block;
            top: 40px;
        }

        .ct_body {
            display: inline-block;
            top: 60px;
            /* left: 150px; */
        }
    </style>
</head>
<body>
    <div class="pg_header">This is Page Header</div>
    <div class="pg_body">
        <div class="pg_sidenav">This is Page Sidenav</div>
        <div class="ct_header">This is Content Header</div>
        <div class="ct_body">This is Content Body</div>
    </div>
    {{-- <div class="ct_header">This is Content Header</div>
    <div class="ct_body">
        This is Content Body
    </div> --}}
</body>
</html>
