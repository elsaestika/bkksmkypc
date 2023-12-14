@extends('alumni.landing_page')
@section('title', 'Profil')
@section('content')
<div class="container pt-5 mt-5">
    <div class="row">
        <div class="col-md-6">
        <div class="card h-100">
            <div class="card-header">
                <h5>Profil saya</h5>
            </div>
                <div class="card-body">
                    @foreach ($alumni as $alumni)
                    <form action="{{ url('profil/update', $alumni->nisn) }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="col">
                                <label for="form" class="form-label fw-bold">Foto</label>
                                <img src="/storage/{{ $alumni->foto }}" width="100" height="100" alt="">
                                <input type="file" name="foto" id="foto" class="form-control mt-3" value="{{ $alumni->foto }}">
                            </div>
                            <div class="row mt-3">
                                <div class="col mt-2">
                                    <label for="form" class="fw-bold">Nama Lengkap</label>
                                    <input type="text" name="nama_alumni" id="nama_alumni" class="form-control" value="{{ $alumni->nama_alumni }}">
                                </div>
                                <div class="col mt-2">
                                    <label for="form" class="fw-bold">Nisn</label>
                                    <input type="text" name="nisn" id="nisn" class="form-control" value="{{ $alumni->nisn }}">
                                </div>
                            </div>
                            <div class="row mt-2">
                                <div class="col mt-2">
                                    <label for="form" class="fw-bold">Nis</label>
                                    <input type="text" name="nis" id="nis" class="form-control" value="{{ $alumni->nis }}">
                                </div>
                                <div class="col mt-2">
                                    <label for="form" class="fw-bold">Ttl</label>
                                    <input type="text" name="ttl" id="ttl" class="form-control" value="{{ $alumni->ttl }}">
                                </div>
                            </div>
                            <div class="row mt-2">
                                <div class="col mt-2">
                                    <label for="form" class="fw-bold">Ktp</label>
                                    <input type="text" name="ktp" id="ktp" class="form-control" value="{{ $alumni->ktp }}">
                                </div>
                                <div class="col mt-2">
                                    <label for="form" class="form-label fw-bold" >Jenis kelamin</label>
                                    <select name="jk" id="jk" class="form-select">
                                        <option>Jenis kelamin</option>
                                        <option value="L" {{ $alumni->jk=='L'?'selected':'' }}>Laki-Laki</option>
                                        <option value="P" {{ $alumni->jk=='P'?'selected':'' }}>Perempuan</option>
                                    </select>
                                </div>
                            </div>
                            <div class="row mt-2">
                                <div class="col mt-2">
                                    <label for="form" class="fw-bold">Tahun ajaran</label>
                                    <input type="text" name="thn_ajaran" id="thn_ajaran" class="form-control" value="{{ $alumni->thn_ajaran }}">
                                </div>
                                <div class="col mt-2">
                                    <div class="input-icon mb-3">
                                    <label for="form" class="form-label fw-bold" >Jurusan</label>
                                        {{-- <td class="fw-bold">Jurusan</td> --}}
                                        <select name="jurusan" id="jurusan" class="form-select">
                                            <option value="">>---Pilih Jurusan---<</option>
                                            <option value="RPL"{{ $alumni->jurusan=='RPL'?'selected':'' }}>Rekayasa Perangkat Lunak</option>
                                            <option value="DPIB"{{ $alumni->jurusan=='DPIB'?'selected':'' }}>Desain Pemodelan dan Informasi Bangunan</option>
                                            <option value="MM"{{ $alumni->jurusan=='MM'?'selected':'' }}>Multimedia</option>
                                            <option value="TBSM"{{ $alumni->jurusan=='TBSM'?'selected':'' }}>Teknik dan Bisnis Sepeda Motor</option>
                                            <option value="TKRO"{{ $alumni->jurusan=='TKRO'?'selected':'' }}>Teknik Kendaraan Ringan Otomotif</option>
                                            <option value="TEKLIN"{{ $alumni->jurusan=='TEKLIN'?'selected':'' }}>Teknik Elektronika dan Industri</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col mt-2">
                                    <label for="form" class="fw-bold">Alamat</label>
                                    <input type="text" name="alamat" id="alamat" class="form-control" value="{{ $alumni->alamat }}">
                                </div>
                                <div class="col mt-2">
                                    <label for="form" class="fw-bold">Kontak</label>
                                    <input type="text" name="kontak" id="kontak" class="form-control" value="{{ $alumni->kontak }}">
                                </div>
                            </div>
                        </div>
                        <div class="row mt-2">
                                <div class="col mt-2">
                                    <label for="form" class="fw-bold">Ijazah Pendidikan</label><br>
                                    <img src="/storage/{{ $alumni->ijazah_pendidikan }}" width="100" alt="">
                                    <input type="file" name="ijazah_pendidikan" id="ijazah_pendidikan" class="form-control">
                                </div>
                                <div class="col mt-2">
                                    <label for="form" class="fw-bold">Transkip Nilai</label><br>
                                    <img src="/storage/{{ $alumni->transkip_nilai }}" width="100" alt="">
                                    <input type="file" name="transkip_nilai" id="transkip_nilai" class="form-control" >
                                </div>
                            <div class="row mt-2">
                                <div class="col mt-2">
                                    <label for="form" class="fw-bold">Skck</label><br>
                                    <img src="/storage/{{ $alumni->skck }}" width="100" alt="">
                                    <input type="file" name="skck" id="skck" class="form-control " >
                                </div>
                                <div class="col mt-2">
                                    <label for="form" class="fw-bold">Kartu kuning</label><br>
                                    <img src="/storage/{{ $alumni->kartu_kuning }}" width="100" alt="">
                                    <input type="file" name="kartu_kuning" id="kartu_kuning" class="form-control">
                                </div>
                            </div>
                            <div class="col mt-3">
                                <label for="form" class="fw-bold">Sks</label><br>
                                <img src="/storage/{{ $alumni->sks }}" width="100" alt="">
                                <input type="file" name="sks" id="sks" class="form-control ">
                            </div>
                        </div>
                        <div class="row mt-3">
                            <div class="col">
                                <div class="form-group">
                                    <button type="submit" value="" class="btn btn-primary">Simpan</button>
                                    {{-- <input type="submit" value="{{ $tombol }}" class="btn btn-primary"> --}}
                                </div>
                            </div>
                        </div>
                        {{-- <div class="mb-3 mt-3">
                            <input type="submit" value="{{ $tombol }}" class="btn btn-primary btn-sm">
                        </div> --}}
                    </form>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
    {{-- <section class="py-3">
        <div class="container px-4 px-lg-5 my-3 pt-5">
            <div class="row gx-4 gx-lg-5 align-items-center">
                <div class="col-md-6">
                    <div class="card">
                        <div class="card-body">
                            <span>hjhjhj</span>
                            <h3 class="display-5 fw-bolder"></h3>
                            <div class="fs-5 mb-5">
                            </div>
                            <p class="lead"></p>
                            <div class="d-flex">
                                <input class="form-control text-center me-3" id="inputQuantity" type="number"
                                value="1" style="max-width: 3rem;">
                                <button class="btn btn-outline-primary flex-shrink-0" type="button">
                                <a href="https://api.whatsapp.com/send?phone=6281809534791&text=%22halloo%22">Beli sekarang</a>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="card">
                        <div class="card-body">
                            <img src="/storage/" class="card-img-top mb-5 mb-md-0" alt="">
                        </div>
                    </div>
                </div>

            </div>
        </div>
      </section> --}}
@endsection
