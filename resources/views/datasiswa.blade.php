@extends('layout2.main')

@section('content')

    <div class="container pt-5">
    <a href="/tambahsiswa" type="button" class="btn btn-success mb-3">Tambah +</a>
    @if ($message = Session::get('success'))
        <div class="alert alert-success" role="alert">
            {{ $message }}
        </div>  
    @endif 
    <table class="table">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Nama</th>
                <th scope="col">Jenis Kelamin</th>
                <th scope="col">Agama</th>
                <th scope="col">Jurusan</th>
                <th scope="col">No Telepon</th>
                <th scope="col">Alamat</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            @php 
                $no = 1;
            @endphp

            @foreach ($data as $row)
            <tr>
                <th scope="row">{{ $no++ }}</th>
                <td>{{ $row->nama }}</td>
                <td>{{ $row->jeniskelamin }}</td>
                <td>{{ $row->agama }}</td>
                <td>{{ $row->jurusan }}</td>
                <td>0{{ $row->notelepon }}</td>
                <td>{{ $row->alamat }}</td>
                <td>
                <a href="/tampilkandatasiswa/{{ $row->id }}" class="btn btn-warning">Edit</a>
                <a href="/deletedatasiswa/{{ $row->id }}"  class="btn btn-danger">Delete</a>
                </td>
            </tr>
            @endforeach
            
        </tbody>
    </table>
    </div>
    @endsection