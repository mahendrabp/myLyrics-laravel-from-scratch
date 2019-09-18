@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            {{-- <div class="card m-5">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
        </div>
        @endif
        You are logged in!
    </div>
</div> --}}


{{-- <input class="form-control mb-3" type="text" placeholder="Search" aria-label="Search any Bands"> --}}
<div class="col-md-12">

</div>
<!-- Search form -->
<form action="" method="GET">
    <div class="col-md-12">
        <input value="" name="keyword" class="form-control mb-3" type="text" placeholder="Masukan band untuk filter...">
        <input type="submit" value="Filter" class="btn btn-primary">
    </div>
</form>


<div class="bg-white p-2">
    @foreach (range('A','Z') as $alphabet)

    <a href="{{route('filters.show',$alphabet)}}" class="mr-2">{{$alphabet}}</a>
    @endforeach
</div>
<div class="row">
    @if ($bands->count())
    @foreach ($bands as $band)
    <div class="col-md-3 mb-4">
        <div class="card shadow-lg">
            <a href="{{route('bands.show',$band)}}"><img src="{{url('storage/'. $band->poster)}}" alt=""
                    class="card-img-top"></a>
            <div class="card-body">
                <h4 class="mb-0 card-title text-uppercase"><a href="{{route('bands.show',$band)}}">{{$band->name}}</a>
                </h4>
                @foreach ($band->genres as $genre)
                <a href="{{route('genres.show',$genre)}}"><small>{{$genre->name}}</small></a>
                @endforeach
            </div>
            {{-- <div class="card-footer">
                            @foreach ($band->genres as $genre)
                            <span class="badge badge-primary">{{$genre->name}}</span>
            @endforeach
        </div> --}}
    </div>
</div>
@endforeach
@else
<div class="col-md-12">There are No Band</div>
@endif



</div>


</div>
</div>
</div>
@endsection