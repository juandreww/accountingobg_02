<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="_token" content="{{csrf_token()}}" />
    <title>Value Modal 5</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700&display=swap');

        body {
            margin: 0;
            font-family: "Poppins", sans-serif;
        }

        .container {
            position: absolute;
            left: 50%;
            top: 50%;
            transform: translate(-50%, -50%);
            z-index: 1;
        }

        th {
            background-color: #eeff41 !important;
        }


        tr:nth-child(odd) {
            background-color: #eeeeee;
        }

        table {
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
                <table class="table table-bordered">
                    <tr>
                        <th style="width: 250px">DATE</th>
                        <th style="width: 350px">DESCRIPTION</th>
                        <th style="width: 250px">AMOUNT</th>
                    </tr>
                    @foreach ($data as $row)
                        <tr>
                            <td>{{$row->date}}</td>
                            <td>{{$row->note}}</td>
                            <td>{{number_format($row->amount,2)}}</td>
                            <td>
                                @php
                                    $urledit = '/usingmoney/show?id=' . $row->uid;
                                    $urldelete = '/usingmoney/delete?id=' . $row->uid;
                                @endphp
                                <a href="{{$urledit}}">Edit</a>
                                <a href="{{$urldelete}}">Delete</a>
                            </td>
                        </tr>
                    @endforeach
                </table>
            </div>
        </div>


    </div>

    <div class="modal fade" id="exampleModal" tab-index="-1" aria-labelledby="examplemodalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="examplemodalLabel">Edit Transaction</h5>
                    <button class="xclose" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form>
                        <table>
                            <div class="form-group">
                                <label for="date" class="col-form-label"></label>
                                <input type="date" class="form-control" id="dateinput">
                            </div>
                            <div class="form-group">
                                <label for="amount" class="col-form-label">Amount</label>
                                <input type="text" class="form-control" id="amount" name="amount" value="">
                            </div>
                            <div class="form-group">
                                <label for="note" class="col-form-label">Note</label>
                                <input type="text" class="form-control" id="note" name="note"value="">
                            </div>
                        </table>
                    </form>
                </div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button class="btn btn-primary" type="submit" name="submit2" value="Submit" id="submit2">Submit</button>
                </div>
            </div>
        </div>
    </div>

    <script type="text/javascript">
    //     function openModal() {
    //         var href = $("a").attr("href");
    //         var slash = href.lastIndexOf("?");
    //         var text = href.substring(slash + 1);

    //         var searchParams = new URLSearchParams(text);
    //         var date = null;
    //         var amount = null;
    //         var note = null;
    //         console.info(text);

    //         searchParams.forEach(function(value, key) {
    //             if (key == 'date') {
    //                 date = value;
    //             } else if (key == 'amount'){
    //                 amount = value;
    //             } else if (key == 'note'){
    //                 note = value;
    //             }
    //         });

    //         console.info(date);
    //         console.info(amount);
    //         console.info(note);
    //         $("#date").val(date);
    //         $("#amount").val(amount);
    //         $("#note").val(note);
    //     }
    // </script>
</body>
</html>
