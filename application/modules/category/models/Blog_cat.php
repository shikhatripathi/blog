<?php 


class Blog_cat extends CI_Model
{
	
	function   blog_user($user)
	{
		$this->db->insert('blog_category' ,$user);

	}
	function category_check($category_check){
	$this->db->select('*');
	$this->db->where('category_name' ,$category_check);
	$query=$this->db->get('blog_category');
	if($query->num_rows()>0){
		return false;
		echo "wrong category";

	}else{
		return true;
	}
}
}?>