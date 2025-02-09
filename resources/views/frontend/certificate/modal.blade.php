@foreach ($sertifikat as $certificate)
    <div class="modal fade" id="certificatetModal-{{ $certificate->id }}" tabindex="-1"
        aria-labelledby="certificatetModalLabel-{{ $certificate->id }}" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="certificatetModalLabel-{{ $certificate->id }}">Deskripsi
                        {{ e($certificate->name) }}
                    </h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="container">
                        <div class="row">
                            <div class="col-12 text-center pb-3">
                                <p style="font-size: 14px;">
                                    {{ \Carbon\Carbon::parse($certificate->start_date)->format('F Y') }} -
                                    {{ empty($certificate->completion_date) ? 'Sampai Sekarang' : \Carbon\Carbon::parse($certificate->completion_date)->format('F Y') }}
                                </p>
                                <h3>{{ e($certificate->name) }}</h3>
                                <span style="font-size: 18px; font-weight:bold">Pihak: </span>
                                <p style="font-size: 16px;">{{ $certificate->pihak }}</p>
                            </div>
                        </div>
                    </div>

                    <div class="container pt-3">
                        <div class="row">
                            <div class="col-lg-12 col-md-12">
                                <div class="single-project-page-right wow fadeInUp delay-0-4s">
                                    <span style="font-size: 16px; font-weight:bold">Deskripsi:</span>
                                    <p style="font-size: 14px">{!! nl2br(e($certificate->deskripsi)) !!}</p>
                                </div>
                            </div>
                        </div>
                        <div class="row pt-3">
                            <div class="col-lg-12 col-md-12 mb-3">
                                <div class="single-image wow fadeInUp delay-0-2s">
                                    <iframe id="pdf-viewer" src="{{ $certificate->link }}" width="100%" height="600px"
                                        style="border: none;" allow="autoplay">
                                        <a class="btn btn-primary" href="{{ $certificate->link }}" target="_blank"
                                            rel="noopener noreferrer">
                                            Unduh PDF
                                        </a>
                                    </iframe>
                                    <div id="fallback">
                                        <a class="btn btn-success" href="{{ $certificate->link }}" target="_blank"
                                            rel="noopener noreferrer">
                                            Unduh PDF
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endforeach
