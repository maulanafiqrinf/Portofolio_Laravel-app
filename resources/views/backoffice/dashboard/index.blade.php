@extends('templates.backoffice.app')

@section('title', 'Dashboard')

@php
    // Definisikan model dan label yang akan dihitung
    $models = [
        'Kategori' => \App\Models\Kategori::class,
        'Kategori Keahlian' => \App\Models\KategoriKeahlian::class,
        'Status' => \App\Models\Status::class,
        'Tentang Saya' => \App\Models\TentangSaya::class,
        'Sertifikat' => \App\Models\Sertifikat::class,
        'Proyek' => \App\Models\Proyek::class,
        'Pendidikan' => \App\Models\Pendidikan::class,
        'Layanan' => \App\Models\Layanan::class,
        'Keahlian' => \App\Models\Keahlian::class,
        'Pengaturan' => \App\Models\Pengaturan::class,
    ];

    // Hitung jumlah data untuk setiap model
    $dataCounts = [];
    foreach ($models as $title => $model) {
        try {
            $dataCounts[$title] = $model::count();
        } catch (\Exception $e) {
            $dataCounts[$title] = 0; // Jika model tidak ditemukan, set count ke 0
        }
    }
@endphp

@section('content')
    <div class="row gx-3">
        <div class="col-sm-12">
            <div class="card">
                <div class="card-header">
                    <h5 class="card-title">@yield('title')</h5>
                </div>
                <div class="card-body pt-0">
                    <!-- Row start -->
                    <div class="row g-3">
                        @foreach ($dataCounts as $title => $count)
                            <div class="col-xl-3 col-sm-6 col-12">
                                <div class="border rounded-2 d-flex align-items-center flex-row p-2">
                                    <div class="m-0">
                                        <div class="d-flex align-items-center lh-1">
                                            <h4 class="m-0 fw-bold">{{ $count }}</h4>
                                        </div>
                                        <small>{{ $title }}</small>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                    <!-- Row ends -->
                </div>
            </div>
        </div>
    </div>
@endsection