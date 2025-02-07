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
                    <form id="meForm" action="{{ route('sertifikat.update', $sertifikat->id) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="row">
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="name" class="form-label">Nama Sertifikat:</label>
                                    <input type="text" id="name" name="name" class="form-control"
                                        value="{{ $sertifikat->name }}" required>
                                </div>
                                <div class="mb-3">
                                    <label for="pihak" class="form-label">Pihak:</label>
                                    <input type="text" id="pihak" name="pihak" class="form-control"
                                        value="{{ $sertifikat->pihak }}">
                                </div>
                                <div class="mb-3">
                                    <label for="deskripsi" class="form-label">Deskripsi:</label>
                                    <textarea id="deskripsi" name="deskripsi" class="form-control">{{ $sertifikat->deskripsi }}</textarea>
                                </div>
                                <div class="mb-3">
                                    <label for="start_date" class="form-label">Tanggal Mulai:</label>
                                    <input type="date" id="start_date" name="start_date" class="form-control"
                                        value="{{ $sertifikat->start_date }}">
                                </div>
                                <div class="mb-3">
                                    <label for="completion_date" class="form-label">Tanggal Selesai:</label>
                                    <input type="date" id="completion_date" name="completion_date" class="form-control"
                                        value="{{ $sertifikat->completion_date }}">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="image" class="form-label">Gambar:</label>
                                    <input type="text" id="image" name="image" class="form-control"
                                        value="{{ $sertifikat->image }}">
                                </div>
                                <div class="mb-3">
                                    <label for="link" class="form-label">Link:</label>
                                    <input type="text" id="link" name="link" class="form-control"
                                        value="{{ $sertifikat->link }}">
                                </div>
                                <div class="mb-3">
                                    <label for="kd_status" class="form-label">Status:</label>
                                    <select id="kd_status" name="kd_status" class="form-control" required>
                                        <option value="" disabled>Pilih Status</option>
                                        @foreach ($statuses as $item)
                                            <option value="{{ $item->kd_status }}"
                                                {{ $item->kd_status == $sertifikat->kd_status ? 'selected' : '' }}>
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
    @include('backoffice.sertifikat.vendor')

@endsection