<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>List brands</title>
</head>

<body>
    <h1>Danh sách Brands</h1>
    <a href="{{ route('brands.create') }}">Thêm mới</a>

    @if (session('msg'))
        <h2>{{ session('msg') }}</h2>
    @endif
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Image</th>
                <th>Created at</th>
                <th>Update at</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($data as $item)
                <tr>
                    <td>{{ $item->id }}</td>
                    <td>{{ $item->name }}</td>
                    <td>
                        {{-- <img src="{{ $item->image }}" alt=""> --}}
                        {{ $item->image }}
                    </td>
                    <td>{{ $item->created_at }}</td>
                    <td>{{ $item->updated_at }}</td>
                    <td>
                        <a href="{{ route('brands.show', $item) }}">Show</a>
                        <a href="{{ route('brands.edit', $item) }}">Edit</a>
                        <form action="{{ route('brands.destroy', $item) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit"
                                onclick="return confirm('Are you sure you want to delete')">Delete</a>
                            </button>
                        </form>

                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

    {{ $data->links() }}
</body>

</html>
