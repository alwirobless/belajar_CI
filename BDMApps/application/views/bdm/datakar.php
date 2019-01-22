<?php
include 'header.php';
?>    
<?php
include 'sidebar.php';
?>
<script type="text/javascript" src="<?php echo base_url();?>asset/plugins/jquery/jquery-3.1.1.min.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>asset/plugins/jquery/jquery.min.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>asset/plugins/bootstrap/js/bootstrap.min.js"></script>
    <section class="content">
        <div class="container-fluid">
            <!-- <div class="block-header">
                <h2>
                    JQUERY DATATABLES
                    <small>Taken from <a href="https://datatables.net/" target="_blank">datatables.net</a></small>
                </h2>
            </div> -->
            <!-- Basic Examples -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                                <center style="color: #1f91f3;"><b>Data Karyawan</b></center>
                            </h2>
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
                            <div class="table-responsive">
                                <table class="table table-bordered table-striped table-hover dataTable js-exportable">
                                    <thead>
                                        <tr class="bg-success"> 
                                            <th><center>No</center></th>
                                            <th><center>NIK</center></th>
                                            <th><center>Nama Karyawan</center></th>
                                            <th><center>Jabatan</center></th>
                                            <th><center>Waktu Diterima</center></th>
                                            <th><center>Tanggal Lahir</center></th>
                                            <th><center>Alamat</center></th>
                                            <th><center>Telepon</center></th>
                                            <th><center>Email</center></th>
                                            <th><center>Jenis Kelamin</center></th>
                                            <th><center>Status Kerja</center></th>
                                            <th><center>Gaji Pokok</center></th>
                                            <th><center>Tunjangan</center></th>
                                            <th colspan="2"><center>Aksi</center></th>

                                        </tr>
                                    </thead>
 <tbody>
                                    <?php
                                        $i=1;
                                        foreach ($datakaryawan as $dtkar) {
                                            
                                       
                                    ?>
                                        <tr >
                                            <td><?php echo $i ; ?></td>
                                            <td><?php echo $dtkar->NIK; ?></td>
                                            <td><?php echo $dtkar->NAMA_KARYAWAN ; ?></td>
                                            <td><?php echo $dtkar->JABATAN_KARYAWAN ; ?></td>
                                            <td><?php echo $dtkar->TANGGAL_MASUK_KARYAWAN ; ?></td>
                                            <td><?php echo $dtkar->TANGGAL_LAHIR_KARYAWAN ; ?></td>
                                            <td><?php echo $dtkar->ALAMAT_KARYAWAN ; ?></td>
                                            <td><?php echo $dtkar->NO_HP_KARYAWAN ; ?></td>
                                            <td><?php echo $dtkar->EMAIL_KARYAWAN ; ?></td>
                                            <td><?php echo $dtkar->JENIS_KELAMIN ; ?></td>
                                            <td><?php echo $dtkar->STATUS_PEKERJA ; ?></td>
                                            <td><?php echo $dtkar->GAJI_POKOK ; ?></td>
                                            <td><?php echo $dtkar->TUNJANGAN ; ?></td>
                                            <td>  
                                                <!--  <a  class="btn btn-success" data-toggle="modal" data-target="#edit-data" href="#"> <span class='glyphicon glyphicon-pencil'></span> Edit</a> --> 
                                           <button onclick=" varE('<?php echo $dtkar->NIK; ?>','<?php echo $dtkar->NAMA_KARYAWAN; ?>','<?php echo $dtkar->JABATAN_KARYAWAN; ?>','<?php echo $dtkar->TANGGAL_MASUK_KARYAWAN; ?>','<?php echo $dtkar->TANGGAL_LAHIR_KARYAWAN; ?>','<?php echo $dtkar->ALAMAT_KARYAWAN; ?>','<?php echo $dtkar->NO_HP_KARYAWAN; ?>','<?php echo $dtkar->EMAIL_KARYAWAN; ?>','<?php echo $dtkar->JENIS_KELAMIN; ?>','<?php echo $dtkar->STATUS_PEKERJA; ?>','<?php echo $dtkar->GAJI_POKOK; ?>','<?php echo $dtkar->TUNJANGAN; ?>');return false;" 
                                                class="btn btn-success" data-toggle="modal" data-target="#modal_edit" ><span class="glyphicon glyphicon-pencil" data-toggle="tooltip" data-placement="top"> Edit</span></button></td>
                                               
                                            <td>    
                                                <a class='btn btn-danger' href="<?php echo base_url();?>Welcome/hapus_karyawan/<?php echo $dtkar->NIK;?>"> <span class='glyphicon glyphicon-trash'></span> Delete</a> </td>
                                        </tr>
                                       <?php $i++;  }  ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>



