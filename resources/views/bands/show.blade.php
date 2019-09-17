@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">

        <div class="card shadow-lg">
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

    </div>
</div>
</div>
@endsection