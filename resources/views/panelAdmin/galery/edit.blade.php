@extends('panelAdmin.layout.index')
@section('title')
    create galery
@endsection
@section('content')
    <form action="{{route('galery.update', $galery->id)}}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="row">
            <div class="col-sm-12 col-md-6 mb-3">
                <div class="form-group">
                    <label for="">Nama</label>
                    <input type="text" name="nama" class="form-control" value="{{$galery->nama}}">
                </div>
            </div>
            <div class="col-sm-12 col-md-6 mb-3">
                <div class="form-group">
                    <label for="">Foto</label>
                    <input type="file" name="foto" class="form-control-file">
                </div>
                <div class="row">
                    <div class="col-sm-12">
                        <img src="{{asset('/myAssets/galery/'. $galery->foto)}}" alt="" class="img-fluid">
                    </div>
                </div>
            </div>
            <div class="col-sm-12 text-right">
                <button type="submit" class="btn btn-success">Update</button>
            </div>
        </div>
    </form>
@endsection

