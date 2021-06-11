           <div id="main" class="col-lg-7 col-md-7 col-sm-8 col-xs-12">
               <article class="author-wrapper">
                    <div class="title">
                    <?php foreach ($data_visi->result() as $b);?>
                        <h3>Visi dan Misi</mark></h3>                
                    </div>
                    <div class="media">
                        
                        <p><?php echo $b->visi_misi;?></p>
                    </div>
                    
                </article><!-- end author-wrapper -->
                </div>