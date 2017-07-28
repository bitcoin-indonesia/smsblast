 <section  class="content-header">
        <h1>Pesan
            <small>Control panel</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active">SMS Blast</li>
        </ol>
    </section>
    <div class="box"><div id="spaj">
    <?php if(count($spaj)== 0)  {  ?>
    <div class="box-header">
        <h3 class="box-title"></h3>
        <button class="btn btn-success" onclick="add_spaj()"><i class="glyphicon glyphicon-plus"></i> SPAJ</button>
    </div><?php } else { ?>
    <div class="box box-default">
        <div class="box-header with-border">
            <h3 class="box-title">NBUW</h3>
            <div class="box-tools pull-right">
                <?php echo '<a href="javascript:void(0)" class="btn btn-box-tool" title="Edit" onclick="edit_pesan_spaj(' . "'" . $spaj[0]['id_pesan'] . "'" . ')"><i class="glyphicon glyphicon-pencil"></i></a>'; ?>
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                </button>
                <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
            </div>
        </div>
        <div id="parent">
            <div id="wide" class="box-body">
                <strong>Jenis Pesan</strong> : SPAJ<br>
                <strong>Isi pesan</strong> : <?php echo $spaj[0]['isi_pesan'];?><br>
                <span class="label label-success"><strong>Preview Pesan</strong> : <?php echo str_replace("[2]",$member[0]['no'],str_replace("[1]",$member[0]['nama'],$spaj[0]['isi_pesan']));?></span><br>
                <strong>Text Counter</strong> : <?php echo strlen(str_replace("[2]",$member[0]['no'],str_replace("[1]",$member[0]['nama'],$spaj[0]['isi_pesan'])));?> Character<br>
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
                <h3 class="modal-title">SPAJ FORM</h3>
            </div>
            
            <div class="modal-body form">
                <form action="#" id="form" class="form-horizontal">
                    <input value="" type="hidden" name="id_pesan"/> 
                    <div class="form-body">
                        <div class="form-group">
                            <label class="control-label col-md-3">Nama Lengkap</label>
                            <div class="col-md-9">
                           <textarea name="isi_pesan" rows="10"  id="field" onkeyup="countChar(this)" placeholder="pesan" class="form-control" type="text"></textarea>
                           <span id="charNum">-</span> Character </div>
                        </div>
                    </div>
                </form>
                <p style="color:red;">[1] = Nama Member<br>[2] = No SPAJ</p>
            </div>
            <div class="modal-footer">
                <button type="button" id="btnSave" onclick="save_spaj()" class="btn btn-primary">Save</button>
                <button type="button" class="btn btn-danger" data-dismiss="modal">Cancel</button>
            </div>
        </div>
    </div>
</div>
