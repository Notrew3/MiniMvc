<?php 


/**
 * 			
 */
class View
{
	
	function __construct()
	{
		# code...
	}

	public function render($viewScript)
	{
		require($viewScript);
	}
}