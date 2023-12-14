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
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <form action="{{ $action }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="col-lg-12 col-6">
                                <h5 class="text-center fw-bold">Form Tambah Data</h5>
                                <div class="input-icon mb-3">
                                    <label for="form" class="form-label">Bidang Pekerjaan</label>
                                    <input type="text" value="{{ $lowongan->lowongan }}" id="lowongan" class="form-control" name="lowongan">
                                </div>
                                <div class="row">
                                    <div class="col mb-0">
                                        <div class="input-icon mb-3">
                                            <label for="form" class="form-label">Perusahaan</label>
                                            {{-- <td>Perusahaan</td> --}}
                                            <select name="id_perusahaan" id="id_perusahaan" class="form-select">
                                                <option value="">Pilih Perusahaan</option>
                                                @foreach ($perusahaan as $item)
                                                    <option selected value="{{ $item->id_perusahaan }}">{{ $item->perusahaan }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                    {{-- <div class="col mb-0">
                                        <div class="input-icon mb-3">
                                            <label for="form" class="form-label">Foto</label>
                                            <input type="file" value="" id="foto" class="form-control" name="foto">
                                        </div>
                                    </div> --}}
                                    <div class="col mb-0">
                                        <div class="input-icon mb-3">
                                            <label for="form" class="form-label">Syarat</label>
                                            <input type="text" value="{{ $lowongan->syarat }}" id="syarat" class="form-control" name="syarat" >
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col mb-0">
                                        <div class="input-icon mb-3">
                                            <label for="form" class="form-label">Keahlian</label>
                                            <input type="text" value="{{ $lowongan->keahlian }}" id="keahlian" class="form-control" name="keahlian" >
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col mb-0">
                                        <div class="input-icon mb-3">
                                            <label for="form" class="form-label">Kualifikasi</label>
                                            <input type="text" value="{{ $lowongan->kualifikasi }}" id="kualifikasi" class="form-control" name="kualifikasi" >
                                        </div>
                                    </div>
                                    <div class="col mb-0">
                                        <div class="input-icon mb-3">
                                            <label for="form" class="form-label">Waktu Bekerja</label>
                                            <input type="text" value="{{ $lowongan->jam_kerja }}" id="jam_kerja" class="form-control" name="jam_kerja" >
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col mb-0">
                                        <div class="input-icon mb-3">
                                            <label for="form" class="form-label">Gaji</label>
                                            <input type="text" value="{{ $lowongan->gaji }}" id="gaji" class="form-control" name="gaji" >
                                        </div>
                                    </div>
                                    <div class="col mb-0">
                                        <div class="input-icon mb-3">
                                            <label for="form" class="form-label">Pendidikan</label>
                                            <input type="text" value="{{ $lowongan->pendidikan }}" id="pendidikan" class="form-control" name="pendidikan" >
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col mb-0">
                                        <div class="input-icon mb-3">
                                            <label for="form" class="form-label">Tipe Pekerjaan</label>
                                            <input type="text" value="{{ $lowongan->tipe_pekerjaan }}" id="tipe_pekerjaan" class="form-control" name="tipe_pekerjaan" >
                                        </div>
                                    </div>
                                    <div class="col mb-0">
                                        <div class="input-icon mb-3">
                                            <label for="status" class="form-label">Status</label>
                                            <select name="status" id="status" class="select2 form-select">

                                                @if ($lowongan->status == '0')
                                                {{-- <option value="status">pilih status</option> --}}
                                                <option selected value="0">Pending</option>
                                                <option value="Posting">Posting</option>
                                                @else
                                                <option value="0">Pending</option>
                                                <option selected value="Posting">Posting</option>
                                                @endif
                                            </select>
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
