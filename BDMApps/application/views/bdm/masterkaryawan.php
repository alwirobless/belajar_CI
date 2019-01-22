<?php
    include 'header.php'
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
                        <div class="body">
                            <form id="form_advanced_validation" method="POST" action="<?php echo base_url();?>welcome/tambahkaryawan">

                                 <label for="nik">Nik</label>
                                <div class="form-group">
                                    <div class="form-line">
                                        <input type="text" class="form-control" name="nik" value="<?php echo $nik; ?> " readonly>
                                       <!--  <label class="form-label">Min/Max Length</label> -->
                                    </div>
                                    <!-- <div class="help-info">Min. 3, Max. 10 characters</div> -->
                                </div>

                                 <label for="tmasuk">Tanggal Masuk Karyawan</label>
                                <div class="form-group">
                                    <div class="form-line">
                                        <input type="date" class="form-control" name="tmasukkar" >
                                    </div>
                                    <!-- <div class="help-info">Min. Value: 10, Max. Value: 200</div> -->
                                </div>

                                 <label for="namakaryawan">Nama Karyawan</label>
                                    <div class="form-group">
                                        <div class="form-line">
                                        <input type="text" class="form-control" name="namakar" required>
                                    </div>
                                    <!-- <div class="help-info">Starts with http://, https://, ftp:// etc</div> -->
                                </div>

                                <label for="jabatan">Jabatan</label>
                                <div class="form-group">
                                    <div class="form-line">
                                        <input type="text" class="form-control" name="jabatankar" required>
                                    </div>
                                    <!-- <div class="help-info">YYYY-MM-DD format</div> -->
                                </div>

                                 <label for="tlahir">Tanggal Lahir</label>
                                <div class="form-group">
                                    <div class="form-line">
                                        <input type="date" class="form-control" name="tgllahirkar" >
                                    </div>
                                    <!-- <div class="help-info">Numbers only</div> -->
                                </div>

                                <label for="alamat">Alamat</label>
                                <div class="form-group">
                                    <div class="form-line">
                                        <input type="text" class="form-control" name="alamatkar" required>
                                    </div>
                                    <!-- <div class="help-info">Ex: 1234-5678-9012-3456</div> -->
                                </div>

                                <label for="Kontak">Kontak</label>
                                <div class="form-group">
                                    <div class="form-line">
                                        <input type="Number" class="form-control" name="kontakkar" required>
                                    </div>
                                    <!-- <div class="help-info">Ex: 1234-5678-9012-3456</div> -->
                                </div>

                                <label for="email">E-mail</label>
                                <div class="form-group">
                                    <div class="form-line">
                                        <input type="email" class="form-control" name="emailkar" required>
                                    </div>
                                    <!-- <div class="help-info">Ex: 1234-5678-9012-3456</div> -->
                                </div>
                               
                                 <label for="jeniskelamin">Jenis Kelamin</label>
                                <div class="demo-radio-button">
                                    <input name="jenkel" type="radio" class="with-gap radio-col-blue" id="radio_3" value="Laki-laki" />
                                        <label for="radio_3">Laki-laki</label>

                                        <input name="jenkel" type="radio" class="with-gap radio-col-blue" id="radio_4" value="Perempuan" />
                                    <label for="radio_4">Perempuan</label>
                                 </div><br>

                               <label for="statuskerja">Status Kerja</label>
                                <div class="form-group">
                                    <!-- <div class="form-line">
                                        <input type="text" class="form-control" name="statuskerjakar" required>
                                    </div> -->
                                    <!-- <div class="help-info">Ex: 1234-5678-9012-3456</div> -->
                                    <select name='statuskerjakar' class='form-control select'>
                                        <option value="Operator">Operator</option>
                                        <option value="Office">Office</option>
                                    </select>
                                </div>

                                <label for="gajipokok">Gaji Pokok</label>
                                <div class="form-group">
                                    <div class="form-line">
                                        <input type="number" class="form-control" name="gapokkar" required>
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