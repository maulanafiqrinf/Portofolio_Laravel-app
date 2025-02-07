@extends('templates.backoffice.app')

@section('title', $title)

@section('content')
    <div class="row gx-3">
        <div class="col-sm-12">
            <div class="card">
                <div class="card-header d-flex align-items-center justify-content-between">
                    <h5 class="card-title">@yield('title')</h5>
                    <a data-bs-toggle="modal" data-bs-target="#addModal" class="btn btn-primary ms-auto">Tambah kategori keahlian</a>
                </div>
                <div class="card-body">

                    <!-- Table starts -->
                    <div class="table-responsive">
                        <table id="example" class="table m-0 align-middle">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Nama</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($kategorikeahlian as $index => $kategorikeahlian)
                                    <tr>
                                        <td>{{ $index + 1 }}</td>
                                        <td>
                                            <span
                                                class="badge text-bg-{{ $kategorikeahlian->name == 'SoftSkills' ? 'info' : 'secondary' }}">
                                                {{ $kategorikeahlian->name }}
                                            </span>
                                        </td>
                                        <td>
                                            <button class="btn btn-sm btn-danger delete-btn"
                                                data-url="{{ route('kategori_keahlian.destroy', $kategorikeahlian->kd_kategori_keahlian) }}">
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
    @include('backoffice.kategori_keahlian.modal_add')
    @include('backoffice.kategori_keahlian.vendor')
@endsection
