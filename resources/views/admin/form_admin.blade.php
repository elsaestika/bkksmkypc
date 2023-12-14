@extends('dashboard')
@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <script src="{{ asset('assets/js/config.js') }}"></script>
</head>
<body>
    <div class="container-fluid">
        <div class="col-md-6">
            <div class="card">
                <div class="card-body">
                    <form action="{{ $action }}" method="POST" enctype="multipart/form-data" class="">
                        @csrf
                        <div class="row">
                            <div class="col-lg-12 col-6">
                                <h5 class="text-center fw-bold">Form Tambah Admin</h5>
                                <div class="input-icon mb-3">
                                    <label for="form" class="form-label">Nama</label>
                                    <input type="text" maxlength="" value="" id="nama" class="form-control" name="nama">
                                </div>
                                <div class="input-icon mb-3">
                                    <label for="form" class="form-label">Email</label>
                                    <input type="email" value="" id="email" class="form-control" name="email" >
                                </div>
                                <div class="input-icon mb-3">
                                    <label for="form" class="form-label">Kontak</label>
                                    <input type="text" value="" id="kontak" class="form-control" name="kontak">
                                </div>
                                <div class="row mt-2">
                                    <div class="col">
                                        <div class="form-group">
                                            <button type="submit" value="{{ $tombol }}" class="btn btn-primary">Simpan</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
@endsection

