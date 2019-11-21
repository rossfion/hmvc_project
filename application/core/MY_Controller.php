<?php
/* 
 * CMS-Blogging Demo built with Codeigniter & Bootstrap
 * Original concept: Frank John, Udemy tutor
 * Author Fionn Ross-Monceaux
 * (c) 2019
 */
defined('BASEPATH') OR exit('No direct script access allowed');

class MY_Controller extends MX_Controller {
/*
* some material originally taken from Joost van Veen Build a CMS with Codeigniter 2012
*/
  public $data = array();
  function __construct()
  {
    parent::__construct();
	/*Additional code which you want to run automatically in every function call */
    /*$this->output->set_header('Last-Modified:' . gmdate('D, d M Y H:i:s') . 'GMT');
    $this->output->set_header('Cache-Control: no-store, no-cache, must-revalidate');
    $this->output->set_header('Cache-Control: post-check=0, pre-check=0', false);
    $this->output->set_header('Pragma: no-cache');*/
	
	//$this->data['errors'] = array();
	$this->load->module('categories');
        $this->load->module('comments');
        $this->load->module('migrations');
        $this->load->module('posts');
        $this->load->module('templates');
        $this->load->module('users');
        
	
  }
}


