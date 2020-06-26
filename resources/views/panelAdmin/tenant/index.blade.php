@extends('panelAdmin.layout.index')
@section('title')
    index tenant
@endsection
@section('content')
    <a href="{{route('tenant.create')}}" class="btn btn-sm btn-primary mb-2">Add</a>
    <table class="table table-hover">
        <thead>
            <tr>
                <th>Nama</th>
                <th>Deskripsi</th>
                <th>Kategori Usaha</th>
                {{-- <th>Webiste</th>
                <th>Youtube</th> --}}
                {{-- <th>Foto</th> --}}
                {{-- <th>Score</th> --}}
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($tenants as $tenant)
                <tr>
                    <td scope="row">{{$tenant->nama}}</td>
                    <td>{{$tenant->deskripsi}}</td>
                    <td>{{$tenant->kategori_usaha}}</td>
                    {{-- <td>{{$tenant->link}}</td>
                    <td>{{$tenant->video}}</td> --}}
                    {{-- <td><img src="{{asset('myAssets/tenant/' . '/' . $tenant->foto)}}" class="img-fluid" alt=""></td> --}}
                    {{-- <td>{{$tenant->score}}</td> --}}
                    <td>
                        <form action="{{route('tenant.destroy', $tenant->id)}}" class="form-inline">
                            <a href="{{route('tenant.edit', $tenant->id)}}" class="btn btn-sm btn-success mr-2">Edit</a>
                            <button type="submit" class="btn btn-sm btn-danger">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
