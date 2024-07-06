@extends('layouts.app')

@section('content')
<h1>This is Main Page</h1>    
{{ print_r(URL('')) }}
<img src="{{ asset('storage/google.png') }}" 
     width="100"
     height="100"
     alt="">
@endsection