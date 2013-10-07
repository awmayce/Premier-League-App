<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2013-10-03 15:13:14 --- EMERGENCY: ORM_Validation_Exception [ 0 ]: Failed to validate array ~ MODPATH/orm/classes/Kohana/ORM.php [ 1275 ] in /Users/Ayce/Desktop/htdocs/premier/modules/orm/classes/Kohana/ORM.php:1302
2013-10-03 15:13:14 --- DEBUG: #0 /Users/Ayce/Desktop/htdocs/premier/modules/orm/classes/Kohana/ORM.php(1302): Kohana_ORM->check(NULL)
#1 /Users/Ayce/Desktop/htdocs/premier/modules/orm/classes/Kohana/ORM.php(1421): Kohana_ORM->create(NULL)
#2 /Users/Ayce/Desktop/htdocs/premier/application/classes/Controller/User.php(47): Kohana_ORM->save()
#3 /Users/Ayce/Desktop/htdocs/premier/system/classes/Kohana/Controller.php(84): Controller_User->action_update()
#4 [internal function]: Kohana_Controller->execute()
#5 /Users/Ayce/Desktop/htdocs/premier/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#6 /Users/Ayce/Desktop/htdocs/premier/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /Users/Ayce/Desktop/htdocs/premier/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 /Users/Ayce/Desktop/htdocs/premier/index.php(118): Kohana_Request->execute()
#9 {main} in /Users/Ayce/Desktop/htdocs/premier/modules/orm/classes/Kohana/ORM.php:1302
2013-10-03 15:25:02 --- EMERGENCY: ErrorException [ 1 ]: Class name must be a valid object or a string ~ APPPATH/classes/Controller/User.php [ 49 ] in file:line
2013-10-03 15:25:02 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-10-03 16:04:31 --- EMERGENCY: View_Exception [ 0 ]: The requested view auth/password could not be found ~ SYSPATH/classes/Kohana/View.php [ 257 ] in /Users/Ayce/Desktop/htdocs/premier/system/classes/Kohana/View.php:137
2013-10-03 16:04:31 --- DEBUG: #0 /Users/Ayce/Desktop/htdocs/premier/system/classes/Kohana/View.php(137): Kohana_View->set_filename('auth/password')
#1 /Users/Ayce/Desktop/htdocs/premier/system/classes/Kohana/View.php(30): Kohana_View->__construct('auth/password', NULL)
#2 /Users/Ayce/Desktop/htdocs/premier/application/classes/Controller/User.php(56): Kohana_View::factory('auth/password')
#3 /Users/Ayce/Desktop/htdocs/premier/system/classes/Kohana/Controller.php(84): Controller_User->action_update()
#4 [internal function]: Kohana_Controller->execute()
#5 /Users/Ayce/Desktop/htdocs/premier/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#6 /Users/Ayce/Desktop/htdocs/premier/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /Users/Ayce/Desktop/htdocs/premier/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 /Users/Ayce/Desktop/htdocs/premier/index.php(118): Kohana_Request->execute()
#9 {main} in /Users/Ayce/Desktop/htdocs/premier/system/classes/Kohana/View.php:137
2013-10-03 16:05:18 --- EMERGENCY: ErrorException [ 2 ]: Creating default object from empty value ~ APPPATH/classes/Controller/User.php [ 45 ] in /Users/Ayce/Desktop/htdocs/premier/application/classes/Controller/User.php:45
2013-10-03 16:05:18 --- DEBUG: #0 /Users/Ayce/Desktop/htdocs/premier/application/classes/Controller/User.php(45): Kohana_Core::error_handler(2, 'Creating defaul...', '/Users/Ayce/Des...', 45, Array)
#1 /Users/Ayce/Desktop/htdocs/premier/system/classes/Kohana/Controller.php(84): Controller_User->action_update()
#2 [internal function]: Kohana_Controller->execute()
#3 /Users/Ayce/Desktop/htdocs/premier/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#4 /Users/Ayce/Desktop/htdocs/premier/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /Users/Ayce/Desktop/htdocs/premier/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /Users/Ayce/Desktop/htdocs/premier/index.php(118): Kohana_Request->execute()
#7 {main} in /Users/Ayce/Desktop/htdocs/premier/application/classes/Controller/User.php:45
2013-10-03 16:06:25 --- EMERGENCY: ErrorException [ 2 ]: Creating default object from empty value ~ APPPATH/classes/Controller/User.php [ 45 ] in /Users/Ayce/Desktop/htdocs/premier/application/classes/Controller/User.php:45
2013-10-03 16:06:25 --- DEBUG: #0 /Users/Ayce/Desktop/htdocs/premier/application/classes/Controller/User.php(45): Kohana_Core::error_handler(2, 'Creating defaul...', '/Users/Ayce/Des...', 45, Array)
#1 /Users/Ayce/Desktop/htdocs/premier/system/classes/Kohana/Controller.php(84): Controller_User->action_update()
#2 [internal function]: Kohana_Controller->execute()
#3 /Users/Ayce/Desktop/htdocs/premier/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#4 /Users/Ayce/Desktop/htdocs/premier/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /Users/Ayce/Desktop/htdocs/premier/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /Users/Ayce/Desktop/htdocs/premier/index.php(118): Kohana_Request->execute()
#7 {main} in /Users/Ayce/Desktop/htdocs/premier/application/classes/Controller/User.php:45
2013-10-03 16:20:44 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method Auth::instace() ~ APPPATH/classes/Controller/User.php [ 74 ] in file:line
2013-10-03 16:20:44 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-10-03 16:21:36 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected '===' (T_IS_IDENTICAL) ~ APPPATH/classes/Controller/User.php [ 75 ] in file:line
2013-10-03 16:21:36 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-10-03 16:24:31 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined function sha512() ~ APPPATH/classes/Controller/User.php [ 77 ] in file:line
2013-10-03 16:24:31 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-10-03 16:25:15 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected '{' ~ APPPATH/classes/Controller/User.php [ 78 ] in file:line
2013-10-03 16:25:15 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-10-03 16:32:51 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected ';' ~ APPPATH/classes/Controller/User.php [ 74 ] in file:line
2013-10-03 16:32:51 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-10-03 16:38:57 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: password ~ APPPATH/classes/Controller/User.php [ 74 ] in /Users/Ayce/Desktop/htdocs/premier/application/classes/Controller/User.php:74
2013-10-03 16:38:57 --- DEBUG: #0 /Users/Ayce/Desktop/htdocs/premier/application/classes/Controller/User.php(74): Kohana_Core::error_handler(8, 'Undefined varia...', '/Users/Ayce/Des...', 74, Array)
#1 /Users/Ayce/Desktop/htdocs/premier/system/classes/Kohana/Controller.php(84): Controller_User->action_changepassword()
#2 [internal function]: Kohana_Controller->execute()
#3 /Users/Ayce/Desktop/htdocs/premier/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#4 /Users/Ayce/Desktop/htdocs/premier/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /Users/Ayce/Desktop/htdocs/premier/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /Users/Ayce/Desktop/htdocs/premier/index.php(118): Kohana_Request->execute()
#7 {main} in /Users/Ayce/Desktop/htdocs/premier/application/classes/Controller/User.php:74
2013-10-03 16:46:09 --- EMERGENCY: ErrorException [ 2 ]: Missing argument 1 for Kohana_Cookie::salt(), called in /Users/Ayce/Desktop/htdocs/premier/application/classes/Controller/User.php on line 77 and defined ~ SYSPATH/classes/Kohana/Cookie.php [ 146 ] in /Users/Ayce/Desktop/htdocs/premier/system/classes/Kohana/Cookie.php:146
2013-10-03 16:46:09 --- DEBUG: #0 /Users/Ayce/Desktop/htdocs/premier/system/classes/Kohana/Cookie.php(146): Kohana_Core::error_handler(2, 'Missing argumen...', '/Users/Ayce/Des...', 146, Array)
#1 /Users/Ayce/Desktop/htdocs/premier/application/classes/Controller/User.php(77): Kohana_Cookie::salt()
#2 /Users/Ayce/Desktop/htdocs/premier/system/classes/Kohana/Controller.php(84): Controller_User->action_changepassword()
#3 [internal function]: Kohana_Controller->execute()
#4 /Users/Ayce/Desktop/htdocs/premier/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#5 /Users/Ayce/Desktop/htdocs/premier/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /Users/Ayce/Desktop/htdocs/premier/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 /Users/Ayce/Desktop/htdocs/premier/index.php(118): Kohana_Request->execute()
#8 {main} in /Users/Ayce/Desktop/htdocs/premier/system/classes/Kohana/Cookie.php:146
2013-10-03 17:08:52 --- EMERGENCY: ErrorException [ 2048 ]: Non-static method Kohana_Auth::hash_password() should not be called statically, assuming $this from incompatible context ~ APPPATH/classes/Controller/User.php [ 83 ] in /Users/Ayce/Desktop/htdocs/premier/application/classes/Controller/User.php:83
2013-10-03 17:08:52 --- DEBUG: #0 /Users/Ayce/Desktop/htdocs/premier/application/classes/Controller/User.php(83): Kohana_Core::error_handler(2048, 'Non-static meth...', '/Users/Ayce/Des...', 83, Array)
#1 /Users/Ayce/Desktop/htdocs/premier/system/classes/Kohana/Controller.php(84): Controller_User->action_changepassword()
#2 [internal function]: Kohana_Controller->execute()
#3 /Users/Ayce/Desktop/htdocs/premier/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#4 /Users/Ayce/Desktop/htdocs/premier/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /Users/Ayce/Desktop/htdocs/premier/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /Users/Ayce/Desktop/htdocs/premier/index.php(118): Kohana_Request->execute()
#7 {main} in /Users/Ayce/Desktop/htdocs/premier/application/classes/Controller/User.php:83
2013-10-03 19:18:18 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method Request::password() ~ APPPATH/classes/Controller/User.php [ 72 ] in file:line
2013-10-03 19:18:18 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-10-03 19:22:33 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected ';' ~ APPPATH/classes/Controller/User.php [ 80 ] in file:line
2013-10-03 19:22:33 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-10-03 19:22:38 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected ';' ~ APPPATH/classes/Controller/User.php [ 80 ] in file:line
2013-10-03 19:22:38 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-10-03 19:23:04 --- EMERGENCY: ErrorException [ 8 ]: Undefined index: npassword ~ APPPATH/classes/Controller/User.php [ 77 ] in /Users/Ayce/Desktop/htdocs/premier/application/classes/Controller/User.php:77
2013-10-03 19:23:04 --- DEBUG: #0 /Users/Ayce/Desktop/htdocs/premier/application/classes/Controller/User.php(77): Kohana_Core::error_handler(8, 'Undefined index...', '/Users/Ayce/Des...', 77, Array)
#1 /Users/Ayce/Desktop/htdocs/premier/system/classes/Kohana/Controller.php(84): Controller_User->action_changepassword()
#2 [internal function]: Kohana_Controller->execute()
#3 /Users/Ayce/Desktop/htdocs/premier/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#4 /Users/Ayce/Desktop/htdocs/premier/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /Users/Ayce/Desktop/htdocs/premier/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /Users/Ayce/Desktop/htdocs/premier/index.php(118): Kohana_Request->execute()
#7 {main} in /Users/Ayce/Desktop/htdocs/premier/application/classes/Controller/User.php:77
2013-10-03 20:41:34 --- EMERGENCY: ErrorException [ 1 ]: Class 'Model_teams' not found ~ MODPATH/orm/classes/Kohana/ORM.php [ 46 ] in file:line
2013-10-03 20:41:34 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-10-03 20:41:49 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method Model_Team::name() ~ APPPATH/classes/Controller/Team.php [ 16 ] in file:line
2013-10-03 20:41:49 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-10-03 20:42:13 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: title ~ APPPATH/views/template/main.php [ 5 ] in /Users/Ayce/Desktop/htdocs/premier/application/views/template/main.php:5
2013-10-03 20:42:13 --- DEBUG: #0 /Users/Ayce/Desktop/htdocs/premier/application/views/template/main.php(5): Kohana_Core::error_handler(8, 'Undefined varia...', '/Users/Ayce/Des...', 5, Array)
#1 /Users/Ayce/Desktop/htdocs/premier/system/classes/Kohana/View.php(61): include('/Users/Ayce/Des...')
#2 /Users/Ayce/Desktop/htdocs/premier/system/classes/Kohana/View.php(348): Kohana_View::capture('/Users/Ayce/Des...', Array)
#3 /Users/Ayce/Desktop/htdocs/premier/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#4 /Users/Ayce/Desktop/htdocs/premier/application/classes/Controller/Layout.php(34): Kohana_Controller_Template->after()
#5 /Users/Ayce/Desktop/htdocs/premier/system/classes/Kohana/Controller.php(87): Controller_Layout->after()
#6 [internal function]: Kohana_Controller->execute()
#7 /Users/Ayce/Desktop/htdocs/premier/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Team))
#8 /Users/Ayce/Desktop/htdocs/premier/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 /Users/Ayce/Desktop/htdocs/premier/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#10 /Users/Ayce/Desktop/htdocs/premier/index.php(118): Kohana_Request->execute()
#11 {main} in /Users/Ayce/Desktop/htdocs/premier/application/views/template/main.php:5
2013-10-03 20:43:10 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: content ~ APPPATH/views/template/main.php [ 21 ] in /Users/Ayce/Desktop/htdocs/premier/application/views/template/main.php:21
2013-10-03 20:43:10 --- DEBUG: #0 /Users/Ayce/Desktop/htdocs/premier/application/views/template/main.php(21): Kohana_Core::error_handler(8, 'Undefined varia...', '/Users/Ayce/Des...', 21, Array)
#1 /Users/Ayce/Desktop/htdocs/premier/system/classes/Kohana/View.php(61): include('/Users/Ayce/Des...')
#2 /Users/Ayce/Desktop/htdocs/premier/system/classes/Kohana/View.php(348): Kohana_View::capture('/Users/Ayce/Des...', Array)
#3 /Users/Ayce/Desktop/htdocs/premier/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#4 /Users/Ayce/Desktop/htdocs/premier/application/classes/Controller/Layout.php(34): Kohana_Controller_Template->after()
#5 /Users/Ayce/Desktop/htdocs/premier/system/classes/Kohana/Controller.php(87): Controller_Layout->after()
#6 [internal function]: Kohana_Controller->execute()
#7 /Users/Ayce/Desktop/htdocs/premier/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Team))
#8 /Users/Ayce/Desktop/htdocs/premier/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 /Users/Ayce/Desktop/htdocs/premier/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#10 /Users/Ayce/Desktop/htdocs/premier/index.php(118): Kohana_Request->execute()
#11 {main} in /Users/Ayce/Desktop/htdocs/premier/application/views/template/main.php:21
2013-10-03 20:44:59 --- EMERGENCY: ErrorException [ 8 ]: Undefined property: Database_MySQL_Result::$name ~ APPPATH/classes/Controller/Team.php [ 16 ] in /Users/Ayce/Desktop/htdocs/premier/application/classes/Controller/Team.php:16
2013-10-03 20:44:59 --- DEBUG: #0 /Users/Ayce/Desktop/htdocs/premier/application/classes/Controller/Team.php(16): Kohana_Core::error_handler(8, 'Undefined prope...', '/Users/Ayce/Des...', 16, Array)
#1 /Users/Ayce/Desktop/htdocs/premier/system/classes/Kohana/Controller.php(84): Controller_Team->action_no()
#2 [internal function]: Kohana_Controller->execute()
#3 /Users/Ayce/Desktop/htdocs/premier/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Team))
#4 /Users/Ayce/Desktop/htdocs/premier/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /Users/Ayce/Desktop/htdocs/premier/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /Users/Ayce/Desktop/htdocs/premier/index.php(118): Kohana_Request->execute()
#7 {main} in /Users/Ayce/Desktop/htdocs/premier/application/classes/Controller/Team.php:16
2013-10-03 20:45:40 --- EMERGENCY: ErrorException [ 8 ]: Undefined property: Database_MySQL_Result::$name ~ APPPATH/classes/Controller/Team.php [ 16 ] in /Users/Ayce/Desktop/htdocs/premier/application/classes/Controller/Team.php:16
2013-10-03 20:45:40 --- DEBUG: #0 /Users/Ayce/Desktop/htdocs/premier/application/classes/Controller/Team.php(16): Kohana_Core::error_handler(8, 'Undefined prope...', '/Users/Ayce/Des...', 16, Array)
#1 /Users/Ayce/Desktop/htdocs/premier/system/classes/Kohana/Controller.php(84): Controller_Team->action_no()
#2 [internal function]: Kohana_Controller->execute()
#3 /Users/Ayce/Desktop/htdocs/premier/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Team))
#4 /Users/Ayce/Desktop/htdocs/premier/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /Users/Ayce/Desktop/htdocs/premier/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /Users/Ayce/Desktop/htdocs/premier/index.php(118): Kohana_Request->execute()
#7 {main} in /Users/Ayce/Desktop/htdocs/premier/application/classes/Controller/Team.php:16
2013-10-03 20:45:45 --- EMERGENCY: ErrorException [ 8 ]: Undefined property: Database_MySQL_Result::$name ~ APPPATH/classes/Controller/Team.php [ 16 ] in /Users/Ayce/Desktop/htdocs/premier/application/classes/Controller/Team.php:16
2013-10-03 20:45:45 --- DEBUG: #0 /Users/Ayce/Desktop/htdocs/premier/application/classes/Controller/Team.php(16): Kohana_Core::error_handler(8, 'Undefined prope...', '/Users/Ayce/Des...', 16, Array)
#1 /Users/Ayce/Desktop/htdocs/premier/system/classes/Kohana/Controller.php(84): Controller_Team->action_no()
#2 [internal function]: Kohana_Controller->execute()
#3 /Users/Ayce/Desktop/htdocs/premier/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Team))
#4 /Users/Ayce/Desktop/htdocs/premier/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /Users/Ayce/Desktop/htdocs/premier/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /Users/Ayce/Desktop/htdocs/premier/index.php(118): Kohana_Request->execute()
#7 {main} in /Users/Ayce/Desktop/htdocs/premier/application/classes/Controller/Team.php:16
2013-10-03 20:46:41 --- EMERGENCY: ErrorException [ 8 ]: Undefined property: Database_MySQL_Result::$name ~ APPPATH/classes/Controller/Team.php [ 16 ] in /Users/Ayce/Desktop/htdocs/premier/application/classes/Controller/Team.php:16
2013-10-03 20:46:41 --- DEBUG: #0 /Users/Ayce/Desktop/htdocs/premier/application/classes/Controller/Team.php(16): Kohana_Core::error_handler(8, 'Undefined prope...', '/Users/Ayce/Des...', 16, Array)
#1 /Users/Ayce/Desktop/htdocs/premier/system/classes/Kohana/Controller.php(84): Controller_Team->action_no()
#2 [internal function]: Kohana_Controller->execute()
#3 /Users/Ayce/Desktop/htdocs/premier/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Team))
#4 /Users/Ayce/Desktop/htdocs/premier/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /Users/Ayce/Desktop/htdocs/premier/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /Users/Ayce/Desktop/htdocs/premier/index.php(118): Kohana_Request->execute()
#7 {main} in /Users/Ayce/Desktop/htdocs/premier/application/classes/Controller/Team.php:16
2013-10-03 20:55:16 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected '$team' (T_VARIABLE) ~ APPPATH/views/team.php [ 3 ] in file:line
2013-10-03 20:55:16 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-10-03 20:55:30 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: team ~ APPPATH/views/team.php [ 3 ] in /Users/Ayce/Desktop/htdocs/premier/application/views/team.php:3
2013-10-03 20:55:30 --- DEBUG: #0 /Users/Ayce/Desktop/htdocs/premier/application/views/team.php(3): Kohana_Core::error_handler(8, 'Undefined varia...', '/Users/Ayce/Des...', 3, Array)
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
#11 /Users/Ayce/Desktop/htdocs/premier/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Team))
#12 /Users/Ayce/Desktop/htdocs/premier/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#13 /Users/Ayce/Desktop/htdocs/premier/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#14 /Users/Ayce/Desktop/htdocs/premier/index.php(118): Kohana_Request->execute()
#15 {main} in /Users/Ayce/Desktop/htdocs/premier/application/views/team.php:3
2013-10-03 21:11:43 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected '!', expecting '(' ~ APPPATH/classes/Controller/Team.php [ 16 ] in file:line
2013-10-03 21:11:43 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-10-03 21:18:05 --- EMERGENCY: View_Exception [ 0 ]: The requested view errors/404 could not be found ~ SYSPATH/classes/Kohana/View.php [ 257 ] in /Users/Ayce/Desktop/htdocs/premier/system/classes/Kohana/View.php:137
2013-10-03 21:18:05 --- DEBUG: #0 /Users/Ayce/Desktop/htdocs/premier/system/classes/Kohana/View.php(137): Kohana_View->set_filename('errors/404')
#1 /Users/Ayce/Desktop/htdocs/premier/system/classes/Kohana/View.php(30): Kohana_View->__construct('errors/404', NULL)
#2 /Users/Ayce/Desktop/htdocs/premier/application/classes/Controller/Team.php(18): Kohana_View::factory('errors/404')
#3 /Users/Ayce/Desktop/htdocs/premier/system/classes/Kohana/Controller.php(84): Controller_Team->action_no()
#4 [internal function]: Kohana_Controller->execute()
#5 /Users/Ayce/Desktop/htdocs/premier/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Team))
#6 /Users/Ayce/Desktop/htdocs/premier/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /Users/Ayce/Desktop/htdocs/premier/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 /Users/Ayce/Desktop/htdocs/premier/index.php(118): Kohana_Request->execute()
#9 {main} in /Users/Ayce/Desktop/htdocs/premier/system/classes/Kohana/View.php:137
2013-10-03 21:20:04 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method Controller_Team::getMessage() ~ APPPATH/classes/Controller/Team.php [ 21 ] in file:line
2013-10-03 21:20:04 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-10-03 21:20:25 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: title ~ APPPATH/views/template/main.php [ 5 ] in /Users/Ayce/Desktop/htdocs/premier/application/views/template/main.php:5
2013-10-03 21:20:25 --- DEBUG: #0 /Users/Ayce/Desktop/htdocs/premier/application/views/template/main.php(5): Kohana_Core::error_handler(8, 'Undefined varia...', '/Users/Ayce/Des...', 5, Array)
#1 /Users/Ayce/Desktop/htdocs/premier/system/classes/Kohana/View.php(61): include('/Users/Ayce/Des...')
#2 /Users/Ayce/Desktop/htdocs/premier/system/classes/Kohana/View.php(348): Kohana_View::capture('/Users/Ayce/Des...', Array)
#3 /Users/Ayce/Desktop/htdocs/premier/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#4 /Users/Ayce/Desktop/htdocs/premier/application/classes/Controller/Layout.php(34): Kohana_Controller_Template->after()
#5 /Users/Ayce/Desktop/htdocs/premier/system/classes/Kohana/Controller.php(87): Controller_Layout->after()
#6 [internal function]: Kohana_Controller->execute()
#7 /Users/Ayce/Desktop/htdocs/premier/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Team))
#8 /Users/Ayce/Desktop/htdocs/premier/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 /Users/Ayce/Desktop/htdocs/premier/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#10 /Users/Ayce/Desktop/htdocs/premier/index.php(118): Kohana_Request->execute()
#11 {main} in /Users/Ayce/Desktop/htdocs/premier/application/views/template/main.php:5
2013-10-03 21:21:32 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected '$this' (T_VARIABLE) ~ APPPATH/classes/Controller/Team.php [ 21 ] in file:line
2013-10-03 21:21:32 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-10-03 21:21:57 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected '$this' (T_VARIABLE) ~ APPPATH/classes/Controller/Team.php [ 19 ] in file:line
2013-10-03 21:21:57 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-10-03 21:22:06 --- EMERGENCY: View_Exception [ 0 ]: The requested view error/404 could not be found ~ SYSPATH/classes/Kohana/View.php [ 257 ] in /Users/Ayce/Desktop/htdocs/premier/system/classes/Kohana/View.php:137
2013-10-03 21:22:06 --- DEBUG: #0 /Users/Ayce/Desktop/htdocs/premier/system/classes/Kohana/View.php(137): Kohana_View->set_filename('error/404')
#1 /Users/Ayce/Desktop/htdocs/premier/system/classes/Kohana/View.php(30): Kohana_View->__construct('error/404', NULL)
#2 /Users/Ayce/Desktop/htdocs/premier/application/classes/Controller/Team.php(19): Kohana_View::factory('error/404')
#3 /Users/Ayce/Desktop/htdocs/premier/system/classes/Kohana/Controller.php(84): Controller_Team->action_no()
#4 [internal function]: Kohana_Controller->execute()
#5 /Users/Ayce/Desktop/htdocs/premier/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Team))
#6 /Users/Ayce/Desktop/htdocs/premier/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /Users/Ayce/Desktop/htdocs/premier/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 /Users/Ayce/Desktop/htdocs/premier/index.php(118): Kohana_Request->execute()
#9 {main} in /Users/Ayce/Desktop/htdocs/premier/system/classes/Kohana/View.php:137
2013-10-03 21:22:24 --- EMERGENCY: View_Exception [ 0 ]: The requested view error/404 could not be found ~ SYSPATH/classes/Kohana/View.php [ 257 ] in /Users/Ayce/Desktop/htdocs/premier/system/classes/Kohana/View.php:137
2013-10-03 21:22:24 --- DEBUG: #0 /Users/Ayce/Desktop/htdocs/premier/system/classes/Kohana/View.php(137): Kohana_View->set_filename('error/404')
#1 /Users/Ayce/Desktop/htdocs/premier/system/classes/Kohana/View.php(30): Kohana_View->__construct('error/404', NULL)
#2 /Users/Ayce/Desktop/htdocs/premier/application/classes/Controller/Team.php(19): Kohana_View::factory('error/404')
#3 /Users/Ayce/Desktop/htdocs/premier/system/classes/Kohana/Controller.php(84): Controller_Team->action_no()
#4 [internal function]: Kohana_Controller->execute()
#5 /Users/Ayce/Desktop/htdocs/premier/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Team))
#6 /Users/Ayce/Desktop/htdocs/premier/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /Users/Ayce/Desktop/htdocs/premier/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 /Users/Ayce/Desktop/htdocs/premier/index.php(118): Kohana_Request->execute()
#9 {main} in /Users/Ayce/Desktop/htdocs/premier/system/classes/Kohana/View.php:137
2013-10-03 21:22:25 --- EMERGENCY: View_Exception [ 0 ]: The requested view error/404 could not be found ~ SYSPATH/classes/Kohana/View.php [ 257 ] in /Users/Ayce/Desktop/htdocs/premier/system/classes/Kohana/View.php:137
2013-10-03 21:22:25 --- DEBUG: #0 /Users/Ayce/Desktop/htdocs/premier/system/classes/Kohana/View.php(137): Kohana_View->set_filename('error/404')
#1 /Users/Ayce/Desktop/htdocs/premier/system/classes/Kohana/View.php(30): Kohana_View->__construct('error/404', NULL)
#2 /Users/Ayce/Desktop/htdocs/premier/application/classes/Controller/Team.php(19): Kohana_View::factory('error/404')
#3 /Users/Ayce/Desktop/htdocs/premier/system/classes/Kohana/Controller.php(84): Controller_Team->action_no()
#4 [internal function]: Kohana_Controller->execute()
#5 /Users/Ayce/Desktop/htdocs/premier/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Team))
#6 /Users/Ayce/Desktop/htdocs/premier/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /Users/Ayce/Desktop/htdocs/premier/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 /Users/Ayce/Desktop/htdocs/premier/index.php(118): Kohana_Request->execute()
#9 {main} in /Users/Ayce/Desktop/htdocs/premier/system/classes/Kohana/View.php:137
2013-10-03 21:22:27 --- EMERGENCY: View_Exception [ 0 ]: The requested view error/404 could not be found ~ SYSPATH/classes/Kohana/View.php [ 257 ] in /Users/Ayce/Desktop/htdocs/premier/system/classes/Kohana/View.php:137
2013-10-03 21:22:27 --- DEBUG: #0 /Users/Ayce/Desktop/htdocs/premier/system/classes/Kohana/View.php(137): Kohana_View->set_filename('error/404')
#1 /Users/Ayce/Desktop/htdocs/premier/system/classes/Kohana/View.php(30): Kohana_View->__construct('error/404', NULL)
#2 /Users/Ayce/Desktop/htdocs/premier/application/classes/Controller/Team.php(19): Kohana_View::factory('error/404')
#3 /Users/Ayce/Desktop/htdocs/premier/system/classes/Kohana/Controller.php(84): Controller_Team->action_no()
#4 [internal function]: Kohana_Controller->execute()
#5 /Users/Ayce/Desktop/htdocs/premier/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Team))
#6 /Users/Ayce/Desktop/htdocs/premier/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /Users/Ayce/Desktop/htdocs/premier/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 /Users/Ayce/Desktop/htdocs/premier/index.php(118): Kohana_Request->execute()
#9 {main} in /Users/Ayce/Desktop/htdocs/premier/system/classes/Kohana/View.php:137
2013-10-03 21:22:27 --- EMERGENCY: View_Exception [ 0 ]: The requested view error/404 could not be found ~ SYSPATH/classes/Kohana/View.php [ 257 ] in /Users/Ayce/Desktop/htdocs/premier/system/classes/Kohana/View.php:137
2013-10-03 21:22:27 --- DEBUG: #0 /Users/Ayce/Desktop/htdocs/premier/system/classes/Kohana/View.php(137): Kohana_View->set_filename('error/404')
#1 /Users/Ayce/Desktop/htdocs/premier/system/classes/Kohana/View.php(30): Kohana_View->__construct('error/404', NULL)
#2 /Users/Ayce/Desktop/htdocs/premier/application/classes/Controller/Team.php(19): Kohana_View::factory('error/404')
#3 /Users/Ayce/Desktop/htdocs/premier/system/classes/Kohana/Controller.php(84): Controller_Team->action_no()
#4 [internal function]: Kohana_Controller->execute()
#5 /Users/Ayce/Desktop/htdocs/premier/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Team))
#6 /Users/Ayce/Desktop/htdocs/premier/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /Users/Ayce/Desktop/htdocs/premier/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 /Users/Ayce/Desktop/htdocs/premier/index.php(118): Kohana_Request->execute()
#9 {main} in /Users/Ayce/Desktop/htdocs/premier/system/classes/Kohana/View.php:137
2013-10-03 21:22:40 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method View::status() ~ APPPATH/classes/Controller/Team.php [ 20 ] in file:line
2013-10-03 21:22:40 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-10-03 21:23:29 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected '$URL' (T_VARIABLE) ~ APPPATH/classes/Controller/Team.php [ 18 ] in file:line
2013-10-03 21:23:29 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-10-03 21:23:43 --- EMERGENCY: ErrorException [ 1 ]: Class name must be a valid object or a string ~ APPPATH/classes/Controller/Team.php [ 18 ] in file:line
2013-10-03 21:23:43 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-10-03 21:25:42 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method URL::page() ~ APPPATH/views/table.php [ 18 ] in file:line
2013-10-03 21:25:42 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-10-03 21:40:48 --- EMERGENCY: ErrorException [ 1 ]: Call to a member function check() on a non-object ~ APPPATH/classes/Controller/Admin.php [ 18 ] in file:line
2013-10-03 21:40:48 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-10-03 21:41:42 --- EMERGENCY: ErrorException [ 1 ]: Call to a member function rule() on a non-object ~ APPPATH/classes/Controller/Admin.php [ 51 ] in file:line
2013-10-03 21:41:42 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-10-03 21:41:53 --- EMERGENCY: ErrorException [ 1 ]: Call to a member function check() on a non-object ~ APPPATH/classes/Controller/Admin.php [ 66 ] in file:line
2013-10-03 21:41:53 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-10-03 21:42:04 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: array ~ APPPATH/classes/Controller/Admin.php [ 69 ] in /Users/Ayce/Desktop/htdocs/premier/application/classes/Controller/Admin.php:69
2013-10-03 21:42:04 --- DEBUG: #0 /Users/Ayce/Desktop/htdocs/premier/application/classes/Controller/Admin.php(69): Kohana_Core::error_handler(8, 'Undefined varia...', '/Users/Ayce/Des...', 69, Array)
#1 /Users/Ayce/Desktop/htdocs/premier/system/classes/Kohana/Controller.php(84): Controller_Admin->action_add()
#2 [internal function]: Kohana_Controller->execute()
#3 /Users/Ayce/Desktop/htdocs/premier/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin))
#4 /Users/Ayce/Desktop/htdocs/premier/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /Users/Ayce/Desktop/htdocs/premier/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /Users/Ayce/Desktop/htdocs/premier/index.php(118): Kohana_Request->execute()
#7 {main} in /Users/Ayce/Desktop/htdocs/premier/application/classes/Controller/Admin.php:69
2013-10-03 21:42:36 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: badge ~ APPPATH/classes/Controller/Admin.php [ 69 ] in /Users/Ayce/Desktop/htdocs/premier/application/classes/Controller/Admin.php:69
2013-10-03 21:42:36 --- DEBUG: #0 /Users/Ayce/Desktop/htdocs/premier/application/classes/Controller/Admin.php(69): Kohana_Core::error_handler(8, 'Undefined varia...', '/Users/Ayce/Des...', 69, Array)
#1 /Users/Ayce/Desktop/htdocs/premier/system/classes/Kohana/Controller.php(84): Controller_Admin->action_add()
#2 [internal function]: Kohana_Controller->execute()
#3 /Users/Ayce/Desktop/htdocs/premier/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin))
#4 /Users/Ayce/Desktop/htdocs/premier/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /Users/Ayce/Desktop/htdocs/premier/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /Users/Ayce/Desktop/htdocs/premier/index.php(118): Kohana_Request->execute()
#7 {main} in /Users/Ayce/Desktop/htdocs/premier/application/classes/Controller/Admin.php:69
2013-10-03 21:42:53 --- EMERGENCY: ErrorException [ 4096 ]: Argument 1 passed to Kohana_Upload::save() must be of the type array, string given, called in /Users/Ayce/Desktop/htdocs/premier/application/classes/Controller/Admin.php on line 69 and defined ~ SYSPATH/classes/Kohana/Upload.php [ 52 ] in /Users/Ayce/Desktop/htdocs/premier/system/classes/Kohana/Upload.php:52
2013-10-03 21:42:53 --- DEBUG: #0 /Users/Ayce/Desktop/htdocs/premier/system/classes/Kohana/Upload.php(52): Kohana_Core::error_handler(4096, 'Argument 1 pass...', '/Users/Ayce/Des...', 52, Array)
#1 /Users/Ayce/Desktop/htdocs/premier/application/classes/Controller/Admin.php(69): Kohana_Upload::save('badge', 'ayce', '../../../media/...')
#2 /Users/Ayce/Desktop/htdocs/premier/system/classes/Kohana/Controller.php(84): Controller_Admin->action_add()
#3 [internal function]: Kohana_Controller->execute()
#4 /Users/Ayce/Desktop/htdocs/premier/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin))
#5 /Users/Ayce/Desktop/htdocs/premier/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /Users/Ayce/Desktop/htdocs/premier/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 /Users/Ayce/Desktop/htdocs/premier/index.php(118): Kohana_Request->execute()
#8 {main} in /Users/Ayce/Desktop/htdocs/premier/system/classes/Kohana/Upload.php:52
2013-10-03 21:44:02 --- EMERGENCY: ErrorException [ 8 ]: Undefined index: file ~ SYSPATH/classes/Kohana/Validation.php [ 102 ] in /Users/Ayce/Desktop/htdocs/premier/system/classes/Kohana/Validation.php:102
2013-10-03 21:44:02 --- DEBUG: #0 /Users/Ayce/Desktop/htdocs/premier/system/classes/Kohana/Validation.php(102): Kohana_Core::error_handler(8, 'Undefined index...', '/Users/Ayce/Des...', 102, Array)
#1 /Users/Ayce/Desktop/htdocs/premier/application/classes/Controller/Admin.php(69): Kohana_Validation->offsetGet('file')
#2 /Users/Ayce/Desktop/htdocs/premier/system/classes/Kohana/Controller.php(84): Controller_Admin->action_add()
#3 [internal function]: Kohana_Controller->execute()
#4 /Users/Ayce/Desktop/htdocs/premier/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin))
#5 /Users/Ayce/Desktop/htdocs/premier/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /Users/Ayce/Desktop/htdocs/premier/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 /Users/Ayce/Desktop/htdocs/premier/index.php(118): Kohana_Request->execute()
#8 {main} in /Users/Ayce/Desktop/htdocs/premier/system/classes/Kohana/Validation.php:102
2013-10-03 21:44:17 --- EMERGENCY: ErrorException [ 8 ]: Undefined index: badge ~ SYSPATH/classes/Kohana/Validation.php [ 102 ] in /Users/Ayce/Desktop/htdocs/premier/system/classes/Kohana/Validation.php:102
2013-10-03 21:44:17 --- DEBUG: #0 /Users/Ayce/Desktop/htdocs/premier/system/classes/Kohana/Validation.php(102): Kohana_Core::error_handler(8, 'Undefined index...', '/Users/Ayce/Des...', 102, Array)
#1 /Users/Ayce/Desktop/htdocs/premier/application/classes/Controller/Admin.php(69): Kohana_Validation->offsetGet('badge')
#2 /Users/Ayce/Desktop/htdocs/premier/system/classes/Kohana/Controller.php(84): Controller_Admin->action_add()
#3 [internal function]: Kohana_Controller->execute()
#4 /Users/Ayce/Desktop/htdocs/premier/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin))
#5 /Users/Ayce/Desktop/htdocs/premier/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /Users/Ayce/Desktop/htdocs/premier/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 /Users/Ayce/Desktop/htdocs/premier/index.php(118): Kohana_Request->execute()
#8 {main} in /Users/Ayce/Desktop/htdocs/premier/system/classes/Kohana/Validation.php:102
2013-10-03 21:46:59 --- EMERGENCY: ErrorException [ 8 ]: Undefined index: image ~ APPPATH/classes/Controller/Admin.php [ 69 ] in /Users/Ayce/Desktop/htdocs/premier/application/classes/Controller/Admin.php:69
2013-10-03 21:46:59 --- DEBUG: #0 /Users/Ayce/Desktop/htdocs/premier/application/classes/Controller/Admin.php(69): Kohana_Core::error_handler(8, 'Undefined index...', '/Users/Ayce/Des...', 69, Array)
#1 /Users/Ayce/Desktop/htdocs/premier/system/classes/Kohana/Controller.php(84): Controller_Admin->action_add()
#2 [internal function]: Kohana_Controller->execute()
#3 /Users/Ayce/Desktop/htdocs/premier/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin))
#4 /Users/Ayce/Desktop/htdocs/premier/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /Users/Ayce/Desktop/htdocs/premier/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /Users/Ayce/Desktop/htdocs/premier/index.php(118): Kohana_Request->execute()
#7 {main} in /Users/Ayce/Desktop/htdocs/premier/application/classes/Controller/Admin.php:69
2013-10-03 21:51:37 --- EMERGENCY: ErrorException [ 8 ]: Undefined offset: 0 ~ SYSPATH/classes/Kohana/Validation.php [ 242 ] in /Users/Ayce/Desktop/htdocs/premier/system/classes/Kohana/Validation.php:242
2013-10-03 21:51:37 --- DEBUG: #0 /Users/Ayce/Desktop/htdocs/premier/system/classes/Kohana/Validation.php(242): Kohana_Core::error_handler(8, 'Undefined offse...', '/Users/Ayce/Des...', 242, Array)
#1 /Users/Ayce/Desktop/htdocs/premier/application/classes/Controller/Admin.php(55): Kohana_Validation->rules('image', Array)
#2 /Users/Ayce/Desktop/htdocs/premier/system/classes/Kohana/Controller.php(84): Controller_Admin->action_add()
#3 [internal function]: Kohana_Controller->execute()
#4 /Users/Ayce/Desktop/htdocs/premier/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin))
#5 /Users/Ayce/Desktop/htdocs/premier/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /Users/Ayce/Desktop/htdocs/premier/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 /Users/Ayce/Desktop/htdocs/premier/index.php(118): Kohana_Request->execute()
#8 {main} in /Users/Ayce/Desktop/htdocs/premier/system/classes/Kohana/Validation.php:242
2013-10-03 21:52:14 --- EMERGENCY: ErrorException [ 8 ]: Undefined offset: 0 ~ SYSPATH/classes/Kohana/Validation.php [ 242 ] in /Users/Ayce/Desktop/htdocs/premier/system/classes/Kohana/Validation.php:242
2013-10-03 21:52:14 --- DEBUG: #0 /Users/Ayce/Desktop/htdocs/premier/system/classes/Kohana/Validation.php(242): Kohana_Core::error_handler(8, 'Undefined offse...', '/Users/Ayce/Des...', 242, Array)
#1 /Users/Ayce/Desktop/htdocs/premier/application/classes/Controller/Admin.php(55): Kohana_Validation->rules('badge', Array)
#2 /Users/Ayce/Desktop/htdocs/premier/system/classes/Kohana/Controller.php(84): Controller_Admin->action_add()
#3 [internal function]: Kohana_Controller->execute()
#4 /Users/Ayce/Desktop/htdocs/premier/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin))
#5 /Users/Ayce/Desktop/htdocs/premier/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /Users/Ayce/Desktop/htdocs/premier/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 /Users/Ayce/Desktop/htdocs/premier/index.php(118): Kohana_Request->execute()
#8 {main} in /Users/Ayce/Desktop/htdocs/premier/system/classes/Kohana/Validation.php:242
2013-10-03 21:54:52 --- EMERGENCY: ErrorException [ 8 ]: Undefined offset: 0 ~ SYSPATH/classes/Kohana/Validation.php [ 242 ] in /Users/Ayce/Desktop/htdocs/premier/system/classes/Kohana/Validation.php:242
2013-10-03 21:54:52 --- DEBUG: #0 /Users/Ayce/Desktop/htdocs/premier/system/classes/Kohana/Validation.php(242): Kohana_Core::error_handler(8, 'Undefined offse...', '/Users/Ayce/Des...', 242, Array)
#1 /Users/Ayce/Desktop/htdocs/premier/application/classes/Controller/Admin.php(55): Kohana_Validation->rules('badge', Array)
#2 /Users/Ayce/Desktop/htdocs/premier/system/classes/Kohana/Controller.php(84): Controller_Admin->action_add()
#3 [internal function]: Kohana_Controller->execute()
#4 /Users/Ayce/Desktop/htdocs/premier/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin))
#5 /Users/Ayce/Desktop/htdocs/premier/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /Users/Ayce/Desktop/htdocs/premier/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 /Users/Ayce/Desktop/htdocs/premier/index.php(118): Kohana_Request->execute()
#8 {main} in /Users/Ayce/Desktop/htdocs/premier/system/classes/Kohana/Validation.php:242
2013-10-03 21:56:42 --- EMERGENCY: ErrorException [ 8 ]: Undefined offset: 0 ~ SYSPATH/classes/Kohana/Validation.php [ 242 ] in /Users/Ayce/Desktop/htdocs/premier/system/classes/Kohana/Validation.php:242
2013-10-03 21:56:42 --- DEBUG: #0 /Users/Ayce/Desktop/htdocs/premier/system/classes/Kohana/Validation.php(242): Kohana_Core::error_handler(8, 'Undefined offse...', '/Users/Ayce/Des...', 242, Array)
#1 /Users/Ayce/Desktop/htdocs/premier/application/classes/Controller/Admin.php(56): Kohana_Validation->rules('badge', Array)
#2 /Users/Ayce/Desktop/htdocs/premier/system/classes/Kohana/Controller.php(84): Controller_Admin->action_add()
#3 [internal function]: Kohana_Controller->execute()
#4 /Users/Ayce/Desktop/htdocs/premier/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin))
#5 /Users/Ayce/Desktop/htdocs/premier/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /Users/Ayce/Desktop/htdocs/premier/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 /Users/Ayce/Desktop/htdocs/premier/index.php(118): Kohana_Request->execute()
#8 {main} in /Users/Ayce/Desktop/htdocs/premier/system/classes/Kohana/Validation.php:242
2013-10-03 21:57:31 --- EMERGENCY: ErrorException [ 8 ]: Undefined offset: 0 ~ SYSPATH/classes/Kohana/Validation.php [ 242 ] in /Users/Ayce/Desktop/htdocs/premier/system/classes/Kohana/Validation.php:242
2013-10-03 21:57:31 --- DEBUG: #0 /Users/Ayce/Desktop/htdocs/premier/system/classes/Kohana/Validation.php(242): Kohana_Core::error_handler(8, 'Undefined offse...', '/Users/Ayce/Des...', 242, Array)
#1 /Users/Ayce/Desktop/htdocs/premier/application/classes/Controller/Admin.php(58): Kohana_Validation->rules('badge', Array)
#2 /Users/Ayce/Desktop/htdocs/premier/system/classes/Kohana/Controller.php(84): Controller_Admin->action_add()
#3 [internal function]: Kohana_Controller->execute()
#4 /Users/Ayce/Desktop/htdocs/premier/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin))
#5 /Users/Ayce/Desktop/htdocs/premier/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /Users/Ayce/Desktop/htdocs/premier/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 /Users/Ayce/Desktop/htdocs/premier/index.php(118): Kohana_Request->execute()
#8 {main} in /Users/Ayce/Desktop/htdocs/premier/system/classes/Kohana/Validation.php:242
2013-10-03 21:57:32 --- EMERGENCY: ErrorException [ 8 ]: Undefined offset: 0 ~ SYSPATH/classes/Kohana/Validation.php [ 242 ] in /Users/Ayce/Desktop/htdocs/premier/system/classes/Kohana/Validation.php:242
2013-10-03 21:57:32 --- DEBUG: #0 /Users/Ayce/Desktop/htdocs/premier/system/classes/Kohana/Validation.php(242): Kohana_Core::error_handler(8, 'Undefined offse...', '/Users/Ayce/Des...', 242, Array)
#1 /Users/Ayce/Desktop/htdocs/premier/application/classes/Controller/Admin.php(58): Kohana_Validation->rules('badge', Array)
#2 /Users/Ayce/Desktop/htdocs/premier/system/classes/Kohana/Controller.php(84): Controller_Admin->action_add()
#3 [internal function]: Kohana_Controller->execute()
#4 /Users/Ayce/Desktop/htdocs/premier/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin))
#5 /Users/Ayce/Desktop/htdocs/premier/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /Users/Ayce/Desktop/htdocs/premier/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 /Users/Ayce/Desktop/htdocs/premier/index.php(118): Kohana_Request->execute()
#8 {main} in /Users/Ayce/Desktop/htdocs/premier/system/classes/Kohana/Validation.php:242
2013-10-03 21:58:23 --- EMERGENCY: ErrorException [ 8 ]: Undefined offset: 0 ~ SYSPATH/classes/Kohana/Validation.php [ 242 ] in /Users/Ayce/Desktop/htdocs/premier/system/classes/Kohana/Validation.php:242
2013-10-03 21:58:23 --- DEBUG: #0 /Users/Ayce/Desktop/htdocs/premier/system/classes/Kohana/Validation.php(242): Kohana_Core::error_handler(8, 'Undefined offse...', '/Users/Ayce/Des...', 242, Array)
#1 /Users/Ayce/Desktop/htdocs/premier/application/classes/Controller/Admin.php(58): Kohana_Validation->rules('badge', Array)
#2 /Users/Ayce/Desktop/htdocs/premier/system/classes/Kohana/Controller.php(84): Controller_Admin->action_add()
#3 [internal function]: Kohana_Controller->execute()
#4 /Users/Ayce/Desktop/htdocs/premier/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin))
#5 /Users/Ayce/Desktop/htdocs/premier/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /Users/Ayce/Desktop/htdocs/premier/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 /Users/Ayce/Desktop/htdocs/premier/index.php(118): Kohana_Request->execute()
#8 {main} in /Users/Ayce/Desktop/htdocs/premier/system/classes/Kohana/Validation.php:242
2013-10-03 22:02:02 --- EMERGENCY: ErrorException [ 1 ]: Call to a member function rule() on a non-object ~ APPPATH/classes/Controller/Admin.php [ 53 ] in file:line
2013-10-03 22:02:02 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-10-03 22:02:19 --- EMERGENCY: ErrorException [ 1 ]: Call to a member function rule() on a non-object ~ APPPATH/classes/Controller/Admin.php [ 53 ] in file:line
2013-10-03 22:02:19 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-10-03 22:10:13 --- EMERGENCY: ErrorException [ 1 ]: Call to a member function rule() on a non-object ~ APPPATH/classes/Controller/Admin.php [ 53 ] in file:line
2013-10-03 22:10:13 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-10-03 22:10:52 --- EMERGENCY: ErrorException [ 1 ]: Call to a member function rule() on a non-object ~ APPPATH/classes/Controller/Admin.php [ 53 ] in file:line
2013-10-03 22:10:52 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line