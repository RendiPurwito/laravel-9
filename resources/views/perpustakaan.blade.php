@extends('layout2.main')

@section('content')
<div class="container pt-5">
    <a href="/tambahperpustakaan" class="btn btn-success mb-3">Tambah +</a>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Nama Buku</th>
                <th scope="col">Jenis Buku</th>
                <th scope="col">Pengarang</th>
                <th scope="col">Penerbit</th>
                <th scope="col">Tahun Terbit</th>
                <th scope="col">Aksi</th>
            </tr>
        </thead>
        <tbody>
            @php
                $no = 1;
            @endphp
            @foreach ($data as $row)
            <tr>
                <th scope="row">{{ $no++ }}</th>
                <td>{{ $row->namabuku }}</td>
                <td>{{ $row->jenisbuku }}</td>
                <td>{{ $row->pengarang }}</td>
                <td>{{ $row->penerbit }}</td>
                <td>{{ $row->tahunterbit }}</td>
                <td>
                    <a href="/tampilkandataperpustakaan/{{ $row->id }}" class="btn btn-warning">Edit</a>
                    <a href="/deleteperpustakaan/{{ $row->id }}" class="btn btn-danger">Delete</a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection