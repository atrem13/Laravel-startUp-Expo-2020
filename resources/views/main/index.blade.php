<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <link rel="stylesheet" href="{{asset('css/galeryHover.css')}}">
    <link rel="stylesheet" href="{{asset('css/timeline.css')}}">
    <style>
        body{
            background-color: #fff;
            /*background-image:url('/myAssets/background/Web 1366 – 2.png');*/
        }
        .myBanner {
            height:700px;
            background-image: url("/myAssets/banner/Group 4.jpg");
            background-size: cover;
            background-attachment: fixed;
        }
        .myBannerTitle{
            padding-top: 20%;
        }
        /*.myBannerTitle h1{
            text-shadow: 0 3px 10px black;
        }*/
        .clearMP {
          padding: 0;
          margin:0;
        }
        .atTopLeft {
          position: absolute;
          top: 0;
          left: 0;
        }
        .atBottomRight {
          position: absolute;
          bottom: 0;
          right: 0;
        }
        .parentRelative{
          position: relative;
        }
        .intervalSection{
            padding: 120px 0;
        }
        /*
        .zig{
            background-color: rgba(0, 0, 0, 0.05);
        }
        */
        .ziga{
          background-color: rgba(0, 0, 0, 0.7);
        }
        .transparantBlack {
          /*background-color: rgba(97, 195, 208, 0.4);*/
          background-color: rgba(0, 0, 0, 0.4);
        }
        .myTitle {
          color: #61C3D0;
        }
        .myBtn {
            display: inline-block;
            font-weight: 400;
            color: #212529;
            text-align: center;
            vertical-align: middle;
            padding: 0.375rem 0.75rem;
            font-size: 0.9rem;
            line-height: 1.6;
            border-radius: 0.25rem;
        }
        .myBg {
          background-color: #61C3D0;
          color: white;
        }
        .myHover:hover {
          background-color: white;
          color: #61C3D0;
        }
        .halfOpct{
            opacity: .5;
        }
        .halfOpct:hover{
            opacity: 1;
        }
        .hideTenant{
            display: none;
        }
        .showTenant:hover{
            display: none;
        }
        .showTenant:hover ~ .hideTenant{
            display: block;
            z-index: 99;
        }

    </style>
