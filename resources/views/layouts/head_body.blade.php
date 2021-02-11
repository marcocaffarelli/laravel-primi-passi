<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel-primi-passi</title>

        <!-- Styles -->
        <style>
            *{
                padding: 0;
                margin: 0;
                box-sizing: border-box;
            }
            body{
                width: 80%;
                margin: auto;
            }
            nav{
                height: 100px;
                display: flex;
                justify-content: space-between;
                align-items: center;
                background-color: darkblue;
            }
            .title_nav{
                color: darkblue;
                background-color: yellow;
                padding: 5px;
                margin: 10px;
                border-radius: 20px;
            }
            .links a{
                margin: 0 10px;
                color: yellow;
                font-weight: bold;
            }
            main{
                display: flex;
                flex-direction: column;
                justify-content: center;
                align-items: center;
                text-align: center;
                background-color: gold;
                height: 500px;
            }
            main h1{
                font-size: 50px;
                margin: 20px 0;
            }
            main h2{
                font-size: 30px;
            }
            main h3{
                font-size: 25px;
                color: darkblue;
            }
            footer{
                text-align: center;
                color: yellow;
                background-color: darkblue;
            }

        </style>
    </head>

    <!-- body -->
    <body>
        @include('layouts.header')
        @include('layouts.main')
        @include('layouts.footer')
    </body>
</html>
