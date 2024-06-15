<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cập nhật danh mục : {{ $category->name }}</title>
</head>

<body>
    <h1>Cập nhật danh mục</h1>
    @if (session('msg'))
        <h2>{{ session('msg') }}</h2>
    @endif
    <form action="{{ route('categories.update', $category) }}" method="POST">
        @csrf
        @method('PUT')
        <div>
            <label for="name">Name</label>
            <input type="text" name="name" id="name" value="{{ $category->name }}">
        </div>
        <button type="submit">Save</button>
    </form>
</body>

</html>
