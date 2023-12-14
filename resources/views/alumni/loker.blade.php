@extends('alumni.landing_page')
@section('title', 'Lowongan  Kerja')
@section('content')

<section id="loker" class="page-section shop  ">
    <div class="container-fluid">
        <h4 class="py-3 mb-4 ms-5 mt-5 pt-5">
            <span class="text-muted fw-light">Data Lowongan</span>
        </h4>
        <div class="row justify-content-center">
            @foreach ($lowongan as $item)
            <div class="card mb-3 ms-4" style="width: 500px;">
                <div class="row g-0">
                    <div class="col-md-4 pt-5 mt-2">
                        <img src="/storage/{{ $item->perusahaan->foto}}" class="img-fluid rounded-start" alt="...">
                    </div>
                    <div class="col-md-6">
                        <div class="card-body">
                            <h5 class="card-title">{{ $item->lowongan }}</h5>
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
                            <div class="d-grid gap-5 d-md-flex justify-content-md-end" style="margin-left: 150%">
                                <a href="loker/detail/{{ $item->id_lowongan }}" class="btn btn-primary mt-3 me-md-2">details</a>
                            </div>
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


