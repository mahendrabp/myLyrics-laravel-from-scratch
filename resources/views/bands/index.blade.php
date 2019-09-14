@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        @foreach ($bands as $band)
        <div class="col-md-4">
            <div class="card">
                <img src="{{url('storage/'. $band->poster)}}" alt="" class="card-img-top">
                <div class="card-body">
                    <a href="{{route('bands.show',$band)}}">{{$band->name}}</a>
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