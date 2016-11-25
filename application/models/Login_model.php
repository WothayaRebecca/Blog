<?php
/**
* 
*/
class Login_model extends CI_Model
{
	
	public function __construct()
	{
		# code
		parent::__construct();
		$this->load->database();
		$this->load->library('encrypt');
	}
	public function set_details()
	{
		$this->load->helper('url');	
		$password=$this->input->post('password');
		$hashed_password=$this->encrypt->encode($password);
		
		$data = array(

		'Email'=>$this->input->post('email'),

		'Username'=>$this->input->post('username'),
		

		'Password'=>$hashed_password,

		'user_type'=>$this->input->post('user_type'));
		
		return $this->db->insert('LOGIN', $data);
		
	}
    public function log_in($username)
    {
	
     $this->db->where('Username', $username);
     //$this->db->where($this->encrypt->decode('Password'), $password));
     $query=$this->db->get('LOGIN');

     if($query-> num_rows()>0)
     {
     	$user=$query->row_array();
     	return $user['Password'];    
     }

	
	 else
	 {
		return false;
	 }
    }

    public function get_user_type($username)
    {
    	$this->db->where('Username', $username);

    	$query = $this->db->get('LOGIN');

    	if($query-> num_rows() > 0)
    	{
    		
    		$user = $query->row_array();

    		return $user['user_type'];
    	}
    }    

    public function get_user_id($username)
    {
    	$this->db->where('Username', $username);

    	$query = $this->db->get('LOGIN');

    	if($query-> num_rows() > 0)
    	{
    		
    		$user = $query->row_array();

    		return $user['user_id'];
    	}
    }


    
    public function get_bloggers()
    {
    	$query = $this->db->get('LOGIN');
    	if($query-> num_rows() > 0){
    		
    		$user=$query->row_array();

    		return $user;
    	}
    }
    public function get_password($username)
    {
       $this->db->where('Username', $username);

    	$query = $this->db->get('LOGIN');

    	if($query-> num_rows() > 0){
    		
    		$user = $query->row_array();

    		return $user['Password'];
    	}

    }
}
