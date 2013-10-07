<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2013-10-04 18:27:29 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method Upload::get() ~ APPPATH/classes/Controller/Admin.php [ 50 ] in file:line
2013-10-04 18:27:29 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-10-04 18:28:14 --- EMERGENCY: ErrorException [ 4096 ]: Argument 1 passed to Kohana_Validation::factory() must be of the type array, string given, called in /Users/Ayce/Desktop/htdocs/premier/application/classes/Controller/Admin.php on line 52 and defined ~ SYSPATH/classes/Kohana/Validation.php [ 19 ] in /Users/Ayce/Desktop/htdocs/premier/system/classes/Kohana/Validation.php:19
2013-10-04 18:28:14 --- DEBUG: #0 /Users/Ayce/Desktop/htdocs/premier/system/classes/Kohana/Validation.php(19): Kohana_Core::error_handler(4096, 'Argument 1 pass...', '/Users/Ayce/Des...', 19, Array)
#1 /Users/Ayce/Desktop/htdocs/premier/application/classes/Controller/Admin.php(52): Kohana_Validation::factory('logosprite.png')
#2 /Users/Ayce/Desktop/htdocs/premier/system/classes/Kohana/Controller.php(84): Controller_Admin->action_add()
#3 [internal function]: Kohana_Controller->execute()
#4 /Users/Ayce/Desktop/htdocs/premier/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin))
#5 /Users/Ayce/Desktop/htdocs/premier/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /Users/Ayce/Desktop/htdocs/premier/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 /Users/Ayce/Desktop/htdocs/premier/index.php(118): Kohana_Request->execute()
#8 {main} in /Users/Ayce/Desktop/htdocs/premier/system/classes/Kohana/Validation.php:19