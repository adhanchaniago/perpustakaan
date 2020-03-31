<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Klasifikasi extends CI_Controller {
	function __construct() {
		parent::__construct();
		$this->load->library('session');
		$this->load->helper('form');
		$this->load->helper('url');
		$this->load->model('m_klasifikasi');
	 	if($this->session->userdata('mzgs-perpus-skl-1-2k15-sandi-I-id') == ""){
	  		redirect(base_url('index.php/page'),"refresh");
		}
 	}
	public function index()	{
		$this->klasifikasi();
	}
	public function klasifikasi()	{
		$this->load->library('pagination');
		$config['base_url']        = site_url('klasifikasi/klasifikasi');
		$config['total_rows']      = $this->m_klasifikasi->jumlah_klasifikasi();
		$config['per_page']        = $per_page = $this->db->query('select paging from set_paging')->row()->paging;
		$config['uri_segment']     = 3;
		$config['full_tag_open']   = "<ul class='pagination'>";
		$config['full_tag_close']  ="</ul>";
		$config['num_tag_open']    = '<li>';
		$config['num_tag_close']   = '</li>';
		$config['cur_tag_open']    = "<li class='disabled'><li class='active'><a href='#'>";
		$config['cur_tag_close']   = "<span class='sr-only'></span></a></li>";
		$config['next_tag_open']   = "<li>";
		$config['next_tagl_close'] = "</li>";
		$config['prev_tag_open']   = "<li>";
		$config['prev_tagl_close'] = "</li>";
		$config['first_tag_open']  = "<li>";
		$config['first_tagl_close']= "</li>";
		$config['last_tag_open']   = "<li>";
		$config['last_tagl_close'] = "</li>";
		$this->pagination->initialize($config);
		$data['paging']            = $this->pagination->create_links();
		$page 			   		   = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;
		
	    $data['klasifikasi'] 	   		   = $this->m_klasifikasi->klasifikasi($per_page,$page);
		$dari		 	    	   = ($this->pagination->cur_page - 1) * $per_page + 1 ;
		$kee		        	   = $dari+$per_page-1;
		$totaaal	        	   = $this->pagination->total_rows;
		if(($kee > $totaaal) || ($kee < 1)){
			$kee = $totaaal;
		} 
		$data['dari']     		   = $dari;
		$data['keee']   		   = $kee;
		$data['total'] 		       = $totaaal;
		$data['jumlah_klasifikasi'] = $this->m_klasifikasi->jumlah_klasifikasi();
		
		
		$this->load->view('template_admin/include/head');
		$this->load->view('template_admin/include/header');
		$this->load->view('template_admin/include/sidebar');
		$this->load->view('admin/klasifikasi/klasifikasi',$data);
		$this->load->view('template_admin/include/footer');
		$this->load->view('template_admin/include/tabpanes');
	
	}
		

	public function klasifikasiadd(){
		$this->load->view('template_admin/include/config');
		$this->load->view('template_admin/include/head');
		$this->load->view('template_admin/include/header');
		$this->load->view('template_admin/include/sidebar');
		$this->load->view('admin/klasifikasi/klasifikasiadd');
		$this->load->view('template_admin/include/footer');
		$this->load->view('template_admin/include/tabpanes');
	
	}
	public function klasifikasiadd_proses(){
		$post_klasifikasi=$this->input->post('klasifikasi');

		if($post_klasifikasi=="")
		{
			echo "
				<script>
				alert('isikan nama klasifikasi');
				window.location.href='javascript:history.back(1);'
				</script>";
		}
		
		else 
		{
			$this->load->model('m_klasifikasi');
			$query = $this->m_klasifikasi->ceknamaklasifikasi($this->input->post('klasifikasi'));
			if($query->num_rows > 0)
			{
				echo "
					<script>
					alert('Nama klasifikasi telah digunakan');
					window.location.href='javascript:history.back(1);'
					</script>";
			}
			else
			{
				$this->load->model('m_klasifikasi');
				$query = $this->m_klasifikasi->klasifikasi_add($this->input->post('klasifikasi'));
				
				if($query)
				{
					?>
					<script>
					alert('sukses');
					window.location.href='<?php  echo base_url("index.php/klasifikasi"); ?>'
					</script><?php 
					
				}
				else
				{
					echo "
					<script>
					alert('Gagal');
					window.location.href='javascript:history.back(1);'
					</script>";
				}
				//$query->free_result();
			}
			
		}
		
	}
	
	public function klasifikasi_edit(){
		$this->load->model('m_klasifikasi');
		$query['klasifikasi'] = $this->m_klasifikasi->klasifikasi_edit($this->input->get('id'));
			
		$this->load->view('template_admin/include/config');
		$this->load->view('template_admin/include/head');
		$this->load->view('template_admin/include/header');
		$this->load->view('template_admin/include/sidebar');
		$this->load->view('admin/klasifikasi/klasifikasiedit',$query);
		$this->load->view('template_admin/include/footer');
		$this->load->view('template_admin/include/tabpanes');
	
	}
	public function klasifikasi_edit_proses(){
		$post_nama_klasifikasi=$this->input->post('klasifikasi');
		$post_nama_klasifikasi_awal=$this->input->post('klasifikasi_awal');
		$post_id=$this->input->post('id');

		if($post_nama_klasifikasi=="")
		{
			echo "
				<script>
				alert('isikan nama klasifikasi');
				window.location.href='javascript:history.back(1);'
				</script>";
		}
		
		else 
		{
			
			$this->load->model('m_klasifikasi');
			$query = $this->m_klasifikasi->cekklasifikasi_edit($this->input->post('klasifikasi'),$this->input->post('klasifikasi_awal'));
			if($query->num_rows > 0)
			{
				echo "
					<script>
					alert('nama klasifikasi telah digunakan');
					window.location.href='javascript:history.back(1);'
					</script>";
			}
			else
			{
				$this->load->model('m_klasifikasi');
				$query = $this->m_klasifikasi->klasifikasi_edit_proses();
				
				if($query)
				{
					?>
					<script>
					alert('sukses');
					window.location.href='<?php  echo base_url("index.php/klasifikasi"); ?>'
					</script><?php 
					
				}
				else
				{
					echo "
					<script>
					alert('Gagal');
					window.location.href='javascript:history.back(1);'
					</script>";
				}
				//$query->free_result();
			}
			
		}
		
		
	}
	public function klasifikasi_delete(){
		$this->load->model('m_klasifikasi');
		$query = $this->m_klasifikasi->klasifikasi_delete($this->input->get('id'));
			
		$this->index();
		
	}
	
	public function klasifikasi_refresh(){
		$data["isi_klasifikasi"] = $this->reload_klasifikasi();
		echo json_encode($data);
		
	}
	function reload_klasifikasi(){
		$isi_klasifikasi="";
		$this->load->model('m_klasifikasi');
		$klasifikasi = $this->m_klasifikasi->select_klasifikasi();
		if(count($klasifikasi)>0)
		{
			foreach($klasifikasi as $klasifikasi)
			{
				$isi_klasifikasi .=" <option value=".$klasifikasi->id_klasifikasi.">".$klasifikasi->nama_klasifikasi."</option>";
			}
		}
		return  $isi_klasifikasi;
			
	}
	
}

?>