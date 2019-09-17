<div class="form-gorup mb-3">
    <input type="file" name="cover" id="cover">
</div>

<div class="form-group">
    <label for="name" class="control-label">Name Album</label>
    <input type="text" name="name" id="name" value="{{old('name') ?? $album->name}}"
        class="form-control {{$errors->has('name') ? 'is-invalid' : ''}}">
    {!! $errors->first('name','<span class="invalid-feedback">:message</span>') !!}
</div>

<div class="form-group">
    <label for="band" class="control-label">Band</label>
    <select name="band" id="select-2" class="form-control">
        <option disabled selected>Pilih band</option>
        @foreach ($bands as $band)
        <option {{ $band->id == $album->band_id ? 'selected' : ''}} value="{{$band->id}}">{{$band->name}}</option>
        @endforeach
    </select>
</div>

<div class="form-group">
    <button type="submit" class="btn btn-primary">Submit</button>
</div>