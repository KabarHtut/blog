@props(['name'])
<select name="{{$name}}" id="{{$name}}" class="form-control">
    {{$slot}}
</select>
