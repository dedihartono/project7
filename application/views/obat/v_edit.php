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
     	<div class="box-body">
  			<div class="row">
          <div class="col-md-4">
            <!-- general form elements -->
            <div class="box box-primary">
              <div class="box-header with-border">
                <h3 class="box-title"><?php echo $titlebox ;?></h3>
              </div><!-- /.box-header -->
              <!-- form start -->
              <form role="form" method="post" action="<?php echo base_url();?>kelola_obat/edit_save/<?php echo $this->uri->segment('3');?>">
                <div class="box-body">
                  <div class="form-group">
                    <label for="obat_nama">Nama Obat</label>
                    <input type="text" class="form-control" name="obat_nama" placeholder="Nama Obat">
                  </div>
                  <div class="form-group">
                    <label for="obat_nama">Kemasan</label>
                    <input type="text" class="form-control" name="kemasan" placeholder="Kemasan Obat">
                  </div>
                  <div class="form-group">
                    <label for="dosis">Dosis</label>
                    <textarea class="form-control ckeditor" name="dosis"></textarea>
                  </div>

                </div><!-- /.box-body -->
            </div><!-- /.box -->
          </div><!--/.col (left) -->
          <div class="col-md-4">
            <!-- general form elements -->
            <div class="box box-primary">
              <div class="box-header with-border">
                <h3 class="box-title"></h3>
              </div>
              <!-- form start -->
                <div class="box-body">
                  <div class="form-group">
                    <label for="indikasi">Indikasi</label>
                    <textarea class="form-control ckeditor" name="indikasi"></textarea>
                  </div>
                  <div class="form-group">
                    <label for="kontradiksi">Kontradiksi</label>
                    <textarea class="form-control ckeditor" name="kontradiksi"></textarea>
                  </div>
                </div><!-- /.box-body -->
                <div class="box-footer">
                </div>
            </div><!-- /.box -->
          </div><!--/.col (left) -->
          <div class="col-md-4">
            <!-- general form elements -->
            <div class="box box-primary">
                <div class="box-header with-border">
                  <h3 class="box-title"></h3>
                </div>
              <!-- form start -->
                <div class="box-body">
                  <div class="form-group">
                    <label for="efek_samping">Efek Samping</label>
                    <textarea class="form-control ckeditor" name="efek_samping"></textarea>
                  </div>
                  <div class="form-group">
                    <label for="perhatian">Perhatian</label>
                    <textarea class="form-control ckeditor" name="perhatian"></textarea>
                  </div>
                  <div class="form-group">
                    <label for="penggunaan">Penggunaan</label>
                    <textarea class="form-control ckeditor" name="penggunaan"></textarea>
                  </div>
                </div><!-- /.box-body -->
                <div class="box-footer">
                  <button type="submit" class="btn btn-primary">Simpan</button>
                </div>
              </form>
            </div><!-- /.box -->
          </div><!--/.col (left) -->
  			</div>
      </div>
  	</div>
  </section><!-- /.content -->
</div><!-- /.content-wrapper -->
