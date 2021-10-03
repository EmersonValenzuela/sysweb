<?php

class Consultas extends CI_Model
{
	function __construct()
	{
		parent::__construct();
	}

		public function consultasIniciales()
		{
			$sqlUsuarios = "SELECT id FROM users";
			$queryUsuarios = $this->db->query($sqlUsuarios);
			$usuarios=$queryUsuarios->num_rows();

			$sqlBlogs = "SELECT id FROM blog";
			$queryBlogs = $this->db->query($sqlBlogs);
			$blogs=$queryBlogs->num_rows();


			$sqlComments = "SELECT id FROM comments";
			$queryComments = $this->db->query($sqlComments);
			$comments=$queryComments->num_rows();

			$sqlTeachers = "SELECT id FROM comments";
			$queryTeachers = $this->db->query($sqlTeachers);
			$teachers = $queryTeachers->num_rows();

			$sqlCursos = "SELECT id FROM comments";
			$queryCursos = $this->db->query($sqlCursos);
			$cursos=$queryCursos->num_rows();

			$sqlEmails = "SELECT id FROM comments";
			$queryEmails = $this->db->query($sqlEmails);
			$emails=$queryEmails->num_rows();



			$valores=array(
				'usuarios'=>$usuarios,
				'blogs'=>$blogs,
				'comments'=>$comments,
				'emails'=>$emails,
				'cursos'=>$cursos,
				'teachers'=>$teachers

			);
			return $valores;

		}

		function findIdUser($user, $pass)
		{
			$sql = "SELECT * FROM users WHERE email_user = ? AND password_user = ? ";
			$query = $this->db->query($sql,array($user,$pass));
			return $query->row();
		}

		//////////////////////////////////////////////////////////////////////////////////////////////////////

		function isUser($user, $pass)
		{
			$sql = "SELECT * FROM users WHERE email_user = ? ";
			$query = $this->db->query( $sql, array($user) );
			if ($query->num_rows() > 0) {
				$sql = "SELECT * FROM users WHERE email_user = ? and password_user = ? ";
				$query = $this->db->query($sql, array($user,$pass) );
				if ($query->num_rows() > 0) {
					return '1';
				} else {
					return 'ui_notifications2.js';
				}
			} else {
				return 'ui_notifications.js';
			}
		}

		//////////////////////////////////////////////////////////////////////////////////////////////////////

		public function getUsers($id=0)
		{
			if($id!=0)
			{
				$sql = "SELECT *
				FROM users
				Where id_user = ?
				ORDER BY name_user ASC";
				$query = $this->db->query( $sql, array($id) );
				return $query->row_array();
			}
			$sql = "SELECT *
			FROM users
			ORDER BY name_user ASC";
			$query = $this->db->query($sql);
			return $query->result_array();
		}

		function existeUsername($user)
		{
			$sql = "SELECT id_user FROM users WHERE email_user = ? ";
			$query = $this->db->query($sql,array($user));
			if ($query->num_rows() == 0) {
				return false;
			}
			return true;
		}
		public function getTeachers($id=0)
		{
			if($id!=0)
			{
				$sql = "SELECT * FROM teachers Where id_teacher = ?";
				$query = $this->db->query($sql, array($id) );
				return $query->row_array();
			}
			$sql = "SELECT * FROM teachers";
			$query = $this->db->query($sql);
			return $query->result_array();
		}
		public function getTeachersI($id=0)
		{
			if($id!=0)
			{
				$sql = "SELECT * FROM teachers Where user = ?";
				$query = $this->db->query($sql, array($id) );
				return $query->result_array();
			}
			$sql = "SELECT * FROM teachers";
			$query = $this->db->query($sql);
			return $query->result_array();
		}
		public function getNames($id=0)
		{
			if($id!=0)
			{
				$sql = "SELECT * FROM names Where id_name = ?";
				$query = $this->db->query($sql, array($id) );
				return $query->row_array();
			}
			$sql = "SELECT * FROM names";
			$query = $this->db->query($sql);
			return $query->result_array();
		}
		public function getLessons($id=0)
		{
			if($id!=0)
			{
				$sql = "SELECT l.*, t.* FROM lesson l
				inner join teachers t on l.teacher = t.id_teacher
				Where l.teacher = ?";
				$query = $this->db->query($sql, array($id) );
				return $query->result_array();
			}
			$sql = "SELECT * FROM names";
			$query = $this->db->query($sql);
			return $query->result_array();
		}

		public function getLesson($id=0)
		{
			if($id!=0)
			{
				$sql = "SELECT * FROM lesson
				Where id_lesson = ?";
				$query = $this->db->query($sql, array($id) );
				return $query->row_array();
			}
			$sql = "SELECT * FROM names";
			$query = $this->db->query($sql);
			return $query->result_array();
		}

		public function getCursos($id=0)
		{
			if($id!=0)
			{
				$sql = "SELECT c.*, t.* FROM courses c
				inner join teachers t on c.teacher = t.id_teacher
				Where c.teacher = ?";
				$query = $this->db->query($sql, array($id) );
				return $query->result_array();
			}
			$sql = "SELECT * FROM names";
			$query = $this->db->query($sql);
			return $query->result_array();
		}

		public function getCurso($id=0)
		{
			if($id!=0)
			{
				$sql = "SELECT c.*, t.* FROM courses c
				inner join teachers t on c.teacher = t.id_teacher
				Where c.id_course = ?";
				$query = $this->db->query($sql, array($id) );
				return $query->row_array();
			}
			$sql = "SELECT * FROM names";
			$query = $this->db->query($sql);
			return $query->result_array();
		}

		public function getFiles($id=0)
		{
			if($id!=0)
			{
				$sql = "SELECT f.*, t.* FROM files f
				inner join teachers t on f.teacher = t.id_teacher
				Where f.teacher = ?";
				$query = $this->db->query($sql, array($id) );
				return $query->result_array();
			}
			$sql = "SELECT * FROM files";
			$query = $this->db->query($sql);
			return $query->result_array();
		}

		function getRows($params = array()){
			 $this->db->select('*');
			 $this->db->from('files');

			 if(array_key_exists('id_file',$params) && !empty($params['id_file'])){
					 $this->db->where('id_file',$params['id_file']);
					 //get records
					 $query = $this->db->get();
					 $result = ($query->num_rows() > 0)?$query->row_array():FALSE;
			 }else{
					 //set start and limit
					 if(array_key_exists("start",$params) && array_key_exists("limit",$params)){
							 $this->db->limit($params['limit'],$params['start']);
					 }elseif(!array_key_exists("start",$params) && array_key_exists("limit",$params)){
							 $this->db->limit($params['limit']);
					 }
					 //get records
					 $query = $this->db->get();
					 $result = ($query->num_rows() > 0)?$query->result_array():FALSE;
			 }
			 //return fetched data
			 return $result;
	 }




}
?>
