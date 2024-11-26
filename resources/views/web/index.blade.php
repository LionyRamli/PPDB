<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PPDB | SMK CINTA KASIH TZU CHI</title>
    <link rel="icon" href="{{ asset('img/noimg.png') }}" type="image/x-icon" />
    <link rel="stylesheet"  href="{{ asset('css/app.css') }}"  />
    <link rel="stylesheet" href="fontawesome/css/all.min.css">
</head>
<body>
<div>
        @if($errors->any())
        <ul>
            @foreach($errors->all() as $error)
            <li>{{$error}}</li>
            @endforeach
        </ul>
        @endif
    </div>  
    <!--header and navar-->
    <div class="nav-container">
        <header>
            <label for="hamburger"></label>
            <input type="checkbox" id="hamburger">
            <div class="logo">
                <img src="{{ asset('img/noimg.png') }}" alt="logo">
            </div>
            <nav>
                <ul>
                    <li><a href="{{route('public.home')}}" class="active">HOME</a></li>
                    <li><a href="{{ route('login') }}">MASUK SISWA</a></li>
                    <li><a href="{{route('web.loginAdmin')}}">MASUK ADMIN</a></li>
                </ul>
            </nav>
        </header>
    </div>

    <!-- HERO -->

    <div class="hero-container">
        <div class="hero-text">
            <h1>PPDB SMK CINTA KASIH TZU CHI</h1>
            <p>SEKOLAH PUSAT KEUNGGULAN</p>
            <a href="{{route('web.daftar')}}" class="button">DAFTAR SEKARANG</a>
        </div>
    </div>

    <!-- SHOWCASE -->
    
    <div class="showcase-container">
        <section class="showcase">
            <div class="showcase-image">
                <img src="{{ asset('img/1.jpg') }}" alt="">
            </div>
            <div class="showcase-text">
                <h1>Rekayasa Perangkat Lunak</h1>
                <p>Salah satu pilihan jurusan yang ada di SMK Cinta Kasih Tzu Chi
                    Dengan Program Keahlian Jurusan yang mempelajari dan mendalami semua cara-cara pengembangan perangkat lunak 
                    termasuk pembuatan, pemeliharaan, manajemen organisasi pengembangan perangkat lunak dan manajemen kualitas.
                </p>
                <p>Sebagai tambahan terdapat Robotik, Videografi/Fotografi, Editing juga Design</p>
            </div>
        </section>
    </div>

    <div class="showcase-container">
        <section class="showcase">
            <div class="showcase-text">
                <h1>Akuntansi Keuangan Lembaga</h1>
                <p>Program Keahlian Akuntasu dengan kompetensi dalam mengelola seluruh transaksi keuangan. 
                ,melakukan pencatatan keuangan secara manual maupun komputerisasi, 
                dan membekali peserta dengan keterampilan akuntansi,serta menggunakan alat digital dalam pengimplementasiannya
                </p>
                <p>Dasar-dasar ilmu akuntansi, seperti konsep debit-kredit, neraca keuangan, atau menyajikan laporan keuangan.</p>
            </div>
            <div class="showcase-image">
                <img src="{{ asset('img/2.jpg') }}" alt="">
            </div>
        </section>
    </div>

    <div class="showcase-container">
        <section class="showcase">
            <div class="showcase-image">
                <img src="{{ asset('img/6.jpg') }}" alt="">
            </div>
            <div class="showcase-text">
                <h1>Manajemen Perkantoran Lembaga Bisnis</h1>
                <p>Program Keahlian di SMK Cinta Kasih Tzu Chi dimana para peserta didik diberikan bekal tentang berbagai informasi layanan dibidang administrasi
                baik secara pengetahuan, keterampilan, dan sikap dalam menyelesaikan pekerjaan-pekerjaan perusahaan atau kantor.
                </p>
                <p>Kompetensi Keahlian dari Program Keahlian Manajemen Perkantoran pada Bidang Keahlian Bisnis dan Manajemen</p>
            </div>
        </section>
    </div>
    <!--About US-->
    <div class="product-container">
    <header>
        <h1>SALAH SATU SMK TERBAIK DI JAKARTA</h1>
        <hr>
        <p>Mencetak lulusan yang memiliki budi pekerti luhur, bijaksana, sehat jasmani, dan berkehidupan sosial yang baik serta berbudaya humanis.</p>
    </header>

    <section>
        <div>
            <i class="fas fa-monument fa-4x"></i>
            <h4>Berbudaya Humanis</h4>
            <p>Mengutamakan nilai-nilai kemanusiaan dengan memastikan lulusan memiliki sikap bijaksana dan luhur dalam berbagai aspek kehidupan.</p>
        </div>
        <div>
            <i class="fas fa-store-alt fa-4x"></i>
            <h4>Tenaga Pendidik yang Ahli</h4>
            <p>Menyediakan tenaga pendidik yang ahli dalam bidangnya untuk memastikan kualitas pembelajaran dan pengembangan kompetensi siswa.</p>
        </div>
        <div>
            <i class="fas fa-globe fa-4x"></i>
            <h4>Integrasi Dunia Kerja</h4>
            <p>Menerapkan integrasi dengan dunia kerja agar lulusan siap menghadapi tantangan di lingkungan pekerjaan dengan keterampilan yang relevan.</p>
        </div>
        <div>
            <i class="fas fa-store fa-4x"></i>
            <h4>Go Internasional</h4>
            <p>Mendorong kemajuan internasional dengan memberikan kesempatan kepada siswa untuk terlibat dalam lingkungan pembelajaran global.</p>
        </div>
    </section>
    </div>

    <!--Jelajahi Potensi Kami-->
    <section class="explore-container">
        <div class="explore-text">
            <h1>Temukan Potensi di Sekolah Kami</h1>
            <p>Jelajahi peluang unggul di SMK terbaik di Jakarta. Lulusan kami ditanamkan dengan karakter unggul, bijaksana, dan siap bersaing di dunia kerja. Bergabunglah sekarang untuk meraih masa depan gemilang!</p>
            <a href="{{route('web.daftar')}}" class="button">DAFTAR SEKARANG</a>
        </div>
    </section>


    <!-- blog update -->

    <div class="blog-container">
        <header>
            <h1>KEGIATAN</h1>
            <hr>
            <p>Informasi tentang beberapa kegiatan yang sedang berlangsung di sekolah SMK Cinta Kasih Tzu Chi.</p>
        </header>
        <div class="blog-index">
            <div class="snippet">
                <figure>
                    <img class="snippet-img" src="{{ asset('img/3.jpg') }}">
                </figure>
                <div class="snippet-txt">
                    <h2>Tzu Shao</h2>
                    <p>Kegiatan yang dilaksanakan setiap bulan oleh siswa-siswi SMK Cinta Kasih Tzu Chi dalam upaya pengembangan diri dan kontribusi positif bagi lingkungan sekitar.</p>
                    <p><small>Last Update 5 days ago</small></p>
                </div>
            </div>

            <div class="snippet">
                <figure>
                    <img class="snippet-img" src="{{ asset('img/4.jpg') }}">
                </figure>
                <div class="snippet-txt">
                    <h2>Perjusa</h2>
                    <p>Melibatkan siswa-siswi dalam kegiatan pendidikan nonformal untuk meningkatkan kesadaran sosial, leadership, kreativitas
                        dan kritis serta kepedulian terhadap masalah-masalah sekitar.</p>
                    <p><small>Last Update 23 days ago</small></p>
                </div>
            </div>

            <div class="snippet">
                <figure>
                    <img class="snippet-img" src="{{ asset('img/5.jpg') }}">
                </figure>
                <div class="snippet-txt">
                    <h2>Ekstrakurikuler</h2>
                    <p>Menawarkan beragam kegiatan ekstrakurikuler yang dapat diikuti oleh
                    siswa-siswi untuk mengembangkan bakat dan minat mereka di luar kegiatan akademis.</p>
                    <p><small>Last Update 13 days ago</small></p>
                </div>
            </div>
        </div>
    </div>

    <!-- Footer -->
    <footer class="footer-container">
        <div class="footer-menu">
            <section>
                <div class="logo-container">
                    <a href="#">
                        <img src="{{ asset('img/noimg.png') }}">
                    </a>
                </div>
                <p>“Pendidikan anak adalah mengajarkan tata krama,
                     mengasuh budi pekerti, menunjukkan jalan dan memandu ke arah yang benar.”
                     - Master Cheng Yen
                </p>
            </section>
            <section>
                <h3>Community</h3>
                <ul>
                    <li><a href="#">Activity</a></li>
                    <li><a href="#">Members</a></li>
                    <li><a href="#">Groups</a></li>
                    <li><a href="#">Forums</a></li>
                </ul>
            </section>
            <section>
                <h3>Our Services</h3>
                <ul>
                    <li><a href="#">Our Mission</a></li>
                    <li><a href="#">Help/Contact Us</a></li>
                    <li><a href="#">Privacy Policy</a></li>
                    <li><a href="#">Cookie Policy</a></li>
                    <li><a href="#">Terms & Condition</a></li>
                </ul>
            </section>
            <section>
                <h3>Hubungi Kami</h3>
                <div><i class="fas fa-envelope fa-fw"></i>info@cintakasihtzuchi.sch.id</div>
                <div><i class="fas fa-phone fa-fw"></i>+62 812 9370 7170</div>
                <div><i class="fas fa-globe fa-fw"></i>https://cintakasihtzuchi.sch.id/</div>
            </section>
        </div>

        <div class="footer-copyright">
            <div>
                <small>&copy; SMK CINTA KASIH 2024</small>
            </div>
            <div>
                <a href="#"><i class="fab fa-facebook fa-lg"></i></a>
                <a href="#"><i class="fab fa-twitter fa-lg"></i></a>
                <a href="#"><i class="fab fa-instagram fa-lg"></i></a>
                <a href="#"><i class="fab fa-google-plus fa-lg"></i></a>
                <a href="#"><i class="fab fa-github fa-lg"></i></a>
            </div>
        </div>
    </footer>
</body>
</html>