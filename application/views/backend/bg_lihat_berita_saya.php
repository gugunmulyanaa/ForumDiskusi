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
								<th>Judul Berita</th>
								<th>Pengirim</th>
								<th>Kategori</th>
								<th>Tanggal Kirim</th>
								<th>Gambar Berita</th>
								<th>Option</th>
							</tr>
						</thead>
						<tbody>
						  <?php
                                $no=1;
                                 foreach ($list_berita_saya as $x){
                                 $idkat=$x->id_kategori;
		                                  ?>
							<tr class="odd gradeX">
								<td><?php echo $no++;?></td>
								<td><?php echo $x->judul;?></td>
								<td><?php echo $x->pengirim;?></td>
								<td><?php echo $x->kategori;?></td>
								   <td><?php echo $x->date;?></td>
								   <?php if ($x->no_gambar=='yes'){ ?>
								   <td><label>not picture available</label></td>
								   <?php }else if ($x->no_gambar=='no') { ?>
								     <td class="center"><img src="<?php echo base_url('GUI/avatar/'.$x->gambar.'');?>"width="100px"></td>
								   <?php } ?>
								 
								 <td>
								   <a href="<?php echo base_url('backend/delete_berita/'.$x->id_berita.'');?>" class="btn btn-xs btn-danger btn-raised btn-label"   ><i class="fa fa-trash"></i> Remove<div class="ripple-container"></div></button>
								   		<a data-toggle="modal" data-target="#e<?php echo $x->id_berita;?>"class="btn btn-xs btn-default btn-raised btn-label" href="#"><i class="fa fa-pencil"></i> Edit<div class="ripple-container"></div></button>
								   </td>
							   </tr>

	<!-- Modal -->
			

				<!--MODAL EDIT-->
			
					<div class="modal fade" id="e<?php echo $x->id_berita;?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">

		
					<div class="modal-dialog">
			
						<div class="modal-content">
							<div class="modal-header">
								<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
								<h2 class="modal-title">Data Detail</h2>
							</div>
							<div class="modal-body">
							<form method="post" action="<?php echo base_url(); ?>upload/update_berita/<?php echo $x->id_berita;?>">
								<h3>Judul Berita</h3>
								<p>
								<input type="text" name="judul" value="<?php echo $x->judul;?>" >
								</p>
								<h3>Pengirim</h3>
								<p><input type="text" name="pengirim" value="<?php echo $x->pengirim;?>" ></p>
								<br>
								<h3>Isi </h3>
								<input type="hidden" name="gambar_lama" value="<?php echo $x->gambar;?>">
								<p><textarea name="isi"><?php echo $x->isi;?></textarea>
								<br>

								<h3>Kategori</h3>
								<p>
										 <select name="kategori" >
<?php echo "<option value=not_kategori>---- Kategori ----</option>";
foreach ($kategori_blog->result() as $g){
       if($idkat==$g->id_kategori)
            {
                echo "<option value=$g->id_kategori selected>$g->kategori</option>";
            }
            else
            {
           echo " <option value=$g->id_kategori>$g->kategori </option>";
            }
}
?>
            </select>
								<br>
								
								<h3>Foto</h3>
								<center> <img src="<?php echo base_url('GUI/Avatar/'.$x->gambar.'');?>"></center>
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