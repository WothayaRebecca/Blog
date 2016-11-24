<?php
class News extends CI_Controller
{
	
	public function __construct()
	{
		
		parent::__construct();
		$this->load->model('news_model');
		$this->load->helper('url_helper');
		$this->load->library('session');
		
		
	}
	public function index()

	 {
	  $uname=$this->session->userdata('user_type');

	  if($uname!='admin')// || ($uname==''))
	  {
		$data['news']=$this->news_model->get_info();
		$data['uname']=$uname;
		$data['title']='current news';
		$this->load->view('templates/header', $data);
		$this->load->view('news/index', $data);
		$this->load->view('templates/footer');
	  }
	  else
	  {
		$data['news']=$this->news_model->view_new_posts();
		$data['uname']=$uname;
		$data['title']='current news';
		$this->load->view('templates/header', $data);
		$this->load->view('news/index', $data);
		$this->load->view('templates/footer');
	  }
	}
	public function view($slug=NULL)
	{
		$uname=$this->session->userdata('user_type');
		

		if($uname!='admin')//||($uname==''))
		{
	      $data['news_item']=$this->news_model->get_info($slug);
          if(empty($data['news_item']))
       	   { 
       		show_404();
       	   }			
		
		  else
		  {	
            $data['title']=$data['news_item']['title'];
            $data['uname']=$uname;
            $this->load->view('templates/header', $data);
            $this->load->view('news/view', $data);
            $this->load->view('templates/footer');	
          }	
        }
        else 
        {
          $data['news_item']=$this->news_model->get_info($slug);
          if(empty($data['news_item']))
       	   { 
       		show_404();
       	   }

			
		
		  else
		  {	
		  	
            $data['title']=$data['news_item']['title'];
            $data['uname']=$uname;
            $this->load->view('templates/header', $data);
            $this->load->view('news/New_posts', $data);
            $this->load->view('templates/footer');	
          }	

        }
	}
	public function create()
	{
		$uname=$this->session->userdata('user_type');
		$user_id=$this->session->userdata('user_id');

		if($uname != '')
		{
			if($uname == 'admin' || $uname=='blogger')
			{			

              $this->load->helper('form');
	          $this->load->library('form_validation');
	   
	          $data['title']='create a news item';
	          $data['uname']=$uname;
	   
	          $this->form_validation->set_rules('title', 'Title','required');
	          $this->form_validation->set_rules('text','Text', 'required');
	   
	          if($this->form_validation->run()==FALSE)
	          {
		         $this->load->view('templates/header',$data);
		         $this->load->view('news/create');
		         $this->load->view('templates/footer');   
		   
	          }
	          else 
	          {
		      $check=$this->news_model->set_news($user_id);
		      
		      
		        if ($check)
		        {
		   	  # code...
		   	        redirect('news');
		        }
		        else
		        {
		   	        show_404();
			    }

	          }


	       
            }
            else 
            {
              echo "you are not allowed to access this page";
            }
			

		
        

	    }
	    else
	    {
		   echo "please log in";
	    } 
	
	
  }
  public function publish($slug)
  {
  	
  	$uname=$this->session->userdata('user_type');

	  if($uname!='admin')
	  {
		$data['news_item']=$this->news_model->get_info();
		$data['title']='current news';
		$data['uname']=$uname;
		$this->load->view('templates/header', $data);
		$this->load->view('news/index', $data);
		$this->load->view('templates/footer');
	  }
	   else
	   {
		$data['news_item']=$this->news_model->update_status($slug);        
		$data['uname']=$uname;
		$data['title']='current news';
		$this->load->view('templates/header', $data);
		$this->load->view('news/published', $data);
		$this->load->view('templates/footer');
	   }

  }
  public function unpublish($slug)
  {
  	
  	$uname=$this->session->userdata('user_type');

	  if($uname!='admin')
	  {
		$data['news']=$this->news_model->view_new_posts();
		$data['uname']=$uname;
		$data['title']='current news';
		$this->load->view('templates/header', $data);
		$this->load->view('news/index', $data);
		$this->load->view('templates/footer');
	  }
	   else
	   {
		$data['news']=$this->news_model->reset_status($slug);
		$data['uname']=$uname;
		$data['title']='current news';
		$this->load->view('templates/header', $data);
		$this->load->view('news/unpublish', $data);
		$this->load->view('templates/footer');
	   }

  }
  


}










