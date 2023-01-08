@extends('base')
@section("beranda_active", "active")
@section("content")

<!-- Main News Slider Start -->
<div class="container-fluid">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <div class="owl-carousel owl-carousel-2 carousel-item-1 position-relative mb-3 mb-lg-0">
                    @foreach ($terbaru["articles"] as $dt)
                    @if($loop->iteration == 5) @break @endif
                    <div class="position-relative overflow-hidden" style="height: 435px;">
                        <img class="img-fluid h-100" src="{{ $dt['urlToImage'] }}" style="object-fit: cover;">
                        <div class="overlay">
                            <div class="mb-1">
                                <a class="text-white" href="#">{{ $dt["source"]["name"] }}</a>
                                <span class="px-2 text-white">/</span>
                                <a class="text-white" href="#">{{ date("d F Y", strtotime($dt["publishedAt"])) }}</a>
                            </div>
                            <a class="h2 m-0 text-white font-weight-bold" href="{{ $dt['url'] }}" target="_blank">{{ substr($dt["title"], 0,50) }}...</a>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
            <div class="col-lg-4">
                <div class="d-flex align-items-center justify-content-between bg-light py-2 px-4 mb-3">
                    <h3 class="m-0">Kategori</h3>
                    <a class="text-secondary font-weight-medium text-decoration-none" href="">Lihat Semua</a>
                </div>
                <div class="position-relative overflow-hidden mb-3" style="height: 80px;">
                    <img class="img-fluid w-100 h-100" src="/dashboard_assets/img/cat-500x80-1.jpg" style="object-fit: cover;">
                    <a href="/kategori/business" class="overlay align-items-center justify-content-center h4 m-0 text-white text-decoration-none">
                        Business
                    </a>
                </div>
                <div class="position-relative overflow-hidden mb-3" style="height: 80px;">
                    <img class="img-fluid w-100 h-100" src="/dashboard_assets/img/cat-500x80-2.jpg" style="object-fit: cover;">
                    <a href="/kategori/technology" class="overlay align-items-center justify-content-center h4 m-0 text-white text-decoration-none">
                        Technology
                    </a>
                </div>
                <div class="position-relative overflow-hidden mb-3" style="height: 80px;">
                    <img class="img-fluid w-100 h-100" src="/dashboard_assets/img/cat-500x80-3.jpg" style="object-fit: cover;">
                    <a href="/kategori/entertainment" class="overlay align-items-center justify-content-center h4 m-0 text-white text-decoration-none">
                        Entertainment
                    </a>
                </div>
                <div class="position-relative overflow-hidden" style="height: 80px;">
                    <img class="img-fluid w-100 h-100" src="/dashboard_assets/img/cat-500x80-4.jpg" style="object-fit: cover;">
                    <a href="/kategori/sports" class="overlay align-items-center justify-content-center h4 m-0 text-white text-decoration-none">
                        Sports
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Main News Slider End -->


