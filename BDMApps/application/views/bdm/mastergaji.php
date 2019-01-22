<?php
include 'header.php';
?>    
<?php
include 'sidebar.php';
?>

 <section class="content">
        <div class="container-fluid">
            <!-- <div class="block-header">
                <h2>
                    FORM Karyawan
                    <small>Taken from <a href="https://jqueryvalidation.org/" target="_blank">jqueryvalidation.org</a></small>
                </h2>
            </div> -->
<!-- Advanced Validation -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2 style="color: #1f91f3;"><b><center>Form Karyawan</center></b></h2>
                           <!--  <ul class="header-dropdown m-r--5">
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
                            </ul> -->
                        </div>
                        <div class="body">
                            <form id="form_advanced_validation" method="POST" action="<?php echo base_url();?>welcome/tambahkaryawan">
                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="text" class="form-control" name="nik" value="<?php echo $nik; ?> " readonly>
                                       <!--  <label class="form-label">Min/Max Length</label> -->
                                    </div>
                                    <!-- <div class="help-info">Min. 3, Max. 10 characters</div> -->
                                </div>

                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="date" class="form-control" name="datekar" >
                                        <label class="form-label">Tanggal Masuk Karyawan</label>
                                    </div>
                                    <!-- <div class="help-info">Min. Value: 10, Max. Value: 200</div> -->
                                </div>

                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="text" class="form-control" name="namakar" required>
                                        <label class="form-label">Nama Karyawan</label>
                                    </div>
                                    <!-- <div class="help-info">Starts with http://, https://, ftp:// etc</div> -->
                                </div>

                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="text" class="form-control" name="jabatankar" required>
                                        <label class="form-label">Jabatan</label>
                                    </div>
                                    <!-- <div class="help-info">YYYY-MM-DD format</div> -->
                                </div>

                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="date" class="form-control" name="tgllahirkar" >
                                        <label class="form-label">Tanggal Lahir</label>
                                    </div>
                                    <!-- <div class="help-info">Numbers only</div> -->
                                </div>

                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="text" class="form-control" name="alamatkar" required>
                                        <label class="form-label">Alamat</label>
                                    </div>
                                    <!-- <div class="help-info">Ex: 1234-5678-9012-3456</div> -->
                                </div>

                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="Number" class="form-control" name="kontakkar" required>
                                        <label class="form-label">Nomor telpon</label>
                                    </div>
                                    <!-- <div class="help-info">Ex: 1234-5678-9012-3456</div> -->
                                </div>

                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="email" class="form-control" name="emailkar" required>
                                        <label class="form-label">email</label>
                                    </div>
                                    <!-- <div class="help-info">Ex: 1234-5678-9012-3456</div> -->
                                </div>
                               
                               <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="text" class="form-control" name="jenkel" >
                                        <label class="form-label">Jenis Kelamin</label>
                                    </div>
                                    <!-- <div class="help-info">Ex: 1234-5678-9012-3456</div> -->
                                </div>

                               <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="text" class="form-control" name="statuskerjakar" required>
                                        <label class="form-label">Status Kerja</label>
                                    </div>
                                    <!-- <div class="help-info">Ex: 1234-5678-9012-3456</div> -->
                                </div>

                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="number" class="form-control" name="gapokkar" required>
                                        <label class="form-label">Gaji Pokok</label>
                                    </div>
                                    <!-- <div class="help-info">Ex: 1234-5678-9012-3456</div> -->
                                </div>

                               		<input type="hidden" class="form-control" name="tipe" value="0">

                                <button class="btn btn-primary waves-effect" type="submit">SUBMIT</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <!-- #END# Advanced Validation -->
         </div>
        </section>

<?php
include 'script.php'
?>

    </body>

</html>