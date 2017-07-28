<script>
            setInterval(function ()
            {
                $.ajax({
                    type: "post",
                    url: "<?php echo base_url() ?>home",
                    datatype: "html",
                    success: function (data)
                    {
                        $("#load").load(" #load");
                    }
                });
            }, 100);
        </script>
        <footer  class="main-footer">
    <div class="pull-right hidden-xs">
      <b>SMS Blast Beta Version</b> 1.0
    </div>
    <div id="load">
    <strong>Copyright &copy; 2016-<?php echo date("Y");?> <a href="http://valdoinc.com">Valdo Inc</a>.</strong> All rights
    reserved.  <span class="label label-success">System Load Average {elapsed_time} Second</span>  <br>
<span class="label label-primary">Memory Usage {memory_usage}- Running Test -<?php echo md5(date("s")); ?></span><br>
<!--<span class="label label-primary">Memory Usage {memory_usage}-<?php echo md5($this->benchmark->elapsed_time()); ?></span><br>-->
    </div>
 </footer>