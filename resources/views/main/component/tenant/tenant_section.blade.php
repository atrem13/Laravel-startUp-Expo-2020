{{-- <h1>{{$tenants}}</h1> --}}
<div class="container-fluid" id="tenant">
    <div class="container intervalSection">
      <div class="row">

        <div class="col-md-6">
            <div id="tenantCarousel" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                    @for ($i = 0; $i < count($tenants); $i++)
                        <li data-target="#tenantCarousel" data-slide-to="{{$i}}" class="{{($i == 0) ? "active" :  ""}}"></li>
                    @endfor
                </ol>
                <div class="carousel-inner text-white">
                    @foreach ($tenants as $tenant)
                        <div class="carousel-item {{($tenant->id == 1) ? "active" :  ""}}">
                            <img src="{{asset('myAssets/tenant/') . '/' . $tenant->foto}}" class="d-block w-100" alt="...">
                            <h5 class="myBtn myBg atTopLeft">{{$tenant->nama}}</h5>
                            <p class="atBottomRight clearMP"><button class="btn myHover myBg" data-toggle="modal" data-target="#tenantDetail-{{$tenant->id}}">See more</button></p>
                        </div>
                        {{-- modal --}}
                        <div class="modal fade" id="tenantDetail-{{$tenant->id}}" tabindex="-1" role="dialog" aria-labelledby = "myModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-lg" role="document">

                              <!--Content-->
                              <div class="modal-content text-dark">
                                {{-- header --}}
                                <div class="modal-header">
                                  {{-- <h5 class="modal-title" id="exampleModalLabel">Modal title</h5> --}}
                                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                  </button>
                                </div>
                                <!--Body-->
                                <div class="modal-body mb-0 p-0">
                                  <div class="container">
                                    <div class="row my-5">
                                      <div class="col-sm-12 col-md-6">
                                        <h3>{{$tenant->nama}}</h3>
                                        <p>{{$tenant->deskripsi}}</p>
                                        <p><a href="">Link web</a></p>
                                        <br>
                                      </div>
                                      <div class="col-sm-12 col-md-6">
                                        <div class="embed-responsive embed-responsive-16by9 z-depth-1-half">
                                          <iframe class="embed-responsive-item" src="{{$tenant->video}}"
                                            allowfullscreen></iframe>
                                        </div>
                                      </div>
                                    </div>
                                  </div>

                                </div>

                                <!--Footer-->
                                <div class="modal-footer justify-content-center">
                                  <button class="btn btn-danger"><span class="fa fa-heart"></span> Like</button>
                                </div>

                              </div>
                              <!--/.Content-->

                            </div>
                        </div>
                        {{--Modal--}}
                    @endforeach
                </div>
            </div>

        </div>
        <div class="col-md-6 mb-3 my-auto">
            <h1 class="myTitle mb-5 text-center">Tenant-tenant di Startup Expo 2020</h1>
        </div>
      </div>
    </div>
</div>
