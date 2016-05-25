<?php
class Todo extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->model('todo_model');
		£this->load->helper('url');
	}
	
	public function index()
	{
		$data['todolist'] = $this->todo_model->todo_get_tasks();
		
		$data['title'] = 'Todo list';
		$this->load->view('header', $data);
		$this->load->view('task_list', $data);
		$this->load->view('footer');
	}
	
	public function create()
	{
		$this->load->helper('form');
		$this->load->library('form_validation');
		$data['title'] = 'Cr&eacute;er une t&acirc;che';
		$this->form_validation->set_rules('title', 'Enonc&eacute;', 'required');
	if ($this->form_validation->run() === FALSE)
	{
		$this->load->view('header', $data);
		$this->load->view('form');
		$this->load->view('footer');
	}
	else
	{
		$this->todo_model->todo_add_task();
		$this->load->view('add_success');
	}
}
}
?>