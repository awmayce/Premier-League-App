<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2013-10-02 18:46:26 --- EMERGENCY: ErrorException [ 1 ]: Using $this when not in object context ~ APPPATH/views/app.php [ 2 ] in file:line
2013-10-02 18:46:26 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-10-02 18:46:46 --- EMERGENCY: ErrorException [ 1 ]: Using $this when not in object context ~ APPPATH/views/app.php [ 2 ] in file:line
2013-10-02 18:46:46 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-10-02 18:55:33 --- EMERGENCY: ErrorException [ 8 ]: Use of undefined constant name - assumed 'name' ~ APPPATH/views/app.php [ 18 ] in /Users/Ayce/Desktop/htdocs/premier/application/views/app.php:18
2013-10-02 18:55:33 --- DEBUG: #0 /Users/Ayce/Desktop/htdocs/premier/application/views/app.php(18): Kohana_Core::error_handler(8, 'Use of undefine...', '/Users/Ayce/Des...', 18, Array)
#1 /Users/Ayce/Desktop/htdocs/premier/system/classes/Kohana/View.php(61): include('/Users/Ayce/Des...')
#2 /Users/Ayce/Desktop/htdocs/premier/system/classes/Kohana/View.php(348): Kohana_View::capture('/Users/Ayce/Des...', Array)
#3 /Users/Ayce/Desktop/htdocs/premier/system/classes/Kohana/View.php(228): Kohana_View->render()
#4 /Users/Ayce/Desktop/htdocs/premier/application/views/template/main.php(20): Kohana_View->__toString()
#5 /Users/Ayce/Desktop/htdocs/premier/system/classes/Kohana/View.php(61): include('/Users/Ayce/Des...')
#6 /Users/Ayce/Desktop/htdocs/premier/system/classes/Kohana/View.php(348): Kohana_View::capture('/Users/Ayce/Des...', Array)
#7 /Users/Ayce/Desktop/htdocs/premier/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#8 /Users/Ayce/Desktop/htdocs/premier/application/classes/Controller/Layout.php(32): Kohana_Controller_Template->after()
#9 /Users/Ayce/Desktop/htdocs/premier/system/classes/Kohana/Controller.php(87): Controller_Layout->after()
#10 [internal function]: Kohana_Controller->execute()
#11 /Users/Ayce/Desktop/htdocs/premier/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_App))
#12 /Users/Ayce/Desktop/htdocs/premier/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#13 /Users/Ayce/Desktop/htdocs/premier/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#14 /Users/Ayce/Desktop/htdocs/premier/index.php(118): Kohana_Request->execute()
#15 {main} in /Users/Ayce/Desktop/htdocs/premier/application/views/app.php:18
2013-10-02 19:23:45 --- EMERGENCY: ErrorException [ 8 ]: Undefined property: Database_MySQL_Result::$id ~ APPPATH/views/app.php [ 7 ] in /Users/Ayce/Desktop/htdocs/premier/application/views/app.php:7
2013-10-02 19:23:45 --- DEBUG: #0 /Users/Ayce/Desktop/htdocs/premier/application/views/app.php(7): Kohana_Core::error_handler(8, 'Undefined prope...', '/Users/Ayce/Des...', 7, Array)
#1 /Users/Ayce/Desktop/htdocs/premier/system/classes/Kohana/View.php(61): include('/Users/Ayce/Des...')
#2 /Users/Ayce/Desktop/htdocs/premier/system/classes/Kohana/View.php(348): Kohana_View::capture('/Users/Ayce/Des...', Array)
#3 /Users/Ayce/Desktop/htdocs/premier/system/classes/Kohana/View.php(228): Kohana_View->render()
#4 /Users/Ayce/Desktop/htdocs/premier/application/views/template/main.php(21): Kohana_View->__toString()
#5 /Users/Ayce/Desktop/htdocs/premier/system/classes/Kohana/View.php(61): include('/Users/Ayce/Des...')
#6 /Users/Ayce/Desktop/htdocs/premier/system/classes/Kohana/View.php(348): Kohana_View::capture('/Users/Ayce/Des...', Array)
#7 /Users/Ayce/Desktop/htdocs/premier/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#8 /Users/Ayce/Desktop/htdocs/premier/application/classes/Controller/Layout.php(32): Kohana_Controller_Template->after()
#9 /Users/Ayce/Desktop/htdocs/premier/system/classes/Kohana/Controller.php(87): Controller_Layout->after()
#10 [internal function]: Kohana_Controller->execute()
#11 /Users/Ayce/Desktop/htdocs/premier/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_App))
#12 /Users/Ayce/Desktop/htdocs/premier/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#13 /Users/Ayce/Desktop/htdocs/premier/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#14 /Users/Ayce/Desktop/htdocs/premier/index.php(118): Kohana_Request->execute()
#15 {main} in /Users/Ayce/Desktop/htdocs/premier/application/views/app.php:7
2013-10-02 19:39:12 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: app_description ~ APPPATH/views/app.php [ 15 ] in /Users/Ayce/Desktop/htdocs/premier/application/views/app.php:15
2013-10-02 19:39:12 --- DEBUG: #0 /Users/Ayce/Desktop/htdocs/premier/application/views/app.php(15): Kohana_Core::error_handler(8, 'Undefined varia...', '/Users/Ayce/Des...', 15, Array)
#1 /Users/Ayce/Desktop/htdocs/premier/system/classes/Kohana/View.php(61): include('/Users/Ayce/Des...')
#2 /Users/Ayce/Desktop/htdocs/premier/system/classes/Kohana/View.php(348): Kohana_View::capture('/Users/Ayce/Des...', Array)
#3 /Users/Ayce/Desktop/htdocs/premier/system/classes/Kohana/View.php(228): Kohana_View->render()
#4 /Users/Ayce/Desktop/htdocs/premier/application/views/template/main.php(21): Kohana_View->__toString()
#5 /Users/Ayce/Desktop/htdocs/premier/system/classes/Kohana/View.php(61): include('/Users/Ayce/Des...')
#6 /Users/Ayce/Desktop/htdocs/premier/system/classes/Kohana/View.php(348): Kohana_View::capture('/Users/Ayce/Des...', Array)
#7 /Users/Ayce/Desktop/htdocs/premier/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#8 /Users/Ayce/Desktop/htdocs/premier/application/classes/Controller/Layout.php(32): Kohana_Controller_Template->after()
#9 /Users/Ayce/Desktop/htdocs/premier/system/classes/Kohana/Controller.php(87): Controller_Layout->after()
#10 [internal function]: Kohana_Controller->execute()
#11 /Users/Ayce/Desktop/htdocs/premier/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_App))
#12 /Users/Ayce/Desktop/htdocs/premier/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#13 /Users/Ayce/Desktop/htdocs/premier/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#14 /Users/Ayce/Desktop/htdocs/premier/index.php(118): Kohana_Request->execute()
#15 {main} in /Users/Ayce/Desktop/htdocs/premier/application/views/app.php:15
2013-10-02 19:50:56 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected '}', expecting ',' or ';' ~ APPPATH/views/app.php [ 20 ] in file:line
2013-10-02 19:50:56 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-10-02 19:52:31 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected '$team' (T_VARIABLE) ~ APPPATH/views/app.php [ 10 ] in file:line
2013-10-02 19:52:31 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-10-02 20:10:41 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected '}' ~ APPPATH/classes/Controller/User.php [ 10 ] in file:line
2013-10-02 20:10:41 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-10-02 20:11:22 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: logged_in ~ APPPATH/classes/Controller/User.php [ 8 ] in /Users/Ayce/Desktop/htdocs/premier/application/classes/Controller/User.php:8
2013-10-02 20:11:22 --- DEBUG: #0 /Users/Ayce/Desktop/htdocs/premier/application/classes/Controller/User.php(8): Kohana_Core::error_handler(8, 'Undefined varia...', '/Users/Ayce/Des...', 8, Array)
#1 /Users/Ayce/Desktop/htdocs/premier/system/classes/Kohana/Controller.php(84): Controller_User->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 /Users/Ayce/Desktop/htdocs/premier/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#4 /Users/Ayce/Desktop/htdocs/premier/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /Users/Ayce/Desktop/htdocs/premier/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /Users/Ayce/Desktop/htdocs/premier/index.php(118): Kohana_Request->execute()
#7 {main} in /Users/Ayce/Desktop/htdocs/premier/application/classes/Controller/User.php:8
2013-10-02 20:12:00 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: title ~ APPPATH/views/template/main.php [ 5 ] in /Users/Ayce/Desktop/htdocs/premier/application/views/template/main.php:5
2013-10-02 20:12:00 --- DEBUG: #0 /Users/Ayce/Desktop/htdocs/premier/application/views/template/main.php(5): Kohana_Core::error_handler(8, 'Undefined varia...', '/Users/Ayce/Des...', 5, Array)
#1 /Users/Ayce/Desktop/htdocs/premier/system/classes/Kohana/View.php(61): include('/Users/Ayce/Des...')
#2 /Users/Ayce/Desktop/htdocs/premier/system/classes/Kohana/View.php(348): Kohana_View::capture('/Users/Ayce/Des...', Array)
#3 /Users/Ayce/Desktop/htdocs/premier/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#4 /Users/Ayce/Desktop/htdocs/premier/application/classes/Controller/Layout.php(32): Kohana_Controller_Template->after()
#5 /Users/Ayce/Desktop/htdocs/premier/system/classes/Kohana/Controller.php(87): Controller_Layout->after()
#6 [internal function]: Kohana_Controller->execute()
#7 /Users/Ayce/Desktop/htdocs/premier/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#8 /Users/Ayce/Desktop/htdocs/premier/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 /Users/Ayce/Desktop/htdocs/premier/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#10 /Users/Ayce/Desktop/htdocs/premier/index.php(118): Kohana_Request->execute()
#11 {main} in /Users/Ayce/Desktop/htdocs/premier/application/views/template/main.php:5
2013-10-02 20:13:34 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: user ~ APPPATH/classes/Controller/User.php [ 9 ] in /Users/Ayce/Desktop/htdocs/premier/application/classes/Controller/User.php:9
2013-10-02 20:13:34 --- DEBUG: #0 /Users/Ayce/Desktop/htdocs/premier/application/classes/Controller/User.php(9): Kohana_Core::error_handler(8, 'Undefined varia...', '/Users/Ayce/Des...', 9, Array)
#1 /Users/Ayce/Desktop/htdocs/premier/system/classes/Kohana/Controller.php(84): Controller_User->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 /Users/Ayce/Desktop/htdocs/premier/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#4 /Users/Ayce/Desktop/htdocs/premier/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /Users/Ayce/Desktop/htdocs/premier/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /Users/Ayce/Desktop/htdocs/premier/index.php(118): Kohana_Request->execute()
#7 {main} in /Users/Ayce/Desktop/htdocs/premier/application/classes/Controller/User.php:9
2013-10-02 20:14:41 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: user_id ~ APPPATH/classes/Controller/User.php [ 9 ] in /Users/Ayce/Desktop/htdocs/premier/application/classes/Controller/User.php:9
2013-10-02 20:14:41 --- DEBUG: #0 /Users/Ayce/Desktop/htdocs/premier/application/classes/Controller/User.php(9): Kohana_Core::error_handler(8, 'Undefined varia...', '/Users/Ayce/Des...', 9, Array)
#1 /Users/Ayce/Desktop/htdocs/premier/system/classes/Kohana/Controller.php(84): Controller_User->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 /Users/Ayce/Desktop/htdocs/premier/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#4 /Users/Ayce/Desktop/htdocs/premier/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /Users/Ayce/Desktop/htdocs/premier/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /Users/Ayce/Desktop/htdocs/premier/index.php(118): Kohana_Request->execute()
#7 {main} in /Users/Ayce/Desktop/htdocs/premier/application/classes/Controller/User.php:9
2013-10-02 20:16:19 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: user_id ~ APPPATH/classes/Controller/User.php [ 9 ] in /Users/Ayce/Desktop/htdocs/premier/application/classes/Controller/User.php:9
2013-10-02 20:16:19 --- DEBUG: #0 /Users/Ayce/Desktop/htdocs/premier/application/classes/Controller/User.php(9): Kohana_Core::error_handler(8, 'Undefined varia...', '/Users/Ayce/Des...', 9, Array)
#1 /Users/Ayce/Desktop/htdocs/premier/system/classes/Kohana/Controller.php(84): Controller_User->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 /Users/Ayce/Desktop/htdocs/premier/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#4 /Users/Ayce/Desktop/htdocs/premier/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /Users/Ayce/Desktop/htdocs/premier/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /Users/Ayce/Desktop/htdocs/premier/index.php(118): Kohana_Request->execute()
#7 {main} in /Users/Ayce/Desktop/htdocs/premier/application/classes/Controller/User.php:9
2013-10-02 20:18:18 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: user_id ~ APPPATH/classes/Controller/User.php [ 9 ] in /Users/Ayce/Desktop/htdocs/premier/application/classes/Controller/User.php:9
2013-10-02 20:18:18 --- DEBUG: #0 /Users/Ayce/Desktop/htdocs/premier/application/classes/Controller/User.php(9): Kohana_Core::error_handler(8, 'Undefined varia...', '/Users/Ayce/Des...', 9, Array)
#1 /Users/Ayce/Desktop/htdocs/premier/system/classes/Kohana/Controller.php(84): Controller_User->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 /Users/Ayce/Desktop/htdocs/premier/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#4 /Users/Ayce/Desktop/htdocs/premier/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /Users/Ayce/Desktop/htdocs/premier/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /Users/Ayce/Desktop/htdocs/premier/index.php(118): Kohana_Request->execute()
#7 {main} in /Users/Ayce/Desktop/htdocs/premier/application/classes/Controller/User.php:9
2013-10-02 20:19:08 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: user_id ~ APPPATH/classes/Controller/User.php [ 9 ] in /Users/Ayce/Desktop/htdocs/premier/application/classes/Controller/User.php:9
2013-10-02 20:19:08 --- DEBUG: #0 /Users/Ayce/Desktop/htdocs/premier/application/classes/Controller/User.php(9): Kohana_Core::error_handler(8, 'Undefined varia...', '/Users/Ayce/Des...', 9, Array)
#1 /Users/Ayce/Desktop/htdocs/premier/system/classes/Kohana/Controller.php(84): Controller_User->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 /Users/Ayce/Desktop/htdocs/premier/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#4 /Users/Ayce/Desktop/htdocs/premier/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /Users/Ayce/Desktop/htdocs/premier/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /Users/Ayce/Desktop/htdocs/premier/index.php(118): Kohana_Request->execute()
#7 {main} in /Users/Ayce/Desktop/htdocs/premier/application/classes/Controller/User.php:9
2013-10-02 20:27:54 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: user_id ~ APPPATH/classes/Controller/User.php [ 9 ] in /Users/Ayce/Desktop/htdocs/premier/application/classes/Controller/User.php:9
2013-10-02 20:27:54 --- DEBUG: #0 /Users/Ayce/Desktop/htdocs/premier/application/classes/Controller/User.php(9): Kohana_Core::error_handler(8, 'Undefined varia...', '/Users/Ayce/Des...', 9, Array)
#1 /Users/Ayce/Desktop/htdocs/premier/system/classes/Kohana/Controller.php(84): Controller_User->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 /Users/Ayce/Desktop/htdocs/premier/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#4 /Users/Ayce/Desktop/htdocs/premier/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /Users/Ayce/Desktop/htdocs/premier/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /Users/Ayce/Desktop/htdocs/premier/index.php(118): Kohana_Request->execute()
#7 {main} in /Users/Ayce/Desktop/htdocs/premier/application/classes/Controller/User.php:9
2013-10-02 20:28:53 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: user_id ~ APPPATH/classes/Controller/User.php [ 9 ] in /Users/Ayce/Desktop/htdocs/premier/application/classes/Controller/User.php:9
2013-10-02 20:28:53 --- DEBUG: #0 /Users/Ayce/Desktop/htdocs/premier/application/classes/Controller/User.php(9): Kohana_Core::error_handler(8, 'Undefined varia...', '/Users/Ayce/Des...', 9, Array)
#1 /Users/Ayce/Desktop/htdocs/premier/system/classes/Kohana/Controller.php(84): Controller_User->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 /Users/Ayce/Desktop/htdocs/premier/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#4 /Users/Ayce/Desktop/htdocs/premier/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /Users/Ayce/Desktop/htdocs/premier/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /Users/Ayce/Desktop/htdocs/premier/index.php(118): Kohana_Request->execute()
#7 {main} in /Users/Ayce/Desktop/htdocs/premier/application/classes/Controller/User.php:9
2013-10-02 20:36:42 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method Auth_ORM::find_user() ~ APPPATH/classes/Controller/User.php [ 41 ] in file:line
2013-10-02 20:36:42 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-10-02 20:38:25 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method Auth::instacne() ~ APPPATH/classes/Controller/User.php [ 42 ] in file:line
2013-10-02 20:38:25 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-10-02 20:48:10 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: team ~ APPPATH/views/auth/update.php [ 23 ] in /Users/Ayce/Desktop/htdocs/premier/application/views/auth/update.php:23
2013-10-02 20:48:10 --- DEBUG: #0 /Users/Ayce/Desktop/htdocs/premier/application/views/auth/update.php(23): Kohana_Core::error_handler(8, 'Undefined varia...', '/Users/Ayce/Des...', 23, Array)
#1 /Users/Ayce/Desktop/htdocs/premier/system/classes/Kohana/View.php(61): include('/Users/Ayce/Des...')
#2 /Users/Ayce/Desktop/htdocs/premier/system/classes/Kohana/View.php(348): Kohana_View::capture('/Users/Ayce/Des...', Array)
#3 /Users/Ayce/Desktop/htdocs/premier/system/classes/Kohana/View.php(228): Kohana_View->render()
#4 /Users/Ayce/Desktop/htdocs/premier/application/views/template/main.php(21): Kohana_View->__toString()
#5 /Users/Ayce/Desktop/htdocs/premier/system/classes/Kohana/View.php(61): include('/Users/Ayce/Des...')
#6 /Users/Ayce/Desktop/htdocs/premier/system/classes/Kohana/View.php(348): Kohana_View::capture('/Users/Ayce/Des...', Array)
#7 /Users/Ayce/Desktop/htdocs/premier/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#8 /Users/Ayce/Desktop/htdocs/premier/application/classes/Controller/Layout.php(34): Kohana_Controller_Template->after()
#9 /Users/Ayce/Desktop/htdocs/premier/system/classes/Kohana/Controller.php(87): Controller_Layout->after()
#10 [internal function]: Kohana_Controller->execute()
#11 /Users/Ayce/Desktop/htdocs/premier/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#12 /Users/Ayce/Desktop/htdocs/premier/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#13 /Users/Ayce/Desktop/htdocs/premier/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#14 /Users/Ayce/Desktop/htdocs/premier/index.php(118): Kohana_Request->execute()
#15 {main} in /Users/Ayce/Desktop/htdocs/premier/application/views/auth/update.php:23
2013-10-02 20:49:26 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: team ~ APPPATH/views/auth/update.php [ 23 ] in /Users/Ayce/Desktop/htdocs/premier/application/views/auth/update.php:23
2013-10-02 20:49:26 --- DEBUG: #0 /Users/Ayce/Desktop/htdocs/premier/application/views/auth/update.php(23): Kohana_Core::error_handler(8, 'Undefined varia...', '/Users/Ayce/Des...', 23, Array)
#1 /Users/Ayce/Desktop/htdocs/premier/system/classes/Kohana/View.php(61): include('/Users/Ayce/Des...')
#2 /Users/Ayce/Desktop/htdocs/premier/system/classes/Kohana/View.php(348): Kohana_View::capture('/Users/Ayce/Des...', Array)
#3 /Users/Ayce/Desktop/htdocs/premier/system/classes/Kohana/View.php(228): Kohana_View->render()
#4 /Users/Ayce/Desktop/htdocs/premier/application/views/template/main.php(21): Kohana_View->__toString()
#5 /Users/Ayce/Desktop/htdocs/premier/system/classes/Kohana/View.php(61): include('/Users/Ayce/Des...')
#6 /Users/Ayce/Desktop/htdocs/premier/system/classes/Kohana/View.php(348): Kohana_View::capture('/Users/Ayce/Des...', Array)
#7 /Users/Ayce/Desktop/htdocs/premier/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#8 /Users/Ayce/Desktop/htdocs/premier/application/classes/Controller/Layout.php(34): Kohana_Controller_Template->after()
#9 /Users/Ayce/Desktop/htdocs/premier/system/classes/Kohana/Controller.php(87): Controller_Layout->after()
#10 [internal function]: Kohana_Controller->execute()
#11 /Users/Ayce/Desktop/htdocs/premier/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#12 /Users/Ayce/Desktop/htdocs/premier/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#13 /Users/Ayce/Desktop/htdocs/premier/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#14 /Users/Ayce/Desktop/htdocs/premier/index.php(118): Kohana_Request->execute()
#15 {main} in /Users/Ayce/Desktop/htdocs/premier/application/views/auth/update.php:23
2013-10-02 20:51:00 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method Database_MySQL_Result::order_by() ~ APPPATH/classes/Controller/User.php [ 42 ] in file:line
2013-10-02 20:51:00 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-10-02 20:56:29 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: user ~ APPPATH/views/auth/update.php [ 8 ] in /Users/Ayce/Desktop/htdocs/premier/application/views/auth/update.php:8
2013-10-02 20:56:29 --- DEBUG: #0 /Users/Ayce/Desktop/htdocs/premier/application/views/auth/update.php(8): Kohana_Core::error_handler(8, 'Undefined varia...', '/Users/Ayce/Des...', 8, Array)
#1 /Users/Ayce/Desktop/htdocs/premier/system/classes/Kohana/View.php(61): include('/Users/Ayce/Des...')
#2 /Users/Ayce/Desktop/htdocs/premier/system/classes/Kohana/View.php(348): Kohana_View::capture('/Users/Ayce/Des...', Array)
#3 /Users/Ayce/Desktop/htdocs/premier/system/classes/Kohana/View.php(228): Kohana_View->render()
#4 /Users/Ayce/Desktop/htdocs/premier/application/views/template/main.php(21): Kohana_View->__toString()
#5 /Users/Ayce/Desktop/htdocs/premier/system/classes/Kohana/View.php(61): include('/Users/Ayce/Des...')
#6 /Users/Ayce/Desktop/htdocs/premier/system/classes/Kohana/View.php(348): Kohana_View::capture('/Users/Ayce/Des...', Array)
#7 /Users/Ayce/Desktop/htdocs/premier/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#8 /Users/Ayce/Desktop/htdocs/premier/application/classes/Controller/Layout.php(34): Kohana_Controller_Template->after()
#9 /Users/Ayce/Desktop/htdocs/premier/system/classes/Kohana/Controller.php(87): Controller_Layout->after()
#10 [internal function]: Kohana_Controller->execute()
#11 /Users/Ayce/Desktop/htdocs/premier/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#12 /Users/Ayce/Desktop/htdocs/premier/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#13 /Users/Ayce/Desktop/htdocs/premier/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#14 /Users/Ayce/Desktop/htdocs/premier/index.php(118): Kohana_Request->execute()
#15 {main} in /Users/Ayce/Desktop/htdocs/premier/application/views/auth/update.php:8
2013-10-02 21:06:48 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected '">Chelsea"' (T_CONSTANT_ENCAPSED_STRING), expecting ',' or ';' ~ APPPATH/views/auth/update.php [ 24 ] in file:line
2013-10-02 21:06:48 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-10-02 21:07:08 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected '">None"' (T_CONSTANT_ENCAPSED_STRING), expecting ',' or ';' ~ APPPATH/views/auth/update.php [ 28 ] in file:line
2013-10-02 21:07:08 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-10-02 21:44:14 --- EMERGENCY: ErrorException [ 1 ]: Class 'Modal_Auth_User' not found ~ APPPATH/classes/Model/users.php [ 3 ] in file:line
2013-10-02 21:44:14 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-10-02 21:45:58 --- EMERGENCY: ErrorException [ 1 ]: Function name must be a string ~ APPPATH/classes/Controller/User.php [ 46 ] in file:line
2013-10-02 21:45:58 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-10-02 21:48:22 --- EMERGENCY: ErrorException [ 1 ]: Function name must be a string ~ APPPATH/classes/Controller/User.php [ 45 ] in file:line
2013-10-02 21:48:22 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-10-02 21:50:04 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected '}' ~ APPPATH/classes/Controller/User.php [ 49 ] in file:line
2013-10-02 21:50:04 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-10-02 21:50:12 --- EMERGENCY: ErrorException [ 4096 ]: Argument 1 passed to Kohana_ORM::save() must be an instance of Validation, instance of Model_User given, called in /Users/Ayce/Desktop/htdocs/premier/application/classes/Controller/User.php on line 47 and defined ~ MODPATH/orm/classes/Kohana/ORM.php [ 1419 ] in /Users/Ayce/Desktop/htdocs/premier/modules/orm/classes/Kohana/ORM.php:1419
2013-10-02 21:50:12 --- DEBUG: #0 /Users/Ayce/Desktop/htdocs/premier/modules/orm/classes/Kohana/ORM.php(1419): Kohana_Core::error_handler(4096, 'Argument 1 pass...', '/Users/Ayce/Des...', 1419, Array)
#1 /Users/Ayce/Desktop/htdocs/premier/application/classes/Controller/User.php(47): Kohana_ORM->save(Object(Model_User))
#2 /Users/Ayce/Desktop/htdocs/premier/system/classes/Kohana/Controller.php(84): Controller_User->action_update()
#3 [internal function]: Kohana_Controller->execute()
#4 /Users/Ayce/Desktop/htdocs/premier/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#5 /Users/Ayce/Desktop/htdocs/premier/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /Users/Ayce/Desktop/htdocs/premier/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 /Users/Ayce/Desktop/htdocs/premier/index.php(118): Kohana_Request->execute()
#8 {main} in /Users/Ayce/Desktop/htdocs/premier/modules/orm/classes/Kohana/ORM.php:1419
2013-10-02 21:50:49 --- EMERGENCY: ORM_Validation_Exception [ 0 ]: Failed to validate array ~ MODPATH/orm/classes/Kohana/ORM.php [ 1275 ] in /Users/Ayce/Desktop/htdocs/premier/modules/orm/classes/Kohana/ORM.php:1302
2013-10-02 21:50:49 --- DEBUG: #0 /Users/Ayce/Desktop/htdocs/premier/modules/orm/classes/Kohana/ORM.php(1302): Kohana_ORM->check(NULL)
#1 /Users/Ayce/Desktop/htdocs/premier/modules/orm/classes/Kohana/ORM.php(1421): Kohana_ORM->create(NULL)
#2 /Users/Ayce/Desktop/htdocs/premier/application/classes/Controller/User.php(47): Kohana_ORM->save()
#3 /Users/Ayce/Desktop/htdocs/premier/system/classes/Kohana/Controller.php(84): Controller_User->action_update()
#4 [internal function]: Kohana_Controller->execute()
#5 /Users/Ayce/Desktop/htdocs/premier/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#6 /Users/Ayce/Desktop/htdocs/premier/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /Users/Ayce/Desktop/htdocs/premier/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 /Users/Ayce/Desktop/htdocs/premier/index.php(118): Kohana_Request->execute()
#9 {main} in /Users/Ayce/Desktop/htdocs/premier/modules/orm/classes/Kohana/ORM.php:1302
2013-10-02 21:51:58 --- EMERGENCY: ORM_Validation_Exception [ 0 ]: Failed to validate array ~ MODPATH/orm/classes/Kohana/ORM.php [ 1275 ] in /Users/Ayce/Desktop/htdocs/premier/modules/orm/classes/Kohana/ORM.php:1302
2013-10-02 21:51:58 --- DEBUG: #0 /Users/Ayce/Desktop/htdocs/premier/modules/orm/classes/Kohana/ORM.php(1302): Kohana_ORM->check(NULL)
#1 /Users/Ayce/Desktop/htdocs/premier/modules/orm/classes/Kohana/ORM.php(1421): Kohana_ORM->create(NULL)
#2 /Users/Ayce/Desktop/htdocs/premier/application/classes/Controller/User.php(47): Kohana_ORM->save()
#3 /Users/Ayce/Desktop/htdocs/premier/system/classes/Kohana/Controller.php(84): Controller_User->action_update()
#4 [internal function]: Kohana_Controller->execute()
#5 /Users/Ayce/Desktop/htdocs/premier/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#6 /Users/Ayce/Desktop/htdocs/premier/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /Users/Ayce/Desktop/htdocs/premier/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 /Users/Ayce/Desktop/htdocs/premier/index.php(118): Kohana_Request->execute()
#9 {main} in /Users/Ayce/Desktop/htdocs/premier/modules/orm/classes/Kohana/ORM.php:1302
2013-10-02 21:52:02 --- EMERGENCY: ORM_Validation_Exception [ 0 ]: Failed to validate array ~ MODPATH/orm/classes/Kohana/ORM.php [ 1275 ] in /Users/Ayce/Desktop/htdocs/premier/modules/orm/classes/Kohana/ORM.php:1302
2013-10-02 21:52:02 --- DEBUG: #0 /Users/Ayce/Desktop/htdocs/premier/modules/orm/classes/Kohana/ORM.php(1302): Kohana_ORM->check(NULL)
#1 /Users/Ayce/Desktop/htdocs/premier/modules/orm/classes/Kohana/ORM.php(1421): Kohana_ORM->create(NULL)
#2 /Users/Ayce/Desktop/htdocs/premier/application/classes/Controller/User.php(47): Kohana_ORM->save()
#3 /Users/Ayce/Desktop/htdocs/premier/system/classes/Kohana/Controller.php(84): Controller_User->action_update()
#4 [internal function]: Kohana_Controller->execute()
#5 /Users/Ayce/Desktop/htdocs/premier/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#6 /Users/Ayce/Desktop/htdocs/premier/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /Users/Ayce/Desktop/htdocs/premier/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 /Users/Ayce/Desktop/htdocs/premier/index.php(118): Kohana_Request->execute()
#9 {main} in /Users/Ayce/Desktop/htdocs/premier/modules/orm/classes/Kohana/ORM.php:1302
2013-10-02 21:55:38 --- EMERGENCY: ORM_Validation_Exception [ 0 ]: Failed to validate array ~ MODPATH/orm/classes/Kohana/ORM.php [ 1275 ] in /Users/Ayce/Desktop/htdocs/premier/modules/orm/classes/Kohana/ORM.php:1302
2013-10-02 21:55:38 --- DEBUG: #0 /Users/Ayce/Desktop/htdocs/premier/modules/orm/classes/Kohana/ORM.php(1302): Kohana_ORM->check(NULL)
#1 /Users/Ayce/Desktop/htdocs/premier/modules/orm/classes/Kohana/ORM.php(1421): Kohana_ORM->create(NULL)
#2 /Users/Ayce/Desktop/htdocs/premier/application/classes/Controller/User.php(47): Kohana_ORM->save()
#3 /Users/Ayce/Desktop/htdocs/premier/system/classes/Kohana/Controller.php(84): Controller_User->action_update()
#4 [internal function]: Kohana_Controller->execute()
#5 /Users/Ayce/Desktop/htdocs/premier/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#6 /Users/Ayce/Desktop/htdocs/premier/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /Users/Ayce/Desktop/htdocs/premier/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 /Users/Ayce/Desktop/htdocs/premier/index.php(118): Kohana_Request->execute()
#9 {main} in /Users/Ayce/Desktop/htdocs/premier/modules/orm/classes/Kohana/ORM.php:1302
2013-10-02 21:57:59 --- EMERGENCY: ORM_Validation_Exception [ 0 ]: Failed to validate array ~ MODPATH/orm/classes/Kohana/ORM.php [ 1275 ] in /Users/Ayce/Desktop/htdocs/premier/modules/orm/classes/Kohana/ORM.php:1302
2013-10-02 21:57:59 --- DEBUG: #0 /Users/Ayce/Desktop/htdocs/premier/modules/orm/classes/Kohana/ORM.php(1302): Kohana_ORM->check(NULL)
#1 /Users/Ayce/Desktop/htdocs/premier/modules/orm/classes/Kohana/ORM.php(1421): Kohana_ORM->create(NULL)
#2 /Users/Ayce/Desktop/htdocs/premier/application/classes/Controller/User.php(47): Kohana_ORM->save()
#3 /Users/Ayce/Desktop/htdocs/premier/system/classes/Kohana/Controller.php(84): Controller_User->action_update()
#4 [internal function]: Kohana_Controller->execute()
#5 /Users/Ayce/Desktop/htdocs/premier/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#6 /Users/Ayce/Desktop/htdocs/premier/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /Users/Ayce/Desktop/htdocs/premier/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 /Users/Ayce/Desktop/htdocs/premier/index.php(118): Kohana_Request->execute()
#9 {main} in /Users/Ayce/Desktop/htdocs/premier/modules/orm/classes/Kohana/ORM.php:1302
2013-10-02 21:58:12 --- EMERGENCY: ORM_Validation_Exception [ 0 ]: Failed to validate array ~ MODPATH/orm/classes/Kohana/ORM.php [ 1275 ] in /Users/Ayce/Desktop/htdocs/premier/modules/orm/classes/Kohana/ORM.php:1302
2013-10-02 21:58:12 --- DEBUG: #0 /Users/Ayce/Desktop/htdocs/premier/modules/orm/classes/Kohana/ORM.php(1302): Kohana_ORM->check(NULL)
#1 /Users/Ayce/Desktop/htdocs/premier/modules/orm/classes/Kohana/ORM.php(1421): Kohana_ORM->create(NULL)
#2 /Users/Ayce/Desktop/htdocs/premier/application/classes/Controller/User.php(47): Kohana_ORM->save()
#3 /Users/Ayce/Desktop/htdocs/premier/system/classes/Kohana/Controller.php(84): Controller_User->action_update()
#4 [internal function]: Kohana_Controller->execute()
#5 /Users/Ayce/Desktop/htdocs/premier/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#6 /Users/Ayce/Desktop/htdocs/premier/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /Users/Ayce/Desktop/htdocs/premier/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 /Users/Ayce/Desktop/htdocs/premier/index.php(118): Kohana_Request->execute()
#9 {main} in /Users/Ayce/Desktop/htdocs/premier/modules/orm/classes/Kohana/ORM.php:1302
2013-10-02 21:58:19 --- EMERGENCY: ORM_Validation_Exception [ 0 ]: Failed to validate array ~ MODPATH/orm/classes/Kohana/ORM.php [ 1275 ] in /Users/Ayce/Desktop/htdocs/premier/modules/orm/classes/Kohana/ORM.php:1302
2013-10-02 21:58:19 --- DEBUG: #0 /Users/Ayce/Desktop/htdocs/premier/modules/orm/classes/Kohana/ORM.php(1302): Kohana_ORM->check(NULL)
#1 /Users/Ayce/Desktop/htdocs/premier/modules/orm/classes/Kohana/ORM.php(1421): Kohana_ORM->create(NULL)
#2 /Users/Ayce/Desktop/htdocs/premier/application/classes/Controller/User.php(47): Kohana_ORM->save()
#3 /Users/Ayce/Desktop/htdocs/premier/system/classes/Kohana/Controller.php(84): Controller_User->action_update()
#4 [internal function]: Kohana_Controller->execute()
#5 /Users/Ayce/Desktop/htdocs/premier/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#6 /Users/Ayce/Desktop/htdocs/premier/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /Users/Ayce/Desktop/htdocs/premier/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 /Users/Ayce/Desktop/htdocs/premier/index.php(118): Kohana_Request->execute()
#9 {main} in /Users/Ayce/Desktop/htdocs/premier/modules/orm/classes/Kohana/ORM.php:1302