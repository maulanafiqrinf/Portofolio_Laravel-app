<section id="works" class="projects-area">
    <div class="container">
        <div class="container-inner">
            <div class="row">
                <div class="col-xl-12 col-lg-12">
                    <div class="section-title text-center wow fadeInUp delay-0-2s">
                        <h2>Karya & Proyek</h2>
                        <p>Lihatlah beberapa proyek desain yang saya buat</p>
                    </div>
                </div>
            </div>
            <div class="row project-masonry-active" id="project-container">
                @foreach ($proyek as $project)
                    <div class="col-lg-4 col-md-6 col-sm-12 item branding game">
                        <div class="project-item style-two wow fadeInUp delay-0-3s">
                            <div class="project-image">
                                <img src="{{ $project->image }}" alt="{{ $project->name }}" class="img-fluid">
                                <a href="javascript:void(0);" class="details-btn" data-bs-toggle="modal"
                                    data-bs-target="#projectModal-{{ $project->id }}">
                                    <i class="fa-regular fa-eye"></i>
                                </a>
                            </div>
                            <div class="project-content">
                                <span class="sub-title">{{ e($project->position) }}</span>
                                <h3>{!! nl2br(htmlspecialchars(e($project->name))) !!}</h3>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>

            <!-- Pagination -->
            <div class="pagination-wrapper text-center mt-4" id="project-pagination-controls"></div>
        </div>
    </div>
</section>

<!-- Modal: Project Details -->
@foreach ($proyek as $project)
    <div class="modal fade" id="projectModal-{{ $project->id }}" tabindex="-1"
        aria-labelledby="projectModalLabel-{{ $project->id }}" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="projectModalLabel-{{ $project->id }}">Detail {!! nl2br(htmlspecialchars(e($project->name))) !!}</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="container">
                        <div class="row">
                            <div class="col-sm-12 text-center pb-3">
                                <p>{{ \Carbon\Carbon::parse($project->start_date)->format('F Y') }} - 
                                    {{ empty($project->completion_date) ? 'Sampai Sekarang' : \Carbon\Carbon::parse($project->completion_date)->format('F Y') }}
                                </p>
                                <h1>{!! nl2br(htmlspecialchars(e($project->name))) !!}</h1>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-6">
                                <span style="font-size: 16px; font-weight:bold">Posisi:</span>
                                <p style="font-size: 14px;">{{ htmlspecialchars($project->position) }}</p>
                                <span style="font-size: 16px; font-weight:bold">Teknologi: </span>
                                <p style="font-size: 14px;">{{ htmlspecialchars($project->technology) }}</p>
                            </div>
                            <div class="col-sm-6">
                                <span style="font-size: 16px; font-weight:bold">Pihak:</span>
                                <p style="font-size: 14px;">{{ htmlspecialchars($project->pihak) }}</p>
                            </div>
                        </div>
                    </div>

                    <div class="container pt-2">
                        <div class="row">
                            <div class="col-lg-12 col-md-12">
                                <div class="single-project-page-right wow fadeInUp delay-0-4s">
                                    <span style="font-size: 16px; font-weight:bold">Deskripsi:</span>
                                    <p style="font-size: 14px">{!! nl2br(e($project->deskripsi)) !!}</p>
                                    <span style="font-size: 16px; font-weight:bold">Jobdesk:</span>
                                    <p style="font-size: 14px">{!! nl2br(e($project->jobdesk)) !!}</p>
                                </div>
                            </div>
                        </div>

                        <!-- Gallery Images -->
                        <div class="row pt-2">
                            @foreach ([$project->image, $project->image2, $project->image3] as $image)
                                @if ($image)
                                    <div class="col-lg-6 col-md-6 col-sm-12 mb-3">
                                        <div class="single-image wow fadeInUp delay-0-2s">
                                            <img src="{{ $image }}" alt="gallery" class="img-fluid">
                                        </div>
                                    </div>
                                @endif
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endforeach


<script>
    document.addEventListener('DOMContentLoaded', function() {
        const projects = document.querySelectorAll('#project-container .item');
        const itemsPerPage = 3;
        let currentPage = 1;

        function displayPage(page) {
            const start = (page - 1) * itemsPerPage;
            const end = start + itemsPerPage;

            projects.forEach((project, index) => {
                project.style.display = (index >= start && index < end) ? 'block' : 'none';
            });
        }

        function setupPagination(totalItems) {
            const totalPages = Math.ceil(totalItems / itemsPerPage);
            const paginationControls = document.getElementById('project-pagination-controls');
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
        setupPagination(projects.length);
    });
</script>
