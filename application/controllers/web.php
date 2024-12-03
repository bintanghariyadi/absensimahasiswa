<?php
error_reporting(E_ALL & ~E_DEPRECATED & ~E_STRICT & ~E_NOTICE);
defined('BASEPATH') OR exit('No direct script access allowed');
 
class Web extends CI_Controller {
	
	function __construct(){
		parent::__construct();
		$this->load->helper('url');
		$this->load->model('absensi');
		$this->load->model('mahasiswa');
		$this->load->model('jadwal');
	}
 
	public function index(){		
		$data['mahasiswa'] = $this->mahasiswa->getdatamahasiswa();
		$this->load->view('v_header',$data);
		$this->load->view('v_index',$data);
		$this->load->view('v_footer',$data);
	}
	
		
	

	public function datamahasiswa(){	
		
		$data['mahasiswa'] = $this->mahasiswa->getdatamahasiswa();


		
		$this->load->view('v_header',$data);
		$this->load->view('v_datamahasiswa',$data);
		$this->load->view('v_footer',$data);
	
	}
	

	
	public function tambahmahasiswa()
	{
		$this->load->view('halamantambahmahasiswa');
	}
	


	public function editmahasiswa($nim)
	{
		$querymahasiswadetail = $this->mahasiswa->getdatamahasiswadetail($nim);
		$data = array('querymhsdetail' => $querymahasiswadetail);
		$this->load->view('halamaneditmahasiswa', $data);
	}



	public function simpanmahasiswa()
	{
		$nim = $this->input->post('nim');
		$namamahasiswa = $this->input->post('namamahasiswa');
		$kelas = $this->input->post('kelas');
		$jurusan = $this->input->post('jurusan');
		$gambarmahasiswa = $_FILES['gambarmahasiswa']['name'];
		$tmp = $_FILES['gambarmahasiswa']['tmp_name'];
		$arrayinsert = array(
			'nim' => $nim,
			'namamahasiswa' => $namamahasiswa,
			'kelas' => $kelas,
			'jurusan' => $jurusan,
			'gambarmahasiswa' => $gambarmahasiswa
);
$this->mahasiswa->insertdatamahasiswa($arrayinsert);
$location = FCPATH . 'assets/images/upload/' . $gambarmahasiswa;
move_uploaded_file($tmp, $location);
		redirect('web/datamahasiswa');
			}



			public function fungsieditmahasiswa()
			{
				$nim = $this->input->post('nim');
				$namamahasiswa = $this->input->post('namamahasiswa');
				$kelas = $this->input->post('kelas');
				$jurusan = $this->input->post('jurusan');
				$gambarmahasiswa = $_FILES['gambarmahasiswa']['name'];
				$tmp = $_FILES['gambarmahasiswa']['tmp_name'];
				$arrayupdate = array(
					'namamahasiswa' => $namamahasiswa,
					'kelas' => $kelas,
					'jurusan' => $jurusan,
					'gambarmahasiswa' => $gambarmahasiswa
		);
		$this->mahasiswa->updatedatamahasiswa($nim, $arrayupdate);
		$location = FCPATH . 'assets/images/upload/' . $gambarmahasiswa;
		move_uploaded_file($tmp, $location);
				redirect('web/datamahasiswa');
			}



			public function fungsideletemahasiswa($nim)
			{
				$this->mahasiswa->deletedatamahasiswa($nim);
				redirect('web/datamahasiswa');
			}





	public function jadwal(){		

		$data['jadwal'] = $this->jadwal->getdatajadwal();

		$this->load->view('v_header',$data);
		$this->load->view('v_jadwal',$data);
		$this->load->view('v_footer',$data);
	}


	public function tambahjadwal()
	{
		$this->load->view('halamantambahjadwal');
	}

	public function editjadwal($idjadwal)
	{
		$queryjadwaldetail = $this->jadwal->getdatajadwaldetail($idjadwal);
		$data = array('queryjdwdetail' => $queryjadwaldetail);
		$this->load->view('halamaneditjadwal', $data);
	}

