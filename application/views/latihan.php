<div class="content-wrapper">
<section class="content">
  <div class="box">
    <div class="box-header">
      <h3 class="box-title">Latihan Autofill </h3>
    </div>
  <div class="box-body">
     <div class="row">
        <div class="col-md-12">
          <div id="colvis"></div>
              <div>
                <button class="btn btn-primary" title="tambah data" onclick="tambah()">
                    <i class="fa fa-plus"></i> Tambah Data
                </button>
                <button class="btn btn-default" title="tambah data" onclick="reload_table()">
                    <i class="fa fa-refresh"></i> Refresh
                </button>
              </div>
          </div>
      </div><br>
    </div>
</section>
</div>

<script type="text/javascript">

  function tambah() {
    $('#form')[0].reset(); // reset form on modal
    $('.form-group').removeClass('has-error'); // clear error class
    $('.help-block').empty(); // clear error string
    $('#modal_form').modal('show'); // show bootstrap modal
    $('.modal-title').text('Tambah Resep'); // Set Title to Bootstrap modal title
  }

  function autofill() {
    var nama_obat = $('#cari_obat').val();
    $.ajax({
      url : '<?php echo base_url('welcome/autofill');?>',
      data : 'cari_obat='+nama_obat,
      datatype : 'JSON',
    }).success(function(data){
      //alert(data.nama_obat);
      $('#id_obat').val(data.id_obat);
      $('#nama_obat').val(data.nama_obat);
      //$('#nama_obat').val(obj.nama_obat);
    });
  }

</script>
<!-- Bootstrap modal -->
<div class="modal fade" id="modal_form" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content col-md-10">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                	<span aria-hidden="true">&times;</span>
                </button>
                <h3 class="modal-title"></h3>
            </div>
            <div class="modal-body form">
                <form action="#" id="form" class="form-horizontal">
                    <input type="hidden" value="" name="id_obat"/>
                    <div class="form-body">
                        <div class="form-group">
                            <label class="control-label col-md-4">Cari Obat</label>
                            <div class="col-md-6">
                                <input name="cari_obat" id="cari_obat" onkeyup="autofill()" placeholder="..." class="form-control" type="text">
                                <span class="help-block"></span>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-4">Nama Obat</label>
                            <div class="col-md-6">
                                <input id="nama_obat" name="nama_obat" placeholder="Nama Obat..." class="form-control" type="text">
                                <span class="help-block"></span>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" id="btnSave" onclick="save()" class="btn btn-primary">Simpan</button>
                <button type="button" class="btn btn-danger" data-dismiss="modal">Batal</button>
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
<!-- End Bootstrap modal -->
