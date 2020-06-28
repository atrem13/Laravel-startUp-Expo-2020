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
                    <div class="row">
                        @for ($i = 0; $i < 10; $i++)
                            @foreach ($tenants as $tenant)
                                <div class="col-sm-2 mb-2 text-center" >
                                    <img src="{{asset('myAssets/tenant/') . '/' . $tenant->foto}}" alt="" class="rounded-circle img-fluid" style="height:80px;"><br>
                                    <span>{{$tenant->nama}}</span>
                                </div>
                            @endforeach
                        @endfor
                    </div>
                </div>
            </div>

        </div>
      </div>
    </div>
</div>
