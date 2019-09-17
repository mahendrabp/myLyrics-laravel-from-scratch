@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        @foreach ($bands as $band)
        <div class="col-md-3">
            <div class="card shadow-lg">

                <a href="{{route('bands.show',$band)}}"><img src="{{url('storage/'. $band->poster)}}" alt=""
                        class="card-img-top"></a>
                <div class="card-body">
                    <h4 class="mb-0"><a href="{{route('bands.show',$band)}}">{{$band->name}}</a></h4>

                </div>

                <div class="card-footer">
                    @foreach ($band->genres as $genre)
                    <span class="badge badge-primary">{{$genre->name}}</span>
                    @endforeach
                </div>

            </div>
        </div>
        @endforeach
    </div>
</div>
</div>
@endsection