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
  <section class="content">
    <div class="box">
	    <div class="box-header">
	      <h3 class="box-title"><?php echo $titlebox ;?></h3>
	    </div>
   	<div class="box-body">
		   <div class="row">
		    	<div class="col-md-12">
		    		<div id="colvis"></div>
		            <div>
                  <a class="btn btn-primary" href="<?php echo base_url()?>Kelola_obat/tambah_obat">Tambah Data</a>
		            </div>
		        </div>
		    </div><br>
			<div class="row">
		    	<div class="col-md-12">
			       <table id="table" class="table table-bordered" cellspacing="0" width="100%">
			            <thead>
			                <tr>
			                    <th width="5%">NO</th>
			                    <th width="60%">NAMA OBAT</th>
                          <th width="15%">KEMASAN</th>
                          <th width="30%">AKSI</th>
			                </tr>
			            </thead>
			            <tbody>
                  <?php $n = 1; foreach ($obat as $key => $value): { ?>
			                <tr>
                        <td width=""><?php echo $n++;?></td>
                        <td width=""><?php echo $value['obat_nama']; ;?></td>
                        <td width=""><?php echo $value['kemasan']; ;?></td>
                        <td width="">
                          <a class="btn btn-info" href="<?php echo base_url();?>Kelola_obat/detail_obat/<?php echo $value['obat_id'];?>">Detail</a>
                          <a class="btn btn-warning" href="<?php echo base_url();?>Kelola_obat/edit_obat/<?php echo $value['obat_id'];?>">Edit</a>
                          <a class="btn btn-danger" onclick="return hapus()" href="<?php echo base_url();?>kelola_obat/hapus_obat/<?php echo $value['obat_id'];?>">Hapus</a>
                        </td>
                      </tr>
                    <?php } endforeach ;?>
			            </tbody>
			        </table>
			    </div>
			</div>
    	</div>
	</div>
  </section><!-- /.content -->
</div><!-- /.content-wrapper -->
