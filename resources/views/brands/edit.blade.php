<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cập nhật brand : {{ $brand->name }}</title>
</head>

<body>
    <h1>Cập nhật brand</h1>
    @if (session('msg'))
        <h2>{{ session('msg') }}</h2>
    @endif
    <form action="{{ route('brands.update', $brand) }}" method="POST">
        @csrf
        @method('PUT')
        <div>
            <label for="name">Name</label>
            <input type="text" name="name" id="name" value="{{ $brand->name }}">
        </div>
        <div>
            <label for="">Ảnh</label>
            <input type="file" name="image" id="image" value="{{ $brand->image }}">
        </div>
        <button type="submit">Save</button>
    </form>
</body>

</html>
