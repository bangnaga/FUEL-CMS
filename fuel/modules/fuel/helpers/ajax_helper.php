<?php  if (!defined('BASEPATH')) exit('No direct script access allowed');
/**
 * FUEL CMS
 * http://www.getfuelcms.com
 *
 * An open source Content Management System based on the 
 * Codeigniter framework (http://codeigniter.com)
 *
 * @package		FUEL CMS
 * @author		David McReynolds @ Daylight Studio
 * @copyright	Copyright (c) 2011, Run for Daylight LLC.
 * @license		http://www.getfuelcms.com/user_guide/general/license
 * @link		http://www.getfuelcms.com
 * @filesource
 */

// ------------------------------------------------------------------------

/**
 * FUEL Ajax Helper
 *
 * @package		FUEL CMS
 * @subpackage	Helpers
 * @category	Helpers
 * @author		David McReynolds @ Daylight Studio
 * @link		http://www.getfuelcms.com/user_guide/helpers/ajax_helper
 */


// --------------------------------------------------------------------

/**
 * Returns a boolean value based on whether the page was requested via AJAX or not
 *
 * @access	public
 * @return	boolean
 */	
function is_ajax(){
	return (isset($_SERVER['HTTP_X_REQUESTED_WITH']) && $_SERVER['HTTP_X_REQUESTED_WITH']=="XMLHttpRequest");
}

// --------------------------------------------------------------------

/**
 * Sets the HTTP headers for 
 *
 * @access	public
 * @param	boolean	Sets the no cache headers
 * @return	boolean
 */	
function json_headers($no_cache = TRUE)
{
	if ($no_cache)
	{
		header('Cache-Control: no-cache, must-revalidate');
		header('Expires: Mon, 26 Jul 1997 05:00:00 GMT');
	}
	header('Content-type: application/json');
}

/* End of file ajax_helper.php */
/* Location: ./application/helpers/ajax_helper.php */