<!--============================================ Modal Edit ============================================--> 
    <div class="modal fade" id="modal_edit"  role="dialog">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                           <center> <h4 class="modal-title" id="defaultModalLabel" style="color:#1f91f3">Edit Data Karyawan</h4> </center>
                        </div>
                        <div class="modal-body">
                            <form class="form-horizontal" action="<?php echo base_url('welcome/editkaryawan')?>" method="post" enctype="multipart/form-data" role="form">

                                <label for="nik">Nik</label>
                                <div class="form-group">
                                    <div class="form-line">
                                        <input type="text" id="nik" class="form-control " name="nik" readonly>
                                    </div>
                                </div>

                                <label for="namakaryawan">Nama Karyawan</label>
                                <div class="form-group">
                                    <div class="form-line">
                                        <input type="text" id="namakar" class="form-control" name="namakar" >
                                    </div>
                                </div>

                                <label for="jabatan">Jabatan Karyawan</label>
                                <div class="form-group">
                                    <div class="form-line">
                                        <input type="text" id="jabatan" class="form-control" name="jabatan">
                                    </div>
                                </div>

                                <label for="tmasuk">Tanggal Masuk</label>
                                <div class="form-group">
                                    <div class="form-line">
                                        <input type="date" id="tmasuk" class="form-control" name="tmasuk" >
                                    </div>
                                </div>

                                <label for="tlahir">Tanggal Lahir</label>
                                <div class="form-group">
                                    <div class="form-line">
                                        <input type="date" id="tlahir" class="form-control" name="tlahir" >
                                    </div>
                                </div>

                                <label for="alamat">Alamat</label>
                                <div class="form-group">
                                    <div class="form-line">
                                        <input type="text" id="alamat" class="form-control" name="alamat" >
                                    </div>
                                </div>

                                <label for="kontak">Kontak</label>
                                <div class="form-group">
                                    <div class="form-line">
                                        <input type="text" id="kontak" class="form-control" name="kontak" >
                                    </div>
                                </div>

                                <label for="email">Email</label>
                                <div class="form-group">
                                    <div class="form-line">
                                        <input type="email" id="email" class="form-control" name="email" >
                                    </div>
                                </div>

                                <label for="jenkel">Jenis Kelamin</label>
                                <div class="form-group">
                                    <div class="form-line">
                                        <input type="text" id="jenkel" class="form-control" name="jenkel" readonly>
                                    </div>
                                </div>

                                <label for="statuskerja">Status Kerja</label>
                                <div class="form-group">
                                    <div class="form-line">
                                        <input type="text" id="statker" class="form-control" name="statuskerja" >
                                    </div>
                                </div>

                                <label for="gajipokok">Gaji Pokok</label>
                                <div class="form-group">
                                    <div class="form-line">
                                        <input type="text" id="gajipokok" class="form-control" name="gajipokok" >
                                    </div>
                                </div>

                                <label for="tunjangan">Tunjangan</label>
                                <div class="form-group">
                                    <div class="form-line">
                                        <input type="text" id="tunjangan" class="form-control" name="tunjangan" >
                                    </div>
                                </div>



                        </div>
                        <div class="modal-footer">
                            <button type="submit" class="btn btn-link waves-effect">SAVE CHANGES</button>
                            <button type="button" class="btn btn-link waves-effect" data-dismiss="modal">CLOSE</button>
                        </div>
                    </div>
                </div>
            </div>

</div>
</section>

    

    <script type="text/javascript">
        var  nik, namakar, jabatan, tmasuk, tlahir, alamat, kontak, email, jenkel, statuskerja, gajipokok, tunjangan;
        function varE( nike, namakare, jabatane, tmasuke, tlahire, alamate, kontake, emaile, jenkele, statuskerjae, gajipokoke, tunjangane) {
           
            nik=nike;
            namakar=namakare;
            jabatan=jabatane;
            tmasuk=tmasuke;
            tlahir=tlahire;
            alamat=alamate;
            kontak=kontake;
            email=emaile;
            jenkel=jenkele;
            statuskerja=statuskerjae;
            gajipokok=gajipokoke;
            tunjangan=tunjangane;
           
        }
        $(document).ready(function() {
                    // Untuk sunting
                    $('#modal_edit').on('show.bs.modal', function (event) {
                        var div = $(event.relatedTarget) // Tombol dimana modal di tampilkan
                        var modal = $(this)
                    
                        $('#nik').val(nik);
                        $('#namakar').val(namakar);
                        $('#jabatan').val(jabatan);
                        $('#tmasuk').val(tmasuk);
                        $('#tlahir').val(tlahir);
                        $('#alamat').val(alamat);
                        $('#kontak').val(kontak);
                        $('#email').val(email);
                        $('#jenkel').val(jenkel);
                        $('#statker').val(statuskerja);
                        $('#gajipokok').val(gajipokok);
                        $('#tunjangan').val(tunjangan);

                    });
                    });
    </script>

<?php
include 'script.php'
?>

    </body>

</html>