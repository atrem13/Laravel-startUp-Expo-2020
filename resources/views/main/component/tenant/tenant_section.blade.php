{{-- <h1>{{$tenants}}</h1> --}}
<div class="container-fluid" id="tenant">
    <div class="container intervalSection">
      <div class="row">
        <div class="col-md-4 mb-3 my-auto">
            <h1 class="myTitle mb-5 text-right">Tenant-tenant di <br>Startup Expo 2020</h1>
        </div>
        <div class="col-md-8">

            <div class="card">
                <div class="card-body">
                    <table class="table">
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
                                    <td class=""><span class="fa fa-book mr-2"></span>{{$tenant->nama}}</td>
                                    <td>{{$tenant->kategori_usaha}}</td>
                                    <td><a href="" class="myBtn myBg">See More</a></td>
                                </tr>
                            @endforeach
                            <tr>
                                <td colspan="3">
                                    {{$tenants->links()}}
                                </td>
                            </tr>
                        </tbody>
                    </table>
                    {{-- <div class="row">
                        @foreach ($tenants as $tenant)
                            <div class="col-sm-4 mb-3 text-center" >
                                <img src="{{asset('myAssets/tenant/') . '/' . $tenant->foto}}" alt="" class="rounded-circle img-fluid" style="height:100px;"><br>
                                <span>{{$tenant->nama}}</span>
                            </div>
                        @endforeach
                        <div class="col-sm-4 offset-4 text-center mt-2">
                            {{$tenants->links()}}
                        </div>
                    </div> --}}
                </div>
            </div>

        </div>
      </div>
    </div>
</div>
