@extends('layout2.main')

@section('title', 'Edit Perpustakaan')

@section('content')
<div class="container">
    <h2 class="my-4 mx-5">Edit Data Perpustakaan</h2>
    <div class="row justify-content-center">
        <div class="col-8">
            <div class="card">
                <div class="card-body">
                    <form action="/updateperpustakaan/{{ $data->id }}" method="POST">
                        @csrf
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Nama Buku</label>
                            <input type="text" name="namabuku" class="form-control" id="exampleInputEmail1"
                                aria-describedby="emailHelp" value="{{ $data->namabuku }}">
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Jenis Buku</label>
                            <select class="form-select" name="jenisbuku" aria-label="Default select example">
                                <option selected>{{ $data->jenisbuku }}</option>
                                <option value="1">Romance</option>
                                <option value="2">Horor</option>
                                <option value="3">Sci-Fi</option>
                                <option value="4">Novel</option>
                                <option value="5">History</option>
                                <option value="6">bisnis and economy</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Pengarang</label>
                            <input type="text" name="pengarang" class="form-control" id="exampleInputEmail1"
                                aria-describedby="emailHelp" value="{{ $data->pengarang }}">
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Penerbit</label>
                            <input type="text" name="penerbit" class="form-control" id="exampleInputEmail1"
                                aria-describedby="emailHelp" value="{{ $data->penerbit }}">
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Tahun terbit</label>
                            <input type="text" name="tahunterbit" class="form-control" id="exampleInputEmail1"
                                aria-describedby="emailHelp" value="{{ $data->tahunterbit }}">
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection