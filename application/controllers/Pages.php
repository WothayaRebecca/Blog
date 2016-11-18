<?php
class Pages extends CI_Controller{
	public function view($page='home')

{
        $this->load->helper('url');
        $this->load->helper('form');
        $this->load->library('form_validation');
        if ( ! file_exists(APPPATH.'views/pages/'.$page.'.php'))
        {
                // Whoops, we don't have a page for that!
                show_404();
        }

        $data['title'] = 'ROAD TO SOFTWARE DEVELOPMENT EXPERTISE'; // Capitalize the first letter
        $this->form_validation->set_rules('email', 'email address','required');
        $this->form_validation->set_rules('password1','Password', 'required');
         if($this->form_validation->run()==FALSE)
           {
                   $this->load->view('templates/header',$data);
                   $this->load->helper('url');
                   $this->load->view('/pages/' .$page, $data);
                   $this->load->view('templates/footer');   
                   
           }
           else 
           {
                echo "please fill in the fields"; 
           }
           

       /* $this->load->view('templates/header', $data);
		$this->load->helper('url');
        $this->load->view('pages/'.$page, $data);
		
		//echo "\n\n"
        $this->load->view('templates/footer', $data);*/
		
}
	
	
}
