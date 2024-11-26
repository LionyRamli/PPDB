
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PPDB | SMK CINTA KASIH TZU CHI</title>
    <link rel="icon" href="{{ asset('img/noimg.png') }}" type="image/x-icon" />
    <link href="{{ asset('kitkat/assets/css/style.css') }}" rel="stylesheet">
    <link href="{{ asset('kitkat/assets/css/theme.css') }}" rel="stylesheet">
    <link href="{{ asset('kitkat/assets/css/ui.css') }}" rel="stylesheet">
    <link href="{{ asset('kitkat/assets/css/custom.css') }}" rel="stylesheet">
    <link href="{{ asset('kitkat/assets/plugins/font-awesome-animation/font-awesome-animation.min.css') }}" rel="stylesheet">
    <link href="{{ asset('kitkat/assets/input/css/fileinput.css') }}" media="all" rel="stylesheet" type="text/css" />

    <!-- BEGIN PAGE STYLE -->
    <link href="{{ asset('kitkat/assets/plugins/step-form-wizard/css/step-form-wizard.min.css') }}" rel="stylesheet">
    <!-- END PAGE STYLE -->
    <script src="{{ asset('kitkat/assets/plugins/modernizr/modernizr-2.6.2-respond-1.1.0.min.js') }}"></script>
</head>
<style>
  #pesan_komentar {
    font-weight: normal;
    color: indianred;
    font-size: 10px;
    margin-bottom: 5px;
  }
</style>
<body>
<body class="fixed-topbar sidebar-hover theme-sltl color-green">
  <section>
    <div class="main-content">
      <!-- BEGIN TOPBAR -->
      <div class="topbar" style="background-color: #3c4542; color: #fff;">
        <div class="header-left">
          <div class="col-sm-12">
            <div style="margin-top:-8px;">
              <h2>
                <strong class="text-primary">
                  <a href="{{route('public.home')}}"><span style="margin-left:60px;color:#fff;">PPDB CKTC</span></a>
                </strong>
              </h2>
            </div>
          </div>
        </div>
      </div>
      <div>
        <!-- END TOPBAR -->
        <!-- BEGIN PAGE CONTENT -->
        <div class="page-content page-wizard">
            <div class="header" style="margin-top:-20px; text-align: center;">
                <img src="{{ asset('img/noimg.png') }}" style="margin-bottom:10px;" width="100"><br>
                <h2 align="center">FORM PENDAFTARAN PPDB ONLINE <strong> <br>SMK CINTA KASIH TZU CHI</strong></h2>
                <hr style="margin-top:20px;">
            </div>
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
          <div class="row" style="margin-top:-30px;">
            <div class="col-lg-12">
              <div class="tabs tabs-linetriangle">
                <div class="tab-content">
                  <div class="tab-pane active" id="style">
                    <div class="wizard-div current wizard-sea" id="register">
                      <form role="form" class="wizard wizard-validation" data-style="sky" role="form" action="{{route('student.store')}}" enctype="multipart/form-data" method="post">
                        @csrf
                        @method('post')
                        <fieldset>
                          <legend>Ketentuan</legend>
                          <div class="col-md-2"></div>
                          <div class="col-md-8">
                            @include('web.step.1')
                            <div class="col-md-12">
                              <span class="text-primary" style="font-size:18px;color:#222;"><strong>Apakah Anda setuju dengan ketentuan PPDB Online diatas?</strong></span>
                              <div class="form-group" style="padding-bottom:30px;">
                                <div class="radio bg-success" style="padding-top:10px;padding-bottom:10px;border-radius:3px;color:#222;">
                                  <label>
                                    <input type="radio" data-parsley-group="block0" data-radio="iradio_square-blue" data-parsley-errors-container='div[id="condition-ck"]' required> <b>Ya, saya menyetujui ketentuan PPDB Online!</b>
                                  </label>
                                  <div id="condition-ck" style=" background:#FFBABA; color: #D8000C; width:auto; padding-left:10px; font-size: 10px;"></div>
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="col-md-2"></div>
                        </fieldset>

                        <fieldset>
                          <legend>Data Siswa</legend>
                          <div class="row">
                            <div class="col-md-2"></div>
                            <div class="col-md-8">
                                @include('web.step.2')
                            </div>
                          </div>
                          <div class="col-lg-12"></div>
                        </fieldset>
                        <fieldset>
                          <legend>Konfirmasi</legend>
                          <div class="row">
                            <div class="col-md-2"></div>
                            <div class="col-md-8">
                              <div class="panel">
                                <div class="panel-heading" style="background: #275555ff; color: honeydew;">
                                  <h2 align="center" style="margin-top: 10px;">KONFIRMASI<br><b>DATA CALON SISWA</b> </h2>
                                </div>
                                <div class="panel-body">
                                  <span style="font-size:15px">
                                    <p align="center">Proses pendaftaran PPDB Online SMK CINTA KASIH TZU CHI hampir selesai. <br>Silakan periksa kembali data-data yang sudah anda masukkan.</p><br><br>
                                    <div class="col-md-12">
                                      <span class="text-primary" style="font-size:18px;"><strong>Apakah data calon siswa sudah sesuai?</strong></span>
                                      <div class="form-group">
                                        <div class="radio bg-success p-10" style="border-radius:3px;">
                                          <label>
                                            <input type="radio"  data-parsley-group="blockx" data-radio="iradio_square-blue" data-parsley-errors-container='div[id="condition-cx"]' required>
                                            <b>Ya, data sudah sesuai!</b>
                                          </label>
                                          
                                          <div class="faa-flash animated" id="condition-cx" style=" background:#FFBABA; color: #D8000C; width:auto; padding-left:10px; font-size: 10px;"></div>
                                        </div>
                                      </div>
                                  </span>
                                </div>
                              </div>
                        </fieldset>
                      </form>
                    </div>
                  </div>
                </div>
              </div>

            </div>
            <div class="footer">
              <div class="copyright">
                <p class="pull-left sm-pull-reset">
                  <span>Copyright &copy; <a href="#" target="_blank">SMK CINTA KASIH TZU CHI</a> 2024-2025</span>
                </p>
                <p class="pull-right sm-pull-reset">
                  <span><a href="" class="m-r-10"><i class="fa fa-home"></i> Beranda </a> | <a href="#" class="m-l-10 m-r-10" data-toggle="modal" data-target=".bs-example-modal-lg"><i class="fa fa-legal"></i> Ketentuan & Syarat PPDB</a></span>
                </p>
              </div>
            </div>
          </div>
          <!-- END PAGE CONTENT -->
        </div>
        <!-- END MAIN CONTENT -->
        <!-- BEGIN BUILDER -->
        <!-- END BUILDER -->
  </section>
  <div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" style="margin-top:5px;">
      <div class="modal-content">
        <div class="modal-body">
          <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
          @include('web.step.1')
        </div>
      </div>
    </div>
  </div>
  
