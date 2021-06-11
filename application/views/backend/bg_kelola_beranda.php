 <div class="static-content-wrapper">
                    <div class="static-content">
                        <div class="page-content">
                            <ol class="breadcrumb">
                                
<li class=""><a href="#">Home</a></li>
<li class="active"><a href="index.html">Dashboard</a></li>

                            </ol>
                            <div class="page-heading">            
                               <h1>Dashboard<small>Project Statistics</small></h1>
                               <div class="options">
   <!--  <div class="btn-toolbar">
        <form action="" class="form-horizontal row-border" style="display: inline-block;">
            <div class="form-group hidden-xs">
                <div class="col-sm-8">
                    <button class="btn btn-default" id="daterangepicker-d">
                        <i class="fa fa-calendar"></i> 
                        <span><?php echo date("F j, Y", strtotime('-30 day')); ?> - <?php echo date("F j, Y"); ?></span> <b class="caret"></b>
                    </button>
                </div>
            </div>
        </form>
        <a href="#" class="btn btn-default" style="vertical-align: top;">Settings</a>
    </div> -->
</div>
                           </div>
                          
                        </div> <!-- #page-content -->
                    </div>
                    <div class="panel panel-default" data-widget='{"draggable": "false"}'>
        <div class="panel-heading">
            <h2>Input Beranda</h2>
            <div class="panel-ctrls" data-actions-container="" data-action-collapse='{"target": ".panel-body"}'></div>
        </div>
        <div class="panel-editbox" data-widget-controls=""></div>
        <div class="panel-body">
            <div class="form-horizontal row-border">
    
               <form method="post" action="<?php echo base_url(); ?>upload/update_beranda/1">

                  <?php
                            
                                 foreach ($beranda->result() as $x)
                            
                                          ?>
                <div class="form-group">
                    <label class="col-sm-2 control-label">Isi Beranda </label>
                    <div class="col-sm-8">
                     <textarea class="form-control" name="isi_beranda"><?php echo $x->beranda;?></textarea>
                    </div>
                </div>
              
        
        </div>
        <div class="panel-footer">
            <div class="row">
                <div class="col-sm-8 col-sm-offset-2">
                    <input type="submit" class="btn-raised btn-primary btn" value="save">
                    <button class="btn-default btn">Cancel</button>
                </div>
            </div>
        </div>
    </div>
    </form>
  