<?php
defined('BASEPATH') OR exit('No direct script access allowed');


$autoload['packages'] = array(
	
);

$autoload['libraries'] = array("session");


$autoload['drivers'] = array();


$autoload['helper'] = array('url','path');


$autoload['config'] = array();


$autoload['language'] = array();


$autoload['model'] = array("HomeModel","LoginModel");
