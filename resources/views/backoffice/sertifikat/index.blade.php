@extends('templates.backoffice.app')

@section('title', $title)

@section('content')
    <div class="row gx-3">
        <div class="col-sm-12">
            <div class="card">
                <div class="card-header d-flex align-items-center justify-content-between">
                    <h5 class="card-title">@yield('title')</h5>
                    <a href="{{route('sertifikat.create')}}" class="btn btn-primary ms-auto">Tambah sertifikat</a>
                </div>
                <div class="card-body">

                    <!-- Table starts -->
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
                                @foreach ($sertifikat as $index => $sertifikat)
                                    <tr>
                                        <td>{{ $index + 1 }}</td>
                                        <td>
                                            {{ $sertifikat->name }}
                                        </td>
                                        <td>
                                            <span class="badge bg-{{ $sertifikat->status->name == 'Aktif' ? 'success' : 'danger' }}">
                                                {{ $sertifikat->status->name }}
                                            </span>
                                        <td>
                                            <a href="{{ route('sertifikat.edit', $sertifikat->id) }}"
                                                class="btn btn-sm btn-info">Edit</a>
                                            <button class="btn btn-sm btn-danger delete-btn"
                                                data-url="{{ route('sertifikat.destroy',$sertifikat->id) }}">
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
    @include('backoffice.sertifikat.vendor')
@endsection
