<?php

/**
 * Load Exceptions
 *
 * Simply loads the Exception class
 */
function load_exceptions()
{
	if(CI_VERSION >= '2.0')
	{
		// For CodeIgniter 2.0
		load_class('Exceptions', 'core');		
	}
	else
	{
		// For CodeIgniter 1.7.2
		load_class('Exceptions');
	}
}