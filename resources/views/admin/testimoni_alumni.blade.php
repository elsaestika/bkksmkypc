@extends('alumni.landing_page')
@section('content')
    <h4 class="py-3 mb-4 ms-5 mt-5 pt-5">
        <span class="text-muted fw-bold">Testimoni</span>
    </h4>
    <a href="{{ url('testimoni/add') }}">
        <button class="ms-5 btn btn-primary">
            <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-plus" width="24" height="24" viewBox="0 0 24 24"
            stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
            <path d="M12 5l0 14" />
            <path d="M5 12l14 0" />
        </svg>
            Tambah Testimoni
        </button>
    </a>
<section id="loker" class="page-section shop  ">
    <div class="container">
        <div class="row justify-content-center">
            @foreach ($testimoni as $item)
            <div class="col-md-4 mb-2 ">
                <div class="card mt-5 ms-4" style=" width: 25rem;">
                    <div class="card-body mt-2">
                    <td>
                        <div class="row">
                            <div class="col-md-3">
                                <img src="/storage/{{ $item->alumni->foto }}" class="rounded-circle mb-1" alt="" width="65">
                            </div>
                            <div class="col mt-3">
                                {{ $item ->alumni->nama_alumni }}
                            </div>
                        </div>
                    </td>
                {{-- <img src="/storage/{{ $item->alumni->foto}}" class="card-img-top rounded-circle text-center" alt="" width="50" height="200"> --}}
                        {{-- <h5 class="fw-bold text-center">{{ $item->lowongan }}</h5> --}}
                        <tr class="mt-2">
                            <h5><td class="fw-bold">"{{ $item->testimoni }}"</td></h5>
                        </tr><br>
                        {{-- <div class="d-grid gap-5 d-md-flex justify-content-md-end" style="margin-left: 150%">
                            <a href="loker/detail/{{ $item->id_lowongan }}" class="btn btn-primary mt-3 me-md-2">details</a>
                        </div> --}}
                        {{-- <a href="loker/detail/{{ $item->id_lowongan }}" class="btn btn-primary mt-3">detail lowongan</a> --}}
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>
@endsection