<!-- News With Sidebar Start -->
{{-- <div class="container-fluid py-3">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="row mb-3">
                    <div class="col-12">
                        <div class="d-flex align-items-center justify-content-between bg-light py-2 px-4 mb-3">
                            <h3 class="m-0">Popular</h3>
                            <a class="text-secondary font-weight-medium text-decoration-none" href="">Lihat Semua</a>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="position-relative mb-3">
                            <img class="img-fluid w-100" src="/dashboard_assets/img/news-500x280-2.jpg" style="object-fit: cover;">
                            <div class="overlay position-relative bg-light">
                                <div class="mb-2" style="font-size: 14px;">
                                    <a href="">Technology</a>
                                    <span class="px-1">/</span>
                                    <span>January 01, 2045</span>
                                </div>
                                <a class="h4" href="">Est stet amet ipsum stet clita rebum duo</a>
                                <p class="m-0">Rebum dolore duo et vero ipsum clita, est ea sed duo diam ipsum, clita at justo, lorem amet vero eos sed sit...</p>
                            </div>
                        </div>
                        <div class="d-flex mb-3">
                            <img src="/dashboard_assets/img/news-100x100-1.jpg" style="width: 100px; height: 100px; object-fit: cover;">
                            <div class="w-100 d-flex flex-column justify-content-center bg-light px-3" style="height: 100px;">
                                <div class="mb-1" style="font-size: 13px;">
                                    <a href="">Technology</a>
                                    <span class="px-1">/</span>
                                    <span>January 01, 2045</span>
                                </div>
                                <a class="h6 m-0" href="">Lorem ipsum dolor sit amet consec adipis elit</a>
                            </div>
                        </div>
                        <div class="d-flex mb-3">
                            <img src="/dashboard_assets/img/news-100x100-2.jpg" style="width: 100px; height: 100px; object-fit: cover;">
                            <div class="w-100 d-flex flex-column justify-content-center bg-light px-3" style="height: 100px;">
                                <div class="mb-1" style="font-size: 13px;">
                                    <a href="">Technology</a>
                                    <span class="px-1">/</span>
                                    <span>January 01, 2045</span>
                                </div>
                                <a class="h6 m-0" href="">Lorem ipsum dolor sit amet consec adipis elit</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="position-relative mb-3">
                            <img class="img-fluid w-100" src="/dashboard_assets/img/news-500x280-3.jpg" style="object-fit: cover;">
                            <div class="overlay position-relative bg-light">
                                <div class="mb-2" style="font-size: 14px;">
                                    <a href="">Technology</a>
                                    <span class="px-1">/</span>
                                    <span>January 01, 2045</span>
                                </div>
                                <a class="h4" href="">Est stet amet ipsum stet clita rebum duo</a>
                                <p class="m-0">Rebum dolore duo et vero ipsum clita, est ea sed duo diam ipsum, clita at justo, lorem amet vero eos sed sit...</p>
                            </div>
                        </div>
                        <div class="d-flex mb-3">
                            <img src="/dashboard_assets/img/news-100x100-3.jpg" style="width: 100px; height: 100px; object-fit: cover;">
                            <div class="w-100 d-flex flex-column justify-content-center bg-light px-3" style="height: 100px;">
                                <div class="mb-1" style="font-size: 13px;">
                                    <a href="">Technology</a>
                                    <span class="px-1">/</span>
                                    <span>January 01, 2045</span>
                                </div>
                                <a class="h6 m-0" href="">Lorem ipsum dolor sit amet consec adipis elit</a>
                            </div>
                        </div>
                        <div class="d-flex mb-3">
                            <img src="/dashboard_assets/img/news-100x100-4.jpg" style="width: 100px; height: 100px; object-fit: cover;">
                            <div class="w-100 d-flex flex-column justify-content-center bg-light px-3" style="height: 100px;">
                                <div class="mb-1" style="font-size: 13px;">
                                    <a href="">Technology</a>
                                    <span class="px-1">/</span>
                                    <span>January 01, 2045</span>
                                </div>
                                <a class="h6 m-0" href="">Lorem ipsum dolor sit amet consec adipis elit</a>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="row">
                    <div class="col-12">
                        <div class="d-flex align-items-center justify-content-between bg-light py-2 px-4 mb-3">
                            <h3 class="m-0">Latest</h3>
                            <a class="text-secondary font-weight-medium text-decoration-none" href="">Lihat Semua</a>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="position-relative mb-3">
                            <img class="img-fluid w-100" src="/dashboard_assets/img/news-500x280-5.jpg" style="object-fit: cover;">
                            <div class="overlay position-relative bg-light">
                                <div class="mb-2" style="font-size: 14px;">
                                    <a href="">Technology</a>
                                    <span class="px-1">/</span>
                                    <span>January 01, 2045</span>
                                </div>
                                <a class="h4" href="">Est stet amet ipsum stet clita rebum duo</a>
                                <p class="m-0">Rebum dolore duo et vero ipsum clita, est ea sed duo diam ipsum, clita at justo, lorem amet vero eos sed sit...</p>
                            </div>
                        </div>
                        <div class="d-flex mb-3">
                            <img src="/dashboard_assets/img/news-100x100-5.jpg" style="width: 100px; height: 100px; object-fit: cover;">
                            <div class="w-100 d-flex flex-column justify-content-center bg-light px-3" style="height: 100px;">
                                <div class="mb-1" style="font-size: 13px;">
                                    <a href="">Technology</a>
                                    <span class="px-1">/</span>
                                    <span>January 01, 2045</span>
                                </div>
                                <a class="h6 m-0" href="">Lorem ipsum dolor sit amet consec adipis elit</a>
                            </div>
                        </div>
                        <div class="d-flex mb-3">
                            <img src="/dashboard_assets/img/news-100x100-1.jpg" style="width: 100px; height: 100px; object-fit: cover;">
                            <div class="w-100 d-flex flex-column justify-content-center bg-light px-3" style="height: 100px;">
                                <div class="mb-1" style="font-size: 13px;">
                                    <a href="">Technology</a>
                                    <span class="px-1">/</span>
                                    <span>January 01, 2045</span>
                                </div>
                                <a class="h6 m-0" href="">Lorem ipsum dolor sit amet consec adipis elit</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="position-relative mb-3">
                            <img class="img-fluid w-100" src="/dashboard_assets/img/news-500x280-6.jpg" style="object-fit: cover;">
                            <div class="overlay position-relative bg-light">
                                <div class="mb-2" style="font-size: 14px;">
                                    <a href="">Technology</a>
                                    <span class="px-1">/</span>
                                    <span>January 01, 2045</span>
                                </div>
                                <a class="h4" href="">Est stet amet ipsum stet clita rebum duo</a>
                                <p class="m-0">Rebum dolore duo et vero ipsum clita, est ea sed duo diam ipsum, clita at justo, lorem amet vero eos sed sit...</p>
                            </div>
                        </div>
                        <div class="d-flex mb-3">
                            <img src="/dashboard_assets/img/news-100x100-2.jpg" style="width: 100px; height: 100px; object-fit: cover;">
                            <div class="w-100 d-flex flex-column justify-content-center bg-light px-3" style="height: 100px;">
                                <div class="mb-1" style="font-size: 13px;">
                                    <a href="">Technology</a>
                                    <span class="px-1">/</span>
                                    <span>January 01, 2045</span>
                                </div>
                                <a class="h6 m-0" href="">Lorem ipsum dolor sit amet consec adipis elit</a>
                            </div>
                        </div>
                        <div class="d-flex mb-3">
                            <img src="/dashboard_assets/img/news-100x100-3.jpg" style="width: 100px; height: 100px; object-fit: cover;">
                            <div class="w-100 d-flex flex-column justify-content-center bg-light px-3" style="height: 100px;">
                                <div class="mb-1" style="font-size: 13px;">
                                    <a href="">Technology</a>
                                    <span class="px-1">/</span>
                                    <span>January 01, 2045</span>
                                </div>
                                <a class="h6 m-0" href="">Lorem ipsum dolor sit amet consec adipis elit</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div> --}}
