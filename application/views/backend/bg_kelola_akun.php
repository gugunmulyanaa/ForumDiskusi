 <div class="static-content-wrapper">
                    <div class="static-content">
                        <div class="page-content">
                            <ol class="breadcrumb">
                                
<li class=""><a href="#">Home</a></li>
<li class="active"><a href="index.html">Dashboard</a></li>
   <?php $id_no= $this->session->userdata('id_no');?>
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
            <h2>Kelola akun</h2>
            <div class="panel-ctrls" data-actions-container="" data-action-collapse='{"target": ".panel-body"}'></div>
        </div>
        <div class="panel-editbox" data-widget-controls=""></div>
        <div class="panel-body">
            <div class="form-horizontal row-border">
    
               <form method="post" action="<?php echo base_url(); ?>upload/update_member/<?php echo $id_no; ?>">

                  <?php
                            
                                 foreach ($data_akun as $x)
                            
                                          ?>
                                <h3>Nama</h3>
                                <p>
                                <input type="text" name="nama_lengkap" value="<?php echo $x->nama;?>" >
                                </p>
                                <h3>Fakultas</h3>
                                <p><input type="text" name="fakultas" value="<?php echo $x->fakultas;?>" ></p>
                                <br>
                                <h3>Tempat Lahir</h3>
                                <input type="hidden" name="gambar_lama" value="<?php echo $x->avatar;?>">
                                <p><input type="text" name="tempat_lahir" value="<?php echo $x->tempat_lahir;?>" ></p>
                                <br>
                                <h3>Tanggal Lahir</h3>
                                <p> <div class="input-group date" id="datepicker-startview">
                                    <span class="input-group-addon"><i class="material-icons">date_range</i></span>
                                    <input type="text" name="tanggal_lahir" value="<?php echo $x->tanggal_lahir;?>" >
                                </div></p>
                                <br>
                                <h3>Jenis Kelamin</h3>
                                <p>
                                         <select name="jenis_kelamin" >
<option value="not">---- Jenis Kelamin ----</option>
 <option value="laki">Laki </option>
  <option value="perempuan">Perempuan </option>
            </select>
                                <br>
                                <h3>Agama</h3>
                                <p>  <select name="agama">
<option value="not">---- Agama ----</option>
 <option value="islam">islam </option>
  <option value="kristen">kristen </option>
    <option value="hindu">hindu </option>
      <option value="budha">budha </option>
            </select></p>
                                <br>
                                <h3>Telepon</h3>
                                <p><input type="text" name="no_telp" value="<?php echo $x->telepon;?>" ></p>
                                <br>
                                <h3>Username</h3>
                                <p><input type="text" name="username_member" value="<?php echo $x->username;?>" ></p>
                                <br>
                                <h3>Password</h3>
                                <p><input type="text" name="password_member" value="<?php echo $x->password;?>" ></p>
                                <br>
                                <h3>Foto</h3>
                                <center> <img src="<?php echo base_url('GUI/Avatar/'.$x->avatar.'');?>"></center>
                            <input type="file" name="userfile">
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
  