{{-- <h1>{{$tenants}}</h1> --}}
<div class="container-fluid" id="tenant">
    <div class="container intervalSection">
      <div class="row">
        <div class="col-md-12 mb-3 text-center">
            <h1 class="myTitle mb-3">Tenant-tenant di Startup Expo 2020</h1>
        </div>
        <div class="col-md-10 offset-1" style="height: 500px;overflow:scroll">

            <div class="card">
                <div class="card-body">
                    {{-- <table class="table">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama</th>
                                <th>Kategori Usaha</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($tenants as $tenant)
                                <tr>
                                    <td scope="row">{{$tenant->id}}</td>
                                    <td>{{$tenant->nama}}</td>
                                    <td>{{$tenant->kategori_usaha}}</td>
                                    <td><a href="" class="myBtn myBg">See More</a></td>
                                </tr>
                            @endforeach
                            <tr>
                                <td colspan="4">
                                    {{$tenants->links()}}
                                </td>
                            </tr>
                        </tbody>
                    </table> --}}

                    <div class="row">
                        @php
                            $pict = [
                                'facebook.png',
                                'instagram-sketched.png',
                                'whatsapp.png',
                                'telegram.png',
                                'twitter.png'
                            ];
                        @endphp
                        @foreach ($tenants as $tenant)
                            <div class="col-md-2 col-sm-4 mb-3 text-center tenantHover" >
                                <img src="{{asset('myAssets/icon/'). '/'. $pict[rand(0,4)] }}" alt="" class="rounded-circle img-fluid " style="height:80px;"><br>
                                <span style="font-size:12px"><button class="tenantModal" data-toggle="modal" data-target="#tenantDetail-{{$tenant->id}}">{{$tenant->nama}}</button></span>
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

        </div>
      </div>
    </div>
</div>
