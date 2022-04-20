<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" type="text/css" href="/css/style.css">
        <script type="text/javascript" src="/js/app.js"></script>
        <script src="{{ asset('js/app.js') }}" defer></script>
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <title>UsingMoney</title>
        <style>

        </style>
    </head>
    <body>
        <div class="configheader">
            <div class="table table-responsive w-100 d-block d-md-table col-12" style="border-collapse: collapse; margin-bottom:0rem;">
                <div class="row border-bottom">
                    <div class="col-2"></div>
                    <div class="col-1"><img src="{{ URL::to('/assets/img/logo_black_64.png') }}"></div>
                    <div class="col-1 align-self-center"></div>
                    <div class="col-1 align-self-center"></div>
                    <div class="col-3"></div>
                    <div class="col-2 align-self-center" style="text-align:right"><button type="button" class="btn btn-primary" style="background-color: #0d6efd; text-align:right; sr-only">Add Transaction</button></div>
                    <div class="col-2"></div>
                </div>
            </div>
        </div>
        <div class="space" style="height:20px"></div>
        <div class="list">
            <div class="container">
                <div class="card">
                    <div class="card-body">
                        <table class="table table-bordered">
                            <tr>
                                <th>NAME</td>
                                <th>EMAIL</td>
                            </tr>
                            {{-- @foreach($user as $u)
                                <tr>
                                    <td>{{$u->name}}</td>
                                    <td>{{$u->email}}</td>
                                </tr>
                            @endforeach --}}
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>
