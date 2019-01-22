<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <title>Aplikasi Penggajian Bali Dukuh Mas - Material Design</title>
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
                <a class="navbar-brand" href="<?php echo site_url('Welcome/pageawal');?>">Bali Dukuh Mas - Aplikasi Penggajian Karyawan</a>
            </div>
            <div class="collapse navbar-collapse" id="navbar-collapse">
                <ul class="nav navbar-nav navbar-right">
              
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
                        <!-- Input -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <!-- <div class="header">
                            <h2>
                                INPUT
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
                        </div> -->
                        <div class="body">
                            <h2 class="card-inside-title">Karyawan</h2>
                            <div class="row clearfix">
                                <div class="col-sm-4">
                                <form action="<?php echo base_url();?>Welcome/tambahgajikaryawan" method="POST">
                                    <div class="form-group">                     
                                        <select name='nik' id='nik class='form-control select'>
                                            <?php
                                            foreach ($karyawan as $k) {
                                            ?>
                                                <option value="<?php echo $k->NIK;?>"><?php echo $k->NAMA_KARYAWAN ?></option>
                                               
                                            <?php
                                            }
                                            ?>                                
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <div class="form-line">
                                            <p>Gaji Pokok</p>
                                            <input type="text" class="form-control" onkeyup="#" id="gajipokok" name="gajipokok" />
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-3">
                                     
                                </div>
                            </div>
                            <script type="text/javascript">
                               
                            </script>
                            
                            <h2 class="card-inside-title">Perhitungan Gaji</h2>
                            <div class="row clearfix">
                                <div class="col-sm-3">
                                    <div class="form-group">
                                        <div class="form-line">
                                            <input type="text" class="form-control" id="DATE" name="DATE" readonly />
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <div class="form-line">
                                            <input type="text" name="idgajikaryawan" class="form-control" id="idgajikaryawan" value="<?= $kodeunik; ?>" readonly />
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row clearfix">
                                <div class="col-sm-4">
                                    <div class="form-group">
                                        <div class="form-line">
                                            <p>Jumlah Gaji</p>
                                            <input type="text" class="form-control" name="jumgaji" onkeyup="sumjamsos();" id="jumgaji"   />
                                        </div>
                                    </div>
                                     <button type="button" class="btn bg-cyan btn-block waves-effect" onClick="javascript:sumgaji();" >Hitung Gaji Diterima</button>
                                </div>
                                <div class="col-sm-4">
                                    <div class="form-group">
                                        <div class="form-line">
                                            <p>Potongan Jamsostek</p>
                                            <input type="text" class="form-control" name="pjamsos" onkeyup="sumjamsos();" id="pjamsos" readonly />
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="form-group">
                                        <div class="form-line">
                                             <p>Jumlah Gaji Diterima</p>
                                            <input type="text" class="form-control" name="jmlahgajiditerima" id="jmlahgajiditerima" readonly />
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <script type="text/javascript">
                                function sumjamsos(){
                                    var jumgaji = document.getElementById('jumgaji').value;
                                    var pjamsos = parseFloat(jumgaji)*0.2;
                                    if (!isNaN(pjamsos)) {
                                        document.getElementById('pjamsos').value=pjamsos;
                                    }
                                }
                            </script>
                            <script type="text/javascript">
                                function sumgaji(){
                                    var gajipokok = parseInt(document.getElementById('gajipokok').value);
                                    var tpertaminaway = parseInt(document.getElementById('totalpertaminaway').value);
                                    var tinsentif = parseInt(document.getElementById('total').value);
                                    var ttunjangan = parseInt(document.getElementById('totaltunjangan').value);
                                    var jumlahgaji = gajipokok+tpertaminaway+tinsentif+ttunjangan;
                                        document.getElementById('jumgaji').value=jumlahgaji;
                                        if (!isNaN(jumlahgaji)) {
                                            var pjamsos = parseFloat(jumlahgaji)*0.2;
                                            document.getElementById('pjamsos').value=pjamsos;
                                            var gajiterima = jumlahgaji-pjamsos;
                                            document.getElementById('jmlahgajiditerima').value=gajiterima;
                                        }
                                }
                            </script>
                            <h2 class="card-inside-title">Tunjangan</h2>
                            <div class="row clearfix">
                                <div class="col-sm-3">
                                    <div class="form-group">
                                        <div class="form-line">
                                             <p>Jabatan</p>
                                            <input type="text" class="form-control" name="tjabatan" id="tjabatan" />
                                        </div>
                                    </div>
                                    <div class="form-group form-float ">
                                        <div class="form-line">
                                            <input type="text" class="form-control" name="jharikerja" onkeyup="sumuangmakan();" id="jharikerja" />
                                            <label class="form-label">Jum. Hari Kerja</label>
                                        </div>
                                    </div>
                                     <button type="button" class="btn bg-cyan btn-block waves-effect" onClick="javascript:ttltunjangan();" >Hitung</button>
                                </div>
                                <script type="text/javascript">
                                function sumuangmakan(){
                                    var jumharikerja = document.getElementById('jharikerja').value;
                                    var uangmakan = parseFloat(jumharikerja)*25000;
                                    if (!isNaN(uangmakan)) {
                                        document.getElementById('uangmakan').value=uangmakan;
                                    }
                                }
                                </script>
                                <div class="col-sm-3">
                                    <div class="form-group">
                                        <div class="form-line">
                                             <p>Uang Makan</p>
                                            <input type="text" class="form-control" name="uangmakan" id="uangmakan"  />
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="form-line">
                                             <p>Total Tunjangan</p>
                                            <input type="text" class="form-control" name="totaltunjangan" id="totaltunjangan" onchange="sumgaji();" readonly />
                                        </div>
                                    </div>
                                </div>
                                <script type="text/javascript">
                                    function ttltunjangan(){
                                        var jabatan = parseInt(document.getElementById('tjabatan').value);
                                        var uangmakan = parseInt(document.getElementById('uangmakan').value);
                                        var ttunjangan = jabatan+uangmakan+250000;
                                        
                                            document.getElementById('totaltunjangan').value=ttunjangan;
                                        
                                    }
                                </script>
                            </div>

                            <h2 class="card-inside-title">Insentif</h2>
                            <div class="row clearfix">
                                <div class="col-sm-3">
                                     <div class="form-group form-float ">
                                        <div class="form-line">
                                            <input type="text" class="form-control" name="uanglebih" id="uanglebih" />
                                            <label class="form-label">Uang Lebih</label>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="form-line">
                                             <p>Uang Kopi</p>
                                            <input type="text" class="form-control" value="12500" name="uangkopi" readonly  />
                                        </div>
                                    </div>
                                    <button type="button" class="btn bg-cyan btn-block waves-effect" onClick="javascript:hitunginsentif();" >Hitung</button>
                                </div>
                                <div class="col-sm-3">
                                    <div class="form-group form-float ">
                                        <div class="form-line">
                                            <input type="text" class="form-control" id="uangtambahan" name="uangtambahan" />
                                            <label class="form-label">Uang Tambahan</label>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="form-line">
                                             <p>Total insentif</p>
                                            <input type="text" class="form-control" name="total" placeholder="" id="total" onchange="sumgaji();" readonly />
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <script type="text/javascript">
                                
                                function hitunginsentif(){
                                    var uanglebih = parseInt(document.getElementById('uanglebih').value);
                                    var uangtambahan = parseInt(document.getElementById('uangtambahan').value);
                                    var totalinsentif = uanglebih*0.05+uangtambahan+12500;

                                    document.getElementById('total').value=totalinsentif;
                                }

                            </script>
                           

                            <h2 class="card-inside-title">Pertamina WAY</h2>
                            <div class="row clearfix">
                                <div class="col-sm-3">
                                    <div class="form-group form-float ">
                                        <div class="form-line">
                                            <input type="text" class="form-control" name="jmlpsub" id="jmlpsub" />
                                            <label class="form-label">Jml Pembelian BBM Subsidi</label>
                                        </div>
                                    </div>
                                    <div class="form-group form-float ">
                                        <div class="form-line">
                                            <input type="text" class="form-control" name="jmlpnonsub" id="jmlpnonsub" />
                                            <label class="form-label">Jml Pembelian BBM non Subsidi</label>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="form-line">
                                             <p>Total Pertamina WAY</p>
                                            <input type="text" class="form-control" id="totalpertaminaway" name="totalpertaminaway" onchange="sumgaji();" placeholder="" readonly  />
                                            <input type="hidden" class="form-control" name="idadmin" id="idadmin" value="<?php echo $datauser[0]->ID_ADMIN; ?>" />
                                        </div>
                                    </div>
                                        <button type="button" class="btn bg-cyan btn-block waves-effect"  onClick="javascript:tunjanganpertamina();" >Hitung</button>
                                </div>

                            </div>
                            <div class="row clearfix js-sweetalert">
                                <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                                    <button class="btn btn-primary waves-effect" data-type="success" type="submit">SIMPAN</button>
                                </div>
                            </div>
                        </form>
                                

                            <script type="text/javascript">
                                    
                                function tunjanganpertamina(){
                                    var jpbmsub = parseInt(document.getElementById('jmlpsub').value);
                                    var jpbmnonsub = parseInt(document.getElementById('jmlpnonsub').value);
                                    var tpertamina = jpbmsub*3/7*0.2+jpbmnonsub*20/7*0.2;

                                    document.getElementById('totalpertaminaway').value=tpertamina;
                                }   


                            </script>

                        </div>
                            
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
                var today =yyyy+'/'+mm+'/'+ dd;
                document.getElementById("DATE").value = today;
			</script>
        </div>
    </section>

    <script type="text/javascript">
    	var date = today.getFullYear()+'-'+(today.getMonth()+1)+'-'+today.getDate();
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

    <!-- Demo Js 
    <script src="<?php echo base_url();?>asset/js/demo.js"></script>-->

    </body>

</html>