   <div id="main" class="col-lg-7 col-md-7 col-sm-8 col-xs-12">
            
                <article class="general-wrapper">
                    <div class="title">
                        <h3>Author Login</h3>              
                    </div>
                </article><!-- end author-wrapper -->

                 <?php
  $nama_user= $this->session->userdata('nama');
                  if($this->session->userdata('username') == NULL ) { ?>
  <article class="general-wrapper">
                    <div class="post-desc">
                                <div name="loginform">
                                   <?php
echo form_open('login/cek_login');
?>
                                    <div class="form-group">
                                        <div class="input-group">
                                            <span class="input-group-addon"><i class="fa fa-user"></i></span>
                                            <input type="text" class="form-control" name="username" placeholder="Username">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="input-group">
                                            <span class="input-group-addon"><i class="fa fa-lock"></i></span>
                                            <input type="password" class="form-control" name="password"placeholder="Password">
                                        </div>
                                    </div>
                                  
                                    <div class="form-group">
                                    <button type="submit" class="btn btn-primary">Sign in</button>
                                    </div>
                                </div>
                    </div>
                </article><!-- end author-wrapper -->
                
            </div><!-- end main -->
              <?php }else{ ?>
                <article class="general-wrapper">
                    <div class="post-desc">
                                <div name="loginform">
                                 HI! <b><?php echo $nama_user;?></b> kamu sudah login 
                                 <a href="<?php echo base_url('backend');?>"> Klik disini untuk masuk ke Dashboard</a>
                                </div>
                    </div>
                </article><!-- end author-wrapper -->
                
            </div><!-- end main -->
            <?php } ?>