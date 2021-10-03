<?php

class Delete extends CI_Model
{

	function __construct()
	{
		parent::__construct();
	}

	function eliminarGral($tabla,$where)
	{
		return $this->db->delete($tabla, $where);
	}

	function delUser($id)
	{
		return $this->db->delete('users', array('id' => $id));
	}

	function delLesson($id)
	{
		return $this->db->delete('lesson', array('id_lesson' => $id));
	}

	function delTeacher($id)
	{
		return $this->db->delete('teachers', array('id_teacher' => $id));
	}
	function delCourse($id)
	{
		return $this->db->delete('courses', array('id_course' => $id));
	}
	function delfile($id)
	{
		return $this->db->delete('files', array('id_file' => $id));
	}
	function delLTeacher($id)
	{
		return $this->db->delete('lesson', array('teacher' => $id));
	}

	function delMovimientosFallidos($idVenta)
	{
		return $this->db->delete('tb_movimientosventas', array('idVenta' => $idVenta));
	}
	function delMovimientosCompraFail($idCompra)
	{
		return $this->db->delete('tb_movimientosventas', array('idCompra' => $idCompra));
	}

	function delMovimiento($idVenta,$idItem)
	{
		return $this->db->delete('tb_movimientosventas', array('idVenta' => $idVenta,'idInventario'=>$idItem));
	}

	function truncar($tabla)
	{
		$this->db->truncate($tabla);
	}

	function delDepartamento($id)
	{
		return $this->db->delete('tb_departamentos', array('id' => $id));
	}



}
?>
