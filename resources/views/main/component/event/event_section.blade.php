<div class="container-fluid zig" id="event">
    <div class="container intervalSection" >
        <h1 class="text-center mb-5 myTitle" >Ada event apa aja sih hari ini?</h1>
        <div class="row">
            @foreach ($streamings as $streaming)
                <div class="col-md-4 col-sm-12 mb-5">
                    <div class="card text-white parentRelative">
                    <img src="{{asset('myAssets/event/' . '/' . $streaming->foto)}}" class="card-img" alt="...">
                    <div class="card-img-overlay">
                        <h5 class="card-title myBtn myBg atTopLeft" >{{$streaming->judul}}</h5>
                        <p class="atBottomRight clearMP"><a href="{{$streaming->link}}" target="_blank" class="btn myHover myBg">See more</a></p>
                    </div>
                    </div>
                </div>
            @endforeach

        </div>
    </div>
</div>
