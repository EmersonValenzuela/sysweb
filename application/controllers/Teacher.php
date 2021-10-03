<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Teacher extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */

	 public function __construct()
		{
			parent::__construct();
			// if($this->session->userdata('rol')){
			//   redirect(base_url());
			// }
		}

	public function index()
	{
		$idUser	= $this->session->userdata('idUser');												
		$user = $this->consultas->getUsers($idUser);
		$dataSidebar['nUser'] = $user;
		$idteacher = $_GET['id'];
		$data['teacher']=$this->consultas->getTeachers($idteacher);
		$data['lessons']=$this->consultas->getLessons($idteacher);
		$data['cursos']=$this->consultas->getCursos($idteacher);
		$data['files']=$this->consultas->getFiles($idteacher);
		$data['names']=$this->consultas->getNames();

		$this->load->view('pages/sidebar',$dataSidebar);
		$this->load->view('pages/teacher', $data);
	}

	public function addcourse(){
		$id_teacher = $this->input->post('id_teacher');
		$name_teacher = $this->input->post('name_teacher');
		$race_teacher = $this->input->post('race_teacher');
		$section_teacher = $this->input->post('section_teacher');
		$name_course = $this->input->post('name_course');



		$datos = array(
			'teacher' => $id_teacher,
			'carrera_course' => $race_teacher,
			'ciclo_course' => $section_teacher,
			'name_course' => $name_course
		);

		$this->insertar->newCourse($datos);

		echo "<script>
		alert('Guardado Correctamente');
		location.href = 'https://sysweb.lavid.life/teacher?id=".$id_teacher."';
			</script>";		}


	public function delcourse(){

		$course = $this->input->post('delete_id');
		$teacher = $this->input->post('id');

		$this->delete->delCourse($course);

		echo "<script>
		alert('Eliminado Correctamente');
		location.href = 'https://sysweb.lavid.life/teacher?id=".$teacher."';
			</script>";
	}

	public function addFile(){

		if ($this->input->post('name') != "") {
			$name = $this->input->post('name');
			$imagen = $_FILES['file_name']['name'];
			$extension = pathinfo($_FILES['file_name']['name'], PATHINFO_EXTENSION);

			$image1 = $name.".".$extension;

		}else {
			$extension = pathinfo($_FILES['file_name']['name'], PATHINFO_EXTENSION);

			$image1 = $_FILES['file_name']['name'];

		}

		$config['upload_path'] =  'imagenes/';
		$config['file_name'] = $image1;
		$config['allowed_types'] ='*';

		$this->load->library('upload',$config);
		$this->upload->initialize($config);

		$this->upload->do_upload('file_name');
		$data = array(
			'file_name' => str_replace(' ', '_',$image1),
			'created' => date(DATE_W3C),
			'extension' => $extension,
			'teacher' => $this->input->post('id')
		);

		$this->insertar->newFiles($data);

		echo "<script>
			alert('Agregado Correctamente');
			location.href = 'https://sysweb.lavid.life/teacher?id=".$this->input->post('id')."'
		</script>";
	}
	public function download(){
		$idfile = $_GET['id_file'];
		$idteacher = $_GET['id_teacher'];
		$fileInfo = $this->consultas->getRows(array('id_file' => $idfile));

		$file = 'imagenes/'.$fileInfo['file_name'];

		force_download($file, NULL);

	}
	public function deletfile(){

		$idfile = $_GET['id_file'];
		$idteacher = $_GET['id_teacher'];
		$fileInfo = $this->consultas->getRows(array('id_file' => $idfile));
		$file = 'imagenes/'.$fileInfo['file_name'];

		$this->delete->delfile($idfile);
		unlink($file);


		echo "<script>
		alert('Eliminado Correctamente');
		location.href = 'https://sysweb.lavid.life/teacher?id=".$idteacher."';
			</script>";
	}
}
