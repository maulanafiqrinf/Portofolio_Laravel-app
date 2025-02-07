@extends('templates.backoffice.app')
@section('title', $title)

@section('content')
    <div class="row gx-3">
        <div class="col-sm-12">
            <div class="card">
                <div class="card-header">
                    <h5 class="card-title">@yield('title')</h5>
                </div>
                <div class="card-body pt-0">
                    <form id="meForm" action="{{ route('tentang-saya.update', $tentang_saya ? $tentang_saya->id : 0) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="row">
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="name" class="form-label">Nama:</label>
                                    <input type="text" id="name" name="name" class="form-control" value="{{ $tentang_saya ? $tentang_saya->name : '' }}">
                                </div>
                                <div class="mb-3">
                                    <label for="email" class="form-label">Email:</label>
                                    <input type="email" id="email" name="email" class="form-control" value="{{ $tentang_saya ? $tentang_saya->email : '' }}">
                                </div>
                                <div class="mb-3">
                                    <label for="profesi" class="form-label">Profesi:</label>
                                    <input type="text" id="profesi" name="profesi" class="form-control" value="{{ $tentang_saya ? $tentang_saya->profesi : '' }}">
                                </div>
                                <div class="mb-3">
                                    <label for="detail" class="form-label">Detail:</label>
                                    <textarea id="detail" name="detail" class="form-control">{{ $tentang_saya ? $tentang_saya->detail : '' }}</textarea>
                                </div>
                                <div class="mb-3">
                                    <label for="lokasi" class="form-label">Lokasi:</label>
                                    <input type="text" id="lokasi" name="lokasi" class="form-control" value="{{ $tentang_saya ? $tentang_saya->lokasi : '' }}">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="hp" class="form-label">Nomor HP:</label>
                                    <input type="text" id="hp" name="hp" class="form-control" value="{{ $tentang_saya ? $tentang_saya->hp : '' }}">
                                </div>
                                <div class="mb-3">
                                    <label for="foto" class="form-label">Foto:</label>
                                    <input type="text" id="foto" name="foto" class="form-control" value="{{ $tentang_saya ? $tentang_saya->foto : '' }}">
                                </div>
                                <div class="mb-3">
                                    <label for="cv" class="form-label">CV:</label>
                                    <input type="text" id="cv" name="cv" class="form-control" value="{{ $tentang_saya ? $tentang_saya->cv : '' }}">
                                </div>
                                <div class="mb-3">
                                    <label for="instagram" class="form-label">Instagram:</label>
                                    <input type="text" id="instagram" name="instagram" class="form-control" value="{{ $tentang_saya ? $tentang_saya->instagram : '' }}">
                                </div>
                                <div class="mb-3">
                                    <label for="linkedln" class="form-label">LinkedIn:</label>
                                    <input type="text" id="linkedln" name="linkedln" class="form-control" value="{{ $tentang_saya ? $tentang_saya->linkedln : '' }}">
                                </div>
                                <div class="mb-3">
                                    <label for="github" class="form-label">GitHub:</label>
                                    <input type="text" id="github" name="github" class="form-control" value="{{ $tentang_saya ? $tentang_saya->github : '' }}">
                                </div>
                                <div class="mb-3">
                                    <label for="link" class="form-label">Link:</label>
                                    <input type="text" id="link" name="link" class="form-control" value="{{ $tentang_saya ? $tentang_saya->link : '' }}">
                                </div>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary mt-3">Perbarui</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    @include('backoffice.tentang_saya.vendor')
@endsection