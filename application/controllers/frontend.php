<?php
//ULTRACOMMUNITY SYSTEM


//------------------------------------------------//

class Frontend extends CI_Controller{

	function __construct(){
		parent::__construct();
	    $this->load->helper(array('url'));
		$this->load->library('form_validation');
		$this->load->library('pagination');
		$this->load->helper('form');
			$this->load->library('session');
	}
	

	function index(){
	
		$jumlah= $this->model_frontend->berita_jumlah();
 $data['populer_blog'] = $this->model_frontend->populer_blog();
 $data['kategori_blog'] = $this->model_frontend->kategori_blog();
$config['full_tag_open'] = "<ul class='pagination'>";
$config['full_tag_close'] ="</ul>";
$config['num_tag_open'] = '<li>';
$config['num_tag_close'] = '</li>';
$config['cur_tag_open'] = "<li class='disabled'><li class='active'><a href='#'>";
$config['cur_tag_close'] = "<span class='sr-only'></span></a></li>";
$config['next_tag_open'] = "<li>";
$config['next_tagl_close'] = "</li>";
$config['prev_tag_open'] = "<li>";
$config['prev_tagl_close'] = "</li>";
$config['first_tag_open'] = "<li>";
$config['first_tagl_close'] = "</li>";
$config['last_tag_open'] = "<li>";
$config['last_tagl_close'] = "</li>";
		$config['base_url'] = base_url().'frontend/index';
		$config['total_rows'] = $jumlah;
		$config['per_page'] = 2; 		//limit nya brpp disini gans
	    $dari = $this->uri->segment('3');
	    $this->pagination->initialize($config); 
	    $data['data_blog'] = $this->model_frontend->data_blog($config['per_page'],$dari);
	   
		$this->load->view('frontend/frontend_headsidebar',$data);
		$this->load->view('frontend/frontend_main',$data);
		$this->load->view('frontend/frontend_rightsidebar',$data);
		$this->load->view('frontend/frontend_footer');

	}
function blog_detail(){
	    $id_blog = $this->uri->segment('3');
	     $data['populer_blog'] = $this->model_frontend->populer_blog();
	     $data['kategori_blog'] = $this->model_frontend->kategori_blog();
	    $data['data_blog_id'] = $this->model_frontend->data_blog_id($id_blog);
	    $data['hits'] = $this->model_frontend->hits($id_blog);
	    $data['komentar'] = $this->model_frontend->komentar($id_blog);
	    $data['total_komentar'] = $this->model_frontend->total_komentar($id_blog);
		$this->load->view('frontend/frontend_headsidebar');
		$this->load->view('frontend/bg_blog_detail',$data,$id_blog);
		$this->load->view('frontend/frontend_rightsidebar',$data);
		$this->load->view('frontend/frontend_footer');

	}

	function login_member(){
		 $data['populer_blog'] = $this->model_frontend->populer_blog();
		 $data['kategori_blog'] = $this->model_frontend->kategori_blog();
		$this->load->view('frontend/frontend_headsidebar');
		$this->load->view('frontend/frontend_login',$data);
		$this->load->view('frontend/frontend_rightsidebar',$data);
		$this->load->view('frontend/frontend_footer');

	}

	function blog_kategori(){
			$id_kat=$this->uri->segment('3');
		$jumlah= $this->model_frontend->blog_jumlah_kategori($id_kat);

$config['full_tag_open'] = "<ul class='pagination'>";
$config['full_tag_close'] ="</ul>";
$config['num_tag_open'] = '<li>';
$config['num_tag_close'] = '</li>';
$config['cur_tag_open'] = "<li class='disabled'><li class='active'><a href='#'>";
$config['cur_tag_close'] = "<span class='sr-only'></span></a></li>";
$config['next_tag_open'] = "<li>";
$config['next_tagl_close'] = "</li>";
$config['prev_tag_open'] = "<li>";
$config['prev_tagl_close'] = "</li>";
$config['first_tag_open'] = "<li>";
$config['first_tagl_close'] = "</li>";
$config['last_tag_open'] = "<li>";
$config['last_tagl_close'] = "</li>";
		$config['base_url'] = base_url().'frontend/blog_kategori/'.$id_kat.'';
		$config['total_rows'] = $jumlah;
		$config['per_page'] = 2; 		//limit nya brpp disini gans
	    $dari = $this->uri->segment('4');
	    $this->pagination->initialize($config); 
	    $data['data_blog_kategori_list'] = $this->model_frontend->data_blog_kategori_list($config['per_page'],$dari,$id_kat);
	    $data['populer_blog'] = $this->model_frontend->populer_blog();
 $data['kategori_blog'] = $this->model_frontend->kategori_blog();
		$this->load->view('frontend/frontend_headsidebar',$data);
		$this->load->view('frontend/frontend_main_kategori',$data);
		$this->load->view('frontend/frontend_rightsidebar',$data);
		$this->load->view('frontend/frontend_footer');

	}

function beranda(){	
		 $data['data_beranda'] =  $this->model_frontend->data_beranda();
		 $data['populer_blog'] = $this->model_frontend->populer_blog();
		 $data['kategori_blog'] = $this->model_frontend->kategori_blog();
		$this->load->view('frontend/frontend_headsidebar');
		$this->load->view('frontend/bg_beranda',$data);
		$this->load->view('frontend/frontend_rightsidebar',$data);
		$this->load->view('frontend/frontend_footer');


}

function pendaftaran(){
	 $data['data_beranda'] =  $this->model_frontend->data_beranda();
		 $data['populer_blog'] = $this->model_frontend->populer_blog();
		 $data['kategori_blog'] = $this->model_frontend->kategori_blog();
		$this->load->view('frontend/frontend_headsidebar');
		$this->load->view('frontend/bg_pendaftaran',$data);
		$this->load->view('frontend/frontend_rightsidebar',$data);
		$this->load->view('frontend/frontend_footer');

}

function visi_misi(){
		 $data['data_visi'] =  $this->model_frontend->data_visi();
		 $data['populer_blog'] = $this->model_frontend->populer_blog();
		 $data['kategori_blog'] = $this->model_frontend->kategori_blog();
		$this->load->view('frontend/frontend_headsidebar');
		$this->load->view('frontend/bg_visi',$data);
		$this->load->view('frontend/frontend_rightsidebar',$data);
		$this->load->view('frontend/frontend_footer');
}
}
?>