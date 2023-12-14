@extends('alumni.landing_page')
@section('title', 'Perusahaan')
@section('content')

<section id="loker" class="page-section shop  ">
    <div class="container-fluid">
        <h4 class="py-3 mb-4 ms-5 mt-5 pt-5">
            <span class="text-muted fw-light">Data Perusahaan</span>
        </h4>
        <div class="row justify-content-center">
            @foreach ($perusahaan as $item)
            <div class="card mb-3 ms-4" style="width: 500px;">
                <div class="row g-0">
                    <div class="col-md-4 pt-5 mt-2">
                        <img src="/storage/{{ $item->foto}}" class="img-fluid rounded-start" alt="...">
                    </div>
                    <div class="col-md-6">
                        <div class="card-body">
                            <h5 class="card-title">{{ $item->perusahaan }}</h5>
                            <tr class="mt-2">
                                <th class="mt-2">Alamat perusahaan</th>
                                <td>:</td>
                                <td>{{ $item->alamat }}</td>
                            </tr><br>
                            <tr class="mt-2">
                                <th>Contact</th>
                                <td>:</td>
                                <td>{{ $item->kontak }}</td>
                            </tr><br>
                            <tr class="mt-2">
                                <th>Tentang</th>
                                <td>:</td>
                                <td>{{ $item->deskripsi }}</td>
                            </tr><br>
                            {{-- <div class="d-grid gap-5 d-md-flex justify-content-md-end">
                                <a href="loker/detail/{{ $item->id_lowongan }}" class="btn btn-primary mt-3 me-md-2">detail lowongan</a>
                            </div> --}}
                        </div>
                    </div>
                </div>
            </div>
            {{-- <div class="col col-md-4 mb-5 ">
                <div class="card mt-5 ms-4" style=" width: 25rem;">
                <img src="/storage/{{ $item->perusahaan->foto}}" class="card-img-top rounded-circle text-center" alt="" width="50" height="200">
                    <div class="card-body mt-2">
                        <h5 class="fw-bold text-center">{{ $item->lowongan }}</h5>
                        <tr class="mt-2">
                            <th class="mt-2">Tipe pekerjaan</th>
                            <td>:</td>
                            <td>{{ $item->tipe_pekerjaan }}</td>
                        </tr><br>
                        <tr class="mt-2">
                            <th>Gaji</th>
                            <td>:</td>
                            <td>{{ $item->gaji }}</td>
                        </tr><br>
                        <tr class="mt-2">
                            <th>syarat</th>
                            <td>:</td>
                            <td>{{ $item->syarat }}</td>
                        </tr><br>
                        <a href="loker/detail/{{ $item->id_lowongan }}" class="btn btn-primary mt-3">detail</a>
                    </div>
                </div>
            </div> --}}
            @endforeach
        </div>
    </div>
</section>
@endsection



{{-- @extends('alumni.landing_page')
@section('content')
<section id="loker" class="page-section-perusahaan ">
    <h4 class="py-3 mb-4 ms-5 mt-5 pt-5">
        <span class="text-muted fw-light">Data Perusahaan</span>
    </h4>
    <div class="container-fluid">
        <div class="row justify-content-center">
            @foreach ($perusahaan as $item)
            <div class="col col-md-4 mb-5 ">
                <div class="card mt-5 ms-4" style=" width: 25rem;">
                <img src="/storage/{{ $item->foto}}" class="card-img-top rounded-circle text-center" alt="" width="150" height="200">
                    <div class="card-body">
                        <h5 class="fw-bold text-center">{{ $item->perusahaan}}</h5>
                        <div class="fs-5 mb-2 mt-3">
                            <h5 class="fw-bold">Alamat Perusahaan : </h5>
                            <h6><span class="mt-2">{{ $item->alamat }}</span></h6>
                        </div>
                        <div class="fs-5 mb-2 mt-3">
                            <h5 class="fw-bold">Contact Perusahaan : </h5>
                            <h6><span class="mt-2">{{ $item->kontak }}</span></h6>
                        </div>
                        <div class="fs-5 mb-2 mt-3">
                            <h5 class="fw-bold">Tentang Perusahaan : </h5>
                            <h6><span class="mt-2">{{ $item->deskripsi }}</span></h6>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>
@endsection --}}

