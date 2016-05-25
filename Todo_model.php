<?php
class Todo_model extends CI_Model {
	public function __construct()
	{
		$this->load->database();
	}
	
	public function todo_get_tasks()
	{
		$query = $this->db->get('todo');
		return $query->result_array();
	}
	
	public function todo_add_task()
	{
		$data = array(
			'id' => 0, // No  matter because of the serial type and the sequence
			'title' => $this->input->post('title'),
		);
		return $this->db->insert('todo',$data);
	}
	
	public function todo_delete_task ($numTask) {
		$data = array('id'=> $numTask);
		$this->db->delete('todo',$data);
	}
}
?>