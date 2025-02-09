@foreach ($proyek as $project)
    <div class="modal fade" id="projectModal-{{ $project->id }}" tabindex="-1"
        aria-labelledby="projectModalLabel-{{ $project->id }}" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="projectModalLabel-{{ $project->id }}">Detail {!! nl2br(e($project->name)) !!}</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="container">
                        <div class="row">
                            <div class="col-sm-12 text-center pb-3">
                                <p>{{ \Carbon\Carbon::parse($project->start_date)->translatedFormat('F Y') }} - 
                                    {{ empty($project->completion_date) ? 'Sampai Sekarang' : \Carbon\Carbon::parse($project->completion_date)->translatedFormat('F Y') }}
                                </p>
                                <h1>{!! nl2br(e($project->name)) !!}</h1>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-6">
                                <span style="font-size: 16px; font-weight:bold">Posisi:</span>
                                <p style="font-size: 14px;">{{ e($project->position) }}</p>
                                <span style="font-size: 16px; font-weight:bold">Teknologi: </span>
                                <p style="font-size: 14px;">{{ e($project->technology) }}</p>
                            </div>
                            <div class="col-sm-6">
                                <span style="font-size: 16px; font-weight:bold">Pihak:</span>
                                <p style="font-size: 14px;">{{ e($project->pihak) }}</p>
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