<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Display:5</title>
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
            z-index: 200;
            top: 0;
            left: 0;
            background-color: white;
            box-shadow: 0px 0.1px 3px #888888;
        }

        .ct_header {
            position: fixed;
            top: 80px;
            left: 270px;
            height: 200px;
        }

        .ct_body {
            position: relative;
            top: 56px;
            left: 240px;
            height: 100%;
        }

        .ct_body1 {
            position: relative;
            top: 56px;
            width: 100%;
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

        .pg_header a {
            padding-right: 12px;
            padding-left: 12px;
            text-decoration: none;
            color: black;
        }

        #sof_pro {

            font-weight: 100;
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

        .pghn1_b1b , .pghn1_b1c, .pghn1_b1d, .pghn1_b1e, .pghn1_b1f, .pghn1_b1g {
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
            display: none;
            box-sizing: border-box;
            z-index: 400;
            flex: 1 1 auto;
            background-color: var(--ds-surface-overlay, #ffffff);
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

        .pghn_yourwork2_headertab1 {
            position: relative;
            display: flex;
            font-weight: 500;
            padding: 0px;
            margin: 0px;
        }
        .pghn_yourwork2_headertab1::before {
            content: "";
            border-radius: 2px;
            bottom: 0px;
            margin: 0px;
            position: absolute;
            width: inherit;
            left: 8px;
            right: 8px;
            background-color: var(--ds-border, #EBECF0);
            height: 2px;
        }

        .pghn_yourwork2_headertab1 [role="tab"] {
            cursor: pointer;
            line-height: 1.8;
            margin: 0px;
            padding: 4px 8px;
            position: relative;
            white-space: nowrap;
            overflow: hidden;
            text-overflow: ellipsis;
        }

        .pghn_yourwork2_headertab1 [role="tab"][aria-selected="true"]::after {
            content: "";
            border-radius: 2px;
            bottom: 0px;
            margin: 0px;
            position: absolute;
            width: inherit;
            left: 8px;
            right: 8px;
            border-bottom: 2px solid var(--ds-text-brand, #0052cc);
            height: 2px;
        }

        .pghn_yourwork2_headertab1 [role="tab"][aria-selected="true"] {
            color: var(--ds-text-brand, #0052cc);
            /* border-bottom: 2px solid var(--ds-text-brand, #0052cc); */
        }

        .pghn_yourwork2_body {
            flex-shrink: 1;
            overflow: auto;
        }

        .pghn_yourwork2_body::before, .pghn_yourwork2_body::after {
            display: block;
            height: 6px;
            content: "";
        }

        .pghn_yourwork2_body1 {
            padding: 24px 32px;
            text-align: center;
        }

        .pghn_yourwork2_footer {
            flex-shrink: 0;
            border-top: 2px solid var(--ds-menu-seperator-color, var(--ds-border, rgba(9,30,66,0.08)));
        }

        .pghn_yourwork2_footer::before, .pghn_yourwork2_footer::after {
            display: block;
            height: 6px;
            content: "";
        }

        .pghn_yourwork2_footer1 {
            display: flex;
            box-sizing: border-box;
            width: 100%;
            min-height: 40px;
            margin: 0px;
            padding: 8px 20px;
            -webkit-box-align: center;
            align-items: center;
            border: 0px;
            font-size: 14px;
            outline: 0px;
            text-decoration: none;
            user-select: none;
            background-color: transparent;
            cursor: pointer;
        }

        .pghn_yourwork2_footer1:visited {
            color: currentColor;
        }

        .pghn_yourwork2_footer2 {
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

        .pghn_yourwork2_footer3 {
            display: block;
            overflow: hidden;
            text-overflow: ellipsis;
            white-space: nowrap;
        }

        .pghn_projects {
            position: fixed;
            inset: 0px auto auto 0px;
            transform: translate(306px, 52px);
            display: none;
            box-sizing: border-box;
            z-index: 400;
            flex: 1 1 auto;
            background-color: var(--ds-surface-overlay, #ffffff);
            border-radius: 3px;
            box-shadow: var(--ds-shadow-overlay, 0 4px 8px -2px rgba(9,30,66,0.25), 0 0 1px rgba(9, 30, 66, 0.31));
            overflow: auto;
        }

        .pghn_filters {
            position: fixed;
            inset: 0px auto auto 0px;
            transform: translate(388px, 52px);
            display: none;
            box-sizing: border-box;
            z-index: 400;
            flex: 1 1 auto;
            background-color: var(--ds-surface-overlay, #ffffff);
            border-radius: 3px;
            box-shadow: var(--ds-shadow-overlay, 0 4px 8px -2px rgba(9,30,66,0.25), 0 0 1px rgba(9, 30, 66, 0.31));
            overflow: auto;
        }

        .pghn_dashboards {
            position: fixed;
            inset: 0px auto auto 0px;
            transform: translate(459px, 52px);
            display: none;
            box-sizing: border-box;
            z-index: 400;
            flex: 1 1 auto;
            background-color: var(--ds-surface-overlay, #ffffff);
            border-radius: 3px;
            box-shadow: var(--ds-shadow-overlay, 0 4px 8px -2px rgba(9,30,66,0.25), 0 0 1px rgba(9, 30, 66, 0.31));
            overflow: auto;
        }

        .pghn_people {
            position: fixed;
            inset: 0px auto auto 0px;
            transform: translate(566px, 52px);
            display: none;
            box-sizing: border-box;
            z-index: 400;
            flex: 1 1 auto;
            background-color: var(--ds-surface-overlay, #ffffff);
            border-radius: 3px;
            box-shadow: var(--ds-shadow-overlay, 0 4px 8px -2px rgba(9,30,66,0.25), 0 0 1px rgba(9, 30, 66, 0.31));
            overflow: auto;
        }

        .pghn_apps {
            position: fixed;
            inset: 0px auto auto 0px;
            transform: translate(641px, 52px);
            display: none;
            box-sizing: border-box;
            z-index: 400;
            flex: 1 1 auto;
            background-color: var(--ds-surface-overlay, #ffffff);
            border-radius: 3px;
            box-shadow: var(--ds-shadow-overlay, 0 4px 8px -2px rgba(9,30,66,0.25), 0 0 1px rgba(9, 30, 66, 0.31));
            overflow: auto;
        }

        .pghn_projects1, .pghn_filters1, .pghn_dashboards1, .pghn_people1, .pghn_apps1 {
            min-width: 320px;
            max-width: 800px;
        }

        .pghn_projects2, .pghn_filters2, .pghn_dashboards2, .pghn_people2, .pghn_apps2 {
            max-height: calc(100vh - 200px);
            display: flex;
            flex-direction: column;
            overflow: auto;
        }

        .pghn_projects_parttop, .pghn_filters_parttop, .pghn_dashboards_parttop, .pghn_people_parttop, .pghn_apps_parttop {
            flex-shrink: 1;
            overflow: auto;
        }

        .pghn_projects_parttop [data-ds--menu--heading-item]:first-of-type, .pghn_filters_parttop [data-ds--menu--heading-item]:first-of-type
        , .pghn_dashboards_parttop [data-ds--menu--heading-item]:first-of-type, .pghn_people_parttop [data-ds--menu--heading-item]:first-of-type
        , .pghn_apps_parttop [data-ds--menu--heading-item]:first-of-type {
            margin-top: 14px;
        }

        .pghn_projects_parttop [data-ds--menu--heading-item], .pghn_filters_parttop [data-ds--menu--heading-item]
        , .pghn_dashboards_parttop [data-ds--menu--heading-item], .pghn_people_parttop [data-ds--menu--heading-item]
        , .pghn_apps_parttop [data-ds--menu--heading-item] {
            margin-top: 20px;
            margin-bottom: 6px;
        }

        .pghn_projects_parttop::before, .pghn_projects_parttop::after
        , .pghn_filters_parttop::before, .pghn_filters_parttop::after
        , .pghn_dashboards_parttop::before, .pghn_dashboards_parttop::after
        , .pghn_people_parttop::before, .pghn_people_parttop::after
        , .pghn_apps_parttop::before, .pghn_apps_parttop::after {
            display: block;
            height: 6px;
            content: "";
        }

        .pghn_projects_thead, .pghn_filters_thead, .pghn_dashboards_thead, .pghn_people_thead, .pghn_apps_thead {
            padding: 0px 20px;
            color: var(--ds-text-subtle, #5e6c84);
            font-size: 11px;
            font-weight: 700;
            line-height: 1.45455;
            text-transform: uppercase;
        }

        .pghn_projects_tbody, .pghn_filters_tbody, .pghn_dashboards_tbody, .pghn_people_tbody, .pghn_apps_tbody {
            padding: 0px 20px;
            color: #ffffff;
            margin-top: 20px;
            margin-bottom: 104px;
        }

        .pghn_projects_partbottom, .pghn_filters_partbottom, .pghn_dashboards_partbottom, .pghn_people_partbottom, .pghn_apps_partbottom {
            flex-shrink: 0;
            border-top: 2px solid var(--ds-menu-seperator-color, var(--ds-border, rgba(9,30,66, 0.08)));
        }

        .pghn_projects_partbottom::before, .pghn_projects_partbottom::after,
        .pghn_filters_partbottom::before, .pghn_filters_partbottom::after,
        .pghn_dashboards_partbottom::before, .pghn_dashboards_partbottom::after,
        .pghn_people_partbottom::before, .pghn_people_partbottom::after,
        .pghn_apps_partbottom::before, .pghn_apps_partbottom::after {
            display: block;
            height: 6px;
            content: "";
        }

        .pghn_projects_bbutton, .pghn_filters_bbutton, .pghn_dashboards_bbutton, .pghn_people_bbutton, .pghn_apps_bbutton {
            display: flex;
            box-sizing: border-box;
            width: 100%;
            min-height: 40px;
            margin: 0px;
            padding: 8px 20px;
            -webkit-box-align: center;
            align-items: center;
            border: 0px;
            font-size: 14px;
            outline: 0px;
            text-decoration: none;
            user-select: none;
            background-color: transparent;
            color: currentColor;
            cursor: pointer;
        }

        .pghn_projects_bbutton1, .pghn_filters_bbutton1, .pghn_dashboards_bbutton1, .pghn_people_bbutton1, .pghn_apps_bbutton1 {
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

        .pghn_projects_bbutton2, .pghn_filters_bbutton2, .pghn_dashboards_bbutton2, .pghn_people_bbutton2, .pghn_apps_bbutton2 {
            display: block;
            overflow: hidden;
            text-overflow: ellipsis;
            white-space: nowrap;

        }

        .pghn1_b2 {
            margin-left: 12px;
            display: flex;
            -webkit-box-align: center;
            align-items: center;
        }

        .pghn1_b2a {
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
            color: var(--ds-text-onBold, #FFFFFF);
            cursor: pointer;
            height: 2.28571em;
            line-height: 2.28571em;
            vertical-align: middle;
            width: auto;
            -webkit-box-pack: center;
            justify-content: center;
            background-color: var(--ds-background-boldBrand-resting, #0052cc);
            border-width: 0px;
            border-radius: 3px;
            text-decoration: none;
            transition: background 0.1s ease-out 0s, box-shadow 0.15s cubic-bezier(0.47, 0.03, 0.49, 1.38) 0s;
            padding: 0px 10px;
            outline: none;
            margin: 0px;
        }

        #createGlobalItem:hover {
            color: var(--ds-text-onBold, #FFFFFF);
            background-color: var(--ds-background-boldBrand-hover, rgba(0,82,204,0.9));
        }

        .pghn1_b2b {
            transition: opacity 0.3s ease 0s;
            opacity: 1;
            -webkit-box-flex: 1;
            margin: 0px 2px;
            flex-grow: 1;
            flex-shrink: 1;
            overflow: hidden;
            text-overflow: ellipsis;
            white-space: nowrap;
        }

        .pghn1_whitespace {
            flex-shrink: 1;
            min-width: 1px;
            margin: 0px;
            width: 100%;
            position: relative;
        }

        .pg_sidenav {
            position: relative;
            z-index: 199;
            top: 56px;
            width: 240px;
        }

        .pg_sidenav_a {
            position: relative;
            width: var(--leftSidebarWidth, 0px);
            transition: width 300ms cubic-bezier(0.2, 0, 0, 1) 0s;
            z-index: 1;
            margin-left: 0px;
        }

        .pg_sidenav_b {
            position: fixed;
            top: 56px;
            left: var(--leftPanelWidth, 0px);
            bottom: 0px;
            width: 240px;
            transition: width 300ms cubic-bezier(0.2, 0, 0, 1) 0s;
        }

        .pg_sidenav_c {
            visibility: visible;
            transition: none 0s ease 0s;
            opacity: 1;
            overflow: hidden auto;
            height: 100%;
        }

        .pg_sidenav_d {
            height: 100%;
            min-width: 240px;
        }

        .pg_sidenav_e {
            width: 100%;
            height: 100%;
            color: var(--ds-text-subtle, #42526e);
            min-width: 240px;
            background-color: var(--ds-surface, #FAFBFC);
            position: relative;
            display: flex;
            flex-direction: column;
            overflow: hidden;
        }

        .pg_body {
            grid-area: content / content / content / content;
            display: flex;
            height: 100%;
            position: relative;
        }

        .pgs_bot {
            position: relative;
            padding: 8px 8px 14px;
        }

        .pgs_bot1 {
            box-sizing: border-box;
            margin: 0px;
            border: 0px;
            font-size: 14px;
            outline: 0px;
            text-decoration: none;
            color: currentColor;
            cursor: pointer;
            border-radius: 3px;
            user-select: auto;
            display: block;
            text-align: center;
            min-height: 24px;
            -webkit-box-align: center;
            align-items: center;
            width: 100%;
            background-color: transparent;
            padding: 0px;
        }

        .pgs_bot1 [data-item-title] {
            text-align: center;
            white-space: normal;
            line-height: initial;
            font-size: 12px;
        }
        .pgs_bot1 [data-item-description] {
            display: inline-block;
            text-align: center;
            margin: 6px;
        }

        .pgs_bot2 {
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

        .pgs_bot2a {
            display: block;
            overflow: hidden;
            text-overflow: ellipsis;
        }

        .pgs_bot2b {
            color: var(--ds-text-subtlest, #6B778C);
            font-size: 12px;
            overflow: hidden;
            text-overflow: ellipsis;
            white-space: nowrap;
        }

        .pgs_top {
            margin-left: 8px;
        }

        .pgs_top1 {
            padding: 24px 8px 8px;
        }

        .pgs_top2 {
            width: 100%;
            height: 100%;
            color: var(--ds-text-subtle, #42526e);
            min-width: 240px;
            background-color: var(--ds-surface, #fafbfc);
            position: relative;
            display: flex;
            flex-direction: column;
            overflow: hidden;
        }

        .pgs_top3 {
            display: flex;
            box-sizing: border-box;
            width: 100%;
            min-height: 40px;
            margin: 0px;
            -webkit-box-align: center;
            align-items: center;
            border: 0px;
            font-size: 14px;
            outline: 0px;
            text-decoration: none;
            color: currentColor;
            cursor: pointer;
            padding: 8px 10px;
            border-radius: 3px;
            user-select: auto;
            background-color: transparent;
        }

        .pgs_top3 [data-item-elem-before] {
            display: flex;
            height: 24px;
            width: 24px;
            -webkit-box-align: center;
            align-items: center;
            -webkit-box-pack: center;
            justify-content: center;
            margin-right: 16px;
        }

        .pgs_topicon {
            display: flex;
            margin-right: 12px;
            -webkit-box-align: center;
            align-items: center;
            flex-shrink: 0;
        }

        .pgs_topicon_a {
            display: inline-block;
            position: relative;
            outline: 0px;
        }

        .pgs_topicon_b {
            height: 24px;
            width: 24px;
            -webkit-box-align: stretch;
            align-items: stretch;
            background-color: transparent;
            border-radius: 2px;
            box-sizing: content-box;
            cursor: inherit;
            display: flex;
            flex-direction: column;
            -webkit-box-pack: center;
            justify-content: center;
            outline: none;
            overflow: hidden;
            position: static;
            transform: translateZ(0px);
            transition: transform 200ms ease 0s, opacity 200ms ease 0s;
            box-shadow: transparent 0px 0px 0px 2px;
            border: none;
            margin: 2px;
            padding: 0px;
            font-size: inherit;
            font-family: inherit;
        }

        .pgs_topicon_b::after {
            background-color: transparent;
            inset: 0px;
            border-radius: 2px;
            content: " ";
            opacity: 0;
            pointer-events: none;
            position: absolute;
            transition: opacity 200ms ease 0s;
            width: 100%;
        }

        .pgs_toptext {
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

        .pgs_top3 [data-item-title] {
            font-size: 14px;
            letter-spacing: -0.003em;
            font-weight: 600;
            color: var(--ds-text, #42526e);
            line-height: 1.2 !important;
            margin-bottom: 0;
        }

        .pgs_toptext [data-item-description] {
            line-height: 1.2 !important;
        }

        .pgs_toptextbot {
            margin-top: 3px;
            color: var(--ds-text-subtlest, #6B778C);
            font-size: 12px;
            display: block;
            overflow: hidden;
            text-overflow: ellipsis;
            white-space: nowrap;
        }

        .pgs_mid {
            position: relative;
            height: 100%;
            outline: none;
        }

        .pgs_mid_a {
            position: absolute;
            width: 100%;
            height: 100%;
            display: flex;
            flex-direction: column;
        }

        .pgs_mid_b {
            display: flex;
            height: 100%;
            overflow: hidden;
            position: relative;
        }

        .pgs_mid_b::before {
            content: "";
            display: block;
            left: 8px;
            right: 8px;
            height: 2px;
            border-radius: 1px;
            background-color: var(--ds-menu-seperator-color, var(--ds-border, #EBECF0));
            position: absolute;
            z-index: 1;
        }

        .pgs_mid_b::after {
            content: "";
            position: absolute;
            display: block;
            border-radius: 1px;
            flex-shrink: 0;
            height: 2px;
            left: 8px;
            right: 8px;
            bottom: 0px;
            z-index: 1;
            background-color: var(--ds-menu-seperator-color, var(--ds-border, #EBECF0));
        }

        .pgs_mid_c {
            display: flex;
            overflow: auto;
            width: 100%;
            position: relative;
            box-sizing: border-box;
            flex-direction: column;
        }

        .pgs_mid_c::before {
            border-radius: 1px;
            content: "";
            left: 0px;
            right: 0px;
            height: 2px;
            background-color: var(--ds-menu-scroll-indicator-color, var(--ds-surface, #fafbfc));
            position: absolute;
            display: block;
            z-index: 2;
        }

        .pgs_mid_c::after {
            border-radius: 1px;
            content: "";
            display: block;
            flex-shrink: 0;
            height: 2px;
            margin-top: auto;
            position: relative;
            z-index: 2;
            background-color: var(--ds-menu-scroll-indicator-color, var(--ds-surface, #FAFBFC));
        }

        .pgs_mid_d {
            margin-top: 0px;
            margin-left: 8px;
            margin-right: 8px;
            position: relative;
        }

        .pgs_mid_d > div {
            margin-left: -15px;
        }

        .pgs_midtop {
            margin-left: 8px;
        }

        .pgs_midtop_1 {
            position: relative;
            display: flex;
            flex-direction: row;
            height: auto;
            margin-left: 15px;
            margin-right: -6px;
            border-radius: 6px;
            padding-top: 8px;
            margin-top: 2px;
            padding-right: 5px;
            border: 2px solid transparent;
        }

        .pgs_midtop_1button {
            height: 24px;
        }

        .pgs_midtop_1button_a {
            --icon-primary-color: var(--ds-icon, #42526e);
            --icon-secondary-color: var(--ds-surface, #ffffff);
            display: inline-block;
            flex-shrink: 0;
            line-height: 1;
            width: 24px;
            height: 24px;
        }

        .pgs_midtop_1button_a > span {
            width: 24px;
            height: 24px;
            overflow: hidden;
            pointer-events: none;
            max-width: 100%;
            max-height: 100%;
            color: var(--icon-primary-color);
            fill: var(--icon-secondary-color);
            vertical-align: bottom;
        }

        .pgs_midtop div[role="group"] {
            display: block;
            width: calc(100% - 16px);
        }

        .pgs_midtop1ct {
            flex-shrink: 0;
        }

        .pgs_midtop1ct::before, .pgs_midtop1ct::after {
            display: block;
            height: 6px;
            content: "";
        }

        .pgs_midtop1ct1 {
            /* padding: 0px 10px; */
            color: var(--ds-text-subtle, #5e6c84);
            font-size: 11px;
            font-weight: 700;
            line-height: 1.45455;
            text-transform: uppercase;
        }

        .pgs_midtop div[role="group"] div[data-ds--menu--heading-item="true"] {
            margin-top: -6px;
            padding-left: 0px;
            display: block;
            color: var(--ds-text-subtle, #42526e);
        }

        .pgs_midtop1ct div[data-ds--menu--heading-item]:first-of-type {
            /* margin-top: 14px; */
        }

        .pgs_midtop1ct [data-ds--menu--heading-item] {
            /* margin-top: 20px; */
            /* margin-bottom: 6px; */
        }

        .pgs_midtop_1 div[role="group"] > a {
            margin-right: 7px;
            border-radius: 4px;
        }

        .pgs_midtop_row div[role="group"] > a {
            width: calc(100% + 8px);
            padding-left: 17px;
            margin-left: -17px;
        }

        .pgs_midtop1ct2 {
            display: flex;
            box-sizing: border-box;
            min-height: 40px;
            margin: 0px;
            -webkit-box-align: center;
            align-items: center;
            border: 0px;
            font-size: 14px;
            outline: 0px;
            text-decoration: none;
            user-select: none;
            color: currentColor;
            cursor: pointer;
            padding: 8px 10px;
            background-color: transparent;
        }

        .pgs_midtop1ct2 [data-item-elem-before] {
            display: flex;
            height: 24px;
            width: 24px;
            -webkit-box-align: center;
            align-items: center;
            -webkit-box-pack: center;
            justify-content: center;
            margin-right: 16px;
        }

        .pgs_midtop1ct2_1 {
            flex-shrink: 0;
        }

        .pgs_midtop1ct2_1b {
            --icon-primary-color: currentColor;
            --icon-secondary-color: var(--ds-surface, #FFFFFF);
            display: inline-block;
            flex-shrink: 0;
            line-height: 1;
        }

        .pgs_midtop_1button_b {
            overflow: hidden;
            pointer-events: none;
            max-width: 100%;
            max-height: 100%;
            color: var(--icon-primary-color);
            fill: var(--icon-secondary-color);
            vertical-align: bottom;
        }

        .pgs_midtop1ct2_2 {
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

        .pgs_midtop1ct2_3 {
            display: block;
            overflow: hidden;
            text-overflow: ellipsis;
            white-space: nowrap;
        }

        .pgs_midtop1ct2 [data-item-title] {
            line-height: 1.2;
        }

        .pgs_midtop1ct3a {
            display: flex;
            box-sizing: border-box;
            width: 100%;
            min-height: 40px;
            margin: 0px;
            -webkit-box-align: center;
            align-items: center;
            border: 0px;
            font-size: 14px;
            outline: 0px;
            text-decoration: none;
            user-select: none;
            cursor: pointer;
            padding: 8px 10px;
            border-radius: 3px;
            color: var(--ds-text-selected, #0052cc);
            background-color: transparent;
        }

        .pgs_midtop1ct3a::before {
            content: "";
            position: absolute;
            height: 16px;
            width: 4px;
            left: 0px;
            top: 12px;
            background: var(--ds-text-selected, #0052CC);
            border-radius: 0px 1.998px 1.998px 0px;
        }

        .pgs_midtop1ct3a [data-item-elem-before] {
            display: flex;
            height: 24px;
            width: 24px;
            -webkit-box-align: center;
            align-items: center;
            -webkit-box-pack: center;
            justify-content: center;
            margin-right: 16px;
        }

        .pgs_midtop1ct3icon {
            flex-shrink: 0;
        }

        .pgs_midtop1ct3icon1 {
            --icon-primary-color: currentColor;
            --icon-secondary-color: var(--ds-surface, #ffffff);
            display: inline-block;
            flex-shrink: 0;
            line-height: 0;
        }

        .pgs_midtop1ct3text {
            display: flex;
            -webkit-box-pack: center;
            justify-content: center;
            flex-direction: column;
            -webkit-box-flex: 1;
            flex-grow: 1;
            line-height: 1.22;
            outline: none;
            overflow: hidden;
            text-align: center;
        }

        .pgs_midtop1ct3a [data-item-title]{
            line-height: 1.2;
        }

        .pgs_midtop1ct3text1 {
            display: block;
            overflow: hidden;
            text-overflow: ellipsis;
            white-space: nowrap;
            text-align: left;
        }

        .pgs_midtop_2 > div {
            margin-left: 0;
        }

        .pgs_midtop_2 {
            position: relative;
            display: flex;
            flex-direction: row;
            height: auto;
            margin-left: 15px;
            margin-right: -6px;
            border-radius: 6px;
            padding-top: 8px;
            margin-top: 2px;
            padding-right: 5px;
            border: 2px solid transparent;
        }

        .pgs_midtop_2icon {
            position: relative;
            top: -4px;
            height: 100%;
            opacity: 1;
            padding: 0px;
            margin: 0px;
            border: none;
            background-color: transparent;
            cursor: pointer;
            display: flex;
            flex: 0 0 auto;
            outline: none;
            transition: box-shadow 0.2s cubic-bezier(0.47, 0.03, 0.49, 1.38) 0s;
        }

        .pgs_midtop_2icon1 {
            --icon-primary-color: var(--ds-icon, #42526e);
            --icon-secondary-color: var(--ds-surface, #ffffff);
            display: inline-block;
            flex-shrink: 0;
            line-height: 1;
            width: 24px;
            height: 24px;
        }

        .pgs_midtop_2[role="group"] {
            display: block;
            width: calc(100% - 16px);
        }

        .pgs_midtop_2text {
            flex-shrink: 0;
        }

        .pgs_midtop_2text::before,.pgs_midtop_2text::after {
            display: block;
            height: 6px;
            content: "";
        }

        .pgs_midtop_2 div[role="group"] div[data-ds--menu--heading-item="true"] {
            margin-top: -6px;
            padding-left: 0px;
            display: block;
            color: var(--ds-text-subtle, #42526e);
        }

        .pgs_midtop_2text1 {
            padding: 0px 10px;
            color: var(--ds-text-subtle, #5e56c84);
            font-size: 11px;
            font-weight: 700;
            line-height: 1.45455;
            text-transform: uppercase;
        }

        .pgs_midtop_2 div[role="group"] > span > a {
            margin-right: 7px;
            border-radius: 4px;
        }

        .pgs_midtop_2ct1 {
            width: calc(100% + 8px);
            padding-left: 17px;
            margin-left: -7px;
            display: flex;
            box-sizing: border-box;
            min-height: 40px;
            margin: 0px;
            -webkit-box-align: center;
            align-items: center;
            border: 0px;
            text-decoration: none;
            user-select: none;
            color: currentColor;
            cursor: pointer;
            padding: 8px 10px;
            background-color: transparent;
        }

        .pgs_midtop_2ct1 [data-item-elem-before] {
            display: flex;
            height: 24px;
            width: 24px;
            -webkit-box-align: center;
            align-items: center;
            -webkit-box-pack: center;
            justify-content: center;
            margin-right: 16px;
        }

        .pgs_midtop_2ct2 {
            flex-shrink: 0;
        }

        .pgs_midtop_2ct2icon {
            --icon-primary-color: currentColor;
            --icon-secondary-color: var(--ds-surface, #ffffff);
            display: inline-block;
            flex-shrink: 0;
            line-height: 1;
        }
        .pgs_midtop_2ct2text {
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

        .pgs_midtop_2ct1 [data-item-title] {
            line-height: 1.2;
        }

        .pgs_midtop_2ct2text1 {
            display: block;
            overflow: hidden;
            text-overflow: ellipsis;
            white-space: nowrap;
        }

        .pgs_midbot {
            height: auto;
        }

        .pgs_midbot_a {
            height: 100%;
        }

        .pgs_midbot_b {
            flex-shrink: 0;
            border-top: 2px solid var(--ds-menu-seperator-color, var(--ds-border, rgba(9, 30, 66, 0.08)));
        }

        .pgs_midbot_b::before, .pgs_midbot_b::after {
            display: block;
            height: 6px;
            content: "";
        }

        .pgs_midbot div[role="group"] > a {
            padding-left: 51px;
            border-radius: 4px;
        }

        .pgs_midbot_r1 {
            display: flex;
            box-sizing: border-box;
            width: 100%;
            min-height: 40px;
            margin: 0px;
            -webkit-box-align: center;
            align-items: center;
            border: 0px;
            font-size: 14px;
            outline: 0px;
            text-decoration: none;
            user-select: none;
            color: currentColor;
            cursor: pointer;
            padding: 8px 10px;
            border-radius: 3px;
            background-color: transparent;
        }

        .pgs_midbot_r1 [data-item-elem-before] {
            display: flex;
            height: 24px;
            width: 24px;
            -webkit-box-align: center;
            align-items: center;
            -webkit-box-pack: center;
            justify-content: center;
            margin-right: 16px;
        }

        .pgs_midbot_r1_a {
            display: flex;
            margin-right: 12px;
            -webkit-box-align: center;
            align-items: center;
            flex-shrink: 0;
        }

        .pgs_midbot_r1_b {
            --icon-primary-color: currentColor;
            --icon-secondary-color: var(--ds-surface, #ffffff);
            display: inline-block;
            flex-shrink: 0;
            line-height: 1;
        }

        .pgs_midbot_r1_b {
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

        .pgs_midbot_r1_b1 {
            display: block;
            overflow: hidden;
            text-overflow: ellipsis;
            white-space: nowrap;
        }

        .pgs_midbot_r1 [data-item-title] {
            line-height: 1.2;
        }

        .pgs_midbot div[role="group"] > button {
            padding-left: 17px;
            border-radius: 4px;
        }

        .pgs_midbot_r2 {
            display: flex;
            box-sizing: border-box;
            width: 100%;
            min-height: 40px;
            margin: 0px;
            -webkit-box-align: center;
            align-items: center;
            border: 0px;
            font-size: 14px;
            outline: 0px;
            text-decoration: none;
            user-select: none;
            color: currentColor;
            cursor: pointer;
            padding: 8px 10px;
            background-color: transparent;
        }

        .pgs_midbot_r2 [data-item-elem-before] {
            display: flex;
            height: 24px;
            width: 24px;
            -webkit-box-align: center;
            align-items: center;
            -webkit-box-pack: center;
            justify-content: center;
            margin-right: 28px;
            padding-left: 46px;
        }

        .pgs_midbot_r2_a {
            flex-shrink: 0;
        }

        .pgs_midbot_r2_b {
            --icon-primary-color: currentColor;
            --icon-secondary-color: var(--ds-surface, #FFFFFF);
            display: inline-block;
            flex-shrink: 0;
            line-height: 1;
        }

        .pgs_midbot_r2 [data-item-title] {
            line-height: 1.2;
        }

        .pgs_midbot_r2text {
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

        .pgs_midbot_r2text1 {
            display: block;
            overflow: hidden;
            text-overflow: ellipsis;
            white-space: nowrap;
        }

        .pgs_midbot {
            height: auto;
        }

        .pgh_profile {
            -webkit-box-align: center;
            align-items: center;
            display: flex;
            flex-shrink: 0;
        }

        .pgh_profile > * {
            flex-shrink: 0;
            margin-right: 4px;
        }

        .pgh_search {
            display: flex;
            -webkit-box-pack: center;
            justify-content: center;
            -webkit-box-align: center;
            align-items: center;
            position: relative;
        }

        .pgh_profile {
            -webkit-box-align: center;
            align-items: center;
            display: flex;
            flex-shrink: 0;
        }

        .pgh_profile > * {
            flex-shrink: 0;
            margin-right: 4px;
        }

        .pgh_search {
            display: flex;
            -webkit-box-pack: center;
            justify-content: center;
            -webkit-box-align: center;
            align-items: center;
            position: relative;
        }

        @media screen and (min-width: 781px) {
            .pgh_search3 {
                min-width: 200px;
            }
        }


        .pgh_search3 {
            position: relative;
            width: 32px;
            height: 32px;
        }

        .pgh_search5 {
            position: relative;
        }

        @media screen and (max-width: 780px) {
            .pgh_search7 {
                width: 100%;
            }
        }

        .pgh_search7 {
            position: relative;
            max-width: 100%;
        }

        .pgh_search_b1a {
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
            color: var(--ds-text-subtlest, #68778C);
            cursor: pointer;
            height: auto;
            line-height: 2.28571em;
            vertical-align: middle;
            width: auto;
            -webkit-box-pack: center;
            justify-content: center;
            background-color: var(--ds-background-input, #FFFFFF);
            border-width: 0px;
            border-radius: 100%;
            text-decoration: none;
            transition: background 0.1s ease-out 0s, box-shadow 0.15s cubic-bezier(0.47, 0.03, 0.49, 1.38) 0s;
            padding: 4px;
            outline: none;
            margin: 0px 2px;
            border-color: var(--ds-border-input, #DFE1E6);
        }

        .pgh_search_b1b {
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

        .pgh_search_b1c {
            --icon-primary-color: var(--ds-text-subtlest, #68778C);
            --icon-secondary-color: var(--ds-surface, #FFFFFF);
            display: inline-block;
            flex-shrink: 0;
            line-height: 1;
            width: 24px;
            height: 24px;
        }

        @media screen and (max-width: 780px) {
            .pgn_search_b2 {
                display: none;
            }
        }

        .pgh_search_b2 {
            width: 16px;
            height: 16px;
            position: absolute;
            top: 8px;
            left: 8px;
            color: var(--ds-text-subtlest, #68778C);
        }

        .pgh_search_b2 > span[role="img"] {
            line-height: 0;
        }

        .pgh_search_b2a {
            display: inline-block;
            flex-shrink: 0;
            display: flex;
            width: 16px;
            height: 16px;
            --icon-primary-color: var(--ds-text-subtlest, #68778c);
            --icon-secondary-color: var(--ds-surface, #FFFFFF);
        }

        .pgh_search_b2b {
            height: 16px;
            width: 16px;
            font-size: 16px !important;
            position: relative;
            padding-bottom: 4px;
        }

        .pgh_search1 input:not([type="checkbox"]):not([type="radio"]) {
            border-bottom-right-radius: 6px;
        }

        input:not([type=checkbox]):not([type=radio]), select, textarea {
            outline: 0;
            border-bottom-right-radius: 3.01px;
        }

        @media screen and (max-width: 780px) {
            .pgh_search_b3 {
                display: none;
            }
        }

        .pgh_search_b3 {
            height: 32px;
            width: 100%;
            padding: 0px 12px 0px 30px;
            box-sizing: border-box;
            outline: none;
            border-radius: 5px;
            font-size: 14px;
            line-height: 20px;
            border: 2px solid var(--ds-border-input, #DFE1E6);
            box-shadow: none;
            background-color: var(--ds-background-input, #FFFFFF);
            color: var(--ds-text-subtlest, #6B778C);
        }

        .pgh_profile > * {
            flex-shrink: 0;
            margin-right: 4px;
        }

        .pgh_notification {
            position: relative;
        }

        .pgh_notification1 {
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
            color: var(--ds-text-mediumEmphasis, #344563);
            cursor: pointer;
            height: auto;
            line-height: 2.28571em;
            vertical-align: middle;
            width: auto;
            -webkit-box-pack: center;
            justify-content: center;
            background-color: transparent;
            border-width: 0px;
            border-radius: 100%;
            text-decoration: none;
            transition: background 0.1s ease-out 0s, box-shadow 0.15s cubic-bezier(0.47, 0.03, 0.49, 1.38) 0s;
            padding: 4px;
            outline: none;
            margin: 0px 2px;
        }

        .pgh_notification1 > span {
            margin: 0px;
        }

        .pgh_notification2 {
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
        }

        .pgh_notification3 {
            --icon-primary-color: currentColor;
            --icon-secondary-color: var(--ds-surface, #FFFFFF);
            display: inline-block;
            flex-shrink: 0;
            line-height: 1;
        }

        .pgh_notification1:hover {
            color: var(--ds-text-mediumEmphasis, #0052cc);
            background-color: var(--ds-background-subtleNeutral-hover, rgba(222, 235, 255, 0.9));
        }

        .pgh_profpic {
            display: block;
            -webkit-box-align: center;
            align-items: center;
            box-sizing: border-box;
            display: flex;
            flex-shrink: 0;
            -webkit-box-pack: justify;
            justify-content: space-between;
            padding-left: 12px;
            padding-right: 12px;
            height: 56px;
            position: relative;
            background-color: var(--ds-background-default, #FFFFFF);
            color: var(--ds-text-lowEmphasis, #6B778C);
        }

        .pgh_profpic > * {
            position: relative;
        }

        .pgh_profpic::before, .pgh_profpic::after {
            border-radius: 50%;
            width: 36px;
            left: 50%;
            transform: translateX(-50%);
        }
        .pgh_profpic3 {
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
            color: var(--ds-text-mediumEmphasis, #344563);
            cursor: pointer;
            height: auto;
            -webkit-box-pack: center;
            justify-content: center;
            background-color: transparent;
            border-width: 0px;
            border-radius: 100%;
            text-decoration: none;
            transition: background 0.1s ease-out 0s, box-shadow 0.15s cubic-bezier(0.47, 0.03, 0.49, 1.38) 0s;
            padding: 4px;
            outline: none;
            margin: 0px 2px;
        }

        .pgh_profpic3:hover {
            color: var(--ds-text-mediumEmphasis,#0052CC);
            background-color: var(--ds-background-subtleNeutral-hover,rgba(222,235,255,0.9));
        }

        .pgh_profpic3 > span {
            margin: 0px;
        }

        .pgh_profpic4 {
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
        }

        .pgh_profpic6 {
            display: inline-block;
            position: relative;
            outline: 0px;
        }

        .pgh_profpic7 {
            height: 24px;
            width: 24px;
            -webkit-box-align: stretch;
            align-items: stretch;
            background-color: transparent;
            border-radius: 50%;
            box-sizing: content-box;
            cursor: inherit;
            display: flex;
            flex-direction: column;
            -webkit-box-pack: center;
            justify-content: center;
            outline: none;
            overflow: hidden;
            position: static;
            transform: translateZ(0px);
            transition: transform 200ms ease 0s, opacity 200ms ease 0s;
            box-shadow: transparent 0px 0px 0px 2px;
            border: none;
            margin: 2px;
            padding: 0px;
            font-size: inherit;
            font-family: inherit;
        }

        .pgh_profpic8 {
            display: flex;
            width: 100%;
            height: 100%;
            flex: 1 1 100%;
            background-color: transparent;
            background-position: center center;
            background-repeat: no-repeat;
            background-size: cover;
            background-image: url("/assets/img/fox_logo.jpg");
        }

        .ct_body {
            display: contents;
        }

        .ct_body > :first-of-type {
            transition: width 300ms cubic-bezier(0.2, 0, 0, 1) 0s;
            width: calc(100vw - var(--leftPanelWidth, 0px) - var(--leftSidebarWidth 0px) - var(--rightPanelWidth, 0px) - var(--rightSidebarWidth, 9px)) !important;
        }

        [data-ds--page-layout--slot="main"] {
            height: calc(100vw - var(--leftPanelWidth, 0px) - var(--leftSidebarWidth, 0px) - var(--rightPanelWidth, 0px) - var(--rightSidebarWidth, 0px)) !important;
        }

        .ct_body2 {
            height: calc(100vh - (var(--topNavigationHeight, 0px) + var(--bannerHeight, 0px)));
            overflow: hidden;
            box-sizing: border-box;
            background: var(--ds-surface, #FFFFFF);
            display: flex;
        }

        .ct_body3 {
            display: flex;
            flex-direction: column;
            box-sizing: border-box;
            width: 100%;
        }

        .ct_bodytop {
            padding: 0px 40px;

        }

        .ct_bodytop1 {
            margin: 24px 0px 16px;
        }

        .ct_bodytop1_r1 {
            min-height: 24px;
        }

        .ct_bt1r1_ol {
            margin: 0px;
            padding: 0px;
            color: var(--ds-text-lowEmphasis, #6B778C);
            display: flex;
            flex-wrap: wrap;
        }

        .bt_bt1r1_li1 {
            display: flex;
            flex-direction: row;
            height: 1.71429em;
            margin: 0px;
            padding: 0px;
            box-sizing: border-box;
            max-width: 100%;
        }

        li {
            text-align: -webkit-match-parent;
        }

        .bt_bt1r1_li1a:visited {
            background: none;
            color: var(--ds-text-subtle, #68778c) !important;
        }

        .bt_bt1r1_li1a {
            -webkit-box-align: baseline;
            align-items: baseline;
            border-width: 0px;
            border-radius: 3px;
            box-sizing: border-box;
            display: inline-flex;
            font-size: inherit;
            font-style: normal;
            font-family: inherit;
            max-width: 100%;
            position: relative;
            text-align: center;
            text-decoration: none;
            transition: background 0.1s ease-out 0s, box-shadow 0.15s cubic-bezier(0.47, 0.03, 0.49, 1.38) 0s;
            white-space: nowrap;
            background: none;
            cursor: pointer;
            height: auto;
            line-height: inherit;
            padding: 0px;
            vertical-align: baseline;
            width: auto;
            -webkit-box-pack: center;
            justify-content: center;
            font-weight: 400;
            flex-shrink: 1;
            min-width: 0px;
            color: black;
        }

        .bt_bt1r1_li1aspan {
            transition: opacity 0.3s ease 0s;
            opacity: 1;
            margin: 0px;
            -webkit-box-flex: 1;
            flex-grow: 1;
            flex-shrink: 1;
            overflow: hidden;
            text-overflow: ellipsis;
            white-space: nowrap;
        }

        .ct_bt1r1_ol > li:not(:last-child)::after {
            content: "/";
            flex-shrink: 0;
            padding: 0px 8px;
            text-align: center;
            width: 8px;
        }

        .bt_bt1r1_li2 {
            display: flex;
            flex-direction: row;
            height: 1.71429em;
            margin: 0px;
            padding: 0px;
            box-sizing: border-box;
            max-width: 100%;
        }

        .bt_bt1r1_li2a {
            display: flex;
            flex-direction: row;
            height: 1.71429em;
            line-height: 1.71429em;
            margin: 0px;
            padding: 0px;
            box-sizing: border-box;
            max-width: 100%;
        }

        .ct_bodytop1_r2 {
            display: flex;
            align-items: flex-start;
            flex-wrap: nowrap;
        }

        .ct_bt1r2_a {
            min-width: 0px;
            max-width: 100%;
            margin-bottom: 8px;
            flex: 1 1 auto;
        }

        .ct_bt1r2_a1 {
            max-width: 420px;
            margin-top: 2px;
            margin-bottom: 2px;
        }

        .ct_bt1r2_a2 {
            margin-top: -8px;
        }

        .ct_bt1r2_a4 {
            margin-top: 8px;
        }

        .ct_bt1r2_a5 {
            line-height: 1;
        }

        .ct_bt1r2_a6 {
            display: inline-block;
            box-sizing: border-box;
            width: auto;
            max-width: 100%;
            border: 2px solid transparent;
            border-radius: 3px;
            transition: background 0.2s ease 0s;
        }

        .ct_bt1r2_a7 {
            display: flex;
            -webkit-box-align: center;
            align-items: center;
            margin: 8px 0px;
            line-height: inherit;
        }

        .ct_bt1r2_a8 {
            white-space: nowrap;
            overflow: hidden;
            text-overflow: ellipsis;
            flex: 0 1 auto;
        }

        .ct_bt1r2_a9 {
            font-size: 1.71429em;
            font-style: inherit;
            line-height: 1.16667;
            color: var(--ds-text,var(--ds-text, #172B4D));
            font-weight: 500;
            letter-spacing: -0.01em;
            overflow: hidden;
            text-overflow: ellipsis;
            white-space: nowrap;
        }

        .ct_bt1r2_b {
            max-width: 100%;
            margin-bottom: 8px;
            margin-left: auto;
            padding-left: 32px;
            flex: 0 0 auto;
            white-space: nowrap;
        }
        .ct_bt1r2_b0 {
            text-align: left;
        }

        .ct_bt1r2_b1 {
            display: flex;
            -webkit-box-pack: center;
            justify-content: center;
            -webkit-box-align: center;
            align-items: center;
        }

        .ct_bt1r2_b1a0 {
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
            text-decoration: none;
            transition: background 0.1s ease-out 0s, box-shadow 0.15s cubic-bezier(0.47, 0.03, 0.49, 1.38) 0s;
            white-space: nowrap;
            background: none;
            cursor: pointer;
            height: auto;
            line-height: inherit;
            padding: 0px;
            vertical-align: baseline;
            width: auto;
            -webkit-box-pack: center;
            justify-content: center;
            color: var(--ds-text, #42526e) !important;
        }

        .ct_bt1r2_b1a1 {
            transition: opacity 0.3s ease 0s;
            opacity: 1;
            -webkit-box-flex: 1;
            flex-grow: 1;
            flex-shrink: 1;
            overflow: hidden;
            text-overflow: ellipsis;
            white-space: nowrap;
        }

        .ct_bt1r2_b1a2 {
            display: flex;
            -webkit-box-align: center;
            align-items: center;
            -webkit-box-pack: center;
            justify-content: center;
            width: 32px;
            height: 32px;
            color: rgb(66,82,110);
        }

        .ct_bt1r2_b1a3 {
            --icon-primary-color: currentColor;
            --icon-secondary-color: #ffffff;
            display: inline-block;
            flex-shrink: 0;
            line-height: 1;
        }

        .ct_bt1r2_b1a3:hover {
            color: rgb(107, 119, 140);
        }

        .ct_bt1r2_b1a4 {
            overflow: hidden;
            pointer-events: none;
            max-width: 100%;
            max-height: 100%;
            color: var(--icon-primary-color);
            fill: var(--icon-secondary-color);
            vertical-align: bottom;
        }

        .ct_bt1r2_b1a0:hover {
            background: var(--ds-background-neutral-subtle-hovered, rgba(9, 30, 66, 0.08));
            text-decoration: inherit;
            transition-duration: 0s, 0.15s;
            color: var(--ds-text, #42526e) !important;
        }

        .ct_bt1r2_b1b {
            display: inline-block;
            margin: 1px;
        }

        .ct_bt1r2_b1b1 {
            display: inline-block;
            margin: 1px;
        }

        .ct_bt1r2_b1b3 {
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
            text-decoration: none;
            transition: background 0.1s ease-out 0s, box-shadow 0.15s cubic-bezier(0.47, 0.03, 0.49, 1.38) 0s;
            white-space: nowrap;
            background: none;
            cursor: pointer;
            height: auto;
            line-height: inherit;
            padding: 0px;
            vertical-align: baseline;
            width: auto;
            -webkit-box-pack: center;
            justify-content: center;
            color: var(--ds-text, #42526e) !important;
        }

        .ct_bodytop1_r3 {
            margin-top: 16px;
        }

        .ct_bodytop1_r3a {
            display: flex;
            -webkit-box-align: center;
            align-items: center;
            margin-bottom: 32px;
            width: 100%;
            white-space: nowrap;
        }

        .ct_bodytop1_r3left {
            flex: 1 1 0%;
        }

        .ct_bodytop1_r3l1 {
            display: flex;
            position: relative;
            -webkit-box-align: center;
            align-items: center;
        }

        .ct_bodytop1_r3l11 {
            display: flex;
        }

        .ct_bodytop1_r3l11a {
            display: flex;
            width: 120px;
            transition: all 0.3s cubiz-bezier(0.15, 1, 0.3, 1) 0s;
        }

        .ct_bodytop1_r311b {
            -webkit-box-align: center;
            align-items: center;
            background-color: var(--ds-background-input, #FAFBFC);
            border-color: var(--ds-border, #DFE1E6);
            color: var(--ds-text, #091e42);
            cursor: text;
            border-radius: 3px;
            border-width: 2px;
            border-style: solid;
            box-sizing: border-box;
            display: flex;
            flex: 1 1 100%;
            font-size: 14px;
            -webkit-box-pack: justify;
            justify-content: space-between;
            overflow: hidden;
            transition: background-color 0.2s ease-in-out 0s, border-color 0.2s ease-in-out 0s;
            overflow-wrap: break-word;
            vertical-align: top;
            pointer-events: auto;
        }

        .ct_bodytop1_r311input:not([data-compact]) {
            padding: 8px 6px;
            height: 2.57em;
        }

        input:not([type=checkbox]):not([type=radio]), select, textarea {
            outline: 0;
            border-bottom-right-radius: 3.01px;
        }

        .ct_bodytop1_r311input {
            background-color: transparent;
            border: 0px;
            box-sizing: border-box;
            color: inherit;
            cursor: inherit;
            font-size: 14px;
            min-width: 0;
            width: 100%;
            line-height: 1.42857;
            font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
        }

        .ct_bodytop1_r311button {
            color: rgb(94, 108, 132);
            margin: 0px 8px 0px 0px;
            display: flex;
        }

        .ct_bodytop1_r311input::placeholder {
            color: white;
        }

        .ct_bodytop1_r311button1 {
            --icon-primary-color: currentColor;
            --icon-secondary-color: var(--ds-surface, #FFFFFF);
            display: inline-block;
            flex-shrink: 0;
            line-height: 1;
            width: 16px;
            height: 16px;
        }

        .ct_bodytop1_r311button2 {
            display: inline-block;
            overflow: hidden;
            pointer-events: none;
            max-width: 100%;
            max-height: 100%;
            color: var(--icon-primary-color);
            fill: var(--icon-secondary-color);
            vertical-align: bottom;
            width: 16px;
            height: 16px;
        }

        .ct_bodytop1_r3l12a > svg {
            width: 16px;
            height: 16px;
            overflow: hidden;
            pointer-events: none;
            max-width: 100%;
            max-height: 100%;
            color: var(--icon-primary-color);
            fill: var(--icon-secondary-color);
            vertical-align: bottom;
        }

        .ct_bodytop1_r3l12a {
            border: 0px;
            margin-left: 12px;
        }

        .ct_bodytop1_r3l12b1f {
            display: flex;
            width: 100%;
            height: 100%;
            flex: 1 1 100%;
            background-color: transparent;
            background-position: center center;
            background-repeat: no-repeat;
            background-size: cover;
            background-image: url("/assets/img/fox_logo.jpg");
            border-radius: 50%:
        }

        .ct_bodytop1_r3l12b {
            display: flex;
            flex-direction: row;
            -webkit-box-align: center;
            align-items: center;
        }

        .ct_bodytop1_r3l12b1 {
            display: inline-flex;
            -webkit-box-align: center;
            align-items: center;
            height: 40px;
            position: relative;
            background: transparent;
            vertical-align: top;
            padding: 0px;
            transition: transform 0.1s ease-out 0s;
            border-radius: 50%;
            z-index: 5;
        }

        .ct_bodytop1_r3l12b1:first-child {
            margin-left: 0px;
        }

        .ct_bodytop1_r3l12b1a {
            border-radius: 50%;
            border: 2px solid transparent;
        }

        .ct_bodytop1_r3l12b1b {
            line-height: 0;
            display: block;
            cursor: pointer;
        }

        .ct_bodytop1_r3l12b1d {
            display: inline-block;
            position: relative;
            outline: 0px;
        }

        .ct_bodytop1_r3l12b1e {
            height: 32px;
            width: 32px;
            -webkit-box-align: stretch;
            align-items: stretch;
            background-color: var(--ds-surface-overlay, #FFFFFF);
            border-radius: 50%;
            box-sizing: content-box;
            cursor: inherit;
            display: flex;
            flex-direction: column;
            -webkit-box-pack: center;
            justify-content: center;
            outline: none;
            overflow: hidden;
            position: static;
            transform: translateZ(0px);
            transition: transform 200ms ease 0s, opacity 200ms ease 0s;
            box-shadow: 0 0 0 2px var(--ds-surface-overlay, #FFFFFF);
            border: none;
            margin: 2px;
            padding: 0px;
            font-size: inherit;
            font-family: inherit
        }

        .ct_bodytop1_r3l12b1f1 {
            display: flex;
            width: 100%;
            height: 100%;
            flex: 1 1 100%;
            background-color: transparent;
            background-position: center center;
            background-repeat: no-repeat;
            background-size: cover;
        }

        .ct_bodytop1_r3right {
            display: flex;
            -webkit-box-align: center;
            align-items: center;
        }

        .ct_bodytop1_r3ra {
            font-size: 11px;
            color: var(--ds-text-subtlest, #5e6c84);
            text-transform: uppercase;
            padding: 0px 8px;
        }

        .ct_bodytop1_r3rb1 {
            display: inline-flex;
        }

        .ct_bodytop1_r3rb4 {
            display: inline-flex;
            transition: box-shadow 0.15s cubic-bezier(0.47, 0.03, 0.49, 1.38) 0s;
        }

        .ct_bodytop1_r3rb6 {
            -webkit-box-align: baseline;
            align-items: baseline;
            border-width: 0px;
            border-radius: 3px;
            box-sizing: border-box;
            display: inline-flex;
            font-size: inherit;
            font-weight: 500;
            max-width: 100%;
            position: relative;
            text-align: center;
            text-decoration: none;
            transition: background 0.1s ease-out 0s, box-shadow 0.15s cubic-bezier(0.47, 0.03, 0.49, 1.38) 0s;
            white-space: nowrap;
            background: var(--ds-background-neutral, rgba(9,30,66, 0.04));
            cursor: pointer;
            height: 2.28571em;
            line-height: 2.28571em;
            padding: 0px 10px;
            vertical-align: middle;
            width: auto;
            -webkit-box-pack: center;
            justify-content: center;
            outline: none;
            color: var(--ds-text, #42526e) !important;
        }

        .ct_bodytop1_r3rb6dd {
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

        .ct_bodytop1_r3rb6dda {
            --icon-primary-color: currentColor;
            --icon-secondary-color: var(--ds-surface, #FFFFFF);
            display: inline-block;
            flex-shrink: 0;
            line-height: 1;
            width: 24px;
            height: 24px;
        }

        .ct_bodytop1_r3rb6label {
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

        .ct_bodytop1_r3rb6labelb {
            display: flex;
        }

        .ct_bodytop1_r3rb6labelc {
            max-width: 120px;
            white-space: nowrap;
            overflow: hidden;
            text-overflow: ellipsis;
        }

        .ct_bodybot {
            height: 100%;
            max-height: 100%;
            overflow: hidden;
        }

        .ct_bodybota {
            display: block;
            width: 100%;
            position: absolute;
        }

        .ct_bodybotb {
            display: flex;
            height: 100%;
        }

        .ct_bodybotb1 {
            width: 100%;
            height: 100%;
            min-width: 0px;
            position: relative;
        }

        .ct_bodybotb1b {
            width: 100%;
            max-height: 100%;
            height: 100%;
            overflow: auto;
            flex: 1 1 0%;
            position: relative;
        }

        .ct_bodybotb2 {
            display: flex;
            flex-flow: row nowrap;
            -webkit-box-pack: start;
            justify-content: flex-start;
            -webkit-box-align: stretch;
            align-items: stretch;
            user-select: none;
            padding: 0px 0px 40px 34px;
            width: fit-content;
        }

        .ct_bodybotb2a {
            left: 0px;
            margin-left: -40px;
            /* box-shadow: var(--ds-UNSAFE-util-MISSING_TOKEN, 0 80px 0 #FFFFFF, 5px -2px 7px rgba(9,30, 66, 0.08)); */
            background: var(--ds-surface, #FFFFFF);
            width: 40px;
            position: sticky;
            opacity: 0;
            pointer-events: none;
            transition: opacity 0.2s ease 0s;
            z-index: 90;
        }

        .ct_bodybotb2d {
            right: 0px;
            /* box-shadow: var(--ds-UNSAFE-util-MISSING_TOKEN, 0 80px 0 #FFFFFF, 5px -2px 7px rgba(9,30, 66, 0.08)); */
            background: var(--ds-surface, #FFFFFF);
            width: 40px;
            position: sticky;
            opacity: 1;
            pointer-events: none;
            transition: opacity 0.2s ease 0s;
            z-index: 90;
        }

        .ct_bodybotb2c1 {
            height: 100%;
            display: block;
        }

        .ct_bodybotb2c1 > div::before {
            content: "";
            position: absolute;
            top: 0px;
            left: 0px;
            width: 100%;
            height: 100%;
            border-radius: 3px;
            box-shadow: 0 0 0 3px var(--ds-border-accent-purple, #C0B6F2);
            opacity: 0;
            pointer-events: none;
        }

        .ct_bodybotb2c > div::before {
            transition: none 0s ease 0s;
        }

        .ct_bodybotb2c > div {
            height: 100%;
        }

        .ct_bodybotb2c1 > * {
            position: relative;
        }

        .ct_bodybotb2c2 {
            -webkit-box-align: stretch;
            align-items: stretch;
            border-radius: 6px;
            display: flex;
            flex-direction: column;
            -webkit-box-flex: 1;
            flex-grow: 1;
            -webkit-box-pack: start;
            justify-content: flex-start;
            padding-left: 6px;
            padding-right: 12px;
        }

        .ct_bodybotb2c3 {
            position: sticky;
            top: 0px;
            z-index: 4;
        }

        .ct_body4 {
            height: 100%;
        }

        .ct_bodybotb2c5 {
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
            text-decoration: none;
            transition: background 0.1s ease-out 0s, box-shadow 0.15s cubic-bezier(0.47, 0.03, 0.49, 1.38) 0s;
            white-space: nowrap;
            background: var(--ds-background-neutral, rgba(9, 30, 66, 0.04));
            cursor: pointer;
            height: 2.28571em;
            line-height: 2.28571em;
            padding: 0px 2px;
            vertical-align: middle;
            width: auto;
            -webkit-box-pack: center;
            justify-content: center;
            color: var(--ds-text, #42526e) !important;
        }

        .ct_bodybotb2c6 {
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

        .ct_bodybotb2c7 {
            --icon-primary-color: currentColor;
            --icon-secondary-color: var(--ds-surface, #FFFFFF);
            display: inline-block;
            flex-shrink: 0;
            line-height: 1;
            width: 24px;
            height: 24px;
        }

        .ct_kanban {
            padding-top: 10px;
        }

        .ct_kanban1_a {
            display: block;
        }

        .ct_kanban1 {
            display: flex;
            flex-flow: row nowrap;
            -webkit-box-pack: start;
            justify-content: flex-start;
            -webkit-box-align: stretch;
            align-items: stretch;
            user-select: none;
            padding: 0px 0px 40px 0px;
        }

        .ct_kanban2 {
            position: relative;
            flex: 1 1 auto;
        }

        .ct_kanban1 > ::before {
            content: "";
            position: absolute;
            top: 0px;
            left: 0px;
            width: 100%;
            height: 100%;
            border-radius: 3px;
            box-shadow: 0 0 0 3px var(--ds-border-accent-purple, #C0B6F2);
            opacity: 0;
            transition: opacity 0.1s ease-in-out 0s;
            pointer-events: none;
        }

        .ct_kanban3 {
            display: flex;
            flex: 1 1 auto;
        }

        .ct_kanban4 {
            display: flex;
            flex: 1 1 auto;
        }

        .ct_kanban4a {
            display: flex;
            flex-direction: column;
            align-self: auto;
            flex: 1 1 auto;
            min-width: 282px;
            max-width: 282px;
            transition: min-width 300ms ease 0s, max-width 300ms ease-in 0s;
        }

        .ct_kanban4b {
            border-radius: 6px;
            margin-left: 6px;
            margin-right: 6px;
            display: flex;
            flex-direction: column;
            align-self: auto;
            contain: initial;
            flex: 1 1 auto;
            min-width: 270px;
            max-width: 270px;
            box-shadow: initial;
            background-color: var(--ds-background-neutral, #f4f5f7);
            transition: min-width 300ms ease 0s, max-width 300ms ease-in 0s;
        }

        .ct_kanban4c {
            display: flex;
            flex-direction: column;
            background-color: var(---ds-surface-sunken, #f4f5f7);
            border-radius: 6px;
            position: relative;
            align-self: stretch;
            flex: 1 1 auto;
            transition: opacity 0.2s ease 0s, min-width 300ms ease 0s, max-width 300ms ease-in 0s;
            min-width: 270px;
            max-width: 270px;
        }

        .ct_kanban4top {
            position: sticky;
            background: var(--ds-background-neutral, #FFFFFF);
            top: 0px;
            height: 48px;
            display: flex;
            flex-flow: column nowrap;
            -webkit-box-pack: start;
            justify-content: flex-start;
            -webkit-box-align: stretch;
            align-items: stretch;
            z-index: 4;
        }

        .ct_kanban4top::before {
            opacity: 0;
            transition: opacity 0.2s ease 0s;
            content: "";
            position: absolute;
            bottom: -2px;
            left: 0px;
            right: 0px;
            height: 2px;
            pointer-events: none;
            background-color: var(--ds-blanket,#97a0af);
        }

        .ct_kanb_top1 {
            user-select: none;
            width: 100%;
            max-width: 100%;
            box-sizing: border-box;
            height: 100%;
            position: relative;
            background-color: var(--ds-surface-sunken, #F4F5F7);
            border-top-left-radius: 6px;
            border-top-right-radius: 6px;
            transition: background-color 0.2s ease 0s;
            cursor: grab;
        }

        [data-rbd-drag-handle-context-id="0"] {
            cursor: -webkit-grab;
            cursor: grab;
        }

        [data-rbd-drag-handle-context-id="0"] {
            -webkit-touch-callout: none;
            -webkit-tap-highlight-color: rgba(0, 0, 0, 0);
            touch-action: manipulation;
        }

        .ct_kanb_top2 {
            display: flex;
            flex-flow: column nowrap;
            -webkit-box-pack: center;
            justify-content: center;
            -webkit-box-align: stretch;
            align-items: stretch;
            flex: 1 1 auto;
            align-self: auto;
            max-width: 100%;
            width: 100%;
            height: 100%;
        }

        .ct_kanb_top_txt {
            font-size: 12px;
            padding-left: 5px;
            padding-right: 5px;
            max-width: 100%;
            box-sizing: border-box;
        }

        .ct_kanb_top_txt1 {
            max-width: calc(100% - 45px);
            overflow: hidden;
            white-space: nowrap;
            text-overflow: ellipsis;
        }

        .ct_kanb_top_txt2 {
            max-width: 100%;
            margin-top: -8px;
        }

        .ct_kanb_top_txt3 {
            margin-top: 8px;
        }

        .ct_kanb_top_txt4 {
            line-height: 1;
        }

        .ct_kanb_top_txt5 {
            display: inline-block;
            overflow: hidden;
            white-space: nowrap;
            text-overflow: ellipsis;
            max-width: 100%;
        }

        .ct_kanb_top_txt6 {
            min-width: 0px;
            display: flex;
            -webkit-box-align: center;
            align-items: center;
        }

        .ct_kanb_top_txt7 {
            font-style: inherit;
            line-height: 1.14286;
            display: flex;
            margin-top: 16px;
            text-transform: uppercase;
            font-weight: 500;
            color: var(--ds-text-subtlest, #5e6c84);
            letter-spacing: normal;
            font-size: 12px;
            height: 100%;
            margin-left: 8px;
            margin-right: 8px;
            overflow: hidden;
        }

        .ct_kanb_top_txt8 {
            display: inline-block;
            overflow: hidden;
            white-space: nowrap;
            text-overflow: ellipsis;
            max-width: 100%;
        }

        .ct_kanban4bot {
            -webkit-box-flex: 1;
            flex-grow: 1;
            display: flex;
            flex-direction: column;
            padding-bottom: 6px;
            min-height: 80px;
        }

        .ct_kanb_bot1 {
            margin-left: 5px;
            margin-right: 5px;
            -webkit-box-flex: 1;
            flex-grow: 1;
            display: flex;
            padding-top: 4px;
        }

        .ct_kanb_bot2 {
            box-sizing: border-box;
            direction: ltr;
            height: auto;
            position: relative;
            width: 260px;
            will-change: initial;
            overflow: visible;
            background-color: var(--ds-surface-sunken, #F45F57);
        }

        .ct_kanb_bot3 {
            width: auto;
            height: 228px;
            max-width: 260px;
            max-height: unset;
            overflow: visible;
            position: relative;
            will-change: initial;
            background-color: var(--ds-surface-sunken, #F4F5F7);
            transition: height 0.2s ease 0s;
            min-height: 100%;
        }

        .ct_kanb_bot_ct {
            height: 104px;
            left: 0px;
            position: absolute;
            top: 0px;
            width: 100%;
        }

        .ct_kanb_bot_ct1 {
            display: block;
        }

        .ct_kanb_bot_ct2 {
            position: relative;
            margin: 2px 0px;
            display: block;
        }

        .ct_kanb_bot_ct4 {
            max-width: 270px;
            cursor: pointer;
            user-select: none;
            box-sizing: border-box;
            display: flex;
            flex-direction: column;
            position: relative;
            margin: 2px 0px;
            border-radius: 3px;
            box-shadow: var(--ds-shadow-raised,0 1px 1px rgba(23,43,77,0.2), 0 0 1px rgba(23, 43, 77, 0.2));
            transition: background-color 140ms ease-in-out 0s, color 140ms ease-in-out 0s;
            background-color: var(--ds-surface-raised, #FFFFFF);
            color: var(--ds-text, #172B4D);
            filter: none;
        }

        .ct_kanb_bot_ct5 {
            box-sizing: border-box;
            display: flex;
            flex-direction: column;
            padding: 12px;
        }

        .ct_kanb_bot_ct5up {
            margin-bottom: 8px;
            display: flex;
            flex-direction: row;
            width: 100%;
        }

        .ct_kanb_bot_ct5up1 {
            overflow-wrap: break-word;
            word-break: break-word;
            padding-right: 32px;
        }

        .ct_kanb_bot_ct5dw {
            margin-bottom: 0px;
            display: flex;
            flex-direction: row;
            width: 100%;
        }

        .ct_kanb_bot_ct5dw1 {
            display: flex;
            flex-direction: row;
            -webkit-box-align: center;
            align-items: center;
            -webkit-box-pack: justify;
            justify-content: space-between;
            width: 100%;
            min-height: 28px;
            gap: 4px;
        }

        .ct_kanb_bot_ct5dw2 {
            min-width: 0px;
            box-sizing: border-box;
            display: flex;
            flex-direction: row;
            -webkit-box-align: center;
            align-items: center;
            gap: 8px;
        }

        .ct_kanb_bot_ct5dw2left {
            display: flex;
            -webkit-box-pack: center;
            justify-content: center;
            flex-direction: column;
        }

        .ct_kanb_bot_ct5dw2left2 {
            width: 16px;
            height: 16px;
            vertical-align: text-bottom;
        }

        .ct_kanb_bot_ct5dw2right {
            flex: 0 1 auto;
            direction: rt1;
            white-space: nowrap;
            overflow: hidden;
        }

        .ct_kanb_bot_ct5dw2right2 {
            display: block;
            overflow: hidden;
            text-overflow: ellipsis;
            font-size: 16px;
            font-weight: 600;
            color: var(--ds-text-subtle, #7a869a);
        }

        .ct_bodybotb2 {
            height: 100%;
        }

        .ct_kanban1  {
            height: 100%;
        }

        .ct_kanban3 {
            height: 100%;
        }

        .ct_kanban4a {
            height: 100%;
        }

        .ct_kanb_bot_ct_r2 {
            height: 104px;
            left: 0px;
            position: absolute;
            top: 114px;
            width: 100%;
        }

        .ct_kanb_bot_ct_r2_c2 {
            top: 96px !important;
        }

        .ct_kanb_bot_ct_r3 {
            height: 104px;
            left: 0px;
            position: absolute;
            top: 228px;
            width: 100%;
        }

        .ct_kanb_bot_ct_r2_c3 {
            top: 210px !important;
        }

        .ct_kanb_bot_ct_r4 {
            height: 104px;
            left: 0px;
            position: absolute;
            top: 342px;
            width: 100%;
        }

        .ct_kanb_bot_ct_r2_c4 {
            top: 324px !important;
        }

        .ct_kanb_bot_ct_r3_c4 {
            top: 300px !important;
        }

        .ct_kanb_bot_ct_r5 {
            height: 104px;
            left: 0px;
            position: absolute;
            top: 456px;
            width: 100%;
        }

        .ct_kanb_bot_ct_r3_c5 {
            top: 390px !important;
        }

        .ct_kanb_bot_ct_r6 {
            height: 104px;
            left: 0px;
            position: absolute;
            top: 570px;
            width: 100%;
        }

        .ct_kanb_bot_ct_r3_c6{
            top: 480px !important;
        }

        .ct_kanb_bot_ct_r7 {
            height: 104px;
            left: 0px;
            position: absolute;
            top: 684px;
            width: 100%;
        }

        .ct_kanb_bot_ct_r3_c7{
            top: 569px !important;
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
                    <button aria-expanded="false" id ="pghn_ppt1_button" aria-haspopup="true" class="pghn_ppt" type="button" tabindex="0" onclick="toggle('pghn_ppt_modal', 'pghn_ppt1_button')">
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
                        <button aria-expanded="false" aria-haspopup="true" class="pghn1_b1b" id="pghn1_b1b" type="button" tabindex="0" onclick="toggle('pghn_yourwork', 'pghn1_b1b')">
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
                        <div class="pghn_yourwork" id="pghn_yourwork" data-placement="bottom-start" tab-index= "0">
                            <span>
                                <div class="pghn_yourwork1">
                                    <div class="pghn_yourwork2">
                                        <div class="pghn_yourwork2_header">
                                            <div class="pghn_yourwork2_headertab">
                                                <div role="tablist" class="pghn_yourwork2_headertab1">
                                                    <div id="pghn_yw_assignedtome" aria-setsize="3" role="tab" aria-posinset="1" aria-selected="false" aria-controls="pghn_yw_assignedtome-tab" tabindex="0" onclick="toggleactive('pghn_yw_assignedtome')">
                                                        Assigned to me
                                                    </div>
                                                    <div id="pghn_yw_recent" aria-setsize="3" role="tab" aria-posinset="2" aria-selected="false" aria-controls="pghn_yw_recent-tab" tabindex="0" onclick="toggleactive('pghn_yw_recent')">
                                                        Recent
                                                    </div>
                                                    <div id="pghn_yw_boards" aria-setsize="3" role="tab" aria-posinset="3" aria-selected="false" aria-controls="pghn_yw_boards-tab" tabindex="0" onclick="toggleactive('pghn_yw_boards')">
                                                        Boards
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div role="group" data-section="true" class="pghn_yourwork2_body">
                                            <div class="pghn_yourwork2_body1">
                                                You have no open issues assigned to you
                                            </div>
                                        </div>
                                        <div role="group" data-section="true" class="pghn_yourwork2_footer">
                                            <span>
                                                <a class="pghn_yourwork2_footer1" draggable="false" aria-disabled="false" href="/kelapabakar/display4" target="_self">
                                                    <span class="pghn_yourwork2_footer2">
                                                        <span class="pghn_yourwork2_footer3" data-item-title="true">
                                                            Go to Your Work page
                                                        </span>
                                                    </span>
                                                </a>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </span>
                        </div>
                    </div>
                    <div class="pghn1_b1">
                        <button aria-expanded="false" aria-haspopup="true" class="pghn1_b1c" id="pghn1_b1c" type="button" tabindex="0" onclick="toggle('pghn_projects', 'pghn1_b1c')">
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
                        <div class="pghn_projects" id="pghn_projects" data-placement="bottom-start">
                            <span>
                                <div class="pghn_projects1">
                                    <div class="pghn_projects2">
                                        <div role="group" data-section="true" class="pghn_projects_parttop">
                                            <span>
                                                <div data-ds--menu--heading-item="true" class="pghn_projects_thead">
                                                    Recent
                                                </div>
                                                <div class="pghn_projects_tbody">
                                                    _
                                                </div>
                                            </span>
                                        </div>
                                        <div role="group" data-section="true" class="pghn_projects_partbottom">
                                            <span>
                                                <button class="pghn_projects_bbutton" type="button">
                                                    <span class="pghn_projects_bbutton1">
                                                        <span class="pghn_projects_bbutton2" data-item-title="true">
                                                            Display Choice 1
                                                        </span>
                                                    </span>
                                                </button>
                                                <button class="pghn_projects_bbutton" type="button">
                                                    <span class="pghn_projects_bbutton1">
                                                        <span class="pghn_projects_bbutton2" data-item-title="true">
                                                            Display Choice 2
                                                        </span>
                                                    </span>
                                                </button>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </span>
                        </div>
                    </div>
                    <div class="pghn1_b1">
                        <button aria-expanded="false" aria-haspopup="true" class="pghn1_b1d" id="pghn1_b1d" type="button" tabindex="0" onclick="toggle('pghn_filters', 'pghn1_b1d')">
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
                        <div class="pghn_filters" id="pghn_filters" data-placement="bottom-start">
                            <span>
                                <div class="pghn_filters1">
                                    <div class="pghn_filters2">
                                        <div role="group" data-section="true" class="pghn_filters_parttop">
                                            <span>
                                                <div data-ds--menu--heading-item="true" class="pghn_filters_thead">
                                                    Recent
                                                </div>
                                                <div class="pghn_filters_tbody">
                                                    _
                                                </div>
                                            </span>
                                        </div>
                                        <div role="group" data-section="true" class="pghn_filters_partbottom">
                                            <span>
                                                <button class="pghn_filters_bbutton" type="button">
                                                    <span class="pghn_filters_bbutton1">
                                                        <span class="pghn_filters_bbutton2" data-item-title="true">
                                                            Display Choice 1
                                                        </span>
                                                    </span>
                                                </button>
                                                <button class="pghn_filters_bbutton" type="button">
                                                    <span class="pghn_filters_bbutton1">
                                                        <span class="pghn_filters_bbutton2" data-item-title="true">
                                                            Display Choice 2
                                                        </span>
                                                    </span>
                                                </button>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </span>
                        </div>
                    </div>
                    <div class="pghn1_b1">
                        <button aria-expanded="false" aria-haspopup="true" class="pghn1_b1e" id="pghn1_b1e" type="button" tabindex="0" onclick="toggle('pghn_dashboards', 'pghn1_b1e')">
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
                        <div class="pghn_dashboards" id="pghn_dashboards" data-placement="bottom-start">
                            <span>
                                <div class="pghn_dashboards1">
                                    <div class="pghn_dashboards2">
                                        <div role="group" data-section="true" class="pghn_dashboards_parttop">
                                            <span>
                                                <div data-ds--menu--heading-item="true" class="pghn_dashboards_thead">
                                                    Recent
                                                </div>
                                                <div class="pghn_dashboards_tbody">
                                                    _
                                                </div>
                                            </span>
                                        </div>
                                        <div role="group" data-section="true" class="pghn_dashboards_partbottom">
                                            <span>
                                                <button class="pghn_dashboards_bbutton" type="button">
                                                    <span class="pghn_dashboards_bbutton1">
                                                        <span class="pghn_dashboards_bbutton2" data-item-title="true">
                                                            Display Choice 1
                                                        </span>
                                                    </span>
                                                </button>
                                                <button class="pghn_dashboards_bbutton" type="button">
                                                    <span class="pghn_dashboards_bbutton1">
                                                        <span class="pghn_dashboards_bbutton2" data-item-title="true">
                                                            Display Choice 2
                                                        </span>
                                                    </span>
                                                </button>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </span>
                        </div>
                    </div>
                    <div class="pghn1_b1">
                        <button aria-expanded="false" aria-haspopup="true" class="pghn1_b1f" id="pghn1_b1f" type="button" tabindex="0" onclick="toggle('pghn_people', 'pghn1_b1f')">
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
                        <div class="pghn_people" id="pghn_people" data-placement="bottom-start">
                            <span>
                                <div class="pghn_people1">
                                    <div class="pghn_people2">
                                        <div role="group" data-section="true" class="pghn_people_parttop">
                                            <span>
                                                <div data-ds--menu--heading-item="true" class="pghn_people_thead">
                                                    Recent
                                                </div>
                                                <div class="pghn_people_tbody">
                                                    _
                                                </div>
                                            </span>
                                        </div>
                                        <div role="group" data-section="true" class="pghn_people_partbottom">
                                            <span>
                                                <button class="pghn_people_bbutton" type="button">
                                                    <span class="pghn_people_bbutton1">
                                                        <span class="pghn_people_bbutton2" data-item-title="true">
                                                            Display Choice 1
                                                        </span>
                                                    </span>
                                                </button>
                                                <button class="pghn_people_bbutton" type="button">
                                                    <span class="pghn_people_bbutton1">
                                                        <span class="pghn_people_bbutton2" data-item-title="true">
                                                            Display Choice 2
                                                        </span>
                                                    </span>
                                                </button>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </span>
                        </div>
                    </div>
                    <div class="pghn1_b1">
                        <button aria-expanded="false" aria-haspopup="true" class="pghn1_b1g" id="pghn1_b1g" type="button" tabindex="0" onclick="toggle('pghn_apps', 'pghn1_b1g')">
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
                        <div class="pghn_apps" id="pghn_apps" data-placement="bottom-start">
                            <span>
                                <div class="pghn_apps1">
                                    <div class="pghn_apps2">
                                        <div role="group" data-section="true" class="pghn_apps_parttop">
                                            <span>
                                                <div data-ds--menu--heading-item="true" class="pghn_apps_thead">
                                                    Recent
                                                </div>
                                                <div class="pghn_apps_tbody">
                                                    _
                                                </div>
                                            </span>
                                        </div>
                                        <div role="group" data-section="true" class="pghn_apps_partbottom">
                                            <span>
                                                <button class="pghn_apps_bbutton" type="button">
                                                    <span class="pghn_apps_bbutton1">
                                                        <span class="pghn_apps_bbutton2" data-item-title="true">
                                                            Display Choice 1
                                                        </span>
                                                    </span>
                                                </button>
                                                <button class="pghn_apps_bbutton" type="button">
                                                    <span class="pghn_apps_bbutton1">
                                                        <span class="pghn_apps_bbutton2" data-item-title="true">
                                                            Display Choice 2
                                                        </span>
                                                    </span>
                                                </button>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </span>
                        </div>
                    </div>
                    <div data-testid="create-button-wrapper" class="pghn1_b2">
                        <button id="createGlobalItem" data-hide-on-smallscreens="true" class="pghn1_b2a" type="button" tabindex="0">
                            <span class="pghn1_b2b">Create</span>
                        </button>
                    </div>
                    <div class="pghn1_whitespace"></div>
                </div>
            </nav>
            <div class="pgh_profile">
                <div class="pgh_search">
                    <div class="pgh_search1">
                        <div class="pgh_search2">
                            <div class="pgh_search3">
                                <div class="pgh_search4">
                                    <div class="pgh_search5">
                                        <div class="pgh_search6" role="presentation">
                                            <div class="pgh_search7">
                                                {{-- <span class="pgh_search_b1">
                                                    <button class="pgh_search_b1a" type="button" tabindex="0">
                                                        <span class="pgh_search_b1b">
                                                            <span role="img" aria-label="search" class="pgh_search_b1c">
                                                                <span class="material-symbols-outlined">
                                                                    search
                                                                </span>
                                                            </span>
                                                        </span>
                                                    </button>
                                                </span> --}}
                                                <span class="pgh_search_b2">
                                                    <span class="pgh_search_b2a">
                                                        <span class="material-symbols-outlined pgh_search_b2b">
                                                            search
                                                        </span>
                                                    </span>
                                                </span>
                                                <input data-test-id="search-dialog-dialog-wrapper" tabindex="-1" default class="pgh_search_b3" maxlength="500" type="text" placeholder="Search" value>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <span>
                    <div class="pgh_notification">
                        <div role="presentation">
                            <button aria-describedby="andrewsoft-notification-count" aria-expanded="false" aria-haspopup="true" class="pgh_notification1" type="button" tabindex="0">
                                <span class="pgh_notification2">
                                    <span class="pgh_notification3" role="img" aria-label="Notifications">
                                        <span class="material-symbols-outlined">
                                            notifications
                                        </span>
                                    </span>
                                </span>
                            </button>
                        </div>
                    </div>
                </span>
                <span>
                    <div class="pgh_notification">
                        <div role="presentation">
                            <button aria-describedby="andrewsoft-notification-count" aria-expanded="false" aria-haspopup="true" class="pgh_notification1" type="button" tabindex="0">
                                <span class="pgh_notification2">
                                    <span class="pgh_notification3" role="img" aria-label="Notifications">
                                        <span class="material-symbols-outlined">
                                            help
                                        </span>
                                    </span>
                                </span>
                            </button>
                        </div>
                    </div>
                </span>
                <span>
                    <div class="pgh_notification">
                        <div role="presentation">
                            <button aria-describedby="andrewsoft-notification-count" aria-expanded="false" aria-haspopup="true" class="pgh_notification1" type="button" tabindex="0">
                                <span class="pgh_notification2">
                                    <span class="pgh_notification3" role="img" aria-label="Notifications">
                                        <span class="material-symbols-outlined">
                                            settings
                                        </span>
                                    </span>
                                </span>
                            </button>
                        </div>
                    </div>
                </span>
                <span>
                    <span class="pgh_profpic">
                        <div class="pgh_profpic1">
                            <div class="pgh_profpic2" role="presentation">
                                <button class="pgh_profpic3" aria-haspopup="true" aria-label="Your profile and settings" type="button" tabindex="0">
                                    <span class="pgh_profpic4">
                                        <span class="pgh_profpic5" data-test-id="ak-spotlight-target-profile-spotlight">
                                            <div class="pgh_profpic6">
                                                <span class="pgh_profpic7">
                                                    <span class="pgh_profpic8">
                                                    </span>
                                                </span>
                                            </div>
                                        </span>
                                    </span>
                                </button>
                            </div>
                        </div>
                    </span>
                </span>
            </div>
        </header>
    </div>
    <div class="pg_body">
        <div class="pg_sidenav active">
            <div class="pg_sidenav_a" data-testid="ContextualNavigation" id="pg_sidenav_a" data-ds--page-layout--slot="left-sidebar">
                <style>:root{--leftSidebarWidth: 302px;}</style>
                <div class="pg_sidenav_b">
                    <div class="pg_sidenav_c">
                        <div class="pg_sidenav_d">
                            <nav aria-label class ="pg_sidenav_e">
                                <div class="pgs_top">
                                    <div class="pgs_top1" data-navheader="true">
                                        <span class="pgs_top2">
                                            <div class="pgs_top3">
                                                <span data-item-elem-before="true" class="pgs_topicon">
                                                    <div class="pgs_topicon_a">
                                                        <span class="pgs_topicon_b">
                                                            <img src="{{ URL::to('/assets/img/top_header_icon.png') }}" style="border-radius: 2px;">
                                                        </span>
                                                    </div>
                                                </span>
                                                <span class="pgs_toptext">
                                                    <h2 class="pgs_toptexttop" data-item-title="true">odessaobg</h2>
                                                    <span data-item-description="true" class="pgs_toptextbot">Software Project</span>
                                                </span>
                                            </div>
                                        </span>
                                    </div>
                                </div>
                                <div class="pgs_mid" tabindex="-1">
                                    <div class="pgs_mid_a" data-enter-from="right" data-exit-to="left">
                                        <div class="pgs_mid_b">
                                            <div class="pgs_mid_c">
                                                <div class="pgs_mid_d">
                                                    <div class="pgs_midtop pgs_midtop_row">
                                                        <div class="pgs_midtop_1">
                                                            <div class="pgs_midtop_1button" id="pgs_midtop_1button" role="button" aria-expanded="true" tabindex="0" onclick="toggleexpandcollapse('pgs_midtop1ct2', 'pgs_midtop1ct3', 'pgs_midtop_1button')">
                                                                <span data-testid="sidebar.expand-button.container-planning" role="img" aria-label="PLANNING" class="pgs_midtop_1button_a">
                                                                    <span class="material-symbols-outlined pgs_midtop_1button_b">arrow_drop_down</span>
                                                                </span>
                                                            </div>
                                                            <div class="pgs_midtop1ct">
                                                                <div class="pgs_midtop1ct1" data-testid data-ds--menu--heading-item="true" aria-hidden="true">PLANNING</div>
                                                                <a data-testid="navigation-apps-sidebar-next-gen.ui.menu.software-roadmap-link" draggable="false" aria-disabled="false" href="/kelapabakar/display3" target="_self" class="pgs_midtop1ct2" id="pgs_midtop1ct2">
                                                                    <span data-item-elem-before="true" class="pgs_midtop1ct2_1">
                                                                        <span role="presentation" aria-hidden="true" class="pgs_midtop1ct2_1b">
                                                                            <span class="material-symbols-outlined">local_fire_department</span>
                                                                        </span>
                                                                    </span>
                                                                    <span class="pgs_midtop1ct2_2">
                                                                        <span class="pgs_midtop1ct2_3">Roadmap</span>
                                                                    </span>
                                                                </a>
                                                                <span data-test-id="ak-spotlight-target-spotlight-sidebar-next-gen-board" class="pgs_midtop1ct3" id="pgs_midtop1ct3">
                                                                    <a data-testid="navigation-apps-sidebar-next-gen.ui.menu.software-board-link" aria-current="page" draggable="false" aria-disabled="false" href="/kelapabakar/display2" target="_self" class="pgs_midtop1ct3a">
                                                                        <span data-item-elem-before="true" class="pgs_midtop1ct3icon">
                                                                            <span role="presentation" aria-hidden="true" class="pgs_midtop1ct3icon1">
                                                                                <span class="material-symbols-outlined">developer_board</span>
                                                                            </span>
                                                                        </span>
                                                                        <span class="pgs_midtop1ct3text">
                                                                            <span class="pgs_midtop1ct3text1" data-item-title="true">
                                                                                Board
                                                                            </span>
                                                                        </span>
                                                                    </a>
                                                                </span>
                                                            </div>
                                                        </div>
                                                        <div class="pgs_midtop_2">
                                                            <div class="pgs_midtop_2icon" role="button" aria-expanded="true" tabindex="0" onclick="toggleexpandcollapse2('pgs_midtop_2ct1', 'pgs_midtop_2icon')">
                                                                <span data-testid="sidebar.expand-button.container-development" role="img" aria-label="DEVELOPMENT" class="pgs_midtop_2icon1">
                                                                    <span class="material-symbols-outlined pgs_midtop_1button_b">arrow_drop_down</span>
                                                                </span>
                                                            </div>
                                                            <div class="pgs_midtop_2text" aria-label="DEVELOPMENT" data-testid role="group" data-section="true">
                                                                <div class="pgs_midtop_2text1" data-testid data-ds--menu--heading-item="true" aria-hidden="true">DEVELOPMENT</div>
                                                                <span data-test-id="ak-spotlight-target-spotlight-sidebar-code-next-gen">
                                                                    <a data-testid="navigation-apps-sidebar-next-gen.ui.menu.software-code-link" draggable="false" aria-disabled="false" class="pgs_midtop_2ct1" id="pgs_midtop_2ct1" target="_self" href="/kelapabakar/display1">
                                                                        <span data-item-elem-before="true" class="pgs_midtop_2ct2">
                                                                            <span role="presentation" aria-hidden="true" class="pgs_midtop_2ct2icon">
                                                                                <span class="material-symbols-outlined">code</span>
                                                                            </span>
                                                                        </span>
                                                                        <span class="pgs_midtop_2ct2text">
                                                                            <span class="pgs_midtop_2ct2text1" data-item-title="true">
                                                                                Code
                                                                            </span>
                                                                        </span>
                                                                    </a>
                                                                </span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="pgs_midbot">
                                                        <div class="pgs_midbot_a">
                                                            <div class="pgs_midbot_b" role="group" data-section="group">
                                                                <a data-test-id="navigation-apps-sidebar-common.ui.shortcuts.business-pages-link" draggable="false" aria-disabled="false" href="/kelapabakar/display1" target="_self" class="pgs_midbot_r1">
                                                                    <span data-item-elem-before="true" class="pgs_midbot_r1_a">
                                                                        <span class="pgs_midbot_r1_b" role="presentation" aria-hidden="true">
                                                                            <span class="material-symbols-outlined">article</span>
                                                                        </span>
                                                                    </span>
                                                                    <span class="pgs_midbot_r1_b">
                                                                        <span class="pgs_midbot_r1_b1" data-item-title="true">
                                                                            Project pages
                                                                        </span>
                                                                    </span>
                                                                </a>
                                                                <button class="pgs_midbot_r2" data-testid="navigation-apps-sidebar-common.ui.shortcuts.shortcuts-add-link" draggable="false" aria-disabled="false" type="button">
                                                                    <span data-item-elem-before="true" class="pgs_midbot_r2_a">
                                                                        <span class="pgs_midbot_r2_b">
                                                                            <span class="material-symbols-outlined">edit_document</span>
                                                                        </span>
                                                                    </span>
                                                                    <span class="pgs_midbot_r2text">
                                                                        <span class="pgs_midbot_r2text1">
                                                                            Add shortcut
                                                                        </span>
                                                                    </span>
                                                                </button>
                                                                <a data-test-id="navigation-apps-sidebar-common.ui.shortcuts.business-pages-link" draggable="false" aria-disabled="false" href="/kelapabakar/display2" target="_self" class="pgs_midbot_r1">
                                                                    <span data-item-elem-before="true" class="pgs_midbot_r1_a">
                                                                        <span class="pgs_midbot_r1_b" role="presentation" aria-hidden="true">
                                                                            <span class="material-symbols-outlined">settings</span>
                                                                        </span>
                                                                    </span>
                                                                    <span class="pgs_midbot_r1_b">
                                                                        <span class="pgs_midbot_r1_b1" data-item-title="true">
                                                                            Project settings
                                                                        </span>
                                                                    </span>
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="pgs_bot">
                                    <div class="pgs_bot1">
                                        <span class="pgs_bot2">
                                            <span data-item-title="true" class="pgs_bot2a">You're in a team managed project</span>
                                            <span data-item-description="true" class="pgs_bot2b">Learn more</span>
                                        </span>
                                    </div>
                                </div>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="ct_body">
            <div class="ct_body1" data-ds--page-layout--slot="main" id="ct_body1">
                <div class="ct_body2" data-test-id="software-board.board">
                    <div class="ct_body3">
                        <div class="ct_body4">
                            <div class="ct_bodytop">
                                <div class="ct_bodytop1">
                                    <div class="ct_bodytop1_r1">
                                        <nav aria-label="Breadcrumbs" tabindex="-1">
                                            <ol class="ct_bt1r1_ol">
                                                <li class="bt_bt1r1_li1">
                                                    <a class="bt_bt1r1_li1a" tabindex="0" href="/projects" target="_self">
                                                        <span class="bt_bt1r1_li1aspan">Projects</span>
                                                    </a>
                                                </li>
                                                <li class="bt_bt1r1_li2">
                                                    <a class="bt_bt1r1_li1a" tabindex="0" href="/projects" target="_self">
                                                        <span class="bt_bt1r1_li1aspan">odessaobg</span>
                                                    </a>
                                                </li>
                                            </ol>
                                        </nav>
                                    </div>
                                    <div class="ct_bodytop1_r2">
                                        <div class="ct_bt1r2_a">
                                            <div class="ct_bt1r2_a1">
                                                <div class="ct_bt1r2_a2">
                                                    <form action="" class="ct_bt1r2_a3">
                                                        <div class="ct_bt1r2_a4">
                                                            <div class="ct_bt1r2_a5">
                                                                <div class="ct_bt1r2_a6" data-read-view-fit-container-width="false">
                                                                    <div class="ct_bt1r2_a7">
                                                                        <div class="ct_bt1r2_a8">
                                                                            <h1 class="ct_bt1r2_a9">OD Board</h1>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="ct_bt1r2_b">
                                            <div class="ct_bt1r2_b0">
                                                <div class="ct_bt1r2_b1">
                                                    <div class="ct_bt1r2_b1a" role="presentation">
                                                        <button class="ct_bt1r2_b1a0" type="button" data-test-id="automation-menu.ui.button.menu-button" externalid="automation-menu.ui.button.menu-button" tabindex="0">
                                                            <span class="ct_bt1r2_b1a1">
                                                                <span class="ct_bt1r2_b1a2">
                                                                    <span class="ct_bt1r2_b1a3">
                                                                        <span class="ct_bt1r2_b1a4">
                                                                            <span class="material-symbols-outlined">
                                                                                flash_on
                                                                            </span>
                                                                        </span>
                                                                    </span>
                                                                </span>
                                                            </span>
                                                        </button>
                                                    </div>
                                                    <span class="ct_bt1r2_b1b">
                                                        <div class="ct_bt1r2_b1b0" data-test-id="favourite-button">
                                                            <span class="ct_bt1r2_b1b1">
                                                                <div role="presentation" class="ct_bt1r2_b1b2">
                                                                    <button class="ct_bt1r2_b1b3" aria-label="Add to Starred" type="button" tabindex="0">
                                                                        <span class="ct_bt1r2_b1b4">
                                                                            <span class="ct_bt1r2_b1b5" data-test-id="favouriting.favorite-button-stateless.icon-wrapper">
                                                                                <span class="ct_bt1r2_b1b6" role="presentation" aria-hidden="true">
                                                                                    <span class="ct_bt1r2_b1b7">
                                                                                        <span class="material-symbols-outlined">
                                                                                            favorite
                                                                                        </span>
                                                                                    </span>
                                                                                </span>
                                                                            </span>
                                                                        </span>
                                                                    </button>
                                                                </div>
                                                            </span>
                                                        </div>
                                                    </span>
                                                    <div class="ct_bt1r2_b1a" role="presentation">
                                                        <button class="ct_bt1r2_b1a0" type="button" data-test-id="automation-menu.ui.button.menu-button" externalid="automation-menu.ui.button.menu-button" tabindex="0">
                                                            <span class="ct_bt1r2_b1a1">
                                                                <span class="ct_bt1r2_b1a2">
                                                                    <span class="ct_bt1r2_b1a3">
                                                                        <span class="ct_bt1r2_b1a4">
                                                                            <span class="material-symbols-outlined">
                                                                                more_horiz
                                                                            </span>
                                                                        </span>
                                                                    </span>
                                                                </span>
                                                            </span>
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="ct_bodytop1_r3">
                                        <div class="ct_bodytop1_r3a">
                                            <div class="ct_bodytop1_r3left">
                                                <div class="ct_bodytop1_r3l1">
                                                    <div class="ct_bodytop1_r3l11">
                                                        <div class="ct_bodytop1_r3l11a">
                                                            <div class="ct_bodytop1_r311b" data-test--text-field--container="true">
                                                                <input type="text" class="ct_bodytop1_r311input" aria-label="Search this board" aria-describedby="search-issue-description" type="text" data-test-id="searchfield" name="search" placeholder="Search this board" autocomplete="on" data-ds--text-field--input="true" value>
                                                                <div class="ct_bodytop1_r311button">
                                                                    <span class="ct_bodytop1_r311button1">
                                                                        <span class="ct_bodytop1_r311button2">
                                                                            <span class="material-symbols-outlined" style="font-size: 16px">
                                                                                search
                                                                            </span>
                                                                        </span>
                                                                    </span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="ct_bodytop1_r3l12">
                                                        <fieldset class="ct_bodytop1_r3l12a" data-test-id="filters.ui.filters.asignee.stateless.asignee-filter">
                                                            <div class="ct_bodytop1_r3l12b">
                                                                <div class="ct_bodytop1_r3l12b1">
                                                                    <div class="ct_bodytop1_r3l12b1a">
                                                                        <label for="asignee.status.stateless.avatar.asignee-filter-avatar" data-test-id="filters.ui.filters.asignee.stateless.avatar.asignee-filter-avatar" class="ct_bodytop1_r3l12b1b">
                                                                            <div class="ct_bodytop1_r3l12b1c" role="presentation">
                                                                                <div class="ct_bodytop1_r3l12b1d">
                                                                                    <span class="ct_bodytop1_r3l12b1e">
                                                                                        <span class="ct_bodytop1_r3l12b1f">

                                                                                        </span>
                                                                                    </span>
                                                                                </div>
                                                                            </div>
                                                                        </label>
                                                                    </div>
                                                                </div>
                                                                <div class="ct_bodytop1_r3l12b1">
                                                                    <div class="ct_bodytop1_r3l12b1a">
                                                                        <label for="asignee.status.stateless.avatar.asignee-filter-avatar" data-test-id="filters.ui.filters.asignee.stateless.avatar.asignee-filter-avatar" class="ct_bodytop1_r3l12b1b">
                                                                            <div class="ct_bodytop1_r3l12b1c" role="presentation">
                                                                                <div class="ct_bodytop1_r3l12b1d">
                                                                                    <span class="ct_bodytop1_r3l12b1e" style="border-radius:0%">
                                                                                        <span class="ct_bodytop1_r3l12b1f1">
                                                                                            <span class="material-symbols-outlined" style="font-size:32px">
                                                                                                person_add
                                                                                            </span>
                                                                                        </span>
                                                                                    </span>
                                                                                </div>
                                                                            </div>
                                                                        </label>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </fieldset>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="ct_bodytop1_r3right">
                                                <label for="swimlane-switch-menu-trigger" class="ct_bodytop1_r3ra">Group by</label>
                                                <div class="ct_bodytop1_r3rb">
                                                    <div class="ct_bodytop1_r3rb1">
                                                        <div class="ct_bodytop1_r3rb2">
                                                            <div class="ct_bodytop1_r3rb3">
                                                                <div class="ct_bodytop1_r3rb4">
                                                                    <div class="ct_bodytop1_r3rb5">
                                                                        <button class="ct_bodytop1_r3rb6" aria-expanded="false" aria-haspopup="true" id="swimlane-switch-menu-trigger">
                                                                            <span class="ct_bodytop1_r3rb6label">
                                                                                <div class="ct_bodytop1_r3rb6labela" role="presentation">
                                                                                    <div class="ct_bodytop1_r3rb6labelb">
                                                                                        <span class="ct_bodytop1_r3rb6labelc">None</spanm>
                                                                                    </div>
                                                                                </div>
                                                                            </span>
                                                                            <span class="ct_bodytop1_r3rb6dd">
                                                                                <span class="ct_bodytop1_r3rb6dda" role="presentation" aria-hidden="true">
                                                                                    <span class="material-symbols-outlined">arrow_drop_down</span>
                                                                                </span>
                                                                            </span>
                                                                        </button>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="ct_bodybot">
                                <div class="ct_bodybota"></div>
                                <div class="ct_bodybotb" data-test-id="software-board.board-area">
                                    <div class="ct_bodybotb1">
                                        <div class="ct_bodybotb1b" data-test-id="platform-board-kit.ui.board.scroll.board-scroll">
                                            <section class="ct_bodybotb2">
                                                <div class="ct_kanban">
                                                    <span class="ct_kanban1 ct_kanban1_a">
                                                        <div class="ct_kanban2">
                                                            <div class="ct_kanban3">
                                                                <div class="ct_kanban4">
                                                                    {{-- kanban column --}}
                                                                    <div class="ct_kanban4a">
                                                                        <div class="ct_kanban4b">
                                                                            <div class="ct_kanban4c">
                                                                                <div class="ct_kanban4top">
                                                                                    <div class="ct_kanb_top1" data-test-id="platform-board-kit.common.ui.column-header.header.column-header-container">
                                                                                        <div class="ct_kanb_top2" data-rbd-drag-handle-context-id="0" tabindex="0" data-rbd-drag-draggable-context-id="COLUMN::13" aria-labelledby="rbd-lift-instruction-0" draggable="false">
                                                                                            <div class="ct_kanb_top_txt">
                                                                                                <div class="ct_kanb_top_txt1">
                                                                                                    <div class="ct_kanb_top_txt2">
                                                                                                        <form action="">
                                                                                                            <div class="ct_kanb_top_txt3">
                                                                                                                <div class="ct_kanb_top_txt4">
                                                                                                                    <div class="ct_kanb_top_txt5">
                                                                                                                        <div class="ct_kanb_top_txt6">
                                                                                                                            <h2 class="ct_kanb_top_txt7">
                                                                                                                                <div class="ct_kanb_top_txt8">
                                                                                                                                    24 JULY 2022 2 ISSUES
                                                                                                                                </div>
                                                                                                                            </h2>
                                                                                                                        </div>
                                                                                                                    </div>
                                                                                                                </div>
                                                                                                            </div>
                                                                                                        </form>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="ct_kanban4bot" data-rbd-droppable-context-id="0">
                                                                                    <div class="ct_kanb_bot1">
                                                                                        <div class="ct_kanb_bot2" aria-label="grid" aria-readonly="true" role="grid" tabindex="0">
                                                                                            <div class="ct_kanb_bot3">
                                                                                                <div class="ct_kanb_bot_ct">
                                                                                                    <div class="ct_kanb_bot_ct1">
                                                                                                        <div class="ct_kanb_bot_ct2">
                                                                                                            <div class="ct_kanb_bot_ct3">
                                                                                                                <div class="ct_kanb_bot_ct4">
                                                                                                                    <div class="ct_kanb_bot_ct5">
                                                                                                                        <div class="ct_kanb_bot_ct5up">
                                                                                                                            <span class="ct_kanb_bot_ct5up1">Breadcrumbs, favorite, group by jira</span>
                                                                                                                        </div>
                                                                                                                        <div class="ct_kanb_bot_ct5dw">
                                                                                                                            <div class="ct_kanb_bot_ct5dw1">
                                                                                                                                <div class="ct_kanb_bot_ct5dw2">
                                                                                                                                    <div class="ct_kanb_bot_ct5dw2left">
                                                                                                                                        <div class="ct_kanb_bot_ct5dw2left1">
                                                                                                                                            <span class="material-symbols-outlined"style="color: #43aaec">
                                                                                                                                                check_box
                                                                                                                                            </span>
                                                                                                                                        </div>
                                                                                                                                    </div>
                                                                                                                                    <div class="ct_kanb_bot_ct5dw2right">
                                                                                                                                        <div class="ct_kanb_bot_ct5dw2right1">
                                                                                                                                            <span class="ct_kanb_bot_ct5dw2right2">
                                                                                                                                                OD-57
                                                                                                                                            </span>
                                                                                                                                        </div>
                                                                                                                                    </div>
                                                                                                                                </div>
                                                                                                                            </div>
                                                                                                                        </div>
                                                                                                                    </div>
                                                                                                                </div>
                                                                                                            </div>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </div>
                                                                                                <div class="ct_kanb_bot_ct_r2">
                                                                                                    <div class="ct_kanb_bot_ct1">
                                                                                                        <div class="ct_kanb_bot_ct2">
                                                                                                            <div class="ct_kanb_bot_ct3">
                                                                                                                <div class="ct_kanb_bot_ct4">
                                                                                                                    <div class="ct_kanb_bot_ct5">
                                                                                                                        <div class="ct_kanb_bot_ct5up">
                                                                                                                            <span class="ct_kanb_bot_ct5up1">kanban jira</span>
                                                                                                                        </div>
                                                                                                                        <div class="ct_kanb_bot_ct5dw">
                                                                                                                            <div class="ct_kanb_bot_ct5dw1">
                                                                                                                                <div class="ct_kanb_bot_ct5dw2">
                                                                                                                                    <div class="ct_kanb_bot_ct5dw2left">
                                                                                                                                        <div class="ct_kanb_bot_ct5dw2left1">
                                                                                                                                            <span class="material-symbols-outlined"style="color: #43aaec">
                                                                                                                                                check_box
                                                                                                                                            </span>
                                                                                                                                        </div>
                                                                                                                                    </div>
                                                                                                                                    <div class="ct_kanb_bot_ct5dw2right">
                                                                                                                                        <div class="ct_kanb_bot_ct5dw2right1">
                                                                                                                                            <span class="ct_kanb_bot_ct5dw2right2">
                                                                                                                                                OD-58
                                                                                                                                            </span>
                                                                                                                                        </div>
                                                                                                                                    </div>
                                                                                                                                </div>
                                                                                                                            </div>
                                                                                                                        </div>
                                                                                                                    </div>
                                                                                                                </div>
                                                                                                            </div>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </div>

                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="ct_kanban4a">
                                                                        <div class="ct_kanban4b">
                                                                            <div class="ct_kanban4c">
                                                                                <div class="ct_kanban4top">
                                                                                    <div class="ct_kanb_top1" data-test-id="platform-board-kit.common.ui.column-header.header.column-header-container">
                                                                                        <div class="ct_kanb_top2" data-rbd-drag-handle-context-id="0" tabindex="0" data-rbd-drag-draggable-context-id="COLUMN::13" aria-labelledby="rbd-lift-instruction-0" draggable="false">
                                                                                            <div class="ct_kanb_top_txt">
                                                                                                <div class="ct_kanb_top_txt1">
                                                                                                    <div class="ct_kanb_top_txt2">
                                                                                                        <form action="">
                                                                                                            <div class="ct_kanb_top_txt3">
                                                                                                                <div class="ct_kanb_top_txt4">
                                                                                                                    <div class="ct_kanb_top_txt5">
                                                                                                                        <div class="ct_kanb_top_txt6">
                                                                                                                            <h2 class="ct_kanb_top_txt7">
                                                                                                                                <div class="ct_kanb_top_txt8">
                                                                                                                                    JULY 2022 4 ISSUES
                                                                                                                                </div>
                                                                                                                            </h2>
                                                                                                                        </div>
                                                                                                                    </div>
                                                                                                                </div>
                                                                                                            </div>
                                                                                                        </form>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="ct_kanban4bot" data-rbd-droppable-context-id="0">
                                                                                    <div class="ct_kanb_bot1">
                                                                                        <div class="ct_kanb_bot2" aria-label="grid" aria-readonly="true" role="grid" tabindex="0">
                                                                                            <div class="ct_kanb_bot3">
                                                                                                <div class="ct_kanb_bot_ct">
                                                                                                    <div class="ct_kanb_bot_ct1">
                                                                                                        <div class="ct_kanb_bot_ct2">
                                                                                                            <div class="ct_kanb_bot_ct3">
                                                                                                                <div class="ct_kanb_bot_ct4">
                                                                                                                    <div class="ct_kanb_bot_ct5">
                                                                                                                        <div class="ct_kanb_bot_ct5up">
                                                                                                                            <span class="ct_kanb_bot_ct5up1">Bikin form penginputan 3x</span>
                                                                                                                        </div>
                                                                                                                        <div class="ct_kanb_bot_ct5dw">
                                                                                                                            <div class="ct_kanb_bot_ct5dw1">
                                                                                                                                <div class="ct_kanb_bot_ct5dw2">
                                                                                                                                    <div class="ct_kanb_bot_ct5dw2left">
                                                                                                                                        <div class="ct_kanb_bot_ct5dw2left1">
                                                                                                                                            <span class="material-symbols-outlined"style="color: #43aaec">
                                                                                                                                                check_box
                                                                                                                                            </span>
                                                                                                                                        </div>
                                                                                                                                    </div>
                                                                                                                                    <div class="ct_kanb_bot_ct5dw2right">
                                                                                                                                        <div class="ct_kanb_bot_ct5dw2right1">
                                                                                                                                            <span class="ct_kanb_bot_ct5dw2right2">
                                                                                                                                                OD-21
                                                                                                                                            </span>
                                                                                                                                        </div>
                                                                                                                                    </div>
                                                                                                                                </div>
                                                                                                                            </div>
                                                                                                                        </div>
                                                                                                                    </div>
                                                                                                                </div>
                                                                                                            </div>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </div>
                                                                                                <div class="ct_kanb_bot_ct_r2 ct_kanb_bot_ct_r2_c2">
                                                                                                    <div class="ct_kanb_bot_ct1">
                                                                                                        <div class="ct_kanb_bot_ct2">
                                                                                                            <div class="ct_kanb_bot_ct3">
                                                                                                                <div class="ct_kanb_bot_ct4">
                                                                                                                    <div class="ct_kanb_bot_ct5">
                                                                                                                        <div class="ct_kanb_bot_ct5up">
                                                                                                                            <span class="ct_kanb_bot_ct5up1">Buat display initial: 5x percobaan</span>
                                                                                                                        </div>
                                                                                                                        <div class="ct_kanb_bot_ct5dw">
                                                                                                                            <div class="ct_kanb_bot_ct5dw1">
                                                                                                                                <div class="ct_kanb_bot_ct5dw2">
                                                                                                                                    <div class="ct_kanb_bot_ct5dw2left">
                                                                                                                                        <div class="ct_kanb_bot_ct5dw2left1">
                                                                                                                                            <span class="material-symbols-outlined"style="color: #43aaec">
                                                                                                                                                check_box
                                                                                                                                            </span>
                                                                                                                                        </div>
                                                                                                                                    </div>
                                                                                                                                    <div class="ct_kanb_bot_ct5dw2right">
                                                                                                                                        <div class="ct_kanb_bot_ct5dw2right1">
                                                                                                                                            <span class="ct_kanb_bot_ct5dw2right2">
                                                                                                                                                OD-37
                                                                                                                                            </span>
                                                                                                                                        </div>
                                                                                                                                    </div>
                                                                                                                                </div>
                                                                                                                            </div>
                                                                                                                        </div>
                                                                                                                    </div>
                                                                                                                </div>
                                                                                                            </div>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </div>
                                                                                                <div class="ct_kanb_bot_ct_r3 ct_kanb_bot_ct_r2_c3">
                                                                                                    <div class="ct_kanb_bot_ct1">
                                                                                                        <div class="ct_kanb_bot_ct2">
                                                                                                            <div class="ct_kanb_bot_ct3">
                                                                                                                <div class="ct_kanb_bot_ct4">
                                                                                                                    <div class="ct_kanb_bot_ct5">
                                                                                                                        <div class="ct_kanb_bot_ct5up">
                                                                                                                            <span class="ct_kanb_bot_ct5up1">buat display flex 5x percobaan</span>
                                                                                                                        </div>
                                                                                                                        <div class="ct_kanb_bot_ct5dw">
                                                                                                                            <div class="ct_kanb_bot_ct5dw1">
                                                                                                                                <div class="ct_kanb_bot_ct5dw2">
                                                                                                                                    <div class="ct_kanb_bot_ct5dw2left">
                                                                                                                                        <div class="ct_kanb_bot_ct5dw2left1">
                                                                                                                                            <span class="material-symbols-outlined"style="color: #43aaec">
                                                                                                                                                check_box
                                                                                                                                            </span>
                                                                                                                                        </div>
                                                                                                                                    </div>
                                                                                                                                    <div class="ct_kanb_bot_ct5dw2right">
                                                                                                                                        <div class="ct_kanb_bot_ct5dw2right1">
                                                                                                                                            <span class="ct_kanb_bot_ct5dw2right2">
                                                                                                                                                OD-31
                                                                                                                                            </span>
                                                                                                                                        </div>
                                                                                                                                    </div>
                                                                                                                                </div>
                                                                                                                            </div>
                                                                                                                        </div>
                                                                                                                    </div>
                                                                                                                </div>
                                                                                                            </div>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </div>
                                                                                                <div class="ct_kanb_bot_ct_r4 ct_kanb_bot_ct_r2_c4">
                                                                                                    <div class="ct_kanb_bot_ct1">
                                                                                                        <div class="ct_kanb_bot_ct2">
                                                                                                            <div class="ct_kanb_bot_ct3">
                                                                                                                <div class="ct_kanb_bot_ct4">
                                                                                                                    <div class="ct_kanb_bot_ct5">
                                                                                                                        <div class="ct_kanb_bot_ct5up">
                                                                                                                            <span class="ct_kanb_bot_ct5up1">buat display grid 5x percobaan</span>
                                                                                                                        </div>
                                                                                                                        <div class="ct_kanb_bot_ct5dw">
                                                                                                                            <div class="ct_kanb_bot_ct5dw1">
                                                                                                                                <div class="ct_kanb_bot_ct5dw2">
                                                                                                                                    <div class="ct_kanb_bot_ct5dw2left">
                                                                                                                                        <div class="ct_kanb_bot_ct5dw2left1">
                                                                                                                                            <span class="material-symbols-outlined"style="color: #43aaec">
                                                                                                                                                check_box
                                                                                                                                            </span>
                                                                                                                                        </div>
                                                                                                                                    </div>
                                                                                                                                    <div class="ct_kanb_bot_ct5dw2right">
                                                                                                                                        <div class="ct_kanb_bot_ct5dw2right1">
                                                                                                                                            <span class="ct_kanb_bot_ct5dw2right2">
                                                                                                                                                OD-34
                                                                                                                                            </span>
                                                                                                                                        </div>
                                                                                                                                    </div>
                                                                                                                                </div>
                                                                                                                            </div>
                                                                                                                        </div>
                                                                                                                    </div>
                                                                                                                </div>
                                                                                                            </div>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="ct_kanban4a">
                                                                        <div class="ct_kanban4b">
                                                                            <div class="ct_kanban4c">
                                                                                <div class="ct_kanban4top">
                                                                                    <div class="ct_kanb_top1" data-test-id="platform-board-kit.common.ui.column-header.header.column-header-container">
                                                                                        <div class="ct_kanb_top2" data-rbd-drag-handle-context-id="0" tabindex="0" data-rbd-drag-draggable-context-id="COLUMN::13" aria-labelledby="rbd-lift-instruction-0" draggable="false">
                                                                                            <div class="ct_kanb_top_txt">
                                                                                                <div class="ct_kanb_top_txt1">
                                                                                                    <div class="ct_kanb_top_txt2">
                                                                                                        <form action="">
                                                                                                            <div class="ct_kanb_top_txt3">
                                                                                                                <div class="ct_kanb_top_txt4">
                                                                                                                    <div class="ct_kanb_top_txt5">
                                                                                                                        <div class="ct_kanb_top_txt6">
                                                                                                                            <h2 class="ct_kanb_top_txt7">
                                                                                                                                <div class="ct_kanb_top_txt8">
                                                                                                                                    DONE 11 ISSUES
                                                                                                                                </div>
                                                                                                                            </h2>
                                                                                                                        </div>
                                                                                                                    </div>
                                                                                                                </div>
                                                                                                            </div>
                                                                                                        </form>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="ct_kanban4bot" data-rbd-droppable-context-id="0">
                                                                                    <div class="ct_kanb_bot1">
                                                                                        <div class="ct_kanb_bot2" aria-label="grid" aria-readonly="true" role="grid" tabindex="0">
                                                                                            <div class="ct_kanb_bot3">
                                                                                                <div class="ct_kanb_bot_ct">
                                                                                                    <div class="ct_kanb_bot_ct1">
                                                                                                        <div class="ct_kanb_bot_ct2">
                                                                                                            <div class="ct_kanb_bot_ct3">
                                                                                                                <div class="ct_kanb_bot_ct4">
                                                                                                                    <div class="ct_kanb_bot_ct5">
                                                                                                                        <div class="ct_kanb_bot_ct5up">
                                                                                                                            <span class="ct_kanb_bot_ct5up1">munculkan tab di content</span>
                                                                                                                        </div>
                                                                                                                        <div class="ct_kanb_bot_ct5dw">
                                                                                                                            <div class="ct_kanb_bot_ct5dw1">
                                                                                                                                <div class="ct_kanb_bot_ct5dw2">
                                                                                                                                    <div class="ct_kanb_bot_ct5dw2left">
                                                                                                                                        <div class="ct_kanb_bot_ct5dw2left1">
                                                                                                                                            <span class="material-symbols-outlined"style="color: #43aaec">
                                                                                                                                                check_box
                                                                                                                                            </span>
                                                                                                                                        </div>
                                                                                                                                    </div>
                                                                                                                                    <div class="ct_kanb_bot_ct5dw2right">
                                                                                                                                        <div class="ct_kanb_bot_ct5dw2right1">
                                                                                                                                            <span class="ct_kanb_bot_ct5dw2right2">
                                                                                                                                                OD-3
                                                                                                                                            </span>
                                                                                                                                        </div>
                                                                                                                                    </div>
                                                                                                                                </div>
                                                                                                                            </div>
                                                                                                                        </div>
                                                                                                                    </div>
                                                                                                                </div>
                                                                                                            </div>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </div>
                                                                                                <div class="ct_kanb_bot_ct_r2 ct_kanb_bot_ct_r2_c2">
                                                                                                    <div class="ct_kanb_bot_ct1">
                                                                                                        <div class="ct_kanb_bot_ct2">
                                                                                                            <div class="ct_kanb_bot_ct3">
                                                                                                                <div class="ct_kanb_bot_ct4">
                                                                                                                    <div class="ct_kanb_bot_ct5">
                                                                                                                        <div class="ct_kanb_bot_ct5up">
                                                                                                                            <span class="ct_kanb_bot_ct5up1">Search bar, dan topbutton config jira</span>
                                                                                                                        </div>
                                                                                                                        <div class="ct_kanb_bot_ct5dw">
                                                                                                                            <div class="ct_kanb_bot_ct5dw1">
                                                                                                                                <div class="ct_kanb_bot_ct5dw2">
                                                                                                                                    <div class="ct_kanb_bot_ct5dw2left">
                                                                                                                                        <div class="ct_kanb_bot_ct5dw2left1">
                                                                                                                                            <span class="material-symbols-outlined"style="color: #43aaec">
                                                                                                                                                check_box
                                                                                                                                            </span>
                                                                                                                                        </div>
                                                                                                                                    </div>
                                                                                                                                    <div class="ct_kanb_bot_ct5dw2right">
                                                                                                                                        <div class="ct_kanb_bot_ct5dw2right1">
                                                                                                                                            <span class="ct_kanb_bot_ct5dw2right2">
                                                                                                                                                OD-56
                                                                                                                                            </span>
                                                                                                                                        </div>
                                                                                                                                    </div>
                                                                                                                                </div>
                                                                                                                            </div>
                                                                                                                        </div>
                                                                                                                    </div>
                                                                                                                </div>
                                                                                                            </div>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </div>
                                                                                                <div class="ct_kanb_bot_ct_r3 ct_kanb_bot_ct_r2_c3">
                                                                                                    <div class="ct_kanb_bot_ct1">
                                                                                                        <div class="ct_kanb_bot_ct2">
                                                                                                            <div class="ct_kanb_bot_ct3">
                                                                                                                <div class="ct_kanb_bot_ct4">
                                                                                                                    <div class="ct_kanb_bot_ct5">
                                                                                                                        <div class="ct_kanb_bot_ct5up">
                                                                                                                            <span class="ct_kanb_bot_ct5up1">sidenav button kasih nama</span>
                                                                                                                        </div>
                                                                                                                        <div class="ct_kanb_bot_ct5dw">
                                                                                                                            <div class="ct_kanb_bot_ct5dw1">
                                                                                                                                <div class="ct_kanb_bot_ct5dw2">
                                                                                                                                    <div class="ct_kanb_bot_ct5dw2left">
                                                                                                                                        <div class="ct_kanb_bot_ct5dw2left1">
                                                                                                                                            <span class="material-symbols-outlined"style="color: #43aaec">
                                                                                                                                                check_box
                                                                                                                                            </span>
                                                                                                                                        </div>
                                                                                                                                    </div>
                                                                                                                                    <div class="ct_kanb_bot_ct5dw2right">
                                                                                                                                        <div class="ct_kanb_bot_ct5dw2right1">
                                                                                                                                            <span class="ct_kanb_bot_ct5dw2right2">
                                                                                                                                                OD-12
                                                                                                                                            </span>
                                                                                                                                        </div>
                                                                                                                                    </div>
                                                                                                                                </div>
                                                                                                                            </div>
                                                                                                                        </div>
                                                                                                                    </div>
                                                                                                                </div>
                                                                                                            </div>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </div>
                                                                                                <div class="ct_kanb_bot_ct_r4 ct_kanb_bot_ct_r3_c4">
                                                                                                    <div class="ct_kanb_bot_ct1">
                                                                                                        <div class="ct_kanb_bot_ct2">
                                                                                                            <div class="ct_kanb_bot_ct3">
                                                                                                                <div class="ct_kanb_bot_ct4">
                                                                                                                    <div class="ct_kanb_bot_ct5">
                                                                                                                        <div class="ct_kanb_bot_ct5up">
                                                                                                                            <span class="ct_kanb_bot_ct5up1">Backend roadmap</span>
                                                                                                                        </div>
                                                                                                                        <div class="ct_kanb_bot_ct5dw">
                                                                                                                            <div class="ct_kanb_bot_ct5dw1">
                                                                                                                                <div class="ct_kanb_bot_ct5dw2">
                                                                                                                                    <div class="ct_kanb_bot_ct5dw2left">
                                                                                                                                        <div class="ct_kanb_bot_ct5dw2left1">
                                                                                                                                            <span class="material-symbols-outlined"style="color: #43aaec">
                                                                                                                                                check_box
                                                                                                                                            </span>
                                                                                                                                        </div>
                                                                                                                                    </div>
                                                                                                                                    <div class="ct_kanb_bot_ct5dw2right">
                                                                                                                                        <div class="ct_kanb_bot_ct5dw2right1">
                                                                                                                                            <span class="ct_kanb_bot_ct5dw2right2">
                                                                                                                                                OD-28
                                                                                                                                            </span>
                                                                                                                                        </div>
                                                                                                                                    </div>
                                                                                                                                </div>
                                                                                                                            </div>
                                                                                                                        </div>
                                                                                                                    </div>
                                                                                                                </div>
                                                                                                            </div>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </div>
                                                                                                <div class="ct_kanb_bot_ct_r5 ct_kanb_bot_ct_r3_c5">
                                                                                                    <div class="ct_kanb_bot_ct1">
                                                                                                        <div class="ct_kanb_bot_ct2">
                                                                                                            <div class="ct_kanb_bot_ct3">
                                                                                                                <div class="ct_kanb_bot_ct4">
                                                                                                                    <div class="ct_kanb_bot_ct5">
                                                                                                                        <div class="ct_kanb_bot_ct5up">
                                                                                                                            <span class="ct_kanb_bot_ct5up1">Sidenav extend</span>
                                                                                                                        </div>
                                                                                                                        <div class="ct_kanb_bot_ct5dw">
                                                                                                                            <div class="ct_kanb_bot_ct5dw1">
                                                                                                                                <div class="ct_kanb_bot_ct5dw2">
                                                                                                                                    <div class="ct_kanb_bot_ct5dw2left">
                                                                                                                                        <div class="ct_kanb_bot_ct5dw2left1">
                                                                                                                                            <span class="material-symbols-outlined"style="color: #43aaec">
                                                                                                                                                check_box
                                                                                                                                            </span>
                                                                                                                                        </div>
                                                                                                                                    </div>
                                                                                                                                    <div class="ct_kanb_bot_ct5dw2right">
                                                                                                                                        <div class="ct_kanb_bot_ct5dw2right1">
                                                                                                                                            <span class="ct_kanb_bot_ct5dw2right2">
                                                                                                                                                OD-8
                                                                                                                                            </span>
                                                                                                                                        </div>
                                                                                                                                    </div>
                                                                                                                                </div>
                                                                                                                            </div>
                                                                                                                        </div>
                                                                                                                    </div>
                                                                                                                </div>
                                                                                                            </div>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </div>
                                                                                                <div class="ct_kanb_bot_ct_r6 ct_kanb_bot_ct_r3_c6">
                                                                                                    <div class="ct_kanb_bot_ct1">
                                                                                                        <div class="ct_kanb_bot_ct2">
                                                                                                            <div class="ct_kanb_bot_ct3">
                                                                                                                <div class="ct_kanb_bot_ct4">
                                                                                                                    <div class="ct_kanb_bot_ct5">
                                                                                                                        <div class="ct_kanb_bot_ct5up">
                                                                                                                            <span class="ct_kanb_bot_ct5up1">Sidebar bisa hide dan expand</span>
                                                                                                                        </div>
                                                                                                                        <div class="ct_kanb_bot_ct5dw">
                                                                                                                            <div class="ct_kanb_bot_ct5dw1">
                                                                                                                                <div class="ct_kanb_bot_ct5dw2">
                                                                                                                                    <div class="ct_kanb_bot_ct5dw2left">
                                                                                                                                        <div class="ct_kanb_bot_ct5dw2left1">
                                                                                                                                            <span class="material-symbols-outlined"style="color: #43aaec">
                                                                                                                                                check_box
                                                                                                                                            </span>
                                                                                                                                        </div>
                                                                                                                                    </div>
                                                                                                                                    <div class="ct_kanb_bot_ct5dw2right">
                                                                                                                                        <div class="ct_kanb_bot_ct5dw2right1">
                                                                                                                                            <span class="ct_kanb_bot_ct5dw2right2">
                                                                                                                                                OD-41
                                                                                                                                            </span>
                                                                                                                                        </div>
                                                                                                                                    </div>
                                                                                                                                </div>
                                                                                                                            </div>
                                                                                                                        </div>
                                                                                                                    </div>
                                                                                                                </div>
                                                                                                            </div>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </div>
                                                                                                <div class="ct_kanb_bot_ct_r7 ct_kanb_bot_ct_r3_c7">
                                                                                                    <div class="ct_kanb_bot_ct1">
                                                                                                        <div class="ct_kanb_bot_ct2">
                                                                                                            <div class="ct_kanb_bot_ct3">
                                                                                                                <div class="ct_kanb_bot_ct4">
                                                                                                                    <div class="ct_kanb_bot_ct5">
                                                                                                                        <div class="ct_kanb_bot_ct5up">
                                                                                                                            <span class="ct_kanb_bot_ct5up1">Negotiation, fast thinking, sound thinking</span>
                                                                                                                        </div>
                                                                                                                        <div class="ct_kanb_bot_ct5dw">
                                                                                                                            <div class="ct_kanb_bot_ct5dw1">
                                                                                                                                <div class="ct_kanb_bot_ct5dw2">
                                                                                                                                    <div class="ct_kanb_bot_ct5dw2left">
                                                                                                                                        <div class="ct_kanb_bot_ct5dw2left1">
                                                                                                                                            <span class="material-symbols-outlined"style="color: #43aaec">
                                                                                                                                                check_box
                                                                                                                                            </span>
                                                                                                                                        </div>
                                                                                                                                    </div>
                                                                                                                                    <div class="ct_kanb_bot_ct5dw2right">
                                                                                                                                        <div class="ct_kanb_bot_ct5dw2right1">
                                                                                                                                            <span class="ct_kanb_bot_ct5dw2right2">
                                                                                                                                                OD-16
                                                                                                                                            </span>
                                                                                                                                        </div>
                                                                                                                                    </div>
                                                                                                                                </div>
                                                                                                                            </div>
                                                                                                                        </div>
                                                                                                                    </div>
                                                                                                                </div>
                                                                                                            </div>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="ct_kanban4a">
                                                                        <div class="ct_kanban4b">
                                                                            <div class="ct_kanban4c">
                                                                                <div class="ct_kanban4top">
                                                                                    <div class="ct_kanb_top1" data-test-id="platform-board-kit.common.ui.column-header.header.column-header-container">
                                                                                        <div class="ct_kanb_top2" data-rbd-drag-handle-context-id="0" tabindex="0" data-rbd-drag-draggable-context-id="COLUMN::13" aria-labelledby="rbd-lift-instruction-0" draggable="false">
                                                                                            <div class="ct_kanb_top_txt">
                                                                                                <div class="ct_kanb_top_txt1">
                                                                                                    <div class="ct_kanb_top_txt2">
                                                                                                        <form action="">
                                                                                                            <div class="ct_kanb_top_txt3">
                                                                                                                <div class="ct_kanb_top_txt4">
                                                                                                                    <div class="ct_kanb_top_txt5">
                                                                                                                        <div class="ct_kanb_top_txt6">
                                                                                                                            <h2 class="ct_kanb_top_txt7">
                                                                                                                                <div class="ct_kanb_top_txt8">
                                                                                                                                    ADDITIONAL 7 ISSUES
                                                                                                                                </div>
                                                                                                                            </h2>
                                                                                                                        </div>
                                                                                                                    </div>
                                                                                                                </div>
                                                                                                            </div>
                                                                                                        </form>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="ct_kanban4bot" data-rbd-droppable-context-id="0">
                                                                                    <div class="ct_kanb_bot1">
                                                                                        <div class="ct_kanb_bot2" aria-label="grid" aria-readonly="true" role="grid" tabindex="0">
                                                                                            <div class="ct_kanb_bot3">
                                                                                                <div class="ct_kanb_bot_ct">
                                                                                                    <div class="ct_kanb_bot_ct1">
                                                                                                        <div class="ct_kanb_bot_ct2">
                                                                                                            <div class="ct_kanb_bot_ct3">
                                                                                                                <div class="ct_kanb_bot_ct4">
                                                                                                                    <div class="ct_kanb_bot_ct5">
                                                                                                                        <div class="ct_kanb_bot_ct5up">
                                                                                                                            <span class="ct_kanb_bot_ct5up1">javascript bg color changer</span>
                                                                                                                        </div>
                                                                                                                        <div class="ct_kanb_bot_ct5dw">
                                                                                                                            <div class="ct_kanb_bot_ct5dw1">
                                                                                                                                <div class="ct_kanb_bot_ct5dw2">
                                                                                                                                    <div class="ct_kanb_bot_ct5dw2left">
                                                                                                                                        <div class="ct_kanb_bot_ct5dw2left1">
                                                                                                                                            <span class="material-symbols-outlined"style="color: #43aaec">
                                                                                                                                                check_box
                                                                                                                                            </span>
                                                                                                                                        </div>
                                                                                                                                    </div>
                                                                                                                                    <div class="ct_kanb_bot_ct5dw2right">
                                                                                                                                        <div class="ct_kanb_bot_ct5dw2right1">
                                                                                                                                            <span class="ct_kanb_bot_ct5dw2right2">
                                                                                                                                                OD-49
                                                                                                                                            </span>
                                                                                                                                        </div>
                                                                                                                                    </div>
                                                                                                                                </div>
                                                                                                                            </div>
                                                                                                                        </div>
                                                                                                                    </div>
                                                                                                                </div>
                                                                                                            </div>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </div>
                                                                                                <div class="ct_kanb_bot_ct_r2 ct_kanb_bot_ct_r2_c2">
                                                                                                    <div class="ct_kanb_bot_ct1">
                                                                                                        <div class="ct_kanb_bot_ct2">
                                                                                                            <div class="ct_kanb_bot_ct3">
                                                                                                                <div class="ct_kanb_bot_ct4">
                                                                                                                    <div class="ct_kanb_bot_ct5">
                                                                                                                        <div class="ct_kanb_bot_ct5up">
                                                                                                                            <span class="ct_kanb_bot_ct5up1">Javascript BMI Calculator Game</span>
                                                                                                                        </div>
                                                                                                                        <div class="ct_kanb_bot_ct5dw">
                                                                                                                            <div class="ct_kanb_bot_ct5dw1">
                                                                                                                                <div class="ct_kanb_bot_ct5dw2">
                                                                                                                                    <div class="ct_kanb_bot_ct5dw2left">
                                                                                                                                        <div class="ct_kanb_bot_ct5dw2left1">
                                                                                                                                            <span class="material-symbols-outlined"style="color: #43aaec">
                                                                                                                                                check_box
                                                                                                                                            </span>
                                                                                                                                        </div>
                                                                                                                                    </div>
                                                                                                                                    <div class="ct_kanb_bot_ct5dw2right">
                                                                                                                                        <div class="ct_kanb_bot_ct5dw2right1">
                                                                                                                                            <span class="ct_kanb_bot_ct5dw2right2">
                                                                                                                                                OD-50
                                                                                                                                            </span>
                                                                                                                                        </div>
                                                                                                                                    </div>
                                                                                                                                </div>
                                                                                                                            </div>
                                                                                                                        </div>
                                                                                                                    </div>
                                                                                                                </div>
                                                                                                            </div>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </div>
                                                                                                <div class="ct_kanb_bot_ct_r3 ct_kanb_bot_ct_r2_c3">
                                                                                                    <div class="ct_kanb_bot_ct1">
                                                                                                        <div class="ct_kanb_bot_ct2">
                                                                                                            <div class="ct_kanb_bot_ct3">
                                                                                                                <div class="ct_kanb_bot_ct4">
                                                                                                                    <div class="ct_kanb_bot_ct5">
                                                                                                                        <div class="ct_kanb_bot_ct5up">
                                                                                                                            <span class="ct_kanb_bot_ct5up1">Javascript number counter</span>
                                                                                                                        </div>
                                                                                                                        <div class="ct_kanb_bot_ct5dw">
                                                                                                                            <div class="ct_kanb_bot_ct5dw1">
                                                                                                                                <div class="ct_kanb_bot_ct5dw2">
                                                                                                                                    <div class="ct_kanb_bot_ct5dw2left">
                                                                                                                                        <div class="ct_kanb_bot_ct5dw2left1">
                                                                                                                                            <span class="material-symbols-outlined"style="color: #43aaec">
                                                                                                                                                check_box
                                                                                                                                            </span>
                                                                                                                                        </div>
                                                                                                                                    </div>
                                                                                                                                    <div class="ct_kanb_bot_ct5dw2right">
                                                                                                                                        <div class="ct_kanb_bot_ct5dw2right1">
                                                                                                                                            <span class="ct_kanb_bot_ct5dw2right2">
                                                                                                                                                OD-51
                                                                                                                                            </span>
                                                                                                                                        </div>
                                                                                                                                    </div>
                                                                                                                                </div>
                                                                                                                            </div>
                                                                                                                        </div>
                                                                                                                    </div>
                                                                                                                </div>
                                                                                                            </div>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </div>
                                                                                                <div class="ct_kanb_bot_ct_r4 ct_kanb_bot_ct_r3_c4">
                                                                                                    <div class="ct_kanb_bot_ct1">
                                                                                                        <div class="ct_kanb_bot_ct2">
                                                                                                            <div class="ct_kanb_bot_ct3">
                                                                                                                <div class="ct_kanb_bot_ct4">
                                                                                                                    <div class="ct_kanb_bot_ct5">
                                                                                                                        <div class="ct_kanb_bot_ct5up">
                                                                                                                            <span class="ct_kanb_bot_ct5up1">Javascript Tic-Tac-Toe</span>
                                                                                                                        </div>
                                                                                                                        <div class="ct_kanb_bot_ct5dw">
                                                                                                                            <div class="ct_kanb_bot_ct5dw1">
                                                                                                                                <div class="ct_kanb_bot_ct5dw2">
                                                                                                                                    <div class="ct_kanb_bot_ct5dw2left">
                                                                                                                                        <div class="ct_kanb_bot_ct5dw2left1">
                                                                                                                                            <span class="material-symbols-outlined"style="color: #43aaec">
                                                                                                                                                check_box
                                                                                                                                            </span>
                                                                                                                                        </div>
                                                                                                                                    </div>
                                                                                                                                    <div class="ct_kanb_bot_ct5dw2right">
                                                                                                                                        <div class="ct_kanb_bot_ct5dw2right1">
                                                                                                                                            <span class="ct_kanb_bot_ct5dw2right2">
                                                                                                                                                OD-52
                                                                                                                                            </span>
                                                                                                                                        </div>
                                                                                                                                    </div>
                                                                                                                                </div>
                                                                                                                            </div>
                                                                                                                        </div>
                                                                                                                    </div>
                                                                                                                </div>
                                                                                                            </div>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </div>
                                                                                                <div class="ct_kanb_bot_ct_r5 ct_kanb_bot_ct_r3_c5">
                                                                                                    <div class="ct_kanb_bot_ct1">
                                                                                                        <div class="ct_kanb_bot_ct2">
                                                                                                            <div class="ct_kanb_bot_ct3">
                                                                                                                <div class="ct_kanb_bot_ct4">
                                                                                                                    <div class="ct_kanb_bot_ct5">
                                                                                                                        <div class="ct_kanb_bot_ct5up">
                                                                                                                            <span class="ct_kanb_bot_ct5up1">Javascript File Converter</span>
                                                                                                                        </div>
                                                                                                                        <div class="ct_kanb_bot_ct5dw">
                                                                                                                            <div class="ct_kanb_bot_ct5dw1">
                                                                                                                                <div class="ct_kanb_bot_ct5dw2">
                                                                                                                                    <div class="ct_kanb_bot_ct5dw2left">
                                                                                                                                        <div class="ct_kanb_bot_ct5dw2left1">
                                                                                                                                            <span class="material-symbols-outlined"style="color: #43aaec">
                                                                                                                                                check_box
                                                                                                                                            </span>
                                                                                                                                        </div>
                                                                                                                                    </div>
                                                                                                                                    <div class="ct_kanb_bot_ct5dw2right">
                                                                                                                                        <div class="ct_kanb_bot_ct5dw2right1">
                                                                                                                                            <span class="ct_kanb_bot_ct5dw2right2">
                                                                                                                                                OD-53
                                                                                                                                            </span>
                                                                                                                                        </div>
                                                                                                                                    </div>
                                                                                                                                </div>
                                                                                                                            </div>
                                                                                                                        </div>
                                                                                                                    </div>
                                                                                                                </div>
                                                                                                            </div>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </div>
                                                                                                <div class="ct_kanb_bot_ct_r6 ct_kanb_bot_ct_r3_c6">
                                                                                                    <div class="ct_kanb_bot_ct1">
                                                                                                        <div class="ct_kanb_bot_ct2">
                                                                                                            <div class="ct_kanb_bot_ct3">
                                                                                                                <div class="ct_kanb_bot_ct4">
                                                                                                                    <div class="ct_kanb_bot_ct5">
                                                                                                                        <div class="ct_kanb_bot_ct5up">
                                                                                                                            <span class="ct_kanb_bot_ct5up1">Javascript Chat Application</span>
                                                                                                                        </div>
                                                                                                                        <div class="ct_kanb_bot_ct5dw">
                                                                                                                            <div class="ct_kanb_bot_ct5dw1">
                                                                                                                                <div class="ct_kanb_bot_ct5dw2">
                                                                                                                                    <div class="ct_kanb_bot_ct5dw2left">
                                                                                                                                        <div class="ct_kanb_bot_ct5dw2left1">
                                                                                                                                            <span class="material-symbols-outlined"style="color: #43aaec">
                                                                                                                                                check_box
                                                                                                                                            </span>
                                                                                                                                        </div>
                                                                                                                                    </div>
                                                                                                                                    <div class="ct_kanb_bot_ct5dw2right">
                                                                                                                                        <div class="ct_kanb_bot_ct5dw2right1">
                                                                                                                                            <span class="ct_kanb_bot_ct5dw2right2">
                                                                                                                                                OD-54
                                                                                                                                            </span>
                                                                                                                                        </div>
                                                                                                                                    </div>
                                                                                                                                </div>
                                                                                                                            </div>
                                                                                                                        </div>
                                                                                                                    </div>
                                                                                                                </div>
                                                                                                            </div>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </div>
                                                                                                <div class="ct_kanb_bot_ct_r7 ct_kanb_bot_ct_r3_c7">
                                                                                                    <div class="ct_kanb_bot_ct1">
                                                                                                        <div class="ct_kanb_bot_ct2">
                                                                                                            <div class="ct_kanb_bot_ct3">
                                                                                                                <div class="ct_kanb_bot_ct4">
                                                                                                                    <div class="ct_kanb_bot_ct5">
                                                                                                                        <div class="ct_kanb_bot_ct5up">
                                                                                                                            <span class="ct_kanb_bot_ct5up1">Graphics https://www.instagram.com/p/Cf_Kto2jhdN/?utm_source=ig_web_copy_link</span>
                                                                                                                        </div>
                                                                                                                        <div class="ct_kanb_bot_ct5dw">
                                                                                                                            <div class="ct_kanb_bot_ct5dw1">
                                                                                                                                <div class="ct_kanb_bot_ct5dw2">
                                                                                                                                    <div class="ct_kanb_bot_ct5dw2left">
                                                                                                                                        <div class="ct_kanb_bot_ct5dw2left1">
                                                                                                                                            <span class="material-symbols-outlined"style="color: #43aaec">
                                                                                                                                                check_box
                                                                                                                                            </span>
                                                                                                                                        </div>
                                                                                                                                    </div>
                                                                                                                                    <div class="ct_kanb_bot_ct5dw2right">
                                                                                                                                        <div class="ct_kanb_bot_ct5dw2right1">
                                                                                                                                            <span class="ct_kanb_bot_ct5dw2right2">
                                                                                                                                                OD-55
                                                                                                                                            </span>
                                                                                                                                        </div>
                                                                                                                                    </div>
                                                                                                                                </div>
                                                                                                                            </div>
                                                                                                                        </div>
                                                                                                                    </div>
                                                                                                                </div>
                                                                                                            </div>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </span>
                                                </div>
                                                <div class="ct_bodybotb2b">

                                                </div>
                                                <div class="ct_bodybotb2c">
                                                    <span class="ct_bodybotb2c1">
                                                        <div class="ct_bodybotb2c2">
                                                            <div class="ct_bodybotb2c3">
                                                                <div class="ct_bodybotb2c4" role="presentation">
                                                                    <button class="ct_bodybotb2c5" aria-label="Create column" data-testid="platform-board-kit.ui.column.column-create.button.styled.button" type="button" tabindex="0">
                                                                        <span class="ct_bodybotb2c6">
                                                                            <span class="ct_bodybotb2c7">
                                                                                <span class="material-symbols-outlined">add</span>
                                                                            </span>
                                                                        </span>
                                                                    </button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </span>
                                                </div>
                                                <div class="ct_bodybotb2d"></div>
                                            </section>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
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
            if (modal == 'pghn_projects') {
                othertab1 = 'pghn1_b1b';
                othertab2 = 'pghn1_b1d';
                othertab3 = 'pghn1_b1e';
                othertab4 = 'pghn1_b1f';
                othertab5 = 'pghn1_b1g';
                othermod1 = 'pghn_yourwork';
                othermod2 = 'pghn_filters';
                othermod3 = 'pghn_dashboards';
                othermod4 = 'pghn_people';
                othermod5 = 'pghn_apps';
            } else if (modal == 'pghn_yourwork') {
                othertab1 = 'pghn1_b1c';
                othertab2 = 'pghn1_b1d';
                othertab3 = 'pghn1_b1e';
                othertab4 = 'pghn1_b1f';
                othertab5 = 'pghn1_b1g';
                othermod1 = 'pghn_projects';
                othermod2 = 'pghn_filters';
                othermod3 = 'pghn_dashboards';
                othermod4 = 'pghn_people';
                othermod5 = 'pghn_apps';
            } else if (modal == 'pghn_filters') {
                othertab1 = 'pghn1_b1b';
                othertab2 = 'pghn1_b1c';
                othertab3 = 'pghn1_b1e';
                othertab4 = 'pghn1_b1f';
                othertab5 = 'pghn1_b1g';
                othermod1 = 'pghn_yourwork';
                othermod2 = 'pghn_projects';
                othermod3 = 'pghn_dashboards';
                othermod4 = 'pghn_people';
                othermod5 = 'pghn_apps';
            } else if (modal == 'pghn_dashboards') {
                othertab1 = 'pghn1_b1b';
                othertab2 = 'pghn1_b1c';
                othertab3 = 'pghn1_b1d';
                othertab4 = 'pghn1_b1f';
                othertab5 = 'pghn1_b1g';
                othermod1 = 'pghn_yourwork';
                othermod2 = 'pghn_projects';
                othermod3 = 'pghn_filters';
                othermod4 = 'pghn_people';
                othermod5 = 'pghn_apps';
            } else if (modal == 'pghn_people') {
                othertab1 = 'pghn1_b1b';
                othertab2 = 'pghn1_b1c';
                othertab3 = 'pghn1_b1d';
                othertab4 = 'pghn1_b1e';
                othertab5 = 'pghn1_b1g';
                othermod1 = 'pghn_yourwork';
                othermod2 = 'pghn_projects';
                othermod3 = 'pghn_filters';
                othermod4 = 'pghn_dashboards';
                othermod5 = 'pghn_apps';
            } else if (modal == 'pghn_apps') {
                othertab1 = 'pghn1_b1b';
                othertab2 = 'pghn1_b1c';
                othertab3 = 'pghn1_b1d';
                othertab4 = 'pghn1_b1e';
                othertab5 = 'pghn1_b1f';
                othermod1 = 'pghn_yourwork';
                othermod2 = 'pghn_projects';
                othermod3 = 'pghn_filters';
                othermod4 = 'pghn_dashboards';
                othermod5 = 'pghn_people';
            }

            console.log('1b');
            var n = document.getElementById(modal);
            console.log(n.style.display);
            if (n.style.display == 'none' || n.style.display == '') {
                n.style.display = 'block';

                var n1 = document.getElementById(othermod1);
                var n2 = document.getElementById(othermod2);
                var n3 = document.getElementById(othermod3);
                var n4 = document.getElementById(othermod4);
                var n5 = document.getElementById(othermod5);
                n1.style.display = 'none';
                n2.style.display = 'none';
                n3.style.display = 'none';
                n4.style.display = 'none';
                n5.style.display = 'none';

                document.getElementById(button).setAttribute('aria-expanded', 'true');
                document.getElementById(othertab1).setAttribute('aria-expanded', 'false');
                document.getElementById(othertab2).setAttribute('aria-expanded', 'false');
                document.getElementById(othertab3).setAttribute('aria-expanded', 'false');
                document.getElementById(othertab4).setAttribute('aria-expanded', 'false');
                document.getElementById(othertab5).setAttribute('aria-expanded', 'false');
            } else {
                n.style.display = 'none';
                document.getElementById(button).setAttribute('aria-expanded', 'false');
            }
        }

        console.log(2);
        function toggleactive(div) {
            var othertab1 = '';
            var othertab2 = '';

            if (div == 'pghn_yw_assignedtome') {
                othertab1 = 'pghn_yw_recent';
                othertab2 = 'pghn_yw_boards';
            } else if (div == 'pghn_yw_recent') {
                othertab1 = 'pghn_yw_assignedtome';
                othertab2 = 'pghn_yw_boards';
            } else if (div == 'pghn_yw_boards') {
                othertab1 = 'pghn_yw_assignedtome';
                othertab2 = 'pghn_yw_recent';
            }


            console.log('2b');
            var n = document.getElementById(div);
            if (n.attributes['aria-selected'].value == 'false') {
                document.getElementById(div).setAttribute('aria-selected', 'true');
            }

            document.getElementById(othertab1).setAttribute('aria-selected', 'false');
            document.getElementById(othertab2).setAttribute('aria-selected', 'false');
        }

        function toggleexpandcollapse(div1, div2, button) {
            console.log('1c');
            var n = document.getElementById(div1);
            console.log(n.style.display);
            if (n.style.display == 'none' || n.style.display == '') {
                n.style.display = 'flex';

                var n1 = document.getElementById(div2);
                n1.style.display = 'flex';

                document.getElementById(button).setAttribute('aria-expanded', 'true');
            } else {
                n.style.display = 'none';
                var n1 = document.getElementById(div2);
                n1.style.display = 'none';
                document.getElementById(button).setAttribute('aria-expanded', 'false');
            }
        }

        function toggleexpandcollapse2(div1, button) {
            console.log('1c');
            var n = document.getElementById(div1);
            console.log(n.style.display);
            if (n.style.display == 'none' || n.style.display == '') {
                n.style.display = 'flex';

                document.getElementById(button).setAttribute('aria-expanded', 'true');
            } else {
                n.style.display = 'none';
                document.getElementById(button).setAttribute('aria-expanded', 'false');
            }
        }
    </script>
</body>
</html>
