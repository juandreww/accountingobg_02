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
    </head>
    <body>
        <div class="container-fluid">
            <div class="table table-responsive w-100 d-block d-md-table">
                <table class="table table-bordered" width="100%">
                    <tr>
                        <th>Logo</th>
                        <th>Dashboard</th>
                        <th>Tasks</th>
                        <th></th>
                        <th>Juan Andrew</th>
                    </tr>
                </table>
            </div>
        </div>
        <div class="container">
            <div class="card">
                <div class="card-body">
                    <table class="table table-bordered">
                        <tr>
                            <th>Name</td>
                            <th>Email</td>
                        </tr>
                        @foreach ($user as $r)
                            <tr>
                                <td>{{$r->name}}</td>
                                <td>{{$r->email}}</td>
                            </tr>
                        @endforeach
                    </table>
                </div>
            </div>
        </div>
    </body>
</html>