<a href="#" class="scrollup"><i class="fa fa-angle-up"></i></a>
<script src="{{ asset('kitkat/assets/plugins/jquery/jquery-1.11.1.min.js') }}"></script>
<script src="{{ asset('kitkat/assets/plugins/jquery/jquery-migrate-1.2.1.min.js') }}"></script>
<script src="{{ asset('kitkat/assets/plugins/jquery-ui/jquery-ui-1.11.2.min.js') }}"></script>
<script src="{{ asset('kitkat/assets/plugins/gsap/main-gsap.min.js') }}"></script>
<script src="{{ asset('kitkat/assets/plugins/bootstrap/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('kitkat/assets/plugins/jquery-cookies/jquery.cookies.min.js') }}"></script>
<script src="{{ asset('kitkat/assets/plugins/jquery-block-ui/jquery.blockUI.min.js') }}"></script>
<script src="{{ asset('kitkat/assets/plugins/translate/jqueryTranslator.min.js') }}"></script>
<script src="{{ asset('kitkat/assets/plugins/bootbox/bootbox.min.js') }}"></script>
<script src="{{ asset('kitkat/assets/plugins/mcustom-scrollbar/jquery.mCustomScrollbar.concat.min.js') }}"></script>
<script src="{{ asset('kitkat/assets/plugins/bootstrap-dropdown/bootstrap-hover-dropdown.min.js') }}"></script>
<script src="{{ asset('kitkat/assets/plugins/charts-sparkline/sparkline.min.js') }}"></script>
<script src="{{ asset('kitkat/assets/plugins/retina/retina.min.js') }}"></script>
<script src="{{ asset('kitkat/assets/plugins/select2/select2.min.js') }}"></script>
<script src="{{ asset('kitkat/assets/plugins/icheck/icheck.min.js') }}"></script>
<script src="{{ asset('kitkat/assets/plugins/backstretch/backstretch.min.js') }}"></script>
<script src="{{ asset('kitkat/assets/plugins/bootstrap-progressbar/bootstrap-progressbar.min.js') }}"></script>
<script src="{{ asset('kitkat/assets/plugins/charts-chartjs/Chart.min.js') }}"></script>
<script src="{{ asset('kitkat/assets/plugins/timepicker/jquery-ui-timepicker-addon.min.js') }}"></script>
<script src="{{ asset('kitkat/assets/plugins/multidatepicker/multidatespicker.min.js') }}"></script>
<script src="{{ asset('kitkat/assets/plugins/bootstrap-datepicker/js/bootstrap-datepicker.js') }}"></script>

<!-- Uncomment the line below if you need builder.js -->
<!-- <script src="{{ asset('assets/kitkat/assets/js/builder.js') }}"></script> -->

<script src="{{ asset('kitkat/assets/js/sidebar_hover.js') }}"></script>
<script src="{{ asset('kitkat/assets/js/application.js') }}"></script>
<script src="{{ asset('kitkat/assets/js/plugins.js') }}"></script>
<script src="{{ asset('kitkat/assets/js/widgets/notes.js') }}"></script>
<script src="{{ asset('kitkat/assets/js/quickview.js') }}"></script>
<script src="{{ asset('kitkat/assets/js/pages/search.js') }}"></script>
<script src="{{ asset('kitkat/js/cust.js') }}"></script>

<!-- BEGIN PAGE SCRIPTS -->
<script src="{{ asset('kitkat/assets/plugins/step-form-wizard/plugins/parsley/parsley.min.js') }}"></script>
<script src="{{ asset('kitkat/assets/plugins/step-form-wizard/js/step-form-wizard.js') }}"></script>
<script src="{{ asset('kitkat/assets/js/pages/form_wizard.js') }}"></script>
<script src="{{ asset('kitkat/assets/input/js/fileinput.js') }}" type="text/javascript"></script>
<script>
    $("#foto").fileinput({
      allowedFileExtensions: ['jpg'],
      showPreview: false,
      showUpload: false,
      browseClass: "btn btn-primary",
      elErrorContainer: "#errorBlock",
      maxFileSize: 2000,
      removeLabel: "Hapus",
      removeClass: "btn btn-danger",
      removeIcon: "<i class=\"glyphicon glyphicon-trash\"></i> "
    });
  </script>

  <script type="text/javascript">
    function hanyaAngka(evt) {
      var charCode = (evt.which) ? evt.which : event.keyCode
      if (charCode > 31 && (charCode < 48 || charCode > 57))
        return false;
      return true;
    }
  </script>
  <!-- END PAGE SCRIPTS -->
</body>

</html>