<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Gallery extends Application {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/Gallery
	 *	- or -  
	 * 		http://example.com/index.php/Gallery/index
	 *	- or -
	 * Since this controller is set as the default controller in 
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/Gallery/<method_name>
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		//$this->load->view('gallery');
		$this->data['pagebody'] = 'about';
		$this->render();
	}
}

/* End of file Gallery.php */
/* Location: ./application/controllers/Gallery.php */