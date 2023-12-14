@extends('dashboard')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-9">
            <div class="card h-100">
                <div class="card-header">
                    <h5>Detail Lowongan Pekerjaan</h5>
                </div>
                <div class="card-body">
                    <table class="table table-striped">
                        <tbody>
                            <tr>
                                <td colspan="3" class="align-middle text-center" >
                                    <img src="/storage/{{ $lowongan->perusahaan->foto }}" class="rounded-circle mb-1" alt="" width="250">
                                </td>
                            </tr>
                            <tr>
                                @if (Auth::guard('admin')->check())
                                    <th>Pengisi Loker</th>
                                    <td>:</td>
                                    {{-- <td>
                                        <img src="/storage/{{ $lowongan->admin->foto }}" class="rounded-circle mb-1" alt="" width="50">{{ $lowongan->admin->nama }}
                                    </td> --}}
                                @else
                                {{-- (Auth::guard('alumnis')->check()) --}}
                                <th>Pengisi Loker</th>
                                <td>:</td>
                                <td>
                                    <img src="/storage/{{ $lowongan->alumni->foto }}" class="rounded-circle mb-1" alt="" width="50">{{ $lowongan->alumni->nama_alumni }}
                                </td>
                                @endif
                            </tr>
                            <tr>
                                <th>Bidang</th>
                                <td>:</td>
                                <td>{{ $lowongan->lowongan }}</td>
                            </tr>
                            <tr>
                                <th>Perusahaan</th>
                                <td>:</td>
                                <td>{{ $lowongan->perusahaan->perusahaan }}</td>
                            </tr>
                            <tr>
                                <th>tipe pekerjaan</th>
                                <td>:</td>
                                <td>{{ $lowongan->tipe_pekerjaan }}</td>
                            </tr>
                            <tr>
                                <th>keahlian</th>
                                <td>:</td>
                                <td>{{ $lowongan->keahlian }}</td>
                            </tr>
                            <tr>
                                <th>kualifikasi</th>
                                <td>:</td>
                                <td>{{ $lowongan->kualifikasi }}</td>
                            </tr>
                            <tr>
                                <th>pendidikan</th>
                                <td>:</td>
                                <td>{{ $lowongan->pendidikan }}</td>
                            </tr>
                            <tr>
                                <th>gaji</th>
                                <td>:</td>
                                <td>{{ $lowongan->gaji }}</td>
                            </tr>
                            <tr>
                                <th>syarat</th>
                                <td>:</td>
                                <td>{{ $lowongan->syarat }}</td>
                            </tr>
                            <tr>
                                <th>status</th>
                                <td>:</td>
                                <td>{{ $lowongan->status }}</td>
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
