@extends('panelAdmin.layout.index')
@section('title')
    index galery
@endsection
@section('content')
    <a href="{{route('galery.create')}}" class="btn btn-primary mb-2">Add</a>
    <table class="table table-hover">
        <thead>
            <tr>
                <th>Nama</th>
                <th>Foto</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($galerys as $galery)
                <tr>
                    <td scope="row">{{$galery->nama}}</td>
                    <td><img src="{{asset('/myAssets/galery/'. $galery->foto)}}" class="img-fluid" alt="" width="100px;"></td>
                    <td>
                        <form action="{{route('galery.destroy', $galery->id)}}" method="POST">
                            @method('DELETE')
                            @csrf
                            <a href="{{route('galery.edit', $galery->id)}}" class="btn btn-sm btn-success mr-2">Edit</a>
                            <button type="submit" class="btn btn-sm btn-danger">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
