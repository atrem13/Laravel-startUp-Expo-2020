@extends('panelAdmin.layout.index')
@section('title')
    edit streaming
@endsection
@section('content')
    <form action="{{route('streaming.update', $streaming->id)}}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="row">
            <div class="col-sm-6 mb-2">
                <div class="form-group">
                    <label for="">Judul</label>
                    <input type="text" name="judul" class="form-control" value="{{$streaming->judul}}">
                </div>
            </div>
            <div class="col-sm-6 mb-2">
                <div class="form-group">
                    <label for="">Tanggal Tayang</label>
                    <input type="date" name="tanggal_tayang" class="form-control" min="{{date('Y-m-d')}}" value="{{$streaming->tanggal_tayang}}">
                </div>
            </div>
            <div class="col-sm-12">
                <div class="form-group">
                    <label for="">Deskripsi</label>
                    <textarea name="deskripsi" class="form-control">{{$streaming->deskripsi}}</textarea>
                </div>
            </div>
            <div class="col-sm-6 mb-2">
                <div class="form-group">
                    <label for="">Link</label>
                    <input type="text" name="link" class="form-control" value="{{$streaming->link}}">
                </div>
            </div>
            <div class="col-sm-6 mb-2">
                <label for="">Foto</label>
                <input type="file" name="foto" class="form-control-file">
                <div class="row mt-3">
                    <div class="col-sm-4">
                        <img src="{{asset('myAssets/event'. '/' . $streaming->foto)}}" class="img-fluid" alt="">
                    </div>
                </div>
            </div>
            <div class="col sm-12 mb-2 text-right">
                <button type="submit" class="btn btn-success">Update</button>
            </div>
        </div>
    </form>
@endsection
