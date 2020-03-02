<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Menu_model extends CI_Model 
{
	public function getSubMenu()
	{
		$query = "SELECT `user_sub_menu`.*, `user_menu`.`menu`
				  FROM 	 `user_sub_menu` JOIN `user_menu`
				  ON 	 `user_sub_menu`.`menu_id` = `user_menu`.`id`";

		return $this->db->query($query)->result_array();
	}

	public function getUserMenu()
	{
		$query = "SELECT `user`.*, `user_menu`.`menu`
				  FROM 	 `user` JOIN `user_menu`
				  ON 	 `user`.`menu_id` = `user_menu`.`id`";

		return $this->db->query($query)->result_array();
	}

	public function getMenu()
	{
		$query = "SELECT `user_menu`.*, `user_menu`.`menu";

		return $this->db->query($query)->result_array();
	}

	
	
}