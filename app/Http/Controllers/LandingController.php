<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class LandingController extends Controller
{
    public function index()
    {
        $kategori = [
            "business",
            "entertainment",
            "general",
            "health",
            "science",
            "sports",
            "technology"
        ];
        $terbaru = Http::get("https://newsapi.org/v2/top-headlines?country=id&from=" . date("Y-m-d") . "&to=" . date("Y-m-d") . "&sortBy=popularity&apiKey=" . env("NEWS_KEY"))->json();
        $nasional = Http::get("https://newsapi.org/v2/top-headlines?country=id&apiKey=" . env("NEWS_KEY"))->json();
        $internasional = Http::get("https://newsapi.org/v2/top-headlines?country=us&apiKey=" . env("NEWS_KEY"))->json();
        return view('beranda', compact('kategori', 'nasional', 'internasional', 'terbaru'));
    }

    public function nasional(Request $request)
    {
        return view("berita-nasional");
    }

    public function internasional(Request $request)
    {
        return view("daftar-berita");
    }

    public function kategori($kategori)
    {
        $data = Http::get("https://newsapi.org/v2/top-headlines?country=id&category=" . $kategori . "&apiKey=" . env("NEWS_KEY"))->json();
        return view('kategori', compact('data', 'kategori'));
        // return view('kategori', compact('kategori'));
    }
}
