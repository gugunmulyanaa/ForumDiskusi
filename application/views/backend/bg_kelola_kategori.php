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
            <h2>Input Kategori</h2>
            <div class="panel-ctrls" data-actions-container="" data-action-collapse='{"target": ".panel-body"}'></div>
        </div>
        <div class="panel-editbox" data-widget-controls=""></div>
        <div class="panel-body">
            <div class="form-horizontal row-border">
    
               <form method="post" action="<?php echo base_url(); ?>upload/upload_kategori/">

                
                <div class="form-group">
                    <label class="col-sm-2 control-label">Nama Kategori </label>
                    <div class="col-sm-8">
                        <input type="text" name="nama_kategori" class="form-control popovers" placeholder="Nama kategori" data-trigger="hover" 
                        data-toggle="popover" data-content="Isi form ini!" data-original-title="Menu" >
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
  <div class="panel panel-default" data-widget='{"draggable": "false"}'>
      <div class="alert alert-info">
    <h3>Data Kategori <small></small></h3>
    <p></p>
</div>
<div data-widget-group="group1">
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h2>Data Tables</h2>
                    <div class="panel-ctrls"></div>
                </div>
                <div class="panel-body no-padding">
                    <table id="example" class="table table-striped table-bordered" cellspacing="0" width="100%">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama Kategori</th>
                                <th>Option</th>
                            </tr>
                        </thead>
                        <tbody>
                          <?php
                                $no=1;
                                 foreach ($kategori_blog->result() as $x){
                                 $idkat=$x->id_kategori;
                                          ?>
                            <tr class="odd gradeX">
                                <td><?php echo $no++;?></td>
                                <td><?php echo $x->kategori;?></td>
                             
                                 
                                 <td>
                                   <a href="<?php echo base_url('backend/delete_member/'.$x->id_kategori.'');?>" class="btn btn-xs btn-danger btn-raised btn-label"   ><i class="fa fa-trash"></i> Remove<div class="ripple-container"></div></button>
                                        <a data-toggle="modal" data-target="#e<?php echo $x->id_kategori;?>"class="btn btn-xs btn-default btn-raised btn-label" href="#"><i class="fa fa-pencil"></i> Edit<div class="ripple-container"></div></button>
                                   </td>
                               </tr>

    <!-- Modal -->
            

                <!--MODAL EDIT-->
            
                    <div class="modal fade" id="e<?php echo $x->id_kategori;?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">

        
                    <div class="modal-dialog">
            
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                <h2 class="modal-title">Data Detail</h2>
                            </div>
                            <div class="modal-body">
                            <form method="post" action="<?php echo base_url(); ?>upload/update_kategori/<?php echo $x->id_kategori;?>">
                                <h3>Nama Kategori</h3>
                                <p>
                                <input type="text" name="nama_kategori" value="<?php echo $x->kategori;?>" >
                                </p>
                               
                            <div class="modal-footer">
                                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                <input type="submit" class="btn btn-raised btn-primary" name="Update">  
                                </form>         
                                </div>
                        </div><!-- /.modal-content -->
                    </div><!-- /.modal-dialog -->
                </div><!-- /.modal -->
                    
                              <?php } ?>
                        </tbody>
                    </table>
                </div>
                <div class="panel-footer"></div>
            </div>
        </div>
    </div>