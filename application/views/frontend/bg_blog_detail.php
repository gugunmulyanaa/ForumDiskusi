 <div id="main" class="col-lg-7 col-md-7 col-sm-8 col-xs-12">
               <?php

                $nama_user= $this->session->userdata('nama');
            
                ?>
                   <?php $id_no= $this->session->userdata('id_no');?>
                 <?php 
 $id_blog = $this->uri->segment('3') ;?>

                <article class="general-wrapper">
                    <div class="title">
                       <?php foreach($data_blog_id->result() as $v);?>
                        <h3><?php echo $v->judul;?></h3>    
                    </div>
                    <div class="single_blog_meta">
                        <div class="byline">
                            <span><i class="fa fa-user"></i> <a href="#" title=""><?php echo $v->nama;?></a></span>
                            <span><i class="fa fa-folder-open-o"></i> <a href="#" title=""><?php echo $v->kategori;?></a></span>
                            <span><i class="fa fa-calendar-o"></i> <a href="#" title=""><?php echo $v->date;?></a></span>
                            <span><i class="fa fa-eye"></i> <a href="#" title=""><?php echo $v->hits;?></a></span>
                        </div>
                    </div>
                </article><!-- end author-wrapper -->
                
                <article class="post-wrapper">
                    <div class="media post-image">
                       <?php if ($v->no_gambar=='no') { ?>
                       <img src="<?php echo base_url('GUI/Avatar/'.$v->gambar.'');?>">
                       <?php }else if ($v->no_gambar=='yes') { ?>
                      <?php } ?>
                    </div>
                    <div class="post-desc">

                        <p><?php echo $v->isi;?></p>
                       </div>
                    
                </article><!-- end author-wrapper -->

                <article class="author-wrapper">
                    <div class="title">
                    <?php if ($v->level=='admin'){ ?>
                              <h3>Pengirim : <mark>Admin</mark></h3> 
                                <?php }else if ($v->level=='mhs'){?>
                               <h3>Pengirim : <mark><?php echo $v->nama;?></mark></h3>    
                            <?php } ?>
                                     
                    </div>
                    
                    
                </article><!-- end author-wrapper -->
                <?php if($this->session->userdata('username') == NULL ) { ?>

              <?php }else{ ?>
                <article id="comments" class="author-wrapper">
                    <div class="title">
                        <h2><?php echo $total_komentar;?> Comments on <?php echo $v->judul;?></h2>                
                    </div>
                    
                    <ul class="media-list">
                    <?php foreach($komentar->result() as $k) { ?>
                        <li class="media">
                            <a class="pull-left about_img" href="#">
                                <img alt="" class="img-responsive media-object alignleft" src="<?php echo base_url('GUI/Avatar/'.$k->avatar.'');?>">
                            </a>
                            <div class="media-body">
                                <h4 class="media-heading"><?php echo $k->nama;?> <span class="pull-right"></span></h4>
                               <p><?php echo $k->isi_pesan;?>
                               </div>
                        </li>
                     
                        <?php } ?>
                    </ul>

                </article><!-- end author-wrapper -->

                <div class="general-wrapper">
                    <div class="title">
                        <h3>Comment Form</h3>                
                    </div>
                    <div class="comment_form row">

                    <form method="post" action="<?php echo base_url(); ?>upload/upload_komentar/<?php echo $id_blog;?>">
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                               <input type="hidden"  id="contact_name" name="id_no" class="form-control" value="<?php echo $id_no;?>">
                                <input type="text"  id="contact_name" name="nama_komentar" class="form-control" value="<?php echo $nama_user;?>"> 
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                <textarea class="form-control" name="isi_pesan" id="comments_textarea" rows="7" placeholder="Message"></textarea>
                                <button type="submit" value="SEND" id="submit" class="btn btn-primary pull-right">Post</button>
                            </div>
                        </form>    
                    </div><!-- end contact-form -->
                </div><!-- end general-wrapper -->
              <?php } ?>
                        
            </div><!-- end main -->