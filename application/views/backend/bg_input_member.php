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
            <h2>Input Member</h2>
            <div class="panel-ctrls" data-actions-container="" data-action-collapse='{"target": ".panel-body"}'></div>
        </div>
        <div class="panel-editbox" data-widget-controls=""></div>
        <div class="panel-body">
            <div class="form-horizontal row-border">
               <?php 
    echo form_open_multipart('upload/upload_member/');
?> 
                
                <div class="form-group">
                    <label class="col-sm-2 control-label">Nama Lengkap </label>
                    <div class="col-sm-8">
                        <input type="text" name="nama_lengkap" class="form-control popovers" placeholder="Nama Lengkap" data-trigger="hover" 
                        data-toggle="popover" data-content="Isi form ini!" data-original-title="Menu" required>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-2 control-label">Fakultas </label>
                    <div class="col-sm-8">
                        <input type="text" name="fakultas" class="form-control popovers" placeholder="Fakultas" data-trigger="hover" 
                        data-toggle="popover" data-content="Isi form ini!" data-original-title="Menu"required>
                    </div>
                </div>
                                <div class="form-group">
                    <label class="col-sm-2 control-label">Angkatan </label>
                    <div class="col-sm-8">
                        <input type="text" name="angkatan" class="form-control popovers" placeholder="Angkatan" data-trigger="hover" 
                        data-toggle="popover" data-content="Isi form ini!" data-original-title="Menu"required>
                    </div>
                </div>


                    <div class="form-group">
                    <label class="col-sm-2 control-label">Tempat Lahir </label>
                    <div class="col-sm-8">
                        <input type="text" name="tempat_lahir" class="form-control popovers" placeholder="Tempat Lahir" data-trigger="hover" 
                        data-toggle="popover" data-content="Isi form ini!" data-original-title="Menu"required>
                    </div>
                </div>
                <div class="form-group">
                            <label class="col-sm-2 control-label">Tanggal Lahir</label>
                            <div class="col-sm-8">
                                <div class="input-group date" id="datepicker-startview">
                                    <span class="input-group-addon"><i class="material-icons">date_range</i></span>
                                    <input type="text" name="tanggal_lahir"class="form-control">
                                </div>
                            </div>
                        </div>
             <div class="form-group">
                    <label class="col-sm-2 control-label">Jenis Kelamin </label>
                    <div class="col-sm-8">
                       <select name="jenis_kelamin" class="form-control">
<option value="not">---- Jenis Kelamin ----</option>
 <option value="laki">Laki </option>
  <option value="perempuan">Perempuan </option>
            </select>
                    </div>
                </div>

               
                <div class="form-group">
                    <label class="col-sm-2 control-label">Alamat Lengkap</label>
                    <div class="col-sm-8">
                        <textarea class="form-control" name="alamat_lengkap"></textarea>
                    </div>
                </div>
                 <div class="form-group">
                    <label class="col-sm-2 control-label">Agama </label>
                    <div class="col-sm-8">
                        <select name="agama" class="form-control">
<option value="not">---- Agama ----</option>
 <option value="islam">islam </option>
  <option value="kristen">kristen </option>
    <option value="hindu">hindu </option>
      <option value="budha">budha </option>
            </select>
                    </div>
                </div>
                 <div class="form-group">
                    <label class="col-sm-2 control-label">No Telp </label>
                    <div class="col-sm-8">
                        <input type="text" name="no_telp" class="form-control popovers" placeholder="No Telp" data-trigger="hover" 
                        data-toggle="popover" data-content="Isi form ini!" data-original-title="Menu" required>
                    </div>
                </div>
                 <div class="form-group">
                    <label class="col-sm-2 control-label">Username </label>
                    <div class="col-sm-8">
                        <input type="text" name="username_member" class="form-control popovers" placeholder="Username" data-trigger="hover" 
                        data-toggle="popover" data-content="Isi form ini!" data-original-title="Menu"required>
                    </div>
                </div>
                 <div class="form-group">
                    <label class="col-sm-2 control-label">Password </label>
                    <div class="col-sm-8">
                        <input type="text" name="password_member" class="form-control popovers" placeholder="Password" data-trigger="hover" 
                        data-toggle="popover" data-content="Isi form ini!" data-original-title="Menu">
                    </div>
                </div>

            
        <div class="form-group">
                    <label class="col-sm-2 control-label">FOTO</label>
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
