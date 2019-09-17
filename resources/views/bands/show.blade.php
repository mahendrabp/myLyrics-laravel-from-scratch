@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center mb-3">
        <div class="col-md-10">
            <div class="card shadow-lg mb-3">
                <a href=""><img src="{{url('storage/'. $band->poster)}}" alt="" class="card-img-top"></a>
                <div class="card-body">
                    <div class="text-center">
                        <h1 class="mb-0">{{$band->name}}</h1>
                        <div class="mb-4">@foreach ($band->genres as $genre)
                            <span class="badge badge-primary">{{$genre->name}}</span>
                            @endforeach
                        </div>
                        <hr>

                        @foreach ($albums as $album)

                        <h2 class="card-title">{{$album->name}}</h2>
                        @foreach ($album->songs as $song)
                        <p><a href="{{route('songs.show',[$band,$song])}}">{{$song->title}}</a></p>
                        @endforeach

                        @endforeach
                    </div>

                </div>


            </div>


        </div>

    </div>



</div>
</div>
@endsection