<!-- News With Sidebar End -->

<!-- Nasional News Slider Start -->
<div class="container-fluid py-3">
    <div class="container">
        <div class="d-flex align-items-center justify-content-between bg-light py-2 px-4 mb-3">
            <h3 class="m-0">Berita Nasional</h3>
            <a class="text-secondary font-weight-medium text-decoration-none" href="">Lihat Semua</a>
        </div>
        <div class="owl-carousel owl-carousel-2 carousel-item-4 position-relative">
            @foreach ($nasional["articles"] as $dt)
            @if($loop->iteration == 5) @break @endif
            <div class="position-relative overflow-hidden" style="height: 300px;">
                <img class="img-fluid w-100 h-100" src="{{ $dt['urlToImage'] }}" style="object-fit: cover;">
                <div class="overlay">
                    <div class="mb-1" style="font-size: 13px;">
                        <a class="text-white" href="#">{{ $dt["source"]["name"] }}</a>
                        <span class="px-1 text-white">/</span>
                        <a class="text-white" href="#">{{ 
                            date("d F Y", strtotime($dt["publishedAt"]))
                        }}</a>
                    </div>
                    <a class="h4 m-0 text-white" href="{{ $dt['url'] }}" target="_blank">{{ substr($dt["title"], 0,50) }}...</a>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>
<!-- Nasional News Slider End -->

