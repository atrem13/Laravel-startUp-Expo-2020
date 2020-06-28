@extends('panelAdmin.layout.index')
@section('title')
    create galery
@endsection
@section('content')
    @if ($errors->any())
        <ul class="alert alert-danger">
            @foreach ($errors->all() as $error)
                <li>{{$error}}</li>
            @endforeach
        </ul>
    @endif
    <form action="{{route('galery.store')}}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="row">
            <div class="col-sm-12 col-md-6 mb-3">
                <div class="form-group">
                    <label for="">Nama</label>
                    <input type="text" name="nama" class="form-control">
                </div>
            </div>
            <div class="col-sm-12 col-md-6 mb-3">
                <div class="form-group">
                    <label for="">Foto</label>
                    <input type="file" required name="foto" class="form-control-file">
                </div>
            </div>
            <div class="col-sm-12 text-right">
                <button type="submit" class="btn btn-primary">Save</button>
            </div>
        </div>
    </form>
@endsection

