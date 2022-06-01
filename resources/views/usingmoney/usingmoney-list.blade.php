<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="_token" content="{{csrf_token()}}" />
        <title>UsingMoney</title>
        <style>
            @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700&display=swap');
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

            * {
                margin: 0;
                padding: 0;
                box-sizing: border-box;
                font-family: "Poppins", sans-serif;
            }

            .sidebar {
                max-width: 80px;
                min-width: 80px;
                position: fixed;
                top: 0;
                left: 0;
                height: 100%;
                border-style: solid;
                text-align: center;
                background: #F5EDF6;
                border-color: #F5EDF6;
                overflow: hidden;
            }

            .sidebar-button {
                color: #94849C;
            }

            .homecontent {
                position: relative;
                left: 81px;
            }

            .configbuttontop {
                height: 81px;
                margin-top: 20px;
            }

            .configbuttonmiddle {
                height: 770px;
            }

            .sidebar .configbuttonmiddle .sidebar-button .material-symbols-outlined {
                font-variation-settings:
                'FILL' 1,
                'wght' 400,
                'GRAD' 0,
                'opsz' 48
            }

            .exportexcel .material-symbols-outlined {
                font-variation-settings:
                'FILL' 1,
                'wght' 400,
                'GRAD' 0,
                'opsz' 48
            }

            .exportexcel a{
                color:#94849C;
            }

            .exportexcel span{
                color:#94849C;
            }

            .sidebar .configbuttonmiddle ul {
                margin: 0 5px;
                align-items: center;
                position: absolute;
                transform: translateX(-30%);
                line-height: 50px;
            }

            .sidebar .configbuttonmiddle ul li {
                list-style: none;
            }

            .sidebar .configbuttonmiddle ul li a{
                color:#94849C;
            }

            .blockbutton {
                display: block;
                width: 100%;
            }

            .configheader-total {
                display: flex;
                justify-content: center;
                align-items: center;
                /* padding-left: 5px; */
            }

        </style>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <link rel="stylesheet" href="https://fonts.sandbox.google.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    </head>
    <body>
        <div class="sidebar">
            <div class="configbuttontop align-middle">
                <div class="sidebar-button">
                    <span class="material-symbols-outlined md-36" style="font-size: 32px">
                        menu
                    </span>
                </div>
            </div>
            <div class="configbuttonmiddle">
                <ul class="sidebar-button">
                    <li><a href='/usingmoney/list'><span class="material-symbols-outlined md-36" style="font-size: 32px">house</span></a></li>
                    <li><a href='/usingmoney/formtransaction'><span class="material-symbols-outlined md-36" style="font-size: 32px">account_balance_wallet</span></a></li>
                    <li><a href='/usingmoney/dashboard'><span class="material-symbols-outlined md-36" style="font-size: 32px">logout</span></a></li>
                </div>
            </div>
        </div>
        <div class="homecontent">
            <div class="configheader">
                <div class="table table-responsive w-100 d-block d-md-table col-12" style="border-collapse: collapse; margin-bottom:0rem; margin-left: 11px;">
                    <div class="row border-bottom w-100 no-gutters">
                        @php
                            $totalamount = 0;
                        @endphp
                        @foreach ($data as $d)
                            @php
                                $totalamount += $d->amount;
                            @endphp
                        @endforeach
                        <div class="col-2 configheader-total">Total: <strong>{{ number_format($totalamount,2) }}</strong></div>
                        <div class="col-1"><img src="{{ URL::to('/assets/img/logo_black_64.png') }}"></div>
                        <div class="col-1 align-self-center"></div>
                        <div class="col-1 align-self-center"></div>
                        <div class="col-3"></div>
                        <div class="col-2 align-self-center" style="text-align:right">
                            <button type="button" class="btn btn-primary ml-3 blockbutton" data-toggle="modal" data-target="#exampleModal" id ="minebutton" style="display: inline-block; background-color:#94849C; border-color: #94849C">
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
                                    {{-- @php
                                        $url = '/usingmoney/list?id=' . $d->uid;
                                    @endphp --}}
                                    {{-- <a href= {{$url}} class="edit-modal-dialog stretched-link" data-toggle="modal" data-target="#exampleModal" id ="minebutton"> --}}
                                    <tr>
                                        <td>{{$d->date}}</td>
                                        <td>{{$d->note}}</td>
                                        <td>{{number_format($d->amount,2)}}</td>
                                    </tr>
                                    {{-- </a> --}}
                                @endforeach
                            </table>
                            <div class="exportexcel">
                                <a href="/usingmoney/exportexcel"><span class="material-symbols-outlined md-36" style="font-size: 32px">description</span></a>
                                <span class="material-symbols-outlined md-36" data-toggle="modal" data-target="#calendarModal" id ="calendarbutton" style="font-size: 32px">calendar_month</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="button-addtransaction">
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
                                        <table style="width:100%">
                                            <div class="form-group">
                                                <label for="date" class="col-form-label">Date</label>
                                                <input type="date" class="form-control" id="dateinput">
                                            </div>
                                            <div class="form-group">
                                                <div class="row">
                                                    <div class="col" style="width:50%">
                                                        <label for="category1" class="col-form-label">Category 1</label>
                                                        <input type="text" class="form-control" id="category1">
                                                    </div>
                                                    <div class="col" style="width:50%">
                                                        <label for="category2" class="col-form-label">Category 2</label>
                                                        <input type="text" class="form-control" id="category2">
                                                    </div>
                                                </div>

                                            </div>
                                            <div class="form-group col-3" style="width:50%">

                                            </div>
                                            <div class="form-group">
                                                <label for="amount" class="col-form-label">Amount</label>
                                                <input type="text" class="form-control" id="amount" name="amount" value=""/>
                                            </div>
                                            <div class="form-group">
                                                <label for="note" class="col-form-label">Note</label>
                                                <input type="text" class="form-control" id="note" name="note" value=""/>
                                            </div>
                                        </table>
                                    </form>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                    {{-- <button type="button" class="btn btn-primary" name="save-details" onclick="save()" data-toggle="modal" data-target="#myModalList" data-dismiss="modal">Save</button> --}}
                                    <button type="submit" class="btn btn-primary" name="submit" value="Submit" id="ajaxSubmit">Save</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="button-calendar">
                <div class="container">
                    <div class="modal" id="calendarModal">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="calendarModal-label">Date Range</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <form action="">
                                        <table style="width:100%">
                                            <div class="form-group">
                                                <div class="row">
                                                    <div class="col" style="width:50%">
                                                        <label for="datefrom" class="col-form-label">DateFrom</label>
                                                        <input type="date" class="form-control" id="datefrom">
                                                    </div>
                                                    <div class="col" style="width:50%">
                                                        <label for="dateuntil" class="col-form-label">DateUntil</label>
                                                        <input type="date" class="form-control" id="dateuntil">
                                                    </div>
                                                </div>
                                            </div>
                                        </table>
                                    </form>
                                </div>
                                <div class="modal-footer">
                                    <button class="btn btn-secondary" data-dismiss="modal">Close</button>
                                    <button class="btn btn-primary" type="submit" name="submit" value="Submit" id="ajaxSubmitCalendar">Save</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        {{-- <script type="text/javascript" src="{{ asset('/js/usingmoney.js') }}">
        </script> --}}
        <script>
            // console.log(document.querySelectorAll('span'));
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
                             $('#minebutton');
                             $('#exampleModal').modal('hide');
                         }
                     }});
                  });
               });

                $(document).on("click", ".edit-modal-dialog", function () {
                var amount = $(this).data('amount');
                $(".modal-body #amount").val( amount );
            });
            jQuery(document).ready(function() {
                jQuery('#ajaxSubmitCalendar').click(function(e) {
                    e.preventDefault();
                    $.ajaxSetup({
                        headers: {
                            'X-CSRF-TOKEN': $('meta[name="_token]').attr('content')
                        }
                    });
                    jQuery.ajax({
                        url: " {{ url('/usingmoney/list') }}",
                        method: 'get',
                        data: {
                            datefrom: jQuery('#datefrom').val(),
                            dateuntil: jQuery('#dateuntil').val(),
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
                                $('#calendarbutton');
                                $('#calendarModal').modal('hide');
                            }
                        }
                    });
                });

                $('#calendarModal').on('click', function () {
                    var datefrom = $(this).data('datefrom');
                    location.href = "/usingmoney/list?datefrom=" + jQuery('#datefrom').val() + "&dateuntil=" + jQuery('#dateuntil').val();
                });
            });

        </script>
    </body>
</html>
