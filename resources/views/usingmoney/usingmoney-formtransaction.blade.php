<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <script type="text/javascript" src="/js/app.js"></script>
        <script src="{{ asset('js/app.js') }}" defer></script>
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <title>UsingMoney</title>
        <style>

        </style>
        <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

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
                    <div class="col-2 align-self-center" style="text-align:right">
                        <form action="/usingmoney/savetransaction" method="POST" class="form-inline">
                            <input class="btn btn-success ml-3" type="submit" value="Save">
                        </form>
                    </div>
                    <div class="col-2"></div>
                </div>
            </div>
        </div>
        <div class="space" style="height:20px"></div>
        <div class="form-transaction">
            <div class="container">
                <div class="card">
                    <div class="card-body">
                        @php
                            $url = "/usingmoney/savetransaction";
                        @endphp
                        <form action= {{ $url }} method="post">
                            {{ csrf_field() }}
                            <table style="width: 100%">
                            <div class="form-group" style="width: 100%">
                                <label for="name">Name</label>
                                <input class="form-control" type="text" name="name" value="{{ old('name') }}">
                            </div>
                            <div class="form-row">
                                <div class="col-2" style="width: 20%">
                                <label for="age">Age</label><br>
                                <input class="form-control" type="text" name="age" value="{{ old('age') }}">
                                </div>
                                <div class="col-6" style="width: 40%">
                                <label for="email">Email</label><br>
                                <input class="form-control" type="text" name="email" value="{{ old('email') }}">
                                </div>
                                <div class="col" style="width: 40%">
                                <label for="phonenumber">Contact No.</label><br>
                                <input class="form-control" type="text" name="phonenumber" value="{{ old('phonenumber') }}">
                                </div>
                            </div>
                            <br>
                            <div class="form-row">
                                <div class="col-6" style="width: 100%">
                                <label for="address">Address</label><br>
                                <textarea class="form-control" name="address" value="{{ old('address') }}" rows="3">
                                </textarea>
                                </div>
                                <div class="col-6" style="width: 100%">
                                <label for="purpose">Tujuan Berkunjung</label><br>
                                <textarea class="form-control" name="purpose" value="{{ old('purpose') }}" rows="3">
                                </textarea>
                                </div>
                            </div>
                            <br>
                            <br>
                            <br>
                            <div class="form-group">
                                <input class="btn btn-primary btn-lg btn-block" type="submit" value="Submit">
                            </div>
                            </table>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>
