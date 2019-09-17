@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center mb-3">
        <div class="col-md-8">
            <div class="card shadow-lg mb-3">
                <a href=""><img src="{{url('storage/'. $band->poster)}}" alt="" class="card-img-top"></a>
                <div class="card-body">
                    <h4 class="mb-0">{{$band->name}}</h4>
                </div>
                <div class="card-footer">
                    @foreach ($band->genres as $genre)
                    <span class="badge badge-primary">{{$genre->name}}</span>
                    @endforeach
                </div>
            </div>

            @foreach ($albums as $album)
            <div class="card card-body border-0 shadow">
                <h3 class="card-title">{{$album->name}}</h3>
                @foreach ($album->songs as $song)
                <p>{{$song->title}}</p>
                @endforeach
            </div>
            @endforeach
        </div>

    </div>



</div>
</div>
@endsection