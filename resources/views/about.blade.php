@extends('layouts.app')

@section('content')
<h1>This is About Page 1</h1> 
{{ 
    $x = 10;
}}
@if ($x>2)
    <h2>x is getter than 2</h2>
@elseif ($x<2)
    <h2>x is less than 2</h2>
@else
    <h2>All conditions are not math</h2>
@endif

{{-- @unless(empty($name))
    <h2>Name is not empty</h2>
@endunless --}}


{{-- @empty(!($name))
    <h2>Name is not empty, right!</h2>
@endempty --}}
    
{{-- @switch($name)
    @case('Duy')
        <h2>This is mr.Duy</h2>
        @break
    @case('Dũng')
        <h2>This is mr.Dung</h2>
        @break
    @default
        <h2>No one selected</h2>
@endswitch

@for ($i = 0; $i < 10; $i++)
    <h2>i = {{ $i }}</h2>
@endfor --}}

@foreach ($names as $item)
    <h2>name: {{ $item }}</h2>
@endforeach
@endsection