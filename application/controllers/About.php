<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class About extends Application {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/about
	 *	- or -  
	 * 		http://example.com/index.php/about/index
	 *	- or -
	 * Since this controller is set as the default controller in 
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/about/<method_name>
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		//$this->load->view('about');
		$this->data['pagebody'] = 'about';
		$this->render();
	}
}

/* End of file About.php */
/* Location: ./application/controllers/About.php */