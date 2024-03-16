<!DOCTYPE html>
<html>
<head>
    <title>Data Siswa</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>

    <div class="container mt-5">
        <h1 class="text-center mb-5">Daftar Siswa </h1>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th scope="col">NAMA DEPAN</th>
                    <th scope="col">NAMA BELAKANG</th>
                    <th scope="col">JENIS KELAMIN</th>
                    <th scope="col">AGAMA</th>
                    <th scope="col">ALAMAT</th>
                    <th scope="col">AKSI</th>
                </tr>
            </thead>
            <tbody>
                @foreach($data_siswa as $siswa)
                <tr>
                    <td>{{ $siswa->nama_depan }}</td>
                    <td>{{ $siswa->nama_belakang }}</td>
                    <td>{{ $siswa->jenis_kelamin }}</td>
                    <td>{{ $siswa->agama }}</td>
                    <td>{{ $siswa->alamat }}</td>
                    <td>
                        <!-- Tombol Edit -->
                        <a href="{{ route('siswa.edit', $siswa->id) }}" class="btn btn-primary">Edit</a>
                        
                        <!-- Tombol Hapus -->
                        <form action="{{ route('siswa.delete', $siswa->id) }}" method="POST" style="display: inline-block;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Hapus</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>

        <!-- Tambahan: Tombol Register -->
        <a href="{{ route('register') }}" class="btn btn-success">Register</a>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" 
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>