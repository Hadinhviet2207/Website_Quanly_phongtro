<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    {{-- <h1>Trang chủ</h1>
    <h3>{{ $title }}</h3>
    <p>x: {{ $x }}</p>
    <p>y: {{ $y }}</p> --}}
    {{-- @foreach ($product as $item)
        <h3>{{ $item }}</h3>
    @endforeach --}}
    {{-- {{ $product }} --}}
    <a href="{{ route('products') }}">Link to Products</a>
</body>
</html>