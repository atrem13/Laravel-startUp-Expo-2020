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
                                <span style="font-size:12px">{{$tenant->nama}}</span>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>

        </div>
      </div>
    </div>
</div>
