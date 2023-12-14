@extends('alumni.landing_page')
@section('content')
<div class="container mt-5 pt-5 ">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card mt-5">
                <div class="card-body">
                    <form action="{{ url('testimoni/create') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="col-lg-12 col-6">
                                <h5 class="text-center fw-bold">Form Testimoni</h5>
                                    <div class="col mb-0">
                                        <div class="input-icon mb-3">
                                            <label for="form" class="form-label">Testimoni</label>
                                            <input type="text" value="" id="testimoni" class="form-control" name="testimoni">
                                        </div>
                                    </div>
                                    <div class="row mt-2">
                                        <div class="col">
                                            <div class="form-group">
                                                <button type="submit" value="" class="btn btn-primary">Kirim </button>
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
