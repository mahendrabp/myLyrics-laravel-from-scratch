@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-3">
            @include('dashboard.partials.sidebar')
        </div>
        <div class="col-md-9">
            <div class="card card-body mb-3">
                <h3 class="card-title mb-4"> Create Album</h3>

                <form action="{{route('albums.store')}}" method="post" enctype="multipart/form-data">
                    @csrf
                    @include('albums.partials.form',[
                    'album' => new App\Album,
                    'submit' => 'Create'
                    ])
                </form>
            </div>

            {{-- @if ($albums->count())
            <div class="card card-body">
                <h3 class="card-title">All Albums</h3>
                <table class="table">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Album</th>
                            <th>Band</th>
                            <th>Edit</th>
                        </tr>
                    </thead>
                    <tbody></tbody>
                    @php
                    $no = 1;
                    @endphp

                    @foreach ($albums as $album)
                    <tr>
                        <td>{{$no}}</td>
            <td>{{$album->name}}</td>
            <td>{{$album->band->name}}</td>
            <td>@include('albums.delete')</td>
            </tr>
            @php
            $no++;
            @endphp
            @endforeach
            </tbody>
            </table>
        </div>
        @endif --}}

    </div>
</div>
</div>
@endsection