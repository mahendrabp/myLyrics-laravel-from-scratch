@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-3">
            @include('dashboard.partials.sidebar')
        </div>
        <div class="col-md-9">
            <div class="card card-body mb-3">

                <h3 class="card-title mb-4">Edit Band</h3>

                <form action="{{route('bands.update',$band)}}" method="post" enctype="multipart/form-data">
                    {{-- parameter yang dikirim adalah $band --}}
                    @method('put')
                    @csrf
                    @include('bands.partials.form',[
                    'submit' => 'Update'
                    ])

                </form>
            </div>
        </div>
    </div>
</div>
@endsection
@section('script')
<script>
    $(document).ready(function (event) { 
        $('#select-2').val({!! json_encode($band->genres()->allRelatedIds()) !!}).trigger('change');
     });
</script>
@endsection