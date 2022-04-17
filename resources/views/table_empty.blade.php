<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" type="text/css" href="/css/style.css">
        <script type="text/javascript" src="/js/app.js"></script>
        <script src="{{ asset('js/app.js') }}" defer></script>
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <title>My Tasks</title>
        <style>
            .row {
                font-family: sans-serif;
                font-size:24px;
            }
        </style>
    </head>
    <body>
        <div class="table table-responsive w-100 d-block d-md-table col-12" style="border-bottom: 1px pink; border-collapse: collapse; margin-bottom:0rem; height:50px; ">
            <div class="row" style="height:75px">
                <div class="col-2"></div>
                <div class="col-1"><img src="{{ URL::to('/assets/img/logo_black_64.png') }}"></div>
                <div class="col-1 align-self-center">Dashboard</div>
                <div class="col-1 align-self-center">Tasks</div>
                <div class="col-3"></div>
                <div class="col-2 align-self-center" style="text-align:right">Juan Andrew</div>
                <div class="col-2"></div>
            </div>
        </div>
        <div class="table table-responsive d-block d-md-table col-12" style="margin-bottom: 0rem;" >
            <table class="table">
                <div class="row">
                    <div class="col-2"></div>
                    <div class="col-1">My Tasks</div>
                    <div class="col-9"></div>
                </div>
            </table>
        </div>
        <div class="container">
            <div class="card">
                <div class="card-body">
                    <table class="table table-bordered">
                        <tr>
                            <th>Name</td>
                            <th>Email</td>
                        </tr>
                        <tr>
                            <td>{{'Bobotoh'}}</td>
                            <td>{{'Persib'}}</td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
    </body>
</html>
