<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
      class Upload extends CI_Controller {
            public function __construct() {
            parent::__construct();
  $this->load->helper(array('url','html','form'));
   }

//MODULE
function upload_member(){
     $config=array(
    'upload_path' => './GUI/Avatar/', //lokasi gambar akan di simpan
    'allowed_types' => 'jpg|jpeg|png|gif', //ekstensi gambar yang boleh di uanggah
    'max_size' => '2000', //batas maksimal ukuran gambar
    'file_name' => url_title($this->input->post('userfile')) //nama gambar
    );
               
 
    $this->load->library('upload', $config);
    if ( ! $this->upload->do_upload())
    {
    $error = $this->upload->display_errors();
    echo $error;
    } else {
    $file = $this->upload->file_name;
    $nama_lengkap = $this->input->post('nama_lengkap');
    $fakultas = $this->input->post('fakultas');
    $tempat_lahir = $this->input->post('tempat_lahir');
    $tanggal_lahir=$this->input->post('tanggal_lahir');
    $jenis_kelamin=$this->input->post('jenis_kelamin');
    $username_member=$this->input->post('username_member');
    $password_member=$this->input->post('password_member');
    $alamat_lengkap=$this->input->post('alamat_lengkap');
    $agama=$this->input->post('agama');
    $angkatan=$this->input->post('angkatan');
    $no_telp=$this->input->post('no_telp');
    $gambar_lama=$this->input->post('gambar_lama');
    $tgl = date('Y-m-d');

   $tgl_skr = date('Yd');
            $cek_kode = $this->model_backend->cek_kode2($tgl_skr);
            $kode_trans = "";
            foreach($cek_kode->result() as $ck)
            {
                if($ck->nm==NULL)
                {
                    $kode_transe = $tgl_skr.'001';
                }
                else
                {
                    $kd_lama = $ck->nm;
                    $kode_transe = $kd_lama+1;
                }
            }
  //buat user user
    $this->db->insert('tb_user',array(
    'id_no'=>$kode_transe,
    'username'=>$username_member,
    'password'=>$password_member,
    'status'=>'notpublish',
    'level'=>'mhs',
    'nama'=>$nama_lengkap,
    'avatar'=>$file));
    //insert mahasiswa
     $this->db->insert('tb_member',array(
    'nia'=>$kode_transe,
    'nama'=>$nama_lengkap,
    'fakultas'=>$fakultas,
    'tempat_lahir'=>$tempat_lahir,
    'tanggal_lahir'=>$tanggal_lahir,
    'jenis_kelamin'=>$jenis_kelamin,
    'agama'=>$agama,
    'telepon'=>$no_telp,
    'angkatan'=>$angkatan,
    'username'=>$username_member,
    'password'=>$password_member,
    'avatar'=>$file));
     $kembali=  base_url('backend/lihat_member');
     echo"<script>
eval(\"parent.location='$kembali'\");
alert ('Daftar berhasil menunggu konfirmasi dari admin!');
</script>";
   }
}



function upload_komentar(){
     $id_blog=$this->uri->segment(3);
     $nama_komentar = $this->input->post('nama_komentar');
    $isi_pesan = $this->input->post('isi_pesan');
    $id_no=$this->input->post('id_no');
    $this->db->insert('tb_komentar',array(
    'nama_lengkap'=>$nama_komentar,
    'id_berita'=>$id_blog,
    'nia'=>$id_no,
    'isi_pesan'=>$isi_pesan));
       redirect('frontend/blog_detail/'.$id_blog.'');
}

function update_member(){
      $nia=$this->uri->segment(3);
        $config=array(
    'upload_path' => './GUI/avatar/', //lokasi gambar akan di simpan
    'allowed_types' => 'jpg|jpeg|png|gif', //ekstensi gambar yang boleh di uanggah
    'max_size' => '2000', //batas maksimal ukuran gambar
    'file_name' => url_title($this->input->post('userfile')) //nama gambar
    );
               
 
    $this->load->library('upload', $config);
    if ( ! $this->upload->do_upload())
    {
    $file = $this->upload->file_name;
    $nama_lengkap = $this->input->post('nama_lengkap');
    $fakultas = $this->input->post('fakultas');
    $tempat_lahir = $this->input->post('tempat_lahir');
    $tanggal_lahir=$this->input->post('tanggal_lahir');
    $jenis_kelamin=$this->input->post('jenis_kelamin');
    $username_member=$this->input->post('username_member');
    $password_member=$this->input->post('password_member');
    $alamat_lengkap=$this->input->post('alamat_lengkap');
    $agama=$this->input->post('agama');
    $angkatan=$this->input->post('angkatan');
    $no_telp=$this->input->post('no_telp');
    $gambar_lama=$this->input->post('gambar_lama');

 
     //tb_member
    $this->db->where('nia',$nia);
    $this->db->update('tb_member',array(
    'nama'=>$nama_lengkap,
    'fakultas'=>$fakultas,
    'tempat_lahir'=>$tempat_lahir,
    'tanggal_lahir'=>$tanggal_lahir,
    'jenis_kelamin'=>$jenis_kelamin,
    'agama'=>$agama,
    'angkatan'=>$angkatan,
    'telepon'=>$no_telp,
    'username'=>$username_member,
    'password'=>$password_member));


    //tb_user
    $this->db->where('id_no',$nia);
    $this->db->update('tb_user',array(
    'username'=>$username_member,
    'nama'=>$nama_lengkap,
    'password'=>$password_member));

     redirect('backend/lihat_member');

    } else {
    $this->load->library('upload', $config);
    $file = $this->upload->file_name;
   $nama_lengkap = $this->input->post('nama_lengkap');
    $fakultas = $this->input->post('fakultas');
    $tempat_lahir = $this->input->post('tempat_lahir');
    $tanggal_lahir=$this->input->post('tanggal_lahir');
    $jenis_kelamin=$this->input->post('jenis_kelamin');
    $username_member=$this->input->post('username_member');
    $password_member=$this->input->post('password_member');
    $alamat_lengkap=$this->input->post('alamat_lengkap');
    $agama=$this->input->post('agama');
    $no_telp=$this->input->post('no_telp');
    $angkatan=$this->input->post('angkatan');
    $gambar_lama=$this->input->post('gambar_lama');
    $tgl = date('Y-m-d');
     unlink("./GUI/avatar/$gambar_lama");

 
    $this->db->where('nia',$nia);
    $this->db->update('tb_member',array(
    'nama'=>$nama_lengkap,
    'fakultas'=>$fakultas,
    'tempat_lahir'=>$tempat_lahir,
    'tanggal_lahir'=>$tanggal_lahir,
    'jenis_kelamin'=>$jenis_kelamin,
    'agama'=>$agama,
    'angkatan'=>$angkatan,
    'telepon'=>$no_telp,
    'username'=>$username_member,
    'password'=>$password_member,
    'avatar'=>$file));

       //tb_user
    $this->db->where('id_no',$nia);
    $this->db->update('tb_user',array(
    'username'=>$username,
    'password'=>$password,
    'avatar'=>$file));
    redirect('backend/lihat_member');
  }

}


function upload_berita(){

        $config=array(
    'upload_path' => './GUI/avatar/', //lokasi gambar akan di simpan
    'allowed_types' => 'jpg|jpeg|png|gif', //ekstensi gambar yang boleh di uanggah
    'max_size' => '2000', //batas maksimal ukuran gambar
    'file_name' => url_title($this->input->post('userfile')) //nama gambar
    );
               
 
    $this->load->library('upload', $config);
    if ( ! $this->upload->do_upload())
    {
    $file = $this->upload->file_name;
    $judul = $this->input->post('judul');
    $pengirim = $this->input->post('pengirim');
    $kategori = $this->input->post('kategori');
    $isi=$this->input->post('isi');
    $id_nia=$this->input->post('id_nia');
    $gambar_lama=$this->input->post('gambar_lama');
 $tgl = date('Y-m-d');
  $this->db->insert('tb_berita',array(
    'judul'=>$judul,
    'pengirim'=>$pengirim,
    'id_kategori'=>$kategori,
    'isi'=>$isi,
    'nia'=>$id_nia,
     'no_gambar'=>'yes',
     'status'=>'berita',
    'date'=>$tgl));
    redirect('backend/lihat_berita');


    } else {
    $this->load->library('upload', $config);
 $file = $this->upload->file_name;
    $judul = $this->input->post('judul');
    $pengirim = $this->input->post('pengirim');
    $kategori = $this->input->post('kategori');
    $isi=$this->input->post('isi');
    $id_nia=$this->input->post('id_nia');
    $gambar_lama=$this->input->post('gambar_lama');
 $tgl = date('Y-m-d');
    

 
     $this->db->insert('tb_berita',array(
    'judul'=>$judul,
    'pengirim'=>$pengirim,
    'id_kategori'=>$kategori,
    'isi'=>$isi,
    'date'=>$tgl,
    'nia'=>$id_nia,
    'no_gambar'=>'no',
    'status'=>'berita',
    'gambar'=>$file));
    redirect('backend/lihat_berita');
  }

}


function update_berita(){
      $id_berita=$this->uri->segment(3);
         $config=array(
    'upload_path' => './GUI/avatar/', //lokasi gambar akan di simpan
    'allowed_types' => 'jpg|jpeg|png|gif', //ekstensi gambar yang boleh di uanggah
    'max_size' => '2000', //batas maksimal ukuran gambar
    'file_name' => url_title($this->input->post('userfile')) //nama gambar
    );
               
 
    $this->load->library('upload', $config);
    if ( ! $this->upload->do_upload())
    {
    $file = $this->upload->file_name;
    $judul = $this->input->post('judul');
    $pengirim = $this->input->post('pengirim');
    $kategori = $this->input->post('kategori');
    $isi=$this->input->post('isi');
    $gambar_lama=$this->input->post('gambar_lama');
     $tgl = date('Y-m-d');
 
     //tb_member
    $this->db->where('id_berita',$id_berita);
    $this->db->update('tb_berita',array(
     'judul'=>$judul,
    'pengirim'=>$pengirim,
    'id_kategori'=>$kategori,
     'date'=>$tgl,
    'isi'=>$isi,
    'no_gambar'=>'yes',
    'date'=>$tgl));

     redirect('backend/lihat_berita');

    } else {
    $this->load->library('upload', $config);
      $file = $this->upload->file_name;
    $judul = $this->input->post('judul');
    $pengirim = $this->input->post('pengirim');
    $kategori = $this->input->post('kategori');
    $isi=$this->input->post('isi');
    $gambar_lama=$this->input->post('gambar_lama');
    $tgl = date('Y-m-d');
     unlink("./GUI/avatar/$gambar_lama");

 
    $this->db->where('id_berita',$id_berita);
    $this->db->update('tb_berita',array(
     'judul'=>$judul,
    'pengirim'=>$pengirim,
    'id_kategori'=>$kategori,
    'isi'=>$isi,
    'date'=>$tgl,
    'no_gambar'=>'no',
    'gambar'=>$file));

    redirect('backend/lihat_berita');
  }

}



function upload_kategori(){
$nama_kategori=$this->input->post('nama_kategori');
 $tgl = date('Y-m-d');
  $this->db->insert('tb_kategori',array(
    'kategori'=>$nama_kategori));
    redirect('backend/kelola_kategori');
}

function update_kategori(){

    $id_kategori=$this->uri->segment(3);
    $nama_kategori=$this->input->post('nama_kategori');
    $this->db->where('id_kategori',$id_kategori);
    $this->db->update('tb_kategori',array(
     'kategori'=>$nama_kategori));
   redirect('backend/kelola_kategori');
 
}

function update_beranda(){
     $id_beranda=$this->uri->segment(3);
$isi_beranda=$this->input->post('isi_beranda');
 $this->db->where('id_beranda',$id_beranda);
    $this->db->update('tb_beranda',array(
     'beranda'=>$isi_beranda));
   redirect('backend/kelola_beranda');
}


function update_visi(){
     $id_visi=$this->uri->segment(3);
    $isi_visi=$this->input->post('isi_visi');
    $this->db->where('id_visi',$id_visi);
    $this->db->update('tb_visi',array(
     'visi_misi'=>$isi_visi));
   redirect('backend/kelola_visimisi');

}

function member_aktif(){
    $id_nia=$this->uri->segment(3);
    $this->db->where('id_no',$id_nia);
    $this->db->update('tb_user',array(
     'status'=>'publish'));
   redirect('backend/lihat_member');

}

function member_nonaktif(){
    $id_nia=$this->uri->segment(3);
    $this->db->where('id_no',$id_nia);
    $this->db->update('tb_user',array(
     'status'=>'notpublish'));
   redirect('backend/lihat_member');

}

}
