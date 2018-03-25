<?php
defined('BASEPATH') OR exit('No direct script access allowed');


$autoload['packages'] = array(
	
);

$autoload['libraries'] = array("session","form_validation");


$autoload['drivers'] = array();


$autoload['helper'] = array('url','path','form');


$autoload['config'] = array();


$autoload['language'] = array();


$autoload['model'] = array("HomeModel","LoginModel","UserModel");