<!-- Internasional News Slider Start -->
<div class="container-fluid pb-3">
    <div class="container">
        <div class="d-flex align-items-center justify-content-between bg-light py-2 px-4 mb-3">
            <h3 class="m-0">Berita Internasional</h3>
            <a class="text-secondary font-weight-medium text-decoration-none" href="">Lihat Semua</a>
        </div>
        <div class="owl-carousel owl-carousel-2 carousel-item-4 position-relative">
            @foreach ($internasional["articles"] as $dt)
            @if($loop->iteration == 5) @break @endif
            <div class="position-relative overflow-hidden" style="height: 300px;">
                <img class="img-fluid w-100 h-100" src="{{ $dt['urlToImage'] }}" style="object-fit: cover;">
                <div class="overlay">
                    <div class="mb-1" style="font-size: 13px;">
                        <a class="text-white" href="#">{{ $dt["source"]["name"] }}</a>
                        <span class="px-1 text-white">/</span>
                        <a class="text-white" href="#">{{ 
                            date("d F Y", strtotime($dt["publishedAt"]))
                        }}</a>
                    </div>
                    <a class="h4 m-0 text-white" href="{{ $dt['url'] }}" target="_blank">{{ substr($dt["title"], 0,50) }}...</a>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>
<!-- Internasional News Slider End -->


<!-- Category News Slider Start -->
{{-- <div class="container-fluid">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 py-3">
                <div class="bg-light py-2 px-4 mb-3">
                    <h3 class="m-0">Business</h3>
                </div>
                <div class="owl-carousel owl-carousel-3 carousel-item-2 position-relative">
                    <div class="position-relative">
                        <img class="img-fluid w-100" src="/dashboard_assets/img/news-500x280-1.jpg" style="object-fit: cover;">
                        <div class="overlay position-relative bg-light">
                            <div class="mb-2" style="font-size: 13px;">
                                <a href="">Technology</a>
                                <span class="px-1">/</span>
                                <span>January 01, 2045</span>
                            </div>
                            <a class="h4 m-0" href="">Sanctus amet sed ipsum lorem</a>
                        </div>
                    </div>
                    <div class="position-relative">
                        <img class="img-fluid w-100" src="/dashboard_assets/img/news-500x280-2.jpg" style="object-fit: cover;">
                        <div class="overlay position-relative bg-light">
                            <div class="mb-2" style="font-size: 13px;">
                                <a href="">Technology</a>
                                <span class="px-1">/</span>
                                <span>January 01, 2045</span>
                            </div>
                            <a class="h4 m-0" href="">Sanctus amet sed ipsum lorem</a>
                        </div>
                    </div>
                    <div class="position-relative">
                        <img class="img-fluid w-100" src="/dashboard_assets/img/news-500x280-3.jpg" style="object-fit: cover;">
                        <div class="overlay position-relative bg-light">
                            <div class="mb-2" style="font-size: 13px;">
                                <a href="">Technology</a>
                                <span class="px-1">/</span>
                                <span>January 01, 2045</span>
                            </div>
                            <a class="h4 m-0" href="">Sanctus amet sed ipsum lorem</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 py-3">
                <div class="bg-light py-2 px-4 mb-3">
                    <h3 class="m-0">Technology</h3>
                </div>
                <div class="owl-carousel owl-carousel-3 carousel-item-2 position-relative">
                    <div class="position-relative">
                        <img class="img-fluid w-100" src="/dashboard_assets/img/news-500x280-4.jpg" style="object-fit: cover;">
                        <div class="overlay position-relative bg-light">
                            <div class="mb-2" style="font-size: 13px;">
                                <a href="">Technology</a>
                                <span class="px-1">/</span>
                                <span>January 01, 2045</span>
                            </div>
                            <a class="h4 m-0" href="">Sanctus amet sed ipsum lorem</a>
                        </div>
                    </div>
                    <div class="position-relative">
                        <img class="img-fluid w-100" src="/dashboard_assets/img/news-500x280-5.jpg" style="object-fit: cover;">
                        <div class="overlay position-relative bg-light">
                            <div class="mb-2" style="font-size: 13px;">
                                <a href="">Technology</a>
                                <span class="px-1">/</span>
                                <span>January 01, 2045</span>
                            </div>
                            <a class="h4 m-0" href="">Sanctus amet sed ipsum lorem</a>
                        </div>
                    </div>
                    <div class="position-relative">
                        <img class="img-fluid w-100" src="/dashboard_assets/img/news-500x280-6.jpg" style="object-fit: cover;">
                        <div class="overlay position-relative bg-light">
                            <div class="mb-2" style="font-size: 13px;">
                                <a href="">Technology</a>
                                <span class="px-1">/</span>
                                <span>January 01, 2045</span>
                            </div>
                            <a class="h4 m-0" href="">Sanctus amet sed ipsum lorem</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div> --}}
