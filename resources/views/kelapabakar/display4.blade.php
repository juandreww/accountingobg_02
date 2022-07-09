<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Display:4</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Merriweather&display=swap');
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@200&family=Source+Sans+Pro&display=swap');

        body {
            margin: 0;
            /* font-family: 'Merriweather', serif; */
            font-family: 'Source Sans Pro', sans-serif;
        }

        .pg_header {
            height: 56px;
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

        .kb_add {
            display: inline-block;
            position: absolute;
            /* height: 100%; */
            height: 25px;
            left: 960px;
            width: 25px;
            background-color: #f5f5f5;
            /* margin-left: 10px; */
            /* margin-right: 10px; */
            padding: 8px;
            border-radius: 6px 6px 6px 6px;
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

        #ct_header_fsearchbox {
            float: left;
        }

        #fox-logo {
            width: 36px;
            height: 36px;
            margin-left: 20px;
            margin-right: 10px;
        }


        .material-symbols-outlined {
            font-variation-settings:
            'FILL' 1,
            'wght' 700,
            'GRAD' 0,
            'opsz' 48
        }

        .ct_header_searchcontainer .material-symbols-outlined {
            font-size: 40px;
            color: black;

        }

        .pg_sidenav li {
            padding-top: 8px;
            padding-left: 20px;
            font-size: 18px;
        }

        .pg_sidenav li a {
            text-decoration: none;
            color: black;
            font-size: 14px;
        }

        .pg_header a {
            padding-right: 12px;
            padding-left: 12px;
            text-decoration: none;
            color: black;
        }

        #sof_pro {

            font-weight: 100;
        }

        .pg_sidenav li:hover {
            background-color: #e6effc;
        }

        .pg_sidenav li a:active {
            color: #234b8f;
            background-color: #e6effc;
        }

        .pg_header ul {
            display: flex;
            margin: 0;
            padding-left: 20px;
            height: 60px;
        }

        .pg_header ul li {
            display: flex;
            list-style: none;
            align-items: flex-end;
        }
        .pg_header ul li a {
            position: relative;
            display: block;
            padding: 10px 10px 15px;
            text-decoration: none;
            font-size: 14px;
        }

        .pg_header ul li a.active {
            color: #234b8f;
            border-bottom: 3px solid #234b8f;
        }

        .pg_header ul li a:hover {
            color: #234b8f;
            background-color: #e6effc;
        }

        .pg_header ul li button {
            margin-bottom: 8px;
            background-color: #0055c9;
        }

        header {
            position: relative;
            z-index: 2;
            padding-left: 12px;
            padding-right: 12px;
            display: flex;
            flex-shrink: 0;
            box-sizing: border-box;
            -webkit-box-pack: justify;
            justify-content: space-between;
            height: 56px;
            -webkit-box-align: center;
            align-items: center;
            background-color: var(--ds-background-color-default, #ffffff);
            color: var(--ds-text-lowEmphasis, #6b778c);
        }

        .pgh_nav {
            -webkit-box-align: center;
            align-items: center;
            display: flex;
            -webkit-box-flex: 1;
            flex-grow: 1;
            min-width: 0px;
            height: inherit;
        }

        .pghn_ppt2 {
            display: inline-block;
            flex-shrink: 0;
            line-height: 1;
        }

        .pghn_ppt1 {
            transition: opacity 0.3s ease 0s;
            opacity: 1;
            align-self: 1;
            display: flex;
            --webkit-box-flex: 0;
            flex-grow: 0;
            flex-shrink: 0;
            line-height: 0;
            font-size: 0px;
            user-select: none;
            margin: 0px 2px;
        }

        .pghn_ppt {
            -webkit-box-align: baseline;
            align-items: baseline;
            box-sizing: border-box;
            display: flex;
            font-size: inherit;
            font-style: normal;
            font-family: inherit;
            font-weight: 500px;
            max-width: 100%;
            position: relative;
            text-align: center;
            white-space: nowrap;
            color: var(--ds-text-mediumEmphasis,#344563);
            cursor: pointer;
            height: auto;
            line-height: 2.28571em;
            vertical-align: middle;
            width: auto;
            -webkit-box-pack: center;
            justify-content: center;
            background-color: var(--ds-background-selected-resting);
            border-width: 0px;
            border-radius: 100%;
            text-decoration: none;
            transition: background 0.1s ease-out 0s, box-shadow 0.15s cubic-bezier(0.47, 0.03, 0.49, 1.38) 0s;
            padding: 4px;
            outline: none;
            margin: 0px 2px;
        }

        .pgh_nav button:hover {
            color: var(--ds-text-mediumEmphasis,#0052CC);
            background-color: var(--ds-background-subtleNeutral-hover,rgba(222,235,255,0.9));
        }

        .pghn_ppt .pghn_ppt_tooltip {
            visibility: visible;
            width: 80px;
            height: 100%;
            background-color: var(--ds-background-boldNeutral-resting,#172B4D);
            color: var(--ds-text-onBold,#FFFFFF);
            text-align: center;
            border-radius: 6px;
            position: absolute;
            z-index: 800;
            font-size: 12px;
            left: 10px;
            top: 30px;
            align-items: center;
            text-align: center;
        }

        .pghn_ppt:hover .pghn_ppt_tooltip {
            visibility: visible;
        }

        .pghn_ppt .tooltip {
            position: fixed;
            inset: 0px auto auto 0px;
            transform: translate(5px, 52px);
        }


    </style>

    {{-- CSS --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />

</head>
<body>
    <div class="pg_header">
        <header role="banner" class ="pgh">
            <nav aria-label="Primary Navigation" class ="pgh_nav">
                <div role="presentation">
                    <button aria-expanded="false" aria-hashpopup="true" class="pghn_ppt" type="button" tabindex="0">
                        <span class="pghn_ppt1">
                            <span role="img" aria-label="Appswitcher Icon" class="material-symbols-outlined pghn_ppt2" style="--icon-primary-color:currentColor; --icon-secondary-color:var(--ds-surface, #ffffff);">
                                apps
                            </span>
                        </span>
                        <div role="tooltip" class ="pghn_ppt_tooltip tooltip" data-placement="bottom" id="pghn_ppt_tooltip">Switch to...</div>
                    </button>
                </div>
                <a href=""></a>
                <div class="pgh_nav1"></div>
            </nav>
        </header>

        {{-- <ul>
            <li><a href="/kelapabakar/list">Odessa Silverberg Software</a></li>
            <li><a href="/kelapabakar/dashboard">Your work</a></li>
            <li><a href="/kelapabakar/display3">Projects</a></li>
            <li><a href="/kelapabakar/display2">Filters</a></li>
            <li><a href="/kelapabakar/display4">Dashboards</a></li>
            <li><a href="/kelapabakar/display1">People</a></li>
            <li><a href="/kelapabakar/display2">Apps</a></li>
            <li><button type="button" class="btn btn-primary">Create</button></li>
        </ul> --}}
    </div>
    <div class="pg_sidenav active">
        <li><a href="#" id="sof_pro" class="active">Software Project</a></li>
        <li class="active"><a href="/kelapabakar/list">PLANNING</a></li>
        <li>
            <div class="roadmap">
                <span class="material-symbols-outlined">storage</span><a href="#">Roadmap</a>
            </div>
        </li>
        <li class="active"><a href="/kelapabakar/display3">Board</a></li>
        <li><a href="#">DEVELOPMENT</a></li>
        <li><a href="#">Code</a></li>
        <li><a href="#">Project Pages</a></li>
        <li><a href="#">Add Shortcut</a></li>
        <li><a href="#">Project Settings</a></li>

    </div>
    <div class="pg_sidenav_shadow"></div>
    <div class="ct_header">
        <div class="ct_header_breadcrumbs">Projects / odessaobg</div>
        <div class="ct_header_title">OD Board</div>
        <div class="ct_header_searchcontainer">
            <form action="/action" id="ct_header_fsearchbox">
                <input type="text" placeholder="" name="search" id="ct_header_searchbox">
                <button type="submit" id="ct_header_searchbutton"><i class="fa fa-search"></i></button>
            </form>
            {{-- <span id="ct_header_profpic">abc</span> --}}
            <a href="#"><img src="{{ URL::to('/assets/img/fox_logo.jpg') }}" id="fox-logo"></a>
            <a href="#"><span class="material-symbols-outlined">person_add</span></a>
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
        <div class="kb_add">
            <a href="#"><span class="material-symbols-outlined">add</span></a>
        </div>
    </div>

    {{-- JS --}}
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.min.js" integrity="sha384-VHvPCCyXqtD5DqJeNxl2dtTyhF78xXNXdkwX1CZeRusQfRKp+tA7hAShOK/B/fQ2" crossorigin="anonymous"></script>

    <script type="text/javascript">
        $(document).on('click', '.pg_header ul li', function() {
            $(this).addClass('active').siblings.removeClass('active')
        })

        const currentLocation = location.href;
        console.log('Current Location ' + currentLocation);
        const menuItem = document.querySelectorAll('.pg_header ul li a');
        console.log('Menu Item ' + menuItem);
        console.dir(menuItem);
        const menuLength = menuItem.length;
        console.log(menuLength);
        for (let i = 0; i<menuLength; i++) {
            if (menuItem[i].href === currentLocation) {
                console.log('ItemActive' + i);
                menuItem[i].className = "active";
            }
        }
    </script>
</body>
</html>
