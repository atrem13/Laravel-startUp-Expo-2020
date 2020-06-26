@extends('panelAdmin.layout.index')
@section('title')
    create streaming
@endsection
@section('content')
    <form action="{{route('streaming.store')}}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="row">
            <div class="col-sm-6 mb-2">
                <div class="form-group">
                    <label for="">Judul</label>
                    <input type="text" name="judul" class="form-control">
                </div>
            </div>
            <div class="col-sm-6 mb-2">
                <div class="form-group">
                    <label for="">Tanggal Tayang</label>
                    <input type="date" name="tanggal_tayang" class="form-control" min="{{date('Y-m-d')}}" value="{{ date('Y-m-d') }}">
                </div>
            </div>
            <div class="col-sm-12">
                <div class="form-group">
                    <label for="">Deskripsi</label>
                    <textarea name="deskripsi" class="form-control"></textarea>
                </div>
            </div>
            <div class="col-sm-6 mb-2">
                <div class="form-group">
                    <label for="">Link</label>
                    <input type="text" name="link" class="form-control">
                </div>
            </div>
            <div class="col-sm-6 mb-2">
                <label for="">Foto</label>
                <input type="file" name="foto" class="form-control-file">
            </div>
            <div class="col sm-12 mb-2 text-right">
                <button type="submit" class="btn btn-primary">Save</button>
            </div>
        </div>
    </form>
@endsection
