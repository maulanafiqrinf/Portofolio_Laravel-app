@extends('templates.backoffice.app')
@section('title', $title)

@section('content')
    <div class="row">
        <div class="col-md-12 col-12 text-md-end">
            <a href="https://firebase-host.vercel.app/" class="btn btn-secondary mb-4" target="_blank">Upload Image/PDF</a>
        </div>
    </div>
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <form id="meForm" action="{{ route('pendidikan.update', $pendidikan->id) }}" method="POST"
                        enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="row">
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="name" class="form-label">Nama Pengalaman:</label>
                                    <input type="text" id="name" name="name" class="form-control"
                                        value="{{ $pendidikan->name }}" required>
                                </div>
                                <div class="mb-3">
                                    <label for="jurusan" class="form-label">jurusan:</label>
                                    <input type="text" id="jurusan" name="jurusan" class="form-control"
                                        value="{{ $pendidikan->jurusan }}">
                                </div>
                                <div class="mb-3">
                                    <label for="deskripsi" class="form-label">Deskripsi:</label>
                                    <textarea id="deskripsi" name="deskripsi" class="form-control">{{ $pendidikan->deskripsi }}</textarea>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="link" class="form-label">Link:</label>
                                    <input type="text" id="link" name="link" class="form-control"
                                        value="{{ $pendidikan->link }}">
                                </div>
                                <div class="mb-3">
                                    <label for="start_date" class="form-label">Tanggal Mulai:</label>
                                    <input type="date" id="start_date" name="start_date" class="form-control"
                                        value="{{ $pendidikan->start_date }}">
                                </div>
                                <div class="mb-3">
                                    <label for="completion_date" class="form-label">Tanggal Selesai:</label>
                                    <input type="date" id="completion_date" name="completion_date" class="form-control"
                                        value="{{ $pendidikan->completion_date }}">
                                </div>
                                <div class="mb-3">
                                    <label for="kd_status" class="form-label">Status:</label>
                                    <select id="kd_status" name="kd_status" class="form-control" required>
                                        <option value="" disabled>Pilih Status</option>
                                        @foreach ($statuses as $item)
                                            <option value="{{ $item->kd_status }}"
                                                {{ $item->kd_status == $pendidikan->kd_status ? 'selected' : '' }}>
                                                {{ $item->name }}
                                            </option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary mt-3">Perbarui</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    @include('backoffice.pendidikan.vendor')

@endsection
