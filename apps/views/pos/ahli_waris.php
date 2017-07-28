<div class="box"><div id="waris">
    <?php if(count($ahli_waris)== 0)  {  ?>
    <div class="box-header">
        <h3 class="box-title"></h3>
        <button class="btn btn-success" onclick="add_ahli_waris()"><i class="glyphicon glyphicon-plus"></i> Ahli Waris</button>
    </div><?php } else { ?>
    <div class="box box-default">
        <div class="box-header with-border">
            <h3 class="box-title">POS</h3>
            <div class="box-tools pull-right">
                <?php echo '<a href="javascript:void(0)" class="btn btn-box-tool" title="Edit" onclick="edit_pesan_ahli_waris(' . "'" . $ahli_waris[0]['id_pesan'] . "'" . ')"><i class="glyphicon glyphicon-pencil"></i></a>'; ?>
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                </button>
                <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
            </div>
        </div>
        <div id="parent">
            <div id="wide" class="box-body">
                <strong>Jenis Pesan</strong> : Ahli Waris<br>
                <strong>Isi pesan</strong> : <?php echo $ahli_waris[0]['isi_pesan'];?><br>
               <span class="label label-success"><strong>Preview Pesan</strong> : <?php echo str_replace("[2]",$member[0]['no_polis'],str_replace("[1]",$member[0]['nama'],$ahli_waris[0]['isi_pesan']));?></span><br>
                <strong>Text Counter</strong> : <?php echo strlen(str_replace("[2]",$member[0]['no_polis'],str_replace("[1]",$member[0]['nama'],$ahli_waris[0]['isi_pesan'])));?> Character<br>
            </div>
        </div> 
        <hr>
    </div> 
   <?php } ?>
</div></div>
<script src="<?php echo base_url('assets/bootstrap/js/jquery-2.1.4.min.js') ?>"></script>
<script src="<?php echo base_url('assets/bootstrap/js/bootstrap.min.js') ?>"></script>
<script src="<?php echo base_url('assets/bootstrap/js/jquery.dataTables.min.js') ?>"></script>
<script src="<?php echo base_url('assets/bootstrap/js/dataTables.bootstrap.js') ?>"></script>
<script src="<?php echo base_url('assets/bootstrap/js/bootstrap-datepicker.min.js') ?>"></script>
<script type="text/javascript">
var save_method;
var table;
$(document).ready(function () {
    table = $('#table').DataTable({
        "processing": true,
        "serverSide": true,
        "order": [],
        "ajax": {
            "url": "<?php echo site_url('pos/ahli_waris/ajax_list') ?>",
            "type": "POST"
        },
        "columnDefs": [
            {
                "targets": [-1],
                "orderable": false,
            },
        ],
    });
    $('.datepicker').datepicker({
        autoclose: true,
        format: "dd-mm-yyyy",
        todayHighlight: true,
        orientation: "top auto",
        todayBtn: true,
        todayHighlight: true,
    });
    $("input").change(function () {
        $(this).parent().parent().removeClass('has-error');
        $(this).next().empty();
    });
    $("textarea").change(function () {
        $(this).parent().parent().removeClass('has-error');
        $(this).next().empty();
    });
    $("select").change(function () {
        $(this).parent().parent().removeClass('has-error');
        $(this).next().empty();
    });

});

function add_ahli_waris()
{
    save_method = 'add';
    $('#form')[0].reset();
    $('.form-group').removeClass('has-error');
    $('.help-block').empty();
    $('#modal_form').modal('show');
    $('.modal-title').text('Ahli Waris');
}


function edit_pesan_ahli_waris(id_pesan)
{
    save_method = 'update';
    $('#form')[0].reset();
    $('.form-group').removeClass('has-error');
    $('.help-block').empty();
    $.ajax({
        url: "<?php echo site_url('pos/ahli_waris/ajax_edit/') ?>/" + id_pesan,
        type: "GET",
        dataType: "JSON",
        success: function (data)
        {
            $('[name="id_pesan"]').val(data.id_pesan);
            $('[name="isi_pesan"]').val(data.isi_pesan);
            $('#modal_form').modal('show');
            $('.modal-title').text('Edit ahli waris');
        },
        error: function (jqXHR, textStatus, errorThrown)
        {
            alert('Error get data from ajax');
        }
    });
}
function save_ahli_waris()
{
    $('#btnSave').text('saving...');
    $('#btnSave').attr('disabled', true);
    var url;
    if (save_method == 'add') {
        url = "<?php echo site_url('pos/ahli_waris/ajax_add') ?>";
    } else {
        url = "<?php echo site_url('pos/ahli_waris/ajax_update') ?>";
    }
    $.ajax({
        url: url,
        type: "POST",
        data: $('#form').serialize(),
        dataType: "JSON",
        success: function (data)
        {
            if (data.status)
            {
                $('#modal_form').modal('hide');
                javascript:ajaxpage('<?php echo base_url() ?>ahli-waris', 'rightcolumn');
            } 
            else
            {
                for (var i = 0; i < data.inputerror.length; i++)
                {
                    $('[name="' + data.inputerror[i] + '"]').parent().parent().addClass('has-error');
                    $('[name="' + data.inputerror[i] + '"]').next().text(data.error_string[i]);
                }
            }
            $('#btnSave').text('save');
            $('#btnSave').attr('disabled', false);
        },
        error: function (jqXHR, textStatus, errorThrown)
        {
            alert('Error adding / update data');
            $('#btnSave').text('save');
            $('#btnSave').attr('disabled', false);
        }
    });
}

</script>
<div class="modal fade" id="modal_form" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h3 class="modal-title">Ahli Waris FORM</h3>
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
                </form><p style="color:red;">[1] = Nama Member<br>
                [2] = No Polis</p>
            </div>
            
            
            <div class="modal-footer">
                
                <button type="button" id="btnSave" onclick="save_ahli_waris()" class="btn btn-primary">Save</button>
                <button type="button" class="btn btn-danger" data-dismiss="modal">Cancel</button>
            </div>
        </div>
    </div>
</div>
