<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    $title = "Primo esercizio";
    $testi = [
        [
            "title" => "Titolo numero 1",
            "text" => "auwuhfiuwhefuibwiebfcuiwehufaifawufcu"
        ],
        [
            "title" => "Titolo numero 2",
            "text" => "auwuhfiuwhefuibwiebfcuiwehufaifawufcufbrdfahsrehbsrdfrhtse"
        ],
        [
            "title" => "Titolo numero 3",
            "text" => "auwuhfiuwhefuibwiebfcuiwehufaifawufcuawgevuiwhifeheauiguifvbsaudvbguiewauifhcuvigaewgv"
        ],
    ];
    return view('home_page', compact("title", "testi"));
});

Route::get('pagina_1', function () {
    return view('pagina_1');
});

Route::get('pagina_2', function () {
    $title = "Pagina numero 2";
    $testi = [
        [
            "title" => "Titolo numero 1 pagina 2",
            "text" => "auwuhfiuwhefuibwiebfcuiwehufaifa"
        ],
        [
            "title" => "Titolo numero 2 pagina 2",
            "text" => "auwuhfiuwhefuibwiebfcuiwehufaifawufcufbrdfahsrehbsrdfrhtsegggsdgxarehaerhb"
        ],
        [
            "title" => "Titolo numero 3 pagina 2",
            "text" => "auwuhfiuwhefuibwi"
        ],
    ];
    return view('pagina_2', compact("title", "testi"));
});

