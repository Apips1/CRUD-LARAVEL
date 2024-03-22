<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Edit Form</title>
  <!-- Bootstrap CSS -->
  <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
  <div class="container">
    <h1>Edit Form</h1>
    <form action="{{ route('mahasiswa.update', $edit->id) }}" method="POST">
        @csrf
         @method('put')
      <div class="form-group">
        <label for="inputNim">Nim</label>
        <input name="nim" type="text" class="form-control" id="inputNim" placeholder="Enter your nim" value="{{ $edit->nim }}">
      </div>
      <div class="form-group">
        <label for="inputName">Name</label>
        <input name="nama" type="text" class="form-control" id="inputName" placeholder="Enter your name" value="{{ $edit->nama }}">
      </div>
      <div class="form-group">
        <label for="inputEmail">Email</label>
        <input name="email" type="email" class="form-control" id="inputEmail" placeholder="Enter your email" value="{{ $edit->email }}">
      </div>
      <div class="form-group">
        <label for="inputJurusan">Jurusan</label>
        <input name="jurusan" type="text" class="form-control" id="inputJurusan" placeholder="Enter your Jurusan" value="{{ $edit->jurusan }}">
      </div>
      <div class="form-group">
        <label for="inputProdi">Prodi</label>
        <input name="prodi" type="text" class="form-control" id="inputProdi" placeholder="Enter your Prodi" value="{{ $edit->prodi }}">
      </div>
      <button type="submit" class="btn btn-primary">Submit</button>
    </form>
  </div>
  <!-- Bootstrap JS (optional, only if you need JavaScript features) -->
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
