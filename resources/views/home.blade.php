@extends('layout.mainlayout')
@section('title', 'Home')

@section('GambarJudul')
<header class="position-relative overflow-hidden w-100" style="
        background-image: url('{{ asset('images/Soal2F2.jpg') }}');
        background-size: cover;
        background-position: center;
        min-height: 100vh;
    ">
    <div class="container-fluid d-flex flex-column justify-content-center align-items-start h-100 text-white" style="background-color: rgba(0, 0, 0, 0.4); padding: 3rem;">
            <h1 class="display-3 fw-bold mb-1 d-none d-md-block" style="letter-spacing: 0.3rem;">STUDENT</h1>
            <h1 class="h1 fw-bold mb-1 d-md-none" style="letter-spacing: 0.3rem;">STUDENT</h1>

            <h1 class="display-3 fw-bold mb-3 d-none d-md-block" style="letter-spacing: 0.3rem;">REPRESENTATIVE</h1>
            <h1 class="h1 fw-bold mb-3 d-md-none" style="letter-spacing: 0.3rem;">REPRESENTATIVE</h1>
            
            <h1 class="display-3 fw-bold mb-4 d-none d-md-block" style="letter-spacing: 0.3rem;">BOARD</h1>
            <h1 class="h1 fw-bold mb-4 d-md-none" style="letter-spacing: 0.3rem;">BOARD</h1>

            <span class="bg-warning text-dark px-3 py-1 fw-bold mb-2 small">KABINET 2024-2025</span>
            <h2 class="h3 fw-light">PRIME</h2>
        </div>
    </header>
@endsection

