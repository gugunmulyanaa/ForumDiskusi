<?php
//ULTRA COMMUNITY
Class model_backend extends CI_Model
{
	function __constuct()
	{
		parent::__constuct();  // Call the Model constructor 
		loader::database();    // Connect to current database setting.
	}
	
	
 function cek_data($username,$password){
		$this->db->where('password',$password);
		$this->db->where('username',$username);
		return $this->db->get('tb_user');
		
		}

		function tampil_user(){
		$this->db->select('*');
		$this->db->from('tb_user');
		return $this->db->get();
	}


function cek_kode2($tgl_skr)
	{
		$query=$this->db->query("SELECT MAX(nia) as nm FROM tb_member WHERE nia like '%$tgl_skr%'");
		return $query;
	}


	//member

	function list_member(){
	$this->db->join('tb_user', 'tb_member.nia = tb_user.id_no');
	$query = $this->db->get('tb_member');
	return $query->result(); //r
}




//BERITA

	function list_berita(){
	$this->db->join('tb_kategori', 'tb_kategori.id_kategori = tb_berita.id_kategori');
	$this->db->join('tb_user', 'tb_user.id_no = tb_berita.nia');
	$query = $this->db->get('tb_berita');
	return $query->result(); //r
}

function list_berita_saya($id_no){
	$this->db->join('tb_kategori', 'tb_kategori.id_kategori = tb_berita.id_kategori');
	$this->db->where('nia',$id_no);
	$query = $this->db->get('tb_berita');
	return $query->result(); //r	
}


//KATEGORI
	function kategori_blog(){
		$this->db->select('*');
		$this->db->from('tb_kategori');
		$this->db->order_by("kategori"); 
		return $this->db->get();
	}

function beranda(){
	$this->db->select('*');
		$this->db->from('tb_beranda');
		return $this->db->get();
}

function visi(){
		$this->db->select('*');
		$this->db->from('tb_visi');
		return $this->db->get();
}

function komentar(){
	$this->db->join('tb_member', 'tb_member.nia = tb_komentar.nia');
		$this->db->join('tb_berita', 'tb_berita.id_berita = tb_komentar.id_berita');
	$query = $this->db->get('tb_komentar');
	return $query->result(); //r
}


function data_akun($id_no){
	$this->db->join('tb_user', 'tb_member.nia = tb_user.id_no');
	$this->db->where('nia',$id_no);
	$query = $this->db->get('tb_member');
	return $query->result(); //r
}
	}
	?>