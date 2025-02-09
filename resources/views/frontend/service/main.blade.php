<section id="service" class="services-area innerpage-single-area">
    <div class="container">
        <div class="container-inner">
            <div class="row">
                <div class="col-xl-12 col-lg-12">
                    <div class="section-title text-center wow fadeInUp delay-0-2s">
                            <h2>Layanan</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                @if ($services->isNotEmpty())
                    @foreach ($services as $service)
                        <div class="col-lg-4 col-md-6">
                            <div class="service-item wow fadeInUp delay-0-2s">
                                <img src="{!! nl2br(e($service->image)) !!}" alt="service">
                                <h4>{!! nl2br(e($service->name)) !!}</h4>
                                <p>{!! nl2br(e($service->deskripsi)) !!}</p>
                            </div>
                        </div>
                    @endforeach
                @else
                    <div class="col-md-12 text-center">
                        <p>Data tidak ditemukan.</p>
                    </div>
                @endif
            </div>
        </div>
    </div>
</section>