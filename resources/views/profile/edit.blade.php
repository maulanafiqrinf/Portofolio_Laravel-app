@extends('templates.backoffice.app')

@section('title', 'Profile')

@section('content')
    <div class="row gx-3">
        <div class="col-xl-12">
            <div class="card">
                <div class="card-body">
                    <div class="custom-tabs-container">
                        <ul class="nav nav-tabs" id="customTab2" role="tablist">
                            <li class="nav-item" role="presentation">
                                <a class="nav-link active" id="tab-oneA" data-bs-toggle="tab" href="#oneA" role="tab"
                                    aria-controls="oneA" aria-selected="true"><i class="ri-profile-line"></i> Informasi Pribadi</a>
                            </li>
                            <li class="nav-item" role="presentation">
                                <a class="nav-link" id="tab-twoA" data-bs-toggle="tab" href="#twoA" role="tab"
                                    aria-controls="twoA" aria-selected="false"><i class="ri-alert-line"></i>
                                    Update Password</a>
                            </li>
                            <li class="nav-item" role="presentation">
                                <a class="nav-link" id="tab-threeA" data-bs-toggle="tab" href="#threeA" role="tab"
                                    aria-controls="threeA" aria-selected="false"><i class="ri-bank-card-line"></i> Hapus Akun</a>
                            </li>
                        </ul>
                        <div class="tab-content h-350">
                            <div class="tab-pane fade show active" id="oneA" role="tabpanel">

                                <!-- Row starts -->
                                @include('profile.partials.update-profile-information-form')
                                <!-- Row ends -->

                            </div>
                            <div class="tab-pane fade" id="twoA" role="tabpanel">

                                <!-- Row starts -->
                                @include('profile.partials.update-password-form')
                                <!-- Row ends -->

                            </div>
                            <div class="tab-pane fade" id="threeA" role="tabpanel">

                                <!-- Row starts -->
                                @include('profile.partials.delete-user-form')
                                <!-- Row ends -->

                            </div>
                        </div>
                        <!-- Tab content ends -->
                    </div>
                    <!-- Buttons ends -->

                </div>
            </div>
        </div>
    </div>
@endsection
