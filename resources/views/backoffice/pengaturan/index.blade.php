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
                    <form id="meForm" action="{{ route('pengaturan.update', $pengaturan ? $pengaturan->id : 0) }}"
                        method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="row">
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="image" class="form-label">Image:</label>
                                    <input type="text" id="image" name="image" class="form-control"
                                        value="{{ $pengaturan ? $pengaturan->image : '' }}" required>
                                </div>
                                <div class="mb-3">
                                    <label for="map" class="form-label">Map:</label>
                                    <input type="text" id="map" name="map" class="form-control"
                                        value="{{ $pengaturan ? $pengaturan->map : '' }}">
                                </div>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary mt-3">Perbarui</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    @include('backoffice.pengaturan.vendor')
@endsection
