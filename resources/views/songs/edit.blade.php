@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-3">
            @include('dashboard.partials.sidebar')
        </div>
        <div class="col-md-9">
            <div class="card card-body mb-3">
                <h3 class="card-title mb-4"> Create Songs</h3>

                <form action="{{route('songs.update',$song)}}" method="post" enctype="multipart/form-data">
                    @csrf
                    @method('put')
                    <div class="form-group">
                        <label for="title" class="control-label">Title</label>
                        <input type="text" name="title" id="title" value="{{old('title') ?? $song->title}}"
                            class="form-control {{$errors->has('title') ? 'is-invalid' : ''}}">
                        {!! $errors->first('title','<span class="invalid-feedback">:message</span>') !!}
                    </div>

                    <div class="form-group">
                        <label for="band" class="control-label">Band</label>
                        <select name="band" id="select-2" class="form-control">
                            <option disabled selected>Pilih band</option>
                            @foreach ($bands as $band)
                            <option {{$band->id == $song->band_id ? 'selected':''}} value="{{$band->id}}">
                                {{$band->name}}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="album" class="control-label">Album</label>
                        <select name="album" id="" class="form-control select-2">
                            <option disabled selected>Pilih Album</option>
                            @foreach ($albums as $album)
                            <option {{$album->id == $song->album_id ? 'selected' : ''}} value="{{$album->id}}">
                                {{$album->name}}</option>
                            @endforeach
                        </select>
                    </div>


                    <div class="form-group">
                        <label for="lyric">Lyric</label>
                        <textarea class="form-control rounded-0" id="lyric" rows="10"
                            name="lyric">{{old('lyric') ?? $song->lyric}}</textarea>
                    </div>


                    <div class="form-group">
                        <button type="submit" class="btn btn-primary">Update</button>
                    </div>
                </form>
            </div>

            {{-- @if ($songs->count())
            <div class="card card-body">
                <h3 class="card-title">All Bands</h3>
                <table class="table">
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>Edit</th>
                        </tr>
                    </thead>
                    <tbody>

                        @foreach ($bands as $band)
                        <tr>
                            <td>{{$band->name}}</td>
            <td><a href="{{route('bands.edit',$band)}}">Edit</a></td>
            </tr>
            @endforeach


            </tbody>
            </table>
        </div>
        @endif --}}

    </div>
</div>
</div>
@endsection