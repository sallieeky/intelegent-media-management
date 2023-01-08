<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the 'api' middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/berita-internasional/{kode}', function ($kode) {
    $data = Http::get('https://newsapi.org/v2/top-headlines?country=' . $kode . '&apiKey=' . env('NEWS_KEY'))->json();
    $data["html"] = "";
    $data["totalResults"] = "Total Berita : " . $data["totalResults"];
    foreach ($data['articles'] as $dt) {
        $data["html"] .= "
        <div class='col-lg-4'>
            <div class='position-relative mb-3'>
                <img class='img-fluid w-100' src='" . $dt['urlToImage'] . "' style='object-fit: cover;'>
                <div class='overlay position-relative bg-light'>
                    <div class='mb-2' style='font-size: 14px;'>
                        <a href=''>" . $dt['source']['name'] . "</a>
                        <span class='px-1'>/</span>
                        <span>" . date('d F Y', strtotime($dt['publishedAt'])) . "</span>
                    </div>
                    <a class='h4' href='" . $dt['url'] . "' target='_blank'>" . $dt['title'] . "</a>
                    <p class='m-0'>" . substr($dt['description'], 0, 100) . "</p>
                </div>
            </div>
        </div>
        ";
    }

    return $data;
});
