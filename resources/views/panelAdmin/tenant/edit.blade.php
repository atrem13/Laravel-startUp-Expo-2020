@extends('panelAdmin.layout.index')
@section('title')
    edit tenant
@endsection
@section('content')
    <form action="{{route('tenant.update', $tenant->id)}}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="row">
            <div class="col-sm-6 mb-2">
                <div class="form-group">
                    <label for="">Nama</label>
                    <input type="text" name="nama" class="form-control" value="{{$tenant->nama}}">
                </div>
            </div>
            <div class="col-sm-6 mb-2">
                <div class="form-group">
                    <label for="">Kategori Usaha</label>
                    <input type="text" name="kategori_usaha" class="form-control" value="{{$tenant->kategori_usaha}}">
                </div>
            </div>
            <div class="col-sm-12 mb-2">
                <div class="form-group">
                    <label for="">Deskripsi</label>
                    <textarea name="deskripsi" class="form-control">{{$tenant->deskripsi}}</textarea>
                </div>
            </div>
            <div class="col-sm-6 mb-2">
                <div class="form-group">
                    <label for="">Website</label>
                    <input type="text" name="link" class="form-control" value="{{$tenant->link}}">
                </div>
            </div>
            <div class="col-sm-6 mb-2">
                <div class="form-group">
                    <label for="">Youtube</label>
                    <input type="text" name="video" class="form-control" value="{{$tenant->video}}">
                </div>
            </div>
            <div class="col-sm-12 mb-2">
                <div class="row">
                    <div class="col-sm-4">
                        <img src="{{asset('myAssets/tenant' . '/' . $tenant->foto)}}" alt="" class="img-fluid">
                    </div>
                </div>
                <div class="form-group">
                    <label for="">Foto</label>
                    <input type="file" name="foto" class="form-control-file" value="{{asset('myAssets/tenant/' . '/' . $tenant->foto)}}">
                    {{-- <input type="hidden"> --}}
                </div>
                {{-- <div class="custom-file">
                    <input type="file" class="custom-file-input" id="myFoto" name="foto" required>
                    <label class="custom-file-label" for="myFoto">Choose file...</label>
                    <div class="invalid-feedback">Example invalid custom file feedback</div>
                </div> --}}
            </div>
            <div class="col-sm-12 mb-2 text-right">
                <button type="submit" class="btn btn-sm btn-primary">Save</button>
            </div>
        </div>
    </form>
@endsection
