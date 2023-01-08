@extends("base")
@section("kategori_active", "active")
@section("content")

<!-- News With Sidebar Start -->
  <div class="container-fluid py-3">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="row">
                    <div class="col-12">
                        <div class="d-flex align-items-center justify-content-between bg-light py-2 px-4 mb-3">
                            <h3 class="m-0">{{ ucfirst($kategori)}}</h3>
                            <span class="text-black-50">Total Berita : {{ $data["totalResults"] }}</span>
                        </div>
                    </div>
                    @foreach ($data["articles"] as $dt)
                    <div class="col-lg-4">
                        <div class="position-relative mb-3">
                            <img class="img-fluid w-100" src="{{ $dt["urlToImage"] }}" style="object-fit: cover;">
                            <div class="overlay position-relative bg-light">
                                <div class="mb-2" style="font-size: 14px;">
                                    <a href="">{{ ucfirst($kategori) }}</a>
                                    <span class="px-1">/</span>
                                    <span>{{ date("d F Y", strtotime($dt["publishedAt"])) }}</span>
                                </div>
                                <a class="h4" href="{{ $dt["url"] }}" target="_blank">{{ $dt["title"] }}</a>
                                <p class="m-0">{{ substr($dt["description"], 0, 100) }}</p>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
  </div>
<!-- News With Sidebar End -->

@endsection