@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-3">
            @include('dashboard.partials.sidebar')
        </div>
        <div class="col-md-9">
            <div class="card card-body mb-3">
                <h3 class="card-title mb-4"> Create Band</h3>

                <form action="{{route('bands.store')}}" method="post" enctype="multipart/form-data">
                    @csrf
                    @include('bands.partials.form',[
                    'submit' => 'Save'
                    ])

                </form>
            </div>

            @if ($bands->count())
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
            @endif

        </div>
    </div>
</div>
@endsection