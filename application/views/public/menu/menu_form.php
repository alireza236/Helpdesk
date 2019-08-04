        <div class="row">
                    <div class="col-md-9">
                        
    <form class="form-horizontal" action="<?php echo $action; ?>" method="post">
                            <div class="panel panel-flat">
                                <div class="panel-heading">
                                    <div class="row">
                                        <div class="col-md-10 col-md-offset-1">
                                            <h5 class="panel-title">Tambah Menu</h5>
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
        <label class="col-lg-3 control-label">Posisi: </label>
        <div class="col-lg-9">
        <div class="row">
        <div class="col-xs-12">
        <input type="text" name="namacustomer" class="form-control" placeholder="nama customer" value="<?php echo $posisi; ?>">
           <?php echo form_error('posisi') ?>
        </div>
        </div>
        </div>
        </div>

        <div class="form-group">
        <label class="col-lg-3 control-label">Nama Menu:</label>
        <div class="col-lg-9">
    <textarea name="alamat" rows="5" cols="5" class="form-control" placeholder="alamat"><?php echo $nama_menu; ?></textarea>
        <?php echo form_error('nama_menu') ?>
        </div>
        </div>
 
        <div class="form-group">
        <label class="col-lg-3 control-label">Icon:</label>
        <div class="col-lg-9">
        <input type="text" name="Telp" class="form-control" placeholder="telepon" value="<?php echo $icon; ?>">
        <?php echo form_error('icon') ?>
        </div>
        </div>


        <div class="form-group">
        <label class="col-lg-3 control-label">Link:</label>
        <div class="col-lg-9">
        <div class="row">
        <div class="col-xs-12">
        <input type="text" name="email" class="form-control" placeholder="email" value="<?php echo $link; ?>">
        <?php echo form_error('link') ?>
        </div>
        </div>
        </div>
        </div>


        <div class="form-group">
        <label class="col-lg-3 control-label">Parent:</label>
        <div class="col-lg-9">
        <div class="row">
        <div class="col-xs-12">
        <input type="text" name="PIC" class="form-control" placeholder="PIC" value="<?php echo $parent; ?>">
        <?php echo form_error('parent') ?>
        </div>
        </div>
        </div>
        </div>

        <div class="form-group">
        <label class="col-lg-3 control-label">Rules:</label>
        <div class="col-lg-9">
        <div class="row">
        <div class="col-xs-12">
        <input type="text" name="selesperson" class="form-control" placeholder="selesperson" value="<?php echo $rules; ?>">
        <?php echo form_error('rules') ?>
        </div>
        </div>
        </div>
        </div>


        <div class="form-group">
        <label class="col-lg-3 control-label">Aktif:</label>
        <div class="col-lg-9">
        <div class="row">
        <div class="col-xs-12">
        <select name="customerproduct" id="" class="form-control"> 
            <option value="voice" selected="selected">Voice</option>
            <option value="data">Data</option>
            <option value="voicedata">VoiceData</option>
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
               
