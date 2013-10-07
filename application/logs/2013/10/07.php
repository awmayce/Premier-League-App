<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2013-10-07 12:30:02 --- EMERGENCY: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH/views/template/navigation.php [ 1 ] in /Users/Ayce/Desktop/htdocs/premier/application/views/template/navigation.php:1
2013-10-07 12:30:02 --- DEBUG: #0 /Users/Ayce/Desktop/htdocs/premier/application/views/template/navigation.php(1): Kohana_Core::error_handler(8, 'Trying to get p...', '/Users/Ayce/Des...', 1, Array)
#1 /Users/Ayce/Desktop/htdocs/premier/system/classes/Kohana/View.php(61): include('/Users/Ayce/Des...')
#2 /Users/Ayce/Desktop/htdocs/premier/system/classes/Kohana/View.php(348): Kohana_View::capture('/Users/Ayce/Des...', Array)
#3 /Users/Ayce/Desktop/htdocs/premier/system/classes/Kohana/View.php(228): Kohana_View->render()
#4 /Users/Ayce/Desktop/htdocs/premier/application/views/template/main.php(16): Kohana_View->__toString()
#5 /Users/Ayce/Desktop/htdocs/premier/system/classes/Kohana/View.php(61): include('/Users/Ayce/Des...')
#6 /Users/Ayce/Desktop/htdocs/premier/system/classes/Kohana/View.php(348): Kohana_View::capture('/Users/Ayce/Des...', Array)
#7 /Users/Ayce/Desktop/htdocs/premier/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#8 /Users/Ayce/Desktop/htdocs/premier/application/classes/Controller/Layout.php(36): Kohana_Controller_Template->after()
#9 /Users/Ayce/Desktop/htdocs/premier/system/classes/Kohana/Controller.php(87): Controller_Layout->after()
#10 [internal function]: Kohana_Controller->execute()
#11 /Users/Ayce/Desktop/htdocs/premier/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#12 /Users/Ayce/Desktop/htdocs/premier/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#13 /Users/Ayce/Desktop/htdocs/premier/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#14 /Users/Ayce/Desktop/htdocs/premier/index.php(118): Kohana_Request->execute()
#15 {main} in /Users/Ayce/Desktop/htdocs/premier/application/views/template/navigation.php:1