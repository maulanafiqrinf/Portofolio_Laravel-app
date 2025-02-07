@extends('templates.backoffice.app')

@section('title', $title)

@section('content')
    <div class="row gx-3">
        <div class="col-sm-12">
            <div class="card">
                <div class="card-header d-flex align-items-center justify-content-between">
                    <h5 class="card-title">@yield('title')</h5>
                    <a data-bs-toggle="modal" data-bs-target="#addModal" class="btn btn-primary ms-auto">Tambah keahlian</a>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table id="example" class="table m-0 align-middle">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Nama</th>
                                    <th>Status</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($keahlian as $index => $keahlian)
                                    <tr>
                                        <td>{{ $index + 1 }}</td>
                                        <td>
                                            {{ $keahlian->name }}
                                        </td>
                                        <td>
                                            <span class="badge bg-{{ $keahlian->status->name == 'Aktif' ? 'success' : 'danger' }}">
                                                {{ $keahlian->status->name }}
                                            </span>
                                        <td>
                                            <button class="btn btn-sm btn-danger delete-btn"
                                                data-url="{{ route('keahlian.destroy',$keahlian->id) }}">
                                                Hapus
                                            </button>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>

                </div>
            </div>
        </div>
    </div>
    @include('backoffice.keahlian.modal_add')
    @include('backoffice.keahlian.vendor')
@endsection
