<div class="row">
  <div class="col-md-12">
    <div class="page-header">
      <h4>
        <i class="glyphicon glyphicon-edit"></i>
        Input data
      </h4>
    </div> <!-- /.page-header -->

    <div class="panel panel-default">
      <div class="panel-body">
        <form class="form-horizontal" method="POST" action="proses-simpan.php">
          <div class="form-group">
            <label class="col-sm-2 control-label">NPM</label>
            <div class="col-sm-2">
              <input type="text" class="form-control" name="npm" maxlength="8" autocomplete="off" required>
            </div>
          </div>

          <div class="form-group">
            <label class="col-sm-2 control-label">Nama</label>
            <div class="col-sm-3">
              <input type="text" class="form-control" name="nama" autocomplete="off" required>
            </div>
          </div>

          <div class="form-group">
            <label class="col-sm-2 control-label">Tempat Lahir</label>
            <div class="col-sm-3">
              <input type="text" class="form-control" name="tempat_lahir" autocomplete="off" required>
            </div>
          </div>

          <div class="form-group">
            <label class="col-sm-2 control-label">Tanggal Lahir</label>
            <div class="col-sm-2">
              <div class="input-group">
                <input type="text" class="form-control date-picker" data-date-format="dd-mm-yyyy" name="tanggal_lahir" autocomplete="off" required>
                <span class="input-group-addon">
                  <i class="glyphicon glyphicon-calendar"></i>
                </span>
              </div>
            </div>
          </div>

          <div class="form-group">
            <label class="col-sm-2 control-label">Jenis Kelamin</label>
            <div class="col-sm-4">
              <label class="radio-inline">
                <input type="radio" name="jenis_kelamin" value="L"> Laki-laki
              </label>

              <label class="radio-inline">
                <input type="radio" name="jenis_kelamin" value="P"> Perempuan
              </label>
            </div>
          </div>

          <div class="form-group">
            <label class="col-sm-2 control-label">Alamat</label>
            <div class="col-sm-3">
              <textarea class="form-control" name="alamat" rows="3" required></textarea>
            </div>
          </div>

          <div class="form-group">
            <label class="col-sm-2 control-label">Kode Pos</label>
            <div class="col-sm-2">
              <input type="text" class="form-control" name="kode_pos" required>
            </div>
          </div>

          <hr />
          <div class="form-group">
            <div class="col-sm-offset-2 col-sm-10">
              <input type="submit" class="btn btn-info btn-submit" name="simpan" value="Simpan">
              <a href="home.php" class="btn btn-default btn-reset">Batal</a>
            </div>
          </div>
        </form>
      </div> <!-- /.panel-body -->
    </div> <!-- /.panel -->
  </div> <!-- /.col -->
</div> <!-- /.row -->