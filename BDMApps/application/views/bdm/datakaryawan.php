<?php
include 'header.php';
?>    
<?php
include 'sidebar.php';
?>

<!-- <script type="text/javascript" src="<?php echo base_url();?>asset/plugins/jquery/jquery-3.1.1.min.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>asset/plugins/jquery/jquery.min.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>asset/plugins/bootstrap/js/bootstrap.min.js"></script>
 -->
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
                                            <th colspan="2"><center>Aksi</center></th>

                                        </tr>
                                    </thead>
                                  <!--   <tfoot>
                                        <tr>
                                            <th>No</th>
                                            <th>NIK</th>
                                            <th>Nama Karyawan</th>
                                            <th>Jabatan</th>
                                            <th>Masuk</th>
                                            <th>Tanggal Lahir</th>
                                            <th>Alamat</th>
                                            <th>Telepon</th>
                                            <th>Email</th>
                                            <th>Jenis Kelamin</th>
                                            <th>Status Kerja</th>
                                            <th>Gaji Pokok</th>
                                        </tr>
                                    </tfoot> -->
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
                                            <td>  
                                                <!--  <a  class="btn btn-success" data-toggle="modal" data-target="#edit-data" href="#"> <span class='glyphicon glyphicon-pencil'></span> Edit</a> --> 
                                           <button onclick="setVarE('<?php echo $dtkar->NIK; ?>','<?php echo $dtkar->NAMA_KARYAWAN; ?>','<?php echo $dtkar->JABATAN_KARYAWAN; ?>','<?php echo $dtkar->TANGGAL_MASUK_KARYAWAN; ?>','<?php echo $dtkar->TANGGAL_LAHIR_KARYAWAN; ?>','<?php echo $dtkar->ALAMAT_KARYAWAN; ?>','<?php echo $dtkar->NO_HP_KARYAWAN; ?>','<?php echo $dtkar->EMAIL_KARYAWAN; ?>','<?php echo $dtkar->JENIS_KELAMIN; ?>','<?php echo $dtkar->STATUS_PEKERJA; ?>','<?php echo $dtkar->GAJI_POKOK; ?>');return false;" 
                                                class="btn btn-default btn-rounded btn-sm" data-toggle="modal" data-target="#modal-edit" ><span class="fa fa-pencil" data-toggle="tooltip" data-placement="top">Edit</span></button>
                                               
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
            <!-- #END# Basic Examples -->
<!-- Modal Ubah -->
<!-- <div aria-hidden="true" aria-labelledby="myModalLabel" role="dialog" tabindex="-1" id="modal-edit" class="modal fade">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button aria-hidden="true" data-dismiss="modal" class="close" type="button">×</button>
                    <h4 class="modal-title">Ubah Data</h4>
                </div>
                <form class="form-horizontal" action="<?php echo base_url('admin/ubah')?>" method="post" enctype="multipart/form-data" role="form">
                    <div class="modal-body">
                            <div class="form-group">
                                <label class="col-lg-2 col-sm-2 control-label">NIK</label>
                                <div class="col-lg-10">
                                    <input type="hidden" id="id" name="id">
                                    <input type="text" class="form-control" id="nik" name="nik" placeholder="Tuliskan Nama">
                                </div>
                            </div>
                    <div class="modal-body">
                            <div class="form-group">
                                <label class="col-lg-2 col-sm-2 control-label">Nama</label>
                                <div class="col-lg-10">
                                    <input type="hidden" id="id" name="id">
                                    <input type="text" class="form-control" id="namakar" name="namakar" >
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-lg-2 col-sm-2 control-label">Alamat</label>
                                <div class="col-lg-10">
                                    <textarea class="form-control" id="alamat" name="alamat" placeholder="Tuliskan Alamat"></textarea>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-lg-2 col-sm-2 control-label">Pekerjaan</label>
                                <div class="col-lg-10">
                                    <input type="text" class="form-control" id="pekerjaan" name="pekerjaan" placeholder="Tuliskan Pekerjaan">
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button class="btn btn-info" type="submit"> Simpan&nbsp;</button>
                            <button type="button" class="btn btn-warning" data-dismiss="modal"> Batal</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div> -->


<!-- END Modal Ubah -->
        </div>
    </section>

       <script type="text/javascript">
                    var nik,nama,alamat,tempatlahir,tgllahir,notlpn,npwp,komponen,jeniskegiatan,bidang,pendidikanterakhir;
                    var nike,namae,alamate,tempatlahire,tgllahire,notlpne,npwpe,komponene,jeniskegiatane,bidange,pendidikanterakhire;
                    function setVar(nik1,nama1,alamat1,tempatlahir1,tgllahir1,notlpn1,npwp1,komponen1,jeniskegiatan1,bidang1,pendidikanterakhir1)
                    {   
                        nik=nik1;
                        nama=nama1;
                        alamat=alamat1;
                        tempatlahir=tempatlahir1;
                        tgllahir=tgllahir1;
                        notlpn=notlpn1;
                        npwp=npwp1;
                        komponen=komponen1;
                        jeniskegiatan=jeniskegiatan1;
                        bidang=bidang1;
                        pendidikanterakhir=pendidikanterakhir1;
                    }
                    $(document).ready(function() {
                    // Untuk sunting
                    $('#modal_view').on('show.bs.modal', function (event) {
                        var div = $(event.relatedTarget) // Tombol dimana modal di tampilkan
                        var modal = $(this)
                        $('#NIK').val(nik);
                        $('#Nama').val(nama);
                        $('#Alamat').val(alamat);
                        $('#TempatLahir').val(tempatlahir);
                        $('#TglLahir').val(tgllahir);
                        $('#Notlpn').val(notlpn);
                        $('#Npwp').val(npwp);
                        $('#Komponen').val(komponen);
                        $('#JenisKegiatan').val(jeniskegiatan);
                        $('#Bidang').val(bidang);
                        $('#PendidikanTerakhir').val(pendidikanterakhir);
                        });
                    });
                    function setVarE(nike1,namae1,alamate1,tempatlahire1,tgllahire1,notlpne1,npwpe1,komponene1,jeniskegiatane1,bidange1,pendidikanterakhire1)
                    {   
                        nike=nike1;
                        namae=namae1;
                        alamate=alamate1;
                        tempatlahire=tempatlahire1;
                        tgllahire=tgllahire1;
                        notlpne=notlpne1;
                        npwpe=npwpe1;
                        komponene=komponene1;
                        jeniskegiatane=jeniskegiatane1;
                        bidange=bidange1;
                        pendidikanterakhire=pendidikanterakhire1;
                    }
                    $(document).ready(function() {
                    // Untuk sunting
                    $('#modal_edit').on('show.bs.modal', function (event) {
                        var div = $(event.relatedTarget) // Tombol dimana modal di tampilkan
                        var modal = $(this)
                        $('#NIKE').val(nike);
                        $('#Namae').val(namae);
                        $('#Alamate').val(alamate);
                        $('#TempatLahire').val(tempatlahire);
                        $('#TglLahire').val(tgllahire);
                        $('#Notlpne').val(notlpne);
                        $('#Npwpe').val(npwpe);
                        $('#Komponene').val(komponene);
                        $('#JenisKegiatane').val(jeniskegiatane);
                        $('#Bidange').val(bidange);
                        $('#PendidikanTerakhire').val(pendidikanterakhire);
                        $('#id').val(nike);
                        });
                    });
        </script>

<?php
include 'script.php'
?>

    </body>

</html>