@extends('layout.default');
@section('content')
    <div class="container">
        <div class="row justify-content-center">
        <div class="col-md">
            <h1 class="text-center">Daftar Mahasiswa</h1>
            <a href="{{ url('create') }}"><button class="btn btn-primary">Tambah Data</button></a>
        </div>
        </div>
        <div class="row justify-content-center">
        <div class="col-md">
            <table class="table mt-5 table-info shadow">
                <thead>
                    <tr>
                        <th scope="col">Id</th>
                        <th scope="col">Nama</th>
                        <th scope="col">NIM</th>
                        <th scope="col">Alamat</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                        @foreach ($data as $list)
                            <tr>
                                <td>{{$list->id}}</td>
                                <td>{{$list->nama}}</td>
                                <td>{{$list->nim}}</td>
                                <td>{{$list->alamat}}</td>
                                <td><a href="{{ url('/show/'.$list->id) }}" class="btn btn-primary">Edit</a><a href="{{ url('/delete/'.$list->id) }}" class="btn btn-danger ms-1">Hapus</a></td>
                            </tr>
                        @endforeach
                </tbody>
            </table>
        </div>
        </div>
    </div>
@endsection