<?php
class Pages extends CI_Controller{
	public function view($page='home')

{
        $this->load->helper('url');
        if ( ! file_exists(APPPATH.'views/pages/'.$page.'.php'))
        {
                // Whoops, we don't have a page for that!
                show_404();
        }

        $data['title'] = 'First page'; // Capitalize the first letter

        $this->load->view('templates/header', $data);
		$this->load->helper('url');
        $this->load->view('pages/'.$page, $data);
		
		//echo "\n\n"
        $this->load->view('templates/footer', $data);
		
}
	
	
}