<!-- Category News Slider End -->


<!-- Category News Slider Start -->
{{-- <div class="container-fluid">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 py-3">
                <div class="bg-light py-2 px-4 mb-3">
                    <h3 class="m-0">Entertainment</h3>
                </div>
                <div class="owl-carousel owl-carousel-3 carousel-item-2 position-relative">
                    <div class="position-relative">
                        <img class="img-fluid w-100" src="/dashboard_assets/img/news-500x280-6.jpg" style="object-fit: cover;">
                        <div class="overlay position-relative bg-light">
                            <div class="mb-2" style="font-size: 13px;">
                                <a href="">Technology</a>
                                <span class="px-1">/</span>
                                <span>January 01, 2045</span>
                            </div>
                            <a class="h4 m-0" href="">Sanctus amet sed ipsum lorem</a>
                        </div>
                    </div>
                    <div class="position-relative">
                        <img class="img-fluid w-100" src="/dashboard_assets/img/news-500x280-5.jpg" style="object-fit: cover;">
                        <div class="overlay position-relative bg-light">
                            <div class="mb-2" style="font-size: 13px;">
                                <a href="">Technology</a>
                                <span class="px-1">/</span>
                                <span>January 01, 2045</span>
                            </div>
                            <a class="h4 m-0" href="">Sanctus amet sed ipsum lorem</a>
                        </div>
                    </div>
                    <div class="position-relative">
                        <img class="img-fluid w-100" src="/dashboard_assets/img/news-500x280-4.jpg" style="object-fit: cover;">
                        <div class="overlay position-relative bg-light">
                            <div class="mb-2" style="font-size: 13px;">
                                <a href="">Technology</a>
                                <span class="px-1">/</span>
                                <span>January 01, 2045</span>
                            </div>
                            <a class="h4 m-0" href="">Sanctus amet sed ipsum lorem</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 py-3">
                <div class="bg-light py-2 px-4 mb-3">
                    <h3 class="m-0">Sports</h3>
                </div>
                <div class="owl-carousel owl-carousel-3 carousel-item-2 position-relative">
                    <div class="position-relative">
                        <img class="img-fluid w-100" src="/dashboard_assets/img/news-500x280-3.jpg" style="object-fit: cover;">
                        <div class="overlay position-relative bg-light">
                            <div class="mb-2" style="font-size: 13px;">
                                <a href="">Technology</a>
                                <span class="px-1">/</span>
                                <span>January 01, 2045</span>
                            </div>
                            <a class="h4 m-0" href="">Sanctus amet sed ipsum lorem</a>
                        </div>
                    </div>
                    <div class="position-relative">
                        <img class="img-fluid w-100" src="/dashboard_assets/img/news-500x280-2.jpg" style="object-fit: cover;">
                        <div class="overlay position-relative bg-light">
                            <div class="mb-2" style="font-size: 13px;">
                                <a href="">Technology</a>
                                <span class="px-1">/</span>
                                <span>January 01, 2045</span>
                            </div>
                            <a class="h4 m-0" href="">Sanctus amet sed ipsum lorem</a>
                        </div>
                    </div>
                    <div class="position-relative">
                        <img class="img-fluid w-100" src="/dashboard_assets/img/news-500x280-1.jpg" style="object-fit: cover;">
                        <div class="overlay position-relative bg-light">
                            <div class="mb-2" style="font-size: 13px;">
                                <a href="">Technology</a>
                                <span class="px-1">/</span>
                                <span>January 01, 2045</span>
                            </div>
                            <a class="h4 m-0" href="">Sanctus amet sed ipsum lorem</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div> --}}
<!-- Category News Slider End -->

@endsection