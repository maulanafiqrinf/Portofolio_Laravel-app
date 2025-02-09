<section id="about" class="about-area">
    <div class="container">
        <div class="row">
            <div class="col-lg-4">
                <div class="about-image-part wow fadeInUp delay-0-3s">
                    <div class="about-image-part2">
                        <img src="{!! nl2br(e($mes->foto)) !!}" alt="About Me" width="600px" />
                    </div>
                    <h2>{!! nl2br(e($mes->name)) !!}</h2>
                    <p>{!! nl2br(e($mes->profesi)) !!}</p>
                    <p>{!! nl2br(e($mes->lokasi)) !!} | {!! nl2br(e($mes->hp)) !!} | {!! nl2br(e($mes->email)) !!}</p>
                    <div class="about-social text-center">
                        <ul>
                            <li><a href="{!! nl2br(e($mes->instagram)) !!}" target="_blank"><i
                                        class="fa-brands fa-instagram"></i></a></li>
                            <li><a href="{!! nl2br(e($mes->linkedln)) !!}" target="_blank"><i
                                        class="fa-brands fa-linkedin-in"></i></a></li>
                            <li><a href="{!! nl2br(e($mes->github)) !!}" target="_blank"><i
                                        class="fa-brands fa-github"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-lg-8">
                <div class="about-content-part wow fadeInUp delay-0-2s">
                    <p>Halo!</p>
                    <p>{!! nl2br(e($mes->detail)) !!}</p>
                    <div class="hero-btns">
                        <a href="{!! nl2br(e($mes->cv)) !!}" class="theme-btn" target="_blank">unduh CV <i
                                class="fa-regular fa-eye"></i></a>
                    </div>
                </div>
                <div class="about-content-part-bottom wow fadeInUp delay-0-2s">
                    <div class="company-list">
                        <div class="scroller" data-direction="left" data-speed="slow">
                            <div class="scroller__inner">
                                <h4>{!! nl2br(e($mes->profesi)) !!}</h4>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="about-content-part-bottom wow fadeInUp delay-0-2s">
                    <div class="company-list">
                        <div class="knowledeges-item-wrap">
                            <div class="knowledeges-item-wrap">
                                @foreach ($softskill as $skill)
                                    <span class="gk-item">• {!! nl2br(e($skill->name)) !!}</span>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <style>
                .gk-list {
                    padding: 0;
                    margin: 0;
                    list-style: none;
                    text-align: center;
                }

                .gk-item {
                    display: inline-block;
                    margin: 0 10px;
                    position: relative;
                    font-size: 14px;
                    color: #333;
                }
            </style>
        </div>
    </div>
</section>