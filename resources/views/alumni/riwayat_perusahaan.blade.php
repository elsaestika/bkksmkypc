@extends('alumni.landing_page')
@section('title', 'Riwayat Perusahaan')
@section('content')
{{-- <a href="loker/detail/{{ $item->id_lowongan }}" class="btn btn-primary">detail</a> --}}

<section id="loker" class="page-section-perusahaan ">
    <h4 class="py-3 mb-4 ms-5 mt-5 pt-5">
        <span class="text-muted fw-light fw-bold">Data Perusahaan</span>
    </h4>
    <a href="{{ url('add/perusahaan') }}">
        <button class="ms-5 btn btn-primary">
            <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-plus" width="24" height="24" viewBox="0 0 24 24"
                stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                <path d="M12 5l0 14" />
                <path d="M5 12l14 0" />
            </svg>
            Tambah Perusahaan
        </button>
    </a>
    <div class="container-fluid">
        {{-- <a href="{{ url('add/perusahaan/', $perusahaan->id_perusahaan) }}" class="btn btn-primary">Tambah Perusahaan</a> --}}
        <div class="row justify-content-center">
            @foreach ($perusahaan as $item)
            <div class="col col-md-4 mb-5 ">
                        <div class="card mb-3 ms-4" style="width: 500px;">
                            <div class="row g-0">
                                <div class="col-md-4 pt-5 mt-2">
                                    <img src="/storage/{{ $item->foto}}" class="img-fluid rounded-circle" alt="..." height="300" width="300">
                                </div>
                                <div class="col-md-6">
                                    <div class="card-body">
                                        <h5 class="card-title fw-bold">{{ $item->perusahaan}}</h5>
                                        <div class=" mt-2">
                                            <h5 class="fw-bold">Alamat Perusahaan : </h5>
                                            <span class="mt-2">{{ $item->alamat }}</span>
                                        </div>
                                        <div class="mt-2">
                                            <h5 class="fw-bold">Contact Perusahaan : </h5>
                                            <span class="mt-2">{{ $item->kontak }}</span>
                                        </div>
                                        <div class="mt-2">
                                            <h5 class="fw-bold">Tentang Perusahaan : </h5>
                                            <span class="mt-2">{{ $item->deskripsi }}</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                </div>
            </div>
            @endforeach
        </div>
</section>
@endsection

