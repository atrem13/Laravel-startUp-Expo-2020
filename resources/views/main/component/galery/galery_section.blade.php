<div class="container-fluid" id="galery">
    <div class="container intervalSection">
        <h1 class="text-center mb-5 myTitle">Keseruan di Startup Expo Sebelumnya</h1>
        <div class="card-columns">
            @foreach ($galerys as $galery)
                <div class="card">
                    <div class="hovereffect">
                        <img class="card-img-top" src="{{asset('myAssets/galery/'. '/' . $galery->foto)}}" alt="">
                        <div class="overlay">
                            <div >
                                <p class="text-left">
                                    <span>{{$galery->nama}}</span>
                                </p>
                                <h2 class="my-auto"></h2>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</div>
