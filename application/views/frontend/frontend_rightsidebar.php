   <div id="right-sidebar" class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
              
               
                
    
                <div class="widget">
                    <div class="title">
                        <h3>10 Popular Posts</h3>                
                    </div>
                    
                    <div class="recent_posts">
                        <ul>
                        <?php

                         foreach($populer_blog->result() as $blog) { 
                                  $judulberita= $blog->judul;
 
         
                    $c = array (' ');
            $d = array ('-','/','\\',',','.','#',':',';','\'','"','[',']','{','}',')','(','|','`','~','!','@','%','$','^','&','*','=','?','+');
            $s = strtolower(str_replace($d,"",$blog->judul));
            $link = strtolower(str_replace($c, '-', $s));
                            ?>
                            <li><a href="<?php echo base_url().'frontend/blog_detail/'.$blog->id_berita.'-'.$link.'.html';?>"><?php echo $blog->judul;?></a></li>
                            <?php } ?>
                        </ul>
                    </div>
                </div>
    
                <div class="widget">
                    <div class="title">
                        <h3>Kategori</h3>                
                    </div><!-- end title -->
                    <div class="tagcloud">
                     <?php foreach ($kategori_blog->result() as $b){?>
                        <a href="<?php echo base_url('frontend/blog_kategori/'.$b->id_kategori.'-'.$b->kategori.'');?>" class="" title="12 topics"><?php echo $b->kategori;?></a>
                      <?php } ?>
                    </div>
                </div><!-- end widget -->  
            </div><!-- end right sidebar -->
    	</div><!-- end row -->
    </div><!-- end wrapper -->
