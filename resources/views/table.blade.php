<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" type="text/css" href="/css/style.css">
        {{-- <script type="text/javascript" src="/js/app.js"></script> --}}

        <title>My Tasks</title>
    </head>
    <body>
        <div class="container">
            <div class="card">
                <div class="card-body">
                    <div class="table table-bordered">
                        <thead>
                            <tr>
                                <th>Name</td>
                                <th>Email</td>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($user as $r)
                                <tr>
                                    <td>{{$r->name}}</td>
                                    <td>{{$r->email}}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </div>
                </div>
            </div>
        </div>

    </body>
</html>
