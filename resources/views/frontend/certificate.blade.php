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
                                        {{ htmlspecialchars(e($certificate->name)) }}</li>
                                    <li style="font-size: 14px;"><i class="fa-regular fa-clock"></i>
                                        {{ \Carbon\Carbon::parse($certificate->start_date)->format('F Y') }}
                                        -
                                        {{ empty($certificate->completion_date) ? 'Sampai Sekarang' : \Carbon\Carbon::parse($certificate->completion_date)->format('F Y') }}
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
            <!-- Pagination Controls -->
            <div class="pagination-wrapper text-center mt-4" id="certificate-pagination-controls"></div>
        </div>
    </div>
</section>

@foreach ($sertifikat as $certificate)
    <div class="modal fade" id="certificatetModal-{{ $certificate->id }}" tabindex="-1"
        aria-labelledby="certificatetModalLabel-{{ $certificate->id }}" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="certificatetModalLabel-{{ $certificate->id }}">Deskripsi
                        {{ htmlspecialchars(e($certificate->name)) }}
                    </h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="container">
                        <div class="row">
                            <div class="col-12 text-center pb-3">
                                <p style="font-size: 14px;">{{ \Carbon\Carbon::parse($certificate->start_date)->format('F Y') }} -
                                    {{ empty($certificate->completion_date) ? 'Sampai Sekarang' : \Carbon\Carbon::parse($certificate->completion_date)->format('F Y') }}
                                </p>
                                <h3>{{ htmlspecialchars(e($certificate->name)) }}</h3>
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
                                    <iframe id="pdf-viewer" src="{{ $certificate->link }}" width="100%" height="600px" style="border: none;" allow="autoplay">
                                        <a class="btn btn-primary" href="{{ $certificate->link }}" target="_blank" rel="noopener noreferrer">
                                            Unduh PDF
                                        </a>
                                    </iframe>
                                    <div id="fallback">
                                        <a class="btn btn-success" href="{{ $certificate->link }}" target="_blank" rel="noopener noreferrer">
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

<script>
    document.addEventListener('DOMContentLoaded', function() {
        const sertifikat = document.querySelectorAll('#certificate-container .col-lg-4');
        const itemsPerPage = 3;
        let currentPage = 1;

        function displayPage(page) {
            const start = (page - 1) * itemsPerPage;
            const end = start + itemsPerPage;

            sertifikat.forEach((certificate, index) => {
                certificate.style.display = (index >= start && index < end) ? 'block' : 'none';
            });
        }

        function setupPagination(totalItems) {
            const totalPages = Math.ceil(totalItems / itemsPerPage);
            const paginationControls = document.getElementById('certificate-pagination-controls');
            paginationControls.innerHTML = '';

            for (let i = 1; i <= totalPages; i++) {
                const button = document.createElement('button');
                button.textContent = i;
                button.className = 'btn btn-sm mx-1 ' + (i === currentPage ? 'btn-success' : 'btn-secondary');
                button.addEventListener('click', function() {
                    currentPage = i;
                    displayPage(currentPage);
                    setupPagination(totalItems);
                });
                paginationControls.appendChild(button);
            }
        }

        displayPage(currentPage);
        setupPagination(sertifikat.length);
    });
</script>
