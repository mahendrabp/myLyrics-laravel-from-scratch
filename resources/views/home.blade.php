@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card m-5">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                    @endif

                    You are logged in!
                </div>
            </div>

            <div class="row">
                @foreach ($bands as $band)
                <div class="col-md-3 mb-4">
                    <div class="card shadow-lg">
                        <a href="{{route('bands.show',$band)}}"><img src="{{url('storage/'. $band->poster)}}" alt=""
                                class="card-img-top"></a>
                        <div class="card-body">
                            <h4 class="mb-0 card-title text-uppercase"><a
                                    href="{{route('bands.show',$band)}}">{{$band->name}}</a></h4>
                        </div>
                        {{-- <div class="card-footer">
                            @foreach ($band->genres as $genre)
                            <span class="badge badge-primary">{{$genre->name}}</span>
                        @endforeach
                    </div> --}}
                </div>
            </div>
            @endforeach

        </div>


    </div>
</div>
</div>
@endsection