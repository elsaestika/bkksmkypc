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
                    <form action="{{ $action }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="col-lg-12 col-6">
                                <h5 class="text-center fw-bold">Form Tambah Data</h5>
                                <div class="input-icon mb-3">
                                    <label for="form" class="form-label">Nisn</label>
                                    <input type="text" maxlength="" value="{{ $alumni->nisn }}" id="nisn" class="form-control" name="nisn">
                                </div>
                                <div class="input-icon mb-3">
                                    <label for="form" class="form-label">Nis</label>
                                    <input type="text" maxlength="" value="{{ $alumni->nis }}" id="nis" class="form-control" name="nis">
                                </div>
                                <div class="input-icon mb-3">
                                    <label for="form" class="form-label">Foto</label>
                                    <input type="file" value="" id="foto" class="form-control" name="foto">
                                </div>
                                <div class="input-icon mb-3">
                                    <label for="form" class="form-label">Nama Alumni</label>
                                    <input type="text" value="{{ $alumni->nama_alumni }}" id="nama_alumni" class="form-control" name="nama_alumni" >
                                </div>
                                <div class="input-icon mb-3">
                                    <label for="form" class="form-label">Tempat tanggal lahir</label>
                                    <input type="date" value="{{ $alumni->ttl}}" id="ttl" class="form-control" name="ttl" >
                                </div>
                                <div class="input-icon mb-3">
                                    <label for="form" class="form-label">Ktp</label>
                                    <input type="text" value="{{ $alumni->ktp }}" id="ktp" class="form-control" name="ktp" >
                                </div>
                                <div class="row">
                                    <div class="col-12">
                                        <div class="input-icon mb-3">
                                            <td>JENIS KELAMIN</td>
                                            <select name="jk" id="jk" class="form-select">
                                                <option value="">>---Pilih---<</option>
                                                <option value="L" {{ $alumni->jk=='L'?'selected':'' }}>Laki - Laki</option>
                                                <option value="P" {{ $alumni->jk=='P'?'selected':'' }}>Perempuan</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-12">
                                        <div class="input-icon mb-3">
                                            <td>Jurusan</td>
                                            <select name="jurusan" id="jurusan" class="form-select">
                                                <option value="">>---Pilih Jurusan---<</option>
                                                <option value="RPL"{{ $alumni->jurusan=='RPL'?'selected':'' }}>Rekayasa Perangkat Lunak</option>
                                                <option value="DPIB"{{ $alumni->jurusan=='DPIB'?'selected':'' }}>Desain Pemodelan dan Informasi Bangunan</option>
                                                <option value="MM"{{ $alumni->jurusan=='MM'?'selected':'' }}>Multimedia</option>
                                                <option value="TBSM"{{ $alumni->jurusan=='TBSM'?'selected':'' }}>Teknik dan Bisnis Sepeda Motor</option>
                                                <option value="TKJ"{{ $alumni->jurusan=='TKJ'?'selected':'' }}>Teknik Komputer dan Jaringan</option>
                                                <option value="TKRO"{{ $alumni->jurusan=='TKRO'?'selected':'' }}>Teknik Kendaraan Ringan Otomotif</option>
                                                <option value="TEKLIN"{{ $alumni->jurusan=='TEKLIN'?'selected':'' }}>Teknik Elektronika dan Industri</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="input-icon mb-3">
                                    <label for="form" class="form-label">Tahun ajaran</label>
                                    <input type="text" value="{{ $alumni->thn_ajaran }}" id="thn_ajaran" class="form-control" name="thn_ajaran" >
                                </div>
                                <div class="input-icon mb-3">
                                    <label for="form" class="form-label">Alamat</label>
                                    <input type="text" value="{{ $alumni->alamat }}" id="alamat" class="form-control" name="alamat" >
                                </div>
                                <div class="input-icon mb-3">
                                    <label for="form" class="form-label">Kontak</label>
                                    <input type="text" value="{{ $alumni->kontak }}" id="kontak" class="form-control" name="kontak">
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


