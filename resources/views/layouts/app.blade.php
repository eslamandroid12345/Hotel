<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link rel="stylesheet" href="{{asset('boot/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('boot/font-awesome.min.css')}}">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.12.0/css/all.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.12.0/css/v4-shims.css">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

</head>
<style type="text/css">
    @import url('https://fonts.googleapis.com/css2?family=Cairo:wght@600&display=swap');
    body{
        font-family: 'Cairo', sans-serif;
        background: #F5F7F9;
    }
    @media only screen and (max-width:980px) {
        body {
            background: #fff;
        }
    }



    body{
        margin: 0;
        padding: 0;

    }
    /* start header of app and img*/
    .App-one {
        height: 60vh;
        width: 100%;
        background: linear-gradient(rgba(0,0,0,0.5),rgba(0,0,0,0.5)),
        url({{asset('img/pahat.jpg')}}) no-repeat top center / cover;
        overflow: hidden;
    }


    .clear{
        clear: both;
    }

    .App-two{
        width: 100%;
        overflow: hidden;
        margin: 0;
        height: auto;
        box-sizing: border-box;
        background: #2c3e50;

    }
    .App-two .container{
        width: 90%;
        margin: auto;

    }
    .App-two .container .row .App-three{
        margin-top: 10px;

    }
    .App-two .container .row .App-three a{

        color: #fff;
        text-decoration: none;
        float: right;
        font-size: 13px;
        padding: 10px;
        transition: 2s;
        margin-bottom: 10px;
    }
    .App-two .container .row .App-three a:hover{
        background: #fff;
        border-radius: 3px;
        color: #2c3e50;

    }
    .App-two .container .row .App-three a i{
        margin: 5px;
    }


    .App-four{
        margin-top: 100px;
        width: 100%;
    }
    .App-four h2,h3{
        text-align: center;
        color: #fff;
        padding-bottom: 1%;
        font-weight: bold;
        word-spacing: 6px;
    }
    .App-five{
        background: none;
        width: 100%;
        height: auto;
        margin-top: 8%;
        bottom: 0;
        text-align: center;
        box-sizing: border-box;

    }
    .App-five .App-six{
        width: 100%;
        direction:rtl ;
    }

    .App-five .App-six input[type="text"]{
        margin-top: 50px;
        margin-bottom: 50px;
        padding: 14px;
        background: none;
        outline: none;
        border: none;
        background: #fff;
        box-sizing: border-box;
        text-align: right;
        width: 250px;
        font-size:14px ;
        color: #2c3e50;
        border-radius: 4px;
        cursor: pointer;
        margin-left: 4px;
        word-spacing: 2px;
    }
    .App-five .App-six input[type="text"]::placeholder{
        color: #2c3e50;
    }

    .App-five .App-six i{
        color: #fff;
        margin-left: 8px;

    }

    .App-five .App-six input[type="submit"]{

        margin-top: 50px;
        padding: 14px;
        background: none;
        outline: none;
        border: none;
        background: #e58e26;
        color: #fff;
        border-radius: 4px;
        margin-left: 4px;
        font-size:14px ;
    }
    .App-seven{
        display: none;
    }
    .text-old{
        display: none;
    }
    .App-nine{
        display: none;
    }
    /* end header of app and img */

    /*------------------------*/
    .infiter-sine
    {
        top: 0;
        margin: 0;
        overflow: hidden;
        width: 100%;
        box-sizing: border-box;
        background: #fff;
    }
    .infiter-sine .container
    {
        width: 90%;
        margin: auto;
        height: auto;
    }
    .infiter-one
    {
        height: 350px;
        background: none;
        border-radius: 5px;
        margin-top: 13px;
        box-sizing: border-box;
    }
    .infiter-one img
    {
        margin-top: 20px;
        margin-bottom: 10px;
    }
    .infiter-sine .container h2
    {
        padding-top: 100px;
        padding-bottom: 12px;
        font-size: 23px;
        font-weight: bold;
        max-width: 100%;
        word-spacing: 2px;
    }
    .infiter-sine .container h2:hover
    {
        color: #2980b9;
        cursor: pointer;
        transition: 2s;
    }
    .infiter-one h3
    {
        font-size: 16px;
        font-weight: bold;
        color: rgb(37, 42, 49);
        line-height: 24px;
        margin: 0px 0px 4px;
        padding-top: 12px;
        word-spacing: 2px;
    }
    .infiter-one p
    {
        max-width: 90%;
        line-height: 20px;
        word-spacing: 2px;
        padding-top: 5px;
        cursor: pointer;
    }
    .infiter-one button[type="button"]
    {
        outline: none;
        border: none;
        padding: 12px;
        background: #ddd;
        border-radius: 5px;
        margin-top: 12px;
        margin-bottom: 22px;
    }
    .infiter-one button[type="button"]:hover
    {
        background: rgb(0, 173, 152);
        color: #fff;
        transition: 1s;
    }
    .infiter-one button[type="submit"]
    {
        outline: none;
        border: none;
        padding: 12px;
        background: rgb(0, 173, 152);
        color: #fff;
        border-radius: 5px;
        margin-top: 12px;
        margin-bottom: 22px;
    }
    /*=======================*/
    .targer-lado
    {
        height: auto;
    }
    .targer-lado .kolter-ser
    {
        font-size: 20px;
        color:  #4682b4;
    }
    .targer-lado ul li
    {
        line-height: 30px;
    }
    .targer-lado i
    {
        font-size: 30px;
        color:  rgb(0, 173, 152);
    }
    /* end div of words of booking */

    .faster-fany
    {
        width: 100%;
        box-sizing: border-box;
        height: auto;
        margin-top: 50px;
    }
    .faster-fany .container
    {
        width: 90%;
        margin: auto;
    }
    .targer-one
    {
        height: auto;
        border-radius: 7px;
        margin-top: 12px;
        background: #fff;
        margin-bottom: 40px;
        border-bottom: 1px solid #4D6F93;
    }
    .double-seven
    {
        width: 100%;
        height: auto;
        background: #fff;
    }
    .double-seven .container .row ul
    {
        direction: rtl;
        float: right;
        margin-top: 100px;
        margin-bottom: 100px;
    }
    .double-seven .container .row ul li
    {
        text-align: right;
        list-style-type: square;
        line-height: 30px;
        word-spacing: 2px;
        color: #4D6F93;
        cursor: pointer;
        transition: 1s;
    }
    .double-seven .container .row ul li:hover
    {
        color: #487eb0;
        cursor: pointer;
    }
    .targer-one .targer-four h4
    {
        padding-top: 30px;
        color: #40739e;
        padding-bottom: 5px;
        float: right;
        padding-right: 2%;
        font-weight: bold;
        font-size: 20px;
        cursor: pointer;
    }
    .targer-one ul
    {
        margin-top: 20px;
        float: right;
        margin-right: 2%;
    }

    .targer-one ul li
    {
        text-align: right;
        list-style-type: none;
        line-height: 35px;
        word-spacing: 2px;
        color: #40739e;
        cursor: pointer;
        transition: 1s;
        font-size: 14px;

    }
    .targer-one .targer-four h4:hover
    {
        color: #16a085;
    }
    .targer-one ul li:hover
    {
        color: #16a085;
    }


    /* start offers of air plane ================================ */
    .hour-liner
    {
        margin-top: 50px;
        width: 100%;
    }
    .container
    {
        width: 90%;
        margin: auto;
    }
    .row
    {
        margin-top: 20px;
    }
    .souter-trader
    {
        height: 250px;
        background: #fff;
        border-radius: 5px;
        margin-top: 10px;
    }

    /* start image oh div offers  */

    .source-one
    {
        background-image: linear-gradient(rgba(0,0,0,0.5),rgba(0,0,0,0.5)),
        url({{asset('img/joker.jpg')}});
        height: 250px;
        background-size: cover;
        background-repeat: no-repeat;
        background-position: center;
    }
    .source-two
    {
        background-image: linear-gradient(rgba(0,0,0,0.4),rgba(0,0,0,0.4)),
        url(img/pahat.jpg);
        height: 250px;
        background-size: cover;
        background-repeat: no-repeat;
        background-position: center;

    }
    .source-four
    {
        background-image:linear-gradient(rgba(0,0,0,0.5),rgba(0,0,0,0.5)),
        url(img/emar.jpg);
        height: 300px;
        background-size: cover;
        background-repeat: no-repeat;
        background-position: center;

    }
    .source-five
    {
        background-image: linear-gradient(rgba(0,0,0,0.5),rgba(0,0,0,0.5)),
        url(img/laab.jpeg);
        height: 250px;
        background-repeat: no-repeat;
        background-position: center;
    }


    .source-egiht
    {
        background-image:linear-gradient(rgba(0,0,0,0.5),rgba(0,0,0,0.5)),
        url(img/falld.jpg);
        height: 250px;
        background-size: cover;
        background-repeat: no-repeat;
        background-position: center;
    }

    .flutter-ser .source-egiht
    {
        background-image: linear-gradient(rgba(0,0,0,0.5),rgba(0,0,0,0.5)),
        url(img/oner.jpg);
        height: 300px;
        background-size: cover;
        background-repeat: no-repeat;
        background-position: center;
    }
    .flutter-ser .source-six
    {
        background-image:linear-gradient(rgba(0,0,0,0.5),rgba(0,0,0,0.5)),
        url(img/hata.jpg);
        height: 300px;
        background-size: cover;
        background-repeat: no-repeat;
        background-position: center;

    }
    /*start div of hover */
    .gide-later
    {
        background: #0000007a;
        width: 100%;
        height: 0px;
        border-radius: 5px;
        transition: 1s;
        position: relative;
    }
    .gide-later h5
    {
        padding-top:20px;
        float: right;
        margin: 7px;
        color: #fff;
        word-spacing: 2px;
        font-weight: 400;
        font-size: 16px;
    }
    .gide-later button
    {
        float: right;
        background: #FEC524;
        margin-top: 40px;
        margin: 7px;
        border-radius: 5px;
        border-top-right-radius: 0px;
        border-bottom-left-radius: 0px;
    }
    .gide-later .app-star
    {
        margin: 7px;

    }
    .gide-later .app-star i
    {
        float: right;
        color: #FFA500;
        margin: 2px;
    }
    .source-one:hover  .gide-later
    {
        background: #0000007a;
        width: 100%;
        height: 250px;
        border-radius: 5px;
        cursor: pointer;
    }
    .source-two:hover  .gide-later
    {
        background: #0000007a;
        width: 100%;
        height: 250px;
        border-radius: 5px;
        cursor: pointer;
    }
    .source-four:hover  .gide-later
    {
        background: #0000007a;
        width: 100%;
        height: 300px;
        border-radius: 5px;
        cursor: pointer;
    }
    .source-five:hover  .gide-later
    {
        background: #0000007a;
        width: 100%;
        height: 250px;
        border-radius: 5px;
        cursor: pointer;
    }


    }
    .source-seven:hover  .gide-later
    {
        background: #0000007a;
        width: 100%;
        height: 250px;
        border-radius: 5px;
        cursor: pointer;
    }
    .source-egiht:hover  .gide-later
    {
        background: #0000007a;
        width: 100%;
        height: 250px;
        border-radius: 5px;
        cursor: pointer;
    }
    .flutter-ser .source-egiht:hover  .gide-later
    {
        background: #0000007a;
        width: 100%;
        height: 300px;
        border-radius: 5px;
        cursor: pointer;
    }
    .flutter-ser .source-six:hover  .gide-later
    {
        background: #0000007a;
        width: 100%;
        height: 300px;
        border-radius: 5px;
        cursor: pointer;
    }
    .pointer-fary
    {
        margin-top: 50px;
        margin-bottom: 20px;
        width: 100%;
    }
    .pointer-fary button[type="button"]
    {
        outline: none;
        border: none;
        border-radius: 7px;
        background: #ddd;
        color: rgb(0, 173, 152);
        padding: 12px;
        float: right;
        margin-bottom: 10px;
        margin-top: 2%;
    }
    .pointer-fary button[type="button"]:hover
    {
        background: rgb(0, 173, 152);
        color: #fff;
        transition: 1s;
    }
    .fater-liner
    {
        margin-top: 10px;
        margin-bottom: 10px;
    }
    .fater-liner span
    {
        float: right;
        color:rgb(37, 42, 49);
        font-size: 22px;
        word-spacing: 2px;
        padding-top: 30px;
        cursor: pointer;
        font-weight: 500;
    }
    .clear
    {
        clear: both;
    }
    .faster-fany
    {
        width: 100%;
        margin-top: 40px;
        box-sizing: border-box;
        height: auto;
    }
    .faster-fany .container
    {
        width: 90%;
        margin: auto;
    }


    /* start div of country name and air plane */
    .Sandy-App{
        background: #F3F5FD;
        width: 100%;
        margin-top: 4%;
        height: auto;
    }
    .Sandy-App .container{
        width: 95%;
        margin: auto;
    }


    .Sandy-App .container .row .Sandy-App-one ul{
        float: right;
        margin-top: 40px;
        margin-bottom: 80px;

    }

    .Sandy-App .container .row .Sandy-App-one ul li{
        text-align: right;
        list-style-type: square;
        direction: rtl;
        line-height: 35px;
        color: #192a56;
        font-size: 15px;
        cursor: pointer;
        transition: 1s;
    }
    .Sandy-App .container .row .Sandy-App-one ul li:hover{

        color: #7f8c8d;
    }


    .Sandy-App-four{
        background: #2c3e50;
        width: 100%;
        height: auto;
        bottom: 0;
        box-sizing: border-box;
        overflow: hidden;
        margin-top: 50px;
    }

    /* start footer app */
    .Sandy-App-five{

        width: 100%;
        box-sizing: border-box;
        direction: rtl;

    }

    .Sandy-App-five .container{

        width: 90%;
        margin: auto;

    }
    .Sandy-App-five .container .row .Sandy-App-six{
        margin-top: 25px;
        margin-bottom: 25px;
    }

    .Sandy-App-five .container .row .Sandy-App-six a{

        color: #fff;
        padding: 8px;
        border: 1px solid #f2f2f2;
        text-decoration: none;
        border-radius: 4px;
        font-size: 14px;
        transition: 1s;

    }
    .Sandy-App-five .container .row .Sandy-App-six a:hover{
        background: #f7b731;
        color: #fff;


    }
    .Sandy-App-five .container .row .Sandy-App-six i{

        padding: 12px;
        margin: 3px;
        background: #fff;
        color: #4b6584;
        border-radius: 4px;
        transition: 1s;
        cursor: pointer;

    }
    .Sandy-App-five .container .row .Sandy-App-six i:hover{
        background: #f7b731;
        color: #fff;

    }
    .Sandy-App-five .container .row .Sandy-App-six .fa-business-time
    {
        color: #fff;
        background: none;
        margin: 0;
        padding: 5px;

    }
    .Sandy-App-five .container .row .Sandy-App-six .fa-edit
    {
        color: #fff;
        background: none;
        margin: 0;
        padding: 5px;


    }

    /* start end div of footer app */
    .dear-app-one{
        width: 100%;
        bottom: 0;
        height: auto;
        direction: rtl;
    }

    .dear-app-one .container{
        width: 95%;
        margin: auto;

    }
    .dear-app-one .container .dear-app-two{
        margin-top: 20px;
        margin-bottom: 20px;
    }

    .dear-app-one .container .dear-app-two a{
        margin: 6px;
        color: #EAB543;
        text-decoration: none;
        font-size: 13px;
        float: right;
        transition: 1s;
    }
    .dear-app-one .container .dear-app-two a:hover{
        color: #f2f2f2;

    }


    .dear-app-one .container .dear-app-two img{
        max-width: 100%;
    }

    .dear-app-one .container .dear-app-two label{
        color: #fff;
        font-size: 13px;
        transition: 1s;
        cursor: pointer;
    }
    .dear-app-one .container .dear-app-two label:hover{
        color: #EAB543;

    }
    /*-----------------------------*/



    /* start mobile application */
    @media only screen and (max-width:980px)
    {
        body{
            background: #fff;
        }
        .App-one{
            background: none;
        }
        .App-two{
            display: none;
        }
        .App-five{

            margin-top: 50px;
            background: none;
        }
        .App-seven{
            display: block;
            width: 100%;
            text-align: right;
        }
        .App-seven h3{
            color: #2c3e50;
            padding-top: 4%;
            padding-bottom: 1%;
            text-align: right;
            padding-right: 5%;
            font-size: 17px;
        }

        .App-five .App-six input[type="text"],
        .App-five .App-six input[type="submit"]
        {
            width: 90%;
            margin-top: 5px;
            margin-bottom: 5px;
            padding: 16px;
            background: #f2f2f2;
            font-size: 15px;

        }

        .App-five .App-six input[type="submit"]{
            margin-bottom: 30px;
            border: none;
            background: #2c3e50;;
            padding: 16px;
            font-size: 15px;
        }


        .App-four{
            display: none;
        }
        .App-five .App-six i{
            display: none;
        }
        /*start table og app mobile*/
        .text-old {
            display: block;
            margin-top:8px;
        }
        .text-old i {
            padding-left:3%;
            color:#fff;
        }
        table {
            width: 100%;
            text-align: center;
            border-collapse: collapse;
            font-size: 14px;
        }
        th {
            background: #2c3e50;
            height: 60px;
            color:#fff;
            cursor: pointer;
        }
        /*end table og app mobile*/
        .App-nine{
            display: block;
        }

        .App-nine .fa-bars{
            float: right;
            margin: 13px;
            font-size: 20px;
            color: #2c3e50;

        }
        .App-nine .fa-user-alt,.fa-sistrix{
            float: left;
            margin: 13px;
            font-size: 20px;
            color: #2c3e50;

        }
        .faster-fany{
            display: none;
        }
        .Sandy-App{
            display: none;
        }


    }



    table{
        width: 100%;

    }

    table thead tr th{

        background: #2d3748;
        color: #fff;
        border-collapse: collapse;
        padding: 10px;
        text-align: center;
    }

    table tbody tr td:nth-child(2n){

        background: #f2f2f2;
    }

    table tbody tr td{

        border-bottom: 1px solid #ccc;
        padding: 10px;
        text-align: center;


    }
    .all{

        height: 100%;
        width: 100%;
        background: linear-gradient(rgba(0,0,0,0.5),rgba(0,0,0,0.5)),
        url({{asset('img/app.jpg')}}) no-repeat top center / cover;
        overflow: hidden;
        padding: 40px;
    }

    .lop{

        width: 40%;
        float: right;
        background: #fff;
        padding: 15px;
        border-radius: 5px;

    }

   /* START login email and password ===================================================================== */
    .clear{
        clear: both;
    }

    .App-leader{
        width: 100%;
        overflow: hidden;
        margin: 0;
        height: 8vh;
        box-sizing: border-box;
        background: #2c3e50;

    }
    .App-leader .container{
        width: 90%;
        margin: auto;

    }
    .App-leader .container .row .App-google{
        margin-top: 10px;

    }
    .App-leader .container .row .App-google a{

        color: #fff;
        text-decoration: none;
        float: right;
        padding: 10px;
        transition: 2s;
        margin-bottom: 10px;
        font-size: 13px;
    }
    .App-leader .container .row .App-google a:hover{
        background: #fff;
        border-radius: 3px;
        color: #2c3e50;


    }
    .App-leader .container .row .App-google a i{
        margin: 5px;
    }

    .operat h5
    {
        float: right;
        margin: 20px;
        color: #fff;
        word-spacing: 4px;
        font-size: 1.2em;
    }
    .app-oner
    {
        height: 84vh;
        width: 100%;
        background: url({{asset('img/app.jpg')}}) no-repeat top center / cover;
        overflow: hidden;
        box-sizing: border-box;
    }
    .app-three
    {
        background:#fff;
        width: 650px;
        height: auto;
        margin-top: 100px;
    }
    .app-two
    {
        height: 8vh;
        background: #fff;
        width: 100%;

    }
    .app-two button[type="button"]
    {
        background: none;
        border: none;
        outline: none;
        border-right: 1px solid #ccc;
        padding: 10px;
        margin-top: 10px;
        font-size: 14px ;
        transition: 1s;
    }
    .app-two button[type="button"]:hover
    {
        background: #23bcb9;
        color: #fff;
        border-right: none;
        border-radius: 4px;

    }
    .app-three  .app-seven
    {
        height: auto;
        padding: 10px;
        width: 70%;
        float: right;
        background: #fff;
        border-top-left-radius: 5px;
        border-bottom-left-radius: 5px;
        justify-content: center;
        box-sizing: border-box;
    }
    .app-three  .app-seven .add-onex
    {
        width: 85%;
        margin-top: 15px;
    }
    .app-three  .app-seven .add-onex a
    {
        color:#e0396d;
        float: right;
        text-decoration: none;
    }

    .app-three  .app-seven .add-onex a:hover
    {
        color: #23bcb9;
    }
    .app-three  .app-seven .add-onex input[type="email"],
    .app-three  .app-seven .add-onex input[type="password"],
    .app-three  .app-seven .add-onex input[type="text"]
    {
        border: none;
        outline: none;
        border-bottom: 1px solid #ccc;
        padding: 10px;
        margin: 4px;
        width: 100%;
        text-align: right;
        cursor: pointer;
        font-size: 15px;
        color: #2c3e50;
    }

    .app-three  .app-seven .add-onex input[type="email"]::placeholder,
    .app-three  .app-seven .add-onex input[type="password"]::placeholder
    {
        color: #2c3e50;

    }
    .app-three  .app-seven .add-onex input[type="submit"]
    {
        border: none;
        outline: none;
        color: #fff;
        background: #2c3e50;
        padding: 12px;
        margin: 4px;
        width: 100%;
        border-radius: 4px;
        font-size: 15px;

    }
    .app-three  .app-seven .add-onex input[type="button"]
    {
        border: none;
        outline: none;
        color: #fff;
        background: #3dc1d3;
        padding: 12px;
        width: 100%;
        border-radius: 4px;
        font-size: 15px;

    }
    .app-three  .app-seven .add-onex input[type="button"]:hover
    {
        color: #fff;
        background: #23bcb9;
    }
    .app-three  .app-seven .add-onex input[type="submit"]:hover
    {
        color: #fff;
        background: #e0396d;
    }
    .app-three  .app-nine
    {
        width: 30%;
        float: right;
        justify-content: center;
    }

    .app-three  .app-nine .app-ten
    {
        background: #2c3e50;
        height: 110px;
        box-sizing: border-box;
        padding:40px ;
    }
    .app-three  .app-nine .app-ten a {
        color: #fff;
        cursor: pointer;
        word-spacing: 2px;
        font-size: 14px;
        text-decoration: none;
    }

    .order-alize
    {
        display: none;
    }
    .begineer-one
    {
        display: none;
    }
    /* start mobile application ----------*/
    @media only screen and (max-width:980px)
    {
        .begineer-one
        {
            display: block;
            width: 100%;
            background:teal;
            overflow: hidden;
        }
        .begineer-one label
        {
            color: #fff;
            padding: 10px;
            padding-top: 2%;
            padding-bottom: 2%;
            word-spacing: 2px;
        }
        .app-oner
        {
            display: none;
        }

        .app-three
        {
            display: none;
        }
        .app-three  .app-nine
        {
            display: none;
        }
        .order-alize

        {
            display: block;
            border-bottom-right-radius: 8px;
            border-bottom-left-radius: 8px;
            height: auto;
            margin-top: 50px;
            width: 85%;
            margin-bottom: 4%;
            border: 1px solid #ccc;
        }
        .order-alize .add-ten
        {
            overflow: hidden;
            width: 100%;
            height: auto;
        }
        .order-alize .add-nine
        {
            float: right;
            width: 33.3%;
            height: 100px;
            background: #00bbb2;
            border-right: 1px solid #ccc;
            justify-content: center;
        }
        .order-alize .add-nine p
        {
            color: #fff;
            padding: 30px;
            cursor: pointer;
        }
        .order-alize .add-onex
        {
            width: 85%;
            margin-top: 15px;
        }
        .order-alize .add-onex a
        {
            color:#e0396d;
            float: right;
            padding-bottom: 6%;
        }
        .order-alize .add-onex input[type="text"],
        .order-alize .add-onex input[type="password"]
        {
            border: none;
            outline: none;
            border-bottom: 1px solid #ccc;
            padding: 10px;
            margin: 4px;
            width: 100%;
            text-align: right;
            cursor: pointer;
        }
        .order-alize .add-onex input[type="submit"]
        {
            border: none;
            outline: none;
            color: #fff;
            background: #23bcb9;
            padding: 10px;
            margin: 4px;
            width: 100%;
            border-radius: 4px;
        }
        .order-alize .add-onex input[type="button"]
        {
            border: none;
            outline: none;
            color: #fff;
            background: #e0396d;
            padding: 10px;
            width: 100%;
            border-radius: 4px;
        }

        .app-two button[type="button"]
        {
            background: none;
            border: none;
            outline: none;
            padding: 10px;
            margin-top: 20px;
            display: block;
            text-align: right;
            border-right: 1px solid #ccc;
            width: 85%;

        }
        .App-leader{

            display: none;
        }

    }
    /* end email and password ==================================== */

</style>
<body>
    <div id="app">
        @include('hotels.navbar')
        <main>
            @yield('content')
        </main>

    </div>
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"></script>
</body>
</html>
