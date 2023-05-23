<div class="form-group" style="margin:10px">
    <label for="">{{$label}}</label>
    <input type="{{$type}}" name="{{$name}}" id="">
    <span class="text-danger">
        {{-- @error('name')
            {{$message}}
        @enderror --}}
    </span>
</div>