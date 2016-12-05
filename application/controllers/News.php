<?php
class News extends CI_Controller
{
	
	public function __construct()
	{
		
		parent::__construct();
		$this->load->model('news_model');
		$this->load->helper('url_helper');
		$this->load->library('session');
		$this->load->library('pagination');
		//$this->load->model('Login_model');
		
		
	}
	public function index()
    {
	 	//$rows=$this->news_model->get_numrows();
	 	//echo $rows;

     $config['base_url']=base_url().'index.php/news/index';
     $config['total_rows']=$this->news_model->get_numrows();
     //echo $config['total_rows'] ;
     $config['per_page']=5;    
     $config['cur_tag_open']='&nbsp;<a class="current">' ; 
     $config['cur_tag_close']='</a>';
     $config['uri_segment']=3;     
     $this->pagination->initialize($config);
	 $uname=$this->session->userdata('user_type');
	 
	  if($uname!='admin')
	  { 
	   $page=$this->uri->segment(3);
		$data['news']=$this->news_model->get_info($config['per_page'], $page);
		$links=$this->pagination->create_links();		
		$data['links']=explode('</a>', $links);
		$data['uname']=$uname;
		$data['username']=$this->session->userdata('username');
		$data['title']='CURRENT NEWS';
		$this->load->view('templates/header', $data);
		$this->load->view('news/index', $data);
		$this->load->view('templates/footer');
	   }
	  else
	  {
        $page=$this->uri->segment(3);
		$data['news']=$this->news_model->view_new_posts($config['per_page'], $page);
		$links=$this->pagination->create_links();		
		$data['links']=explode('</a>', $links);
		$data['uname']=$uname;
		$data['username']=$this->session->userdata('username');
		$data['title']='CURRENT NEWS';
		$this->load->view('templates/header', $data);
		$this->load->view('news/index', $data);
		$this->load->view('templates/footer');
		// echo $this->pagination->create_links();
	  }
	  
	}
	public function view($slug=NULL)
	{
		$uname=$this->session->userdata('user_type');
		 $config['per_page']=5; 
		 $page=$this->uri->segment(3);
		

		if($uname!='admin')//||($uname==''))
		{
	      $data['news_item']=$this->news_model->get_info($config['per_page'], $page, $slug);
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
          $config['per_page']=5; 
		  $page=$this->uri->segment(3);
          $data['news_item']=$this->news_model->get_info($config['per_page'], $page, $slug);
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
		$username=$this->session->userdata('username');
		$actual_date=date('Y-m-d H:i:s');

		if($uname != '')
		{
			if($uname == 'admin' || $uname=='blogger')
			{			

              $this->load->helper('form');
	          $this->load->library('form_validation');
	   
	          $data['title']='CREATE A NEWS ITEM';
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
		      $check=$this->news_model->set_news($user_id,$actual_date,$username);
		      
		      
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
		$data['title']='CURRENT NEWS';
		$data['uname']=$uname;
		$this->load->view('templates/header', $data);
		$this->load->view('news/index', $data);
		$this->load->view('templates/footer');
	  }
	   else
	   {
		$data['news_item']=$this->news_model->update_status($slug);        
		$data['uname']=$uname;
		$data['title']='CURRENT NEWS';
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
		$data['title']='CURRENT NEWS';
		$this->load->view('templates/header', $data);
		$this->load->view('news/index', $data);
		$this->load->view('templates/footer');
	  }
	   else
	   {
		$data['news']=$this->news_model->reset_status($slug);
		$data['uname']=$uname;
		$data['title']='CURRENT NEWS';
		$this->load->view('templates/header', $data);
		$this->load->view('news/unpublish', $data);
		$this->load->view('templates/footer');
	   }

  }
  public function edit($slug)
  {     
  	    $uname=$this->session->userdata('user_type');
        $data['news']=$this->news_model->retrieve_post($slug);
		$data['uname']=$uname;
		if(empty($data['news']))
       	   { 
       		show_404();
       	   }
       	else
       	  { 

		$data['title']='EDIT A POST';
		//echo $data ['news'][1];
		$this->load->view('templates/header', $data);
		$this->load->view('news/edit', $data);
		$this->load->view('templates/footer');
	       }

  }
  public function update_post()
  {
  // $actual_date=date('Y-m-d H:i:s');
  	echo "string";
  	$data = array('text' =>$this->input->post('text') ,
  	'slug'=>$this->input->post('title'),
  	'status'=>0 );

   $check=$this->news_model->update_post($data);
		      
		      
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










