<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

function image_url($uri = '')
{
	$CI =& get_instance();
	return $CI->config->base_url('include/images/'.$uri);
}
