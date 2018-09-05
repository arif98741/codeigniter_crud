<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Helper extends  CI_Controller{
	
	public function __construct($function = null)
	{
		function_exists('daa','data')
		{

		}
	
	}

	public function checkPage()
	{
		echo "<pre>";
        print_r($this->uri->segments);
        echo "</pre>";
        exit();
		return view('',$data);
	}
	
}

?>
