{{-- <section id="contact" class="contact-area">
    <div class="container">
        <div class="container-inner">
            <div class="row">
                <div class="col-xl-12 col-lg-12">
                    <div class="section-title text-center wow fadeInUp delay-0-2s">
                        @if ($site && $site->site12)
                            <p>{{ $site->site12 }}</p>
                        @endif
                        @if ($site && $site->site13)
                            <h2>{{ $site->site13 }}</h2>
                        @endif
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4">
                    <div class="contact-content-part wow fadeInUp delay-0-2s">
                        <!-- Contact Info -->
                        <div class="single-contact wow fadeInUp" data-wow-delay=".2s">
                            <div class="contact-icon">
                                <i class="fa-solid fa-house"></i>
                            </div>
                            <h2>Alamat Rumah:</h2>
                            @if ($mes && $mes->lokasi)
                                <p>{{ $mes->lokasi }}</p>
                            @endif
                        </div>
                        <div class="single-contact wow fadeInUp" data-wow-delay=".4s">
                            <div class="contact-icon">
                                <i class="fa-regular fa-address-book"></i>
                            </div>
                            <h2>nomor HP:</h2>
                            @if ($mes && $mes->hp)
                                <p>{{ $mes->hp }}</p>
                            @endif
                        </div>
                        <div class="single-contact wow fadeInUp" data-wow-delay=".6s">
                            <div class="contact-icon">
                                <i class="fa-regular fa-envelope"></i>
                            </div>
                            <h2>Email Saya:</h2>
                            @if ($mes && $mes->email)
                                <p>{{ $mes->email }}</p>
                            @endif
                        </div>
                    </div>
                </div>
                <!-- Contact Form -->
                <div class="col-lg-8">
                    <div class="contact-form contact-form-area wow fadeInUp delay-0-4s">
                        <form id="contactForm" name="contactForm" action="{{ route('contactadd.store') }}"
                            method="POST">
                            @csrf
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="name">Nama</label>
                                        <input type="text" id="name" name="name" class="form-control"
                                            placeholder="Steve Milner" required>
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="email">Email</label>
                                        <input type="email" id="email" name="email" class="form-control"
                                            placeholder="hello@websitename.com" required>
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="hp">No HP</label>
                                        <input type="text" id="hp" name="hp" class="form-control"
                                            placeholder="Enter your subject" required>
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="pesan">Pesan</label>
                                        <textarea name="pesan" id="pesan" class="form-control" rows="4" placeholder="Write your message" required></textarea>
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group mb-0">
                                        <button type="submit" class="theme-btn">
                                            Kirim <i class="fa-regular fa-paper-plane"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </form>
                        @if (session('success'))
                            <div class="alert alert-success mt-3">
                                {{ session('success') }}
                            </div>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
</section> --}}
