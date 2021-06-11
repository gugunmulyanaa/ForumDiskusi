           <div id="main" class="col-lg-7 col-md-7 col-sm-8 col-xs-12">
               <article class="author-wrapper">
                    <div class="title">
                    <?php foreach ($data_beranda->result() as $b);?>
                        <h3><mark>Selamat datang</mark></h3>                
                    </div>
                    <div class="media">
                        
                        <p><?php echo $b->beranda;?></p>
                    </div>
                    
                </article><!-- end author-wrapper -->
                </div>