<?php

/**
* 
*/
class pages extends CI_controller
{
	
	public function view($page = 'home')
	{
		if(!file_exists(APPPATH.'views/pages/'.$page.'.php ')){

			echo "file not exist";
			show_404();
		}else{
         $data['title'] = ucfirst($page);
         $this->load->view('header',$data);
         $this->load->view('pages/'.$page,$data);
         $this->load->view('footer',$data);
         $this->load->model('News_model');
         $data = $this->News_model->gatdata();
         print_r($data);
		}
	}


}




?>