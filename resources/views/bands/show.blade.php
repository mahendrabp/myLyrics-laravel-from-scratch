@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">

        <div class="col-md-8">
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

    </div>
</div>
</div>
@endsection