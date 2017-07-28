<section  class="content-header">
    <h1>Pesan
        <small>Control panel</small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">SMS Blast</li>
    </ol>
</section>
<div class="box"><div id="payment">
        <?php if (count($payment) == 0) { ?>
            <div class="box-header">
                <h3 class="box-title"></h3>
                <button class="btn btn-success" onclick="add_bill_pay()"><i class="glyphicon glyphicon-envelope"></i> Payment</button>
            </div><?php } else { ?>
            <div class="box box-default">
                <div class="box-header with-border">
                    <h3 class="box-title">Billing</h3>
                    <div class="box-tools pull-right">
                        <?php echo '<a href="javascript:void(0)" class="btn btn-box-tool" title="Edit" onclick="edit_pesan_bill_pay(' . "'" . $payment[0]['id_pesan'] . "'" . ')"><i class="glyphicon glyphicon-pencil"></i></a>'; ?>
                        <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                        </button>
                        <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
                    </div>
                </div>
                <div id="parent">
                    <div id="wide" class="box-body">
                        <strong>Jenis Pesan</strong> : Payment<br>
                        <strong>Isi pesan</strong> : <?php echo $payment[0]['isi_pesan']; ?><br>
                        <span class="label label-success"><strong>Preview Pesan</strong> : <?php echo str_replace("[4]", $member[0]['no_rek'], str_replace("[3]", number_format($member[0]['premi'], "0", ",", "."), str_replace("[2]", $member[0]['no_polis'], str_replace("[1]", $member[0]['nama'], $payment[0]['isi_pesan'])))); ?></span><br>
                        <strong>Text Counter</strong> : <?php echo strlen(str_replace("[4]", $member[0]['no_rek'], str_replace("[3]", $member[0]['premi'], str_replace("[2]", $member[0]['no_polis'], str_replace("[1]", $member[0]['nama'], $payment[0]['isi_pesan']))))); ?> Character<br>
                    </div>
                </div> 
                <hr>
            </div> 
        <?php } ?>
    </div></div>
<div class="modal fade" id="modal_form" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h3 class="modal-title">Payment FORM</h3>
            </div>
            <div class="modal-body form">
                <form action="#" id="form" class="form-horizontal">
                    <input value="" type="hidden" name="id_pesan"/> 
                    <div class="form-body">
                        <div class="form-group">
                            <label class="control-label col-md-3">Isi Pesan</label>
                            <div class="col-md-9">
                                <textarea name="isi_pesan" rows="10"  id="field" onkeyup="countChar(this)" placeholder="pesan" class="form-control" type="text"></textarea>
                                <span id="charNum">-</span> Character </div>
                        </div>
                    </div>
                </form><p style="color:red;">
                    [1] = Nama Member<br>
                    [2] = No Polis<br>
                    [3] = Nominal Premi<br>
                    [4] = No Rekening<br></p>
            </div>
            <div class="modal-footer">
                <button type="button" id="btnSave" onclick="save_bill_pay()" class="btn btn-primary">Save</button>
                <button type="button" class="btn btn-danger" data-dismiss="modal">Cancel</button>
            </div>
        </div>
    </div>
</div>
