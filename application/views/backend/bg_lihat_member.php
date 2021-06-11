 <div class="static-content-wrapper">
                    <div class="static-content">
                        <div class="page-content">
                            <ol class="breadcrumb">
                                  <?php $level= $this->session->userdata('level');?>    
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
      <div class="alert alert-info">
	<h3>Data Member <small></small></h3>
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
								<th>Nomer induk Anggota</th>
								<th>Nama</th>
								<th>Fakultas</th>
								<th>Jenis Kelamin</th>
								<th>No Telp</th>
								<th>Foto</th>
								<th>Status</th>
								<th>Option</th>
							</tr>
						</thead>
						<tbody>
						  <?php
                                $no=1;
                                 foreach ($list_member as $x){
                                 	$sts=$x->status;
                                 	$idm=$x->nia;
		                                  ?>
							<tr class="odd gradeX">
								<td><?php echo $no++;?></td>
								<td><?php echo $x->nia;?></td>
								<td><?php echo $x->nama;?></td>
								   <td><?php echo $x->fakultas;?></td>
								   <td class="center"> <?php echo $x->jenis_kelamin;?></td>
								   <td class="center"><?php echo $x->telepon;?></td>
								   <td><img src="<?php echo base_url('GUI/Avatar/'.$x->avatar.'');?>"width="50px"></td>
								   <td><?php if ($sts=='publish'){?>
								   	<a href="<?php echo base_url('upload/member_nonaktif/'.$x->nia.'');?>" class="label label-success">Active</span>
								   	<?php }else if ($sts=='notpublish'){ ?>
		<a href="<?php echo base_url('upload/member_aktif/'.$x->nia.'');?>" class="label label-danger">Not Active</span>
								   		<?php } ?> </td>
								   <td>
								   <?php if ($level=='admin') { ?>
								    <a href="<?php echo base_url('backend/delete_member/'.$x->nia.'');?>" class="btn btn-xs btn-danger btn-raised btn-label"   ><i class="fa fa-trash"></i> Remove<div class="ripple-container"></div></button>
								   		<a data-toggle="modal" data-target="#e<?php echo $idm;?>"class="btn btn-xs btn-default btn-raised btn-label" href="#"><i class="fa fa-pencil"></i> Edit<div class="ripple-container"></div></button>
								   			   <a data-toggle="modal" data-target="#<?php echo $idm;?>"class="btn btn-info btn-raised"><i class="fa fa-info"></i><div class="ripple-container"></div></button>
								   <?php } else if ($level=='mhs') { ?>
	  <a data-toggle="modal" data-target="#<?php echo $idm;?>"class="btn btn-info btn-raised"><i class="fa fa-info"></i><div class="ripple-container"></div></button>

								   <?php } ?>
								
								   </td>
							   </tr>

	<!-- Modal -->
				<div class="modal fade" id="<?php echo $idm;?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
					<div class="modal-dialog">
						<div class="modal-content">
							<div class="modal-header">
								<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
								<h2 class="modal-title">Data Detail</h2>
							</div>
							<div class="modal-body">
								<h3>Nama</h3>
								<p><?php echo $x->nama;?></p>
								<br>
								<h3>Fakultas</h3>
								<p><?php echo $x->fakultas;?></p>
								<br>
								<h3>Angkatan</h3>
								<p><?php echo $x->angkatan;?></p>
								<br>
								<h3>Tempat Lahir</h3>
								<p><?php echo $x->tempat_lahir;?></p>
								<br>
								<h3>Tanggal Lahir</h3>
								<p><?php echo $x->tanggal_lahir;?></p>
								<br>
								<h3>Jenis Kelamin</h3>
								<p><?php echo $x->jenis_kelamin;?></p>
								<br>
								<h3>Agama</h3>
								<p><?php echo $x->agama;?></p>
								<br>
								<h3>Telepon</h3>
								<p><?php echo $x->telepon;?></p>
								<h3>Foto</h3>
								<center> <img src="<?php echo base_url('GUI/Avatar/'.$x->avatar.'');?>"></center>
							
							</div>
							<div class="modal-footer">
								<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
					
							</div>
						</div><!-- /.modal-content -->
					</div><!-- /.modal-dialog -->
				</div><!-- /.modal -->




				<!--MODAL EDIT-->
			
					<div class="modal fade" id="e<?php echo $idm;?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">

		
					<div class="modal-dialog">
			
						<div class="modal-content">
							<div class="modal-header">
								<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
								<h2 class="modal-title">Data Detail</h2>
							</div>
							<div class="modal-body">
							<form method="post" action="<?php echo base_url(); ?>upload/update_member/<?php echo $x->nia;?>">
								<h3>Nama</h3>
								<p>
								<input type="text" name="nama_lengkap" value="<?php echo $x->nama;?>" >
								</p>
								<h3>Fakultas</h3>
								<p><input type="text" name="fakultas" value="<?php echo $x->fakultas;?>" ></p>
								<br>
								<h3>Angkatan</h3>
								<p><input type="text" name="angkatan" value="<?php echo $x->angkatan;?>" ></p>
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

	<option value="<?php echo $x->jenis_kelamin;?>"><?php echo $x->jenis_kelamin;?></option>
 <option value="laki">Laki </option>
  <option value="perempuan">Perempuan </option>
            </select>
								<br>
								<h3>Agama</h3>
								<p>  <select name="agama">

	<option value="<?php echo $x->agama;?>"><?php echo $x->agama;?></option>
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
							</div>
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
</div>
</div>