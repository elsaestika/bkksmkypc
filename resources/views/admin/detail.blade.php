@extends('dashboard')
@section('title', 'Profil Alumni')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-6">
            <div class="card h-100">
                <div class="card-header">
                    <h5>Profil Alumni</h5><hr>
                </div>
                <div class="card-body">
                    <table class="table table-striped">
                        <tbody>
                            <tr>
                                <td colspan="3" class="align-middle text-center" >
                                    <img src="/storage/{{ $alumni->foto }}" class="rounded-circle mb-1" alt="" width="250">
                                </td>
                            </tr>
                            <tr>
                                <th>Nama </th>
                                <td>:</td>
                                <td>{{ $alumni->nama_alumni }}</td>
                            </tr>
                            <tr>
                                <th>nisn</th>
                                <td>:</td>
                                <td>{{ $alumni->nisn }}</td>
                            </tr>
                            <tr>
                                <th>nis</th>
                                <td>:</td>
                                <td>{{ $alumni->nis }}</td>
                            </tr>
                            <tr>
                                <th>TTL</th>
                                <td>:</td>
                                <td>{{ $alumni->ttl }}</td>
                            </tr>
                            <tr>
                                <th>ktp</th>
                                <td>:</td>
                                <td>{{ $alumni->ktp }}</td>
                            </tr>
                            <tr>
                                <th>Jenis kelamin</th>
                                <td>:</td>
                                <td>
                                    @if ($alumni->status == "L")
                                     <span>Laki-Laki</span>
                                    @else
                                     <span>Perempuan</span>
                                    @endif
                                </td>
                            </tr>
                            <tr>
                                <th>jurusan</th>
                                <td>:</td>
                                <td>{{ $alumni->jurusan }}</td>
                            </tr>
                            <tr>
                                <th>tahun ajaran</th>
                                <td>:</td>
                                <td>{{ $alumni->thn_ajaran }}</td>
                            </tr>
                            <tr>
                                <th>kontak</th>
                                <td>:</td>
                                <td>{{ $alumni->kontak }}</td>
                            </tr>
                            <tr>
                                <th>alamat</th>
                                <td>:</td>
                                <td>{{ $alumni->alamat }}</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="card h-100">
                <div class="card-header">
                    <h5>Berkas Alumni</h5><hr>
                </div>
                <div class="card-body">
                    <table class="table table-striped">
                        <tbody>
                            <tr>
                                <th>Ijazah Pendidikan</th>
                                <td colspan="3" class="align-middle text-center" >
                                    <img src="/storage/{{ $alumni->ijazah_pendidikan }}" class="mb-1" alt="" width="200">
                                </td>
                            </tr>
                            <tr>
                                <th>Transkip nilai</th>
                                <td colspan="3" class="align-middle text-center" >
                                    <img src="/storage/{{ $alumni->transkip_nilai }}" class="mb-1" alt="" width="200">
                                </td>
                            </tr>
                            <tr>
                                <th>skck</th>
                                <td colspan="3" class="align-middle text-center" >
                                    <img src="/storage/{{ $alumni->skck }}" class="mb-1" alt="" width="200">
                                </td>
                            </tr>
                            <tr>
                                <th>Kartu kuning</th>
                                <td colspan="3" class="align-middle text-center" >
                                    <img src="/storage/{{ $alumni->kartu_kuning }}" class="mb-1" alt="" width="200">
                                </td>
                            </tr>
                            <tr>
                                <th>sks</th>
                                <td colspan="3" class="align-middle text-center" >
                                    <img src="/storage/{{ $alumni->sks }}" class="mb-1" alt="" width="200">
                                </td>
                            </tr>
                        </tbody>
                    </table>
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
