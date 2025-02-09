<section id="pricing" class="pricing-area">
    <div class="container">
        <div class="container-inner">
            <div class="row">
                <div class="col-xl-12 col-lg-12">
                    <div class="section-title text-center wow fadeInUp delay-0-2s">
                        <h2>Sertifikasi yang Saya Miliki</h2>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center" id="certificate-container">
                @foreach ($sertifikat as $certificate)
                    <div class="col-lg-4 col-md-6">
                        <div class="pricing-item wow fadeInUp delay-0-2s">
                            <div class="pricing-header">
                                <img src="{{ e($certificate->image) }}">
                            </div>
                            <div class="pricing-deskripsis">
                                <ul>
                                    <li style="font-size: 16px; font-weight:bold">
                                        {{ e($certificate->name) }}</li>
                                    <li style="font-size: 14px;"><i class="fa-regular fa-clock"></i>
                                        {{ \Carbon\Carbon::parse($certificate->start_date)->translatedFormat('F Y') }}
                                        -
                                        {{ empty($certificate->completion_date) ? 'Sampai Sekarang' : \Carbon\Carbon::parse($certificate->completion_date)->translatedFormat('F Y') }}
                                    </li>
                                    <li style="font-size: 12px;"><i class="fa-solid fa-user"></i> {{ $certificate->pihak }}</li>
                                </ul>
                                <a href="javascript:void(0);" class="theme-btn" data-bs-toggle="modal"
                                    data-bs-target="#certificatetModal-{{ $certificate->id }}"
                                    data-title="{{ e($certificate->name) }}" data-pihak="{{ e($certificate->pihak) }}"
                                    data-deskripsi="{{ e($certificate->deskripsi) }}"
                                    data-start="{{ $certificate->start_date }}"
                                    data-end="{{ $certificate->completion_date ?? 'Sampai Sekarang' }}"
                                    data-images="{{ $certificate->image }}" data-link="{{ $certificate->link }}">Lihat
                                    <i class="fa-regular fa-eye"></i></a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
            <div class="pagination-wrapper text-center mt-4" id="certificate-pagination-controls"></div>
        </div>
    </div>
</section>

@include('frontend.certificate.modal')

@include('frontend.certificate.script')


