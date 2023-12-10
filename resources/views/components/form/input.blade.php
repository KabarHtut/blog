@props(['name', 'type' => 'text', 'value'=>''])
<x-form.input-wapper>
    <x-form.label :name="$name" />
    <input type="{{$type}}" name="{{$name}}" class="form-control" id="{{$name}}"
        value="{{old($name,$value)}}">
    <x-error :name="$name" />
</x-form.input-wapper>

