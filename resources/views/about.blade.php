@extends('layouts.app')
@extends('layouts.navbar')

@section('content')
    <div class="container mt-5">
        <div class="row">
            <!-- Profile Card -->
            <div class="col-md-4 mb-4">
                <div class="card">
                    <img src="/asset/img/profil.jpg" class="card-img-top img-fluid rounded-circle" alt="Profile Picture">
                    <div class="card-body text-center">
                        <h4 class="card-title">Hai, saya Avatar</h4>
                        <p class="card-text">Saya seorang Influencer tentang elemen atau kekuatan spiritual.</p>
                    </div>
                </div>
            </div>

            <!-- Profile Info Tab -->
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">
                        <ul class="nav nav-tabs card-header-tabs" id="profileTab" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" id="about-tab" data-bs-toggle="tab" href="#about" role="tab"
                                    aria-controls="about" aria-selected="true">Tentang</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="contact-tab" data-bs-toggle="tab" href="#contact" role="tab"
                                    aria-controls="contact" aria-selected="false">Kontak</a>
                            </li>
                        </ul>
                    </div>
                    <div class="card-body">
                        <div class="tab-content" id="profileTabContent">
                            <!-- Tab Tentang Saya -->
                            <div class="tab-pane fade show active" id="about" role="tabpanel"
                                aria-labelledby="about-tab">
                                <h5 class="card-title">Tentang Saya</h5>
                                <p class="card-text">Halo! Saya adalah seorang yang sangat tertarik dengan kekuatan spiritual dan elemen alam. Melalui perjalanan saya, saya ingin berbagi pengetahuan dan pengalaman seputar kekuatan yang tersembunyi dalam elemen-elemen alam ini.</p>
                                <p class="card-text">Dari pengaruh air, api, tanah, dan udara, saya membantu orang untuk memahami potensi diri mereka melalui hubungan mereka dengan alam sekitar. Selamat datang untuk lebih mengenal dunia spiritual melalui saya!</p>
                            </div>
                            <!-- Tab Kontak -->
                            <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">
                                <h5 class="card-title">Kontak</h5>
                                <p><strong>Email:</strong> user@example.com</p>
                                <p><strong>Telepon:</strong> +62 123 456 7890</p>
                                <p><strong>Instagram:</strong> @avatar_spiritual</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
