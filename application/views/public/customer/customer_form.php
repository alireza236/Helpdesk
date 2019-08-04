        <div class="row">
                    <div class="col-md-9">
                        
    <form class="form-horizontal" action="<?php echo $action; ?>" method="post">
                            <div class="panel panel-flat">
                                <div class="panel-heading">
                                    <div class="row">
                                        <div class="col-md-10 col-md-offset-1">
                                            <h5 class="panel-title">Tambah Customer</h5>
                                            <div class="heading-elements">
                                                <ul class="icons-list">
                                                    <li><a data-action="collapse"></a></li>
                                                    <li><a data-action="reload"></a></li>
                                                    <li><a data-action="close"></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>

<div class="panel-body">
   <div class="row">
     <div class="col-md-10 col-md-offset-1">
        <div class="form-group">
        <label class="col-lg-3 control-label">Tanggal</label>
        <div class="col-lg-9">
        <div class="row">
        <div class="col-xs-12">
        <input type="text" name="tgl_berlangganan" class="form-control pickadate-strings" placeholder="tanggal" value="<?php echo $tgl_berlangganan; ?>">
           <?php echo form_error('tgl_berlangganan') ?>
        </div>
        </div>
        </div>
        </div>

        <div class="form-group">
        <label class="col-lg-3 control-label">Loket Pembayaran: </label>
        <div class="col-lg-9">
        <div class="row">
        <div class="col-xs-12">
           <select name="loket_pembayaran" id="" class="form-control"> 
            <option value="teluk_buyung" selected="selected">Teluk Buyung</option>
            <option value="pondok_ungu">Pondok Ungu</option>
            <option value="medan_satria">Medan Satria</option>
           <?php echo form_error('loket_pembayaran') ?>
        </select>
        </div>
        </div>
        </div>
        </div>

         

        <div class="form-group">
        <label class="col-lg-3 control-label">Nama Customer: </label>
        <div class="col-lg-9">
        <div class="row">
        <div class="col-xs-12">
        <input type="text" name="namacustomer" class="form-control" placeholder="nama customer" value="<?php echo $namacustomer; ?>">
           <?php echo form_error('namacustomer') ?>
        </div>
        </div>
        </div>
        </div>
         

         <div class="form-group">
        <label class="col-lg-3 control-label">Jenis Tarif: (Gol)</label>
        <div class="col-lg-9">
        <div class="row">
        <div class="col-xs-12">
           <select name="jenis_tarif" id="" class="form-control"> 
            <option value="niaga" selected="selected">Niaga</option>
            <option value="sosial">Sosial</option>
            <option value="rumah_tangga">Rumah Tangga</option>
            <option value="khusus">Khusus</option>
            <option value="industri">Industri</option>
           <?php echo form_error('jenis_tarif') ?>
        </select>
        </div>
        </div>
        </div>
        </div>
        <div class="form-group">
        <label class="col-lg-3 control-label">Alamat Tinggal:</label>
        <div class="col-lg-9">
    <textarea name="alamat" rows="5" cols="5" class="form-control" placeholder="alamat"><?php echo $alamat; ?></textarea>
        <?php echo form_error('alamat') ?>
        </div>
        </div>

        <div class="form-group">
        <label class="col-lg-3 control-label">Alamat Pasang:</label>
        <div class="col-lg-9">
    <textarea name="alamat_pasang" rows="5" cols="5" class="form-control" placeholder="alamat"><?php echo $alamat_pasang; ?></textarea>
        <?php echo form_error('alamat_pasang') ?>
        </div>
        </div>
 
        <div class="form-group">
        <label class="col-lg-3 control-label">Telepon:</label>
        <div class="col-lg-9">
        <input type="text" name="Telp" class="form-control" placeholder="telepon" value="<?php echo $Telp; ?>">
        <?php echo form_error('Telp') ?>
        </div>
        </div>


        <div class="form-group">
        <label class="col-lg-3 control-label">Email:</label>
        <div class="col-lg-9">
        <div class="row">
        <div class="col-xs-12">
        <input type="text" name="email" class="form-control" placeholder="email" value="<?php echo $email; ?>">
        <?php echo form_error('email') ?>
        </div>
        </div>
        </div>
        </div>


        <div class="form-group">
        <label class="col-lg-3 control-label">PIC:</label>
        <div class="col-lg-9">
        <div class="row">
        <div class="col-xs-12">
        <input type="text" name="PIC" class="form-control" placeholder="PIC" value="<?php echo $PIC; ?>">
        <?php echo form_error('PIC') ?>
        </div>
        </div>
        </div>
        </div>

        


        <div class="form-group">
        <label class="col-lg-3 control-label">Status Hunian:</label>
        <div class="col-lg-9">
        <div class="row">
        <div class="col-xs-12">
        <select name="status_hunian" id="" class="form-control"> 
            <option value="hak_milik" selected="selected">Hak Milik</option>
            <option value="sewa_lahan">Sewa Lahan</option>
        </select>
        </div>
        </div>
        </div>
        </div>



        <div class="text-right">
        <input type="hidden" name="idcustomer" value="<?php echo $idcustomer; ?>" /> 
        <input type="submit" class="btn btn-primary" value="Submit"> 
        <a href="<?php echo site_url('public/customer') ?>" class="btn btn-default">Cancel</a>
        </div>

       </div>
       </div>
       </div>
       </div>
</form>


                </div>
                </div>
                
                <script type="text/javascript">
                $(function() {
                     $('.pickadate-strings').pickadate({
                        //weekdaysShort: ['Su', 'Mo', 'Tu', 'We', 'Th', 'Fr', 'Sa'],
                        showMonthsShort: true,
                        formatSubmit: 'dd/mm/yyyy',
                        //hiddenPrefix: 'prefix__',
                        //hiddenSuffix: '__suffix'
                    });  
               });
                </script>
