<?php
class Pages extends CI_Controller
{

  public function __construct(){
    
    parent::__construct();
    $this->load->helper('url');
    $this->load->library('session');
    $this->load->helper('form');
    $this->load->library('encrypt');
        
    }

    public function index(){


      echo "hello";
    }


	public function register($page='home')

  {
        //$date= date(DateTime::ISO8601);
        $actual_date=date('Y-m-d H:i:s');
        //echo $actual_date;
        $uname=0;
        // $creator=$this->session->userdata('username');
        $this->load->helper('url');
        $this->load->model('Login_model');
        $this->load->helper('form');
        $this->load->library('form_validation');
        $usertype=$this->input->post('user_type');
        


        $data['title'] = 'MY BLOG';
        $data['uname']=$uname; 

        $this->form_validation->set_rules('email', 'Email Address','required');
        $this->form_validation->set_rules('username', 'Username','required');
        $this->form_validation->set_rules('password','Password', 'required');
         if($this->form_validation->run()===FALSE)
           {
                   $this->load->view('templates/header',$data);
                   $this->load->helper('url');
                   $this->load->view('pages/home', $data);
                   $this->load->view('templates/footer');   
                   
           }
           else 
           {
                $check=$this->Login_model->set_details();
                if($check){

                  $uname=$this->session->userdata('user_type');
                  $data['title'] = 'MY BLOG';
                  $data['uname']=$uname;      
                  $this->load->view('templates/header',$data);
                  $this->load->helper('url');
                  $this->load->view('pages/account_create_success', $data);
                  $this->load->view('templates/footer'); 
                  
                }
                else 
                  echo "dfd";

           }
  }
  public function login(){

    $uname=0;
    $data['title'] = 'MY BLOG';
    $data['uname']=$uname;      
    $this->load->view('templates/header',$data);
    $this->load->helper('url');
    $this->load->view('pages/login', $data);
    $this->load->view('templates/footer');  
  }
  public function welcome($uname = null){

    $logged_in=$this->session->userdata('user_type');
    $username=$this->session->userdata('username');
    $data['title'] = 'MY BLOG';
    $data['uname'] = $logged_in;
    $data['username']=$username;
 
    $this->load->view('templates/header',$data);
    $this->load->helper('url');
    $this->load->view('pages/welcome', $data);
    $this->load->view('templates/footer');  
  }
  public function wrong_pass($uname=0){

   //$logged_in=$this->session->userdata('user_type');
    $logged_in=$this->session->userdata('user_type');
    $username=$this->session->userdata('username');
    $data['title'] = 'PASSWORD RESET';
    $data['uname'] = $logged_in;
    $data['username']=$username;
 
    $this->load->view('templates/header',$data);
    $this->load->helper('url');
    $this->load->view('pages/mailEnquire', $data);
    $this->load->view('templates/footer');  
  }
  public function send_password($uname=0){

   //$logged_in=$this->session->userdata('user_type');
    $logged_in=$this->session->userdata('user_type');
    $username=$this->session->userdata('username');
    $data['title'] = 'PASSWORD RESET';
    $data['uname'] = $logged_in;
    $data['username']=$username;
 
    $this->load->view('templates/header',$data);
    $this->load->helper('url');
    $this->load->view('pages/passwordReset', $data);
    $this->load->view('templates/footer');  
  }
  function login_validation()
  {
      
     $uname=$this->session->userdata('user_type');
        $this->load->helper('url');
        $this->load->model('Login_model');
        $this->load->helper('form');
        $this->load->library('form_validation');


        $data['title'] = 'MY BLOG';
        $data['uname']=$uname;         
        $this->form_validation->set_rules('username', 'Username','required');
        $this->form_validation->set_rules('password','Password', 'required');
        if(!$this->form_validation->run())
         { 
          
           $this->load->view('templates/header',$data);           
           $this->load->view('pages/login', $data);
           $this->load->view('templates/footer'); 
         }
         else
         {
          

          $username=$this->input->post('username');
          $password=$this->input->post('password');
          $hashed_password=$this->encrypt->encode($password);   
          //echo $hashed_password;      
          $this->load->model('Login_model');
          $db_password=$this->Login_model->log_in($username);
          $match_password=$this->encrypt->decode($db_password);

         
           if ($password==$match_password)
           {
            

        

              $session_data = array('username' => $username, 'user_type' => $this->Login_model->get_user_type($username), 'user_id' => $this->Login_model->get_user_id($username));
              $this->session->set_userdata( $session_data);
              //redirect('Pages/enter');


              $this->enter();
              // echo $this->session->userdata('user_type');

            }
            else
            {
               $this->session->set_flashdata('error','wrong credentials, please try again');
                 //$data== "wrong credentials";
                   $this->load->view('templates/header',$data);
                   $this->load->helper('url');
                   $this->load->view('pages/loginError');
                   $this->load->view('templates/footer'); 
                //redirect('Pages/login');

            }

         }  
   
      
    
    



  }
  // function email_exists($email)
  // {
  //  $this->Login_model->emailExist($email);


  // }
  function enter()
  {
    if ($this->session->userdata('username')!='')
    {
      $uname = $this->session->userdata('username');
      // $this->load->view('pages/welcome');
      $this->welcome($uname);
    }
    else 
     {

      //redirect(base_url().'pages/login');
     }

  }
  function logout()
  {
    $array = array('username' => '' , 'user_type' => '');
    //$this->session->unset_userdata('logged_in');
    $this->session->sess_destroy();
    //$this->welcome();
    redirect('pages/login');
  
		
  }
  public function delete_blogger()
  {  
   $uname=$this->session->userdata('user_type');
   $this->load->model('Login_model');
   $blogger=$this->Login_model->get_bloggers();
   $data['name']=$blogger;
   $data['uname']=$uname;
   $data['title']='delete a blogger';
   $this->load->view('templates/header', $data);
   $this->load->view('pages/delete', $data);
   $this->load->view('templates/footer');
  }
 public function checkMail()
 {
    $this->load->model('Login_model');

  $ecount=$this->Login_model->checkEmail();
  
  
   if($ecount)
   {
    //$message="Email address already exists, please use another email address";
    
    //echo "Email address already exists, please use another email address";
   }
   else
   {
    return FALSE;
    // echo "OK";
   }
 }


}

	
	

