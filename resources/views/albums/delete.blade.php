<!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#{{$album->slug}}">
    Edit
</button>

<!-- Modal -->
<div class="modal fade" id="{{$album->slug}}" tabindex="-1" role="dialog" aria-labelledby="{{$album->slug}}Label"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="{{$album->slug}}Label">{{$album->name}}</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="{{route('albums.update',$album)}}" method="post" autocomplete="off"
                    enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    @include('albums.partials.form')
                </form>
            </div>
            {{-- <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button>
            </div> --}}
        </div>
    </div>
</div>