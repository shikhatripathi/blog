<?php 


class Editor_model extends CI_Model
{
	
	function   submit_blog($data)
	{
		$this->db->insert('blog' ,$data);

	}
}?>