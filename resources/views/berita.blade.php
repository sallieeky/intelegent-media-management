@extends("base")
@section("content")

<!-- News With Sidebar Start -->
  <div class="container-fluid py-3">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="row">
                    <div class="col-12">
                        <div class="d-flex align-items-center justify-content-between bg-light py-2 px-4 mb-3">
                            <h3 class="m-0">{{ ucfirst($jenis)}}</h3>
                            <span class="text-black-50" id="total-berita">Total Berita : {{ $data["totalResults"] }}</span>
                            @if($jenis=="Internasional")
                            <select name="negara" id="kode_negara" class="form-control" style="width: 7%">
                                <option value="ae">ae</option>
                                <option value="ar">ar</option>
                                <option value="at">at</option>
                                <option value="au">au</option>
                                <option value="be">be</option>
                                <option value="bg">bg</option>
                                <option value="br">br</option>
                                <option value="ca">ca</option>
                                <option value="ch">ch</option>
                                <option value="cn">cn</option>
                                <option value="co">co</option>
                                <option value="cu">cu</option>
                                <option value="cz">cz</option>
                                <option value="de">de</option>
                                <option value="eg">eg</option>
                                <option value="fr">fr</option>
                                <option value="gb">gb</option>
                                <option value="gr">gr</option>
                                <option value="hk">hk</option>
                                <option value="hu">hu</option>
                                <option value="id">id</option>
                                <option value="ie">ie</option>
                                <option value="il">il</option>
                                <option value="in">in</option>
                                <option value="it">it</option>
                                <option value="jp">jp</option>
                                <option value="kr">kr</option>
                                <option value="lt">lt</option>
                                <option value="lv">lv</option>
                                <option value="ma">ma</option>
                                <option value="mx">mx</option>
                                <option value="my">my</option>
                                <option value="ng">ng</option>
                                <option value="nl">nl</option>
                                <option value="no">no</option>
                                <option value="nz">nz</option>
                                <option value="ph">ph</option>
                                <option value="pl">pl</option>
                                <option value="pt">pt</option>
                                <option value="ro">ro</option>
                                <option value="rs">rs</option>
                                <option value="ru">ru</option>
                                <option value="sa">sa</option>
                                <option value="se">se</option>
                                <option value="sg">sg</option>
                                <option value="si">si</option>
                                <option value="sk">sk</option>
                                <option value="th">th</option>
                                <option value="tr">tr</option>
                                <option value="tw">tw</option>
                                <option value="ua">ua</option>
                                <option value="us">us</option>
                                <option value="ve">ve</option>
                                <option value="za">za</option>
                            </select>
                            @endif
                        </div>
                    </div>
                    <div class="row" id="content-berita">
                        @foreach ($data["articles"] as $dt)
                        <div class="col-lg-4">
                            <div class="position-relative mb-3">
                                <img class="img-fluid w-100" src="{{ $dt["urlToImage"] }}" style="object-fit: cover;">
                                <div class="overlay position-relative bg-light">
                                    <div class="mb-2" style="font-size: 14px;">
                                        <a href="">{{ $dt["source"]["name"] }}</a>
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
  </div>
<!-- News With Sidebar End -->
@endsection
@section("script")

<script>
    $(document).ready(function(){
        $("#kode_negara").change(function(){
            // get value kode_negara and query api news
            var kode_negara = $(this).val();
            var url = "/api/berita-internasional/"+kode_negara;

            // show inside content-berita
            $.ajax({
                url: url,
                type: "GET",
                success: function(data){
                    $("#content-berita").html(data.html);
                    // ubah total berita
                    $("#total-berita").html(data.totalResults);
                }
            }); 
        });
    });
</script>
@endsection