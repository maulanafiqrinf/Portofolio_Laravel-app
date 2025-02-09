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
                                <h3>{!! nl2br(e($project->name)) !!}</h3>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
            <div class="pagination-wrapper text-center mt-4" id="project-pagination-controls"></div>
        </div>
    </div>
</section>

@include('frontend.project.modal')

@include('frontend.project.script')

