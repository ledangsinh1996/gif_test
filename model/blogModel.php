<?php

Class blogModel Extends baseModel {

	public function get_blogs()
	{
		 global $db;
		 $blog = $db->query('SELECT id, name, content FROM blog');
		 return $db->fetch_object();
	}
	
	public function getRows($where){
		global $db;
		$db->selectall("blog",$where);
		return $db->fetch_object();
	}
	
	public function getRowss($id){
		global $db;
		return $db->select("blog","`id`='{$id}'");		
	}
	public function get_blog_detail($id) 
	{	
		 global $db;
		 $blog = $db->query('SELECT id, name, content FROM blog where id = '.$db->sqlQuote($id));
		 return $db->fetch_object($first_row = true);
	}
	
	public function add($data){
		global $db;
		return $db->insert($data,"blog");
	}
	public function edit($id, $data){
		global $db;
		return $db->update($data,"blog","`id`='{$id}'");
	}
	public function del($id){
		global $db;
		return $db->delete("blog","`id`='{$id}'");
	}

}
?>
