<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
    	<?php echo $title ;?>
    </h1>
    <ol class="breadcrumb pull-left">
      <li class=""><a href="#"><i class="fa fa-building"></i><?php echo $breadcrumb01 ;?></a></li>
      <li class="active"><?php echo $breadcrumb02 ;?></li>
    </ol>
  </section><br>
  <!-- Main content -->
  <section class="invoice">
    <!-- title row -->
    <div class="row">
      <div class="col-xs-12">
        <h2 class="page-header">
          <i class="fa fa-medkit"></i> <?php echo strtoupper($obat->obat_nama);?>
        </h2>
      </div><!-- /.col -->
    </div>
    <!-- info row -->
    <div class="row">
      <div class="col-md-12">
        <strong>Kemasan</strong>
          <p>
            <?php echo $obat->kemasan;?>
          </p>
          <p><strong><?php echo $obat->obat_nama;?></strong></p>
      </div>
      <div class="col-md-6">
        <?php echo $obat->pengertian;?>
      </div>
      <div class="col-md-6">
        <strong>Komposisi</strong><br>
        <?php echo $obat->komposisi;?>
      </div>
    </div>
    <hr>
    <div class="row invoice-info">
      <div class="col-sm-4 invoice-col">
        <p>
          <strong>Dosis</strong><br>
          <?php echo $obat->dosis;?>
        </p>
      </div><!-- /.col -->
      <div class="col-sm-4 invoice-col">
        <p>
          <strong>Indikasi</strong><br>
          <?php echo $obat->indikasi;?>
        </p>
      </div><!-- /.col -->
      <div class="col-sm-4 invoice-col">
        <p>
          <strong>Kontradiksi</strong><br>
          <?php echo $obat->kontradiksi;?>
        </p>

      </div>
      <!-- /.col -->
    </div><!-- /.row -->
    <hr>
    <div class="row invoice-info">
      <div class="col-sm-4 invoice-col">
        <p>
          <strong>Efek Samping</strong><br>
          <?php echo $obat->efek_samping;?>
        </p>
      </div><!-- /.col -->
      <div class="col-sm-4 invoice-col">
        <p>
          <strong>Perhatian</strong><br>
          <?php echo $obat->perhatian;?>
        </p>
      </div><!-- /.col -->
      <div class="col-sm-4 invoice-col">
        <p>
          <strong>Penggunaan</strong><br>
          <?php echo $obat->penggunaan;?>
        </p>
      </div>
      <!-- /.col -->
    </div><!-- /.row -->
    <!-- this row will not appear when printing -->
    <!--
    <div class="row no-print">
      <div class="col-xs-12">
        <a href="invoice-print.html" target="_blank" class="btn btn-default"><i class="fa fa-print"></i> Print</a>
        <button class="btn btn-success pull-right"><i class="fa fa-credit-card"></i> Submit Payment</button>
        <button class="btn btn-primary pull-right" style="margin-right: 5px;"><i class="fa fa-download"></i> Generate PDF</button>
      </div>
    </div>
    -->
  </section><!-- /.content -->
</div><!-- /.content-wrapper -->
