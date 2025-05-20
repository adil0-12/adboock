@props(['type'])
<div class="alert alert-{{ $type }}" role="alert">
    <strong>Oops!</strong> {{$slot}}
</div>
