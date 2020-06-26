@extends('panelAdmin.layout.index')
@section('title')
    index streaming
@endsection
@section('content')
    <a href="{{route('streaming.create')}}" class="btn btn-sm btn-primary mb-2">Add</a>
    <table class="table table-hover">
        <thead>
            <tr>
                <th>Judul</th>
                <th>Deskripsi</th>
                <th>Tanggal Tayang</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($streamings as $streaming)
                <tr>
                    <td scope="row">{{$streaming->judul}}</td>
                    <td>{{$streaming->deskripsi}}</td>
                    <td>{{date('d / M / Y', strtotime($streaming->tanggal_tayang))}}</td>
                    <td>
                        <form action="{{route('streaming.destroy', $streaming->id)}}" method="POST">
                            @csrf
                            @method('DELETE')
                            <a href="{{route('streaming.edit', $streaming->id)}}" class="btn btn-sm btn-success mr-2">Edit</a>
                            <button type="submit" class="btn btn-sm btn-danger">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

@endsection
