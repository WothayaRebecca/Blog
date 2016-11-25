<?php
class News_model extends CI_Model

{
	
	public function __construct()
	{
		parent::__construct();
		$this->load->database();
	}
	public function get_info($slug=FALSE)
	{
		if($slug===FALSE)
		{
		$query=$this->db->get_where('news', array('status' =>1));

		return $query->result_array();
		}
				
		$query=$this->db->get_where('news', array('slug'=> $slug));

		return $query->row_array();
	}
	public function set_news($user_id,$actual_date,$username)
	{
		$this->load->helper('url');
		$status=0;
		$slug = url_title($this->input->post('title'), 'dash',TRUE);
		
		$data = array(
		'title'=>$this->input->post('title'),

		'slug'=>$slug,

		'status'=>$status,

		'text'=>$this->input->post('text'),
		'user_id'=>$user_id,
		'Date_created'=>$actual_date,
		'Created_by'=>$username);

		
		return $this->db->insert('news', $data);
		
		
		
		
		
	}
	
	public function get_numrows()
	{
     $query=$this->db->get('news');
     return $query->num_rows();
	}
	public function view_new_posts($slug=FALSE)
	{
		
		if($slug==FALSE)
		{
		
		$query=$this->db->get_where('news', array('status' =>0));

		return $query->result_array();
		}
				
		$query=$this->db->get_where('news', array('slug'=> $slug));

		return $query->row_array();
	}
	public function update_status($slug)
	{
		$data=array('status' =>1);
     
      $this->db->where('slug',$slug);
      $this->db->update('news', $data);
	}
	public function reset_status($slug)
	{
		$data=array('status' =>0);
     
      $this->db->where('slug',$slug);
      $this->db->update('news', $data);
	}
	public function view_new_own_posts($slug , $user_id)
	{

		if($slug===FALSE)
		{
		$query=$this->db->get_where('news', array('user_id' =>$user_id));

		return $query->result_array();
		}
				
		$query=$this->db->get_where('news', array('slug'=> $slug));

		return $query->row_array();
	}
}