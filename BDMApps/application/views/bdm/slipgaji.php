<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <title>Basic Form Elements | Bootstrap Based Admin Template - Material Design</title>
    <!-- Favicon-->
    <link rel="icon" href="<?php echo base_url();?>asset/favicon.ico" type="image/x-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,700&subset=latin,cyrillic-ext" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" type="text/css">

    <!-- Bootstrap Core Css -->
    <link href="<?php echo base_url();?>asset/plugins/bootstrap/css/bootstrap.css" rel="stylesheet">

    <!-- Waves Effect Css -->
    <link href="<?php echo base_url();?>asset/plugins/node-waves/waves.css" rel="stylesheet" />

    <!-- Animation Css -->
    <link href="<?php echo base_url();?>asset/plugins/animate-css/animate.css" rel="stylesheet" />

    <!-- Bootstrap Material Datetime Picker Css -->
    <link href="<?php echo base_url();?>asset/plugins/bootstrap-material-datetimepicker/css/bootstrap-material-datetimepicker.css" rel="stylesheet" />

    <!-- Wait Me Css -->
    <link href="<?php echo base_url();?>asset/plugins/waitme/waitMe.css" rel="stylesheet" />

     <!-- Sweetalert Css -->
    <link href="<?php echo base_url();?>asset/plugins/sweetalert/sweetalert.css" rel="stylesheet" />

    <!-- Bootstrap Select Css -->
    <link href="<?php echo base_url();?>asset/plugins/bootstrap-select/css/bootstrap-select.css" rel="stylesheet" />

    <!-- Custom Css -->
    <link href="<?php echo base_url();?>asset/css/style.css" rel="stylesheet">

    <!-- AdminBSB Themes. You can choose a theme from css/themes instead of get all themes -->
    <link href="<?php echo base_url();?>asset/css/themes/all-themes.css" rel="stylesheet" />
</head>

