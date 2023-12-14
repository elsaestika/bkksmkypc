@extends('dashboard')
@section('title', 'Testimoni')
@section('content')
<h4 class="py-3 mb-2">
    <div class="container-xl">
        <div class="row">
            <div class="col-mb-12">
                <div class="card">
                    <div class="card-body">
                        <div class="row mb-2 ms-2">
                            <div class="col-12">
                                <span class="text-muted fw-light">Testimoni</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</h4>
    <div class="page-body">
        <div class="container-xl">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="row mt-3 mb-2 ms-2">
                                <div class="col-12">
                                        <div class="table-responsive text-nowrap">
                                             <table class="table mt-3">
                                                <tr>
                                                    <th>No</th>
                                                    <th>Nama Alumni</th>
                                                    <th>Testimoni</th>
                                                    <th>Aksi</th>
                                                </tr>
                                                @foreach ($testimoni as $key => $item)
                                                <tr>
                                                    <td>{{ $key+1 }}</td>
                                                    <div class="row">
                                                        <td>
                                                            <img src="/storage/{{ $item->alumni->foto }}" class="rounded-circle mb-1" alt="" width="50">
                                                            {{ $item->alumni->nama_alumni }}
                                                        </td>
                                                    <td>{{ $item->testimoni }}</td>
                                                    </div>
                                                    <td>
                                                        <a href="testimoni/delete/{{ $item->id_testimoni }}" onclick="return window.confirm('hapus data ini ?')" class="btn btn-danger btn-sm">
                                                            {{-- <a class="btn btn-danger btn-sm delete-confirm"> --}}
                                                            <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-trash" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                                                <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                                                <path d="M4 7l16 0"></path>
                                                                <path d="M10 11l0 6"></path>
                                                                <path d="M14 11l0 6"></path>
                                                                <path d="M5 7l1 12a2 2 0 0 0 2 2h8a2 2 0 0 0 2 -2l1 -12"></path>
                                                                <path d="M9 7v-3a1 1 0 0 1 1 -1h4a1 1 0 0 1 1 1v3"></path>
                                                            </svg>
                                                        </a>
                                                    </td>
                                                </tr>
                                                @endforeach
                                            </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

{{-- <div class="modal modal-blur fade" id="modal-inputalumni" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title">Tambah Data Alumni</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">

        </div>
      </div>
    </div>
  </div> --}}

  {{-- @push('myscript')
      <script>
        $(function(){
            $("#btnTambahalumni").click(function() {
                $("#modal-inputalumni").modal("show");
            });
        });
      </script>
  @endpush --}}

