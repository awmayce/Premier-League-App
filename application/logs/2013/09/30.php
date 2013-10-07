<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2013-09-30 08:57:11 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method Request::redirect() ~ APPPATH/classes/Controller/Admin.php [ 30 ] in file:line
2013-09-30 08:57:11 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-09-30 09:01:01 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method Controller_Admin::request() ~ APPPATH/classes/Controller/Admin.php [ 30 ] in file:line
2013-09-30 09:01:01 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-09-30 09:01:06 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method Controller_Admin::request() ~ APPPATH/classes/Controller/Admin.php [ 30 ] in file:line
2013-09-30 09:01:06 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-09-30 09:01:49 --- EMERGENCY: ErrorException [ 1 ]: Method Request::__toString() must not throw an exception ~ SYSPATH/classes/Kohana/Controller.php [ 0 ] in file:line
2013-09-30 09:01:49 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-09-30 10:12:31 --- EMERGENCY: ErrorException [ 1 ]: Method Request::__toString() must not throw an exception ~ SYSPATH/classes/Kohana/Controller.php [ 0 ] in file:line
2013-09-30 10:12:31 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-09-30 10:13:32 --- EMERGENCY: ErrorException [ 1 ]: Method Request::__toString() must not throw an exception ~ SYSPATH/classes/Kohana/Controller.php [ 0 ] in file:line
2013-09-30 10:13:32 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-09-30 10:26:30 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: title ~ APPPATH/views/template/main.php [ 5 ] in /Users/Ayce/Desktop/htdocs/premier/application/views/template/main.php:5
2013-09-30 10:26:30 --- DEBUG: #0 /Users/Ayce/Desktop/htdocs/premier/application/views/template/main.php(5): Kohana_Core::error_handler(8, 'Undefined varia...', '/Users/Ayce/Des...', 5, Array)
#1 /Users/Ayce/Desktop/htdocs/premier/system/classes/Kohana/View.php(61): include('/Users/Ayce/Des...')
#2 /Users/Ayce/Desktop/htdocs/premier/system/classes/Kohana/View.php(348): Kohana_View::capture('/Users/Ayce/Des...', Array)
#3 /Users/Ayce/Desktop/htdocs/premier/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#4 /Users/Ayce/Desktop/htdocs/premier/system/classes/Kohana/Controller.php(87): Kohana_Controller_Template->after()
#5 [internal function]: Kohana_Controller->execute()
#6 /Users/Ayce/Desktop/htdocs/premier/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin))
#7 /Users/Ayce/Desktop/htdocs/premier/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /Users/Ayce/Desktop/htdocs/premier/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 /Users/Ayce/Desktop/htdocs/premier/index.php(118): Kohana_Request->execute()
#10 {main} in /Users/Ayce/Desktop/htdocs/premier/application/views/template/main.php:5
2013-09-30 10:27:30 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: title ~ APPPATH/views/template/main.php [ 5 ] in /Users/Ayce/Desktop/htdocs/premier/application/views/template/main.php:5
2013-09-30 10:27:30 --- DEBUG: #0 /Users/Ayce/Desktop/htdocs/premier/application/views/template/main.php(5): Kohana_Core::error_handler(8, 'Undefined varia...', '/Users/Ayce/Des...', 5, Array)
#1 /Users/Ayce/Desktop/htdocs/premier/system/classes/Kohana/View.php(61): include('/Users/Ayce/Des...')
#2 /Users/Ayce/Desktop/htdocs/premier/system/classes/Kohana/View.php(348): Kohana_View::capture('/Users/Ayce/Des...', Array)
#3 /Users/Ayce/Desktop/htdocs/premier/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#4 /Users/Ayce/Desktop/htdocs/premier/system/classes/Kohana/Controller.php(87): Kohana_Controller_Template->after()
#5 [internal function]: Kohana_Controller->execute()
#6 /Users/Ayce/Desktop/htdocs/premier/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin))
#7 /Users/Ayce/Desktop/htdocs/premier/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /Users/Ayce/Desktop/htdocs/premier/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 /Users/Ayce/Desktop/htdocs/premier/index.php(118): Kohana_Request->execute()
#10 {main} in /Users/Ayce/Desktop/htdocs/premier/application/views/template/main.php:5
2013-09-30 10:27:42 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: title ~ APPPATH/views/template/main.php [ 5 ] in /Users/Ayce/Desktop/htdocs/premier/application/views/template/main.php:5
2013-09-30 10:27:42 --- DEBUG: #0 /Users/Ayce/Desktop/htdocs/premier/application/views/template/main.php(5): Kohana_Core::error_handler(8, 'Undefined varia...', '/Users/Ayce/Des...', 5, Array)
#1 /Users/Ayce/Desktop/htdocs/premier/system/classes/Kohana/View.php(61): include('/Users/Ayce/Des...')
#2 /Users/Ayce/Desktop/htdocs/premier/system/classes/Kohana/View.php(348): Kohana_View::capture('/Users/Ayce/Des...', Array)
#3 /Users/Ayce/Desktop/htdocs/premier/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#4 /Users/Ayce/Desktop/htdocs/premier/system/classes/Kohana/Controller.php(87): Kohana_Controller_Template->after()
#5 [internal function]: Kohana_Controller->execute()
#6 /Users/Ayce/Desktop/htdocs/premier/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin))
#7 /Users/Ayce/Desktop/htdocs/premier/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /Users/Ayce/Desktop/htdocs/premier/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 /Users/Ayce/Desktop/htdocs/premier/index.php(118): Kohana_Request->execute()
#10 {main} in /Users/Ayce/Desktop/htdocs/premier/application/views/template/main.php:5
2013-09-30 10:31:36 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: title ~ APPPATH/views/template/main.php [ 5 ] in /Users/Ayce/Desktop/htdocs/premier/application/views/template/main.php:5
2013-09-30 10:31:36 --- DEBUG: #0 /Users/Ayce/Desktop/htdocs/premier/application/views/template/main.php(5): Kohana_Core::error_handler(8, 'Undefined varia...', '/Users/Ayce/Des...', 5, Array)
#1 /Users/Ayce/Desktop/htdocs/premier/system/classes/Kohana/View.php(61): include('/Users/Ayce/Des...')
#2 /Users/Ayce/Desktop/htdocs/premier/system/classes/Kohana/View.php(348): Kohana_View::capture('/Users/Ayce/Des...', Array)
#3 /Users/Ayce/Desktop/htdocs/premier/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#4 /Users/Ayce/Desktop/htdocs/premier/system/classes/Kohana/Controller.php(87): Kohana_Controller_Template->after()
#5 [internal function]: Kohana_Controller->execute()
#6 /Users/Ayce/Desktop/htdocs/premier/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin))
#7 /Users/Ayce/Desktop/htdocs/premier/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /Users/Ayce/Desktop/htdocs/premier/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 /Users/Ayce/Desktop/htdocs/premier/index.php(118): Kohana_Request->execute()
#10 {main} in /Users/Ayce/Desktop/htdocs/premier/application/views/template/main.php:5
2013-09-30 10:32:03 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: content ~ APPPATH/views/template/main.php [ 30 ] in /Users/Ayce/Desktop/htdocs/premier/application/views/template/main.php:30
2013-09-30 10:32:03 --- DEBUG: #0 /Users/Ayce/Desktop/htdocs/premier/application/views/template/main.php(30): Kohana_Core::error_handler(8, 'Undefined varia...', '/Users/Ayce/Des...', 30, Array)
#1 /Users/Ayce/Desktop/htdocs/premier/system/classes/Kohana/View.php(61): include('/Users/Ayce/Des...')
#2 /Users/Ayce/Desktop/htdocs/premier/system/classes/Kohana/View.php(348): Kohana_View::capture('/Users/Ayce/Des...', Array)
#3 /Users/Ayce/Desktop/htdocs/premier/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#4 /Users/Ayce/Desktop/htdocs/premier/system/classes/Kohana/Controller.php(87): Kohana_Controller_Template->after()
#5 [internal function]: Kohana_Controller->execute()
#6 /Users/Ayce/Desktop/htdocs/premier/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin))
#7 /Users/Ayce/Desktop/htdocs/premier/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /Users/Ayce/Desktop/htdocs/premier/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 /Users/Ayce/Desktop/htdocs/premier/index.php(118): Kohana_Request->execute()
#10 {main} in /Users/Ayce/Desktop/htdocs/premier/application/views/template/main.php:30
2013-09-30 13:16:15 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: id ~ APPPATH/views/admin.php [ 51 ] in /Users/Ayce/Desktop/htdocs/premier/application/views/admin.php:51
2013-09-30 13:16:15 --- DEBUG: #0 /Users/Ayce/Desktop/htdocs/premier/application/views/admin.php(51): Kohana_Core::error_handler(8, 'Undefined varia...', '/Users/Ayce/Des...', 51, Array)
#1 /Users/Ayce/Desktop/htdocs/premier/system/classes/Kohana/View.php(61): include('/Users/Ayce/Des...')
#2 /Users/Ayce/Desktop/htdocs/premier/system/classes/Kohana/View.php(348): Kohana_View::capture('/Users/Ayce/Des...', Array)
#3 /Users/Ayce/Desktop/htdocs/premier/system/classes/Kohana/View.php(228): Kohana_View->render()
#4 /Users/Ayce/Desktop/htdocs/premier/application/views/template/main.php(39): Kohana_View->__toString()
#5 /Users/Ayce/Desktop/htdocs/premier/system/classes/Kohana/View.php(61): include('/Users/Ayce/Des...')
#6 /Users/Ayce/Desktop/htdocs/premier/system/classes/Kohana/View.php(348): Kohana_View::capture('/Users/Ayce/Des...', Array)
#7 /Users/Ayce/Desktop/htdocs/premier/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#8 /Users/Ayce/Desktop/htdocs/premier/system/classes/Kohana/Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 /Users/Ayce/Desktop/htdocs/premier/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin))
#11 /Users/Ayce/Desktop/htdocs/premier/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 /Users/Ayce/Desktop/htdocs/premier/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#13 /Users/Ayce/Desktop/htdocs/premier/index.php(118): Kohana_Request->execute()
#14 {main} in /Users/Ayce/Desktop/htdocs/premier/application/views/admin.php:51
2013-09-30 13:17:57 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: id ~ APPPATH/views/admin.php [ 51 ] in /Users/Ayce/Desktop/htdocs/premier/application/views/admin.php:51
2013-09-30 13:17:57 --- DEBUG: #0 /Users/Ayce/Desktop/htdocs/premier/application/views/admin.php(51): Kohana_Core::error_handler(8, 'Undefined varia...', '/Users/Ayce/Des...', 51, Array)
#1 /Users/Ayce/Desktop/htdocs/premier/system/classes/Kohana/View.php(61): include('/Users/Ayce/Des...')
#2 /Users/Ayce/Desktop/htdocs/premier/system/classes/Kohana/View.php(348): Kohana_View::capture('/Users/Ayce/Des...', Array)
#3 /Users/Ayce/Desktop/htdocs/premier/system/classes/Kohana/View.php(228): Kohana_View->render()
#4 /Users/Ayce/Desktop/htdocs/premier/application/views/template/main.php(39): Kohana_View->__toString()
#5 /Users/Ayce/Desktop/htdocs/premier/system/classes/Kohana/View.php(61): include('/Users/Ayce/Des...')
#6 /Users/Ayce/Desktop/htdocs/premier/system/classes/Kohana/View.php(348): Kohana_View::capture('/Users/Ayce/Des...', Array)
#7 /Users/Ayce/Desktop/htdocs/premier/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#8 /Users/Ayce/Desktop/htdocs/premier/system/classes/Kohana/Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 /Users/Ayce/Desktop/htdocs/premier/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin))
#11 /Users/Ayce/Desktop/htdocs/premier/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 /Users/Ayce/Desktop/htdocs/premier/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#13 /Users/Ayce/Desktop/htdocs/premier/index.php(118): Kohana_Request->execute()
#14 {main} in /Users/Ayce/Desktop/htdocs/premier/application/views/admin.php:51
2013-09-30 13:18:44 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: id ~ APPPATH/views/admin.php [ 51 ] in /Users/Ayce/Desktop/htdocs/premier/application/views/admin.php:51
2013-09-30 13:18:44 --- DEBUG: #0 /Users/Ayce/Desktop/htdocs/premier/application/views/admin.php(51): Kohana_Core::error_handler(8, 'Undefined varia...', '/Users/Ayce/Des...', 51, Array)
#1 /Users/Ayce/Desktop/htdocs/premier/system/classes/Kohana/View.php(61): include('/Users/Ayce/Des...')
#2 /Users/Ayce/Desktop/htdocs/premier/system/classes/Kohana/View.php(348): Kohana_View::capture('/Users/Ayce/Des...', Array)
#3 /Users/Ayce/Desktop/htdocs/premier/system/classes/Kohana/View.php(228): Kohana_View->render()
#4 /Users/Ayce/Desktop/htdocs/premier/application/views/template/main.php(39): Kohana_View->__toString()
#5 /Users/Ayce/Desktop/htdocs/premier/system/classes/Kohana/View.php(61): include('/Users/Ayce/Des...')
#6 /Users/Ayce/Desktop/htdocs/premier/system/classes/Kohana/View.php(348): Kohana_View::capture('/Users/Ayce/Des...', Array)
#7 /Users/Ayce/Desktop/htdocs/premier/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#8 /Users/Ayce/Desktop/htdocs/premier/system/classes/Kohana/Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 /Users/Ayce/Desktop/htdocs/premier/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin))
#11 /Users/Ayce/Desktop/htdocs/premier/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 /Users/Ayce/Desktop/htdocs/premier/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#13 /Users/Ayce/Desktop/htdocs/premier/index.php(118): Kohana_Request->execute()
#14 {main} in /Users/Ayce/Desktop/htdocs/premier/application/views/admin.php:51
2013-09-30 13:21:14 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: id ~ APPPATH/views/admin.php [ 54 ] in /Users/Ayce/Desktop/htdocs/premier/application/views/admin.php:54
2013-09-30 13:21:14 --- DEBUG: #0 /Users/Ayce/Desktop/htdocs/premier/application/views/admin.php(54): Kohana_Core::error_handler(8, 'Undefined varia...', '/Users/Ayce/Des...', 54, Array)
#1 /Users/Ayce/Desktop/htdocs/premier/system/classes/Kohana/View.php(61): include('/Users/Ayce/Des...')
#2 /Users/Ayce/Desktop/htdocs/premier/system/classes/Kohana/View.php(348): Kohana_View::capture('/Users/Ayce/Des...', Array)
#3 /Users/Ayce/Desktop/htdocs/premier/system/classes/Kohana/View.php(228): Kohana_View->render()
#4 /Users/Ayce/Desktop/htdocs/premier/application/views/template/main.php(39): Kohana_View->__toString()
#5 /Users/Ayce/Desktop/htdocs/premier/system/classes/Kohana/View.php(61): include('/Users/Ayce/Des...')
#6 /Users/Ayce/Desktop/htdocs/premier/system/classes/Kohana/View.php(348): Kohana_View::capture('/Users/Ayce/Des...', Array)
#7 /Users/Ayce/Desktop/htdocs/premier/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#8 /Users/Ayce/Desktop/htdocs/premier/system/classes/Kohana/Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 /Users/Ayce/Desktop/htdocs/premier/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin))
#11 /Users/Ayce/Desktop/htdocs/premier/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 /Users/Ayce/Desktop/htdocs/premier/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#13 /Users/Ayce/Desktop/htdocs/premier/index.php(118): Kohana_Request->execute()
#14 {main} in /Users/Ayce/Desktop/htdocs/premier/application/views/admin.php:54
2013-09-30 13:40:17 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: title ~ APPPATH/views/template/main.php [ 5 ] in /Users/Ayce/Desktop/htdocs/premier/application/views/template/main.php:5
2013-09-30 13:40:17 --- DEBUG: #0 /Users/Ayce/Desktop/htdocs/premier/application/views/template/main.php(5): Kohana_Core::error_handler(8, 'Undefined varia...', '/Users/Ayce/Des...', 5, Array)
#1 /Users/Ayce/Desktop/htdocs/premier/system/classes/Kohana/View.php(61): include('/Users/Ayce/Des...')
#2 /Users/Ayce/Desktop/htdocs/premier/system/classes/Kohana/View.php(348): Kohana_View::capture('/Users/Ayce/Des...', Array)
#3 /Users/Ayce/Desktop/htdocs/premier/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#4 /Users/Ayce/Desktop/htdocs/premier/system/classes/Kohana/Controller.php(87): Kohana_Controller_Template->after()
#5 [internal function]: Kohana_Controller->execute()
#6 /Users/Ayce/Desktop/htdocs/premier/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin))
#7 /Users/Ayce/Desktop/htdocs/premier/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /Users/Ayce/Desktop/htdocs/premier/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 /Users/Ayce/Desktop/htdocs/premier/index.php(118): Kohana_Request->execute()
#10 {main} in /Users/Ayce/Desktop/htdocs/premier/application/views/template/main.php:5
2013-09-30 14:59:28 --- EMERGENCY: ErrorException [ 1 ]: Function name must be a string ~ APPPATH/classes/Controller/Admin.php [ 49 ] in file:line
2013-09-30 14:59:28 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-09-30 15:11:11 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected ';' ~ APPPATH/classes/Controller/Admin.php [ 49 ] in file:line
2013-09-30 15:11:11 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-09-30 15:12:34 --- EMERGENCY: ErrorException [ 8 ]: Undefined index: name ~ APPPATH/classes/Controller/Admin.php [ 49 ] in /Users/Ayce/Desktop/htdocs/premier/application/classes/Controller/Admin.php:49
2013-09-30 15:12:34 --- DEBUG: #0 /Users/Ayce/Desktop/htdocs/premier/application/classes/Controller/Admin.php(49): Kohana_Core::error_handler(8, 'Undefined index...', '/Users/Ayce/Des...', 49, Array)
#1 /Users/Ayce/Desktop/htdocs/premier/system/classes/Kohana/Controller.php(84): Controller_Admin->action_add()
#2 [internal function]: Kohana_Controller->execute()
#3 /Users/Ayce/Desktop/htdocs/premier/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin))
#4 /Users/Ayce/Desktop/htdocs/premier/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /Users/Ayce/Desktop/htdocs/premier/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /Users/Ayce/Desktop/htdocs/premier/index.php(118): Kohana_Request->execute()
#7 {main} in /Users/Ayce/Desktop/htdocs/premier/application/classes/Controller/Admin.php:49
2013-09-30 15:15:16 --- EMERGENCY: ErrorException [ 1 ]: Function name must be a string ~ APPPATH/classes/Controller/Admin.php [ 49 ] in file:line
2013-09-30 15:15:16 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-09-30 15:16:36 --- EMERGENCY: ErrorException [ 1 ]: Function name must be a string ~ APPPATH/classes/Controller/Admin.php [ 49 ] in file:line
2013-09-30 15:16:36 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-09-30 15:54:31 --- EMERGENCY: ErrorException [ 2 ]: preg_replace(): Empty regular expression ~ APPPATH/classes/Controller/Admin.php [ 48 ] in file:line
2013-09-30 15:54:31 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'preg_replace():...', '/Users/Ayce/Des...', 48, Array)
#1 /Users/Ayce/Desktop/htdocs/premier/application/classes/Controller/Admin.php(48): preg_replace(' ', '_', 'Arsanal')
#2 /Users/Ayce/Desktop/htdocs/premier/system/classes/Kohana/Controller.php(84): Controller_Admin->action_add()
#3 [internal function]: Kohana_Controller->execute()
#4 /Users/Ayce/Desktop/htdocs/premier/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin))
#5 /Users/Ayce/Desktop/htdocs/premier/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /Users/Ayce/Desktop/htdocs/premier/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 /Users/Ayce/Desktop/htdocs/premier/index.php(118): Kohana_Request->execute()
#8 {main} in file:line
2013-09-30 15:54:55 --- EMERGENCY: ErrorException [ 2 ]: preg_replace(): Empty regular expression ~ APPPATH/classes/Controller/Admin.php [ 48 ] in file:line
2013-09-30 15:54:55 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'preg_replace():...', '/Users/Ayce/Des...', 48, Array)
#1 /Users/Ayce/Desktop/htdocs/premier/application/classes/Controller/Admin.php(48): preg_replace(' ', '_', 'Arsanal')
#2 /Users/Ayce/Desktop/htdocs/premier/system/classes/Kohana/Controller.php(84): Controller_Admin->action_add()
#3 [internal function]: Kohana_Controller->execute()
#4 /Users/Ayce/Desktop/htdocs/premier/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin))
#5 /Users/Ayce/Desktop/htdocs/premier/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /Users/Ayce/Desktop/htdocs/premier/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 /Users/Ayce/Desktop/htdocs/premier/index.php(118): Kohana_Request->execute()
#8 {main} in file:line
2013-09-30 15:55:35 --- EMERGENCY: ErrorException [ 2 ]: preg_replace(): Empty regular expression ~ APPPATH/classes/Controller/Admin.php [ 48 ] in file:line
2013-09-30 15:55:35 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'preg_replace():...', '/Users/Ayce/Des...', 48, Array)
#1 /Users/Ayce/Desktop/htdocs/premier/application/classes/Controller/Admin.php(48): preg_replace(' ', '_', 'Arsanal number')
#2 /Users/Ayce/Desktop/htdocs/premier/system/classes/Kohana/Controller.php(84): Controller_Admin->action_add()
#3 [internal function]: Kohana_Controller->execute()
#4 /Users/Ayce/Desktop/htdocs/premier/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin))
#5 /Users/Ayce/Desktop/htdocs/premier/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /Users/Ayce/Desktop/htdocs/premier/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 /Users/Ayce/Desktop/htdocs/premier/index.php(118): Kohana_Request->execute()
#8 {main} in file:line
2013-09-30 15:56:08 --- EMERGENCY: ErrorException [ 2 ]: preg_replace(): Empty regular expression ~ APPPATH/classes/Controller/Admin.php [ 48 ] in file:line
2013-09-30 15:56:08 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'preg_replace():...', '/Users/Ayce/Des...', 48, Array)
#1 /Users/Ayce/Desktop/htdocs/premier/application/classes/Controller/Admin.php(48): preg_replace(' ', '_', 'Arsanal number')
#2 /Users/Ayce/Desktop/htdocs/premier/system/classes/Kohana/Controller.php(84): Controller_Admin->action_add()
#3 [internal function]: Kohana_Controller->execute()
#4 /Users/Ayce/Desktop/htdocs/premier/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin))
#5 /Users/Ayce/Desktop/htdocs/premier/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /Users/Ayce/Desktop/htdocs/premier/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 /Users/Ayce/Desktop/htdocs/premier/index.php(118): Kohana_Request->execute()
#8 {main} in file:line
2013-09-30 16:00:40 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected '$add' (T_VARIABLE) ~ APPPATH/classes/Controller/Admin.php [ 55 ] in file:line
2013-09-30 16:00:40 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-09-30 16:01:07 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: title ~ APPPATH/views/template/main.php [ 5 ] in /Users/Ayce/Desktop/htdocs/premier/application/views/template/main.php:5
2013-09-30 16:01:07 --- DEBUG: #0 /Users/Ayce/Desktop/htdocs/premier/application/views/template/main.php(5): Kohana_Core::error_handler(8, 'Undefined varia...', '/Users/Ayce/Des...', 5, Array)
#1 /Users/Ayce/Desktop/htdocs/premier/system/classes/Kohana/View.php(61): include('/Users/Ayce/Des...')
#2 /Users/Ayce/Desktop/htdocs/premier/system/classes/Kohana/View.php(348): Kohana_View::capture('/Users/Ayce/Des...', Array)
#3 /Users/Ayce/Desktop/htdocs/premier/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#4 /Users/Ayce/Desktop/htdocs/premier/system/classes/Kohana/Controller.php(87): Kohana_Controller_Template->after()
#5 [internal function]: Kohana_Controller->execute()
#6 /Users/Ayce/Desktop/htdocs/premier/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin))
#7 /Users/Ayce/Desktop/htdocs/premier/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /Users/Ayce/Desktop/htdocs/premier/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 /Users/Ayce/Desktop/htdocs/premier/index.php(118): Kohana_Request->execute()
#10 {main} in /Users/Ayce/Desktop/htdocs/premier/application/views/template/main.php:5
2013-09-30 16:01:14 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: title ~ APPPATH/views/template/main.php [ 5 ] in /Users/Ayce/Desktop/htdocs/premier/application/views/template/main.php:5
2013-09-30 16:01:14 --- DEBUG: #0 /Users/Ayce/Desktop/htdocs/premier/application/views/template/main.php(5): Kohana_Core::error_handler(8, 'Undefined varia...', '/Users/Ayce/Des...', 5, Array)
#1 /Users/Ayce/Desktop/htdocs/premier/system/classes/Kohana/View.php(61): include('/Users/Ayce/Des...')
#2 /Users/Ayce/Desktop/htdocs/premier/system/classes/Kohana/View.php(348): Kohana_View::capture('/Users/Ayce/Des...', Array)
#3 /Users/Ayce/Desktop/htdocs/premier/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#4 /Users/Ayce/Desktop/htdocs/premier/system/classes/Kohana/Controller.php(87): Kohana_Controller_Template->after()
#5 [internal function]: Kohana_Controller->execute()
#6 /Users/Ayce/Desktop/htdocs/premier/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin))
#7 /Users/Ayce/Desktop/htdocs/premier/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /Users/Ayce/Desktop/htdocs/premier/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 /Users/Ayce/Desktop/htdocs/premier/index.php(118): Kohana_Request->execute()
#10 {main} in /Users/Ayce/Desktop/htdocs/premier/application/views/template/main.php:5
2013-09-30 16:02:13 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: title ~ APPPATH/views/template/main.php [ 5 ] in /Users/Ayce/Desktop/htdocs/premier/application/views/template/main.php:5
2013-09-30 16:02:13 --- DEBUG: #0 /Users/Ayce/Desktop/htdocs/premier/application/views/template/main.php(5): Kohana_Core::error_handler(8, 'Undefined varia...', '/Users/Ayce/Des...', 5, Array)
#1 /Users/Ayce/Desktop/htdocs/premier/system/classes/Kohana/View.php(61): include('/Users/Ayce/Des...')
#2 /Users/Ayce/Desktop/htdocs/premier/system/classes/Kohana/View.php(348): Kohana_View::capture('/Users/Ayce/Des...', Array)
#3 /Users/Ayce/Desktop/htdocs/premier/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#4 /Users/Ayce/Desktop/htdocs/premier/system/classes/Kohana/Controller.php(87): Kohana_Controller_Template->after()
#5 [internal function]: Kohana_Controller->execute()
#6 /Users/Ayce/Desktop/htdocs/premier/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin))
#7 /Users/Ayce/Desktop/htdocs/premier/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /Users/Ayce/Desktop/htdocs/premier/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 /Users/Ayce/Desktop/htdocs/premier/index.php(118): Kohana_Request->execute()
#10 {main} in /Users/Ayce/Desktop/htdocs/premier/application/views/template/main.php:5
2013-09-30 16:17:34 --- EMERGENCY: View_Exception [ 0 ]: The requested view template could not be found ~ SYSPATH/classes/Kohana/View.php [ 257 ] in /Users/Ayce/Desktop/htdocs/premier/system/classes/Kohana/View.php:137
2013-09-30 16:17:34 --- DEBUG: #0 /Users/Ayce/Desktop/htdocs/premier/system/classes/Kohana/View.php(137): Kohana_View->set_filename('template')
#1 /Users/Ayce/Desktop/htdocs/premier/system/classes/Kohana/View.php(30): Kohana_View->__construct('template', NULL)
#2 /Users/Ayce/Desktop/htdocs/premier/system/classes/Kohana/Controller/Template.php(33): Kohana_View::factory('template')
#3 /Users/Ayce/Desktop/htdocs/premier/system/classes/Kohana/Controller.php(69): Kohana_Controller_Template->before()
#4 [internal function]: Kohana_Controller->execute()
#5 /Users/Ayce/Desktop/htdocs/premier/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin))
#6 /Users/Ayce/Desktop/htdocs/premier/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /Users/Ayce/Desktop/htdocs/premier/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 /Users/Ayce/Desktop/htdocs/premier/index.php(118): Kohana_Request->execute()
#9 {main} in /Users/Ayce/Desktop/htdocs/premier/system/classes/Kohana/View.php:137
2013-09-30 16:29:07 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected ''DESC'' (T_CONSTANT_ENCAPSED_STRING) ~ APPPATH/classes/Controller/Table.php [ 9 ] in file:line
2013-09-30 16:29:07 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-09-30 16:29:22 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected ''DESC'' (T_CONSTANT_ENCAPSED_STRING) ~ APPPATH/classes/Controller/Table.php [ 9 ] in file:line
2013-09-30 16:29:22 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-09-30 16:39:38 --- EMERGENCY: View_Exception [ 0 ]: The requested view template/site could not be found ~ SYSPATH/classes/Kohana/View.php [ 257 ] in /Users/Ayce/Desktop/htdocs/premier/system/classes/Kohana/View.php:137
2013-09-30 16:39:38 --- DEBUG: #0 /Users/Ayce/Desktop/htdocs/premier/system/classes/Kohana/View.php(137): Kohana_View->set_filename('template/site')
#1 /Users/Ayce/Desktop/htdocs/premier/system/classes/Kohana/View.php(30): Kohana_View->__construct('template/site', NULL)
#2 /Users/Ayce/Desktop/htdocs/premier/system/classes/Kohana/Controller/Template.php(33): Kohana_View::factory('template/site')
#3 /Users/Ayce/Desktop/htdocs/premier/system/classes/Kohana/Controller.php(69): Kohana_Controller_Template->before()
#4 [internal function]: Kohana_Controller->execute()
#5 /Users/Ayce/Desktop/htdocs/premier/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#6 /Users/Ayce/Desktop/htdocs/premier/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /Users/Ayce/Desktop/htdocs/premier/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 /Users/Ayce/Desktop/htdocs/premier/index.php(118): Kohana_Request->execute()
#9 {main} in /Users/Ayce/Desktop/htdocs/premier/system/classes/Kohana/View.php:137
2013-09-30 17:22:00 --- EMERGENCY: View_Exception [ 0 ]: The requested view auth/register could not be found ~ SYSPATH/classes/Kohana/View.php [ 257 ] in /Users/Ayce/Desktop/htdocs/premier/system/classes/Kohana/View.php:137
2013-09-30 17:22:00 --- DEBUG: #0 /Users/Ayce/Desktop/htdocs/premier/system/classes/Kohana/View.php(137): Kohana_View->set_filename('auth/register')
#1 /Users/Ayce/Desktop/htdocs/premier/system/classes/Kohana/View.php(30): Kohana_View->__construct('auth/register', NULL)
#2 /Users/Ayce/Desktop/htdocs/premier/application/classes/Controller/Register.php(11): Kohana_View::factory('auth/register')
#3 /Users/Ayce/Desktop/htdocs/premier/system/classes/Kohana/Controller.php(84): Controller_Register->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 /Users/Ayce/Desktop/htdocs/premier/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Register))
#6 /Users/Ayce/Desktop/htdocs/premier/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /Users/Ayce/Desktop/htdocs/premier/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 /Users/Ayce/Desktop/htdocs/premier/index.php(118): Kohana_Request->execute()
#9 {main} in /Users/Ayce/Desktop/htdocs/premier/system/classes/Kohana/View.php:137
2013-09-30 18:40:48 --- EMERGENCY: ErrorException [ 8 ]: Use of undefined constant ASC - assumed 'ASC' ~ APPPATH/classes/Controller/Admin.php [ 9 ] in /Users/Ayce/Desktop/htdocs/premier/application/classes/Controller/Admin.php:9
2013-09-30 18:40:48 --- DEBUG: #0 /Users/Ayce/Desktop/htdocs/premier/application/classes/Controller/Admin.php(9): Kohana_Core::error_handler(8, 'Use of undefine...', '/Users/Ayce/Des...', 9, Array)
#1 /Users/Ayce/Desktop/htdocs/premier/system/classes/Kohana/Controller.php(84): Controller_Admin->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 /Users/Ayce/Desktop/htdocs/premier/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin))
#4 /Users/Ayce/Desktop/htdocs/premier/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /Users/Ayce/Desktop/htdocs/premier/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /Users/Ayce/Desktop/htdocs/premier/index.php(118): Kohana_Request->execute()
#7 {main} in /Users/Ayce/Desktop/htdocs/premier/application/classes/Controller/Admin.php:9
2013-09-30 18:42:01 --- EMERGENCY: ErrorException [ 1 ]: Function name must be a string ~ APPPATH/classes/Controller/Register.php [ 17 ] in file:line
2013-09-30 18:42:01 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-09-30 18:42:15 --- EMERGENCY: ErrorException [ 8 ]: Undefined index: username ~ APPPATH/classes/Controller/Register.php [ 17 ] in /Users/Ayce/Desktop/htdocs/premier/application/classes/Controller/Register.php:17
2013-09-30 18:42:15 --- DEBUG: #0 /Users/Ayce/Desktop/htdocs/premier/application/classes/Controller/Register.php(17): Kohana_Core::error_handler(8, 'Undefined index...', '/Users/Ayce/Des...', 17, Array)
#1 /Users/Ayce/Desktop/htdocs/premier/system/classes/Kohana/Controller.php(84): Controller_Register->action_add()
#2 [internal function]: Kohana_Controller->execute()
#3 /Users/Ayce/Desktop/htdocs/premier/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Register))
#4 /Users/Ayce/Desktop/htdocs/premier/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /Users/Ayce/Desktop/htdocs/premier/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /Users/Ayce/Desktop/htdocs/premier/index.php(118): Kohana_Request->execute()
#7 {main} in /Users/Ayce/Desktop/htdocs/premier/application/classes/Controller/Register.php:17
2013-09-30 18:50:25 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected 'die' (T_EXIT) ~ APPPATH/classes/Controller/Register.php [ 22 ] in file:line
2013-09-30 18:50:25 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-09-30 18:51:40 --- EMERGENCY: ErrorException [ 1 ]: Class 'Model_users' not found ~ MODPATH/orm/classes/Kohana/ORM.php [ 46 ] in file:line
2013-09-30 18:51:40 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-09-30 18:53:17 --- EMERGENCY: ErrorException [ 1 ]: Class 'Modal_Auth_User' not found ~ APPPATH/classes/Model/users.php [ 3 ] in file:line
2013-09-30 18:53:17 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-09-30 19:03:09 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected '$pass' (T_VARIABLE) ~ APPPATH/classes/Controller/Register.php [ 16 ] in file:line
2013-09-30 19:03:09 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-09-30 19:03:34 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected '$pass' (T_VARIABLE) ~ APPPATH/classes/Controller/Register.php [ 16 ] in file:line
2013-09-30 19:03:34 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-09-30 19:04:07 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected '$pass' (T_VARIABLE) ~ APPPATH/classes/Controller/Register.php [ 16 ] in file:line
2013-09-30 19:04:07 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-09-30 19:04:26 --- EMERGENCY: ErrorException [ 2 ]: Missing argument 2 for Kohana_Arr::get(), called in /Users/Ayce/Desktop/htdocs/premier/application/classes/Controller/Register.php on line 15 and defined ~ SYSPATH/classes/Kohana/Arr.php [ 280 ] in /Users/Ayce/Desktop/htdocs/premier/system/classes/Kohana/Arr.php:280
2013-09-30 19:04:26 --- DEBUG: #0 /Users/Ayce/Desktop/htdocs/premier/system/classes/Kohana/Arr.php(280): Kohana_Core::error_handler(2, 'Missing argumen...', '/Users/Ayce/Des...', 280, Array)
#1 /Users/Ayce/Desktop/htdocs/premier/application/classes/Controller/Register.php(15): Kohana_Arr::get('admin')
#2 /Users/Ayce/Desktop/htdocs/premier/system/classes/Kohana/Controller.php(84): Controller_Register->action_add()
#3 [internal function]: Kohana_Controller->execute()
#4 /Users/Ayce/Desktop/htdocs/premier/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Register))
#5 /Users/Ayce/Desktop/htdocs/premier/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /Users/Ayce/Desktop/htdocs/premier/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 /Users/Ayce/Desktop/htdocs/premier/index.php(118): Kohana_Request->execute()
#8 {main} in /Users/Ayce/Desktop/htdocs/premier/system/classes/Kohana/Arr.php:280
2013-09-30 19:04:52 --- EMERGENCY: ErrorException [ 8 ]: Use of undefined constant ‘username’ - assumed '‘username’' ~ APPPATH/classes/Controller/Register.php [ 15 ] in /Users/Ayce/Desktop/htdocs/premier/application/classes/Controller/Register.php:15
2013-09-30 19:04:52 --- DEBUG: #0 /Users/Ayce/Desktop/htdocs/premier/application/classes/Controller/Register.php(15): Kohana_Core::error_handler(8, 'Use of undefine...', '/Users/Ayce/Des...', 15, Array)
#1 /Users/Ayce/Desktop/htdocs/premier/system/classes/Kohana/Controller.php(84): Controller_Register->action_add()
#2 [internal function]: Kohana_Controller->execute()
#3 /Users/Ayce/Desktop/htdocs/premier/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Register))
#4 /Users/Ayce/Desktop/htdocs/premier/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /Users/Ayce/Desktop/htdocs/premier/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /Users/Ayce/Desktop/htdocs/premier/index.php(118): Kohana_Request->execute()
#7 {main} in /Users/Ayce/Desktop/htdocs/premier/application/classes/Controller/Register.php:15
2013-09-30 19:05:12 --- EMERGENCY: ErrorException [ 8 ]: Use of undefined constant ‘user’ - assumed '‘user’' ~ APPPATH/classes/Controller/Register.php [ 19 ] in /Users/Ayce/Desktop/htdocs/premier/application/classes/Controller/Register.php:19
2013-09-30 19:05:12 --- DEBUG: #0 /Users/Ayce/Desktop/htdocs/premier/application/classes/Controller/Register.php(19): Kohana_Core::error_handler(8, 'Use of undefine...', '/Users/Ayce/Des...', 19, Array)
#1 /Users/Ayce/Desktop/htdocs/premier/system/classes/Kohana/Controller.php(84): Controller_Register->action_add()
#2 [internal function]: Kohana_Controller->execute()
#3 /Users/Ayce/Desktop/htdocs/premier/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Register))
#4 /Users/Ayce/Desktop/htdocs/premier/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /Users/Ayce/Desktop/htdocs/premier/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /Users/Ayce/Desktop/htdocs/premier/index.php(118): Kohana_Request->execute()
#7 {main} in /Users/Ayce/Desktop/htdocs/premier/application/classes/Controller/Register.php:19
2013-09-30 19:05:28 --- EMERGENCY: ErrorException [ 1 ]: Call to a member function save() on a non-object ~ APPPATH/classes/Controller/Register.php [ 26 ] in file:line
2013-09-30 19:05:28 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-09-30 19:05:39 --- EMERGENCY: ORM_Validation_Exception [ 0 ]: Failed to validate array ~ MODPATH/orm/classes/Kohana/ORM.php [ 1275 ] in /Users/Ayce/Desktop/htdocs/premier/modules/orm/classes/Kohana/ORM.php:1302
2013-09-30 19:05:39 --- DEBUG: #0 /Users/Ayce/Desktop/htdocs/premier/modules/orm/classes/Kohana/ORM.php(1302): Kohana_ORM->check(NULL)
#1 /Users/Ayce/Desktop/htdocs/premier/modules/orm/classes/Kohana/ORM.php(1421): Kohana_ORM->create(NULL)
#2 /Users/Ayce/Desktop/htdocs/premier/application/classes/Controller/Register.php(24): Kohana_ORM->save()
#3 /Users/Ayce/Desktop/htdocs/premier/system/classes/Kohana/Controller.php(84): Controller_Register->action_add()
#4 [internal function]: Kohana_Controller->execute()
#5 /Users/Ayce/Desktop/htdocs/premier/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Register))
#6 /Users/Ayce/Desktop/htdocs/premier/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /Users/Ayce/Desktop/htdocs/premier/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 /Users/Ayce/Desktop/htdocs/premier/index.php(118): Kohana_Request->execute()
#9 {main} in /Users/Ayce/Desktop/htdocs/premier/modules/orm/classes/Kohana/ORM.php:1302
2013-09-30 19:07:57 --- EMERGENCY: ORM_Validation_Exception [ 0 ]: Failed to validate array ~ MODPATH/orm/classes/Kohana/ORM.php [ 1275 ] in /Users/Ayce/Desktop/htdocs/premier/modules/orm/classes/Kohana/ORM.php:1302
2013-09-30 19:07:57 --- DEBUG: #0 /Users/Ayce/Desktop/htdocs/premier/modules/orm/classes/Kohana/ORM.php(1302): Kohana_ORM->check(NULL)
#1 /Users/Ayce/Desktop/htdocs/premier/modules/orm/classes/Kohana/ORM.php(1421): Kohana_ORM->create(NULL)
#2 /Users/Ayce/Desktop/htdocs/premier/application/classes/Controller/Register.php(24): Kohana_ORM->save()
#3 /Users/Ayce/Desktop/htdocs/premier/system/classes/Kohana/Controller.php(84): Controller_Register->action_add()
#4 [internal function]: Kohana_Controller->execute()
#5 /Users/Ayce/Desktop/htdocs/premier/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Register))
#6 /Users/Ayce/Desktop/htdocs/premier/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /Users/Ayce/Desktop/htdocs/premier/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 /Users/Ayce/Desktop/htdocs/premier/index.php(118): Kohana_Request->execute()
#9 {main} in /Users/Ayce/Desktop/htdocs/premier/modules/orm/classes/Kohana/ORM.php:1302
2013-09-30 19:09:23 --- EMERGENCY: ORM_Validation_Exception [ 0 ]: Failed to validate array ~ MODPATH/orm/classes/Kohana/ORM.php [ 1275 ] in /Users/Ayce/Desktop/htdocs/premier/modules/orm/classes/Kohana/ORM.php:1302
2013-09-30 19:09:23 --- DEBUG: #0 /Users/Ayce/Desktop/htdocs/premier/modules/orm/classes/Kohana/ORM.php(1302): Kohana_ORM->check(NULL)
#1 /Users/Ayce/Desktop/htdocs/premier/modules/orm/classes/Kohana/ORM.php(1421): Kohana_ORM->create(NULL)
#2 /Users/Ayce/Desktop/htdocs/premier/application/classes/Controller/Register.php(24): Kohana_ORM->save()
#3 /Users/Ayce/Desktop/htdocs/premier/system/classes/Kohana/Controller.php(84): Controller_Register->action_add()
#4 [internal function]: Kohana_Controller->execute()
#5 /Users/Ayce/Desktop/htdocs/premier/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Register))
#6 /Users/Ayce/Desktop/htdocs/premier/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /Users/Ayce/Desktop/htdocs/premier/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 /Users/Ayce/Desktop/htdocs/premier/index.php(118): Kohana_Request->execute()
#9 {main} in /Users/Ayce/Desktop/htdocs/premier/modules/orm/classes/Kohana/ORM.php:1302
2013-09-30 19:09:32 --- EMERGENCY: ORM_Validation_Exception [ 0 ]: Failed to validate array ~ MODPATH/orm/classes/Kohana/ORM.php [ 1275 ] in /Users/Ayce/Desktop/htdocs/premier/modules/orm/classes/Kohana/ORM.php:1302
2013-09-30 19:09:32 --- DEBUG: #0 /Users/Ayce/Desktop/htdocs/premier/modules/orm/classes/Kohana/ORM.php(1302): Kohana_ORM->check(NULL)
#1 /Users/Ayce/Desktop/htdocs/premier/modules/orm/classes/Kohana/ORM.php(1421): Kohana_ORM->create(NULL)
#2 /Users/Ayce/Desktop/htdocs/premier/application/classes/Controller/Register.php(24): Kohana_ORM->save()
#3 /Users/Ayce/Desktop/htdocs/premier/system/classes/Kohana/Controller.php(84): Controller_Register->action_add()
#4 [internal function]: Kohana_Controller->execute()
#5 /Users/Ayce/Desktop/htdocs/premier/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Register))
#6 /Users/Ayce/Desktop/htdocs/premier/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /Users/Ayce/Desktop/htdocs/premier/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 /Users/Ayce/Desktop/htdocs/premier/index.php(118): Kohana_Request->execute()
#9 {main} in /Users/Ayce/Desktop/htdocs/premier/modules/orm/classes/Kohana/ORM.php:1302
2013-09-30 19:10:51 --- EMERGENCY: ORM_Validation_Exception [ 0 ]: Failed to validate array ~ MODPATH/orm/classes/Kohana/ORM.php [ 1275 ] in /Users/Ayce/Desktop/htdocs/premier/modules/orm/classes/Kohana/ORM.php:1302
2013-09-30 19:10:51 --- DEBUG: #0 /Users/Ayce/Desktop/htdocs/premier/modules/orm/classes/Kohana/ORM.php(1302): Kohana_ORM->check(NULL)
#1 /Users/Ayce/Desktop/htdocs/premier/modules/orm/classes/Kohana/ORM.php(1421): Kohana_ORM->create(NULL)
#2 /Users/Ayce/Desktop/htdocs/premier/application/classes/Controller/Register.php(28): Kohana_ORM->save()
#3 /Users/Ayce/Desktop/htdocs/premier/system/classes/Kohana/Controller.php(84): Controller_Register->action_add()
#4 [internal function]: Kohana_Controller->execute()
#5 /Users/Ayce/Desktop/htdocs/premier/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Register))
#6 /Users/Ayce/Desktop/htdocs/premier/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /Users/Ayce/Desktop/htdocs/premier/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 /Users/Ayce/Desktop/htdocs/premier/index.php(118): Kohana_Request->execute()
#9 {main} in /Users/Ayce/Desktop/htdocs/premier/modules/orm/classes/Kohana/ORM.php:1302
2013-09-30 19:12:51 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: title ~ APPPATH/views/template/main.php [ 5 ] in /Users/Ayce/Desktop/htdocs/premier/application/views/template/main.php:5
2013-09-30 19:12:51 --- DEBUG: #0 /Users/Ayce/Desktop/htdocs/premier/application/views/template/main.php(5): Kohana_Core::error_handler(8, 'Undefined varia...', '/Users/Ayce/Des...', 5, Array)
#1 /Users/Ayce/Desktop/htdocs/premier/system/classes/Kohana/View.php(61): include('/Users/Ayce/Des...')
#2 /Users/Ayce/Desktop/htdocs/premier/system/classes/Kohana/View.php(348): Kohana_View::capture('/Users/Ayce/Des...', Array)
#3 /Users/Ayce/Desktop/htdocs/premier/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#4 /Users/Ayce/Desktop/htdocs/premier/system/classes/Kohana/Controller.php(87): Kohana_Controller_Template->after()
#5 [internal function]: Kohana_Controller->execute()
#6 /Users/Ayce/Desktop/htdocs/premier/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Register))
#7 /Users/Ayce/Desktop/htdocs/premier/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /Users/Ayce/Desktop/htdocs/premier/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 /Users/Ayce/Desktop/htdocs/premier/index.php(118): Kohana_Request->execute()
#10 {main} in /Users/Ayce/Desktop/htdocs/premier/application/views/template/main.php:5
2013-09-30 19:13:39 --- EMERGENCY: ORM_Validation_Exception [ 0 ]: Failed to validate array ~ MODPATH/orm/classes/Kohana/ORM.php [ 1275 ] in /Users/Ayce/Desktop/htdocs/premier/modules/orm/classes/Kohana/ORM.php:1302
2013-09-30 19:13:39 --- DEBUG: #0 /Users/Ayce/Desktop/htdocs/premier/modules/orm/classes/Kohana/ORM.php(1302): Kohana_ORM->check(NULL)
#1 /Users/Ayce/Desktop/htdocs/premier/modules/orm/classes/Kohana/ORM.php(1421): Kohana_ORM->create(NULL)
#2 /Users/Ayce/Desktop/htdocs/premier/application/classes/Controller/Register.php(28): Kohana_ORM->save()
#3 /Users/Ayce/Desktop/htdocs/premier/system/classes/Kohana/Controller.php(84): Controller_Register->action_add()
#4 [internal function]: Kohana_Controller->execute()
#5 /Users/Ayce/Desktop/htdocs/premier/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Register))
#6 /Users/Ayce/Desktop/htdocs/premier/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /Users/Ayce/Desktop/htdocs/premier/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 /Users/Ayce/Desktop/htdocs/premier/index.php(118): Kohana_Request->execute()
#9 {main} in /Users/Ayce/Desktop/htdocs/premier/modules/orm/classes/Kohana/ORM.php:1302
2013-09-30 19:19:53 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected ')' ~ APPPATH/classes/Controller/Register.php [ 30 ] in file:line
2013-09-30 19:19:53 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-09-30 19:30:51 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: title ~ APPPATH/views/template/main.php [ 5 ] in /Users/Ayce/Desktop/htdocs/premier/application/views/template/main.php:5
2013-09-30 19:30:51 --- DEBUG: #0 /Users/Ayce/Desktop/htdocs/premier/application/views/template/main.php(5): Kohana_Core::error_handler(8, 'Undefined varia...', '/Users/Ayce/Des...', 5, Array)
#1 /Users/Ayce/Desktop/htdocs/premier/system/classes/Kohana/View.php(61): include('/Users/Ayce/Des...')
#2 /Users/Ayce/Desktop/htdocs/premier/system/classes/Kohana/View.php(348): Kohana_View::capture('/Users/Ayce/Des...', Array)
#3 /Users/Ayce/Desktop/htdocs/premier/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#4 /Users/Ayce/Desktop/htdocs/premier/system/classes/Kohana/Controller.php(87): Kohana_Controller_Template->after()
#5 [internal function]: Kohana_Controller->execute()
#6 /Users/Ayce/Desktop/htdocs/premier/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#7 /Users/Ayce/Desktop/htdocs/premier/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /Users/Ayce/Desktop/htdocs/premier/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 /Users/Ayce/Desktop/htdocs/premier/index.php(118): Kohana_Request->execute()
#10 {main} in /Users/Ayce/Desktop/htdocs/premier/application/views/template/main.php:5
2013-09-30 19:31:31 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: title ~ APPPATH/views/template/main.php [ 5 ] in /Users/Ayce/Desktop/htdocs/premier/application/views/template/main.php:5
2013-09-30 19:31:31 --- DEBUG: #0 /Users/Ayce/Desktop/htdocs/premier/application/views/template/main.php(5): Kohana_Core::error_handler(8, 'Undefined varia...', '/Users/Ayce/Des...', 5, Array)
#1 /Users/Ayce/Desktop/htdocs/premier/system/classes/Kohana/View.php(61): include('/Users/Ayce/Des...')
#2 /Users/Ayce/Desktop/htdocs/premier/system/classes/Kohana/View.php(348): Kohana_View::capture('/Users/Ayce/Des...', Array)
#3 /Users/Ayce/Desktop/htdocs/premier/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#4 /Users/Ayce/Desktop/htdocs/premier/system/classes/Kohana/Controller.php(87): Kohana_Controller_Template->after()
#5 [internal function]: Kohana_Controller->execute()
#6 /Users/Ayce/Desktop/htdocs/premier/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#7 /Users/Ayce/Desktop/htdocs/premier/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /Users/Ayce/Desktop/htdocs/premier/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 /Users/Ayce/Desktop/htdocs/premier/index.php(118): Kohana_Request->execute()
#10 {main} in /Users/Ayce/Desktop/htdocs/premier/application/views/template/main.php:5
2013-09-30 19:44:12 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected '(' ~ APPPATH/classes/Controller/Layout.php [ 5 ] in file:line
2013-09-30 19:44:12 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-09-30 19:48:51 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: logged_in ~ APPPATH/views/template/main.php [ 31 ] in /Users/Ayce/Desktop/htdocs/premier/application/views/template/main.php:31
2013-09-30 19:48:51 --- DEBUG: #0 /Users/Ayce/Desktop/htdocs/premier/application/views/template/main.php(31): Kohana_Core::error_handler(8, 'Undefined varia...', '/Users/Ayce/Des...', 31, Array)
#1 /Users/Ayce/Desktop/htdocs/premier/system/classes/Kohana/View.php(61): include('/Users/Ayce/Des...')
#2 /Users/Ayce/Desktop/htdocs/premier/system/classes/Kohana/View.php(348): Kohana_View::capture('/Users/Ayce/Des...', Array)
#3 /Users/Ayce/Desktop/htdocs/premier/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#4 /Users/Ayce/Desktop/htdocs/premier/application/classes/Controller/Layout.php(16): Kohana_Controller_Template->after()
#5 /Users/Ayce/Desktop/htdocs/premier/system/classes/Kohana/Controller.php(87): Controller_Layout->after()
#6 [internal function]: Kohana_Controller->execute()
#7 /Users/Ayce/Desktop/htdocs/premier/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#8 /Users/Ayce/Desktop/htdocs/premier/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 /Users/Ayce/Desktop/htdocs/premier/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#10 /Users/Ayce/Desktop/htdocs/premier/index.php(118): Kohana_Request->execute()
#11 {main} in /Users/Ayce/Desktop/htdocs/premier/application/views/template/main.php:31
2013-09-30 19:51:12 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected '->' (T_OBJECT_OPERATOR), expecting ',' or ';' ~ APPPATH/classes/Controller/Layout.php [ 13 ] in file:line
2013-09-30 19:51:12 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-09-30 19:53:13 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected '->' (T_OBJECT_OPERATOR), expecting ',' or ';' ~ APPPATH/classes/Controller/Layout.php [ 13 ] in file:line
2013-09-30 19:53:13 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-09-30 19:55:21 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: logged_in ~ APPPATH/views/template/navigation.php [ 18 ] in /Users/Ayce/Desktop/htdocs/premier/application/views/template/navigation.php:18
2013-09-30 19:55:21 --- DEBUG: #0 /Users/Ayce/Desktop/htdocs/premier/application/views/template/navigation.php(18): Kohana_Core::error_handler(8, 'Undefined varia...', '/Users/Ayce/Des...', 18, Array)
#1 /Users/Ayce/Desktop/htdocs/premier/system/classes/Kohana/View.php(61): include('/Users/Ayce/Des...')
#2 /Users/Ayce/Desktop/htdocs/premier/system/classes/Kohana/View.php(348): Kohana_View::capture('/Users/Ayce/Des...', Array)
#3 /Users/Ayce/Desktop/htdocs/premier/system/classes/Kohana/View.php(228): Kohana_View->render()
#4 /Users/Ayce/Desktop/htdocs/premier/application/views/template/main.php(14): Kohana_View->__toString()
#5 /Users/Ayce/Desktop/htdocs/premier/system/classes/Kohana/View.php(61): include('/Users/Ayce/Des...')
#6 /Users/Ayce/Desktop/htdocs/premier/system/classes/Kohana/View.php(348): Kohana_View::capture('/Users/Ayce/Des...', Array)
#7 /Users/Ayce/Desktop/htdocs/premier/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#8 /Users/Ayce/Desktop/htdocs/premier/application/classes/Controller/Layout.php(18): Kohana_Controller_Template->after()
#9 /Users/Ayce/Desktop/htdocs/premier/system/classes/Kohana/Controller.php(87): Controller_Layout->after()
#10 [internal function]: Kohana_Controller->execute()
#11 /Users/Ayce/Desktop/htdocs/premier/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#12 /Users/Ayce/Desktop/htdocs/premier/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#13 /Users/Ayce/Desktop/htdocs/premier/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#14 /Users/Ayce/Desktop/htdocs/premier/index.php(118): Kohana_Request->execute()
#15 {main} in /Users/Ayce/Desktop/htdocs/premier/application/views/template/navigation.php:18
2013-09-30 19:55:21 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: logged_in ~ APPPATH/views/template/main.php [ 32 ] in /Users/Ayce/Desktop/htdocs/premier/application/views/template/main.php:32
2013-09-30 19:55:21 --- DEBUG: #0 /Users/Ayce/Desktop/htdocs/premier/application/views/template/main.php(32): Kohana_Core::error_handler(8, 'Undefined varia...', '/Users/Ayce/Des...', 32, Array)
#1 /Users/Ayce/Desktop/htdocs/premier/system/classes/Kohana/View.php(61): include('/Users/Ayce/Des...')
#2 /Users/Ayce/Desktop/htdocs/premier/system/classes/Kohana/View.php(348): Kohana_View::capture('/Users/Ayce/Des...', Array)
#3 /Users/Ayce/Desktop/htdocs/premier/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#4 /Users/Ayce/Desktop/htdocs/premier/application/classes/Controller/Layout.php(18): Kohana_Controller_Template->after()
#5 /Users/Ayce/Desktop/htdocs/premier/system/classes/Kohana/Controller.php(87): Controller_Layout->after()
#6 [internal function]: Kohana_Controller->execute()
#7 /Users/Ayce/Desktop/htdocs/premier/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#8 /Users/Ayce/Desktop/htdocs/premier/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 /Users/Ayce/Desktop/htdocs/premier/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#10 /Users/Ayce/Desktop/htdocs/premier/index.php(118): Kohana_Request->execute()
#11 {main} in /Users/Ayce/Desktop/htdocs/premier/application/views/template/main.php:32
2013-09-30 19:55:50 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: logged_in ~ APPPATH/views/template/navigation.php [ 18 ] in /Users/Ayce/Desktop/htdocs/premier/application/views/template/navigation.php:18
2013-09-30 19:55:50 --- DEBUG: #0 /Users/Ayce/Desktop/htdocs/premier/application/views/template/navigation.php(18): Kohana_Core::error_handler(8, 'Undefined varia...', '/Users/Ayce/Des...', 18, Array)
#1 /Users/Ayce/Desktop/htdocs/premier/system/classes/Kohana/View.php(61): include('/Users/Ayce/Des...')
#2 /Users/Ayce/Desktop/htdocs/premier/system/classes/Kohana/View.php(348): Kohana_View::capture('/Users/Ayce/Des...', Array)
#3 /Users/Ayce/Desktop/htdocs/premier/system/classes/Kohana/View.php(228): Kohana_View->render()
#4 /Users/Ayce/Desktop/htdocs/premier/application/views/template/main.php(14): Kohana_View->__toString()
#5 /Users/Ayce/Desktop/htdocs/premier/system/classes/Kohana/View.php(61): include('/Users/Ayce/Des...')
#6 /Users/Ayce/Desktop/htdocs/premier/system/classes/Kohana/View.php(348): Kohana_View::capture('/Users/Ayce/Des...', Array)
#7 /Users/Ayce/Desktop/htdocs/premier/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#8 /Users/Ayce/Desktop/htdocs/premier/application/classes/Controller/Layout.php(18): Kohana_Controller_Template->after()
#9 /Users/Ayce/Desktop/htdocs/premier/system/classes/Kohana/Controller.php(87): Controller_Layout->after()
#10 [internal function]: Kohana_Controller->execute()
#11 /Users/Ayce/Desktop/htdocs/premier/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#12 /Users/Ayce/Desktop/htdocs/premier/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#13 /Users/Ayce/Desktop/htdocs/premier/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#14 /Users/Ayce/Desktop/htdocs/premier/index.php(118): Kohana_Request->execute()
#15 {main} in /Users/Ayce/Desktop/htdocs/premier/application/views/template/navigation.php:18
2013-09-30 19:56:19 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: logged_in ~ APPPATH/views/template/navigation.php [ 18 ] in /Users/Ayce/Desktop/htdocs/premier/application/views/template/navigation.php:18
2013-09-30 19:56:19 --- DEBUG: #0 /Users/Ayce/Desktop/htdocs/premier/application/views/template/navigation.php(18): Kohana_Core::error_handler(8, 'Undefined varia...', '/Users/Ayce/Des...', 18, Array)
#1 /Users/Ayce/Desktop/htdocs/premier/system/classes/Kohana/View.php(61): include('/Users/Ayce/Des...')
#2 /Users/Ayce/Desktop/htdocs/premier/system/classes/Kohana/View.php(348): Kohana_View::capture('/Users/Ayce/Des...', Array)
#3 /Users/Ayce/Desktop/htdocs/premier/system/classes/Kohana/View.php(228): Kohana_View->render()
#4 /Users/Ayce/Desktop/htdocs/premier/application/views/template/main.php(14): Kohana_View->__toString()
#5 /Users/Ayce/Desktop/htdocs/premier/system/classes/Kohana/View.php(61): include('/Users/Ayce/Des...')
#6 /Users/Ayce/Desktop/htdocs/premier/system/classes/Kohana/View.php(348): Kohana_View::capture('/Users/Ayce/Des...', Array)
#7 /Users/Ayce/Desktop/htdocs/premier/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#8 /Users/Ayce/Desktop/htdocs/premier/application/classes/Controller/Layout.php(19): Kohana_Controller_Template->after()
#9 /Users/Ayce/Desktop/htdocs/premier/system/classes/Kohana/Controller.php(87): Controller_Layout->after()
#10 [internal function]: Kohana_Controller->execute()
#11 /Users/Ayce/Desktop/htdocs/premier/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#12 /Users/Ayce/Desktop/htdocs/premier/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#13 /Users/Ayce/Desktop/htdocs/premier/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#14 /Users/Ayce/Desktop/htdocs/premier/index.php(118): Kohana_Request->execute()
#15 {main} in /Users/Ayce/Desktop/htdocs/premier/application/views/template/navigation.php:18
2013-09-30 19:56:21 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: logged_in ~ APPPATH/views/template/navigation.php [ 18 ] in /Users/Ayce/Desktop/htdocs/premier/application/views/template/navigation.php:18
2013-09-30 19:56:21 --- DEBUG: #0 /Users/Ayce/Desktop/htdocs/premier/application/views/template/navigation.php(18): Kohana_Core::error_handler(8, 'Undefined varia...', '/Users/Ayce/Des...', 18, Array)
#1 /Users/Ayce/Desktop/htdocs/premier/system/classes/Kohana/View.php(61): include('/Users/Ayce/Des...')
#2 /Users/Ayce/Desktop/htdocs/premier/system/classes/Kohana/View.php(348): Kohana_View::capture('/Users/Ayce/Des...', Array)
#3 /Users/Ayce/Desktop/htdocs/premier/system/classes/Kohana/View.php(228): Kohana_View->render()
#4 /Users/Ayce/Desktop/htdocs/premier/application/views/template/main.php(14): Kohana_View->__toString()
#5 /Users/Ayce/Desktop/htdocs/premier/system/classes/Kohana/View.php(61): include('/Users/Ayce/Des...')
#6 /Users/Ayce/Desktop/htdocs/premier/system/classes/Kohana/View.php(348): Kohana_View::capture('/Users/Ayce/Des...', Array)
#7 /Users/Ayce/Desktop/htdocs/premier/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#8 /Users/Ayce/Desktop/htdocs/premier/application/classes/Controller/Layout.php(19): Kohana_Controller_Template->after()
#9 /Users/Ayce/Desktop/htdocs/premier/system/classes/Kohana/Controller.php(87): Controller_Layout->after()
#10 [internal function]: Kohana_Controller->execute()
#11 /Users/Ayce/Desktop/htdocs/premier/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#12 /Users/Ayce/Desktop/htdocs/premier/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#13 /Users/Ayce/Desktop/htdocs/premier/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#14 /Users/Ayce/Desktop/htdocs/premier/index.php(118): Kohana_Request->execute()
#15 {main} in /Users/Ayce/Desktop/htdocs/premier/application/views/template/navigation.php:18
2013-09-30 19:56:23 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: logged_in ~ APPPATH/views/template/navigation.php [ 18 ] in /Users/Ayce/Desktop/htdocs/premier/application/views/template/navigation.php:18
2013-09-30 19:56:23 --- DEBUG: #0 /Users/Ayce/Desktop/htdocs/premier/application/views/template/navigation.php(18): Kohana_Core::error_handler(8, 'Undefined varia...', '/Users/Ayce/Des...', 18, Array)
#1 /Users/Ayce/Desktop/htdocs/premier/system/classes/Kohana/View.php(61): include('/Users/Ayce/Des...')
#2 /Users/Ayce/Desktop/htdocs/premier/system/classes/Kohana/View.php(348): Kohana_View::capture('/Users/Ayce/Des...', Array)
#3 /Users/Ayce/Desktop/htdocs/premier/system/classes/Kohana/View.php(228): Kohana_View->render()
#4 /Users/Ayce/Desktop/htdocs/premier/application/views/template/main.php(14): Kohana_View->__toString()
#5 /Users/Ayce/Desktop/htdocs/premier/system/classes/Kohana/View.php(61): include('/Users/Ayce/Des...')
#6 /Users/Ayce/Desktop/htdocs/premier/system/classes/Kohana/View.php(348): Kohana_View::capture('/Users/Ayce/Des...', Array)
#7 /Users/Ayce/Desktop/htdocs/premier/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#8 /Users/Ayce/Desktop/htdocs/premier/application/classes/Controller/Layout.php(19): Kohana_Controller_Template->after()
#9 /Users/Ayce/Desktop/htdocs/premier/system/classes/Kohana/Controller.php(87): Controller_Layout->after()
#10 [internal function]: Kohana_Controller->execute()
#11 /Users/Ayce/Desktop/htdocs/premier/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#12 /Users/Ayce/Desktop/htdocs/premier/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#13 /Users/Ayce/Desktop/htdocs/premier/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#14 /Users/Ayce/Desktop/htdocs/premier/index.php(118): Kohana_Request->execute()
#15 {main} in /Users/Ayce/Desktop/htdocs/premier/application/views/template/navigation.php:18
2013-09-30 19:56:24 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: logged_in ~ APPPATH/views/template/navigation.php [ 18 ] in /Users/Ayce/Desktop/htdocs/premier/application/views/template/navigation.php:18
2013-09-30 19:56:24 --- DEBUG: #0 /Users/Ayce/Desktop/htdocs/premier/application/views/template/navigation.php(18): Kohana_Core::error_handler(8, 'Undefined varia...', '/Users/Ayce/Des...', 18, Array)
#1 /Users/Ayce/Desktop/htdocs/premier/system/classes/Kohana/View.php(61): include('/Users/Ayce/Des...')
#2 /Users/Ayce/Desktop/htdocs/premier/system/classes/Kohana/View.php(348): Kohana_View::capture('/Users/Ayce/Des...', Array)
#3 /Users/Ayce/Desktop/htdocs/premier/system/classes/Kohana/View.php(228): Kohana_View->render()
#4 /Users/Ayce/Desktop/htdocs/premier/application/views/template/main.php(14): Kohana_View->__toString()
#5 /Users/Ayce/Desktop/htdocs/premier/system/classes/Kohana/View.php(61): include('/Users/Ayce/Des...')
#6 /Users/Ayce/Desktop/htdocs/premier/system/classes/Kohana/View.php(348): Kohana_View::capture('/Users/Ayce/Des...', Array)
#7 /Users/Ayce/Desktop/htdocs/premier/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#8 /Users/Ayce/Desktop/htdocs/premier/application/classes/Controller/Layout.php(19): Kohana_Controller_Template->after()
#9 /Users/Ayce/Desktop/htdocs/premier/system/classes/Kohana/Controller.php(87): Controller_Layout->after()
#10 [internal function]: Kohana_Controller->execute()
#11 /Users/Ayce/Desktop/htdocs/premier/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#12 /Users/Ayce/Desktop/htdocs/premier/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#13 /Users/Ayce/Desktop/htdocs/premier/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#14 /Users/Ayce/Desktop/htdocs/premier/index.php(118): Kohana_Request->execute()
#15 {main} in /Users/Ayce/Desktop/htdocs/premier/application/views/template/navigation.php:18
2013-09-30 19:56:24 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: logged_in ~ APPPATH/views/template/navigation.php [ 18 ] in /Users/Ayce/Desktop/htdocs/premier/application/views/template/navigation.php:18
2013-09-30 19:56:24 --- DEBUG: #0 /Users/Ayce/Desktop/htdocs/premier/application/views/template/navigation.php(18): Kohana_Core::error_handler(8, 'Undefined varia...', '/Users/Ayce/Des...', 18, Array)
#1 /Users/Ayce/Desktop/htdocs/premier/system/classes/Kohana/View.php(61): include('/Users/Ayce/Des...')
#2 /Users/Ayce/Desktop/htdocs/premier/system/classes/Kohana/View.php(348): Kohana_View::capture('/Users/Ayce/Des...', Array)
#3 /Users/Ayce/Desktop/htdocs/premier/system/classes/Kohana/View.php(228): Kohana_View->render()
#4 /Users/Ayce/Desktop/htdocs/premier/application/views/template/main.php(14): Kohana_View->__toString()
#5 /Users/Ayce/Desktop/htdocs/premier/system/classes/Kohana/View.php(61): include('/Users/Ayce/Des...')
#6 /Users/Ayce/Desktop/htdocs/premier/system/classes/Kohana/View.php(348): Kohana_View::capture('/Users/Ayce/Des...', Array)
#7 /Users/Ayce/Desktop/htdocs/premier/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#8 /Users/Ayce/Desktop/htdocs/premier/application/classes/Controller/Layout.php(19): Kohana_Controller_Template->after()
#9 /Users/Ayce/Desktop/htdocs/premier/system/classes/Kohana/Controller.php(87): Controller_Layout->after()
#10 [internal function]: Kohana_Controller->execute()
#11 /Users/Ayce/Desktop/htdocs/premier/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#12 /Users/Ayce/Desktop/htdocs/premier/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#13 /Users/Ayce/Desktop/htdocs/premier/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#14 /Users/Ayce/Desktop/htdocs/premier/index.php(118): Kohana_Request->execute()
#15 {main} in /Users/Ayce/Desktop/htdocs/premier/application/views/template/navigation.php:18
2013-09-30 19:56:25 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: logged_in ~ APPPATH/views/template/navigation.php [ 18 ] in /Users/Ayce/Desktop/htdocs/premier/application/views/template/navigation.php:18
2013-09-30 19:56:25 --- DEBUG: #0 /Users/Ayce/Desktop/htdocs/premier/application/views/template/navigation.php(18): Kohana_Core::error_handler(8, 'Undefined varia...', '/Users/Ayce/Des...', 18, Array)
#1 /Users/Ayce/Desktop/htdocs/premier/system/classes/Kohana/View.php(61): include('/Users/Ayce/Des...')
#2 /Users/Ayce/Desktop/htdocs/premier/system/classes/Kohana/View.php(348): Kohana_View::capture('/Users/Ayce/Des...', Array)
#3 /Users/Ayce/Desktop/htdocs/premier/system/classes/Kohana/View.php(228): Kohana_View->render()
#4 /Users/Ayce/Desktop/htdocs/premier/application/views/template/main.php(14): Kohana_View->__toString()
#5 /Users/Ayce/Desktop/htdocs/premier/system/classes/Kohana/View.php(61): include('/Users/Ayce/Des...')
#6 /Users/Ayce/Desktop/htdocs/premier/system/classes/Kohana/View.php(348): Kohana_View::capture('/Users/Ayce/Des...', Array)
#7 /Users/Ayce/Desktop/htdocs/premier/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#8 /Users/Ayce/Desktop/htdocs/premier/application/classes/Controller/Layout.php(19): Kohana_Controller_Template->after()
#9 /Users/Ayce/Desktop/htdocs/premier/system/classes/Kohana/Controller.php(87): Controller_Layout->after()
#10 [internal function]: Kohana_Controller->execute()
#11 /Users/Ayce/Desktop/htdocs/premier/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#12 /Users/Ayce/Desktop/htdocs/premier/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#13 /Users/Ayce/Desktop/htdocs/premier/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#14 /Users/Ayce/Desktop/htdocs/premier/index.php(118): Kohana_Request->execute()
#15 {main} in /Users/Ayce/Desktop/htdocs/premier/application/views/template/navigation.php:18
2013-09-30 19:56:25 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: logged_in ~ APPPATH/views/template/navigation.php [ 18 ] in /Users/Ayce/Desktop/htdocs/premier/application/views/template/navigation.php:18
2013-09-30 19:56:25 --- DEBUG: #0 /Users/Ayce/Desktop/htdocs/premier/application/views/template/navigation.php(18): Kohana_Core::error_handler(8, 'Undefined varia...', '/Users/Ayce/Des...', 18, Array)
#1 /Users/Ayce/Desktop/htdocs/premier/system/classes/Kohana/View.php(61): include('/Users/Ayce/Des...')
#2 /Users/Ayce/Desktop/htdocs/premier/system/classes/Kohana/View.php(348): Kohana_View::capture('/Users/Ayce/Des...', Array)
#3 /Users/Ayce/Desktop/htdocs/premier/system/classes/Kohana/View.php(228): Kohana_View->render()
#4 /Users/Ayce/Desktop/htdocs/premier/application/views/template/main.php(14): Kohana_View->__toString()
#5 /Users/Ayce/Desktop/htdocs/premier/system/classes/Kohana/View.php(61): include('/Users/Ayce/Des...')
#6 /Users/Ayce/Desktop/htdocs/premier/system/classes/Kohana/View.php(348): Kohana_View::capture('/Users/Ayce/Des...', Array)
#7 /Users/Ayce/Desktop/htdocs/premier/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#8 /Users/Ayce/Desktop/htdocs/premier/application/classes/Controller/Layout.php(19): Kohana_Controller_Template->after()
#9 /Users/Ayce/Desktop/htdocs/premier/system/classes/Kohana/Controller.php(87): Controller_Layout->after()
#10 [internal function]: Kohana_Controller->execute()
#11 /Users/Ayce/Desktop/htdocs/premier/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#12 /Users/Ayce/Desktop/htdocs/premier/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#13 /Users/Ayce/Desktop/htdocs/premier/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#14 /Users/Ayce/Desktop/htdocs/premier/index.php(118): Kohana_Request->execute()
#15 {main} in /Users/Ayce/Desktop/htdocs/premier/application/views/template/navigation.php:18
2013-09-30 19:56:25 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: logged_in ~ APPPATH/views/template/navigation.php [ 18 ] in /Users/Ayce/Desktop/htdocs/premier/application/views/template/navigation.php:18
2013-09-30 19:56:25 --- DEBUG: #0 /Users/Ayce/Desktop/htdocs/premier/application/views/template/navigation.php(18): Kohana_Core::error_handler(8, 'Undefined varia...', '/Users/Ayce/Des...', 18, Array)
#1 /Users/Ayce/Desktop/htdocs/premier/system/classes/Kohana/View.php(61): include('/Users/Ayce/Des...')
#2 /Users/Ayce/Desktop/htdocs/premier/system/classes/Kohana/View.php(348): Kohana_View::capture('/Users/Ayce/Des...', Array)
#3 /Users/Ayce/Desktop/htdocs/premier/system/classes/Kohana/View.php(228): Kohana_View->render()
#4 /Users/Ayce/Desktop/htdocs/premier/application/views/template/main.php(14): Kohana_View->__toString()
#5 /Users/Ayce/Desktop/htdocs/premier/system/classes/Kohana/View.php(61): include('/Users/Ayce/Des...')
#6 /Users/Ayce/Desktop/htdocs/premier/system/classes/Kohana/View.php(348): Kohana_View::capture('/Users/Ayce/Des...', Array)
#7 /Users/Ayce/Desktop/htdocs/premier/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#8 /Users/Ayce/Desktop/htdocs/premier/application/classes/Controller/Layout.php(19): Kohana_Controller_Template->after()
#9 /Users/Ayce/Desktop/htdocs/premier/system/classes/Kohana/Controller.php(87): Controller_Layout->after()
#10 [internal function]: Kohana_Controller->execute()
#11 /Users/Ayce/Desktop/htdocs/premier/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#12 /Users/Ayce/Desktop/htdocs/premier/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#13 /Users/Ayce/Desktop/htdocs/premier/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#14 /Users/Ayce/Desktop/htdocs/premier/index.php(118): Kohana_Request->execute()
#15 {main} in /Users/Ayce/Desktop/htdocs/premier/application/views/template/navigation.php:18
2013-09-30 20:02:13 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected '!', expecting '(' ~ APPPATH/views/template/navigation.php [ 19 ] in file:line
2013-09-30 20:02:13 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-09-30 20:05:03 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected ':' ~ APPPATH/views/template/navigation.php [ 19 ] in file:line
2013-09-30 20:05:03 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-09-30 20:08:15 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected ':', expecting ';' ~ APPPATH/views/template/navigation.php [ 26 ] in file:line
2013-09-30 20:08:15 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-09-30 20:26:06 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected 'endif' (T_ENDIF) ~ APPPATH/views/template/navigation.php [ 27 ] in file:line
2013-09-30 20:26:06 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-09-30 20:33:31 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: user ~ APPPATH/views/template/navigation.php [ 27 ] in /Users/Ayce/Desktop/htdocs/premier/application/views/template/navigation.php:27
2013-09-30 20:33:31 --- DEBUG: #0 /Users/Ayce/Desktop/htdocs/premier/application/views/template/navigation.php(27): Kohana_Core::error_handler(8, 'Undefined varia...', '/Users/Ayce/Des...', 27, Array)
#1 /Users/Ayce/Desktop/htdocs/premier/system/classes/Kohana/View.php(61): include('/Users/Ayce/Des...')
#2 /Users/Ayce/Desktop/htdocs/premier/system/classes/Kohana/View.php(348): Kohana_View::capture('/Users/Ayce/Des...', Array)
#3 /Users/Ayce/Desktop/htdocs/premier/system/classes/Kohana/View.php(228): Kohana_View->render()
#4 /Users/Ayce/Desktop/htdocs/premier/application/views/template/main.php(14): Kohana_View->__toString()
#5 /Users/Ayce/Desktop/htdocs/premier/system/classes/Kohana/View.php(61): include('/Users/Ayce/Des...')
#6 /Users/Ayce/Desktop/htdocs/premier/system/classes/Kohana/View.php(348): Kohana_View::capture('/Users/Ayce/Des...', Array)
#7 /Users/Ayce/Desktop/htdocs/premier/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#8 /Users/Ayce/Desktop/htdocs/premier/application/classes/Controller/Layout.php(19): Kohana_Controller_Template->after()
#9 /Users/Ayce/Desktop/htdocs/premier/system/classes/Kohana/Controller.php(87): Controller_Layout->after()
#10 [internal function]: Kohana_Controller->execute()
#11 /Users/Ayce/Desktop/htdocs/premier/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#12 /Users/Ayce/Desktop/htdocs/premier/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#13 /Users/Ayce/Desktop/htdocs/premier/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#14 /Users/Ayce/Desktop/htdocs/premier/index.php(118): Kohana_Request->execute()
#15 {main} in /Users/Ayce/Desktop/htdocs/premier/application/views/template/navigation.php:27
2013-09-30 20:46:22 --- EMERGENCY: ErrorException [ 8 ]: Undefined index: auth_username ~ APPPATH/views/template/navigation.php [ 23 ] in /Users/Ayce/Desktop/htdocs/premier/application/views/template/navigation.php:23
2013-09-30 20:46:22 --- DEBUG: #0 /Users/Ayce/Desktop/htdocs/premier/application/views/template/navigation.php(23): Kohana_Core::error_handler(8, 'Undefined index...', '/Users/Ayce/Des...', 23, Array)
#1 /Users/Ayce/Desktop/htdocs/premier/system/classes/Kohana/View.php(61): include('/Users/Ayce/Des...')
#2 /Users/Ayce/Desktop/htdocs/premier/system/classes/Kohana/View.php(348): Kohana_View::capture('/Users/Ayce/Des...', Array)
#3 /Users/Ayce/Desktop/htdocs/premier/system/classes/Kohana/View.php(228): Kohana_View->render()
#4 /Users/Ayce/Desktop/htdocs/premier/application/views/template/main.php(13): Kohana_View->__toString()
#5 /Users/Ayce/Desktop/htdocs/premier/system/classes/Kohana/View.php(61): include('/Users/Ayce/Des...')
#6 /Users/Ayce/Desktop/htdocs/premier/system/classes/Kohana/View.php(348): Kohana_View::capture('/Users/Ayce/Des...', Array)
#7 /Users/Ayce/Desktop/htdocs/premier/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#8 /Users/Ayce/Desktop/htdocs/premier/application/classes/Controller/Layout.php(20): Kohana_Controller_Template->after()
#9 /Users/Ayce/Desktop/htdocs/premier/system/classes/Kohana/Controller.php(87): Controller_Layout->after()
#10 [internal function]: Kohana_Controller->execute()
#11 /Users/Ayce/Desktop/htdocs/premier/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#12 /Users/Ayce/Desktop/htdocs/premier/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#13 /Users/Ayce/Desktop/htdocs/premier/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#14 /Users/Ayce/Desktop/htdocs/premier/index.php(118): Kohana_Request->execute()
#15 {main} in /Users/Ayce/Desktop/htdocs/premier/application/views/template/navigation.php:23
2013-09-30 20:58:23 --- EMERGENCY: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH/classes/Controller/Layout.php [ 11 ] in /Users/Ayce/Desktop/htdocs/premier/application/classes/Controller/Layout.php:11
2013-09-30 20:58:23 --- DEBUG: #0 /Users/Ayce/Desktop/htdocs/premier/application/classes/Controller/Layout.php(11): Kohana_Core::error_handler(8, 'Trying to get p...', '/Users/Ayce/Des...', 11, Array)
#1 /Users/Ayce/Desktop/htdocs/premier/system/classes/Kohana/Controller.php(69): Controller_Layout->before()
#2 [internal function]: Kohana_Controller->execute()
#3 /Users/Ayce/Desktop/htdocs/premier/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#4 /Users/Ayce/Desktop/htdocs/premier/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /Users/Ayce/Desktop/htdocs/premier/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /Users/Ayce/Desktop/htdocs/premier/index.php(118): Kohana_Request->execute()
#7 {main} in /Users/Ayce/Desktop/htdocs/premier/application/classes/Controller/Layout.php:11
2013-09-30 20:59:01 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected 'if' (T_IF) ~ APPPATH/classes/Controller/Layout.php [ 11 ] in file:line
2013-09-30 20:59:01 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-09-30 21:27:51 --- EMERGENCY: ORM_Validation_Exception [ 0 ]: Failed to validate array ~ MODPATH/orm/classes/Kohana/ORM.php [ 1275 ] in /Users/Ayce/Desktop/htdocs/premier/modules/orm/classes/Kohana/ORM.php:1302
2013-09-30 21:27:51 --- DEBUG: #0 /Users/Ayce/Desktop/htdocs/premier/modules/orm/classes/Kohana/ORM.php(1302): Kohana_ORM->check(NULL)
#1 /Users/Ayce/Desktop/htdocs/premier/modules/orm/classes/Kohana/ORM.php(1421): Kohana_ORM->create(NULL)
#2 /Users/Ayce/Desktop/htdocs/premier/application/classes/Controller/Register.php(25): Kohana_ORM->save()
#3 /Users/Ayce/Desktop/htdocs/premier/system/classes/Kohana/Controller.php(84): Controller_Register->action_add()
#4 [internal function]: Kohana_Controller->execute()
#5 /Users/Ayce/Desktop/htdocs/premier/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Register))
#6 /Users/Ayce/Desktop/htdocs/premier/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /Users/Ayce/Desktop/htdocs/premier/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 /Users/Ayce/Desktop/htdocs/premier/index.php(118): Kohana_Request->execute()
#9 {main} in /Users/Ayce/Desktop/htdocs/premier/modules/orm/classes/Kohana/ORM.php:1302
2013-09-30 21:38:20 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: role ~ APPPATH/views/template/navigation.php [ 41 ] in /Users/Ayce/Desktop/htdocs/premier/application/views/template/navigation.php:41
2013-09-30 21:38:20 --- DEBUG: #0 /Users/Ayce/Desktop/htdocs/premier/application/views/template/navigation.php(41): Kohana_Core::error_handler(8, 'Undefined varia...', '/Users/Ayce/Des...', 41, Array)
#1 /Users/Ayce/Desktop/htdocs/premier/system/classes/Kohana/View.php(61): include('/Users/Ayce/Des...')
#2 /Users/Ayce/Desktop/htdocs/premier/system/classes/Kohana/View.php(348): Kohana_View::capture('/Users/Ayce/Des...', Array)
#3 /Users/Ayce/Desktop/htdocs/premier/system/classes/Kohana/View.php(228): Kohana_View->render()
#4 /Users/Ayce/Desktop/htdocs/premier/application/views/template/main.php(13): Kohana_View->__toString()
#5 /Users/Ayce/Desktop/htdocs/premier/system/classes/Kohana/View.php(61): include('/Users/Ayce/Des...')
#6 /Users/Ayce/Desktop/htdocs/premier/system/classes/Kohana/View.php(348): Kohana_View::capture('/Users/Ayce/Des...', Array)
#7 /Users/Ayce/Desktop/htdocs/premier/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#8 /Users/Ayce/Desktop/htdocs/premier/application/classes/Controller/Layout.php(23): Kohana_Controller_Template->after()
#9 /Users/Ayce/Desktop/htdocs/premier/system/classes/Kohana/Controller.php(87): Controller_Layout->after()
#10 [internal function]: Kohana_Controller->execute()
#11 /Users/Ayce/Desktop/htdocs/premier/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin))
#12 /Users/Ayce/Desktop/htdocs/premier/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#13 /Users/Ayce/Desktop/htdocs/premier/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#14 /Users/Ayce/Desktop/htdocs/premier/index.php(118): Kohana_Request->execute()
#15 {main} in /Users/Ayce/Desktop/htdocs/premier/application/views/template/navigation.php:41
2013-09-30 21:39:16 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method Auth_ORM::get_role() ~ APPPATH/views/template/navigation.php [ 41 ] in file:line
2013-09-30 21:39:16 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-09-30 21:49:06 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: role ~ APPPATH/views/template/navigation.php [ 41 ] in /Users/Ayce/Desktop/htdocs/premier/application/views/template/navigation.php:41
2013-09-30 21:49:06 --- DEBUG: #0 /Users/Ayce/Desktop/htdocs/premier/application/views/template/navigation.php(41): Kohana_Core::error_handler(8, 'Undefined varia...', '/Users/Ayce/Des...', 41, Array)
#1 /Users/Ayce/Desktop/htdocs/premier/system/classes/Kohana/View.php(61): include('/Users/Ayce/Des...')
#2 /Users/Ayce/Desktop/htdocs/premier/system/classes/Kohana/View.php(348): Kohana_View::capture('/Users/Ayce/Des...', Array)
#3 /Users/Ayce/Desktop/htdocs/premier/system/classes/Kohana/View.php(228): Kohana_View->render()
#4 /Users/Ayce/Desktop/htdocs/premier/application/views/template/main.php(13): Kohana_View->__toString()
#5 /Users/Ayce/Desktop/htdocs/premier/system/classes/Kohana/View.php(61): include('/Users/Ayce/Des...')
#6 /Users/Ayce/Desktop/htdocs/premier/system/classes/Kohana/View.php(348): Kohana_View::capture('/Users/Ayce/Des...', Array)
#7 /Users/Ayce/Desktop/htdocs/premier/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#8 /Users/Ayce/Desktop/htdocs/premier/application/classes/Controller/Layout.php(23): Kohana_Controller_Template->after()
#9 /Users/Ayce/Desktop/htdocs/premier/system/classes/Kohana/Controller.php(87): Controller_Layout->after()
#10 [internal function]: Kohana_Controller->execute()
#11 /Users/Ayce/Desktop/htdocs/premier/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin))
#12 /Users/Ayce/Desktop/htdocs/premier/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#13 /Users/Ayce/Desktop/htdocs/premier/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#14 /Users/Ayce/Desktop/htdocs/premier/index.php(118): Kohana_Request->execute()
#15 {main} in /Users/Ayce/Desktop/htdocs/premier/application/views/template/navigation.php:41