@extends('templates.backoffice.app')

@section('title', $title)

@section('content')
    <div class="row gx-3">
        <div class="col-sm-12">
            <div class="card">
                <div class="card-header d-flex align-items-center justify-content-between">
                    <h5 class="card-title">@yield('title')</h5>
                    <a href="{{route('pendidikan.create')}}" class="btn btn-primary ms-auto">Tambah pendidikan</a>
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
                                @foreach ($pendidikan as $index => $pendidikan)
                                    <tr>
                                        <td>{{ $index + 1 }}</td>
                                        <td>
                                            {{ $pendidikan->name }}
                                        </td>
                                        <td>
                                            <span class="badge bg-{{ $pendidikan->status->name == 'Aktif' ? 'success' : 'danger' }}">
                                                {{ $pendidikan->status->name }}
                                            </span>
                                        <td>
                                            <a href="{{ route('pendidikan.edit', $pendidikan->id) }}"
                                                class="btn btn-sm btn-info">Edit</a>
                                            <button class="btn btn-sm btn-danger delete-btn"
                                                data-url="{{ route('pendidikan.destroy',$pendidikan->id) }}">
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
    @include('backoffice.pendidikan.vendor')
@endsection
