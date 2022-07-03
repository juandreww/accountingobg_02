<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Display:3</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Merriweather&display=swap');

        body {
            margin: 0;
            font-family: 'Merriweather', serif;
        }

        .pg_header {
            height: 80px;
            width: 100%;
            position: fixed;
            z-index: 1;
            top: 0;
            left: 0;
            background-color: white;
            box-shadow: 0px 0.1px 3px #888888;
        }

        .pg_sidenav {
            position: fixed;
            top: 80px;
            background-color: #fafbfd;
            height: 100%;
            width: 250px;
        }

        .pg_sidenav_shadow {
            position: fixed;
            top: 80px;
            left: 250px;
            background-color: #d9d9d9;
            width: 0.5px;
            height: 100%;
            box-shadow: -0.1px 0px 1px #888888;
        }

        .ct_header {
            position: fixed;
            top: 80px;
            left: 270px;
            height: 200px;
        }

        .ct_body {
            position: fixed;
            top: 300px;
            left: 260px;
            height: 100%;
        }

        .kb_today {
            display: inline-block;
            position: absolute;
            height: 100%;
            width: 200px;
            background-color: #f5f5f5;
            margin-left: 10px;
            margin-right: 10px;
            padding: 8px;
            border-radius: 12px 12px 0px 0px;
        }

        .kb_tomorrow {
            display: inline-block;
            position: absolute;
            height: 100%;
            left: 240px;
            width: 200px;
            background-color: #f5f5f5;
            margin-left: 10px;
            margin-right: 10px;
            padding: 8px;
            border-radius: 12px 12px 0px 0px;
        }

        .kb_nextweek {
            display: inline-block;
            position: absolute;
            height: 100%;
            left: 480px;
            width: 200px;
            background-color: #f5f5f5;
            margin-left: 10px;
            margin-right: 10px;
            padding: 8px;
            border-radius: 12px 12px 0px 0px;
        }

        .kb_done {
            display: inline-block;
            position: absolute;
            height: 100%;
            left: 720px;
            width: 200px;
            background-color: #f5f5f5;
            margin-left: 10px;
            margin-right: 10px;
            padding: 8px;
            border-radius: 12px 12px 0px 0px;
        }

        #kb_header {
            display: inline-block;
            width: 100%;
            padding: 2px;
            color: grey;
            font-size: 14px;
            margin-bottom: 20px
        }

        #kb_today_content {
            display: inline-block;
            height: 50px;
            max-height: 50px;
            width: 177px;
            background-color: #fff;
            font-size: 14px;
            padding: 5px 10px 5px 10px;
            margin-top: 5px;
            margin-bottom: 5px;
            border: 2px solid #888888;
            border-radius: 4px 4px 4px 4px;
            box-shadow: 1px 1px 1px #888888;
        }

        #checklist {
            color: green;
            font-size: 16px;
        }

        .ct_header_searchcontainer form {
            display: flex;
        }

        .ct_header_searchcontainer button {
            cursor: pointer;
        }

        #ct_header_searchbox {
            display: inline-block;
            height: 2.57em;
        }

        #ct_header_searchbutton {
            display: inline-block;
        }

        .ct_header_breadcrumbs {
            margin-top: 40px;
            font-size: 14px;
            color: #888888;
        }

        .ct_header_title {
            margin-top: 40px;
            font-weight: bold;
            font-size: 22px;
        }

        .ct_header_searchcontainer {
            margin-top: 25px;
            display: block;
        }

        #ct_header_profpic {
            display: inline-block;
        }


    </style>
</head>
<body>
    <div class="pg_header">This is page Header</div>
    <div class="pg_sidenav">This is page Sidenav</div>
    <div class="pg_sidenav_shadow"></div>
    <div class="ct_header">
        <div class="ct_header_breadcrumbs">Projects / odessaobg</div>
        <div class="ct_header_title">OD Board</div>
        <div class="ct_header_searchcontainer">
            <form action="/action">
                <input type="text" placeholder="" name="search" id="ct_header_searchbox">
                <button type="submit" id="ct_header_searchbutton"><i class="fa fa-search"></i></button>
            </form>
            <span id="ct_header_profpic">abc</span>
        </div>
    </div>
    <div class="ct_body">
        <div class="kb_today">
            <span id="kb_header">KANBAN TODAY</span>
            <span id="kb_today_content">Beli Jeruk 10 pcs</span>
            <span id="kb_today_content">Beli Apel 10 pcs</span>
            <span id="kb_today_content">Beli Anggur 10 pcs</span>
            <span id="kb_today_content">Kupas Jeruk 3 pcs</span>
            <span id="kb_today_content">Masukkan Jeruk & Anggur ke Kulkas</span>
            <span id="kb_today_content">Kupas Anggur 5 pcs</span>
        </div>
        <div class="kb_tomorrow">
            <span id="kb_header">KANBAN TOMORROW</span>
            <span id="kb_today_content">Beli Mangga & Pear 10 pcs</span>
            <span id="kb_today_content">Sajikan 6 pcs Mangga di ruang tamu</span>
            <span id="kb_today_content">Berikan 8 pcs Pear ke tetangga</span>
            <span id="kb_today_content">Jus 2 pcs Pear</span>
        </div>
        <div class="kb_nextweek">
            <span id="kb_header">KANBAN NEXTWEEK</span>
            <span id="kb_today_content">Beli Apel 30 pcs</span>
            <span id="kb_today_content">Sajikan 16 pcs Apel di ruang tamu</span>
            <span id="kb_today_content">Beri makan kucing 2 pcs Apel</span>
            <span id="kb_today_content">Buat adonan kue dengan 2 pcs Apel</span>
        </div>
        <div class="kb_done">
            <span id="kb_header">KANBAN DONE<span id="checklist">&nbsp;&nbsp;&nbsp;&nbsp;✓</span></span>
            <span id="kb_today_content">Kembalikan 5 pcs Apel berbau ke pasar</span>
            <span id="kb_today_content">Tukar 5 pcs Apel dengan 3 pcs Pisang</span>
            <span id="kb_today_content">Setelah olahraga makan 1 pcs Pisang</span>
            <span id="kb_today_content">Buat milkshake dg 1 pcs Pisang</span>
        </div>
    </div>
</body>
</html>