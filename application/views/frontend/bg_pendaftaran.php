   <div id="main" class="col-lg-7 col-md-7 col-sm-8 col-xs-12">
            
                <article class="general-wrapper">
                    <div class="title">
                        <h3>Pendaftaran Member</h3>              
                    </div>
                </article><!-- end author-wrapper -->

                 
  <article class="general-wrapper">
                    <div class="post-desc">
                                <div name="loginform">
                                   <?php
echo form_open_multipart('upload/upload_member');
?>
                                    
                <div class="form-group">
               
                    <div class="col-sm-8">
                        <input type="text" name="nama_lengkap" class="form-control popovers" placeholder="Nama Lengkap" data-trigger="hover" 
                        data-toggle="popover" data-content="Isi form ini!" data-original-title="Menu" required>
                    </div>
                </div>
                <div class="form-group">
                    
                    <div class="col-sm-8">
                        <input type="text" name="fakultas" class="form-control popovers" placeholder="Fakultas" data-trigger="hover" 
                        data-toggle="popover" data-content="Isi form ini!" data-original-title="Menu"required>
                    </div>
                </div>
       <div class="form-group">
                    
                    <div class="col-sm-8">
                        <input type="text" name="angkatan" class="form-control popovers" placeholder="Angkatan" data-trigger="hover" 
                        data-toggle="popover" data-content="Isi form ini!" data-original-title="Menu"required>
                    </div>
                </div>

                    <div class="form-group">
                 
                    <div class="col-sm-8">
                        <input type="text" name="tempat_lahir" class="form-control popovers" placeholder="Tempat Lahir" data-trigger="hover" 
                        data-toggle="popover" data-content="Isi form ini!" data-original-title="Menu"required>
                    </div>
                </div>
                <div class="form-group">
                           
                            <div class="col-sm-8">
                                <div class="input-group date" id="datepicker-startview">
                                    <span class="input-group-addon"><i class="material-icons">Tanggal Lahir</i></span>
                                    <input type="text" name="tanggal_lahir"class="form-control" placeholder="Tanggal Lahir" >
                                </div>
                            </div>
                        </div>
             <div class="form-group">
                   
                    <div class="col-sm-8">
                       <select name="jenis_kelamin" class="form-control">
<option value="not">---- Jenis Kelamin ----</option>
 <option value="laki">Laki </option>
  <option value="perempuan">Perempuan </option>
            </select>
                    </div>
                </div>

               
                <div class="form-group">
                   
                    <div class="col-sm-8">
                        <textarea class="form-control" name="alamat_lengkap" placeholder="Alamat Lengkap"></textarea>
                    </div>
                </div>
                 <div class="form-group">
                  
                    <div class="col-sm-8">
                        <select name="agama" class="form-control">
<option value="not">---- Agama ----</option>
 <option value="islam">islam </option>
  <option value="kristen">kristen </option>
    <option value="hindu">hindu </option>
      <option value="budha">budha </option>
            </select>
                    </div>
                </div>
                 <div class="form-group">
                    
                    <div class="col-sm-8">
                        <input type="text" name="no_telp" class="form-control popovers" placeholder="No Telp" data-trigger="hover" 
                        data-toggle="popover" data-content="Isi form ini!" data-original-title="Menu" required>
                    </div>
                </div>
                 <div class="form-group">
                  
                    <div class="col-sm-8">
                        <input type="text" name="username_member" class="form-control popovers" placeholder="Username" data-trigger="hover" 
                        data-toggle="popover" data-content="Isi form ini!" data-original-title="Menu"required>
                    </div>
                </div>
                 <div class="form-group">
                    
                    <div class="col-sm-8">
                        <input type="text" name="password_member" class="form-control popovers" placeholder="Password" data-trigger="hover" 
                        data-toggle="popover" data-content="Isi form ini!" data-original-title="Menu">
                    </div>
                </div>

            
        <div class="form-group">
                    
                    <div class="col-sm-5">
                        
                              
                               <input type="file" name="userfile" required></span>
                           
                    </div>
                  
                </div>

                                <div class="form-group">
                                   <div class="col-sm-8">
                                   <br>
                                    <input type="submit" class="btn btn-primary" value="Daftar">                                   </div>
                                    </div>
                
        
        </div>
                                  
                                    
                                </div>
                                
                    </div>
           
        
 
        