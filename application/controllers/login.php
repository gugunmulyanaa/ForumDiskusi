<?php
//SI KSR
class Login extends CI_Controller{
	function __construct(){
		parent::__construct();
		$this->load->helper(array('security','url'));
		$this->load->library('session');
	
	}

	

	function cek_login(){
		error_reporting(0);
	$username = $this->input->post('username');
		$password = ($this->input->post('password'));		
		$ex['i'] = $this->model_backend->cek_data($username,$password);
		$r = $ex['i']->row();
		// PERIKSA ADMIN //
		if($r == 1){
			if($r->level == 'admin' and $r->status=='publish'){			//admin
			 $data['username'] = $this->model_backend->tampil_user();
			 $adm = array(
							'username'=>$r->username,
							'password'=>$r->password,
							'avatar'=>$r->avatar,
							'level'=>$r->level,
							'nama'=>$r->nama,
							'id_no'=>$r->id_no);
			 $this->session->set_userdata($adm);	
		

			 redirect('backend');	
			}else if($r->level =='mhs' and  $r->status=='publish'){
				$data['username'] = $this->model_backend->tampil_user();
			 $adm = array(
							'username'=>$r->username,
							'password'=>$r->password,
							'avatar'=>$r->avatar,
							'level'=>$r->level,
							'nama'=>$r->nama,
							'id_no'=>$r->id_no);
			 $this->session->set_userdata($adm);	
		

			 redirect('backend');	
			}else if ($r->status=='notpublish'){
					$kembali=  base_url('frontend/login_member');
		 echo"<script>
eval(\"parent.location='$kembali'\");
alert ('Akun anda belum aktif!');
</script>";
			}
		}else{
				$kembali=  base_url('frontend/login_member');
		 echo"<script>
eval(\"parent.location='$kembali'\");
alert ('Username dan Password salah!');
</script>";
		}
	
	}

}