<body class="theme-red">
    <!-- Page Loader -->
    <div class="page-loader-wrapper">
        <div class="loader">
            <div class="preloader">
                <div class="spinner-layer pl-red">
                    <div class="circle-clipper left">
                        <div class="circle"></div>
                    </div>
                    <div class="circle-clipper right">
                        <div class="circle"></div>
                    </div>
                </div>
            </div>
            <p>Please wait...</p>
        </div>
    </div>
    <!-- #END# Page Loader -->
    <!-- Overlay For Sidebars -->
    <div class="overlay"></div>
    <!-- #END# Overlay For Sidebars -->
    <!-- Search Bar -->
    <div class="search-bar">
        <div class="search-icon">
            <i class="material-icons">search</i>
        </div>
        <input type="text" placeholder="START TYPING...">
        <div class="close-search">
            <i class="material-icons">close</i>
        </div>
    </div>
    <!-- #END# Search Bar -->
    <!-- Top Bar -->
    <nav class="navbar">
        <div class="container-fluid">
            <div class="navbar-header">
                <a href="javascript:void(0);" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse" aria-expanded="false"></a>
                <a href="javascript:void(0);" class="bars"></a>
                <a class="navbar-brand" href="../../index.html">ADMINBSB - MATERIAL DESIGN</a>
            </div>
            <div class="collapse navbar-collapse" id="navbar-collapse">
                <ul class="nav navbar-nav navbar-right">
                    <!-- Call Search -->
                    <li><a href="javascript:void(0);" class="js-search" data-close="true"><i class="material-icons">search</i></a></li>
                    <!-- #END# Call Search -->
                    <!-- Notifications -->
                    <li class="dropdown">
                        <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button">
                            <i class="material-icons">notifications</i>
                            <span class="label-count">7</span>
                        </a>
                        <ul class="dropdown-menu">
                            <li class="header">NOTIFICATIONS</li>
                            <li class="body">
                                <ul class="menu">
                                    <li>
                                        <a href="javascript:void(0);">
                                            <div class="icon-circle bg-light-green">
                                                <i class="material-icons">person_add</i>
                                            </div>
                                            <div class="menu-info">
                                                <h4>12 new members joined</h4>
                                                <p>
                                                    <i class="material-icons">access_time</i> 14 mins ago
                                                </p>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0);">
                                            <div class="icon-circle bg-cyan">
                                                <i class="material-icons">add_shopping_cart</i>
                                            </div>
                                            <div class="menu-info">
                                                <h4>4 sales made</h4>
                                                <p>
                                                    <i class="material-icons">access_time</i> 22 mins ago
                                                </p>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0);">
                                            <div class="icon-circle bg-red">
                                                <i class="material-icons">delete_forever</i>
                                            </div>
                                            <div class="menu-info">
                                                <h4><b>Nancy Doe</b> deleted account</h4>
                                                <p>
                                                    <i class="material-icons">access_time</i> 3 hours ago
                                                </p>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0);">
                                            <div class="icon-circle bg-orange">
                                                <i class="material-icons">mode_edit</i>
                                            </div>
                                            <div class="menu-info">
                                                <h4><b>Nancy</b> changed name</h4>
                                                <p>
                                                    <i class="material-icons">access_time</i> 2 hours ago
                                                </p>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0);">
                                            <div class="icon-circle bg-blue-grey">
                                                <i class="material-icons">comment</i>
                                            </div>
                                            <div class="menu-info">
                                                <h4><b>John</b> commented your post</h4>
                                                <p>
                                                    <i class="material-icons">access_time</i> 4 hours ago
                                                </p>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0);">
                                            <div class="icon-circle bg-light-green">
                                                <i class="material-icons">cached</i>
                                            </div>
                                            <div class="menu-info">
                                                <h4><b>John</b> updated status</h4>
                                                <p>
                                                    <i class="material-icons">access_time</i> 3 hours ago
                                                </p>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0);">
                                            <div class="icon-circle bg-purple">
                                                <i class="material-icons">settings</i>
                                            </div>
                                            <div class="menu-info">
                                                <h4>Settings updated</h4>
                                                <p>
                                                    <i class="material-icons">access_time</i> Yesterday
                                                </p>
                                            </div>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li class="footer">
                                <a href="javascript:void(0);">View All Notifications</a>
                            </li>
                        </ul>
                    </li>
                    <!-- #END# Notifications -->
                    <!-- Tasks -->
                    <li class="dropdown">
                        <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button">
                            <i class="material-icons">flag</i>
                            <span class="label-count">9</span>
                        </a>
                        <ul class="dropdown-menu">
                            <li class="header">TASKS</li>
                            <li class="body">
                                <ul class="menu tasks">
                                    <li>
                                        <a href="javascript:void(0);">
                                            <h4>
                                                Footer display issue
                                                <small>32%</small>
                                            </h4>
                                            <div class="progress">
                                                <div class="progress-bar bg-pink" role="progressbar" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100" style="width: 32%">
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0);">
                                            <h4>
                                                Make new buttons
                                                <small>45%</small>
                                            </h4>
                                            <div class="progress">
                                                <div class="progress-bar bg-cyan" role="progressbar" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100" style="width: 45%">
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0);">
                                            <h4>
                                                Create new dashboard
                                                <small>54%</small>
                                            </h4>
                                            <div class="progress">
                                                <div class="progress-bar bg-teal" role="progressbar" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100" style="width: 54%">
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0);">
                                            <h4>
                                                Solve transition issue
                                                <small>65%</small>
                                            </h4>
                                            <div class="progress">
                                                <div class="progress-bar bg-orange" role="progressbar" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100" style="width: 65%">
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0);">
                                            <h4>
                                                Answer GitHub questions
                                                <small>92%</small>
                                            </h4>
                                            <div class="progress">
                                                <div class="progress-bar bg-purple" role="progressbar" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100" style="width: 92%">
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li class="footer">
                                <a href="javascript:void(0);">View All Tasks</a>
                            </li>
                        </ul>
                    </li>
                    <!-- #END# Tasks -->
                    <li class="pull-right"><a href="javascript:void(0);" class="js-right-sidebar" data-close="true"><i class="material-icons">more_vert</i></a></li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- #Top Bar -->