@section('content')

    <section class="py-5 py-md-5" style="background-color: #f4f4f4;">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 order-2 order-lg-1">
                    <h3 class="mb-4 text-uppercase h5" style="color: #a38d58; font-weight: 300;">About Us</h3>
                    <img src="{{ asset('images/logo-srb-small.png') }}" alt="SRB Logo" class="img-fluid mb-4" style="max-height: 3rem;">
                    <h4 class="fw-bold mb-4 h4" style="color: #212529;">STUDENT REPRESENTATIVE BOARD</h4>
                    <p class="text-muted small">
                        Student Representative Board (SRB) adalah lembaga perwakilan mahasiswa yang berfokus pada tiga pilar utama: advokasi, pengawasan, dan legislasi. Kami menjembatani komunikasi antara mahasiswa dan pihak otoritas kampus, memastikan setiap suara didengar dan setiap kebijakan transparan.
                    </p>
                    <a href="{{ url('/profil') }}" class="btn btn-sm text-decoration-underline mt-3" style="color: #a38d58; border: 1px solid #a38d58; background-color: transparent;">LEARN MORE</a>
                </div>
                <div class="col-lg-6 text-center order-1 order-lg-2 mb-4 mb-lg-0">
                    <img src="{{ asset('images/logo-srb-large.png') }}" alt="Logo SRB" class="img-fluid p-4" style="max-width: 65%;">
                </div>
            </div>
        </div>
    </section>

    <section class="py-5 py-md-5 text-white" style="
        background-image: url('{{ asset('images/why-us-bg.jpg') }}');
        background-size: cover;
        background-position: center;
    ">
        <div class="container text-center py-5">
            <h2 class="mb-5 fw-light h3">KABINET <span class="fw-bold">PRIME</span></h2>
            <h4 class="mb-5 fw-light h6">Why you should trust our firm</h4>
            <div class="row">
                <div class="col-md-4 mb-4">
                    <div class="p-3 border border-warning h-100" style="background-color: rgba(0, 0, 0, 0.7);">
                        <p class="fw-bold h6">Integritas</p>
                        <p class="small">Kami menjunjung tinggi etika dan kejujuran dalam setiap tindakan, menjadikan kepercayaan mahasiswa sebagai prioritas utama kami.</p>
                        <p class="text-warning small">- Transparent Process</p>
                    </div>
                </div>
                <div class="col-md-4 mb-4">
                    <div class="p-3 border border-warning h-100" style="background-color: rgba(0, 0, 0, 0.7);">
                        <p class="fw-bold h6">Profesionalisme</p>
                        <p class="small">Anggota kami terlatih untuk menganalisis masalah secara mendalam dan menyajikan solusi yang konstruktif.</p>
                        <p class="text-warning small">- Dedicated Fungsio</p>
                    </div>
                </div>
                <div class="col-md-4 mb-4">
                    <div class="p-3 border border-warning h-100" style="background-color: rgba(0, 0, 0, 0.7);">
                        <p class="fw-bold h6">Advokasi Efektif</p>
                        <p class="small">Kami memiliki jalur komunikasi yang jelas dengan pihak otoritas untuk memastikan aspirasi terealisasi dengan baik.</p>
                        <p class="text-warning small">- Strategic Lobbying</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="py-5">
        <div class="container">
            <h2 class="text-center mb-5 fw-light h3">Our Main <span class="fw-bold">Practices</span></h2>
            <div class="row">
                <div class="col-md-4 mb-4">
                    <div class="p-4 border h-100" style="background-color: #e6e6e6;">
                        <h5 class="fw-bold h6" style="color: #a38d58;">Conflict Resolution</h5>
                        <p class="small text-muted">Kami menjembatani sengketa antara mahasiswa dan lembaga, memastikan penyelesaian yang adil dan sesuai aturan.</p>
                        <p class="small text-dark fw-bold">Komisi 1: Advokasi & Aspirasi</p>
                    </div>
                </div>
                <div class="col-md-4 mb-4">
                    <div class="p-4 border h-100" style="background-color: #dcdcdc;">
                        <h5 class="fw-bold h6" style="color: #a38d58;">Civil Litigation</h5>
                        <p class="small text-muted">Memberikan peninjauan hukum atas peraturan organisasi dan mendampingi mahasiswa dalam aspek legislatif.</p>
                        <p class="small text-dark fw-bold">Komisi 3: Yudikatif & Hukum</p>
                    </div>
                </div>
                <div class="col-md-4 mb-4">
                    <div class="p-4 border h-100" style="background-color: #e6e6e6;">
                        <h5 class="fw-bold h6" style="color: #a38d58;">General Consultancy</h5>
                        <p class="small text-muted">Melakukan fungsi pengawasan terhadap kinerja lembaga internal kampus dan memastikan akuntabilitas program kerja.</p>
                        <p class="small text-dark fw-bold">Komisi 2: Pengawasan</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="py-5">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 mb-4 order-2 order-lg-1">
                    <img src="{{ asset('images/handshake.jpg') }}" alt="Handshake" class="img-fluid rounded shadow-sm">
                </div>
                <div class="col-lg-6 order-1 order-lg-2 mb-4 mb-lg-0">
                    <h2 class="mb-4 fw-light h3">Our <span class="fw-bold">Services</span></h2>
                    <p class="text-muted mb-4 small">Sebagai perwakilan mahasiswa, layanan kami berfokus pada dukungan penuh untuk hak dan kebutuhan Anda:</p>
                    
                    <ul class="list-unstyled">
                        <li class="d-flex align-items-start mb-3">
                            <i class="bi bi-chat-dots-fill text-warning me-3" style="font-size: 1.5rem;"></i>
                            <div>
                                <h6 class="fw-bold mb-0 small">Submission of Aspirations</h6>
                                <p class="small text-muted">Sampaikan keluhan dan masukan terkait fasilitas, akademik, dan pelayanan kampus.</p>
                            </div>
                        </li>
                        <li class="d-flex align-items-start mb-3">
                            <i class="bi bi-file-earmark-check-fill text-warning me-3" style="font-size: 1.5rem;"></i>
                            <div>
                                <h6 class="fw-bold mb-0 small">Supervision Reporting</h6>
                                <p class="small text-muted">Laporkan indikasi penyimpangan kinerja lembaga kampus.</p>
                            </div>
                        </li>
                        <li class="d-flex align-items-start mb-3">
                            <i class="bi bi-book-fill text-warning me-3" style="font-size: 1.5rem;"></i>
                            <div>
                                <h6 class="fw-bold mb-0 small">Regulatory Review Request</h6>
                                <p class="small text-muted">Pengajuan peninjauan dan konsultasi mengenai peraturan organisasi dan kampus.</p>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
<h1>This is SRB!</h1>
    <p>This is a Laravel Blade template for the home page of a website. It extends a main layout and sets the page title to
        "Home". The content section includes a welcoming header and an empty paragraph, which can be filled with additional
        information or text as needed.</p>
</div>
    

@endsection
