@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-3">
            @include('dashboard.partials.sidebar')
        </div>
        <div class="col-md-9">
            <div class="card card-body mb-2">
                <h3 class="card-title"> Create Genre</h3>

                <form action="{{route('genres.store')}}" method="post">
                    @csrf
                    <div class="form-group">
                        <label for="name" class="control-label">Name</label>
                        <input type="text" name="name" id="name"
                            class="form-control {{$errors->has('name') ? 'is-invalid' : ''}}">
                        {!! $errors->first('name','<span class="invalid-feedback">:message</span>') !!}
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-primary">Create </button>
                    </div>

                </form>
            </div>

            @if ($genres->count())
            <div class="card card-body">
                <h3 class="card-title">All Genre</h3>
                <table class="table">
                    <thead>
                        <tr>
                            <th>Name</th>
                        </tr>
                    </thead>
                    <tbody>

                        @foreach ($genres as $genre)
                        <tr>
                            <td>{{$genre->name}}</td>
                        </tr>
                        @endforeach


                    </tbody>
                </table>
            </div>
            @endif

        </div>
    </div>
</div>
@endsection