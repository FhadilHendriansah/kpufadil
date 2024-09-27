@extends('layouts.app')

@section('content')
<div class="container">
    <!-- Header Section -->
    <header class="text-white text-center py-5 mb-4">
        <div class="container">
            <h1 class="display-4 fw-bolder">Selamat Datang di Sistem Informasi KPU</h1>
            <p class="lead">Transparansi dan Kejujuran dalam Pemilu untuk Demokrasi yang Lebih Baik</p>
        </div>
    </header>

    <!-- Services Section -->
    <section class="py-5">
        <div class="container">
            <div class="row text-center">
                <div class="col-lg-4">
                    <div class="card h-100 shadow service-card">
                        <div class="card-body">
                            <i class="fas fa-vote-yea fa-3x text-danger mb-3"></i>
                            <h2 class="h5">Proses Pemilu</h2>
                            <p class="mb-0">Panduan lengkap tentang tahapan pemilu di Indonesia.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="card h-100 shadow service-card">
                        <div class="card-body">
                            <i class="fas fa-clock fa-3x text-danger mb-3"></i>
                            <h2 class="h5">Jadwal Pemilu</h2>
                            <p class="mb-0">Pemilu berikutnya: 17 April 2024</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="card h-100 shadow service-card">
                        <div class="card-body">
                            <i class="fas fa-newspaper fa-3x text-danger mb-3"></i>
                            <h2 class="h5">Berita Terkini</h2>
                            <p class="mb-0">Cek berita terbaru terkait pemilu di Indonesia.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- About Us Section -->
    <section class="py-5 bg-light">
        <div class="container text-center">
            <div class="row justify-content-center align-items-center">
                <div class="col-lg-8">
                    <h2 class="fw-bolder">Tentang KPU</h2>
                    <p class="lead">
                        Komisi Pemilihan Umum (KPU) bertanggung jawab atas pelaksanaan pemilihan umum yang jujur dan transparan di Indonesia. KPU bekerja untuk menjamin bahwa setiap suara dihitung dengan benar, serta memastikan proses demokrasi berjalan lancar.
                    </p>
                    <a class="btn btn-danger btn-lg" href="#">Pelajari Lebih Lanjut</a>
                </div>
            </div>
        </div>
    </section>

    <!-- Features Section -->
    <section class="py-5">
        <div class="container">
            <h2 class="text-center fw-bolder mb-4">Layanan Kami</h2>
            <div class="row text-center">
                <div class="col-lg-3 mb-5">
                    <div class="card h-100 shadow service-card">
                        <div class="card-body">
                            <i class="fas fa-check-circle fa-3x text-danger mb-3"></i>
                            <h3 class="h5">Pendaftaran Pemilih</h3>
                            <p>Daftarkan diri Anda sebagai pemilih dalam Pemilu.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 mb-5">
                    <div class="card h-100 shadow service-card">
                        <div class="card-body">
                            <i class="fas fa-info-circle fa-3x text-danger mb-3"></i>
                            <h3 class="h5">Informasi Pemilu</h3>
                            <p>Temukan informasi terbaru mengenai pemilu di sini.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 mb-5">
                    <div class="card h-100 shadow service-card">
                        <div class="card-body">
                            <i class="fas fa-balance-scale fa-3x text-danger mb-3"></i>
                            <h3 class="h5">Hukum dan Peraturan</h3>
                            <p>Pelajari tentang regulasi dan hukum pemilu di Indonesia.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 mb-5">
                    <div class="card h-100 shadow service-card">
                        <div class="card-body">
                            <i class="fas fa-users fa-3x text-danger mb-3"></i>
                            <h3 class="h5">Pengawasan Pemilu</h3>
                            <p>Ikuti proses pengawasan agar pemilu berjalan adil.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Testimonials Section -->
    <section class="py-5 bg-light">
        <div class="container">
            <h2 class="text-center fw-bolder mb-4">Apa Kata Masyarakat</h2>
            <div class="row text-center">
                <div class="col-lg-4 mb-4">
                    <div class="card h-100 shadow">
                        <div class="card-body">
                            <p class="fst-italic">"KPU telah melakukan tugasnya dengan sangat baik dalam memastikan pemilu berjalan lancar."</p>
                            <div class="fw-bold">Budi Setiawan</div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 mb-4">
                    <div class="card h-100 shadow">
                        <div class="card-body">
                            <p class="fst-italic">"Sistem pendaftaran pemilih sangat mudah dan cepat."</p>
                            <div class="fw-bold">Siti Nurhaliza</div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 mb-4">
                    <div class="card h-100 shadow">
                        <div class="card-body">
                            <p class="fst-italic">"Proses pemilu sangat transparan dan terbuka untuk diawasi."</p>
                            <div class="fw-bold">Andi Kurniawan</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Call to Action Section -->
    <section class="py-5 bg-danger text-white text-center">
        <div class="container">
            <h2 class="fw-bolder">Butuh Bantuan atau Informasi Lainnya?</h2>
            <p class="lead">Hubungi KPU melalui layanan pelanggan atau kunjungi kantor kami untuk informasi lebih lanjut.</p>
            <a class="btn btn-outline-light btn-lg" href="#">Hubungi Kami</a>
        </div>
    </section>

    <!-- Footer -->
    <footer class="bg-dark py-4 mt-auto">
        <div class="container px-5 text-center text-white">
            <small>&copy; KPU 2024. All Rights Reserved.</small>
        </div>
    </footer>
</div>

<!-- Optional JS for Animations and Icon Support -->
<script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
<script>
    // Example of adding some interactivity
    document.querySelectorAll('.service-card').forEach(card => {
        card.addEventListener('mouseenter', () => {
            card.classList.add('shadow-lg');
        });
        card.addEventListener('mouseleave', () => {
            card.classList.remove('shadow-lg');
        });
    });
</script>
@endsection
