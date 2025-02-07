@extends('templates.backoffice.app')

@section('title', $title)

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <form id="meForm" action="{{ route('pendidikan.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="name" class="form-label">Nama pendidikan:</label>
                                    <input type="text" id="name" name="name" class="form-control" required>
                                </div>
                                <div class="mb-3">
                                    <label for="jurusan" class="form-label">jurusan:</label>
                                    <input type="text" id="jurusan" name="jurusan" class="form-control">
                                </div>
                                <div class="mb-3">
                                    <label for="deskripsi" class="form-label">Deskripsi:</label>
                                    <textarea id="deskripsi" name="deskripsi" class="form-control"></textarea>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="link" class="form-label">Link:</label>
                                    <input type="text" id="link" name="link" class="form-control">
                                </div>
                                <div class="mb-3">
                                    <label for="start_date" class="form-label">Tanggal Mulai:</label>
                                    <input type="date" id="start_date" name="start_date" class="form-control">
                                </div>
                                <div class="mb-3">
                                    <label for="completion_date" class="form-label">Tanggal Selesai:</label>
                                    <input type="date" id="completion_date" name="completion_date" class="form-control">
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
                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary mt-3">Kirim</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    @include('backoffice.pendidikan.vendor')

@endsection