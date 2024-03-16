<!DOCTYPE html>
<html>
<head>
    <title>Registrasi Siswa</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <h1 class="text-center mt-5">Registrasi Siswa</h1>
        <form method="POST" action="{{ route('register.submit') }}" class="mt-5">
            @csrf
            <div class="form-group">
                <label for="nama_depan">Nama Depan:</label> 
                <input type="text" id="nama_depan" name="nama_depan" class="form-control">
            </div>
            <div class="form-group">
                <label for="nama_belakang">Nama Belakang:</label>
                <input type="text" id="nama_belakang" name="nama_belakang" class="form-control">
            </div>
            <div class="form-group">
                <label for="jenis_kelamin">Jenis Kelamin:</label>
                <input type="text" id="jenis_kelamin" name="jenis_kelamin" class="form-control">
            </div>
            <div class="form-group">
                <label for="agama">Agama:</label>
                <input type="text" id="agama" name="agama" class="form-control">
            </div>
            <div class="form-group">
                <label for="alamat">Alamat:</label>
                <input type="text" id="alamat" name="alamat" class="form-control">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button></form>
    </div>
</body>
</html>