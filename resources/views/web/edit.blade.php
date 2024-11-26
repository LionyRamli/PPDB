<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PPDB | SMK CINTA KASIH TZU CHI</title>
    <link rel="icon" href="{{ asset('img/noimg.png') }}" type="image/x-icon" />
    <link rel="stylesheet" href="{{ asset('css/app2.css') }}" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>

<section>
    <div class="sidebar">
        <h1 class="logo">SMK CINTA KASIH TZU CHI</h1>

        <ul class="nav">
            <li><a href="#"><i class="fa fa-windows"></i> Dashboard</a></li>
            <li class="active"><a href="#"><i class="fa fa-shopping-bag"></i> Students</a></li>
            <li><a href="#"><i class="fa fa-pie-chart"></i> Statistic</a></li>
            <li><a href="#"><i class="fa fa-cube"></i> Database</a></li>
            <li><a href="#"><i class="fa fa-database"></i> Settings</a></li>
        </ul>

        <ul class="social">
            <li><a href="#">Logout</a></li>
        </ul>

    </div>

    <div class="main">       
        <div class="head-section">
            <div class="col-6">
                <h2>Welcome, Admin!</h2>
                <p>Admin Dashboard</p>
            </div>

            <div class="col-6" style="text-align: right;">
                <i class="fa fa-bell-o hicon"></i>
                <input type="text" class="search">
                <i class="fa fa-search hicon sicon"></i>

                <img src="{{asset('img/noimg.png')}}" class="user">

                <div class="profile-div">
                    <p><i class="fa fa-user"></i>Profile</p>
                    <p><i class="fa fa-cog"></i>Settings</p>
                    <p><i class="fa fa-power-off"></i>Log Out</p>
                </div>
                <div class="notification-div">
                    <p>Success! Your registration is now complete!</p>
                    <p>Here's some information you may find useful!</p>            
                </div>
            </div>
            <div class="clearfix"></div>
        </div>

        <br><br>
        <div class="content">
            <p>Edit Data</p><br><br>
            <fieldset>
                
            <form method="post" action="{{route('student.update', ['student' => $student])}}"> 
            @csrf
            @method('put')
            <div class="form-group">
                <label for="nisn">NISN:</label>
                <input type="text" id="nisn" name="nisn" value="{{ $student->nisn }}" required>
            </div>

            <div class="form-group">
                <label for="nama_lengkap">Nama Lengkap:</label>
                <input type="text" id="nama_lengkap" name="nama_lengkap" value="{{ $student->nama_lengkap }}" required>
            </div>

            <div class="form-group">
                <label for="nik">NIK:</label>
                <input type="text" id="nik" name="nik" value="{{ $student->nik }}" required>
            </div>

            <div class="form-group">
                <label for="jurusan">Jurusan:</label>
                <input type="text" id="jurusan" name="jurusan" value="{{ $student->jurusan }}" required>
            </div>

            <div class="form-group">
                <label for="jk">Jenis Kelamin:</label>
                <input type="text" id="jk" name="jk" value="{{ $student->jk }}" required>
            </div>

            <div class="form-group">
                <label for="tempat_lahir">Tempat Lahir:</label>
                <input type="text" id="tempat_lahir" name="tempat_lahir" value="{{ $student->tempat_lahir }}" required>
            </div>

            <div class="form-group">
                <label for="tgl_lahir">Tanggal Lahir:</label>
                <input type="text" id="tgl_lahir" name="tgl_lahir" value="{{ $student->tgl_lahir }}" required>
            </div>

            <div class="form-group">
                <label for="agama">Agama:</label>
                <input type="text" id="agama" name="agama" value="{{ $student->agama }}" required>
            </div>
            
            <div class="form-group">
                <label for="alamat_siswa">Alamat Siswa:</label>
                <input type="text" id="alamat_siswa" name="alamat_siswa" value="{{ $student->alamat_siswa }}" required>
            </div>

            <div class="form-group">
                <label for="kelas">Kelas:</label>
                <input type="text" id="kelas" name="kelas" value="{{ $student->kelas }}" required>
            </div>

            <div class="form-group">
                <label for="anak_ke">Anak Ke:</label>
                <input type="number" id="anak_ke" name="anak_ke" value="{{ $student->anak_ke }}" required>
            </div>

            <div class="form-group">
                <label for="nama_ayah">Nama Ayah:</label>
                <input type="text" id="nama_ayah" name="nama_ayah" value="{{ $student->nama_ayah }}" required>
            </div>

            <div class="form-group">
                <label for="nik_ayah">NIK Ayah:</label>
                <input type="text" id="nik_ayah" name="nik_ayah" value="{{ $student->nik_ayah }}" required>
            </div>

            <div class="form-group">
                <label for="pekerjaan_ayah">Pekerjaan Ayah:</label>
                <input type="text" id="pekerjaan_ayah" name="pekerjaan_ayah" value="{{ $student->pekerjaan_ayah }}" required>
            </div>

            <div class="form-group">
                <label for="penghasilan_ayah">Penghasilan Ayah:</label>
                <input type="text" id="penghasilan_ayah" name="penghasilan_ayah" value="{{ $student->penghasilan_ayah }}" required>
            </div>

            <div class="form-group">
                <label for="nama_ibu">Nama Ibu:</label>
                <input type="text" id="nama_ibu" name="nama_ibu" value="{{ $student->nama_ibu }}" required>
            </div>

            <div class="form-group">
                <label for="nik_ibu">NIK Ibu:</label>
                <input type="text" id="nik_ibu" name="nik_ibu" value="{{ $student->nik_ibu }}" required>
            </div>

            <div class="form-group">
                <label for="pekerjaan_ibu">Pekerjaan Ibu:</label>
                <input type="text" id="pekerjaan_ibu" name="pekerjaan_ibu" value="{{ $student->pekerjaan_ibu }}" required>
            </div>

            <div class="form-group">
                <label for="penghasilan_ibu">Penghasilan Ibu:</label>
                <input type="text" id="penghasilan_ibu" name="penghasilan_ibu" value="{{ $student->penghasilan_ibu }}" required>
            </div>

            <div class="form-group">
                <button type="submit">Simpan Perubahan</button>
            </div>

            </fieldset>
        </div>
    </div>
</section>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<script>
    $(document).ready(function(){
        $(".user").click(function(){
            $(".profile-div").toggle(1000);
        });
        $(".hicon:nth-child(1)").click(function(){
            $(".notification-div").toggle(1000);
        });
        $(".sicon").click(function(){
            $(".search").toggle(1000);
        });
    });
</script>

<script type="text/javascript">
    $('li').click(function(){
        $('li').removeClass("active");
        $(this).addClass("active");
    });
</script>

</body>
</html>
