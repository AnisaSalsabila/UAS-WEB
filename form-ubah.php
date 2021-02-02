 <div class="row">
   <div class="col-md-12">
     <div class="page-header">
       <h4>
         <i class="glyphicon glyphicon-edit"></i>
         Ubah data siswa
       </h4>
     </div> <!-- /.page-header -->
     <?php
      if (isset($_GET['npm'])) {
        $npm   = $_GET['npm'];
        $query = mysqli_query($db, "SELECT * FROM is_siswa WHERE npm='$npm'") or die('Query Error : ' . mysqli_error($db));
        while ($data  = mysqli_fetch_assoc($query)) {
          $npm           = $data['npm'];
          $nama          = $data['nama'];
          $tempat_lahir  = $data['tempat_lahir'];

          $tanggal       = $data['tanggal_lahir'];
          $tgl           = explode('-', $tanggal);
          $tanggal_lahir = $tgl[2] . "-" . $tgl[1] . "-" . $tgl[0];

          $jenis_kelamin = $data['jenis_kelamin'];
          $alamat        = $data['alamat'];
          $kodepos    = $data['kode_pos'];
        }
      }
      ?>
     <div class="panel panel-default">
       <div class="panel-body">
         <form class="form-horizontal" method="POST" action="proses-ubah.php">
           <div class="form-group">
             <label class="col-sm-2 control-label">NPM</label>
             <div class="col-sm-2">
               <input type="text" class="form-control" name="npm" value="<?php echo $npm; ?>" readonly>
             </div>
           </div>

           <div class="form-group">
             <label class="col-sm-2 control-label">Nama</label>
             <div class="col-sm-3">
               <input type="text" class="form-control" name="nama" autocomplete="off" value="<?php echo $nama; ?>" required>
             </div>
           </div>

           <div class="form-group">
             <label class="col-sm-2 control-label">Tempat Lahir</label>
             <div class="col-sm-3">
               <input type="text" class="form-control" name="tempat_lahir" autocomplete="off" value="<?php echo $tempat_lahir; ?>" required>
             </div>
           </div>

           <div class="form-group">
             <label class="col-sm-2 control-label">Tanggal Lahir</label>
             <div class="col-sm-2">
               <div class="input-group">
                 <input type="text" class="form-control date-picker" data-date-format="dd-mm-yyyy" name="tanggal_lahir" autocomplete="off" value="<?php echo $tanggal_lahir; ?>" required>
                 <span class="input-group-addon">
                   <i class="glyphicon glyphicon-calendar"></i>
                 </span>
               </div>
             </div>
           </div>

           <div class="form-group">
             <label class="col-sm-2 control-label">Jenis Kelamin</label>
             <div class="col-sm-4">
               <?php
                if ($jenis_kelamin == 'L') { ?>
                 <label class="radio-inline">
                   <input type="radio" name="jenis_kelamin" value="L" checked> Laki-laki
                 </label>

                 <label class="radio-inline">
                   <input type="radio" name="jenis_kelamin" value="P"> Perempuan
                 </label>
               <?php
                } else { ?>
                 <label class="radio-inline">
                   <input type="radio" name="jenis_kelamin" value="L"> Laki-laki
                 </label>

                 <label class="radio-inline">
                   <input type="radio" name="jenis_kelamin" value="P" checked> Perempuan
                 </label>
               <?php
                }
                ?>
             </div>
           </div>

           <div class="form-group">
             <label class="col-sm-2 control-label">Alamat</label>
             <div class="col-sm-3">
               <textarea class="form-control" name="alamat" rows="3" required><?php echo $alamat; ?></textarea>
             </div>
           </div>

           <div class="form-group">
             <label class="col-sm-2 control-label">Kode Pos</label>
             <div class="col-sm-2">
               <input type="text" class="form-control" name="kode_pos" value="<?php echo $kodepos; ?>" required>
             </div>
           </div>

           <hr />
           <div class="form-group">
             <div class="col-sm-offset-2 col-sm-10">
               <input type="submit" class="btn btn-info btn-submit" name="simpan" value="Simpan">
               <a href="index.php" class="btn btn-default btn-reset">Batal</a>
             </div>
           </div>
         </form>
       </div> <!-- /.panel-body -->
     </div> <!-- /.panel -->
   </div> <!-- /.col -->
 </div> <!-- /.row -->