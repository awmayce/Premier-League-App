<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2013-10-06 15:18:56 --- EMERGENCY: ErrorException [ 2 ]: Creating default object from empty value ~ APPPATH/classes/Controller/Admin.php [ 68 ] in /Users/Ayce/Desktop/htdocs/premier/application/classes/Controller/Admin.php:68
2013-10-06 15:18:56 --- DEBUG: #0 /Users/Ayce/Desktop/htdocs/premier/application/classes/Controller/Admin.php(68): Kohana_Core::error_handler(2, 'Creating defaul...', '/Users/Ayce/Des...', 68, Array)
#1 /Users/Ayce/Desktop/htdocs/premier/system/classes/Kohana/Controller.php(84): Controller_Admin->action_add()
#2 [internal function]: Kohana_Controller->execute()
#3 /Users/Ayce/Desktop/htdocs/premier/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin))
#4 /Users/Ayce/Desktop/htdocs/premier/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /Users/Ayce/Desktop/htdocs/premier/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /Users/Ayce/Desktop/htdocs/premier/index.php(118): Kohana_Request->execute()
#7 {main} in /Users/Ayce/Desktop/htdocs/premier/application/classes/Controller/Admin.php:68
2013-10-06 15:19:15 --- EMERGENCY: ErrorException [ 1 ]: Call to a member function check() on a non-object ~ APPPATH/classes/Controller/Admin.php [ 81 ] in file:line
2013-10-06 15:19:15 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-10-06 21:51:56 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected '}' ~ APPPATH/classes/Controller/Layout.php [ 15 ] in file:line
2013-10-06 21:51:56 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-10-06 21:52:31 --- EMERGENCY: ErrorException [ 2 ]: Missing argument 3 for Kohana_ORM::where(), called in /Users/Ayce/Desktop/htdocs/premier/application/classes/Controller/Layout.php on line 15 and defined ~ MODPATH/orm/classes/Kohana/ORM.php [ 1849 ] in /Users/Ayce/Desktop/htdocs/premier/modules/orm/classes/Kohana/ORM.php:1849
2013-10-06 21:52:31 --- DEBUG: #0 /Users/Ayce/Desktop/htdocs/premier/modules/orm/classes/Kohana/ORM.php(1849): Kohana_Core::error_handler(2, 'Missing argumen...', '/Users/Ayce/Des...', 1849, Array)
#1 /Users/Ayce/Desktop/htdocs/premier/application/classes/Controller/Layout.php(15): Kohana_ORM->where('team_id', '2')
#2 /Users/Ayce/Desktop/htdocs/premier/system/classes/Kohana/Controller.php(69): Controller_Layout->before()
#3 [internal function]: Kohana_Controller->execute()
#4 /Users/Ayce/Desktop/htdocs/premier/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#5 /Users/Ayce/Desktop/htdocs/premier/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /Users/Ayce/Desktop/htdocs/premier/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 /Users/Ayce/Desktop/htdocs/premier/index.php(118): Kohana_Request->execute()
#8 {main} in /Users/Ayce/Desktop/htdocs/premier/modules/orm/classes/Kohana/ORM.php:1849
2013-10-06 21:57:12 --- EMERGENCY: ErrorException [ 1 ]: Class 'Model_teams' not found ~ MODPATH/orm/classes/Kohana/ORM.php [ 46 ] in file:line
2013-10-06 21:57:12 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-10-06 21:57:21 --- EMERGENCY: ErrorException [ 2 ]: Missing argument 3 for Kohana_ORM::where(), called in /Users/Ayce/Desktop/htdocs/premier/application/classes/Controller/Layout.php on line 15 and defined ~ MODPATH/orm/classes/Kohana/ORM.php [ 1849 ] in /Users/Ayce/Desktop/htdocs/premier/modules/orm/classes/Kohana/ORM.php:1849
2013-10-06 21:57:21 --- DEBUG: #0 /Users/Ayce/Desktop/htdocs/premier/modules/orm/classes/Kohana/ORM.php(1849): Kohana_Core::error_handler(2, 'Missing argumen...', '/Users/Ayce/Des...', 1849, Array)
#1 /Users/Ayce/Desktop/htdocs/premier/application/classes/Controller/Layout.php(15): Kohana_ORM->where('team_id', '2')
#2 /Users/Ayce/Desktop/htdocs/premier/system/classes/Kohana/Controller.php(69): Controller_Layout->before()
#3 [internal function]: Kohana_Controller->execute()
#4 /Users/Ayce/Desktop/htdocs/premier/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#5 /Users/Ayce/Desktop/htdocs/premier/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /Users/Ayce/Desktop/htdocs/premier/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 /Users/Ayce/Desktop/htdocs/premier/index.php(118): Kohana_Request->execute()
#8 {main} in /Users/Ayce/Desktop/htdocs/premier/modules/orm/classes/Kohana/ORM.php:1849
2013-10-06 22:02:31 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: team ~ APPPATH/views/template/navigation.php [ 23 ] in /Users/Ayce/Desktop/htdocs/premier/application/views/template/navigation.php:23
2013-10-06 22:02:31 --- DEBUG: #0 /Users/Ayce/Desktop/htdocs/premier/application/views/template/navigation.php(23): Kohana_Core::error_handler(8, 'Undefined varia...', '/Users/Ayce/Des...', 23, Array)
#1 /Users/Ayce/Desktop/htdocs/premier/system/classes/Kohana/View.php(61): include('/Users/Ayce/Des...')
#2 /Users/Ayce/Desktop/htdocs/premier/system/classes/Kohana/View.php(348): Kohana_View::capture('/Users/Ayce/Des...', Array)
#3 /Users/Ayce/Desktop/htdocs/premier/system/classes/Kohana/View.php(228): Kohana_View->render()
#4 /Users/Ayce/Desktop/htdocs/premier/application/views/template/main.php(16): Kohana_View->__toString()
#5 /Users/Ayce/Desktop/htdocs/premier/system/classes/Kohana/View.php(61): include('/Users/Ayce/Des...')
#6 /Users/Ayce/Desktop/htdocs/premier/system/classes/Kohana/View.php(348): Kohana_View::capture('/Users/Ayce/Des...', Array)
#7 /Users/Ayce/Desktop/htdocs/premier/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#8 /Users/Ayce/Desktop/htdocs/premier/application/classes/Controller/Layout.php(35): Kohana_Controller_Template->after()
#9 /Users/Ayce/Desktop/htdocs/premier/system/classes/Kohana/Controller.php(87): Controller_Layout->after()
#10 [internal function]: Kohana_Controller->execute()
#11 /Users/Ayce/Desktop/htdocs/premier/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#12 /Users/Ayce/Desktop/htdocs/premier/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#13 /Users/Ayce/Desktop/htdocs/premier/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#14 /Users/Ayce/Desktop/htdocs/premier/index.php(118): Kohana_Request->execute()
#15 {main} in /Users/Ayce/Desktop/htdocs/premier/application/views/template/navigation.php:23
2013-10-06 22:05:02 --- EMERGENCY: Kohana_Exception [ 0 ]: The dropdown_colour property does not exist in the Model_Team class ~ MODPATH/orm/classes/Kohana/ORM.php [ 687 ] in /Users/Ayce/Desktop/htdocs/premier/modules/orm/classes/Kohana/ORM.php:603
2013-10-06 22:05:02 --- DEBUG: #0 /Users/Ayce/Desktop/htdocs/premier/modules/orm/classes/Kohana/ORM.php(603): Kohana_ORM->get('dropdown_colour')
#1 /Users/Ayce/Desktop/htdocs/premier/application/views/template/navigation.php(23): Kohana_ORM->__get('dropdown_colour')
#2 /Users/Ayce/Desktop/htdocs/premier/system/classes/Kohana/View.php(61): include('/Users/Ayce/Des...')
#3 /Users/Ayce/Desktop/htdocs/premier/system/classes/Kohana/View.php(348): Kohana_View::capture('/Users/Ayce/Des...', Array)
#4 /Users/Ayce/Desktop/htdocs/premier/system/classes/Kohana/View.php(228): Kohana_View->render()
#5 /Users/Ayce/Desktop/htdocs/premier/application/views/template/main.php(16): Kohana_View->__toString()
#6 /Users/Ayce/Desktop/htdocs/premier/system/classes/Kohana/View.php(61): include('/Users/Ayce/Des...')
#7 /Users/Ayce/Desktop/htdocs/premier/system/classes/Kohana/View.php(348): Kohana_View::capture('/Users/Ayce/Des...', Array)
#8 /Users/Ayce/Desktop/htdocs/premier/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#9 /Users/Ayce/Desktop/htdocs/premier/application/classes/Controller/Layout.php(36): Kohana_Controller_Template->after()
#10 /Users/Ayce/Desktop/htdocs/premier/system/classes/Kohana/Controller.php(87): Controller_Layout->after()
#11 [internal function]: Kohana_Controller->execute()
#12 /Users/Ayce/Desktop/htdocs/premier/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#13 /Users/Ayce/Desktop/htdocs/premier/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#14 /Users/Ayce/Desktop/htdocs/premier/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#15 /Users/Ayce/Desktop/htdocs/premier/index.php(118): Kohana_Request->execute()
#16 {main} in /Users/Ayce/Desktop/htdocs/premier/modules/orm/classes/Kohana/ORM.php:603