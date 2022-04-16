<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" type="text/css" href="{{ asset('/css/app.css') }}">
        <script type="text/javascript" src="/js/app.js"></script>

        <title>My Tasks</title>
    </head>
    <body>
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
    </body>
</html>
