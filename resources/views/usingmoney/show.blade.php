<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edit Data</title>

    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700&display=swap');
        .container {
            height: 250px;
            border: 1px solid black;
        }

        table {
            width: 100%;
        }

        .form-group {
            width: 100%;
        }
   </style>

    {{-- CSS --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    {{-- JS --}}
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.min.js" integrity="sha384-VHvPCCyXqtD5DqJeNxl2dtTyhF78xXNXdkwX1CZeRusQfRKp+tA7hAShOK/B/fQ2" crossorigin="anonymous"></script>
</head>
<body>
    <div class="container">
        <div class="card">
            <div class="card-body">
                @php $url = "/edit?uid=" . $data->uid @endphp
                <form action="{{ $url }}" method="post">
                    <table class="table table-bordered">
                        <div class="form-group">
                            <label for="date">Date</label><br>
                            <input type="date" name="date" id="date" value="{{ $data->date }}">
                        </div>
                        <div class="form-group">
                            <label for="amount">Amount</label><br>
                            <input type="text" name="amount" id="amount" value="{{ $data->amount }}">
                        </div>
                        <div class="form-group">
                            <label for="note">Note</label><br>
                            <input type="textarea" name="note" id="note" value="{{ $data->note }}">
                        </div>
                        <div class="form-group">
                            <input type="text" class="btn btn-primary btn-lg btn-block" type="submit" value="Submit">
                        </div>
                    </table>
                </form>
            </div>
        </div>
    </div>
</body>
</html>
