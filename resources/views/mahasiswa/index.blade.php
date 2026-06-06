@extends('layouts.app')
@section('title', 'Data Mahasiswa')
@section('content')
<h1>Data Mahasiswa</h1>
<form action="/mahasiswa/store" method="POST">
    @csrf
    <label>Nama</label>
    <input type="text" name="nama">
    <label>NIM</label>
    <input type="text" name="nim">
    <label>Jurusan</label>
    <input type="text" name="jurusan">
    <button type="submit">
        Simpan
    </button>
</form>
<table>
    <tr>
        <th>Nama</th>
        <th>NIM</th>
        <th>Jurusan</th>
        <th>Aksi</th>
    </tr>
    @foreach ($data as $mhs)
    <tr>
        <td>{{ $mhs->nama }}</td>
        <td>{{ $mhs->nim }}</td>
        <td>{{ $mhs->jurusan }}</td>
        <td>
            <a href="/mahasiswa/edit/{{ $mhs->id }}" class="btn-edit">
                Edit
            </a>

            <a href="/mahasiswa/delete/{{ $mhs->id }}" class="btn-hapus">
                Hapus
            </a>
        </td>
    </tr>
    @endforeach
</table>
@endsection
