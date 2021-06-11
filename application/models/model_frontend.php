<?php
Class model_frontend extends CI_Model
{
	function __constuct()
	{
		parent::__constuct();  // Call the Model constructor 
		loader::database();    // Connect to current database setting.
	}
	function data_about(){
		$this->db->select('*');
		$this->db->from('tb_front_about');
		return $this->db->get();
	}

	function berita_jumlah(){
		return $this->db->get('tb_berita')->num_rows();
	}

	function data_blog($sampai,$dari){
		$this->db->join('tb_kategori', 'tb_kategori.id_kategori = tb_berita.id_kategori');
		$this->db->join('tb_user', 'tb_user.id_no = tb_berita.nia');
		$this->db->join('tb_member', 'tb_member.nia = tb_berita.nia');
				$this->db->order_by('date'); 
	$query = $this->db->get('tb_berita', $sampai, $dari);
	return $query->result(); //r

}
function populer_blog(){
	 $query=$this->db->query("SELECT * from tb_berita ORDER BY `tb_berita`.`hits` DESC");
		return $query;

}

function data_blog_id($id_blog){
	$this->db->join('tb_kategori', 'tb_kategori.id_kategori = tb_berita.id_kategori');
		$this->db->join('tb_user', 'tb_user.id_no = tb_berita.nia');
		$this->db->join('tb_member', 'tb_member.nia = tb_berita.nia');
	    $this->db->where('id_berita',$id_blog);
	    return $this->db->get('tb_berita'); 
}

function data_blog_kategori_list($sampai,$dari,$id_kat){
		$this->db->join('tb_kategori', 'tb_kategori.id_kategori = tb_berita.id_kategori');
		$this->db->join('tb_user', 'tb_user.id_no = tb_berita.nia');
		$this->db->join('tb_member', 'tb_member.nia = tb_berita.nia');
		  $this->db->where('tb_berita.id_kategori',$id_kat);
	$query = $this->db->get('tb_berita', $sampai, $dari);
	return $query->result(); //r

}
function blog_jumlah_kategori($id_kat){
		$this->db->where('id_kategori',$id_kat);
		return $this->db->get('tb_berita')->num_rows();
	}
function hits($id_blog){
	 $query=$this->db->query("UPDATE tb_berita SET hits=hits+1
WHERE id_berita='$id_blog'");
		return $query;
}

function komentar($id_blog){
		$this->db->join('tb_member', 'tb_member.nia = tb_komentar.nia');
	    $this->db->where('id_berita',$id_blog);
	    return $this->db->get('tb_komentar'); 
}


function kategori_blog(){
		$this->db->select('*');
		$this->db->from('tb_kategori');
		$this->db->order_by("kategori"); 
		return $this->db->get();
}


function  total_komentar($id_blog){
    $query = $this->db->query(" SELECT * FROM tb_komentar WHERE id_berita='$id_blog'");
    return $query->num_rows();
}



function data_beranda(){
		$this->db->select('*');
		$this->db->from('tb_beranda'); 
		return $this->db->get();
}

function data_visi(){
	$this->db->select('*');
		$this->db->from('tb_visi'); 
		return $this->db->get();
}
}
