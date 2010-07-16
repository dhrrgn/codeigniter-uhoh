<?php

/**
 * Load Exceptions
 *
 * Simply loads the Exception class
 */
function load_exceptions()
{
	// Do to a wierd bug I have to get the absolute paths here.
	define('ABS_APPPATH', realpath(APPPATH) . '/');

	if(CI_VERSION >= '2.0')
	{
		// For CodeIgniter 2.0
		define('ABS_SYSDIR', realpath(SYSDIR) . '/');
		load_class('Exceptions', 'core');		
	}
	else
	{
		// For CodeIgniter 1.7.2
		define('ABS_SYSDIR', realpath(BASEPATH) . '/');
		load_class('Exceptions');
	}
}