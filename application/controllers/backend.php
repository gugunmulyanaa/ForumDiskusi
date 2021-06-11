<?php
//ULTRACOMMUNITY SYSTEM


//------------------------------------------------//

class Backend extends CI_Controller{
function __construct(){
		parent::__construct();
		$this->load->helper(array('url'));
		$this->load->library('form_validation');
		$this->load->library('pagination');
		$this->load->library('session');
$this->load->helper('url');
$this->load->helper('form');
		$this->cek_session();
		
        
     
 

	}
		function cek_session(){
		if($this->session->userdata('username') == NULL )
		{
			redirect('frontend/login_member');
		}		
	}
	

	function index(){
	
		$this->load->view('backend/bg_header');
		$this->load->view('backend/bg_sidebar');
		$this->load->view('backend/bg_main');
		$this->load->view('backend/bg_footer');

	}


	function input_member(){
	
		//admin

		$this->load->view('backend/bg_header');
		$this->load->view('backend/bg_sidebar');
		$this->load->view('backend/bg_input_member');
		$this->load->view('backend/bg_footer');
}


function lihat_member(){
	
	
//admin
	$id=$this->uri->segment(3);

		$data['list_member'] = $this->model_backend->list_member();//where id_blog
		$this->load->view('backend/bg_header');
		$this->load->view('backend/bg_sidebar');
		$this->load->view('backend/bg_lihat_member',$data);
		$this->load->view('backend/bg_footer');
}

function delete_member(){
	    $nia=$this->uri->segment(3);
        $this->db->where('nia',$nia);
        $query=$this->db->get('tb_member');
        $row = $query->row();
        unlink("./GUI/avatar/$row->avatar");
        $this->db->delete('tb_member', array('nia' => $nia));
        $this->db->delete('tb_user', array('id_no' => $nia));
        redirect('backend/lihat_member');
}	


function delete_komentar(){
	  $idk=$this->uri->segment(3);
        $this->db->where('id_komentar',$idk);
        $query=$this->db->get('tb_komentar');
           $this->db->delete('tb_komentar', array('id_komentar' => $idk));
 redirect('backend/kelola_komentar');
}
//BERITA
function input_berita(){
	$data['kategori_blog']=$this->model_backend->kategori_blog();
		$this->load->view('backend/bg_header');
		$this->load->view('backend/bg_sidebar');
		$this->load->view('backend/bg_input_berita',$data);
		$this->load->view('backend/bg_footer');
}


function delete_berita(){
	    $id_berita=$this->uri->segment(3);
        $this->db->where('id_berita',$id_berita);
        $query=$this->db->get('tb_berita');
        $row = $query->row();
        unlink("./GUI/avatar/$row->avatar");
        $this->db->delete('tb_berita', array('id_berita' => $id_berita));
        redirect('backend/lihat_berita');
}	


function lihat_berita(){
		$id_no= $this->session->userdata('id_no');
		$level=$this->session->userdata('level');
		if($level=='mhs'){
			redirect('backend/lihat_berita_saya/'.$id_no.'');
		}
	$data['list_berita']=$this->model_backend->list_berita();
$data['kategori_blog']=$this->model_backend->kategori_blog();
		$this->load->view('backend/bg_header');
		$this->load->view('backend/bg_sidebar');
		$this->load->view('backend/bg_lihat_berita',$data);
		$this->load->view('backend/bg_footer');
}

function lihat_berita_saya(){
	$id_no= $this->session->userdata('id_no');
	$data['list_berita_saya']=$this->model_backend->list_berita_saya($id_no);
$data['kategori_blog']=$this->model_backend->kategori_blog();
		$this->load->view('backend/bg_header');
		$this->load->view('backend/bg_sidebar');
		$this->load->view('backend/bg_lihat_berita_saya',$data);
		$this->load->view('backend/bg_footer');
}



function kelola_kategori(){
	$level=$this->session->userdata('level');
		if($level=='mhs'){
			redirect('backend');
		}
$data['kategori_blog']=$this->model_backend->kategori_blog();
		$this->load->view('backend/bg_header');
		$this->load->view('backend/bg_sidebar');
		$this->load->view('backend/bg_kelola_kategori',$data);
		$this->load->view('backend/bg_footer');
}

function kelola_komentar(){
	$level=$this->session->userdata('level');
		if($level=='mhs'){
			redirect('backend');
		}
$data['komentar']=$this->model_backend->komentar();
		$this->load->view('backend/bg_header');
		$this->load->view('backend/bg_sidebar');
		$this->load->view('backend/bg_kelola_komentar',$data);
		$this->load->view('backend/bg_footer');
}

function kelola_beranda(){
	$level=$this->session->userdata('level');
		if($level=='mhs'){
			redirect('backend');
		}
$data['beranda']=$this->model_backend->beranda();
		$this->load->view('backend/bg_header');
		$this->load->view('backend/bg_sidebar');
		$this->load->view('backend/bg_kelola_beranda',$data);
		$this->load->view('backend/bg_footer');
}

function kelola_visimisi(){
		$level=$this->session->userdata('level');
		if($level=='mhs'){
			redirect('backend');
		}
	$data['visi']=$this->model_backend->visi();
		$this->load->view('backend/bg_header');
		$this->load->view('backend/bg_sidebar');
		$this->load->view('backend/bg_kelola_visi',$data);
		$this->load->view('backend/bg_footer');
}

function kelola_akun(){
$id_no= $this->session->userdata('id_no');
	$data['data_akun'] = $this->model_backend->data_akun($id_no);
		$this->load->view('backend/bg_header');
		$this->load->view('backend/bg_sidebar');
		$this->load->view('backend/bg_kelola_akun',$data);
		$this->load->view('backend/bg_footer');
}


	//LOGOUT
	function logout(){
		$this->session->sess_destroy();
		redirect('frontend');
	}
}
?>