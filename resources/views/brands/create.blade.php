<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Thêm mới brand</title>
</head>

<body>
    <h1>Thêm mới brand</h1>

    <form action="{{ route('brands.store') }}" method="POST">
        @csrf
        <div>
            <label for="name">Name</label>
            <input type="text" name="name" id="name">
        </div>
        <div>
            <label for="">Ảnh</label>
            <input type="file" name="image" id="image">
        </div>
        <button type="submit">Save</button>
    </form>
</body>

</html>
