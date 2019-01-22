<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Slip Gaji Bali Dukuh Mas</title>

    <!-- Bootstrap -->
    <link href="<?php echo base_url(); ?>asset/css/print-table.css" rel="stylesheet">
    <link href="<?php echo base_url();?>asset/plugins/bootstrap/css/bootstrap.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
     
    <div class="row" style="padding-top: 20px">
        <div class="col-xs-4 col-md-3">
            <center> 
            <img src="<?php echo base_url();?>asset/images/pertaminalogo.png" style="width: 200px; height: 50px" >
            </center>
        </div>
        <div class="col-xs-4 col-md-2">
            <h4><center> PT. Bali Dukuh Mas </center></h4>
            <h4><center> SPBU 54.803.02 </center></h4>
        </div>
        <div class="col-xs-4 col-md-3">
           <center> 
            <img src="<?php echo base_url();?>asset/images/badak.png" style="width: 200px; height: 50px" >
            </center>
        </div>
    </div>

    <div class="row">
        <div class="col-xs-6 col-md-4" style="padding-left: 15px; padding-top: 70px">TGL Slip Gaji : <?php echo $rekslip[0]->TGL_SLIP_GAJI_KARYAWAN;?> </div>
        <div class="col-xs-6 col-md-4" style="padding-top: 70px"> Jabatan : <?php echo $rekslip[0]->JABATAN_KARYAWAN;?> </div>
        <div class="col-xs-6 col-md-4" style="padding-left: 15px; padding-top: 10px">NIK : <?php echo $rekslip[0]->NIK;?>  </div>
        <!--<div class="col-xs-6 col-md-4" style="padding-top: 10px"> Kehadiran </div>-->
        <div class="col-xs-6 col-md-4" style="padding-left: 15px; padding-top: 10px">Nama Karyawan : <?php echo $rekslip[0]->NAMA_KARYAWAN;?> </div>
    </div>

    <div class="row">
        <center>
        <div class="col-xs-6 col-md-4" style="padding-top: 60px"> Pendapatan : <?php echo $rekslip[0]->JUMLAH_GAJI_KARYAWAN;?>  </div>
        <div class="col-xs-6 col-md-4" style="padding-top: 60px"> Potongan : <?php echo $rekslip[0]->JML_POTONGAN;?>  </div>
        </center>
    </div>

    <div class="row">
        <div class="col-xs-6 col-md-4" style="padding-left: 15px; padding-top: 20px"> Gaji Pokok :  <?php echo $rekslip[0]->GAJI_POKOK_KARYAWAN;?>   </div>
        <!--<div class="col-xs-6 col-md-4" style="padding-top: 20px"> KOP Berbunga :  <?php echo $rekslip[0]->JML_POTONGAN;?>  </div>-->
        <div class="col-xs-6 col-md-4" style="padding-left: 15px; padding-top: 20px"> T. Jabatan :  <?php echo $rekslip[0]->T_JABATAN_KARYAWAN;?>  </div>
        <!--<div class="col-xs-6 col-md-4" style="padding-top: 20px"> Suka Duka : </div>
        <div class="col-xs-6 col-md-4" style="padding-left: 15px; padding-top: 20px"> Uang Makan : </div>
        <div class="col-xs-6 col-md-4" style="padding-top: 20px"> T. Perdana : </div>
        <div class="col-xs-6 col-md-4" style="padding-left: 15px; padding-top: 20px"> Intensif : </div>
        <div class="col-xs-6 col-md-4" style="padding-top: 20px"> Jamsostek : </div>
        <div class="col-xs-6 col-md-4" style="padding-left: 15px; padding-top: 20px"> Pertamina WAY : </div>
        <div class="col-xs-6 col-md-4" style="padding-top: 20px"> Arisan : </div>
        <div class="col-xs-6 col-md-4" style="padding-left: 15px; padding-top: 20px"> T. Khusus : </div>
        <div class="col-xs-6 col-md-4" style="padding-top: 20px"> OLI/LPG : </div>
        <div class="col-xs-6 col-md-4" style="padding-left: 15px; padding-top: 20px"> </div>
        <div class="col-xs-6 col-md-4" style="padding-top: 20px"> Kas BON : </div>
        <div class="col-xs-6 col-md-4" style="padding-left: 15px; padding-top: 30px"> Total Pendapatan :</div>-->
        <div class="col-xs-6 col-md-4" style="padding-top: 30px"> Total Potongan :  <?php echo $rekslip[0]->JML_POTONGAN;?>  </div>
        <div class="col-xs-12 col-md-8" style="padding-top: 40px"> Total Gaji : <?php echo $rekslip[0]->JML_GAJI_DITERIMA;?>
    </div>

    <div class="row">
        <center>
             </div>
        </center>
    </div>

    <div class="row">
        <div class="col-xs-6 col-md-4" style="padding-left: 15px; padding-top: 30px"> </div>
        <div class="col-xs-6 col-md-4" style="padding-top: 30px"> </div>
    </div>

    <div class="row">
        <center>
        <div class="col-xs-6 col-md-4" style="padding-left: 15px; padding-top: 50px">MENYETUJUI 
        </div>
        <div class="col-xs-6 col-md-4" style="padding-top: 50px"> I MADE SUDIARNA</div>
        </center>
    </div>

    <!--<div class="row">
        <center>
        <div class="col-xs-6 col-md-4" style="padding-left: 15px; padding-top: 70px">I MADE SUWEDA </div>
        <div class="col-xs-6 col-md-4" style="padding-top: 70px"> I MADE SUDIARNA </div>
        </center>
    </div>-->
















        <script>
        window.print();
    </script>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="<?php echo base_url(); ?>asset/js/plugins/jquery/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="<?php echo base_url(); ?>asset/js/plugins/bootstrap/bootstrap.min.js"></script>
  </body>
</html>