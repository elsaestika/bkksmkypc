@extends('alumni.landing_page')
@section('title', 'Details Lowongan Kerja')
@section('content')

<section class="py-3 mt-5">
    <div class="container px-4 px-lg-5 my-3 pt-5">
        <div class="row gx-4 gx-lg-5 align-items-center">
            <div class="col-md-7">
                <div class="card">
                    <div class="card-body">
                        <h5 class="fw-bold">Lowongan Kerja Proyek</h5><hr>
                        <div class="row">
                            <div class="col">
                                <span class=" mt-1">Gaji :</span><br>
                                    <h5>{{ $lowongan->gaji }}</h5>
                                <span class=" mt-1">Pendidikan :</span><br>
                                    <h5>{{ $lowongan->pendidikan }}</h5>
                                <span class=" mt-1">Tipe pekerjaan :</span><br>
                                    <h5>{{ $lowongan->tipe_pekerjaan }}</h5>
                            </div><hr>
                        </div>
                        <h5 class=" fw-bolder mt-1">Tanggal post : {{ $lowongan->tgl_post }}</h5>
                        <div class="fs-5 mb-2 mt-3">
                            <h5 class="fw-bold">Keahlian : </h5>
                            <h6><span class="mt-2">{{ $lowongan->keahlian }}</span></h6>
                        </div>
                        <div class="fs-5 mb-2 mt-3">
                            <h5 class="fw-bold">Kualifikasi : </h5>
                            <h6><span class="mt-2">{{ $lowongan->kualifikasi }}</span></h6>
                        </div>
                        <div class="fs-5 mb-2 mt-3">
                            <h5 class="fw-bold">Jam Kerja : </h5>
                            <h6><span class="mt-2">{{ $lowongan->jam_kerja }}</span></h6>
                        </div>
                        <div class="fs-5 mb-2 mt-3">
                            <h5 class="fw-bold">Syarat : </h5>
                            <h6><span class="mt-2">{{ $lowongan->syarat }}</span></h6>
                        </div>
                        <div class="d-grid gap-5 d-md-flex justify-content-md-end"style="margin-left: 75%">
                            <a href="{{ url('/lamar/loker/add', $lowongan->id_lowongan) }}" class="btn btn-primary">Lamar pekerjaan</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-5">
                <div class="card mt-2">
                    <div class="card-body">
                        {{-- <div class="card-header"> --}}
                            <h5 class="fw-bold">Detail Perusahaan</h5><hr>
                        {{-- </div> --}}
                        <div class="fs-5 mb-5 mt-5 text-center">
                            <img src="/storage/{{ $lowongan->perusahaan->foto }}" class="rounded-circle mb-1 " alt="" height="200" width="300"><br>
                        </div>
                        <div class="fs-5 mb-2 mt-2">
                            <h5 class="fw-bold">Nama Perusahaan : </h5>
                            <h6><span class="mt-2">{{ $lowongan->perusahaan->perusahaan }}</span></h6>
                        </div>
                        <div class="fs-5 mb-2 mt-3">
                            <h5 class="fw-bold">Alamat Perusahaan : </h5>
                            <h6><span class="mt-2">{{ $lowongan->perusahaan->alamat }}</span></h6>
                        </div>
                        <div class="fs-5 mb-2 mt-3">
                            <h5 class="fw-bold">Contact Perusahaan : </h5>
                            <h6><span class="mt-2">{{ $lowongan->perusahaan->kontak }}</span></h6>
                        </div>
                        <div class="fs-5 mb-2 mt-3">
                            <h5 class="fw-bold">Deskripsi Perusahaan : </h5>
                            <h6><span class="mt-2">{{ $lowongan->perusahaan->deskripsi }}</span></h6>
                        </div>
                        {{-- <tr class="mt-5">
                            <h5 class="">Nama Perusahaan </h5>
                            <td class="mt-2">{{ $lowongan->perusahaan->perusahaan }}</td>
                        </tr> --}}
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<div class="container-fluid">
    <footer class="py-3 my-3 border-top">
        <p class="text-center">&copy;2023 <a href="" target="_blank" class="fw-bold text-decoration-none">BKK SMK YPC TASIKMALAYA 😎</a></p>

    </footer>
</div>
</body>
</html>
@endsection
{{-- <div class="container mt-4 pt-4">
    <div class="row">
        <div class="col-md-9 mt-5 pt-5">
            <div class="card h-100">
                <div class="card-header">
                    <h5>Detail Lowongan Pekerjaan</h5>
                </div>
                <div class="card">
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
                                        <td>
                                            <img src="/storage/{{ $lowongan->admin->foto }}" class="rounded-circle mb-1" alt="" width="50">{{ $lowongan->admin->name }}
                                        </td>
                                    @else
                                    <th>Pengisi Loker</th>
                                    <td>:</td>
                                    <td>
                                        <img src="/storage/{{ $lowongan->alumni->foto }}" class="rounded-circle mb-1" alt="" width="50">{{ $lowongan->alumni->nama_alumni }}
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
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div> --}}

