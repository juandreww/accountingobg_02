<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="_token" content="{{csrf_token()}}" />
    <title>Value Modal 2</title>
    <style>
        body {
            margin: 0px;
        }
        .container {
            border: 1px solid black;
            height: 250px;
            padding-top: 20px;
            margin-top: 20px;
            padding-left: 20px;
        }

        .container button {
            width: 270px;
        }

        table tr td {
            padding: 10px;
        }

        table {
            width: 100%;
        }

        #firstcol {
            width: 5%;
        }

        #secondcol {
            width: 95%;
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
        <table>
            <tr>
                <td id="firstcol">Name</td>
                <td id="secondcol"><input type="text" name="name" id="name"></td>
            </tr>
            <tr>
                <td id="firstcol">Note</td>
                <td id="secondcol"><input type="text" name="note" id="note"></td>
            </tr>
            <tr>
                <td colspan="2">
                    <button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#exampleModal" id="submit">
                        Submit
                    </button>
                </td>
            </tr>
        </table>

        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">
                            Message
                        </h5>

                        <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">
                                x
                            </span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <h6 id="modal-body"></h6>
                        <button class="btn btn-success btn-sm" id="submit" type="button" data-toggle="modal" data-target="#exampleModal">
                            Submit
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script type="text/javascript">

    </script>
</body>
</html>
