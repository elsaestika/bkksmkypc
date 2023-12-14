@extends('alumni.landing_page')
@section('content')
<div class="container mt-5 pt-5 ">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card mt-5">
                <div class="card-body">
                    <form action="{{ url('/lamar/loker/create', $lowongan->id_lowongan) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="col-lg-12 col-6">
                                <h5 class="text-center fw-bold">Form Lamar Pekerjaan</h5>
                                <input type="hidden" name="id_lowongan" id="id_lowongan" value="{{ $lowongan->id_lowongan }}">
                                    <div class="col mb-0">
                                        <div class="input-icon mb-3">
                                            <input type="hidden" value="{{ $lowongan->id_lowongan }}">
                                        </div>
                                    </div>
                                    <div class="col mb-0">
                                        <div class="input-icon mb-3">
                                            <label for="form" class="form-label">Surat Lamaran</label>
                                            <input type="file" value="" id="surat_lamaran" class="form-control" name="surat_lamaran">
                                        </div>
                                    </div>
                                    <div class="col-mb-0">
                                        <div class="input-icon mb-3">
                                            <label for="form" class="form-label">CV</label>
                                            <input type="file" value="" id="cv" class="form-control" name="cv">
                                        </div>
                                    </div>
                                    <div class="row mt-2">
                                        <div class="col">
                                            <div class="form-group">
                                                <button type="submit" value="" class="btn btn-primary">Kirim Lamaran</button>
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
</div>
@endsection
