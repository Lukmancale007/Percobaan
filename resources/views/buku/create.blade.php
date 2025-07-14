<!DOCTYPE html>
<html>

<head>
    <title>Tambah Buku</title>
</head>

<body>
    <h1>Tambah Buku</h1>
    <form method="POST" action="{{ route('buku.store') }}">
        @csrf
        Judul: <input type="text" name="judul"><br>
        Penulis: <input type="text" name="penulis"><br>
        Tahun Terbit: <input type="text" name="tahun_terbit"><br>
        Genre: <input type="text" name="genre"><br>
        <button type="submit">Simpan</button>
    </form>
</body>

</html>
