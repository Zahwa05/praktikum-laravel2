<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Mahasiswa</title>
</head>
<body>
    <table border="1">
        <tr>
            <th>Nama</th>
            <th>NIM</th>
            <th>Jurusan</th>
        </tr>
        @foreach ($data as $mhs)
        <tr>
            <td>{{ $m->nama }}</td>
            <td>{{ $m->nim }}</td>
            <td>{{ $m->jurusan }}</td>
            <td>
                <a href="/mahasiswa/edit/{{ $m->id }}">Edit</a>
                <a href="/mahasiswa/delete/{{ $m->id }}">Hapus</a>
            </td>
        </tr>

        <h1>Edit Mahasiswa</h1>
            <form action="/mahasiswa/update/{{ $m->id }}" method="POST">
                 @csrf
                 Nama: <input type="text" name="nama" value="{{ $m->nama }}"><br>
                 NIM: <input type="text" name="nim" value="{{ $m->nim }}"><br>
                 Jurusan: <input type="text" name="jurusan" value="{{ $m->jurusan }}"><br><button type="submit">Update</button>
            </form>
        @endforeach
    </table>
</body>
</html>
