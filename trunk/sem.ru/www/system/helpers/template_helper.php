<?php  if (!defined('BASEPATH')) exit('No direct script access allowed');
/**
 * CodeIgniter
 *
 * An open source application development framework for PHP 4.3.2 or newer
 *
 * @package		CodeIgniter
 * @author		Rick Ellis
 * @copyright	Copyright (c) 2006, EllisLab, Inc.
 * @license		http://www.codeignitor.com/user_guide/license.html
 * @link		http://www.codeigniter.com
 * @since		Version 1.0
 * @filesource
 */

// ------------------------------------------------------------------------

/**
 * CodeIgniter Template Helpers
 *
 * @package		Dott
 * @subpackage	Helpers
 * @category	Helpers
 * @author		Zhdan Zhulanov
 */

// ------------------------------------------------------------------------

function tpl($template){	$CI =& get_instance();
	return $CI->config->item('template').'/'.$template;
}

?>
