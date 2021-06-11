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
             <h2>Input Thread</h2>
             <div class="panel-ctrls" data-actions-container="" data-action-collapse='{"target": ".panel-body"}'></div>
         </div>
         <div class="panel-editbox" data-widget-controls=""></div>
         <div class="panel-body">
             <div class="form-horizontal row-border">
                 <?php
                    $id_no = $this->session->userdata('id_no');
                    echo form_open_multipart('upload/upload_berita/');
                    ?>

                 <div class="form-group">
                     <label class="col-sm-2 control-label">Judul Berita </label>
                     <div class="col-sm-8">
                         <input type="text" name="judul" class="form-control popovers" placeholder="Judul" data-trigger="hover" data-toggle="popover" data-content="Isi form ini!" data-original-title="Menu" required>
                     </div>
                 </div>
                 <div class="form-group">
                     <label class="col-sm-2 control-label">Pengirim </label>
                     <div class="col-sm-8">
                         <input type="hidden" name="id_nia" value="<?php echo $id_no; ?>">
                         <input type="text" name="pengirim" class="form-control popovers" placeholder="Nama Pengirim" data-trigger="hover" data-toggle="popover" data-content="Isi form ini!" data-original-title="Menu" required>
                     </div>
                 </div>


                 <div class="form-group">
                     <label class="col-sm-2 control-label">Kategori </label>
                     <div class="col-sm-8">
                         <select name="kategori" class="form-control">
                             <?php
                                echo "<option value=not_kategori>---- Pilih Kategori ----</option>";
                                foreach ($kategori_blog->result() as $g) {
                                    echo " <option value=$g->id_kategori>$g->kategori </option>";
                                }
                                ?>
                         </select>
                     </div>
                 </div>
                 <div class="form-group">
                     <label class="col-sm-2 control-label">Isi Berita</label>
                     <div class="col-sm-8">
                         <textarea class="form-control" name="isi"></textarea>
                     </div>
                 </div>



                 <div class="form-group">
                     <label class="col-sm-2 control-label">FOTO Berita</label>
                     <div class="col-sm-5">
                         <div class="fileinput fileinput-new" style="width: 100%;" data-provides="fileinput">
                             <div class="fileinput-preview thumbnail mb20" data-trigger="fileinput" style="width: 100%; height: 150px;"></div>
                             <div>
                                 <a href="#" class="btn btn-default fileinput-exists" data-dismiss="fileinput">Remove</a>
                                 <span class="btn btn-default btn-file"><span class="fileinput-new">Select image</span><span class="fileinput-exists">Change</span><input type="file" name="userfile"></span>
                             </div>
                         </div>
                     </div>
                     <div class="col-sm-4">
                         <div class="alert alert-info">Image preview only works in IE10+, FF3.6+, Safari6.0+, Chrome6.0+ and Opera11.1+. In older browsers the filename is shown instead.</div>
                     </div>
                 </div>


             </div>
             <div class="panel-footer">
                 <div class="row">
                     <div class="col-sm-8 col-sm-offset-2">
                         <button class="btn-raised btn-primary btn">Submit</button>
                         <button class="btn-default btn">Cancel</button>
                     </div>
                 </div>
             </div>
         </div>