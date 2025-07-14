<!DOCTYPE html>
<html>

<head>
    <title>Edit Buku</title>
</head>

<body>
    <h1>Edit Buku</h1>
    <form method="POST" action="{{ route('buku.update', $buku->id) }}">
        @csrf
        @method('PUT')
        Judul: <input type="text" name="judul" value="{{ $buku->judul }}"><br>
        Penulis: <input type="text" name="penulis" value="{{ $buku->penulis }}"><br>
        Tahun Terbit: <input type="text" name="tahun_terbit" value="{{ $buku->tahun_terbit }}"><br>
        Genre: <input type="text" name="genre" value="{{ $buku->genre }}"><br>
        <button type="submit">Update</button>
    </form>
</body>

</html>
