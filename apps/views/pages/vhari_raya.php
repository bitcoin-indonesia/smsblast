<section  class="content-header">
    <h1>Pesan
        <small>Control panel</small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">SMS Blast</li>
    </ol>
</section>
<div class="box">
    <div class="box-header">
        <h3 class="box-title"></h3>
        <button class="btn btn-success" onclick="add_hari_raya()"><i class="glyphicon glyphicon-plus"></i> Ucapan</button>
    </div>
    <div class="box-body">
<div class="box">
        <table  id="example1" class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th>Isi pesan</th>
                    <th>Hari Raya</th>
                    <th>Tanggal</th>
                    <th style="width:130px;">Action</th>
                </tr>
            </thead>
            <tbody><?php
                $jum = count($list);
                for ($i = 0; $i < $jum; $i++) {
                    ?>
                    <tr>
                        <td><?php echo str_replace("[1]", $member[0]['nama'], $list[$i]['isi_pesan']) ?></td>
                        <td><?php echo $list[$i]['jenis_hari_raya'] ?></td>
                        <td><?php echo $list[$i]['tanggal_hari_raya'] ?></td>
                        <td>
                            <a data-toggle="tooltip" href="javascript:void(0)" title="Edit" onclick="edit_pesan_hari_raya('<?php echo $list[$i]['id_pesan_hari_raya'] ?>')"><i class="glyphicon glyphicon-pencil"></i></a>
                            <a data-toggle="tooltip" href="javascript:void(0)" title="Hapus" onclick="delete_pesan_hari_raya('<?php echo $list[$i]['id_pesan_hari_raya'] ?>')"><i class="glyphicon glyphicon-remove"></i></a>
                        </td>
                    </tr> <?php } ?>
            </tbody></table>
    </div>  </div>
</div>

<div class="modal fade" id="modal_form" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h3 class="modal-title">SPAJ FORM</h3>
            </div>
            <div class="modal-body form">
                <form action="#" id="form" class="form-horizontal">
                    <input value="" type="hidden" name="id_pesan_hari_raya"/> 
                    <div class="form-body">
                        <div class="form-group">
                            <label class="control-label col-md-3">Isi Pesan</label>
                            <div class="col-md-9">
                                <textarea name="isi_pesan" rows="10"  id="field" onkeyup="countChar(this)" placeholder="pesan" class="form-control" type="text"></textarea>
                                <span id="charNum">-</span> Character</div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-3">Tanggal</label>
                            <div class="col-md-9">
                                <input class="form-control docs-date" placeholder="Pilih Tanggal"  name="tanggal_hari_raya">
                            </div>
                        </div>
                     
                        <div class="form-group">
                            <label class="control-label col-md-3">Jenis Hari Raya</label>
                            <div class="col-md-9">
                                <select name="jenis_hari_raya" class="form-control">
                                    <option value="">--Pilih--</option>
                                    <option value="nyepi">Hari Raya Nyepi</option>
                                    <option value="paskah">Hari Paskah</option>
                                    <option value="waisak">Hari Waisak </option>
                                    <option value="ken_isa">Kenaikan Isa Almasih </option>
                                    <option value="idul_fitri">Hari Raya Idul Fitri</option>
                                    <option value="idul_adha">Idul Adha</option>
                                    <option value="maulid">Maulid Nabi Muhammad SAW</option>
                                    <option value="natal">Hari Natal</option>
                                </select>  
                            </div>
                        </div>

                    </div>
                </form><p style="color:red;">[1] = Nama Member<br>
                </p>
            </div>
            <div class="modal-footer">
                <button type="button" id="btnSave" onclick="save_hari_raya()" class="btn btn-primary">Save</button>
                <button type="button" class="btn btn-danger" data-dismiss="modal">Cancel</button>
            </div>
        </div>
    </div>
</div>
<script type="text/javascript">
    $.widget.bridge('uibutton', $.ui.button);
    $(function () {
        $("#example1").DataTable();
        $('#example2').DataTable({
            "paging": true,
            "lengthChange": true,
            "searching": true,
            "ordering": true,
            "info": true,
            "autoWidth": true
        });
    });
</script>