<?php
include 'sidebar.php';
?>

    <section class="content">
        <div class="container-fluid">
            <div class="block-header">
                <h2>BASIC FORM ELEMENTS</h2>
            </div>
            <!-- Input -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                                SLIP GAJI KARYAWAN
                                <small>Different sizes and widths</small>
                            </h2>
                           
                            <ul class="header-dropdown m-r--5">
                                <li class="dropdown">
                                    <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                                        <i class="material-icons">more_vert</i>
                                    </a>
                                    <ul class="dropdown-menu pull-right">
                                        <li><a href="javascript:void(0);">Action</a></li>
                                        <li><a href="javascript:void(0);">Another action</a></li>
                                        <li><a href="javascript:void(0);">Something else here</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                        <form action="<?php echo base_url();?>Welcome/tambahslipgaji" method="post">
                        <div class="body">
                            <div class="row clearfix">
                            <div class="col-sm-3">
                                 <div class="form-group">
                                    <div class="form-line">
                                        <p>Tanggal Slip Gaji</p>
                                        <input type="text" class="form-control" id="DATE" name="DATE" readonly />
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-3">
                                    <div class="form-group">
                                        <div class="form-line">
                                            <p>ID Slip Gaji</p>
                                            <input type="text" class="form-control" id="idslipgaji" name="idslipgaji" value="<?= $kodeunik; ?>" readonly />
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <h2 class="card-inside-title">Karyawan</h2>
                            <div class="row clearfix">
                                <div class="col-sm-3">
                                    <div class="form-group">
                                   <!-- <div class="form-line">
                                            <p>Nik</p>
                                            <input type="text" class="form-control" id="nik" name="nik" placeholder="NIK"  size="5" maxlength="5" />
                                        </div> -->
                                    <select name='nik' id='nik' class='form-control select'>
                                            <?php
                                            foreach ($karyawan as $k) {
                                            ?>
                                                <option value="<?php echo $k->NIK;?>"><?php echo $k->NAMA_KARYAWAN ?></option>
                                               
                                            <?php
                                            }
                                            ?>                                
                                     </select>
                                    </div>
                                    <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                                        <button type="button" class="btn btn-primary waves-effect" data-type="success" onclick="search_nama_pegawai()">PILIH</button>
                                    </div>
                                </div>
                                <div class="col-sm-3">
                                    <div class="form-group">
                                        <div class="form-line">
                                            <p>Nama Karyawan</p>
                                            <input type="text" class="form-control" name="namakar" id="namakar" placeholder="Nama Karyawan" readonly />
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="form-line">
                                            <p>Jabatan</p>
                                            <input type="text" class="form-control" id="jabatan" name="jabatan" placeholder="Jabatan" readonly />
                                        </div>
                                    </div>
                                </div>
                                
                            </div>

                            <h2 class="card-inside-title">Pemasukan</h2>
                           
                            <div class="row clearfix">
                             <!--   <div class="col-sm-4">
                                    <div class="form-group">
                                        <div class="form-line">
                                            <p>Gaji Pokok</p>
                                            <input type="text" class="form-control" id="gajipokok" name="gajipokok" placeholder="00000" readonly />
                                        </div>
                                    </div>
                                </div>-->
                                <div class="col-sm-4">
                                    <div class="form-group">
                                        <div class="form-line">
                                            <p>Jumlah Pendapatan</p>
                                            <input type="text" class="form-control" id="gajikotor" name="gajikotor" placeholder="00000" readonly />
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-4">
                                 <div class="form-group">
                                        <div class="form-line">
                                             <p>Jumlah Potongan</p>
                                            <input type="text" class="form-control" name="jumlahpotongan" placeholder="" id="8"  readonly />
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="form-group">
                                        <div class="form-line">
                                             <p>Jumlah Gaji Diterima Bersih</p>
                                            <input type="text" class="form-control" id="gajibersih" name="gajibersih" placeholder="00000" readonly />
                                        </div>
                                    </div>
                                    
                                </div>
                            </div>
                            
                            <h2 class="card-inside-title">Potongan</h2>
                            <div class="row clearfix">
                                <div class="col-sm-2">
                                    <div class="form-group form-float ">
                                        <div class="form-line">
                                            <input type="text" class="form-control" name="kopbunga" id="1" onblur="recalc()"  />
                                            <label class="form-label">Kop Berbunga</label>
                                        </div>
                                    </div>
                                    <div class="form-group form-float ">
                                        <div class="form-line">
                                            <input type="text" class="form-control" name="tperdana" id="2" onblur="recalc()"  />
                                            <label class="form-label">T. Perdana</label>
                                        </div>
                                    </div>
                                    <button type="button" class="btn bg-cyan btn-block waves-effect" onClick="javascript:sumpotongan();" >Hitung</button>
                                </div>
                                <div class="col-sm-2">
                                    <div class="form-group form-float ">
                                        <div class="form-line">
                                            <input type="text" class="form-control" name="sukaduka" id="3" onblur="recalc()" />
                                            <label class="form-label">Suka Duka</label>
                                        </div>
                                    </div>
                                    <div class="form-group form-float ">
                                        <div class="form-line">
                                            <input type="text" class="form-control" name="olilpg" id="4" onblur="recalc()" />
                                            <label class="form-label">OLI/LPG</label>
                                        </div>
                                    </div>
                                    <div class="form-group form-float ">
                                        <div class="form-line">
                                            <input type="text" class="form-control" name="kasbon" id="5" onblur="recalc()"/>
                                            <label class="form-label">KAS BON</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-2">
                                    <div class="form-group form-float ">
                                        <div class="form-line">
                                            <input type="text" class="form-control" name="ngukus" id="6" onblur="recalc()" />
                                            <label class="form-label">Ngukus</label>
                                        </div>
                                    </div>
                                    <div class="form-group form-float ">
                                        <div class="form-line">
                                            <input type="text" class="form-control" name="arisan" id="7" onblur="recalc()" />
                                            <label class="form-label">Arisan</label>
                                            <input type="hidden" class="form-control" id="gajipokok" name="gajipokok"/>
                                            <input type="hidden" class="form-control" name="tjabkar" id="tjabkar" />
                                            <input type="hidden" class="form-control" name="umakar" id="umakar" />
                                            <input type="hidden" class="form-control" name="insenkar" id="insenkar" />
                                            <input type="hidden" class="form-control" name="tpertamina" id="tpertamina" />
                                            <input type="hidden" class="form-control" name="jamsostek" id="jamsostek" />
                                            <input type="hidden" class="form-control" name="jumgaj" id="jumgaj" />
                                            <input type="hidden" class="form-control" name="idadmin" id="idadmin" value="<?php echo $datauser[0]->ID_ADMIN; ?>" />
                                        </div>
                                    </div>
                                   
                                </div>
                            </div>
                            <div class="row clearfix js-sweetalert">
                                        <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                                            <button class="btn btn-primary waves-effect" data-type="success">SIMPAN</button>
                                        </div>
                                    </div>
                        </div>
                    </form>
                    </div>
                </div>
            </div>
            <!-- #END# Input -->
            <script type="text/javascript">
                var today = new Date();
                var dd = today.getDate();
                var mm = today.getMonth()+1; //January is 0!

                var yyyy = today.getFullYear();
                if(dd<10){
                    dd='0'+dd;
                } 
                if(mm<10){
                    mm='0'+mm;
                } 
                var today = yyyy+'/'+mm+'/'+ dd;
                document.getElementById("DATE").value = today;
            </script>
        </div>
        <script type="text/javascript">
            function sumpotongan(){
               var jumlahpotongan = parseInt(document.getElementById('8').value);
                if (!isNaN(jumlahpotongan)) {
                    var gajikotor = parseInt(document.getElementById('gajikotor').value);
                    var gajibersih = gajikotor-jumlahpotongan;
                    document.getElementById('gajibersih').value=gajibersih;

                }
            }
        </script>
        <script type="text/javascript">
           function recalc() {
              var i1 = parseFloat(document.getElementById("1").value);
              var i2 = parseFloat(document.getElementById("2").value);
              var i3 = parseFloat(document.getElementById("3").value);
              var i4 = parseFloat(document.getElementById("4").value);
              var i5 = parseFloat(document.getElementById("5").value);
              var i6 = parseFloat(document.getElementById("6").value);
              var i7 = parseFloat(document.getElementById("7").value);
              i1 = isNaN(i1) ? 0 : i1;
              i2 = isNaN(i2) ? 0 : i2;
              i3 = isNaN(i3) ? 0 : i3;
              i4 = isNaN(i4) ? 0 : i4;
              i5 = isNaN(i5) ? 0 : i5;
              i6 = isNaN(i6) ? 0 : i6;
              i7 = isNaN(i7) ? 0 : i7;
              document.getElementById("8").value = i1 + i2 + i3 + i4 + i5 + i6 + i7;
            }
        </script>
        
    </section>

    <script type="text/javascript">
        
        var date = today.getFullYear()+'-'+(today.getMonth()+1)+'-'+today.getDate();
    </script>

    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
   <script type="text/javascript">
     
    function search_nama_pegawai(){
        $.ajax({
            type: "POST",
            url : "<?php echo site_url('C_bdm/select_karyawan')?>",
            data: {nik : $("#nik").val()},
            dataType: "json",
            beforeSend: function(e) {
                if(e && e.overrideMimeType) {
                    e.overrideMimeType("application/json;charset=UTF-8");
                }
            },
            success: function(response){ // Ketika proses pengiriman berhasil
               
                if(response.status == "success"){ // Jika isi dari array status adalah success
                    document.getElementById("namakar").value = response.NAMA_KARYAWAN;
                    document.getElementById("jabatan").value = response.JABATAN_KARYAWAN;
                    document.getElementById("gajikotor").value = response.JUMLAH_DITERIMA;
                    document.getElementById("tjabkar").value = response.T_JABATAN_KARYAWAN;
                    document.getElementById("umakar").value = response.UANG_MAKAN_KARYAWAN;
                    document.getElementById("insenkar").value = response.INSENTIF_KARYAWAN;
                    document.getElementById("tpertamina").value = response.T_PERTAMINA;
                    document.getElementById("jamsostek").value = response.JAMSOSTEK;
                    document.getElementById("jumgaj").value = response.JUMLAH_DITERIMA;
                    document.getElementById("jumgaj").value = response.GAJI_POKOK_KARYAWAN;
                    $("#namakar").val(response.NAMA_KARYAWAN);
                    $("#jabatan").val(response.JABATAN_KARYAWAN);
                    $("#tjabkar").val(response.T_JABATAN_KARYAWAN);
                    $("#umakar").val(response.UANG_MAKAN_KARYAWAN);
                    $("#insenkar").val(response.INSENTIF_KARYAWAN);
                    $("#tpertamina").val(response.T_PERTAMINA);
                    $("#jumgaj").val(response.JUMLAH_DITERIMA);
                    $("#jamsostek").val(response.JAMSOSTEK);
                    $("#gajikotor").val(response.JUMLAH_DITERIMA);
                    $("#gajikotor").val(response.GAJI_POKOK_KARYAWAN); // set textbox dengan id nama 
                  }else{ // Jika isi dari array status adalah failed
                    alert("Data Pegawai Tidak Ditemukan");
                  }
                },
            error: function (xhr, ajaxOptions, thrownError) { // Ketika ada error
          //alert(xhr.responseText);
            alert("Data Pegawai Tidak Ditemukan");
            }

        });
    }
    $(document).ready(function(){

    $("#btn-search").click(function(){ // Ketika user mengklik tombol Cari
        if ($("#nik").val().length > 4) {
            search_nama_pegawai(); // Panggil function search
        }else{
        search_nama(); // Panggil function search
        }
    });
    
    
});
   </script>


    <!-- Jquery Core Js -->
    <script src="<?php echo base_url();?>asset/plugins/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core Js -->
    <script src="<?php echo base_url();?>asset/plugins/bootstrap/js/bootstrap.js"></script>

    <!-- Select Plugin Js -->
    <script src="<?php echo base_url();?>asset/plugins/bootstrap-select/js/bootstrap-select.js"></script>

    <!-- Slimscroll Plugin Js -->
    <script src="<?php echo base_url();?>asset/plugins/jquery-slimscroll/jquery.slimscroll.js"></script>

    <!-- Bootstrap Notify Plugin Js -->
    <script src="<?php echo base_url();?>asset/plugins/bootstrap-notify/bootstrap-notify.js"></script>

    <!-- Waves Effect Plugin Js -->
    <script src="<?php echo base_url();?>asset/plugins/node-waves/waves.js"></script>

    <!-- Autosize Plugin Js -->
    <script src="<?php echo base_url();?>asset/plugins/autosize/autosize.js"></script>

    <!-- Moment Plugin Js -->
    <script src="<?php echo base_url();?>asset/plugins/momentjs/moment.js"></script>

    <!-- Bootstrap Material Datetime Picker Plugin Js -->
    <script src="<?php echo base_url();?>asset/plugins/bootstrap-material-datetimepicker/js/bootstrap-material-datetimepicker.js"></script>

    <!-- SweetAlert Plugin Js -->
    <script src="<?php echo base_url();?>asset/plugins/sweetalert/sweetalert.min.js"></script>

    <!-- Custom Js -->
    <script src="<?php echo base_url();?>asset/js/admin.js"></script>
    <script src="<?php echo base_url();?>asset/js/pages/forms/basic-form-elements.js"></script>
    <script src="<?php echo base_url();?>asset/js/pages/ui/dialogs.js"></script>

    </body>

</html>