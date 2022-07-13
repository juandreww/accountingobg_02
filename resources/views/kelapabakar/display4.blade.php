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
            font-weight: 500;
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
            visibility: hidden;
            background-color: var(--ds-background-boldNeutral-resting,#172B4D);
            color: var(--ds-text-onBold,#FFFFFF);
            text-align: center;
            border-radius: 3px;
            position: fixed;
            inset: 0px auto auto 0px;
            transform: translate(5px, 52px);
            z-index: 800;
            cursor: default;
            font-size: 12px;
            align-items: center;
            text-align: center;
            max-width: 240px;
            overflow-wrap: break-word;
            line-height: 1.3;
            padding: 2px 6px;
        }

        .pghn_ppt:hover .pghn_ppt_tooltip {
            visibility: visible;
        }

        .pghn_ppt_modal {
            z-index: 400;
            display: none;
        }

        .pghn_ppt_modal1 {
            position: fixed;
            inset: 0px auto auto 0px;
            transform: translate(14px, 52px);
        }

        .pghn_ppt_modal1b {
            display: block;
            box-sizing: border-box;
            z-index: 400;
            flex: 1 1 auto;
            background-color: var(--ds-surface-overlay, #ffff);
            border-radius: 3px;
            box-shadow: var(--ds-shadow-overlay, 0 4px 8px -2px rgba(9,30, 66, 0.25), 0 0 1px rgba(9,30, 66, 0.31));
            overflow: auto;
        }

        .pghn_ppt_modal2 {
            width: 400px;
            max-height: calc(100vh - 100px);
        }

        .pghn_ppt_modct {
            padding: 16px 16px 0px;
            min-height: 200px;
            background-color: #fff;
        }

        .pghn_ppt_modct1 {
            box-sizing: border-box;
            height: 100%;
        }

        .pghn_ppt_modct2 {
            min-width: 280px;
            min-height: calc(100% - 60px);
        }

        .pghn_sc_switchto {
            padding: 8px 0px;
        }

        .pghn_sc_switchto-0 {
            display: flex;
            flex-wrap: nowrap;
            -webkit-box-align: baseline;
            align-items: baseline;
            -webkit-box-pack: end;
            justify-content: flex-end;
            margin-left: 8px;
            position: relative;
            margin-bottom: 8px;
            /* animation: 500ms ease 0s 1 normal forwards running ljGnjM;
            opacity: 0; */
        }

        .pghn_sc_switchto-1 {
            font-size: 1.14286em;
            font-style: inherit;
            line-height: 1.25;
            color: var(--ds-text, var(--ds-text,#172B4D));
            font-weight: 600;
            letter-spacing: -0.006em;
            white-space: nowrap;
            overflow: hidden;
            text-overflow: ellipsis;
            margin-bottom: 0px;
            flex: 1 1 0%;
        }

        .pghn_sc_switchto-url {
            -webkit-box-align: baseline;
            align-items: baseline;
            border-width: 0px;
            border-radius: 3px;
            box-sizing: border-box;
            display: inline-flex;
            font-size: inherit;
            font-style: normal;
            font-weight: 500;
            max-width: 100%;
            position: relative;
            text-align: center;
            text-decoration: none;
            transition: background 0.1s ease-out 0s, box-shadow 0.15s cubic-bezier(0.47, 0.03, 0.49, 1.38) 0s;
            white-space: nowrap;
            background: none;
            cursor: pointer;
            height: 2.28571em;
            line-height: 2.28571em;
            padding: 0px 10px;
            vertical-align: middle;
            width: auto;
            -webkit-box-pack: center;
            justify-content: center;
            color: var(--ds-link, #0052cc) !important;
        }

        .pghn_sc_switchto-url0 {
            transition: opacity 0.3s ease 0s;
            opacity: 1;
            margin: 0px 2px;
            -webkit-box-flex: 1;
            flex-grow: 1;
            flex-shrink: 1;
            overflow: hidden;
            text-overflow: ellipsis;
            white-space: nowrap;
        }

        .pghn_sc_switchto-url1 {
            transition: opacity 0.3s ease 0s;
            opacity: 1;
            align-self: center;
            display: flex;
            -webkit-box-flex: 0;
            flex-grow: 0;
            flex-shrink: 0;
            line-height: 0;
            font-size: 0px;
            user-select: none;
            margin: 0px 2px;
        }

        .pghn_sc_switchto-url1b {
            display: inline-block;
            flex-shrink: 0;
            line-height: 1;
            width: 16px;
            height: 16px;
        }
        /* .switchto_ani {
            animation: 500ms ease 0s 1 normal forwards running 1jGnJM;
            opacity: 0;
        } */

        .pghn_sc_switchto-sub1 {
            display: flex;
            -webkit-box-align: center;
            align-items: center;
            -webkit-box-pack: justify;
            justify-content: space-between;
            box-sizing: border-box;
            border-radius: 3px;
        }

        .pghn_sc_switchto-sub1b {
            width: 100%;
            overflow: hidden;
        }

        .pghn_sc_switchto-sub1c {
            border-radius: 3px;
            -webkit-box-flex: 1;
            flex-grow: 1;
        }

        .pghn_sc_switchto-sub1button:visited {
            color: currentcolor;
        }

        .pghn_sc_switchto-sub1button {
            display: flex;
            box-sizing: border-box;
            min-height: 40px;
            margin: 0px;
            -webkit-box-align: center;
            align-items: center;
            border: 0px;
            font-size: 14px;
            outline: 0px;
            user-select: none;
            cursor: pointer;
            background: transparent;
            border-radius: 3px;
            padding: 7px 8px;
            text-decoration: none;
            width: 100%;
        }

        .pghn_sc_switchto-sub1button [data-item-elem-before] {
            margin-right: 8px;
            padding-bottom: 1px;
        }

        .pghn_sc_switchto-sub1icon1 {
            display: flex;
            -webkit-box-align: center;
            align-items: center;
            flex-shrink: 0;
        }

        .pghn_sc_switchto-sub1iconbox1 {
            display: flex;
            -webkit-box-pack: center;
            justify-content: center;
            -webkit-box-align: center;
            align-items: center;
            width: 32px;
            height: 32px;
            border-radius: 8px;
            box-shadow: var(--ds-shadow-raised,0 1px 1px rgba(9,30,66,0.25), 0 0 1px 1px rgba(9,30, 66, 0.13));
            background-color: rgb(0,82,204);
            overflow: hidden;
        }
        .pghn_sc_switchto-sub1iconimg1 {
            width: 24px;
            height: 24px;
            color: white;
        }

        .pghn_sc_switchto-sub1text1 {
            display: flex;
            -webkit-box-pack: center;
            justify-content: center;
            flex-direction: column;
            -webkit-box-flex: 1;
            flex-grow: 1;
            line-height: 1.22;
            outline: none;
            overflow: hidden;
            text-align: left;
        }

        .pghn_sc_switchto_sub1text1b {
            display: block;
            overflow: hidden;
            text-overflow: ellipsis;
            white-space: nowrap;
        }

        .pghn_sc_switchto-sub1b:hover {
            background-color: var(--ds-background-neutral-subtle-hovered,#F4F5F7);
            color: currentColor;
        }

        .pghn_sc_man_list {
            -webkit-box-align: baseline;
            align-items: baseline;
            border-width: 0px;
            border-radius: 3px;
            box-sizing: border-box;
            display: inline-flex;
            font-size: inherit;
            font-style: normal;
            font-family: inherit;
            font-weight: 500;
            max-width: 100%;
            position: relative;
            text-align: center;
            text-decoration: inherit;
            transition: background 0s ease-out 0s, box-shadow 0.15s cubic-bezier(0.47, 0.03, 0.49, 1.38) 0s;
            white-space: nowrap;
            background: var(--ds-background-neutral, rgba(9,30,66,0.04));
            cursor: pointer;
            height: 2.28571em;
            line-height: 2.28571em;
            padding: 0px 10px;
            vertical-align: middle;
            width: auto;
            -webkit-box-pack: center;
            justify-content: center;
            outline: none;
            color: var(--ds-text,#42526e) !important;
        }


        .pghn_sc_man_list:hover {
            background: var(--ds-background-neutral-hovered,rgba(9,30,66,0.08));
        }

        .pghn_sc_man_list1 {
            transition: opacity 0.3s ease 0s;
            opacity: 1;
            margin: 0px 2px;
            -webkit-box-flex: 1;
            flex-grow: 1;
            flex-shrink: 1;
            overflow: hidden;
            text-overflow: ellipsis;
            white-space: nowrap;
        }

        .pghn_sc_animation1 {
            animation: 500ms ease 0s 1 normal forwards running 1jGnjM;
            opacity: 0s;
        }

        .pghn_sc_discoverh1 {
            font-size: 0.785714em;
            font-style: inherit;
            line-height: 1.45455;
            color: var(--ds-text-subtlest, var(--ds-text-subtlest, #6B778C));
            font-weight: 700;
            text-transform: uppercase;
            margin-left: 8px;
            white-space: nowrap;
            overflow: hidden;
            text-overflow: ellipsis;
            margin-bottom: 4px;
        }

        .pghn_sc_discover1_header1 {
            display: block;
            overflow: hidden;
            text-overflow: ellipsis;
            white-space: nowrap;
        }

        .pghn_sc_discover1_title {
            display: flex;
            -webkit-box-pack: center;
            justify-content: center;
            flex-direction: column;
            -webkit-box-flex: 1;
            flex-grow: 1;
            line-height: 1.22;
            outline: none;
            overflow: hidden;
            text-align: left;
        }

        .pghn_sc_discover1_tt1 {
            margin-top: 3px;
            display: block;
            overflow: hidden;
            text-overflow: ellipsis;
            white-space: nowrap;
        }

        .pghn_sc_discover_tt1font {
            color: rgb(107, 119, 140);
            font-size: 11px;
        }

        .pghn_sc_discover1href {
            display: flex;
            box-sizing: border-box;
            min-height: 40px;
            margin: 0px;
            -webkit-box-align: center;
            align-items: center;
            border: 0px;
            font-size: 14px;
            outline: 0px;
            user-select: none;
            cursor: pointer;
            background: transparent;
            border-radius: 3px;
            color: var(--ds-text,#091e42);
            padding: 7px 8px;
            text-decoration: none;
            width: 100%;
        }

        .pghn_sc_discover1_icon1 {
            display: flex;
            -webkit-box-align: center;
            align-items: center;
            flex-shrink: 0;
        }
        .pghn_sc_discover1_icon1margin {
            margin-right: 8px;
            padding-bottom: 1px;
        }

        .pghn_sc_discover1href {
            display: flex;
            box-sizing: border-box;
            min-height: 40px;
            margin: 0px;
            -webkit-box-align: center;
            align-items: center;
            border: 0px;
            font-size: 14px;
            outline: 0px;
            user-select: none;
            cursor: pointer;
            background: transparent;
            border-radius: 3px;
            color: var(--ds-text, #091e42);
            padding: 7px 8px;
            text-decoration: none;
            width: 100%;
        }

        .pghn_sc_discover1_icon1img {
            display: flex;
            -webkit-box-pack: center;
            justify-content: center;
            -webkit-box-align: center;
            align-items: center;
            width: 32px;
            height: 32px;
            border-radius: 8px;
            box-shadow: var(--ds-shadow-raised, 0 1px 1px rgba(9,30,66,0.25)),0 0 1px 1px rgba(9,30,66,0.13);
            background-color: rgb(235, 236, 240);
            overflow: hidden;
        }

        .pghn_sc_discover1href:hover {
            background-color: var(--ds-background-neutral-subtle-hovered,#F4F5F7);
            color: currentColor;
        }

        .pghn_sym_grp2 {
            color: rgb(0,82,204);
        }

        .pghn_sc_discover1_tryspan {
            display: inline-block;
            margin-left: 8px;
        }

        .pghn_sc_discover1_trybutton {
            background-color: var(--ds-background-information, #DEEBFF);
            color: var(--ds-text-information, #0747A6);
            display: inline-block;
            box-sizing: border-box;
            max-width: 100%;
            padding: 2px 0px 3px;
            border-radius: 3px;
            font-size: 11px;
            font-weight: 700;
            line-height: 1;
            text-transform: uppercase;
            vertical-align: baseline;
        }

        .pghn_sc_discover1_trytextbox {
            display: inline-block;
            box-sizing: border-box;
            width: 100%;
            padding: 0px 4px;
            overflow: hidden;
            text-overflow: ellipsis;
            vertical-align: top;
            white-space: nowrap;
        }

        .pghn_sc_discover1_trytext {
            padding-left: 8px;
            padding-right: 8px;
        }

        .pgh_logo {
            -webkit-box-align: center;
            align-items: center;
            padding: 4px;
            border-radius: 3px;
            border: 0px;
            background: none;
            display: flex;
            cursor: pointer;
            color: inherit;
        }

        .pgh_logo > * {
            max-height: 24px;
        }

        .pghl_label {
            display: inline-block;
            position: relative;
            color: #2684FF;
            fill: var(--logo-fill);
            user-select: none;
            height: 32px;
            -webkit-box-align: center;
            align-items: center;
            padding: 4px;
            border-radius: 3px;
            border: 0px;
            background: none;
            display: flex;
            cursor: pointer;
        }

        .pghn1_b1b {
            -webkit-box-align: baseline;
            align-items: baseline;
            box-sizing: border-box;
            display: inline-flex;
            font-size: inherit;
            font-style: normal;
            font-family: inherit;
            font-weight: 500;
            max-width: 100%;
            position: relative;
            text-align: center;
            white-space: nowrap;
            color: var(--ds-text-mediumEmphasis, #344563);
            cursor: pointer;
            height: 2.28571em;
            line-height: 2.28571em;
            vertical-align: middle;
            width: auto;
            -webkit-box-pack: center;
            justify-content: center;
            background-color: transparent;
            margin-left: 0px;
            margin-right: 0px;
            border-width: 0px;
            border-radius: 3px;
            text-decoration: none;
            transition: background 0.1s ease-out 0s, box-shadow 0.15s cubic-bezier(0.47, 0.03, 0.49, 1.38) 0s;
            padding: 0px 4px;
            outline: none;
        }

        .pghn1_b1tit {
            transition: opacity 0.3s ease 0s;
            opacity: 1;
            margin: 0px 2px;
            -webkit-box-flex: 1;
            flex-grow: 1;
            flex-shrink: 1;
            overflow: hidden;
            text-overflow: ellipsis;
            white-space: nowrap;
        }

        .pghn1_b1dropdown {
            transition: opacity 0.3s ease 0s;
            opacity: 1;
            align-self: center;
            display: flex;
            -webkit-box-flex: 0;
            flex-grow: 0;
            flex-shrink: 0;
            line-height: 0;
            font-size: 0px;
            user-select: none;
            margin: 0px 2px;
        }

        .pghn1_b1dropdown1 {
            margin-left: -8px;
            margin-right: -8px;
            opacity: 0.51;
        }

        .pghn1_b1dropdown2 {
            display: inline-block;
            flex-shrink: 0;
            line-height: 1;
            --icon-primary-color: currentColor;
            --icon-secondary-color: var(--ds-surface, #ffff);
        }

        .pgh_nav1 {
            -webkit-box-align: stretch;
            align-items: stretch;
            display: flex;
            -webkit-box-flex: 1;
            flex: 1 0 0px;
            height: 100%;
            position: relative;
        }

        .pgh_nav1 > * {
            flex-shrink: 0;
            margin: 0px 4px;
        }

        .pghn1_b1 {
            display: flex;
            flex-direction: column;
            -webkit-box-pack: center;
            justify-content: center;
            -webkit-box-align: center;
            align-items: center;
            height: 100%;
            position: relative;
        }

        @media (min-width: 1280px) {
            .pgh_logo {
                margin: 0px 16px;
            }
        }

        .pghn_yourwork {
            position: fixed;
            inset: 0px auto auto 0px;
            transform: translate(92px, 52px);
            display: block;
            box-sizing: border-box;
            z-index: 400;
            flex: 1 1 auto;
            background-color: var(--ds-surface-overlay, #fffff);
            border-radius: 3px;
            box-shadow: var(--ds-shadow-overlay, 0 4px 8px -2px rgba(9, 30, 66, 0.25), 0 0 1px rgba(9, 30, 66, 0.31));
            overflow: auto;
        }

        .pghn_yourwork1 {
            min-width: 320px;
            max-width: 800px;
        }

        .pghn_yourwork2 {
            max-height: calc(100vh - 200px);
            display: flex;
            flex-direction: column;
            overflow: auto;
        }

        .pghn_yourwork2_header {
            padding: 12px 12px 0px;
        }

        .pghn_yourwork2_headertab {
            display: flex;
            flex-basis: 100%;
            flex-direction: column;
            -webkit-box-flex: 1;
            flex-grow: 1;
            max-width: 100%;
            min-height: 0%;
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
                    <button aria-expanded="false" id ="pghn_ppt1_button" aria-hashpopup="true" class="pghn_ppt" type="button" tabindex="0" onclick="toggle('pghn_ppt_modal', 'pghn_ppt1_button')">
                        <span class="pghn_ppt1">
                            <span role="img" aria-label="Appswitcher Icon" class="material-symbols-outlined pghn_ppt2" style="--icon-primary-color:currentColor; --icon-secondary-color:var(--ds-surface, #ffffff);">
                                apps
                            </span>
                        </span>
                        <div role="tooltip" class ="pghn_ppt_tooltip" data-placement="bottom" id="pghn_ppt_tooltip">Switch to...</div>
                    </button>
                    <div class="pghn_ppt_modal" id="pghn_ppt_modal">
                        <div class="pghn_ppt_modal1 pghn_ppt_modal1b" data-placement="bottom-start" tabindex="0">
                            <div class="pghn_ppt_modal2">
                                <div class="pghn_ppt_modct">
                                    <div class="pghn_ppt_modct1">
                                        <div class="pghn_ppt_modct2">
                                            <section class="pghn_sc_switchto" data-testid="switchTo__section">
                                                <div class="pghn_sc_switchto-0 switchto_ani">
                                                    <h1 class="pghn_sc_switchto-1">
                                                        Switch to
                                                    </h1>
                                                    <a target="_blank" rel="noopener noreferrer" class="section-link pghn_sc_switchto-url" data-testid="section-title__link" tabindex="0" href="/kelapabakar/display4">
                                                        <span class="pghn_sc_switchto-url0">
                                                            Andrewsoft Start
                                                        </span>
                                                        <span class="pghn_sc_switchto-url1">
                                                            <span role="presentation" aria-hidden="true" class="pghn_sc_switchto-url1b material-symbols-outlined">
                                                                open_in_new
                                                            </span>
                                                        </span>
                                                    </a>
                                                </div>
                                                <div class="pghn_sc_switchto-sub switchto_ani">
                                                    <div class="pghn_sc_switchto-sub1">
                                                        <div class="pghn_sc_switchto-sub1b pghn_sc_switchto-sub1c">
                                                            <div class="pghn_sc_switchto-sub1div">
                                                                <a data-testid="switcher-item__JIRA_SOFTWAREodessaobg" class="pghn_sc_switchto-sub1button" tooltipcontent="[object Object]" href="/kelapabakar/list1" draggable="false" aria-disabled="false">
                                                                    <span data-item-elem-before="true" class="pghn_sc_switchto-sub1icon1">
                                                                        <div class="pghn_sc_switchto-sub1iconbox1">
                                                                            <span class="material-symbols-outlined pghn_sc_switchto-sub1iconimg1">
                                                                                settings_accessibility
                                                                            </span>
                                                                        </div>
                                                                    </span>
                                                                    <span class="pghn_sc_switchto-sub1text1">
                                                                        <span class="pghn_sc_switchto_sub1text1b" data-item-title="true">Find People</span>
                                                                    </span>
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="pghn_sc_switchto-sub switchto_ani">
                                                    <div class="pghn_sc_switchto-sub1">
                                                        <div class="pghn_sc_switchto-sub1b pghn_sc_switchto-sub1c">
                                                            <div class="pghn_sc_switchto-sub1div">
                                                                <a data-testid="switcher-item__JIRA_SOFTWAREodessaobg" class="pghn_sc_switchto-sub1button" tooltipcontent="[object Object]" href="/kelapabakar/list2" draggable="false" aria-disabled="false">
                                                                    <span data-item-elem-before="true" class="pghn_sc_switchto-sub1icon1">
                                                                        <div class="pghn_sc_switchto-sub1iconbox1">
                                                                            <span class="material-symbols-outlined pghn_sc_switchto-sub1iconimg1">
                                                                                business_centre
                                                                            </span>
                                                                        </div>
                                                                    </span>
                                                                    <span class="pghn_sc_switchto-sub1text1">
                                                                        <span class="pghn_sc_switchto_sub1text1b" data-item-title="true">Work Management</span>
                                                                    </span>
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="pghn_sc_switchto-sub switchto_ani">
                                                    <div class="pghn_sc_switchto-sub1">
                                                        <div class="pghn_sc_switchto-sub1b pghn_sc_switchto-sub1c">
                                                            <div class="pghn_sc_switchto-sub1div">
                                                                <a data-testid="switcher-item__JIRA_SOFTWAREodessaobg" class="pghn_sc_switchto-sub1button" tooltipcontent="[object Object]" href="/kelapabakar/list3" draggable="false" aria-disabled="false">
                                                                    <span data-item-elem-before="true" class="pghn_sc_switchto-sub1icon1">
                                                                        <div class="pghn_sc_switchto-sub1iconbox1">
                                                                            <span class="material-symbols-outlined pghn_sc_switchto-sub1iconimg1">
                                                                                view_kanban
                                                                            </span>
                                                                        </div>
                                                                    </span>
                                                                    <span class="pghn_sc_switchto-sub1text1">
                                                                        <span class="pghn_sc_switchto_sub1text1b" data-item-title="true">Trello</span>
                                                                    </span>
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="pghn_sc_switchto-sub switchto_ani">
                                                    <div class="pghn_sc_switchto-sub1">
                                                        <div class="pghn_sc_switchto-sub1b pghn_sc_switchto-sub1c">
                                                            <div class="pghn_sc_switchto-sub1div">
                                                                <a data-testid="switcher-item__JIRA_SOFTWAREodessaobg" class="pghn_sc_switchto-sub1button" tooltipcontent="[object Object]" href="/kelapabakar/list4" draggable="false" aria-disabled="false">
                                                                    <span data-item-elem-before="true" class="pghn_sc_switchto-sub1icon1">
                                                                        <div class="pghn_sc_switchto-sub1iconbox1">
                                                                            <span class="material-symbols-outlined pghn_sc_switchto-sub1iconimg1">
                                                                                settings
                                                                            </span>
                                                                        </div>
                                                                    </span>
                                                                    <span class="pghn_sc_switchto-sub1text1">
                                                                        <span class="pghn_sc_switchto_sub1text1b" data-item-title="true">Administration</span>
                                                                    </span>
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </section>
                                            <section class="pghn_sc_discover" data-testid="discover__section">
                                                <div class="pghn_sc_discover1 pghn_sc_animation1">
                                                    <h1 class="pghn_sc_discoverh1">
                                                        Discover
                                                    </h1>
                                                </div>
                                                <div class="pghn_sc_discover1 pghn_sc_animation1">
                                                    <a href="/kelapabakar/list" data-testid="suggested-product__link" class="pghn_sc_discover1href" aria-disabled="false">
                                                        <span data-item-elem-before="true" class="pghn_sc_discover1_icon1 pghn_sc_discover1_icon1margin">
                                                            <div class="pghn_sc_discover1_icon1img">
                                                                <span role="img" aria-label="Appswitcher Icon" class="material-symbols-outlined pghn_sym_grp2" style="--icon-primary-color:currentColor; --icon-secondary-color:var(--ds-surface, #ffffff);">
                                                                    favorite
                                                                </span>
                                                            </div>
                                                        </span>
                                                        <span class="pghn_sc_discover1_title">
                                                            <span class="pghn_sc_discover1_header1" data-item-title="true">
                                                                Confluence
                                                                <span class="pghn_sc_discover1_tryspan">
                                                                    <span class="pghn_sc_discover1_trybutton">
                                                                        <span class="pghn_sc_discover1_trytextbox">
                                                                            <span class="pghn_sc_discover1_trytext">Try</span>
                                                                        </span>
                                                                    </span>
                                                                </span>
                                                            </span>
                                                            <span data-item-description="true" class="pghn_sc_discover1_tt1 pghn_sc_discover_tt1font">Document Collaboration</span>
                                                        </span>
                                                    </a>
                                                </div>
                                                <div class="pghn_sc_discover1 pghn_sc_animation1">
                                                    <a href="/kelapabakar/list" data-testid="suggested-product__link" class="pghn_sc_discover1href" aria-disabled="false">
                                                        <span data-item-elem-before="true" class="pghn_sc_discover1_icon1 pghn_sc_discover1_icon1margin">
                                                            <div class="pghn_sc_discover1_icon1img">
                                                                <span role="img" aria-label="Appswitcher Icon" class="material-symbols-outlined pghn_sym_grp2" style="--icon-primary-color:currentColor; --icon-secondary-color:var(--ds-surface, #ffffff);">
                                                                    shopping_cart_checkout
                                                                </span>
                                                            </div>
                                                        </span>
                                                        <span class="pghn_sc_discover1_title">
                                                            <span class="pghn_sc_discover1_header1" data-item-title="true">
                                                                Easy Service Management
                                                            </span>
                                                            <span data-item-description="true" class="pghn_sc_discover1_tt1 pghn_sc_discover_tt1font">Collaborative IT service management</span>
                                                        </span>
                                                    </a>
                                                </div>
                                                <div class="pghn_sc_discover1 pghn_sc_animation1">
                                                    <a href="/kelapabakar/list" data-testid="suggested-product__link" class="pghn_sc_discover1href" aria-disabled="false">
                                                        <span data-item-elem-before="true" class="pghn_sc_discover1_icon1 pghn_sc_discover1_icon1margin">
                                                            <div class="pghn_sc_discover1_icon1img">
                                                                <span role="img" aria-label="Appswitcher Icon" class="material-symbols-outlined pghn_sym_grp2" style="--icon-primary-color:currentColor; --icon-secondary-color:var(--ds-surface, #ffffff);">
                                                                    token
                                                                </span>
                                                            </div>
                                                        </span>
                                                        <span class="pghn_sc_discover1_title">
                                                            <span class="pghn_sc_discover1_header1" data-item-title="true">
                                                                OpsGenie
                                                            </span>
                                                            <span data-item-description="true" class="pghn_sc_discover1_tt1 pghn_sc_discover_tt1font">Modern incident management</span>
                                                        </span>
                                                    </a>
                                                </div>
                                                <div class="pghn_sc_discover1 pghn_sc_animation1">
                                                    <a href="/kelapabakar/list" data-testid="suggested-product__link" class="pghn_sc_discover1href" aria-disabled="false">
                                                        <span data-item-elem-before="true" class="pghn_sc_discover1_icon1 pghn_sc_discover1_icon1margin">
                                                            <div class="pghn_sc_discover1_icon1img">
                                                                <span role="img" aria-label="Appswitcher Icon" class="material-symbols-outlined pghn_sym_grp2" style="--icon-primary-color:currentColor; --icon-secondary-color:var(--ds-surface, #ffffff);">
                                                                    travel_explore
                                                                </span>
                                                            </div>
                                                        </span>
                                                        <span class="pghn_sc_discover1_title">
                                                            <span class="pghn_sc_discover1_header1" data-item-title="true">
                                                                Activa!
                                                            </span>
                                                            <span data-item-description="true" class="pghn_sc_discover1_tt1 pghn_sc_discover_tt1font">Integrate Activa! with your Andrewsoft products</span>
                                                        </span>
                                                    </a>
                                                </div>
                                                <div class="pghn_sc_discover1 pghn_sc_animation1">
                                                    <a href="/kelapabakar/list" data-testid="suggested-product__link" class="pghn_sc_discover1href" aria-disabled="false">
                                                        <span data-item-elem-before="true" class="pghn_sc_discover1_icon1 pghn_sc_discover1_icon1margin">
                                                            <div class="pghn_sc_discover1_icon1img">
                                                                <span role="img" aria-label="Appswitcher Icon" class="material-symbols-outlined pghn_sym_grp2" style="--icon-primary-color:currentColor; --icon-secondary-color:var(--ds-surface, #ffffff);">
                                                                    workspaces
                                                                </span>
                                                            </div>
                                                        </span>
                                                        <span class="pghn_sc_discover1_title">
                                                            <span class="pghn_sc_discover1_header1" data-item-title="true">
                                                                More AndrewSoft Products!
                                                            </span>
                                                        </span>
                                                    </a>
                                                </div>
                                            </section>
                                            <a class="pghn_sc_man_list" href="kelapabakar/list" tabindex="0">
                                                <span class="pghn_sc_man_list1">Manage List</span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <a href="/kelapabakar/list" class="pgh_logo">
                    <span aria-label="Andrew Software" role="img" class="pghl_label">
                        AndrewSoft
                    </span>
                </a>
                <div class="pgh_nav1">
                    <div class="pghn1_b1">
                        <button aria-expanded="false" aria-haspopup="true" class="pghn1_b1b" type="button" tabindex="0">
                            <span class="pghn1_b1tit">
                                Your Work
                            </span>
                            <span class="pghn1_b1dropdown">
                                <span class="pghn1_b1dropdown1">
                                    <span class="pghn1_b1dropdown2">
                                        <span role="presentation" class="material-symbols-outlined">
                                            arrow_drop_down
                                        </span>
                                    </span>
                                </span>
                            </span>
                        </button>
                        <div class="pghn_yourwork" data-placement="bottom-start" tab-index= "0">
                            <span>
                                <div class="pghn_yourwork1">
                                    <div class="pghn_yourwork2">
                                        <div class="pghn_yourwork2_header">
                                            <div class="pghn_yourwork2_headertab">
                                                <div class="pghn_yourwork2_headertab1">
                                                    <div class=""></div>
                                                    <div class=""></div>
                                                    <div class=""></div>
                                                </div>
                                                                                            </div>
                                        </div>
                                        <div></div>
                                        <div></div>
                                    </div>
                                </div>
                            </span>
                        </div>
                    </div>
                    <div class="pghn1_b1">
                        <button aria-expanded="false" aria-haspopup="true" class="pghn1_b1b" type="button" tabindex="0">
                            <span class="pghn1_b1tit">
                                Projects
                            </span>
                            <span class="pghn1_b1dropdown">
                                <span class="pghn1_b1dropdown1">
                                    <span class="pghn1_b1dropdown2">
                                        <span role="presentation" class="material-symbols-outlined">
                                            arrow_drop_down
                                        </span>
                                    </span>
                                </span>
                            </span>
                        </button>
                    </div>
                    <div class="pghn1_b1">
                        <button aria-expanded="false" aria-haspopup="true" class="pghn1_b1b" type="button" tabindex="0">
                            <span class="pghn1_b1tit">
                                Filters
                            </span>
                            <span class="pghn1_b1dropdown">
                                <span class="pghn1_b1dropdown1">
                                    <span class="pghn1_b1dropdown2">
                                        <span role="presentation" class="material-symbols-outlined">
                                            arrow_drop_down
                                        </span>
                                    </span>
                                </span>
                            </span>
                        </button>
                    </div>
                    <div class="pghn1_b1">
                        <button aria-expanded="false" aria-haspopup="true" class="pghn1_b1b" type="button" tabindex="0">
                            <span class="pghn1_b1tit">
                                Dashboards
                            </span>
                            <span class="pghn1_b1dropdown">
                                <span class="pghn1_b1dropdown1">
                                    <span class="pghn1_b1dropdown2">
                                        <span role="presentation" class="material-symbols-outlined">
                                            arrow_drop_down
                                        </span>
                                    </span>
                                </span>
                            </span>
                        </button>
                    </div>
                    <div class="pghn1_b1">
                        <button aria-expanded="false" aria-haspopup="true" class="pghn1_b1b" type="button" tabindex="0">
                            <span class="pghn1_b1tit">
                                People
                            </span>
                            <span class="pghn1_b1dropdown">
                                <span class="pghn1_b1dropdown1">
                                    <span class="pghn1_b1dropdown2">
                                        <span role="presentation" class="material-symbols-outlined">
                                            arrow_drop_down
                                        </span>
                                    </span>
                                </span>
                            </span>
                        </button>
                    </div>
                    <div class="pghn1_b1">
                        <button aria-expanded="false" aria-haspopup="true" class="pghn1_b1b" type="button" tabindex="0">
                            <span class="pghn1_b1tit">
                                Apps
                            </span>
                            <span class="pghn1_b1dropdown">
                                <span class="pghn1_b1dropdown1">
                                    <span class="pghn1_b1dropdown2">
                                        <span role="presentation" class="material-symbols-outlined">
                                            arrow_drop_down
                                        </span>
                                    </span>
                                </span>
                            </span>
                        </button>
                    </div>
                    <div class="pghn1_b2"></div>
                    <div class="pghn1_b3"></div>
                    <div class="pghn1_b4"></div>
                    <div class="pghn1_b5"></div>
                    <div class="pghn1_b6"></div>
                    <div class="pghn1_b7"></div>
                    <div class="pghn1_b8"></div>
                </div>
            </nav>
        </header>
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

        console.log(1);
        function toggle(modal, button) {
            console.log(1);
            var n = document.getElementById(modal);
            console.log(n.style.display);
            if (n.style.display == 'none') {
                n.style.display = 'block';
                document.getElementById(button).setAttribute('aria-expanded', 'true');
            } else {
                n.style.display = 'none';
                document.getElementById(button).setAttribute('aria-expanded', 'false');
            }
        }

    </script>
</body>
</html>
