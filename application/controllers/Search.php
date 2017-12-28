<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Search extends CI_Controller {

	public function index()
	{
		$data['title'] = "Check Username availability with Ajax and Codeigniter";
		$this->load->view('check', $data);
	}

	public function checkUsername()
	{
		$this->load->model('Search_model');
		if($this->Search_model->getUsername($_POST['username'])){
			echo '<label class="text-danger"><span><i class="fa fa-times" aria-hidden="true">
			</i> This user is already registered</span></label>';
		}
		else {
			echo '<label class="text-success"><span><i class="fa fa-check-circle-o" aria-hidden="true"></i> Username is available</span></label>';
		}
	}
}

/* End of file Search.php */
/* Location: ./application/controllers/Search.php */