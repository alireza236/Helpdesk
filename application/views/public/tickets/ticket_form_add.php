<div class="row">
    <div class="col-md-9">
    <style type="text/css">
    .formtable {text-align:left; font-size:12px;color:#000000; background-color:#f0f0f0;padding:2px;}
    .control-label {font-style: initial; font-size: 12.5px;}
    .field_set {background-color:#f0f0f0; text-align:left; padding:2px;}
</style>
  <script>
        $(document).ready(function(){
          $("#idcustomer").change(function(){
            var idcustomer = $("#idcustomer").val();
            $.ajax({
              url: "<?php echo site_url('public/tickets/get_customer'); ?>",
              data: "idcustomer=" + idcustomer,
              type: 'GET',
              //dataType: 'json',
              cache: false,
              success: function(data){
                $("#namacustomer").html(data.namacustomer);
                $("#alamat_pasang").html(data.alamat_pasang);
                $("#jenis_tarif").html(data.jenis_tarif);
                $("#tgl_berlangganan").html(data.tgl_berlangganan);
                $("#nomor_tlpn").html(data.nomor_tlpn);
                
              }
            });
          }); 



            $(".select-minimum").select2({
                minimumInputLength: 2,
                minimumResultsForSearch: "-1"
            });

              $(".select-loading-data").select2({
                  minimumResultsForSearch: "-1",
              });
      });
    </script>   

    <form class="form-horizontal" name="ticketform" action="<?php $action; ?>" method="post" onsubmit="return cekData();">
                            <div class="panel panel-flat">
                                <div class="panel-heading">
                                    <h5 class="panel-title"></h5>
                                    <div class="heading-elements">
                                        <ul class="icons-list">
                                            <li><a data-action="collapse"></a></li>
                                            <li><a data-action="reload"></a></li>
                                            <li><a data-action="close"></a></li>
                                        </ul>
                                    </div>
                                </div>

    <div class="panel-body">
         <fieldset>
              <i class="icon-file-text2 position-left"></i>
                                            No Ticket&nbsp;: 
                            <legend class="text-semibold">
                            <a class="control-arrow" data-toggle="collapse" data-target="#demo1">
                            <i class="icon-circle-down2"></i>
                            </a>
                            </legend> 

                            <div class="collapse in" id="demo1">
                            <div class="form-group">
                            <label class="col-lg-3 control-label">No ID &nbsp;:</label>
                            <div class="col-lg-9">
          <select data-placeholder="" value="<?php echo $idcustomer; ?>" name="idcustomer" id="idcustomer" class="select-minimum">
            <option></option><?php echo form_error('idcustomer') ?>
                 <?php foreach ($this->customer_model->get_customer() as $cust): ?>
                    <option value="<?php echo $cust->idcustomer; ?>"><?php echo $cust->no_register;?></option>
                 <?php endforeach ?>
            </select> 
                            </div>
                            </div>

                                            <div class="form-group formtable">
                                                <label class="control-label col-lg-2">Nama Pelanggan&nbsp;:</label>
                                               <div class="col-lg-10"><div class="form-control-static"><label id="namacustomer"></div>
                                               </div>
                                            </div>

                                            <div class="form-group formtable">
                                                <label class="control-label col-lg-2">Alamat Pasang&nbsp;:</label>
                                               <div class="col-lg-10">
                                                <div class="form-control-static"><label id="alamat_pasang"></label> </div>
                                               </div>
                                            </div>

                                            <div class="form-group formtable">
                                                <label class="control-label col-lg-2">Jenis Tarif&nbsp;:</label>
                                               <div class="col-lg-10">
                                                <div class="form-control-static"><label id="jenis_tarif"></label> </div>
                                               </div>
                                            </div>
                                            <div class="form-group formtable">
                                                <label class="control-label col-lg-2">Tanggal Registrasi&nbsp;:</label>
                                               <div class="col-lg-10">
                                                <div class="form-control-static"><label id="tgl_berlangganan"></label> </div>
                                               </div>
                                            </div>
                                             <div class="form-group formtable">
                                                <label class="control-label col-lg-2">Nomor Telepon&nbsp;:</label>
                                               <div class="col-lg-10">
                                                <div class="form-control-static"><label id="nomor_tlpn"></label> </div>
                                               </div>
                                            </div>
                                        </div>
              </fieldset>
                         

                                    <fieldset>
                                        <legend class="text-semibold">
                                            <i class="icon-reading position-left"></i>
                                            Form Tambah Ticket
                                            <a class="control-arrow" data-toggle="collapse" data-target="#demo2">
                                                <i class="icon-circle-down2"></i>
                                            </a>
                                        </legend>

                                        <div class="collapse in" id="demo2">
                                            <div class="form-group">
                                                <label class="col-lg-3 control-label">Tanggal Laporan&nbsp;:</label>
                                                <div class="col-lg-9">
        <input type="text" name="reporteddate" value="<?php echo $reporteddate; ?>" placeholder="<?php echo date('d-M-Y',time());?>" class="form-control pickadate-strings"><?php echo form_error('reporteddate') ?>
                                                </div>
                                            </div>

                                           <!--  <div class="form-group">
                                               <label class="col-lg-3 control-label">Nama Pelapor&nbsp;:</label>
                                               <div class="col-lg-9">
                                                   <input type="text" name="reportedby" value="<?php echo $reportedby; ?>" placeholder="" class="form-control">
                                               <?php echo form_error('reportedby') ?>
                                               </div>
                                           </div> -->

                                            <div class="form-group">
                                                <label class="col-lg-3 control-label">Urgensi (SLA)&nbsp;:</label>
                                                <div class="col-lg-9">
            <select data-placeholder="" class="form-control" name="sla" value="<?php echo $sla; ?>" class="select">
            <?php $slas = $this->sla_model->get_sla()  ?>
            <option></option><?php echo form_error('sla') ?>
                 <?php foreach ($slas as $slaval): ?>
                    <option value="<?php echo $slaval->slaid; ?>"><?php echo $slaval->namasla;?></option>
                 <?php endforeach ?>
            </select> 
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <label class="col-lg-3 control-label">Subjek Incident&nbsp;:</label>
                                                <div class="col-lg-9">
          <input type="text" name="problemsummary" value="<?php echo $problemsummary; ?>" placeholder="" class="form-control">
                                               <!--  <?php echo form_error('problemsummary') ?> -->
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <label class="col-lg-3 control-label">Detail Incident&nbsp;:</label>
                                                <div class="col-lg-9">
    <textarea name="problemdetail" value="<?php echo $problemdetail; ?>"  rows="5" cols="5" placeholder="detail permasalahan yang terjadi" class="form-control"></textarea><?php echo form_error('problemdetail') ?>
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <label class="col-lg-3 control-label">Assign To&nbsp;:</label>
                                                <div class="col-lg-9">
             <select data-placeholder="" class="select-loading-data" name="assignee" value="<?php echo $assignee; ?>" class="select">
             <option></option>
             <?php echo form_error('assignee') ?>
                 <?php foreach ($this->user_model->get_user() as $list): ?>
                    <option value="<?php echo $list->id; ?>"><?php echo $list->fullname;?></option>
                 <?php endforeach ?>
            </select> 

                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <label class="col-lg-3 control-label">Telepon&nbsp;:</label>
                                                <div class="col-lg-9">
            <input type="text" name="telp" value="<?php echo $telp; ?>" placeholder="" class="form-control">
          <!--   <?php echo form_error('telp') ?> -->
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <label class="col-lg-3 control-label">Email&nbsp;:</label>
                                                <div class="col-lg-9">
            <input type="text" name="email" value="<?php echo $email; ?>" placeholder="" class="form-control">
           <!--  <?php echo form_error('email') ?> -->
                                                </div>
                                            </div>
                                        </div>
                        <div class="text-right">
                        <input type="submit" class="btn btn-primary" value="Submit">
                         <a href="<?php echo site_url('public/tickets') ?>" class="btn btn-default">Cancel</a>
                        </div>
                      </fieldset> 
                    </div>
                </div>
    </form>
  
    
    <script type="text/javascript">
    function cekData(){
        if (ticketform.idcustomer.value == ""){ 
            new PNotify({
              title: "Perhatian !",
              text: "Mohon pilih pelanggan!",
              width: "100%",
              cornerclass: "no-border-radius",
              addclass: "stack-custom-top bg-danger",
            });
            ticketform.idcustomer.focus();
            return false;
        }
        
        if (ticketform.reporteddate.value == ""){
            new PNotify({
              title: "Perhatian !",
              text: "Tanggal laporan belum di isi!",
              width: "100%",
              cornerclass: "no-border-radius",
              addclass: "stack-custom-top bg-danger",
            });
            ticketform.reporteddate.focus();
            return false;
        }
        
        if (ticketform.reportedby.value == ""){
            new PNotify({
              title: "Perhatian !",
              text: "kolom petugas yang melapor belum di isi!",
              width: "100%",
              cornerclass: "no-border-radius",
              addclass: "stack-custom-top bg-danger",
            });
            ticketform.reportedby.focus();
            return false;
        }
        
        if (ticketform.assignee.value == ""){
            new PNotify({
              title: "Perhatian !",
              text: "Mohon pilih nama untuk Assign yang dituju!",
              width: "100%",
              cornerclass: "no-border-radius",
              addclass: "stack-custom-top bg-danger",
            });
            ticketform.assignee.focus();
            return false;
        }
        if (ticketform.sla.value == ""){
            new PNotify({
              title: "Perhatian !",
              text: "Mohon pilih tingkatan level SLA !",
              width: "100%",
              cornerclass: "no-border-radius",
              addclass: "stack-custom-top bg-danger",
            });
            ticketform.sla.focus();
            return false;
        }
        if (ticketform.problemsummary.value == ""){
            new PNotify({
              title: "Perhatian !",
              text: "Mohon isi topik permasalahannya!",
              width: "100%",
              cornerclass: "no-border-radius",
              addclass: "stack-custom-top bg-danger",
            });
            ticketform.problemsummary.focus();
            return false;
        }
        if (ticketform.problemdetail.value == ""){
            new PNotify({
              title: "Perhatian !",
              text: "Mohon isi Detail permasalahannya!",
              width: "100%",
              cornerclass: "no-border-radius",
              addclass: "stack-custom-top bg-danger",
            });
            ticketform.problemdetail.focus();
            return false;
        }
        if (ticketform.telp.value == ""){
            new PNotify({
              title: "Perhatian !",
              text: "nomor telepon belum diisi!",
              width: "100%",
              cornerclass: "no-border-radius",
              addclass: "stack-custom-top bg-danger",
            });
            ticketform.telp.focus();
            return false;
        }
        if(/\D/.test(ticketform.telp.value)){
            new PNotify({
              title: "Perhatian !",
              text: "Maaf!, nomor telepon harus berupa angka",
              width: "100%",
              cornerclass: "no-border-radius",
              addclass: "stack-custom-top bg-danger",
            });
            ticketform.telp.focus();
            return false;
        }
    var filter = new RegExp("^[_A-Za-z0-9-\\+]+(\\.[_A-Za-z0-9-]+)*@" +"[A-Za-z0-9-]+(\\.[A-Za-z0-9]+)*(\\.[A-Za-z]{2,})$");
        if (!filter.test(ticketform.email.value) && ticketform.email.value != ""){
           new PNotify({
              title: "Perhatian !",
              text: "Mohon masukan Email yang Valid",
              width: "100%",
              cornerclass: "no-border-radius",
              addclass: "stack-custom-top bg-danger",
            });
            ticketform.email.focus();
            return false;
        }else{
          return true;   
          }
    }
    </script>
    <script type="text/javascript">
                $(function() {
                     $('.pickadate-strings').pickadate({
                        weekdaysShort: ['Su', 'Mo', 'Tu', 'We', 'Th', 'Fr', 'Sa'],
                        showMonthsShort: true,
                        formatSubmit: 'dd/mm/yyyy',
                     });  
                  });
    </script>

