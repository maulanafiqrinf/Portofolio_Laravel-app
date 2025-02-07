@extends('templates.backoffice.app')

@section('title', $title)

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <form id="meForm" action="{{ route('proyek.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="name" class="form-label">Nama Pengalaman:</label>
                                    <input type="text" id="name" name="name" class="form-control" required>
                                </div>
                                <div class="mb-3">
                                    <label for="position" class="form-label">Posisi:</label>
                                    <input type="text" id="position" name="position" class="form-control">
                                </div>
                                <div class="mb-3">
                                    <label for="pihak" class="form-label">Pihak:</label>
                                    <input type="text" id="pihak" name="pihak" class="form-control">
                                </div>
                                <div class="mb-3">
                                    <label for="technology" class="form-label">Teknologi:</label>
                                    <input type="text" id="technology" name="technology" class="form-control">
                                </div>
                                <div class="mb-3">
                                    <label for="deskripsi" class="form-label">Deskripsi:</label>
                                    <textarea id="deskripsi" name="deskripsi" class="form-control"></textarea>
                                </div>
                                <div class="mb-3">
                                    <label for="start_date" class="form-label">Tanggal Mulai:</label>
                                    <input type="date" id="start_date" name="start_date" class="form-control">
                                </div>
                                <div class="mb-3">
                                    <label for="completion_date" class="form-label">Tanggal Selesai:</label>
                                    <input type="date" id="completion_date" name="completion_date" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="jobdesk" class="form-label">Jobdesk:</label>
                                    <textarea id="jobdesk" name="jobdesk" class="form-control"></textarea>
                                </div>
                                <div class="mb-3">
                                    <label for="image" class="form-label">Gambar 1:</label>
                                    <input type="text" id="image" name="image" class="form-control">
                                </div>
                                <div class="mb-3">
                                    <label for="image2" class="form-label">Gambar 2:</label>
                                    <input type="text" id="image2" name="image2" class="form-control">
                                </div>
                                <div class="mb-3">
                                    <label for="image3" class="form-label">Gambar 3:</label>
                                    <input type="text" id="image3" name="image3" class="form-control">
                                </div>
                                <div class="mb-3">
                                    <label for="link" class="form-label">Link:</label>
                                    <input type="text" id="link" name="link" class="form-control">
                                </div>
                                <div class="mb-3">
                                    <label for="kd_status" class="form-label">Status:</label>
                                    <select id="kd_status" name="kd_status" class="form-control" required>
                                        <option value="" selected disabled>Pilih Status</option>
                                        @foreach ($statuses as $item)
                                            <option value="{{ $item->kd_status }}">{{ $item->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="mb-3">
                                    <label for="kd_kategori" class="form-label">Kategori:</label>
                                    <select id="kd_kategori" name="kd_kategori" class="form-control" required>
                                        <option value="" selected disabled>Pilih Kategori</option>
                                        @foreach ($categories as $item)
                                            <option value="{{ $item->kd_kategori }}">{{ $item->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary mt-3">Kirim</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    @include('backoffice.proyek.vendor')

@endsection