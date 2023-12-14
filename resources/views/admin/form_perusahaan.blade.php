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
                                <h5 class="text-center fw-bold">Form Tambah Data</h5>
                                <div class="input-icon mb-3">
                                    <label for="form" class="form-label">Perusahaan</label>
                                    <input type="text" maxlength="" value="{{ $perusahaan->perusahaan }}" id="perusahaan" class="form-control" name="perusahaan">
                                </div>
                                <div class="input-icon mb-3">
                                    <label for="form" class="form-label">Alamat</label>
                                    <input type="text" value="{{ $perusahaan->alamat }}" id="alamat" class="form-control" name="alamat" >
                                </div>
                                <div class="input-icon mb-3">
                                    <label for="form" class="form-label">Kontak</label>
                                    <input type="text" value="{{ $perusahaan->kontak }}" id="kontak" class="form-control" name="kontak">
                                </div>
                                <div class="input-icon mb-3">
                                    <label for="form" class="form-label">Deskripsi</label>
                                    <input type="text" value="{{ $perusahaan->deskripsi }}" name="deskripsi" class="form-control" id="deskripsi">
                                    {{-- <textarea name="deskripsi" id="deskripsi" cols="50" rows="10" value="">{{$perusahaan->deskripsi}}</textarea> --}}
                                </div>
                                <div class="input-icon mb-3">
                                    <label for="form" class="form-label">Foto</label>
                                    <input type="file" value="" id="foto" class="form-control" name="foto">
                                </div>
                                <div class="input-icon mb-3">
                                    <label for="status" class="form-label">Status</label>
                                    <select name="status" id="status" class="select2 form-select">

                                        @if ($perusahaan->status == '0')
                                        {{-- <option value="status">pilih status</option> --}}
                                        <option selected value="0">Pending</option>
                                        <option value="Posting">Posting</option>
                                        @else
                                        <option value="0">Pending</option>
                                        <option selected value="Posting">Posting</option>
                                        @endif
                                    </select>
                                </div>
                                <div class="row mt-2">
                                    <div class="col">
                                        <div class="form-group">
                                            <button type="submit" value="{{ $tombol }}" class="btn btn-primary">Simpan</button>
                                            {{-- <input type="submit" value="{{ $tombol }}" class="btn btn-primary"> --}}
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

