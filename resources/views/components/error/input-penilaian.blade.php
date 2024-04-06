@props(['err', 'message' => 'Rentang nilai 0 - 100'])

<div id="{{$err}}-error" class="invalid-feedback" 
style="display: none;"
>
    {{$message}}
</div>