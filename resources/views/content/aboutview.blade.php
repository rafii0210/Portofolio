@extends('layouts.aboutview')
@section('content')
    <!-- Section Title -->
    <div class="container section-title" data-aos="fade-up">
        <h2>About</h2>
        <p>Saya adalah lulusan SMK Akuntansi dengan pemahaman mendalam tentang prinsip-prinsip akuntansi, perpajakan, dan administrasi keuangan. Selama masa studi, saya telah mengembangkan keterampilan dalam pengelolaan buku besar, pembuatan laporan keuangan, dan penggunaan perangkat lunak akuntansi seperti MYOB dan Accurate. Saya memiliki kemampuan analisis yang baik, ketelitian dalam memproses data keuangan, serta kemampuan komunikasi yang efektif. Dengan semangat untuk terus belajar dan berkembang, saya siap untuk menghadapi tantangan di dunia profesional dan berkontribusi positif dalam tim keuangan.</p>
    </div><!-- End Section Title -->

    <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="row gy-4 justify-content-center">
            <div class="col-lg-4">
                <img src="{{ asset('Kelly/assets/img/Rafi.jpeg') }}" class="img-fluid" alt="">
            </div>
            <div class="col-lg-8 content">
                <div class="row">
                    <div class="col-lg-6">
                        <ul>
                            <li><i class="bi bi-chevron-right"></i> <strong>Address:</strong> <span>Jelambar,Jakarta Barat
                                </span></li>
                            <li><i class="bi bi-chevron-right"></i> <strong>Email:</strong>
                                <span>rafiimtiyaz4@gmail.com</span>
                            </li>
                            <li><i class="bi bi-chevron-right"></i> <strong>Phone:</strong> <span>+628811225926
                                    </span></li>
                     </div>
                </div>
            </div>
        </div>
@endsection
