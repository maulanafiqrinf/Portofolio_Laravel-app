<section id="skills" class="skill-area">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-xl-12 col-lg-12">
                <div class="section-title text-center mb-60 wow fadeInUp delay-0-2s">
                    <h2>Keterampilan Saya</h2>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="skill-items-wrap">
                    <div class="row">
                        @foreach ($hardskill as $skill)
                            <div class="col-lg-2 col-md-3 col-sm-6 col-12 mb-4">
                                <div class="skill-item wow fadeInUp delay-0-2s text-center">
                                    <img src="{{ $skill->icon }}" alt="Skill" class="img-fluid" style="max-width: 80px;" />
                                    <h5 class="mt-3">{{ e($skill->name) }}</h5>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>