<?php
include 'header2.php';
?>    
<?php
include 'sidebar2.php';
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
                                REKAP GAJI KARYAWAN
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
                                            <th>ID Gaji</th>
                                            <th>Nama</th>
                                            <th>Jabatan</th>
                                            <th>Gaji Pokok</th>
                                            <th>Tunjangan Jabatan</th>
                                            <th>Intensif</th>
                                            <th>Tunjangan Khusus</th>
                                            <th>Jamsostek</th>
                                            <th>Jumlah Diterima</th>
                                        </tr>
                                    </thead>
                                    <!-- <tfoot>
                                        <tr>
                                            <th>No</th>
                                            <th>Nama</th>
                                            <th>Jabatan</th>
                                            <th>Gaji Pokok</th>
                                            <th>Tunjangan Jabatan</th>
                                            <th>Intensif</th>
                                            <th>Tunjangan Khusus</th>
                                            <th>Jumlah Diterima</th>
                                            <th>Jamsostek</th>
                                        </tr>
                                    </tfoot> -->
                                    <tbody>
                                     <?php 
                                        $i=1;
                                        foreach ($rekgaji as $rgk) { 
                                    ?>
                                        <tr>
                                                <td><?php echo $i ; ?></td>
                                                <td><?php echo $rgk->ID_GAJI; ?></td>
                                                <td><?php echo $rgk->NAMA_KARYAWAN; ?></td>
                                                <td><?php echo $rgk->JABATAN_KARYAWAN; ?></td>
                                                <td><?php echo $rgk->GAJI_POKOK_KARYAWAN; ?></td>
                                                <td><?php echo $rgk->T_JABATAN_KARYAWAN; ?></td>
                                                <td><?php echo $rgk->INSENTIF_KARYAWAN; ?></td>
                                                <td><?php echo $rgk->T_KHUSUS; ?></td>
                                                <td><?php echo $rgk->JAMSOSTEK; ?></td>
                                                <td><?php echo $rgk->JUMLAH_DITERIMA; ?></td>
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
include 'application/views/bdm/script.php'
?>

</body>
</html>