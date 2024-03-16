<!DOCTYPE html>
<html>
<head>
    <title>Edit Data Siswa</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <h1 class="mt-5">Edit Data Siswa</h1>
        <form action="{{ route('siswa.update', $siswa->id) }}" method="POST">
            @csrf
            @method('PUT')

            <div class="form-group">
                <label for="nama_depan">Nama Depan: </label>
                <input type="text" id="nama_depan" name="nama_depan" class="form-control" value="{{ $siswa->nama_depan }}">
            </div>

            <div class="form-group">
                <label for="nama_belakang">Nama Belakang:</label>
                <input type="text" id="nama_belakang" name="nama_belakang" class="form-control" value="{{ $siswa->nama_belakang }}">
            </div>

            <div class="form-group">
                <label for="jenis_kelamin">Jenis Kelamin:</label>
                <input type="text" id="jenis_kelamin" name="jenis_kelamin" class="form-control" value="{{ $siswa->jenis_kelamin }}">
            </div>

            <div class="form-group">
                <label for="agama">Agama:</label>
                <input type="text" id="agama" name="agama" class="form-control" value="{{ $siswa->agama }}">
            </div>

            <div class="form-group">
                <label for="alamat">Alamat:</label>
                <textarea id="alamat" name="alamat" class="form-control">{{ $siswa->alamat }}</textarea>
            </div>

            <button type="submit" class="btn btn-primary">Simpan</button>
        </form>
    </div>
</body>
</html>