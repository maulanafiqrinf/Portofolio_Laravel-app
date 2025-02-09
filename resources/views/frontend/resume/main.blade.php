<section id="resume" class="resume-area">
    <div class="container">
        <div class="resume-items">
            <div class="row">
                <div class="col-xl-6 col-md-12 pb-3">
                    <div class="single-resume">
                        <h2>Pengalaman</h2>
                        <div class="experience-list">
                            @foreach ($pengalaman as $experience)
                                <div class="resume-item wow fadeInUp delay-0-3s">
                                    <div class="icon">
                                        <i class="fa-solid fa-suitcase"></i>
                                    </div>
                                    <div class="content">
                                        <span class="years" style="font-size: 14px;">
                                            {{ \Carbon\Carbon::parse($experience->start_date)->format('F Y') }} -
                                            {{ empty($experience->completion_date) ? 'Sampai Sekarang' : \Carbon\Carbon::parse($experience->completion_date)->format('F Y') }}
                                        </span>
                                        <h4>{!! nl2br(e($experience->name)) !!} - {!! nl2br(e($experience->pihak)) !!}</h4>
                                        <p class="company" style="font-size: 16px;font-weight:bold">{!! nl2br(e($experience->position)) !!}</p>
                                        <span style="font-size: 14px; font-weight:bold">Deskripsi: </span>
                                        <p>{!! nl2br(e($experience->deskripsi)) !!}</p>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>

                <!-- Bagian Pendidikan -->
                <div class="col-xl-6 col-md-12">
                    <div class="single-resume">
                        <h2>Pendidikan</h2>
                        <div class="experience-list">
                            @foreach ($pendidikan as $education)
                                <div class="resume-item wow fadeInUp delay-0-3s">
                                    <div class="icon">
                                        <i class="fa-solid fa-school"></i>
                                    </div>
                                    <div class="content">
                                        <span class="years" style="font-size: 14px;">
                                            {{ \Carbon\Carbon::parse($education->start_date)->format('F Y') }} -
                                            {{ empty($education->completion_date) ? 'Sampai Sekarang' : \Carbon\Carbon::parse($education->completion_date)->format('F Y') }}
                                        </span>
                                        <h4>{!! nl2br(e($education->name)) !!}</h4>
                                        <p class="company" style="font-size: 16px;font-weight:bold">{!! nl2br(e($education->jurusan)) !!}</p>
                                        <span style="font-size: 14px; font-weight:bold">Deskripsi: </span>
                                        <p>{!! nl2br(e($education->deskripsi)) !!}</p>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