</head>
<body>
    {{--  banner section  --}}
    {{-- banner pake slider --}}
    <nav class="navbar fixed-top navbar-expand-lg navbar-dark transparantBlack">
        <a class="navbar-brand" href="#">
            {{--  Navbar      --}}
            <img src="{{asset('myAssets/navLogo/logo.png')}}" width="70px" height="30px" alt="navLogo">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#myNav" aria-controls="myNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="myNav">
            <ul class="navbar-nav ml-auto mt-2 mt-lg-0">
            <li class="nav-item ">
                <a class="nav-link text-white" href="#home">Home <span class="fa fa-chevron-right"></span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-white" href="#about">About us <span class="fa fa-chevron-right"></span></a>
            </li>
            <li class="nav-item ">
                <a class="nav-link text-white" href="#event">Event <span class="fa fa-chevron-right"></span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-white" href="#tenant">Tenant <span class="fa fa-chevron-right"></span></a>
            </li>
            <li class="nav-item ">
                <a class="nav-link text-white" href="#galery">Galery <span class="fa fa-chevron-right"></span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-white" href="#contact">Contact us <span class="fa fa-chevron-right"></span></a>
            </li>
            </ul>
        </div>
    </nav>
    <div class="container-fluid myBanner" id="home">
      <div class="container text-center text-white">
          <div class="myBannerTitle" >
              <h1 class="display-3">Startup Expo</h1>
              <h1 class="display-3">STMIK Primakara</h1>
          </div>
      </div>
    </div>

    {{--  about us section  --}}
    <div class="container-fluid" id="about">
      <div class="container intervalSection">
        <div class="row">
          <div class="col-md-4 offset-md-1 col-sm-12">
            <img src="{{asset('myAssets/aboutUs/Group 2.jpg')}}" class="img-fluid" alt="pak made artana">
          </div>
          <div class="col-sm-12 col-md-5 my-auto">
            <h1 class="myTitle">Apa sih Startup Expo itu?</h1>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minima tenetur impedit assumenda, mollitia optio provident facere aliquam itaque, odit officiis harum molestias quis dolore asperiores ab in enim! Velit, nam.</p>
            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Sequi id possimus molestiae maiores ipsam veniam placeat nobis, alias ratione qui provident, quia doloribus, sed est sit cupiditate ea quibusdam nulla.</p>
          </div>
        </div>
      </div>
    </div>

    {{-- benefit section --}}
    <div class="container-fluid zig" >
        <div class="container intervalSection">
            <h1 class="text-center myTitle mb-5">Apa aja sih yang bakal kamu dapetin disini?</h1>
            <div class="row">
                <div class="col-10 offset-1">
                    <div class="row">
                        <!-- Grid column -->
                        <div class="col-lg-6  col-md-6 col-sm-12">

                          <!-- Grid row -->
                          <div class="row mb-3 rounded p-3 text-white" style="background-color: #00b8d4">

                            <!-- Grid column -->
                            <div class="col-10 text-right my-auto">
                              <h6 class="font-weight-bold mb-1">Pengetahuan Baru</h6>
                              <p class="grey-text">Lorem ipsum dolor sit amet, consectetur adipisicing  </p>
                            </div>
                            <!-- Grid column -->

                            <!-- Grid column -->
                            <div class="col-2">
                                <img class="img-fluid" src="{{asset('myAssets/icon/book.svg')}}" alt="">
                            </div>
                            <!-- Grid column -->

                          </div>
                          <!-- Grid row -->

                          <!-- Grid row -->
                          <div class="row mb-3 rounded p-3 text-white" style="background-color: #00bfa5 ">

                            <!-- Grid column -->
                            <div class="col-10 text-right my-auto">
                              <h6 class="font-weight-bold mb-1">Bertemu Profesional di Bidangnya</h6>
                              <p class="grey-text">Lorem ipsum dolor sit amet, consectetur adipisicing </p>
                            </div>
                            <!-- Grid column -->

                            <!-- Grid column -->
                            <div class="col-2">
                                <img class="img-fluid" src="{{asset('myAssets/icon/teacher.svg')}}" alt="">
                            </div>
                            <!-- Grid column -->

                          </div>
                          <!-- Grid row -->

                          <!-- Grid row -->
                          <div class="row mb-3 rounded p-3 text-white" style="background-color: #00c853  ">

                            <!-- Grid column -->
                            <div class="col-10 text-right my-auto">
                              <h6 class="font-weight-bold mb-1">Ide Creatif</h6>
                              <p class="grey-text">Lorem ipsum dolor sit amet, consectetur adipisicing  </p>
                            </div>
                            <!-- Grid column -->

                            <!-- Grid column -->
                            <div class="col-2">
                                <img class="img-fluid" src="{{asset('myAssets/icon/opportunity.svg')}}" alt="">
                            </div>
                            <!-- Grid column -->

                          </div>
                          <!-- Grid row -->


                        </div>
                        <!--Grid column-->

                        <!-- Grid column -->
                        <div class="offset-lg-1 offset-md-1 col-lg-5 col-md-5 col-sm-12 text-center text-lg-left">
                          <img class="img-fluid rounded" src="{{asset('myAssets/benefit/Mask Group 1.jpg')}}" alt="Sample image">
                        </div>
                        <!-- Grid column -->



                    </div>
                    <!-- Grid row -->
                </div>
            </div>
        </div>
    </div>



    {{-- event section --}}
    {{-- hari pertama 2 talkshow, hari kedua 2 penjurian (bisa pake timeline/design block tutorial) --}}
    {{-- section jadwal --}}
    <div class="container-fluid" id="event">
        <div class="container intervalSection">
            <h1 class="myTitle text-center mb-5">Ada event apa aja sih hari ini?</h1>
            <div class="row">
                <div class="col-lg-8 mx-auto">

                  <ol class="timeline">
                    @foreach ($streamings as $streaming)
                        <li class="timeline-element">
                        <h5 class="font-weight-bold dark-grey-text mb-0">{{$streaming->judul}}</h5>
                        <span class="grey-text text-muted font-small mb-1" style="font-size:10%">{{$streaming->created_at->format('H:i:s')}}</span>
                        <p><img class="img-fluid z-depth-1-half rounded" src="{{asset('myAssets/event/' . '/' . $streaming->foto)}}" alt="..."></p>
                        {{-- <p class="text-muted">{{$streaming->deskripsi}}</p> --}}
                        <p class="text-muted ">Lorem ipsum dolor sit amet consectetur adipisicing elit. Id dolor sunt officiis, sapiente co</p>
                        </li>
                    @endforeach
                  </ol>

                </div>
            </div>
            <div class="row mt-5">
                <div class="col-md-10 offset-md-1 col-sm-12">
                    <h4>Jadwal Event</h4>
                    <div class="table-responsive">
                        <table class="table table-bordered">
                            <thead>
                                <tr class=" myBg">
                                    <th scope="col">Judul</th>
                                    <th scope="col">Deskripsi</th>
                                    <th scope="col">Tanggal tayang</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($jadwals as $jadwal)
                                    <tr>
                                        <td scope="row">{{$jadwal->judul}}</td>
                                        <td>{{$jadwal->deskripsi}}</td>
                                        <td>{{$jadwal->created_at->format('Y-m-d')}}</td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{--  tenant section  --}}
    {{-- ada 20 tenant --}}
    @include('main.component.tenant.tenant_section')

    {{--  testimoni section  --}}
    <div class="container-fluid zig">
        <div class="container intervalSection">
            <h1 class="text-center mb-5 myTitle">Yuk dengar cerita mereka yang udah pernah ikutan Startup Expo sebelumnya</h1>
            <div id="testimoniCarousel" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <section class="p-md-5 mx-md-5 text-center text-lg-left grey z-depth-1 myBg">
                            <div class="row d-flex justify-content-center">
                            <div class="col-md-10">
                                <div class="card">
                                <div class="card-body m-3">
                                    <div class="row">
                                    <div class="col-lg-4 d-flex mb-2 align-items-center">
                                        <div class="avatar mx-4 w-100 white d-flex justify-content-center align-items-center">
                                        <img src="{{asset('myAssets/testimoni/Mask Group 1.jpg')}}" class="rounded-circle img-fluid z-depth-1" alt="woman avatar">
                                        </div>
                                    </div>
                                    <div class="col-lg-8">
                                        <p class="text-muted font-weight-light mb-4">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Id quam sapiente molestiae
                                        numquam quas, voluptates omnis nulla ea odio quia similique corrupti magnam.</p>
                                        <p class="font-weight-bold lead mb-2"><strong>Anna Smith</strong></p>
                                        <p class="font-weight-bold text-muted mb-0">Product manager</p>
                                    </div>
                                    </div>
                                </div>
                                </div>
                            </div>
                            </div>
                        </section>
                    </div>
                    <div class="carousel-item ">
                        <section class="p-md-5 mx-md-5 text-center text-lg-left grey z-depth-1 myBg">
                            <div class="row d-flex justify-content-center">
                            <div class="col-md-10">
                                <div class="card">
                                <div class="card-body m-3">
                                    <div class="row">
                                    <div class="col-lg-4 d-flex mb-2 align-items-center">
                                        <div class="avatar mx-4 w-100 white d-flex justify-content-center align-items-center">
                                        <img src="{{asset('myAssets/testimoni/Mask Group 2.png')}}" class="rounded-circle img-fluid z-depth-1" alt="woman avatar">
                                        </div>
                                    </div>
                                    <div class="col-lg-8">
                                        <p class="text-muted font-weight-light mb-4">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Id quam sapiente molestiae
                                        numquam quas, voluptates omnis nulla ea odio quia similique corrupti magnam.</p>
                                        <p class="font-weight-bold lead mb-2"><strong>Anna Smith</strong></p>
                                        <p class="font-weight-bold text-muted mb-0">Product manager</p>
                                    </div>
                                    </div>
                                </div>
                                </div>
                            </div>
                            </div>
                        </section>
                    </div>
                    <div class="carousel-item ">
                        <section class="p-md-5 mx-md-5 text-center text-lg-left grey z-depth-1 myBg">
                            <div class="row d-flex justify-content-center">
                            <div class="col-md-10">
                                <div class="card">
                                <div class="card-body m-3">
                                    <div class="row">
                                    <div class="col-lg-4 d-flex mb-2 align-items-center">
                                        <div class="avatar mx-4 w-100 white d-flex justify-content-center align-items-center">
                                        <img src="{{asset('myAssets/testimoni/Mask Group 4.png')}}" class="rounded-circle img-fluid z-depth-1" alt="woman avatar">
                                        </div>
                                    </div>
                                    <div class="col-lg-8">
                                        <p class="text-muted font-weight-light mb-4">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Id quam sapiente molestiae
                                        numquam quas, voluptates omnis nulla ea odio quia similique corrupti magnam.</p>
                                        <p class="font-weight-bold lead mb-2"><strong>Anna Smith</strong></p>
                                        <p class="font-weight-bold text-muted mb-0">Product manager</p>
                                    </div>
                                    </div>
                                </div>
                                </div>
                            </div>
                            </div>
                        </section>
                    </div>
                </div>
                <a class="carousel-control-prev" href="#testimoniCarousel" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#testimoniCarousel" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </div>
    </div>

    {{-- startup expo galery --}}
    @include('main.component.galery.galery_section')

    {{-- footer section --}}
    <div class="container-fluid bg-dark text-white" id="contact">
        <div class="container pt-5 pb-5">
            <div class="row">
                <div class="col-sm-3">
                    <h5 class="mb-3">Contact us:</h5>
                    <p><span class="fa fa-envelope mr-2"></span> Gmail: blablabla@gmail.com</p>
                    <p><i class="fa fa-instagram mr-2" ></i> Instagram: @blablabla</p>
                    <p><span class="fa fa-mobile mr-2"></span> Phone: 08542369857</p>
                </div>
                <div class="col-sm-3">
                    <h5 class="mb-3">More about us:</h5>
                    <p><span class="fa fa-chevron-right mr-2"></span> UKM Primakara</p>
                    <p><span class="fa fa-chevron-right mr-2"></span> Prodi Primakara</p>
                    <p><span class="fa fa-chevron-right mr-2" ></span> Dosen Primakara</p>
                </div>
                <div class="col-sm-3">
                    <h5 class="mb-3">Other event:</h5>
                    <p><span class="fa fa-chevron-right mr-2"></span> PMB</p>
                    <p><span class="fa fa-chevron-right mr-2"></span> Malam Keakraban</p>
                    <p><span class="fa fa-chevron-right mr-2" ></span> Bali Startup Camp</p>
                    <p><span class="fa fa-chevron-right mr-2" ></span> XD Fiesta</p>
                </div>
                <div class="col-sm-3">
                    <h5 class="mb-3">Location:</h5>
                    <p><span class="fa fa-map-marker mr-2" ></span> Jalan Tukad Badung</p>
                    <span class="mt-2" style="font-size:10%">Sponsor:</span>
                    <div class="row">
                        <div class="col-sm-4 mb-3 halfOpct">
                            <img src="{{asset('myAssets/sponsor/image11.jpg')}}" class="img-fluid" alt="">
                        </div>
                        <div class="col-sm-4 mb-3 halfOpct">
                            <img src="{{asset('myAssets/sponsor/image11.jpg')}}" class="img-fluid" alt="">
                        </div>
                        <div class="col-sm-4 mb-3 halfOpct">
                            <img src="{{asset('myAssets/sponsor/image11.jpg')}}" class="img-fluid" alt="">
                        </div>
                        <div class="col-sm-4 mb-3 halfOpct">
                            <img src="{{asset('myAssets/sponsor/image11.jpg')}}" class="img-fluid" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="{{asset('js/app.js')}}"></script>
</body>
</html>
