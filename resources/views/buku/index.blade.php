<!DOCTYPE html>
<html>

<head>
    <title>Daftar Buku</title>
</head>

<body>
    <h1>Daftar Buku</h1>
    <a href="{{ route('buku.create') }}">+ Tambah Buku</a>

    @if(session('success'))
    <p style="color: green">{{ session('success') }}</p>
    @endif

    <table border="1" cellpadding="10">
        <tr>
            <th>Judul</th>
            <th>Penulis</th>
            <th>Tahun</th>
            <th>Genre</th>
            <th>Aksi</th>
        </tr>
        @foreach($bukus as $buku)
        <tr>
            <td>{{ $buku->judul }}</td>
            <td>{{ $buku->penulis }}</td>
            <td>{{ $buku->tahun_terbit }}</td>
            <td>{{ $buku->genre }}</td>
            <td>
                <a href="{{ route('buku.edit', $buku->id) }}">Edit</a> |
                <form action="{{ route('buku.destroy', $buku->id) }}" method="POST" style="display:inline">
                    @csrf
                    @method('DELETE')
                    <button onclick="return confirm('Yakin hapus?')">Hapus</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
</body>

</html>