	public function simpanjadwal()
	{
		$idjadwal = $this->input->post('idjadwal');
		$hari = $this->input->post('hari');
		$kelas = $this->input->post('kelas');
		$matakuliah = $this->input->post('matakuliah');
		$namadosen = $this->input->post('namadosen');
		$jammasuk = $this->input->post('jammasuk');
		$jamkeluar = $this->input->post('jamkeluar');
		$arrayinsert = array(
			'idjadwal' => $idjadwal,
			'hari' => $hari,
			'kelas' => $kelas,
			'matakuliah' => $matakuliah,
			'namadosen' => $namadosen,
			'jammasuk' => $jammasuk,
			'jamkeluar' => $jamkeluar


		
);
$this->jadwal->insertdatajadwal($arrayinsert);
		redirect('web/jadwal');
			}


			public function fungsieditjadwal()
			{
				$idjadwal = $this->input->post('idjadwal');
				$hari = $this->input->post('hari');
				$kelas = $this->input->post('kelas');
				$matakuliah = $this->input->post('matakuliah');
				$namadosen = $this->input->post('namadosen');
				$jammasuk = $this->input->post('jammasuk');
				$jamkeluar = $this->input->post('jamkeluar');
				$arrayupdate = array(
					'hari' => $hari,
					'kelas' => $kelas,
					'matakuliah' => $matakuliah,
					'namadosen' => $namadosen,
					'jammasuk' => $jammasuk,
					'jamkeluar' => $jamkeluar
		
		
				
		);
		$this->jadwal->updatedatajadwal($idjadwal, $arrayupdate);
				redirect('web/jadwal');
					}

					public function fungsideletejadwal($idjadwal)
					{
						$this->jadwal->deletedatajadwal($idjadwal);
						redirect('web/jadwal');
					}




	public function absensi(){		
		$data['absensi'] = $this->absensi->getdataabsensi();
		$this->load->view('v_header',$data);
		$this->load->view('v_absensi',$data);
		$this->load->view('v_footer',$data);
	}

public function getnimdrop() {
	$this->load->model('mahasiswa');
	$data = $this->mahasiswa->getallnim();
	echo json_encode($data);
}




	public function get_mahasiswa()
	{
		$nim = $this->input->get('nim');
		$this->load->model('mahasiswa');
		$this->load->model('jadwal');
		$mahasiswa = $this->mahasiswa->getbynim($nim);

		if ($mahasiswa) {
			$jadwal = $this->jadwal->getbykelas($mahasiswa['kelas']);

		
			$response = array_merge($mahasiswa, $jadwal);

			echo json_encode($response);
		}else{
			echo json_encode(['error' => 'Mahasiswa tidak ditemukan']);
	}
}
		
	




	public function tambahabsensi()
	{
	
		$this->load->view('halamantambahabsensi');
	}

	public function editabsensi($idabsensi)
	{
		$queryabsensidetail = $this->absensi->getdataabsensidetail($idabsensi);
		$data = array('queryabsdetail' => $queryabsensidetail);
		$this->load->view('halamaneditabsensi', $data);
	}

	public function simpanabsensi()
	{
		$idabsensi = $this->input->post('idabsensi');
		$idjadwal = $this->input->post('idjadwal');
		$nim = $this->input->post('nim');
		$namamahasiswa = $this->input->post('namamahasiswa');
		$hari = $this->input->post('hari');
		$kelas = $this->input->post('kelas');
		$jammasuk = $this->input->post('jammasuk');
		$jamkeluar = $this->input->post('jamkeluar');
		$matakuliah = $this->input->post('matakuliah');
		$namadosen = $this->input->post('namadosen');
		$status = $this->input->post('status');

if ($status === 'Hadir') {
	$jammasuk = $this->input->post('jammasuk');
		$jamkeluar = $this->input->post('jamkeluar');
}else{
	$jammasuk = "-";
		$jamkeluar = "-";
}

		$arrayinsert = array(
			'idabsensi' => $idabsensi,
			'idjadwal' => $idjadwal,
			'nim' => $nim,
			'namamahasiswa' => $namamahasiswa,
			'hari' => $hari,
			'kelas' => $kelas,
			'status' => $status,
			'matakuliah' => $matakuliah,
			'namadosen' => $namadosen,
			'jammasuk' => $jammasuk,
			'jamkeluar' => $jamkeluar
			
			


		
);
$this->absensi->insertdataabsensi($arrayinsert);
		redirect('web/absensi');
			}

					public function fungsideleteabsensi($idabsensi)
					{
						$this->absensi->deletedataabsensi($idabsensi);
						redirect('web/absensi');
					}

				}