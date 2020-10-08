# CodeIgniter UhOh!

## This project is archived and unmaintained 

Version: 1.5

UhOh is an extension on CI_Extensions that provides awesome error messages with full backtraces and a view of the line with the error.

It catches all errors including:

* E_PARSE
* E_ERROR
* E_USER_ERROR
* E_COMPILE_ERROR
* E_ERROR
* E_USER_ERROR
* E_PARSE
* E_WARNING
* E_USER_WARNING
* E_STRICT
* E_NOTICE
* E_RECOVERABLE_ERROR

It also outputs full backtraces for all CodeIgniter system errors.  No more "Where is it trying to load that view?", it will show you the line that called it and the surrounding lines.

#### Credit

Author ("porter"): "Dan Horrigan":http://dhorrigan.com

UhOh! is based on Kohana v3's error handling.  The file contains some code from the Kohana project.
"Kohana License":http://kohanaframework.org/license

## Installation

1. Copy the hooks/uhoh.php file into your hooks directory
2. Copy the contents of the config/hooks.php file into your hooks config.
3. Enable hooks in your config file.
4. Copy the libraries/MY_Exceptions.php file to your application/libraries folder.*
5. Copy errors/error_php_custom.php to your application/errors folder.
6. Copy errors/error_general.php to your application/errors folder.

_If your are using CodeIgniter 2.0 you must copy the MY_Exceptions.php file to application/core, instead of libraries._


Thats it...to see what it looks like, just intentionally cause an error in your app.

## Production Mode

You probably don't want to show the detiailed errors on your production server.  In MY_Exceptions.php on line 6, simply change IN_PRODUCTION to _TRUE_ to disable UhOh!

# Changelog

## v1.5

* Added the ability to disable UhOh! in a production environment.

## v1.4

* Fixed issue that caused a Fatal Error when show_error() was called with an array.

## v1.3

* Patched show_error so that it now detects if the error was thrown by an extension (i.e. MY_Loader), if so treat it as a system file.

## v1.2

* The show_error now outputs a stack trace as well as shows you the original line that caused the error (i.e. the line that loads the view in your app).

## v1.1

* Better handling for getting absolute paths for the system and application directories.
* Now logs error messages to the CodeIgniter log when enabled.
* Added a nicer looking General Error template.
* Extended show_error() so that it won't send headers if it has already been sent.

## v1.0

Initial Release
