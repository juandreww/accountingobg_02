<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="_token" content="{{csrf_token()}}" />
        <title>UsingMoney</title>
        <style>
            .modal {
                display: none; /* Hidden by default */
                position: fixed; /* Stay in place */
                z-index: 1; /* Sit on top */
                padding-top: 100px; /* Location of the box */
                left: 0;
                top: 0;
                width: 100%; /* Full width */
                height: 100%; /* Full height */
                overflow: auto; /* Enable scroll if needed */
                background-color: rgb(0,0,0); /* Fallback color */
                background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
            }
        </style>
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
                        <button type="button" class="btn btn-primary ml-3" data-toggle="modal" data-target="#exampleModal" id ="minebutton" style="background-color:blue">
                            Add Transaction
                        </button>
                    </div>
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
                                <th>DATE</td>
                                <th>DESCRIPTION</td>
                                <th>AMOUNT</td>
                            </tr>
                            @foreach($data as $d)
                                <tr>
                                    <td>{{$d->date}}</td>
                                    <td>{{$d->note}}</td>
                                    <td>{{$d->amount}}</td>
                                </tr>
                            @endforeach
                        </table>
                    </div>
                </div>
            </div>
        </div>

        <div class="button-tester">
            <div class="container">
                <!-- Modal -->
                <div id="exampleModal" class="modal">

                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Add Transaction</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                            </div>
                            <div class="modal-body">
                                <form>
                                    <div class="form-group">
                                        <label for="date" class="col-form-label">Date</label>
                                        <input type="date" class="form-control" id="dateinput">
                                    </div>
                                    <div class="form-group">
                                        <label for="amount" class="col-form-label">Amount</label>
                                        <input type="text" class="form-control" id="amount">
                                    </div>
                                    <div class="form-group">
                                        <label for="note" class="col-form-label">Note</label>
                                        <input type="text" class="form-control" id="note">
                                    </div>
                                </form>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                {{-- <button type="button" class="btn btn-primary" name="save-details" onclick="save()" data-toggle="modal" data-target="#myModalList" data-dismiss="modal">Save</button> --}}
                                <button type="submit" class="btn btn-primary" type="submit" name="submit" value="Submit" id="ajaxSubmit">Save</button>
                            </div>
                        </div>
                    </div>

                </div>
                {{-- <div class="dropdown">
                    <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Dropdown button
                    </button>
                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                        <a class="dropdown-item" href="#">Action</a>
                        <a class="dropdown-item" href="#">Another action</a>
                        <a class="dropdown-item" href="#">Something else here</a>
                    </div>
                </div> --}}
            </div>
        </div>

        <script>
            let email = 'juandreww@email.com';

            let substr = email.lastIndexOf('e');
            console.log(substr);

            let substr2 = email.slice(2,5); // start dri index brp, end di index brp
            console.log(substr2);

            let susbstr3 = email.substr(4,10); // start dr index brp, panjangnya berapa
            console.log(susbstr3);

            let str4 = email.replace('a', 'o');
            console.log(str4);

            let str5 = 5 / 'hello';
            console.log(str5);

            let title = 'Marcus went to shop';
            let number = '10';
            let numsuffix = 'ago';

            str6 = 'I saw ' + title + ' ' + number + ' minutes ' + numsuffix;
            str7 = `I saw ${title} ${number} minutes ${numsuffix}`;

            console.log(str6);
            console.log(str7);
        </script>
        <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.min.js" integrity="sha384-VHvPCCyXqtD5DqJeNxl2dtTyhF78xXNXdkwX1CZeRusQfRKp+tA7hAShOK/B/fQ2" crossorigin="anonymous"></script>
        <script>
            jQuery(document).ready(function(){
               jQuery('#ajaxSubmit').click(function(e){
                  e.preventDefault();
                  $.ajaxSetup({
                     headers: {
                         'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
                     }
                 });
                  jQuery.ajax({
                     url: "{{ url('/usingmoney/savetransaction') }}",
                     method: 'post',
                     data: {
                        date: jQuery('#dateinput').val(),
                        amount: jQuery('#amount').val(),
                        note: jQuery('#note').val(),
                     },
                     success: function(result){
                         if(result.errors)
                         {
                             jQuery('.alert-danger').html('');

                             jQuery.each(result.errors, function(key, value){
                                 jQuery('.alert-danger').show();
                                 jQuery('.alert-danger').append('<li>'+value+'</li>');
                             });
                         }
                         else
                         {
                             jQuery('.alert-danger').hide();
                             $('#minebutton').hide();
                             $('#exampleModal').modal('hide');
                         }
                     }});
                  });
               });
         </script>

    </body>
</html>
