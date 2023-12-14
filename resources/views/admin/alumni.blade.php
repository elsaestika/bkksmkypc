@extends('dashboard')
@section('title', 'Data Alumni')
@section('content')
<h4 class="py-3 mb-2">
    <div class="container-xl">
        <div class="row">
            <div class="col-mb-12">
                <div class="card">
                    <div class="card-body">
                        <div class="row mb-2 ms-2">
                            <div class="col-12">
                                <span class="text-muted fw-light">Data AlumniP</span>
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
                                    <a href="{{ url('/alumni/add') }}" class="btn btn-primary">
                                        <span class="mdi mdi-account-plus">
                                        </span>
                                        Tambah data</a>
                                        <div class="table-responsive text-nowrap">
                                             <table class="table mt-3">
                                                <tr>
                                                    <th>No</th>
                                                    <th>Nama alumni</th>
                                                    <th>NISN</th>
                                                    <th>NIS</th>
                                                    <th>TTL</th>
                                                    <th>KTP</th>
                                                    <th>JK</th>
                                                    <th>Jurusan</th>
                                                    <th>Tahun Ajaran</th>
                                                    {{-- <th>Foto</th> --}}
                                                    <th>Alamat</th>
                                                    <th>Kontak</th>
                                                    <th>Aksi</th>
                                                </tr>
                                                @foreach ($alumni as $key => $item)
                                                <tr>
                                                    <td>{{ $key+1 }}</td>
                                                    <div class="row">
                                                        <td>
                                                            <img src="/storage/{{ $item->foto }}" class="rounded-circle mb-1" alt="" width="70">
                                                            {{ $item ->nama_alumni }}
                                                        </td>

                                                    </div>
                                                    <td>{{ $item->nisn }}</td>
                                                    <td>{{ $item->nis }}</td>
                                                    {{-- <td>{{ $item->nama_alumni }}</td> --}}
                                                    <td>{{ $item->ttl }}</td>
                                                    <td>{{ $item->ktp }}</td>
                                                    <td>{{ $item->jk }}</td>
                                                    <td>{{ $item->jurusan}}</td>
                                                    <td>{{ $item->thn_ajaran }}</td>
                                                    {{-- <td>
                                                        <img src="/storage/{{ $item->foto }}" alt="" width="100">
                                                    </td> --}}
                                                    <td>{{ $item->alamat }}</td>
                                                    <td>{{ $item->kontak }}</td>
                                                    <td>
                                                        <a href="alumni/hapus/{{ $item->nisn }}" onclick="return window.confirm('hapus data ini ?')" class="btn btn-danger btn-sm">
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
                                                        <a href="alumni/detail/{{ $item->nisn }}" class="btn btn-sm btn-primary">
                                                            <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-file-invoice" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                                                <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                                                                <path d="M14 3v4a1 1 0 0 0 1 1h4" />
                                                                <path d="M17 21h-10a2 2 0 0 1 -2 -2v-14a2 2 0 0 1 2 -2h7l5 5v11a2 2 0 0 1 -2 2z" />
                                                                <path d="M9 7l1 0" />
                                                                <path d="M9 13l6 0" />
                                                                <path d="M13 17l2 0" />
                                                            </svg>
                                                        </a>
                                                        <a href="alumni/edit/{{ $item->nisn }}" class="btn btn-sm btn-success">
                                                            <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-edit" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                                                <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                                                <path d="M7 7h-1a2 2 0 0 0 -2 2v9a2 2 0 0 0 2 2h9a2 2 0 0 0 2 -2v-1"></path>
                                                                <path d="M20.385 6.585a2.1 2.1 0 0 0 -2.97 -2.97l-8.415 8.385v3h3l8.385 -8.415z"></path>
                                                                <path d="M16 5l3 3"></path>
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

