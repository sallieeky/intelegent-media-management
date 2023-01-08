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
        $nasional = Http::get("https://newsapi.org/v2/top-headlines?country=id&apiKey=" . env("NEWS_KEY"))->json();
        $internasional = Http::get("https://newsapi.org/v2/top-headlines?country=us&apiKey=" . env("NEWS_KEY"))->json();
        return view('beranda', compact('kategori', 'nasional', 'internasional'));
    }
}
