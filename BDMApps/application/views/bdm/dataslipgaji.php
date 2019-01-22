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
                    JQUERY DATATABLES
                    <small>Taken from <a href="https://datatables.net/" target="_blank">datatables.net</a></small>
                </h2>
            </div> -->
            <!-- Exportable Table -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <center><h2>
                               Slip GAJI KARYAWAN
                                <!-- <small>Periode Januari 2017</small> -->
                            </h2></center>
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
                            <div class="table-responsive">
                                <table class="table table-bordered table-striped table-hover dataTable js-exportable">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>ID Slip Gaji</th>
                                            <th>Tanggal</th>
                                            <th>ID Admin</th>
                                            <th>Nik</th>
                                            <th>Nama Karyawan</th>
                                            <th>Jabatan</th>
                                            <th>Gaji Pokok</th>
                                            <th>Kop Bunga</th>
                                            <th>Suka Duka</th>
                                            <th>T_Perdana</th>
                                            <th>Jamsostek</th>
                                            <th>Arisan</th>
                                            <th>LPG/OLI</th>
                                            <th>Kas Bon</th>
                                            <th>Total Potongan</th>
                                            <th>Jumlah di Terima</th>
                                        </tr>
                                    </thead>
                                    <!-- <tfoot>
                                        <tr>
                                            <th>No</th>
                                            <th>Nama</th>
                                            <th>Jabatan</th>
                                            <th>Gaji Pokok</th>
                                            <th>Tnujangan Jabatan</th>
                                            <th>Intensif</th>
                                            <th>Tunjangan Khusus</th>
                                            <th>Jumlah Diterima</th>
                                            <th>Jamsostek</th>
                                        </tr>
                                    </tfoot> -->
                                    <tbody>
                                     <?php 
                                        $i=1;
                                        foreach ($rekslip as $rgk) { 
                                    ?>
                                        <tr>
                                                <td><?php echo $i ; ?></td>
                                                <td><?php echo $rgk->ID_SLIP_GAJI_KARYAWAN; ?></td>
                                                <td><?php echo $rgk->TGL_SLIP_GAJI_KARYAWAN ; ?></td>
                                                <td><?php echo $rgk->ID_ADMIN ; ?></td>
                                                <td><?php echo $rgk->NIK; ?></td>
                                                <td><?php echo $rgk->NAMA_KARYAWAN; ?></td>
                                                <td><?php echo $rgk->JABATAN_KARYAWAN; ?></td>
                                                <td><?php echo $rgk->GAJI_POKOK_KARYAWAN; ?></td>
                                                <td><?php echo $rgk->KOP_BERBUNGA; ?></td>
                                                <td><?php echo $rgk->SUKA_DUKA; ?></td>
                                                <td><?php echo $rgk->T_PERDANA; ?></td>
                                                <td><?php echo $rgk->JAMSOSTEK; ?></td>
                                                <td><?php echo $rgk->ARISAN; ?></td>
                                                <td><?php echo $rgk->LPG_OLI; ?></td>
                                                <td><?php echo $rgk->KAS_BON; ?></td>
                                                <td><?php echo $rgk->JML_POTONGAN; ?></td>
                                                <td><?php echo $rgk->JML_GAJI_DITERIMA; ?></td>
                                                <td>
                                                <a href="<?php echo base_url().'Welcome/Cetak/'.$rgk->ID_SLIP_GAJI_KARYAWAN; ?>" type="button" class="btn bg-red waves-effect" data-toggle="tooltip" data-placement="left" title="Cetak" >
                                                    <i class="material-icons">print</i>
                                                </a></td>
                                        </tr>
                                         <?php $i++;  }  ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- #END# Exportable Table -->
        </div>
    </section>

<?php
include 'script.php'
?>

</body>
</html>
