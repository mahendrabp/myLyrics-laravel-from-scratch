@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-3">
            @include('dashboard.partials.sidebar')
        </div>
        <div class="col-md-9">
            <div class="card card-body mb-3">
                <h3 class="card-title">Edit Album:{{$album->name}}</h3>
                <form action="{{route('albums.update',$album)}}" method="post" autocomplete="off"
                    enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    @include('albums.partials.form',['submit' => 'Edit'])
                </form>
                <hr>
                <form action="{{route('albums.destroy',$album)}}" method="post" autocomplete="off"
                    enctype="multipart/form-data">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger"
                        onclick="return confirm('Anda yakin ingin menghapus data ini?')">Delete</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection