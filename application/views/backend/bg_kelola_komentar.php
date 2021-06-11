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
								<th>Judul berita</th>
								<th>Nama pengirim</th>
								<th>Komentar</th>
								
								<th>Option</th>
							</tr>
						</thead>
						<tbody>
						  <?php
                                $no=1;
                                 foreach ($komentar as $x){
                                 	            $isi=substr($x->isi_pesan,0,20);
		                                  ?>
							<tr class="odd gradeX">
								<td><?php echo $no++;?></td>
								<td><?php echo $x->judul;?></td>
								<td><?php echo $x->nama_lengkap;?></td>
								 <td><?php echo $isi;?>..</td>
								 <td><a href="<?php echo base_url('backend/delete_komentar/'.$x->id_komentar.'');?>" class="btn btn-xs btn-danger btn-raised btn-label"   ><i class="fa fa-trash"></i> Remove<div class="ripple-container"></div></button>
</td>
								
								
							   </tr>

	
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