<div class="form-gorup mb-3">
    <input type="file" name="poster" id="poster">
</div>

<div class="form-group">
    <label for="name" class="control-label">Name</label>
    <input type="text" name="name" id="name" value="{{$band->name ?? old('name')}}"
        class="form-control {{$errors->has('name') ? 'is-invalid' : ''}}">
    {!! $errors->first('name','<span class="invalid-feedback">:message</span>') !!}
</div>

<div class="form-group">
    <label for="genres" class="control-label">Genre</label>
    <select name="genres[]" id="select-2" class="form-control" multiple>
        @foreach ($genres as $genre)
        <option value="{{$genre->id}}">{{$genre->name}}</option>
        @endforeach
    </select>
</div>

<div class="form-group">
    <button type="submit" class="btn btn-primary">{{$submit}}</button>
</div>