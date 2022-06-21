@extends('layout.default')
@section('content')
    <section>
        <div class="container">
            <div class="row">
                <div class="col-md">
                    <form action="{{ url('/store') }}" method="post">
                        {{-- Anti Bot --}}
                        @csrf
                        <label for="nama">Nama</label>
                        <input type="text" name="nama" id="nama" placeholder="Nama Anda" class="form-control mb-3">
                        <label for="nim">Nim</label>
                        <input type="number" name="nim" id="nim" placeholder="NIM Anda" class="form-control mb-3">
                        <label for="alamat">Alamat</label>
                        <textarea type="text" name="alamat" id="alamat" placeholder="Alamat Anda" class="form-control mb-3"></textarea>
                        <button type="submit" class="btn btn-primary">Tambahkan</button>
                    </form>
                </div>
            </div>
        </div>
    </section>
@endsection