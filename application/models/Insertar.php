<?php

class Insertar extends CI_Model
{

	function __construct()
	{
		parent::__construct();
	}

	function insertarGral($tabla,$data)
	{
		$this->db->insert($tabla, $data);
		return $this->db->insert_id();
	}
	function updateGral($tabla,$data,$where)
	{
		$this->db->update($tabla, $data,$where);
		return $this->db->insert_id();
	}

	function newUser($data)
	{
		return $this->db->insert('users', $data);
	}
	function newTeacher($data)
	{
		return $this->db->insert('teachers', $data);
	}

	function newFiles($data)
	{
		return $this->db->insert('files', $data);
	}

	function newLesson($data)
	{
		return $this->db->insert('lesson', $data);
	}

	function setCourses($data,$where)
	{
		return $this->db->update('courses', $data,$where);
	}	
	function setUser($data,$where)
	{
		return $this->db->update('users', $data,$where);
	}
	function newCourse($data)
	{
		return $this->db->insert('courses', $data);
	}
}
?>
