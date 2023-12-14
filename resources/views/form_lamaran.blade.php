@extends('dashboard')
@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Form input</title>
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <script src="{{ asset('assets/js/config.js') }}"></script>
</head>
<body>
    <div class="container-fluid">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <form action="{{ $action }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="col-lg-12 col-6">
                                <h5 class="text-center fw-bold">Form Tambah Lamaran</h5>
                                <div class="col mb-0">
                                    <div class="input-icon mb-3">
                                        <label for="form" class="form-label">Pilih Lowongan</label>
                                        {{-- <td>Perusahaan</td> --}}
                                        <select name="id_lowongan" id="id_lowongan" class="form-select">
                                            <option value="">Pilih Bidang kerja</option>
                                            @foreach ($lowongan as $item)
                                                <option selected value="{{ $item->id_lowongan }}">{{ $item->lowongan }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                <div class="input-icon mb-3">
                                    <div class="col mb-0">
                                        <div class="input-icon mb-3">
                                            <label for="form" class="form-label">Alumni</label>
                                            {{-- <td>Perusahaan</td> --}}
                                            <select name="nisn" id="nisn" class="form-select">
                                                <option value="">Pilih Nama</option>
                                                @foreach ($alumni as $item)
                                                    <option selected value="{{ $item->nisn }}">{{ $item->nama_alumni }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                    </div>
                                    <div class="col mb-0">
                                        <div class="input-icon mb-3">
                                            <label for="form" class="form-label">Surat Lamaran</label>
                                            <input type="file" value="" id="surat_lamaran" class="form-control" name="surat_lamaran">
                                        </div>
                                    </div>
                                    <div class="col-mb-0">
                                        <div class="input-icon mb-3">
                                            <label for="form" class="form-label">CV</label>
                                            <input type="file" value="" id="cv" class="form-control" name="cv">
                                        </div>
                                    </div>
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

