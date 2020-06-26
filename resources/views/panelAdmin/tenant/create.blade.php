@extends('panelAdmin.layout.index')
@section('title')
    crete tenant
@endsection
@section('content')
    <form action="{{route('tenant.store')}}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="row">
            <div class="col-sm-6 mb-2">
                <div class="form-group">
                    <label for="">Nama</label>
                    <input type="text" name="nama" class="form-control" >
                </div>
            </div>
            <div class="col-sm-6 mb-2">
                <div class="form-group">
                    <label for="">Kategori Usaha</label>
                    <input type="text" name="kategori_usaha" class="form-control">
                </div>
            </div>
            <div class="col-sm-12 mb-2">
                <div class="form-group">
                    <label for="">Deskripsi</label>
                    <textarea name="deskripsi" class="form-control"></textarea>
                </div>
            </div>
            <div class="col-sm-6 mb-2">
                <div class="form-group">
                    <label for="">Website</label>
                    <input type="text" name="link" class="form-control">
                </div>
            </div>
            <div class="col-sm-6 mb-2">
                <div class="form-group">
                    <label for="">Youtube</label>
                    <input type="text" name="video" class="form-control">
                </div>
            </div>
            <div class="col-sm-12 mb-2">
                <div class="form-group">
                    <label for="">Foto</label>
                    <input type="file" name="foto" class="form-control-file">
                </div>
            </div>
            <div class="col-sm-12 mb-2 text-right">
                <button type="submit" class="btn btn-sm btn-primary">Save</button>
            </div>
        </div>
    </form>
@endsection
