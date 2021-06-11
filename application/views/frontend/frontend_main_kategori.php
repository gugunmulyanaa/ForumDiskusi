 <div id="main" class="col-lg-7 col-md-7 col-sm-8 col-xs-12">
                
                            <?php foreach ($data_blog_kategori_list as $tampil) { 
                     $judulberita= $tampil->judul;
 
         
                    $c = array (' ');
            $d = array ('-','/','\\',',','.','#',':',';','\'','"','[',']','{','}',')','(','|','`','~','!','@','%','$','^','&','*','=','?','+');
            $s = strtolower(str_replace($d,"",$tampil->judul));
            $link = strtolower(str_replace($c, '-', $s));
            $isi=substr($tampil->isi,0,20);
?>
                <article class="post-wrapper wow fadeInUp">
                    <div class="title">
                        <h3><span class="post_type fa fa-pencil-square-o"></span>      <a href="<?php echo base_url().'frontend/blog_detail/'.$tampil->id_berita.'-'.$link.'.html';?> "title="<?php echo $tampil->id_berita.'-'.$link.'.html';?>"><?php echo $tampil->judul;?></a></h3>
                        <div class="byline">
                            <span><i class="fa fa-user"></i> <a href="#" title="">
                            <?php if ($tampil->level=='admin'){ ?>
                            Admin
                                <?php }else if ($tampil->level=='mhs'){?>
                                <?php echo $tampil->nama;
                            }
                                ?></a></span>
                            <span><i class="fa fa-folder-open-o"></i> <a href="#" title=""><?php echo $tampil->kategori;?></a></span>
                            <span><i class="fa fa-calendar-o"></i> <a href="#" title=""><?php echo $tampil->date;?></a></span>
                            <span><i class="fa fa-eye"></i> <a href="#" title=""><?php echo $tampil->hits;?></a></span>
                        </div>
                    </div>
                
                         <?php if ($tampil->no_gambar=='no'){?>
                             <div class="media post-image">
                         <div class="entry">
                          <a href="#"><img src="<?php echo base_url('GUI/Avatar/'.$tampil->gambar.'');?>" alt=""></a>
                           <div class="magnifier">
                                <div class="buttons">
                                  <a ss="st" rel="bookmark"  href="<?php echo base_url().'frontend/blog_detail/'.$tampil->id_berita.'-'.$link.'.html';?> ">Read more<i class="fa fa-search"></i></a>
                                
                                </div><!-- end buttons -->
                            </div><!-- end magnifier -->
                                </div><!-- end item --> 
                                  </div>
                         <?php }else if ($tampil->no_gambar=='yes') { ?>
                            <?php } ?>
                           
                    
                  
                    <div class="desc">
                        <p> <?php echo $isi;?>..</p>
                        
            
                    </div>
                    <div class="post-footer">
                        <div class="pull-left">
                            <a href="<?php echo base_url().'frontend/blog_detail/'.$tampil->id_berita.'-'.$link.'.html';?> "class="readmore">Read more [..]</a>
                        </div>
                        <div class="pull-right">
                            <div class="social">
                                <span><a data-toggle="tooltip" data-placement="bottom" title="Share on Facebook" href="#"><i class="fa fa-facebook"></i></a></span>
                                <span><a data-toggle="tooltip" data-placement="bottom" title="Share on Twitter" href="#"><i class="fa fa-twitter"></i></a></span>
                                <span><a data-toggle="tooltip" data-placement="bottom" title="Share on Pinterest" href="#"><i class="fa fa-pinterest"></i></a></span>
                                <span><a data-toggle="tooltip" data-placement="bottom" title="Share on Google Plus" href="#"><i class="fa fa-google-plus"></i></a></span>
                            </div>
                        </div>
                    </div>
                </article>
    <?php } ?>
        
              
                 <?php echo $this->pagination->create_links();?>  
              
            </div><!-- end main -->