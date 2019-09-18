@extends('layouts.app')
@section('title',"{$song->title} - {$song->band->name}")
@section('content')
<div class="container">
    <div class="row justify-content-center mb-3">
        <div class="col-md-10 ">
            <div class="card shadow-lg mb-3">
                <a href=""><img src="{{url('storage/'. $song->band->poster)}}" alt="" class="card-img-top"></a>
                <div class="card-body">
                    <div class="text-center">
                        <h2 class="mb-0"><a href="{{route('bands.show',$song->band)}}">{{$song->band->name}}</a></h2>
                        <small>{{$song->album->name}}</small><br>
                        @if (Auth::check())
                        <a href="{{route('songs.edit',$song)}}">Edit</a>
                        @endif

                        <br>
                        <h3>"{{$song->title}}"</h3>
                        <hr>
                        {!!nl2br($song->lyric)!!}
                    </div>
                </div>

            </div>

        </div>
    </div>



</div>
</div>
@endsection