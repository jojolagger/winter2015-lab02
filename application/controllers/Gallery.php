<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Gallery extends Application {

	/**
	 * Index Page for this controller.
	 */
	public function index()
	{
		//$this->load->view('gallery');
		//$this->data['pagebody'] = 'about';
		//$this->render();
		$pix = $this->images->all();
		
		foreach($pix as $picture){
			$cells[] = $this->parser->parse('_cell', (array) $picture, true);
		}
		
		$this->load->library('table');
		$params = array(
			'table_open' => '<table class="gallery">',
			'cell_start' => '<td class="oneimage">',
			'cell_alt_start' => '<td class="oneimage">'
		);
		$this->table->set_template($params);
		
		$rows = $this->table->make_columns($cells, 3);
		$this->data['thetable'] = $this->table->generate($rows);
		
		$this->data['pagebody'] = 'gallery';
		$this->render();
	}
}

/* End of file Gallery.php */
/* Location: ./application/controllers/Gallery.php */