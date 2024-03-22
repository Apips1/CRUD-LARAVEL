<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap Demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <h1>List Index</h1>
        <div class="container">
            <a class="btn btn-primary" href="{{ route('mahasiswa.create') }}">Create</a>
            </a>
            <form action="{{ route('mahasiswa.index') }}" method="GET" class="form-inline my-2 my-lg-0">
                <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search"
                    name="search" value="{{ $search }}">
                <input type="hidden" name="sort" class="form-control mr-sm-2"
                    value="{{ $sort == 'asc' ? 'desc' : 'asc' }}">
                <button class="btn btn-outline-success my-2 my-sm-0" value="{{ $sort == 'asc' }}">ascending</button>
                <button class="btn btn-outline-success my-2 my-sm-0" value="{{ $sort == 'desc' }}">descending</button>
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
            </form>




        </div>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>Nim</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Jurusan</th>
                    <th>Prodi</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($mahasiswa as $item)
                    <tr>
                        <td>{{ $item->nim }}</td>
                        <td>{{ $item->nama }}</td>
                        <td>{{ $item->email }}</td>
                        <td>{{ $item->jurusan }}</td>
                        <td>{{ $item->prodi }}</td>
                        <td><a class="btn btn-primary" href="{{ route('mahasiswa.edit', $item->id) }}">Edit</a>
                            {{-- <a class="btn btn-danger" href="{{ route('mahasiswa.destroy', $item->id) }}">Delete</a>     --}}
                            <form action="{{ route('mahasiswa.destroy', $item->id) }}" method="POST" class="d-inline">
                                @csrf @method('delete')
                                <button type="submit" class="btn btn-danger">Delete</button>
                            </form>
                        </td> <!-- You can add action buttons here -->
                    </tr>
                @endforeach
            </tbody>
        </table>
        <a href="{{ route('mahasiswa.index') }}" class="btn btn-primary">Back</a>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
</body>

</html>
