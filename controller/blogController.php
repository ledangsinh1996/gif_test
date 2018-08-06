<?php

Class blogController Extends baseController {

	public function index() 
	{
		$this->render("index","index");
		//$this->view->data['blogs'] = $this->model->get('blogModel')->get_blogs();
		$this->view->data['blogs'] = $this->model->get('blogModel')->getRows(1);
		$this->view->data['blog_heading'] = 'This is the blog Index';
		$this->view->show('blog_index');
	}


	public function view($args){
		$id_blog = $args[1];
		$blog_detail = $this->model->get('blogModel')->get_blog_detail($id_blog);
		$this->view->data['blog_heading'] = $blog_detail->name;
		$this->view->data['blog_content'] = $blog_detail->content;
		$this->view->show('blog_view');
	}

	public function form($args){
		$this->render("index","index");
		$id = $args[1];
		$result = $this->model->get("blogModel")->getRows($id);
		$this->view->data['blog'] = $result;
		$this->view->show("blog_form");
	}
	
	public function save(){
		$data = (json_decode($_REQUEST['arr'],256));
		/*
		$id = $_POST['id'];
		$name = $_POST['name'];
		$content = $_POST['content'];
		
		
		$data = array(
			'name' => $name,
			'content' => $content
		);
		*/
		$id = $data['id'];
		unset($data['id']);
		if($id=='0'){
			echo $this->model->get("blogModel")->add($data);
		}else{
			$this->model->get("blogModel")->edit($id,$data);
			echo "Update";
		}
		
	}
	public function remove(){
		$id = $_POST['id'];
		$this->model->get("blogModel")->del($id);
		//echo "Removed";
	}
	
	public function test(){
		$search = $_POST['search'];
		$result = $this->model->get("blogModel")->getRows("`name` like '%{$search}%'");
        print json_encode($result);
	}
	
}
?>
