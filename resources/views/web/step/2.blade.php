
    
  <div class="panel">
    <div class="panel-heading" style="background: #3c4542; color: honeydew;">
      <h2 align="center" style="margin-top: 10px;">FORM ISIAN<br><b>IDENTITAS DIRI CALON SISWA</b> </h2>
      <!-- <hr> -->
    </div>
    <div class="panel-body">
        <div class="form-group" style="padding-bottom:30px;">
        <label class="col-sm-3 control-label" style="text-align:right; margin-top:6px">N.I.S.N</label>
        <div class="col-sm-9 prepend-icon" style="margin-top:1px;">
          <input type="number" name="nisn" class="form-control bg-blue class" onkeypress="return hanyaAngka(this);" maxlength="10" placeholder="Nomor Induk Siswa Nasional" data-parsley-group="block1" data-parsley-errors-container='div[id="error-nisn"]' required>
          <i class="fa fa-users" style="margin-left:15px;"></i>
          <div id="error-nisn" style=" background:#FFBABA; color: #D8000C; width:auto; padding-left:10px; font-size: 10px;"></div>
          <div id="pesan_komentar">*Sesuai dengan data dari web http://nisn.data.kemdikbud.go.id/kartu NISN</div>
        </div>
      </div>  

      <div class="form-group" style="padding-bottom:30px;">
        <label class="col-sm-3 control-label" style="text-align:right; margin-top:6px">Nama Lengkap</label>
        <div class="col-sm-9 prepend-icon">
          <input type="text" name="nama_lengkap" class="form-control bg-blue" placeholder="Nama lengkap Calon Siswa" maxlength="100" data-parsley-group="block1" data-radio="iradio_square-blue" data-parsley-errors-container='div[id="error-nama"]' required>
          <i class="fa fa-user" style="margin-left:15px;"></i>
          <div id="error-nama" style=" background:#FFBABA; color: #D8000C; width:auto; padding-left:10px; font-size: 10px;"></div>
          <div id="pesan_komentar">*Sesuai dengan akte kelahiran/ijazah</div>
        </div>
      </div>

      <div class="form-group" style="padding-bottom:30px;">
        <label class="col-sm-3 control-label" style="text-align:right; margin-top:6px">NIK Siswa </label>
        <div class="col-sm-9 prepend-icon">
          <input type="text" name="nik" class="form-control bg-blue" placeholder="NIK Siswa" maxlength="100" data-parsley-group="block1" data-radio="iradio_square-blue" data-parsley-errors-container='div[id="error-nik1"]' required>
          <i class="fa fa-user" style="margin-left:15px;"></i>
          <div id="error-nik1" style=" background:#FFBABA; color: #D8000C; width:auto; padding-left:10px; font-size: 10px;"></div>
          <div id="pesan_komentar">*Sesuai dengan akte kelahiran/ijazah</div>
        </div>
      </div>

      <div class="form-group">
        <label class="col-sm-3 control-label" style="text-align:right; margin-top:6px">Jurusan </label>
        <div class="col-sm-9" style="margin-top:3px;">
          <select class="form-control bg-blue class" data-placeholder="Pilih Jurusan yang Diinginkan" name="jurusan" data-parsley-group="block1" data-parsley-errors-container='div[id="error-jurusan"]' required>
            <option value="">Pilih salah satu</option>
              <option value="Rekayasa Perangkat Lunak">Rekayasa Perangkat Lunak</option>
              <option value="Manajemen Perkantoran Lingkungan Bisnis">Manajemen Perkantoran Lingkungan Bisnis</option>
              <option value="Akuntansi Keuangan Lembaga">Akuntasi Keuangan Lembaga</option>
          </select>
          <div id="error-jurusan" style=" background:#FFBABA; color: #D8000C; width:auto; padding-left:10px; font-size: 10px;"></div>
          <div id="pesan_komentar">*Pilih jurusan yang diinginkan</div>
        </div>
      </div>

      <div class="form-group">
        <label class="col-sm-3 control-label" style="text-align:right; margin-top:-3px">Jenis Kelamin </label>
        <div class="col-sm-9">
          <div class="radio" style="margin-top:3px;margin-left:-20px;">
            <label>
              <input type="radio" value="Laki-Laki" name="jk" data-parsley-group="block1" data-radio="iradio_square-blue" data-parsley-errors-container='div[id="condition-error"]' required> <i class="fa fa-male"></i> &nbsp;Laki-laki
            </label>
          </div>
          <div class="radio" style="margin-left:-20px;">
            <label>
              <input type="radio" value="Perempuan" name="jk" data-parsley-group="block1" data-radio="iradio_square-blue" data-parsley-errors-container='div[id="condition-error"]' required> <i class="fa fa-female"></i> &nbsp;Perempuan
            </label>
          </div>
          <div id="condition-error" style=" background:#FFBABA; color: #D8000C; width:auto; padding-left:10px; font-size: 10px;"></div>
        </div>
      </div>

      <div class="form-group">
        <label class="col-sm-3 control-label" style="text-align:right; margin-top:6px">Tempat Kelahiran </label>
        <div class="col-sm-9 prepend-icon">
          <input type="text" name="tempat_lahir" class="form-control bg-blue class" placeholder="Tempat Kelahiran Calon Siswa" data-parsley-group="block1" data-parsley-errors-container='div[id="error-tempat_lahir"]' required>
          <i class="fa fa-building" style="margin-left:15px;"></i>
          <div id="error-tempat_lahir" style=" background:#FFBABA; color: #D8000C; width:auto; padding-left:10px; font-size: 10px;"></div>
        </div>
      </div>

      <div class="form-group">
        <label class="col-sm-3 control-label" style="text-align:right; margin-top:6px">Tanggal Kelahiran </label>
        <div class="col-sm-9 prepend-icon">
          <input type="text" name="tgl_lahir" class="form-control bg-blue class" placeholder="Tanggal Kelahiran Calon Siswa" data-parsley-group="block1" data-parsley-errors-container='div[id="error-tgl_lahir"]' required>
          <i class="fa fa-user" style="margin-left:15px;"></i>
          <div id="error-tgl_lahir" style=" background:#FFBABA; color: #D8000C; width:auto; padding-left:10px; font-size: 10px;"></div>
        </div>
      </div>

      <div class="form-group">
        <label class="col-sm-3 control-label" style="text-align:right; margin-top:6px">Agama </label>
        <div class="col-sm-9" style="margin-top:3px;">
          <select class="form-control bg-blue class" data-placeholder="Pilih Agama yang dianut" name="agama" data-parsley-group="block1" data-parsley-errors-container='div[id="error-agama"]' required>
            <option value="">Pilih agama yang dianut</option>
            <option value="Islam">Islam</option>
            <option value="Kristen">Kristen</option>
            <option value="Katolik">Katolik</option>
            <option value="Hindu">Hindu</option>
            <option value="Budha">Budha</option>
            <option value="Konghucu">Konghucu</option>
            <option value="lainnya">Lainnya</option>
          </select>
          <div id="error-agama" style=" background:#FFBABA; color: #D8000C; width:auto; padding-left:10px; font-size: 10px;"></div>
        </div>
      </div>

      <div class="form-group">
        <label class="col-sm-3 control-label" style="text-align:right; margin-top:6px">Kelas</label>
        <div class="col-sm-9" style="margin-top:3px;">
          <select class="form-control bg-blue class" data-placeholder="Pilih Kelas" name="kelas" data-parsley-group="block1" data-parsley-errors-container='div[id="error-kelas"]' required>
            <option value="">Pilih Kelas </option>
            <option value="10">Kelas 10</option>
            <option value="11">Kelas 11</option>
            <option value="12">Kelas 12</option>
          </select>
          <div id="error-kelas" style=" background:#FFBABA; color: #D8000C; width:auto; padding-left:10px; font-size: 10px;"></div>
        </div>
      </div>

      <div class="form-group" style="padding-bottom:30px;">
        <label class="col-sm-3 control-label" style="text-align:right; margin-top:6px">Anak Ke </label>
        <div class="col-sm-9 prepend-icon">
          <input type="text" name="anak_ke" class="form-control bg-blue" placeholder="Anak Ke-" maxlength="100" data-parsley-group="block1" data-radio="iradio_square-blue" data-parsley-errors-container='div[id="error-anak_ke"]' required>
          <i class="fa fa-user" style="margin-left:15px;"></i>
          <div id="error-anak_ke" style=" background:#FFBABA; color: #D8000C; width:auto; padding-left:10px; font-size: 10px;"></div>
          <div id="pesan_komentar">*Isi dengan angka</div>
        </div>
      </div>

      <div class="form-group" style="padding-bottom:30px;">
        <label class="col-sm-3 control-label" style="text-align:right; margin-top:6px">Alamat</label>
        <div class="col-sm-9 prepend-icon">
          <input type="text" name="alamat_siswa" class="form-control bg-blue" placeholder="Alamat Calon Siswa" maxlength="100" data-parsley-group="block1" data-radio="iradio_square-blue" data-parsley-errors-container='div[id="error-alamat"]' required>
          <i class="fa fa-user" style="margin-left:15px;"></i>
          <div id="error-alamat" style=" background:#FFBABA; color: #D8000C; width:auto; padding-left:10px; font-size: 10px;"></div>
          <div id="pesan_komentar">*Sesuai dengan Kartu Keluarga</div>
        </div>
      </div>

      <div class="form-group" style="padding-bottom:30px;">
        <label class="col-sm-3 control-label" style="text-align:right; margin-top:6px">Nama Ayah</label>
        <div class="col-sm-9 prepend-icon">
          <input type="text" name="nama_ayah" class="form-control bg-blue" placeholder="Nama Ayah" maxlength="100" data-parsley-group="block1" data-radio="iradio_square-blue" data-parsley-errors-container='div[id="error-ayah"]' required>
          <i class="fa fa-user" style="margin-left:15px;"></i>
          <div id="error-ayah" style=" background:#FFBABA; color: #D8000C; width:auto; padding-left:10px; font-size: 10px;"></div>
          <div id="pesan_komentar">*Sesuai dengan KTP</div>
        </div>
      </div>

      <div class="form-group" style="padding-bottom:30px;">
        <label class="col-sm-3 control-label" style="text-align:right; margin-top:6px">NIK Ayah</label>
        <div class="col-sm-9 prepend-icon">
          <input type="text" name="nik_ayah" class="form-control bg-blue" placeholder="NIK Siswa" maxlength="100" data-parsley-group="block1" data-radio="iradio_square-blue" data-parsley-errors-container='div[id="error-nikA"]' required>
          <i class="fa fa-user" style="margin-left:15px;"></i>
          <div id="error-nikA" style=" background:#FFBABA; color: #D8000C; width:auto; padding-left:10px; font-size: 10px;"></div>
          <div id="pesan_komentar">*Sesuai dengan KTP</div>
        </div>
      </div>

      <div class="form-group">
        <label class="col-sm-3 control-label" style="text-align:right; margin-top:6px">Pekerjaan Ayah</label>
        <div class="col-sm-9" style="margin-top:3px;">
          <select class="form-control bg-blue class" data-placeholder="Pilih Cita-cita Siswa" name="pekerjaan_ayah" data-parsley-group="block1" data-parsley-errors-container='div[id="error-pekerjaanA"]' required>
            <option value="">Pilih Pekerjaan</option>
            <option value="PNS">PNS</option>
            <option value="TNI/Polri">TNI/Polri</option>
            <option value="Guru/Dosen">Guru/Dosen</option>
            <option value="Dokter">Dokter</option>
            <option value="Politikus">Politikus</option>
            <option value="Wiraswasta">Wiraswasta</option>
            <option value="Pekerja Seni/lukis/artis/sejenis">Pekerja Seni/lukis/artis/sejenis</option>
            <option value="Lainnya">Lainnya</option>
          </select>
          <div id="error-pekerjaanA" style=" background:#FFBABA; color: #D8000C; width:auto; padding-left:10px; font-size: 10px;"></div>
        </div>
      </div>

      <div class="form-group">
        <label class="col-sm-3 control-label" style="text-align:right; margin-top:6px">Penghasilan Ayah</span></label>
        <div class="col-sm-9" style="margin-top:3px;">
          <select class="form-control bg-blue class" data-placeholder="Penghasilan" name="penghasilan_ayah" data-parsley-group="block1" data-parsley-errors-container='div[id="error-PA"]' required>
            <option value="">Pilih Penghasilan</option>
            <option value="500-1jt">500-1jt</option>
            <option value="1jt-3jt">1jt-3jt</option>
            <option value="3jt-5jt">3jt-5jt</option>
            <option value=">5jt">>5jt</option>
          </select>
          <div id="error-PA" style=" background:#FFBABA; color: #D8000C; width:auto; padding-left:10px; font-size: 10px;"></div>
        </div>
      </div>

      <div class="form-group" style="padding-bottom:30px;">
        <label class="col-sm-3 control-label" style="text-align:right; margin-top:6px">Nama Ibu</label>
        <div class="col-sm-9 prepend-icon">
          <input type="text" name="nama_ibu" class="form-control bg-blue" placeholder="Nama Ibu" maxlength="100" data-parsley-group="block1" data-radio="iradio_square-blue" data-parsley-errors-container='div[id="error-namaI"]' required>
          <i class="fa fa-user" style="margin-left:15px;"></i>
          <div id="error-namaI" style=" background:#FFBABA; color: #D8000C; width:auto; padding-left:10px; font-size: 10px;"></div>
          <div id="pesan_komentar">*Sesuai dengan KTP</div>
        </div>
      </div>

      <div class="form-group" style="padding-bottom:30px;">
        <label class="col-sm-3 control-label" style="text-align:right; margin-top:6px">NIK Ibu</label>
        <div class="col-sm-9 prepend-icon">
          <input type="text" name="nik_ibu" class="form-control bg-blue" placeholder="NIK Ibu" maxlength="100" data-parsley-group="block1" data-radio="iradio_square-blue" data-parsley-errors-container='div[id="error-nikI"]' required>
          <i class="fa fa-user" style="margin-left:15px;"></i>
          <div id="error-nikI" style=" background:#FFBABA; color: #D8000C; width:auto; padding-left:10px; font-size: 10px;"></div>
          <div id="pesan_komentar">*Sesuai dengan KTP</div>
        </div>
      </div>

      <div class="form-group">
        <label class="col-sm-3 control-label" style="text-align:right; margin-top:6px">Pekerjaan Ibu</label>
        <div class="col-sm-9" style="margin-top:3px;">
          <select class="form-control bg-blue class" data-placeholder="Pilih Pekerjaan Ibu" name="pekerjaan_ibu" data-parsley-group="block1" data-parsley-errors-container='div[id="error-pekerjaanI"]' required>
            <option value="">Pilih Pekerjaan</option>
            <option value="PNS">PNS</option>
            <option value="TNI/Polri">TNI/Polri</option>
            <option value="Guru/Dosen">Guru/Dosen</option>
            <option value="Dokter">Dokter</option>
            <option value="Politikus">Politikus</option>
            <option value="Wiraswasta">Wiraswasta</option>
            <option value="Pekerja Seni/lukis/artis/sejenis">Pekerja Seni/lukis/artis/sejenis</option>
            <option value="Lainnya">Lainnya</option>
          </select>
          <div id="error-pekerjaanI" style=" background:#FFBABA; color: #D8000C; width:auto; padding-left:10px; font-size: 10px;"></div>
        </div>
      </div>

      <div class="form-group">
        <label class="col-sm-3 control-label" style="text-align:right; margin-top:6px">Penghasilan Ibu</span></label>
        <div class="col-sm-9" style="margin-top:3px;">
          <select class="form-control bg-blue class" data-placeholder="Penghasilan " name="penghasilan_ibu" data-parsley-group="block1" data-parsley-errors-container='div[id="error-PI"]' required>
            <option value="">Pilih Penghasilan</option>
            <option value="500-1jt">500-1jt</option>
            <option value="1jt-3jt">1jt-3jt</option>
            <option value="3jt-5jt">3jt-5jt</option>
            <option value=">5jt">>5jt</option>
          </select>
          <div id="error-PI" style=" background:#FFBABA; color: #D8000C; width:auto; padding-left:10px; font-size: 10px;"></div>
        </div>
      </div>

    </div>
  </div>

  <div class="col-md-12">
    <div>