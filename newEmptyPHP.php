2017-04-06 13:49:59 [::1][-][-][error][Error] Error: Class 'backend\models\User' not found in C:\xampp\htdocs\my_first_project\backend\models\Post.php:40
Stack trace:
#0 C:\xampp\htdocs\my_first_project\vendor\yiisoft\yii2\base\Model.php(443): backend\models\Post->rules()
#1 C:\xampp\htdocs\my_first_project\vendor\yiisoft\yii2\base\Model.php(411): yii\base\Model->createValidators()
#2 C:\xampp\htdocs\my_first_project\vendor\yiisoft\yii2\base\Model.php(187): yii\base\Model->getValidators()
#3 C:\xampp\htdocs\my_first_project\vendor\yiisoft\yii2\base\Model.php(751): yii\base\Model->scenarios()
#4 C:\xampp\htdocs\my_first_project\vendor\yiisoft\yii2-gii\generators\crud\default\views\_form.php(11): yii\base\Model->safeAttributes()
#5 C:\xampp\htdocs\my_first_project\vendor\yiisoft\yii2\base\View.php(328): require('C:\\xampp\\htdocs...')
#6 C:\xampp\htdocs\my_first_project\vendor\yiisoft\yii2\base\View.php(250): yii\base\View->renderPhpFile('C:\\xampp\\htdocs...', Array)
#7 C:\xampp\htdocs\my_first_project\vendor\yiisoft\yii2-gii\Generator.php(317): yii\base\View->renderFile('C:\\xampp\\htdocs...', Array, Object(yii\gii\generators\crud\Generator))
#8 C:\xampp\htdocs\my_first_project\vendor\yiisoft\yii2-gii\generators\crud\Generator.php(182): yii\gii\Generator->render('views/_form.php')
#9 C:\xampp\htdocs\my_first_project\vendor\yiisoft\yii2-gii\controllers\DefaultController.php(50): yii\gii\generators\crud\Generator->generate()
#10 [internal function]: yii\gii\controllers\DefaultController->actionView('crud')
#11 C:\xampp\htdocs\my_first_project\vendor\yiisoft\yii2\base\InlineAction.php(57): call_user_func_array(Array, Array)
#12 C:\xampp\htdocs\my_first_project\vendor\yiisoft\yii2\base\Controller.php(156): yii\base\InlineAction->runWithParams(Array)
#13 C:\xampp\htdocs\my_first_project\vendor\yiisoft\yii2\base\Module.php(523): yii\base\Controller->runAction('view', Array)
#14 C:\xampp\htdocs\my_first_project\vendor\yiisoft\yii2\web\Application.php(102): yii\base\Module->runAction('gii/default/vie...', Array)
#15 C:\xampp\htdocs\my_first_project\vendor\yiisoft\yii2\base\Application.php(380): yii\web\Application->handleRequest(Object(yii\web\Request))
#16 C:\xampp\htdocs\my_first_project\backend\web\index.php(17): yii\base\Application->run()
#17 {main}
2017-04-06 13:49:59 [::1][-][-][info][application] $_GET = [
    'r' => 'gii/default/view'
    'id' => 'crud'
]

$_POST = [
    '_csrf-backend' => 'S21NTURXajY5Bxo4ciY9DwIdIwIvOQlQGjglIRseHn1mBDcdAQYkRg=='
    'Generator' => [
        'modelClass' => 'backend\\models\\Post'
        'searchModelClass' => 'backend\\models\\PostSearch'
        'controllerClass' => 'backend\\controllers\\PostController'
        'viewPath' => ''
        'baseControllerClass' => 'yii\\web\\Controller'
        'indexWidgetType' => 'grid'
        'enableI18N' => '0'
        'enablePjax' => '0'
        'messageCategory' => 'app'
        'template' => 'default'
    ]
    'preview' => ''
]

$_COOKIE = [
    '_csrf-backend' => '13b8b5d4cb40eb00fbea3171447f7ae24f7b2caf2836e1faa3bdc6ffaa1ffe40a:2:{i:0;s:13:\"_csrf-backend\";i:1;s:32:\"rjWu6qW9IpnOkncfQUhl_ItK-izPEQNp\";}'
    '_csrf-frontend' => '9feb1d56f61adb61eca1ab15aa20c7028f8e776a801f21a2e5bd37156517b9cba:2:{i:0;s:14:\"_csrf-frontend\";i:1;s:32:\"KfDz84g5Z6ChlbD1aWEZgH9gsgH2tk7x\";}'
    'advanced-backend' => '4cp8elu54m7eesk5n3qtu0mtnc'
    'advanced-frontend' => 'r3bs72n03873lepa0ssokfg9hd'
    '_identity-backend' => '48d46e0e664834e46f0ad9761081b408af8d2e755d92f6a84b40405096b0636da:2:{i:0;s:17:\"_identity-backend\";i:1;s:46:\"[1,\"tiCEwOQasO9Ee5DLGijOuvTNh6lWM9rw\",2592000]\";}'
]

$_SERVER = [
    'MIBDIRS' => 'C:/xampp/php/extras/mibs'
    'MYSQL_HOME' => '\\xampp\\mysql\\bin'
    'OPENSSL_CONF' => 'C:/xampp/apache/bin/openssl.cnf'
    'PHP_PEAR_SYSCONF_DIR' => '\\xampp\\php'
    'PHPRC' => '\\xampp\\php'
    'TMP' => '\\xampp\\tmp'
    'HTTP_HOST' => 'localhost'
    'HTTP_CONNECTION' => 'keep-alive'
    'CONTENT_LENGTH' => '507'
    'HTTP_CACHE_CONTROL' => 'max-age=0'
    'HTTP_ORIGIN' => 'http://localhost'
    'HTTP_UPGRADE_INSECURE_REQUESTS' => '1'
    'HTTP_USER_AGENT' => 'Mozilla/5.0 (Windows NT 10.0; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/56.0.2924.87 Safari/537.36'
    'CONTENT_TYPE' => 'application/x-www-form-urlencoded'
    'HTTP_ACCEPT' => 'text/html,application/xhtml+xml,application/xml;q=0.9,image/webp,*/*;q=0.8'
    'HTTP_REFERER' => 'http://localhost/my_first_project/backend/web/index.php?r=gii%2Fdefault%2Fview&id=crud'
    'HTTP_ACCEPT_ENCODING' => 'gzip, deflate, br'
    'HTTP_ACCEPT_LANGUAGE' => 'sk-SK,sk;q=0.8,cs;q=0.6,en-US;q=0.4,en;q=0.2'
    'HTTP_COOKIE' => '_csrf-backend=13b8b5d4cb40eb00fbea3171447f7ae24f7b2caf2836e1faa3bdc6ffaa1ffe40a%3A2%3A%7Bi%3A0%3Bs%3A13%3A%22_csrf-backend%22%3Bi%3A1%3Bs%3A32%3A%22rjWu6qW9IpnOkncfQUhl_ItK-izPEQNp%22%3B%7D; _csrf-frontend=9feb1d56f61adb61eca1ab15aa20c7028f8e776a801f21a2e5bd37156517b9cba%3A2%3A%7Bi%3A0%3Bs%3A14%3A%22_csrf-frontend%22%3Bi%3A1%3Bs%3A32%3A%22KfDz84g5Z6ChlbD1aWEZgH9gsgH2tk7x%22%3B%7D; advanced-backend=4cp8elu54m7eesk5n3qtu0mtnc; advanced-frontend=r3bs72n03873lepa0ssokfg9hd; _identity-backend=48d46e0e664834e46f0ad9761081b408af8d2e755d92f6a84b40405096b0636da%3A2%3A%7Bi%3A0%3Bs%3A17%3A%22_identity-backend%22%3Bi%3A1%3Bs%3A46%3A%22%5B1%2C%22tiCEwOQasO9Ee5DLGijOuvTNh6lWM9rw%22%2C2592000%5D%22%3B%7D'
    'PATH' => 'C:\\WINDOWS\\system32;C:\\WINDOWS;C:\\WINDOWS\\System32\\Wbem;C:\\WINDOWS\\System32\\WindowsPowerShell\\v1.0\\;C:\\Users\\Win10\\AppData\\Local\\Microsoft\\WindowsApps'
    'SystemRoot' => 'C:\\WINDOWS'
    'COMSPEC' => 'C:\\WINDOWS\\system32\\cmd.exe'
    'PATHEXT' => '.COM;.EXE;.BAT;.CMD;.VBS;.VBE;.JS;.JSE;.WSF;.WSH;.MSC'
    'WINDIR' => 'C:\\WINDOWS'
    'SERVER_SIGNATURE' => '<address>Apache/2.4.25 (Win32) OpenSSL/1.0.2j PHP/7.1.1 Server at localhost Port 80</address>
'
    'SERVER_SOFTWARE' => 'Apache/2.4.25 (Win32) OpenSSL/1.0.2j PHP/7.1.1'
    'SERVER_NAME' => 'localhost'
    'SERVER_ADDR' => '::1'
    'SERVER_PORT' => '80'
    'REMOTE_ADDR' => '::1'
    'DOCUMENT_ROOT' => 'C:/xampp/htdocs'
    'REQUEST_SCHEME' => 'http'
    'CONTEXT_PREFIX' => ''
    'CONTEXT_DOCUMENT_ROOT' => 'C:/xampp/htdocs'
    'SERVER_ADMIN' => 'postmaster@localhost'
    'SCRIPT_FILENAME' => 'C:/xampp/htdocs/my_first_project/backend/web/index.php'
    'REMOTE_PORT' => '55272'
    'GATEWAY_INTERFACE' => 'CGI/1.1'
    'SERVER_PROTOCOL' => 'HTTP/1.1'
    'REQUEST_METHOD' => 'POST'
    'QUERY_STRING' => 'r=gii%2Fdefault%2Fview&id=crud'
    'REQUEST_URI' => '/my_first_project/backend/web/index.php?r=gii%2Fdefault%2Fview&id=crud'
    'SCRIPT_NAME' => '/my_first_project/backend/web/index.php'
    'PHP_SELF' => '/my_first_project/backend/web/index.php'
    'REQUEST_TIME_FLOAT' => 1491479398.998
    'REQUEST_TIME' => 1491479398
]
2017-04-06 13:49:59 [::1][1][-][error][yii\web\Session::open] session_start(): Cannot send session cache limiter - headers already sent (output started at C:\xampp\htdocs\my_first_project\vendor\yiisoft\yii2\web\Response.php:391)
2017-04-06 13:49:59 [::1][1][-][info][application] $_GET = [
    'r' => 'gii/default/view'
    'id' => 'crud'
]

$_POST = [
    '_csrf-backend' => 'S21NTURXajY5Bxo4ciY9DwIdIwIvOQlQGjglIRseHn1mBDcdAQYkRg=='
    'Generator' => [
        'modelClass' => 'backend\\models\\Post'
        'searchModelClass' => 'backend\\models\\PostSearch'
        'controllerClass' => 'backend\\controllers\\PostController'
        'viewPath' => ''
        'baseControllerClass' => 'yii\\web\\Controller'
        'indexWidgetType' => 'grid'
        'enableI18N' => '0'
        'enablePjax' => '0'
        'messageCategory' => 'app'
        'template' => 'default'
    ]
    'preview' => ''
]

$_COOKIE = [
    '_csrf-backend' => '13b8b5d4cb40eb00fbea3171447f7ae24f7b2caf2836e1faa3bdc6ffaa1ffe40a:2:{i:0;s:13:\"_csrf-backend\";i:1;s:32:\"rjWu6qW9IpnOkncfQUhl_ItK-izPEQNp\";}'
    '_csrf-frontend' => '9feb1d56f61adb61eca1ab15aa20c7028f8e776a801f21a2e5bd37156517b9cba:2:{i:0;s:14:\"_csrf-frontend\";i:1;s:32:\"KfDz84g5Z6ChlbD1aWEZgH9gsgH2tk7x\";}'
    'advanced-backend' => '4cp8elu54m7eesk5n3qtu0mtnc'
    'advanced-frontend' => 'r3bs72n03873lepa0ssokfg9hd'
    '_identity-backend' => '48d46e0e664834e46f0ad9761081b408af8d2e755d92f6a84b40405096b0636da:2:{i:0;s:17:\"_identity-backend\";i:1;s:46:\"[1,\"tiCEwOQasO9Ee5DLGijOuvTNh6lWM9rw\",2592000]\";}'
]

$_SESSION = [
    '__flash' => []
    '__returnUrl' => '/my_first_project/backend/web/'
    '__id' => 1
]

$_SERVER = [
    'MIBDIRS' => 'C:/xampp/php/extras/mibs'
    'MYSQL_HOME' => '\\xampp\\mysql\\bin'
    'OPENSSL_CONF' => 'C:/xampp/apache/bin/openssl.cnf'
    'PHP_PEAR_SYSCONF_DIR' => '\\xampp\\php'
    'PHPRC' => '\\xampp\\php'
    'TMP' => '\\xampp\\tmp'
    'HTTP_HOST' => 'localhost'
    'HTTP_CONNECTION' => 'keep-alive'
    'CONTENT_LENGTH' => '507'
    'HTTP_CACHE_CONTROL' => 'max-age=0'
    'HTTP_ORIGIN' => 'http://localhost'
    'HTTP_UPGRADE_INSECURE_REQUESTS' => '1'
    'HTTP_USER_AGENT' => 'Mozilla/5.0 (Windows NT 10.0; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/56.0.2924.87 Safari/537.36'
    'CONTENT_TYPE' => 'application/x-www-form-urlencoded'
    'HTTP_ACCEPT' => 'text/html,application/xhtml+xml,application/xml;q=0.9,image/webp,*/*;q=0.8'
    'HTTP_REFERER' => 'http://localhost/my_first_project/backend/web/index.php?r=gii%2Fdefault%2Fview&id=crud'
    'HTTP_ACCEPT_ENCODING' => 'gzip, deflate, br'
    'HTTP_ACCEPT_LANGUAGE' => 'sk-SK,sk;q=0.8,cs;q=0.6,en-US;q=0.4,en;q=0.2'
    'HTTP_COOKIE' => '_csrf-backend=13b8b5d4cb40eb00fbea3171447f7ae24f7b2caf2836e1faa3bdc6ffaa1ffe40a%3A2%3A%7Bi%3A0%3Bs%3A13%3A%22_csrf-backend%22%3Bi%3A1%3Bs%3A32%3A%22rjWu6qW9IpnOkncfQUhl_ItK-izPEQNp%22%3B%7D; _csrf-frontend=9feb1d56f61adb61eca1ab15aa20c7028f8e776a801f21a2e5bd37156517b9cba%3A2%3A%7Bi%3A0%3Bs%3A14%3A%22_csrf-frontend%22%3Bi%3A1%3Bs%3A32%3A%22KfDz84g5Z6ChlbD1aWEZgH9gsgH2tk7x%22%3B%7D; advanced-backend=4cp8elu54m7eesk5n3qtu0mtnc; advanced-frontend=r3bs72n03873lepa0ssokfg9hd; _identity-backend=48d46e0e664834e46f0ad9761081b408af8d2e755d92f6a84b40405096b0636da%3A2%3A%7Bi%3A0%3Bs%3A17%3A%22_identity-backend%22%3Bi%3A1%3Bs%3A46%3A%22%5B1%2C%22tiCEwOQasO9Ee5DLGijOuvTNh6lWM9rw%22%2C2592000%5D%22%3B%7D'
    'PATH' => 'C:\\WINDOWS\\system32;C:\\WINDOWS;C:\\WINDOWS\\System32\\Wbem;C:\\WINDOWS\\System32\\WindowsPowerShell\\v1.0\\;C:\\Users\\Win10\\AppData\\Local\\Microsoft\\WindowsApps'
    'SystemRoot' => 'C:\\WINDOWS'
    'COMSPEC' => 'C:\\WINDOWS\\system32\\cmd.exe'
    'PATHEXT' => '.COM;.EXE;.BAT;.CMD;.VBS;.VBE;.JS;.JSE;.WSF;.WSH;.MSC'
    'WINDIR' => 'C:\\WINDOWS'
    'SERVER_SIGNATURE' => '<address>Apache/2.4.25 (Win32) OpenSSL/1.0.2j PHP/7.1.1 Server at localhost Port 80</address>
'
    'SERVER_SOFTWARE' => 'Apache/2.4.25 (Win32) OpenSSL/1.0.2j PHP/7.1.1'
    'SERVER_NAME' => 'localhost'
    'SERVER_ADDR' => '::1'
    'SERVER_PORT' => '80'
    'REMOTE_ADDR' => '::1'
    'DOCUMENT_ROOT' => 'C:/xampp/htdocs'
    'REQUEST_SCHEME' => 'http'
    'CONTEXT_PREFIX' => ''
    'CONTEXT_DOCUMENT_ROOT' => 'C:/xampp/htdocs'
    'SERVER_ADMIN' => 'postmaster@localhost'
    'SCRIPT_FILENAME' => 'C:/xampp/htdocs/my_first_project/backend/web/index.php'
    'REMOTE_PORT' => '55272'
    'GATEWAY_INTERFACE' => 'CGI/1.1'
    'SERVER_PROTOCOL' => 'HTTP/1.1'
    'REQUEST_METHOD' => 'POST'
    'QUERY_STRING' => 'r=gii%2Fdefault%2Fview&id=crud'
    'REQUEST_URI' => '/my_first_project/backend/web/index.php?r=gii%2Fdefault%2Fview&id=crud'
    'SCRIPT_NAME' => '/my_first_project/backend/web/index.php'
    'PHP_SELF' => '/my_first_project/backend/web/index.php'
    'REQUEST_TIME_FLOAT' => 1491479398.998
    'REQUEST_TIME' => 1491479398
]
2017-04-06 14:08:04 [::1][-][-][error][Error] Error: Class 'backend\models\User' not found in C:\xampp\htdocs\my_first_project\backend\models\Post.php:40
Stack trace:
#0 C:\xampp\htdocs\my_first_project\vendor\yiisoft\yii2\base\Model.php(443): backend\models\Post->rules()
#1 C:\xampp\htdocs\my_first_project\vendor\yiisoft\yii2\base\Model.php(411): yii\base\Model->createValidators()
#2 C:\xampp\htdocs\my_first_project\vendor\yiisoft\yii2\base\Model.php(187): yii\base\Model->getValidators()
#3 C:\xampp\htdocs\my_first_project\vendor\yiisoft\yii2\base\Model.php(751): yii\base\Model->scenarios()
#4 C:\xampp\htdocs\my_first_project\vendor\yiisoft\yii2-gii\generators\crud\default\views\_form.php(11): yii\base\Model->safeAttributes()
#5 C:\xampp\htdocs\my_first_project\vendor\yiisoft\yii2\base\View.php(328): require('C:\\xampp\\htdocs...')
#6 C:\xampp\htdocs\my_first_project\vendor\yiisoft\yii2\base\View.php(250): yii\base\View->renderPhpFile('C:\\xampp\\htdocs...', Array)
#7 C:\xampp\htdocs\my_first_project\vendor\yiisoft\yii2-gii\Generator.php(317): yii\base\View->renderFile('C:\\xampp\\htdocs...', Array, Object(yii\gii\generators\crud\Generator))
#8 C:\xampp\htdocs\my_first_project\vendor\yiisoft\yii2-gii\generators\crud\Generator.php(182): yii\gii\Generator->render('views/_form.php')
#9 C:\xampp\htdocs\my_first_project\vendor\yiisoft\yii2-gii\controllers\DefaultController.php(50): yii\gii\generators\crud\Generator->generate()
#10 [internal function]: yii\gii\controllers\DefaultController->actionView('crud')
#11 C:\xampp\htdocs\my_first_project\vendor\yiisoft\yii2\base\InlineAction.php(57): call_user_func_array(Array, Array)
#12 C:\xampp\htdocs\my_first_project\vendor\yiisoft\yii2\base\Controller.php(156): yii\base\InlineAction->runWithParams(Array)
#13 C:\xampp\htdocs\my_first_project\vendor\yiisoft\yii2\base\Module.php(523): yii\base\Controller->runAction('view', Array)
#14 C:\xampp\htdocs\my_first_project\vendor\yiisoft\yii2\web\Application.php(102): yii\base\Module->runAction('gii/default/vie...', Array)
#15 C:\xampp\htdocs\my_first_project\vendor\yiisoft\yii2\base\Application.php(380): yii\web\Application->handleRequest(Object(yii\web\Request))
#16 C:\xampp\htdocs\my_first_project\backend\web\index.php(17): yii\base\Application->run()
#17 {main}
2017-04-06 14:08:04 [::1][-][-][info][application] $_GET = [
    'r' => 'gii/default/view'
    'id' => 'crud'
]

$_POST = [
    '_csrf-backend' => 'S21NTURXajY5Bxo4ciY9DwIdIwIvOQlQGjglIRseHn1mBDcdAQYkRg=='
    'Generator' => [
        'modelClass' => 'backend\\models\\Post'
        'searchModelClass' => 'backend\\models\\PostSearch'
        'controllerClass' => 'backend\\controllers\\PostController'
        'viewPath' => ''
        'baseControllerClass' => 'yii\\web\\Controller'
        'indexWidgetType' => 'grid'
        'enableI18N' => '0'
        'enablePjax' => '0'
        'messageCategory' => 'app'
        'template' => 'default'
    ]
    'preview' => ''
]

$_COOKIE = [
    '_csrf-backend' => '13b8b5d4cb40eb00fbea3171447f7ae24f7b2caf2836e1faa3bdc6ffaa1ffe40a:2:{i:0;s:13:\"_csrf-backend\";i:1;s:32:\"rjWu6qW9IpnOkncfQUhl_ItK-izPEQNp\";}'
    '_csrf-frontend' => '9feb1d56f61adb61eca1ab15aa20c7028f8e776a801f21a2e5bd37156517b9cba:2:{i:0;s:14:\"_csrf-frontend\";i:1;s:32:\"KfDz84g5Z6ChlbD1aWEZgH9gsgH2tk7x\";}'
    'advanced-backend' => '4cp8elu54m7eesk5n3qtu0mtnc'
    'advanced-frontend' => 'r3bs72n03873lepa0ssokfg9hd'
    '_identity-backend' => '48d46e0e664834e46f0ad9761081b408af8d2e755d92f6a84b40405096b0636da:2:{i:0;s:17:\"_identity-backend\";i:1;s:46:\"[1,\"tiCEwOQasO9Ee5DLGijOuvTNh6lWM9rw\",2592000]\";}'
]

$_SERVER = [
    'MIBDIRS' => 'C:/xampp/php/extras/mibs'
    'MYSQL_HOME' => '\\xampp\\mysql\\bin'
    'OPENSSL_CONF' => 'C:/xampp/apache/bin/openssl.cnf'
    'PHP_PEAR_SYSCONF_DIR' => '\\xampp\\php'
    'PHPRC' => '\\xampp\\php'
    'TMP' => '\\xampp\\tmp'
    'HTTP_HOST' => 'localhost'
    'HTTP_CONNECTION' => 'keep-alive'
    'CONTENT_LENGTH' => '507'
    'HTTP_CACHE_CONTROL' => 'max-age=0'
    'HTTP_ORIGIN' => 'http://localhost'
    'HTTP_UPGRADE_INSECURE_REQUESTS' => '1'
    'HTTP_USER_AGENT' => 'Mozilla/5.0 (Windows NT 10.0; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/56.0.2924.87 Safari/537.36'
    'CONTENT_TYPE' => 'application/x-www-form-urlencoded'
    'HTTP_ACCEPT' => 'text/html,application/xhtml+xml,application/xml;q=0.9,image/webp,*/*;q=0.8'
    'HTTP_REFERER' => 'http://localhost/my_first_project/backend/web/index.php?r=gii%2Fdefault%2Fview&id=crud'
    'HTTP_ACCEPT_ENCODING' => 'gzip, deflate, br'
    'HTTP_ACCEPT_LANGUAGE' => 'sk-SK,sk;q=0.8,cs;q=0.6,en-US;q=0.4,en;q=0.2'
    'HTTP_COOKIE' => '_csrf-backend=13b8b5d4cb40eb00fbea3171447f7ae24f7b2caf2836e1faa3bdc6ffaa1ffe40a%3A2%3A%7Bi%3A0%3Bs%3A13%3A%22_csrf-backend%22%3Bi%3A1%3Bs%3A32%3A%22rjWu6qW9IpnOkncfQUhl_ItK-izPEQNp%22%3B%7D; _csrf-frontend=9feb1d56f61adb61eca1ab15aa20c7028f8e776a801f21a2e5bd37156517b9cba%3A2%3A%7Bi%3A0%3Bs%3A14%3A%22_csrf-frontend%22%3Bi%3A1%3Bs%3A32%3A%22KfDz84g5Z6ChlbD1aWEZgH9gsgH2tk7x%22%3B%7D; advanced-backend=4cp8elu54m7eesk5n3qtu0mtnc; advanced-frontend=r3bs72n03873lepa0ssokfg9hd; _identity-backend=48d46e0e664834e46f0ad9761081b408af8d2e755d92f6a84b40405096b0636da%3A2%3A%7Bi%3A0%3Bs%3A17%3A%22_identity-backend%22%3Bi%3A1%3Bs%3A46%3A%22%5B1%2C%22tiCEwOQasO9Ee5DLGijOuvTNh6lWM9rw%22%2C2592000%5D%22%3B%7D'
    'PATH' => 'C:\\WINDOWS\\system32;C:\\WINDOWS;C:\\WINDOWS\\System32\\Wbem;C:\\WINDOWS\\System32\\WindowsPowerShell\\v1.0\\;C:\\Users\\Win10\\AppData\\Local\\Microsoft\\WindowsApps'
    'SystemRoot' => 'C:\\WINDOWS'
    'COMSPEC' => 'C:\\WINDOWS\\system32\\cmd.exe'
    'PATHEXT' => '.COM;.EXE;.BAT;.CMD;.VBS;.VBE;.JS;.JSE;.WSF;.WSH;.MSC'
    'WINDIR' => 'C:\\WINDOWS'
    'SERVER_SIGNATURE' => '<address>Apache/2.4.25 (Win32) OpenSSL/1.0.2j PHP/7.1.1 Server at localhost Port 80</address>
'
    'SERVER_SOFTWARE' => 'Apache/2.4.25 (Win32) OpenSSL/1.0.2j PHP/7.1.1'
    'SERVER_NAME' => 'localhost'
    'SERVER_ADDR' => '::1'
    'SERVER_PORT' => '80'
    'REMOTE_ADDR' => '::1'
    'DOCUMENT_ROOT' => 'C:/xampp/htdocs'
    'REQUEST_SCHEME' => 'http'
    'CONTEXT_PREFIX' => ''
    'CONTEXT_DOCUMENT_ROOT' => 'C:/xampp/htdocs'
    'SERVER_ADMIN' => 'postmaster@localhost'
    'SCRIPT_FILENAME' => 'C:/xampp/htdocs/my_first_project/backend/web/index.php'
    'REMOTE_PORT' => '55353'
    'GATEWAY_INTERFACE' => 'CGI/1.1'
    'SERVER_PROTOCOL' => 'HTTP/1.1'
    'REQUEST_METHOD' => 'POST'
    'QUERY_STRING' => 'r=gii%2Fdefault%2Fview&id=crud'
    'REQUEST_URI' => '/my_first_project/backend/web/index.php?r=gii%2Fdefault%2Fview&id=crud'
    'SCRIPT_NAME' => '/my_first_project/backend/web/index.php'
    'PHP_SELF' => '/my_first_project/backend/web/index.php'
    'REQUEST_TIME_FLOAT' => 1491480484.217
    'REQUEST_TIME' => 1491480484
]
2017-04-06 14:08:04 [::1][1][-][error][yii\web\Session::open] session_start(): Cannot send session cache limiter - headers already sent (output started at C:\xampp\htdocs\my_first_project\vendor\yiisoft\yii2\web\Response.php:391)
2017-04-06 14:08:04 [::1][1][-][info][application] $_GET = [
    'r' => 'gii/default/view'
    'id' => 'crud'
]

$_POST = [
    '_csrf-backend' => 'S21NTURXajY5Bxo4ciY9DwIdIwIvOQlQGjglIRseHn1mBDcdAQYkRg=='
    'Generator' => [
        'modelClass' => 'backend\\models\\Post'
        'searchModelClass' => 'backend\\models\\PostSearch'
        'controllerClass' => 'backend\\controllers\\PostController'
        'viewPath' => ''
        'baseControllerClass' => 'yii\\web\\Controller'
        'indexWidgetType' => 'grid'
        'enableI18N' => '0'
        'enablePjax' => '0'
        'messageCategory' => 'app'
        'template' => 'default'
    ]
    'preview' => ''
]

$_COOKIE = [
    '_csrf-backend' => '13b8b5d4cb40eb00fbea3171447f7ae24f7b2caf2836e1faa3bdc6ffaa1ffe40a:2:{i:0;s:13:\"_csrf-backend\";i:1;s:32:\"rjWu6qW9IpnOkncfQUhl_ItK-izPEQNp\";}'
    '_csrf-frontend' => '9feb1d56f61adb61eca1ab15aa20c7028f8e776a801f21a2e5bd37156517b9cba:2:{i:0;s:14:\"_csrf-frontend\";i:1;s:32:\"KfDz84g5Z6ChlbD1aWEZgH9gsgH2tk7x\";}'
    'advanced-backend' => '4cp8elu54m7eesk5n3qtu0mtnc'
    'advanced-frontend' => 'r3bs72n03873lepa0ssokfg9hd'
    '_identity-backend' => '48d46e0e664834e46f0ad9761081b408af8d2e755d92f6a84b40405096b0636da:2:{i:0;s:17:\"_identity-backend\";i:1;s:46:\"[1,\"tiCEwOQasO9Ee5DLGijOuvTNh6lWM9rw\",2592000]\";}'
]

$_SESSION = [
    '__flash' => []
    '__returnUrl' => '/my_first_project/backend/web/'
    '__id' => 1
]

$_SERVER = [
    'MIBDIRS' => 'C:/xampp/php/extras/mibs'
    'MYSQL_HOME' => '\\xampp\\mysql\\bin'
    'OPENSSL_CONF' => 'C:/xampp/apache/bin/openssl.cnf'
    'PHP_PEAR_SYSCONF_DIR' => '\\xampp\\php'
    'PHPRC' => '\\xampp\\php'
    'TMP' => '\\xampp\\tmp'
    'HTTP_HOST' => 'localhost'
    'HTTP_CONNECTION' => 'keep-alive'
    'CONTENT_LENGTH' => '507'
    'HTTP_CACHE_CONTROL' => 'max-age=0'
    'HTTP_ORIGIN' => 'http://localhost'
    'HTTP_UPGRADE_INSECURE_REQUESTS' => '1'
    'HTTP_USER_AGENT' => 'Mozilla/5.0 (Windows NT 10.0; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/56.0.2924.87 Safari/537.36'
    'CONTENT_TYPE' => 'application/x-www-form-urlencoded'
    'HTTP_ACCEPT' => 'text/html,application/xhtml+xml,application/xml;q=0.9,image/webp,*/*;q=0.8'
    'HTTP_REFERER' => 'http://localhost/my_first_project/backend/web/index.php?r=gii%2Fdefault%2Fview&id=crud'
    'HTTP_ACCEPT_ENCODING' => 'gzip, deflate, br'
    'HTTP_ACCEPT_LANGUAGE' => 'sk-SK,sk;q=0.8,cs;q=0.6,en-US;q=0.4,en;q=0.2'
    'HTTP_COOKIE' => '_csrf-backend=13b8b5d4cb40eb00fbea3171447f7ae24f7b2caf2836e1faa3bdc6ffaa1ffe40a%3A2%3A%7Bi%3A0%3Bs%3A13%3A%22_csrf-backend%22%3Bi%3A1%3Bs%3A32%3A%22rjWu6qW9IpnOkncfQUhl_ItK-izPEQNp%22%3B%7D; _csrf-frontend=9feb1d56f61adb61eca1ab15aa20c7028f8e776a801f21a2e5bd37156517b9cba%3A2%3A%7Bi%3A0%3Bs%3A14%3A%22_csrf-frontend%22%3Bi%3A1%3Bs%3A32%3A%22KfDz84g5Z6ChlbD1aWEZgH9gsgH2tk7x%22%3B%7D; advanced-backend=4cp8elu54m7eesk5n3qtu0mtnc; advanced-frontend=r3bs72n03873lepa0ssokfg9hd; _identity-backend=48d46e0e664834e46f0ad9761081b408af8d2e755d92f6a84b40405096b0636da%3A2%3A%7Bi%3A0%3Bs%3A17%3A%22_identity-backend%22%3Bi%3A1%3Bs%3A46%3A%22%5B1%2C%22tiCEwOQasO9Ee5DLGijOuvTNh6lWM9rw%22%2C2592000%5D%22%3B%7D'
    'PATH' => 'C:\\WINDOWS\\system32;C:\\WINDOWS;C:\\WINDOWS\\System32\\Wbem;C:\\WINDOWS\\System32\\WindowsPowerShell\\v1.0\\;C:\\Users\\Win10\\AppData\\Local\\Microsoft\\WindowsApps'
    'SystemRoot' => 'C:\\WINDOWS'
    'COMSPEC' => 'C:\\WINDOWS\\system32\\cmd.exe'
    'PATHEXT' => '.COM;.EXE;.BAT;.CMD;.VBS;.VBE;.JS;.JSE;.WSF;.WSH;.MSC'
    'WINDIR' => 'C:\\WINDOWS'
    'SERVER_SIGNATURE' => '<address>Apache/2.4.25 (Win32) OpenSSL/1.0.2j PHP/7.1.1 Server at localhost Port 80</address>
'
    'SERVER_SOFTWARE' => 'Apache/2.4.25 (Win32) OpenSSL/1.0.2j PHP/7.1.1'
    'SERVER_NAME' => 'localhost'
    'SERVER_ADDR' => '::1'
    'SERVER_PORT' => '80'
    'REMOTE_ADDR' => '::1'
    'DOCUMENT_ROOT' => 'C:/xampp/htdocs'
    'REQUEST_SCHEME' => 'http'
    'CONTEXT_PREFIX' => ''
    'CONTEXT_DOCUMENT_ROOT' => 'C:/xampp/htdocs'
    'SERVER_ADMIN' => 'postmaster@localhost'
    'SCRIPT_FILENAME' => 'C:/xampp/htdocs/my_first_project/backend/web/index.php'
    'REMOTE_PORT' => '55353'
    'GATEWAY_INTERFACE' => 'CGI/1.1'
    'SERVER_PROTOCOL' => 'HTTP/1.1'
    'REQUEST_METHOD' => 'POST'
    'QUERY_STRING' => 'r=gii%2Fdefault%2Fview&id=crud'
    'REQUEST_URI' => '/my_first_project/backend/web/index.php?r=gii%2Fdefault%2Fview&id=crud'
    'SCRIPT_NAME' => '/my_first_project/backend/web/index.php'
    'PHP_SELF' => '/my_first_project/backend/web/index.php'
    'REQUEST_TIME_FLOAT' => 1491480484.217
    'REQUEST_TIME' => 1491480484
]
2017-04-06 14:42:47 [::1][1][4cp8elu54m7eesk5n3qtu0mtnc][error][yii\web\HttpException:400] yii\web\BadRequestHttpException: Missing required parameters: id in C:\xampp\htdocs\my_first_project\vendor\yiisoft\yii2\web\Controller.php:149
Stack trace:
#0 C:\xampp\htdocs\my_first_project\vendor\yiisoft\yii2\base\InlineAction.php(51): yii\web\Controller->bindActionParams(Object(yii\base\InlineAction), Array)
#1 C:\xampp\htdocs\my_first_project\vendor\yiisoft\yii2\base\Controller.php(156): yii\base\InlineAction->runWithParams(Array)
#2 C:\xampp\htdocs\my_first_project\vendor\yiisoft\yii2\base\Module.php(523): yii\base\Controller->runAction('view', Array)
#3 C:\xampp\htdocs\my_first_project\vendor\yiisoft\yii2\web\Application.php(102): yii\base\Module->runAction('post/view', Array)
#4 C:\xampp\htdocs\my_first_project\vendor\yiisoft\yii2\base\Application.php(380): yii\web\Application->handleRequest(Object(yii\web\Request))
#5 C:\xampp\htdocs\my_first_project\backend\web\index.php(17): yii\base\Application->run()
#6 {main}
2017-04-06 14:42:47 [::1][1][4cp8elu54m7eesk5n3qtu0mtnc][info][application] $_GET = [
    'r' => 'post/view'
]

$_COOKIE = [
    '_csrf-backend' => '13b8b5d4cb40eb00fbea3171447f7ae24f7b2caf2836e1faa3bdc6ffaa1ffe40a:2:{i:0;s:13:\"_csrf-backend\";i:1;s:32:\"rjWu6qW9IpnOkncfQUhl_ItK-izPEQNp\";}'
    '_csrf-frontend' => '9feb1d56f61adb61eca1ab15aa20c7028f8e776a801f21a2e5bd37156517b9cba:2:{i:0;s:14:\"_csrf-frontend\";i:1;s:32:\"KfDz84g5Z6ChlbD1aWEZgH9gsgH2tk7x\";}'
    'advanced-backend' => '4cp8elu54m7eesk5n3qtu0mtnc'
    'advanced-frontend' => 'r3bs72n03873lepa0ssokfg9hd'
    '_identity-backend' => '48d46e0e664834e46f0ad9761081b408af8d2e755d92f6a84b40405096b0636da:2:{i:0;s:17:\"_identity-backend\";i:1;s:46:\"[1,\"tiCEwOQasO9Ee5DLGijOuvTNh6lWM9rw\",2592000]\";}'
]

$_SESSION = [
    '__flash' => []
    '__returnUrl' => '/my_first_project/backend/web/'
    '__id' => 1
]

$_SERVER = [
    'MIBDIRS' => 'C:/xampp/php/extras/mibs'
    'MYSQL_HOME' => '\\xampp\\mysql\\bin'
    'OPENSSL_CONF' => 'C:/xampp/apache/bin/openssl.cnf'
    'PHP_PEAR_SYSCONF_DIR' => '\\xampp\\php'
    'PHPRC' => '\\xampp\\php'
    'TMP' => '\\xampp\\tmp'
    'HTTP_HOST' => 'localhost'
    'HTTP_CONNECTION' => 'keep-alive'
    'HTTP_CACHE_CONTROL' => 'max-age=0'
    'HTTP_UPGRADE_INSECURE_REQUESTS' => '1'
    'HTTP_USER_AGENT' => 'Mozilla/5.0 (Windows NT 10.0; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/56.0.2924.87 Safari/537.36'
    'HTTP_ACCEPT' => 'text/html,application/xhtml+xml,application/xml;q=0.9,image/webp,*/*;q=0.8'
    'HTTP_REFERER' => 'http://localhost/my_first_project/backend/web/index.php?r=post%2Fcreate'
    'HTTP_ACCEPT_ENCODING' => 'gzip, deflate, sdch, br'
    'HTTP_ACCEPT_LANGUAGE' => 'sk-SK,sk;q=0.8,cs;q=0.6,en-US;q=0.4,en;q=0.2'
    'HTTP_COOKIE' => '_csrf-backend=13b8b5d4cb40eb00fbea3171447f7ae24f7b2caf2836e1faa3bdc6ffaa1ffe40a%3A2%3A%7Bi%3A0%3Bs%3A13%3A%22_csrf-backend%22%3Bi%3A1%3Bs%3A32%3A%22rjWu6qW9IpnOkncfQUhl_ItK-izPEQNp%22%3B%7D; _csrf-frontend=9feb1d56f61adb61eca1ab15aa20c7028f8e776a801f21a2e5bd37156517b9cba%3A2%3A%7Bi%3A0%3Bs%3A14%3A%22_csrf-frontend%22%3Bi%3A1%3Bs%3A32%3A%22KfDz84g5Z6ChlbD1aWEZgH9gsgH2tk7x%22%3B%7D; advanced-backend=4cp8elu54m7eesk5n3qtu0mtnc; advanced-frontend=r3bs72n03873lepa0ssokfg9hd; _identity-backend=48d46e0e664834e46f0ad9761081b408af8d2e755d92f6a84b40405096b0636da%3A2%3A%7Bi%3A0%3Bs%3A17%3A%22_identity-backend%22%3Bi%3A1%3Bs%3A46%3A%22%5B1%2C%22tiCEwOQasO9Ee5DLGijOuvTNh6lWM9rw%22%2C2592000%5D%22%3B%7D'
    'PATH' => 'C:\\WINDOWS\\system32;C:\\WINDOWS;C:\\WINDOWS\\System32\\Wbem;C:\\WINDOWS\\System32\\WindowsPowerShell\\v1.0\\;C:\\Users\\Win10\\AppData\\Local\\Microsoft\\WindowsApps'
    'SystemRoot' => 'C:\\WINDOWS'
    'COMSPEC' => 'C:\\WINDOWS\\system32\\cmd.exe'
    'PATHEXT' => '.COM;.EXE;.BAT;.CMD;.VBS;.VBE;.JS;.JSE;.WSF;.WSH;.MSC'
    'WINDIR' => 'C:\\WINDOWS'
    'SERVER_SIGNATURE' => '<address>Apache/2.4.25 (Win32) OpenSSL/1.0.2j PHP/7.1.1 Server at localhost Port 80</address>
'
    'SERVER_SOFTWARE' => 'Apache/2.4.25 (Win32) OpenSSL/1.0.2j PHP/7.1.1'
    'SERVER_NAME' => 'localhost'
    'SERVER_ADDR' => '::1'
    'SERVER_PORT' => '80'
    'REMOTE_ADDR' => '::1'
    'DOCUMENT_ROOT' => 'C:/xampp/htdocs'
    'REQUEST_SCHEME' => 'http'
    'CONTEXT_PREFIX' => ''
    'CONTEXT_DOCUMENT_ROOT' => 'C:/xampp/htdocs'
    'SERVER_ADMIN' => 'postmaster@localhost'
    'SCRIPT_FILENAME' => 'C:/xampp/htdocs/my_first_project/backend/web/index.php'
    'REMOTE_PORT' => '55575'
    'GATEWAY_INTERFACE' => 'CGI/1.1'
    'SERVER_PROTOCOL' => 'HTTP/1.1'
    'REQUEST_METHOD' => 'GET'
    'QUERY_STRING' => 'r=post%2Fview'
    'REQUEST_URI' => '/my_first_project/backend/web/index.php?r=post%2Fview'
    'SCRIPT_NAME' => '/my_first_project/backend/web/index.php'
    'PHP_SELF' => '/my_first_project/backend/web/index.php'
    'REQUEST_TIME_FLOAT' => 1491482567.88
    'REQUEST_TIME' => 1491482567
]
2017-04-06 14:43:13 [::1][1][4cp8elu54m7eesk5n3qtu0mtnc][error][yii\web\HttpException:400] yii\web\BadRequestHttpException: Missing required parameters: id in C:\xampp\htdocs\my_first_project\vendor\yiisoft\yii2\web\Controller.php:149
Stack trace:
#0 C:\xampp\htdocs\my_first_project\vendor\yiisoft\yii2\base\InlineAction.php(51): yii\web\Controller->bindActionParams(Object(yii\base\InlineAction), Array)
#1 C:\xampp\htdocs\my_first_project\vendor\yiisoft\yii2\base\Controller.php(156): yii\base\InlineAction->runWithParams(Array)
#2 C:\xampp\htdocs\my_first_project\vendor\yiisoft\yii2\base\Module.php(523): yii\base\Controller->runAction('view', Array)
#3 C:\xampp\htdocs\my_first_project\vendor\yiisoft\yii2\web\Application.php(102): yii\base\Module->runAction('post/view', Array)
#4 C:\xampp\htdocs\my_first_project\vendor\yiisoft\yii2\base\Application.php(380): yii\web\Application->handleRequest(Object(yii\web\Request))
#5 C:\xampp\htdocs\my_first_project\backend\web\index.php(17): yii\base\Application->run()
#6 {main}
2017-04-06 14:43:13 [::1][1][4cp8elu54m7eesk5n3qtu0mtnc][info][application] $_GET = [
    'r' => 'post/view'
]

$_COOKIE = [
    '_csrf-backend' => '13b8b5d4cb40eb00fbea3171447f7ae24f7b2caf2836e1faa3bdc6ffaa1ffe40a:2:{i:0;s:13:\"_csrf-backend\";i:1;s:32:\"rjWu6qW9IpnOkncfQUhl_ItK-izPEQNp\";}'
    '_csrf-frontend' => '9feb1d56f61adb61eca1ab15aa20c7028f8e776a801f21a2e5bd37156517b9cba:2:{i:0;s:14:\"_csrf-frontend\";i:1;s:32:\"KfDz84g5Z6ChlbD1aWEZgH9gsgH2tk7x\";}'
    'advanced-backend' => '4cp8elu54m7eesk5n3qtu0mtnc'
    'advanced-frontend' => 'r3bs72n03873lepa0ssokfg9hd'
    '_identity-backend' => '48d46e0e664834e46f0ad9761081b408af8d2e755d92f6a84b40405096b0636da:2:{i:0;s:17:\"_identity-backend\";i:1;s:46:\"[1,\"tiCEwOQasO9Ee5DLGijOuvTNh6lWM9rw\",2592000]\";}'
]

$_SESSION = [
    '__flash' => []
    '__returnUrl' => '/my_first_project/backend/web/'
    '__id' => 1
]

$_SERVER = [
    'MIBDIRS' => 'C:/xampp/php/extras/mibs'
    'MYSQL_HOME' => '\\xampp\\mysql\\bin'
    'OPENSSL_CONF' => 'C:/xampp/apache/bin/openssl.cnf'
    'PHP_PEAR_SYSCONF_DIR' => '\\xampp\\php'
    'PHPRC' => '\\xampp\\php'
    'TMP' => '\\xampp\\tmp'
    'HTTP_HOST' => 'localhost'
    'HTTP_CONNECTION' => 'keep-alive'
    'HTTP_CACHE_CONTROL' => 'max-age=0'
    'HTTP_UPGRADE_INSECURE_REQUESTS' => '1'
    'HTTP_USER_AGENT' => 'Mozilla/5.0 (Windows NT 10.0; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/56.0.2924.87 Safari/537.36'
    'HTTP_ACCEPT' => 'text/html,application/xhtml+xml,application/xml;q=0.9,image/webp,*/*;q=0.8'
    'HTTP_REFERER' => 'http://localhost/my_first_project/backend/web/index.php?r=post%2Fcreate'
    'HTTP_ACCEPT_ENCODING' => 'gzip, deflate, sdch, br'
    'HTTP_ACCEPT_LANGUAGE' => 'sk-SK,sk;q=0.8,cs;q=0.6,en-US;q=0.4,en;q=0.2'
    'HTTP_COOKIE' => '_csrf-backend=13b8b5d4cb40eb00fbea3171447f7ae24f7b2caf2836e1faa3bdc6ffaa1ffe40a%3A2%3A%7Bi%3A0%3Bs%3A13%3A%22_csrf-backend%22%3Bi%3A1%3Bs%3A32%3A%22rjWu6qW9IpnOkncfQUhl_ItK-izPEQNp%22%3B%7D; _csrf-frontend=9feb1d56f61adb61eca1ab15aa20c7028f8e776a801f21a2e5bd37156517b9cba%3A2%3A%7Bi%3A0%3Bs%3A14%3A%22_csrf-frontend%22%3Bi%3A1%3Bs%3A32%3A%22KfDz84g5Z6ChlbD1aWEZgH9gsgH2tk7x%22%3B%7D; advanced-backend=4cp8elu54m7eesk5n3qtu0mtnc; advanced-frontend=r3bs72n03873lepa0ssokfg9hd; _identity-backend=48d46e0e664834e46f0ad9761081b408af8d2e755d92f6a84b40405096b0636da%3A2%3A%7Bi%3A0%3Bs%3A17%3A%22_identity-backend%22%3Bi%3A1%3Bs%3A46%3A%22%5B1%2C%22tiCEwOQasO9Ee5DLGijOuvTNh6lWM9rw%22%2C2592000%5D%22%3B%7D'
    'PATH' => 'C:\\WINDOWS\\system32;C:\\WINDOWS;C:\\WINDOWS\\System32\\Wbem;C:\\WINDOWS\\System32\\WindowsPowerShell\\v1.0\\;C:\\Users\\Win10\\AppData\\Local\\Microsoft\\WindowsApps'
    'SystemRoot' => 'C:\\WINDOWS'
    'COMSPEC' => 'C:\\WINDOWS\\system32\\cmd.exe'
    'PATHEXT' => '.COM;.EXE;.BAT;.CMD;.VBS;.VBE;.JS;.JSE;.WSF;.WSH;.MSC'
    'WINDIR' => 'C:\\WINDOWS'
    'SERVER_SIGNATURE' => '<address>Apache/2.4.25 (Win32) OpenSSL/1.0.2j PHP/7.1.1 Server at localhost Port 80</address>
'
    'SERVER_SOFTWARE' => 'Apache/2.4.25 (Win32) OpenSSL/1.0.2j PHP/7.1.1'
    'SERVER_NAME' => 'localhost'
    'SERVER_ADDR' => '::1'
    'SERVER_PORT' => '80'
    'REMOTE_ADDR' => '::1'
    'DOCUMENT_ROOT' => 'C:/xampp/htdocs'
    'REQUEST_SCHEME' => 'http'
    'CONTEXT_PREFIX' => ''
    'CONTEXT_DOCUMENT_ROOT' => 'C:/xampp/htdocs'
    'SERVER_ADMIN' => 'postmaster@localhost'
    'SCRIPT_FILENAME' => 'C:/xampp/htdocs/my_first_project/backend/web/index.php'
    'REMOTE_PORT' => '55585'
    'GATEWAY_INTERFACE' => 'CGI/1.1'
    'SERVER_PROTOCOL' => 'HTTP/1.1'
    'REQUEST_METHOD' => 'GET'
    'QUERY_STRING' => 'r=post%2Fview'
    'REQUEST_URI' => '/my_first_project/backend/web/index.php?r=post%2Fview'
    'SCRIPT_NAME' => '/my_first_project/backend/web/index.php'
    'PHP_SELF' => '/my_first_project/backend/web/index.php'
    'REQUEST_TIME_FLOAT' => 1491482593.096
    'REQUEST_TIME' => 1491482593
]
2017-04-06 16:30:47 [::1][-][-][error][yii\base\ErrorException:1] yii\base\ErrorException: Class 'backend\models\Post' not found in C:\xampp\htdocs\my_first_project\common\models\PostSearch.php:13
Stack trace:
#0 [internal function]: yii\base\ErrorHandler->handleFatalError()
#1 {main}
2017-04-06 16:30:47 [::1][-][-][info][application] $_GET = [
    'r' => 'post/index'
]

$_COOKIE = [
    '_csrf-backend' => '13b8b5d4cb40eb00fbea3171447f7ae24f7b2caf2836e1faa3bdc6ffaa1ffe40a:2:{i:0;s:13:\"_csrf-backend\";i:1;s:32:\"rjWu6qW9IpnOkncfQUhl_ItK-izPEQNp\";}'
    '_csrf-frontend' => '9feb1d56f61adb61eca1ab15aa20c7028f8e776a801f21a2e5bd37156517b9cba:2:{i:0;s:14:\"_csrf-frontend\";i:1;s:32:\"KfDz84g5Z6ChlbD1aWEZgH9gsgH2tk7x\";}'
    'advanced-backend' => '4n7pt5ad6vb4cqgccmuslnlccj'
    'advanced-frontend' => 'r3bs72n03873lepa0ssokfg9hd'
    '_identity-backend' => 'c0d1afe5c2d610f9a90e14a0fab01645b813d345cb63ec03c8e2cb965d6dd833a:2:{i:0;s:17:\"_identity-backend\";i:1;s:46:\"[2,\"1SNgG1qkakmN2Frp80Qr1SX2kgRhIH88\",2592000]\";}'
]

$_SERVER = [
    'MIBDIRS' => 'C:/xampp/php/extras/mibs'
    'MYSQL_HOME' => '\\xampp\\mysql\\bin'
    'OPENSSL_CONF' => 'C:/xampp/apache/bin/openssl.cnf'
    'PHP_PEAR_SYSCONF_DIR' => '\\xampp\\php'
    'PHPRC' => '\\xampp\\php'
    'TMP' => '\\xampp\\tmp'
    'HTTP_HOST' => 'localhost'
    'HTTP_CONNECTION' => 'keep-alive'
    'HTTP_CACHE_CONTROL' => 'max-age=0'
    'HTTP_UPGRADE_INSECURE_REQUESTS' => '1'
    'HTTP_USER_AGENT' => 'Mozilla/5.0 (Windows NT 10.0; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/56.0.2924.87 Safari/537.36'
    'HTTP_ACCEPT' => 'text/html,application/xhtml+xml,application/xml;q=0.9,image/webp,*/*;q=0.8'
    'HTTP_REFERER' => 'http://localhost/my_first_project/backend/web/index.php?r=post%2Findex'
    'HTTP_ACCEPT_ENCODING' => 'gzip, deflate, sdch, br'
    'HTTP_ACCEPT_LANGUAGE' => 'sk-SK,sk;q=0.8,cs;q=0.6,en-US;q=0.4,en;q=0.2'
    'HTTP_COOKIE' => '_csrf-backend=13b8b5d4cb40eb00fbea3171447f7ae24f7b2caf2836e1faa3bdc6ffaa1ffe40a%3A2%3A%7Bi%3A0%3Bs%3A13%3A%22_csrf-backend%22%3Bi%3A1%3Bs%3A32%3A%22rjWu6qW9IpnOkncfQUhl_ItK-izPEQNp%22%3B%7D; _csrf-frontend=9feb1d56f61adb61eca1ab15aa20c7028f8e776a801f21a2e5bd37156517b9cba%3A2%3A%7Bi%3A0%3Bs%3A14%3A%22_csrf-frontend%22%3Bi%3A1%3Bs%3A32%3A%22KfDz84g5Z6ChlbD1aWEZgH9gsgH2tk7x%22%3B%7D; advanced-backend=4n7pt5ad6vb4cqgccmuslnlccj; advanced-frontend=r3bs72n03873lepa0ssokfg9hd; _identity-backend=c0d1afe5c2d610f9a90e14a0fab01645b813d345cb63ec03c8e2cb965d6dd833a%3A2%3A%7Bi%3A0%3Bs%3A17%3A%22_identity-backend%22%3Bi%3A1%3Bs%3A46%3A%22%5B2%2C%221SNgG1qkakmN2Frp80Qr1SX2kgRhIH88%22%2C2592000%5D%22%3B%7D'
    'PATH' => 'C:\\WINDOWS\\system32;C:\\WINDOWS;C:\\WINDOWS\\System32\\Wbem;C:\\WINDOWS\\System32\\WindowsPowerShell\\v1.0\\;C:\\Users\\Win10\\AppData\\Local\\Microsoft\\WindowsApps'
    'SystemRoot' => 'C:\\WINDOWS'
    'COMSPEC' => 'C:\\WINDOWS\\system32\\cmd.exe'
    'PATHEXT' => '.COM;.EXE;.BAT;.CMD;.VBS;.VBE;.JS;.JSE;.WSF;.WSH;.MSC'
    'WINDIR' => 'C:\\WINDOWS'
    'SERVER_SIGNATURE' => '<address>Apache/2.4.25 (Win32) OpenSSL/1.0.2j PHP/7.1.1 Server at localhost Port 80</address>
'
    'SERVER_SOFTWARE' => 'Apache/2.4.25 (Win32) OpenSSL/1.0.2j PHP/7.1.1'
    'SERVER_NAME' => 'localhost'
    'SERVER_ADDR' => '::1'
    'SERVER_PORT' => '80'
    'REMOTE_ADDR' => '::1'
    'DOCUMENT_ROOT' => 'C:/xampp/htdocs'
    'REQUEST_SCHEME' => 'http'
    'CONTEXT_PREFIX' => ''
    'CONTEXT_DOCUMENT_ROOT' => 'C:/xampp/htdocs'
    'SERVER_ADMIN' => 'postmaster@localhost'
    'SCRIPT_FILENAME' => 'C:/xampp/htdocs/my_first_project/backend/web/index.php'
    'REMOTE_PORT' => '56361'
    'GATEWAY_INTERFACE' => 'CGI/1.1'
    'SERVER_PROTOCOL' => 'HTTP/1.1'
    'REQUEST_METHOD' => 'GET'
    'QUERY_STRING' => 'r=post%2Findex'
    'REQUEST_URI' => '/my_first_project/backend/web/index.php?r=post%2Findex'
    'SCRIPT_NAME' => '/my_first_project/backend/web/index.php'
    'PHP_SELF' => '/my_first_project/backend/web/index.php'
    'REQUEST_TIME_FLOAT' => 1491489047.566
    'REQUEST_TIME' => 1491489047
]
2017-04-06 16:31:10 [::1][-][-][error][yii\base\ErrorException:1] yii\base\ErrorException: Class 'backend\models\Post' not found in C:\xampp\htdocs\my_first_project\common\models\PostSearch.php:13
Stack trace:
#0 [internal function]: yii\base\ErrorHandler->handleFatalError()
#1 {main}
2017-04-06 16:31:10 [::1][-][-][info][application] $_GET = [
    'r' => 'post/index'
]

$_COOKIE = [
    '_csrf-backend' => '13b8b5d4cb40eb00fbea3171447f7ae24f7b2caf2836e1faa3bdc6ffaa1ffe40a:2:{i:0;s:13:\"_csrf-backend\";i:1;s:32:\"rjWu6qW9IpnOkncfQUhl_ItK-izPEQNp\";}'
    '_csrf-frontend' => '9feb1d56f61adb61eca1ab15aa20c7028f8e776a801f21a2e5bd37156517b9cba:2:{i:0;s:14:\"_csrf-frontend\";i:1;s:32:\"KfDz84g5Z6ChlbD1aWEZgH9gsgH2tk7x\";}'
    'advanced-backend' => '4n7pt5ad6vb4cqgccmuslnlccj'
    'advanced-frontend' => 'r3bs72n03873lepa0ssokfg9hd'
    '_identity-backend' => 'c0d1afe5c2d610f9a90e14a0fab01645b813d345cb63ec03c8e2cb965d6dd833a:2:{i:0;s:17:\"_identity-backend\";i:1;s:46:\"[2,\"1SNgG1qkakmN2Frp80Qr1SX2kgRhIH88\",2592000]\";}'
]

$_SERVER = [
    'MIBDIRS' => 'C:/xampp/php/extras/mibs'
    'MYSQL_HOME' => '\\xampp\\mysql\\bin'
    'OPENSSL_CONF' => 'C:/xampp/apache/bin/openssl.cnf'
    'PHP_PEAR_SYSCONF_DIR' => '\\xampp\\php'
    'PHPRC' => '\\xampp\\php'
    'TMP' => '\\xampp\\tmp'
    'HTTP_HOST' => 'localhost'
    'HTTP_CONNECTION' => 'keep-alive'
    'HTTP_CACHE_CONTROL' => 'max-age=0'
    'HTTP_UPGRADE_INSECURE_REQUESTS' => '1'
    'HTTP_USER_AGENT' => 'Mozilla/5.0 (Windows NT 10.0; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/56.0.2924.87 Safari/537.36'
    'HTTP_ACCEPT' => 'text/html,application/xhtml+xml,application/xml;q=0.9,image/webp,*/*;q=0.8'
    'HTTP_REFERER' => 'http://localhost/my_first_project/backend/web/index.php?r=post%2Findex'
    'HTTP_ACCEPT_ENCODING' => 'gzip, deflate, sdch, br'
    'HTTP_ACCEPT_LANGUAGE' => 'sk-SK,sk;q=0.8,cs;q=0.6,en-US;q=0.4,en;q=0.2'
    'HTTP_COOKIE' => '_csrf-backend=13b8b5d4cb40eb00fbea3171447f7ae24f7b2caf2836e1faa3bdc6ffaa1ffe40a%3A2%3A%7Bi%3A0%3Bs%3A13%3A%22_csrf-backend%22%3Bi%3A1%3Bs%3A32%3A%22rjWu6qW9IpnOkncfQUhl_ItK-izPEQNp%22%3B%7D; _csrf-frontend=9feb1d56f61adb61eca1ab15aa20c7028f8e776a801f21a2e5bd37156517b9cba%3A2%3A%7Bi%3A0%3Bs%3A14%3A%22_csrf-frontend%22%3Bi%3A1%3Bs%3A32%3A%22KfDz84g5Z6ChlbD1aWEZgH9gsgH2tk7x%22%3B%7D; advanced-backend=4n7pt5ad6vb4cqgccmuslnlccj; advanced-frontend=r3bs72n03873lepa0ssokfg9hd; _identity-backend=c0d1afe5c2d610f9a90e14a0fab01645b813d345cb63ec03c8e2cb965d6dd833a%3A2%3A%7Bi%3A0%3Bs%3A17%3A%22_identity-backend%22%3Bi%3A1%3Bs%3A46%3A%22%5B2%2C%221SNgG1qkakmN2Frp80Qr1SX2kgRhIH88%22%2C2592000%5D%22%3B%7D'
    'PATH' => 'C:\\WINDOWS\\system32;C:\\WINDOWS;C:\\WINDOWS\\System32\\Wbem;C:\\WINDOWS\\System32\\WindowsPowerShell\\v1.0\\;C:\\Users\\Win10\\AppData\\Local\\Microsoft\\WindowsApps'
    'SystemRoot' => 'C:\\WINDOWS'
    'COMSPEC' => 'C:\\WINDOWS\\system32\\cmd.exe'
    'PATHEXT' => '.COM;.EXE;.BAT;.CMD;.VBS;.VBE;.JS;.JSE;.WSF;.WSH;.MSC'
    'WINDIR' => 'C:\\WINDOWS'
    'SERVER_SIGNATURE' => '<address>Apache/2.4.25 (Win32) OpenSSL/1.0.2j PHP/7.1.1 Server at localhost Port 80</address>
'
    'SERVER_SOFTWARE' => 'Apache/2.4.25 (Win32) OpenSSL/1.0.2j PHP/7.1.1'
    'SERVER_NAME' => 'localhost'
    'SERVER_ADDR' => '::1'
    'SERVER_PORT' => '80'
    'REMOTE_ADDR' => '::1'
    'DOCUMENT_ROOT' => 'C:/xampp/htdocs'
    'REQUEST_SCHEME' => 'http'
    'CONTEXT_PREFIX' => ''
    'CONTEXT_DOCUMENT_ROOT' => 'C:/xampp/htdocs'
    'SERVER_ADMIN' => 'postmaster@localhost'
    'SCRIPT_FILENAME' => 'C:/xampp/htdocs/my_first_project/backend/web/index.php'
    'REMOTE_PORT' => '56367'
    'GATEWAY_INTERFACE' => 'CGI/1.1'
    'SERVER_PROTOCOL' => 'HTTP/1.1'
    'REQUEST_METHOD' => 'GET'
    'QUERY_STRING' => 'r=post%2Findex'
    'REQUEST_URI' => '/my_first_project/backend/web/index.php?r=post%2Findex'
    'SCRIPT_NAME' => '/my_first_project/backend/web/index.php'
    'PHP_SELF' => '/my_first_project/backend/web/index.php'
    'REQUEST_TIME_FLOAT' => 1491489070.665
    'REQUEST_TIME' => 1491489070
]
2017-04-06 16:31:11 [::1][-][-][error][yii\base\ErrorException:1] yii\base\ErrorException: Class 'backend\models\Post' not found in C:\xampp\htdocs\my_first_project\common\models\PostSearch.php:13
Stack trace:
#0 [internal function]: yii\base\ErrorHandler->handleFatalError()
#1 {main}
2017-04-06 16:31:11 [::1][-][-][info][application] $_GET = [
    'r' => 'post/index'
]

$_COOKIE = [
    '_csrf-backend' => '13b8b5d4cb40eb00fbea3171447f7ae24f7b2caf2836e1faa3bdc6ffaa1ffe40a:2:{i:0;s:13:\"_csrf-backend\";i:1;s:32:\"rjWu6qW9IpnOkncfQUhl_ItK-izPEQNp\";}'
    '_csrf-frontend' => '9feb1d56f61adb61eca1ab15aa20c7028f8e776a801f21a2e5bd37156517b9cba:2:{i:0;s:14:\"_csrf-frontend\";i:1;s:32:\"KfDz84g5Z6ChlbD1aWEZgH9gsgH2tk7x\";}'
    'advanced-backend' => '4n7pt5ad6vb4cqgccmuslnlccj'
    'advanced-frontend' => 'r3bs72n03873lepa0ssokfg9hd'
    '_identity-backend' => 'c0d1afe5c2d610f9a90e14a0fab01645b813d345cb63ec03c8e2cb965d6dd833a:2:{i:0;s:17:\"_identity-backend\";i:1;s:46:\"[2,\"1SNgG1qkakmN2Frp80Qr1SX2kgRhIH88\",2592000]\";}'
]

$_SERVER = [
    'MIBDIRS' => 'C:/xampp/php/extras/mibs'
    'MYSQL_HOME' => '\\xampp\\mysql\\bin'
    'OPENSSL_CONF' => 'C:/xampp/apache/bin/openssl.cnf'
    'PHP_PEAR_SYSCONF_DIR' => '\\xampp\\php'
    'PHPRC' => '\\xampp\\php'
    'TMP' => '\\xampp\\tmp'
    'HTTP_HOST' => 'localhost'
    'HTTP_CONNECTION' => 'keep-alive'
    'HTTP_CACHE_CONTROL' => 'max-age=0'
    'HTTP_UPGRADE_INSECURE_REQUESTS' => '1'
    'HTTP_USER_AGENT' => 'Mozilla/5.0 (Windows NT 10.0; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/56.0.2924.87 Safari/537.36'
    'HTTP_ACCEPT' => 'text/html,application/xhtml+xml,application/xml;q=0.9,image/webp,*/*;q=0.8'
    'HTTP_REFERER' => 'http://localhost/my_first_project/backend/web/index.php?r=post%2Findex'
    'HTTP_ACCEPT_ENCODING' => 'gzip, deflate, sdch, br'
    'HTTP_ACCEPT_LANGUAGE' => 'sk-SK,sk;q=0.8,cs;q=0.6,en-US;q=0.4,en;q=0.2'
    'HTTP_COOKIE' => '_csrf-backend=13b8b5d4cb40eb00fbea3171447f7ae24f7b2caf2836e1faa3bdc6ffaa1ffe40a%3A2%3A%7Bi%3A0%3Bs%3A13%3A%22_csrf-backend%22%3Bi%3A1%3Bs%3A32%3A%22rjWu6qW9IpnOkncfQUhl_ItK-izPEQNp%22%3B%7D; _csrf-frontend=9feb1d56f61adb61eca1ab15aa20c7028f8e776a801f21a2e5bd37156517b9cba%3A2%3A%7Bi%3A0%3Bs%3A14%3A%22_csrf-frontend%22%3Bi%3A1%3Bs%3A32%3A%22KfDz84g5Z6ChlbD1aWEZgH9gsgH2tk7x%22%3B%7D; advanced-backend=4n7pt5ad6vb4cqgccmuslnlccj; advanced-frontend=r3bs72n03873lepa0ssokfg9hd; _identity-backend=c0d1afe5c2d610f9a90e14a0fab01645b813d345cb63ec03c8e2cb965d6dd833a%3A2%3A%7Bi%3A0%3Bs%3A17%3A%22_identity-backend%22%3Bi%3A1%3Bs%3A46%3A%22%5B2%2C%221SNgG1qkakmN2Frp80Qr1SX2kgRhIH88%22%2C2592000%5D%22%3B%7D'
    'PATH' => 'C:\\WINDOWS\\system32;C:\\WINDOWS;C:\\WINDOWS\\System32\\Wbem;C:\\WINDOWS\\System32\\WindowsPowerShell\\v1.0\\;C:\\Users\\Win10\\AppData\\Local\\Microsoft\\WindowsApps'
    'SystemRoot' => 'C:\\WINDOWS'
    'COMSPEC' => 'C:\\WINDOWS\\system32\\cmd.exe'
    'PATHEXT' => '.COM;.EXE;.BAT;.CMD;.VBS;.VBE;.JS;.JSE;.WSF;.WSH;.MSC'
    'WINDIR' => 'C:\\WINDOWS'
    'SERVER_SIGNATURE' => '<address>Apache/2.4.25 (Win32) OpenSSL/1.0.2j PHP/7.1.1 Server at localhost Port 80</address>
'
    'SERVER_SOFTWARE' => 'Apache/2.4.25 (Win32) OpenSSL/1.0.2j PHP/7.1.1'
    'SERVER_NAME' => 'localhost'
    'SERVER_ADDR' => '::1'
    'SERVER_PORT' => '80'
    'REMOTE_ADDR' => '::1'
    'DOCUMENT_ROOT' => 'C:/xampp/htdocs'
    'REQUEST_SCHEME' => 'http'
    'CONTEXT_PREFIX' => ''
    'CONTEXT_DOCUMENT_ROOT' => 'C:/xampp/htdocs'
    'SERVER_ADMIN' => 'postmaster@localhost'
    'SCRIPT_FILENAME' => 'C:/xampp/htdocs/my_first_project/backend/web/index.php'
    'REMOTE_PORT' => '56368'
    'GATEWAY_INTERFACE' => 'CGI/1.1'
    'SERVER_PROTOCOL' => 'HTTP/1.1'
    'REQUEST_METHOD' => 'GET'
    'QUERY_STRING' => 'r=post%2Findex'
    'REQUEST_URI' => '/my_first_project/backend/web/index.php?r=post%2Findex'
    'SCRIPT_NAME' => '/my_first_project/backend/web/index.php'
    'PHP_SELF' => '/my_first_project/backend/web/index.php'
    'REQUEST_TIME_FLOAT' => 1491489071.438
    'REQUEST_TIME' => 1491489071
]
2017-04-06 16:31:11 [::1][-][-][error][yii\base\ErrorException:1] yii\base\ErrorException: Class 'backend\models\Post' not found in C:\xampp\htdocs\my_first_project\common\models\PostSearch.php:13
Stack trace:
#0 [internal function]: yii\base\ErrorHandler->handleFatalError()
#1 {main}
2017-04-06 16:31:11 [::1][-][-][info][application] $_GET = [
    'r' => 'post/index'
]

$_COOKIE = [
    '_csrf-backend' => '13b8b5d4cb40eb00fbea3171447f7ae24f7b2caf2836e1faa3bdc6ffaa1ffe40a:2:{i:0;s:13:\"_csrf-backend\";i:1;s:32:\"rjWu6qW9IpnOkncfQUhl_ItK-izPEQNp\";}'
    '_csrf-frontend' => '9feb1d56f61adb61eca1ab15aa20c7028f8e776a801f21a2e5bd37156517b9cba:2:{i:0;s:14:\"_csrf-frontend\";i:1;s:32:\"KfDz84g5Z6ChlbD1aWEZgH9gsgH2tk7x\";}'
    'advanced-backend' => '4n7pt5ad6vb4cqgccmuslnlccj'
    'advanced-frontend' => 'r3bs72n03873lepa0ssokfg9hd'
    '_identity-backend' => 'c0d1afe5c2d610f9a90e14a0fab01645b813d345cb63ec03c8e2cb965d6dd833a:2:{i:0;s:17:\"_identity-backend\";i:1;s:46:\"[2,\"1SNgG1qkakmN2Frp80Qr1SX2kgRhIH88\",2592000]\";}'
]

$_SERVER = [
    'MIBDIRS' => 'C:/xampp/php/extras/mibs'
    'MYSQL_HOME' => '\\xampp\\mysql\\bin'
    'OPENSSL_CONF' => 'C:/xampp/apache/bin/openssl.cnf'
    'PHP_PEAR_SYSCONF_DIR' => '\\xampp\\php'
    'PHPRC' => '\\xampp\\php'
    'TMP' => '\\xampp\\tmp'
    'HTTP_HOST' => 'localhost'
    'HTTP_CONNECTION' => 'keep-alive'
    'HTTP_CACHE_CONTROL' => 'max-age=0'
    'HTTP_UPGRADE_INSECURE_REQUESTS' => '1'
    'HTTP_USER_AGENT' => 'Mozilla/5.0 (Windows NT 10.0; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/56.0.2924.87 Safari/537.36'
    'HTTP_ACCEPT' => 'text/html,application/xhtml+xml,application/xml;q=0.9,image/webp,*/*;q=0.8'
    'HTTP_REFERER' => 'http://localhost/my_first_project/backend/web/index.php?r=post%2Findex'
    'HTTP_ACCEPT_ENCODING' => 'gzip, deflate, sdch, br'
    'HTTP_ACCEPT_LANGUAGE' => 'sk-SK,sk;q=0.8,cs;q=0.6,en-US;q=0.4,en;q=0.2'
    'HTTP_COOKIE' => '_csrf-backend=13b8b5d4cb40eb00fbea3171447f7ae24f7b2caf2836e1faa3bdc6ffaa1ffe40a%3A2%3A%7Bi%3A0%3Bs%3A13%3A%22_csrf-backend%22%3Bi%3A1%3Bs%3A32%3A%22rjWu6qW9IpnOkncfQUhl_ItK-izPEQNp%22%3B%7D; _csrf-frontend=9feb1d56f61adb61eca1ab15aa20c7028f8e776a801f21a2e5bd37156517b9cba%3A2%3A%7Bi%3A0%3Bs%3A14%3A%22_csrf-frontend%22%3Bi%3A1%3Bs%3A32%3A%22KfDz84g5Z6ChlbD1aWEZgH9gsgH2tk7x%22%3B%7D; advanced-backend=4n7pt5ad6vb4cqgccmuslnlccj; advanced-frontend=r3bs72n03873lepa0ssokfg9hd; _identity-backend=c0d1afe5c2d610f9a90e14a0fab01645b813d345cb63ec03c8e2cb965d6dd833a%3A2%3A%7Bi%3A0%3Bs%3A17%3A%22_identity-backend%22%3Bi%3A1%3Bs%3A46%3A%22%5B2%2C%221SNgG1qkakmN2Frp80Qr1SX2kgRhIH88%22%2C2592000%5D%22%3B%7D'
    'PATH' => 'C:\\WINDOWS\\system32;C:\\WINDOWS;C:\\WINDOWS\\System32\\Wbem;C:\\WINDOWS\\System32\\WindowsPowerShell\\v1.0\\;C:\\Users\\Win10\\AppData\\Local\\Microsoft\\WindowsApps'
    'SystemRoot' => 'C:\\WINDOWS'
    'COMSPEC' => 'C:\\WINDOWS\\system32\\cmd.exe'
    'PATHEXT' => '.COM;.EXE;.BAT;.CMD;.VBS;.VBE;.JS;.JSE;.WSF;.WSH;.MSC'
    'WINDIR' => 'C:\\WINDOWS'
    'SERVER_SIGNATURE' => '<address>Apache/2.4.25 (Win32) OpenSSL/1.0.2j PHP/7.1.1 Server at localhost Port 80</address>
'
    'SERVER_SOFTWARE' => 'Apache/2.4.25 (Win32) OpenSSL/1.0.2j PHP/7.1.1'
    'SERVER_NAME' => 'localhost'
    'SERVER_ADDR' => '::1'
    'SERVER_PORT' => '80'
    'REMOTE_ADDR' => '::1'
    'DOCUMENT_ROOT' => 'C:/xampp/htdocs'
    'REQUEST_SCHEME' => 'http'
    'CONTEXT_PREFIX' => ''
    'CONTEXT_DOCUMENT_ROOT' => 'C:/xampp/htdocs'
    'SERVER_ADMIN' => 'postmaster@localhost'
    'SCRIPT_FILENAME' => 'C:/xampp/htdocs/my_first_project/backend/web/index.php'
    'REMOTE_PORT' => '56369'
    'GATEWAY_INTERFACE' => 'CGI/1.1'
    'SERVER_PROTOCOL' => 'HTTP/1.1'
    'REQUEST_METHOD' => 'GET'
    'QUERY_STRING' => 'r=post%2Findex'
    'REQUEST_URI' => '/my_first_project/backend/web/index.php?r=post%2Findex'
    'SCRIPT_NAME' => '/my_first_project/backend/web/index.php'
    'PHP_SELF' => '/my_first_project/backend/web/index.php'
    'REQUEST_TIME_FLOAT' => 1491489071.766
    'REQUEST_TIME' => 1491489071
]
2017-04-06 16:31:11 [::1][-][-][error][yii\base\ErrorException:1] yii\base\ErrorException: Class 'backend\models\Post' not found in C:\xampp\htdocs\my_first_project\common\models\PostSearch.php:13
Stack trace:
#0 [internal function]: yii\base\ErrorHandler->handleFatalError()
#1 {main}
2017-04-06 16:31:11 [::1][-][-][info][application] $_GET = [
    'r' => 'post/index'
]

$_COOKIE = [
    '_csrf-backend' => '13b8b5d4cb40eb00fbea3171447f7ae24f7b2caf2836e1faa3bdc6ffaa1ffe40a:2:{i:0;s:13:\"_csrf-backend\";i:1;s:32:\"rjWu6qW9IpnOkncfQUhl_ItK-izPEQNp\";}'
    '_csrf-frontend' => '9feb1d56f61adb61eca1ab15aa20c7028f8e776a801f21a2e5bd37156517b9cba:2:{i:0;s:14:\"_csrf-frontend\";i:1;s:32:\"KfDz84g5Z6ChlbD1aWEZgH9gsgH2tk7x\";}'
    'advanced-backend' => '4n7pt5ad6vb4cqgccmuslnlccj'
    'advanced-frontend' => 'r3bs72n03873lepa0ssokfg9hd'
    '_identity-backend' => 'c0d1afe5c2d610f9a90e14a0fab01645b813d345cb63ec03c8e2cb965d6dd833a:2:{i:0;s:17:\"_identity-backend\";i:1;s:46:\"[2,\"1SNgG1qkakmN2Frp80Qr1SX2kgRhIH88\",2592000]\";}'
]

$_SERVER = [
    'MIBDIRS' => 'C:/xampp/php/extras/mibs'
    'MYSQL_HOME' => '\\xampp\\mysql\\bin'
    'OPENSSL_CONF' => 'C:/xampp/apache/bin/openssl.cnf'
    'PHP_PEAR_SYSCONF_DIR' => '\\xampp\\php'
    'PHPRC' => '\\xampp\\php'
    'TMP' => '\\xampp\\tmp'
    'HTTP_HOST' => 'localhost'
    'HTTP_CONNECTION' => 'keep-alive'
    'HTTP_CACHE_CONTROL' => 'max-age=0'
    'HTTP_UPGRADE_INSECURE_REQUESTS' => '1'
    'HTTP_USER_AGENT' => 'Mozilla/5.0 (Windows NT 10.0; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/56.0.2924.87 Safari/537.36'
    'HTTP_ACCEPT' => 'text/html,application/xhtml+xml,application/xml;q=0.9,image/webp,*/*;q=0.8'
    'HTTP_REFERER' => 'http://localhost/my_first_project/backend/web/index.php?r=post%2Findex'
    'HTTP_ACCEPT_ENCODING' => 'gzip, deflate, sdch, br'
    'HTTP_ACCEPT_LANGUAGE' => 'sk-SK,sk;q=0.8,cs;q=0.6,en-US;q=0.4,en;q=0.2'
    'HTTP_COOKIE' => '_csrf-backend=13b8b5d4cb40eb00fbea3171447f7ae24f7b2caf2836e1faa3bdc6ffaa1ffe40a%3A2%3A%7Bi%3A0%3Bs%3A13%3A%22_csrf-backend%22%3Bi%3A1%3Bs%3A32%3A%22rjWu6qW9IpnOkncfQUhl_ItK-izPEQNp%22%3B%7D; _csrf-frontend=9feb1d56f61adb61eca1ab15aa20c7028f8e776a801f21a2e5bd37156517b9cba%3A2%3A%7Bi%3A0%3Bs%3A14%3A%22_csrf-frontend%22%3Bi%3A1%3Bs%3A32%3A%22KfDz84g5Z6ChlbD1aWEZgH9gsgH2tk7x%22%3B%7D; advanced-backend=4n7pt5ad6vb4cqgccmuslnlccj; advanced-frontend=r3bs72n03873lepa0ssokfg9hd; _identity-backend=c0d1afe5c2d610f9a90e14a0fab01645b813d345cb63ec03c8e2cb965d6dd833a%3A2%3A%7Bi%3A0%3Bs%3A17%3A%22_identity-backend%22%3Bi%3A1%3Bs%3A46%3A%22%5B2%2C%221SNgG1qkakmN2Frp80Qr1SX2kgRhIH88%22%2C2592000%5D%22%3B%7D'
    'PATH' => 'C:\\WINDOWS\\system32;C:\\WINDOWS;C:\\WINDOWS\\System32\\Wbem;C:\\WINDOWS\\System32\\WindowsPowerShell\\v1.0\\;C:\\Users\\Win10\\AppData\\Local\\Microsoft\\WindowsApps'
    'SystemRoot' => 'C:\\WINDOWS'
    'COMSPEC' => 'C:\\WINDOWS\\system32\\cmd.exe'
    'PATHEXT' => '.COM;.EXE;.BAT;.CMD;.VBS;.VBE;.JS;.JSE;.WSF;.WSH;.MSC'
    'WINDIR' => 'C:\\WINDOWS'
    'SERVER_SIGNATURE' => '<address>Apache/2.4.25 (Win32) OpenSSL/1.0.2j PHP/7.1.1 Server at localhost Port 80</address>
'
    'SERVER_SOFTWARE' => 'Apache/2.4.25 (Win32) OpenSSL/1.0.2j PHP/7.1.1'
    'SERVER_NAME' => 'localhost'
    'SERVER_ADDR' => '::1'
    'SERVER_PORT' => '80'
    'REMOTE_ADDR' => '::1'
    'DOCUMENT_ROOT' => 'C:/xampp/htdocs'
    'REQUEST_SCHEME' => 'http'
    'CONTEXT_PREFIX' => ''
    'CONTEXT_DOCUMENT_ROOT' => 'C:/xampp/htdocs'
    'SERVER_ADMIN' => 'postmaster@localhost'
    'SCRIPT_FILENAME' => 'C:/xampp/htdocs/my_first_project/backend/web/index.php'
    'REMOTE_PORT' => '56370'
    'GATEWAY_INTERFACE' => 'CGI/1.1'
    'SERVER_PROTOCOL' => 'HTTP/1.1'
    'REQUEST_METHOD' => 'GET'
    'QUERY_STRING' => 'r=post%2Findex'
    'REQUEST_URI' => '/my_first_project/backend/web/index.php?r=post%2Findex'
    'SCRIPT_NAME' => '/my_first_project/backend/web/index.php'
    'PHP_SELF' => '/my_first_project/backend/web/index.php'
    'REQUEST_TIME_FLOAT' => 1491489071.958
    'REQUEST_TIME' => 1491489071
]
2017-04-06 16:31:12 [::1][-][-][error][yii\base\ErrorException:1] yii\base\ErrorException: Class 'backend\models\Post' not found in C:\xampp\htdocs\my_first_project\common\models\PostSearch.php:13
Stack trace:
#0 [internal function]: yii\base\ErrorHandler->handleFatalError()
#1 {main}
2017-04-06 16:31:12 [::1][-][-][info][application] $_GET = [
    'r' => 'post/index'
]

$_COOKIE = [
    '_csrf-backend' => '13b8b5d4cb40eb00fbea3171447f7ae24f7b2caf2836e1faa3bdc6ffaa1ffe40a:2:{i:0;s:13:\"_csrf-backend\";i:1;s:32:\"rjWu6qW9IpnOkncfQUhl_ItK-izPEQNp\";}'
    '_csrf-frontend' => '9feb1d56f61adb61eca1ab15aa20c7028f8e776a801f21a2e5bd37156517b9cba:2:{i:0;s:14:\"_csrf-frontend\";i:1;s:32:\"KfDz84g5Z6ChlbD1aWEZgH9gsgH2tk7x\";}'
    'advanced-backend' => '4n7pt5ad6vb4cqgccmuslnlccj'
    'advanced-frontend' => 'r3bs72n03873lepa0ssokfg9hd'
    '_identity-backend' => 'c0d1afe5c2d610f9a90e14a0fab01645b813d345cb63ec03c8e2cb965d6dd833a:2:{i:0;s:17:\"_identity-backend\";i:1;s:46:\"[2,\"1SNgG1qkakmN2Frp80Qr1SX2kgRhIH88\",2592000]\";}'
]

$_SERVER = [
    'MIBDIRS' => 'C:/xampp/php/extras/mibs'
    'MYSQL_HOME' => '\\xampp\\mysql\\bin'
    'OPENSSL_CONF' => 'C:/xampp/apache/bin/openssl.cnf'
    'PHP_PEAR_SYSCONF_DIR' => '\\xampp\\php'
    'PHPRC' => '\\xampp\\php'
    'TMP' => '\\xampp\\tmp'
    'HTTP_HOST' => 'localhost'
    'HTTP_CONNECTION' => 'keep-alive'
    'HTTP_CACHE_CONTROL' => 'max-age=0'
    'HTTP_UPGRADE_INSECURE_REQUESTS' => '1'
    'HTTP_USER_AGENT' => 'Mozilla/5.0 (Windows NT 10.0; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/56.0.2924.87 Safari/537.36'
    'HTTP_ACCEPT' => 'text/html,application/xhtml+xml,application/xml;q=0.9,image/webp,*/*;q=0.8'
    'HTTP_REFERER' => 'http://localhost/my_first_project/backend/web/index.php?r=post%2Findex'
    'HTTP_ACCEPT_ENCODING' => 'gzip, deflate, sdch, br'
    'HTTP_ACCEPT_LANGUAGE' => 'sk-SK,sk;q=0.8,cs;q=0.6,en-US;q=0.4,en;q=0.2'
    'HTTP_COOKIE' => '_csrf-backend=13b8b5d4cb40eb00fbea3171447f7ae24f7b2caf2836e1faa3bdc6ffaa1ffe40a%3A2%3A%7Bi%3A0%3Bs%3A13%3A%22_csrf-backend%22%3Bi%3A1%3Bs%3A32%3A%22rjWu6qW9IpnOkncfQUhl_ItK-izPEQNp%22%3B%7D; _csrf-frontend=9feb1d56f61adb61eca1ab15aa20c7028f8e776a801f21a2e5bd37156517b9cba%3A2%3A%7Bi%3A0%3Bs%3A14%3A%22_csrf-frontend%22%3Bi%3A1%3Bs%3A32%3A%22KfDz84g5Z6ChlbD1aWEZgH9gsgH2tk7x%22%3B%7D; advanced-backend=4n7pt5ad6vb4cqgccmuslnlccj; advanced-frontend=r3bs72n03873lepa0ssokfg9hd; _identity-backend=c0d1afe5c2d610f9a90e14a0fab01645b813d345cb63ec03c8e2cb965d6dd833a%3A2%3A%7Bi%3A0%3Bs%3A17%3A%22_identity-backend%22%3Bi%3A1%3Bs%3A46%3A%22%5B2%2C%221SNgG1qkakmN2Frp80Qr1SX2kgRhIH88%22%2C2592000%5D%22%3B%7D'
    'PATH' => 'C:\\WINDOWS\\system32;C:\\WINDOWS;C:\\WINDOWS\\System32\\Wbem;C:\\WINDOWS\\System32\\WindowsPowerShell\\v1.0\\;C:\\Users\\Win10\\AppData\\Local\\Microsoft\\WindowsApps'
    'SystemRoot' => 'C:\\WINDOWS'
    'COMSPEC' => 'C:\\WINDOWS\\system32\\cmd.exe'
    'PATHEXT' => '.COM;.EXE;.BAT;.CMD;.VBS;.VBE;.JS;.JSE;.WSF;.WSH;.MSC'
    'WINDIR' => 'C:\\WINDOWS'
    'SERVER_SIGNATURE' => '<address>Apache/2.4.25 (Win32) OpenSSL/1.0.2j PHP/7.1.1 Server at localhost Port 80</address>
'
    'SERVER_SOFTWARE' => 'Apache/2.4.25 (Win32) OpenSSL/1.0.2j PHP/7.1.1'
    'SERVER_NAME' => 'localhost'
    'SERVER_ADDR' => '::1'
    'SERVER_PORT' => '80'
    'REMOTE_ADDR' => '::1'
    'DOCUMENT_ROOT' => 'C:/xampp/htdocs'
    'REQUEST_SCHEME' => 'http'
    'CONTEXT_PREFIX' => ''
    'CONTEXT_DOCUMENT_ROOT' => 'C:/xampp/htdocs'
    'SERVER_ADMIN' => 'postmaster@localhost'
    'SCRIPT_FILENAME' => 'C:/xampp/htdocs/my_first_project/backend/web/index.php'
    'REMOTE_PORT' => '56373'
    'GATEWAY_INTERFACE' => 'CGI/1.1'
    'SERVER_PROTOCOL' => 'HTTP/1.1'
    'REQUEST_METHOD' => 'GET'
    'QUERY_STRING' => 'r=post%2Findex'
    'REQUEST_URI' => '/my_first_project/backend/web/index.php?r=post%2Findex'
    'SCRIPT_NAME' => '/my_first_project/backend/web/index.php'
    'PHP_SELF' => '/my_first_project/backend/web/index.php'
    'REQUEST_TIME_FLOAT' => 1491489072.14
    'REQUEST_TIME' => 1491489072
]
2017-04-06 16:31:20 [::1][-][-][error][yii\base\ErrorException:1] yii\base\ErrorException: Class 'backend\models\Post' not found in C:\xampp\htdocs\my_first_project\common\models\PostSearch.php:13
Stack trace:
#0 [internal function]: yii\base\ErrorHandler->handleFatalError()
#1 {main}
2017-04-06 16:31:20 [::1][-][-][info][application] $_GET = [
    'r' => 'post/index'
]

$_COOKIE = [
    '_csrf-backend' => '13b8b5d4cb40eb00fbea3171447f7ae24f7b2caf2836e1faa3bdc6ffaa1ffe40a:2:{i:0;s:13:\"_csrf-backend\";i:1;s:32:\"rjWu6qW9IpnOkncfQUhl_ItK-izPEQNp\";}'
    '_csrf-frontend' => '9feb1d56f61adb61eca1ab15aa20c7028f8e776a801f21a2e5bd37156517b9cba:2:{i:0;s:14:\"_csrf-frontend\";i:1;s:32:\"KfDz84g5Z6ChlbD1aWEZgH9gsgH2tk7x\";}'
    'advanced-backend' => '4n7pt5ad6vb4cqgccmuslnlccj'
    'advanced-frontend' => 'r3bs72n03873lepa0ssokfg9hd'
    '_identity-backend' => 'c0d1afe5c2d610f9a90e14a0fab01645b813d345cb63ec03c8e2cb965d6dd833a:2:{i:0;s:17:\"_identity-backend\";i:1;s:46:\"[2,\"1SNgG1qkakmN2Frp80Qr1SX2kgRhIH88\",2592000]\";}'
]

$_SERVER = [
    'MIBDIRS' => 'C:/xampp/php/extras/mibs'
    'MYSQL_HOME' => '\\xampp\\mysql\\bin'
    'OPENSSL_CONF' => 'C:/xampp/apache/bin/openssl.cnf'
    'PHP_PEAR_SYSCONF_DIR' => '\\xampp\\php'
    'PHPRC' => '\\xampp\\php'
    'TMP' => '\\xampp\\tmp'
    'HTTP_HOST' => 'localhost'
    'HTTP_CONNECTION' => 'keep-alive'
    'HTTP_UPGRADE_INSECURE_REQUESTS' => '1'
    'HTTP_USER_AGENT' => 'Mozilla/5.0 (Windows NT 10.0; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/56.0.2924.87 Safari/537.36'
    'HTTP_ACCEPT' => 'text/html,application/xhtml+xml,application/xml;q=0.9,image/webp,*/*;q=0.8'
    'HTTP_REFERER' => 'http://localhost/my_first_project/backend/web/index.php?r=site%2Findex'
    'HTTP_ACCEPT_ENCODING' => 'gzip, deflate, sdch, br'
    'HTTP_ACCEPT_LANGUAGE' => 'sk-SK,sk;q=0.8,cs;q=0.6,en-US;q=0.4,en;q=0.2'
    'HTTP_COOKIE' => '_csrf-backend=13b8b5d4cb40eb00fbea3171447f7ae24f7b2caf2836e1faa3bdc6ffaa1ffe40a%3A2%3A%7Bi%3A0%3Bs%3A13%3A%22_csrf-backend%22%3Bi%3A1%3Bs%3A32%3A%22rjWu6qW9IpnOkncfQUhl_ItK-izPEQNp%22%3B%7D; _csrf-frontend=9feb1d56f61adb61eca1ab15aa20c7028f8e776a801f21a2e5bd37156517b9cba%3A2%3A%7Bi%3A0%3Bs%3A14%3A%22_csrf-frontend%22%3Bi%3A1%3Bs%3A32%3A%22KfDz84g5Z6ChlbD1aWEZgH9gsgH2tk7x%22%3B%7D; advanced-backend=4n7pt5ad6vb4cqgccmuslnlccj; advanced-frontend=r3bs72n03873lepa0ssokfg9hd; _identity-backend=c0d1afe5c2d610f9a90e14a0fab01645b813d345cb63ec03c8e2cb965d6dd833a%3A2%3A%7Bi%3A0%3Bs%3A17%3A%22_identity-backend%22%3Bi%3A1%3Bs%3A46%3A%22%5B2%2C%221SNgG1qkakmN2Frp80Qr1SX2kgRhIH88%22%2C2592000%5D%22%3B%7D'
    'PATH' => 'C:\\WINDOWS\\system32;C:\\WINDOWS;C:\\WINDOWS\\System32\\Wbem;C:\\WINDOWS\\System32\\WindowsPowerShell\\v1.0\\;C:\\Users\\Win10\\AppData\\Local\\Microsoft\\WindowsApps'
    'SystemRoot' => 'C:\\WINDOWS'
    'COMSPEC' => 'C:\\WINDOWS\\system32\\cmd.exe'
    'PATHEXT' => '.COM;.EXE;.BAT;.CMD;.VBS;.VBE;.JS;.JSE;.WSF;.WSH;.MSC'
    'WINDIR' => 'C:\\WINDOWS'
    'SERVER_SIGNATURE' => '<address>Apache/2.4.25 (Win32) OpenSSL/1.0.2j PHP/7.1.1 Server at localhost Port 80</address>
'
    'SERVER_SOFTWARE' => 'Apache/2.4.25 (Win32) OpenSSL/1.0.2j PHP/7.1.1'
    'SERVER_NAME' => 'localhost'
    'SERVER_ADDR' => '::1'
    'SERVER_PORT' => '80'
    'REMOTE_ADDR' => '::1'
    'DOCUMENT_ROOT' => 'C:/xampp/htdocs'
    'REQUEST_SCHEME' => 'http'
    'CONTEXT_PREFIX' => ''
    'CONTEXT_DOCUMENT_ROOT' => 'C:/xampp/htdocs'
    'SERVER_ADMIN' => 'postmaster@localhost'
    'SCRIPT_FILENAME' => 'C:/xampp/htdocs/my_first_project/backend/web/index.php'
    'REMOTE_PORT' => '56378'
    'GATEWAY_INTERFACE' => 'CGI/1.1'
    'SERVER_PROTOCOL' => 'HTTP/1.1'
    'REQUEST_METHOD' => 'GET'
    'QUERY_STRING' => 'r=post%2Findex'
    'REQUEST_URI' => '/my_first_project/backend/web/index.php?r=post%2Findex'
    'SCRIPT_NAME' => '/my_first_project/backend/web/index.php'
    'PHP_SELF' => '/my_first_project/backend/web/index.php'
    'REQUEST_TIME_FLOAT' => 1491489080.086
    'REQUEST_TIME' => 1491489080
]
2017-04-06 16:32:31 [::1][-][-][error][yii\base\ErrorException:1] yii\base\ErrorException: Class 'backend\models\Post' not found in C:\xampp\htdocs\my_first_project\common\models\PostSearch.php:13
Stack trace:
#0 [internal function]: yii\base\ErrorHandler->handleFatalError()
#1 {main}
2017-04-06 16:32:31 [::1][-][-][info][application] $_GET = [
    'r' => 'post/index'
]

$_COOKIE = [
    '_csrf-backend' => '13b8b5d4cb40eb00fbea3171447f7ae24f7b2caf2836e1faa3bdc6ffaa1ffe40a:2:{i:0;s:13:\"_csrf-backend\";i:1;s:32:\"rjWu6qW9IpnOkncfQUhl_ItK-izPEQNp\";}'
    '_csrf-frontend' => '9feb1d56f61adb61eca1ab15aa20c7028f8e776a801f21a2e5bd37156517b9cba:2:{i:0;s:14:\"_csrf-frontend\";i:1;s:32:\"KfDz84g5Z6ChlbD1aWEZgH9gsgH2tk7x\";}'
    'advanced-backend' => '4n7pt5ad6vb4cqgccmuslnlccj'
    'advanced-frontend' => 'r3bs72n03873lepa0ssokfg9hd'
    '_identity-backend' => 'c0d1afe5c2d610f9a90e14a0fab01645b813d345cb63ec03c8e2cb965d6dd833a:2:{i:0;s:17:\"_identity-backend\";i:1;s:46:\"[2,\"1SNgG1qkakmN2Frp80Qr1SX2kgRhIH88\",2592000]\";}'
]

$_SERVER = [
    'MIBDIRS' => 'C:/xampp/php/extras/mibs'
    'MYSQL_HOME' => '\\xampp\\mysql\\bin'
    'OPENSSL_CONF' => 'C:/xampp/apache/bin/openssl.cnf'
    'PHP_PEAR_SYSCONF_DIR' => '\\xampp\\php'
    'PHPRC' => '\\xampp\\php'
    'TMP' => '\\xampp\\tmp'
    'HTTP_HOST' => 'localhost'
    'HTTP_CONNECTION' => 'keep-alive'
    'HTTP_UPGRADE_INSECURE_REQUESTS' => '1'
    'HTTP_USER_AGENT' => 'Mozilla/5.0 (Windows NT 10.0; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/56.0.2924.87 Safari/537.36'
    'HTTP_ACCEPT' => 'text/html,application/xhtml+xml,application/xml;q=0.9,image/webp,*/*;q=0.8'
    'HTTP_REFERER' => 'http://localhost/my_first_project/backend/web/index.php?r=site%2Findex'
    'HTTP_ACCEPT_ENCODING' => 'gzip, deflate, sdch, br'
    'HTTP_ACCEPT_LANGUAGE' => 'sk-SK,sk;q=0.8,cs;q=0.6,en-US;q=0.4,en;q=0.2'
    'HTTP_COOKIE' => '_csrf-backend=13b8b5d4cb40eb00fbea3171447f7ae24f7b2caf2836e1faa3bdc6ffaa1ffe40a%3A2%3A%7Bi%3A0%3Bs%3A13%3A%22_csrf-backend%22%3Bi%3A1%3Bs%3A32%3A%22rjWu6qW9IpnOkncfQUhl_ItK-izPEQNp%22%3B%7D; _csrf-frontend=9feb1d56f61adb61eca1ab15aa20c7028f8e776a801f21a2e5bd37156517b9cba%3A2%3A%7Bi%3A0%3Bs%3A14%3A%22_csrf-frontend%22%3Bi%3A1%3Bs%3A32%3A%22KfDz84g5Z6ChlbD1aWEZgH9gsgH2tk7x%22%3B%7D; advanced-backend=4n7pt5ad6vb4cqgccmuslnlccj; advanced-frontend=r3bs72n03873lepa0ssokfg9hd; _identity-backend=c0d1afe5c2d610f9a90e14a0fab01645b813d345cb63ec03c8e2cb965d6dd833a%3A2%3A%7Bi%3A0%3Bs%3A17%3A%22_identity-backend%22%3Bi%3A1%3Bs%3A46%3A%22%5B2%2C%221SNgG1qkakmN2Frp80Qr1SX2kgRhIH88%22%2C2592000%5D%22%3B%7D'
    'PATH' => 'C:\\WINDOWS\\system32;C:\\WINDOWS;C:\\WINDOWS\\System32\\Wbem;C:\\WINDOWS\\System32\\WindowsPowerShell\\v1.0\\;C:\\Users\\Win10\\AppData\\Local\\Microsoft\\WindowsApps'
    'SystemRoot' => 'C:\\WINDOWS'
    'COMSPEC' => 'C:\\WINDOWS\\system32\\cmd.exe'
    'PATHEXT' => '.COM;.EXE;.BAT;.CMD;.VBS;.VBE;.JS;.JSE;.WSF;.WSH;.MSC'
    'WINDIR' => 'C:\\WINDOWS'
    'SERVER_SIGNATURE' => '<address>Apache/2.4.25 (Win32) OpenSSL/1.0.2j PHP/7.1.1 Server at localhost Port 80</address>
'
    'SERVER_SOFTWARE' => 'Apache/2.4.25 (Win32) OpenSSL/1.0.2j PHP/7.1.1'
    'SERVER_NAME' => 'localhost'
    'SERVER_ADDR' => '::1'
    'SERVER_PORT' => '80'
    'REMOTE_ADDR' => '::1'
    'DOCUMENT_ROOT' => 'C:/xampp/htdocs'
    'REQUEST_SCHEME' => 'http'
    'CONTEXT_PREFIX' => ''
    'CONTEXT_DOCUMENT_ROOT' => 'C:/xampp/htdocs'
    'SERVER_ADMIN' => 'postmaster@localhost'
    'SCRIPT_FILENAME' => 'C:/xampp/htdocs/my_first_project/backend/web/index.php'
    'REMOTE_PORT' => '56388'
    'GATEWAY_INTERFACE' => 'CGI/1.1'
    'SERVER_PROTOCOL' => 'HTTP/1.1'
    'REQUEST_METHOD' => 'GET'
    'QUERY_STRING' => 'r=post%2Findex'
    'REQUEST_URI' => '/my_first_project/backend/web/index.php?r=post%2Findex'
    'SCRIPT_NAME' => '/my_first_project/backend/web/index.php'
    'PHP_SELF' => '/my_first_project/backend/web/index.php'
    'REQUEST_TIME_FLOAT' => 1491489151.094
    'REQUEST_TIME' => 1491489151
]
2017-04-10 08:45:30 [::1][-][-][error][Error] Error: Class 'frontend\models\Comment' not found in C:\xampp\htdocs\my_first_project\common\models\Post.php:65
Stack trace:
#0 C:\xampp\htdocs\my_first_project\vendor\yiisoft\yii2\base\Component.php(132): common\models\Post->getComments()
#1 C:\xampp\htdocs\my_first_project\vendor\yiisoft\yii2\db\BaseActiveRecord.php(286): yii\base\Component->__get('comments')
#2 C:\xampp\htdocs\my_first_project\backend\views\post\view.php(52): yii\db\BaseActiveRecord->__get('comments')
#3 C:\xampp\htdocs\my_first_project\vendor\yiisoft\yii2\base\View.php(328): require('C:\\xampp\\htdocs...')
#4 C:\xampp\htdocs\my_first_project\vendor\yiisoft\yii2\base\View.php(250): yii\base\View->renderPhpFile('C:\\xampp\\htdocs...', Array)
#5 C:\xampp\htdocs\my_first_project\vendor\yiisoft\yii2\base\View.php(152): yii\base\View->renderFile('C:\\xampp\\htdocs...', Array, Object(backend\controllers\PostController))
#6 C:\xampp\htdocs\my_first_project\vendor\yiisoft\yii2\base\Controller.php(381): yii\base\View->render('view', Array, Object(backend\controllers\PostController))
#7 C:\xampp\htdocs\my_first_project\backend\controllers\PostController.php(55): yii\base\Controller->render('view', Array)
#8 [internal function]: backend\controllers\PostController->actionView('1')
#9 C:\xampp\htdocs\my_first_project\vendor\yiisoft\yii2\base\InlineAction.php(57): call_user_func_array(Array, Array)
#10 C:\xampp\htdocs\my_first_project\vendor\yiisoft\yii2\base\Controller.php(156): yii\base\InlineAction->runWithParams(Array)
#11 C:\xampp\htdocs\my_first_project\vendor\yiisoft\yii2\base\Module.php(523): yii\base\Controller->runAction('view', Array)
#12 C:\xampp\htdocs\my_first_project\vendor\yiisoft\yii2\web\Application.php(102): yii\base\Module->runAction('post/view', Array)
#13 C:\xampp\htdocs\my_first_project\vendor\yiisoft\yii2\base\Application.php(380): yii\web\Application->handleRequest(Object(yii\web\Request))
#14 C:\xampp\htdocs\my_first_project\backend\web\index.php(17): yii\base\Application->run()
#15 {main}
2017-04-10 08:45:30 [::1][-][-][info][application] $_GET = [
    'r' => 'post/view'
    'id' => '1'
]

$_COOKIE = [
    '_identity-frontend' => '0cae966fd559089f9ace47d1a2ea5c6406c8e024f36e82c8327d6603adb72aeaa:2:{i:0;s:18:\"_identity-frontend\";i:1;s:46:\"[2,\"1SNgG1qkakmN2Frp80Qr1SX2kgRhIH88\",2592000]\";}'
    'advanced-backend' => 'ocapqr5qgv09ionkbionbf547f'
    '_csrf-backend' => '106541c7716ce6243ffe7fcfaf136b2a6a12ae438d98e6f746d58b64bcb13ed8a:2:{i:0;s:13:\"_csrf-backend\";i:1;s:32:\"oFrjDE6vI0vSHT2i1W4CYRO-RckaEjk2\";}'
    '_identity-backend' => 'c0d1afe5c2d610f9a90e14a0fab01645b813d345cb63ec03c8e2cb965d6dd833a:2:{i:0;s:17:\"_identity-backend\";i:1;s:46:\"[2,\"1SNgG1qkakmN2Frp80Qr1SX2kgRhIH88\",2592000]\";}'
]

$_SERVER = [
    'MIBDIRS' => 'C:/xampp/php/extras/mibs'
    'MYSQL_HOME' => '\\xampp\\mysql\\bin'
    'OPENSSL_CONF' => 'C:/xampp/apache/bin/openssl.cnf'
    'PHP_PEAR_SYSCONF_DIR' => '\\xampp\\php'
    'PHPRC' => '\\xampp\\php'
    'TMP' => '\\xampp\\tmp'
    'HTTP_HOST' => 'localhost'
    'HTTP_CONNECTION' => 'keep-alive'
    'HTTP_CACHE_CONTROL' => 'max-age=0'
    'HTTP_UPGRADE_INSECURE_REQUESTS' => '1'
    'HTTP_USER_AGENT' => 'Mozilla/5.0 (Windows NT 10.0; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/57.0.2987.133 Safari/537.36'
    'HTTP_ACCEPT' => 'text/html,application/xhtml+xml,application/xml;q=0.9,image/webp,*/*;q=0.8'
    'HTTP_REFERER' => 'http://localhost/my_first_project/backend/web/index.php?r=post%2Findex'
    'HTTP_ACCEPT_ENCODING' => 'gzip, deflate, sdch, br'
    'HTTP_ACCEPT_LANGUAGE' => 'sk-SK,sk;q=0.8,cs;q=0.6,en-US;q=0.4,en;q=0.2'
    'HTTP_COOKIE' => '_identity-frontend=0cae966fd559089f9ace47d1a2ea5c6406c8e024f36e82c8327d6603adb72aeaa%3A2%3A%7Bi%3A0%3Bs%3A18%3A%22_identity-frontend%22%3Bi%3A1%3Bs%3A46%3A%22%5B2%2C%221SNgG1qkakmN2Frp80Qr1SX2kgRhIH88%22%2C2592000%5D%22%3B%7D; advanced-backend=ocapqr5qgv09ionkbionbf547f; _csrf-backend=106541c7716ce6243ffe7fcfaf136b2a6a12ae438d98e6f746d58b64bcb13ed8a%3A2%3A%7Bi%3A0%3Bs%3A13%3A%22_csrf-backend%22%3Bi%3A1%3Bs%3A32%3A%22oFrjDE6vI0vSHT2i1W4CYRO-RckaEjk2%22%3B%7D; _identity-backend=c0d1afe5c2d610f9a90e14a0fab01645b813d345cb63ec03c8e2cb965d6dd833a%3A2%3A%7Bi%3A0%3Bs%3A17%3A%22_identity-backend%22%3Bi%3A1%3Bs%3A46%3A%22%5B2%2C%221SNgG1qkakmN2Frp80Qr1SX2kgRhIH88%22%2C2592000%5D%22%3B%7D'
    'PATH' => 'C:\\WINDOWS\\system32;C:\\WINDOWS;C:\\WINDOWS\\System32\\Wbem;C:\\WINDOWS\\System32\\WindowsPowerShell\\v1.0\\;C:\\xampp\\php;C:\\ProgramData\\ComposerSetup\\bin;C:\\Program Files\\Git\\cmd;C:\\Users\\Win10\\AppData\\Local\\Microsoft\\WindowsApps;C:\\Users\\Win10\\AppData\\Roaming\\Composer\\vendor\\bin'
    'SystemRoot' => 'C:\\WINDOWS'
    'COMSPEC' => 'C:\\WINDOWS\\system32\\cmd.exe'
    'PATHEXT' => '.COM;.EXE;.BAT;.CMD;.VBS;.VBE;.JS;.JSE;.WSF;.WSH;.MSC'
    'WINDIR' => 'C:\\WINDOWS'
    'SERVER_SIGNATURE' => '<address>Apache/2.4.25 (Win32) OpenSSL/1.0.2j PHP/7.1.1 Server at localhost Port 80</address>
'
    'SERVER_SOFTWARE' => 'Apache/2.4.25 (Win32) OpenSSL/1.0.2j PHP/7.1.1'
    'SERVER_NAME' => 'localhost'
    'SERVER_ADDR' => '::1'
    'SERVER_PORT' => '80'
    'REMOTE_ADDR' => '::1'
    'DOCUMENT_ROOT' => 'C:/xampp/htdocs'
    'REQUEST_SCHEME' => 'http'
    'CONTEXT_PREFIX' => ''
    'CONTEXT_DOCUMENT_ROOT' => 'C:/xampp/htdocs'
    'SERVER_ADMIN' => 'postmaster@localhost'
    'SCRIPT_FILENAME' => 'C:/xampp/htdocs/my_first_project/backend/web/index.php'
    'REMOTE_PORT' => '50237'
    'GATEWAY_INTERFACE' => 'CGI/1.1'
    'SERVER_PROTOCOL' => 'HTTP/1.1'
    'REQUEST_METHOD' => 'GET'
    'QUERY_STRING' => 'r=post%2Fview&id=1'
    'REQUEST_URI' => '/my_first_project/backend/web/index.php?r=post%2Fview&id=1'
    'SCRIPT_NAME' => '/my_first_project/backend/web/index.php'
    'PHP_SELF' => '/my_first_project/backend/web/index.php'
    'REQUEST_TIME_FLOAT' => 1491806730.129
    'REQUEST_TIME' => 1491806730
]
2017-04-10 08:45:30 [::1][2][-][error][yii\web\Session::open] session_start(): Cannot send session cache limiter - headers already sent (output started at C:\xampp\htdocs\my_first_project\vendor\yiisoft\yii2\web\Response.php:391)
2017-04-10 08:45:30 [::1][2][-][info][application] $_GET = [
    'r' => 'post/view'
    'id' => '1'
]

$_COOKIE = [
    '_identity-frontend' => '0cae966fd559089f9ace47d1a2ea5c6406c8e024f36e82c8327d6603adb72aeaa:2:{i:0;s:18:\"_identity-frontend\";i:1;s:46:\"[2,\"1SNgG1qkakmN2Frp80Qr1SX2kgRhIH88\",2592000]\";}'
    'advanced-backend' => 'ocapqr5qgv09ionkbionbf547f'
    '_csrf-backend' => '106541c7716ce6243ffe7fcfaf136b2a6a12ae438d98e6f746d58b64bcb13ed8a:2:{i:0;s:13:\"_csrf-backend\";i:1;s:32:\"oFrjDE6vI0vSHT2i1W4CYRO-RckaEjk2\";}'
    '_identity-backend' => 'c0d1afe5c2d610f9a90e14a0fab01645b813d345cb63ec03c8e2cb965d6dd833a:2:{i:0;s:17:\"_identity-backend\";i:1;s:46:\"[2,\"1SNgG1qkakmN2Frp80Qr1SX2kgRhIH88\",2592000]\";}'
]

$_SESSION = [
    '__flash' => []
    '__id' => 2
]

$_SERVER = [
    'MIBDIRS' => 'C:/xampp/php/extras/mibs'
    'MYSQL_HOME' => '\\xampp\\mysql\\bin'
    'OPENSSL_CONF' => 'C:/xampp/apache/bin/openssl.cnf'
    'PHP_PEAR_SYSCONF_DIR' => '\\xampp\\php'
    'PHPRC' => '\\xampp\\php'
    'TMP' => '\\xampp\\tmp'
    'HTTP_HOST' => 'localhost'
    'HTTP_CONNECTION' => 'keep-alive'
    'HTTP_CACHE_CONTROL' => 'max-age=0'
    'HTTP_UPGRADE_INSECURE_REQUESTS' => '1'
    'HTTP_USER_AGENT' => 'Mozilla/5.0 (Windows NT 10.0; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/57.0.2987.133 Safari/537.36'
    'HTTP_ACCEPT' => 'text/html,application/xhtml+xml,application/xml;q=0.9,image/webp,*/*;q=0.8'
    'HTTP_REFERER' => 'http://localhost/my_first_project/backend/web/index.php?r=post%2Findex'
    'HTTP_ACCEPT_ENCODING' => 'gzip, deflate, sdch, br'
    'HTTP_ACCEPT_LANGUAGE' => 'sk-SK,sk;q=0.8,cs;q=0.6,en-US;q=0.4,en;q=0.2'
    'HTTP_COOKIE' => '_identity-frontend=0cae966fd559089f9ace47d1a2ea5c6406c8e024f36e82c8327d6603adb72aeaa%3A2%3A%7Bi%3A0%3Bs%3A18%3A%22_identity-frontend%22%3Bi%3A1%3Bs%3A46%3A%22%5B2%2C%221SNgG1qkakmN2Frp80Qr1SX2kgRhIH88%22%2C2592000%5D%22%3B%7D; advanced-backend=ocapqr5qgv09ionkbionbf547f; _csrf-backend=106541c7716ce6243ffe7fcfaf136b2a6a12ae438d98e6f746d58b64bcb13ed8a%3A2%3A%7Bi%3A0%3Bs%3A13%3A%22_csrf-backend%22%3Bi%3A1%3Bs%3A32%3A%22oFrjDE6vI0vSHT2i1W4CYRO-RckaEjk2%22%3B%7D; _identity-backend=c0d1afe5c2d610f9a90e14a0fab01645b813d345cb63ec03c8e2cb965d6dd833a%3A2%3A%7Bi%3A0%3Bs%3A17%3A%22_identity-backend%22%3Bi%3A1%3Bs%3A46%3A%22%5B2%2C%221SNgG1qkakmN2Frp80Qr1SX2kgRhIH88%22%2C2592000%5D%22%3B%7D'
    'PATH' => 'C:\\WINDOWS\\system32;C:\\WINDOWS;C:\\WINDOWS\\System32\\Wbem;C:\\WINDOWS\\System32\\WindowsPowerShell\\v1.0\\;C:\\xampp\\php;C:\\ProgramData\\ComposerSetup\\bin;C:\\Program Files\\Git\\cmd;C:\\Users\\Win10\\AppData\\Local\\Microsoft\\WindowsApps;C:\\Users\\Win10\\AppData\\Roaming\\Composer\\vendor\\bin'
    'SystemRoot' => 'C:\\WINDOWS'
    'COMSPEC' => 'C:\\WINDOWS\\system32\\cmd.exe'
    'PATHEXT' => '.COM;.EXE;.BAT;.CMD;.VBS;.VBE;.JS;.JSE;.WSF;.WSH;.MSC'
    'WINDIR' => 'C:\\WINDOWS'
    'SERVER_SIGNATURE' => '<address>Apache/2.4.25 (Win32) OpenSSL/1.0.2j PHP/7.1.1 Server at localhost Port 80</address>
'
    'SERVER_SOFTWARE' => 'Apache/2.4.25 (Win32) OpenSSL/1.0.2j PHP/7.1.1'
    'SERVER_NAME' => 'localhost'
    'SERVER_ADDR' => '::1'
    'SERVER_PORT' => '80'
    'REMOTE_ADDR' => '::1'
    'DOCUMENT_ROOT' => 'C:/xampp/htdocs'
    'REQUEST_SCHEME' => 'http'
    'CONTEXT_PREFIX' => ''
    'CONTEXT_DOCUMENT_ROOT' => 'C:/xampp/htdocs'
    'SERVER_ADMIN' => 'postmaster@localhost'
    'SCRIPT_FILENAME' => 'C:/xampp/htdocs/my_first_project/backend/web/index.php'
    'REMOTE_PORT' => '50237'
    'GATEWAY_INTERFACE' => 'CGI/1.1'
    'SERVER_PROTOCOL' => 'HTTP/1.1'
    'REQUEST_METHOD' => 'GET'
    'QUERY_STRING' => 'r=post%2Fview&id=1'
    'REQUEST_URI' => '/my_first_project/backend/web/index.php?r=post%2Fview&id=1'
    'SCRIPT_NAME' => '/my_first_project/backend/web/index.php'
    'PHP_SELF' => '/my_first_project/backend/web/index.php'
    'REQUEST_TIME_FLOAT' => 1491806730.129
    'REQUEST_TIME' => 1491806730
]
2017-04-10 08:47:16 [::1][-][-][error][ParseError] ParseError: syntax error, unexpected end of file in C:\xampp\htdocs\my_first_project\backend\views\post\view.php:68
Stack trace:
#0 C:\xampp\htdocs\my_first_project\vendor\yiisoft\yii2\base\View.php(250): yii\base\View->renderPhpFile('C:\\xampp\\htdocs...', Array)
#1 C:\xampp\htdocs\my_first_project\vendor\yiisoft\yii2\base\View.php(152): yii\base\View->renderFile('C:\\xampp\\htdocs...', Array, Object(backend\controllers\PostController))
#2 C:\xampp\htdocs\my_first_project\vendor\yiisoft\yii2\base\Controller.php(381): yii\base\View->render('view', Array, Object(backend\controllers\PostController))
#3 C:\xampp\htdocs\my_first_project\backend\controllers\PostController.php(55): yii\base\Controller->render('view', Array)
#4 [internal function]: backend\controllers\PostController->actionView('1')
#5 C:\xampp\htdocs\my_first_project\vendor\yiisoft\yii2\base\InlineAction.php(57): call_user_func_array(Array, Array)
#6 C:\xampp\htdocs\my_first_project\vendor\yiisoft\yii2\base\Controller.php(156): yii\base\InlineAction->runWithParams(Array)
#7 C:\xampp\htdocs\my_first_project\vendor\yiisoft\yii2\base\Module.php(523): yii\base\Controller->runAction('view', Array)
#8 C:\xampp\htdocs\my_first_project\vendor\yiisoft\yii2\web\Application.php(102): yii\base\Module->runAction('post/view', Array)
#9 C:\xampp\htdocs\my_first_project\vendor\yiisoft\yii2\base\Application.php(380): yii\web\Application->handleRequest(Object(yii\web\Request))
#10 C:\xampp\htdocs\my_first_project\backend\web\index.php(17): yii\base\Application->run()
#11 {main}
2017-04-10 08:47:16 [::1][-][-][info][application] $_GET = [
    'r' => 'post/view'
    'id' => '1'
]

$_COOKIE = [
    '_identity-frontend' => '0cae966fd559089f9ace47d1a2ea5c6406c8e024f36e82c8327d6603adb72aeaa:2:{i:0;s:18:\"_identity-frontend\";i:1;s:46:\"[2,\"1SNgG1qkakmN2Frp80Qr1SX2kgRhIH88\",2592000]\";}'
    'advanced-backend' => 'ocapqr5qgv09ionkbionbf547f'
    '_csrf-backend' => '106541c7716ce6243ffe7fcfaf136b2a6a12ae438d98e6f746d58b64bcb13ed8a:2:{i:0;s:13:\"_csrf-backend\";i:1;s:32:\"oFrjDE6vI0vSHT2i1W4CYRO-RckaEjk2\";}'
    '_identity-backend' => 'c0d1afe5c2d610f9a90e14a0fab01645b813d345cb63ec03c8e2cb965d6dd833a:2:{i:0;s:17:\"_identity-backend\";i:1;s:46:\"[2,\"1SNgG1qkakmN2Frp80Qr1SX2kgRhIH88\",2592000]\";}'
]

$_SERVER = [
    'MIBDIRS' => 'C:/xampp/php/extras/mibs'
    'MYSQL_HOME' => '\\xampp\\mysql\\bin'
    'OPENSSL_CONF' => 'C:/xampp/apache/bin/openssl.cnf'
    'PHP_PEAR_SYSCONF_DIR' => '\\xampp\\php'
    'PHPRC' => '\\xampp\\php'
    'TMP' => '\\xampp\\tmp'
    'HTTP_HOST' => 'localhost'
    'HTTP_CONNECTION' => 'keep-alive'
    'HTTP_CACHE_CONTROL' => 'max-age=0'
    'HTTP_UPGRADE_INSECURE_REQUESTS' => '1'
    'HTTP_USER_AGENT' => 'Mozilla/5.0 (Windows NT 10.0; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/57.0.2987.133 Safari/537.36'
    'HTTP_ACCEPT' => 'text/html,application/xhtml+xml,application/xml;q=0.9,image/webp,*/*;q=0.8'
    'HTTP_REFERER' => 'http://localhost/my_first_project/backend/web/index.php?r=post%2Findex'
    'HTTP_ACCEPT_ENCODING' => 'gzip, deflate, sdch, br'
    'HTTP_ACCEPT_LANGUAGE' => 'sk-SK,sk;q=0.8,cs;q=0.6,en-US;q=0.4,en;q=0.2'
    'HTTP_COOKIE' => '_identity-frontend=0cae966fd559089f9ace47d1a2ea5c6406c8e024f36e82c8327d6603adb72aeaa%3A2%3A%7Bi%3A0%3Bs%3A18%3A%22_identity-frontend%22%3Bi%3A1%3Bs%3A46%3A%22%5B2%2C%221SNgG1qkakmN2Frp80Qr1SX2kgRhIH88%22%2C2592000%5D%22%3B%7D; advanced-backend=ocapqr5qgv09ionkbionbf547f; _csrf-backend=106541c7716ce6243ffe7fcfaf136b2a6a12ae438d98e6f746d58b64bcb13ed8a%3A2%3A%7Bi%3A0%3Bs%3A13%3A%22_csrf-backend%22%3Bi%3A1%3Bs%3A32%3A%22oFrjDE6vI0vSHT2i1W4CYRO-RckaEjk2%22%3B%7D; _identity-backend=c0d1afe5c2d610f9a90e14a0fab01645b813d345cb63ec03c8e2cb965d6dd833a%3A2%3A%7Bi%3A0%3Bs%3A17%3A%22_identity-backend%22%3Bi%3A1%3Bs%3A46%3A%22%5B2%2C%221SNgG1qkakmN2Frp80Qr1SX2kgRhIH88%22%2C2592000%5D%22%3B%7D'
    'PATH' => 'C:\\WINDOWS\\system32;C:\\WINDOWS;C:\\WINDOWS\\System32\\Wbem;C:\\WINDOWS\\System32\\WindowsPowerShell\\v1.0\\;C:\\xampp\\php;C:\\ProgramData\\ComposerSetup\\bin;C:\\Program Files\\Git\\cmd;C:\\Users\\Win10\\AppData\\Local\\Microsoft\\WindowsApps;C:\\Users\\Win10\\AppData\\Roaming\\Composer\\vendor\\bin'
    'SystemRoot' => 'C:\\WINDOWS'
    'COMSPEC' => 'C:\\WINDOWS\\system32\\cmd.exe'
    'PATHEXT' => '.COM;.EXE;.BAT;.CMD;.VBS;.VBE;.JS;.JSE;.WSF;.WSH;.MSC'
    'WINDIR' => 'C:\\WINDOWS'
    'SERVER_SIGNATURE' => '<address>Apache/2.4.25 (Win32) OpenSSL/1.0.2j PHP/7.1.1 Server at localhost Port 80</address>
'
    'SERVER_SOFTWARE' => 'Apache/2.4.25 (Win32) OpenSSL/1.0.2j PHP/7.1.1'
    'SERVER_NAME' => 'localhost'
    'SERVER_ADDR' => '::1'
    'SERVER_PORT' => '80'
    'REMOTE_ADDR' => '::1'
    'DOCUMENT_ROOT' => 'C:/xampp/htdocs'
    'REQUEST_SCHEME' => 'http'
    'CONTEXT_PREFIX' => ''
    'CONTEXT_DOCUMENT_ROOT' => 'C:/xampp/htdocs'
    'SERVER_ADMIN' => 'postmaster@localhost'
    'SCRIPT_FILENAME' => 'C:/xampp/htdocs/my_first_project/backend/web/index.php'
    'REMOTE_PORT' => '50247'
    'GATEWAY_INTERFACE' => 'CGI/1.1'
    'SERVER_PROTOCOL' => 'HTTP/1.1'
    'REQUEST_METHOD' => 'GET'
    'QUERY_STRING' => 'r=post%2Fview&id=1'
    'REQUEST_URI' => '/my_first_project/backend/web/index.php?r=post%2Fview&id=1'
    'SCRIPT_NAME' => '/my_first_project/backend/web/index.php'
    'PHP_SELF' => '/my_first_project/backend/web/index.php'
    'REQUEST_TIME_FLOAT' => 1491806836.044
    'REQUEST_TIME' => 1491806836
]
2017-04-10 08:47:16 [::1][2][-][error][yii\web\Session::open] session_start(): Cannot send session cache limiter - headers already sent (output started at C:\xampp\htdocs\my_first_project\vendor\yiisoft\yii2\web\Response.php:391)
2017-04-10 08:47:16 [::1][2][-][info][application] $_GET = [
    'r' => 'post/view'
    'id' => '1'
]

$_COOKIE = [
    '_identity-frontend' => '0cae966fd559089f9ace47d1a2ea5c6406c8e024f36e82c8327d6603adb72aeaa:2:{i:0;s:18:\"_identity-frontend\";i:1;s:46:\"[2,\"1SNgG1qkakmN2Frp80Qr1SX2kgRhIH88\",2592000]\";}'
    'advanced-backend' => 'ocapqr5qgv09ionkbionbf547f'
    '_csrf-backend' => '106541c7716ce6243ffe7fcfaf136b2a6a12ae438d98e6f746d58b64bcb13ed8a:2:{i:0;s:13:\"_csrf-backend\";i:1;s:32:\"oFrjDE6vI0vSHT2i1W4CYRO-RckaEjk2\";}'
    '_identity-backend' => 'c0d1afe5c2d610f9a90e14a0fab01645b813d345cb63ec03c8e2cb965d6dd833a:2:{i:0;s:17:\"_identity-backend\";i:1;s:46:\"[2,\"1SNgG1qkakmN2Frp80Qr1SX2kgRhIH88\",2592000]\";}'
]

$_SESSION = [
    '__flash' => []
    '__id' => 2
]

$_SERVER = [
    'MIBDIRS' => 'C:/xampp/php/extras/mibs'
    'MYSQL_HOME' => '\\xampp\\mysql\\bin'
    'OPENSSL_CONF' => 'C:/xampp/apache/bin/openssl.cnf'
    'PHP_PEAR_SYSCONF_DIR' => '\\xampp\\php'
    'PHPRC' => '\\xampp\\php'
    'TMP' => '\\xampp\\tmp'
    'HTTP_HOST' => 'localhost'
    'HTTP_CONNECTION' => 'keep-alive'
    'HTTP_CACHE_CONTROL' => 'max-age=0'
    'HTTP_UPGRADE_INSECURE_REQUESTS' => '1'
    'HTTP_USER_AGENT' => 'Mozilla/5.0 (Windows NT 10.0; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/57.0.2987.133 Safari/537.36'
    'HTTP_ACCEPT' => 'text/html,application/xhtml+xml,application/xml;q=0.9,image/webp,*/*;q=0.8'
    'HTTP_REFERER' => 'http://localhost/my_first_project/backend/web/index.php?r=post%2Findex'
    'HTTP_ACCEPT_ENCODING' => 'gzip, deflate, sdch, br'
    'HTTP_ACCEPT_LANGUAGE' => 'sk-SK,sk;q=0.8,cs;q=0.6,en-US;q=0.4,en;q=0.2'
    'HTTP_COOKIE' => '_identity-frontend=0cae966fd559089f9ace47d1a2ea5c6406c8e024f36e82c8327d6603adb72aeaa%3A2%3A%7Bi%3A0%3Bs%3A18%3A%22_identity-frontend%22%3Bi%3A1%3Bs%3A46%3A%22%5B2%2C%221SNgG1qkakmN2Frp80Qr1SX2kgRhIH88%22%2C2592000%5D%22%3B%7D; advanced-backend=ocapqr5qgv09ionkbionbf547f; _csrf-backend=106541c7716ce6243ffe7fcfaf136b2a6a12ae438d98e6f746d58b64bcb13ed8a%3A2%3A%7Bi%3A0%3Bs%3A13%3A%22_csrf-backend%22%3Bi%3A1%3Bs%3A32%3A%22oFrjDE6vI0vSHT2i1W4CYRO-RckaEjk2%22%3B%7D; _identity-backend=c0d1afe5c2d610f9a90e14a0fab01645b813d345cb63ec03c8e2cb965d6dd833a%3A2%3A%7Bi%3A0%3Bs%3A17%3A%22_identity-backend%22%3Bi%3A1%3Bs%3A46%3A%22%5B2%2C%221SNgG1qkakmN2Frp80Qr1SX2kgRhIH88%22%2C2592000%5D%22%3B%7D'
    'PATH' => 'C:\\WINDOWS\\system32;C:\\WINDOWS;C:\\WINDOWS\\System32\\Wbem;C:\\WINDOWS\\System32\\WindowsPowerShell\\v1.0\\;C:\\xampp\\php;C:\\ProgramData\\ComposerSetup\\bin;C:\\Program Files\\Git\\cmd;C:\\Users\\Win10\\AppData\\Local\\Microsoft\\WindowsApps;C:\\Users\\Win10\\AppData\\Roaming\\Composer\\vendor\\bin'
    'SystemRoot' => 'C:\\WINDOWS'
    'COMSPEC' => 'C:\\WINDOWS\\system32\\cmd.exe'
    'PATHEXT' => '.COM;.EXE;.BAT;.CMD;.VBS;.VBE;.JS;.JSE;.WSF;.WSH;.MSC'
    'WINDIR' => 'C:\\WINDOWS'
    'SERVER_SIGNATURE' => '<address>Apache/2.4.25 (Win32) OpenSSL/1.0.2j PHP/7.1.1 Server at localhost Port 80</address>
'
    'SERVER_SOFTWARE' => 'Apache/2.4.25 (Win32) OpenSSL/1.0.2j PHP/7.1.1'
    'SERVER_NAME' => 'localhost'
    'SERVER_ADDR' => '::1'
    'SERVER_PORT' => '80'
    'REMOTE_ADDR' => '::1'
    'DOCUMENT_ROOT' => 'C:/xampp/htdocs'
    'REQUEST_SCHEME' => 'http'
    'CONTEXT_PREFIX' => ''
    'CONTEXT_DOCUMENT_ROOT' => 'C:/xampp/htdocs'
    'SERVER_ADMIN' => 'postmaster@localhost'
    'SCRIPT_FILENAME' => 'C:/xampp/htdocs/my_first_project/backend/web/index.php'
    'REMOTE_PORT' => '50247'
    'GATEWAY_INTERFACE' => 'CGI/1.1'
    'SERVER_PROTOCOL' => 'HTTP/1.1'
    'REQUEST_METHOD' => 'GET'
    'QUERY_STRING' => 'r=post%2Fview&id=1'
    'REQUEST_URI' => '/my_first_project/backend/web/index.php?r=post%2Fview&id=1'
    'SCRIPT_NAME' => '/my_first_project/backend/web/index.php'
    'PHP_SELF' => '/my_first_project/backend/web/index.php'
    'REQUEST_TIME_FLOAT' => 1491806836.044
    'REQUEST_TIME' => 1491806836
]
2017-04-10 08:53:12 [::1][-][-][error][ParseError] ParseError: syntax error, unexpected end of file in C:\xampp\htdocs\my_first_project\backend\views\post\view.php:81
Stack trace:
#0 C:\xampp\htdocs\my_first_project\vendor\yiisoft\yii2\base\View.php(250): yii\base\View->renderPhpFile('C:\\xampp\\htdocs...', Array)
#1 C:\xampp\htdocs\my_first_project\vendor\yiisoft\yii2\base\View.php(152): yii\base\View->renderFile('C:\\xampp\\htdocs...', Array, Object(backend\controllers\PostController))
#2 C:\xampp\htdocs\my_first_project\vendor\yiisoft\yii2\base\Controller.php(381): yii\base\View->render('view', Array, Object(backend\controllers\PostController))
#3 C:\xampp\htdocs\my_first_project\backend\controllers\PostController.php(55): yii\base\Controller->render('view', Array)
#4 [internal function]: backend\controllers\PostController->actionView('1')
#5 C:\xampp\htdocs\my_first_project\vendor\yiisoft\yii2\base\InlineAction.php(57): call_user_func_array(Array, Array)
#6 C:\xampp\htdocs\my_first_project\vendor\yiisoft\yii2\base\Controller.php(156): yii\base\InlineAction->runWithParams(Array)
#7 C:\xampp\htdocs\my_first_project\vendor\yiisoft\yii2\base\Module.php(523): yii\base\Controller->runAction('view', Array)
#8 C:\xampp\htdocs\my_first_project\vendor\yiisoft\yii2\web\Application.php(102): yii\base\Module->runAction('post/view', Array)
#9 C:\xampp\htdocs\my_first_project\vendor\yiisoft\yii2\base\Application.php(380): yii\web\Application->handleRequest(Object(yii\web\Request))
#10 C:\xampp\htdocs\my_first_project\backend\web\index.php(17): yii\base\Application->run()
#11 {main}
2017-04-10 08:53:12 [::1][-][-][info][application] $_GET = [
    'r' => 'post/view'
    'id' => '1'
]

$_COOKIE = [
    '_identity-frontend' => '0cae966fd559089f9ace47d1a2ea5c6406c8e024f36e82c8327d6603adb72aeaa:2:{i:0;s:18:\"_identity-frontend\";i:1;s:46:\"[2,\"1SNgG1qkakmN2Frp80Qr1SX2kgRhIH88\",2592000]\";}'
    'advanced-backend' => 'ocapqr5qgv09ionkbionbf547f'
    '_csrf-backend' => '106541c7716ce6243ffe7fcfaf136b2a6a12ae438d98e6f746d58b64bcb13ed8a:2:{i:0;s:13:\"_csrf-backend\";i:1;s:32:\"oFrjDE6vI0vSHT2i1W4CYRO-RckaEjk2\";}'
    '_identity-backend' => 'c0d1afe5c2d610f9a90e14a0fab01645b813d345cb63ec03c8e2cb965d6dd833a:2:{i:0;s:17:\"_identity-backend\";i:1;s:46:\"[2,\"1SNgG1qkakmN2Frp80Qr1SX2kgRhIH88\",2592000]\";}'
]

$_SERVER = [
    'MIBDIRS' => 'C:/xampp/php/extras/mibs'
    'MYSQL_HOME' => '\\xampp\\mysql\\bin'
    'OPENSSL_CONF' => 'C:/xampp/apache/bin/openssl.cnf'
    'PHP_PEAR_SYSCONF_DIR' => '\\xampp\\php'
    'PHPRC' => '\\xampp\\php'
    'TMP' => '\\xampp\\tmp'
    'HTTP_HOST' => 'localhost'
    'HTTP_CONNECTION' => 'keep-alive'
    'HTTP_CACHE_CONTROL' => 'max-age=0'
    'HTTP_UPGRADE_INSECURE_REQUESTS' => '1'
    'HTTP_USER_AGENT' => 'Mozilla/5.0 (Windows NT 10.0; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/57.0.2987.133 Safari/537.36'
    'HTTP_ACCEPT' => 'text/html,application/xhtml+xml,application/xml;q=0.9,image/webp,*/*;q=0.8'
    'HTTP_REFERER' => 'http://localhost/my_first_project/backend/web/index.php?r=post%2Findex'
    'HTTP_ACCEPT_ENCODING' => 'gzip, deflate, sdch, br'
    'HTTP_ACCEPT_LANGUAGE' => 'sk-SK,sk;q=0.8,cs;q=0.6,en-US;q=0.4,en;q=0.2'
    'HTTP_COOKIE' => '_identity-frontend=0cae966fd559089f9ace47d1a2ea5c6406c8e024f36e82c8327d6603adb72aeaa%3A2%3A%7Bi%3A0%3Bs%3A18%3A%22_identity-frontend%22%3Bi%3A1%3Bs%3A46%3A%22%5B2%2C%221SNgG1qkakmN2Frp80Qr1SX2kgRhIH88%22%2C2592000%5D%22%3B%7D; advanced-backend=ocapqr5qgv09ionkbionbf547f; _csrf-backend=106541c7716ce6243ffe7fcfaf136b2a6a12ae438d98e6f746d58b64bcb13ed8a%3A2%3A%7Bi%3A0%3Bs%3A13%3A%22_csrf-backend%22%3Bi%3A1%3Bs%3A32%3A%22oFrjDE6vI0vSHT2i1W4CYRO-RckaEjk2%22%3B%7D; _identity-backend=c0d1afe5c2d610f9a90e14a0fab01645b813d345cb63ec03c8e2cb965d6dd833a%3A2%3A%7Bi%3A0%3Bs%3A17%3A%22_identity-backend%22%3Bi%3A1%3Bs%3A46%3A%22%5B2%2C%221SNgG1qkakmN2Frp80Qr1SX2kgRhIH88%22%2C2592000%5D%22%3B%7D'
    'PATH' => 'C:\\WINDOWS\\system32;C:\\WINDOWS;C:\\WINDOWS\\System32\\Wbem;C:\\WINDOWS\\System32\\WindowsPowerShell\\v1.0\\;C:\\xampp\\php;C:\\ProgramData\\ComposerSetup\\bin;C:\\Program Files\\Git\\cmd;C:\\Users\\Win10\\AppData\\Local\\Microsoft\\WindowsApps;C:\\Users\\Win10\\AppData\\Roaming\\Composer\\vendor\\bin'
    'SystemRoot' => 'C:\\WINDOWS'
    'COMSPEC' => 'C:\\WINDOWS\\system32\\cmd.exe'
    'PATHEXT' => '.COM;.EXE;.BAT;.CMD;.VBS;.VBE;.JS;.JSE;.WSF;.WSH;.MSC'
    'WINDIR' => 'C:\\WINDOWS'
    'SERVER_SIGNATURE' => '<address>Apache/2.4.25 (Win32) OpenSSL/1.0.2j PHP/7.1.1 Server at localhost Port 80</address>
'
    'SERVER_SOFTWARE' => 'Apache/2.4.25 (Win32) OpenSSL/1.0.2j PHP/7.1.1'
    'SERVER_NAME' => 'localhost'
    'SERVER_ADDR' => '::1'
    'SERVER_PORT' => '80'
    'REMOTE_ADDR' => '::1'
    'DOCUMENT_ROOT' => 'C:/xampp/htdocs'
    'REQUEST_SCHEME' => 'http'
    'CONTEXT_PREFIX' => ''
    'CONTEXT_DOCUMENT_ROOT' => 'C:/xampp/htdocs'
    'SERVER_ADMIN' => 'postmaster@localhost'
    'SCRIPT_FILENAME' => 'C:/xampp/htdocs/my_first_project/backend/web/index.php'
    'REMOTE_PORT' => '50321'
    'GATEWAY_INTERFACE' => 'CGI/1.1'
    'SERVER_PROTOCOL' => 'HTTP/1.1'
    'REQUEST_METHOD' => 'GET'
    'QUERY_STRING' => 'r=post%2Fview&id=1'
    'REQUEST_URI' => '/my_first_project/backend/web/index.php?r=post%2Fview&id=1'
    'SCRIPT_NAME' => '/my_first_project/backend/web/index.php'
    'PHP_SELF' => '/my_first_project/backend/web/index.php'
    'REQUEST_TIME_FLOAT' => 1491807192.08
    'REQUEST_TIME' => 1491807192
]
2017-04-10 08:53:12 [::1][2][-][error][yii\web\Session::open] session_start(): Cannot send session cache limiter - headers already sent (output started at C:\xampp\htdocs\my_first_project\vendor\yiisoft\yii2\web\Response.php:391)
2017-04-10 08:53:12 [::1][2][-][info][application] $_GET = [
    'r' => 'post/view'
    'id' => '1'
]

$_COOKIE = [
    '_identity-frontend' => '0cae966fd559089f9ace47d1a2ea5c6406c8e024f36e82c8327d6603adb72aeaa:2:{i:0;s:18:\"_identity-frontend\";i:1;s:46:\"[2,\"1SNgG1qkakmN2Frp80Qr1SX2kgRhIH88\",2592000]\";}'
    'advanced-backend' => 'ocapqr5qgv09ionkbionbf547f'
    '_csrf-backend' => '106541c7716ce6243ffe7fcfaf136b2a6a12ae438d98e6f746d58b64bcb13ed8a:2:{i:0;s:13:\"_csrf-backend\";i:1;s:32:\"oFrjDE6vI0vSHT2i1W4CYRO-RckaEjk2\";}'
    '_identity-backend' => 'c0d1afe5c2d610f9a90e14a0fab01645b813d345cb63ec03c8e2cb965d6dd833a:2:{i:0;s:17:\"_identity-backend\";i:1;s:46:\"[2,\"1SNgG1qkakmN2Frp80Qr1SX2kgRhIH88\",2592000]\";}'
]

$_SESSION = [
    '__flash' => []
    '__id' => 2
]

$_SERVER = [
    'MIBDIRS' => 'C:/xampp/php/extras/mibs'
    'MYSQL_HOME' => '\\xampp\\mysql\\bin'
    'OPENSSL_CONF' => 'C:/xampp/apache/bin/openssl.cnf'
    'PHP_PEAR_SYSCONF_DIR' => '\\xampp\\php'
    'PHPRC' => '\\xampp\\php'
    'TMP' => '\\xampp\\tmp'
    'HTTP_HOST' => 'localhost'
    'HTTP_CONNECTION' => 'keep-alive'
    'HTTP_CACHE_CONTROL' => 'max-age=0'
    'HTTP_UPGRADE_INSECURE_REQUESTS' => '1'
    'HTTP_USER_AGENT' => 'Mozilla/5.0 (Windows NT 10.0; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/57.0.2987.133 Safari/537.36'
    'HTTP_ACCEPT' => 'text/html,application/xhtml+xml,application/xml;q=0.9,image/webp,*/*;q=0.8'
    'HTTP_REFERER' => 'http://localhost/my_first_project/backend/web/index.php?r=post%2Findex'
    'HTTP_ACCEPT_ENCODING' => 'gzip, deflate, sdch, br'
    'HTTP_ACCEPT_LANGUAGE' => 'sk-SK,sk;q=0.8,cs;q=0.6,en-US;q=0.4,en;q=0.2'
    'HTTP_COOKIE' => '_identity-frontend=0cae966fd559089f9ace47d1a2ea5c6406c8e024f36e82c8327d6603adb72aeaa%3A2%3A%7Bi%3A0%3Bs%3A18%3A%22_identity-frontend%22%3Bi%3A1%3Bs%3A46%3A%22%5B2%2C%221SNgG1qkakmN2Frp80Qr1SX2kgRhIH88%22%2C2592000%5D%22%3B%7D; advanced-backend=ocapqr5qgv09ionkbionbf547f; _csrf-backend=106541c7716ce6243ffe7fcfaf136b2a6a12ae438d98e6f746d58b64bcb13ed8a%3A2%3A%7Bi%3A0%3Bs%3A13%3A%22_csrf-backend%22%3Bi%3A1%3Bs%3A32%3A%22oFrjDE6vI0vSHT2i1W4CYRO-RckaEjk2%22%3B%7D; _identity-backend=c0d1afe5c2d610f9a90e14a0fab01645b813d345cb63ec03c8e2cb965d6dd833a%3A2%3A%7Bi%3A0%3Bs%3A17%3A%22_identity-backend%22%3Bi%3A1%3Bs%3A46%3A%22%5B2%2C%221SNgG1qkakmN2Frp80Qr1SX2kgRhIH88%22%2C2592000%5D%22%3B%7D'
    'PATH' => 'C:\\WINDOWS\\system32;C:\\WINDOWS;C:\\WINDOWS\\System32\\Wbem;C:\\WINDOWS\\System32\\WindowsPowerShell\\v1.0\\;C:\\xampp\\php;C:\\ProgramData\\ComposerSetup\\bin;C:\\Program Files\\Git\\cmd;C:\\Users\\Win10\\AppData\\Local\\Microsoft\\WindowsApps;C:\\Users\\Win10\\AppData\\Roaming\\Composer\\vendor\\bin'
    'SystemRoot' => 'C:\\WINDOWS'
    'COMSPEC' => 'C:\\WINDOWS\\system32\\cmd.exe'
    'PATHEXT' => '.COM;.EXE;.BAT;.CMD;.VBS;.VBE;.JS;.JSE;.WSF;.WSH;.MSC'
    'WINDIR' => 'C:\\WINDOWS'
    'SERVER_SIGNATURE' => '<address>Apache/2.4.25 (Win32) OpenSSL/1.0.2j PHP/7.1.1 Server at localhost Port 80</address>
'
    'SERVER_SOFTWARE' => 'Apache/2.4.25 (Win32) OpenSSL/1.0.2j PHP/7.1.1'
    'SERVER_NAME' => 'localhost'
    'SERVER_ADDR' => '::1'
    'SERVER_PORT' => '80'
    'REMOTE_ADDR' => '::1'
    'DOCUMENT_ROOT' => 'C:/xampp/htdocs'
    'REQUEST_SCHEME' => 'http'
    'CONTEXT_PREFIX' => ''
    'CONTEXT_DOCUMENT_ROOT' => 'C:/xampp/htdocs'
    'SERVER_ADMIN' => 'postmaster@localhost'
    'SCRIPT_FILENAME' => 'C:/xampp/htdocs/my_first_project/backend/web/index.php'
    'REMOTE_PORT' => '50321'
    'GATEWAY_INTERFACE' => 'CGI/1.1'
    'SERVER_PROTOCOL' => 'HTTP/1.1'
    'REQUEST_METHOD' => 'GET'
    'QUERY_STRING' => 'r=post%2Fview&id=1'
    'REQUEST_URI' => '/my_first_project/backend/web/index.php?r=post%2Fview&id=1'
    'SCRIPT_NAME' => '/my_first_project/backend/web/index.php'
    'PHP_SELF' => '/my_first_project/backend/web/index.php'
    'REQUEST_TIME_FLOAT' => 1491807192.08
    'REQUEST_TIME' => 1491807192
]
2017-04-10 08:58:40 [::1][2][ocapqr5qgv09ionkbionbf547f][error][yii\web\HttpException:400] yii\web\BadRequestHttpException: Missing required parameters: id_comment in C:\xampp\htdocs\my_first_project\vendor\yiisoft\yii2\web\Controller.php:149
Stack trace:
#0 C:\xampp\htdocs\my_first_project\vendor\yiisoft\yii2\base\InlineAction.php(51): yii\web\Controller->bindActionParams(Object(yii\base\InlineAction), Array)
#1 C:\xampp\htdocs\my_first_project\vendor\yiisoft\yii2\base\Controller.php(156): yii\base\InlineAction->runWithParams(Array)
#2 C:\xampp\htdocs\my_first_project\vendor\yiisoft\yii2\base\Module.php(523): yii\base\Controller->runAction('create', Array)
#3 C:\xampp\htdocs\my_first_project\vendor\yiisoft\yii2\web\Application.php(102): yii\base\Module->runAction('comment/create', Array)
#4 C:\xampp\htdocs\my_first_project\vendor\yiisoft\yii2\base\Application.php(380): yii\web\Application->handleRequest(Object(yii\web\Request))
#5 C:\xampp\htdocs\my_first_project\backend\web\index.php(17): yii\base\Application->run()
#6 {main}
2017-04-10 08:58:40 [::1][2][ocapqr5qgv09ionkbionbf547f][info][application] $_GET = [
    'r' => 'comment/create'
    'id' => '3'
]

$_COOKIE = [
    '_identity-frontend' => '0cae966fd559089f9ace47d1a2ea5c6406c8e024f36e82c8327d6603adb72aeaa:2:{i:0;s:18:\"_identity-frontend\";i:1;s:46:\"[2,\"1SNgG1qkakmN2Frp80Qr1SX2kgRhIH88\",2592000]\";}'
    'advanced-backend' => 'ocapqr5qgv09ionkbionbf547f'
    '_csrf-backend' => '106541c7716ce6243ffe7fcfaf136b2a6a12ae438d98e6f746d58b64bcb13ed8a:2:{i:0;s:13:\"_csrf-backend\";i:1;s:32:\"oFrjDE6vI0vSHT2i1W4CYRO-RckaEjk2\";}'
    '_identity-backend' => 'c0d1afe5c2d610f9a90e14a0fab01645b813d345cb63ec03c8e2cb965d6dd833a:2:{i:0;s:17:\"_identity-backend\";i:1;s:46:\"[2,\"1SNgG1qkakmN2Frp80Qr1SX2kgRhIH88\",2592000]\";}'
]

$_SESSION = [
    '__flash' => []
    '__id' => 2
]

$_SERVER = [
    'MIBDIRS' => 'C:/xampp/php/extras/mibs'
    'MYSQL_HOME' => '\\xampp\\mysql\\bin'
    'OPENSSL_CONF' => 'C:/xampp/apache/bin/openssl.cnf'
    'PHP_PEAR_SYSCONF_DIR' => '\\xampp\\php'
    'PHPRC' => '\\xampp\\php'
    'TMP' => '\\xampp\\tmp'
    'HTTP_HOST' => 'localhost'
    'HTTP_CONNECTION' => 'keep-alive'
    'HTTP_UPGRADE_INSECURE_REQUESTS' => '1'
    'HTTP_USER_AGENT' => 'Mozilla/5.0 (Windows NT 10.0; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/57.0.2987.133 Safari/537.36'
    'HTTP_ACCEPT' => 'text/html,application/xhtml+xml,application/xml;q=0.9,image/webp,*/*;q=0.8'
    'HTTP_REFERER' => 'http://localhost/my_first_project/backend/web/index.php?r=post%2Fview&id=3'
    'HTTP_ACCEPT_ENCODING' => 'gzip, deflate, sdch, br'
    'HTTP_ACCEPT_LANGUAGE' => 'sk-SK,sk;q=0.8,cs;q=0.6,en-US;q=0.4,en;q=0.2'
    'HTTP_COOKIE' => '_identity-frontend=0cae966fd559089f9ace47d1a2ea5c6406c8e024f36e82c8327d6603adb72aeaa%3A2%3A%7Bi%3A0%3Bs%3A18%3A%22_identity-frontend%22%3Bi%3A1%3Bs%3A46%3A%22%5B2%2C%221SNgG1qkakmN2Frp80Qr1SX2kgRhIH88%22%2C2592000%5D%22%3B%7D; advanced-backend=ocapqr5qgv09ionkbionbf547f; _csrf-backend=106541c7716ce6243ffe7fcfaf136b2a6a12ae438d98e6f746d58b64bcb13ed8a%3A2%3A%7Bi%3A0%3Bs%3A13%3A%22_csrf-backend%22%3Bi%3A1%3Bs%3A32%3A%22oFrjDE6vI0vSHT2i1W4CYRO-RckaEjk2%22%3B%7D; _identity-backend=c0d1afe5c2d610f9a90e14a0fab01645b813d345cb63ec03c8e2cb965d6dd833a%3A2%3A%7Bi%3A0%3Bs%3A17%3A%22_identity-backend%22%3Bi%3A1%3Bs%3A46%3A%22%5B2%2C%221SNgG1qkakmN2Frp80Qr1SX2kgRhIH88%22%2C2592000%5D%22%3B%7D'
    'PATH' => 'C:\\WINDOWS\\system32;C:\\WINDOWS;C:\\WINDOWS\\System32\\Wbem;C:\\WINDOWS\\System32\\WindowsPowerShell\\v1.0\\;C:\\xampp\\php;C:\\ProgramData\\ComposerSetup\\bin;C:\\Program Files\\Git\\cmd;C:\\Users\\Win10\\AppData\\Local\\Microsoft\\WindowsApps;C:\\Users\\Win10\\AppData\\Roaming\\Composer\\vendor\\bin'
    'SystemRoot' => 'C:\\WINDOWS'
    'COMSPEC' => 'C:\\WINDOWS\\system32\\cmd.exe'
    'PATHEXT' => '.COM;.EXE;.BAT;.CMD;.VBS;.VBE;.JS;.JSE;.WSF;.WSH;.MSC'
    'WINDIR' => 'C:\\WINDOWS'
    'SERVER_SIGNATURE' => '<address>Apache/2.4.25 (Win32) OpenSSL/1.0.2j PHP/7.1.1 Server at localhost Port 80</address>
'
    'SERVER_SOFTWARE' => 'Apache/2.4.25 (Win32) OpenSSL/1.0.2j PHP/7.1.1'
    'SERVER_NAME' => 'localhost'
    'SERVER_ADDR' => '::1'
    'SERVER_PORT' => '80'
    'REMOTE_ADDR' => '::1'
    'DOCUMENT_ROOT' => 'C:/xampp/htdocs'
    'REQUEST_SCHEME' => 'http'
    'CONTEXT_PREFIX' => ''
    'CONTEXT_DOCUMENT_ROOT' => 'C:/xampp/htdocs'
    'SERVER_ADMIN' => 'postmaster@localhost'
    'SCRIPT_FILENAME' => 'C:/xampp/htdocs/my_first_project/backend/web/index.php'
    'REMOTE_PORT' => '50401'
    'GATEWAY_INTERFACE' => 'CGI/1.1'
    'SERVER_PROTOCOL' => 'HTTP/1.1'
    'REQUEST_METHOD' => 'GET'
    'QUERY_STRING' => 'r=comment%2Fcreate&id=3'
    'REQUEST_URI' => '/my_first_project/backend/web/index.php?r=comment%2Fcreate&id=3'
    'SCRIPT_NAME' => '/my_first_project/backend/web/index.php'
    'PHP_SELF' => '/my_first_project/backend/web/index.php'
    'REQUEST_TIME_FLOAT' => 1491807520.187
    'REQUEST_TIME' => 1491807520
]
2017-04-10 08:59:32 [::1][2][ocapqr5qgv09ionkbionbf547f][error][yii\web\HttpException:400] yii\web\BadRequestHttpException: Missing required parameters: id in C:\xampp\htdocs\my_first_project\vendor\yiisoft\yii2\web\Controller.php:149
Stack trace:
#0 C:\xampp\htdocs\my_first_project\vendor\yiisoft\yii2\base\InlineAction.php(51): yii\web\Controller->bindActionParams(Object(yii\base\InlineAction), Array)
#1 C:\xampp\htdocs\my_first_project\vendor\yiisoft\yii2\base\Controller.php(156): yii\base\InlineAction->runWithParams(Array)
#2 C:\xampp\htdocs\my_first_project\vendor\yiisoft\yii2\base\Module.php(523): yii\base\Controller->runAction('view', Array)
#3 C:\xampp\htdocs\my_first_project\vendor\yiisoft\yii2\web\Application.php(102): yii\base\Module->runAction('comment/view', Array)
#4 C:\xampp\htdocs\my_first_project\vendor\yiisoft\yii2\base\Application.php(380): yii\web\Application->handleRequest(Object(yii\web\Request))
#5 C:\xampp\htdocs\my_first_project\backend\web\index.php(17): yii\base\Application->run()
#6 {main}
2017-04-10 08:59:32 [::1][2][ocapqr5qgv09ionkbionbf547f][info][application] $_GET = [
    'r' => 'comment/view'
]

$_COOKIE = [
    '_identity-frontend' => '0cae966fd559089f9ace47d1a2ea5c6406c8e024f36e82c8327d6603adb72aeaa:2:{i:0;s:18:\"_identity-frontend\";i:1;s:46:\"[2,\"1SNgG1qkakmN2Frp80Qr1SX2kgRhIH88\",2592000]\";}'
    'advanced-backend' => 'ocapqr5qgv09ionkbionbf547f'
    '_csrf-backend' => '106541c7716ce6243ffe7fcfaf136b2a6a12ae438d98e6f746d58b64bcb13ed8a:2:{i:0;s:13:\"_csrf-backend\";i:1;s:32:\"oFrjDE6vI0vSHT2i1W4CYRO-RckaEjk2\";}'
    '_identity-backend' => 'c0d1afe5c2d610f9a90e14a0fab01645b813d345cb63ec03c8e2cb965d6dd833a:2:{i:0;s:17:\"_identity-backend\";i:1;s:46:\"[2,\"1SNgG1qkakmN2Frp80Qr1SX2kgRhIH88\",2592000]\";}'
]

$_SESSION = [
    '__flash' => []
    '__id' => 2
]

$_SERVER = [
    'MIBDIRS' => 'C:/xampp/php/extras/mibs'
    'MYSQL_HOME' => '\\xampp\\mysql\\bin'
    'OPENSSL_CONF' => 'C:/xampp/apache/bin/openssl.cnf'
    'PHP_PEAR_SYSCONF_DIR' => '\\xampp\\php'
    'PHPRC' => '\\xampp\\php'
    'TMP' => '\\xampp\\tmp'
    'HTTP_HOST' => 'localhost'
    'HTTP_CONNECTION' => 'keep-alive'
    'HTTP_CACHE_CONTROL' => 'max-age=0'
    'HTTP_UPGRADE_INSECURE_REQUESTS' => '1'
    'HTTP_USER_AGENT' => 'Mozilla/5.0 (Windows NT 10.0; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/57.0.2987.133 Safari/537.36'
    'HTTP_ACCEPT' => 'text/html,application/xhtml+xml,application/xml;q=0.9,image/webp,*/*;q=0.8'
    'HTTP_REFERER' => 'http://localhost/my_first_project/backend/web/index.php?r=comment%2Fcreate&id=3&id_comment=0'
    'HTTP_ACCEPT_ENCODING' => 'gzip, deflate, sdch, br'
    'HTTP_ACCEPT_LANGUAGE' => 'sk-SK,sk;q=0.8,cs;q=0.6,en-US;q=0.4,en;q=0.2'
    'HTTP_COOKIE' => '_identity-frontend=0cae966fd559089f9ace47d1a2ea5c6406c8e024f36e82c8327d6603adb72aeaa%3A2%3A%7Bi%3A0%3Bs%3A18%3A%22_identity-frontend%22%3Bi%3A1%3Bs%3A46%3A%22%5B2%2C%221SNgG1qkakmN2Frp80Qr1SX2kgRhIH88%22%2C2592000%5D%22%3B%7D; advanced-backend=ocapqr5qgv09ionkbionbf547f; _csrf-backend=106541c7716ce6243ffe7fcfaf136b2a6a12ae438d98e6f746d58b64bcb13ed8a%3A2%3A%7Bi%3A0%3Bs%3A13%3A%22_csrf-backend%22%3Bi%3A1%3Bs%3A32%3A%22oFrjDE6vI0vSHT2i1W4CYRO-RckaEjk2%22%3B%7D; _identity-backend=c0d1afe5c2d610f9a90e14a0fab01645b813d345cb63ec03c8e2cb965d6dd833a%3A2%3A%7Bi%3A0%3Bs%3A17%3A%22_identity-backend%22%3Bi%3A1%3Bs%3A46%3A%22%5B2%2C%221SNgG1qkakmN2Frp80Qr1SX2kgRhIH88%22%2C2592000%5D%22%3B%7D'
    'PATH' => 'C:\\WINDOWS\\system32;C:\\WINDOWS;C:\\WINDOWS\\System32\\Wbem;C:\\WINDOWS\\System32\\WindowsPowerShell\\v1.0\\;C:\\xampp\\php;C:\\ProgramData\\ComposerSetup\\bin;C:\\Program Files\\Git\\cmd;C:\\Users\\Win10\\AppData\\Local\\Microsoft\\WindowsApps;C:\\Users\\Win10\\AppData\\Roaming\\Composer\\vendor\\bin'
    'SystemRoot' => 'C:\\WINDOWS'
    'COMSPEC' => 'C:\\WINDOWS\\system32\\cmd.exe'
    'PATHEXT' => '.COM;.EXE;.BAT;.CMD;.VBS;.VBE;.JS;.JSE;.WSF;.WSH;.MSC'
    'WINDIR' => 'C:\\WINDOWS'
    'SERVER_SIGNATURE' => '<address>Apache/2.4.25 (Win32) OpenSSL/1.0.2j PHP/7.1.1 Server at localhost Port 80</address>
'
    'SERVER_SOFTWARE' => 'Apache/2.4.25 (Win32) OpenSSL/1.0.2j PHP/7.1.1'
    'SERVER_NAME' => 'localhost'
    'SERVER_ADDR' => '::1'
    'SERVER_PORT' => '80'
    'REMOTE_ADDR' => '::1'
    'DOCUMENT_ROOT' => 'C:/xampp/htdocs'
    'REQUEST_SCHEME' => 'http'
    'CONTEXT_PREFIX' => ''
    'CONTEXT_DOCUMENT_ROOT' => 'C:/xampp/htdocs'
    'SERVER_ADMIN' => 'postmaster@localhost'
    'SCRIPT_FILENAME' => 'C:/xampp/htdocs/my_first_project/backend/web/index.php'
    'REMOTE_PORT' => '50424'
    'GATEWAY_INTERFACE' => 'CGI/1.1'
    'SERVER_PROTOCOL' => 'HTTP/1.1'
    'REQUEST_METHOD' => 'GET'
    'QUERY_STRING' => 'r=comment%2Fview'
    'REQUEST_URI' => '/my_first_project/backend/web/index.php?r=comment%2Fview'
    'SCRIPT_NAME' => '/my_first_project/backend/web/index.php'
    'PHP_SELF' => '/my_first_project/backend/web/index.php'
    'REQUEST_TIME_FLOAT' => 1491807572.885
    'REQUEST_TIME' => 1491807572
]
2017-04-10 09:13:29 [::1][2][ocapqr5qgv09ionkbionbf547f][error][yii\web\HttpException:400] yii\web\BadRequestHttpException: Missing required parameters: id_comment in C:\xampp\htdocs\my_first_project\vendor\yiisoft\yii2\web\Controller.php:149
Stack trace:
#0 C:\xampp\htdocs\my_first_project\vendor\yiisoft\yii2\base\InlineAction.php(51): yii\web\Controller->bindActionParams(Object(yii\base\InlineAction), Array)
#1 C:\xampp\htdocs\my_first_project\vendor\yiisoft\yii2\base\Controller.php(156): yii\base\InlineAction->runWithParams(Array)
#2 C:\xampp\htdocs\my_first_project\vendor\yiisoft\yii2\base\Module.php(523): yii\base\Controller->runAction('create', Array)
#3 C:\xampp\htdocs\my_first_project\vendor\yiisoft\yii2\web\Application.php(102): yii\base\Module->runAction('comment/create', Array)
#4 C:\xampp\htdocs\my_first_project\vendor\yiisoft\yii2\base\Application.php(380): yii\web\Application->handleRequest(Object(yii\web\Request))
#5 C:\xampp\htdocs\my_first_project\backend\web\index.php(17): yii\base\Application->run()
#6 {main}
2017-04-10 09:13:29 [::1][2][ocapqr5qgv09ionkbionbf547f][info][application] $_GET = [
    'r' => 'comment/create'
    'id' => '5'
]

$_COOKIE = [
    '_identity-frontend' => '0cae966fd559089f9ace47d1a2ea5c6406c8e024f36e82c8327d6603adb72aeaa:2:{i:0;s:18:\"_identity-frontend\";i:1;s:46:\"[2,\"1SNgG1qkakmN2Frp80Qr1SX2kgRhIH88\",2592000]\";}'
    'advanced-backend' => 'ocapqr5qgv09ionkbionbf547f'
    '_csrf-backend' => '106541c7716ce6243ffe7fcfaf136b2a6a12ae438d98e6f746d58b64bcb13ed8a:2:{i:0;s:13:\"_csrf-backend\";i:1;s:32:\"oFrjDE6vI0vSHT2i1W4CYRO-RckaEjk2\";}'
    '_identity-backend' => 'c0d1afe5c2d610f9a90e14a0fab01645b813d345cb63ec03c8e2cb965d6dd833a:2:{i:0;s:17:\"_identity-backend\";i:1;s:46:\"[2,\"1SNgG1qkakmN2Frp80Qr1SX2kgRhIH88\",2592000]\";}'
]

$_SESSION = [
    '__flash' => []
    '__id' => 2
]

$_SERVER = [
    'MIBDIRS' => 'C:/xampp/php/extras/mibs'
    'MYSQL_HOME' => '\\xampp\\mysql\\bin'
    'OPENSSL_CONF' => 'C:/xampp/apache/bin/openssl.cnf'
    'PHP_PEAR_SYSCONF_DIR' => '\\xampp\\php'
    'PHPRC' => '\\xampp\\php'
    'TMP' => '\\xampp\\tmp'
    'HTTP_HOST' => 'localhost'
    'HTTP_CONNECTION' => 'keep-alive'
    'HTTP_UPGRADE_INSECURE_REQUESTS' => '1'
    'HTTP_USER_AGENT' => 'Mozilla/5.0 (Windows NT 10.0; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/57.0.2987.133 Safari/537.36'
    'HTTP_ACCEPT' => 'text/html,application/xhtml+xml,application/xml;q=0.9,image/webp,*/*;q=0.8'
    'HTTP_REFERER' => 'http://localhost/my_first_project/backend/web/index.php?r=post%2Fview&id=3'
    'HTTP_ACCEPT_ENCODING' => 'gzip, deflate, sdch, br'
    'HTTP_ACCEPT_LANGUAGE' => 'sk-SK,sk;q=0.8,cs;q=0.6,en-US;q=0.4,en;q=0.2'
    'HTTP_COOKIE' => '_identity-frontend=0cae966fd559089f9ace47d1a2ea5c6406c8e024f36e82c8327d6603adb72aeaa%3A2%3A%7Bi%3A0%3Bs%3A18%3A%22_identity-frontend%22%3Bi%3A1%3Bs%3A46%3A%22%5B2%2C%221SNgG1qkakmN2Frp80Qr1SX2kgRhIH88%22%2C2592000%5D%22%3B%7D; advanced-backend=ocapqr5qgv09ionkbionbf547f; _csrf-backend=106541c7716ce6243ffe7fcfaf136b2a6a12ae438d98e6f746d58b64bcb13ed8a%3A2%3A%7Bi%3A0%3Bs%3A13%3A%22_csrf-backend%22%3Bi%3A1%3Bs%3A32%3A%22oFrjDE6vI0vSHT2i1W4CYRO-RckaEjk2%22%3B%7D; _identity-backend=c0d1afe5c2d610f9a90e14a0fab01645b813d345cb63ec03c8e2cb965d6dd833a%3A2%3A%7Bi%3A0%3Bs%3A17%3A%22_identity-backend%22%3Bi%3A1%3Bs%3A46%3A%22%5B2%2C%221SNgG1qkakmN2Frp80Qr1SX2kgRhIH88%22%2C2592000%5D%22%3B%7D'
    'PATH' => 'C:\\WINDOWS\\system32;C:\\WINDOWS;C:\\WINDOWS\\System32\\Wbem;C:\\WINDOWS\\System32\\WindowsPowerShell\\v1.0\\;C:\\xampp\\php;C:\\ProgramData\\ComposerSetup\\bin;C:\\Program Files\\Git\\cmd;C:\\Users\\Win10\\AppData\\Local\\Microsoft\\WindowsApps;C:\\Users\\Win10\\AppData\\Roaming\\Composer\\vendor\\bin'
    'SystemRoot' => 'C:\\WINDOWS'
    'COMSPEC' => 'C:\\WINDOWS\\system32\\cmd.exe'
    'PATHEXT' => '.COM;.EXE;.BAT;.CMD;.VBS;.VBE;.JS;.JSE;.WSF;.WSH;.MSC'
    'WINDIR' => 'C:\\WINDOWS'
    'SERVER_SIGNATURE' => '<address>Apache/2.4.25 (Win32) OpenSSL/1.0.2j PHP/7.1.1 Server at localhost Port 80</address>
'
    'SERVER_SOFTWARE' => 'Apache/2.4.25 (Win32) OpenSSL/1.0.2j PHP/7.1.1'
    'SERVER_NAME' => 'localhost'
    'SERVER_ADDR' => '::1'
    'SERVER_PORT' => '80'
    'REMOTE_ADDR' => '::1'
    'DOCUMENT_ROOT' => 'C:/xampp/htdocs'
    'REQUEST_SCHEME' => 'http'
    'CONTEXT_PREFIX' => ''
    'CONTEXT_DOCUMENT_ROOT' => 'C:/xampp/htdocs'
    'SERVER_ADMIN' => 'postmaster@localhost'
    'SCRIPT_FILENAME' => 'C:/xampp/htdocs/my_first_project/backend/web/index.php'
    'REMOTE_PORT' => '50654'
    'GATEWAY_INTERFACE' => 'CGI/1.1'
    'SERVER_PROTOCOL' => 'HTTP/1.1'
    'REQUEST_METHOD' => 'GET'
    'QUERY_STRING' => 'r=comment%2Fcreate&id=5'
    'REQUEST_URI' => '/my_first_project/backend/web/index.php?r=comment%2Fcreate&id=5'
    'SCRIPT_NAME' => '/my_first_project/backend/web/index.php'
    'PHP_SELF' => '/my_first_project/backend/web/index.php'
    'REQUEST_TIME_FLOAT' => 1491808409.499
    'REQUEST_TIME' => 1491808409
]
2017-04-10 09:14:09 [::1][2][ocapqr5qgv09ionkbionbf547f][error][yii\web\HttpException:400] yii\web\BadRequestHttpException: Missing required parameters: id_comment in C:\xampp\htdocs\my_first_project\vendor\yiisoft\yii2\web\Controller.php:149
Stack trace:
#0 C:\xampp\htdocs\my_first_project\vendor\yiisoft\yii2\base\InlineAction.php(51): yii\web\Controller->bindActionParams(Object(yii\base\InlineAction), Array)
#1 C:\xampp\htdocs\my_first_project\vendor\yiisoft\yii2\base\Controller.php(156): yii\base\InlineAction->runWithParams(Array)
#2 C:\xampp\htdocs\my_first_project\vendor\yiisoft\yii2\base\Module.php(523): yii\base\Controller->runAction('create', Array)
#3 C:\xampp\htdocs\my_first_project\vendor\yiisoft\yii2\web\Application.php(102): yii\base\Module->runAction('comment/create', Array)
#4 C:\xampp\htdocs\my_first_project\vendor\yiisoft\yii2\base\Application.php(380): yii\web\Application->handleRequest(Object(yii\web\Request))
#5 C:\xampp\htdocs\my_first_project\backend\web\index.php(17): yii\base\Application->run()
#6 {main}
2017-04-10 09:14:09 [::1][2][ocapqr5qgv09ionkbionbf547f][info][application] $_GET = [
    'r' => 'comment/create'
    'id' => '5'
]

$_COOKIE = [
    '_identity-frontend' => '0cae966fd559089f9ace47d1a2ea5c6406c8e024f36e82c8327d6603adb72aeaa:2:{i:0;s:18:\"_identity-frontend\";i:1;s:46:\"[2,\"1SNgG1qkakmN2Frp80Qr1SX2kgRhIH88\",2592000]\";}'
    'advanced-backend' => 'ocapqr5qgv09ionkbionbf547f'
    '_csrf-backend' => '106541c7716ce6243ffe7fcfaf136b2a6a12ae438d98e6f746d58b64bcb13ed8a:2:{i:0;s:13:\"_csrf-backend\";i:1;s:32:\"oFrjDE6vI0vSHT2i1W4CYRO-RckaEjk2\";}'
    '_identity-backend' => 'c0d1afe5c2d610f9a90e14a0fab01645b813d345cb63ec03c8e2cb965d6dd833a:2:{i:0;s:17:\"_identity-backend\";i:1;s:46:\"[2,\"1SNgG1qkakmN2Frp80Qr1SX2kgRhIH88\",2592000]\";}'
]

$_SESSION = [
    '__flash' => []
    '__id' => 2
]

$_SERVER = [
    'MIBDIRS' => 'C:/xampp/php/extras/mibs'
    'MYSQL_HOME' => '\\xampp\\mysql\\bin'
    'OPENSSL_CONF' => 'C:/xampp/apache/bin/openssl.cnf'
    'PHP_PEAR_SYSCONF_DIR' => '\\xampp\\php'
    'PHPRC' => '\\xampp\\php'
    'TMP' => '\\xampp\\tmp'
    'HTTP_HOST' => 'localhost'
    'HTTP_CONNECTION' => 'keep-alive'
    'HTTP_UPGRADE_INSECURE_REQUESTS' => '1'
    'HTTP_USER_AGENT' => 'Mozilla/5.0 (Windows NT 10.0; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/57.0.2987.133 Safari/537.36'
    'HTTP_ACCEPT' => 'text/html,application/xhtml+xml,application/xml;q=0.9,image/webp,*/*;q=0.8'
    'HTTP_REFERER' => 'http://localhost/my_first_project/backend/web/index.php?r=post%2Fview&id=3'
    'HTTP_ACCEPT_ENCODING' => 'gzip, deflate, sdch, br'
    'HTTP_ACCEPT_LANGUAGE' => 'sk-SK,sk;q=0.8,cs;q=0.6,en-US;q=0.4,en;q=0.2'
    'HTTP_COOKIE' => '_identity-frontend=0cae966fd559089f9ace47d1a2ea5c6406c8e024f36e82c8327d6603adb72aeaa%3A2%3A%7Bi%3A0%3Bs%3A18%3A%22_identity-frontend%22%3Bi%3A1%3Bs%3A46%3A%22%5B2%2C%221SNgG1qkakmN2Frp80Qr1SX2kgRhIH88%22%2C2592000%5D%22%3B%7D; advanced-backend=ocapqr5qgv09ionkbionbf547f; _csrf-backend=106541c7716ce6243ffe7fcfaf136b2a6a12ae438d98e6f746d58b64bcb13ed8a%3A2%3A%7Bi%3A0%3Bs%3A13%3A%22_csrf-backend%22%3Bi%3A1%3Bs%3A32%3A%22oFrjDE6vI0vSHT2i1W4CYRO-RckaEjk2%22%3B%7D; _identity-backend=c0d1afe5c2d610f9a90e14a0fab01645b813d345cb63ec03c8e2cb965d6dd833a%3A2%3A%7Bi%3A0%3Bs%3A17%3A%22_identity-backend%22%3Bi%3A1%3Bs%3A46%3A%22%5B2%2C%221SNgG1qkakmN2Frp80Qr1SX2kgRhIH88%22%2C2592000%5D%22%3B%7D'
    'PATH' => 'C:\\WINDOWS\\system32;C:\\WINDOWS;C:\\WINDOWS\\System32\\Wbem;C:\\WINDOWS\\System32\\WindowsPowerShell\\v1.0\\;C:\\xampp\\php;C:\\ProgramData\\ComposerSetup\\bin;C:\\Program Files\\Git\\cmd;C:\\Users\\Win10\\AppData\\Local\\Microsoft\\WindowsApps;C:\\Users\\Win10\\AppData\\Roaming\\Composer\\vendor\\bin'
    'SystemRoot' => 'C:\\WINDOWS'
    'COMSPEC' => 'C:\\WINDOWS\\system32\\cmd.exe'
    'PATHEXT' => '.COM;.EXE;.BAT;.CMD;.VBS;.VBE;.JS;.JSE;.WSF;.WSH;.MSC'
    'WINDIR' => 'C:\\WINDOWS'
    'SERVER_SIGNATURE' => '<address>Apache/2.4.25 (Win32) OpenSSL/1.0.2j PHP/7.1.1 Server at localhost Port 80</address>
'
    'SERVER_SOFTWARE' => 'Apache/2.4.25 (Win32) OpenSSL/1.0.2j PHP/7.1.1'
    'SERVER_NAME' => 'localhost'
    'SERVER_ADDR' => '::1'
    'SERVER_PORT' => '80'
    'REMOTE_ADDR' => '::1'
    'DOCUMENT_ROOT' => 'C:/xampp/htdocs'
    'REQUEST_SCHEME' => 'http'
    'CONTEXT_PREFIX' => ''
    'CONTEXT_DOCUMENT_ROOT' => 'C:/xampp/htdocs'
    'SERVER_ADMIN' => 'postmaster@localhost'
    'SCRIPT_FILENAME' => 'C:/xampp/htdocs/my_first_project/backend/web/index.php'
    'REMOTE_PORT' => '50664'
    'GATEWAY_INTERFACE' => 'CGI/1.1'
    'SERVER_PROTOCOL' => 'HTTP/1.1'
    'REQUEST_METHOD' => 'GET'
    'QUERY_STRING' => 'r=comment%2Fcreate&id=5'
    'REQUEST_URI' => '/my_first_project/backend/web/index.php?r=comment%2Fcreate&id=5'
    'SCRIPT_NAME' => '/my_first_project/backend/web/index.php'
    'PHP_SELF' => '/my_first_project/backend/web/index.php'
    'REQUEST_TIME_FLOAT' => 1491808449.243
    'REQUEST_TIME' => 1491808449
]
2017-04-10 09:14:47 [::1][2][ocapqr5qgv09ionkbionbf547f][error][yii\web\HttpException:400] yii\web\BadRequestHttpException: Missing required parameters: id_comment in C:\xampp\htdocs\my_first_project\vendor\yiisoft\yii2\web\Controller.php:149
Stack trace:
#0 C:\xampp\htdocs\my_first_project\vendor\yiisoft\yii2\base\InlineAction.php(51): yii\web\Controller->bindActionParams(Object(yii\base\InlineAction), Array)
#1 C:\xampp\htdocs\my_first_project\vendor\yiisoft\yii2\base\Controller.php(156): yii\base\InlineAction->runWithParams(Array)
#2 C:\xampp\htdocs\my_first_project\vendor\yiisoft\yii2\base\Module.php(523): yii\base\Controller->runAction('create', Array)
#3 C:\xampp\htdocs\my_first_project\vendor\yiisoft\yii2\web\Application.php(102): yii\base\Module->runAction('comment/create', Array)
#4 C:\xampp\htdocs\my_first_project\vendor\yiisoft\yii2\base\Application.php(380): yii\web\Application->handleRequest(Object(yii\web\Request))
#5 C:\xampp\htdocs\my_first_project\backend\web\index.php(17): yii\base\Application->run()
#6 {main}
2017-04-10 09:14:47 [::1][2][ocapqr5qgv09ionkbionbf547f][info][application] $_GET = [
    'r' => 'comment/create'
    'id' => '5'
]

$_COOKIE = [
    '_identity-frontend' => '0cae966fd559089f9ace47d1a2ea5c6406c8e024f36e82c8327d6603adb72aeaa:2:{i:0;s:18:\"_identity-frontend\";i:1;s:46:\"[2,\"1SNgG1qkakmN2Frp80Qr1SX2kgRhIH88\",2592000]\";}'
    'advanced-backend' => 'ocapqr5qgv09ionkbionbf547f'
    '_csrf-backend' => '106541c7716ce6243ffe7fcfaf136b2a6a12ae438d98e6f746d58b64bcb13ed8a:2:{i:0;s:13:\"_csrf-backend\";i:1;s:32:\"oFrjDE6vI0vSHT2i1W4CYRO-RckaEjk2\";}'
    '_identity-backend' => 'c0d1afe5c2d610f9a90e14a0fab01645b813d345cb63ec03c8e2cb965d6dd833a:2:{i:0;s:17:\"_identity-backend\";i:1;s:46:\"[2,\"1SNgG1qkakmN2Frp80Qr1SX2kgRhIH88\",2592000]\";}'
]

$_SESSION = [
    '__flash' => []
    '__id' => 2
]

$_SERVER = [
    'MIBDIRS' => 'C:/xampp/php/extras/mibs'
    'MYSQL_HOME' => '\\xampp\\mysql\\bin'
    'OPENSSL_CONF' => 'C:/xampp/apache/bin/openssl.cnf'
    'PHP_PEAR_SYSCONF_DIR' => '\\xampp\\php'
    'PHPRC' => '\\xampp\\php'
    'TMP' => '\\xampp\\tmp'
    'HTTP_HOST' => 'localhost'
    'HTTP_CONNECTION' => 'keep-alive'
    'HTTP_UPGRADE_INSECURE_REQUESTS' => '1'
    'HTTP_USER_AGENT' => 'Mozilla/5.0 (Windows NT 10.0; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/57.0.2987.133 Safari/537.36'
    'HTTP_ACCEPT' => 'text/html,application/xhtml+xml,application/xml;q=0.9,image/webp,*/*;q=0.8'
    'HTTP_REFERER' => 'http://localhost/my_first_project/backend/web/index.php?r=post%2Fview&id=3'
    'HTTP_ACCEPT_ENCODING' => 'gzip, deflate, sdch, br'
    'HTTP_ACCEPT_LANGUAGE' => 'sk-SK,sk;q=0.8,cs;q=0.6,en-US;q=0.4,en;q=0.2'
    'HTTP_COOKIE' => '_identity-frontend=0cae966fd559089f9ace47d1a2ea5c6406c8e024f36e82c8327d6603adb72aeaa%3A2%3A%7Bi%3A0%3Bs%3A18%3A%22_identity-frontend%22%3Bi%3A1%3Bs%3A46%3A%22%5B2%2C%221SNgG1qkakmN2Frp80Qr1SX2kgRhIH88%22%2C2592000%5D%22%3B%7D; advanced-backend=ocapqr5qgv09ionkbionbf547f; _csrf-backend=106541c7716ce6243ffe7fcfaf136b2a6a12ae438d98e6f746d58b64bcb13ed8a%3A2%3A%7Bi%3A0%3Bs%3A13%3A%22_csrf-backend%22%3Bi%3A1%3Bs%3A32%3A%22oFrjDE6vI0vSHT2i1W4CYRO-RckaEjk2%22%3B%7D; _identity-backend=c0d1afe5c2d610f9a90e14a0fab01645b813d345cb63ec03c8e2cb965d6dd833a%3A2%3A%7Bi%3A0%3Bs%3A17%3A%22_identity-backend%22%3Bi%3A1%3Bs%3A46%3A%22%5B2%2C%221SNgG1qkakmN2Frp80Qr1SX2kgRhIH88%22%2C2592000%5D%22%3B%7D'
    'PATH' => 'C:\\WINDOWS\\system32;C:\\WINDOWS;C:\\WINDOWS\\System32\\Wbem;C:\\WINDOWS\\System32\\WindowsPowerShell\\v1.0\\;C:\\xampp\\php;C:\\ProgramData\\ComposerSetup\\bin;C:\\Program Files\\Git\\cmd;C:\\Users\\Win10\\AppData\\Local\\Microsoft\\WindowsApps;C:\\Users\\Win10\\AppData\\Roaming\\Composer\\vendor\\bin'
    'SystemRoot' => 'C:\\WINDOWS'
    'COMSPEC' => 'C:\\WINDOWS\\system32\\cmd.exe'
    'PATHEXT' => '.COM;.EXE;.BAT;.CMD;.VBS;.VBE;.JS;.JSE;.WSF;.WSH;.MSC'
    'WINDIR' => 'C:\\WINDOWS'
    'SERVER_SIGNATURE' => '<address>Apache/2.4.25 (Win32) OpenSSL/1.0.2j PHP/7.1.1 Server at localhost Port 80</address>
'
    'SERVER_SOFTWARE' => 'Apache/2.4.25 (Win32) OpenSSL/1.0.2j PHP/7.1.1'
    'SERVER_NAME' => 'localhost'
    'SERVER_ADDR' => '::1'
    'SERVER_PORT' => '80'
    'REMOTE_ADDR' => '::1'
    'DOCUMENT_ROOT' => 'C:/xampp/htdocs'
    'REQUEST_SCHEME' => 'http'
    'CONTEXT_PREFIX' => ''
    'CONTEXT_DOCUMENT_ROOT' => 'C:/xampp/htdocs'
    'SERVER_ADMIN' => 'postmaster@localhost'
    'SCRIPT_FILENAME' => 'C:/xampp/htdocs/my_first_project/backend/web/index.php'
    'REMOTE_PORT' => '50670'
    'GATEWAY_INTERFACE' => 'CGI/1.1'
    'SERVER_PROTOCOL' => 'HTTP/1.1'
    'REQUEST_METHOD' => 'GET'
    'QUERY_STRING' => 'r=comment%2Fcreate&id=5'
    'REQUEST_URI' => '/my_first_project/backend/web/index.php?r=comment%2Fcreate&id=5'
    'SCRIPT_NAME' => '/my_first_project/backend/web/index.php'
    'PHP_SELF' => '/my_first_project/backend/web/index.php'
    'REQUEST_TIME_FLOAT' => 1491808487.755
    'REQUEST_TIME' => 1491808487
]
2017-04-10 09:15:30 [::1][2][ocapqr5qgv09ionkbionbf547f][error][yii\web\HttpException:405] yii\web\MethodNotAllowedHttpException: Method Not Allowed. This url can only handle the following request methods: POST. in C:\xampp\htdocs\my_first_project\vendor\yiisoft\yii2\filters\VerbFilter.php:105
Stack trace:
#0 [internal function]: yii\filters\VerbFilter->beforeAction(Object(yii\base\ActionEvent))
#1 C:\xampp\htdocs\my_first_project\vendor\yiisoft\yii2\base\Component.php(545): call_user_func(Array, Object(yii\base\ActionEvent))
#2 C:\xampp\htdocs\my_first_project\vendor\yiisoft\yii2\base\Controller.php(272): yii\base\Component->trigger('beforeAction', Object(yii\base\ActionEvent))
#3 C:\xampp\htdocs\my_first_project\vendor\yiisoft\yii2\web\Controller.php(164): yii\base\Controller->beforeAction(Object(yii\base\InlineAction))
#4 C:\xampp\htdocs\my_first_project\vendor\yiisoft\yii2\base\Controller.php(154): yii\web\Controller->beforeAction(Object(yii\base\InlineAction))
#5 C:\xampp\htdocs\my_first_project\vendor\yiisoft\yii2\base\Module.php(523): yii\base\Controller->runAction('delete', Array)
#6 C:\xampp\htdocs\my_first_project\vendor\yiisoft\yii2\web\Application.php(102): yii\base\Module->runAction('comment/delete', Array)
#7 C:\xampp\htdocs\my_first_project\vendor\yiisoft\yii2\base\Application.php(380): yii\web\Application->handleRequest(Object(yii\web\Request))
#8 C:\xampp\htdocs\my_first_project\backend\web\index.php(17): yii\base\Application->run()
#9 {main}
2017-04-10 09:15:30 [::1][2][ocapqr5qgv09ionkbionbf547f][info][application] $_GET = [
    'r' => 'comment/delete'
    'id' => '5'
]

$_COOKIE = [
    '_identity-frontend' => '0cae966fd559089f9ace47d1a2ea5c6406c8e024f36e82c8327d6603adb72aeaa:2:{i:0;s:18:\"_identity-frontend\";i:1;s:46:\"[2,\"1SNgG1qkakmN2Frp80Qr1SX2kgRhIH88\",2592000]\";}'
    'advanced-backend' => 'ocapqr5qgv09ionkbionbf547f'
    '_csrf-backend' => '106541c7716ce6243ffe7fcfaf136b2a6a12ae438d98e6f746d58b64bcb13ed8a:2:{i:0;s:13:\"_csrf-backend\";i:1;s:32:\"oFrjDE6vI0vSHT2i1W4CYRO-RckaEjk2\";}'
    '_identity-backend' => 'c0d1afe5c2d610f9a90e14a0fab01645b813d345cb63ec03c8e2cb965d6dd833a:2:{i:0;s:17:\"_identity-backend\";i:1;s:46:\"[2,\"1SNgG1qkakmN2Frp80Qr1SX2kgRhIH88\",2592000]\";}'
]

$_SESSION = [
    '__flash' => []
    '__id' => 2
]

$_SERVER = [
    'MIBDIRS' => 'C:/xampp/php/extras/mibs'
    'MYSQL_HOME' => '\\xampp\\mysql\\bin'
    'OPENSSL_CONF' => 'C:/xampp/apache/bin/openssl.cnf'
    'PHP_PEAR_SYSCONF_DIR' => '\\xampp\\php'
    'PHPRC' => '\\xampp\\php'
    'TMP' => '\\xampp\\tmp'
    'HTTP_HOST' => 'localhost'
    'HTTP_CONNECTION' => 'keep-alive'
    'HTTP_UPGRADE_INSECURE_REQUESTS' => '1'
    'HTTP_USER_AGENT' => 'Mozilla/5.0 (Windows NT 10.0; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/57.0.2987.133 Safari/537.36'
    'HTTP_ACCEPT' => 'text/html,application/xhtml+xml,application/xml;q=0.9,image/webp,*/*;q=0.8'
    'HTTP_REFERER' => 'http://localhost/my_first_project/backend/web/index.php?r=post%2Fview&id=3'
    'HTTP_ACCEPT_ENCODING' => 'gzip, deflate, sdch, br'
    'HTTP_ACCEPT_LANGUAGE' => 'sk-SK,sk;q=0.8,cs;q=0.6,en-US;q=0.4,en;q=0.2'
    'HTTP_COOKIE' => '_identity-frontend=0cae966fd559089f9ace47d1a2ea5c6406c8e024f36e82c8327d6603adb72aeaa%3A2%3A%7Bi%3A0%3Bs%3A18%3A%22_identity-frontend%22%3Bi%3A1%3Bs%3A46%3A%22%5B2%2C%221SNgG1qkakmN2Frp80Qr1SX2kgRhIH88%22%2C2592000%5D%22%3B%7D; advanced-backend=ocapqr5qgv09ionkbionbf547f; _csrf-backend=106541c7716ce6243ffe7fcfaf136b2a6a12ae438d98e6f746d58b64bcb13ed8a%3A2%3A%7Bi%3A0%3Bs%3A13%3A%22_csrf-backend%22%3Bi%3A1%3Bs%3A32%3A%22oFrjDE6vI0vSHT2i1W4CYRO-RckaEjk2%22%3B%7D; _identity-backend=c0d1afe5c2d610f9a90e14a0fab01645b813d345cb63ec03c8e2cb965d6dd833a%3A2%3A%7Bi%3A0%3Bs%3A17%3A%22_identity-backend%22%3Bi%3A1%3Bs%3A46%3A%22%5B2%2C%221SNgG1qkakmN2Frp80Qr1SX2kgRhIH88%22%2C2592000%5D%22%3B%7D'
    'PATH' => 'C:\\WINDOWS\\system32;C:\\WINDOWS;C:\\WINDOWS\\System32\\Wbem;C:\\WINDOWS\\System32\\WindowsPowerShell\\v1.0\\;C:\\xampp\\php;C:\\ProgramData\\ComposerSetup\\bin;C:\\Program Files\\Git\\cmd;C:\\Users\\Win10\\AppData\\Local\\Microsoft\\WindowsApps;C:\\Users\\Win10\\AppData\\Roaming\\Composer\\vendor\\bin'
    'SystemRoot' => 'C:\\WINDOWS'
    'COMSPEC' => 'C:\\WINDOWS\\system32\\cmd.exe'
    'PATHEXT' => '.COM;.EXE;.BAT;.CMD;.VBS;.VBE;.JS;.JSE;.WSF;.WSH;.MSC'
    'WINDIR' => 'C:\\WINDOWS'
    'SERVER_SIGNATURE' => '<address>Apache/2.4.25 (Win32) OpenSSL/1.0.2j PHP/7.1.1 Server at localhost Port 80</address>
'
    'SERVER_SOFTWARE' => 'Apache/2.4.25 (Win32) OpenSSL/1.0.2j PHP/7.1.1'
    'SERVER_NAME' => 'localhost'
    'SERVER_ADDR' => '::1'
    'SERVER_PORT' => '80'
    'REMOTE_ADDR' => '::1'
    'DOCUMENT_ROOT' => 'C:/xampp/htdocs'
    'REQUEST_SCHEME' => 'http'
    'CONTEXT_PREFIX' => ''
    'CONTEXT_DOCUMENT_ROOT' => 'C:/xampp/htdocs'
    'SERVER_ADMIN' => 'postmaster@localhost'
    'SCRIPT_FILENAME' => 'C:/xampp/htdocs/my_first_project/backend/web/index.php'
    'REMOTE_PORT' => '50680'
    'GATEWAY_INTERFACE' => 'CGI/1.1'
    'SERVER_PROTOCOL' => 'HTTP/1.1'
    'REQUEST_METHOD' => 'GET'
    'QUERY_STRING' => 'r=comment%2Fdelete&id=5'
    'REQUEST_URI' => '/my_first_project/backend/web/index.php?r=comment%2Fdelete&id=5'
    'SCRIPT_NAME' => '/my_first_project/backend/web/index.php'
    'PHP_SELF' => '/my_first_project/backend/web/index.php'
    'REQUEST_TIME_FLOAT' => 1491808530.115
    'REQUEST_TIME' => 1491808530
]
2017-04-10 09:52:05 [::1][2][ocapqr5qgv09ionkbionbf547f][error][yii\web\HttpException:405] yii\web\MethodNotAllowedHttpException: Method Not Allowed. This url can only handle the following request methods: POST. in C:\xampp\htdocs\my_first_project\vendor\yiisoft\yii2\filters\VerbFilter.php:105
Stack trace:
#0 [internal function]: yii\filters\VerbFilter->beforeAction(Object(yii\base\ActionEvent))
#1 C:\xampp\htdocs\my_first_project\vendor\yiisoft\yii2\base\Component.php(545): call_user_func(Array, Object(yii\base\ActionEvent))
#2 C:\xampp\htdocs\my_first_project\vendor\yiisoft\yii2\base\Controller.php(272): yii\base\Component->trigger('beforeAction', Object(yii\base\ActionEvent))
#3 C:\xampp\htdocs\my_first_project\vendor\yiisoft\yii2\web\Controller.php(164): yii\base\Controller->beforeAction(Object(yii\base\InlineAction))
#4 C:\xampp\htdocs\my_first_project\vendor\yiisoft\yii2\base\Controller.php(154): yii\web\Controller->beforeAction(Object(yii\base\InlineAction))
#5 C:\xampp\htdocs\my_first_project\vendor\yiisoft\yii2\base\Module.php(523): yii\base\Controller->runAction('delete', Array)
#6 C:\xampp\htdocs\my_first_project\vendor\yiisoft\yii2\web\Application.php(102): yii\base\Module->runAction('comment/delete', Array)
#7 C:\xampp\htdocs\my_first_project\vendor\yiisoft\yii2\base\Application.php(380): yii\web\Application->handleRequest(Object(yii\web\Request))
#8 C:\xampp\htdocs\my_first_project\backend\web\index.php(17): yii\base\Application->run()
#9 {main}
2017-04-10 09:52:05 [::1][2][ocapqr5qgv09ionkbionbf547f][info][application] $_GET = [
    'r' => 'comment/delete'
    'id' => '5'
]

$_COOKIE = [
    'advanced-backend' => 'ocapqr5qgv09ionkbionbf547f'
    '_csrf-backend' => '106541c7716ce6243ffe7fcfaf136b2a6a12ae438d98e6f746d58b64bcb13ed8a:2:{i:0;s:13:\"_csrf-backend\";i:1;s:32:\"oFrjDE6vI0vSHT2i1W4CYRO-RckaEjk2\";}'
    'advanced-frontend' => 'qolu9g2b2l5l25v3anavkh87o4'
    '_csrf-frontend' => 'c02a00c759b3da9e0c4471ffb359e93f3c781a709c70f504ffcee85e0e08c80aa:2:{i:0;s:14:\"_csrf-frontend\";i:1;s:32:\"H_MBy0eyRt9CA7QrM1DtVa88L7n2FYMu\";}'
    '_identity-backend' => 'c0d1afe5c2d610f9a90e14a0fab01645b813d345cb63ec03c8e2cb965d6dd833a:2:{i:0;s:17:\"_identity-backend\";i:1;s:46:\"[2,\"1SNgG1qkakmN2Frp80Qr1SX2kgRhIH88\",2592000]\";}'
    '_identity-frontend' => '0cae966fd559089f9ace47d1a2ea5c6406c8e024f36e82c8327d6603adb72aeaa:2:{i:0;s:18:\"_identity-frontend\";i:1;s:46:\"[2,\"1SNgG1qkakmN2Frp80Qr1SX2kgRhIH88\",2592000]\";}'
]

$_SESSION = [
    '__flash' => []
    '__id' => 2
]

$_SERVER = [
    'MIBDIRS' => 'C:/xampp/php/extras/mibs'
    'MYSQL_HOME' => '\\xampp\\mysql\\bin'
    'OPENSSL_CONF' => 'C:/xampp/apache/bin/openssl.cnf'
    'PHP_PEAR_SYSCONF_DIR' => '\\xampp\\php'
    'PHPRC' => '\\xampp\\php'
    'TMP' => '\\xampp\\tmp'
    'HTTP_HOST' => 'localhost'
    'HTTP_CONNECTION' => 'keep-alive'
    'HTTP_UPGRADE_INSECURE_REQUESTS' => '1'
    'HTTP_USER_AGENT' => 'Mozilla/5.0 (Windows NT 10.0; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/57.0.2987.133 Safari/537.36'
    'HTTP_ACCEPT' => 'text/html,application/xhtml+xml,application/xml;q=0.9,image/webp,*/*;q=0.8'
    'HTTP_REFERER' => 'http://localhost/my_first_project/backend/web/index.php?r=post%2Fview&id=3'
    'HTTP_ACCEPT_ENCODING' => 'gzip, deflate, sdch, br'
    'HTTP_ACCEPT_LANGUAGE' => 'sk-SK,sk;q=0.8,cs;q=0.6,en-US;q=0.4,en;q=0.2'
    'HTTP_COOKIE' => 'advanced-backend=ocapqr5qgv09ionkbionbf547f; _csrf-backend=106541c7716ce6243ffe7fcfaf136b2a6a12ae438d98e6f746d58b64bcb13ed8a%3A2%3A%7Bi%3A0%3Bs%3A13%3A%22_csrf-backend%22%3Bi%3A1%3Bs%3A32%3A%22oFrjDE6vI0vSHT2i1W4CYRO-RckaEjk2%22%3B%7D; advanced-frontend=qolu9g2b2l5l25v3anavkh87o4; _csrf-frontend=c02a00c759b3da9e0c4471ffb359e93f3c781a709c70f504ffcee85e0e08c80aa%3A2%3A%7Bi%3A0%3Bs%3A14%3A%22_csrf-frontend%22%3Bi%3A1%3Bs%3A32%3A%22H_MBy0eyRt9CA7QrM1DtVa88L7n2FYMu%22%3B%7D; _identity-backend=c0d1afe5c2d610f9a90e14a0fab01645b813d345cb63ec03c8e2cb965d6dd833a%3A2%3A%7Bi%3A0%3Bs%3A17%3A%22_identity-backend%22%3Bi%3A1%3Bs%3A46%3A%22%5B2%2C%221SNgG1qkakmN2Frp80Qr1SX2kgRhIH88%22%2C2592000%5D%22%3B%7D; _identity-frontend=0cae966fd559089f9ace47d1a2ea5c6406c8e024f36e82c8327d6603adb72aeaa%3A2%3A%7Bi%3A0%3Bs%3A18%3A%22_identity-frontend%22%3Bi%3A1%3Bs%3A46%3A%22%5B2%2C%221SNgG1qkakmN2Frp80Qr1SX2kgRhIH88%22%2C2592000%5D%22%3B%7D'
    'PATH' => 'C:\\WINDOWS\\system32;C:\\WINDOWS;C:\\WINDOWS\\System32\\Wbem;C:\\WINDOWS\\System32\\WindowsPowerShell\\v1.0\\;C:\\xampp\\php;C:\\ProgramData\\ComposerSetup\\bin;C:\\Program Files\\Git\\cmd;C:\\Users\\Win10\\AppData\\Local\\Microsoft\\WindowsApps;C:\\Users\\Win10\\AppData\\Roaming\\Composer\\vendor\\bin'
    'SystemRoot' => 'C:\\WINDOWS'
    'COMSPEC' => 'C:\\WINDOWS\\system32\\cmd.exe'
    'PATHEXT' => '.COM;.EXE;.BAT;.CMD;.VBS;.VBE;.JS;.JSE;.WSF;.WSH;.MSC'
    'WINDIR' => 'C:\\WINDOWS'
    'SERVER_SIGNATURE' => '<address>Apache/2.4.25 (Win32) OpenSSL/1.0.2j PHP/7.1.1 Server at localhost Port 80</address>
'
    'SERVER_SOFTWARE' => 'Apache/2.4.25 (Win32) OpenSSL/1.0.2j PHP/7.1.1'
    'SERVER_NAME' => 'localhost'
    'SERVER_ADDR' => '::1'
    'SERVER_PORT' => '80'
    'REMOTE_ADDR' => '::1'
    'DOCUMENT_ROOT' => 'C:/xampp/htdocs'
    'REQUEST_SCHEME' => 'http'
    'CONTEXT_PREFIX' => ''
    'CONTEXT_DOCUMENT_ROOT' => 'C:/xampp/htdocs'
    'SERVER_ADMIN' => 'postmaster@localhost'
    'SCRIPT_FILENAME' => 'C:/xampp/htdocs/my_first_project/backend/web/index.php'
    'REMOTE_PORT' => '51103'
    'GATEWAY_INTERFACE' => 'CGI/1.1'
    'SERVER_PROTOCOL' => 'HTTP/1.1'
    'REQUEST_METHOD' => 'GET'
    'QUERY_STRING' => 'r=comment%2Fdelete&id=5'
    'REQUEST_URI' => '/my_first_project/backend/web/index.php?r=comment%2Fdelete&id=5'
    'SCRIPT_NAME' => '/my_first_project/backend/web/index.php'
    'PHP_SELF' => '/my_first_project/backend/web/index.php'
    'REQUEST_TIME_FLOAT' => 1491810725.053
    'REQUEST_TIME' => 1491810725
]
2017-04-10 09:52:13 [::1][2][ocapqr5qgv09ionkbionbf547f][error][yii\web\HttpException:405] yii\web\MethodNotAllowedHttpException: Method Not Allowed. This url can only handle the following request methods: POST. in C:\xampp\htdocs\my_first_project\vendor\yiisoft\yii2\filters\VerbFilter.php:105
Stack trace:
#0 [internal function]: yii\filters\VerbFilter->beforeAction(Object(yii\base\ActionEvent))
#1 C:\xampp\htdocs\my_first_project\vendor\yiisoft\yii2\base\Component.php(545): call_user_func(Array, Object(yii\base\ActionEvent))
#2 C:\xampp\htdocs\my_first_project\vendor\yiisoft\yii2\base\Controller.php(272): yii\base\Component->trigger('beforeAction', Object(yii\base\ActionEvent))
#3 C:\xampp\htdocs\my_first_project\vendor\yiisoft\yii2\web\Controller.php(164): yii\base\Controller->beforeAction(Object(yii\base\InlineAction))
#4 C:\xampp\htdocs\my_first_project\vendor\yiisoft\yii2\base\Controller.php(154): yii\web\Controller->beforeAction(Object(yii\base\InlineAction))
#5 C:\xampp\htdocs\my_first_project\vendor\yiisoft\yii2\base\Module.php(523): yii\base\Controller->runAction('delete', Array)
#6 C:\xampp\htdocs\my_first_project\vendor\yiisoft\yii2\web\Application.php(102): yii\base\Module->runAction('comment/delete', Array)
#7 C:\xampp\htdocs\my_first_project\vendor\yiisoft\yii2\base\Application.php(380): yii\web\Application->handleRequest(Object(yii\web\Request))
#8 C:\xampp\htdocs\my_first_project\backend\web\index.php(17): yii\base\Application->run()
#9 {main}
2017-04-10 09:52:13 [::1][2][ocapqr5qgv09ionkbionbf547f][info][application] $_GET = [
    'r' => 'comment/delete'
    'id' => '7'
]

$_COOKIE = [
    'advanced-backend' => 'ocapqr5qgv09ionkbionbf547f'
    '_csrf-backend' => '106541c7716ce6243ffe7fcfaf136b2a6a12ae438d98e6f746d58b64bcb13ed8a:2:{i:0;s:13:\"_csrf-backend\";i:1;s:32:\"oFrjDE6vI0vSHT2i1W4CYRO-RckaEjk2\";}'
    'advanced-frontend' => 'qolu9g2b2l5l25v3anavkh87o4'
    '_csrf-frontend' => 'c02a00c759b3da9e0c4471ffb359e93f3c781a709c70f504ffcee85e0e08c80aa:2:{i:0;s:14:\"_csrf-frontend\";i:1;s:32:\"H_MBy0eyRt9CA7QrM1DtVa88L7n2FYMu\";}'
    '_identity-frontend' => '0cae966fd559089f9ace47d1a2ea5c6406c8e024f36e82c8327d6603adb72aeaa:2:{i:0;s:18:\"_identity-frontend\";i:1;s:46:\"[2,\"1SNgG1qkakmN2Frp80Qr1SX2kgRhIH88\",2592000]\";}'
    '_identity-backend' => 'c0d1afe5c2d610f9a90e14a0fab01645b813d345cb63ec03c8e2cb965d6dd833a:2:{i:0;s:17:\"_identity-backend\";i:1;s:46:\"[2,\"1SNgG1qkakmN2Frp80Qr1SX2kgRhIH88\",2592000]\";}'
]

$_SESSION = [
    '__flash' => []
    '__id' => 2
]

$_SERVER = [
    'MIBDIRS' => 'C:/xampp/php/extras/mibs'
    'MYSQL_HOME' => '\\xampp\\mysql\\bin'
    'OPENSSL_CONF' => 'C:/xampp/apache/bin/openssl.cnf'
    'PHP_PEAR_SYSCONF_DIR' => '\\xampp\\php'
    'PHPRC' => '\\xampp\\php'
    'TMP' => '\\xampp\\tmp'
    'HTTP_HOST' => 'localhost'
    'HTTP_CONNECTION' => 'keep-alive'
    'HTTP_UPGRADE_INSECURE_REQUESTS' => '1'
    'HTTP_USER_AGENT' => 'Mozilla/5.0 (Windows NT 10.0; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/57.0.2987.133 Safari/537.36'
    'HTTP_ACCEPT' => 'text/html,application/xhtml+xml,application/xml;q=0.9,image/webp,*/*;q=0.8'
    'HTTP_REFERER' => 'http://localhost/my_first_project/backend/web/index.php?r=post%2Fview&id=3'
    'HTTP_ACCEPT_ENCODING' => 'gzip, deflate, sdch, br'
    'HTTP_ACCEPT_LANGUAGE' => 'sk-SK,sk;q=0.8,cs;q=0.6,en-US;q=0.4,en;q=0.2'
    'HTTP_COOKIE' => 'advanced-backend=ocapqr5qgv09ionkbionbf547f; _csrf-backend=106541c7716ce6243ffe7fcfaf136b2a6a12ae438d98e6f746d58b64bcb13ed8a%3A2%3A%7Bi%3A0%3Bs%3A13%3A%22_csrf-backend%22%3Bi%3A1%3Bs%3A32%3A%22oFrjDE6vI0vSHT2i1W4CYRO-RckaEjk2%22%3B%7D; advanced-frontend=qolu9g2b2l5l25v3anavkh87o4; _csrf-frontend=c02a00c759b3da9e0c4471ffb359e93f3c781a709c70f504ffcee85e0e08c80aa%3A2%3A%7Bi%3A0%3Bs%3A14%3A%22_csrf-frontend%22%3Bi%3A1%3Bs%3A32%3A%22H_MBy0eyRt9CA7QrM1DtVa88L7n2FYMu%22%3B%7D; _identity-frontend=0cae966fd559089f9ace47d1a2ea5c6406c8e024f36e82c8327d6603adb72aeaa%3A2%3A%7Bi%3A0%3Bs%3A18%3A%22_identity-frontend%22%3Bi%3A1%3Bs%3A46%3A%22%5B2%2C%221SNgG1qkakmN2Frp80Qr1SX2kgRhIH88%22%2C2592000%5D%22%3B%7D; _identity-backend=c0d1afe5c2d610f9a90e14a0fab01645b813d345cb63ec03c8e2cb965d6dd833a%3A2%3A%7Bi%3A0%3Bs%3A17%3A%22_identity-backend%22%3Bi%3A1%3Bs%3A46%3A%22%5B2%2C%221SNgG1qkakmN2Frp80Qr1SX2kgRhIH88%22%2C2592000%5D%22%3B%7D'
    'PATH' => 'C:\\WINDOWS\\system32;C:\\WINDOWS;C:\\WINDOWS\\System32\\Wbem;C:\\WINDOWS\\System32\\WindowsPowerShell\\v1.0\\;C:\\xampp\\php;C:\\ProgramData\\ComposerSetup\\bin;C:\\Program Files\\Git\\cmd;C:\\Users\\Win10\\AppData\\Local\\Microsoft\\WindowsApps;C:\\Users\\Win10\\AppData\\Roaming\\Composer\\vendor\\bin'
    'SystemRoot' => 'C:\\WINDOWS'
    'COMSPEC' => 'C:\\WINDOWS\\system32\\cmd.exe'
    'PATHEXT' => '.COM;.EXE;.BAT;.CMD;.VBS;.VBE;.JS;.JSE;.WSF;.WSH;.MSC'
    'WINDIR' => 'C:\\WINDOWS'
    'SERVER_SIGNATURE' => '<address>Apache/2.4.25 (Win32) OpenSSL/1.0.2j PHP/7.1.1 Server at localhost Port 80</address>
'
    'SERVER_SOFTWARE' => 'Apache/2.4.25 (Win32) OpenSSL/1.0.2j PHP/7.1.1'
    'SERVER_NAME' => 'localhost'
    'SERVER_ADDR' => '::1'
    'SERVER_PORT' => '80'
    'REMOTE_ADDR' => '::1'
    'DOCUMENT_ROOT' => 'C:/xampp/htdocs'
    'REQUEST_SCHEME' => 'http'
    'CONTEXT_PREFIX' => ''
    'CONTEXT_DOCUMENT_ROOT' => 'C:/xampp/htdocs'
    'SERVER_ADMIN' => 'postmaster@localhost'
    'SCRIPT_FILENAME' => 'C:/xampp/htdocs/my_first_project/backend/web/index.php'
    'REMOTE_PORT' => '51107'
    'GATEWAY_INTERFACE' => 'CGI/1.1'
    'SERVER_PROTOCOL' => 'HTTP/1.1'
    'REQUEST_METHOD' => 'GET'
    'QUERY_STRING' => 'r=comment%2Fdelete&id=7'
    'REQUEST_URI' => '/my_first_project/backend/web/index.php?r=comment%2Fdelete&id=7'
    'SCRIPT_NAME' => '/my_first_project/backend/web/index.php'
    'PHP_SELF' => '/my_first_project/backend/web/index.php'
    'REQUEST_TIME_FLOAT' => 1491810733.556
    'REQUEST_TIME' => 1491810733
]
2017-04-10 09:57:41 [::1][-][-][error][yii\base\UnknownPropertyException] yii\base\UnknownPropertyException: Getting unknown property: common\models\Post::id_comment in C:\xampp\htdocs\my_first_project\vendor\yiisoft\yii2\base\Component.php:147
Stack trace:
#0 C:\xampp\htdocs\my_first_project\vendor\yiisoft\yii2\db\BaseActiveRecord.php(286): yii\base\Component->__get('id_comment')
#1 C:\xampp\htdocs\my_first_project\backend\views\post\view.php(65): yii\db\BaseActiveRecord->__get('id_comment')
#2 C:\xampp\htdocs\my_first_project\vendor\yiisoft\yii2\base\View.php(328): require('C:\\xampp\\htdocs...')
#3 C:\xampp\htdocs\my_first_project\vendor\yiisoft\yii2\base\View.php(250): yii\base\View->renderPhpFile('C:\\xampp\\htdocs...', Array)
#4 C:\xampp\htdocs\my_first_project\vendor\yiisoft\yii2\base\View.php(152): yii\base\View->renderFile('C:\\xampp\\htdocs...', Array, Object(backend\controllers\PostController))
#5 C:\xampp\htdocs\my_first_project\vendor\yiisoft\yii2\base\Controller.php(381): yii\base\View->render('view', Array, Object(backend\controllers\PostController))
#6 C:\xampp\htdocs\my_first_project\backend\controllers\PostController.php(55): yii\base\Controller->render('view', Array)
#7 [internal function]: backend\controllers\PostController->actionView('3')
#8 C:\xampp\htdocs\my_first_project\vendor\yiisoft\yii2\base\InlineAction.php(57): call_user_func_array(Array, Array)
#9 C:\xampp\htdocs\my_first_project\vendor\yiisoft\yii2\base\Controller.php(156): yii\base\InlineAction->runWithParams(Array)
#10 C:\xampp\htdocs\my_first_project\vendor\yiisoft\yii2\base\Module.php(523): yii\base\Controller->runAction('view', Array)
#11 C:\xampp\htdocs\my_first_project\vendor\yiisoft\yii2\web\Application.php(102): yii\base\Module->runAction('post/view', Array)
#12 C:\xampp\htdocs\my_first_project\vendor\yiisoft\yii2\base\Application.php(380): yii\web\Application->handleRequest(Object(yii\web\Request))
#13 C:\xampp\htdocs\my_first_project\backend\web\index.php(17): yii\base\Application->run()
#14 {main}
2017-04-10 09:57:41 [::1][-][-][info][application] $_GET = [
    'r' => 'post/view'
    'id' => '3'
]

$_COOKIE = [
    'advanced-backend' => 'ocapqr5qgv09ionkbionbf547f'
    '_csrf-backend' => '106541c7716ce6243ffe7fcfaf136b2a6a12ae438d98e6f746d58b64bcb13ed8a:2:{i:0;s:13:\"_csrf-backend\";i:1;s:32:\"oFrjDE6vI0vSHT2i1W4CYRO-RckaEjk2\";}'
    'advanced-frontend' => 'qolu9g2b2l5l25v3anavkh87o4'
    '_csrf-frontend' => 'c02a00c759b3da9e0c4471ffb359e93f3c781a709c70f504ffcee85e0e08c80aa:2:{i:0;s:14:\"_csrf-frontend\";i:1;s:32:\"H_MBy0eyRt9CA7QrM1DtVa88L7n2FYMu\";}'
    '_identity-frontend' => '0cae966fd559089f9ace47d1a2ea5c6406c8e024f36e82c8327d6603adb72aeaa:2:{i:0;s:18:\"_identity-frontend\";i:1;s:46:\"[2,\"1SNgG1qkakmN2Frp80Qr1SX2kgRhIH88\",2592000]\";}'
    '_identity-backend' => 'c0d1afe5c2d610f9a90e14a0fab01645b813d345cb63ec03c8e2cb965d6dd833a:2:{i:0;s:17:\"_identity-backend\";i:1;s:46:\"[2,\"1SNgG1qkakmN2Frp80Qr1SX2kgRhIH88\",2592000]\";}'
]

$_SERVER = [
    'MIBDIRS' => 'C:/xampp/php/extras/mibs'
    'MYSQL_HOME' => '\\xampp\\mysql\\bin'
    'OPENSSL_CONF' => 'C:/xampp/apache/bin/openssl.cnf'
    'PHP_PEAR_SYSCONF_DIR' => '\\xampp\\php'
    'PHPRC' => '\\xampp\\php'
    'TMP' => '\\xampp\\tmp'
    'HTTP_HOST' => 'localhost'
    'HTTP_CONNECTION' => 'keep-alive'
    'HTTP_UPGRADE_INSECURE_REQUESTS' => '1'
    'HTTP_USER_AGENT' => 'Mozilla/5.0 (Windows NT 10.0; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/57.0.2987.133 Safari/537.36'
    'HTTP_ACCEPT' => 'text/html,application/xhtml+xml,application/xml;q=0.9,image/webp,*/*;q=0.8'
    'HTTP_REFERER' => 'http://localhost/my_first_project/backend/web/index.php?r=post%2Findex'
    'HTTP_ACCEPT_ENCODING' => 'gzip, deflate, sdch, br'
    'HTTP_ACCEPT_LANGUAGE' => 'sk-SK,sk;q=0.8,cs;q=0.6,en-US;q=0.4,en;q=0.2'
    'HTTP_COOKIE' => 'advanced-backend=ocapqr5qgv09ionkbionbf547f; _csrf-backend=106541c7716ce6243ffe7fcfaf136b2a6a12ae438d98e6f746d58b64bcb13ed8a%3A2%3A%7Bi%3A0%3Bs%3A13%3A%22_csrf-backend%22%3Bi%3A1%3Bs%3A32%3A%22oFrjDE6vI0vSHT2i1W4CYRO-RckaEjk2%22%3B%7D; advanced-frontend=qolu9g2b2l5l25v3anavkh87o4; _csrf-frontend=c02a00c759b3da9e0c4471ffb359e93f3c781a709c70f504ffcee85e0e08c80aa%3A2%3A%7Bi%3A0%3Bs%3A14%3A%22_csrf-frontend%22%3Bi%3A1%3Bs%3A32%3A%22H_MBy0eyRt9CA7QrM1DtVa88L7n2FYMu%22%3B%7D; _identity-frontend=0cae966fd559089f9ace47d1a2ea5c6406c8e024f36e82c8327d6603adb72aeaa%3A2%3A%7Bi%3A0%3Bs%3A18%3A%22_identity-frontend%22%3Bi%3A1%3Bs%3A46%3A%22%5B2%2C%221SNgG1qkakmN2Frp80Qr1SX2kgRhIH88%22%2C2592000%5D%22%3B%7D; _identity-backend=c0d1afe5c2d610f9a90e14a0fab01645b813d345cb63ec03c8e2cb965d6dd833a%3A2%3A%7Bi%3A0%3Bs%3A17%3A%22_identity-backend%22%3Bi%3A1%3Bs%3A46%3A%22%5B2%2C%221SNgG1qkakmN2Frp80Qr1SX2kgRhIH88%22%2C2592000%5D%22%3B%7D'
    'PATH' => 'C:\\WINDOWS\\system32;C:\\WINDOWS;C:\\WINDOWS\\System32\\Wbem;C:\\WINDOWS\\System32\\WindowsPowerShell\\v1.0\\;C:\\xampp\\php;C:\\ProgramData\\ComposerSetup\\bin;C:\\Program Files\\Git\\cmd;C:\\Users\\Win10\\AppData\\Local\\Microsoft\\WindowsApps;C:\\Users\\Win10\\AppData\\Roaming\\Composer\\vendor\\bin'
    'SystemRoot' => 'C:\\WINDOWS'
    'COMSPEC' => 'C:\\WINDOWS\\system32\\cmd.exe'
    'PATHEXT' => '.COM;.EXE;.BAT;.CMD;.VBS;.VBE;.JS;.JSE;.WSF;.WSH;.MSC'
    'WINDIR' => 'C:\\WINDOWS'
    'SERVER_SIGNATURE' => '<address>Apache/2.4.25 (Win32) OpenSSL/1.0.2j PHP/7.1.1 Server at localhost Port 80</address>
'
    'SERVER_SOFTWARE' => 'Apache/2.4.25 (Win32) OpenSSL/1.0.2j PHP/7.1.1'
    'SERVER_NAME' => 'localhost'
    'SERVER_ADDR' => '::1'
    'SERVER_PORT' => '80'
    'REMOTE_ADDR' => '::1'
    'DOCUMENT_ROOT' => 'C:/xampp/htdocs'
    'REQUEST_SCHEME' => 'http'
    'CONTEXT_PREFIX' => ''
    'CONTEXT_DOCUMENT_ROOT' => 'C:/xampp/htdocs'
    'SERVER_ADMIN' => 'postmaster@localhost'
    'SCRIPT_FILENAME' => 'C:/xampp/htdocs/my_first_project/backend/web/index.php'
    'REMOTE_PORT' => '51137'
    'GATEWAY_INTERFACE' => 'CGI/1.1'
    'SERVER_PROTOCOL' => 'HTTP/1.1'
    'REQUEST_METHOD' => 'GET'
    'QUERY_STRING' => 'r=post%2Fview&id=3'
    'REQUEST_URI' => '/my_first_project/backend/web/index.php?r=post%2Fview&id=3'
    'SCRIPT_NAME' => '/my_first_project/backend/web/index.php'
    'PHP_SELF' => '/my_first_project/backend/web/index.php'
    'REQUEST_TIME_FLOAT' => 1491811061.116
    'REQUEST_TIME' => 1491811061
]
2017-04-10 09:57:41 [::1][2][-][error][yii\web\Session::open] session_start(): Cannot send session cache limiter - headers already sent (output started at C:\xampp\htdocs\my_first_project\vendor\yiisoft\yii2\web\Response.php:391)
2017-04-10 09:57:41 [::1][2][-][info][application] $_GET = [
    'r' => 'post/view'
    'id' => '3'
]

$_COOKIE = [
    'advanced-backend' => 'ocapqr5qgv09ionkbionbf547f'
    '_csrf-backend' => '106541c7716ce6243ffe7fcfaf136b2a6a12ae438d98e6f746d58b64bcb13ed8a:2:{i:0;s:13:\"_csrf-backend\";i:1;s:32:\"oFrjDE6vI0vSHT2i1W4CYRO-RckaEjk2\";}'
    'advanced-frontend' => 'qolu9g2b2l5l25v3anavkh87o4'
    '_csrf-frontend' => 'c02a00c759b3da9e0c4471ffb359e93f3c781a709c70f504ffcee85e0e08c80aa:2:{i:0;s:14:\"_csrf-frontend\";i:1;s:32:\"H_MBy0eyRt9CA7QrM1DtVa88L7n2FYMu\";}'
    '_identity-frontend' => '0cae966fd559089f9ace47d1a2ea5c6406c8e024f36e82c8327d6603adb72aeaa:2:{i:0;s:18:\"_identity-frontend\";i:1;s:46:\"[2,\"1SNgG1qkakmN2Frp80Qr1SX2kgRhIH88\",2592000]\";}'
    '_identity-backend' => 'c0d1afe5c2d610f9a90e14a0fab01645b813d345cb63ec03c8e2cb965d6dd833a:2:{i:0;s:17:\"_identity-backend\";i:1;s:46:\"[2,\"1SNgG1qkakmN2Frp80Qr1SX2kgRhIH88\",2592000]\";}'
]

$_SESSION = [
    '__flash' => []
    '__id' => 2
]

$_SERVER = [
    'MIBDIRS' => 'C:/xampp/php/extras/mibs'
    'MYSQL_HOME' => '\\xampp\\mysql\\bin'
    'OPENSSL_CONF' => 'C:/xampp/apache/bin/openssl.cnf'
    'PHP_PEAR_SYSCONF_DIR' => '\\xampp\\php'
    'PHPRC' => '\\xampp\\php'
    'TMP' => '\\xampp\\tmp'
    'HTTP_HOST' => 'localhost'
    'HTTP_CONNECTION' => 'keep-alive'
    'HTTP_UPGRADE_INSECURE_REQUESTS' => '1'
    'HTTP_USER_AGENT' => 'Mozilla/5.0 (Windows NT 10.0; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/57.0.2987.133 Safari/537.36'
    'HTTP_ACCEPT' => 'text/html,application/xhtml+xml,application/xml;q=0.9,image/webp,*/*;q=0.8'
    'HTTP_REFERER' => 'http://localhost/my_first_project/backend/web/index.php?r=post%2Findex'
    'HTTP_ACCEPT_ENCODING' => 'gzip, deflate, sdch, br'
    'HTTP_ACCEPT_LANGUAGE' => 'sk-SK,sk;q=0.8,cs;q=0.6,en-US;q=0.4,en;q=0.2'
    'HTTP_COOKIE' => 'advanced-backend=ocapqr5qgv09ionkbionbf547f; _csrf-backend=106541c7716ce6243ffe7fcfaf136b2a6a12ae438d98e6f746d58b64bcb13ed8a%3A2%3A%7Bi%3A0%3Bs%3A13%3A%22_csrf-backend%22%3Bi%3A1%3Bs%3A32%3A%22oFrjDE6vI0vSHT2i1W4CYRO-RckaEjk2%22%3B%7D; advanced-frontend=qolu9g2b2l5l25v3anavkh87o4; _csrf-frontend=c02a00c759b3da9e0c4471ffb359e93f3c781a709c70f504ffcee85e0e08c80aa%3A2%3A%7Bi%3A0%3Bs%3A14%3A%22_csrf-frontend%22%3Bi%3A1%3Bs%3A32%3A%22H_MBy0eyRt9CA7QrM1DtVa88L7n2FYMu%22%3B%7D; _identity-frontend=0cae966fd559089f9ace47d1a2ea5c6406c8e024f36e82c8327d6603adb72aeaa%3A2%3A%7Bi%3A0%3Bs%3A18%3A%22_identity-frontend%22%3Bi%3A1%3Bs%3A46%3A%22%5B2%2C%221SNgG1qkakmN2Frp80Qr1SX2kgRhIH88%22%2C2592000%5D%22%3B%7D; _identity-backend=c0d1afe5c2d610f9a90e14a0fab01645b813d345cb63ec03c8e2cb965d6dd833a%3A2%3A%7Bi%3A0%3Bs%3A17%3A%22_identity-backend%22%3Bi%3A1%3Bs%3A46%3A%22%5B2%2C%221SNgG1qkakmN2Frp80Qr1SX2kgRhIH88%22%2C2592000%5D%22%3B%7D'
    'PATH' => 'C:\\WINDOWS\\system32;C:\\WINDOWS;C:\\WINDOWS\\System32\\Wbem;C:\\WINDOWS\\System32\\WindowsPowerShell\\v1.0\\;C:\\xampp\\php;C:\\ProgramData\\ComposerSetup\\bin;C:\\Program Files\\Git\\cmd;C:\\Users\\Win10\\AppData\\Local\\Microsoft\\WindowsApps;C:\\Users\\Win10\\AppData\\Roaming\\Composer\\vendor\\bin'
    'SystemRoot' => 'C:\\WINDOWS'
    'COMSPEC' => 'C:\\WINDOWS\\system32\\cmd.exe'
    'PATHEXT' => '.COM;.EXE;.BAT;.CMD;.VBS;.VBE;.JS;.JSE;.WSF;.WSH;.MSC'
    'WINDIR' => 'C:\\WINDOWS'
    'SERVER_SIGNATURE' => '<address>Apache/2.4.25 (Win32) OpenSSL/1.0.2j PHP/7.1.1 Server at localhost Port 80</address>
'
    'SERVER_SOFTWARE' => 'Apache/2.4.25 (Win32) OpenSSL/1.0.2j PHP/7.1.1'
    'SERVER_NAME' => 'localhost'
    'SERVER_ADDR' => '::1'
    'SERVER_PORT' => '80'
    'REMOTE_ADDR' => '::1'
    'DOCUMENT_ROOT' => 'C:/xampp/htdocs'
    'REQUEST_SCHEME' => 'http'
    'CONTEXT_PREFIX' => ''
    'CONTEXT_DOCUMENT_ROOT' => 'C:/xampp/htdocs'
    'SERVER_ADMIN' => 'postmaster@localhost'
    'SCRIPT_FILENAME' => 'C:/xampp/htdocs/my_first_project/backend/web/index.php'
    'REMOTE_PORT' => '51137'
    'GATEWAY_INTERFACE' => 'CGI/1.1'
    'SERVER_PROTOCOL' => 'HTTP/1.1'
    'REQUEST_METHOD' => 'GET'
    'QUERY_STRING' => 'r=post%2Fview&id=3'
    'REQUEST_URI' => '/my_first_project/backend/web/index.php?r=post%2Fview&id=3'
    'SCRIPT_NAME' => '/my_first_project/backend/web/index.php'
    'PHP_SELF' => '/my_first_project/backend/web/index.php'
    'REQUEST_TIME_FLOAT' => 1491811061.116
    'REQUEST_TIME' => 1491811061
]
2017-04-10 09:58:47 [::1][2][ocapqr5qgv09ionkbionbf547f][error][yii\web\HttpException:404] yii\web\NotFoundHttpException: The requested page does not exist. in C:\xampp\htdocs\my_first_project\backend\controllers\CommentController.php:130
Stack trace:
#0 C:\xampp\htdocs\my_first_project\backend\controllers\CommentController.php(113): backend\controllers\CommentController->findModel('3')
#1 [internal function]: backend\controllers\CommentController->actionDelete('3')
#2 C:\xampp\htdocs\my_first_project\vendor\yiisoft\yii2\base\InlineAction.php(57): call_user_func_array(Array, Array)
#3 C:\xampp\htdocs\my_first_project\vendor\yiisoft\yii2\base\Controller.php(156): yii\base\InlineAction->runWithParams(Array)
#4 C:\xampp\htdocs\my_first_project\vendor\yiisoft\yii2\base\Module.php(523): yii\base\Controller->runAction('delete', Array)
#5 C:\xampp\htdocs\my_first_project\vendor\yiisoft\yii2\web\Application.php(102): yii\base\Module->runAction('comment/delete', Array)
#6 C:\xampp\htdocs\my_first_project\vendor\yiisoft\yii2\base\Application.php(380): yii\web\Application->handleRequest(Object(yii\web\Request))
#7 C:\xampp\htdocs\my_first_project\backend\web\index.php(17): yii\base\Application->run()
#8 {main}
2017-04-10 09:58:47 [::1][2][ocapqr5qgv09ionkbionbf547f][info][application] $_GET = [
    'r' => 'comment/delete'
    'id' => '3'
]

$_POST = [
    '_csrf-backend' => 'YmpFX0xqeUkNLDc1CC9PPytaMwwEPksgUz1xHBU4NmQwCS4.CQASew=='
]

$_COOKIE = [
    'advanced-backend' => 'ocapqr5qgv09ionkbionbf547f'
    '_csrf-backend' => '106541c7716ce6243ffe7fcfaf136b2a6a12ae438d98e6f746d58b64bcb13ed8a:2:{i:0;s:13:\"_csrf-backend\";i:1;s:32:\"oFrjDE6vI0vSHT2i1W4CYRO-RckaEjk2\";}'
    'advanced-frontend' => 'qolu9g2b2l5l25v3anavkh87o4'
    '_csrf-frontend' => 'c02a00c759b3da9e0c4471ffb359e93f3c781a709c70f504ffcee85e0e08c80aa:2:{i:0;s:14:\"_csrf-frontend\";i:1;s:32:\"H_MBy0eyRt9CA7QrM1DtVa88L7n2FYMu\";}'
    '_identity-frontend' => '0cae966fd559089f9ace47d1a2ea5c6406c8e024f36e82c8327d6603adb72aeaa:2:{i:0;s:18:\"_identity-frontend\";i:1;s:46:\"[2,\"1SNgG1qkakmN2Frp80Qr1SX2kgRhIH88\",2592000]\";}'
    '_identity-backend' => 'c0d1afe5c2d610f9a90e14a0fab01645b813d345cb63ec03c8e2cb965d6dd833a:2:{i:0;s:17:\"_identity-backend\";i:1;s:46:\"[2,\"1SNgG1qkakmN2Frp80Qr1SX2kgRhIH88\",2592000]\";}'
]

$_SESSION = [
    '__flash' => []
    '__id' => 2
]

$_SERVER = [
    'MIBDIRS' => 'C:/xampp/php/extras/mibs'
    'MYSQL_HOME' => '\\xampp\\mysql\\bin'
    'OPENSSL_CONF' => 'C:/xampp/apache/bin/openssl.cnf'
    'PHP_PEAR_SYSCONF_DIR' => '\\xampp\\php'
    'PHPRC' => '\\xampp\\php'
    'TMP' => '\\xampp\\tmp'
    'HTTP_HOST' => 'localhost'
    'HTTP_CONNECTION' => 'keep-alive'
    'CONTENT_LENGTH' => '74'
    'HTTP_CACHE_CONTROL' => 'max-age=0'
    'HTTP_ORIGIN' => 'http://localhost'
    'HTTP_UPGRADE_INSECURE_REQUESTS' => '1'
    'HTTP_USER_AGENT' => 'Mozilla/5.0 (Windows NT 10.0; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/57.0.2987.133 Safari/537.36'
    'CONTENT_TYPE' => 'application/x-www-form-urlencoded'
    'HTTP_ACCEPT' => 'text/html,application/xhtml+xml,application/xml;q=0.9,image/webp,*/*;q=0.8'
    'HTTP_REFERER' => 'http://localhost/my_first_project/backend/web/index.php?r=post%2Fview&id=3'
    'HTTP_ACCEPT_ENCODING' => 'gzip, deflate, br'
    'HTTP_ACCEPT_LANGUAGE' => 'sk-SK,sk;q=0.8,cs;q=0.6,en-US;q=0.4,en;q=0.2'
    'HTTP_COOKIE' => 'advanced-backend=ocapqr5qgv09ionkbionbf547f; _csrf-backend=106541c7716ce6243ffe7fcfaf136b2a6a12ae438d98e6f746d58b64bcb13ed8a%3A2%3A%7Bi%3A0%3Bs%3A13%3A%22_csrf-backend%22%3Bi%3A1%3Bs%3A32%3A%22oFrjDE6vI0vSHT2i1W4CYRO-RckaEjk2%22%3B%7D; advanced-frontend=qolu9g2b2l5l25v3anavkh87o4; _csrf-frontend=c02a00c759b3da9e0c4471ffb359e93f3c781a709c70f504ffcee85e0e08c80aa%3A2%3A%7Bi%3A0%3Bs%3A14%3A%22_csrf-frontend%22%3Bi%3A1%3Bs%3A32%3A%22H_MBy0eyRt9CA7QrM1DtVa88L7n2FYMu%22%3B%7D; _identity-frontend=0cae966fd559089f9ace47d1a2ea5c6406c8e024f36e82c8327d6603adb72aeaa%3A2%3A%7Bi%3A0%3Bs%3A18%3A%22_identity-frontend%22%3Bi%3A1%3Bs%3A46%3A%22%5B2%2C%221SNgG1qkakmN2Frp80Qr1SX2kgRhIH88%22%2C2592000%5D%22%3B%7D; _identity-backend=c0d1afe5c2d610f9a90e14a0fab01645b813d345cb63ec03c8e2cb965d6dd833a%3A2%3A%7Bi%3A0%3Bs%3A17%3A%22_identity-backend%22%3Bi%3A1%3Bs%3A46%3A%22%5B2%2C%221SNgG1qkakmN2Frp80Qr1SX2kgRhIH88%22%2C2592000%5D%22%3B%7D'
    'PATH' => 'C:\\WINDOWS\\system32;C:\\WINDOWS;C:\\WINDOWS\\System32\\Wbem;C:\\WINDOWS\\System32\\WindowsPowerShell\\v1.0\\;C:\\xampp\\php;C:\\ProgramData\\ComposerSetup\\bin;C:\\Program Files\\Git\\cmd;C:\\Users\\Win10\\AppData\\Local\\Microsoft\\WindowsApps;C:\\Users\\Win10\\AppData\\Roaming\\Composer\\vendor\\bin'
    'SystemRoot' => 'C:\\WINDOWS'
    'COMSPEC' => 'C:\\WINDOWS\\system32\\cmd.exe'
    'PATHEXT' => '.COM;.EXE;.BAT;.CMD;.VBS;.VBE;.JS;.JSE;.WSF;.WSH;.MSC'
    'WINDIR' => 'C:\\WINDOWS'
    'SERVER_SIGNATURE' => '<address>Apache/2.4.25 (Win32) OpenSSL/1.0.2j PHP/7.1.1 Server at localhost Port 80</address>
'
    'SERVER_SOFTWARE' => 'Apache/2.4.25 (Win32) OpenSSL/1.0.2j PHP/7.1.1'
    'SERVER_NAME' => 'localhost'
    'SERVER_ADDR' => '::1'
    'SERVER_PORT' => '80'
    'REMOTE_ADDR' => '::1'
    'DOCUMENT_ROOT' => 'C:/xampp/htdocs'
    'REQUEST_SCHEME' => 'http'
    'CONTEXT_PREFIX' => ''
    'CONTEXT_DOCUMENT_ROOT' => 'C:/xampp/htdocs'
    'SERVER_ADMIN' => 'postmaster@localhost'
    'SCRIPT_FILENAME' => 'C:/xampp/htdocs/my_first_project/backend/web/index.php'
    'REMOTE_PORT' => '51158'
    'GATEWAY_INTERFACE' => 'CGI/1.1'
    'SERVER_PROTOCOL' => 'HTTP/1.1'
    'REQUEST_METHOD' => 'POST'
    'QUERY_STRING' => 'r=comment%2Fdelete&id=3'
    'REQUEST_URI' => '/my_first_project/backend/web/index.php?r=comment%2Fdelete&id=3'
    'SCRIPT_NAME' => '/my_first_project/backend/web/index.php'
    'PHP_SELF' => '/my_first_project/backend/web/index.php'
    'REQUEST_TIME_FLOAT' => 1491811127.804
    'REQUEST_TIME' => 1491811127
]
2017-04-10 09:59:12 [::1][-][-][error][yii\base\UnknownPropertyException] yii\base\UnknownPropertyException: Getting unknown property: common\models\Post::id_comment in C:\xampp\htdocs\my_first_project\vendor\yiisoft\yii2\base\Component.php:147
Stack trace:
#0 C:\xampp\htdocs\my_first_project\vendor\yiisoft\yii2\db\BaseActiveRecord.php(286): yii\base\Component->__get('id_comment')
#1 C:\xampp\htdocs\my_first_project\backend\views\post\view.php(65): yii\db\BaseActiveRecord->__get('id_comment')
#2 C:\xampp\htdocs\my_first_project\vendor\yiisoft\yii2\base\View.php(328): require('C:\\xampp\\htdocs...')
#3 C:\xampp\htdocs\my_first_project\vendor\yiisoft\yii2\base\View.php(250): yii\base\View->renderPhpFile('C:\\xampp\\htdocs...', Array)
#4 C:\xampp\htdocs\my_first_project\vendor\yiisoft\yii2\base\View.php(152): yii\base\View->renderFile('C:\\xampp\\htdocs...', Array, Object(backend\controllers\PostController))
#5 C:\xampp\htdocs\my_first_project\vendor\yiisoft\yii2\base\Controller.php(381): yii\base\View->render('view', Array, Object(backend\controllers\PostController))
#6 C:\xampp\htdocs\my_first_project\backend\controllers\PostController.php(55): yii\base\Controller->render('view', Array)
#7 [internal function]: backend\controllers\PostController->actionView('3')
#8 C:\xampp\htdocs\my_first_project\vendor\yiisoft\yii2\base\InlineAction.php(57): call_user_func_array(Array, Array)
#9 C:\xampp\htdocs\my_first_project\vendor\yiisoft\yii2\base\Controller.php(156): yii\base\InlineAction->runWithParams(Array)
#10 C:\xampp\htdocs\my_first_project\vendor\yiisoft\yii2\base\Module.php(523): yii\base\Controller->runAction('view', Array)
#11 C:\xampp\htdocs\my_first_project\vendor\yiisoft\yii2\web\Application.php(102): yii\base\Module->runAction('post/view', Array)
#12 C:\xampp\htdocs\my_first_project\vendor\yiisoft\yii2\base\Application.php(380): yii\web\Application->handleRequest(Object(yii\web\Request))
#13 C:\xampp\htdocs\my_first_project\backend\web\index.php(17): yii\base\Application->run()
#14 {main}
2017-04-10 09:59:12 [::1][-][-][info][application] $_GET = [
    'r' => 'post/view'
    'id' => '3'
]

$_COOKIE = [
    'advanced-backend' => 'ocapqr5qgv09ionkbionbf547f'
    '_csrf-backend' => '106541c7716ce6243ffe7fcfaf136b2a6a12ae438d98e6f746d58b64bcb13ed8a:2:{i:0;s:13:\"_csrf-backend\";i:1;s:32:\"oFrjDE6vI0vSHT2i1W4CYRO-RckaEjk2\";}'
    'advanced-frontend' => 'qolu9g2b2l5l25v3anavkh87o4'
    '_csrf-frontend' => 'c02a00c759b3da9e0c4471ffb359e93f3c781a709c70f504ffcee85e0e08c80aa:2:{i:0;s:14:\"_csrf-frontend\";i:1;s:32:\"H_MBy0eyRt9CA7QrM1DtVa88L7n2FYMu\";}'
    '_identity-frontend' => '0cae966fd559089f9ace47d1a2ea5c6406c8e024f36e82c8327d6603adb72aeaa:2:{i:0;s:18:\"_identity-frontend\";i:1;s:46:\"[2,\"1SNgG1qkakmN2Frp80Qr1SX2kgRhIH88\",2592000]\";}'
    '_identity-backend' => 'c0d1afe5c2d610f9a90e14a0fab01645b813d345cb63ec03c8e2cb965d6dd833a:2:{i:0;s:17:\"_identity-backend\";i:1;s:46:\"[2,\"1SNgG1qkakmN2Frp80Qr1SX2kgRhIH88\",2592000]\";}'
]

$_SERVER = [
    'MIBDIRS' => 'C:/xampp/php/extras/mibs'
    'MYSQL_HOME' => '\\xampp\\mysql\\bin'
    'OPENSSL_CONF' => 'C:/xampp/apache/bin/openssl.cnf'
    'PHP_PEAR_SYSCONF_DIR' => '\\xampp\\php'
    'PHPRC' => '\\xampp\\php'
    'TMP' => '\\xampp\\tmp'
    'HTTP_HOST' => 'localhost'
    'HTTP_CONNECTION' => 'keep-alive'
    'HTTP_CACHE_CONTROL' => 'max-age=0'
    'HTTP_UPGRADE_INSECURE_REQUESTS' => '1'
    'HTTP_USER_AGENT' => 'Mozilla/5.0 (Windows NT 10.0; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/57.0.2987.133 Safari/537.36'
    'HTTP_ACCEPT' => 'text/html,application/xhtml+xml,application/xml;q=0.9,image/webp,*/*;q=0.8'
    'HTTP_REFERER' => 'http://localhost/my_first_project/backend/web/index.php?r=post%2Findex'
    'HTTP_ACCEPT_ENCODING' => 'gzip, deflate, sdch, br'
    'HTTP_ACCEPT_LANGUAGE' => 'sk-SK,sk;q=0.8,cs;q=0.6,en-US;q=0.4,en;q=0.2'
    'HTTP_COOKIE' => 'advanced-backend=ocapqr5qgv09ionkbionbf547f; _csrf-backend=106541c7716ce6243ffe7fcfaf136b2a6a12ae438d98e6f746d58b64bcb13ed8a%3A2%3A%7Bi%3A0%3Bs%3A13%3A%22_csrf-backend%22%3Bi%3A1%3Bs%3A32%3A%22oFrjDE6vI0vSHT2i1W4CYRO-RckaEjk2%22%3B%7D; advanced-frontend=qolu9g2b2l5l25v3anavkh87o4; _csrf-frontend=c02a00c759b3da9e0c4471ffb359e93f3c781a709c70f504ffcee85e0e08c80aa%3A2%3A%7Bi%3A0%3Bs%3A14%3A%22_csrf-frontend%22%3Bi%3A1%3Bs%3A32%3A%22H_MBy0eyRt9CA7QrM1DtVa88L7n2FYMu%22%3B%7D; _identity-frontend=0cae966fd559089f9ace47d1a2ea5c6406c8e024f36e82c8327d6603adb72aeaa%3A2%3A%7Bi%3A0%3Bs%3A18%3A%22_identity-frontend%22%3Bi%3A1%3Bs%3A46%3A%22%5B2%2C%221SNgG1qkakmN2Frp80Qr1SX2kgRhIH88%22%2C2592000%5D%22%3B%7D; _identity-backend=c0d1afe5c2d610f9a90e14a0fab01645b813d345cb63ec03c8e2cb965d6dd833a%3A2%3A%7Bi%3A0%3Bs%3A17%3A%22_identity-backend%22%3Bi%3A1%3Bs%3A46%3A%22%5B2%2C%221SNgG1qkakmN2Frp80Qr1SX2kgRhIH88%22%2C2592000%5D%22%3B%7D'
    'PATH' => 'C:\\WINDOWS\\system32;C:\\WINDOWS;C:\\WINDOWS\\System32\\Wbem;C:\\WINDOWS\\System32\\WindowsPowerShell\\v1.0\\;C:\\xampp\\php;C:\\ProgramData\\ComposerSetup\\bin;C:\\Program Files\\Git\\cmd;C:\\Users\\Win10\\AppData\\Local\\Microsoft\\WindowsApps;C:\\Users\\Win10\\AppData\\Roaming\\Composer\\vendor\\bin'
    'SystemRoot' => 'C:\\WINDOWS'
    'COMSPEC' => 'C:\\WINDOWS\\system32\\cmd.exe'
    'PATHEXT' => '.COM;.EXE;.BAT;.CMD;.VBS;.VBE;.JS;.JSE;.WSF;.WSH;.MSC'
    'WINDIR' => 'C:\\WINDOWS'
    'SERVER_SIGNATURE' => '<address>Apache/2.4.25 (Win32) OpenSSL/1.0.2j PHP/7.1.1 Server at localhost Port 80</address>
'
    'SERVER_SOFTWARE' => 'Apache/2.4.25 (Win32) OpenSSL/1.0.2j PHP/7.1.1'
    'SERVER_NAME' => 'localhost'
    'SERVER_ADDR' => '::1'
    'SERVER_PORT' => '80'
    'REMOTE_ADDR' => '::1'
    'DOCUMENT_ROOT' => 'C:/xampp/htdocs'
    'REQUEST_SCHEME' => 'http'
    'CONTEXT_PREFIX' => ''
    'CONTEXT_DOCUMENT_ROOT' => 'C:/xampp/htdocs'
    'SERVER_ADMIN' => 'postmaster@localhost'
    'SCRIPT_FILENAME' => 'C:/xampp/htdocs/my_first_project/backend/web/index.php'
    'REMOTE_PORT' => '51174'
    'GATEWAY_INTERFACE' => 'CGI/1.1'
    'SERVER_PROTOCOL' => 'HTTP/1.1'
    'REQUEST_METHOD' => 'GET'
    'QUERY_STRING' => 'r=post%2Fview&id=3'
    'REQUEST_URI' => '/my_first_project/backend/web/index.php?r=post%2Fview&id=3'
    'SCRIPT_NAME' => '/my_first_project/backend/web/index.php'
    'PHP_SELF' => '/my_first_project/backend/web/index.php'
    'REQUEST_TIME_FLOAT' => 1491811152.393
    'REQUEST_TIME' => 1491811152
]
2017-04-10 09:59:12 [::1][2][-][error][yii\web\Session::open] session_start(): Cannot send session cache limiter - headers already sent (output started at C:\xampp\htdocs\my_first_project\vendor\yiisoft\yii2\web\Response.php:391)
2017-04-10 09:59:12 [::1][2][-][info][application] $_GET = [
    'r' => 'post/view'
    'id' => '3'
]

$_COOKIE = [
    'advanced-backend' => 'ocapqr5qgv09ionkbionbf547f'
    '_csrf-backend' => '106541c7716ce6243ffe7fcfaf136b2a6a12ae438d98e6f746d58b64bcb13ed8a:2:{i:0;s:13:\"_csrf-backend\";i:1;s:32:\"oFrjDE6vI0vSHT2i1W4CYRO-RckaEjk2\";}'
    'advanced-frontend' => 'qolu9g2b2l5l25v3anavkh87o4'
    '_csrf-frontend' => 'c02a00c759b3da9e0c4471ffb359e93f3c781a709c70f504ffcee85e0e08c80aa:2:{i:0;s:14:\"_csrf-frontend\";i:1;s:32:\"H_MBy0eyRt9CA7QrM1DtVa88L7n2FYMu\";}'
    '_identity-frontend' => '0cae966fd559089f9ace47d1a2ea5c6406c8e024f36e82c8327d6603adb72aeaa:2:{i:0;s:18:\"_identity-frontend\";i:1;s:46:\"[2,\"1SNgG1qkakmN2Frp80Qr1SX2kgRhIH88\",2592000]\";}'
    '_identity-backend' => 'c0d1afe5c2d610f9a90e14a0fab01645b813d345cb63ec03c8e2cb965d6dd833a:2:{i:0;s:17:\"_identity-backend\";i:1;s:46:\"[2,\"1SNgG1qkakmN2Frp80Qr1SX2kgRhIH88\",2592000]\";}'
]

$_SESSION = [
    '__flash' => []
    '__id' => 2
]

$_SERVER = [
    'MIBDIRS' => 'C:/xampp/php/extras/mibs'
    'MYSQL_HOME' => '\\xampp\\mysql\\bin'
    'OPENSSL_CONF' => 'C:/xampp/apache/bin/openssl.cnf'
    'PHP_PEAR_SYSCONF_DIR' => '\\xampp\\php'
    'PHPRC' => '\\xampp\\php'
    'TMP' => '\\xampp\\tmp'
    'HTTP_HOST' => 'localhost'
    'HTTP_CONNECTION' => 'keep-alive'
    'HTTP_CACHE_CONTROL' => 'max-age=0'
    'HTTP_UPGRADE_INSECURE_REQUESTS' => '1'
    'HTTP_USER_AGENT' => 'Mozilla/5.0 (Windows NT 10.0; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/57.0.2987.133 Safari/537.36'
    'HTTP_ACCEPT' => 'text/html,application/xhtml+xml,application/xml;q=0.9,image/webp,*/*;q=0.8'
    'HTTP_REFERER' => 'http://localhost/my_first_project/backend/web/index.php?r=post%2Findex'
    'HTTP_ACCEPT_ENCODING' => 'gzip, deflate, sdch, br'
    'HTTP_ACCEPT_LANGUAGE' => 'sk-SK,sk;q=0.8,cs;q=0.6,en-US;q=0.4,en;q=0.2'
    'HTTP_COOKIE' => 'advanced-backend=ocapqr5qgv09ionkbionbf547f; _csrf-backend=106541c7716ce6243ffe7fcfaf136b2a6a12ae438d98e6f746d58b64bcb13ed8a%3A2%3A%7Bi%3A0%3Bs%3A13%3A%22_csrf-backend%22%3Bi%3A1%3Bs%3A32%3A%22oFrjDE6vI0vSHT2i1W4CYRO-RckaEjk2%22%3B%7D; advanced-frontend=qolu9g2b2l5l25v3anavkh87o4; _csrf-frontend=c02a00c759b3da9e0c4471ffb359e93f3c781a709c70f504ffcee85e0e08c80aa%3A2%3A%7Bi%3A0%3Bs%3A14%3A%22_csrf-frontend%22%3Bi%3A1%3Bs%3A32%3A%22H_MBy0eyRt9CA7QrM1DtVa88L7n2FYMu%22%3B%7D; _identity-frontend=0cae966fd559089f9ace47d1a2ea5c6406c8e024f36e82c8327d6603adb72aeaa%3A2%3A%7Bi%3A0%3Bs%3A18%3A%22_identity-frontend%22%3Bi%3A1%3Bs%3A46%3A%22%5B2%2C%221SNgG1qkakmN2Frp80Qr1SX2kgRhIH88%22%2C2592000%5D%22%3B%7D; _identity-backend=c0d1afe5c2d610f9a90e14a0fab01645b813d345cb63ec03c8e2cb965d6dd833a%3A2%3A%7Bi%3A0%3Bs%3A17%3A%22_identity-backend%22%3Bi%3A1%3Bs%3A46%3A%22%5B2%2C%221SNgG1qkakmN2Frp80Qr1SX2kgRhIH88%22%2C2592000%5D%22%3B%7D'
    'PATH' => 'C:\\WINDOWS\\system32;C:\\WINDOWS;C:\\WINDOWS\\System32\\Wbem;C:\\WINDOWS\\System32\\WindowsPowerShell\\v1.0\\;C:\\xampp\\php;C:\\ProgramData\\ComposerSetup\\bin;C:\\Program Files\\Git\\cmd;C:\\Users\\Win10\\AppData\\Local\\Microsoft\\WindowsApps;C:\\Users\\Win10\\AppData\\Roaming\\Composer\\vendor\\bin'
    'SystemRoot' => 'C:\\WINDOWS'
    'COMSPEC' => 'C:\\WINDOWS\\system32\\cmd.exe'
    'PATHEXT' => '.COM;.EXE;.BAT;.CMD;.VBS;.VBE;.JS;.JSE;.WSF;.WSH;.MSC'
    'WINDIR' => 'C:\\WINDOWS'
    'SERVER_SIGNATURE' => '<address>Apache/2.4.25 (Win32) OpenSSL/1.0.2j PHP/7.1.1 Server at localhost Port 80</address>
'
    'SERVER_SOFTWARE' => 'Apache/2.4.25 (Win32) OpenSSL/1.0.2j PHP/7.1.1'
    'SERVER_NAME' => 'localhost'
    'SERVER_ADDR' => '::1'
    'SERVER_PORT' => '80'
    'REMOTE_ADDR' => '::1'
    'DOCUMENT_ROOT' => 'C:/xampp/htdocs'
    'REQUEST_SCHEME' => 'http'
    'CONTEXT_PREFIX' => ''
    'CONTEXT_DOCUMENT_ROOT' => 'C:/xampp/htdocs'
    'SERVER_ADMIN' => 'postmaster@localhost'
    'SCRIPT_FILENAME' => 'C:/xampp/htdocs/my_first_project/backend/web/index.php'
    'REMOTE_PORT' => '51174'
    'GATEWAY_INTERFACE' => 'CGI/1.1'
    'SERVER_PROTOCOL' => 'HTTP/1.1'
    'REQUEST_METHOD' => 'GET'
    'QUERY_STRING' => 'r=post%2Fview&id=3'
    'REQUEST_URI' => '/my_first_project/backend/web/index.php?r=post%2Fview&id=3'
    'SCRIPT_NAME' => '/my_first_project/backend/web/index.php'
    'PHP_SELF' => '/my_first_project/backend/web/index.php'
    'REQUEST_TIME_FLOAT' => 1491811152.393
    'REQUEST_TIME' => 1491811152
]
2017-04-10 09:59:37 [::1][2][ocapqr5qgv09ionkbionbf547f][error][yii\web\HttpException:400] yii\web\BadRequestHttpException: Missing required parameters: id in C:\xampp\htdocs\my_first_project\vendor\yiisoft\yii2\web\Controller.php:149
Stack trace:
#0 C:\xampp\htdocs\my_first_project\vendor\yiisoft\yii2\base\InlineAction.php(51): yii\web\Controller->bindActionParams(Object(yii\base\InlineAction), Array)
#1 C:\xampp\htdocs\my_first_project\vendor\yiisoft\yii2\base\Controller.php(156): yii\base\InlineAction->runWithParams(Array)
#2 C:\xampp\htdocs\my_first_project\vendor\yiisoft\yii2\base\Module.php(523): yii\base\Controller->runAction('delete', Array)
#3 C:\xampp\htdocs\my_first_project\vendor\yiisoft\yii2\web\Application.php(102): yii\base\Module->runAction('comment/delete', Array)
#4 C:\xampp\htdocs\my_first_project\vendor\yiisoft\yii2\base\Application.php(380): yii\web\Application->handleRequest(Object(yii\web\Request))
#5 C:\xampp\htdocs\my_first_project\backend\web\index.php(17): yii\base\Application->run()
#6 {main}
2017-04-10 09:59:37 [::1][2][ocapqr5qgv09ionkbionbf547f][info][application] $_GET = [
    'r' => 'comment/delete'
    'id_comment' => '7'
]

$_POST = [
    '_csrf-backend' => 'SkNWRkh1amslBSQsDDBcHQNzIBUAIVgCexRiBREnJUYYID0nDR8BWQ=='
]

$_COOKIE = [
    'advanced-backend' => 'ocapqr5qgv09ionkbionbf547f'
    '_csrf-backend' => '106541c7716ce6243ffe7fcfaf136b2a6a12ae438d98e6f746d58b64bcb13ed8a:2:{i:0;s:13:\"_csrf-backend\";i:1;s:32:\"oFrjDE6vI0vSHT2i1W4CYRO-RckaEjk2\";}'
    'advanced-frontend' => 'qolu9g2b2l5l25v3anavkh87o4'
    '_csrf-frontend' => 'c02a00c759b3da9e0c4471ffb359e93f3c781a709c70f504ffcee85e0e08c80aa:2:{i:0;s:14:\"_csrf-frontend\";i:1;s:32:\"H_MBy0eyRt9CA7QrM1DtVa88L7n2FYMu\";}'
    '_identity-frontend' => '0cae966fd559089f9ace47d1a2ea5c6406c8e024f36e82c8327d6603adb72aeaa:2:{i:0;s:18:\"_identity-frontend\";i:1;s:46:\"[2,\"1SNgG1qkakmN2Frp80Qr1SX2kgRhIH88\",2592000]\";}'
    '_identity-backend' => 'c0d1afe5c2d610f9a90e14a0fab01645b813d345cb63ec03c8e2cb965d6dd833a:2:{i:0;s:17:\"_identity-backend\";i:1;s:46:\"[2,\"1SNgG1qkakmN2Frp80Qr1SX2kgRhIH88\",2592000]\";}'
]

$_SESSION = [
    '__flash' => []
    '__id' => 2
]

$_SERVER = [
    'MIBDIRS' => 'C:/xampp/php/extras/mibs'
    'MYSQL_HOME' => '\\xampp\\mysql\\bin'
    'OPENSSL_CONF' => 'C:/xampp/apache/bin/openssl.cnf'
    'PHP_PEAR_SYSCONF_DIR' => '\\xampp\\php'
    'PHPRC' => '\\xampp\\php'
    'TMP' => '\\xampp\\tmp'
    'HTTP_HOST' => 'localhost'
    'HTTP_CONNECTION' => 'keep-alive'
    'CONTENT_LENGTH' => '74'
    'HTTP_CACHE_CONTROL' => 'max-age=0'
    'HTTP_ORIGIN' => 'http://localhost'
    'HTTP_UPGRADE_INSECURE_REQUESTS' => '1'
    'HTTP_USER_AGENT' => 'Mozilla/5.0 (Windows NT 10.0; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/57.0.2987.133 Safari/537.36'
    'CONTENT_TYPE' => 'application/x-www-form-urlencoded'
    'HTTP_ACCEPT' => 'text/html,application/xhtml+xml,application/xml;q=0.9,image/webp,*/*;q=0.8'
    'HTTP_REFERER' => 'http://localhost/my_first_project/backend/web/index.php?r=post%2Fview&id=3'
    'HTTP_ACCEPT_ENCODING' => 'gzip, deflate, br'
    'HTTP_ACCEPT_LANGUAGE' => 'sk-SK,sk;q=0.8,cs;q=0.6,en-US;q=0.4,en;q=0.2'
    'HTTP_COOKIE' => 'advanced-backend=ocapqr5qgv09ionkbionbf547f; _csrf-backend=106541c7716ce6243ffe7fcfaf136b2a6a12ae438d98e6f746d58b64bcb13ed8a%3A2%3A%7Bi%3A0%3Bs%3A13%3A%22_csrf-backend%22%3Bi%3A1%3Bs%3A32%3A%22oFrjDE6vI0vSHT2i1W4CYRO-RckaEjk2%22%3B%7D; advanced-frontend=qolu9g2b2l5l25v3anavkh87o4; _csrf-frontend=c02a00c759b3da9e0c4471ffb359e93f3c781a709c70f504ffcee85e0e08c80aa%3A2%3A%7Bi%3A0%3Bs%3A14%3A%22_csrf-frontend%22%3Bi%3A1%3Bs%3A32%3A%22H_MBy0eyRt9CA7QrM1DtVa88L7n2FYMu%22%3B%7D; _identity-frontend=0cae966fd559089f9ace47d1a2ea5c6406c8e024f36e82c8327d6603adb72aeaa%3A2%3A%7Bi%3A0%3Bs%3A18%3A%22_identity-frontend%22%3Bi%3A1%3Bs%3A46%3A%22%5B2%2C%221SNgG1qkakmN2Frp80Qr1SX2kgRhIH88%22%2C2592000%5D%22%3B%7D; _identity-backend=c0d1afe5c2d610f9a90e14a0fab01645b813d345cb63ec03c8e2cb965d6dd833a%3A2%3A%7Bi%3A0%3Bs%3A17%3A%22_identity-backend%22%3Bi%3A1%3Bs%3A46%3A%22%5B2%2C%221SNgG1qkakmN2Frp80Qr1SX2kgRhIH88%22%2C2592000%5D%22%3B%7D'
    'PATH' => 'C:\\WINDOWS\\system32;C:\\WINDOWS;C:\\WINDOWS\\System32\\Wbem;C:\\WINDOWS\\System32\\WindowsPowerShell\\v1.0\\;C:\\xampp\\php;C:\\ProgramData\\ComposerSetup\\bin;C:\\Program Files\\Git\\cmd;C:\\Users\\Win10\\AppData\\Local\\Microsoft\\WindowsApps;C:\\Users\\Win10\\AppData\\Roaming\\Composer\\vendor\\bin'
    'SystemRoot' => 'C:\\WINDOWS'
    'COMSPEC' => 'C:\\WINDOWS\\system32\\cmd.exe'
    'PATHEXT' => '.COM;.EXE;.BAT;.CMD;.VBS;.VBE;.JS;.JSE;.WSF;.WSH;.MSC'
    'WINDIR' => 'C:\\WINDOWS'
    'SERVER_SIGNATURE' => '<address>Apache/2.4.25 (Win32) OpenSSL/1.0.2j PHP/7.1.1 Server at localhost Port 80</address>
'
    'SERVER_SOFTWARE' => 'Apache/2.4.25 (Win32) OpenSSL/1.0.2j PHP/7.1.1'
    'SERVER_NAME' => 'localhost'
    'SERVER_ADDR' => '::1'
    'SERVER_PORT' => '80'
    'REMOTE_ADDR' => '::1'
    'DOCUMENT_ROOT' => 'C:/xampp/htdocs'
    'REQUEST_SCHEME' => 'http'
    'CONTEXT_PREFIX' => ''
    'CONTEXT_DOCUMENT_ROOT' => 'C:/xampp/htdocs'
    'SERVER_ADMIN' => 'postmaster@localhost'
    'SCRIPT_FILENAME' => 'C:/xampp/htdocs/my_first_project/backend/web/index.php'
    'REMOTE_PORT' => '51180'
    'GATEWAY_INTERFACE' => 'CGI/1.1'
    'SERVER_PROTOCOL' => 'HTTP/1.1'
    'REQUEST_METHOD' => 'POST'
    'QUERY_STRING' => 'r=comment%2Fdelete&id_comment=7'
    'REQUEST_URI' => '/my_first_project/backend/web/index.php?r=comment%2Fdelete&id_comment=7'
    'SCRIPT_NAME' => '/my_first_project/backend/web/index.php'
    'PHP_SELF' => '/my_first_project/backend/web/index.php'
    'REQUEST_TIME_FLOAT' => 1491811177.006
    'REQUEST_TIME' => 1491811177
]
2017-04-10 09:59:55 [::1][2][ocapqr5qgv09ionkbionbf547f][error][yii\web\HttpException:405] yii\web\MethodNotAllowedHttpException: Method Not Allowed. This url can only handle the following request methods: POST. in C:\xampp\htdocs\my_first_project\vendor\yiisoft\yii2\filters\VerbFilter.php:105
Stack trace:
#0 [internal function]: yii\filters\VerbFilter->beforeAction(Object(yii\base\ActionEvent))
#1 C:\xampp\htdocs\my_first_project\vendor\yiisoft\yii2\base\Component.php(545): call_user_func(Array, Object(yii\base\ActionEvent))
#2 C:\xampp\htdocs\my_first_project\vendor\yiisoft\yii2\base\Controller.php(272): yii\base\Component->trigger('beforeAction', Object(yii\base\ActionEvent))
#3 C:\xampp\htdocs\my_first_project\vendor\yiisoft\yii2\web\Controller.php(164): yii\base\Controller->beforeAction(Object(yii\base\InlineAction))
#4 C:\xampp\htdocs\my_first_project\vendor\yiisoft\yii2\base\Controller.php(154): yii\web\Controller->beforeAction(Object(yii\base\InlineAction))
#5 C:\xampp\htdocs\my_first_project\vendor\yiisoft\yii2\base\Module.php(523): yii\base\Controller->runAction('delete', Array)
#6 C:\xampp\htdocs\my_first_project\vendor\yiisoft\yii2\web\Application.php(102): yii\base\Module->runAction('comment/delete', Array)
#7 C:\xampp\htdocs\my_first_project\vendor\yiisoft\yii2\base\Application.php(380): yii\web\Application->handleRequest(Object(yii\web\Request))
#8 C:\xampp\htdocs\my_first_project\backend\web\index.php(17): yii\base\Application->run()
#9 {main}
2017-04-10 09:59:55 [::1][2][ocapqr5qgv09ionkbionbf547f][info][application] $_GET = [
    'r' => 'comment/delete'
    'id' => '3'
]

$_COOKIE = [
    'advanced-backend' => 'ocapqr5qgv09ionkbionbf547f'
    '_csrf-backend' => '106541c7716ce6243ffe7fcfaf136b2a6a12ae438d98e6f746d58b64bcb13ed8a:2:{i:0;s:13:\"_csrf-backend\";i:1;s:32:\"oFrjDE6vI0vSHT2i1W4CYRO-RckaEjk2\";}'
    'advanced-frontend' => 'qolu9g2b2l5l25v3anavkh87o4'
    '_csrf-frontend' => 'c02a00c759b3da9e0c4471ffb359e93f3c781a709c70f504ffcee85e0e08c80aa:2:{i:0;s:14:\"_csrf-frontend\";i:1;s:32:\"H_MBy0eyRt9CA7QrM1DtVa88L7n2FYMu\";}'
    '_identity-frontend' => '0cae966fd559089f9ace47d1a2ea5c6406c8e024f36e82c8327d6603adb72aeaa:2:{i:0;s:18:\"_identity-frontend\";i:1;s:46:\"[2,\"1SNgG1qkakmN2Frp80Qr1SX2kgRhIH88\",2592000]\";}'
    '_identity-backend' => 'c0d1afe5c2d610f9a90e14a0fab01645b813d345cb63ec03c8e2cb965d6dd833a:2:{i:0;s:17:\"_identity-backend\";i:1;s:46:\"[2,\"1SNgG1qkakmN2Frp80Qr1SX2kgRhIH88\",2592000]\";}'
]

$_SESSION = [
    '__flash' => []
    '__id' => 2
]

$_SERVER = [
    'MIBDIRS' => 'C:/xampp/php/extras/mibs'
    'MYSQL_HOME' => '\\xampp\\mysql\\bin'
    'OPENSSL_CONF' => 'C:/xampp/apache/bin/openssl.cnf'
    'PHP_PEAR_SYSCONF_DIR' => '\\xampp\\php'
    'PHPRC' => '\\xampp\\php'
    'TMP' => '\\xampp\\tmp'
    'HTTP_HOST' => 'localhost'
    'HTTP_CONNECTION' => 'keep-alive'
    'HTTP_UPGRADE_INSECURE_REQUESTS' => '1'
    'HTTP_USER_AGENT' => 'Mozilla/5.0 (Windows NT 10.0; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/57.0.2987.133 Safari/537.36'
    'HTTP_ACCEPT' => 'text/html,application/xhtml+xml,application/xml;q=0.9,image/webp,*/*;q=0.8'
    'HTTP_REFERER' => 'http://localhost/my_first_project/backend/web/index.php?r=post%2Fview&id=3'
    'HTTP_ACCEPT_ENCODING' => 'gzip, deflate, sdch, br'
    'HTTP_ACCEPT_LANGUAGE' => 'sk-SK,sk;q=0.8,cs;q=0.6,en-US;q=0.4,en;q=0.2'
    'HTTP_COOKIE' => 'advanced-backend=ocapqr5qgv09ionkbionbf547f; _csrf-backend=106541c7716ce6243ffe7fcfaf136b2a6a12ae438d98e6f746d58b64bcb13ed8a%3A2%3A%7Bi%3A0%3Bs%3A13%3A%22_csrf-backend%22%3Bi%3A1%3Bs%3A32%3A%22oFrjDE6vI0vSHT2i1W4CYRO-RckaEjk2%22%3B%7D; advanced-frontend=qolu9g2b2l5l25v3anavkh87o4; _csrf-frontend=c02a00c759b3da9e0c4471ffb359e93f3c781a709c70f504ffcee85e0e08c80aa%3A2%3A%7Bi%3A0%3Bs%3A14%3A%22_csrf-frontend%22%3Bi%3A1%3Bs%3A32%3A%22H_MBy0eyRt9CA7QrM1DtVa88L7n2FYMu%22%3B%7D; _identity-frontend=0cae966fd559089f9ace47d1a2ea5c6406c8e024f36e82c8327d6603adb72aeaa%3A2%3A%7Bi%3A0%3Bs%3A18%3A%22_identity-frontend%22%3Bi%3A1%3Bs%3A46%3A%22%5B2%2C%221SNgG1qkakmN2Frp80Qr1SX2kgRhIH88%22%2C2592000%5D%22%3B%7D; _identity-backend=c0d1afe5c2d610f9a90e14a0fab01645b813d345cb63ec03c8e2cb965d6dd833a%3A2%3A%7Bi%3A0%3Bs%3A17%3A%22_identity-backend%22%3Bi%3A1%3Bs%3A46%3A%22%5B2%2C%221SNgG1qkakmN2Frp80Qr1SX2kgRhIH88%22%2C2592000%5D%22%3B%7D'
    'PATH' => 'C:\\WINDOWS\\system32;C:\\WINDOWS;C:\\WINDOWS\\System32\\Wbem;C:\\WINDOWS\\System32\\WindowsPowerShell\\v1.0\\;C:\\xampp\\php;C:\\ProgramData\\ComposerSetup\\bin;C:\\Program Files\\Git\\cmd;C:\\Users\\Win10\\AppData\\Local\\Microsoft\\WindowsApps;C:\\Users\\Win10\\AppData\\Roaming\\Composer\\vendor\\bin'
    'SystemRoot' => 'C:\\WINDOWS'
    'COMSPEC' => 'C:\\WINDOWS\\system32\\cmd.exe'
    'PATHEXT' => '.COM;.EXE;.BAT;.CMD;.VBS;.VBE;.JS;.JSE;.WSF;.WSH;.MSC'
    'WINDIR' => 'C:\\WINDOWS'
    'SERVER_SIGNATURE' => '<address>Apache/2.4.25 (Win32) OpenSSL/1.0.2j PHP/7.1.1 Server at localhost Port 80</address>
'
    'SERVER_SOFTWARE' => 'Apache/2.4.25 (Win32) OpenSSL/1.0.2j PHP/7.1.1'
    'SERVER_NAME' => 'localhost'
    'SERVER_ADDR' => '::1'
    'SERVER_PORT' => '80'
    'REMOTE_ADDR' => '::1'
    'DOCUMENT_ROOT' => 'C:/xampp/htdocs'
    'REQUEST_SCHEME' => 'http'
    'CONTEXT_PREFIX' => ''
    'CONTEXT_DOCUMENT_ROOT' => 'C:/xampp/htdocs'
    'SERVER_ADMIN' => 'postmaster@localhost'
    'SCRIPT_FILENAME' => 'C:/xampp/htdocs/my_first_project/backend/web/index.php'
    'REMOTE_PORT' => '51192'
    'GATEWAY_INTERFACE' => 'CGI/1.1'
    'SERVER_PROTOCOL' => 'HTTP/1.1'
    'REQUEST_METHOD' => 'GET'
    'QUERY_STRING' => 'r=comment%2Fdelete&id=3'
    'REQUEST_URI' => '/my_first_project/backend/web/index.php?r=comment%2Fdelete&id=3'
    'SCRIPT_NAME' => '/my_first_project/backend/web/index.php'
    'PHP_SELF' => '/my_first_project/backend/web/index.php'
    'REQUEST_TIME_FLOAT' => 1491811195.395
    'REQUEST_TIME' => 1491811195
]
2017-04-10 10:00:01 [::1][2][ocapqr5qgv09ionkbionbf547f][error][yii\web\HttpException:400] yii\web\BadRequestHttpException: Missing required parameters: id in C:\xampp\htdocs\my_first_project\vendor\yiisoft\yii2\web\Controller.php:149
Stack trace:
#0 C:\xampp\htdocs\my_first_project\vendor\yiisoft\yii2\base\InlineAction.php(51): yii\web\Controller->bindActionParams(Object(yii\base\InlineAction), Array)
#1 C:\xampp\htdocs\my_first_project\vendor\yiisoft\yii2\base\Controller.php(156): yii\base\InlineAction->runWithParams(Array)
#2 C:\xampp\htdocs\my_first_project\vendor\yiisoft\yii2\base\Module.php(523): yii\base\Controller->runAction('delete', Array)
#3 C:\xampp\htdocs\my_first_project\vendor\yiisoft\yii2\web\Application.php(102): yii\base\Module->runAction('comment/delete', Array)
#4 C:\xampp\htdocs\my_first_project\vendor\yiisoft\yii2\base\Application.php(380): yii\web\Application->handleRequest(Object(yii\web\Request))
#5 C:\xampp\htdocs\my_first_project\backend\web\index.php(17): yii\base\Application->run()
#6 {main}
2017-04-10 10:00:01 [::1][2][ocapqr5qgv09ionkbionbf547f][info][application] $_GET = [
    'r' => 'comment/delete'
    'id_comment' => '7'
]

$_POST = [
    '_csrf-backend' => 'SC0uMXl6SGsna1xbPT9.HQEdWGIxLnoCeXoaciAoB0YaTkVQPBAjWQ=='
]

$_COOKIE = [
    'advanced-backend' => 'ocapqr5qgv09ionkbionbf547f'
    '_csrf-backend' => '106541c7716ce6243ffe7fcfaf136b2a6a12ae438d98e6f746d58b64bcb13ed8a:2:{i:0;s:13:\"_csrf-backend\";i:1;s:32:\"oFrjDE6vI0vSHT2i1W4CYRO-RckaEjk2\";}'
    'advanced-frontend' => 'qolu9g2b2l5l25v3anavkh87o4'
    '_csrf-frontend' => 'c02a00c759b3da9e0c4471ffb359e93f3c781a709c70f504ffcee85e0e08c80aa:2:{i:0;s:14:\"_csrf-frontend\";i:1;s:32:\"H_MBy0eyRt9CA7QrM1DtVa88L7n2FYMu\";}'
    '_identity-frontend' => '0cae966fd559089f9ace47d1a2ea5c6406c8e024f36e82c8327d6603adb72aeaa:2:{i:0;s:18:\"_identity-frontend\";i:1;s:46:\"[2,\"1SNgG1qkakmN2Frp80Qr1SX2kgRhIH88\",2592000]\";}'
    '_identity-backend' => 'c0d1afe5c2d610f9a90e14a0fab01645b813d345cb63ec03c8e2cb965d6dd833a:2:{i:0;s:17:\"_identity-backend\";i:1;s:46:\"[2,\"1SNgG1qkakmN2Frp80Qr1SX2kgRhIH88\",2592000]\";}'
]

$_SESSION = [
    '__flash' => []
    '__id' => 2
]

$_SERVER = [
    'MIBDIRS' => 'C:/xampp/php/extras/mibs'
    'MYSQL_HOME' => '\\xampp\\mysql\\bin'
    'OPENSSL_CONF' => 'C:/xampp/apache/bin/openssl.cnf'
    'PHP_PEAR_SYSCONF_DIR' => '\\xampp\\php'
    'PHPRC' => '\\xampp\\php'
    'TMP' => '\\xampp\\tmp'
    'HTTP_HOST' => 'localhost'
    'HTTP_CONNECTION' => 'keep-alive'
    'CONTENT_LENGTH' => '74'
    'HTTP_CACHE_CONTROL' => 'max-age=0'
    'HTTP_ORIGIN' => 'http://localhost'
    'HTTP_UPGRADE_INSECURE_REQUESTS' => '1'
    'HTTP_USER_AGENT' => 'Mozilla/5.0 (Windows NT 10.0; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/57.0.2987.133 Safari/537.36'
    'CONTENT_TYPE' => 'application/x-www-form-urlencoded'
    'HTTP_ACCEPT' => 'text/html,application/xhtml+xml,application/xml;q=0.9,image/webp,*/*;q=0.8'
    'HTTP_REFERER' => 'http://localhost/my_first_project/backend/web/index.php?r=post%2Fview&id=3'
    'HTTP_ACCEPT_ENCODING' => 'gzip, deflate, br'
    'HTTP_ACCEPT_LANGUAGE' => 'sk-SK,sk;q=0.8,cs;q=0.6,en-US;q=0.4,en;q=0.2'
    'HTTP_COOKIE' => 'advanced-backend=ocapqr5qgv09ionkbionbf547f; _csrf-backend=106541c7716ce6243ffe7fcfaf136b2a6a12ae438d98e6f746d58b64bcb13ed8a%3A2%3A%7Bi%3A0%3Bs%3A13%3A%22_csrf-backend%22%3Bi%3A1%3Bs%3A32%3A%22oFrjDE6vI0vSHT2i1W4CYRO-RckaEjk2%22%3B%7D; advanced-frontend=qolu9g2b2l5l25v3anavkh87o4; _csrf-frontend=c02a00c759b3da9e0c4471ffb359e93f3c781a709c70f504ffcee85e0e08c80aa%3A2%3A%7Bi%3A0%3Bs%3A14%3A%22_csrf-frontend%22%3Bi%3A1%3Bs%3A32%3A%22H_MBy0eyRt9CA7QrM1DtVa88L7n2FYMu%22%3B%7D; _identity-frontend=0cae966fd559089f9ace47d1a2ea5c6406c8e024f36e82c8327d6603adb72aeaa%3A2%3A%7Bi%3A0%3Bs%3A18%3A%22_identity-frontend%22%3Bi%3A1%3Bs%3A46%3A%22%5B2%2C%221SNgG1qkakmN2Frp80Qr1SX2kgRhIH88%22%2C2592000%5D%22%3B%7D; _identity-backend=c0d1afe5c2d610f9a90e14a0fab01645b813d345cb63ec03c8e2cb965d6dd833a%3A2%3A%7Bi%3A0%3Bs%3A17%3A%22_identity-backend%22%3Bi%3A1%3Bs%3A46%3A%22%5B2%2C%221SNgG1qkakmN2Frp80Qr1SX2kgRhIH88%22%2C2592000%5D%22%3B%7D'
    'PATH' => 'C:\\WINDOWS\\system32;C:\\WINDOWS;C:\\WINDOWS\\System32\\Wbem;C:\\WINDOWS\\System32\\WindowsPowerShell\\v1.0\\;C:\\xampp\\php;C:\\ProgramData\\ComposerSetup\\bin;C:\\Program Files\\Git\\cmd;C:\\Users\\Win10\\AppData\\Local\\Microsoft\\WindowsApps;C:\\Users\\Win10\\AppData\\Roaming\\Composer\\vendor\\bin'
    'SystemRoot' => 'C:\\WINDOWS'
    'COMSPEC' => 'C:\\WINDOWS\\system32\\cmd.exe'
    'PATHEXT' => '.COM;.EXE;.BAT;.CMD;.VBS;.VBE;.JS;.JSE;.WSF;.WSH;.MSC'
    'WINDIR' => 'C:\\WINDOWS'
    'SERVER_SIGNATURE' => '<address>Apache/2.4.25 (Win32) OpenSSL/1.0.2j PHP/7.1.1 Server at localhost Port 80</address>
'
    'SERVER_SOFTWARE' => 'Apache/2.4.25 (Win32) OpenSSL/1.0.2j PHP/7.1.1'
    'SERVER_NAME' => 'localhost'
    'SERVER_ADDR' => '::1'
    'SERVER_PORT' => '80'
    'REMOTE_ADDR' => '::1'
    'DOCUMENT_ROOT' => 'C:/xampp/htdocs'
    'REQUEST_SCHEME' => 'http'
    'CONTEXT_PREFIX' => ''
    'CONTEXT_DOCUMENT_ROOT' => 'C:/xampp/htdocs'
    'SERVER_ADMIN' => 'postmaster@localhost'
    'SCRIPT_FILENAME' => 'C:/xampp/htdocs/my_first_project/backend/web/index.php'
    'REMOTE_PORT' => '51194'
    'GATEWAY_INTERFACE' => 'CGI/1.1'
    'SERVER_PROTOCOL' => 'HTTP/1.1'
    'REQUEST_METHOD' => 'POST'
    'QUERY_STRING' => 'r=comment%2Fdelete&id_comment=7'
    'REQUEST_URI' => '/my_first_project/backend/web/index.php?r=comment%2Fdelete&id_comment=7'
    'SCRIPT_NAME' => '/my_first_project/backend/web/index.php'
    'PHP_SELF' => '/my_first_project/backend/web/index.php'
    'REQUEST_TIME_FLOAT' => 1491811201.034
    'REQUEST_TIME' => 1491811201
]
2017-04-10 10:00:36 [::1][2][ocapqr5qgv09ionkbionbf547f][error][yii\web\HttpException:400] yii\web\BadRequestHttpException: Missing required parameters: id in C:\xampp\htdocs\my_first_project\vendor\yiisoft\yii2\web\Controller.php:149
Stack trace:
#0 C:\xampp\htdocs\my_first_project\vendor\yiisoft\yii2\base\InlineAction.php(51): yii\web\Controller->bindActionParams(Object(yii\base\InlineAction), Array)
#1 C:\xampp\htdocs\my_first_project\vendor\yiisoft\yii2\base\Controller.php(156): yii\base\InlineAction->runWithParams(Array)
#2 C:\xampp\htdocs\my_first_project\vendor\yiisoft\yii2\base\Module.php(523): yii\base\Controller->runAction('delete', Array)
#3 C:\xampp\htdocs\my_first_project\vendor\yiisoft\yii2\web\Application.php(102): yii\base\Module->runAction('comment/delete', Array)
#4 C:\xampp\htdocs\my_first_project\vendor\yiisoft\yii2\base\Application.php(380): yii\web\Application->handleRequest(Object(yii\web\Request))
#5 C:\xampp\htdocs\my_first_project\backend\web\index.php(17): yii\base\Application->run()
#6 {main}
2017-04-10 10:00:36 [::1][2][ocapqr5qgv09ionkbionbf547f][info][application] $_GET = [
    'r' => 'comment/delete'
    'id_comment' => '7'
]

$_POST = [
    '_csrf-backend' => 'SC0uMXl6SGsna1xbPT9.HQEdWGIxLnoCeXoaciAoB0YaTkVQPBAjWQ=='
]

$_COOKIE = [
    'advanced-backend' => 'ocapqr5qgv09ionkbionbf547f'
    '_csrf-backend' => '106541c7716ce6243ffe7fcfaf136b2a6a12ae438d98e6f746d58b64bcb13ed8a:2:{i:0;s:13:\"_csrf-backend\";i:1;s:32:\"oFrjDE6vI0vSHT2i1W4CYRO-RckaEjk2\";}'
    'advanced-frontend' => 'qolu9g2b2l5l25v3anavkh87o4'
    '_csrf-frontend' => 'c02a00c759b3da9e0c4471ffb359e93f3c781a709c70f504ffcee85e0e08c80aa:2:{i:0;s:14:\"_csrf-frontend\";i:1;s:32:\"H_MBy0eyRt9CA7QrM1DtVa88L7n2FYMu\";}'
    '_identity-frontend' => '0cae966fd559089f9ace47d1a2ea5c6406c8e024f36e82c8327d6603adb72aeaa:2:{i:0;s:18:\"_identity-frontend\";i:1;s:46:\"[2,\"1SNgG1qkakmN2Frp80Qr1SX2kgRhIH88\",2592000]\";}'
    '_identity-backend' => 'c0d1afe5c2d610f9a90e14a0fab01645b813d345cb63ec03c8e2cb965d6dd833a:2:{i:0;s:17:\"_identity-backend\";i:1;s:46:\"[2,\"1SNgG1qkakmN2Frp80Qr1SX2kgRhIH88\",2592000]\";}'
]

$_SESSION = [
    '__flash' => []
    '__id' => 2
]

$_SERVER = [
    'MIBDIRS' => 'C:/xampp/php/extras/mibs'
    'MYSQL_HOME' => '\\xampp\\mysql\\bin'
    'OPENSSL_CONF' => 'C:/xampp/apache/bin/openssl.cnf'
    'PHP_PEAR_SYSCONF_DIR' => '\\xampp\\php'
    'PHPRC' => '\\xampp\\php'
    'TMP' => '\\xampp\\tmp'
    'HTTP_HOST' => 'localhost'
    'HTTP_CONNECTION' => 'keep-alive'
    'CONTENT_LENGTH' => '74'
    'HTTP_CACHE_CONTROL' => 'max-age=0'
    'HTTP_ORIGIN' => 'http://localhost'
    'HTTP_UPGRADE_INSECURE_REQUESTS' => '1'
    'HTTP_USER_AGENT' => 'Mozilla/5.0 (Windows NT 10.0; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/57.0.2987.133 Safari/537.36'
    'CONTENT_TYPE' => 'application/x-www-form-urlencoded'
    'HTTP_ACCEPT' => 'text/html,application/xhtml+xml,application/xml;q=0.9,image/webp,*/*;q=0.8'
    'HTTP_REFERER' => 'http://localhost/my_first_project/backend/web/index.php?r=post%2Fview&id=3'
    'HTTP_ACCEPT_ENCODING' => 'gzip, deflate, br'
    'HTTP_ACCEPT_LANGUAGE' => 'sk-SK,sk;q=0.8,cs;q=0.6,en-US;q=0.4,en;q=0.2'
    'HTTP_COOKIE' => 'advanced-backend=ocapqr5qgv09ionkbionbf547f; _csrf-backend=106541c7716ce6243ffe7fcfaf136b2a6a12ae438d98e6f746d58b64bcb13ed8a%3A2%3A%7Bi%3A0%3Bs%3A13%3A%22_csrf-backend%22%3Bi%3A1%3Bs%3A32%3A%22oFrjDE6vI0vSHT2i1W4CYRO-RckaEjk2%22%3B%7D; advanced-frontend=qolu9g2b2l5l25v3anavkh87o4; _csrf-frontend=c02a00c759b3da9e0c4471ffb359e93f3c781a709c70f504ffcee85e0e08c80aa%3A2%3A%7Bi%3A0%3Bs%3A14%3A%22_csrf-frontend%22%3Bi%3A1%3Bs%3A32%3A%22H_MBy0eyRt9CA7QrM1DtVa88L7n2FYMu%22%3B%7D; _identity-frontend=0cae966fd559089f9ace47d1a2ea5c6406c8e024f36e82c8327d6603adb72aeaa%3A2%3A%7Bi%3A0%3Bs%3A18%3A%22_identity-frontend%22%3Bi%3A1%3Bs%3A46%3A%22%5B2%2C%221SNgG1qkakmN2Frp80Qr1SX2kgRhIH88%22%2C2592000%5D%22%3B%7D; _identity-backend=c0d1afe5c2d610f9a90e14a0fab01645b813d345cb63ec03c8e2cb965d6dd833a%3A2%3A%7Bi%3A0%3Bs%3A17%3A%22_identity-backend%22%3Bi%3A1%3Bs%3A46%3A%22%5B2%2C%221SNgG1qkakmN2Frp80Qr1SX2kgRhIH88%22%2C2592000%5D%22%3B%7D'
    'PATH' => 'C:\\WINDOWS\\system32;C:\\WINDOWS;C:\\WINDOWS\\System32\\Wbem;C:\\WINDOWS\\System32\\WindowsPowerShell\\v1.0\\;C:\\xampp\\php;C:\\ProgramData\\ComposerSetup\\bin;C:\\Program Files\\Git\\cmd;C:\\Users\\Win10\\AppData\\Local\\Microsoft\\WindowsApps;C:\\Users\\Win10\\AppData\\Roaming\\Composer\\vendor\\bin'
    'SystemRoot' => 'C:\\WINDOWS'
    'COMSPEC' => 'C:\\WINDOWS\\system32\\cmd.exe'
    'PATHEXT' => '.COM;.EXE;.BAT;.CMD;.VBS;.VBE;.JS;.JSE;.WSF;.WSH;.MSC'
    'WINDIR' => 'C:\\WINDOWS'
    'SERVER_SIGNATURE' => '<address>Apache/2.4.25 (Win32) OpenSSL/1.0.2j PHP/7.1.1 Server at localhost Port 80</address>
'
    'SERVER_SOFTWARE' => 'Apache/2.4.25 (Win32) OpenSSL/1.0.2j PHP/7.1.1'
    'SERVER_NAME' => 'localhost'
    'SERVER_ADDR' => '::1'
    'SERVER_PORT' => '80'
    'REMOTE_ADDR' => '::1'
    'DOCUMENT_ROOT' => 'C:/xampp/htdocs'
    'REQUEST_SCHEME' => 'http'
    'CONTEXT_PREFIX' => ''
    'CONTEXT_DOCUMENT_ROOT' => 'C:/xampp/htdocs'
    'SERVER_ADMIN' => 'postmaster@localhost'
    'SCRIPT_FILENAME' => 'C:/xampp/htdocs/my_first_project/backend/web/index.php'
    'REMOTE_PORT' => '51203'
    'GATEWAY_INTERFACE' => 'CGI/1.1'
    'SERVER_PROTOCOL' => 'HTTP/1.1'
    'REQUEST_METHOD' => 'POST'
    'QUERY_STRING' => 'r=comment%2Fdelete&id_comment=7'
    'REQUEST_URI' => '/my_first_project/backend/web/index.php?r=comment%2Fdelete&id_comment=7'
    'SCRIPT_NAME' => '/my_first_project/backend/web/index.php'
    'PHP_SELF' => '/my_first_project/backend/web/index.php'
    'REQUEST_TIME_FLOAT' => 1491811236.305
    'REQUEST_TIME' => 1491811236
]
2017-04-10 10:00:43 [::1][2][ocapqr5qgv09ionkbionbf547f][error][yii\web\HttpException:400] yii\web\BadRequestHttpException: Missing required parameters: id in C:\xampp\htdocs\my_first_project\vendor\yiisoft\yii2\web\Controller.php:149
Stack trace:
#0 C:\xampp\htdocs\my_first_project\vendor\yiisoft\yii2\base\InlineAction.php(51): yii\web\Controller->bindActionParams(Object(yii\base\InlineAction), Array)
#1 C:\xampp\htdocs\my_first_project\vendor\yiisoft\yii2\base\Controller.php(156): yii\base\InlineAction->runWithParams(Array)
#2 C:\xampp\htdocs\my_first_project\vendor\yiisoft\yii2\base\Module.php(523): yii\base\Controller->runAction('delete', Array)
#3 C:\xampp\htdocs\my_first_project\vendor\yiisoft\yii2\web\Application.php(102): yii\base\Module->runAction('comment/delete', Array)
#4 C:\xampp\htdocs\my_first_project\vendor\yiisoft\yii2\base\Application.php(380): yii\web\Application->handleRequest(Object(yii\web\Request))
#5 C:\xampp\htdocs\my_first_project\backend\web\index.php(17): yii\base\Application->run()
#6 {main}
2017-04-10 10:00:43 [::1][2][ocapqr5qgv09ionkbionbf547f][info][application] $_GET = [
    'r' => 'comment/delete'
    'id_comment' => '7'
]

$_POST = [
    '_csrf-backend' => 'RU1QWGhFNFEqCyIyLAACJwx9JgsgEQY4dBpkGzEXe3wXLjs5LS9fYw=='
]

$_COOKIE = [
    'advanced-backend' => 'ocapqr5qgv09ionkbionbf547f'
    '_csrf-backend' => '106541c7716ce6243ffe7fcfaf136b2a6a12ae438d98e6f746d58b64bcb13ed8a:2:{i:0;s:13:\"_csrf-backend\";i:1;s:32:\"oFrjDE6vI0vSHT2i1W4CYRO-RckaEjk2\";}'
    'advanced-frontend' => 'qolu9g2b2l5l25v3anavkh87o4'
    '_csrf-frontend' => 'c02a00c759b3da9e0c4471ffb359e93f3c781a709c70f504ffcee85e0e08c80aa:2:{i:0;s:14:\"_csrf-frontend\";i:1;s:32:\"H_MBy0eyRt9CA7QrM1DtVa88L7n2FYMu\";}'
    '_identity-frontend' => '0cae966fd559089f9ace47d1a2ea5c6406c8e024f36e82c8327d6603adb72aeaa:2:{i:0;s:18:\"_identity-frontend\";i:1;s:46:\"[2,\"1SNgG1qkakmN2Frp80Qr1SX2kgRhIH88\",2592000]\";}'
    '_identity-backend' => 'c0d1afe5c2d610f9a90e14a0fab01645b813d345cb63ec03c8e2cb965d6dd833a:2:{i:0;s:17:\"_identity-backend\";i:1;s:46:\"[2,\"1SNgG1qkakmN2Frp80Qr1SX2kgRhIH88\",2592000]\";}'
]

$_SESSION = [
    '__flash' => []
    '__id' => 2
]

$_SERVER = [
    'MIBDIRS' => 'C:/xampp/php/extras/mibs'
    'MYSQL_HOME' => '\\xampp\\mysql\\bin'
    'OPENSSL_CONF' => 'C:/xampp/apache/bin/openssl.cnf'
    'PHP_PEAR_SYSCONF_DIR' => '\\xampp\\php'
    'PHPRC' => '\\xampp\\php'
    'TMP' => '\\xampp\\tmp'
    'HTTP_HOST' => 'localhost'
    'HTTP_CONNECTION' => 'keep-alive'
    'CONTENT_LENGTH' => '74'
    'HTTP_CACHE_CONTROL' => 'max-age=0'
    'HTTP_ORIGIN' => 'http://localhost'
    'HTTP_UPGRADE_INSECURE_REQUESTS' => '1'
    'HTTP_USER_AGENT' => 'Mozilla/5.0 (Windows NT 10.0; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/57.0.2987.133 Safari/537.36'
    'CONTENT_TYPE' => 'application/x-www-form-urlencoded'
    'HTTP_ACCEPT' => 'text/html,application/xhtml+xml,application/xml;q=0.9,image/webp,*/*;q=0.8'
    'HTTP_REFERER' => 'http://localhost/my_first_project/backend/web/index.php?r=post%2Fview&id=3'
    'HTTP_ACCEPT_ENCODING' => 'gzip, deflate, br'
    'HTTP_ACCEPT_LANGUAGE' => 'sk-SK,sk;q=0.8,cs;q=0.6,en-US;q=0.4,en;q=0.2'
    'HTTP_COOKIE' => 'advanced-backend=ocapqr5qgv09ionkbionbf547f; _csrf-backend=106541c7716ce6243ffe7fcfaf136b2a6a12ae438d98e6f746d58b64bcb13ed8a%3A2%3A%7Bi%3A0%3Bs%3A13%3A%22_csrf-backend%22%3Bi%3A1%3Bs%3A32%3A%22oFrjDE6vI0vSHT2i1W4CYRO-RckaEjk2%22%3B%7D; advanced-frontend=qolu9g2b2l5l25v3anavkh87o4; _csrf-frontend=c02a00c759b3da9e0c4471ffb359e93f3c781a709c70f504ffcee85e0e08c80aa%3A2%3A%7Bi%3A0%3Bs%3A14%3A%22_csrf-frontend%22%3Bi%3A1%3Bs%3A32%3A%22H_MBy0eyRt9CA7QrM1DtVa88L7n2FYMu%22%3B%7D; _identity-frontend=0cae966fd559089f9ace47d1a2ea5c6406c8e024f36e82c8327d6603adb72aeaa%3A2%3A%7Bi%3A0%3Bs%3A18%3A%22_identity-frontend%22%3Bi%3A1%3Bs%3A46%3A%22%5B2%2C%221SNgG1qkakmN2Frp80Qr1SX2kgRhIH88%22%2C2592000%5D%22%3B%7D; _identity-backend=c0d1afe5c2d610f9a90e14a0fab01645b813d345cb63ec03c8e2cb965d6dd833a%3A2%3A%7Bi%3A0%3Bs%3A17%3A%22_identity-backend%22%3Bi%3A1%3Bs%3A46%3A%22%5B2%2C%221SNgG1qkakmN2Frp80Qr1SX2kgRhIH88%22%2C2592000%5D%22%3B%7D'
    'PATH' => 'C:\\WINDOWS\\system32;C:\\WINDOWS;C:\\WINDOWS\\System32\\Wbem;C:\\WINDOWS\\System32\\WindowsPowerShell\\v1.0\\;C:\\xampp\\php;C:\\ProgramData\\ComposerSetup\\bin;C:\\Program Files\\Git\\cmd;C:\\Users\\Win10\\AppData\\Local\\Microsoft\\WindowsApps;C:\\Users\\Win10\\AppData\\Roaming\\Composer\\vendor\\bin'
    'SystemRoot' => 'C:\\WINDOWS'
    'COMSPEC' => 'C:\\WINDOWS\\system32\\cmd.exe'
    'PATHEXT' => '.COM;.EXE;.BAT;.CMD;.VBS;.VBE;.JS;.JSE;.WSF;.WSH;.MSC'
    'WINDIR' => 'C:\\WINDOWS'
    'SERVER_SIGNATURE' => '<address>Apache/2.4.25 (Win32) OpenSSL/1.0.2j PHP/7.1.1 Server at localhost Port 80</address>
'
    'SERVER_SOFTWARE' => 'Apache/2.4.25 (Win32) OpenSSL/1.0.2j PHP/7.1.1'
    'SERVER_NAME' => 'localhost'
    'SERVER_ADDR' => '::1'
    'SERVER_PORT' => '80'
    'REMOTE_ADDR' => '::1'
    'DOCUMENT_ROOT' => 'C:/xampp/htdocs'
    'REQUEST_SCHEME' => 'http'
    'CONTEXT_PREFIX' => ''
    'CONTEXT_DOCUMENT_ROOT' => 'C:/xampp/htdocs'
    'SERVER_ADMIN' => 'postmaster@localhost'
    'SCRIPT_FILENAME' => 'C:/xampp/htdocs/my_first_project/backend/web/index.php'
    'REMOTE_PORT' => '51204'
    'GATEWAY_INTERFACE' => 'CGI/1.1'
    'SERVER_PROTOCOL' => 'HTTP/1.1'
    'REQUEST_METHOD' => 'POST'
    'QUERY_STRING' => 'r=comment%2Fdelete&id_comment=7'
    'REQUEST_URI' => '/my_first_project/backend/web/index.php?r=comment%2Fdelete&id_comment=7'
    'SCRIPT_NAME' => '/my_first_project/backend/web/index.php'
    'PHP_SELF' => '/my_first_project/backend/web/index.php'
    'REQUEST_TIME_FLOAT' => 1491811243.202
    'REQUEST_TIME' => 1491811243
]
2017-04-10 10:04:12 [::1][-][-][error][yii\base\UnknownPropertyException] yii\base\UnknownPropertyException: Getting unknown property: common\models\Post::id_comment in C:\xampp\htdocs\my_first_project\vendor\yiisoft\yii2\base\Component.php:147
Stack trace:
#0 C:\xampp\htdocs\my_first_project\vendor\yiisoft\yii2\db\BaseActiveRecord.php(286): yii\base\Component->__get('id_comment')
#1 C:\xampp\htdocs\my_first_project\backend\views\post\view.php(65): yii\db\BaseActiveRecord->__get('id_comment')
#2 C:\xampp\htdocs\my_first_project\vendor\yiisoft\yii2\base\View.php(328): require('C:\\xampp\\htdocs...')
#3 C:\xampp\htdocs\my_first_project\vendor\yiisoft\yii2\base\View.php(250): yii\base\View->renderPhpFile('C:\\xampp\\htdocs...', Array)
#4 C:\xampp\htdocs\my_first_project\vendor\yiisoft\yii2\base\View.php(152): yii\base\View->renderFile('C:\\xampp\\htdocs...', Array, Object(backend\controllers\PostController))
#5 C:\xampp\htdocs\my_first_project\vendor\yiisoft\yii2\base\Controller.php(381): yii\base\View->render('view', Array, Object(backend\controllers\PostController))
#6 C:\xampp\htdocs\my_first_project\backend\controllers\PostController.php(55): yii\base\Controller->render('view', Array)
#7 [internal function]: backend\controllers\PostController->actionView('3')
#8 C:\xampp\htdocs\my_first_project\vendor\yiisoft\yii2\base\InlineAction.php(57): call_user_func_array(Array, Array)
#9 C:\xampp\htdocs\my_first_project\vendor\yiisoft\yii2\base\Controller.php(156): yii\base\InlineAction->runWithParams(Array)
#10 C:\xampp\htdocs\my_first_project\vendor\yiisoft\yii2\base\Module.php(523): yii\base\Controller->runAction('view', Array)
#11 C:\xampp\htdocs\my_first_project\vendor\yiisoft\yii2\web\Application.php(102): yii\base\Module->runAction('post/view', Array)
#12 C:\xampp\htdocs\my_first_project\vendor\yiisoft\yii2\base\Application.php(380): yii\web\Application->handleRequest(Object(yii\web\Request))
#13 C:\xampp\htdocs\my_first_project\backend\web\index.php(17): yii\base\Application->run()
#14 {main}
2017-04-10 10:04:12 [::1][-][-][info][application] $_GET = [
    'r' => 'post/view'
    'id' => '3'
]

$_COOKIE = [
    'advanced-backend' => 'ocapqr5qgv09ionkbionbf547f'
    '_csrf-backend' => '106541c7716ce6243ffe7fcfaf136b2a6a12ae438d98e6f746d58b64bcb13ed8a:2:{i:0;s:13:\"_csrf-backend\";i:1;s:32:\"oFrjDE6vI0vSHT2i1W4CYRO-RckaEjk2\";}'
    'advanced-frontend' => 'qolu9g2b2l5l25v3anavkh87o4'
    '_csrf-frontend' => 'c02a00c759b3da9e0c4471ffb359e93f3c781a709c70f504ffcee85e0e08c80aa:2:{i:0;s:14:\"_csrf-frontend\";i:1;s:32:\"H_MBy0eyRt9CA7QrM1DtVa88L7n2FYMu\";}'
    '_identity-frontend' => '0cae966fd559089f9ace47d1a2ea5c6406c8e024f36e82c8327d6603adb72aeaa:2:{i:0;s:18:\"_identity-frontend\";i:1;s:46:\"[2,\"1SNgG1qkakmN2Frp80Qr1SX2kgRhIH88\",2592000]\";}'
    '_identity-backend' => 'c0d1afe5c2d610f9a90e14a0fab01645b813d345cb63ec03c8e2cb965d6dd833a:2:{i:0;s:17:\"_identity-backend\";i:1;s:46:\"[2,\"1SNgG1qkakmN2Frp80Qr1SX2kgRhIH88\",2592000]\";}'
]

$_SERVER = [
    'MIBDIRS' => 'C:/xampp/php/extras/mibs'
    'MYSQL_HOME' => '\\xampp\\mysql\\bin'
    'OPENSSL_CONF' => 'C:/xampp/apache/bin/openssl.cnf'
    'PHP_PEAR_SYSCONF_DIR' => '\\xampp\\php'
    'PHPRC' => '\\xampp\\php'
    'TMP' => '\\xampp\\tmp'
    'HTTP_HOST' => 'localhost'
    'HTTP_CONNECTION' => 'keep-alive'
    'HTTP_CACHE_CONTROL' => 'max-age=0'
    'HTTP_UPGRADE_INSECURE_REQUESTS' => '1'
    'HTTP_USER_AGENT' => 'Mozilla/5.0 (Windows NT 10.0; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/57.0.2987.133 Safari/537.36'
    'HTTP_ACCEPT' => 'text/html,application/xhtml+xml,application/xml;q=0.9,image/webp,*/*;q=0.8'
    'HTTP_REFERER' => 'http://localhost/my_first_project/backend/web/index.php?r=post%2Findex'
    'HTTP_ACCEPT_ENCODING' => 'gzip, deflate, sdch, br'
    'HTTP_ACCEPT_LANGUAGE' => 'sk-SK,sk;q=0.8,cs;q=0.6,en-US;q=0.4,en;q=0.2'
    'HTTP_COOKIE' => 'advanced-backend=ocapqr5qgv09ionkbionbf547f; _csrf-backend=106541c7716ce6243ffe7fcfaf136b2a6a12ae438d98e6f746d58b64bcb13ed8a%3A2%3A%7Bi%3A0%3Bs%3A13%3A%22_csrf-backend%22%3Bi%3A1%3Bs%3A32%3A%22oFrjDE6vI0vSHT2i1W4CYRO-RckaEjk2%22%3B%7D; advanced-frontend=qolu9g2b2l5l25v3anavkh87o4; _csrf-frontend=c02a00c759b3da9e0c4471ffb359e93f3c781a709c70f504ffcee85e0e08c80aa%3A2%3A%7Bi%3A0%3Bs%3A14%3A%22_csrf-frontend%22%3Bi%3A1%3Bs%3A32%3A%22H_MBy0eyRt9CA7QrM1DtVa88L7n2FYMu%22%3B%7D; _identity-frontend=0cae966fd559089f9ace47d1a2ea5c6406c8e024f36e82c8327d6603adb72aeaa%3A2%3A%7Bi%3A0%3Bs%3A18%3A%22_identity-frontend%22%3Bi%3A1%3Bs%3A46%3A%22%5B2%2C%221SNgG1qkakmN2Frp80Qr1SX2kgRhIH88%22%2C2592000%5D%22%3B%7D; _identity-backend=c0d1afe5c2d610f9a90e14a0fab01645b813d345cb63ec03c8e2cb965d6dd833a%3A2%3A%7Bi%3A0%3Bs%3A17%3A%22_identity-backend%22%3Bi%3A1%3Bs%3A46%3A%22%5B2%2C%221SNgG1qkakmN2Frp80Qr1SX2kgRhIH88%22%2C2592000%5D%22%3B%7D'
    'PATH' => 'C:\\WINDOWS\\system32;C:\\WINDOWS;C:\\WINDOWS\\System32\\Wbem;C:\\WINDOWS\\System32\\WindowsPowerShell\\v1.0\\;C:\\xampp\\php;C:\\ProgramData\\ComposerSetup\\bin;C:\\Program Files\\Git\\cmd;C:\\Users\\Win10\\AppData\\Local\\Microsoft\\WindowsApps;C:\\Users\\Win10\\AppData\\Roaming\\Composer\\vendor\\bin'
    'SystemRoot' => 'C:\\WINDOWS'
    'COMSPEC' => 'C:\\WINDOWS\\system32\\cmd.exe'
    'PATHEXT' => '.COM;.EXE;.BAT;.CMD;.VBS;.VBE;.JS;.JSE;.WSF;.WSH;.MSC'
    'WINDIR' => 'C:\\WINDOWS'
    'SERVER_SIGNATURE' => '<address>Apache/2.4.25 (Win32) OpenSSL/1.0.2j PHP/7.1.1 Server at localhost Port 80</address>
'
    'SERVER_SOFTWARE' => 'Apache/2.4.25 (Win32) OpenSSL/1.0.2j PHP/7.1.1'
    'SERVER_NAME' => 'localhost'
    'SERVER_ADDR' => '::1'
    'SERVER_PORT' => '80'
    'REMOTE_ADDR' => '::1'
    'DOCUMENT_ROOT' => 'C:/xampp/htdocs'
    'REQUEST_SCHEME' => 'http'
    'CONTEXT_PREFIX' => ''
    'CONTEXT_DOCUMENT_ROOT' => 'C:/xampp/htdocs'
    'SERVER_ADMIN' => 'postmaster@localhost'
    'SCRIPT_FILENAME' => 'C:/xampp/htdocs/my_first_project/backend/web/index.php'
    'REMOTE_PORT' => '51241'
    'GATEWAY_INTERFACE' => 'CGI/1.1'
    'SERVER_PROTOCOL' => 'HTTP/1.1'
    'REQUEST_METHOD' => 'GET'
    'QUERY_STRING' => 'r=post%2Fview&id=3'
    'REQUEST_URI' => '/my_first_project/backend/web/index.php?r=post%2Fview&id=3'
    'SCRIPT_NAME' => '/my_first_project/backend/web/index.php'
    'PHP_SELF' => '/my_first_project/backend/web/index.php'
    'REQUEST_TIME_FLOAT' => 1491811452.238
    'REQUEST_TIME' => 1491811452
]
2017-04-10 10:04:12 [::1][2][-][error][yii\web\Session::open] session_start(): Cannot send session cache limiter - headers already sent (output started at C:\xampp\htdocs\my_first_project\vendor\yiisoft\yii2\web\Response.php:391)
2017-04-10 10:04:12 [::1][2][-][info][application] $_GET = [
    'r' => 'post/view'
    'id' => '3'
]

$_COOKIE = [
    'advanced-backend' => 'ocapqr5qgv09ionkbionbf547f'
    '_csrf-backend' => '106541c7716ce6243ffe7fcfaf136b2a6a12ae438d98e6f746d58b64bcb13ed8a:2:{i:0;s:13:\"_csrf-backend\";i:1;s:32:\"oFrjDE6vI0vSHT2i1W4CYRO-RckaEjk2\";}'
    'advanced-frontend' => 'qolu9g2b2l5l25v3anavkh87o4'
    '_csrf-frontend' => 'c02a00c759b3da9e0c4471ffb359e93f3c781a709c70f504ffcee85e0e08c80aa:2:{i:0;s:14:\"_csrf-frontend\";i:1;s:32:\"H_MBy0eyRt9CA7QrM1DtVa88L7n2FYMu\";}'
    '_identity-frontend' => '0cae966fd559089f9ace47d1a2ea5c6406c8e024f36e82c8327d6603adb72aeaa:2:{i:0;s:18:\"_identity-frontend\";i:1;s:46:\"[2,\"1SNgG1qkakmN2Frp80Qr1SX2kgRhIH88\",2592000]\";}'
    '_identity-backend' => 'c0d1afe5c2d610f9a90e14a0fab01645b813d345cb63ec03c8e2cb965d6dd833a:2:{i:0;s:17:\"_identity-backend\";i:1;s:46:\"[2,\"1SNgG1qkakmN2Frp80Qr1SX2kgRhIH88\",2592000]\";}'
]

$_SESSION = [
    '__flash' => []
    '__id' => 2
]

$_SERVER = [
    'MIBDIRS' => 'C:/xampp/php/extras/mibs'
    'MYSQL_HOME' => '\\xampp\\mysql\\bin'
    'OPENSSL_CONF' => 'C:/xampp/apache/bin/openssl.cnf'
    'PHP_PEAR_SYSCONF_DIR' => '\\xampp\\php'
    'PHPRC' => '\\xampp\\php'
    'TMP' => '\\xampp\\tmp'
    'HTTP_HOST' => 'localhost'
    'HTTP_CONNECTION' => 'keep-alive'
    'HTTP_CACHE_CONTROL' => 'max-age=0'
    'HTTP_UPGRADE_INSECURE_REQUESTS' => '1'
    'HTTP_USER_AGENT' => 'Mozilla/5.0 (Windows NT 10.0; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/57.0.2987.133 Safari/537.36'
    'HTTP_ACCEPT' => 'text/html,application/xhtml+xml,application/xml;q=0.9,image/webp,*/*;q=0.8'
    'HTTP_REFERER' => 'http://localhost/my_first_project/backend/web/index.php?r=post%2Findex'
    'HTTP_ACCEPT_ENCODING' => 'gzip, deflate, sdch, br'
    'HTTP_ACCEPT_LANGUAGE' => 'sk-SK,sk;q=0.8,cs;q=0.6,en-US;q=0.4,en;q=0.2'
    'HTTP_COOKIE' => 'advanced-backend=ocapqr5qgv09ionkbionbf547f; _csrf-backend=106541c7716ce6243ffe7fcfaf136b2a6a12ae438d98e6f746d58b64bcb13ed8a%3A2%3A%7Bi%3A0%3Bs%3A13%3A%22_csrf-backend%22%3Bi%3A1%3Bs%3A32%3A%22oFrjDE6vI0vSHT2i1W4CYRO-RckaEjk2%22%3B%7D; advanced-frontend=qolu9g2b2l5l25v3anavkh87o4; _csrf-frontend=c02a00c759b3da9e0c4471ffb359e93f3c781a709c70f504ffcee85e0e08c80aa%3A2%3A%7Bi%3A0%3Bs%3A14%3A%22_csrf-frontend%22%3Bi%3A1%3Bs%3A32%3A%22H_MBy0eyRt9CA7QrM1DtVa88L7n2FYMu%22%3B%7D; _identity-frontend=0cae966fd559089f9ace47d1a2ea5c6406c8e024f36e82c8327d6603adb72aeaa%3A2%3A%7Bi%3A0%3Bs%3A18%3A%22_identity-frontend%22%3Bi%3A1%3Bs%3A46%3A%22%5B2%2C%221SNgG1qkakmN2Frp80Qr1SX2kgRhIH88%22%2C2592000%5D%22%3B%7D; _identity-backend=c0d1afe5c2d610f9a90e14a0fab01645b813d345cb63ec03c8e2cb965d6dd833a%3A2%3A%7Bi%3A0%3Bs%3A17%3A%22_identity-backend%22%3Bi%3A1%3Bs%3A46%3A%22%5B2%2C%221SNgG1qkakmN2Frp80Qr1SX2kgRhIH88%22%2C2592000%5D%22%3B%7D'
    'PATH' => 'C:\\WINDOWS\\system32;C:\\WINDOWS;C:\\WINDOWS\\System32\\Wbem;C:\\WINDOWS\\System32\\WindowsPowerShell\\v1.0\\;C:\\xampp\\php;C:\\ProgramData\\ComposerSetup\\bin;C:\\Program Files\\Git\\cmd;C:\\Users\\Win10\\AppData\\Local\\Microsoft\\WindowsApps;C:\\Users\\Win10\\AppData\\Roaming\\Composer\\vendor\\bin'
    'SystemRoot' => 'C:\\WINDOWS'
    'COMSPEC' => 'C:\\WINDOWS\\system32\\cmd.exe'
    'PATHEXT' => '.COM;.EXE;.BAT;.CMD;.VBS;.VBE;.JS;.JSE;.WSF;.WSH;.MSC'
    'WINDIR' => 'C:\\WINDOWS'
    'SERVER_SIGNATURE' => '<address>Apache/2.4.25 (Win32) OpenSSL/1.0.2j PHP/7.1.1 Server at localhost Port 80</address>
'
    'SERVER_SOFTWARE' => 'Apache/2.4.25 (Win32) OpenSSL/1.0.2j PHP/7.1.1'
    'SERVER_NAME' => 'localhost'
    'SERVER_ADDR' => '::1'
    'SERVER_PORT' => '80'
    'REMOTE_ADDR' => '::1'
    'DOCUMENT_ROOT' => 'C:/xampp/htdocs'
    'REQUEST_SCHEME' => 'http'
    'CONTEXT_PREFIX' => ''
    'CONTEXT_DOCUMENT_ROOT' => 'C:/xampp/htdocs'
    'SERVER_ADMIN' => 'postmaster@localhost'
    'SCRIPT_FILENAME' => 'C:/xampp/htdocs/my_first_project/backend/web/index.php'
    'REMOTE_PORT' => '51241'
    'GATEWAY_INTERFACE' => 'CGI/1.1'
    'SERVER_PROTOCOL' => 'HTTP/1.1'
    'REQUEST_METHOD' => 'GET'
    'QUERY_STRING' => 'r=post%2Fview&id=3'
    'REQUEST_URI' => '/my_first_project/backend/web/index.php?r=post%2Fview&id=3'
    'SCRIPT_NAME' => '/my_first_project/backend/web/index.php'
    'PHP_SELF' => '/my_first_project/backend/web/index.php'
    'REQUEST_TIME_FLOAT' => 1491811452.238
    'REQUEST_TIME' => 1491811452
]
2017-04-10 10:05:40 [::1][-][-][error][yii\base\UnknownPropertyException] yii\base\UnknownPropertyException: Getting unknown property: common\models\Post::id_comment in C:\xampp\htdocs\my_first_project\vendor\yiisoft\yii2\base\Component.php:147
Stack trace:
#0 C:\xampp\htdocs\my_first_project\vendor\yiisoft\yii2\db\BaseActiveRecord.php(286): yii\base\Component->__get('id_comment')
#1 C:\xampp\htdocs\my_first_project\backend\views\post\view.php(65): yii\db\BaseActiveRecord->__get('id_comment')
#2 C:\xampp\htdocs\my_first_project\vendor\yiisoft\yii2\base\View.php(328): require('C:\\xampp\\htdocs...')
#3 C:\xampp\htdocs\my_first_project\vendor\yiisoft\yii2\base\View.php(250): yii\base\View->renderPhpFile('C:\\xampp\\htdocs...', Array)
#4 C:\xampp\htdocs\my_first_project\vendor\yiisoft\yii2\base\View.php(152): yii\base\View->renderFile('C:\\xampp\\htdocs...', Array, Object(backend\controllers\PostController))
#5 C:\xampp\htdocs\my_first_project\vendor\yiisoft\yii2\base\Controller.php(381): yii\base\View->render('view', Array, Object(backend\controllers\PostController))
#6 C:\xampp\htdocs\my_first_project\backend\controllers\PostController.php(55): yii\base\Controller->render('view', Array)
#7 [internal function]: backend\controllers\PostController->actionView('3')
#8 C:\xampp\htdocs\my_first_project\vendor\yiisoft\yii2\base\InlineAction.php(57): call_user_func_array(Array, Array)
#9 C:\xampp\htdocs\my_first_project\vendor\yiisoft\yii2\base\Controller.php(156): yii\base\InlineAction->runWithParams(Array)
#10 C:\xampp\htdocs\my_first_project\vendor\yiisoft\yii2\base\Module.php(523): yii\base\Controller->runAction('view', Array)
#11 C:\xampp\htdocs\my_first_project\vendor\yiisoft\yii2\web\Application.php(102): yii\base\Module->runAction('post/view', Array)
#12 C:\xampp\htdocs\my_first_project\vendor\yiisoft\yii2\base\Application.php(380): yii\web\Application->handleRequest(Object(yii\web\Request))
#13 C:\xampp\htdocs\my_first_project\backend\web\index.php(17): yii\base\Application->run()
#14 {main}
2017-04-10 10:05:40 [::1][-][-][info][application] $_GET = [
    'r' => 'post/view'
    'id' => '3'
]

$_COOKIE = [
    'advanced-backend' => 'ocapqr5qgv09ionkbionbf547f'
    '_csrf-backend' => '106541c7716ce6243ffe7fcfaf136b2a6a12ae438d98e6f746d58b64bcb13ed8a:2:{i:0;s:13:\"_csrf-backend\";i:1;s:32:\"oFrjDE6vI0vSHT2i1W4CYRO-RckaEjk2\";}'
    'advanced-frontend' => 'qolu9g2b2l5l25v3anavkh87o4'
    '_csrf-frontend' => 'c02a00c759b3da9e0c4471ffb359e93f3c781a709c70f504ffcee85e0e08c80aa:2:{i:0;s:14:\"_csrf-frontend\";i:1;s:32:\"H_MBy0eyRt9CA7QrM1DtVa88L7n2FYMu\";}'
    '_identity-frontend' => '0cae966fd559089f9ace47d1a2ea5c6406c8e024f36e82c8327d6603adb72aeaa:2:{i:0;s:18:\"_identity-frontend\";i:1;s:46:\"[2,\"1SNgG1qkakmN2Frp80Qr1SX2kgRhIH88\",2592000]\";}'
    '_identity-backend' => 'c0d1afe5c2d610f9a90e14a0fab01645b813d345cb63ec03c8e2cb965d6dd833a:2:{i:0;s:17:\"_identity-backend\";i:1;s:46:\"[2,\"1SNgG1qkakmN2Frp80Qr1SX2kgRhIH88\",2592000]\";}'
]

$_SERVER = [
    'MIBDIRS' => 'C:/xampp/php/extras/mibs'
    'MYSQL_HOME' => '\\xampp\\mysql\\bin'
    'OPENSSL_CONF' => 'C:/xampp/apache/bin/openssl.cnf'
    'PHP_PEAR_SYSCONF_DIR' => '\\xampp\\php'
    'PHPRC' => '\\xampp\\php'
    'TMP' => '\\xampp\\tmp'
    'HTTP_HOST' => 'localhost'
    'HTTP_CONNECTION' => 'keep-alive'
    'HTTP_CACHE_CONTROL' => 'max-age=0'
    'HTTP_UPGRADE_INSECURE_REQUESTS' => '1'
    'HTTP_USER_AGENT' => 'Mozilla/5.0 (Windows NT 10.0; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/57.0.2987.133 Safari/537.36'
    'HTTP_ACCEPT' => 'text/html,application/xhtml+xml,application/xml;q=0.9,image/webp,*/*;q=0.8'
    'HTTP_REFERER' => 'http://localhost/my_first_project/backend/web/index.php?r=post%2Findex'
    'HTTP_ACCEPT_ENCODING' => 'gzip, deflate, sdch, br'
    'HTTP_ACCEPT_LANGUAGE' => 'sk-SK,sk;q=0.8,cs;q=0.6,en-US;q=0.4,en;q=0.2'
    'HTTP_COOKIE' => 'advanced-backend=ocapqr5qgv09ionkbionbf547f; _csrf-backend=106541c7716ce6243ffe7fcfaf136b2a6a12ae438d98e6f746d58b64bcb13ed8a%3A2%3A%7Bi%3A0%3Bs%3A13%3A%22_csrf-backend%22%3Bi%3A1%3Bs%3A32%3A%22oFrjDE6vI0vSHT2i1W4CYRO-RckaEjk2%22%3B%7D; advanced-frontend=qolu9g2b2l5l25v3anavkh87o4; _csrf-frontend=c02a00c759b3da9e0c4471ffb359e93f3c781a709c70f504ffcee85e0e08c80aa%3A2%3A%7Bi%3A0%3Bs%3A14%3A%22_csrf-frontend%22%3Bi%3A1%3Bs%3A32%3A%22H_MBy0eyRt9CA7QrM1DtVa88L7n2FYMu%22%3B%7D; _identity-frontend=0cae966fd559089f9ace47d1a2ea5c6406c8e024f36e82c8327d6603adb72aeaa%3A2%3A%7Bi%3A0%3Bs%3A18%3A%22_identity-frontend%22%3Bi%3A1%3Bs%3A46%3A%22%5B2%2C%221SNgG1qkakmN2Frp80Qr1SX2kgRhIH88%22%2C2592000%5D%22%3B%7D; _identity-backend=c0d1afe5c2d610f9a90e14a0fab01645b813d345cb63ec03c8e2cb965d6dd833a%3A2%3A%7Bi%3A0%3Bs%3A17%3A%22_identity-backend%22%3Bi%3A1%3Bs%3A46%3A%22%5B2%2C%221SNgG1qkakmN2Frp80Qr1SX2kgRhIH88%22%2C2592000%5D%22%3B%7D'
    'PATH' => 'C:\\WINDOWS\\system32;C:\\WINDOWS;C:\\WINDOWS\\System32\\Wbem;C:\\WINDOWS\\System32\\WindowsPowerShell\\v1.0\\;C:\\xampp\\php;C:\\ProgramData\\ComposerSetup\\bin;C:\\Program Files\\Git\\cmd;C:\\Users\\Win10\\AppData\\Local\\Microsoft\\WindowsApps;C:\\Users\\Win10\\AppData\\Roaming\\Composer\\vendor\\bin'
    'SystemRoot' => 'C:\\WINDOWS'
    'COMSPEC' => 'C:\\WINDOWS\\system32\\cmd.exe'
    'PATHEXT' => '.COM;.EXE;.BAT;.CMD;.VBS;.VBE;.JS;.JSE;.WSF;.WSH;.MSC'
    'WINDIR' => 'C:\\WINDOWS'
    'SERVER_SIGNATURE' => '<address>Apache/2.4.25 (Win32) OpenSSL/1.0.2j PHP/7.1.1 Server at localhost Port 80</address>
'
    'SERVER_SOFTWARE' => 'Apache/2.4.25 (Win32) OpenSSL/1.0.2j PHP/7.1.1'
    'SERVER_NAME' => 'localhost'
    'SERVER_ADDR' => '::1'
    'SERVER_PORT' => '80'
    'REMOTE_ADDR' => '::1'
    'DOCUMENT_ROOT' => 'C:/xampp/htdocs'
    'REQUEST_SCHEME' => 'http'
    'CONTEXT_PREFIX' => ''
    'CONTEXT_DOCUMENT_ROOT' => 'C:/xampp/htdocs'
    'SERVER_ADMIN' => 'postmaster@localhost'
    'SCRIPT_FILENAME' => 'C:/xampp/htdocs/my_first_project/backend/web/index.php'
    'REMOTE_PORT' => '51250'
    'GATEWAY_INTERFACE' => 'CGI/1.1'
    'SERVER_PROTOCOL' => 'HTTP/1.1'
    'REQUEST_METHOD' => 'GET'
    'QUERY_STRING' => 'r=post%2Fview&id=3'
    'REQUEST_URI' => '/my_first_project/backend/web/index.php?r=post%2Fview&id=3'
    'SCRIPT_NAME' => '/my_first_project/backend/web/index.php'
    'PHP_SELF' => '/my_first_project/backend/web/index.php'
    'REQUEST_TIME_FLOAT' => 1491811540.434
    'REQUEST_TIME' => 1491811540
]
2017-04-10 10:05:40 [::1][2][-][error][yii\web\Session::open] session_start(): Cannot send session cache limiter - headers already sent (output started at C:\xampp\htdocs\my_first_project\vendor\yiisoft\yii2\web\Response.php:391)
2017-04-10 10:05:40 [::1][2][-][info][application] $_GET = [
    'r' => 'post/view'
    'id' => '3'
]

$_COOKIE = [
    'advanced-backend' => 'ocapqr5qgv09ionkbionbf547f'
    '_csrf-backend' => '106541c7716ce6243ffe7fcfaf136b2a6a12ae438d98e6f746d58b64bcb13ed8a:2:{i:0;s:13:\"_csrf-backend\";i:1;s:32:\"oFrjDE6vI0vSHT2i1W4CYRO-RckaEjk2\";}'
    'advanced-frontend' => 'qolu9g2b2l5l25v3anavkh87o4'
    '_csrf-frontend' => 'c02a00c759b3da9e0c4471ffb359e93f3c781a709c70f504ffcee85e0e08c80aa:2:{i:0;s:14:\"_csrf-frontend\";i:1;s:32:\"H_MBy0eyRt9CA7QrM1DtVa88L7n2FYMu\";}'
    '_identity-frontend' => '0cae966fd559089f9ace47d1a2ea5c6406c8e024f36e82c8327d6603adb72aeaa:2:{i:0;s:18:\"_identity-frontend\";i:1;s:46:\"[2,\"1SNgG1qkakmN2Frp80Qr1SX2kgRhIH88\",2592000]\";}'
    '_identity-backend' => 'c0d1afe5c2d610f9a90e14a0fab01645b813d345cb63ec03c8e2cb965d6dd833a:2:{i:0;s:17:\"_identity-backend\";i:1;s:46:\"[2,\"1SNgG1qkakmN2Frp80Qr1SX2kgRhIH88\",2592000]\";}'
]

$_SESSION = [
    '__flash' => []
    '__id' => 2
]

$_SERVER = [
    'MIBDIRS' => 'C:/xampp/php/extras/mibs'
    'MYSQL_HOME' => '\\xampp\\mysql\\bin'
    'OPENSSL_CONF' => 'C:/xampp/apache/bin/openssl.cnf'
    'PHP_PEAR_SYSCONF_DIR' => '\\xampp\\php'
    'PHPRC' => '\\xampp\\php'
    'TMP' => '\\xampp\\tmp'
    'HTTP_HOST' => 'localhost'
    'HTTP_CONNECTION' => 'keep-alive'
    'HTTP_CACHE_CONTROL' => 'max-age=0'
    'HTTP_UPGRADE_INSECURE_REQUESTS' => '1'
    'HTTP_USER_AGENT' => 'Mozilla/5.0 (Windows NT 10.0; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/57.0.2987.133 Safari/537.36'
    'HTTP_ACCEPT' => 'text/html,application/xhtml+xml,application/xml;q=0.9,image/webp,*/*;q=0.8'
    'HTTP_REFERER' => 'http://localhost/my_first_project/backend/web/index.php?r=post%2Findex'
    'HTTP_ACCEPT_ENCODING' => 'gzip, deflate, sdch, br'
    'HTTP_ACCEPT_LANGUAGE' => 'sk-SK,sk;q=0.8,cs;q=0.6,en-US;q=0.4,en;q=0.2'
    'HTTP_COOKIE' => 'advanced-backend=ocapqr5qgv09ionkbionbf547f; _csrf-backend=106541c7716ce6243ffe7fcfaf136b2a6a12ae438d98e6f746d58b64bcb13ed8a%3A2%3A%7Bi%3A0%3Bs%3A13%3A%22_csrf-backend%22%3Bi%3A1%3Bs%3A32%3A%22oFrjDE6vI0vSHT2i1W4CYRO-RckaEjk2%22%3B%7D; advanced-frontend=qolu9g2b2l5l25v3anavkh87o4; _csrf-frontend=c02a00c759b3da9e0c4471ffb359e93f3c781a709c70f504ffcee85e0e08c80aa%3A2%3A%7Bi%3A0%3Bs%3A14%3A%22_csrf-frontend%22%3Bi%3A1%3Bs%3A32%3A%22H_MBy0eyRt9CA7QrM1DtVa88L7n2FYMu%22%3B%7D; _identity-frontend=0cae966fd559089f9ace47d1a2ea5c6406c8e024f36e82c8327d6603adb72aeaa%3A2%3A%7Bi%3A0%3Bs%3A18%3A%22_identity-frontend%22%3Bi%3A1%3Bs%3A46%3A%22%5B2%2C%221SNgG1qkakmN2Frp80Qr1SX2kgRhIH88%22%2C2592000%5D%22%3B%7D; _identity-backend=c0d1afe5c2d610f9a90e14a0fab01645b813d345cb63ec03c8e2cb965d6dd833a%3A2%3A%7Bi%3A0%3Bs%3A17%3A%22_identity-backend%22%3Bi%3A1%3Bs%3A46%3A%22%5B2%2C%221SNgG1qkakmN2Frp80Qr1SX2kgRhIH88%22%2C2592000%5D%22%3B%7D'
    'PATH' => 'C:\\WINDOWS\\system32;C:\\WINDOWS;C:\\WINDOWS\\System32\\Wbem;C:\\WINDOWS\\System32\\WindowsPowerShell\\v1.0\\;C:\\xampp\\php;C:\\ProgramData\\ComposerSetup\\bin;C:\\Program Files\\Git\\cmd;C:\\Users\\Win10\\AppData\\Local\\Microsoft\\WindowsApps;C:\\Users\\Win10\\AppData\\Roaming\\Composer\\vendor\\bin'
    'SystemRoot' => 'C:\\WINDOWS'
    'COMSPEC' => 'C:\\WINDOWS\\system32\\cmd.exe'
    'PATHEXT' => '.COM;.EXE;.BAT;.CMD;.VBS;.VBE;.JS;.JSE;.WSF;.WSH;.MSC'
    'WINDIR' => 'C:\\WINDOWS'
    'SERVER_SIGNATURE' => '<address>Apache/2.4.25 (Win32) OpenSSL/1.0.2j PHP/7.1.1 Server at localhost Port 80</address>
'
    'SERVER_SOFTWARE' => 'Apache/2.4.25 (Win32) OpenSSL/1.0.2j PHP/7.1.1'
    'SERVER_NAME' => 'localhost'
    'SERVER_ADDR' => '::1'
    'SERVER_PORT' => '80'
    'REMOTE_ADDR' => '::1'
    'DOCUMENT_ROOT' => 'C:/xampp/htdocs'
    'REQUEST_SCHEME' => 'http'
    'CONTEXT_PREFIX' => ''
    'CONTEXT_DOCUMENT_ROOT' => 'C:/xampp/htdocs'
    'SERVER_ADMIN' => 'postmaster@localhost'
    'SCRIPT_FILENAME' => 'C:/xampp/htdocs/my_first_project/backend/web/index.php'
    'REMOTE_PORT' => '51250'
    'GATEWAY_INTERFACE' => 'CGI/1.1'
    'SERVER_PROTOCOL' => 'HTTP/1.1'
    'REQUEST_METHOD' => 'GET'
    'QUERY_STRING' => 'r=post%2Fview&id=3'
    'REQUEST_URI' => '/my_first_project/backend/web/index.php?r=post%2Fview&id=3'
    'SCRIPT_NAME' => '/my_first_project/backend/web/index.php'
    'PHP_SELF' => '/my_first_project/backend/web/index.php'
    'REQUEST_TIME_FLOAT' => 1491811540.434
    'REQUEST_TIME' => 1491811540
]
2017-04-10 10:05:42 [::1][-][-][error][yii\base\UnknownPropertyException] yii\base\UnknownPropertyException: Getting unknown property: common\models\Post::id_comment in C:\xampp\htdocs\my_first_project\vendor\yiisoft\yii2\base\Component.php:147
Stack trace:
#0 C:\xampp\htdocs\my_first_project\vendor\yiisoft\yii2\db\BaseActiveRecord.php(286): yii\base\Component->__get('id_comment')
#1 C:\xampp\htdocs\my_first_project\backend\views\post\view.php(65): yii\db\BaseActiveRecord->__get('id_comment')
#2 C:\xampp\htdocs\my_first_project\vendor\yiisoft\yii2\base\View.php(328): require('C:\\xampp\\htdocs...')
#3 C:\xampp\htdocs\my_first_project\vendor\yiisoft\yii2\base\View.php(250): yii\base\View->renderPhpFile('C:\\xampp\\htdocs...', Array)
#4 C:\xampp\htdocs\my_first_project\vendor\yiisoft\yii2\base\View.php(152): yii\base\View->renderFile('C:\\xampp\\htdocs...', Array, Object(backend\controllers\PostController))
#5 C:\xampp\htdocs\my_first_project\vendor\yiisoft\yii2\base\Controller.php(381): yii\base\View->render('view', Array, Object(backend\controllers\PostController))
#6 C:\xampp\htdocs\my_first_project\backend\controllers\PostController.php(55): yii\base\Controller->render('view', Array)
#7 [internal function]: backend\controllers\PostController->actionView('3')
#8 C:\xampp\htdocs\my_first_project\vendor\yiisoft\yii2\base\InlineAction.php(57): call_user_func_array(Array, Array)
#9 C:\xampp\htdocs\my_first_project\vendor\yiisoft\yii2\base\Controller.php(156): yii\base\InlineAction->runWithParams(Array)
#10 C:\xampp\htdocs\my_first_project\vendor\yiisoft\yii2\base\Module.php(523): yii\base\Controller->runAction('view', Array)
#11 C:\xampp\htdocs\my_first_project\vendor\yiisoft\yii2\web\Application.php(102): yii\base\Module->runAction('post/view', Array)
#12 C:\xampp\htdocs\my_first_project\vendor\yiisoft\yii2\base\Application.php(380): yii\web\Application->handleRequest(Object(yii\web\Request))
#13 C:\xampp\htdocs\my_first_project\backend\web\index.php(17): yii\base\Application->run()
#14 {main}
2017-04-10 10:05:42 [::1][-][-][info][application] $_GET = [
    'r' => 'post/view'
    'id' => '3'
]

$_COOKIE = [
    'advanced-backend' => 'ocapqr5qgv09ionkbionbf547f'
    '_csrf-backend' => '106541c7716ce6243ffe7fcfaf136b2a6a12ae438d98e6f746d58b64bcb13ed8a:2:{i:0;s:13:\"_csrf-backend\";i:1;s:32:\"oFrjDE6vI0vSHT2i1W4CYRO-RckaEjk2\";}'
    'advanced-frontend' => 'qolu9g2b2l5l25v3anavkh87o4'
    '_csrf-frontend' => 'c02a00c759b3da9e0c4471ffb359e93f3c781a709c70f504ffcee85e0e08c80aa:2:{i:0;s:14:\"_csrf-frontend\";i:1;s:32:\"H_MBy0eyRt9CA7QrM1DtVa88L7n2FYMu\";}'
    '_identity-frontend' => '0cae966fd559089f9ace47d1a2ea5c6406c8e024f36e82c8327d6603adb72aeaa:2:{i:0;s:18:\"_identity-frontend\";i:1;s:46:\"[2,\"1SNgG1qkakmN2Frp80Qr1SX2kgRhIH88\",2592000]\";}'
    '_identity-backend' => 'c0d1afe5c2d610f9a90e14a0fab01645b813d345cb63ec03c8e2cb965d6dd833a:2:{i:0;s:17:\"_identity-backend\";i:1;s:46:\"[2,\"1SNgG1qkakmN2Frp80Qr1SX2kgRhIH88\",2592000]\";}'
]

$_SERVER = [
    'MIBDIRS' => 'C:/xampp/php/extras/mibs'
    'MYSQL_HOME' => '\\xampp\\mysql\\bin'
    'OPENSSL_CONF' => 'C:/xampp/apache/bin/openssl.cnf'
    'PHP_PEAR_SYSCONF_DIR' => '\\xampp\\php'
    'PHPRC' => '\\xampp\\php'
    'TMP' => '\\xampp\\tmp'
    'HTTP_HOST' => 'localhost'
    'HTTP_CONNECTION' => 'keep-alive'
    'HTTP_CACHE_CONTROL' => 'max-age=0'
    'HTTP_UPGRADE_INSECURE_REQUESTS' => '1'
    'HTTP_USER_AGENT' => 'Mozilla/5.0 (Windows NT 10.0; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/57.0.2987.133 Safari/537.36'
    'HTTP_ACCEPT' => 'text/html,application/xhtml+xml,application/xml;q=0.9,image/webp,*/*;q=0.8'
    'HTTP_REFERER' => 'http://localhost/my_first_project/backend/web/index.php?r=post%2Findex'
    'HTTP_ACCEPT_ENCODING' => 'gzip, deflate, sdch, br'
    'HTTP_ACCEPT_LANGUAGE' => 'sk-SK,sk;q=0.8,cs;q=0.6,en-US;q=0.4,en;q=0.2'
    'HTTP_COOKIE' => 'advanced-backend=ocapqr5qgv09ionkbionbf547f; _csrf-backend=106541c7716ce6243ffe7fcfaf136b2a6a12ae438d98e6f746d58b64bcb13ed8a%3A2%3A%7Bi%3A0%3Bs%3A13%3A%22_csrf-backend%22%3Bi%3A1%3Bs%3A32%3A%22oFrjDE6vI0vSHT2i1W4CYRO-RckaEjk2%22%3B%7D; advanced-frontend=qolu9g2b2l5l25v3anavkh87o4; _csrf-frontend=c02a00c759b3da9e0c4471ffb359e93f3c781a709c70f504ffcee85e0e08c80aa%3A2%3A%7Bi%3A0%3Bs%3A14%3A%22_csrf-frontend%22%3Bi%3A1%3Bs%3A32%3A%22H_MBy0eyRt9CA7QrM1DtVa88L7n2FYMu%22%3B%7D; _identity-frontend=0cae966fd559089f9ace47d1a2ea5c6406c8e024f36e82c8327d6603adb72aeaa%3A2%3A%7Bi%3A0%3Bs%3A18%3A%22_identity-frontend%22%3Bi%3A1%3Bs%3A46%3A%22%5B2%2C%221SNgG1qkakmN2Frp80Qr1SX2kgRhIH88%22%2C2592000%5D%22%3B%7D; _identity-backend=c0d1afe5c2d610f9a90e14a0fab01645b813d345cb63ec03c8e2cb965d6dd833a%3A2%3A%7Bi%3A0%3Bs%3A17%3A%22_identity-backend%22%3Bi%3A1%3Bs%3A46%3A%22%5B2%2C%221SNgG1qkakmN2Frp80Qr1SX2kgRhIH88%22%2C2592000%5D%22%3B%7D'
    'PATH' => 'C:\\WINDOWS\\system32;C:\\WINDOWS;C:\\WINDOWS\\System32\\Wbem;C:\\WINDOWS\\System32\\WindowsPowerShell\\v1.0\\;C:\\xampp\\php;C:\\ProgramData\\ComposerSetup\\bin;C:\\Program Files\\Git\\cmd;C:\\Users\\Win10\\AppData\\Local\\Microsoft\\WindowsApps;C:\\Users\\Win10\\AppData\\Roaming\\Composer\\vendor\\bin'
    'SystemRoot' => 'C:\\WINDOWS'
    'COMSPEC' => 'C:\\WINDOWS\\system32\\cmd.exe'
    'PATHEXT' => '.COM;.EXE;.BAT;.CMD;.VBS;.VBE;.JS;.JSE;.WSF;.WSH;.MSC'
    'WINDIR' => 'C:\\WINDOWS'
    'SERVER_SIGNATURE' => '<address>Apache/2.4.25 (Win32) OpenSSL/1.0.2j PHP/7.1.1 Server at localhost Port 80</address>
'
    'SERVER_SOFTWARE' => 'Apache/2.4.25 (Win32) OpenSSL/1.0.2j PHP/7.1.1'
    'SERVER_NAME' => 'localhost'
    'SERVER_ADDR' => '::1'
    'SERVER_PORT' => '80'
    'REMOTE_ADDR' => '::1'
    'DOCUMENT_ROOT' => 'C:/xampp/htdocs'
    'REQUEST_SCHEME' => 'http'
    'CONTEXT_PREFIX' => ''
    'CONTEXT_DOCUMENT_ROOT' => 'C:/xampp/htdocs'
    'SERVER_ADMIN' => 'postmaster@localhost'
    'SCRIPT_FILENAME' => 'C:/xampp/htdocs/my_first_project/backend/web/index.php'
    'REMOTE_PORT' => '51251'
    'GATEWAY_INTERFACE' => 'CGI/1.1'
    'SERVER_PROTOCOL' => 'HTTP/1.1'
    'REQUEST_METHOD' => 'GET'
    'QUERY_STRING' => 'r=post%2Fview&id=3'
    'REQUEST_URI' => '/my_first_project/backend/web/index.php?r=post%2Fview&id=3'
    'SCRIPT_NAME' => '/my_first_project/backend/web/index.php'
    'PHP_SELF' => '/my_first_project/backend/web/index.php'
    'REQUEST_TIME_FLOAT' => 1491811542.329
    'REQUEST_TIME' => 1491811542
]
2017-04-10 10:05:42 [::1][2][-][error][yii\web\Session::open] session_start(): Cannot send session cache limiter - headers already sent (output started at C:\xampp\htdocs\my_first_project\vendor\yiisoft\yii2\web\Response.php:391)
2017-04-10 10:05:42 [::1][2][-][info][application] $_GET = [
    'r' => 'post/view'
    'id' => '3'
]

$_COOKIE = [
    'advanced-backend' => 'ocapqr5qgv09ionkbionbf547f'
    '_csrf-backend' => '106541c7716ce6243ffe7fcfaf136b2a6a12ae438d98e6f746d58b64bcb13ed8a:2:{i:0;s:13:\"_csrf-backend\";i:1;s:32:\"oFrjDE6vI0vSHT2i1W4CYRO-RckaEjk2\";}'
    'advanced-frontend' => 'qolu9g2b2l5l25v3anavkh87o4'
    '_csrf-frontend' => 'c02a00c759b3da9e0c4471ffb359e93f3c781a709c70f504ffcee85e0e08c80aa:2:{i:0;s:14:\"_csrf-frontend\";i:1;s:32:\"H_MBy0eyRt9CA7QrM1DtVa88L7n2FYMu\";}'
    '_identity-frontend' => '0cae966fd559089f9ace47d1a2ea5c6406c8e024f36e82c8327d6603adb72aeaa:2:{i:0;s:18:\"_identity-frontend\";i:1;s:46:\"[2,\"1SNgG1qkakmN2Frp80Qr1SX2kgRhIH88\",2592000]\";}'
    '_identity-backend' => 'c0d1afe5c2d610f9a90e14a0fab01645b813d345cb63ec03c8e2cb965d6dd833a:2:{i:0;s:17:\"_identity-backend\";i:1;s:46:\"[2,\"1SNgG1qkakmN2Frp80Qr1SX2kgRhIH88\",2592000]\";}'
]

$_SESSION = [
    '__flash' => []
    '__id' => 2
]

$_SERVER = [
    'MIBDIRS' => 'C:/xampp/php/extras/mibs'
    'MYSQL_HOME' => '\\xampp\\mysql\\bin'
    'OPENSSL_CONF' => 'C:/xampp/apache/bin/openssl.cnf'
    'PHP_PEAR_SYSCONF_DIR' => '\\xampp\\php'
    'PHPRC' => '\\xampp\\php'
    'TMP' => '\\xampp\\tmp'
    'HTTP_HOST' => 'localhost'
    'HTTP_CONNECTION' => 'keep-alive'
    'HTTP_CACHE_CONTROL' => 'max-age=0'
    'HTTP_UPGRADE_INSECURE_REQUESTS' => '1'
    'HTTP_USER_AGENT' => 'Mozilla/5.0 (Windows NT 10.0; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/57.0.2987.133 Safari/537.36'
    'HTTP_ACCEPT' => 'text/html,application/xhtml+xml,application/xml;q=0.9,image/webp,*/*;q=0.8'
    'HTTP_REFERER' => 'http://localhost/my_first_project/backend/web/index.php?r=post%2Findex'
    'HTTP_ACCEPT_ENCODING' => 'gzip, deflate, sdch, br'
    'HTTP_ACCEPT_LANGUAGE' => 'sk-SK,sk;q=0.8,cs;q=0.6,en-US;q=0.4,en;q=0.2'
    'HTTP_COOKIE' => 'advanced-backend=ocapqr5qgv09ionkbionbf547f; _csrf-backend=106541c7716ce6243ffe7fcfaf136b2a6a12ae438d98e6f746d58b64bcb13ed8a%3A2%3A%7Bi%3A0%3Bs%3A13%3A%22_csrf-backend%22%3Bi%3A1%3Bs%3A32%3A%22oFrjDE6vI0vSHT2i1W4CYRO-RckaEjk2%22%3B%7D; advanced-frontend=qolu9g2b2l5l25v3anavkh87o4; _csrf-frontend=c02a00c759b3da9e0c4471ffb359e93f3c781a709c70f504ffcee85e0e08c80aa%3A2%3A%7Bi%3A0%3Bs%3A14%3A%22_csrf-frontend%22%3Bi%3A1%3Bs%3A32%3A%22H_MBy0eyRt9CA7QrM1DtVa88L7n2FYMu%22%3B%7D; _identity-frontend=0cae966fd559089f9ace47d1a2ea5c6406c8e024f36e82c8327d6603adb72aeaa%3A2%3A%7Bi%3A0%3Bs%3A18%3A%22_identity-frontend%22%3Bi%3A1%3Bs%3A46%3A%22%5B2%2C%221SNgG1qkakmN2Frp80Qr1SX2kgRhIH88%22%2C2592000%5D%22%3B%7D; _identity-backend=c0d1afe5c2d610f9a90e14a0fab01645b813d345cb63ec03c8e2cb965d6dd833a%3A2%3A%7Bi%3A0%3Bs%3A17%3A%22_identity-backend%22%3Bi%3A1%3Bs%3A46%3A%22%5B2%2C%221SNgG1qkakmN2Frp80Qr1SX2kgRhIH88%22%2C2592000%5D%22%3B%7D'
    'PATH' => 'C:\\WINDOWS\\system32;C:\\WINDOWS;C:\\WINDOWS\\System32\\Wbem;C:\\WINDOWS\\System32\\WindowsPowerShell\\v1.0\\;C:\\xampp\\php;C:\\ProgramData\\ComposerSetup\\bin;C:\\Program Files\\Git\\cmd;C:\\Users\\Win10\\AppData\\Local\\Microsoft\\WindowsApps;C:\\Users\\Win10\\AppData\\Roaming\\Composer\\vendor\\bin'
    'SystemRoot' => 'C:\\WINDOWS'
    'COMSPEC' => 'C:\\WINDOWS\\system32\\cmd.exe'
    'PATHEXT' => '.COM;.EXE;.BAT;.CMD;.VBS;.VBE;.JS;.JSE;.WSF;.WSH;.MSC'
    'WINDIR' => 'C:\\WINDOWS'
    'SERVER_SIGNATURE' => '<address>Apache/2.4.25 (Win32) OpenSSL/1.0.2j PHP/7.1.1 Server at localhost Port 80</address>
'
    'SERVER_SOFTWARE' => 'Apache/2.4.25 (Win32) OpenSSL/1.0.2j PHP/7.1.1'
    'SERVER_NAME' => 'localhost'
    'SERVER_ADDR' => '::1'
    'SERVER_PORT' => '80'
    'REMOTE_ADDR' => '::1'
    'DOCUMENT_ROOT' => 'C:/xampp/htdocs'
    'REQUEST_SCHEME' => 'http'
    'CONTEXT_PREFIX' => ''
    'CONTEXT_DOCUMENT_ROOT' => 'C:/xampp/htdocs'
    'SERVER_ADMIN' => 'postmaster@localhost'
    'SCRIPT_FILENAME' => 'C:/xampp/htdocs/my_first_project/backend/web/index.php'
    'REMOTE_PORT' => '51251'
    'GATEWAY_INTERFACE' => 'CGI/1.1'
    'SERVER_PROTOCOL' => 'HTTP/1.1'
    'REQUEST_METHOD' => 'GET'
    'QUERY_STRING' => 'r=post%2Fview&id=3'
    'REQUEST_URI' => '/my_first_project/backend/web/index.php?r=post%2Fview&id=3'
    'SCRIPT_NAME' => '/my_first_project/backend/web/index.php'
    'PHP_SELF' => '/my_first_project/backend/web/index.php'
    'REQUEST_TIME_FLOAT' => 1491811542.329
    'REQUEST_TIME' => 1491811542
]
2017-04-10 10:07:30 [::1][2][ocapqr5qgv09ionkbionbf547f][error][yii\web\HttpException:400] yii\web\BadRequestHttpException: Missing required parameters: id in C:\xampp\htdocs\my_first_project\vendor\yiisoft\yii2\web\Controller.php:149
Stack trace:
#0 C:\xampp\htdocs\my_first_project\vendor\yiisoft\yii2\base\InlineAction.php(51): yii\web\Controller->bindActionParams(Object(yii\base\InlineAction), Array)
#1 C:\xampp\htdocs\my_first_project\vendor\yiisoft\yii2\base\Controller.php(156): yii\base\InlineAction->runWithParams(Array)
#2 C:\xampp\htdocs\my_first_project\vendor\yiisoft\yii2\base\Module.php(523): yii\base\Controller->runAction('delete', Array)
#3 C:\xampp\htdocs\my_first_project\vendor\yiisoft\yii2\web\Application.php(102): yii\base\Module->runAction('comment/delete', Array)
#4 C:\xampp\htdocs\my_first_project\vendor\yiisoft\yii2\base\Application.php(380): yii\web\Application->handleRequest(Object(yii\web\Request))
#5 C:\xampp\htdocs\my_first_project\backend\web\index.php(17): yii\base\Application->run()
#6 {main}
2017-04-10 10:07:30 [::1][2][ocapqr5qgv09ionkbionbf547f][info][application] $_GET = [
    'r' => 'comment/delete'
    'id_comment' => '5'
]

$_POST = [
    '_csrf-backend' => 'bG1qcE96dGEDKxgaCz9CFyVdHCMHLkYIXTpeMxYoO0w.DgERChAfUw=='
]

$_COOKIE = [
    'advanced-backend' => 'ocapqr5qgv09ionkbionbf547f'
    '_csrf-backend' => '106541c7716ce6243ffe7fcfaf136b2a6a12ae438d98e6f746d58b64bcb13ed8a:2:{i:0;s:13:\"_csrf-backend\";i:1;s:32:\"oFrjDE6vI0vSHT2i1W4CYRO-RckaEjk2\";}'
    'advanced-frontend' => 'qolu9g2b2l5l25v3anavkh87o4'
    '_csrf-frontend' => 'c02a00c759b3da9e0c4471ffb359e93f3c781a709c70f504ffcee85e0e08c80aa:2:{i:0;s:14:\"_csrf-frontend\";i:1;s:32:\"H_MBy0eyRt9CA7QrM1DtVa88L7n2FYMu\";}'
    '_identity-frontend' => '0cae966fd559089f9ace47d1a2ea5c6406c8e024f36e82c8327d6603adb72aeaa:2:{i:0;s:18:\"_identity-frontend\";i:1;s:46:\"[2,\"1SNgG1qkakmN2Frp80Qr1SX2kgRhIH88\",2592000]\";}'
    '_identity-backend' => 'c0d1afe5c2d610f9a90e14a0fab01645b813d345cb63ec03c8e2cb965d6dd833a:2:{i:0;s:17:\"_identity-backend\";i:1;s:46:\"[2,\"1SNgG1qkakmN2Frp80Qr1SX2kgRhIH88\",2592000]\";}'
]

$_SESSION = [
    '__flash' => []
    '__id' => 2
]

$_SERVER = [
    'MIBDIRS' => 'C:/xampp/php/extras/mibs'
    'MYSQL_HOME' => '\\xampp\\mysql\\bin'
    'OPENSSL_CONF' => 'C:/xampp/apache/bin/openssl.cnf'
    'PHP_PEAR_SYSCONF_DIR' => '\\xampp\\php'
    'PHPRC' => '\\xampp\\php'
    'TMP' => '\\xampp\\tmp'
    'HTTP_HOST' => 'localhost'
    'HTTP_CONNECTION' => 'keep-alive'
    'CONTENT_LENGTH' => '74'
    'HTTP_CACHE_CONTROL' => 'max-age=0'
    'HTTP_ORIGIN' => 'http://localhost'
    'HTTP_UPGRADE_INSECURE_REQUESTS' => '1'
    'HTTP_USER_AGENT' => 'Mozilla/5.0 (Windows NT 10.0; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/57.0.2987.133 Safari/537.36'
    'CONTENT_TYPE' => 'application/x-www-form-urlencoded'
    'HTTP_ACCEPT' => 'text/html,application/xhtml+xml,application/xml;q=0.9,image/webp,*/*;q=0.8'
    'HTTP_REFERER' => 'http://localhost/my_first_project/backend/web/index.php?r=post%2Fview&id=3'
    'HTTP_ACCEPT_ENCODING' => 'gzip, deflate, br'
    'HTTP_ACCEPT_LANGUAGE' => 'sk-SK,sk;q=0.8,cs;q=0.6,en-US;q=0.4,en;q=0.2'
    'HTTP_COOKIE' => 'advanced-backend=ocapqr5qgv09ionkbionbf547f; _csrf-backend=106541c7716ce6243ffe7fcfaf136b2a6a12ae438d98e6f746d58b64bcb13ed8a%3A2%3A%7Bi%3A0%3Bs%3A13%3A%22_csrf-backend%22%3Bi%3A1%3Bs%3A32%3A%22oFrjDE6vI0vSHT2i1W4CYRO-RckaEjk2%22%3B%7D; advanced-frontend=qolu9g2b2l5l25v3anavkh87o4; _csrf-frontend=c02a00c759b3da9e0c4471ffb359e93f3c781a709c70f504ffcee85e0e08c80aa%3A2%3A%7Bi%3A0%3Bs%3A14%3A%22_csrf-frontend%22%3Bi%3A1%3Bs%3A32%3A%22H_MBy0eyRt9CA7QrM1DtVa88L7n2FYMu%22%3B%7D; _identity-frontend=0cae966fd559089f9ace47d1a2ea5c6406c8e024f36e82c8327d6603adb72aeaa%3A2%3A%7Bi%3A0%3Bs%3A18%3A%22_identity-frontend%22%3Bi%3A1%3Bs%3A46%3A%22%5B2%2C%221SNgG1qkakmN2Frp80Qr1SX2kgRhIH88%22%2C2592000%5D%22%3B%7D; _identity-backend=c0d1afe5c2d610f9a90e14a0fab01645b813d345cb63ec03c8e2cb965d6dd833a%3A2%3A%7Bi%3A0%3Bs%3A17%3A%22_identity-backend%22%3Bi%3A1%3Bs%3A46%3A%22%5B2%2C%221SNgG1qkakmN2Frp80Qr1SX2kgRhIH88%22%2C2592000%5D%22%3B%7D'
    'PATH' => 'C:\\WINDOWS\\system32;C:\\WINDOWS;C:\\WINDOWS\\System32\\Wbem;C:\\WINDOWS\\System32\\WindowsPowerShell\\v1.0\\;C:\\xampp\\php;C:\\ProgramData\\ComposerSetup\\bin;C:\\Program Files\\Git\\cmd;C:\\Users\\Win10\\AppData\\Local\\Microsoft\\WindowsApps;C:\\Users\\Win10\\AppData\\Roaming\\Composer\\vendor\\bin'
    'SystemRoot' => 'C:\\WINDOWS'
    'COMSPEC' => 'C:\\WINDOWS\\system32\\cmd.exe'
    'PATHEXT' => '.COM;.EXE;.BAT;.CMD;.VBS;.VBE;.JS;.JSE;.WSF;.WSH;.MSC'
    'WINDIR' => 'C:\\WINDOWS'
    'SERVER_SIGNATURE' => '<address>Apache/2.4.25 (Win32) OpenSSL/1.0.2j PHP/7.1.1 Server at localhost Port 80</address>
'
    'SERVER_SOFTWARE' => 'Apache/2.4.25 (Win32) OpenSSL/1.0.2j PHP/7.1.1'
    'SERVER_NAME' => 'localhost'
    'SERVER_ADDR' => '::1'
    'SERVER_PORT' => '80'
    'REMOTE_ADDR' => '::1'
    'DOCUMENT_ROOT' => 'C:/xampp/htdocs'
    'REQUEST_SCHEME' => 'http'
    'CONTEXT_PREFIX' => ''
    'CONTEXT_DOCUMENT_ROOT' => 'C:/xampp/htdocs'
    'SERVER_ADMIN' => 'postmaster@localhost'
    'SCRIPT_FILENAME' => 'C:/xampp/htdocs/my_first_project/backend/web/index.php'
    'REMOTE_PORT' => '51289'
    'GATEWAY_INTERFACE' => 'CGI/1.1'
    'SERVER_PROTOCOL' => 'HTTP/1.1'
    'REQUEST_METHOD' => 'POST'
    'QUERY_STRING' => 'r=comment%2Fdelete&id_comment=5'
    'REQUEST_URI' => '/my_first_project/backend/web/index.php?r=comment%2Fdelete&id_comment=5'
    'SCRIPT_NAME' => '/my_first_project/backend/web/index.php'
    'PHP_SELF' => '/my_first_project/backend/web/index.php'
    'REQUEST_TIME_FLOAT' => 1491811650.165
    'REQUEST_TIME' => 1491811650
]
2017-04-10 10:08:00 [::1][-][-][error][yii\db\IntegrityException] PDOException: SQLSTATE[23000]: Integrity constraint violation: 1451 Cannot delete or update a parent row: a foreign key constraint fails (`yii2`.`comment`, CONSTRAINT `fk_comment_comment1` FOREIGN KEY (`reply_id_coment`) REFERENCES `comment` (`id_comment`) ON DELETE NO ACTION ON UPDATE NO ACTION) in C:\xampp\htdocs\my_first_project\vendor\yiisoft\yii2\db\Command.php:846
Stack trace:
#0 C:\xampp\htdocs\my_first_project\vendor\yiisoft\yii2\db\Command.php(846): PDOStatement->execute()
#1 C:\xampp\htdocs\my_first_project\vendor\yiisoft\yii2\db\ActiveRecord.php(296): yii\db\Command->execute()
#2 C:\xampp\htdocs\my_first_project\vendor\yiisoft\yii2\db\ActiveRecord.php(653): yii\db\ActiveRecord::deleteAll(Array)
#3 C:\xampp\htdocs\my_first_project\vendor\yiisoft\yii2\db\ActiveRecord.php(613): yii\db\ActiveRecord->deleteInternal()
#4 C:\xampp\htdocs\my_first_project\backend\controllers\CommentController.php(113): yii\db\ActiveRecord->delete()
#5 [internal function]: backend\controllers\CommentController->actionDelete('5')
#6 C:\xampp\htdocs\my_first_project\vendor\yiisoft\yii2\base\InlineAction.php(57): call_user_func_array(Array, Array)
#7 C:\xampp\htdocs\my_first_project\vendor\yiisoft\yii2\base\Controller.php(156): yii\base\InlineAction->runWithParams(Array)
#8 C:\xampp\htdocs\my_first_project\vendor\yiisoft\yii2\base\Module.php(523): yii\base\Controller->runAction('delete', Array)
#9 C:\xampp\htdocs\my_first_project\vendor\yiisoft\yii2\web\Application.php(102): yii\base\Module->runAction('comment/delete', Array)
#10 C:\xampp\htdocs\my_first_project\vendor\yiisoft\yii2\base\Application.php(380): yii\web\Application->handleRequest(Object(yii\web\Request))
#11 C:\xampp\htdocs\my_first_project\backend\web\index.php(17): yii\base\Application->run()
#12 {main}

Next yii\db\IntegrityException: SQLSTATE[23000]: Integrity constraint violation: 1451 Cannot delete or update a parent row: a foreign key constraint fails (`yii2`.`comment`, CONSTRAINT `fk_comment_comment1` FOREIGN KEY (`reply_id_coment`) REFERENCES `comment` (`id_comment`) ON DELETE NO ACTION ON UPDATE NO ACTION)
The SQL being executed was: DELETE FROM `comment` WHERE `id_comment`=5 in C:\xampp\htdocs\my_first_project\vendor\yiisoft\yii2\db\Schema.php:636
Stack trace:
#0 C:\xampp\htdocs\my_first_project\vendor\yiisoft\yii2\db\Command.php(856): yii\db\Schema->convertException(Object(PDOException), 'DELETE FROM `co...')
#1 C:\xampp\htdocs\my_first_project\vendor\yiisoft\yii2\db\ActiveRecord.php(296): yii\db\Command->execute()
#2 C:\xampp\htdocs\my_first_project\vendor\yiisoft\yii2\db\ActiveRecord.php(653): yii\db\ActiveRecord::deleteAll(Array)
#3 C:\xampp\htdocs\my_first_project\vendor\yiisoft\yii2\db\ActiveRecord.php(613): yii\db\ActiveRecord->deleteInternal()
#4 C:\xampp\htdocs\my_first_project\backend\controllers\CommentController.php(113): yii\db\ActiveRecord->delete()
#5 [internal function]: backend\controllers\CommentController->actionDelete('5')
#6 C:\xampp\htdocs\my_first_project\vendor\yiisoft\yii2\base\InlineAction.php(57): call_user_func_array(Array, Array)
#7 C:\xampp\htdocs\my_first_project\vendor\yiisoft\yii2\base\Controller.php(156): yii\base\InlineAction->runWithParams(Array)
#8 C:\xampp\htdocs\my_first_project\vendor\yiisoft\yii2\base\Module.php(523): yii\base\Controller->runAction('delete', Array)
#9 C:\xampp\htdocs\my_first_project\vendor\yiisoft\yii2\web\Application.php(102): yii\base\Module->runAction('comment/delete', Array)
#10 C:\xampp\htdocs\my_first_project\vendor\yiisoft\yii2\base\Application.php(380): yii\web\Application->handleRequest(Object(yii\web\Request))
#11 C:\xampp\htdocs\my_first_project\backend\web\index.php(17): yii\base\Application->run()
#12 {main}
Additional Information:
Array
(
    [0] => 23000
    [1] => 1451
    [2] => Cannot delete or update a parent row: a foreign key constraint fails (`yii2`.`comment`, CONSTRAINT `fk_comment_comment1` FOREIGN KEY (`reply_id_coment`) REFERENCES `comment` (`id_comment`) ON DELETE NO ACTION ON UPDATE NO ACTION)
)

2017-04-10 10:08:00 [::1][-][-][info][application] $_GET = [
    'r' => 'comment/delete'
    'id' => '5'
]

$_POST = [
    '_csrf-backend' => 'Ri1CYjM0VWopazAId3FjHA8dNDF7YGcDd3p2IWpmGkcUTikDdl4.WA=='
]

$_COOKIE = [
    'advanced-backend' => 'ocapqr5qgv09ionkbionbf547f'
    '_csrf-backend' => '106541c7716ce6243ffe7fcfaf136b2a6a12ae438d98e6f746d58b64bcb13ed8a:2:{i:0;s:13:\"_csrf-backend\";i:1;s:32:\"oFrjDE6vI0vSHT2i1W4CYRO-RckaEjk2\";}'
    'advanced-frontend' => 'qolu9g2b2l5l25v3anavkh87o4'
    '_csrf-frontend' => 'c02a00c759b3da9e0c4471ffb359e93f3c781a709c70f504ffcee85e0e08c80aa:2:{i:0;s:14:\"_csrf-frontend\";i:1;s:32:\"H_MBy0eyRt9CA7QrM1DtVa88L7n2FYMu\";}'
    '_identity-frontend' => '0cae966fd559089f9ace47d1a2ea5c6406c8e024f36e82c8327d6603adb72aeaa:2:{i:0;s:18:\"_identity-frontend\";i:1;s:46:\"[2,\"1SNgG1qkakmN2Frp80Qr1SX2kgRhIH88\",2592000]\";}'
    '_identity-backend' => 'c0d1afe5c2d610f9a90e14a0fab01645b813d345cb63ec03c8e2cb965d6dd833a:2:{i:0;s:17:\"_identity-backend\";i:1;s:46:\"[2,\"1SNgG1qkakmN2Frp80Qr1SX2kgRhIH88\",2592000]\";}'
]

$_SERVER = [
    'MIBDIRS' => 'C:/xampp/php/extras/mibs'
    'MYSQL_HOME' => '\\xampp\\mysql\\bin'
    'OPENSSL_CONF' => 'C:/xampp/apache/bin/openssl.cnf'
    'PHP_PEAR_SYSCONF_DIR' => '\\xampp\\php'
    'PHPRC' => '\\xampp\\php'
    'TMP' => '\\xampp\\tmp'
    'HTTP_HOST' => 'localhost'
    'HTTP_CONNECTION' => 'keep-alive'
    'CONTENT_LENGTH' => '74'
    'HTTP_CACHE_CONTROL' => 'max-age=0'
    'HTTP_ORIGIN' => 'http://localhost'
    'HTTP_UPGRADE_INSECURE_REQUESTS' => '1'
    'HTTP_USER_AGENT' => 'Mozilla/5.0 (Windows NT 10.0; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/57.0.2987.133 Safari/537.36'
    'CONTENT_TYPE' => 'application/x-www-form-urlencoded'
    'HTTP_ACCEPT' => 'text/html,application/xhtml+xml,application/xml;q=0.9,image/webp,*/*;q=0.8'
    'HTTP_REFERER' => 'http://localhost/my_first_project/backend/web/index.php?r=post%2Fview&id=3'
    'HTTP_ACCEPT_ENCODING' => 'gzip, deflate, br'
    'HTTP_ACCEPT_LANGUAGE' => 'sk-SK,sk;q=0.8,cs;q=0.6,en-US;q=0.4,en;q=0.2'
    'HTTP_COOKIE' => 'advanced-backend=ocapqr5qgv09ionkbionbf547f; _csrf-backend=106541c7716ce6243ffe7fcfaf136b2a6a12ae438d98e6f746d58b64bcb13ed8a%3A2%3A%7Bi%3A0%3Bs%3A13%3A%22_csrf-backend%22%3Bi%3A1%3Bs%3A32%3A%22oFrjDE6vI0vSHT2i1W4CYRO-RckaEjk2%22%3B%7D; advanced-frontend=qolu9g2b2l5l25v3anavkh87o4; _csrf-frontend=c02a00c759b3da9e0c4471ffb359e93f3c781a709c70f504ffcee85e0e08c80aa%3A2%3A%7Bi%3A0%3Bs%3A14%3A%22_csrf-frontend%22%3Bi%3A1%3Bs%3A32%3A%22H_MBy0eyRt9CA7QrM1DtVa88L7n2FYMu%22%3B%7D; _identity-frontend=0cae966fd559089f9ace47d1a2ea5c6406c8e024f36e82c8327d6603adb72aeaa%3A2%3A%7Bi%3A0%3Bs%3A18%3A%22_identity-frontend%22%3Bi%3A1%3Bs%3A46%3A%22%5B2%2C%221SNgG1qkakmN2Frp80Qr1SX2kgRhIH88%22%2C2592000%5D%22%3B%7D; _identity-backend=c0d1afe5c2d610f9a90e14a0fab01645b813d345cb63ec03c8e2cb965d6dd833a%3A2%3A%7Bi%3A0%3Bs%3A17%3A%22_identity-backend%22%3Bi%3A1%3Bs%3A46%3A%22%5B2%2C%221SNgG1qkakmN2Frp80Qr1SX2kgRhIH88%22%2C2592000%5D%22%3B%7D'
    'PATH' => 'C:\\WINDOWS\\system32;C:\\WINDOWS;C:\\WINDOWS\\System32\\Wbem;C:\\WINDOWS\\System32\\WindowsPowerShell\\v1.0\\;C:\\xampp\\php;C:\\ProgramData\\ComposerSetup\\bin;C:\\Program Files\\Git\\cmd;C:\\Users\\Win10\\AppData\\Local\\Microsoft\\WindowsApps;C:\\Users\\Win10\\AppData\\Roaming\\Composer\\vendor\\bin'
    'SystemRoot' => 'C:\\WINDOWS'
    'COMSPEC' => 'C:\\WINDOWS\\system32\\cmd.exe'
    'PATHEXT' => '.COM;.EXE;.BAT;.CMD;.VBS;.VBE;.JS;.JSE;.WSF;.WSH;.MSC'
    'WINDIR' => 'C:\\WINDOWS'
    'SERVER_SIGNATURE' => '<address>Apache/2.4.25 (Win32) OpenSSL/1.0.2j PHP/7.1.1 Server at localhost Port 80</address>
'
    'SERVER_SOFTWARE' => 'Apache/2.4.25 (Win32) OpenSSL/1.0.2j PHP/7.1.1'
    'SERVER_NAME' => 'localhost'
    'SERVER_ADDR' => '::1'
    'SERVER_PORT' => '80'
    'REMOTE_ADDR' => '::1'
    'DOCUMENT_ROOT' => 'C:/xampp/htdocs'
    'REQUEST_SCHEME' => 'http'
    'CONTEXT_PREFIX' => ''
    'CONTEXT_DOCUMENT_ROOT' => 'C:/xampp/htdocs'
    'SERVER_ADMIN' => 'postmaster@localhost'
    'SCRIPT_FILENAME' => 'C:/xampp/htdocs/my_first_project/backend/web/index.php'
    'REMOTE_PORT' => '51304'
    'GATEWAY_INTERFACE' => 'CGI/1.1'
    'SERVER_PROTOCOL' => 'HTTP/1.1'
    'REQUEST_METHOD' => 'POST'
    'QUERY_STRING' => 'r=comment%2Fdelete&id=5'
    'REQUEST_URI' => '/my_first_project/backend/web/index.php?r=comment%2Fdelete&id=5'
    'SCRIPT_NAME' => '/my_first_project/backend/web/index.php'
    'PHP_SELF' => '/my_first_project/backend/web/index.php'
    'REQUEST_TIME_FLOAT' => 1491811680.002
    'REQUEST_TIME' => 1491811680
]
2017-04-10 10:08:00 [::1][2][-][error][yii\web\Session::open] session_start(): Cannot send session cache limiter - headers already sent (output started at C:\xampp\htdocs\my_first_project\vendor\yiisoft\yii2\web\Response.php:391)
2017-04-10 10:08:00 [::1][2][-][info][application] $_GET = [
    'r' => 'comment/delete'
    'id' => '5'
]

$_POST = [
    '_csrf-backend' => 'Ri1CYjM0VWopazAId3FjHA8dNDF7YGcDd3p2IWpmGkcUTikDdl4.WA=='
]

$_COOKIE = [
    'advanced-backend' => 'ocapqr5qgv09ionkbionbf547f'
    '_csrf-backend' => '106541c7716ce6243ffe7fcfaf136b2a6a12ae438d98e6f746d58b64bcb13ed8a:2:{i:0;s:13:\"_csrf-backend\";i:1;s:32:\"oFrjDE6vI0vSHT2i1W4CYRO-RckaEjk2\";}'
    'advanced-frontend' => 'qolu9g2b2l5l25v3anavkh87o4'
    '_csrf-frontend' => 'c02a00c759b3da9e0c4471ffb359e93f3c781a709c70f504ffcee85e0e08c80aa:2:{i:0;s:14:\"_csrf-frontend\";i:1;s:32:\"H_MBy0eyRt9CA7QrM1DtVa88L7n2FYMu\";}'
    '_identity-frontend' => '0cae966fd559089f9ace47d1a2ea5c6406c8e024f36e82c8327d6603adb72aeaa:2:{i:0;s:18:\"_identity-frontend\";i:1;s:46:\"[2,\"1SNgG1qkakmN2Frp80Qr1SX2kgRhIH88\",2592000]\";}'
    '_identity-backend' => 'c0d1afe5c2d610f9a90e14a0fab01645b813d345cb63ec03c8e2cb965d6dd833a:2:{i:0;s:17:\"_identity-backend\";i:1;s:46:\"[2,\"1SNgG1qkakmN2Frp80Qr1SX2kgRhIH88\",2592000]\";}'
]

$_SESSION = [
    '__flash' => []
    '__id' => 2
]

$_SERVER = [
    'MIBDIRS' => 'C:/xampp/php/extras/mibs'
    'MYSQL_HOME' => '\\xampp\\mysql\\bin'
    'OPENSSL_CONF' => 'C:/xampp/apache/bin/openssl.cnf'
    'PHP_PEAR_SYSCONF_DIR' => '\\xampp\\php'
    'PHPRC' => '\\xampp\\php'
    'TMP' => '\\xampp\\tmp'
    'HTTP_HOST' => 'localhost'
    'HTTP_CONNECTION' => 'keep-alive'
    'CONTENT_LENGTH' => '74'
    'HTTP_CACHE_CONTROL' => 'max-age=0'
    'HTTP_ORIGIN' => 'http://localhost'
    'HTTP_UPGRADE_INSECURE_REQUESTS' => '1'
    'HTTP_USER_AGENT' => 'Mozilla/5.0 (Windows NT 10.0; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/57.0.2987.133 Safari/537.36'
    'CONTENT_TYPE' => 'application/x-www-form-urlencoded'
    'HTTP_ACCEPT' => 'text/html,application/xhtml+xml,application/xml;q=0.9,image/webp,*/*;q=0.8'
    'HTTP_REFERER' => 'http://localhost/my_first_project/backend/web/index.php?r=post%2Fview&id=3'
    'HTTP_ACCEPT_ENCODING' => 'gzip, deflate, br'
    'HTTP_ACCEPT_LANGUAGE' => 'sk-SK,sk;q=0.8,cs;q=0.6,en-US;q=0.4,en;q=0.2'
    'HTTP_COOKIE' => 'advanced-backend=ocapqr5qgv09ionkbionbf547f; _csrf-backend=106541c7716ce6243ffe7fcfaf136b2a6a12ae438d98e6f746d58b64bcb13ed8a%3A2%3A%7Bi%3A0%3Bs%3A13%3A%22_csrf-backend%22%3Bi%3A1%3Bs%3A32%3A%22oFrjDE6vI0vSHT2i1W4CYRO-RckaEjk2%22%3B%7D; advanced-frontend=qolu9g2b2l5l25v3anavkh87o4; _csrf-frontend=c02a00c759b3da9e0c4471ffb359e93f3c781a709c70f504ffcee85e0e08c80aa%3A2%3A%7Bi%3A0%3Bs%3A14%3A%22_csrf-frontend%22%3Bi%3A1%3Bs%3A32%3A%22H_MBy0eyRt9CA7QrM1DtVa88L7n2FYMu%22%3B%7D; _identity-frontend=0cae966fd559089f9ace47d1a2ea5c6406c8e024f36e82c8327d6603adb72aeaa%3A2%3A%7Bi%3A0%3Bs%3A18%3A%22_identity-frontend%22%3Bi%3A1%3Bs%3A46%3A%22%5B2%2C%221SNgG1qkakmN2Frp80Qr1SX2kgRhIH88%22%2C2592000%5D%22%3B%7D; _identity-backend=c0d1afe5c2d610f9a90e14a0fab01645b813d345cb63ec03c8e2cb965d6dd833a%3A2%3A%7Bi%3A0%3Bs%3A17%3A%22_identity-backend%22%3Bi%3A1%3Bs%3A46%3A%22%5B2%2C%221SNgG1qkakmN2Frp80Qr1SX2kgRhIH88%22%2C2592000%5D%22%3B%7D'
    'PATH' => 'C:\\WINDOWS\\system32;C:\\WINDOWS;C:\\WINDOWS\\System32\\Wbem;C:\\WINDOWS\\System32\\WindowsPowerShell\\v1.0\\;C:\\xampp\\php;C:\\ProgramData\\ComposerSetup\\bin;C:\\Program Files\\Git\\cmd;C:\\Users\\Win10\\AppData\\Local\\Microsoft\\WindowsApps;C:\\Users\\Win10\\AppData\\Roaming\\Composer\\vendor\\bin'
    'SystemRoot' => 'C:\\WINDOWS'
    'COMSPEC' => 'C:\\WINDOWS\\system32\\cmd.exe'
    'PATHEXT' => '.COM;.EXE;.BAT;.CMD;.VBS;.VBE;.JS;.JSE;.WSF;.WSH;.MSC'
    'WINDIR' => 'C:\\WINDOWS'
    'SERVER_SIGNATURE' => '<address>Apache/2.4.25 (Win32) OpenSSL/1.0.2j PHP/7.1.1 Server at localhost Port 80</address>
'
    'SERVER_SOFTWARE' => 'Apache/2.4.25 (Win32) OpenSSL/1.0.2j PHP/7.1.1'
    'SERVER_NAME' => 'localhost'
    'SERVER_ADDR' => '::1'
    'SERVER_PORT' => '80'
    'REMOTE_ADDR' => '::1'
    'DOCUMENT_ROOT' => 'C:/xampp/htdocs'
    'REQUEST_SCHEME' => 'http'
    'CONTEXT_PREFIX' => ''
    'CONTEXT_DOCUMENT_ROOT' => 'C:/xampp/htdocs'
    'SERVER_ADMIN' => 'postmaster@localhost'
    'SCRIPT_FILENAME' => 'C:/xampp/htdocs/my_first_project/backend/web/index.php'
    'REMOTE_PORT' => '51304'
    'GATEWAY_INTERFACE' => 'CGI/1.1'
    'SERVER_PROTOCOL' => 'HTTP/1.1'
    'REQUEST_METHOD' => 'POST'
    'QUERY_STRING' => 'r=comment%2Fdelete&id=5'
    'REQUEST_URI' => '/my_first_project/backend/web/index.php?r=comment%2Fdelete&id=5'
    'SCRIPT_NAME' => '/my_first_project/backend/web/index.php'
    'PHP_SELF' => '/my_first_project/backend/web/index.php'
    'REQUEST_TIME_FLOAT' => 1491811680.002
    'REQUEST_TIME' => 1491811680
]
2017-04-10 10:08:32 [::1][-][-][error][yii\db\IntegrityException] PDOException: SQLSTATE[23000]: Integrity constraint violation: 1451 Cannot delete or update a parent row: a foreign key constraint fails (`yii2`.`comment`, CONSTRAINT `fk_comment_comment1` FOREIGN KEY (`reply_id_coment`) REFERENCES `comment` (`id_comment`) ON DELETE NO ACTION ON UPDATE NO ACTION) in C:\xampp\htdocs\my_first_project\vendor\yiisoft\yii2\db\Command.php:846
Stack trace:
#0 C:\xampp\htdocs\my_first_project\vendor\yiisoft\yii2\db\Command.php(846): PDOStatement->execute()
#1 C:\xampp\htdocs\my_first_project\vendor\yiisoft\yii2\db\ActiveRecord.php(296): yii\db\Command->execute()
#2 C:\xampp\htdocs\my_first_project\vendor\yiisoft\yii2\db\ActiveRecord.php(653): yii\db\ActiveRecord::deleteAll(Array)
#3 C:\xampp\htdocs\my_first_project\vendor\yiisoft\yii2\db\ActiveRecord.php(613): yii\db\ActiveRecord->deleteInternal()
#4 C:\xampp\htdocs\my_first_project\backend\controllers\CommentController.php(113): yii\db\ActiveRecord->delete()
#5 [internal function]: backend\controllers\CommentController->actionDelete('5')
#6 C:\xampp\htdocs\my_first_project\vendor\yiisoft\yii2\base\InlineAction.php(57): call_user_func_array(Array, Array)
#7 C:\xampp\htdocs\my_first_project\vendor\yiisoft\yii2\base\Controller.php(156): yii\base\InlineAction->runWithParams(Array)
#8 C:\xampp\htdocs\my_first_project\vendor\yiisoft\yii2\base\Module.php(523): yii\base\Controller->runAction('delete', Array)
#9 C:\xampp\htdocs\my_first_project\vendor\yiisoft\yii2\web\Application.php(102): yii\base\Module->runAction('comment/delete', Array)
#10 C:\xampp\htdocs\my_first_project\vendor\yiisoft\yii2\base\Application.php(380): yii\web\Application->handleRequest(Object(yii\web\Request))
#11 C:\xampp\htdocs\my_first_project\backend\web\index.php(17): yii\base\Application->run()
#12 {main}

Next yii\db\IntegrityException: SQLSTATE[23000]: Integrity constraint violation: 1451 Cannot delete or update a parent row: a foreign key constraint fails (`yii2`.`comment`, CONSTRAINT `fk_comment_comment1` FOREIGN KEY (`reply_id_coment`) REFERENCES `comment` (`id_comment`) ON DELETE NO ACTION ON UPDATE NO ACTION)
The SQL being executed was: DELETE FROM `comment` WHERE `id_comment`=5 in C:\xampp\htdocs\my_first_project\vendor\yiisoft\yii2\db\Schema.php:636
Stack trace:
#0 C:\xampp\htdocs\my_first_project\vendor\yiisoft\yii2\db\Command.php(856): yii\db\Schema->convertException(Object(PDOException), 'DELETE FROM `co...')
#1 C:\xampp\htdocs\my_first_project\vendor\yiisoft\yii2\db\ActiveRecord.php(296): yii\db\Command->execute()
#2 C:\xampp\htdocs\my_first_project\vendor\yiisoft\yii2\db\ActiveRecord.php(653): yii\db\ActiveRecord::deleteAll(Array)
#3 C:\xampp\htdocs\my_first_project\vendor\yiisoft\yii2\db\ActiveRecord.php(613): yii\db\ActiveRecord->deleteInternal()
#4 C:\xampp\htdocs\my_first_project\backend\controllers\CommentController.php(113): yii\db\ActiveRecord->delete()
#5 [internal function]: backend\controllers\CommentController->actionDelete('5')
#6 C:\xampp\htdocs\my_first_project\vendor\yiisoft\yii2\base\InlineAction.php(57): call_user_func_array(Array, Array)
#7 C:\xampp\htdocs\my_first_project\vendor\yiisoft\yii2\base\Controller.php(156): yii\base\InlineAction->runWithParams(Array)
#8 C:\xampp\htdocs\my_first_project\vendor\yiisoft\yii2\base\Module.php(523): yii\base\Controller->runAction('delete', Array)
#9 C:\xampp\htdocs\my_first_project\vendor\yiisoft\yii2\web\Application.php(102): yii\base\Module->runAction('comment/delete', Array)
#10 C:\xampp\htdocs\my_first_project\vendor\yiisoft\yii2\base\Application.php(380): yii\web\Application->handleRequest(Object(yii\web\Request))
#11 C:\xampp\htdocs\my_first_project\backend\web\index.php(17): yii\base\Application->run()
#12 {main}
Additional Information:
Array
(
    [0] => 23000
    [1] => 1451
    [2] => Cannot delete or update a parent row: a foreign key constraint fails (`yii2`.`comment`, CONSTRAINT `fk_comment_comment1` FOREIGN KEY (`reply_id_coment`) REFERENCES `comment` (`id_comment`) ON DELETE NO ACTION ON UPDATE NO ACTION)
)

2017-04-10 10:08:32 [::1][-][-][info][application] $_GET = [
    'r' => 'comment/delete'
    'id' => '5'
]

$_POST = [
    '_csrf-backend' => 'dHZHS3VNNFobMDUhMQgCLD1GMRg9GQYzRSFzCCwfe3cmFSwqMCdfaA=='
]

$_COOKIE = [
    'advanced-backend' => 'ocapqr5qgv09ionkbionbf547f'
    '_csrf-backend' => '106541c7716ce6243ffe7fcfaf136b2a6a12ae438d98e6f746d58b64bcb13ed8a:2:{i:0;s:13:\"_csrf-backend\";i:1;s:32:\"oFrjDE6vI0vSHT2i1W4CYRO-RckaEjk2\";}'
    'advanced-frontend' => 'qolu9g2b2l5l25v3anavkh87o4'
    '_csrf-frontend' => 'c02a00c759b3da9e0c4471ffb359e93f3c781a709c70f504ffcee85e0e08c80aa:2:{i:0;s:14:\"_csrf-frontend\";i:1;s:32:\"H_MBy0eyRt9CA7QrM1DtVa88L7n2FYMu\";}'
    '_identity-frontend' => '0cae966fd559089f9ace47d1a2ea5c6406c8e024f36e82c8327d6603adb72aeaa:2:{i:0;s:18:\"_identity-frontend\";i:1;s:46:\"[2,\"1SNgG1qkakmN2Frp80Qr1SX2kgRhIH88\",2592000]\";}'
    '_identity-backend' => 'c0d1afe5c2d610f9a90e14a0fab01645b813d345cb63ec03c8e2cb965d6dd833a:2:{i:0;s:17:\"_identity-backend\";i:1;s:46:\"[2,\"1SNgG1qkakmN2Frp80Qr1SX2kgRhIH88\",2592000]\";}'
]

$_SERVER = [
    'MIBDIRS' => 'C:/xampp/php/extras/mibs'
    'MYSQL_HOME' => '\\xampp\\mysql\\bin'
    'OPENSSL_CONF' => 'C:/xampp/apache/bin/openssl.cnf'
    'PHP_PEAR_SYSCONF_DIR' => '\\xampp\\php'
    'PHPRC' => '\\xampp\\php'
    'TMP' => '\\xampp\\tmp'
    'HTTP_HOST' => 'localhost'
    'HTTP_CONNECTION' => 'keep-alive'
    'CONTENT_LENGTH' => '74'
    'HTTP_CACHE_CONTROL' => 'max-age=0'
    'HTTP_ORIGIN' => 'http://localhost'
    'HTTP_UPGRADE_INSECURE_REQUESTS' => '1'
    'HTTP_USER_AGENT' => 'Mozilla/5.0 (Windows NT 10.0; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/57.0.2987.133 Safari/537.36'
    'CONTENT_TYPE' => 'application/x-www-form-urlencoded'
    'HTTP_ACCEPT' => 'text/html,application/xhtml+xml,application/xml;q=0.9,image/webp,*/*;q=0.8'
    'HTTP_REFERER' => 'http://localhost/my_first_project/backend/web/index.php?r=post%2Fview&id=3'
    'HTTP_ACCEPT_ENCODING' => 'gzip, deflate, br'
    'HTTP_ACCEPT_LANGUAGE' => 'sk-SK,sk;q=0.8,cs;q=0.6,en-US;q=0.4,en;q=0.2'
    'HTTP_COOKIE' => 'advanced-backend=ocapqr5qgv09ionkbionbf547f; _csrf-backend=106541c7716ce6243ffe7fcfaf136b2a6a12ae438d98e6f746d58b64bcb13ed8a%3A2%3A%7Bi%3A0%3Bs%3A13%3A%22_csrf-backend%22%3Bi%3A1%3Bs%3A32%3A%22oFrjDE6vI0vSHT2i1W4CYRO-RckaEjk2%22%3B%7D; advanced-frontend=qolu9g2b2l5l25v3anavkh87o4; _csrf-frontend=c02a00c759b3da9e0c4471ffb359e93f3c781a709c70f504ffcee85e0e08c80aa%3A2%3A%7Bi%3A0%3Bs%3A14%3A%22_csrf-frontend%22%3Bi%3A1%3Bs%3A32%3A%22H_MBy0eyRt9CA7QrM1DtVa88L7n2FYMu%22%3B%7D; _identity-frontend=0cae966fd559089f9ace47d1a2ea5c6406c8e024f36e82c8327d6603adb72aeaa%3A2%3A%7Bi%3A0%3Bs%3A18%3A%22_identity-frontend%22%3Bi%3A1%3Bs%3A46%3A%22%5B2%2C%221SNgG1qkakmN2Frp80Qr1SX2kgRhIH88%22%2C2592000%5D%22%3B%7D; _identity-backend=c0d1afe5c2d610f9a90e14a0fab01645b813d345cb63ec03c8e2cb965d6dd833a%3A2%3A%7Bi%3A0%3Bs%3A17%3A%22_identity-backend%22%3Bi%3A1%3Bs%3A46%3A%22%5B2%2C%221SNgG1qkakmN2Frp80Qr1SX2kgRhIH88%22%2C2592000%5D%22%3B%7D'
    'PATH' => 'C:\\WINDOWS\\system32;C:\\WINDOWS;C:\\WINDOWS\\System32\\Wbem;C:\\WINDOWS\\System32\\WindowsPowerShell\\v1.0\\;C:\\xampp\\php;C:\\ProgramData\\ComposerSetup\\bin;C:\\Program Files\\Git\\cmd;C:\\Users\\Win10\\AppData\\Local\\Microsoft\\WindowsApps;C:\\Users\\Win10\\AppData\\Roaming\\Composer\\vendor\\bin'
    'SystemRoot' => 'C:\\WINDOWS'
    'COMSPEC' => 'C:\\WINDOWS\\system32\\cmd.exe'
    'PATHEXT' => '.COM;.EXE;.BAT;.CMD;.VBS;.VBE;.JS;.JSE;.WSF;.WSH;.MSC'
    'WINDIR' => 'C:\\WINDOWS'
    'SERVER_SIGNATURE' => '<address>Apache/2.4.25 (Win32) OpenSSL/1.0.2j PHP/7.1.1 Server at localhost Port 80</address>
'
    'SERVER_SOFTWARE' => 'Apache/2.4.25 (Win32) OpenSSL/1.0.2j PHP/7.1.1'
    'SERVER_NAME' => 'localhost'
    'SERVER_ADDR' => '::1'
    'SERVER_PORT' => '80'
    'REMOTE_ADDR' => '::1'
    'DOCUMENT_ROOT' => 'C:/xampp/htdocs'
    'REQUEST_SCHEME' => 'http'
    'CONTEXT_PREFIX' => ''
    'CONTEXT_DOCUMENT_ROOT' => 'C:/xampp/htdocs'
    'SERVER_ADMIN' => 'postmaster@localhost'
    'SCRIPT_FILENAME' => 'C:/xampp/htdocs/my_first_project/backend/web/index.php'
    'REMOTE_PORT' => '51316'
    'GATEWAY_INTERFACE' => 'CGI/1.1'
    'SERVER_PROTOCOL' => 'HTTP/1.1'
    'REQUEST_METHOD' => 'POST'
    'QUERY_STRING' => 'r=comment%2Fdelete&id=5'
    'REQUEST_URI' => '/my_first_project/backend/web/index.php?r=comment%2Fdelete&id=5'
    'SCRIPT_NAME' => '/my_first_project/backend/web/index.php'
    'PHP_SELF' => '/my_first_project/backend/web/index.php'
    'REQUEST_TIME_FLOAT' => 1491811712.066
    'REQUEST_TIME' => 1491811712
]
2017-04-10 10:08:32 [::1][2][-][error][yii\web\Session::open] session_start(): Cannot send session cache limiter - headers already sent (output started at C:\xampp\htdocs\my_first_project\vendor\yiisoft\yii2\web\Response.php:391)
2017-04-10 10:08:32 [::1][2][-][info][application] $_GET = [
    'r' => 'comment/delete'
    'id' => '5'
]

$_POST = [
    '_csrf-backend' => 'dHZHS3VNNFobMDUhMQgCLD1GMRg9GQYzRSFzCCwfe3cmFSwqMCdfaA=='
]

$_COOKIE = [
    'advanced-backend' => 'ocapqr5qgv09ionkbionbf547f'
    '_csrf-backend' => '106541c7716ce6243ffe7fcfaf136b2a6a12ae438d98e6f746d58b64bcb13ed8a:2:{i:0;s:13:\"_csrf-backend\";i:1;s:32:\"oFrjDE6vI0vSHT2i1W4CYRO-RckaEjk2\";}'
    'advanced-frontend' => 'qolu9g2b2l5l25v3anavkh87o4'
    '_csrf-frontend' => 'c02a00c759b3da9e0c4471ffb359e93f3c781a709c70f504ffcee85e0e08c80aa:2:{i:0;s:14:\"_csrf-frontend\";i:1;s:32:\"H_MBy0eyRt9CA7QrM1DtVa88L7n2FYMu\";}'
    '_identity-frontend' => '0cae966fd559089f9ace47d1a2ea5c6406c8e024f36e82c8327d6603adb72aeaa:2:{i:0;s:18:\"_identity-frontend\";i:1;s:46:\"[2,\"1SNgG1qkakmN2Frp80Qr1SX2kgRhIH88\",2592000]\";}'
    '_identity-backend' => 'c0d1afe5c2d610f9a90e14a0fab01645b813d345cb63ec03c8e2cb965d6dd833a:2:{i:0;s:17:\"_identity-backend\";i:1;s:46:\"[2,\"1SNgG1qkakmN2Frp80Qr1SX2kgRhIH88\",2592000]\";}'
]

$_SESSION = [
    '__flash' => []
    '__id' => 2
]

$_SERVER = [
    'MIBDIRS' => 'C:/xampp/php/extras/mibs'
    'MYSQL_HOME' => '\\xampp\\mysql\\bin'
    'OPENSSL_CONF' => 'C:/xampp/apache/bin/openssl.cnf'
    'PHP_PEAR_SYSCONF_DIR' => '\\xampp\\php'
    'PHPRC' => '\\xampp\\php'
    'TMP' => '\\xampp\\tmp'
    'HTTP_HOST' => 'localhost'
    'HTTP_CONNECTION' => 'keep-alive'
    'CONTENT_LENGTH' => '74'
    'HTTP_CACHE_CONTROL' => 'max-age=0'
    'HTTP_ORIGIN' => 'http://localhost'
    'HTTP_UPGRADE_INSECURE_REQUESTS' => '1'
    'HTTP_USER_AGENT' => 'Mozilla/5.0 (Windows NT 10.0; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/57.0.2987.133 Safari/537.36'
    'CONTENT_TYPE' => 'application/x-www-form-urlencoded'
    'HTTP_ACCEPT' => 'text/html,application/xhtml+xml,application/xml;q=0.9,image/webp,*/*;q=0.8'
    'HTTP_REFERER' => 'http://localhost/my_first_project/backend/web/index.php?r=post%2Fview&id=3'
    'HTTP_ACCEPT_ENCODING' => 'gzip, deflate, br'
    'HTTP_ACCEPT_LANGUAGE' => 'sk-SK,sk;q=0.8,cs;q=0.6,en-US;q=0.4,en;q=0.2'
    'HTTP_COOKIE' => 'advanced-backend=ocapqr5qgv09ionkbionbf547f; _csrf-backend=106541c7716ce6243ffe7fcfaf136b2a6a12ae438d98e6f746d58b64bcb13ed8a%3A2%3A%7Bi%3A0%3Bs%3A13%3A%22_csrf-backend%22%3Bi%3A1%3Bs%3A32%3A%22oFrjDE6vI0vSHT2i1W4CYRO-RckaEjk2%22%3B%7D; advanced-frontend=qolu9g2b2l5l25v3anavkh87o4; _csrf-frontend=c02a00c759b3da9e0c4471ffb359e93f3c781a709c70f504ffcee85e0e08c80aa%3A2%3A%7Bi%3A0%3Bs%3A14%3A%22_csrf-frontend%22%3Bi%3A1%3Bs%3A32%3A%22H_MBy0eyRt9CA7QrM1DtVa88L7n2FYMu%22%3B%7D; _identity-frontend=0cae966fd559089f9ace47d1a2ea5c6406c8e024f36e82c8327d6603adb72aeaa%3A2%3A%7Bi%3A0%3Bs%3A18%3A%22_identity-frontend%22%3Bi%3A1%3Bs%3A46%3A%22%5B2%2C%221SNgG1qkakmN2Frp80Qr1SX2kgRhIH88%22%2C2592000%5D%22%3B%7D; _identity-backend=c0d1afe5c2d610f9a90e14a0fab01645b813d345cb63ec03c8e2cb965d6dd833a%3A2%3A%7Bi%3A0%3Bs%3A17%3A%22_identity-backend%22%3Bi%3A1%3Bs%3A46%3A%22%5B2%2C%221SNgG1qkakmN2Frp80Qr1SX2kgRhIH88%22%2C2592000%5D%22%3B%7D'
    'PATH' => 'C:\\WINDOWS\\system32;C:\\WINDOWS;C:\\WINDOWS\\System32\\Wbem;C:\\WINDOWS\\System32\\WindowsPowerShell\\v1.0\\;C:\\xampp\\php;C:\\ProgramData\\ComposerSetup\\bin;C:\\Program Files\\Git\\cmd;C:\\Users\\Win10\\AppData\\Local\\Microsoft\\WindowsApps;C:\\Users\\Win10\\AppData\\Roaming\\Composer\\vendor\\bin'
    'SystemRoot' => 'C:\\WINDOWS'
    'COMSPEC' => 'C:\\WINDOWS\\system32\\cmd.exe'
    'PATHEXT' => '.COM;.EXE;.BAT;.CMD;.VBS;.VBE;.JS;.JSE;.WSF;.WSH;.MSC'
    'WINDIR' => 'C:\\WINDOWS'
    'SERVER_SIGNATURE' => '<address>Apache/2.4.25 (Win32) OpenSSL/1.0.2j PHP/7.1.1 Server at localhost Port 80</address>
'
    'SERVER_SOFTWARE' => 'Apache/2.4.25 (Win32) OpenSSL/1.0.2j PHP/7.1.1'
    'SERVER_NAME' => 'localhost'
    'SERVER_ADDR' => '::1'
    'SERVER_PORT' => '80'
    'REMOTE_ADDR' => '::1'
    'DOCUMENT_ROOT' => 'C:/xampp/htdocs'
    'REQUEST_SCHEME' => 'http'
    'CONTEXT_PREFIX' => ''
    'CONTEXT_DOCUMENT_ROOT' => 'C:/xampp/htdocs'
    'SERVER_ADMIN' => 'postmaster@localhost'
    'SCRIPT_FILENAME' => 'C:/xampp/htdocs/my_first_project/backend/web/index.php'
    'REMOTE_PORT' => '51316'
    'GATEWAY_INTERFACE' => 'CGI/1.1'
    'SERVER_PROTOCOL' => 'HTTP/1.1'
    'REQUEST_METHOD' => 'POST'
    'QUERY_STRING' => 'r=comment%2Fdelete&id=5'
    'REQUEST_URI' => '/my_first_project/backend/web/index.php?r=comment%2Fdelete&id=5'
    'SCRIPT_NAME' => '/my_first_project/backend/web/index.php'
    'PHP_SELF' => '/my_first_project/backend/web/index.php'
    'REQUEST_TIME_FLOAT' => 1491811712.066
    'REQUEST_TIME' => 1491811712
]
2017-04-10 10:08:42 [::1][2][ocapqr5qgv09ionkbionbf547f][error][yii\web\HttpException:400] yii\web\BadRequestHttpException: Missing required parameters: id in C:\xampp\htdocs\my_first_project\vendor\yiisoft\yii2\web\Controller.php:149
Stack trace:
#0 C:\xampp\htdocs\my_first_project\vendor\yiisoft\yii2\base\InlineAction.php(51): yii\web\Controller->bindActionParams(Object(yii\base\InlineAction), Array)
#1 C:\xampp\htdocs\my_first_project\vendor\yiisoft\yii2\base\Controller.php(156): yii\base\InlineAction->runWithParams(Array)
#2 C:\xampp\htdocs\my_first_project\vendor\yiisoft\yii2\base\Module.php(523): yii\base\Controller->runAction('view', Array)
#3 C:\xampp\htdocs\my_first_project\vendor\yiisoft\yii2\web\Application.php(102): yii\base\Module->runAction('comment/view', Array)
#4 C:\xampp\htdocs\my_first_project\vendor\yiisoft\yii2\base\Application.php(380): yii\web\Application->handleRequest(Object(yii\web\Request))
#5 C:\xampp\htdocs\my_first_project\backend\web\index.php(17): yii\base\Application->run()
#6 {main}
2017-04-10 10:08:42 [::1][2][ocapqr5qgv09ionkbionbf547f][info][application] $_GET = [
    'r' => 'comment/view'
]

$_COOKIE = [
    'advanced-backend' => 'ocapqr5qgv09ionkbionbf547f'
    '_csrf-backend' => '106541c7716ce6243ffe7fcfaf136b2a6a12ae438d98e6f746d58b64bcb13ed8a:2:{i:0;s:13:\"_csrf-backend\";i:1;s:32:\"oFrjDE6vI0vSHT2i1W4CYRO-RckaEjk2\";}'
    'advanced-frontend' => 'qolu9g2b2l5l25v3anavkh87o4'
    '_csrf-frontend' => 'c02a00c759b3da9e0c4471ffb359e93f3c781a709c70f504ffcee85e0e08c80aa:2:{i:0;s:14:\"_csrf-frontend\";i:1;s:32:\"H_MBy0eyRt9CA7QrM1DtVa88L7n2FYMu\";}'
    '_identity-frontend' => '0cae966fd559089f9ace47d1a2ea5c6406c8e024f36e82c8327d6603adb72aeaa:2:{i:0;s:18:\"_identity-frontend\";i:1;s:46:\"[2,\"1SNgG1qkakmN2Frp80Qr1SX2kgRhIH88\",2592000]\";}'
    '_identity-backend' => 'c0d1afe5c2d610f9a90e14a0fab01645b813d345cb63ec03c8e2cb965d6dd833a:2:{i:0;s:17:\"_identity-backend\";i:1;s:46:\"[2,\"1SNgG1qkakmN2Frp80Qr1SX2kgRhIH88\",2592000]\";}'
]

$_SESSION = [
    '__flash' => []
    '__id' => 2
]

$_SERVER = [
    'MIBDIRS' => 'C:/xampp/php/extras/mibs'
    'MYSQL_HOME' => '\\xampp\\mysql\\bin'
    'OPENSSL_CONF' => 'C:/xampp/apache/bin/openssl.cnf'
    'PHP_PEAR_SYSCONF_DIR' => '\\xampp\\php'
    'PHPRC' => '\\xampp\\php'
    'TMP' => '\\xampp\\tmp'
    'HTTP_HOST' => 'localhost'
    'HTTP_CONNECTION' => 'keep-alive'
    'HTTP_CACHE_CONTROL' => 'max-age=0'
    'HTTP_UPGRADE_INSECURE_REQUESTS' => '1'
    'HTTP_USER_AGENT' => 'Mozilla/5.0 (Windows NT 10.0; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/57.0.2987.133 Safari/537.36'
    'HTTP_ACCEPT' => 'text/html,application/xhtml+xml,application/xml;q=0.9,image/webp,*/*;q=0.8'
    'HTTP_REFERER' => 'http://localhost/my_first_project/backend/web/index.php?r=comment%2Fcreate&id=3&id_comment=0'
    'HTTP_ACCEPT_ENCODING' => 'gzip, deflate, sdch, br'
    'HTTP_ACCEPT_LANGUAGE' => 'sk-SK,sk;q=0.8,cs;q=0.6,en-US;q=0.4,en;q=0.2'
    'HTTP_COOKIE' => 'advanced-backend=ocapqr5qgv09ionkbionbf547f; _csrf-backend=106541c7716ce6243ffe7fcfaf136b2a6a12ae438d98e6f746d58b64bcb13ed8a%3A2%3A%7Bi%3A0%3Bs%3A13%3A%22_csrf-backend%22%3Bi%3A1%3Bs%3A32%3A%22oFrjDE6vI0vSHT2i1W4CYRO-RckaEjk2%22%3B%7D; advanced-frontend=qolu9g2b2l5l25v3anavkh87o4; _csrf-frontend=c02a00c759b3da9e0c4471ffb359e93f3c781a709c70f504ffcee85e0e08c80aa%3A2%3A%7Bi%3A0%3Bs%3A14%3A%22_csrf-frontend%22%3Bi%3A1%3Bs%3A32%3A%22H_MBy0eyRt9CA7QrM1DtVa88L7n2FYMu%22%3B%7D; _identity-frontend=0cae966fd559089f9ace47d1a2ea5c6406c8e024f36e82c8327d6603adb72aeaa%3A2%3A%7Bi%3A0%3Bs%3A18%3A%22_identity-frontend%22%3Bi%3A1%3Bs%3A46%3A%22%5B2%2C%221SNgG1qkakmN2Frp80Qr1SX2kgRhIH88%22%2C2592000%5D%22%3B%7D; _identity-backend=c0d1afe5c2d610f9a90e14a0fab01645b813d345cb63ec03c8e2cb965d6dd833a%3A2%3A%7Bi%3A0%3Bs%3A17%3A%22_identity-backend%22%3Bi%3A1%3Bs%3A46%3A%22%5B2%2C%221SNgG1qkakmN2Frp80Qr1SX2kgRhIH88%22%2C2592000%5D%22%3B%7D'
    'PATH' => 'C:\\WINDOWS\\system32;C:\\WINDOWS;C:\\WINDOWS\\System32\\Wbem;C:\\WINDOWS\\System32\\WindowsPowerShell\\v1.0\\;C:\\xampp\\php;C:\\ProgramData\\ComposerSetup\\bin;C:\\Program Files\\Git\\cmd;C:\\Users\\Win10\\AppData\\Local\\Microsoft\\WindowsApps;C:\\Users\\Win10\\AppData\\Roaming\\Composer\\vendor\\bin'
    'SystemRoot' => 'C:\\WINDOWS'
    'COMSPEC' => 'C:\\WINDOWS\\system32\\cmd.exe'
    'PATHEXT' => '.COM;.EXE;.BAT;.CMD;.VBS;.VBE;.JS;.JSE;.WSF;.WSH;.MSC'
    'WINDIR' => 'C:\\WINDOWS'
    'SERVER_SIGNATURE' => '<address>Apache/2.4.25 (Win32) OpenSSL/1.0.2j PHP/7.1.1 Server at localhost Port 80</address>
'
    'SERVER_SOFTWARE' => 'Apache/2.4.25 (Win32) OpenSSL/1.0.2j PHP/7.1.1'
    'SERVER_NAME' => 'localhost'
    'SERVER_ADDR' => '::1'
    'SERVER_PORT' => '80'
    'REMOTE_ADDR' => '::1'
    'DOCUMENT_ROOT' => 'C:/xampp/htdocs'
    'REQUEST_SCHEME' => 'http'
    'CONTEXT_PREFIX' => ''
    'CONTEXT_DOCUMENT_ROOT' => 'C:/xampp/htdocs'
    'SERVER_ADMIN' => 'postmaster@localhost'
    'SCRIPT_FILENAME' => 'C:/xampp/htdocs/my_first_project/backend/web/index.php'
    'REMOTE_PORT' => '51326'
    'GATEWAY_INTERFACE' => 'CGI/1.1'
    'SERVER_PROTOCOL' => 'HTTP/1.1'
    'REQUEST_METHOD' => 'GET'
    'QUERY_STRING' => 'r=comment%2Fview'
    'REQUEST_URI' => '/my_first_project/backend/web/index.php?r=comment%2Fview'
    'SCRIPT_NAME' => '/my_first_project/backend/web/index.php'
    'PHP_SELF' => '/my_first_project/backend/web/index.php'
    'REQUEST_TIME_FLOAT' => 1491811722.379
    'REQUEST_TIME' => 1491811722
]
2017-04-10 10:24:18 [::1][-][-][error][yii\base\UnknownPropertyException] yii\base\UnknownPropertyException: Getting unknown property: common\models\Comment::replz_id_coment in C:\xampp\htdocs\my_first_project\vendor\yiisoft\yii2\base\Component.php:147
Stack trace:
#0 C:\xampp\htdocs\my_first_project\vendor\yiisoft\yii2\db\BaseActiveRecord.php(286): yii\base\Component->__get('replz_id_coment')
#1 C:\xampp\htdocs\my_first_project\backend\views\post\view.php(56): yii\db\BaseActiveRecord->__get('replz_id_coment')
#2 C:\xampp\htdocs\my_first_project\vendor\yiisoft\yii2\base\View.php(328): require('C:\\xampp\\htdocs...')
#3 C:\xampp\htdocs\my_first_project\vendor\yiisoft\yii2\base\View.php(250): yii\base\View->renderPhpFile('C:\\xampp\\htdocs...', Array)
#4 C:\xampp\htdocs\my_first_project\vendor\yiisoft\yii2\base\View.php(152): yii\base\View->renderFile('C:\\xampp\\htdocs...', Array, Object(backend\controllers\PostController))
#5 C:\xampp\htdocs\my_first_project\vendor\yiisoft\yii2\base\Controller.php(381): yii\base\View->render('view', Array, Object(backend\controllers\PostController))
#6 C:\xampp\htdocs\my_first_project\backend\controllers\PostController.php(55): yii\base\Controller->render('view', Array)
#7 [internal function]: backend\controllers\PostController->actionView('3')
#8 C:\xampp\htdocs\my_first_project\vendor\yiisoft\yii2\base\InlineAction.php(57): call_user_func_array(Array, Array)
#9 C:\xampp\htdocs\my_first_project\vendor\yiisoft\yii2\base\Controller.php(156): yii\base\InlineAction->runWithParams(Array)
#10 C:\xampp\htdocs\my_first_project\vendor\yiisoft\yii2\base\Module.php(523): yii\base\Controller->runAction('view', Array)
#11 C:\xampp\htdocs\my_first_project\vendor\yiisoft\yii2\web\Application.php(102): yii\base\Module->runAction('post/view', Array)
#12 C:\xampp\htdocs\my_first_project\vendor\yiisoft\yii2\base\Application.php(380): yii\web\Application->handleRequest(Object(yii\web\Request))
#13 C:\xampp\htdocs\my_first_project\backend\web\index.php(17): yii\base\Application->run()
#14 {main}
2017-04-10 10:24:18 [::1][-][-][info][application] $_GET = [
    'r' => 'post/view'
    'id' => '3'
]

$_COOKIE = [
    'advanced-backend' => 'ocapqr5qgv09ionkbionbf547f'
    '_csrf-backend' => '106541c7716ce6243ffe7fcfaf136b2a6a12ae438d98e6f746d58b64bcb13ed8a:2:{i:0;s:13:\"_csrf-backend\";i:1;s:32:\"oFrjDE6vI0vSHT2i1W4CYRO-RckaEjk2\";}'
    'advanced-frontend' => 'qolu9g2b2l5l25v3anavkh87o4'
    '_csrf-frontend' => 'c02a00c759b3da9e0c4471ffb359e93f3c781a709c70f504ffcee85e0e08c80aa:2:{i:0;s:14:\"_csrf-frontend\";i:1;s:32:\"H_MBy0eyRt9CA7QrM1DtVa88L7n2FYMu\";}'
    '_identity-frontend' => '0cae966fd559089f9ace47d1a2ea5c6406c8e024f36e82c8327d6603adb72aeaa:2:{i:0;s:18:\"_identity-frontend\";i:1;s:46:\"[2,\"1SNgG1qkakmN2Frp80Qr1SX2kgRhIH88\",2592000]\";}'
    '_identity-backend' => 'c0d1afe5c2d610f9a90e14a0fab01645b813d345cb63ec03c8e2cb965d6dd833a:2:{i:0;s:17:\"_identity-backend\";i:1;s:46:\"[2,\"1SNgG1qkakmN2Frp80Qr1SX2kgRhIH88\",2592000]\";}'
]

$_SERVER = [
    'MIBDIRS' => 'C:/xampp/php/extras/mibs'
    'MYSQL_HOME' => '\\xampp\\mysql\\bin'
    'OPENSSL_CONF' => 'C:/xampp/apache/bin/openssl.cnf'
    'PHP_PEAR_SYSCONF_DIR' => '\\xampp\\php'
    'PHPRC' => '\\xampp\\php'
    'TMP' => '\\xampp\\tmp'
    'HTTP_HOST' => 'localhost'
    'HTTP_CONNECTION' => 'keep-alive'
    'HTTP_CACHE_CONTROL' => 'max-age=0'
    'HTTP_UPGRADE_INSECURE_REQUESTS' => '1'
    'HTTP_USER_AGENT' => 'Mozilla/5.0 (Windows NT 10.0; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/57.0.2987.133 Safari/537.36'
    'HTTP_ACCEPT' => 'text/html,application/xhtml+xml,application/xml;q=0.9,image/webp,*/*;q=0.8'
    'HTTP_REFERER' => 'http://localhost/my_first_project/backend/web/index.php?r=post%2Findex'
    'HTTP_ACCEPT_ENCODING' => 'gzip, deflate, sdch, br'
    'HTTP_ACCEPT_LANGUAGE' => 'sk-SK,sk;q=0.8,cs;q=0.6,en-US;q=0.4,en;q=0.2'
    'HTTP_COOKIE' => 'advanced-backend=ocapqr5qgv09ionkbionbf547f; _csrf-backend=106541c7716ce6243ffe7fcfaf136b2a6a12ae438d98e6f746d58b64bcb13ed8a%3A2%3A%7Bi%3A0%3Bs%3A13%3A%22_csrf-backend%22%3Bi%3A1%3Bs%3A32%3A%22oFrjDE6vI0vSHT2i1W4CYRO-RckaEjk2%22%3B%7D; advanced-frontend=qolu9g2b2l5l25v3anavkh87o4; _csrf-frontend=c02a00c759b3da9e0c4471ffb359e93f3c781a709c70f504ffcee85e0e08c80aa%3A2%3A%7Bi%3A0%3Bs%3A14%3A%22_csrf-frontend%22%3Bi%3A1%3Bs%3A32%3A%22H_MBy0eyRt9CA7QrM1DtVa88L7n2FYMu%22%3B%7D; _identity-frontend=0cae966fd559089f9ace47d1a2ea5c6406c8e024f36e82c8327d6603adb72aeaa%3A2%3A%7Bi%3A0%3Bs%3A18%3A%22_identity-frontend%22%3Bi%3A1%3Bs%3A46%3A%22%5B2%2C%221SNgG1qkakmN2Frp80Qr1SX2kgRhIH88%22%2C2592000%5D%22%3B%7D; _identity-backend=c0d1afe5c2d610f9a90e14a0fab01645b813d345cb63ec03c8e2cb965d6dd833a%3A2%3A%7Bi%3A0%3Bs%3A17%3A%22_identity-backend%22%3Bi%3A1%3Bs%3A46%3A%22%5B2%2C%221SNgG1qkakmN2Frp80Qr1SX2kgRhIH88%22%2C2592000%5D%22%3B%7D'
    'PATH' => 'C:\\WINDOWS\\system32;C:\\WINDOWS;C:\\WINDOWS\\System32\\Wbem;C:\\WINDOWS\\System32\\WindowsPowerShell\\v1.0\\;C:\\xampp\\php;C:\\ProgramData\\ComposerSetup\\bin;C:\\Program Files\\Git\\cmd;C:\\Users\\Win10\\AppData\\Local\\Microsoft\\WindowsApps;C:\\Users\\Win10\\AppData\\Roaming\\Composer\\vendor\\bin'
    'SystemRoot' => 'C:\\WINDOWS'
    'COMSPEC' => 'C:\\WINDOWS\\system32\\cmd.exe'
    'PATHEXT' => '.COM;.EXE;.BAT;.CMD;.VBS;.VBE;.JS;.JSE;.WSF;.WSH;.MSC'
    'WINDIR' => 'C:\\WINDOWS'
    'SERVER_SIGNATURE' => '<address>Apache/2.4.25 (Win32) OpenSSL/1.0.2j PHP/7.1.1 Server at localhost Port 80</address>
'
    'SERVER_SOFTWARE' => 'Apache/2.4.25 (Win32) OpenSSL/1.0.2j PHP/7.1.1'
    'SERVER_NAME' => 'localhost'
    'SERVER_ADDR' => '::1'
    'SERVER_PORT' => '80'
    'REMOTE_ADDR' => '::1'
    'DOCUMENT_ROOT' => 'C:/xampp/htdocs'
    'REQUEST_SCHEME' => 'http'
    'CONTEXT_PREFIX' => ''
    'CONTEXT_DOCUMENT_ROOT' => 'C:/xampp/htdocs'
    'SERVER_ADMIN' => 'postmaster@localhost'
    'SCRIPT_FILENAME' => 'C:/xampp/htdocs/my_first_project/backend/web/index.php'
    'REMOTE_PORT' => '51474'
    'GATEWAY_INTERFACE' => 'CGI/1.1'
    'SERVER_PROTOCOL' => 'HTTP/1.1'
    'REQUEST_METHOD' => 'GET'
    'QUERY_STRING' => 'r=post%2Fview&id=3'
    'REQUEST_URI' => '/my_first_project/backend/web/index.php?r=post%2Fview&id=3'
    'SCRIPT_NAME' => '/my_first_project/backend/web/index.php'
    'PHP_SELF' => '/my_first_project/backend/web/index.php'
    'REQUEST_TIME_FLOAT' => 1491812658.59
    'REQUEST_TIME' => 1491812658
]
2017-04-10 10:24:18 [::1][2][-][error][yii\web\Session::open] session_start(): Cannot send session cache limiter - headers already sent (output started at C:\xampp\htdocs\my_first_project\vendor\yiisoft\yii2\web\Response.php:391)
2017-04-10 10:24:18 [::1][2][-][info][application] $_GET = [
    'r' => 'post/view'
    'id' => '3'
]

$_COOKIE = [
    'advanced-backend' => 'ocapqr5qgv09ionkbionbf547f'
    '_csrf-backend' => '106541c7716ce6243ffe7fcfaf136b2a6a12ae438d98e6f746d58b64bcb13ed8a:2:{i:0;s:13:\"_csrf-backend\";i:1;s:32:\"oFrjDE6vI0vSHT2i1W4CYRO-RckaEjk2\";}'
    'advanced-frontend' => 'qolu9g2b2l5l25v3anavkh87o4'
    '_csrf-frontend' => 'c02a00c759b3da9e0c4471ffb359e93f3c781a709c70f504ffcee85e0e08c80aa:2:{i:0;s:14:\"_csrf-frontend\";i:1;s:32:\"H_MBy0eyRt9CA7QrM1DtVa88L7n2FYMu\";}'
    '_identity-frontend' => '0cae966fd559089f9ace47d1a2ea5c6406c8e024f36e82c8327d6603adb72aeaa:2:{i:0;s:18:\"_identity-frontend\";i:1;s:46:\"[2,\"1SNgG1qkakmN2Frp80Qr1SX2kgRhIH88\",2592000]\";}'
    '_identity-backend' => 'c0d1afe5c2d610f9a90e14a0fab01645b813d345cb63ec03c8e2cb965d6dd833a:2:{i:0;s:17:\"_identity-backend\";i:1;s:46:\"[2,\"1SNgG1qkakmN2Frp80Qr1SX2kgRhIH88\",2592000]\";}'
]

$_SESSION = [
    '__flash' => []
    '__id' => 2
]

$_SERVER = [
    'MIBDIRS' => 'C:/xampp/php/extras/mibs'
    'MYSQL_HOME' => '\\xampp\\mysql\\bin'
    'OPENSSL_CONF' => 'C:/xampp/apache/bin/openssl.cnf'
    'PHP_PEAR_SYSCONF_DIR' => '\\xampp\\php'
    'PHPRC' => '\\xampp\\php'
    'TMP' => '\\xampp\\tmp'
    'HTTP_HOST' => 'localhost'
    'HTTP_CONNECTION' => 'keep-alive'
    'HTTP_CACHE_CONTROL' => 'max-age=0'
    'HTTP_UPGRADE_INSECURE_REQUESTS' => '1'
    'HTTP_USER_AGENT' => 'Mozilla/5.0 (Windows NT 10.0; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/57.0.2987.133 Safari/537.36'
    'HTTP_ACCEPT' => 'text/html,application/xhtml+xml,application/xml;q=0.9,image/webp,*/*;q=0.8'
    'HTTP_REFERER' => 'http://localhost/my_first_project/backend/web/index.php?r=post%2Findex'
    'HTTP_ACCEPT_ENCODING' => 'gzip, deflate, sdch, br'
    'HTTP_ACCEPT_LANGUAGE' => 'sk-SK,sk;q=0.8,cs;q=0.6,en-US;q=0.4,en;q=0.2'
    'HTTP_COOKIE' => 'advanced-backend=ocapqr5qgv09ionkbionbf547f; _csrf-backend=106541c7716ce6243ffe7fcfaf136b2a6a12ae438d98e6f746d58b64bcb13ed8a%3A2%3A%7Bi%3A0%3Bs%3A13%3A%22_csrf-backend%22%3Bi%3A1%3Bs%3A32%3A%22oFrjDE6vI0vSHT2i1W4CYRO-RckaEjk2%22%3B%7D; advanced-frontend=qolu9g2b2l5l25v3anavkh87o4; _csrf-frontend=c02a00c759b3da9e0c4471ffb359e93f3c781a709c70f504ffcee85e0e08c80aa%3A2%3A%7Bi%3A0%3Bs%3A14%3A%22_csrf-frontend%22%3Bi%3A1%3Bs%3A32%3A%22H_MBy0eyRt9CA7QrM1DtVa88L7n2FYMu%22%3B%7D; _identity-frontend=0cae966fd559089f9ace47d1a2ea5c6406c8e024f36e82c8327d6603adb72aeaa%3A2%3A%7Bi%3A0%3Bs%3A18%3A%22_identity-frontend%22%3Bi%3A1%3Bs%3A46%3A%22%5B2%2C%221SNgG1qkakmN2Frp80Qr1SX2kgRhIH88%22%2C2592000%5D%22%3B%7D; _identity-backend=c0d1afe5c2d610f9a90e14a0fab01645b813d345cb63ec03c8e2cb965d6dd833a%3A2%3A%7Bi%3A0%3Bs%3A17%3A%22_identity-backend%22%3Bi%3A1%3Bs%3A46%3A%22%5B2%2C%221SNgG1qkakmN2Frp80Qr1SX2kgRhIH88%22%2C2592000%5D%22%3B%7D'
    'PATH' => 'C:\\WINDOWS\\system32;C:\\WINDOWS;C:\\WINDOWS\\System32\\Wbem;C:\\WINDOWS\\System32\\WindowsPowerShell\\v1.0\\;C:\\xampp\\php;C:\\ProgramData\\ComposerSetup\\bin;C:\\Program Files\\Git\\cmd;C:\\Users\\Win10\\AppData\\Local\\Microsoft\\WindowsApps;C:\\Users\\Win10\\AppData\\Roaming\\Composer\\vendor\\bin'
    'SystemRoot' => 'C:\\WINDOWS'
    'COMSPEC' => 'C:\\WINDOWS\\system32\\cmd.exe'
    'PATHEXT' => '.COM;.EXE;.BAT;.CMD;.VBS;.VBE;.JS;.JSE;.WSF;.WSH;.MSC'
    'WINDIR' => 'C:\\WINDOWS'
    'SERVER_SIGNATURE' => '<address>Apache/2.4.25 (Win32) OpenSSL/1.0.2j PHP/7.1.1 Server at localhost Port 80</address>
'
    'SERVER_SOFTWARE' => 'Apache/2.4.25 (Win32) OpenSSL/1.0.2j PHP/7.1.1'
    'SERVER_NAME' => 'localhost'
    'SERVER_ADDR' => '::1'
    'SERVER_PORT' => '80'
    'REMOTE_ADDR' => '::1'
    'DOCUMENT_ROOT' => 'C:/xampp/htdocs'
    'REQUEST_SCHEME' => 'http'
    'CONTEXT_PREFIX' => ''
    'CONTEXT_DOCUMENT_ROOT' => 'C:/xampp/htdocs'
    'SERVER_ADMIN' => 'postmaster@localhost'
    'SCRIPT_FILENAME' => 'C:/xampp/htdocs/my_first_project/backend/web/index.php'
    'REMOTE_PORT' => '51474'
    'GATEWAY_INTERFACE' => 'CGI/1.1'
    'SERVER_PROTOCOL' => 'HTTP/1.1'
    'REQUEST_METHOD' => 'GET'
    'QUERY_STRING' => 'r=post%2Fview&id=3'
    'REQUEST_URI' => '/my_first_project/backend/web/index.php?r=post%2Fview&id=3'
    'SCRIPT_NAME' => '/my_first_project/backend/web/index.php'
    'PHP_SELF' => '/my_first_project/backend/web/index.php'
    'REQUEST_TIME_FLOAT' => 1491812658.59
    'REQUEST_TIME' => 1491812658
]
2017-04-10 10:36:03 [::1][-][-][error][yii\db\IntegrityException] PDOException: SQLSTATE[23000]: Integrity constraint violation: 1451 Cannot delete or update a parent row: a foreign key constraint fails (`yii2`.`comment`, CONSTRAINT `fk_comment_comment1` FOREIGN KEY (`reply_id_coment`) REFERENCES `comment` (`id_comment`) ON DELETE NO ACTION ON UPDATE NO ACTION) in C:\xampp\htdocs\my_first_project\vendor\yiisoft\yii2\db\Command.php:846
Stack trace:
#0 C:\xampp\htdocs\my_first_project\vendor\yiisoft\yii2\db\Command.php(846): PDOStatement->execute()
#1 C:\xampp\htdocs\my_first_project\vendor\yiisoft\yii2\db\ActiveRecord.php(296): yii\db\Command->execute()
#2 C:\xampp\htdocs\my_first_project\vendor\yiisoft\yii2\db\ActiveRecord.php(653): yii\db\ActiveRecord::deleteAll(Array)
#3 C:\xampp\htdocs\my_first_project\vendor\yiisoft\yii2\db\ActiveRecord.php(613): yii\db\ActiveRecord->deleteInternal()
#4 C:\xampp\htdocs\my_first_project\backend\controllers\CommentController.php(113): yii\db\ActiveRecord->delete()
#5 [internal function]: backend\controllers\CommentController->actionDelete('5')
#6 C:\xampp\htdocs\my_first_project\vendor\yiisoft\yii2\base\InlineAction.php(57): call_user_func_array(Array, Array)
#7 C:\xampp\htdocs\my_first_project\vendor\yiisoft\yii2\base\Controller.php(156): yii\base\InlineAction->runWithParams(Array)
#8 C:\xampp\htdocs\my_first_project\vendor\yiisoft\yii2\base\Module.php(523): yii\base\Controller->runAction('delete', Array)
#9 C:\xampp\htdocs\my_first_project\vendor\yiisoft\yii2\web\Application.php(102): yii\base\Module->runAction('comment/delete', Array)
#10 C:\xampp\htdocs\my_first_project\vendor\yiisoft\yii2\base\Application.php(380): yii\web\Application->handleRequest(Object(yii\web\Request))
#11 C:\xampp\htdocs\my_first_project\backend\web\index.php(17): yii\base\Application->run()
#12 {main}

Next yii\db\IntegrityException: SQLSTATE[23000]: Integrity constraint violation: 1451 Cannot delete or update a parent row: a foreign key constraint fails (`yii2`.`comment`, CONSTRAINT `fk_comment_comment1` FOREIGN KEY (`reply_id_coment`) REFERENCES `comment` (`id_comment`) ON DELETE NO ACTION ON UPDATE NO ACTION)
The SQL being executed was: DELETE FROM `comment` WHERE `id_comment`=5 in C:\xampp\htdocs\my_first_project\vendor\yiisoft\yii2\db\Schema.php:636
Stack trace:
#0 C:\xampp\htdocs\my_first_project\vendor\yiisoft\yii2\db\Command.php(856): yii\db\Schema->convertException(Object(PDOException), 'DELETE FROM `co...')
#1 C:\xampp\htdocs\my_first_project\vendor\yiisoft\yii2\db\ActiveRecord.php(296): yii\db\Command->execute()
#2 C:\xampp\htdocs\my_first_project\vendor\yiisoft\yii2\db\ActiveRecord.php(653): yii\db\ActiveRecord::deleteAll(Array)
#3 C:\xampp\htdocs\my_first_project\vendor\yiisoft\yii2\db\ActiveRecord.php(613): yii\db\ActiveRecord->deleteInternal()
#4 C:\xampp\htdocs\my_first_project\backend\controllers\CommentController.php(113): yii\db\ActiveRecord->delete()
#5 [internal function]: backend\controllers\CommentController->actionDelete('5')
#6 C:\xampp\htdocs\my_first_project\vendor\yiisoft\yii2\base\InlineAction.php(57): call_user_func_array(Array, Array)
#7 C:\xampp\htdocs\my_first_project\vendor\yiisoft\yii2\base\Controller.php(156): yii\base\InlineAction->runWithParams(Array)
#8 C:\xampp\htdocs\my_first_project\vendor\yiisoft\yii2\base\Module.php(523): yii\base\Controller->runAction('delete', Array)
#9 C:\xampp\htdocs\my_first_project\vendor\yiisoft\yii2\web\Application.php(102): yii\base\Module->runAction('comment/delete', Array)
#10 C:\xampp\htdocs\my_first_project\vendor\yiisoft\yii2\base\Application.php(380): yii\web\Application->handleRequest(Object(yii\web\Request))
#11 C:\xampp\htdocs\my_first_project\backend\web\index.php(17): yii\base\Application->run()
#12 {main}
Additional Information:
Array
(
    [0] => 23000
    [1] => 1451
    [2] => Cannot delete or update a parent row: a foreign key constraint fails (`yii2`.`comment`, CONSTRAINT `fk_comment_comment1` FOREIGN KEY (`reply_id_coment`) REFERENCES `comment` (`id_comment`) ON DELETE NO ACTION ON UPDATE NO ACTION)
)

2017-04-10 10:36:03 [::1][-][-][info][application] $_GET = [
    'r' => 'comment/delete'
    'id' => '5'
    'id_andwer_on_comment' => '5'
]

$_POST = [
    '_csrf-backend' => 'MlNSS2VtUDFdFSAhIShmR3tjJBgtOWJYAwRmCDw/HxxgMDkqIAc7Aw=='
]

$_COOKIE = [
    'advanced-backend' => 'ocapqr5qgv09ionkbionbf547f'
    '_csrf-backend' => '106541c7716ce6243ffe7fcfaf136b2a6a12ae438d98e6f746d58b64bcb13ed8a:2:{i:0;s:13:\"_csrf-backend\";i:1;s:32:\"oFrjDE6vI0vSHT2i1W4CYRO-RckaEjk2\";}'
    'advanced-frontend' => 'qolu9g2b2l5l25v3anavkh87o4'
    '_csrf-frontend' => 'c02a00c759b3da9e0c4471ffb359e93f3c781a709c70f504ffcee85e0e08c80aa:2:{i:0;s:14:\"_csrf-frontend\";i:1;s:32:\"H_MBy0eyRt9CA7QrM1DtVa88L7n2FYMu\";}'
    '_identity-frontend' => '0cae966fd559089f9ace47d1a2ea5c6406c8e024f36e82c8327d6603adb72aeaa:2:{i:0;s:18:\"_identity-frontend\";i:1;s:46:\"[2,\"1SNgG1qkakmN2Frp80Qr1SX2kgRhIH88\",2592000]\";}'
    '_identity-backend' => 'c0d1afe5c2d610f9a90e14a0fab01645b813d345cb63ec03c8e2cb965d6dd833a:2:{i:0;s:17:\"_identity-backend\";i:1;s:46:\"[2,\"1SNgG1qkakmN2Frp80Qr1SX2kgRhIH88\",2592000]\";}'
]

$_SERVER = [
    'MIBDIRS' => 'C:/xampp/php/extras/mibs'
    'MYSQL_HOME' => '\\xampp\\mysql\\bin'
    'OPENSSL_CONF' => 'C:/xampp/apache/bin/openssl.cnf'
    'PHP_PEAR_SYSCONF_DIR' => '\\xampp\\php'
    'PHPRC' => '\\xampp\\php'
    'TMP' => '\\xampp\\tmp'
    'HTTP_HOST' => 'localhost'
    'HTTP_CONNECTION' => 'keep-alive'
    'CONTENT_LENGTH' => '76'
    'HTTP_CACHE_CONTROL' => 'max-age=0'
    'HTTP_ORIGIN' => 'http://localhost'
    'HTTP_UPGRADE_INSECURE_REQUESTS' => '1'
    'HTTP_USER_AGENT' => 'Mozilla/5.0 (Windows NT 10.0; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/57.0.2987.133 Safari/537.36'
    'CONTENT_TYPE' => 'application/x-www-form-urlencoded'
    'HTTP_ACCEPT' => 'text/html,application/xhtml+xml,application/xml;q=0.9,image/webp,*/*;q=0.8'
    'HTTP_REFERER' => 'http://localhost/my_first_project/backend/web/index.php?r=post%2Fview&id=3'
    'HTTP_ACCEPT_ENCODING' => 'gzip, deflate, br'
    'HTTP_ACCEPT_LANGUAGE' => 'sk-SK,sk;q=0.8,cs;q=0.6,en-US;q=0.4,en;q=0.2'
    'HTTP_COOKIE' => 'advanced-backend=ocapqr5qgv09ionkbionbf547f; _csrf-backend=106541c7716ce6243ffe7fcfaf136b2a6a12ae438d98e6f746d58b64bcb13ed8a%3A2%3A%7Bi%3A0%3Bs%3A13%3A%22_csrf-backend%22%3Bi%3A1%3Bs%3A32%3A%22oFrjDE6vI0vSHT2i1W4CYRO-RckaEjk2%22%3B%7D; advanced-frontend=qolu9g2b2l5l25v3anavkh87o4; _csrf-frontend=c02a00c759b3da9e0c4471ffb359e93f3c781a709c70f504ffcee85e0e08c80aa%3A2%3A%7Bi%3A0%3Bs%3A14%3A%22_csrf-frontend%22%3Bi%3A1%3Bs%3A32%3A%22H_MBy0eyRt9CA7QrM1DtVa88L7n2FYMu%22%3B%7D; _identity-frontend=0cae966fd559089f9ace47d1a2ea5c6406c8e024f36e82c8327d6603adb72aeaa%3A2%3A%7Bi%3A0%3Bs%3A18%3A%22_identity-frontend%22%3Bi%3A1%3Bs%3A46%3A%22%5B2%2C%221SNgG1qkakmN2Frp80Qr1SX2kgRhIH88%22%2C2592000%5D%22%3B%7D; _identity-backend=c0d1afe5c2d610f9a90e14a0fab01645b813d345cb63ec03c8e2cb965d6dd833a%3A2%3A%7Bi%3A0%3Bs%3A17%3A%22_identity-backend%22%3Bi%3A1%3Bs%3A46%3A%22%5B2%2C%221SNgG1qkakmN2Frp80Qr1SX2kgRhIH88%22%2C2592000%5D%22%3B%7D'
    'PATH' => 'C:\\WINDOWS\\system32;C:\\WINDOWS;C:\\WINDOWS\\System32\\Wbem;C:\\WINDOWS\\System32\\WindowsPowerShell\\v1.0\\;C:\\xampp\\php;C:\\ProgramData\\ComposerSetup\\bin;C:\\Program Files\\Git\\cmd;C:\\Users\\Win10\\AppData\\Local\\Microsoft\\WindowsApps;C:\\Users\\Win10\\AppData\\Roaming\\Composer\\vendor\\bin'
    'SystemRoot' => 'C:\\WINDOWS'
    'COMSPEC' => 'C:\\WINDOWS\\system32\\cmd.exe'
    'PATHEXT' => '.COM;.EXE;.BAT;.CMD;.VBS;.VBE;.JS;.JSE;.WSF;.WSH;.MSC'
    'WINDIR' => 'C:\\WINDOWS'
    'SERVER_SIGNATURE' => '<address>Apache/2.4.25 (Win32) OpenSSL/1.0.2j PHP/7.1.1 Server at localhost Port 80</address>
'
    'SERVER_SOFTWARE' => 'Apache/2.4.25 (Win32) OpenSSL/1.0.2j PHP/7.1.1'
    'SERVER_NAME' => 'localhost'
    'SERVER_ADDR' => '::1'
    'SERVER_PORT' => '80'
    'REMOTE_ADDR' => '::1'
    'DOCUMENT_ROOT' => 'C:/xampp/htdocs'
    'REQUEST_SCHEME' => 'http'
    'CONTEXT_PREFIX' => ''
    'CONTEXT_DOCUMENT_ROOT' => 'C:/xampp/htdocs'
    'SERVER_ADMIN' => 'postmaster@localhost'
    'SCRIPT_FILENAME' => 'C:/xampp/htdocs/my_first_project/backend/web/index.php'
    'REMOTE_PORT' => '51590'
    'GATEWAY_INTERFACE' => 'CGI/1.1'
    'SERVER_PROTOCOL' => 'HTTP/1.1'
    'REQUEST_METHOD' => 'POST'
    'QUERY_STRING' => 'r=comment%2Fdelete&id=5&id_andwer_on_comment=5'
    'REQUEST_URI' => '/my_first_project/backend/web/index.php?r=comment%2Fdelete&id=5&id_andwer_on_comment=5'
    'SCRIPT_NAME' => '/my_first_project/backend/web/index.php'
    'PHP_SELF' => '/my_first_project/backend/web/index.php'
    'REQUEST_TIME_FLOAT' => 1491813363.675
    'REQUEST_TIME' => 1491813363
]
2017-04-10 10:36:03 [::1][2][-][error][yii\web\Session::open] session_start(): Cannot send session cache limiter - headers already sent (output started at C:\xampp\htdocs\my_first_project\vendor\yiisoft\yii2\web\Response.php:391)
2017-04-10 10:36:03 [::1][2][-][info][application] $_GET = [
    'r' => 'comment/delete'
    'id' => '5'
    'id_andwer_on_comment' => '5'
]

$_POST = [
    '_csrf-backend' => 'MlNSS2VtUDFdFSAhIShmR3tjJBgtOWJYAwRmCDw/HxxgMDkqIAc7Aw=='
]

$_COOKIE = [
    'advanced-backend' => 'ocapqr5qgv09ionkbionbf547f'
    '_csrf-backend' => '106541c7716ce6243ffe7fcfaf136b2a6a12ae438d98e6f746d58b64bcb13ed8a:2:{i:0;s:13:\"_csrf-backend\";i:1;s:32:\"oFrjDE6vI0vSHT2i1W4CYRO-RckaEjk2\";}'
    'advanced-frontend' => 'qolu9g2b2l5l25v3anavkh87o4'
    '_csrf-frontend' => 'c02a00c759b3da9e0c4471ffb359e93f3c781a709c70f504ffcee85e0e08c80aa:2:{i:0;s:14:\"_csrf-frontend\";i:1;s:32:\"H_MBy0eyRt9CA7QrM1DtVa88L7n2FYMu\";}'
    '_identity-frontend' => '0cae966fd559089f9ace47d1a2ea5c6406c8e024f36e82c8327d6603adb72aeaa:2:{i:0;s:18:\"_identity-frontend\";i:1;s:46:\"[2,\"1SNgG1qkakmN2Frp80Qr1SX2kgRhIH88\",2592000]\";}'
    '_identity-backend' => 'c0d1afe5c2d610f9a90e14a0fab01645b813d345cb63ec03c8e2cb965d6dd833a:2:{i:0;s:17:\"_identity-backend\";i:1;s:46:\"[2,\"1SNgG1qkakmN2Frp80Qr1SX2kgRhIH88\",2592000]\";}'
]

$_SESSION = [
    '__flash' => []
    '__id' => 2
]

$_SERVER = [
    'MIBDIRS' => 'C:/xampp/php/extras/mibs'
    'MYSQL_HOME' => '\\xampp\\mysql\\bin'
    'OPENSSL_CONF' => 'C:/xampp/apache/bin/openssl.cnf'
    'PHP_PEAR_SYSCONF_DIR' => '\\xampp\\php'
    'PHPRC' => '\\xampp\\php'
    'TMP' => '\\xampp\\tmp'
    'HTTP_HOST' => 'localhost'
    'HTTP_CONNECTION' => 'keep-alive'
    'CONTENT_LENGTH' => '76'
    'HTTP_CACHE_CONTROL' => 'max-age=0'
    'HTTP_ORIGIN' => 'http://localhost'
    'HTTP_UPGRADE_INSECURE_REQUESTS' => '1'
    'HTTP_USER_AGENT' => 'Mozilla/5.0 (Windows NT 10.0; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/57.0.2987.133 Safari/537.36'
    'CONTENT_TYPE' => 'application/x-www-form-urlencoded'
    'HTTP_ACCEPT' => 'text/html,application/xhtml+xml,application/xml;q=0.9,image/webp,*/*;q=0.8'
    'HTTP_REFERER' => 'http://localhost/my_first_project/backend/web/index.php?r=post%2Fview&id=3'
    'HTTP_ACCEPT_ENCODING' => 'gzip, deflate, br'
    'HTTP_ACCEPT_LANGUAGE' => 'sk-SK,sk;q=0.8,cs;q=0.6,en-US;q=0.4,en;q=0.2'
    'HTTP_COOKIE' => 'advanced-backend=ocapqr5qgv09ionkbionbf547f; _csrf-backend=106541c7716ce6243ffe7fcfaf136b2a6a12ae438d98e6f746d58b64bcb13ed8a%3A2%3A%7Bi%3A0%3Bs%3A13%3A%22_csrf-backend%22%3Bi%3A1%3Bs%3A32%3A%22oFrjDE6vI0vSHT2i1W4CYRO-RckaEjk2%22%3B%7D; advanced-frontend=qolu9g2b2l5l25v3anavkh87o4; _csrf-frontend=c02a00c759b3da9e0c4471ffb359e93f3c781a709c70f504ffcee85e0e08c80aa%3A2%3A%7Bi%3A0%3Bs%3A14%3A%22_csrf-frontend%22%3Bi%3A1%3Bs%3A32%3A%22H_MBy0eyRt9CA7QrM1DtVa88L7n2FYMu%22%3B%7D; _identity-frontend=0cae966fd559089f9ace47d1a2ea5c6406c8e024f36e82c8327d6603adb72aeaa%3A2%3A%7Bi%3A0%3Bs%3A18%3A%22_identity-frontend%22%3Bi%3A1%3Bs%3A46%3A%22%5B2%2C%221SNgG1qkakmN2Frp80Qr1SX2kgRhIH88%22%2C2592000%5D%22%3B%7D; _identity-backend=c0d1afe5c2d610f9a90e14a0fab01645b813d345cb63ec03c8e2cb965d6dd833a%3A2%3A%7Bi%3A0%3Bs%3A17%3A%22_identity-backend%22%3Bi%3A1%3Bs%3A46%3A%22%5B2%2C%221SNgG1qkakmN2Frp80Qr1SX2kgRhIH88%22%2C2592000%5D%22%3B%7D'
    'PATH' => 'C:\\WINDOWS\\system32;C:\\WINDOWS;C:\\WINDOWS\\System32\\Wbem;C:\\WINDOWS\\System32\\WindowsPowerShell\\v1.0\\;C:\\xampp\\php;C:\\ProgramData\\ComposerSetup\\bin;C:\\Program Files\\Git\\cmd;C:\\Users\\Win10\\AppData\\Local\\Microsoft\\WindowsApps;C:\\Users\\Win10\\AppData\\Roaming\\Composer\\vendor\\bin'
    'SystemRoot' => 'C:\\WINDOWS'
    'COMSPEC' => 'C:\\WINDOWS\\system32\\cmd.exe'
    'PATHEXT' => '.COM;.EXE;.BAT;.CMD;.VBS;.VBE;.JS;.JSE;.WSF;.WSH;.MSC'
    'WINDIR' => 'C:\\WINDOWS'
    'SERVER_SIGNATURE' => '<address>Apache/2.4.25 (Win32) OpenSSL/1.0.2j PHP/7.1.1 Server at localhost Port 80</address>
'
    'SERVER_SOFTWARE' => 'Apache/2.4.25 (Win32) OpenSSL/1.0.2j PHP/7.1.1'
    'SERVER_NAME' => 'localhost'
    'SERVER_ADDR' => '::1'
    'SERVER_PORT' => '80'
    'REMOTE_ADDR' => '::1'
    'DOCUMENT_ROOT' => 'C:/xampp/htdocs'
    'REQUEST_SCHEME' => 'http'
    'CONTEXT_PREFIX' => ''
    'CONTEXT_DOCUMENT_ROOT' => 'C:/xampp/htdocs'
    'SERVER_ADMIN' => 'postmaster@localhost'
    'SCRIPT_FILENAME' => 'C:/xampp/htdocs/my_first_project/backend/web/index.php'
    'REMOTE_PORT' => '51590'
    'GATEWAY_INTERFACE' => 'CGI/1.1'
    'SERVER_PROTOCOL' => 'HTTP/1.1'
    'REQUEST_METHOD' => 'POST'
    'QUERY_STRING' => 'r=comment%2Fdelete&id=5&id_andwer_on_comment=5'
    'REQUEST_URI' => '/my_first_project/backend/web/index.php?r=comment%2Fdelete&id=5&id_andwer_on_comment=5'
    'SCRIPT_NAME' => '/my_first_project/backend/web/index.php'
    'PHP_SELF' => '/my_first_project/backend/web/index.php'
    'REQUEST_TIME_FLOAT' => 1491813363.675
    'REQUEST_TIME' => 1491813363
]
2017-04-10 10:55:05 [::1][2][ocapqr5qgv09ionkbionbf547f][error][yii\web\HttpException:400] yii\web\BadRequestHttpException: Missing required parameters: id in C:\xampp\htdocs\my_first_project\vendor\yiisoft\yii2\web\Controller.php:149
Stack trace:
#0 C:\xampp\htdocs\my_first_project\vendor\yiisoft\yii2\base\InlineAction.php(51): yii\web\Controller->bindActionParams(Object(yii\base\InlineAction), Array)
#1 C:\xampp\htdocs\my_first_project\vendor\yiisoft\yii2\base\Controller.php(156): yii\base\InlineAction->runWithParams(Array)
#2 C:\xampp\htdocs\my_first_project\vendor\yiisoft\yii2\base\Module.php(523): yii\base\Controller->runAction('view', Array)
#3 C:\xampp\htdocs\my_first_project\vendor\yiisoft\yii2\web\Application.php(102): yii\base\Module->runAction('comment/view', Array)
#4 C:\xampp\htdocs\my_first_project\vendor\yiisoft\yii2\base\Application.php(380): yii\web\Application->handleRequest(Object(yii\web\Request))
#5 C:\xampp\htdocs\my_first_project\backend\web\index.php(17): yii\base\Application->run()
#6 {main}
2017-04-10 10:55:05 [::1][2][ocapqr5qgv09ionkbionbf547f][info][application] $_GET = [
    'r' => 'comment/view'
]

$_COOKIE = [
    'advanced-backend' => 'ocapqr5qgv09ionkbionbf547f'
    '_csrf-backend' => '106541c7716ce6243ffe7fcfaf136b2a6a12ae438d98e6f746d58b64bcb13ed8a:2:{i:0;s:13:\"_csrf-backend\";i:1;s:32:\"oFrjDE6vI0vSHT2i1W4CYRO-RckaEjk2\";}'
    'advanced-frontend' => 'qolu9g2b2l5l25v3anavkh87o4'
    '_csrf-frontend' => 'c02a00c759b3da9e0c4471ffb359e93f3c781a709c70f504ffcee85e0e08c80aa:2:{i:0;s:14:\"_csrf-frontend\";i:1;s:32:\"H_MBy0eyRt9CA7QrM1DtVa88L7n2FYMu\";}'
    '_identity-frontend' => '0cae966fd559089f9ace47d1a2ea5c6406c8e024f36e82c8327d6603adb72aeaa:2:{i:0;s:18:\"_identity-frontend\";i:1;s:46:\"[2,\"1SNgG1qkakmN2Frp80Qr1SX2kgRhIH88\",2592000]\";}'
    '_identity-backend' => 'c0d1afe5c2d610f9a90e14a0fab01645b813d345cb63ec03c8e2cb965d6dd833a:2:{i:0;s:17:\"_identity-backend\";i:1;s:46:\"[2,\"1SNgG1qkakmN2Frp80Qr1SX2kgRhIH88\",2592000]\";}'
]

$_SESSION = [
    '__flash' => []
    '__id' => 2
]

$_SERVER = [
    'MIBDIRS' => 'C:/xampp/php/extras/mibs'
    'MYSQL_HOME' => '\\xampp\\mysql\\bin'
    'OPENSSL_CONF' => 'C:/xampp/apache/bin/openssl.cnf'
    'PHP_PEAR_SYSCONF_DIR' => '\\xampp\\php'
    'PHPRC' => '\\xampp\\php'
    'TMP' => '\\xampp\\tmp'
    'HTTP_HOST' => 'localhost'
    'HTTP_CONNECTION' => 'keep-alive'
    'HTTP_CACHE_CONTROL' => 'max-age=0'
    'HTTP_UPGRADE_INSECURE_REQUESTS' => '1'
    'HTTP_USER_AGENT' => 'Mozilla/5.0 (Windows NT 10.0; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/57.0.2987.133 Safari/537.36'
    'HTTP_ACCEPT' => 'text/html,application/xhtml+xml,application/xml;q=0.9,image/webp,*/*;q=0.8'
    'HTTP_REFERER' => 'http://localhost/my_first_project/backend/web/index.php?r=comment%2Fcreate&id=3&id_comment=0'
    'HTTP_ACCEPT_ENCODING' => 'gzip, deflate, sdch, br'
    'HTTP_ACCEPT_LANGUAGE' => 'sk-SK,sk;q=0.8,cs;q=0.6,en-US;q=0.4,en;q=0.2'
    'HTTP_COOKIE' => 'advanced-backend=ocapqr5qgv09ionkbionbf547f; _csrf-backend=106541c7716ce6243ffe7fcfaf136b2a6a12ae438d98e6f746d58b64bcb13ed8a%3A2%3A%7Bi%3A0%3Bs%3A13%3A%22_csrf-backend%22%3Bi%3A1%3Bs%3A32%3A%22oFrjDE6vI0vSHT2i1W4CYRO-RckaEjk2%22%3B%7D; advanced-frontend=qolu9g2b2l5l25v3anavkh87o4; _csrf-frontend=c02a00c759b3da9e0c4471ffb359e93f3c781a709c70f504ffcee85e0e08c80aa%3A2%3A%7Bi%3A0%3Bs%3A14%3A%22_csrf-frontend%22%3Bi%3A1%3Bs%3A32%3A%22H_MBy0eyRt9CA7QrM1DtVa88L7n2FYMu%22%3B%7D; _identity-frontend=0cae966fd559089f9ace47d1a2ea5c6406c8e024f36e82c8327d6603adb72aeaa%3A2%3A%7Bi%3A0%3Bs%3A18%3A%22_identity-frontend%22%3Bi%3A1%3Bs%3A46%3A%22%5B2%2C%221SNgG1qkakmN2Frp80Qr1SX2kgRhIH88%22%2C2592000%5D%22%3B%7D; _identity-backend=c0d1afe5c2d610f9a90e14a0fab01645b813d345cb63ec03c8e2cb965d6dd833a%3A2%3A%7Bi%3A0%3Bs%3A17%3A%22_identity-backend%22%3Bi%3A1%3Bs%3A46%3A%22%5B2%2C%221SNgG1qkakmN2Frp80Qr1SX2kgRhIH88%22%2C2592000%5D%22%3B%7D'
    'PATH' => 'C:\\WINDOWS\\system32;C:\\WINDOWS;C:\\WINDOWS\\System32\\Wbem;C:\\WINDOWS\\System32\\WindowsPowerShell\\v1.0\\;C:\\xampp\\php;C:\\ProgramData\\ComposerSetup\\bin;C:\\Program Files\\Git\\cmd;C:\\Users\\Win10\\AppData\\Local\\Microsoft\\WindowsApps;C:\\Users\\Win10\\AppData\\Roaming\\Composer\\vendor\\bin'
    'SystemRoot' => 'C:\\WINDOWS'
    'COMSPEC' => 'C:\\WINDOWS\\system32\\cmd.exe'
    'PATHEXT' => '.COM;.EXE;.BAT;.CMD;.VBS;.VBE;.JS;.JSE;.WSF;.WSH;.MSC'
    'WINDIR' => 'C:\\WINDOWS'
    'SERVER_SIGNATURE' => '<address>Apache/2.4.25 (Win32) OpenSSL/1.0.2j PHP/7.1.1 Server at localhost Port 80</address>
'
    'SERVER_SOFTWARE' => 'Apache/2.4.25 (Win32) OpenSSL/1.0.2j PHP/7.1.1'
    'SERVER_NAME' => 'localhost'
    'SERVER_ADDR' => '::1'
    'SERVER_PORT' => '80'
    'REMOTE_ADDR' => '::1'
    'DOCUMENT_ROOT' => 'C:/xampp/htdocs'
    'REQUEST_SCHEME' => 'http'
    'CONTEXT_PREFIX' => ''
    'CONTEXT_DOCUMENT_ROOT' => 'C:/xampp/htdocs'
    'SERVER_ADMIN' => 'postmaster@localhost'
    'SCRIPT_FILENAME' => 'C:/xampp/htdocs/my_first_project/backend/web/index.php'
    'REMOTE_PORT' => '51780'
    'GATEWAY_INTERFACE' => 'CGI/1.1'
    'SERVER_PROTOCOL' => 'HTTP/1.1'
    'REQUEST_METHOD' => 'GET'
    'QUERY_STRING' => 'r=comment%2Fview'
    'REQUEST_URI' => '/my_first_project/backend/web/index.php?r=comment%2Fview'
    'SCRIPT_NAME' => '/my_first_project/backend/web/index.php'
    'PHP_SELF' => '/my_first_project/backend/web/index.php'
    'REQUEST_TIME_FLOAT' => 1491814505.374
    'REQUEST_TIME' => 1491814505
]
2017-04-10 10:55:30 [::1][2][ocapqr5qgv09ionkbionbf547f][error][yii\web\HttpException:400] yii\web\BadRequestHttpException: Missing required parameters: id in C:\xampp\htdocs\my_first_project\vendor\yiisoft\yii2\web\Controller.php:149
Stack trace:
#0 C:\xampp\htdocs\my_first_project\vendor\yiisoft\yii2\base\InlineAction.php(51): yii\web\Controller->bindActionParams(Object(yii\base\InlineAction), Array)
#1 C:\xampp\htdocs\my_first_project\vendor\yiisoft\yii2\base\Controller.php(156): yii\base\InlineAction->runWithParams(Array)
#2 C:\xampp\htdocs\my_first_project\vendor\yiisoft\yii2\base\Module.php(523): yii\base\Controller->runAction('view', Array)
#3 C:\xampp\htdocs\my_first_project\vendor\yiisoft\yii2\web\Application.php(102): yii\base\Module->runAction('comment/view', Array)
#4 C:\xampp\htdocs\my_first_project\vendor\yiisoft\yii2\base\Application.php(380): yii\web\Application->handleRequest(Object(yii\web\Request))
#5 C:\xampp\htdocs\my_first_project\backend\web\index.php(17): yii\base\Application->run()
#6 {main}
2017-04-10 10:55:30 [::1][2][ocapqr5qgv09ionkbionbf547f][info][application] $_GET = [
    'r' => 'comment/view'
]

$_COOKIE = [
    'advanced-backend' => 'ocapqr5qgv09ionkbionbf547f'
    '_csrf-backend' => '106541c7716ce6243ffe7fcfaf136b2a6a12ae438d98e6f746d58b64bcb13ed8a:2:{i:0;s:13:\"_csrf-backend\";i:1;s:32:\"oFrjDE6vI0vSHT2i1W4CYRO-RckaEjk2\";}'
    'advanced-frontend' => 'qolu9g2b2l5l25v3anavkh87o4'
    '_csrf-frontend' => 'c02a00c759b3da9e0c4471ffb359e93f3c781a709c70f504ffcee85e0e08c80aa:2:{i:0;s:14:\"_csrf-frontend\";i:1;s:32:\"H_MBy0eyRt9CA7QrM1DtVa88L7n2FYMu\";}'
    '_identity-frontend' => '0cae966fd559089f9ace47d1a2ea5c6406c8e024f36e82c8327d6603adb72aeaa:2:{i:0;s:18:\"_identity-frontend\";i:1;s:46:\"[2,\"1SNgG1qkakmN2Frp80Qr1SX2kgRhIH88\",2592000]\";}'
    '_identity-backend' => 'c0d1afe5c2d610f9a90e14a0fab01645b813d345cb63ec03c8e2cb965d6dd833a:2:{i:0;s:17:\"_identity-backend\";i:1;s:46:\"[2,\"1SNgG1qkakmN2Frp80Qr1SX2kgRhIH88\",2592000]\";}'
]

$_SESSION = [
    '__flash' => []
    '__id' => 2
]

$_SERVER = [
    'MIBDIRS' => 'C:/xampp/php/extras/mibs'
    'MYSQL_HOME' => '\\xampp\\mysql\\bin'
    'OPENSSL_CONF' => 'C:/xampp/apache/bin/openssl.cnf'
    'PHP_PEAR_SYSCONF_DIR' => '\\xampp\\php'
    'PHPRC' => '\\xampp\\php'
    'TMP' => '\\xampp\\tmp'
    'HTTP_HOST' => 'localhost'
    'HTTP_CONNECTION' => 'keep-alive'
    'HTTP_CACHE_CONTROL' => 'max-age=0'
    'HTTP_UPGRADE_INSECURE_REQUESTS' => '1'
    'HTTP_USER_AGENT' => 'Mozilla/5.0 (Windows NT 10.0; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/57.0.2987.133 Safari/537.36'
    'HTTP_ACCEPT' => 'text/html,application/xhtml+xml,application/xml;q=0.9,image/webp,*/*;q=0.8'
    'HTTP_REFERER' => 'http://localhost/my_first_project/backend/web/index.php?r=comment%2Fcreate&id=3&id_comment=0'
    'HTTP_ACCEPT_ENCODING' => 'gzip, deflate, sdch, br'
    'HTTP_ACCEPT_LANGUAGE' => 'sk-SK,sk;q=0.8,cs;q=0.6,en-US;q=0.4,en;q=0.2'
    'HTTP_COOKIE' => 'advanced-backend=ocapqr5qgv09ionkbionbf547f; _csrf-backend=106541c7716ce6243ffe7fcfaf136b2a6a12ae438d98e6f746d58b64bcb13ed8a%3A2%3A%7Bi%3A0%3Bs%3A13%3A%22_csrf-backend%22%3Bi%3A1%3Bs%3A32%3A%22oFrjDE6vI0vSHT2i1W4CYRO-RckaEjk2%22%3B%7D; advanced-frontend=qolu9g2b2l5l25v3anavkh87o4; _csrf-frontend=c02a00c759b3da9e0c4471ffb359e93f3c781a709c70f504ffcee85e0e08c80aa%3A2%3A%7Bi%3A0%3Bs%3A14%3A%22_csrf-frontend%22%3Bi%3A1%3Bs%3A32%3A%22H_MBy0eyRt9CA7QrM1DtVa88L7n2FYMu%22%3B%7D; _identity-frontend=0cae966fd559089f9ace47d1a2ea5c6406c8e024f36e82c8327d6603adb72aeaa%3A2%3A%7Bi%3A0%3Bs%3A18%3A%22_identity-frontend%22%3Bi%3A1%3Bs%3A46%3A%22%5B2%2C%221SNgG1qkakmN2Frp80Qr1SX2kgRhIH88%22%2C2592000%5D%22%3B%7D; _identity-backend=c0d1afe5c2d610f9a90e14a0fab01645b813d345cb63ec03c8e2cb965d6dd833a%3A2%3A%7Bi%3A0%3Bs%3A17%3A%22_identity-backend%22%3Bi%3A1%3Bs%3A46%3A%22%5B2%2C%221SNgG1qkakmN2Frp80Qr1SX2kgRhIH88%22%2C2592000%5D%22%3B%7D'
    'PATH' => 'C:\\WINDOWS\\system32;C:\\WINDOWS;C:\\WINDOWS\\System32\\Wbem;C:\\WINDOWS\\System32\\WindowsPowerShell\\v1.0\\;C:\\xampp\\php;C:\\ProgramData\\ComposerSetup\\bin;C:\\Program Files\\Git\\cmd;C:\\Users\\Win10\\AppData\\Local\\Microsoft\\WindowsApps;C:\\Users\\Win10\\AppData\\Roaming\\Composer\\vendor\\bin'
    'SystemRoot' => 'C:\\WINDOWS'
    'COMSPEC' => 'C:\\WINDOWS\\system32\\cmd.exe'
    'PATHEXT' => '.COM;.EXE;.BAT;.CMD;.VBS;.VBE;.JS;.JSE;.WSF;.WSH;.MSC'
    'WINDIR' => 'C:\\WINDOWS'
    'SERVER_SIGNATURE' => '<address>Apache/2.4.25 (Win32) OpenSSL/1.0.2j PHP/7.1.1 Server at localhost Port 80</address>
'
    'SERVER_SOFTWARE' => 'Apache/2.4.25 (Win32) OpenSSL/1.0.2j PHP/7.1.1'
    'SERVER_NAME' => 'localhost'
    'SERVER_ADDR' => '::1'
    'SERVER_PORT' => '80'
    'REMOTE_ADDR' => '::1'
    'DOCUMENT_ROOT' => 'C:/xampp/htdocs'
    'REQUEST_SCHEME' => 'http'
    'CONTEXT_PREFIX' => ''
    'CONTEXT_DOCUMENT_ROOT' => 'C:/xampp/htdocs'
    'SERVER_ADMIN' => 'postmaster@localhost'
    'SCRIPT_FILENAME' => 'C:/xampp/htdocs/my_first_project/backend/web/index.php'
    'REMOTE_PORT' => '51787'
    'GATEWAY_INTERFACE' => 'CGI/1.1'
    'SERVER_PROTOCOL' => 'HTTP/1.1'
    'REQUEST_METHOD' => 'GET'
    'QUERY_STRING' => 'r=comment%2Fview'
    'REQUEST_URI' => '/my_first_project/backend/web/index.php?r=comment%2Fview'
    'SCRIPT_NAME' => '/my_first_project/backend/web/index.php'
    'PHP_SELF' => '/my_first_project/backend/web/index.php'
    'REQUEST_TIME_FLOAT' => 1491814530.921
    'REQUEST_TIME' => 1491814530
]
2017-04-10 10:55:38 [::1][2][ocapqr5qgv09ionkbionbf547f][error][yii\web\HttpException:400] yii\web\BadRequestHttpException: Missing required parameters: id in C:\xampp\htdocs\my_first_project\vendor\yiisoft\yii2\web\Controller.php:149
Stack trace:
#0 C:\xampp\htdocs\my_first_project\vendor\yiisoft\yii2\base\InlineAction.php(51): yii\web\Controller->bindActionParams(Object(yii\base\InlineAction), Array)
#1 C:\xampp\htdocs\my_first_project\vendor\yiisoft\yii2\base\Controller.php(156): yii\base\InlineAction->runWithParams(Array)
#2 C:\xampp\htdocs\my_first_project\vendor\yiisoft\yii2\base\Module.php(523): yii\base\Controller->runAction('view', Array)
#3 C:\xampp\htdocs\my_first_project\vendor\yiisoft\yii2\web\Application.php(102): yii\base\Module->runAction('comment/view', Array)
#4 C:\xampp\htdocs\my_first_project\vendor\yiisoft\yii2\base\Application.php(380): yii\web\Application->handleRequest(Object(yii\web\Request))
#5 C:\xampp\htdocs\my_first_project\backend\web\index.php(17): yii\base\Application->run()
#6 {main}
2017-04-10 10:55:38 [::1][2][ocapqr5qgv09ionkbionbf547f][info][application] $_GET = [
    'r' => 'comment/view'
]

$_COOKIE = [
    'advanced-backend' => 'ocapqr5qgv09ionkbionbf547f'
    '_csrf-backend' => '106541c7716ce6243ffe7fcfaf136b2a6a12ae438d98e6f746d58b64bcb13ed8a:2:{i:0;s:13:\"_csrf-backend\";i:1;s:32:\"oFrjDE6vI0vSHT2i1W4CYRO-RckaEjk2\";}'
    'advanced-frontend' => 'qolu9g2b2l5l25v3anavkh87o4'
    '_csrf-frontend' => 'c02a00c759b3da9e0c4471ffb359e93f3c781a709c70f504ffcee85e0e08c80aa:2:{i:0;s:14:\"_csrf-frontend\";i:1;s:32:\"H_MBy0eyRt9CA7QrM1DtVa88L7n2FYMu\";}'
    '_identity-frontend' => '0cae966fd559089f9ace47d1a2ea5c6406c8e024f36e82c8327d6603adb72aeaa:2:{i:0;s:18:\"_identity-frontend\";i:1;s:46:\"[2,\"1SNgG1qkakmN2Frp80Qr1SX2kgRhIH88\",2592000]\";}'
    '_identity-backend' => 'c0d1afe5c2d610f9a90e14a0fab01645b813d345cb63ec03c8e2cb965d6dd833a:2:{i:0;s:17:\"_identity-backend\";i:1;s:46:\"[2,\"1SNgG1qkakmN2Frp80Qr1SX2kgRhIH88\",2592000]\";}'
]

$_SESSION = [
    '__flash' => []
    '__id' => 2
]

$_SERVER = [
    'MIBDIRS' => 'C:/xampp/php/extras/mibs'
    'MYSQL_HOME' => '\\xampp\\mysql\\bin'
    'OPENSSL_CONF' => 'C:/xampp/apache/bin/openssl.cnf'
    'PHP_PEAR_SYSCONF_DIR' => '\\xampp\\php'
    'PHPRC' => '\\xampp\\php'
    'TMP' => '\\xampp\\tmp'
    'HTTP_HOST' => 'localhost'
    'HTTP_CONNECTION' => 'keep-alive'
    'HTTP_CACHE_CONTROL' => 'max-age=0'
    'HTTP_UPGRADE_INSECURE_REQUESTS' => '1'
    'HTTP_USER_AGENT' => 'Mozilla/5.0 (Windows NT 10.0; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/57.0.2987.133 Safari/537.36'
    'HTTP_ACCEPT' => 'text/html,application/xhtml+xml,application/xml;q=0.9,image/webp,*/*;q=0.8'
    'HTTP_REFERER' => 'http://localhost/my_first_project/backend/web/index.php?r=comment%2Fcreate&id=3&id_comment=0'
    'HTTP_ACCEPT_ENCODING' => 'gzip, deflate, sdch, br'
    'HTTP_ACCEPT_LANGUAGE' => 'sk-SK,sk;q=0.8,cs;q=0.6,en-US;q=0.4,en;q=0.2'
    'HTTP_COOKIE' => 'advanced-backend=ocapqr5qgv09ionkbionbf547f; _csrf-backend=106541c7716ce6243ffe7fcfaf136b2a6a12ae438d98e6f746d58b64bcb13ed8a%3A2%3A%7Bi%3A0%3Bs%3A13%3A%22_csrf-backend%22%3Bi%3A1%3Bs%3A32%3A%22oFrjDE6vI0vSHT2i1W4CYRO-RckaEjk2%22%3B%7D; advanced-frontend=qolu9g2b2l5l25v3anavkh87o4; _csrf-frontend=c02a00c759b3da9e0c4471ffb359e93f3c781a709c70f504ffcee85e0e08c80aa%3A2%3A%7Bi%3A0%3Bs%3A14%3A%22_csrf-frontend%22%3Bi%3A1%3Bs%3A32%3A%22H_MBy0eyRt9CA7QrM1DtVa88L7n2FYMu%22%3B%7D; _identity-frontend=0cae966fd559089f9ace47d1a2ea5c6406c8e024f36e82c8327d6603adb72aeaa%3A2%3A%7Bi%3A0%3Bs%3A18%3A%22_identity-frontend%22%3Bi%3A1%3Bs%3A46%3A%22%5B2%2C%221SNgG1qkakmN2Frp80Qr1SX2kgRhIH88%22%2C2592000%5D%22%3B%7D; _identity-backend=c0d1afe5c2d610f9a90e14a0fab01645b813d345cb63ec03c8e2cb965d6dd833a%3A2%3A%7Bi%3A0%3Bs%3A17%3A%22_identity-backend%22%3Bi%3A1%3Bs%3A46%3A%22%5B2%2C%221SNgG1qkakmN2Frp80Qr1SX2kgRhIH88%22%2C2592000%5D%22%3B%7D'
    'PATH' => 'C:\\WINDOWS\\system32;C:\\WINDOWS;C:\\WINDOWS\\System32\\Wbem;C:\\WINDOWS\\System32\\WindowsPowerShell\\v1.0\\;C:\\xampp\\php;C:\\ProgramData\\ComposerSetup\\bin;C:\\Program Files\\Git\\cmd;C:\\Users\\Win10\\AppData\\Local\\Microsoft\\WindowsApps;C:\\Users\\Win10\\AppData\\Roaming\\Composer\\vendor\\bin'
    'SystemRoot' => 'C:\\WINDOWS'
    'COMSPEC' => 'C:\\WINDOWS\\system32\\cmd.exe'
    'PATHEXT' => '.COM;.EXE;.BAT;.CMD;.VBS;.VBE;.JS;.JSE;.WSF;.WSH;.MSC'
    'WINDIR' => 'C:\\WINDOWS'
    'SERVER_SIGNATURE' => '<address>Apache/2.4.25 (Win32) OpenSSL/1.0.2j PHP/7.1.1 Server at localhost Port 80</address>
'
    'SERVER_SOFTWARE' => 'Apache/2.4.25 (Win32) OpenSSL/1.0.2j PHP/7.1.1'
    'SERVER_NAME' => 'localhost'
    'SERVER_ADDR' => '::1'
    'SERVER_PORT' => '80'
    'REMOTE_ADDR' => '::1'
    'DOCUMENT_ROOT' => 'C:/xampp/htdocs'
    'REQUEST_SCHEME' => 'http'
    'CONTEXT_PREFIX' => ''
    'CONTEXT_DOCUMENT_ROOT' => 'C:/xampp/htdocs'
    'SERVER_ADMIN' => 'postmaster@localhost'
    'SCRIPT_FILENAME' => 'C:/xampp/htdocs/my_first_project/backend/web/index.php'
    'REMOTE_PORT' => '51788'
    'GATEWAY_INTERFACE' => 'CGI/1.1'
    'SERVER_PROTOCOL' => 'HTTP/1.1'
    'REQUEST_METHOD' => 'GET'
    'QUERY_STRING' => 'r=comment%2Fview'
    'REQUEST_URI' => '/my_first_project/backend/web/index.php?r=comment%2Fview'
    'SCRIPT_NAME' => '/my_first_project/backend/web/index.php'
    'PHP_SELF' => '/my_first_project/backend/web/index.php'
    'REQUEST_TIME_FLOAT' => 1491814538.188
    'REQUEST_TIME' => 1491814538
]
2017-04-10 11:12:11 [::1][2][ocapqr5qgv09ionkbionbf547f][error][yii\web\HttpException:400] yii\web\BadRequestHttpException: Missing required parameters: id_comment in C:\xampp\htdocs\my_first_project\vendor\yiisoft\yii2\web\Controller.php:149
Stack trace:
#0 C:\xampp\htdocs\my_first_project\vendor\yiisoft\yii2\base\InlineAction.php(51): yii\web\Controller->bindActionParams(Object(yii\base\InlineAction), Array)
#1 C:\xampp\htdocs\my_first_project\vendor\yiisoft\yii2\base\Controller.php(156): yii\base\InlineAction->runWithParams(Array)
#2 C:\xampp\htdocs\my_first_project\vendor\yiisoft\yii2\base\Module.php(523): yii\base\Controller->runAction('create', Array)
#3 C:\xampp\htdocs\my_first_project\vendor\yiisoft\yii2\web\Application.php(102): yii\base\Module->runAction('comment/create', Array)
#4 C:\xampp\htdocs\my_first_project\vendor\yiisoft\yii2\base\Application.php(380): yii\web\Application->handleRequest(Object(yii\web\Request))
#5 C:\xampp\htdocs\my_first_project\backend\web\index.php(17): yii\base\Application->run()
#6 {main}
2017-04-10 11:12:11 [::1][2][ocapqr5qgv09ionkbionbf547f][info][application] $_GET = [
    'r' => 'comment/create'
    'id' => '3'
]

$_COOKIE = [
    'advanced-backend' => 'ocapqr5qgv09ionkbionbf547f'
    '_csrf-backend' => '106541c7716ce6243ffe7fcfaf136b2a6a12ae438d98e6f746d58b64bcb13ed8a:2:{i:0;s:13:\"_csrf-backend\";i:1;s:32:\"oFrjDE6vI0vSHT2i1W4CYRO-RckaEjk2\";}'
    'advanced-frontend' => 'qolu9g2b2l5l25v3anavkh87o4'
    '_csrf-frontend' => 'c02a00c759b3da9e0c4471ffb359e93f3c781a709c70f504ffcee85e0e08c80aa:2:{i:0;s:14:\"_csrf-frontend\";i:1;s:32:\"H_MBy0eyRt9CA7QrM1DtVa88L7n2FYMu\";}'
    '_identity-frontend' => '0cae966fd559089f9ace47d1a2ea5c6406c8e024f36e82c8327d6603adb72aeaa:2:{i:0;s:18:\"_identity-frontend\";i:1;s:46:\"[2,\"1SNgG1qkakmN2Frp80Qr1SX2kgRhIH88\",2592000]\";}'
    '_identity-backend' => 'c0d1afe5c2d610f9a90e14a0fab01645b813d345cb63ec03c8e2cb965d6dd833a:2:{i:0;s:17:\"_identity-backend\";i:1;s:46:\"[2,\"1SNgG1qkakmN2Frp80Qr1SX2kgRhIH88\",2592000]\";}'
]

$_SESSION = [
    '__flash' => []
    '__id' => 2
]

$_SERVER = [
    'MIBDIRS' => 'C:/xampp/php/extras/mibs'
    'MYSQL_HOME' => '\\xampp\\mysql\\bin'
    'OPENSSL_CONF' => 'C:/xampp/apache/bin/openssl.cnf'
    'PHP_PEAR_SYSCONF_DIR' => '\\xampp\\php'
    'PHPRC' => '\\xampp\\php'
    'TMP' => '\\xampp\\tmp'
    'HTTP_HOST' => 'localhost'
    'HTTP_CONNECTION' => 'keep-alive'
    'HTTP_UPGRADE_INSECURE_REQUESTS' => '1'
    'HTTP_USER_AGENT' => 'Mozilla/5.0 (Windows NT 10.0; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/57.0.2987.133 Safari/537.36'
    'HTTP_ACCEPT' => 'text/html,application/xhtml+xml,application/xml;q=0.9,image/webp,*/*;q=0.8'
    'HTTP_REFERER' => 'http://localhost/my_first_project/backend/web/index.php?r=post%2Fview&id=3'
    'HTTP_ACCEPT_ENCODING' => 'gzip, deflate, sdch, br'
    'HTTP_ACCEPT_LANGUAGE' => 'sk-SK,sk;q=0.8,cs;q=0.6,en-US;q=0.4,en;q=0.2'
    'HTTP_COOKIE' => 'advanced-backend=ocapqr5qgv09ionkbionbf547f; _csrf-backend=106541c7716ce6243ffe7fcfaf136b2a6a12ae438d98e6f746d58b64bcb13ed8a%3A2%3A%7Bi%3A0%3Bs%3A13%3A%22_csrf-backend%22%3Bi%3A1%3Bs%3A32%3A%22oFrjDE6vI0vSHT2i1W4CYRO-RckaEjk2%22%3B%7D; advanced-frontend=qolu9g2b2l5l25v3anavkh87o4; _csrf-frontend=c02a00c759b3da9e0c4471ffb359e93f3c781a709c70f504ffcee85e0e08c80aa%3A2%3A%7Bi%3A0%3Bs%3A14%3A%22_csrf-frontend%22%3Bi%3A1%3Bs%3A32%3A%22H_MBy0eyRt9CA7QrM1DtVa88L7n2FYMu%22%3B%7D; _identity-frontend=0cae966fd559089f9ace47d1a2ea5c6406c8e024f36e82c8327d6603adb72aeaa%3A2%3A%7Bi%3A0%3Bs%3A18%3A%22_identity-frontend%22%3Bi%3A1%3Bs%3A46%3A%22%5B2%2C%221SNgG1qkakmN2Frp80Qr1SX2kgRhIH88%22%2C2592000%5D%22%3B%7D; _identity-backend=c0d1afe5c2d610f9a90e14a0fab01645b813d345cb63ec03c8e2cb965d6dd833a%3A2%3A%7Bi%3A0%3Bs%3A17%3A%22_identity-backend%22%3Bi%3A1%3Bs%3A46%3A%22%5B2%2C%221SNgG1qkakmN2Frp80Qr1SX2kgRhIH88%22%2C2592000%5D%22%3B%7D'
    'PATH' => 'C:\\WINDOWS\\system32;C:\\WINDOWS;C:\\WINDOWS\\System32\\Wbem;C:\\WINDOWS\\System32\\WindowsPowerShell\\v1.0\\;C:\\xampp\\php;C:\\ProgramData\\ComposerSetup\\bin;C:\\Program Files\\Git\\cmd;C:\\Users\\Win10\\AppData\\Local\\Microsoft\\WindowsApps;C:\\Users\\Win10\\AppData\\Roaming\\Composer\\vendor\\bin'
    'SystemRoot' => 'C:\\WINDOWS'
    'COMSPEC' => 'C:\\WINDOWS\\system32\\cmd.exe'
    'PATHEXT' => '.COM;.EXE;.BAT;.CMD;.VBS;.VBE;.JS;.JSE;.WSF;.WSH;.MSC'
    'WINDIR' => 'C:\\WINDOWS'
    'SERVER_SIGNATURE' => '<address>Apache/2.4.25 (Win32) OpenSSL/1.0.2j PHP/7.1.1 Server at localhost Port 80</address>
'
    'SERVER_SOFTWARE' => 'Apache/2.4.25 (Win32) OpenSSL/1.0.2j PHP/7.1.1'
    'SERVER_NAME' => 'localhost'
    'SERVER_ADDR' => '::1'
    'SERVER_PORT' => '80'
    'REMOTE_ADDR' => '::1'
    'DOCUMENT_ROOT' => 'C:/xampp/htdocs'
    'REQUEST_SCHEME' => 'http'
    'CONTEXT_PREFIX' => ''
    'CONTEXT_DOCUMENT_ROOT' => 'C:/xampp/htdocs'
    'SERVER_ADMIN' => 'postmaster@localhost'
    'SCRIPT_FILENAME' => 'C:/xampp/htdocs/my_first_project/backend/web/index.php'
    'REMOTE_PORT' => '51900'
    'GATEWAY_INTERFACE' => 'CGI/1.1'
    'SERVER_PROTOCOL' => 'HTTP/1.1'
    'REQUEST_METHOD' => 'GET'
    'QUERY_STRING' => 'r=comment%2Fcreate&id=3'
    'REQUEST_URI' => '/my_first_project/backend/web/index.php?r=comment%2Fcreate&id=3'
    'SCRIPT_NAME' => '/my_first_project/backend/web/index.php'
    'PHP_SELF' => '/my_first_project/backend/web/index.php'
    'REQUEST_TIME_FLOAT' => 1491815531.249
    'REQUEST_TIME' => 1491815531
]
2017-04-10 11:16:52 [::1][2][ocapqr5qgv09ionkbionbf547f][error][yii\web\HttpException:400] yii\web\BadRequestHttpException: Missing required parameters: id_comment in C:\xampp\htdocs\my_first_project\vendor\yiisoft\yii2\web\Controller.php:149
Stack trace:
#0 C:\xampp\htdocs\my_first_project\vendor\yiisoft\yii2\base\InlineAction.php(51): yii\web\Controller->bindActionParams(Object(yii\base\InlineAction), Array)
#1 C:\xampp\htdocs\my_first_project\vendor\yiisoft\yii2\base\Controller.php(156): yii\base\InlineAction->runWithParams(Array)
#2 C:\xampp\htdocs\my_first_project\vendor\yiisoft\yii2\base\Module.php(523): yii\base\Controller->runAction('create', Array)
#3 C:\xampp\htdocs\my_first_project\vendor\yiisoft\yii2\web\Application.php(102): yii\base\Module->runAction('comment/create', Array)
#4 C:\xampp\htdocs\my_first_project\vendor\yiisoft\yii2\base\Application.php(380): yii\web\Application->handleRequest(Object(yii\web\Request))
#5 C:\xampp\htdocs\my_first_project\backend\web\index.php(17): yii\base\Application->run()
#6 {main}
2017-04-10 11:16:52 [::1][2][ocapqr5qgv09ionkbionbf547f][info][application] $_GET = [
    'r' => 'comment/create'
    'id' => '3'
]

$_COOKIE = [
    'advanced-backend' => 'ocapqr5qgv09ionkbionbf547f'
    '_csrf-backend' => '106541c7716ce6243ffe7fcfaf136b2a6a12ae438d98e6f746d58b64bcb13ed8a:2:{i:0;s:13:\"_csrf-backend\";i:1;s:32:\"oFrjDE6vI0vSHT2i1W4CYRO-RckaEjk2\";}'
    'advanced-frontend' => 'qolu9g2b2l5l25v3anavkh87o4'
    '_csrf-frontend' => 'c02a00c759b3da9e0c4471ffb359e93f3c781a709c70f504ffcee85e0e08c80aa:2:{i:0;s:14:\"_csrf-frontend\";i:1;s:32:\"H_MBy0eyRt9CA7QrM1DtVa88L7n2FYMu\";}'
    '_identity-frontend' => '0cae966fd559089f9ace47d1a2ea5c6406c8e024f36e82c8327d6603adb72aeaa:2:{i:0;s:18:\"_identity-frontend\";i:1;s:46:\"[2,\"1SNgG1qkakmN2Frp80Qr1SX2kgRhIH88\",2592000]\";}'
    '_identity-backend' => 'c0d1afe5c2d610f9a90e14a0fab01645b813d345cb63ec03c8e2cb965d6dd833a:2:{i:0;s:17:\"_identity-backend\";i:1;s:46:\"[2,\"1SNgG1qkakmN2Frp80Qr1SX2kgRhIH88\",2592000]\";}'
]

$_SESSION = [
    '__flash' => []
    '__id' => 2
]

$_SERVER = [
    'MIBDIRS' => 'C:/xampp/php/extras/mibs'
    'MYSQL_HOME' => '\\xampp\\mysql\\bin'
    'OPENSSL_CONF' => 'C:/xampp/apache/bin/openssl.cnf'
    'PHP_PEAR_SYSCONF_DIR' => '\\xampp\\php'
    'PHPRC' => '\\xampp\\php'
    'TMP' => '\\xampp\\tmp'
    'HTTP_HOST' => 'localhost'
    'HTTP_CONNECTION' => 'keep-alive'
    'HTTP_UPGRADE_INSECURE_REQUESTS' => '1'
    'HTTP_USER_AGENT' => 'Mozilla/5.0 (Windows NT 10.0; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/57.0.2987.133 Safari/537.36'
    'HTTP_ACCEPT' => 'text/html,application/xhtml+xml,application/xml;q=0.9,image/webp,*/*;q=0.8'
    'HTTP_REFERER' => 'http://localhost/my_first_project/backend/web/index.php?r=post%2Fview&id=3'
    'HTTP_ACCEPT_ENCODING' => 'gzip, deflate, sdch, br'
    'HTTP_ACCEPT_LANGUAGE' => 'sk-SK,sk;q=0.8,cs;q=0.6,en-US;q=0.4,en;q=0.2'
    'HTTP_COOKIE' => 'advanced-backend=ocapqr5qgv09ionkbionbf547f; _csrf-backend=106541c7716ce6243ffe7fcfaf136b2a6a12ae438d98e6f746d58b64bcb13ed8a%3A2%3A%7Bi%3A0%3Bs%3A13%3A%22_csrf-backend%22%3Bi%3A1%3Bs%3A32%3A%22oFrjDE6vI0vSHT2i1W4CYRO-RckaEjk2%22%3B%7D; advanced-frontend=qolu9g2b2l5l25v3anavkh87o4; _csrf-frontend=c02a00c759b3da9e0c4471ffb359e93f3c781a709c70f504ffcee85e0e08c80aa%3A2%3A%7Bi%3A0%3Bs%3A14%3A%22_csrf-frontend%22%3Bi%3A1%3Bs%3A32%3A%22H_MBy0eyRt9CA7QrM1DtVa88L7n2FYMu%22%3B%7D; _identity-frontend=0cae966fd559089f9ace47d1a2ea5c6406c8e024f36e82c8327d6603adb72aeaa%3A2%3A%7Bi%3A0%3Bs%3A18%3A%22_identity-frontend%22%3Bi%3A1%3Bs%3A46%3A%22%5B2%2C%221SNgG1qkakmN2Frp80Qr1SX2kgRhIH88%22%2C2592000%5D%22%3B%7D; _identity-backend=c0d1afe5c2d610f9a90e14a0fab01645b813d345cb63ec03c8e2cb965d6dd833a%3A2%3A%7Bi%3A0%3Bs%3A17%3A%22_identity-backend%22%3Bi%3A1%3Bs%3A46%3A%22%5B2%2C%221SNgG1qkakmN2Frp80Qr1SX2kgRhIH88%22%2C2592000%5D%22%3B%7D'
    'PATH' => 'C:\\WINDOWS\\system32;C:\\WINDOWS;C:\\WINDOWS\\System32\\Wbem;C:\\WINDOWS\\System32\\WindowsPowerShell\\v1.0\\;C:\\xampp\\php;C:\\ProgramData\\ComposerSetup\\bin;C:\\Program Files\\Git\\cmd;C:\\Users\\Win10\\AppData\\Local\\Microsoft\\WindowsApps;C:\\Users\\Win10\\AppData\\Roaming\\Composer\\vendor\\bin'
    'SystemRoot' => 'C:\\WINDOWS'
    'COMSPEC' => 'C:\\WINDOWS\\system32\\cmd.exe'
    'PATHEXT' => '.COM;.EXE;.BAT;.CMD;.VBS;.VBE;.JS;.JSE;.WSF;.WSH;.MSC'
    'WINDIR' => 'C:\\WINDOWS'
    'SERVER_SIGNATURE' => '<address>Apache/2.4.25 (Win32) OpenSSL/1.0.2j PHP/7.1.1 Server at localhost Port 80</address>
'
    'SERVER_SOFTWARE' => 'Apache/2.4.25 (Win32) OpenSSL/1.0.2j PHP/7.1.1'
    'SERVER_NAME' => 'localhost'
    'SERVER_ADDR' => '::1'
    'SERVER_PORT' => '80'
    'REMOTE_ADDR' => '::1'
    'DOCUMENT_ROOT' => 'C:/xampp/htdocs'
    'REQUEST_SCHEME' => 'http'
    'CONTEXT_PREFIX' => ''
    'CONTEXT_DOCUMENT_ROOT' => 'C:/xampp/htdocs'
    'SERVER_ADMIN' => 'postmaster@localhost'
    'SCRIPT_FILENAME' => 'C:/xampp/htdocs/my_first_project/backend/web/index.php'
    'REMOTE_PORT' => '51956'
    'GATEWAY_INTERFACE' => 'CGI/1.1'
    'SERVER_PROTOCOL' => 'HTTP/1.1'
    'REQUEST_METHOD' => 'GET'
    'QUERY_STRING' => 'r=comment%2Fcreate&id=3'
    'REQUEST_URI' => '/my_first_project/backend/web/index.php?r=comment%2Fcreate&id=3'
    'SCRIPT_NAME' => '/my_first_project/backend/web/index.php'
    'PHP_SELF' => '/my_first_project/backend/web/index.php'
    'REQUEST_TIME_FLOAT' => 1491815812.457
    'REQUEST_TIME' => 1491815812
]
2017-04-10 11:20:34 [::1][-][-][error][yii\db\IntegrityException] PDOException: SQLSTATE[23000]: Integrity constraint violation: 1451 Cannot delete or update a parent row: a foreign key constraint fails (`yii2`.`comment`, CONSTRAINT `fk_comment_comment1` FOREIGN KEY (`reply_id_coment`) REFERENCES `comment` (`id_comment`) ON DELETE NO ACTION ON UPDATE NO ACTION) in C:\xampp\htdocs\my_first_project\vendor\yiisoft\yii2\db\Command.php:846
Stack trace:
#0 C:\xampp\htdocs\my_first_project\vendor\yiisoft\yii2\db\Command.php(846): PDOStatement->execute()
#1 C:\xampp\htdocs\my_first_project\vendor\yiisoft\yii2\db\ActiveRecord.php(296): yii\db\Command->execute()
#2 C:\xampp\htdocs\my_first_project\vendor\yiisoft\yii2\db\ActiveRecord.php(653): yii\db\ActiveRecord::deleteAll(Array)
#3 C:\xampp\htdocs\my_first_project\vendor\yiisoft\yii2\db\ActiveRecord.php(613): yii\db\ActiveRecord->deleteInternal()
#4 C:\xampp\htdocs\my_first_project\backend\controllers\CommentController.php(116): yii\db\ActiveRecord->delete()
#5 [internal function]: backend\controllers\CommentController->actionDelete('5')
#6 C:\xampp\htdocs\my_first_project\vendor\yiisoft\yii2\base\InlineAction.php(57): call_user_func_array(Array, Array)
#7 C:\xampp\htdocs\my_first_project\vendor\yiisoft\yii2\base\Controller.php(156): yii\base\InlineAction->runWithParams(Array)
#8 C:\xampp\htdocs\my_first_project\vendor\yiisoft\yii2\base\Module.php(523): yii\base\Controller->runAction('delete', Array)
#9 C:\xampp\htdocs\my_first_project\vendor\yiisoft\yii2\web\Application.php(102): yii\base\Module->runAction('comment/delete', Array)
#10 C:\xampp\htdocs\my_first_project\vendor\yiisoft\yii2\base\Application.php(380): yii\web\Application->handleRequest(Object(yii\web\Request))
#11 C:\xampp\htdocs\my_first_project\backend\web\index.php(17): yii\base\Application->run()
#12 {main}

Next yii\db\IntegrityException: SQLSTATE[23000]: Integrity constraint violation: 1451 Cannot delete or update a parent row: a foreign key constraint fails (`yii2`.`comment`, CONSTRAINT `fk_comment_comment1` FOREIGN KEY (`reply_id_coment`) REFERENCES `comment` (`id_comment`) ON DELETE NO ACTION ON UPDATE NO ACTION)
The SQL being executed was: DELETE FROM `comment` WHERE `id_comment`=5 in C:\xampp\htdocs\my_first_project\vendor\yiisoft\yii2\db\Schema.php:636
Stack trace:
#0 C:\xampp\htdocs\my_first_project\vendor\yiisoft\yii2\db\Command.php(856): yii\db\Schema->convertException(Object(PDOException), 'DELETE FROM `co...')
#1 C:\xampp\htdocs\my_first_project\vendor\yiisoft\yii2\db\ActiveRecord.php(296): yii\db\Command->execute()
#2 C:\xampp\htdocs\my_first_project\vendor\yiisoft\yii2\db\ActiveRecord.php(653): yii\db\ActiveRecord::deleteAll(Array)
#3 C:\xampp\htdocs\my_first_project\vendor\yiisoft\yii2\db\ActiveRecord.php(613): yii\db\ActiveRecord->deleteInternal()
#4 C:\xampp\htdocs\my_first_project\backend\controllers\CommentController.php(116): yii\db\ActiveRecord->delete()
#5 [internal function]: backend\controllers\CommentController->actionDelete('5')
#6 C:\xampp\htdocs\my_first_project\vendor\yiisoft\yii2\base\InlineAction.php(57): call_user_func_array(Array, Array)
#7 C:\xampp\htdocs\my_first_project\vendor\yiisoft\yii2\base\Controller.php(156): yii\base\InlineAction->runWithParams(Array)
#8 C:\xampp\htdocs\my_first_project\vendor\yiisoft\yii2\base\Module.php(523): yii\base\Controller->runAction('delete', Array)
#9 C:\xampp\htdocs\my_first_project\vendor\yiisoft\yii2\web\Application.php(102): yii\base\Module->runAction('comment/delete', Array)
#10 C:\xampp\htdocs\my_first_project\vendor\yiisoft\yii2\base\Application.php(380): yii\web\Application->handleRequest(Object(yii\web\Request))
#11 C:\xampp\htdocs\my_first_project\backend\web\index.php(17): yii\base\Application->run()
#12 {main}
Additional Information:
Array
(
    [0] => 23000
    [1] => 1451
    [2] => Cannot delete or update a parent row: a foreign key constraint fails (`yii2`.`comment`, CONSTRAINT `fk_comment_comment1` FOREIGN KEY (`reply_id_coment`) REFERENCES `comment` (`id_comment`) ON DELETE NO ACTION ON UPDATE NO ACTION)
)

2017-04-10 11:20:34 [::1][-][-][info][application] $_GET = [
    'r' => 'comment/delete'
    'id' => '5'
    'id_andwer_on_comment' => '5'
]

$_POST = [
    '_csrf-backend' => 'X0ZiLXY5bkQwABBHMnxYMhZ2FH4.bVwtbhFWbi9rIWkNJQlMM1MFdg=='
]

$_COOKIE = [
    'advanced-backend' => 'ocapqr5qgv09ionkbionbf547f'
    '_csrf-backend' => '106541c7716ce6243ffe7fcfaf136b2a6a12ae438d98e6f746d58b64bcb13ed8a:2:{i:0;s:13:\"_csrf-backend\";i:1;s:32:\"oFrjDE6vI0vSHT2i1W4CYRO-RckaEjk2\";}'
    'advanced-frontend' => 'qolu9g2b2l5l25v3anavkh87o4'
    '_csrf-frontend' => 'c02a00c759b3da9e0c4471ffb359e93f3c781a709c70f504ffcee85e0e08c80aa:2:{i:0;s:14:\"_csrf-frontend\";i:1;s:32:\"H_MBy0eyRt9CA7QrM1DtVa88L7n2FYMu\";}'
    '_identity-frontend' => '0cae966fd559089f9ace47d1a2ea5c6406c8e024f36e82c8327d6603adb72aeaa:2:{i:0;s:18:\"_identity-frontend\";i:1;s:46:\"[2,\"1SNgG1qkakmN2Frp80Qr1SX2kgRhIH88\",2592000]\";}'
    '_identity-backend' => 'c0d1afe5c2d610f9a90e14a0fab01645b813d345cb63ec03c8e2cb965d6dd833a:2:{i:0;s:17:\"_identity-backend\";i:1;s:46:\"[2,\"1SNgG1qkakmN2Frp80Qr1SX2kgRhIH88\",2592000]\";}'
]

$_SERVER = [
    'MIBDIRS' => 'C:/xampp/php/extras/mibs'
    'MYSQL_HOME' => '\\xampp\\mysql\\bin'
    'OPENSSL_CONF' => 'C:/xampp/apache/bin/openssl.cnf'
    'PHP_PEAR_SYSCONF_DIR' => '\\xampp\\php'
    'PHPRC' => '\\xampp\\php'
    'TMP' => '\\xampp\\tmp'
    'HTTP_HOST' => 'localhost'
    'HTTP_CONNECTION' => 'keep-alive'
    'CONTENT_LENGTH' => '74'
    'HTTP_CACHE_CONTROL' => 'max-age=0'
    'HTTP_ORIGIN' => 'http://localhost'
    'HTTP_UPGRADE_INSECURE_REQUESTS' => '1'
    'HTTP_USER_AGENT' => 'Mozilla/5.0 (Windows NT 10.0; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/57.0.2987.133 Safari/537.36'
    'CONTENT_TYPE' => 'application/x-www-form-urlencoded'
    'HTTP_ACCEPT' => 'text/html,application/xhtml+xml,application/xml;q=0.9,image/webp,*/*;q=0.8'
    'HTTP_REFERER' => 'http://localhost/my_first_project/backend/web/index.php?r=post%2Fview&id=3'
    'HTTP_ACCEPT_ENCODING' => 'gzip, deflate, br'
    'HTTP_ACCEPT_LANGUAGE' => 'sk-SK,sk;q=0.8,cs;q=0.6,en-US;q=0.4,en;q=0.2'
    'HTTP_COOKIE' => 'advanced-backend=ocapqr5qgv09ionkbionbf547f; _csrf-backend=106541c7716ce6243ffe7fcfaf136b2a6a12ae438d98e6f746d58b64bcb13ed8a%3A2%3A%7Bi%3A0%3Bs%3A13%3A%22_csrf-backend%22%3Bi%3A1%3Bs%3A32%3A%22oFrjDE6vI0vSHT2i1W4CYRO-RckaEjk2%22%3B%7D; advanced-frontend=qolu9g2b2l5l25v3anavkh87o4; _csrf-frontend=c02a00c759b3da9e0c4471ffb359e93f3c781a709c70f504ffcee85e0e08c80aa%3A2%3A%7Bi%3A0%3Bs%3A14%3A%22_csrf-frontend%22%3Bi%3A1%3Bs%3A32%3A%22H_MBy0eyRt9CA7QrM1DtVa88L7n2FYMu%22%3B%7D; _identity-frontend=0cae966fd559089f9ace47d1a2ea5c6406c8e024f36e82c8327d6603adb72aeaa%3A2%3A%7Bi%3A0%3Bs%3A18%3A%22_identity-frontend%22%3Bi%3A1%3Bs%3A46%3A%22%5B2%2C%221SNgG1qkakmN2Frp80Qr1SX2kgRhIH88%22%2C2592000%5D%22%3B%7D; _identity-backend=c0d1afe5c2d610f9a90e14a0fab01645b813d345cb63ec03c8e2cb965d6dd833a%3A2%3A%7Bi%3A0%3Bs%3A17%3A%22_identity-backend%22%3Bi%3A1%3Bs%3A46%3A%22%5B2%2C%221SNgG1qkakmN2Frp80Qr1SX2kgRhIH88%22%2C2592000%5D%22%3B%7D'
    'PATH' => 'C:\\WINDOWS\\system32;C:\\WINDOWS;C:\\WINDOWS\\System32\\Wbem;C:\\WINDOWS\\System32\\WindowsPowerShell\\v1.0\\;C:\\xampp\\php;C:\\ProgramData\\ComposerSetup\\bin;C:\\Program Files\\Git\\cmd;C:\\Users\\Win10\\AppData\\Local\\Microsoft\\WindowsApps;C:\\Users\\Win10\\AppData\\Roaming\\Composer\\vendor\\bin'
    'SystemRoot' => 'C:\\WINDOWS'
    'COMSPEC' => 'C:\\WINDOWS\\system32\\cmd.exe'
    'PATHEXT' => '.COM;.EXE;.BAT;.CMD;.VBS;.VBE;.JS;.JSE;.WSF;.WSH;.MSC'
    'WINDIR' => 'C:\\WINDOWS'
    'SERVER_SIGNATURE' => '<address>Apache/2.4.25 (Win32) OpenSSL/1.0.2j PHP/7.1.1 Server at localhost Port 80</address>
'
    'SERVER_SOFTWARE' => 'Apache/2.4.25 (Win32) OpenSSL/1.0.2j PHP/7.1.1'
    'SERVER_NAME' => 'localhost'
    'SERVER_ADDR' => '::1'
    'SERVER_PORT' => '80'
    'REMOTE_ADDR' => '::1'
    'DOCUMENT_ROOT' => 'C:/xampp/htdocs'
    'REQUEST_SCHEME' => 'http'
    'CONTEXT_PREFIX' => ''
    'CONTEXT_DOCUMENT_ROOT' => 'C:/xampp/htdocs'
    'SERVER_ADMIN' => 'postmaster@localhost'
    'SCRIPT_FILENAME' => 'C:/xampp/htdocs/my_first_project/backend/web/index.php'
    'REMOTE_PORT' => '52008'
    'GATEWAY_INTERFACE' => 'CGI/1.1'
    'SERVER_PROTOCOL' => 'HTTP/1.1'
    'REQUEST_METHOD' => 'POST'
    'QUERY_STRING' => 'r=comment%2Fdelete&id=5&id_andwer_on_comment=5'
    'REQUEST_URI' => '/my_first_project/backend/web/index.php?r=comment%2Fdelete&id=5&id_andwer_on_comment=5'
    'SCRIPT_NAME' => '/my_first_project/backend/web/index.php'
    'PHP_SELF' => '/my_first_project/backend/web/index.php'
    'REQUEST_TIME_FLOAT' => 1491816034.458
    'REQUEST_TIME' => 1491816034
]
2017-04-10 11:20:34 [::1][2][-][error][yii\web\Session::open] session_start(): Cannot send session cache limiter - headers already sent (output started at C:\xampp\htdocs\my_first_project\vendor\yiisoft\yii2\web\Response.php:391)
2017-04-10 11:20:34 [::1][2][-][info][application] $_GET = [
    'r' => 'comment/delete'
    'id' => '5'
    'id_andwer_on_comment' => '5'
]

$_POST = [
    '_csrf-backend' => 'X0ZiLXY5bkQwABBHMnxYMhZ2FH4.bVwtbhFWbi9rIWkNJQlMM1MFdg=='
]

$_COOKIE = [
    'advanced-backend' => 'ocapqr5qgv09ionkbionbf547f'
    '_csrf-backend' => '106541c7716ce6243ffe7fcfaf136b2a6a12ae438d98e6f746d58b64bcb13ed8a:2:{i:0;s:13:\"_csrf-backend\";i:1;s:32:\"oFrjDE6vI0vSHT2i1W4CYRO-RckaEjk2\";}'
    'advanced-frontend' => 'qolu9g2b2l5l25v3anavkh87o4'
    '_csrf-frontend' => 'c02a00c759b3da9e0c4471ffb359e93f3c781a709c70f504ffcee85e0e08c80aa:2:{i:0;s:14:\"_csrf-frontend\";i:1;s:32:\"H_MBy0eyRt9CA7QrM1DtVa88L7n2FYMu\";}'
    '_identity-frontend' => '0cae966fd559089f9ace47d1a2ea5c6406c8e024f36e82c8327d6603adb72aeaa:2:{i:0;s:18:\"_identity-frontend\";i:1;s:46:\"[2,\"1SNgG1qkakmN2Frp80Qr1SX2kgRhIH88\",2592000]\";}'
    '_identity-backend' => 'c0d1afe5c2d610f9a90e14a0fab01645b813d345cb63ec03c8e2cb965d6dd833a:2:{i:0;s:17:\"_identity-backend\";i:1;s:46:\"[2,\"1SNgG1qkakmN2Frp80Qr1SX2kgRhIH88\",2592000]\";}'
]

$_SESSION = [
    '__flash' => []
    '__id' => 2
]

$_SERVER = [
    'MIBDIRS' => 'C:/xampp/php/extras/mibs'
    'MYSQL_HOME' => '\\xampp\\mysql\\bin'
    'OPENSSL_CONF' => 'C:/xampp/apache/bin/openssl.cnf'
    'PHP_PEAR_SYSCONF_DIR' => '\\xampp\\php'
    'PHPRC' => '\\xampp\\php'
    'TMP' => '\\xampp\\tmp'
    'HTTP_HOST' => 'localhost'
    'HTTP_CONNECTION' => 'keep-alive'
    'CONTENT_LENGTH' => '74'
    'HTTP_CACHE_CONTROL' => 'max-age=0'
    'HTTP_ORIGIN' => 'http://localhost'
    'HTTP_UPGRADE_INSECURE_REQUESTS' => '1'
    'HTTP_USER_AGENT' => 'Mozilla/5.0 (Windows NT 10.0; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/57.0.2987.133 Safari/537.36'
    'CONTENT_TYPE' => 'application/x-www-form-urlencoded'
    'HTTP_ACCEPT' => 'text/html,application/xhtml+xml,application/xml;q=0.9,image/webp,*/*;q=0.8'
    'HTTP_REFERER' => 'http://localhost/my_first_project/backend/web/index.php?r=post%2Fview&id=3'
    'HTTP_ACCEPT_ENCODING' => 'gzip, deflate, br'
    'HTTP_ACCEPT_LANGUAGE' => 'sk-SK,sk;q=0.8,cs;q=0.6,en-US;q=0.4,en;q=0.2'
    'HTTP_COOKIE' => 'advanced-backend=ocapqr5qgv09ionkbionbf547f; _csrf-backend=106541c7716ce6243ffe7fcfaf136b2a6a12ae438d98e6f746d58b64bcb13ed8a%3A2%3A%7Bi%3A0%3Bs%3A13%3A%22_csrf-backend%22%3Bi%3A1%3Bs%3A32%3A%22oFrjDE6vI0vSHT2i1W4CYRO-RckaEjk2%22%3B%7D; advanced-frontend=qolu9g2b2l5l25v3anavkh87o4; _csrf-frontend=c02a00c759b3da9e0c4471ffb359e93f3c781a709c70f504ffcee85e0e08c80aa%3A2%3A%7Bi%3A0%3Bs%3A14%3A%22_csrf-frontend%22%3Bi%3A1%3Bs%3A32%3A%22H_MBy0eyRt9CA7QrM1DtVa88L7n2FYMu%22%3B%7D; _identity-frontend=0cae966fd559089f9ace47d1a2ea5c6406c8e024f36e82c8327d6603adb72aeaa%3A2%3A%7Bi%3A0%3Bs%3A18%3A%22_identity-frontend%22%3Bi%3A1%3Bs%3A46%3A%22%5B2%2C%221SNgG1qkakmN2Frp80Qr1SX2kgRhIH88%22%2C2592000%5D%22%3B%7D; _identity-backend=c0d1afe5c2d610f9a90e14a0fab01645b813d345cb63ec03c8e2cb965d6dd833a%3A2%3A%7Bi%3A0%3Bs%3A17%3A%22_identity-backend%22%3Bi%3A1%3Bs%3A46%3A%22%5B2%2C%221SNgG1qkakmN2Frp80Qr1SX2kgRhIH88%22%2C2592000%5D%22%3B%7D'
    'PATH' => 'C:\\WINDOWS\\system32;C:\\WINDOWS;C:\\WINDOWS\\System32\\Wbem;C:\\WINDOWS\\System32\\WindowsPowerShell\\v1.0\\;C:\\xampp\\php;C:\\ProgramData\\ComposerSetup\\bin;C:\\Program Files\\Git\\cmd;C:\\Users\\Win10\\AppData\\Local\\Microsoft\\WindowsApps;C:\\Users\\Win10\\AppData\\Roaming\\Composer\\vendor\\bin'
    'SystemRoot' => 'C:\\WINDOWS'
    'COMSPEC' => 'C:\\WINDOWS\\system32\\cmd.exe'
    'PATHEXT' => '.COM;.EXE;.BAT;.CMD;.VBS;.VBE;.JS;.JSE;.WSF;.WSH;.MSC'
    'WINDIR' => 'C:\\WINDOWS'
    'SERVER_SIGNATURE' => '<address>Apache/2.4.25 (Win32) OpenSSL/1.0.2j PHP/7.1.1 Server at localhost Port 80</address>
'
    'SERVER_SOFTWARE' => 'Apache/2.4.25 (Win32) OpenSSL/1.0.2j PHP/7.1.1'
    'SERVER_NAME' => 'localhost'
    'SERVER_ADDR' => '::1'
    'SERVER_PORT' => '80'
    'REMOTE_ADDR' => '::1'
    'DOCUMENT_ROOT' => 'C:/xampp/htdocs'
    'REQUEST_SCHEME' => 'http'
    'CONTEXT_PREFIX' => ''
    'CONTEXT_DOCUMENT_ROOT' => 'C:/xampp/htdocs'
    'SERVER_ADMIN' => 'postmaster@localhost'
    'SCRIPT_FILENAME' => 'C:/xampp/htdocs/my_first_project/backend/web/index.php'
    'REMOTE_PORT' => '52008'
    'GATEWAY_INTERFACE' => 'CGI/1.1'
    'SERVER_PROTOCOL' => 'HTTP/1.1'
    'REQUEST_METHOD' => 'POST'
    'QUERY_STRING' => 'r=comment%2Fdelete&id=5&id_andwer_on_comment=5'
    'REQUEST_URI' => '/my_first_project/backend/web/index.php?r=comment%2Fdelete&id=5&id_andwer_on_comment=5'
    'SCRIPT_NAME' => '/my_first_project/backend/web/index.php'
    'PHP_SELF' => '/my_first_project/backend/web/index.php'
    'REQUEST_TIME_FLOAT' => 1491816034.458
    'REQUEST_TIME' => 1491816034
]
2017-04-10 13:04:34 [::1][-][-][error][yii\db\IntegrityException] PDOException: SQLSTATE[23000]: Integrity constraint violation: 1451 Cannot delete or update a parent row: a foreign key constraint fails (`yii2`.`comment`, CONSTRAINT `fk_comment_comment1` FOREIGN KEY (`reply_id_coment`) REFERENCES `comment` (`id_comment`) ON DELETE NO ACTION ON UPDATE NO ACTION) in C:\xampp\htdocs\my_first_project\vendor\yiisoft\yii2\db\Command.php:846
Stack trace:
#0 C:\xampp\htdocs\my_first_project\vendor\yiisoft\yii2\db\Command.php(846): PDOStatement->execute()
#1 C:\xampp\htdocs\my_first_project\vendor\yiisoft\yii2\db\ActiveRecord.php(296): yii\db\Command->execute()
#2 C:\xampp\htdocs\my_first_project\vendor\yiisoft\yii2\db\ActiveRecord.php(653): yii\db\ActiveRecord::deleteAll(Array)
#3 C:\xampp\htdocs\my_first_project\vendor\yiisoft\yii2\db\ActiveRecord.php(613): yii\db\ActiveRecord->deleteInternal()
#4 C:\xampp\htdocs\my_first_project\backend\controllers\CommentController.php(116): yii\db\ActiveRecord->delete()
#5 [internal function]: backend\controllers\CommentController->actionDelete('1')
#6 C:\xampp\htdocs\my_first_project\vendor\yiisoft\yii2\base\InlineAction.php(57): call_user_func_array(Array, Array)
#7 C:\xampp\htdocs\my_first_project\vendor\yiisoft\yii2\base\Controller.php(156): yii\base\InlineAction->runWithParams(Array)
#8 C:\xampp\htdocs\my_first_project\vendor\yiisoft\yii2\base\Module.php(523): yii\base\Controller->runAction('delete', Array)
#9 C:\xampp\htdocs\my_first_project\vendor\yiisoft\yii2\web\Application.php(102): yii\base\Module->runAction('comment/delete', Array)
#10 C:\xampp\htdocs\my_first_project\vendor\yiisoft\yii2\base\Application.php(380): yii\web\Application->handleRequest(Object(yii\web\Request))
#11 C:\xampp\htdocs\my_first_project\backend\web\index.php(17): yii\base\Application->run()
#12 {main}

Next yii\db\IntegrityException: SQLSTATE[23000]: Integrity constraint violation: 1451 Cannot delete or update a parent row: a foreign key constraint fails (`yii2`.`comment`, CONSTRAINT `fk_comment_comment1` FOREIGN KEY (`reply_id_coment`) REFERENCES `comment` (`id_comment`) ON DELETE NO ACTION ON UPDATE NO ACTION)
The SQL being executed was: DELETE FROM `comment` WHERE `id_comment`=1 in C:\xampp\htdocs\my_first_project\vendor\yiisoft\yii2\db\Schema.php:636
Stack trace:
#0 C:\xampp\htdocs\my_first_project\vendor\yiisoft\yii2\db\Command.php(856): yii\db\Schema->convertException(Object(PDOException), 'DELETE FROM `co...')
#1 C:\xampp\htdocs\my_first_project\vendor\yiisoft\yii2\db\ActiveRecord.php(296): yii\db\Command->execute()
#2 C:\xampp\htdocs\my_first_project\vendor\yiisoft\yii2\db\ActiveRecord.php(653): yii\db\ActiveRecord::deleteAll(Array)
#3 C:\xampp\htdocs\my_first_project\vendor\yiisoft\yii2\db\ActiveRecord.php(613): yii\db\ActiveRecord->deleteInternal()
#4 C:\xampp\htdocs\my_first_project\backend\controllers\CommentController.php(116): yii\db\ActiveRecord->delete()
#5 [internal function]: backend\controllers\CommentController->actionDelete('1')
#6 C:\xampp\htdocs\my_first_project\vendor\yiisoft\yii2\base\InlineAction.php(57): call_user_func_array(Array, Array)
#7 C:\xampp\htdocs\my_first_project\vendor\yiisoft\yii2\base\Controller.php(156): yii\base\InlineAction->runWithParams(Array)
#8 C:\xampp\htdocs\my_first_project\vendor\yiisoft\yii2\base\Module.php(523): yii\base\Controller->runAction('delete', Array)
#9 C:\xampp\htdocs\my_first_project\vendor\yiisoft\yii2\web\Application.php(102): yii\base\Module->runAction('comment/delete', Array)
#10 C:\xampp\htdocs\my_first_project\vendor\yiisoft\yii2\base\Application.php(380): yii\web\Application->handleRequest(Object(yii\web\Request))
#11 C:\xampp\htdocs\my_first_project\backend\web\index.php(17): yii\base\Application->run()
#12 {main}
Additional Information:
Array
(
    [0] => 23000
    [1] => 1451
    [2] => Cannot delete or update a parent row: a foreign key constraint fails (`yii2`.`comment`, CONSTRAINT `fk_comment_comment1` FOREIGN KEY (`reply_id_coment`) REFERENCES `comment` (`id_comment`) ON DELETE NO ACTION ON UPDATE NO ACTION)
)

2017-04-10 13:04:34 [::1][-][-][info][application] $_GET = [
    'r' => 'comment/delete'
    'id' => '1'
    'id_andwer_on_comment' => '1'
]

$_POST = [
    '_csrf-backend' => 'ZkRQeWc5cjUJAiITI3xEQy90JiovbUBcVxNkOj5rPRg0JzsYIlMZBw=='
]

$_COOKIE = [
    'advanced-backend' => 'ocapqr5qgv09ionkbionbf547f'
    '_csrf-backend' => '106541c7716ce6243ffe7fcfaf136b2a6a12ae438d98e6f746d58b64bcb13ed8a:2:{i:0;s:13:\"_csrf-backend\";i:1;s:32:\"oFrjDE6vI0vSHT2i1W4CYRO-RckaEjk2\";}'
    'advanced-frontend' => 'qolu9g2b2l5l25v3anavkh87o4'
    '_csrf-frontend' => 'c02a00c759b3da9e0c4471ffb359e93f3c781a709c70f504ffcee85e0e08c80aa:2:{i:0;s:14:\"_csrf-frontend\";i:1;s:32:\"H_MBy0eyRt9CA7QrM1DtVa88L7n2FYMu\";}'
    '_identity-frontend' => '0cae966fd559089f9ace47d1a2ea5c6406c8e024f36e82c8327d6603adb72aeaa:2:{i:0;s:18:\"_identity-frontend\";i:1;s:46:\"[2,\"1SNgG1qkakmN2Frp80Qr1SX2kgRhIH88\",2592000]\";}'
    '_identity-backend' => 'c0d1afe5c2d610f9a90e14a0fab01645b813d345cb63ec03c8e2cb965d6dd833a:2:{i:0;s:17:\"_identity-backend\";i:1;s:46:\"[2,\"1SNgG1qkakmN2Frp80Qr1SX2kgRhIH88\",2592000]\";}'
]

$_SERVER = [
    'MIBDIRS' => 'C:/xampp/php/extras/mibs'
    'MYSQL_HOME' => '\\xampp\\mysql\\bin'
    'OPENSSL_CONF' => 'C:/xampp/apache/bin/openssl.cnf'
    'PHP_PEAR_SYSCONF_DIR' => '\\xampp\\php'
    'PHPRC' => '\\xampp\\php'
    'TMP' => '\\xampp\\tmp'
    'HTTP_HOST' => 'localhost'
    'HTTP_CONNECTION' => 'keep-alive'
    'CONTENT_LENGTH' => '74'
    'HTTP_CACHE_CONTROL' => 'max-age=0'
    'HTTP_ORIGIN' => 'http://localhost'
    'HTTP_UPGRADE_INSECURE_REQUESTS' => '1'
    'HTTP_USER_AGENT' => 'Mozilla/5.0 (Windows NT 10.0; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/57.0.2987.133 Safari/537.36'
    'CONTENT_TYPE' => 'application/x-www-form-urlencoded'
    'HTTP_ACCEPT' => 'text/html,application/xhtml+xml,application/xml;q=0.9,image/webp,*/*;q=0.8'
    'HTTP_REFERER' => 'http://localhost/my_first_project/backend/web/index.php?r=post%2Fview&id=3'
    'HTTP_ACCEPT_ENCODING' => 'gzip, deflate, br'
    'HTTP_ACCEPT_LANGUAGE' => 'sk-SK,sk;q=0.8,cs;q=0.6,en-US;q=0.4,en;q=0.2'
    'HTTP_COOKIE' => 'advanced-backend=ocapqr5qgv09ionkbionbf547f; _csrf-backend=106541c7716ce6243ffe7fcfaf136b2a6a12ae438d98e6f746d58b64bcb13ed8a%3A2%3A%7Bi%3A0%3Bs%3A13%3A%22_csrf-backend%22%3Bi%3A1%3Bs%3A32%3A%22oFrjDE6vI0vSHT2i1W4CYRO-RckaEjk2%22%3B%7D; advanced-frontend=qolu9g2b2l5l25v3anavkh87o4; _csrf-frontend=c02a00c759b3da9e0c4471ffb359e93f3c781a709c70f504ffcee85e0e08c80aa%3A2%3A%7Bi%3A0%3Bs%3A14%3A%22_csrf-frontend%22%3Bi%3A1%3Bs%3A32%3A%22H_MBy0eyRt9CA7QrM1DtVa88L7n2FYMu%22%3B%7D; _identity-frontend=0cae966fd559089f9ace47d1a2ea5c6406c8e024f36e82c8327d6603adb72aeaa%3A2%3A%7Bi%3A0%3Bs%3A18%3A%22_identity-frontend%22%3Bi%3A1%3Bs%3A46%3A%22%5B2%2C%221SNgG1qkakmN2Frp80Qr1SX2kgRhIH88%22%2C2592000%5D%22%3B%7D; _identity-backend=c0d1afe5c2d610f9a90e14a0fab01645b813d345cb63ec03c8e2cb965d6dd833a%3A2%3A%7Bi%3A0%3Bs%3A17%3A%22_identity-backend%22%3Bi%3A1%3Bs%3A46%3A%22%5B2%2C%221SNgG1qkakmN2Frp80Qr1SX2kgRhIH88%22%2C2592000%5D%22%3B%7D'
    'PATH' => 'C:\\WINDOWS\\system32;C:\\WINDOWS;C:\\WINDOWS\\System32\\Wbem;C:\\WINDOWS\\System32\\WindowsPowerShell\\v1.0\\;C:\\xampp\\php;C:\\ProgramData\\ComposerSetup\\bin;C:\\Program Files\\Git\\cmd;C:\\Users\\Win10\\AppData\\Local\\Microsoft\\WindowsApps;C:\\Users\\Win10\\AppData\\Roaming\\Composer\\vendor\\bin'
    'SystemRoot' => 'C:\\WINDOWS'
    'COMSPEC' => 'C:\\WINDOWS\\system32\\cmd.exe'
    'PATHEXT' => '.COM;.EXE;.BAT;.CMD;.VBS;.VBE;.JS;.JSE;.WSF;.WSH;.MSC'
    'WINDIR' => 'C:\\WINDOWS'
    'SERVER_SIGNATURE' => '<address>Apache/2.4.25 (Win32) OpenSSL/1.0.2j PHP/7.1.1 Server at localhost Port 80</address>
'
    'SERVER_SOFTWARE' => 'Apache/2.4.25 (Win32) OpenSSL/1.0.2j PHP/7.1.1'
    'SERVER_NAME' => 'localhost'
    'SERVER_ADDR' => '::1'
    'SERVER_PORT' => '80'
    'REMOTE_ADDR' => '::1'
    'DOCUMENT_ROOT' => 'C:/xampp/htdocs'
    'REQUEST_SCHEME' => 'http'
    'CONTEXT_PREFIX' => ''
    'CONTEXT_DOCUMENT_ROOT' => 'C:/xampp/htdocs'
    'SERVER_ADMIN' => 'postmaster@localhost'
    'SCRIPT_FILENAME' => 'C:/xampp/htdocs/my_first_project/backend/web/index.php'
    'REMOTE_PORT' => '52619'
    'GATEWAY_INTERFACE' => 'CGI/1.1'
    'SERVER_PROTOCOL' => 'HTTP/1.1'
    'REQUEST_METHOD' => 'POST'
    'QUERY_STRING' => 'r=comment%2Fdelete&id=1&id_andwer_on_comment=1'
    'REQUEST_URI' => '/my_first_project/backend/web/index.php?r=comment%2Fdelete&id=1&id_andwer_on_comment=1'
    'SCRIPT_NAME' => '/my_first_project/backend/web/index.php'
    'PHP_SELF' => '/my_first_project/backend/web/index.php'
    'REQUEST_TIME_FLOAT' => 1491822274.592
    'REQUEST_TIME' => 1491822274
]
2017-04-10 13:04:34 [::1][2][-][error][yii\web\Session::open] session_start(): Cannot send session cache limiter - headers already sent (output started at C:\xampp\htdocs\my_first_project\vendor\yiisoft\yii2\web\Response.php:391)
2017-04-10 13:04:34 [::1][2][-][info][application] $_GET = [
    'r' => 'comment/delete'
    'id' => '1'
    'id_andwer_on_comment' => '1'
]

$_POST = [
    '_csrf-backend' => 'ZkRQeWc5cjUJAiITI3xEQy90JiovbUBcVxNkOj5rPRg0JzsYIlMZBw=='
]

$_COOKIE = [
    'advanced-backend' => 'ocapqr5qgv09ionkbionbf547f'
    '_csrf-backend' => '106541c7716ce6243ffe7fcfaf136b2a6a12ae438d98e6f746d58b64bcb13ed8a:2:{i:0;s:13:\"_csrf-backend\";i:1;s:32:\"oFrjDE6vI0vSHT2i1W4CYRO-RckaEjk2\";}'
    'advanced-frontend' => 'qolu9g2b2l5l25v3anavkh87o4'
    '_csrf-frontend' => 'c02a00c759b3da9e0c4471ffb359e93f3c781a709c70f504ffcee85e0e08c80aa:2:{i:0;s:14:\"_csrf-frontend\";i:1;s:32:\"H_MBy0eyRt9CA7QrM1DtVa88L7n2FYMu\";}'
    '_identity-frontend' => '0cae966fd559089f9ace47d1a2ea5c6406c8e024f36e82c8327d6603adb72aeaa:2:{i:0;s:18:\"_identity-frontend\";i:1;s:46:\"[2,\"1SNgG1qkakmN2Frp80Qr1SX2kgRhIH88\",2592000]\";}'
    '_identity-backend' => 'c0d1afe5c2d610f9a90e14a0fab01645b813d345cb63ec03c8e2cb965d6dd833a:2:{i:0;s:17:\"_identity-backend\";i:1;s:46:\"[2,\"1SNgG1qkakmN2Frp80Qr1SX2kgRhIH88\",2592000]\";}'
]

$_SESSION = [
    '__flash' => []
    '__id' => 2
]

$_SERVER = [
    'MIBDIRS' => 'C:/xampp/php/extras/mibs'
    'MYSQL_HOME' => '\\xampp\\mysql\\bin'
    'OPENSSL_CONF' => 'C:/xampp/apache/bin/openssl.cnf'
    'PHP_PEAR_SYSCONF_DIR' => '\\xampp\\php'
    'PHPRC' => '\\xampp\\php'
    'TMP' => '\\xampp\\tmp'
    'HTTP_HOST' => 'localhost'
    'HTTP_CONNECTION' => 'keep-alive'
    'CONTENT_LENGTH' => '74'
    'HTTP_CACHE_CONTROL' => 'max-age=0'
    'HTTP_ORIGIN' => 'http://localhost'
    'HTTP_UPGRADE_INSECURE_REQUESTS' => '1'
    'HTTP_USER_AGENT' => 'Mozilla/5.0 (Windows NT 10.0; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/57.0.2987.133 Safari/537.36'
    'CONTENT_TYPE' => 'application/x-www-form-urlencoded'
    'HTTP_ACCEPT' => 'text/html,application/xhtml+xml,application/xml;q=0.9,image/webp,*/*;q=0.8'
    'HTTP_REFERER' => 'http://localhost/my_first_project/backend/web/index.php?r=post%2Fview&id=3'
    'HTTP_ACCEPT_ENCODING' => 'gzip, deflate, br'
    'HTTP_ACCEPT_LANGUAGE' => 'sk-SK,sk;q=0.8,cs;q=0.6,en-US;q=0.4,en;q=0.2'
    'HTTP_COOKIE' => 'advanced-backend=ocapqr5qgv09ionkbionbf547f; _csrf-backend=106541c7716ce6243ffe7fcfaf136b2a6a12ae438d98e6f746d58b64bcb13ed8a%3A2%3A%7Bi%3A0%3Bs%3A13%3A%22_csrf-backend%22%3Bi%3A1%3Bs%3A32%3A%22oFrjDE6vI0vSHT2i1W4CYRO-RckaEjk2%22%3B%7D; advanced-frontend=qolu9g2b2l5l25v3anavkh87o4; _csrf-frontend=c02a00c759b3da9e0c4471ffb359e93f3c781a709c70f504ffcee85e0e08c80aa%3A2%3A%7Bi%3A0%3Bs%3A14%3A%22_csrf-frontend%22%3Bi%3A1%3Bs%3A32%3A%22H_MBy0eyRt9CA7QrM1DtVa88L7n2FYMu%22%3B%7D; _identity-frontend=0cae966fd559089f9ace47d1a2ea5c6406c8e024f36e82c8327d6603adb72aeaa%3A2%3A%7Bi%3A0%3Bs%3A18%3A%22_identity-frontend%22%3Bi%3A1%3Bs%3A46%3A%22%5B2%2C%221SNgG1qkakmN2Frp80Qr1SX2kgRhIH88%22%2C2592000%5D%22%3B%7D; _identity-backend=c0d1afe5c2d610f9a90e14a0fab01645b813d345cb63ec03c8e2cb965d6dd833a%3A2%3A%7Bi%3A0%3Bs%3A17%3A%22_identity-backend%22%3Bi%3A1%3Bs%3A46%3A%22%5B2%2C%221SNgG1qkakmN2Frp80Qr1SX2kgRhIH88%22%2C2592000%5D%22%3B%7D'
    'PATH' => 'C:\\WINDOWS\\system32;C:\\WINDOWS;C:\\WINDOWS\\System32\\Wbem;C:\\WINDOWS\\System32\\WindowsPowerShell\\v1.0\\;C:\\xampp\\php;C:\\ProgramData\\ComposerSetup\\bin;C:\\Program Files\\Git\\cmd;C:\\Users\\Win10\\AppData\\Local\\Microsoft\\WindowsApps;C:\\Users\\Win10\\AppData\\Roaming\\Composer\\vendor\\bin'
    'SystemRoot' => 'C:\\WINDOWS'
    'COMSPEC' => 'C:\\WINDOWS\\system32\\cmd.exe'
    'PATHEXT' => '.COM;.EXE;.BAT;.CMD;.VBS;.VBE;.JS;.JSE;.WSF;.WSH;.MSC'
    'WINDIR' => 'C:\\WINDOWS'
    'SERVER_SIGNATURE' => '<address>Apache/2.4.25 (Win32) OpenSSL/1.0.2j PHP/7.1.1 Server at localhost Port 80</address>
'
    'SERVER_SOFTWARE' => 'Apache/2.4.25 (Win32) OpenSSL/1.0.2j PHP/7.1.1'
    'SERVER_NAME' => 'localhost'
    'SERVER_ADDR' => '::1'
    'SERVER_PORT' => '80'
    'REMOTE_ADDR' => '::1'
    'DOCUMENT_ROOT' => 'C:/xampp/htdocs'
    'REQUEST_SCHEME' => 'http'
    'CONTEXT_PREFIX' => ''
    'CONTEXT_DOCUMENT_ROOT' => 'C:/xampp/htdocs'
    'SERVER_ADMIN' => 'postmaster@localhost'
    'SCRIPT_FILENAME' => 'C:/xampp/htdocs/my_first_project/backend/web/index.php'
    'REMOTE_PORT' => '52619'
    'GATEWAY_INTERFACE' => 'CGI/1.1'
    'SERVER_PROTOCOL' => 'HTTP/1.1'
    'REQUEST_METHOD' => 'POST'
    'QUERY_STRING' => 'r=comment%2Fdelete&id=1&id_andwer_on_comment=1'
    'REQUEST_URI' => '/my_first_project/backend/web/index.php?r=comment%2Fdelete&id=1&id_andwer_on_comment=1'
    'SCRIPT_NAME' => '/my_first_project/backend/web/index.php'
    'PHP_SELF' => '/my_first_project/backend/web/index.php'
    'REQUEST_TIME_FLOAT' => 1491822274.592
    'REQUEST_TIME' => 1491822274
]
2017-04-10 15:36:03 [::1][-][-][error][Error] Error: Undefined constant 'yii\web\ForbiddenHttpException' in C:\xampp\htdocs\my_first_project\backend\controllers\PostController.php:83
Stack trace:
#0 [internal function]: backend\controllers\PostController->actionCreate()
#1 C:\xampp\htdocs\my_first_project\vendor\yiisoft\yii2\base\InlineAction.php(57): call_user_func_array(Array, Array)
#2 C:\xampp\htdocs\my_first_project\vendor\yiisoft\yii2\base\Controller.php(156): yii\base\InlineAction->runWithParams(Array)
#3 C:\xampp\htdocs\my_first_project\vendor\yiisoft\yii2\base\Module.php(523): yii\base\Controller->runAction('create', Array)
#4 C:\xampp\htdocs\my_first_project\vendor\yiisoft\yii2\web\Application.php(102): yii\base\Module->runAction('post/create', Array)
#5 C:\xampp\htdocs\my_first_project\vendor\yiisoft\yii2\base\Application.php(380): yii\web\Application->handleRequest(Object(yii\web\Request))
#6 C:\xampp\htdocs\my_first_project\backend\web\index.php(17): yii\base\Application->run()
#7 {main}
2017-04-10 15:36:03 [::1][-][-][info][application] $_GET = [
    'r' => 'post/create'
]

$_COOKIE = [
    'advanced-backend' => 'ocapqr5qgv09ionkbionbf547f'
    '_csrf-backend' => '106541c7716ce6243ffe7fcfaf136b2a6a12ae438d98e6f746d58b64bcb13ed8a:2:{i:0;s:13:\"_csrf-backend\";i:1;s:32:\"oFrjDE6vI0vSHT2i1W4CYRO-RckaEjk2\";}'
    'advanced-frontend' => 'qolu9g2b2l5l25v3anavkh87o4'
    '_csrf-frontend' => 'c02a00c759b3da9e0c4471ffb359e93f3c781a709c70f504ffcee85e0e08c80aa:2:{i:0;s:14:\"_csrf-frontend\";i:1;s:32:\"H_MBy0eyRt9CA7QrM1DtVa88L7n2FYMu\";}'
    '_identity-frontend' => '0cae966fd559089f9ace47d1a2ea5c6406c8e024f36e82c8327d6603adb72aeaa:2:{i:0;s:18:\"_identity-frontend\";i:1;s:46:\"[2,\"1SNgG1qkakmN2Frp80Qr1SX2kgRhIH88\",2592000]\";}'
    '_identity-backend' => 'c0d1afe5c2d610f9a90e14a0fab01645b813d345cb63ec03c8e2cb965d6dd833a:2:{i:0;s:17:\"_identity-backend\";i:1;s:46:\"[2,\"1SNgG1qkakmN2Frp80Qr1SX2kgRhIH88\",2592000]\";}'
]

$_SERVER = [
    'MIBDIRS' => 'C:/xampp/php/extras/mibs'
    'MYSQL_HOME' => '\\xampp\\mysql\\bin'
    'OPENSSL_CONF' => 'C:/xampp/apache/bin/openssl.cnf'
    'PHP_PEAR_SYSCONF_DIR' => '\\xampp\\php'
    'PHPRC' => '\\xampp\\php'
    'TMP' => '\\xampp\\tmp'
    'HTTP_HOST' => 'localhost'
    'HTTP_CONNECTION' => 'keep-alive'
    'HTTP_UPGRADE_INSECURE_REQUESTS' => '1'
    'HTTP_USER_AGENT' => 'Mozilla/5.0 (Windows NT 10.0; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/57.0.2987.133 Safari/537.36'
    'HTTP_ACCEPT' => 'text/html,application/xhtml+xml,application/xml;q=0.9,image/webp,*/*;q=0.8'
    'HTTP_REFERER' => 'http://localhost/my_first_project/backend/web/index.php?r=post%2Findex'
    'HTTP_ACCEPT_ENCODING' => 'gzip, deflate, sdch, br'
    'HTTP_ACCEPT_LANGUAGE' => 'sk-SK,sk;q=0.8,cs;q=0.6,en-US;q=0.4,en;q=0.2'
    'HTTP_COOKIE' => 'advanced-backend=ocapqr5qgv09ionkbionbf547f; _csrf-backend=106541c7716ce6243ffe7fcfaf136b2a6a12ae438d98e6f746d58b64bcb13ed8a%3A2%3A%7Bi%3A0%3Bs%3A13%3A%22_csrf-backend%22%3Bi%3A1%3Bs%3A32%3A%22oFrjDE6vI0vSHT2i1W4CYRO-RckaEjk2%22%3B%7D; advanced-frontend=qolu9g2b2l5l25v3anavkh87o4; _csrf-frontend=c02a00c759b3da9e0c4471ffb359e93f3c781a709c70f504ffcee85e0e08c80aa%3A2%3A%7Bi%3A0%3Bs%3A14%3A%22_csrf-frontend%22%3Bi%3A1%3Bs%3A32%3A%22H_MBy0eyRt9CA7QrM1DtVa88L7n2FYMu%22%3B%7D; _identity-frontend=0cae966fd559089f9ace47d1a2ea5c6406c8e024f36e82c8327d6603adb72aeaa%3A2%3A%7Bi%3A0%3Bs%3A18%3A%22_identity-frontend%22%3Bi%3A1%3Bs%3A46%3A%22%5B2%2C%221SNgG1qkakmN2Frp80Qr1SX2kgRhIH88%22%2C2592000%5D%22%3B%7D; _identity-backend=c0d1afe5c2d610f9a90e14a0fab01645b813d345cb63ec03c8e2cb965d6dd833a%3A2%3A%7Bi%3A0%3Bs%3A17%3A%22_identity-backend%22%3Bi%3A1%3Bs%3A46%3A%22%5B2%2C%221SNgG1qkakmN2Frp80Qr1SX2kgRhIH88%22%2C2592000%5D%22%3B%7D'
    'PATH' => 'C:\\WINDOWS\\system32;C:\\WINDOWS;C:\\WINDOWS\\System32\\Wbem;C:\\WINDOWS\\System32\\WindowsPowerShell\\v1.0\\;C:\\xampp\\php;C:\\ProgramData\\ComposerSetup\\bin;C:\\Program Files\\Git\\cmd;C:\\Users\\Win10\\AppData\\Local\\Microsoft\\WindowsApps;C:\\Users\\Win10\\AppData\\Roaming\\Composer\\vendor\\bin'
    'SystemRoot' => 'C:\\WINDOWS'
    'COMSPEC' => 'C:\\WINDOWS\\system32\\cmd.exe'
    'PATHEXT' => '.COM;.EXE;.BAT;.CMD;.VBS;.VBE;.JS;.JSE;.WSF;.WSH;.MSC'
    'WINDIR' => 'C:\\WINDOWS'
    'SERVER_SIGNATURE' => '<address>Apache/2.4.25 (Win32) OpenSSL/1.0.2j PHP/7.1.1 Server at localhost Port 80</address>
'
    'SERVER_SOFTWARE' => 'Apache/2.4.25 (Win32) OpenSSL/1.0.2j PHP/7.1.1'
    'SERVER_NAME' => 'localhost'
    'SERVER_ADDR' => '::1'
    'SERVER_PORT' => '80'
    'REMOTE_ADDR' => '::1'
    'DOCUMENT_ROOT' => 'C:/xampp/htdocs'
    'REQUEST_SCHEME' => 'http'
    'CONTEXT_PREFIX' => ''
    'CONTEXT_DOCUMENT_ROOT' => 'C:/xampp/htdocs'
    'SERVER_ADMIN' => 'postmaster@localhost'
    'SCRIPT_FILENAME' => 'C:/xampp/htdocs/my_first_project/backend/web/index.php'
    'REMOTE_PORT' => '53594'
    'GATEWAY_INTERFACE' => 'CGI/1.1'
    'SERVER_PROTOCOL' => 'HTTP/1.1'
    'REQUEST_METHOD' => 'GET'
    'QUERY_STRING' => 'r=post%2Fcreate'
    'REQUEST_URI' => '/my_first_project/backend/web/index.php?r=post%2Fcreate'
    'SCRIPT_NAME' => '/my_first_project/backend/web/index.php'
    'PHP_SELF' => '/my_first_project/backend/web/index.php'
    'REQUEST_TIME_FLOAT' => 1491831363.274
    'REQUEST_TIME' => 1491831363
]
2017-04-10 15:36:03 [::1][2][-][error][yii\web\Session::open] session_start(): Cannot send session cache limiter - headers already sent (output started at C:\xampp\htdocs\my_first_project\vendor\yiisoft\yii2\web\Response.php:391)
2017-04-10 15:36:03 [::1][2][-][info][application] $_GET = [
    'r' => 'post/create'
]

$_COOKIE = [
    'advanced-backend' => 'ocapqr5qgv09ionkbionbf547f'
    '_csrf-backend' => '106541c7716ce6243ffe7fcfaf136b2a6a12ae438d98e6f746d58b64bcb13ed8a:2:{i:0;s:13:\"_csrf-backend\";i:1;s:32:\"oFrjDE6vI0vSHT2i1W4CYRO-RckaEjk2\";}'
    'advanced-frontend' => 'qolu9g2b2l5l25v3anavkh87o4'
    '_csrf-frontend' => 'c02a00c759b3da9e0c4471ffb359e93f3c781a709c70f504ffcee85e0e08c80aa:2:{i:0;s:14:\"_csrf-frontend\";i:1;s:32:\"H_MBy0eyRt9CA7QrM1DtVa88L7n2FYMu\";}'
    '_identity-frontend' => '0cae966fd559089f9ace47d1a2ea5c6406c8e024f36e82c8327d6603adb72aeaa:2:{i:0;s:18:\"_identity-frontend\";i:1;s:46:\"[2,\"1SNgG1qkakmN2Frp80Qr1SX2kgRhIH88\",2592000]\";}'
    '_identity-backend' => 'c0d1afe5c2d610f9a90e14a0fab01645b813d345cb63ec03c8e2cb965d6dd833a:2:{i:0;s:17:\"_identity-backend\";i:1;s:46:\"[2,\"1SNgG1qkakmN2Frp80Qr1SX2kgRhIH88\",2592000]\";}'
]

$_SESSION = [
    '__flash' => []
    '__id' => 2
]

$_SERVER = [
    'MIBDIRS' => 'C:/xampp/php/extras/mibs'
    'MYSQL_HOME' => '\\xampp\\mysql\\bin'
    'OPENSSL_CONF' => 'C:/xampp/apache/bin/openssl.cnf'
    'PHP_PEAR_SYSCONF_DIR' => '\\xampp\\php'
    'PHPRC' => '\\xampp\\php'
    'TMP' => '\\xampp\\tmp'
    'HTTP_HOST' => 'localhost'
    'HTTP_CONNECTION' => 'keep-alive'
    'HTTP_UPGRADE_INSECURE_REQUESTS' => '1'
    'HTTP_USER_AGENT' => 'Mozilla/5.0 (Windows NT 10.0; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/57.0.2987.133 Safari/537.36'
    'HTTP_ACCEPT' => 'text/html,application/xhtml+xml,application/xml;q=0.9,image/webp,*/*;q=0.8'
    'HTTP_REFERER' => 'http://localhost/my_first_project/backend/web/index.php?r=post%2Findex'
    'HTTP_ACCEPT_ENCODING' => 'gzip, deflate, sdch, br'
    'HTTP_ACCEPT_LANGUAGE' => 'sk-SK,sk;q=0.8,cs;q=0.6,en-US;q=0.4,en;q=0.2'
    'HTTP_COOKIE' => 'advanced-backend=ocapqr5qgv09ionkbionbf547f; _csrf-backend=106541c7716ce6243ffe7fcfaf136b2a6a12ae438d98e6f746d58b64bcb13ed8a%3A2%3A%7Bi%3A0%3Bs%3A13%3A%22_csrf-backend%22%3Bi%3A1%3Bs%3A32%3A%22oFrjDE6vI0vSHT2i1W4CYRO-RckaEjk2%22%3B%7D; advanced-frontend=qolu9g2b2l5l25v3anavkh87o4; _csrf-frontend=c02a00c759b3da9e0c4471ffb359e93f3c781a709c70f504ffcee85e0e08c80aa%3A2%3A%7Bi%3A0%3Bs%3A14%3A%22_csrf-frontend%22%3Bi%3A1%3Bs%3A32%3A%22H_MBy0eyRt9CA7QrM1DtVa88L7n2FYMu%22%3B%7D; _identity-frontend=0cae966fd559089f9ace47d1a2ea5c6406c8e024f36e82c8327d6603adb72aeaa%3A2%3A%7Bi%3A0%3Bs%3A18%3A%22_identity-frontend%22%3Bi%3A1%3Bs%3A46%3A%22%5B2%2C%221SNgG1qkakmN2Frp80Qr1SX2kgRhIH88%22%2C2592000%5D%22%3B%7D; _identity-backend=c0d1afe5c2d610f9a90e14a0fab01645b813d345cb63ec03c8e2cb965d6dd833a%3A2%3A%7Bi%3A0%3Bs%3A17%3A%22_identity-backend%22%3Bi%3A1%3Bs%3A46%3A%22%5B2%2C%221SNgG1qkakmN2Frp80Qr1SX2kgRhIH88%22%2C2592000%5D%22%3B%7D'
    'PATH' => 'C:\\WINDOWS\\system32;C:\\WINDOWS;C:\\WINDOWS\\System32\\Wbem;C:\\WINDOWS\\System32\\WindowsPowerShell\\v1.0\\;C:\\xampp\\php;C:\\ProgramData\\ComposerSetup\\bin;C:\\Program Files\\Git\\cmd;C:\\Users\\Win10\\AppData\\Local\\Microsoft\\WindowsApps;C:\\Users\\Win10\\AppData\\Roaming\\Composer\\vendor\\bin'
    'SystemRoot' => 'C:\\WINDOWS'
    'COMSPEC' => 'C:\\WINDOWS\\system32\\cmd.exe'
    'PATHEXT' => '.COM;.EXE;.BAT;.CMD;.VBS;.VBE;.JS;.JSE;.WSF;.WSH;.MSC'
    'WINDIR' => 'C:\\WINDOWS'
    'SERVER_SIGNATURE' => '<address>Apache/2.4.25 (Win32) OpenSSL/1.0.2j PHP/7.1.1 Server at localhost Port 80</address>
'
    'SERVER_SOFTWARE' => 'Apache/2.4.25 (Win32) OpenSSL/1.0.2j PHP/7.1.1'
    'SERVER_NAME' => 'localhost'
    'SERVER_ADDR' => '::1'
    'SERVER_PORT' => '80'
    'REMOTE_ADDR' => '::1'
    'DOCUMENT_ROOT' => 'C:/xampp/htdocs'
    'REQUEST_SCHEME' => 'http'
    'CONTEXT_PREFIX' => ''
    'CONTEXT_DOCUMENT_ROOT' => 'C:/xampp/htdocs'
    'SERVER_ADMIN' => 'postmaster@localhost'
    'SCRIPT_FILENAME' => 'C:/xampp/htdocs/my_first_project/backend/web/index.php'
    'REMOTE_PORT' => '53594'
    'GATEWAY_INTERFACE' => 'CGI/1.1'
    'SERVER_PROTOCOL' => 'HTTP/1.1'
    'REQUEST_METHOD' => 'GET'
    'QUERY_STRING' => 'r=post%2Fcreate'
    'REQUEST_URI' => '/my_first_project/backend/web/index.php?r=post%2Fcreate'
    'SCRIPT_NAME' => '/my_first_project/backend/web/index.php'
    'PHP_SELF' => '/my_first_project/backend/web/index.php'
    'REQUEST_TIME_FLOAT' => 1491831363.274
    'REQUEST_TIME' => 1491831363
]
2017-04-10 15:36:11 [::1][-][-][error][Error] Error: Undefined constant 'yii\web\ForbiddenHttpException' in C:\xampp\htdocs\my_first_project\backend\controllers\PostController.php:83
Stack trace:
#0 [internal function]: backend\controllers\PostController->actionCreate()
#1 C:\xampp\htdocs\my_first_project\vendor\yiisoft\yii2\base\InlineAction.php(57): call_user_func_array(Array, Array)
#2 C:\xampp\htdocs\my_first_project\vendor\yiisoft\yii2\base\Controller.php(156): yii\base\InlineAction->runWithParams(Array)
#3 C:\xampp\htdocs\my_first_project\vendor\yiisoft\yii2\base\Module.php(523): yii\base\Controller->runAction('create', Array)
#4 C:\xampp\htdocs\my_first_project\vendor\yiisoft\yii2\web\Application.php(102): yii\base\Module->runAction('post/create', Array)
#5 C:\xampp\htdocs\my_first_project\vendor\yiisoft\yii2\base\Application.php(380): yii\web\Application->handleRequest(Object(yii\web\Request))
#6 C:\xampp\htdocs\my_first_project\backend\web\index.php(17): yii\base\Application->run()
#7 {main}
2017-04-10 15:36:11 [::1][-][-][info][application] $_GET = [
    'r' => 'post/create'
]

$_COOKIE = [
    'advanced-backend' => 'ocapqr5qgv09ionkbionbf547f'
    '_csrf-backend' => '106541c7716ce6243ffe7fcfaf136b2a6a12ae438d98e6f746d58b64bcb13ed8a:2:{i:0;s:13:\"_csrf-backend\";i:1;s:32:\"oFrjDE6vI0vSHT2i1W4CYRO-RckaEjk2\";}'
    'advanced-frontend' => 'qolu9g2b2l5l25v3anavkh87o4'
    '_csrf-frontend' => 'c02a00c759b3da9e0c4471ffb359e93f3c781a709c70f504ffcee85e0e08c80aa:2:{i:0;s:14:\"_csrf-frontend\";i:1;s:32:\"H_MBy0eyRt9CA7QrM1DtVa88L7n2FYMu\";}'
    '_identity-frontend' => '0cae966fd559089f9ace47d1a2ea5c6406c8e024f36e82c8327d6603adb72aeaa:2:{i:0;s:18:\"_identity-frontend\";i:1;s:46:\"[2,\"1SNgG1qkakmN2Frp80Qr1SX2kgRhIH88\",2592000]\";}'
    '_identity-backend' => 'c0d1afe5c2d610f9a90e14a0fab01645b813d345cb63ec03c8e2cb965d6dd833a:2:{i:0;s:17:\"_identity-backend\";i:1;s:46:\"[2,\"1SNgG1qkakmN2Frp80Qr1SX2kgRhIH88\",2592000]\";}'
]

$_SERVER = [
    'MIBDIRS' => 'C:/xampp/php/extras/mibs'
    'MYSQL_HOME' => '\\xampp\\mysql\\bin'
    'OPENSSL_CONF' => 'C:/xampp/apache/bin/openssl.cnf'
    'PHP_PEAR_SYSCONF_DIR' => '\\xampp\\php'
    'PHPRC' => '\\xampp\\php'
    'TMP' => '\\xampp\\tmp'
    'HTTP_HOST' => 'localhost'
    'HTTP_CONNECTION' => 'keep-alive'
    'HTTP_CACHE_CONTROL' => 'max-age=0'
    'HTTP_UPGRADE_INSECURE_REQUESTS' => '1'
    'HTTP_USER_AGENT' => 'Mozilla/5.0 (Windows NT 10.0; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/57.0.2987.133 Safari/537.36'
    'HTTP_ACCEPT' => 'text/html,application/xhtml+xml,application/xml;q=0.9,image/webp,*/*;q=0.8'
    'HTTP_REFERER' => 'http://localhost/my_first_project/backend/web/index.php?r=post%2Findex'
    'HTTP_ACCEPT_ENCODING' => 'gzip, deflate, sdch, br'
    'HTTP_ACCEPT_LANGUAGE' => 'sk-SK,sk;q=0.8,cs;q=0.6,en-US;q=0.4,en;q=0.2'
    'HTTP_COOKIE' => 'advanced-backend=ocapqr5qgv09ionkbionbf547f; _csrf-backend=106541c7716ce6243ffe7fcfaf136b2a6a12ae438d98e6f746d58b64bcb13ed8a%3A2%3A%7Bi%3A0%3Bs%3A13%3A%22_csrf-backend%22%3Bi%3A1%3Bs%3A32%3A%22oFrjDE6vI0vSHT2i1W4CYRO-RckaEjk2%22%3B%7D; advanced-frontend=qolu9g2b2l5l25v3anavkh87o4; _csrf-frontend=c02a00c759b3da9e0c4471ffb359e93f3c781a709c70f504ffcee85e0e08c80aa%3A2%3A%7Bi%3A0%3Bs%3A14%3A%22_csrf-frontend%22%3Bi%3A1%3Bs%3A32%3A%22H_MBy0eyRt9CA7QrM1DtVa88L7n2FYMu%22%3B%7D; _identity-frontend=0cae966fd559089f9ace47d1a2ea5c6406c8e024f36e82c8327d6603adb72aeaa%3A2%3A%7Bi%3A0%3Bs%3A18%3A%22_identity-frontend%22%3Bi%3A1%3Bs%3A46%3A%22%5B2%2C%221SNgG1qkakmN2Frp80Qr1SX2kgRhIH88%22%2C2592000%5D%22%3B%7D; _identity-backend=c0d1afe5c2d610f9a90e14a0fab01645b813d345cb63ec03c8e2cb965d6dd833a%3A2%3A%7Bi%3A0%3Bs%3A17%3A%22_identity-backend%22%3Bi%3A1%3Bs%3A46%3A%22%5B2%2C%221SNgG1qkakmN2Frp80Qr1SX2kgRhIH88%22%2C2592000%5D%22%3B%7D'
    'PATH' => 'C:\\WINDOWS\\system32;C:\\WINDOWS;C:\\WINDOWS\\System32\\Wbem;C:\\WINDOWS\\System32\\WindowsPowerShell\\v1.0\\;C:\\xampp\\php;C:\\ProgramData\\ComposerSetup\\bin;C:\\Program Files\\Git\\cmd;C:\\Users\\Win10\\AppData\\Local\\Microsoft\\WindowsApps;C:\\Users\\Win10\\AppData\\Roaming\\Composer\\vendor\\bin'
    'SystemRoot' => 'C:\\WINDOWS'
    'COMSPEC' => 'C:\\WINDOWS\\system32\\cmd.exe'
    'PATHEXT' => '.COM;.EXE;.BAT;.CMD;.VBS;.VBE;.JS;.JSE;.WSF;.WSH;.MSC'
    'WINDIR' => 'C:\\WINDOWS'
    'SERVER_SIGNATURE' => '<address>Apache/2.4.25 (Win32) OpenSSL/1.0.2j PHP/7.1.1 Server at localhost Port 80</address>
'
    'SERVER_SOFTWARE' => 'Apache/2.4.25 (Win32) OpenSSL/1.0.2j PHP/7.1.1'
    'SERVER_NAME' => 'localhost'
    'SERVER_ADDR' => '::1'
    'SERVER_PORT' => '80'
    'REMOTE_ADDR' => '::1'
    'DOCUMENT_ROOT' => 'C:/xampp/htdocs'
    'REQUEST_SCHEME' => 'http'
    'CONTEXT_PREFIX' => ''
    'CONTEXT_DOCUMENT_ROOT' => 'C:/xampp/htdocs'
    'SERVER_ADMIN' => 'postmaster@localhost'
    'SCRIPT_FILENAME' => 'C:/xampp/htdocs/my_first_project/backend/web/index.php'
    'REMOTE_PORT' => '53605'
    'GATEWAY_INTERFACE' => 'CGI/1.1'
    'SERVER_PROTOCOL' => 'HTTP/1.1'
    'REQUEST_METHOD' => 'GET'
    'QUERY_STRING' => 'r=post%2Fcreate'
    'REQUEST_URI' => '/my_first_project/backend/web/index.php?r=post%2Fcreate'
    'SCRIPT_NAME' => '/my_first_project/backend/web/index.php'
    'PHP_SELF' => '/my_first_project/backend/web/index.php'
    'REQUEST_TIME_FLOAT' => 1491831371.848
    'REQUEST_TIME' => 1491831371
]
2017-04-10 15:36:11 [::1][2][-][error][yii\web\Session::open] session_start(): Cannot send session cache limiter - headers already sent (output started at C:\xampp\htdocs\my_first_project\vendor\yiisoft\yii2\web\Response.php:391)
2017-04-10 15:36:11 [::1][2][-][info][application] $_GET = [
    'r' => 'post/create'
]

$_COOKIE = [
    'advanced-backend' => 'ocapqr5qgv09ionkbionbf547f'
    '_csrf-backend' => '106541c7716ce6243ffe7fcfaf136b2a6a12ae438d98e6f746d58b64bcb13ed8a:2:{i:0;s:13:\"_csrf-backend\";i:1;s:32:\"oFrjDE6vI0vSHT2i1W4CYRO-RckaEjk2\";}'
    'advanced-frontend' => 'qolu9g2b2l5l25v3anavkh87o4'
    '_csrf-frontend' => 'c02a00c759b3da9e0c4471ffb359e93f3c781a709c70f504ffcee85e0e08c80aa:2:{i:0;s:14:\"_csrf-frontend\";i:1;s:32:\"H_MBy0eyRt9CA7QrM1DtVa88L7n2FYMu\";}'
    '_identity-frontend' => '0cae966fd559089f9ace47d1a2ea5c6406c8e024f36e82c8327d6603adb72aeaa:2:{i:0;s:18:\"_identity-frontend\";i:1;s:46:\"[2,\"1SNgG1qkakmN2Frp80Qr1SX2kgRhIH88\",2592000]\";}'
    '_identity-backend' => 'c0d1afe5c2d610f9a90e14a0fab01645b813d345cb63ec03c8e2cb965d6dd833a:2:{i:0;s:17:\"_identity-backend\";i:1;s:46:\"[2,\"1SNgG1qkakmN2Frp80Qr1SX2kgRhIH88\",2592000]\";}'
]

$_SESSION = [
    '__flash' => []
    '__id' => 2
]

$_SERVER = [
    'MIBDIRS' => 'C:/xampp/php/extras/mibs'
    'MYSQL_HOME' => '\\xampp\\mysql\\bin'
    'OPENSSL_CONF' => 'C:/xampp/apache/bin/openssl.cnf'
    'PHP_PEAR_SYSCONF_DIR' => '\\xampp\\php'
    'PHPRC' => '\\xampp\\php'
    'TMP' => '\\xampp\\tmp'
    'HTTP_HOST' => 'localhost'
    'HTTP_CONNECTION' => 'keep-alive'
    'HTTP_CACHE_CONTROL' => 'max-age=0'
    'HTTP_UPGRADE_INSECURE_REQUESTS' => '1'
    'HTTP_USER_AGENT' => 'Mozilla/5.0 (Windows NT 10.0; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/57.0.2987.133 Safari/537.36'
    'HTTP_ACCEPT' => 'text/html,application/xhtml+xml,application/xml;q=0.9,image/webp,*/*;q=0.8'
    'HTTP_REFERER' => 'http://localhost/my_first_project/backend/web/index.php?r=post%2Findex'
    'HTTP_ACCEPT_ENCODING' => 'gzip, deflate, sdch, br'
    'HTTP_ACCEPT_LANGUAGE' => 'sk-SK,sk;q=0.8,cs;q=0.6,en-US;q=0.4,en;q=0.2'
    'HTTP_COOKIE' => 'advanced-backend=ocapqr5qgv09ionkbionbf547f; _csrf-backend=106541c7716ce6243ffe7fcfaf136b2a6a12ae438d98e6f746d58b64bcb13ed8a%3A2%3A%7Bi%3A0%3Bs%3A13%3A%22_csrf-backend%22%3Bi%3A1%3Bs%3A32%3A%22oFrjDE6vI0vSHT2i1W4CYRO-RckaEjk2%22%3B%7D; advanced-frontend=qolu9g2b2l5l25v3anavkh87o4; _csrf-frontend=c02a00c759b3da9e0c4471ffb359e93f3c781a709c70f504ffcee85e0e08c80aa%3A2%3A%7Bi%3A0%3Bs%3A14%3A%22_csrf-frontend%22%3Bi%3A1%3Bs%3A32%3A%22H_MBy0eyRt9CA7QrM1DtVa88L7n2FYMu%22%3B%7D; _identity-frontend=0cae966fd559089f9ace47d1a2ea5c6406c8e024f36e82c8327d6603adb72aeaa%3A2%3A%7Bi%3A0%3Bs%3A18%3A%22_identity-frontend%22%3Bi%3A1%3Bs%3A46%3A%22%5B2%2C%221SNgG1qkakmN2Frp80Qr1SX2kgRhIH88%22%2C2592000%5D%22%3B%7D; _identity-backend=c0d1afe5c2d610f9a90e14a0fab01645b813d345cb63ec03c8e2cb965d6dd833a%3A2%3A%7Bi%3A0%3Bs%3A17%3A%22_identity-backend%22%3Bi%3A1%3Bs%3A46%3A%22%5B2%2C%221SNgG1qkakmN2Frp80Qr1SX2kgRhIH88%22%2C2592000%5D%22%3B%7D'
    'PATH' => 'C:\\WINDOWS\\system32;C:\\WINDOWS;C:\\WINDOWS\\System32\\Wbem;C:\\WINDOWS\\System32\\WindowsPowerShell\\v1.0\\;C:\\xampp\\php;C:\\ProgramData\\ComposerSetup\\bin;C:\\Program Files\\Git\\cmd;C:\\Users\\Win10\\AppData\\Local\\Microsoft\\WindowsApps;C:\\Users\\Win10\\AppData\\Roaming\\Composer\\vendor\\bin'
    'SystemRoot' => 'C:\\WINDOWS'
    'COMSPEC' => 'C:\\WINDOWS\\system32\\cmd.exe'
    'PATHEXT' => '.COM;.EXE;.BAT;.CMD;.VBS;.VBE;.JS;.JSE;.WSF;.WSH;.MSC'
    'WINDIR' => 'C:\\WINDOWS'
    'SERVER_SIGNATURE' => '<address>Apache/2.4.25 (Win32) OpenSSL/1.0.2j PHP/7.1.1 Server at localhost Port 80</address>
'
    'SERVER_SOFTWARE' => 'Apache/2.4.25 (Win32) OpenSSL/1.0.2j PHP/7.1.1'
    'SERVER_NAME' => 'localhost'
    'SERVER_ADDR' => '::1'
    'SERVER_PORT' => '80'
    'REMOTE_ADDR' => '::1'
    'DOCUMENT_ROOT' => 'C:/xampp/htdocs'
    'REQUEST_SCHEME' => 'http'
    'CONTEXT_PREFIX' => ''
    'CONTEXT_DOCUMENT_ROOT' => 'C:/xampp/htdocs'
    'SERVER_ADMIN' => 'postmaster@localhost'
    'SCRIPT_FILENAME' => 'C:/xampp/htdocs/my_first_project/backend/web/index.php'
    'REMOTE_PORT' => '53605'
    'GATEWAY_INTERFACE' => 'CGI/1.1'
    'SERVER_PROTOCOL' => 'HTTP/1.1'
    'REQUEST_METHOD' => 'GET'
    'QUERY_STRING' => 'r=post%2Fcreate'
    'REQUEST_URI' => '/my_first_project/backend/web/index.php?r=post%2Fcreate'
    'SCRIPT_NAME' => '/my_first_project/backend/web/index.php'
    'PHP_SELF' => '/my_first_project/backend/web/index.php'
    'REQUEST_TIME_FLOAT' => 1491831371.848
    'REQUEST_TIME' => 1491831371
]
2017-04-10 15:37:49 [::1][3][g6vnqua4svsbcgg06u7ptkuibq][error][Error] Error: Undefined constant 'yii\web\ForbiddenHttpException' in C:\xampp\htdocs\my_first_project\backend\controllers\PostController.php:83
Stack trace:
#0 [internal function]: backend\controllers\PostController->actionCreate()
#1 C:\xampp\htdocs\my_first_project\vendor\yiisoft\yii2\base\InlineAction.php(57): call_user_func_array(Array, Array)
#2 C:\xampp\htdocs\my_first_project\vendor\yiisoft\yii2\base\Controller.php(156): yii\base\InlineAction->runWithParams(Array)
#3 C:\xampp\htdocs\my_first_project\vendor\yiisoft\yii2\base\Module.php(523): yii\base\Controller->runAction('create', Array)
#4 C:\xampp\htdocs\my_first_project\vendor\yiisoft\yii2\web\Application.php(102): yii\base\Module->runAction('post/create', Array)
#5 C:\xampp\htdocs\my_first_project\vendor\yiisoft\yii2\base\Application.php(380): yii\web\Application->handleRequest(Object(yii\web\Request))
#6 C:\xampp\htdocs\my_first_project\backend\web\index.php(17): yii\base\Application->run()
#7 {main}
2017-04-10 15:37:49 [::1][3][g6vnqua4svsbcgg06u7ptkuibq][info][application] $_GET = [
    'r' => 'post/create'
]

$_COOKIE = [
    '_csrf-backend' => '106541c7716ce6243ffe7fcfaf136b2a6a12ae438d98e6f746d58b64bcb13ed8a:2:{i:0;s:13:\"_csrf-backend\";i:1;s:32:\"oFrjDE6vI0vSHT2i1W4CYRO-RckaEjk2\";}'
    '_csrf-frontend' => 'c02a00c759b3da9e0c4471ffb359e93f3c781a709c70f504ffcee85e0e08c80aa:2:{i:0;s:14:\"_csrf-frontend\";i:1;s:32:\"H_MBy0eyRt9CA7QrM1DtVa88L7n2FYMu\";}'
    'advanced-frontend' => '7r1kscjp64o9f2v6ldn4j9t0ne'
    'advanced-backend' => 'g6vnqua4svsbcgg06u7ptkuibq'
    '_identity-backend' => 'd1d69c70ce7f469823cb67981d1919b79c6763a2cefb2bcaed6660e48799a7a0a:2:{i:0;s:17:\"_identity-backend\";i:1;s:46:\"[3,\"PPkftzXE1TXzl3iOCMvFaDdMkCfm40RF\",2592000]\";}'
]

$_SESSION = [
    '__flash' => []
    '__returnUrl' => '/my_first_project/backend/web/index.php'
    '__id' => 3
]

$_SERVER = [
    'MIBDIRS' => 'C:/xampp/php/extras/mibs'
    'MYSQL_HOME' => '\\xampp\\mysql\\bin'
    'OPENSSL_CONF' => 'C:/xampp/apache/bin/openssl.cnf'
    'PHP_PEAR_SYSCONF_DIR' => '\\xampp\\php'
    'PHPRC' => '\\xampp\\php'
    'TMP' => '\\xampp\\tmp'
    'HTTP_HOST' => 'localhost'
    'HTTP_CONNECTION' => 'keep-alive'
    'HTTP_UPGRADE_INSECURE_REQUESTS' => '1'
    'HTTP_USER_AGENT' => 'Mozilla/5.0 (Windows NT 10.0; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/57.0.2987.133 Safari/537.36'
    'HTTP_ACCEPT' => 'text/html,application/xhtml+xml,application/xml;q=0.9,image/webp,*/*;q=0.8'
    'HTTP_REFERER' => 'http://localhost/my_first_project/backend/web/index.php?r=post%2Findex'
    'HTTP_ACCEPT_ENCODING' => 'gzip, deflate, sdch, br'
    'HTTP_ACCEPT_LANGUAGE' => 'sk-SK,sk;q=0.8,cs;q=0.6,en-US;q=0.4,en;q=0.2'
    'HTTP_COOKIE' => '_csrf-backend=106541c7716ce6243ffe7fcfaf136b2a6a12ae438d98e6f746d58b64bcb13ed8a%3A2%3A%7Bi%3A0%3Bs%3A13%3A%22_csrf-backend%22%3Bi%3A1%3Bs%3A32%3A%22oFrjDE6vI0vSHT2i1W4CYRO-RckaEjk2%22%3B%7D; _csrf-frontend=c02a00c759b3da9e0c4471ffb359e93f3c781a709c70f504ffcee85e0e08c80aa%3A2%3A%7Bi%3A0%3Bs%3A14%3A%22_csrf-frontend%22%3Bi%3A1%3Bs%3A32%3A%22H_MBy0eyRt9CA7QrM1DtVa88L7n2FYMu%22%3B%7D; advanced-frontend=7r1kscjp64o9f2v6ldn4j9t0ne; advanced-backend=g6vnqua4svsbcgg06u7ptkuibq; _identity-backend=d1d69c70ce7f469823cb67981d1919b79c6763a2cefb2bcaed6660e48799a7a0a%3A2%3A%7Bi%3A0%3Bs%3A17%3A%22_identity-backend%22%3Bi%3A1%3Bs%3A46%3A%22%5B3%2C%22PPkftzXE1TXzl3iOCMvFaDdMkCfm40RF%22%2C2592000%5D%22%3B%7D'
    'PATH' => 'C:\\WINDOWS\\system32;C:\\WINDOWS;C:\\WINDOWS\\System32\\Wbem;C:\\WINDOWS\\System32\\WindowsPowerShell\\v1.0\\;C:\\xampp\\php;C:\\ProgramData\\ComposerSetup\\bin;C:\\Program Files\\Git\\cmd;C:\\Users\\Win10\\AppData\\Local\\Microsoft\\WindowsApps;C:\\Users\\Win10\\AppData\\Roaming\\Composer\\vendor\\bin'
    'SystemRoot' => 'C:\\WINDOWS'
    'COMSPEC' => 'C:\\WINDOWS\\system32\\cmd.exe'
    'PATHEXT' => '.COM;.EXE;.BAT;.CMD;.VBS;.VBE;.JS;.JSE;.WSF;.WSH;.MSC'
    'WINDIR' => 'C:\\WINDOWS'
    'SERVER_SIGNATURE' => '<address>Apache/2.4.25 (Win32) OpenSSL/1.0.2j PHP/7.1.1 Server at localhost Port 80</address>
'
    'SERVER_SOFTWARE' => 'Apache/2.4.25 (Win32) OpenSSL/1.0.2j PHP/7.1.1'
    'SERVER_NAME' => 'localhost'
    'SERVER_ADDR' => '::1'
    'SERVER_PORT' => '80'
    'REMOTE_ADDR' => '::1'
    'DOCUMENT_ROOT' => 'C:/xampp/htdocs'
    'REQUEST_SCHEME' => 'http'
    'CONTEXT_PREFIX' => ''
    'CONTEXT_DOCUMENT_ROOT' => 'C:/xampp/htdocs'
    'SERVER_ADMIN' => 'postmaster@localhost'
    'SCRIPT_FILENAME' => 'C:/xampp/htdocs/my_first_project/backend/web/index.php'
    'REMOTE_PORT' => '53640'
    'GATEWAY_INTERFACE' => 'CGI/1.1'
    'SERVER_PROTOCOL' => 'HTTP/1.1'
    'REQUEST_METHOD' => 'GET'
    'QUERY_STRING' => 'r=post%2Fcreate'
    'REQUEST_URI' => '/my_first_project/backend/web/index.php?r=post%2Fcreate'
    'SCRIPT_NAME' => '/my_first_project/backend/web/index.php'
    'PHP_SELF' => '/my_first_project/backend/web/index.php'
    'REQUEST_TIME_FLOAT' => 1491831469.426
    'REQUEST_TIME' => 1491831469
]
2017-04-10 15:39:54 [::1][3][g6vnqua4svsbcgg06u7ptkuibq][error][yii\web\HttpException:403] yii\web\ForbiddenHttpException in C:\xampp\htdocs\my_first_project\backend\controllers\PostController.php:83
Stack trace:
#0 [internal function]: backend\controllers\PostController->actionCreate()
#1 C:\xampp\htdocs\my_first_project\vendor\yiisoft\yii2\base\InlineAction.php(57): call_user_func_array(Array, Array)
#2 C:\xampp\htdocs\my_first_project\vendor\yiisoft\yii2\base\Controller.php(156): yii\base\InlineAction->runWithParams(Array)
#3 C:\xampp\htdocs\my_first_project\vendor\yiisoft\yii2\base\Module.php(523): yii\base\Controller->runAction('create', Array)
#4 C:\xampp\htdocs\my_first_project\vendor\yiisoft\yii2\web\Application.php(102): yii\base\Module->runAction('post/create', Array)
#5 C:\xampp\htdocs\my_first_project\vendor\yiisoft\yii2\base\Application.php(380): yii\web\Application->handleRequest(Object(yii\web\Request))
#6 C:\xampp\htdocs\my_first_project\backend\web\index.php(17): yii\base\Application->run()
#7 {main}
2017-04-10 15:39:54 [::1][3][g6vnqua4svsbcgg06u7ptkuibq][info][application] $_GET = [
    'r' => 'post/create'
]

$_COOKIE = [
    '_csrf-backend' => '106541c7716ce6243ffe7fcfaf136b2a6a12ae438d98e6f746d58b64bcb13ed8a:2:{i:0;s:13:\"_csrf-backend\";i:1;s:32:\"oFrjDE6vI0vSHT2i1W4CYRO-RckaEjk2\";}'
    '_csrf-frontend' => 'c02a00c759b3da9e0c4471ffb359e93f3c781a709c70f504ffcee85e0e08c80aa:2:{i:0;s:14:\"_csrf-frontend\";i:1;s:32:\"H_MBy0eyRt9CA7QrM1DtVa88L7n2FYMu\";}'
    'advanced-frontend' => '7r1kscjp64o9f2v6ldn4j9t0ne'
    'advanced-backend' => 'g6vnqua4svsbcgg06u7ptkuibq'
    '_identity-backend' => 'd1d69c70ce7f469823cb67981d1919b79c6763a2cefb2bcaed6660e48799a7a0a:2:{i:0;s:17:\"_identity-backend\";i:1;s:46:\"[3,\"PPkftzXE1TXzl3iOCMvFaDdMkCfm40RF\",2592000]\";}'
]

$_SESSION = [
    '__flash' => []
    '__returnUrl' => '/my_first_project/backend/web/index.php'
    '__id' => 3
]

$_SERVER = [
    'MIBDIRS' => 'C:/xampp/php/extras/mibs'
    'MYSQL_HOME' => '\\xampp\\mysql\\bin'
    'OPENSSL_CONF' => 'C:/xampp/apache/bin/openssl.cnf'
    'PHP_PEAR_SYSCONF_DIR' => '\\xampp\\php'
    'PHPRC' => '\\xampp\\php'
    'TMP' => '\\xampp\\tmp'
    'HTTP_HOST' => 'localhost'
    'HTTP_CONNECTION' => 'keep-alive'
    'HTTP_CACHE_CONTROL' => 'max-age=0'
    'HTTP_UPGRADE_INSECURE_REQUESTS' => '1'
    'HTTP_USER_AGENT' => 'Mozilla/5.0 (Windows NT 10.0; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/57.0.2987.133 Safari/537.36'
    'HTTP_ACCEPT' => 'text/html,application/xhtml+xml,application/xml;q=0.9,image/webp,*/*;q=0.8'
    'HTTP_REFERER' => 'http://localhost/my_first_project/backend/web/index.php?r=post%2Findex'
    'HTTP_ACCEPT_ENCODING' => 'gzip, deflate, sdch, br'
    'HTTP_ACCEPT_LANGUAGE' => 'sk-SK,sk;q=0.8,cs;q=0.6,en-US;q=0.4,en;q=0.2'
    'HTTP_COOKIE' => '_csrf-backend=106541c7716ce6243ffe7fcfaf136b2a6a12ae438d98e6f746d58b64bcb13ed8a%3A2%3A%7Bi%3A0%3Bs%3A13%3A%22_csrf-backend%22%3Bi%3A1%3Bs%3A32%3A%22oFrjDE6vI0vSHT2i1W4CYRO-RckaEjk2%22%3B%7D; _csrf-frontend=c02a00c759b3da9e0c4471ffb359e93f3c781a709c70f504ffcee85e0e08c80aa%3A2%3A%7Bi%3A0%3Bs%3A14%3A%22_csrf-frontend%22%3Bi%3A1%3Bs%3A32%3A%22H_MBy0eyRt9CA7QrM1DtVa88L7n2FYMu%22%3B%7D; advanced-frontend=7r1kscjp64o9f2v6ldn4j9t0ne; advanced-backend=g6vnqua4svsbcgg06u7ptkuibq; _identity-backend=d1d69c70ce7f469823cb67981d1919b79c6763a2cefb2bcaed6660e48799a7a0a%3A2%3A%7Bi%3A0%3Bs%3A17%3A%22_identity-backend%22%3Bi%3A1%3Bs%3A46%3A%22%5B3%2C%22PPkftzXE1TXzl3iOCMvFaDdMkCfm40RF%22%2C2592000%5D%22%3B%7D'
    'PATH' => 'C:\\WINDOWS\\system32;C:\\WINDOWS;C:\\WINDOWS\\System32\\Wbem;C:\\WINDOWS\\System32\\WindowsPowerShell\\v1.0\\;C:\\xampp\\php;C:\\ProgramData\\ComposerSetup\\bin;C:\\Program Files\\Git\\cmd;C:\\Users\\Win10\\AppData\\Local\\Microsoft\\WindowsApps;C:\\Users\\Win10\\AppData\\Roaming\\Composer\\vendor\\bin'
    'SystemRoot' => 'C:\\WINDOWS'
    'COMSPEC' => 'C:\\WINDOWS\\system32\\cmd.exe'
    'PATHEXT' => '.COM;.EXE;.BAT;.CMD;.VBS;.VBE;.JS;.JSE;.WSF;.WSH;.MSC'
    'WINDIR' => 'C:\\WINDOWS'
    'SERVER_SIGNATURE' => '<address>Apache/2.4.25 (Win32) OpenSSL/1.0.2j PHP/7.1.1 Server at localhost Port 80</address>
'
    'SERVER_SOFTWARE' => 'Apache/2.4.25 (Win32) OpenSSL/1.0.2j PHP/7.1.1'
    'SERVER_NAME' => 'localhost'
    'SERVER_ADDR' => '::1'
    'SERVER_PORT' => '80'
    'REMOTE_ADDR' => '::1'
    'DOCUMENT_ROOT' => 'C:/xampp/htdocs'
    'REQUEST_SCHEME' => 'http'
    'CONTEXT_PREFIX' => ''
    'CONTEXT_DOCUMENT_ROOT' => 'C:/xampp/htdocs'
    'SERVER_ADMIN' => 'postmaster@localhost'
    'SCRIPT_FILENAME' => 'C:/xampp/htdocs/my_first_project/backend/web/index.php'
    'REMOTE_PORT' => '53656'
    'GATEWAY_INTERFACE' => 'CGI/1.1'
    'SERVER_PROTOCOL' => 'HTTP/1.1'
    'REQUEST_METHOD' => 'GET'
    'QUERY_STRING' => 'r=post%2Fcreate'
    'REQUEST_URI' => '/my_first_project/backend/web/index.php?r=post%2Fcreate'
    'SCRIPT_NAME' => '/my_first_project/backend/web/index.php'
    'PHP_SELF' => '/my_first_project/backend/web/index.php'
    'REQUEST_TIME_FLOAT' => 1491831594.075
    'REQUEST_TIME' => 1491831594
]
2017-04-10 16:07:41 [::1][3][1r837vh2c71d20kikjqio9tc02][error][yii\web\HttpException:403] yii\web\ForbiddenHttpException in C:\xampp\htdocs\my_first_project\backend\controllers\PostController.php:122
Stack trace:
#0 [internal function]: backend\controllers\PostController->actionDelete('2')
#1 C:\xampp\htdocs\my_first_project\vendor\yiisoft\yii2\base\InlineAction.php(57): call_user_func_array(Array, Array)
#2 C:\xampp\htdocs\my_first_project\vendor\yiisoft\yii2\base\Controller.php(156): yii\base\InlineAction->runWithParams(Array)
#3 C:\xampp\htdocs\my_first_project\vendor\yiisoft\yii2\base\Module.php(523): yii\base\Controller->runAction('delete', Array)
#4 C:\xampp\htdocs\my_first_project\vendor\yiisoft\yii2\web\Application.php(102): yii\base\Module->runAction('post/delete', Array)
#5 C:\xampp\htdocs\my_first_project\vendor\yiisoft\yii2\base\Application.php(380): yii\web\Application->handleRequest(Object(yii\web\Request))
#6 C:\xampp\htdocs\my_first_project\backend\web\index.php(17): yii\base\Application->run()
#7 {main}
2017-04-10 16:07:41 [::1][3][1r837vh2c71d20kikjqio9tc02][info][application] $_GET = [
    'r' => 'post/delete'
    'id' => '2'
]

$_POST = [
    '_csrf-backend' => 'dFJZZXpzRXAbFCsPPjZzBj1iLzYyJ3cZRQVtJiMhCl0mMTIEPxkuQg=='
]

$_COOKIE = [
    '_csrf-backend' => '106541c7716ce6243ffe7fcfaf136b2a6a12ae438d98e6f746d58b64bcb13ed8a:2:{i:0;s:13:\"_csrf-backend\";i:1;s:32:\"oFrjDE6vI0vSHT2i1W4CYRO-RckaEjk2\";}'
    '_csrf-frontend' => 'c02a00c759b3da9e0c4471ffb359e93f3c781a709c70f504ffcee85e0e08c80aa:2:{i:0;s:14:\"_csrf-frontend\";i:1;s:32:\"H_MBy0eyRt9CA7QrM1DtVa88L7n2FYMu\";}'
    'advanced-frontend' => '1n99q3d8hsgskj1p0rso80hhkt'
    'advanced-backend' => '1r837vh2c71d20kikjqio9tc02'
    '_identity-backend' => 'd1d69c70ce7f469823cb67981d1919b79c6763a2cefb2bcaed6660e48799a7a0a:2:{i:0;s:17:\"_identity-backend\";i:1;s:46:\"[3,\"PPkftzXE1TXzl3iOCMvFaDdMkCfm40RF\",2592000]\";}'
]

$_SESSION = [
    '__flash' => []
    '__returnUrl' => '/my_first_project/backend/web/index.php'
    '__id' => 3
]

$_SERVER = [
    'MIBDIRS' => 'C:/xampp/php/extras/mibs'
    'MYSQL_HOME' => '\\xampp\\mysql\\bin'
    'OPENSSL_CONF' => 'C:/xampp/apache/bin/openssl.cnf'
    'PHP_PEAR_SYSCONF_DIR' => '\\xampp\\php'
    'PHPRC' => '\\xampp\\php'
    'TMP' => '\\xampp\\tmp'
    'HTTP_HOST' => 'localhost'
    'HTTP_CONNECTION' => 'keep-alive'
    'CONTENT_LENGTH' => '74'
    'HTTP_CACHE_CONTROL' => 'max-age=0'
    'HTTP_ORIGIN' => 'http://localhost'
    'HTTP_UPGRADE_INSECURE_REQUESTS' => '1'
    'HTTP_USER_AGENT' => 'Mozilla/5.0 (Windows NT 10.0; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/57.0.2987.133 Safari/537.36'
    'CONTENT_TYPE' => 'application/x-www-form-urlencoded'
    'HTTP_ACCEPT' => 'text/html,application/xhtml+xml,application/xml;q=0.9,image/webp,*/*;q=0.8'
    'HTTP_REFERER' => 'http://localhost/my_first_project/backend/web/index.php?r=post%2Findex'
    'HTTP_ACCEPT_ENCODING' => 'gzip, deflate, br'
    'HTTP_ACCEPT_LANGUAGE' => 'sk-SK,sk;q=0.8,cs;q=0.6,en-US;q=0.4,en;q=0.2'
    'HTTP_COOKIE' => '_csrf-backend=106541c7716ce6243ffe7fcfaf136b2a6a12ae438d98e6f746d58b64bcb13ed8a%3A2%3A%7Bi%3A0%3Bs%3A13%3A%22_csrf-backend%22%3Bi%3A1%3Bs%3A32%3A%22oFrjDE6vI0vSHT2i1W4CYRO-RckaEjk2%22%3B%7D; _csrf-frontend=c02a00c759b3da9e0c4471ffb359e93f3c781a709c70f504ffcee85e0e08c80aa%3A2%3A%7Bi%3A0%3Bs%3A14%3A%22_csrf-frontend%22%3Bi%3A1%3Bs%3A32%3A%22H_MBy0eyRt9CA7QrM1DtVa88L7n2FYMu%22%3B%7D; advanced-frontend=1n99q3d8hsgskj1p0rso80hhkt; advanced-backend=1r837vh2c71d20kikjqio9tc02; _identity-backend=d1d69c70ce7f469823cb67981d1919b79c6763a2cefb2bcaed6660e48799a7a0a%3A2%3A%7Bi%3A0%3Bs%3A17%3A%22_identity-backend%22%3Bi%3A1%3Bs%3A46%3A%22%5B3%2C%22PPkftzXE1TXzl3iOCMvFaDdMkCfm40RF%22%2C2592000%5D%22%3B%7D'
    'PATH' => 'C:\\WINDOWS\\system32;C:\\WINDOWS;C:\\WINDOWS\\System32\\Wbem;C:\\WINDOWS\\System32\\WindowsPowerShell\\v1.0\\;C:\\xampp\\php;C:\\ProgramData\\ComposerSetup\\bin;C:\\Program Files\\Git\\cmd;C:\\Users\\Win10\\AppData\\Local\\Microsoft\\WindowsApps;C:\\Users\\Win10\\AppData\\Roaming\\Composer\\vendor\\bin'
    'SystemRoot' => 'C:\\WINDOWS'
    'COMSPEC' => 'C:\\WINDOWS\\system32\\cmd.exe'
    'PATHEXT' => '.COM;.EXE;.BAT;.CMD;.VBS;.VBE;.JS;.JSE;.WSF;.WSH;.MSC'
    'WINDIR' => 'C:\\WINDOWS'
    'SERVER_SIGNATURE' => '<address>Apache/2.4.25 (Win32) OpenSSL/1.0.2j PHP/7.1.1 Server at localhost Port 80</address>
'
    'SERVER_SOFTWARE' => 'Apache/2.4.25 (Win32) OpenSSL/1.0.2j PHP/7.1.1'
    'SERVER_NAME' => 'localhost'
    'SERVER_ADDR' => '::1'
    'SERVER_PORT' => '80'
    'REMOTE_ADDR' => '::1'
    'DOCUMENT_ROOT' => 'C:/xampp/htdocs'
    'REQUEST_SCHEME' => 'http'
    'CONTEXT_PREFIX' => ''
    'CONTEXT_DOCUMENT_ROOT' => 'C:/xampp/htdocs'
    'SERVER_ADMIN' => 'postmaster@localhost'
    'SCRIPT_FILENAME' => 'C:/xampp/htdocs/my_first_project/backend/web/index.php'
    'REMOTE_PORT' => '53861'
    'GATEWAY_INTERFACE' => 'CGI/1.1'
    'SERVER_PROTOCOL' => 'HTTP/1.1'
    'REQUEST_METHOD' => 'POST'
    'QUERY_STRING' => 'r=post%2Fdelete&id=2'
    'REQUEST_URI' => '/my_first_project/backend/web/index.php?r=post%2Fdelete&id=2'
    'SCRIPT_NAME' => '/my_first_project/backend/web/index.php'
    'PHP_SELF' => '/my_first_project/backend/web/index.php'
    'REQUEST_TIME_FLOAT' => 1491833261.802
    'REQUEST_TIME' => 1491833261
]
2017-04-13 07:55:16 [::1][3][4e8jei4tgpgeqib4jauvm27npv][error][yii\web\HttpException:403] yii\web\ForbiddenHttpException in C:\xampp\htdocs\my_first_project\backend\controllers\PostController.php:122
Stack trace:
#0 [internal function]: backend\controllers\PostController->actionDelete('1')
#1 C:\xampp\htdocs\my_first_project\vendor\yiisoft\yii2\base\InlineAction.php(57): call_user_func_array(Array, Array)
#2 C:\xampp\htdocs\my_first_project\vendor\yiisoft\yii2\base\Controller.php(156): yii\base\InlineAction->runWithParams(Array)
#3 C:\xampp\htdocs\my_first_project\vendor\yiisoft\yii2\base\Module.php(523): yii\base\Controller->runAction('delete', Array)
#4 C:\xampp\htdocs\my_first_project\vendor\yiisoft\yii2\web\Application.php(102): yii\base\Module->runAction('post/delete', Array)
#5 C:\xampp\htdocs\my_first_project\vendor\yiisoft\yii2\base\Application.php(380): yii\web\Application->handleRequest(Object(yii\web\Request))
#6 C:\xampp\htdocs\my_first_project\backend\web\index.php(17): yii\base\Application->run()
#7 {main}
2017-04-13 07:55:16 [::1][3][4e8jei4tgpgeqib4jauvm27npv][info][application] $_GET = [
    'r' => 'post/delete'
    'id' => '1'
]

$_POST = [
    '_csrf-backend' => 'Skk3TkRZbEMvG3J2LmwjbicEGg92FQoVJ31aPzYIWDE6e0QULDRBCw=='
]

$_COOKIE = [
    'advanced-frontend' => 'qn1jja0pc6dukeaus4pmk1pjgv'
    '_csrf-frontend' => '96b44b0c3b761bfd0b8b127c71cde3c81558a33bbbf5ccc162c667fb730dd1bba:2:{i:0;s:14:\"_csrf-frontend\";i:1;s:32:\"rKKxaO1xv9AWY9knVXpGEUDa6afhJTUZ\";}'
    'advanced-backend' => '4e8jei4tgpgeqib4jauvm27npv'
    '_csrf-backend' => '8a2726ea01abdef9236ad3ad58470fee04ce30e498bcab7d86a3d507552e80eaa:2:{i:0;s:13:\"_csrf-backend\";i:1;s:32:\"eRE8j5O-mM-A2LfVm4mqrQ4rp2sZhm-H\";}'
    '_identity-backend' => 'd1d69c70ce7f469823cb67981d1919b79c6763a2cefb2bcaed6660e48799a7a0a:2:{i:0;s:17:\"_identity-backend\";i:1;s:46:\"[3,\"PPkftzXE1TXzl3iOCMvFaDdMkCfm40RF\",2592000]\";}'
]

$_SESSION = [
    '__flash' => []
    '__id' => 3
]

$_SERVER = [
    'MIBDIRS' => 'C:/xampp/php/extras/mibs'
    'MYSQL_HOME' => '\\xampp\\mysql\\bin'
    'OPENSSL_CONF' => 'C:/xampp/apache/bin/openssl.cnf'
    'PHP_PEAR_SYSCONF_DIR' => '\\xampp\\php'
    'PHPRC' => '\\xampp\\php'
    'TMP' => '\\xampp\\tmp'
    'HTTP_HOST' => 'localhost'
    'HTTP_CONNECTION' => 'keep-alive'
    'CONTENT_LENGTH' => '74'
    'HTTP_CACHE_CONTROL' => 'max-age=0'
    'HTTP_ORIGIN' => 'http://localhost'
    'HTTP_UPGRADE_INSECURE_REQUESTS' => '1'
    'HTTP_USER_AGENT' => 'Mozilla/5.0 (Windows NT 10.0; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/57.0.2987.133 Safari/537.36'
    'CONTENT_TYPE' => 'application/x-www-form-urlencoded'
    'HTTP_ACCEPT' => 'text/html,application/xhtml+xml,application/xml;q=0.9,image/webp,*/*;q=0.8'
    'HTTP_REFERER' => 'http://localhost/my_first_project/backend/web/index.php?r=post%2Findex'
    'HTTP_ACCEPT_ENCODING' => 'gzip, deflate, br'
    'HTTP_ACCEPT_LANGUAGE' => 'sk-SK,sk;q=0.8,cs;q=0.6,en-US;q=0.4,en;q=0.2'
    'HTTP_COOKIE' => 'advanced-frontend=qn1jja0pc6dukeaus4pmk1pjgv; _csrf-frontend=96b44b0c3b761bfd0b8b127c71cde3c81558a33bbbf5ccc162c667fb730dd1bba%3A2%3A%7Bi%3A0%3Bs%3A14%3A%22_csrf-frontend%22%3Bi%3A1%3Bs%3A32%3A%22rKKxaO1xv9AWY9knVXpGEUDa6afhJTUZ%22%3B%7D; advanced-backend=4e8jei4tgpgeqib4jauvm27npv; _csrf-backend=8a2726ea01abdef9236ad3ad58470fee04ce30e498bcab7d86a3d507552e80eaa%3A2%3A%7Bi%3A0%3Bs%3A13%3A%22_csrf-backend%22%3Bi%3A1%3Bs%3A32%3A%22eRE8j5O-mM-A2LfVm4mqrQ4rp2sZhm-H%22%3B%7D; _identity-backend=d1d69c70ce7f469823cb67981d1919b79c6763a2cefb2bcaed6660e48799a7a0a%3A2%3A%7Bi%3A0%3Bs%3A17%3A%22_identity-backend%22%3Bi%3A1%3Bs%3A46%3A%22%5B3%2C%22PPkftzXE1TXzl3iOCMvFaDdMkCfm40RF%22%2C2592000%5D%22%3B%7D'
    'PATH' => 'C:\\WINDOWS\\system32;C:\\WINDOWS;C:\\WINDOWS\\System32\\Wbem;C:\\WINDOWS\\System32\\WindowsPowerShell\\v1.0\\;C:\\xampp\\php;C:\\ProgramData\\ComposerSetup\\bin;C:\\Program Files\\Git\\cmd;C:\\Users\\Win10\\AppData\\Local\\Microsoft\\WindowsApps;C:\\Users\\Win10\\AppData\\Roaming\\Composer\\vendor\\bin'
    'SystemRoot' => 'C:\\WINDOWS'
    'COMSPEC' => 'C:\\WINDOWS\\system32\\cmd.exe'
    'PATHEXT' => '.COM;.EXE;.BAT;.CMD;.VBS;.VBE;.JS;.JSE;.WSF;.WSH;.MSC'
    'WINDIR' => 'C:\\WINDOWS'
    'SERVER_SIGNATURE' => '<address>Apache/2.4.25 (Win32) OpenSSL/1.0.2j PHP/7.1.1 Server at localhost Port 80</address>
'
    'SERVER_SOFTWARE' => 'Apache/2.4.25 (Win32) OpenSSL/1.0.2j PHP/7.1.1'
    'SERVER_NAME' => 'localhost'
    'SERVER_ADDR' => '::1'
    'SERVER_PORT' => '80'
    'REMOTE_ADDR' => '::1'
    'DOCUMENT_ROOT' => 'C:/xampp/htdocs'
    'REQUEST_SCHEME' => 'http'
    'CONTEXT_PREFIX' => ''
    'CONTEXT_DOCUMENT_ROOT' => 'C:/xampp/htdocs'
    'SERVER_ADMIN' => 'postmaster@localhost'
    'SCRIPT_FILENAME' => 'C:/xampp/htdocs/my_first_project/backend/web/index.php'
    'REMOTE_PORT' => '54775'
    'GATEWAY_INTERFACE' => 'CGI/1.1'
    'SERVER_PROTOCOL' => 'HTTP/1.1'
    'REQUEST_METHOD' => 'POST'
    'QUERY_STRING' => 'r=post%2Fdelete&id=1'
    'REQUEST_URI' => '/my_first_project/backend/web/index.php?r=post%2Fdelete&id=1'
    'SCRIPT_NAME' => '/my_first_project/backend/web/index.php'
    'PHP_SELF' => '/my_first_project/backend/web/index.php'
    'REQUEST_TIME_FLOAT' => 1492062916.404
    'REQUEST_TIME' => 1492062916
]
2017-04-13 08:01:11 [::1][-][-][error][yii\base\ViewNotFoundException] yii\base\ViewNotFoundException: The view file does not exist: C:\xampp\htdocs\my_first_project\backend\views\comment\post/view.php in C:\xampp\htdocs\my_first_project\vendor\yiisoft\yii2\base\View.php:229
Stack trace:
#0 C:\xampp\htdocs\my_first_project\vendor\yiisoft\yii2\base\View.php(152): yii\base\View->renderFile('C:\\xampp\\htdocs...', Array, Object(backend\controllers\CommentController))
#1 C:\xampp\htdocs\my_first_project\vendor\yiisoft\yii2\base\Controller.php(381): yii\base\View->render('post/view', Array, Object(backend\controllers\CommentController))
#2 C:\xampp\htdocs\my_first_project\backend\controllers\CommentController.php(109): yii\base\Controller->render('post/view', Array)
#3 [internal function]: backend\controllers\CommentController->actionUpdate('22')
#4 C:\xampp\htdocs\my_first_project\vendor\yiisoft\yii2\base\InlineAction.php(57): call_user_func_array(Array, Array)
#5 C:\xampp\htdocs\my_first_project\vendor\yiisoft\yii2\base\Controller.php(156): yii\base\InlineAction->runWithParams(Array)
#6 C:\xampp\htdocs\my_first_project\vendor\yiisoft\yii2\base\Module.php(523): yii\base\Controller->runAction('update', Array)
#7 C:\xampp\htdocs\my_first_project\vendor\yiisoft\yii2\web\Application.php(102): yii\base\Module->runAction('comment/update', Array)
#8 C:\xampp\htdocs\my_first_project\vendor\yiisoft\yii2\base\Application.php(380): yii\web\Application->handleRequest(Object(yii\web\Request))
#9 C:\xampp\htdocs\my_first_project\backend\web\index.php(17): yii\base\Application->run()
#10 {main}
2017-04-13 08:01:11 [::1][-][-][info][application] $_GET = [
    'r' => 'comment/update'
    'id' => '22'
]

$_COOKIE = [
    'advanced-frontend' => 'qn1jja0pc6dukeaus4pmk1pjgv'
    '_csrf-frontend' => '96b44b0c3b761bfd0b8b127c71cde3c81558a33bbbf5ccc162c667fb730dd1bba:2:{i:0;s:14:\"_csrf-frontend\";i:1;s:32:\"rKKxaO1xv9AWY9knVXpGEUDa6afhJTUZ\";}'
    'advanced-backend' => '4e8jei4tgpgeqib4jauvm27npv'
    '_csrf-backend' => '8a2726ea01abdef9236ad3ad58470fee04ce30e498bcab7d86a3d507552e80eaa:2:{i:0;s:13:\"_csrf-backend\";i:1;s:32:\"eRE8j5O-mM-A2LfVm4mqrQ4rp2sZhm-H\";}'
    '_identity-backend' => 'd1d69c70ce7f469823cb67981d1919b79c6763a2cefb2bcaed6660e48799a7a0a:2:{i:0;s:17:\"_identity-backend\";i:1;s:46:\"[3,\"PPkftzXE1TXzl3iOCMvFaDdMkCfm40RF\",2592000]\";}'
]

$_SERVER = [
    'MIBDIRS' => 'C:/xampp/php/extras/mibs'
    'MYSQL_HOME' => '\\xampp\\mysql\\bin'
    'OPENSSL_CONF' => 'C:/xampp/apache/bin/openssl.cnf'
    'PHP_PEAR_SYSCONF_DIR' => '\\xampp\\php'
    'PHPRC' => '\\xampp\\php'
    'TMP' => '\\xampp\\tmp'
    'HTTP_HOST' => 'localhost'
    'HTTP_CONNECTION' => 'keep-alive'
    'HTTP_UPGRADE_INSECURE_REQUESTS' => '1'
    'HTTP_USER_AGENT' => 'Mozilla/5.0 (Windows NT 10.0; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/57.0.2987.133 Safari/537.36'
    'HTTP_ACCEPT' => 'text/html,application/xhtml+xml,application/xml;q=0.9,image/webp,*/*;q=0.8'
    'HTTP_REFERER' => 'http://localhost/my_first_project/backend/web/index.php?r=comment%2Fview&id=22'
    'HTTP_ACCEPT_ENCODING' => 'gzip, deflate, sdch, br'
    'HTTP_ACCEPT_LANGUAGE' => 'sk-SK,sk;q=0.8,cs;q=0.6,en-US;q=0.4,en;q=0.2'
    'HTTP_COOKIE' => 'advanced-frontend=qn1jja0pc6dukeaus4pmk1pjgv; _csrf-frontend=96b44b0c3b761bfd0b8b127c71cde3c81558a33bbbf5ccc162c667fb730dd1bba%3A2%3A%7Bi%3A0%3Bs%3A14%3A%22_csrf-frontend%22%3Bi%3A1%3Bs%3A32%3A%22rKKxaO1xv9AWY9knVXpGEUDa6afhJTUZ%22%3B%7D; advanced-backend=4e8jei4tgpgeqib4jauvm27npv; _csrf-backend=8a2726ea01abdef9236ad3ad58470fee04ce30e498bcab7d86a3d507552e80eaa%3A2%3A%7Bi%3A0%3Bs%3A13%3A%22_csrf-backend%22%3Bi%3A1%3Bs%3A32%3A%22eRE8j5O-mM-A2LfVm4mqrQ4rp2sZhm-H%22%3B%7D; _identity-backend=d1d69c70ce7f469823cb67981d1919b79c6763a2cefb2bcaed6660e48799a7a0a%3A2%3A%7Bi%3A0%3Bs%3A17%3A%22_identity-backend%22%3Bi%3A1%3Bs%3A46%3A%22%5B3%2C%22PPkftzXE1TXzl3iOCMvFaDdMkCfm40RF%22%2C2592000%5D%22%3B%7D'
    'PATH' => 'C:\\WINDOWS\\system32;C:\\WINDOWS;C:\\WINDOWS\\System32\\Wbem;C:\\WINDOWS\\System32\\WindowsPowerShell\\v1.0\\;C:\\xampp\\php;C:\\ProgramData\\ComposerSetup\\bin;C:\\Program Files\\Git\\cmd;C:\\Users\\Win10\\AppData\\Local\\Microsoft\\WindowsApps;C:\\Users\\Win10\\AppData\\Roaming\\Composer\\vendor\\bin'
    'SystemRoot' => 'C:\\WINDOWS'
    'COMSPEC' => 'C:\\WINDOWS\\system32\\cmd.exe'
    'PATHEXT' => '.COM;.EXE;.BAT;.CMD;.VBS;.VBE;.JS;.JSE;.WSF;.WSH;.MSC'
    'WINDIR' => 'C:\\WINDOWS'
    'SERVER_SIGNATURE' => '<address>Apache/2.4.25 (Win32) OpenSSL/1.0.2j PHP/7.1.1 Server at localhost Port 80</address>
'
    'SERVER_SOFTWARE' => 'Apache/2.4.25 (Win32) OpenSSL/1.0.2j PHP/7.1.1'
    'SERVER_NAME' => 'localhost'
    'SERVER_ADDR' => '::1'
    'SERVER_PORT' => '80'
    'REMOTE_ADDR' => '::1'
    'DOCUMENT_ROOT' => 'C:/xampp/htdocs'
    'REQUEST_SCHEME' => 'http'
    'CONTEXT_PREFIX' => ''
    'CONTEXT_DOCUMENT_ROOT' => 'C:/xampp/htdocs'
    'SERVER_ADMIN' => 'postmaster@localhost'
    'SCRIPT_FILENAME' => 'C:/xampp/htdocs/my_first_project/backend/web/index.php'
    'REMOTE_PORT' => '54874'
    'GATEWAY_INTERFACE' => 'CGI/1.1'
    'SERVER_PROTOCOL' => 'HTTP/1.1'
    'REQUEST_METHOD' => 'GET'
    'QUERY_STRING' => 'r=comment%2Fupdate&id=22'
    'REQUEST_URI' => '/my_first_project/backend/web/index.php?r=comment%2Fupdate&id=22'
    'SCRIPT_NAME' => '/my_first_project/backend/web/index.php'
    'PHP_SELF' => '/my_first_project/backend/web/index.php'
    'REQUEST_TIME_FLOAT' => 1492063271.144
    'REQUEST_TIME' => 1492063271
]
2017-04-13 08:01:11 [::1][3][-][error][yii\web\Session::open] session_start(): Cannot send session cache limiter - headers already sent (output started at C:\xampp\htdocs\my_first_project\vendor\yiisoft\yii2\web\Response.php:391)
2017-04-13 08:01:11 [::1][3][-][info][application] $_GET = [
    'r' => 'comment/update'
    'id' => '22'
]

$_COOKIE = [
    'advanced-frontend' => 'qn1jja0pc6dukeaus4pmk1pjgv'
    '_csrf-frontend' => '96b44b0c3b761bfd0b8b127c71cde3c81558a33bbbf5ccc162c667fb730dd1bba:2:{i:0;s:14:\"_csrf-frontend\";i:1;s:32:\"rKKxaO1xv9AWY9knVXpGEUDa6afhJTUZ\";}'
    'advanced-backend' => '4e8jei4tgpgeqib4jauvm27npv'
    '_csrf-backend' => '8a2726ea01abdef9236ad3ad58470fee04ce30e498bcab7d86a3d507552e80eaa:2:{i:0;s:13:\"_csrf-backend\";i:1;s:32:\"eRE8j5O-mM-A2LfVm4mqrQ4rp2sZhm-H\";}'
    '_identity-backend' => 'd1d69c70ce7f469823cb67981d1919b79c6763a2cefb2bcaed6660e48799a7a0a:2:{i:0;s:17:\"_identity-backend\";i:1;s:46:\"[3,\"PPkftzXE1TXzl3iOCMvFaDdMkCfm40RF\",2592000]\";}'
]

$_SESSION = [
    '__flash' => []
    '__id' => 3
]

$_SERVER = [
    'MIBDIRS' => 'C:/xampp/php/extras/mibs'
    'MYSQL_HOME' => '\\xampp\\mysql\\bin'
    'OPENSSL_CONF' => 'C:/xampp/apache/bin/openssl.cnf'
    'PHP_PEAR_SYSCONF_DIR' => '\\xampp\\php'
    'PHPRC' => '\\xampp\\php'
    'TMP' => '\\xampp\\tmp'
    'HTTP_HOST' => 'localhost'
    'HTTP_CONNECTION' => 'keep-alive'
    'HTTP_UPGRADE_INSECURE_REQUESTS' => '1'
    'HTTP_USER_AGENT' => 'Mozilla/5.0 (Windows NT 10.0; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/57.0.2987.133 Safari/537.36'
    'HTTP_ACCEPT' => 'text/html,application/xhtml+xml,application/xml;q=0.9,image/webp,*/*;q=0.8'
    'HTTP_REFERER' => 'http://localhost/my_first_project/backend/web/index.php?r=comment%2Fview&id=22'
    'HTTP_ACCEPT_ENCODING' => 'gzip, deflate, sdch, br'
    'HTTP_ACCEPT_LANGUAGE' => 'sk-SK,sk;q=0.8,cs;q=0.6,en-US;q=0.4,en;q=0.2'
    'HTTP_COOKIE' => 'advanced-frontend=qn1jja0pc6dukeaus4pmk1pjgv; _csrf-frontend=96b44b0c3b761bfd0b8b127c71cde3c81558a33bbbf5ccc162c667fb730dd1bba%3A2%3A%7Bi%3A0%3Bs%3A14%3A%22_csrf-frontend%22%3Bi%3A1%3Bs%3A32%3A%22rKKxaO1xv9AWY9knVXpGEUDa6afhJTUZ%22%3B%7D; advanced-backend=4e8jei4tgpgeqib4jauvm27npv; _csrf-backend=8a2726ea01abdef9236ad3ad58470fee04ce30e498bcab7d86a3d507552e80eaa%3A2%3A%7Bi%3A0%3Bs%3A13%3A%22_csrf-backend%22%3Bi%3A1%3Bs%3A32%3A%22eRE8j5O-mM-A2LfVm4mqrQ4rp2sZhm-H%22%3B%7D; _identity-backend=d1d69c70ce7f469823cb67981d1919b79c6763a2cefb2bcaed6660e48799a7a0a%3A2%3A%7Bi%3A0%3Bs%3A17%3A%22_identity-backend%22%3Bi%3A1%3Bs%3A46%3A%22%5B3%2C%22PPkftzXE1TXzl3iOCMvFaDdMkCfm40RF%22%2C2592000%5D%22%3B%7D'
    'PATH' => 'C:\\WINDOWS\\system32;C:\\WINDOWS;C:\\WINDOWS\\System32\\Wbem;C:\\WINDOWS\\System32\\WindowsPowerShell\\v1.0\\;C:\\xampp\\php;C:\\ProgramData\\ComposerSetup\\bin;C:\\Program Files\\Git\\cmd;C:\\Users\\Win10\\AppData\\Local\\Microsoft\\WindowsApps;C:\\Users\\Win10\\AppData\\Roaming\\Composer\\vendor\\bin'
    'SystemRoot' => 'C:\\WINDOWS'
    'COMSPEC' => 'C:\\WINDOWS\\system32\\cmd.exe'
    'PATHEXT' => '.COM;.EXE;.BAT;.CMD;.VBS;.VBE;.JS;.JSE;.WSF;.WSH;.MSC'
    'WINDIR' => 'C:\\WINDOWS'
    'SERVER_SIGNATURE' => '<address>Apache/2.4.25 (Win32) OpenSSL/1.0.2j PHP/7.1.1 Server at localhost Port 80</address>
'
    'SERVER_SOFTWARE' => 'Apache/2.4.25 (Win32) OpenSSL/1.0.2j PHP/7.1.1'
    'SERVER_NAME' => 'localhost'
    'SERVER_ADDR' => '::1'
    'SERVER_PORT' => '80'
    'REMOTE_ADDR' => '::1'
    'DOCUMENT_ROOT' => 'C:/xampp/htdocs'
    'REQUEST_SCHEME' => 'http'
    'CONTEXT_PREFIX' => ''
    'CONTEXT_DOCUMENT_ROOT' => 'C:/xampp/htdocs'
    'SERVER_ADMIN' => 'postmaster@localhost'
    'SCRIPT_FILENAME' => 'C:/xampp/htdocs/my_first_project/backend/web/index.php'
    'REMOTE_PORT' => '54874'
    'GATEWAY_INTERFACE' => 'CGI/1.1'
    'SERVER_PROTOCOL' => 'HTTP/1.1'
    'REQUEST_METHOD' => 'GET'
    'QUERY_STRING' => 'r=comment%2Fupdate&id=22'
    'REQUEST_URI' => '/my_first_project/backend/web/index.php?r=comment%2Fupdate&id=22'
    'SCRIPT_NAME' => '/my_first_project/backend/web/index.php'
    'PHP_SELF' => '/my_first_project/backend/web/index.php'
    'REQUEST_TIME_FLOAT' => 1492063271.144
    'REQUEST_TIME' => 1492063271
]
2017-04-13 08:01:50 [::1][-][-][error][yii\base\ViewNotFoundException] yii\base\ViewNotFoundException: The view file does not exist: C:\xampp\htdocs\my_first_project\backend\views\comment\views/post/view.php in C:\xampp\htdocs\my_first_project\vendor\yiisoft\yii2\base\View.php:229
Stack trace:
#0 C:\xampp\htdocs\my_first_project\vendor\yiisoft\yii2\base\View.php(152): yii\base\View->renderFile('C:\\xampp\\htdocs...', Array, Object(backend\controllers\CommentController))
#1 C:\xampp\htdocs\my_first_project\vendor\yiisoft\yii2\base\Controller.php(381): yii\base\View->render('views/post/view', Array, Object(backend\controllers\CommentController))
#2 C:\xampp\htdocs\my_first_project\backend\controllers\CommentController.php(109): yii\base\Controller->render('views/post/view', Array)
#3 [internal function]: backend\controllers\CommentController->actionUpdate('22')
#4 C:\xampp\htdocs\my_first_project\vendor\yiisoft\yii2\base\InlineAction.php(57): call_user_func_array(Array, Array)
#5 C:\xampp\htdocs\my_first_project\vendor\yiisoft\yii2\base\Controller.php(156): yii\base\InlineAction->runWithParams(Array)
#6 C:\xampp\htdocs\my_first_project\vendor\yiisoft\yii2\base\Module.php(523): yii\base\Controller->runAction('update', Array)
#7 C:\xampp\htdocs\my_first_project\vendor\yiisoft\yii2\web\Application.php(102): yii\base\Module->runAction('comment/update', Array)
#8 C:\xampp\htdocs\my_first_project\vendor\yiisoft\yii2\base\Application.php(380): yii\web\Application->handleRequest(Object(yii\web\Request))
#9 C:\xampp\htdocs\my_first_project\backend\web\index.php(17): yii\base\Application->run()
#10 {main}
2017-04-13 08:01:50 [::1][-][-][info][application] $_GET = [
    'r' => 'comment/update'
    'id' => '22'
]

$_COOKIE = [
    'advanced-frontend' => 'qn1jja0pc6dukeaus4pmk1pjgv'
    '_csrf-frontend' => '96b44b0c3b761bfd0b8b127c71cde3c81558a33bbbf5ccc162c667fb730dd1bba:2:{i:0;s:14:\"_csrf-frontend\";i:1;s:32:\"rKKxaO1xv9AWY9knVXpGEUDa6afhJTUZ\";}'
    'advanced-backend' => '4e8jei4tgpgeqib4jauvm27npv'
    '_csrf-backend' => '8a2726ea01abdef9236ad3ad58470fee04ce30e498bcab7d86a3d507552e80eaa:2:{i:0;s:13:\"_csrf-backend\";i:1;s:32:\"eRE8j5O-mM-A2LfVm4mqrQ4rp2sZhm-H\";}'
    '_identity-backend' => 'd1d69c70ce7f469823cb67981d1919b79c6763a2cefb2bcaed6660e48799a7a0a:2:{i:0;s:17:\"_identity-backend\";i:1;s:46:\"[3,\"PPkftzXE1TXzl3iOCMvFaDdMkCfm40RF\",2592000]\";}'
]

$_SERVER = [
    'MIBDIRS' => 'C:/xampp/php/extras/mibs'
    'MYSQL_HOME' => '\\xampp\\mysql\\bin'
    'OPENSSL_CONF' => 'C:/xampp/apache/bin/openssl.cnf'
    'PHP_PEAR_SYSCONF_DIR' => '\\xampp\\php'
    'PHPRC' => '\\xampp\\php'
    'TMP' => '\\xampp\\tmp'
    'HTTP_HOST' => 'localhost'
    'HTTP_CONNECTION' => 'keep-alive'
    'HTTP_CACHE_CONTROL' => 'max-age=0'
    'HTTP_UPGRADE_INSECURE_REQUESTS' => '1'
    'HTTP_USER_AGENT' => 'Mozilla/5.0 (Windows NT 10.0; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/57.0.2987.133 Safari/537.36'
    'HTTP_ACCEPT' => 'text/html,application/xhtml+xml,application/xml;q=0.9,image/webp,*/*;q=0.8'
    'HTTP_REFERER' => 'http://localhost/my_first_project/backend/web/index.php?r=comment%2Fview&id=22'
    'HTTP_ACCEPT_ENCODING' => 'gzip, deflate, sdch, br'
    'HTTP_ACCEPT_LANGUAGE' => 'sk-SK,sk;q=0.8,cs;q=0.6,en-US;q=0.4,en;q=0.2'
    'HTTP_COOKIE' => 'advanced-frontend=qn1jja0pc6dukeaus4pmk1pjgv; _csrf-frontend=96b44b0c3b761bfd0b8b127c71cde3c81558a33bbbf5ccc162c667fb730dd1bba%3A2%3A%7Bi%3A0%3Bs%3A14%3A%22_csrf-frontend%22%3Bi%3A1%3Bs%3A32%3A%22rKKxaO1xv9AWY9knVXpGEUDa6afhJTUZ%22%3B%7D; advanced-backend=4e8jei4tgpgeqib4jauvm27npv; _csrf-backend=8a2726ea01abdef9236ad3ad58470fee04ce30e498bcab7d86a3d507552e80eaa%3A2%3A%7Bi%3A0%3Bs%3A13%3A%22_csrf-backend%22%3Bi%3A1%3Bs%3A32%3A%22eRE8j5O-mM-A2LfVm4mqrQ4rp2sZhm-H%22%3B%7D; _identity-backend=d1d69c70ce7f469823cb67981d1919b79c6763a2cefb2bcaed6660e48799a7a0a%3A2%3A%7Bi%3A0%3Bs%3A17%3A%22_identity-backend%22%3Bi%3A1%3Bs%3A46%3A%22%5B3%2C%22PPkftzXE1TXzl3iOCMvFaDdMkCfm40RF%22%2C2592000%5D%22%3B%7D'
    'PATH' => 'C:\\WINDOWS\\system32;C:\\WINDOWS;C:\\WINDOWS\\System32\\Wbem;C:\\WINDOWS\\System32\\WindowsPowerShell\\v1.0\\;C:\\xampp\\php;C:\\ProgramData\\ComposerSetup\\bin;C:\\Program Files\\Git\\cmd;C:\\Users\\Win10\\AppData\\Local\\Microsoft\\WindowsApps;C:\\Users\\Win10\\AppData\\Roaming\\Composer\\vendor\\bin'
    'SystemRoot' => 'C:\\WINDOWS'
    'COMSPEC' => 'C:\\WINDOWS\\system32\\cmd.exe'
    'PATHEXT' => '.COM;.EXE;.BAT;.CMD;.VBS;.VBE;.JS;.JSE;.WSF;.WSH;.MSC'
    'WINDIR' => 'C:\\WINDOWS'
    'SERVER_SIGNATURE' => '<address>Apache/2.4.25 (Win32) OpenSSL/1.0.2j PHP/7.1.1 Server at localhost Port 80</address>
'
    'SERVER_SOFTWARE' => 'Apache/2.4.25 (Win32) OpenSSL/1.0.2j PHP/7.1.1'
    'SERVER_NAME' => 'localhost'
    'SERVER_ADDR' => '::1'
    'SERVER_PORT' => '80'
    'REMOTE_ADDR' => '::1'
    'DOCUMENT_ROOT' => 'C:/xampp/htdocs'
    'REQUEST_SCHEME' => 'http'
    'CONTEXT_PREFIX' => ''
    'CONTEXT_DOCUMENT_ROOT' => 'C:/xampp/htdocs'
    'SERVER_ADMIN' => 'postmaster@localhost'
    'SCRIPT_FILENAME' => 'C:/xampp/htdocs/my_first_project/backend/web/index.php'
    'REMOTE_PORT' => '54884'
    'GATEWAY_INTERFACE' => 'CGI/1.1'
    'SERVER_PROTOCOL' => 'HTTP/1.1'
    'REQUEST_METHOD' => 'GET'
    'QUERY_STRING' => 'r=comment%2Fupdate&id=22'
    'REQUEST_URI' => '/my_first_project/backend/web/index.php?r=comment%2Fupdate&id=22'
    'SCRIPT_NAME' => '/my_first_project/backend/web/index.php'
    'PHP_SELF' => '/my_first_project/backend/web/index.php'
    'REQUEST_TIME_FLOAT' => 1492063310.608
    'REQUEST_TIME' => 1492063310
]
2017-04-13 08:01:50 [::1][3][-][error][yii\web\Session::open] session_start(): Cannot send session cache limiter - headers already sent (output started at C:\xampp\htdocs\my_first_project\vendor\yiisoft\yii2\web\Response.php:391)
2017-04-13 08:01:50 [::1][3][-][info][application] $_GET = [
    'r' => 'comment/update'
    'id' => '22'
]

$_COOKIE = [
    'advanced-frontend' => 'qn1jja0pc6dukeaus4pmk1pjgv'
    '_csrf-frontend' => '96b44b0c3b761bfd0b8b127c71cde3c81558a33bbbf5ccc162c667fb730dd1bba:2:{i:0;s:14:\"_csrf-frontend\";i:1;s:32:\"rKKxaO1xv9AWY9knVXpGEUDa6afhJTUZ\";}'
    'advanced-backend' => '4e8jei4tgpgeqib4jauvm27npv'
    '_csrf-backend' => '8a2726ea01abdef9236ad3ad58470fee04ce30e498bcab7d86a3d507552e80eaa:2:{i:0;s:13:\"_csrf-backend\";i:1;s:32:\"eRE8j5O-mM-A2LfVm4mqrQ4rp2sZhm-H\";}'
    '_identity-backend' => 'd1d69c70ce7f469823cb67981d1919b79c6763a2cefb2bcaed6660e48799a7a0a:2:{i:0;s:17:\"_identity-backend\";i:1;s:46:\"[3,\"PPkftzXE1TXzl3iOCMvFaDdMkCfm40RF\",2592000]\";}'
]

$_SESSION = [
    '__flash' => []
    '__id' => 3
]

$_SERVER = [
    'MIBDIRS' => 'C:/xampp/php/extras/mibs'
    'MYSQL_HOME' => '\\xampp\\mysql\\bin'
    'OPENSSL_CONF' => 'C:/xampp/apache/bin/openssl.cnf'
    'PHP_PEAR_SYSCONF_DIR' => '\\xampp\\php'
    'PHPRC' => '\\xampp\\php'
    'TMP' => '\\xampp\\tmp'
    'HTTP_HOST' => 'localhost'
    'HTTP_CONNECTION' => 'keep-alive'
    'HTTP_CACHE_CONTROL' => 'max-age=0'
    'HTTP_UPGRADE_INSECURE_REQUESTS' => '1'
    'HTTP_USER_AGENT' => 'Mozilla/5.0 (Windows NT 10.0; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/57.0.2987.133 Safari/537.36'
    'HTTP_ACCEPT' => 'text/html,application/xhtml+xml,application/xml;q=0.9,image/webp,*/*;q=0.8'
    'HTTP_REFERER' => 'http://localhost/my_first_project/backend/web/index.php?r=comment%2Fview&id=22'
    'HTTP_ACCEPT_ENCODING' => 'gzip, deflate, sdch, br'
    'HTTP_ACCEPT_LANGUAGE' => 'sk-SK,sk;q=0.8,cs;q=0.6,en-US;q=0.4,en;q=0.2'
    'HTTP_COOKIE' => 'advanced-frontend=qn1jja0pc6dukeaus4pmk1pjgv; _csrf-frontend=96b44b0c3b761bfd0b8b127c71cde3c81558a33bbbf5ccc162c667fb730dd1bba%3A2%3A%7Bi%3A0%3Bs%3A14%3A%22_csrf-frontend%22%3Bi%3A1%3Bs%3A32%3A%22rKKxaO1xv9AWY9knVXpGEUDa6afhJTUZ%22%3B%7D; advanced-backend=4e8jei4tgpgeqib4jauvm27npv; _csrf-backend=8a2726ea01abdef9236ad3ad58470fee04ce30e498bcab7d86a3d507552e80eaa%3A2%3A%7Bi%3A0%3Bs%3A13%3A%22_csrf-backend%22%3Bi%3A1%3Bs%3A32%3A%22eRE8j5O-mM-A2LfVm4mqrQ4rp2sZhm-H%22%3B%7D; _identity-backend=d1d69c70ce7f469823cb67981d1919b79c6763a2cefb2bcaed6660e48799a7a0a%3A2%3A%7Bi%3A0%3Bs%3A17%3A%22_identity-backend%22%3Bi%3A1%3Bs%3A46%3A%22%5B3%2C%22PPkftzXE1TXzl3iOCMvFaDdMkCfm40RF%22%2C2592000%5D%22%3B%7D'
    'PATH' => 'C:\\WINDOWS\\system32;C:\\WINDOWS;C:\\WINDOWS\\System32\\Wbem;C:\\WINDOWS\\System32\\WindowsPowerShell\\v1.0\\;C:\\xampp\\php;C:\\ProgramData\\ComposerSetup\\bin;C:\\Program Files\\Git\\cmd;C:\\Users\\Win10\\AppData\\Local\\Microsoft\\WindowsApps;C:\\Users\\Win10\\AppData\\Roaming\\Composer\\vendor\\bin'
    'SystemRoot' => 'C:\\WINDOWS'
    'COMSPEC' => 'C:\\WINDOWS\\system32\\cmd.exe'
    'PATHEXT' => '.COM;.EXE;.BAT;.CMD;.VBS;.VBE;.JS;.JSE;.WSF;.WSH;.MSC'
    'WINDIR' => 'C:\\WINDOWS'
    'SERVER_SIGNATURE' => '<address>Apache/2.4.25 (Win32) OpenSSL/1.0.2j PHP/7.1.1 Server at localhost Port 80</address>
'
    'SERVER_SOFTWARE' => 'Apache/2.4.25 (Win32) OpenSSL/1.0.2j PHP/7.1.1'
    'SERVER_NAME' => 'localhost'
    'SERVER_ADDR' => '::1'
    'SERVER_PORT' => '80'
    'REMOTE_ADDR' => '::1'
    'DOCUMENT_ROOT' => 'C:/xampp/htdocs'
    'REQUEST_SCHEME' => 'http'
    'CONTEXT_PREFIX' => ''
    'CONTEXT_DOCUMENT_ROOT' => 'C:/xampp/htdocs'
    'SERVER_ADMIN' => 'postmaster@localhost'
    'SCRIPT_FILENAME' => 'C:/xampp/htdocs/my_first_project/backend/web/index.php'
    'REMOTE_PORT' => '54884'
    'GATEWAY_INTERFACE' => 'CGI/1.1'
    'SERVER_PROTOCOL' => 'HTTP/1.1'
    'REQUEST_METHOD' => 'GET'
    'QUERY_STRING' => 'r=comment%2Fupdate&id=22'
    'REQUEST_URI' => '/my_first_project/backend/web/index.php?r=comment%2Fupdate&id=22'
    'SCRIPT_NAME' => '/my_first_project/backend/web/index.php'
    'PHP_SELF' => '/my_first_project/backend/web/index.php'
    'REQUEST_TIME_FLOAT' => 1492063310.608
    'REQUEST_TIME' => 1492063310
]
2017-04-13 08:01:53 [::1][-][-][error][yii\base\ViewNotFoundException] yii\base\ViewNotFoundException: The view file does not exist: C:\xampp\htdocs\my_first_project\backend\views\comment\views/post/view.php in C:\xampp\htdocs\my_first_project\vendor\yiisoft\yii2\base\View.php:229
Stack trace:
#0 C:\xampp\htdocs\my_first_project\vendor\yiisoft\yii2\base\View.php(152): yii\base\View->renderFile('C:\\xampp\\htdocs...', Array, Object(backend\controllers\CommentController))
#1 C:\xampp\htdocs\my_first_project\vendor\yiisoft\yii2\base\Controller.php(381): yii\base\View->render('views/post/view', Array, Object(backend\controllers\CommentController))
#2 C:\xampp\htdocs\my_first_project\backend\controllers\CommentController.php(109): yii\base\Controller->render('views/post/view', Array)
#3 [internal function]: backend\controllers\CommentController->actionUpdate('22')
#4 C:\xampp\htdocs\my_first_project\vendor\yiisoft\yii2\base\InlineAction.php(57): call_user_func_array(Array, Array)
#5 C:\xampp\htdocs\my_first_project\vendor\yiisoft\yii2\base\Controller.php(156): yii\base\InlineAction->runWithParams(Array)
#6 C:\xampp\htdocs\my_first_project\vendor\yiisoft\yii2\base\Module.php(523): yii\base\Controller->runAction('update', Array)
#7 C:\xampp\htdocs\my_first_project\vendor\yiisoft\yii2\web\Application.php(102): yii\base\Module->runAction('comment/update', Array)
#8 C:\xampp\htdocs\my_first_project\vendor\yiisoft\yii2\base\Application.php(380): yii\web\Application->handleRequest(Object(yii\web\Request))
#9 C:\xampp\htdocs\my_first_project\backend\web\index.php(17): yii\base\Application->run()
#10 {main}
2017-04-13 08:01:53 [::1][-][-][info][application] $_GET = [
    'r' => 'comment/update'
    'id' => '22'
]

$_COOKIE = [
    'advanced-frontend' => 'qn1jja0pc6dukeaus4pmk1pjgv'
    '_csrf-frontend' => '96b44b0c3b761bfd0b8b127c71cde3c81558a33bbbf5ccc162c667fb730dd1bba:2:{i:0;s:14:\"_csrf-frontend\";i:1;s:32:\"rKKxaO1xv9AWY9knVXpGEUDa6afhJTUZ\";}'
    'advanced-backend' => '4e8jei4tgpgeqib4jauvm27npv'
    '_csrf-backend' => '8a2726ea01abdef9236ad3ad58470fee04ce30e498bcab7d86a3d507552e80eaa:2:{i:0;s:13:\"_csrf-backend\";i:1;s:32:\"eRE8j5O-mM-A2LfVm4mqrQ4rp2sZhm-H\";}'
    '_identity-backend' => 'd1d69c70ce7f469823cb67981d1919b79c6763a2cefb2bcaed6660e48799a7a0a:2:{i:0;s:17:\"_identity-backend\";i:1;s:46:\"[3,\"PPkftzXE1TXzl3iOCMvFaDdMkCfm40RF\",2592000]\";}'
]

$_SERVER = [
    'MIBDIRS' => 'C:/xampp/php/extras/mibs'
    'MYSQL_HOME' => '\\xampp\\mysql\\bin'
    'OPENSSL_CONF' => 'C:/xampp/apache/bin/openssl.cnf'
    'PHP_PEAR_SYSCONF_DIR' => '\\xampp\\php'
    'PHPRC' => '\\xampp\\php'
    'TMP' => '\\xampp\\tmp'
    'HTTP_HOST' => 'localhost'
    'HTTP_CONNECTION' => 'keep-alive'
    'HTTP_UPGRADE_INSECURE_REQUESTS' => '1'
    'HTTP_USER_AGENT' => 'Mozilla/5.0 (Windows NT 10.0; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/57.0.2987.133 Safari/537.36'
    'HTTP_ACCEPT' => 'text/html,application/xhtml+xml,application/xml;q=0.9,image/webp,*/*;q=0.8'
    'HTTP_REFERER' => 'http://localhost/my_first_project/backend/web/index.php?r=comment%2Fview&id=22'
    'HTTP_ACCEPT_ENCODING' => 'gzip, deflate, sdch, br'
    'HTTP_ACCEPT_LANGUAGE' => 'sk-SK,sk;q=0.8,cs;q=0.6,en-US;q=0.4,en;q=0.2'
    'HTTP_COOKIE' => 'advanced-frontend=qn1jja0pc6dukeaus4pmk1pjgv; _csrf-frontend=96b44b0c3b761bfd0b8b127c71cde3c81558a33bbbf5ccc162c667fb730dd1bba%3A2%3A%7Bi%3A0%3Bs%3A14%3A%22_csrf-frontend%22%3Bi%3A1%3Bs%3A32%3A%22rKKxaO1xv9AWY9knVXpGEUDa6afhJTUZ%22%3B%7D; advanced-backend=4e8jei4tgpgeqib4jauvm27npv; _csrf-backend=8a2726ea01abdef9236ad3ad58470fee04ce30e498bcab7d86a3d507552e80eaa%3A2%3A%7Bi%3A0%3Bs%3A13%3A%22_csrf-backend%22%3Bi%3A1%3Bs%3A32%3A%22eRE8j5O-mM-A2LfVm4mqrQ4rp2sZhm-H%22%3B%7D; _identity-backend=d1d69c70ce7f469823cb67981d1919b79c6763a2cefb2bcaed6660e48799a7a0a%3A2%3A%7Bi%3A0%3Bs%3A17%3A%22_identity-backend%22%3Bi%3A1%3Bs%3A46%3A%22%5B3%2C%22PPkftzXE1TXzl3iOCMvFaDdMkCfm40RF%22%2C2592000%5D%22%3B%7D'
    'PATH' => 'C:\\WINDOWS\\system32;C:\\WINDOWS;C:\\WINDOWS\\System32\\Wbem;C:\\WINDOWS\\System32\\WindowsPowerShell\\v1.0\\;C:\\xampp\\php;C:\\ProgramData\\ComposerSetup\\bin;C:\\Program Files\\Git\\cmd;C:\\Users\\Win10\\AppData\\Local\\Microsoft\\WindowsApps;C:\\Users\\Win10\\AppData\\Roaming\\Composer\\vendor\\bin'
    'SystemRoot' => 'C:\\WINDOWS'
    'COMSPEC' => 'C:\\WINDOWS\\system32\\cmd.exe'
    'PATHEXT' => '.COM;.EXE;.BAT;.CMD;.VBS;.VBE;.JS;.JSE;.WSF;.WSH;.MSC'
    'WINDIR' => 'C:\\WINDOWS'
    'SERVER_SIGNATURE' => '<address>Apache/2.4.25 (Win32) OpenSSL/1.0.2j PHP/7.1.1 Server at localhost Port 80</address>
'
    'SERVER_SOFTWARE' => 'Apache/2.4.25 (Win32) OpenSSL/1.0.2j PHP/7.1.1'
    'SERVER_NAME' => 'localhost'
    'SERVER_ADDR' => '::1'
    'SERVER_PORT' => '80'
    'REMOTE_ADDR' => '::1'
    'DOCUMENT_ROOT' => 'C:/xampp/htdocs'
    'REQUEST_SCHEME' => 'http'
    'CONTEXT_PREFIX' => ''
    'CONTEXT_DOCUMENT_ROOT' => 'C:/xampp/htdocs'
    'SERVER_ADMIN' => 'postmaster@localhost'
    'SCRIPT_FILENAME' => 'C:/xampp/htdocs/my_first_project/backend/web/index.php'
    'REMOTE_PORT' => '54885'
    'GATEWAY_INTERFACE' => 'CGI/1.1'
    'SERVER_PROTOCOL' => 'HTTP/1.1'
    'REQUEST_METHOD' => 'GET'
    'QUERY_STRING' => 'r=comment%2Fupdate&id=22'
    'REQUEST_URI' => '/my_first_project/backend/web/index.php?r=comment%2Fupdate&id=22'
    'SCRIPT_NAME' => '/my_first_project/backend/web/index.php'
    'PHP_SELF' => '/my_first_project/backend/web/index.php'
    'REQUEST_TIME_FLOAT' => 1492063313.32
    'REQUEST_TIME' => 1492063313
]
2017-04-13 08:01:53 [::1][3][-][error][yii\web\Session::open] session_start(): Cannot send session cache limiter - headers already sent (output started at C:\xampp\htdocs\my_first_project\vendor\yiisoft\yii2\web\Response.php:391)
2017-04-13 08:01:53 [::1][3][-][info][application] $_GET = [
    'r' => 'comment/update'
    'id' => '22'
]

$_COOKIE = [
    'advanced-frontend' => 'qn1jja0pc6dukeaus4pmk1pjgv'
    '_csrf-frontend' => '96b44b0c3b761bfd0b8b127c71cde3c81558a33bbbf5ccc162c667fb730dd1bba:2:{i:0;s:14:\"_csrf-frontend\";i:1;s:32:\"rKKxaO1xv9AWY9knVXpGEUDa6afhJTUZ\";}'
    'advanced-backend' => '4e8jei4tgpgeqib4jauvm27npv'
    '_csrf-backend' => '8a2726ea01abdef9236ad3ad58470fee04ce30e498bcab7d86a3d507552e80eaa:2:{i:0;s:13:\"_csrf-backend\";i:1;s:32:\"eRE8j5O-mM-A2LfVm4mqrQ4rp2sZhm-H\";}'
    '_identity-backend' => 'd1d69c70ce7f469823cb67981d1919b79c6763a2cefb2bcaed6660e48799a7a0a:2:{i:0;s:17:\"_identity-backend\";i:1;s:46:\"[3,\"PPkftzXE1TXzl3iOCMvFaDdMkCfm40RF\",2592000]\";}'
]

$_SESSION = [
    '__flash' => []
    '__id' => 3
]

$_SERVER = [
    'MIBDIRS' => 'C:/xampp/php/extras/mibs'
    'MYSQL_HOME' => '\\xampp\\mysql\\bin'
    'OPENSSL_CONF' => 'C:/xampp/apache/bin/openssl.cnf'
    'PHP_PEAR_SYSCONF_DIR' => '\\xampp\\php'
    'PHPRC' => '\\xampp\\php'
    'TMP' => '\\xampp\\tmp'
    'HTTP_HOST' => 'localhost'
    'HTTP_CONNECTION' => 'keep-alive'
    'HTTP_UPGRADE_INSECURE_REQUESTS' => '1'
    'HTTP_USER_AGENT' => 'Mozilla/5.0 (Windows NT 10.0; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/57.0.2987.133 Safari/537.36'
    'HTTP_ACCEPT' => 'text/html,application/xhtml+xml,application/xml;q=0.9,image/webp,*/*;q=0.8'
    'HTTP_REFERER' => 'http://localhost/my_first_project/backend/web/index.php?r=comment%2Fview&id=22'
    'HTTP_ACCEPT_ENCODING' => 'gzip, deflate, sdch, br'
    'HTTP_ACCEPT_LANGUAGE' => 'sk-SK,sk;q=0.8,cs;q=0.6,en-US;q=0.4,en;q=0.2'
    'HTTP_COOKIE' => 'advanced-frontend=qn1jja0pc6dukeaus4pmk1pjgv; _csrf-frontend=96b44b0c3b761bfd0b8b127c71cde3c81558a33bbbf5ccc162c667fb730dd1bba%3A2%3A%7Bi%3A0%3Bs%3A14%3A%22_csrf-frontend%22%3Bi%3A1%3Bs%3A32%3A%22rKKxaO1xv9AWY9knVXpGEUDa6afhJTUZ%22%3B%7D; advanced-backend=4e8jei4tgpgeqib4jauvm27npv; _csrf-backend=8a2726ea01abdef9236ad3ad58470fee04ce30e498bcab7d86a3d507552e80eaa%3A2%3A%7Bi%3A0%3Bs%3A13%3A%22_csrf-backend%22%3Bi%3A1%3Bs%3A32%3A%22eRE8j5O-mM-A2LfVm4mqrQ4rp2sZhm-H%22%3B%7D; _identity-backend=d1d69c70ce7f469823cb67981d1919b79c6763a2cefb2bcaed6660e48799a7a0a%3A2%3A%7Bi%3A0%3Bs%3A17%3A%22_identity-backend%22%3Bi%3A1%3Bs%3A46%3A%22%5B3%2C%22PPkftzXE1TXzl3iOCMvFaDdMkCfm40RF%22%2C2592000%5D%22%3B%7D'
    'PATH' => 'C:\\WINDOWS\\system32;C:\\WINDOWS;C:\\WINDOWS\\System32\\Wbem;C:\\WINDOWS\\System32\\WindowsPowerShell\\v1.0\\;C:\\xampp\\php;C:\\ProgramData\\ComposerSetup\\bin;C:\\Program Files\\Git\\cmd;C:\\Users\\Win10\\AppData\\Local\\Microsoft\\WindowsApps;C:\\Users\\Win10\\AppData\\Roaming\\Composer\\vendor\\bin'
    'SystemRoot' => 'C:\\WINDOWS'
    'COMSPEC' => 'C:\\WINDOWS\\system32\\cmd.exe'
    'PATHEXT' => '.COM;.EXE;.BAT;.CMD;.VBS;.VBE;.JS;.JSE;.WSF;.WSH;.MSC'
    'WINDIR' => 'C:\\WINDOWS'
    'SERVER_SIGNATURE' => '<address>Apache/2.4.25 (Win32) OpenSSL/1.0.2j PHP/7.1.1 Server at localhost Port 80</address>
'
    'SERVER_SOFTWARE' => 'Apache/2.4.25 (Win32) OpenSSL/1.0.2j PHP/7.1.1'
    'SERVER_NAME' => 'localhost'
    'SERVER_ADDR' => '::1'
    'SERVER_PORT' => '80'
    'REMOTE_ADDR' => '::1'
    'DOCUMENT_ROOT' => 'C:/xampp/htdocs'
    'REQUEST_SCHEME' => 'http'
    'CONTEXT_PREFIX' => ''
    'CONTEXT_DOCUMENT_ROOT' => 'C:/xampp/htdocs'
    'SERVER_ADMIN' => 'postmaster@localhost'
    'SCRIPT_FILENAME' => 'C:/xampp/htdocs/my_first_project/backend/web/index.php'
    'REMOTE_PORT' => '54885'
    'GATEWAY_INTERFACE' => 'CGI/1.1'
    'SERVER_PROTOCOL' => 'HTTP/1.1'
    'REQUEST_METHOD' => 'GET'
    'QUERY_STRING' => 'r=comment%2Fupdate&id=22'
    'REQUEST_URI' => '/my_first_project/backend/web/index.php?r=comment%2Fupdate&id=22'
    'SCRIPT_NAME' => '/my_first_project/backend/web/index.php'
    'PHP_SELF' => '/my_first_project/backend/web/index.php'
    'REQUEST_TIME_FLOAT' => 1492063313.32
    'REQUEST_TIME' => 1492063313
]
2017-04-13 08:02:15 [::1][-][-][error][yii\base\ViewNotFoundException] yii\base\ViewNotFoundException: The view file does not exist: C:\xampp\htdocs\my_first_project\backend\views\comment\views\post\view.php in C:\xampp\htdocs\my_first_project\vendor\yiisoft\yii2\base\View.php:229
Stack trace:
#0 C:\xampp\htdocs\my_first_project\vendor\yiisoft\yii2\base\View.php(152): yii\base\View->renderFile('C:\\xampp\\htdocs...', Array, Object(backend\controllers\CommentController))
#1 C:\xampp\htdocs\my_first_project\vendor\yiisoft\yii2\base\Controller.php(381): yii\base\View->render('views\\post\\view', Array, Object(backend\controllers\CommentController))
#2 C:\xampp\htdocs\my_first_project\backend\controllers\CommentController.php(109): yii\base\Controller->render('views\\post\\view', Array)
#3 [internal function]: backend\controllers\CommentController->actionUpdate('22')
#4 C:\xampp\htdocs\my_first_project\vendor\yiisoft\yii2\base\InlineAction.php(57): call_user_func_array(Array, Array)
#5 C:\xampp\htdocs\my_first_project\vendor\yiisoft\yii2\base\Controller.php(156): yii\base\InlineAction->runWithParams(Array)
#6 C:\xampp\htdocs\my_first_project\vendor\yiisoft\yii2\base\Module.php(523): yii\base\Controller->runAction('update', Array)
#7 C:\xampp\htdocs\my_first_project\vendor\yiisoft\yii2\web\Application.php(102): yii\base\Module->runAction('comment/update', Array)
#8 C:\xampp\htdocs\my_first_project\vendor\yiisoft\yii2\base\Application.php(380): yii\web\Application->handleRequest(Object(yii\web\Request))
#9 C:\xampp\htdocs\my_first_project\backend\web\index.php(17): yii\base\Application->run()
#10 {main}
2017-04-13 08:02:15 [::1][-][-][info][application] $_GET = [
    'r' => 'comment/update'
    'id' => '22'
]

$_COOKIE = [
    'advanced-frontend' => 'qn1jja0pc6dukeaus4pmk1pjgv'
    '_csrf-frontend' => '96b44b0c3b761bfd0b8b127c71cde3c81558a33bbbf5ccc162c667fb730dd1bba:2:{i:0;s:14:\"_csrf-frontend\";i:1;s:32:\"rKKxaO1xv9AWY9knVXpGEUDa6afhJTUZ\";}'
    'advanced-backend' => '4e8jei4tgpgeqib4jauvm27npv'
    '_csrf-backend' => '8a2726ea01abdef9236ad3ad58470fee04ce30e498bcab7d86a3d507552e80eaa:2:{i:0;s:13:\"_csrf-backend\";i:1;s:32:\"eRE8j5O-mM-A2LfVm4mqrQ4rp2sZhm-H\";}'
    '_identity-backend' => 'd1d69c70ce7f469823cb67981d1919b79c6763a2cefb2bcaed6660e48799a7a0a:2:{i:0;s:17:\"_identity-backend\";i:1;s:46:\"[3,\"PPkftzXE1TXzl3iOCMvFaDdMkCfm40RF\",2592000]\";}'
]

$_SERVER = [
    'MIBDIRS' => 'C:/xampp/php/extras/mibs'
    'MYSQL_HOME' => '\\xampp\\mysql\\bin'
    'OPENSSL_CONF' => 'C:/xampp/apache/bin/openssl.cnf'
    'PHP_PEAR_SYSCONF_DIR' => '\\xampp\\php'
    'PHPRC' => '\\xampp\\php'
    'TMP' => '\\xampp\\tmp'
    'HTTP_HOST' => 'localhost'
    'HTTP_CONNECTION' => 'keep-alive'
    'HTTP_CACHE_CONTROL' => 'max-age=0'
    'HTTP_UPGRADE_INSECURE_REQUESTS' => '1'
    'HTTP_USER_AGENT' => 'Mozilla/5.0 (Windows NT 10.0; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/57.0.2987.133 Safari/537.36'
    'HTTP_ACCEPT' => 'text/html,application/xhtml+xml,application/xml;q=0.9,image/webp,*/*;q=0.8'
    'HTTP_REFERER' => 'http://localhost/my_first_project/backend/web/index.php?r=comment%2Fview&id=22'
    'HTTP_ACCEPT_ENCODING' => 'gzip, deflate, sdch, br'
    'HTTP_ACCEPT_LANGUAGE' => 'sk-SK,sk;q=0.8,cs;q=0.6,en-US;q=0.4,en;q=0.2'
    'HTTP_COOKIE' => 'advanced-frontend=qn1jja0pc6dukeaus4pmk1pjgv; _csrf-frontend=96b44b0c3b761bfd0b8b127c71cde3c81558a33bbbf5ccc162c667fb730dd1bba%3A2%3A%7Bi%3A0%3Bs%3A14%3A%22_csrf-frontend%22%3Bi%3A1%3Bs%3A32%3A%22rKKxaO1xv9AWY9knVXpGEUDa6afhJTUZ%22%3B%7D; advanced-backend=4e8jei4tgpgeqib4jauvm27npv; _csrf-backend=8a2726ea01abdef9236ad3ad58470fee04ce30e498bcab7d86a3d507552e80eaa%3A2%3A%7Bi%3A0%3Bs%3A13%3A%22_csrf-backend%22%3Bi%3A1%3Bs%3A32%3A%22eRE8j5O-mM-A2LfVm4mqrQ4rp2sZhm-H%22%3B%7D; _identity-backend=d1d69c70ce7f469823cb67981d1919b79c6763a2cefb2bcaed6660e48799a7a0a%3A2%3A%7Bi%3A0%3Bs%3A17%3A%22_identity-backend%22%3Bi%3A1%3Bs%3A46%3A%22%5B3%2C%22PPkftzXE1TXzl3iOCMvFaDdMkCfm40RF%22%2C2592000%5D%22%3B%7D'
    'PATH' => 'C:\\WINDOWS\\system32;C:\\WINDOWS;C:\\WINDOWS\\System32\\Wbem;C:\\WINDOWS\\System32\\WindowsPowerShell\\v1.0\\;C:\\xampp\\php;C:\\ProgramData\\ComposerSetup\\bin;C:\\Program Files\\Git\\cmd;C:\\Users\\Win10\\AppData\\Local\\Microsoft\\WindowsApps;C:\\Users\\Win10\\AppData\\Roaming\\Composer\\vendor\\bin'
    'SystemRoot' => 'C:\\WINDOWS'
    'COMSPEC' => 'C:\\WINDOWS\\system32\\cmd.exe'
    'PATHEXT' => '.COM;.EXE;.BAT;.CMD;.VBS;.VBE;.JS;.JSE;.WSF;.WSH;.MSC'
    'WINDIR' => 'C:\\WINDOWS'
    'SERVER_SIGNATURE' => '<address>Apache/2.4.25 (Win32) OpenSSL/1.0.2j PHP/7.1.1 Server at localhost Port 80</address>
'
    'SERVER_SOFTWARE' => 'Apache/2.4.25 (Win32) OpenSSL/1.0.2j PHP/7.1.1'
    'SERVER_NAME' => 'localhost'
    'SERVER_ADDR' => '::1'
    'SERVER_PORT' => '80'
    'REMOTE_ADDR' => '::1'
    'DOCUMENT_ROOT' => 'C:/xampp/htdocs'
    'REQUEST_SCHEME' => 'http'
    'CONTEXT_PREFIX' => ''
    'CONTEXT_DOCUMENT_ROOT' => 'C:/xampp/htdocs'
    'SERVER_ADMIN' => 'postmaster@localhost'
    'SCRIPT_FILENAME' => 'C:/xampp/htdocs/my_first_project/backend/web/index.php'
    'REMOTE_PORT' => '54893'
    'GATEWAY_INTERFACE' => 'CGI/1.1'
    'SERVER_PROTOCOL' => 'HTTP/1.1'
    'REQUEST_METHOD' => 'GET'
    'QUERY_STRING' => 'r=comment%2Fupdate&id=22'
    'REQUEST_URI' => '/my_first_project/backend/web/index.php?r=comment%2Fupdate&id=22'
    'SCRIPT_NAME' => '/my_first_project/backend/web/index.php'
    'PHP_SELF' => '/my_first_project/backend/web/index.php'
    'REQUEST_TIME_FLOAT' => 1492063335.054
    'REQUEST_TIME' => 1492063335
]
2017-04-13 08:02:15 [::1][3][-][error][yii\web\Session::open] session_start(): Cannot send session cache limiter - headers already sent (output started at C:\xampp\htdocs\my_first_project\vendor\yiisoft\yii2\web\Response.php:391)
2017-04-13 08:02:15 [::1][3][-][info][application] $_GET = [
    'r' => 'comment/update'
    'id' => '22'
]

$_COOKIE = [
    'advanced-frontend' => 'qn1jja0pc6dukeaus4pmk1pjgv'
    '_csrf-frontend' => '96b44b0c3b761bfd0b8b127c71cde3c81558a33bbbf5ccc162c667fb730dd1bba:2:{i:0;s:14:\"_csrf-frontend\";i:1;s:32:\"rKKxaO1xv9AWY9knVXpGEUDa6afhJTUZ\";}'
    'advanced-backend' => '4e8jei4tgpgeqib4jauvm27npv'
    '_csrf-backend' => '8a2726ea01abdef9236ad3ad58470fee04ce30e498bcab7d86a3d507552e80eaa:2:{i:0;s:13:\"_csrf-backend\";i:1;s:32:\"eRE8j5O-mM-A2LfVm4mqrQ4rp2sZhm-H\";}'
    '_identity-backend' => 'd1d69c70ce7f469823cb67981d1919b79c6763a2cefb2bcaed6660e48799a7a0a:2:{i:0;s:17:\"_identity-backend\";i:1;s:46:\"[3,\"PPkftzXE1TXzl3iOCMvFaDdMkCfm40RF\",2592000]\";}'
]

$_SESSION = [
    '__flash' => []
    '__id' => 3
]

$_SERVER = [
    'MIBDIRS' => 'C:/xampp/php/extras/mibs'
    'MYSQL_HOME' => '\\xampp\\mysql\\bin'
    'OPENSSL_CONF' => 'C:/xampp/apache/bin/openssl.cnf'
    'PHP_PEAR_SYSCONF_DIR' => '\\xampp\\php'
    'PHPRC' => '\\xampp\\php'
    'TMP' => '\\xampp\\tmp'
    'HTTP_HOST' => 'localhost'
    'HTTP_CONNECTION' => 'keep-alive'
    'HTTP_CACHE_CONTROL' => 'max-age=0'
    'HTTP_UPGRADE_INSECURE_REQUESTS' => '1'
    'HTTP_USER_AGENT' => 'Mozilla/5.0 (Windows NT 10.0; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/57.0.2987.133 Safari/537.36'
    'HTTP_ACCEPT' => 'text/html,application/xhtml+xml,application/xml;q=0.9,image/webp,*/*;q=0.8'
    'HTTP_REFERER' => 'http://localhost/my_first_project/backend/web/index.php?r=comment%2Fview&id=22'
    'HTTP_ACCEPT_ENCODING' => 'gzip, deflate, sdch, br'
    'HTTP_ACCEPT_LANGUAGE' => 'sk-SK,sk;q=0.8,cs;q=0.6,en-US;q=0.4,en;q=0.2'
    'HTTP_COOKIE' => 'advanced-frontend=qn1jja0pc6dukeaus4pmk1pjgv; _csrf-frontend=96b44b0c3b761bfd0b8b127c71cde3c81558a33bbbf5ccc162c667fb730dd1bba%3A2%3A%7Bi%3A0%3Bs%3A14%3A%22_csrf-frontend%22%3Bi%3A1%3Bs%3A32%3A%22rKKxaO1xv9AWY9knVXpGEUDa6afhJTUZ%22%3B%7D; advanced-backend=4e8jei4tgpgeqib4jauvm27npv; _csrf-backend=8a2726ea01abdef9236ad3ad58470fee04ce30e498bcab7d86a3d507552e80eaa%3A2%3A%7Bi%3A0%3Bs%3A13%3A%22_csrf-backend%22%3Bi%3A1%3Bs%3A32%3A%22eRE8j5O-mM-A2LfVm4mqrQ4rp2sZhm-H%22%3B%7D; _identity-backend=d1d69c70ce7f469823cb67981d1919b79c6763a2cefb2bcaed6660e48799a7a0a%3A2%3A%7Bi%3A0%3Bs%3A17%3A%22_identity-backend%22%3Bi%3A1%3Bs%3A46%3A%22%5B3%2C%22PPkftzXE1TXzl3iOCMvFaDdMkCfm40RF%22%2C2592000%5D%22%3B%7D'
    'PATH' => 'C:\\WINDOWS\\system32;C:\\WINDOWS;C:\\WINDOWS\\System32\\Wbem;C:\\WINDOWS\\System32\\WindowsPowerShell\\v1.0\\;C:\\xampp\\php;C:\\ProgramData\\ComposerSetup\\bin;C:\\Program Files\\Git\\cmd;C:\\Users\\Win10\\AppData\\Local\\Microsoft\\WindowsApps;C:\\Users\\Win10\\AppData\\Roaming\\Composer\\vendor\\bin'
    'SystemRoot' => 'C:\\WINDOWS'
    'COMSPEC' => 'C:\\WINDOWS\\system32\\cmd.exe'
    'PATHEXT' => '.COM;.EXE;.BAT;.CMD;.VBS;.VBE;.JS;.JSE;.WSF;.WSH;.MSC'
    'WINDIR' => 'C:\\WINDOWS'
    'SERVER_SIGNATURE' => '<address>Apache/2.4.25 (Win32) OpenSSL/1.0.2j PHP/7.1.1 Server at localhost Port 80</address>
'
    'SERVER_SOFTWARE' => 'Apache/2.4.25 (Win32) OpenSSL/1.0.2j PHP/7.1.1'
    'SERVER_NAME' => 'localhost'
    'SERVER_ADDR' => '::1'
    'SERVER_PORT' => '80'
    'REMOTE_ADDR' => '::1'
    'DOCUMENT_ROOT' => 'C:/xampp/htdocs'
    'REQUEST_SCHEME' => 'http'
    'CONTEXT_PREFIX' => ''
    'CONTEXT_DOCUMENT_ROOT' => 'C:/xampp/htdocs'
    'SERVER_ADMIN' => 'postmaster@localhost'
    'SCRIPT_FILENAME' => 'C:/xampp/htdocs/my_first_project/backend/web/index.php'
    'REMOTE_PORT' => '54893'
    'GATEWAY_INTERFACE' => 'CGI/1.1'
    'SERVER_PROTOCOL' => 'HTTP/1.1'
    'REQUEST_METHOD' => 'GET'
    'QUERY_STRING' => 'r=comment%2Fupdate&id=22'
    'REQUEST_URI' => '/my_first_project/backend/web/index.php?r=comment%2Fupdate&id=22'
    'SCRIPT_NAME' => '/my_first_project/backend/web/index.php'
    'PHP_SELF' => '/my_first_project/backend/web/index.php'
    'REQUEST_TIME_FLOAT' => 1492063335.054
    'REQUEST_TIME' => 1492063335
]
2017-04-13 08:03:05 [::1][-][-][error][yii\base\ViewNotFoundException] yii\base\ViewNotFoundException: The view file does not exist: C:\xampp\htdocs\my_first_project\backend\views\comment\views\post\view.php in C:\xampp\htdocs\my_first_project\vendor\yiisoft\yii2\base\View.php:229
Stack trace:
#0 C:\xampp\htdocs\my_first_project\vendor\yiisoft\yii2\base\View.php(152): yii\base\View->renderFile('C:\\xampp\\htdocs...', Array, Object(backend\controllers\CommentController))
#1 C:\xampp\htdocs\my_first_project\vendor\yiisoft\yii2\base\Controller.php(381): yii\base\View->render('views\\post\\view', Array, Object(backend\controllers\CommentController))
#2 C:\xampp\htdocs\my_first_project\backend\controllers\CommentController.php(109): yii\base\Controller->render('views\\post\\view', Array)
#3 [internal function]: backend\controllers\CommentController->actionUpdate('22')
#4 C:\xampp\htdocs\my_first_project\vendor\yiisoft\yii2\base\InlineAction.php(57): call_user_func_array(Array, Array)
#5 C:\xampp\htdocs\my_first_project\vendor\yiisoft\yii2\base\Controller.php(156): yii\base\InlineAction->runWithParams(Array)
#6 C:\xampp\htdocs\my_first_project\vendor\yiisoft\yii2\base\Module.php(523): yii\base\Controller->runAction('update', Array)
#7 C:\xampp\htdocs\my_first_project\vendor\yiisoft\yii2\web\Application.php(102): yii\base\Module->runAction('comment/update', Array)
#8 C:\xampp\htdocs\my_first_project\vendor\yiisoft\yii2\base\Application.php(380): yii\web\Application->handleRequest(Object(yii\web\Request))
#9 C:\xampp\htdocs\my_first_project\backend\web\index.php(17): yii\base\Application->run()
#10 {main}
2017-04-13 08:03:04 [::1][-][-][info][application] $_GET = [
    'r' => 'comment/update'
    'id' => '22'
]

$_COOKIE = [
    'advanced-frontend' => 'qn1jja0pc6dukeaus4pmk1pjgv'
    '_csrf-frontend' => '96b44b0c3b761bfd0b8b127c71cde3c81558a33bbbf5ccc162c667fb730dd1bba:2:{i:0;s:14:\"_csrf-frontend\";i:1;s:32:\"rKKxaO1xv9AWY9knVXpGEUDa6afhJTUZ\";}'
    'advanced-backend' => '4e8jei4tgpgeqib4jauvm27npv'
    '_csrf-backend' => '8a2726ea01abdef9236ad3ad58470fee04ce30e498bcab7d86a3d507552e80eaa:2:{i:0;s:13:\"_csrf-backend\";i:1;s:32:\"eRE8j5O-mM-A2LfVm4mqrQ4rp2sZhm-H\";}'
    '_identity-backend' => 'd1d69c70ce7f469823cb67981d1919b79c6763a2cefb2bcaed6660e48799a7a0a:2:{i:0;s:17:\"_identity-backend\";i:1;s:46:\"[3,\"PPkftzXE1TXzl3iOCMvFaDdMkCfm40RF\",2592000]\";}'
]

$_SERVER = [
    'MIBDIRS' => 'C:/xampp/php/extras/mibs'
    'MYSQL_HOME' => '\\xampp\\mysql\\bin'
    'OPENSSL_CONF' => 'C:/xampp/apache/bin/openssl.cnf'
    'PHP_PEAR_SYSCONF_DIR' => '\\xampp\\php'
    'PHPRC' => '\\xampp\\php'
    'TMP' => '\\xampp\\tmp'
    'HTTP_HOST' => 'localhost'
    'HTTP_CONNECTION' => 'keep-alive'
    'HTTP_CACHE_CONTROL' => 'max-age=0'
    'HTTP_UPGRADE_INSECURE_REQUESTS' => '1'
    'HTTP_USER_AGENT' => 'Mozilla/5.0 (Windows NT 10.0; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/57.0.2987.133 Safari/537.36'
    'HTTP_ACCEPT' => 'text/html,application/xhtml+xml,application/xml;q=0.9,image/webp,*/*;q=0.8'
    'HTTP_REFERER' => 'http://localhost/my_first_project/backend/web/index.php?r=comment%2Fview&id=22'
    'HTTP_ACCEPT_ENCODING' => 'gzip, deflate, sdch, br'
    'HTTP_ACCEPT_LANGUAGE' => 'sk-SK,sk;q=0.8,cs;q=0.6,en-US;q=0.4,en;q=0.2'
    'HTTP_COOKIE' => 'advanced-frontend=qn1jja0pc6dukeaus4pmk1pjgv; _csrf-frontend=96b44b0c3b761bfd0b8b127c71cde3c81558a33bbbf5ccc162c667fb730dd1bba%3A2%3A%7Bi%3A0%3Bs%3A14%3A%22_csrf-frontend%22%3Bi%3A1%3Bs%3A32%3A%22rKKxaO1xv9AWY9knVXpGEUDa6afhJTUZ%22%3B%7D; advanced-backend=4e8jei4tgpgeqib4jauvm27npv; _csrf-backend=8a2726ea01abdef9236ad3ad58470fee04ce30e498bcab7d86a3d507552e80eaa%3A2%3A%7Bi%3A0%3Bs%3A13%3A%22_csrf-backend%22%3Bi%3A1%3Bs%3A32%3A%22eRE8j5O-mM-A2LfVm4mqrQ4rp2sZhm-H%22%3B%7D; _identity-backend=d1d69c70ce7f469823cb67981d1919b79c6763a2cefb2bcaed6660e48799a7a0a%3A2%3A%7Bi%3A0%3Bs%3A17%3A%22_identity-backend%22%3Bi%3A1%3Bs%3A46%3A%22%5B3%2C%22PPkftzXE1TXzl3iOCMvFaDdMkCfm40RF%22%2C2592000%5D%22%3B%7D'
    'PATH' => 'C:\\WINDOWS\\system32;C:\\WINDOWS;C:\\WINDOWS\\System32\\Wbem;C:\\WINDOWS\\System32\\WindowsPowerShell\\v1.0\\;C:\\xampp\\php;C:\\ProgramData\\ComposerSetup\\bin;C:\\Program Files\\Git\\cmd;C:\\Users\\Win10\\AppData\\Local\\Microsoft\\WindowsApps;C:\\Users\\Win10\\AppData\\Roaming\\Composer\\vendor\\bin'
    'SystemRoot' => 'C:\\WINDOWS'
    'COMSPEC' => 'C:\\WINDOWS\\system32\\cmd.exe'
    'PATHEXT' => '.COM;.EXE;.BAT;.CMD;.VBS;.VBE;.JS;.JSE;.WSF;.WSH;.MSC'
    'WINDIR' => 'C:\\WINDOWS'
    'SERVER_SIGNATURE' => '<address>Apache/2.4.25 (Win32) OpenSSL/1.0.2j PHP/7.1.1 Server at localhost Port 80</address>
'
    'SERVER_SOFTWARE' => 'Apache/2.4.25 (Win32) OpenSSL/1.0.2j PHP/7.1.1'
    'SERVER_NAME' => 'localhost'
    'SERVER_ADDR' => '::1'
    'SERVER_PORT' => '80'
    'REMOTE_ADDR' => '::1'
    'DOCUMENT_ROOT' => 'C:/xampp/htdocs'
    'REQUEST_SCHEME' => 'http'
    'CONTEXT_PREFIX' => ''
    'CONTEXT_DOCUMENT_ROOT' => 'C:/xampp/htdocs'
    'SERVER_ADMIN' => 'postmaster@localhost'
    'SCRIPT_FILENAME' => 'C:/xampp/htdocs/my_first_project/backend/web/index.php'
    'REMOTE_PORT' => '54965'
    'GATEWAY_INTERFACE' => 'CGI/1.1'
    'SERVER_PROTOCOL' => 'HTTP/1.1'
    'REQUEST_METHOD' => 'GET'
    'QUERY_STRING' => 'r=comment%2Fupdate&id=22'
    'REQUEST_URI' => '/my_first_project/backend/web/index.php?r=comment%2Fupdate&id=22'
    'SCRIPT_NAME' => '/my_first_project/backend/web/index.php'
    'PHP_SELF' => '/my_first_project/backend/web/index.php'
    'REQUEST_TIME_FLOAT' => 1492063384.958
    'REQUEST_TIME' => 1492063384
]
2017-04-13 08:03:05 [::1][3][-][error][yii\web\Session::open] session_start(): Cannot send session cache limiter - headers already sent (output started at C:\xampp\htdocs\my_first_project\vendor\yiisoft\yii2\web\Response.php:391)
2017-04-13 08:03:04 [::1][3][-][info][application] $_GET = [
    'r' => 'comment/update'
    'id' => '22'
]

$_COOKIE = [
    'advanced-frontend' => 'qn1jja0pc6dukeaus4pmk1pjgv'
    '_csrf-frontend' => '96b44b0c3b761bfd0b8b127c71cde3c81558a33bbbf5ccc162c667fb730dd1bba:2:{i:0;s:14:\"_csrf-frontend\";i:1;s:32:\"rKKxaO1xv9AWY9knVXpGEUDa6afhJTUZ\";}'
    'advanced-backend' => '4e8jei4tgpgeqib4jauvm27npv'
    '_csrf-backend' => '8a2726ea01abdef9236ad3ad58470fee04ce30e498bcab7d86a3d507552e80eaa:2:{i:0;s:13:\"_csrf-backend\";i:1;s:32:\"eRE8j5O-mM-A2LfVm4mqrQ4rp2sZhm-H\";}'
    '_identity-backend' => 'd1d69c70ce7f469823cb67981d1919b79c6763a2cefb2bcaed6660e48799a7a0a:2:{i:0;s:17:\"_identity-backend\";i:1;s:46:\"[3,\"PPkftzXE1TXzl3iOCMvFaDdMkCfm40RF\",2592000]\";}'
]

$_SESSION = [
    '__flash' => []
    '__id' => 3
]

$_SERVER = [
    'MIBDIRS' => 'C:/xampp/php/extras/mibs'
    'MYSQL_HOME' => '\\xampp\\mysql\\bin'
    'OPENSSL_CONF' => 'C:/xampp/apache/bin/openssl.cnf'
    'PHP_PEAR_SYSCONF_DIR' => '\\xampp\\php'
    'PHPRC' => '\\xampp\\php'
    'TMP' => '\\xampp\\tmp'
    'HTTP_HOST' => 'localhost'
    'HTTP_CONNECTION' => 'keep-alive'
    'HTTP_CACHE_CONTROL' => 'max-age=0'
    'HTTP_UPGRADE_INSECURE_REQUESTS' => '1'
    'HTTP_USER_AGENT' => 'Mozilla/5.0 (Windows NT 10.0; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/57.0.2987.133 Safari/537.36'
    'HTTP_ACCEPT' => 'text/html,application/xhtml+xml,application/xml;q=0.9,image/webp,*/*;q=0.8'
    'HTTP_REFERER' => 'http://localhost/my_first_project/backend/web/index.php?r=comment%2Fview&id=22'
    'HTTP_ACCEPT_ENCODING' => 'gzip, deflate, sdch, br'
    'HTTP_ACCEPT_LANGUAGE' => 'sk-SK,sk;q=0.8,cs;q=0.6,en-US;q=0.4,en;q=0.2'
    'HTTP_COOKIE' => 'advanced-frontend=qn1jja0pc6dukeaus4pmk1pjgv; _csrf-frontend=96b44b0c3b761bfd0b8b127c71cde3c81558a33bbbf5ccc162c667fb730dd1bba%3A2%3A%7Bi%3A0%3Bs%3A14%3A%22_csrf-frontend%22%3Bi%3A1%3Bs%3A32%3A%22rKKxaO1xv9AWY9knVXpGEUDa6afhJTUZ%22%3B%7D; advanced-backend=4e8jei4tgpgeqib4jauvm27npv; _csrf-backend=8a2726ea01abdef9236ad3ad58470fee04ce30e498bcab7d86a3d507552e80eaa%3A2%3A%7Bi%3A0%3Bs%3A13%3A%22_csrf-backend%22%3Bi%3A1%3Bs%3A32%3A%22eRE8j5O-mM-A2LfVm4mqrQ4rp2sZhm-H%22%3B%7D; _identity-backend=d1d69c70ce7f469823cb67981d1919b79c6763a2cefb2bcaed6660e48799a7a0a%3A2%3A%7Bi%3A0%3Bs%3A17%3A%22_identity-backend%22%3Bi%3A1%3Bs%3A46%3A%22%5B3%2C%22PPkftzXE1TXzl3iOCMvFaDdMkCfm40RF%22%2C2592000%5D%22%3B%7D'
    'PATH' => 'C:\\WINDOWS\\system32;C:\\WINDOWS;C:\\WINDOWS\\System32\\Wbem;C:\\WINDOWS\\System32\\WindowsPowerShell\\v1.0\\;C:\\xampp\\php;C:\\ProgramData\\ComposerSetup\\bin;C:\\Program Files\\Git\\cmd;C:\\Users\\Win10\\AppData\\Local\\Microsoft\\WindowsApps;C:\\Users\\Win10\\AppData\\Roaming\\Composer\\vendor\\bin'
    'SystemRoot' => 'C:\\WINDOWS'
    'COMSPEC' => 'C:\\WINDOWS\\system32\\cmd.exe'
    'PATHEXT' => '.COM;.EXE;.BAT;.CMD;.VBS;.VBE;.JS;.JSE;.WSF;.WSH;.MSC'
    'WINDIR' => 'C:\\WINDOWS'
    'SERVER_SIGNATURE' => '<address>Apache/2.4.25 (Win32) OpenSSL/1.0.2j PHP/7.1.1 Server at localhost Port 80</address>
'
    'SERVER_SOFTWARE' => 'Apache/2.4.25 (Win32) OpenSSL/1.0.2j PHP/7.1.1'
    'SERVER_NAME' => 'localhost'
    'SERVER_ADDR' => '::1'
    'SERVER_PORT' => '80'
    'REMOTE_ADDR' => '::1'
    'DOCUMENT_ROOT' => 'C:/xampp/htdocs'
    'REQUEST_SCHEME' => 'http'
    'CONTEXT_PREFIX' => ''
    'CONTEXT_DOCUMENT_ROOT' => 'C:/xampp/htdocs'
    'SERVER_ADMIN' => 'postmaster@localhost'
    'SCRIPT_FILENAME' => 'C:/xampp/htdocs/my_first_project/backend/web/index.php'
    'REMOTE_PORT' => '54965'
    'GATEWAY_INTERFACE' => 'CGI/1.1'
    'SERVER_PROTOCOL' => 'HTTP/1.1'
    'REQUEST_METHOD' => 'GET'
    'QUERY_STRING' => 'r=comment%2Fupdate&id=22'
    'REQUEST_URI' => '/my_first_project/backend/web/index.php?r=comment%2Fupdate&id=22'
    'SCRIPT_NAME' => '/my_first_project/backend/web/index.php'
    'PHP_SELF' => '/my_first_project/backend/web/index.php'
    'REQUEST_TIME_FLOAT' => 1492063384.958
    'REQUEST_TIME' => 1492063384
]
2017-04-13 08:03:10 [::1][-][-][error][yii\base\ViewNotFoundException] yii\base\ViewNotFoundException: The view file does not exist: C:\xampp\htdocs\my_first_project\backend\views\comment\views\post\view.php in C:\xampp\htdocs\my_first_project\vendor\yiisoft\yii2\base\View.php:229
Stack trace:
#0 C:\xampp\htdocs\my_first_project\vendor\yiisoft\yii2\base\View.php(152): yii\base\View->renderFile('C:\\xampp\\htdocs...', Array, Object(backend\controllers\CommentController))
#1 C:\xampp\htdocs\my_first_project\vendor\yiisoft\yii2\base\Controller.php(381): yii\base\View->render('views\\post\\view', Array, Object(backend\controllers\CommentController))
#2 C:\xampp\htdocs\my_first_project\backend\controllers\CommentController.php(109): yii\base\Controller->render('views\\post\\view', Array)
#3 [internal function]: backend\controllers\CommentController->actionUpdate('22')
#4 C:\xampp\htdocs\my_first_project\vendor\yiisoft\yii2\base\InlineAction.php(57): call_user_func_array(Array, Array)
#5 C:\xampp\htdocs\my_first_project\vendor\yiisoft\yii2\base\Controller.php(156): yii\base\InlineAction->runWithParams(Array)
#6 C:\xampp\htdocs\my_first_project\vendor\yiisoft\yii2\base\Module.php(523): yii\base\Controller->runAction('update', Array)
#7 C:\xampp\htdocs\my_first_project\vendor\yiisoft\yii2\web\Application.php(102): yii\base\Module->runAction('comment/update', Array)
#8 C:\xampp\htdocs\my_first_project\vendor\yiisoft\yii2\base\Application.php(380): yii\web\Application->handleRequest(Object(yii\web\Request))
#9 C:\xampp\htdocs\my_first_project\backend\web\index.php(17): yii\base\Application->run()
#10 {main}
2017-04-13 08:03:10 [::1][-][-][info][application] $_GET = [
    'r' => 'comment/update'
    'id' => '22'
]

$_COOKIE = [
    'advanced-frontend' => 'qn1jja0pc6dukeaus4pmk1pjgv'
    '_csrf-frontend' => '96b44b0c3b761bfd0b8b127c71cde3c81558a33bbbf5ccc162c667fb730dd1bba:2:{i:0;s:14:\"_csrf-frontend\";i:1;s:32:\"rKKxaO1xv9AWY9knVXpGEUDa6afhJTUZ\";}'
    'advanced-backend' => '4e8jei4tgpgeqib4jauvm27npv'
    '_csrf-backend' => '8a2726ea01abdef9236ad3ad58470fee04ce30e498bcab7d86a3d507552e80eaa:2:{i:0;s:13:\"_csrf-backend\";i:1;s:32:\"eRE8j5O-mM-A2LfVm4mqrQ4rp2sZhm-H\";}'
    '_identity-backend' => 'd1d69c70ce7f469823cb67981d1919b79c6763a2cefb2bcaed6660e48799a7a0a:2:{i:0;s:17:\"_identity-backend\";i:1;s:46:\"[3,\"PPkftzXE1TXzl3iOCMvFaDdMkCfm40RF\",2592000]\";}'
]

$_SERVER = [
    'MIBDIRS' => 'C:/xampp/php/extras/mibs'
    'MYSQL_HOME' => '\\xampp\\mysql\\bin'
    'OPENSSL_CONF' => 'C:/xampp/apache/bin/openssl.cnf'
    'PHP_PEAR_SYSCONF_DIR' => '\\xampp\\php'
    'PHPRC' => '\\xampp\\php'
    'TMP' => '\\xampp\\tmp'
    'HTTP_HOST' => 'localhost'
    'HTTP_CONNECTION' => 'keep-alive'
    'HTTP_UPGRADE_INSECURE_REQUESTS' => '1'
    'HTTP_USER_AGENT' => 'Mozilla/5.0 (Windows NT 10.0; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/57.0.2987.133 Safari/537.36'
    'HTTP_ACCEPT' => 'text/html,application/xhtml+xml,application/xml;q=0.9,image/webp,*/*;q=0.8'
    'HTTP_REFERER' => 'http://localhost/my_first_project/backend/web/index.php?r=comment%2Fview&id=22'
    'HTTP_ACCEPT_ENCODING' => 'gzip, deflate, sdch, br'
    'HTTP_ACCEPT_LANGUAGE' => 'sk-SK,sk;q=0.8,cs;q=0.6,en-US;q=0.4,en;q=0.2'
    'HTTP_COOKIE' => 'advanced-frontend=qn1jja0pc6dukeaus4pmk1pjgv; _csrf-frontend=96b44b0c3b761bfd0b8b127c71cde3c81558a33bbbf5ccc162c667fb730dd1bba%3A2%3A%7Bi%3A0%3Bs%3A14%3A%22_csrf-frontend%22%3Bi%3A1%3Bs%3A32%3A%22rKKxaO1xv9AWY9knVXpGEUDa6afhJTUZ%22%3B%7D; advanced-backend=4e8jei4tgpgeqib4jauvm27npv; _csrf-backend=8a2726ea01abdef9236ad3ad58470fee04ce30e498bcab7d86a3d507552e80eaa%3A2%3A%7Bi%3A0%3Bs%3A13%3A%22_csrf-backend%22%3Bi%3A1%3Bs%3A32%3A%22eRE8j5O-mM-A2LfVm4mqrQ4rp2sZhm-H%22%3B%7D; _identity-backend=d1d69c70ce7f469823cb67981d1919b79c6763a2cefb2bcaed6660e48799a7a0a%3A2%3A%7Bi%3A0%3Bs%3A17%3A%22_identity-backend%22%3Bi%3A1%3Bs%3A46%3A%22%5B3%2C%22PPkftzXE1TXzl3iOCMvFaDdMkCfm40RF%22%2C2592000%5D%22%3B%7D'
    'PATH' => 'C:\\WINDOWS\\system32;C:\\WINDOWS;C:\\WINDOWS\\System32\\Wbem;C:\\WINDOWS\\System32\\WindowsPowerShell\\v1.0\\;C:\\xampp\\php;C:\\ProgramData\\ComposerSetup\\bin;C:\\Program Files\\Git\\cmd;C:\\Users\\Win10\\AppData\\Local\\Microsoft\\WindowsApps;C:\\Users\\Win10\\AppData\\Roaming\\Composer\\vendor\\bin'
    'SystemRoot' => 'C:\\WINDOWS'
    'COMSPEC' => 'C:\\WINDOWS\\system32\\cmd.exe'
    'PATHEXT' => '.COM;.EXE;.BAT;.CMD;.VBS;.VBE;.JS;.JSE;.WSF;.WSH;.MSC'
    'WINDIR' => 'C:\\WINDOWS'
    'SERVER_SIGNATURE' => '<address>Apache/2.4.25 (Win32) OpenSSL/1.0.2j PHP/7.1.1 Server at localhost Port 80</address>
'
    'SERVER_SOFTWARE' => 'Apache/2.4.25 (Win32) OpenSSL/1.0.2j PHP/7.1.1'
    'SERVER_NAME' => 'localhost'
    'SERVER_ADDR' => '::1'
    'SERVER_PORT' => '80'
    'REMOTE_ADDR' => '::1'
    'DOCUMENT_ROOT' => 'C:/xampp/htdocs'
    'REQUEST_SCHEME' => 'http'
    'CONTEXT_PREFIX' => ''
    'CONTEXT_DOCUMENT_ROOT' => 'C:/xampp/htdocs'
    'SERVER_ADMIN' => 'postmaster@localhost'
    'SCRIPT_FILENAME' => 'C:/xampp/htdocs/my_first_project/backend/web/index.php'
    'REMOTE_PORT' => '54967'
    'GATEWAY_INTERFACE' => 'CGI/1.1'
    'SERVER_PROTOCOL' => 'HTTP/1.1'
    'REQUEST_METHOD' => 'GET'
    'QUERY_STRING' => 'r=comment%2Fupdate&id=22'
    'REQUEST_URI' => '/my_first_project/backend/web/index.php?r=comment%2Fupdate&id=22'
    'SCRIPT_NAME' => '/my_first_project/backend/web/index.php'
    'PHP_SELF' => '/my_first_project/backend/web/index.php'
    'REQUEST_TIME_FLOAT' => 1492063390.041
    'REQUEST_TIME' => 1492063390
]
2017-04-13 08:03:10 [::1][3][-][error][yii\web\Session::open] session_start(): Cannot send session cache limiter - headers already sent (output started at C:\xampp\htdocs\my_first_project\vendor\yiisoft\yii2\web\Response.php:391)
2017-04-13 08:03:10 [::1][3][-][info][application] $_GET = [
    'r' => 'comment/update'
    'id' => '22'
]

$_COOKIE = [
    'advanced-frontend' => 'qn1jja0pc6dukeaus4pmk1pjgv'
    '_csrf-frontend' => '96b44b0c3b761bfd0b8b127c71cde3c81558a33bbbf5ccc162c667fb730dd1bba:2:{i:0;s:14:\"_csrf-frontend\";i:1;s:32:\"rKKxaO1xv9AWY9knVXpGEUDa6afhJTUZ\";}'
    'advanced-backend' => '4e8jei4tgpgeqib4jauvm27npv'
    '_csrf-backend' => '8a2726ea01abdef9236ad3ad58470fee04ce30e498bcab7d86a3d507552e80eaa:2:{i:0;s:13:\"_csrf-backend\";i:1;s:32:\"eRE8j5O-mM-A2LfVm4mqrQ4rp2sZhm-H\";}'
    '_identity-backend' => 'd1d69c70ce7f469823cb67981d1919b79c6763a2cefb2bcaed6660e48799a7a0a:2:{i:0;s:17:\"_identity-backend\";i:1;s:46:\"[3,\"PPkftzXE1TXzl3iOCMvFaDdMkCfm40RF\",2592000]\";}'
]

$_SESSION = [
    '__flash' => []
    '__id' => 3
]

$_SERVER = [
    'MIBDIRS' => 'C:/xampp/php/extras/mibs'
    'MYSQL_HOME' => '\\xampp\\mysql\\bin'
    'OPENSSL_CONF' => 'C:/xampp/apache/bin/openssl.cnf'
    'PHP_PEAR_SYSCONF_DIR' => '\\xampp\\php'
    'PHPRC' => '\\xampp\\php'
    'TMP' => '\\xampp\\tmp'
    'HTTP_HOST' => 'localhost'
    'HTTP_CONNECTION' => 'keep-alive'
    'HTTP_UPGRADE_INSECURE_REQUESTS' => '1'
    'HTTP_USER_AGENT' => 'Mozilla/5.0 (Windows NT 10.0; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/57.0.2987.133 Safari/537.36'
    'HTTP_ACCEPT' => 'text/html,application/xhtml+xml,application/xml;q=0.9,image/webp,*/*;q=0.8'
    'HTTP_REFERER' => 'http://localhost/my_first_project/backend/web/index.php?r=comment%2Fview&id=22'
    'HTTP_ACCEPT_ENCODING' => 'gzip, deflate, sdch, br'
    'HTTP_ACCEPT_LANGUAGE' => 'sk-SK,sk;q=0.8,cs;q=0.6,en-US;q=0.4,en;q=0.2'
    'HTTP_COOKIE' => 'advanced-frontend=qn1jja0pc6dukeaus4pmk1pjgv; _csrf-frontend=96b44b0c3b761bfd0b8b127c71cde3c81558a33bbbf5ccc162c667fb730dd1bba%3A2%3A%7Bi%3A0%3Bs%3A14%3A%22_csrf-frontend%22%3Bi%3A1%3Bs%3A32%3A%22rKKxaO1xv9AWY9knVXpGEUDa6afhJTUZ%22%3B%7D; advanced-backend=4e8jei4tgpgeqib4jauvm27npv; _csrf-backend=8a2726ea01abdef9236ad3ad58470fee04ce30e498bcab7d86a3d507552e80eaa%3A2%3A%7Bi%3A0%3Bs%3A13%3A%22_csrf-backend%22%3Bi%3A1%3Bs%3A32%3A%22eRE8j5O-mM-A2LfVm4mqrQ4rp2sZhm-H%22%3B%7D; _identity-backend=d1d69c70ce7f469823cb67981d1919b79c6763a2cefb2bcaed6660e48799a7a0a%3A2%3A%7Bi%3A0%3Bs%3A17%3A%22_identity-backend%22%3Bi%3A1%3Bs%3A46%3A%22%5B3%2C%22PPkftzXE1TXzl3iOCMvFaDdMkCfm40RF%22%2C2592000%5D%22%3B%7D'
    'PATH' => 'C:\\WINDOWS\\system32;C:\\WINDOWS;C:\\WINDOWS\\System32\\Wbem;C:\\WINDOWS\\System32\\WindowsPowerShell\\v1.0\\;C:\\xampp\\php;C:\\ProgramData\\ComposerSetup\\bin;C:\\Program Files\\Git\\cmd;C:\\Users\\Win10\\AppData\\Local\\Microsoft\\WindowsApps;C:\\Users\\Win10\\AppData\\Roaming\\Composer\\vendor\\bin'
    'SystemRoot' => 'C:\\WINDOWS'
    'COMSPEC' => 'C:\\WINDOWS\\system32\\cmd.exe'
    'PATHEXT' => '.COM;.EXE;.BAT;.CMD;.VBS;.VBE;.JS;.JSE;.WSF;.WSH;.MSC'
    'WINDIR' => 'C:\\WINDOWS'
    'SERVER_SIGNATURE' => '<address>Apache/2.4.25 (Win32) OpenSSL/1.0.2j PHP/7.1.1 Server at localhost Port 80</address>
'
    'SERVER_SOFTWARE' => 'Apache/2.4.25 (Win32) OpenSSL/1.0.2j PHP/7.1.1'
    'SERVER_NAME' => 'localhost'
    'SERVER_ADDR' => '::1'
    'SERVER_PORT' => '80'
    'REMOTE_ADDR' => '::1'
    'DOCUMENT_ROOT' => 'C:/xampp/htdocs'
    'REQUEST_SCHEME' => 'http'
    'CONTEXT_PREFIX' => ''
    'CONTEXT_DOCUMENT_ROOT' => 'C:/xampp/htdocs'
    'SERVER_ADMIN' => 'postmaster@localhost'
    'SCRIPT_FILENAME' => 'C:/xampp/htdocs/my_first_project/backend/web/index.php'
    'REMOTE_PORT' => '54967'
    'GATEWAY_INTERFACE' => 'CGI/1.1'
    'SERVER_PROTOCOL' => 'HTTP/1.1'
    'REQUEST_METHOD' => 'GET'
    'QUERY_STRING' => 'r=comment%2Fupdate&id=22'
    'REQUEST_URI' => '/my_first_project/backend/web/index.php?r=comment%2Fupdate&id=22'
    'SCRIPT_NAME' => '/my_first_project/backend/web/index.php'
    'PHP_SELF' => '/my_first_project/backend/web/index.php'
    'REQUEST_TIME_FLOAT' => 1492063390.041
    'REQUEST_TIME' => 1492063390
]
2017-04-13 08:07:37 [::1][3][4e8jei4tgpgeqib4jauvm27npv][error][yii\web\HttpException:404] yii\web\NotFoundHttpException: The requested page does not exist. in C:\xampp\htdocs\my_first_project\backend\controllers\CommentController.php:139
Stack trace:
#0 C:\xampp\htdocs\my_first_project\backend\controllers\CommentController.php(57): backend\controllers\CommentController->findModel('''>')
#1 [internal function]: backend\controllers\CommentController->actionView('''>')
#2 C:\xampp\htdocs\my_first_project\vendor\yiisoft\yii2\base\InlineAction.php(57): call_user_func_array(Array, Array)
#3 C:\xampp\htdocs\my_first_project\vendor\yiisoft\yii2\base\Controller.php(156): yii\base\InlineAction->runWithParams(Array)
#4 C:\xampp\htdocs\my_first_project\vendor\yiisoft\yii2\base\Module.php(523): yii\base\Controller->runAction('view', Array)
#5 C:\xampp\htdocs\my_first_project\vendor\yiisoft\yii2\web\Application.php(102): yii\base\Module->runAction('comment/view', Array)
#6 C:\xampp\htdocs\my_first_project\vendor\yiisoft\yii2\base\Application.php(380): yii\web\Application->handleRequest(Object(yii\web\Request))
#7 C:\xampp\htdocs\my_first_project\backend\web\index.php(17): yii\base\Application->run()
#8 {main}
2017-04-13 08:07:37 [::1][3][4e8jei4tgpgeqib4jauvm27npv][info][application] $_GET = [
    'r' => 'comment/view'
    'id' => '\'\'>'
]

$_COOKIE = [
    'advanced-frontend' => 'qn1jja0pc6dukeaus4pmk1pjgv'
    '_csrf-frontend' => '96b44b0c3b761bfd0b8b127c71cde3c81558a33bbbf5ccc162c667fb730dd1bba:2:{i:0;s:14:\"_csrf-frontend\";i:1;s:32:\"rKKxaO1xv9AWY9knVXpGEUDa6afhJTUZ\";}'
    'advanced-backend' => '4e8jei4tgpgeqib4jauvm27npv'
    '_csrf-backend' => '8a2726ea01abdef9236ad3ad58470fee04ce30e498bcab7d86a3d507552e80eaa:2:{i:0;s:13:\"_csrf-backend\";i:1;s:32:\"eRE8j5O-mM-A2LfVm4mqrQ4rp2sZhm-H\";}'
    '_identity-backend' => 'd1d69c70ce7f469823cb67981d1919b79c6763a2cefb2bcaed6660e48799a7a0a:2:{i:0;s:17:\"_identity-backend\";i:1;s:46:\"[3,\"PPkftzXE1TXzl3iOCMvFaDdMkCfm40RF\",2592000]\";}'
]

$_SESSION = [
    '__flash' => []
    '__id' => 3
]

$_SERVER = [
    'MIBDIRS' => 'C:/xampp/php/extras/mibs'
    'MYSQL_HOME' => '\\xampp\\mysql\\bin'
    'OPENSSL_CONF' => 'C:/xampp/apache/bin/openssl.cnf'
    'PHP_PEAR_SYSCONF_DIR' => '\\xampp\\php'
    'PHPRC' => '\\xampp\\php'
    'TMP' => '\\xampp\\tmp'
    'HTTP_HOST' => 'localhost'
    'HTTP_CONNECTION' => 'keep-alive'
    'HTTP_UPGRADE_INSECURE_REQUESTS' => '1'
    'HTTP_USER_AGENT' => 'Mozilla/5.0 (Windows NT 10.0; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/57.0.2987.133 Safari/537.36'
    'HTTP_ACCEPT' => 'text/html,application/xhtml+xml,application/xml;q=0.9,image/webp,*/*;q=0.8'
    'HTTP_REFERER' => 'http://localhost/my_first_project/backend/web/index.php?r=comment%2Fview&id=23'
    'HTTP_ACCEPT_ENCODING' => 'gzip, deflate, sdch, br'
    'HTTP_ACCEPT_LANGUAGE' => 'sk-SK,sk;q=0.8,cs;q=0.6,en-US;q=0.4,en;q=0.2'
    'HTTP_COOKIE' => 'advanced-frontend=qn1jja0pc6dukeaus4pmk1pjgv; _csrf-frontend=96b44b0c3b761bfd0b8b127c71cde3c81558a33bbbf5ccc162c667fb730dd1bba%3A2%3A%7Bi%3A0%3Bs%3A14%3A%22_csrf-frontend%22%3Bi%3A1%3Bs%3A32%3A%22rKKxaO1xv9AWY9knVXpGEUDa6afhJTUZ%22%3B%7D; advanced-backend=4e8jei4tgpgeqib4jauvm27npv; _csrf-backend=8a2726ea01abdef9236ad3ad58470fee04ce30e498bcab7d86a3d507552e80eaa%3A2%3A%7Bi%3A0%3Bs%3A13%3A%22_csrf-backend%22%3Bi%3A1%3Bs%3A32%3A%22eRE8j5O-mM-A2LfVm4mqrQ4rp2sZhm-H%22%3B%7D; _identity-backend=d1d69c70ce7f469823cb67981d1919b79c6763a2cefb2bcaed6660e48799a7a0a%3A2%3A%7Bi%3A0%3Bs%3A17%3A%22_identity-backend%22%3Bi%3A1%3Bs%3A46%3A%22%5B3%2C%22PPkftzXE1TXzl3iOCMvFaDdMkCfm40RF%22%2C2592000%5D%22%3B%7D'
    'PATH' => 'C:\\WINDOWS\\system32;C:\\WINDOWS;C:\\WINDOWS\\System32\\Wbem;C:\\WINDOWS\\System32\\WindowsPowerShell\\v1.0\\;C:\\xampp\\php;C:\\ProgramData\\ComposerSetup\\bin;C:\\Program Files\\Git\\cmd;C:\\Users\\Win10\\AppData\\Local\\Microsoft\\WindowsApps;C:\\Users\\Win10\\AppData\\Roaming\\Composer\\vendor\\bin'
    'SystemRoot' => 'C:\\WINDOWS'
    'COMSPEC' => 'C:\\WINDOWS\\system32\\cmd.exe'
    'PATHEXT' => '.COM;.EXE;.BAT;.CMD;.VBS;.VBE;.JS;.JSE;.WSF;.WSH;.MSC'
    'WINDIR' => 'C:\\WINDOWS'
    'SERVER_SIGNATURE' => '<address>Apache/2.4.25 (Win32) OpenSSL/1.0.2j PHP/7.1.1 Server at localhost Port 80</address>
'
    'SERVER_SOFTWARE' => 'Apache/2.4.25 (Win32) OpenSSL/1.0.2j PHP/7.1.1'
    'SERVER_NAME' => 'localhost'
    'SERVER_ADDR' => '::1'
    'SERVER_PORT' => '80'
    'REMOTE_ADDR' => '::1'
    'DOCUMENT_ROOT' => 'C:/xampp/htdocs'
    'REQUEST_SCHEME' => 'http'
    'CONTEXT_PREFIX' => ''
    'CONTEXT_DOCUMENT_ROOT' => 'C:/xampp/htdocs'
    'SERVER_ADMIN' => 'postmaster@localhost'
    'SCRIPT_FILENAME' => 'C:/xampp/htdocs/my_first_project/backend/web/index.php'
    'REMOTE_PORT' => '55322'
    'GATEWAY_INTERFACE' => 'CGI/1.1'
    'SERVER_PROTOCOL' => 'HTTP/1.1'
    'REQUEST_METHOD' => 'GET'
    'QUERY_STRING' => 'r=comment%2Fview&id=%27%27%3E'
    'REQUEST_URI' => '/my_first_project/backend/web/index.php?r=comment%2Fview&id=%27%27%3E'
    'SCRIPT_NAME' => '/my_first_project/backend/web/index.php'
    'PHP_SELF' => '/my_first_project/backend/web/index.php'
    'REQUEST_TIME_FLOAT' => 1492063657.478
    'REQUEST_TIME' => 1492063657
]
2017-04-13 08:08:12 [::1][3][4e8jei4tgpgeqib4jauvm27npv][error][yii\web\HttpException:404] yii\web\NotFoundHttpException: The requested page does not exist. in C:\xampp\htdocs\my_first_project\backend\controllers\CommentController.php:139
Stack trace:
#0 C:\xampp\htdocs\my_first_project\backend\controllers\CommentController.php(57): backend\controllers\CommentController->findModel('>')
#1 [internal function]: backend\controllers\CommentController->actionView('>')
#2 C:\xampp\htdocs\my_first_project\vendor\yiisoft\yii2\base\InlineAction.php(57): call_user_func_array(Array, Array)
#3 C:\xampp\htdocs\my_first_project\vendor\yiisoft\yii2\base\Controller.php(156): yii\base\InlineAction->runWithParams(Array)
#4 C:\xampp\htdocs\my_first_project\vendor\yiisoft\yii2\base\Module.php(523): yii\base\Controller->runAction('view', Array)
#5 C:\xampp\htdocs\my_first_project\vendor\yiisoft\yii2\web\Application.php(102): yii\base\Module->runAction('comment/view', Array)
#6 C:\xampp\htdocs\my_first_project\vendor\yiisoft\yii2\base\Application.php(380): yii\web\Application->handleRequest(Object(yii\web\Request))
#7 C:\xampp\htdocs\my_first_project\backend\web\index.php(17): yii\base\Application->run()
#8 {main}
2017-04-13 08:08:12 [::1][3][4e8jei4tgpgeqib4jauvm27npv][info][application] $_GET = [
    'r' => 'comment/view'
    'id' => '>'
]

$_COOKIE = [
    'advanced-frontend' => 'qn1jja0pc6dukeaus4pmk1pjgv'
    '_csrf-frontend' => '96b44b0c3b761bfd0b8b127c71cde3c81558a33bbbf5ccc162c667fb730dd1bba:2:{i:0;s:14:\"_csrf-frontend\";i:1;s:32:\"rKKxaO1xv9AWY9knVXpGEUDa6afhJTUZ\";}'
    'advanced-backend' => '4e8jei4tgpgeqib4jauvm27npv'
    '_csrf-backend' => '8a2726ea01abdef9236ad3ad58470fee04ce30e498bcab7d86a3d507552e80eaa:2:{i:0;s:13:\"_csrf-backend\";i:1;s:32:\"eRE8j5O-mM-A2LfVm4mqrQ4rp2sZhm-H\";}'
    '_identity-backend' => 'd1d69c70ce7f469823cb67981d1919b79c6763a2cefb2bcaed6660e48799a7a0a:2:{i:0;s:17:\"_identity-backend\";i:1;s:46:\"[3,\"PPkftzXE1TXzl3iOCMvFaDdMkCfm40RF\",2592000]\";}'
]

$_SESSION = [
    '__flash' => []
    '__id' => 3
]

$_SERVER = [
    'MIBDIRS' => 'C:/xampp/php/extras/mibs'
    'MYSQL_HOME' => '\\xampp\\mysql\\bin'
    'OPENSSL_CONF' => 'C:/xampp/apache/bin/openssl.cnf'
    'PHP_PEAR_SYSCONF_DIR' => '\\xampp\\php'
    'PHPRC' => '\\xampp\\php'
    'TMP' => '\\xampp\\tmp'
    'HTTP_HOST' => 'localhost'
    'HTTP_CONNECTION' => 'keep-alive'
    'HTTP_UPGRADE_INSECURE_REQUESTS' => '1'
    'HTTP_USER_AGENT' => 'Mozilla/5.0 (Windows NT 10.0; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/57.0.2987.133 Safari/537.36'
    'HTTP_ACCEPT' => 'text/html,application/xhtml+xml,application/xml;q=0.9,image/webp,*/*;q=0.8'
    'HTTP_REFERER' => 'http://localhost/my_first_project/backend/web/index.php?r=comment%2Fview&id=23'
    'HTTP_ACCEPT_ENCODING' => 'gzip, deflate, sdch, br'
    'HTTP_ACCEPT_LANGUAGE' => 'sk-SK,sk;q=0.8,cs;q=0.6,en-US;q=0.4,en;q=0.2'
    'HTTP_COOKIE' => 'advanced-frontend=qn1jja0pc6dukeaus4pmk1pjgv; _csrf-frontend=96b44b0c3b761bfd0b8b127c71cde3c81558a33bbbf5ccc162c667fb730dd1bba%3A2%3A%7Bi%3A0%3Bs%3A14%3A%22_csrf-frontend%22%3Bi%3A1%3Bs%3A32%3A%22rKKxaO1xv9AWY9knVXpGEUDa6afhJTUZ%22%3B%7D; advanced-backend=4e8jei4tgpgeqib4jauvm27npv; _csrf-backend=8a2726ea01abdef9236ad3ad58470fee04ce30e498bcab7d86a3d507552e80eaa%3A2%3A%7Bi%3A0%3Bs%3A13%3A%22_csrf-backend%22%3Bi%3A1%3Bs%3A32%3A%22eRE8j5O-mM-A2LfVm4mqrQ4rp2sZhm-H%22%3B%7D; _identity-backend=d1d69c70ce7f469823cb67981d1919b79c6763a2cefb2bcaed6660e48799a7a0a%3A2%3A%7Bi%3A0%3Bs%3A17%3A%22_identity-backend%22%3Bi%3A1%3Bs%3A46%3A%22%5B3%2C%22PPkftzXE1TXzl3iOCMvFaDdMkCfm40RF%22%2C2592000%5D%22%3B%7D'
    'PATH' => 'C:\\WINDOWS\\system32;C:\\WINDOWS;C:\\WINDOWS\\System32\\Wbem;C:\\WINDOWS\\System32\\WindowsPowerShell\\v1.0\\;C:\\xampp\\php;C:\\ProgramData\\ComposerSetup\\bin;C:\\Program Files\\Git\\cmd;C:\\Users\\Win10\\AppData\\Local\\Microsoft\\WindowsApps;C:\\Users\\Win10\\AppData\\Roaming\\Composer\\vendor\\bin'
    'SystemRoot' => 'C:\\WINDOWS'
    'COMSPEC' => 'C:\\WINDOWS\\system32\\cmd.exe'
    'PATHEXT' => '.COM;.EXE;.BAT;.CMD;.VBS;.VBE;.JS;.JSE;.WSF;.WSH;.MSC'
    'WINDIR' => 'C:\\WINDOWS'
    'SERVER_SIGNATURE' => '<address>Apache/2.4.25 (Win32) OpenSSL/1.0.2j PHP/7.1.1 Server at localhost Port 80</address>
'
    'SERVER_SOFTWARE' => 'Apache/2.4.25 (Win32) OpenSSL/1.0.2j PHP/7.1.1'
    'SERVER_NAME' => 'localhost'
    'SERVER_ADDR' => '::1'
    'SERVER_PORT' => '80'
    'REMOTE_ADDR' => '::1'
    'DOCUMENT_ROOT' => 'C:/xampp/htdocs'
    'REQUEST_SCHEME' => 'http'
    'CONTEXT_PREFIX' => ''
    'CONTEXT_DOCUMENT_ROOT' => 'C:/xampp/htdocs'
    'SERVER_ADMIN' => 'postmaster@localhost'
    'SCRIPT_FILENAME' => 'C:/xampp/htdocs/my_first_project/backend/web/index.php'
    'REMOTE_PORT' => '55334'
    'GATEWAY_INTERFACE' => 'CGI/1.1'
    'SERVER_PROTOCOL' => 'HTTP/1.1'
    'REQUEST_METHOD' => 'GET'
    'QUERY_STRING' => 'r=comment%2Fview&id=%3E'
    'REQUEST_URI' => '/my_first_project/backend/web/index.php?r=comment%2Fview&id=%3E'
    'SCRIPT_NAME' => '/my_first_project/backend/web/index.php'
    'PHP_SELF' => '/my_first_project/backend/web/index.php'
    'REQUEST_TIME_FLOAT' => 1492063692.31
    'REQUEST_TIME' => 1492063692
]
2017-04-13 08:08:26 [::1][3][4e8jei4tgpgeqib4jauvm27npv][error][yii\web\HttpException:404] yii\web\NotFoundHttpException: The requested page does not exist. in C:\xampp\htdocs\my_first_project\backend\controllers\CommentController.php:139
Stack trace:
#0 C:\xampp\htdocs\my_first_project\backend\controllers\CommentController.php(57): backend\controllers\CommentController->findModel('>')
#1 [internal function]: backend\controllers\CommentController->actionView('>')
#2 C:\xampp\htdocs\my_first_project\vendor\yiisoft\yii2\base\InlineAction.php(57): call_user_func_array(Array, Array)
#3 C:\xampp\htdocs\my_first_project\vendor\yiisoft\yii2\base\Controller.php(156): yii\base\InlineAction->runWithParams(Array)
#4 C:\xampp\htdocs\my_first_project\vendor\yiisoft\yii2\base\Module.php(523): yii\base\Controller->runAction('view', Array)
#5 C:\xampp\htdocs\my_first_project\vendor\yiisoft\yii2\web\Application.php(102): yii\base\Module->runAction('comment/view', Array)
#6 C:\xampp\htdocs\my_first_project\vendor\yiisoft\yii2\base\Application.php(380): yii\web\Application->handleRequest(Object(yii\web\Request))
#7 C:\xampp\htdocs\my_first_project\backend\web\index.php(17): yii\base\Application->run()
#8 {main}
2017-04-13 08:08:26 [::1][3][4e8jei4tgpgeqib4jauvm27npv][info][application] $_GET = [
    'r' => 'comment/view'
    'id' => '>'
]

$_COOKIE = [
    'advanced-frontend' => 'qn1jja0pc6dukeaus4pmk1pjgv'
    '_csrf-frontend' => '96b44b0c3b761bfd0b8b127c71cde3c81558a33bbbf5ccc162c667fb730dd1bba:2:{i:0;s:14:\"_csrf-frontend\";i:1;s:32:\"rKKxaO1xv9AWY9knVXpGEUDa6afhJTUZ\";}'
    'advanced-backend' => '4e8jei4tgpgeqib4jauvm27npv'
    '_csrf-backend' => '8a2726ea01abdef9236ad3ad58470fee04ce30e498bcab7d86a3d507552e80eaa:2:{i:0;s:13:\"_csrf-backend\";i:1;s:32:\"eRE8j5O-mM-A2LfVm4mqrQ4rp2sZhm-H\";}'
    '_identity-backend' => 'd1d69c70ce7f469823cb67981d1919b79c6763a2cefb2bcaed6660e48799a7a0a:2:{i:0;s:17:\"_identity-backend\";i:1;s:46:\"[3,\"PPkftzXE1TXzl3iOCMvFaDdMkCfm40RF\",2592000]\";}'
]

$_SESSION = [
    '__flash' => []
    '__id' => 3
]

$_SERVER = [
    'MIBDIRS' => 'C:/xampp/php/extras/mibs'
    'MYSQL_HOME' => '\\xampp\\mysql\\bin'
    'OPENSSL_CONF' => 'C:/xampp/apache/bin/openssl.cnf'
    'PHP_PEAR_SYSCONF_DIR' => '\\xampp\\php'
    'PHPRC' => '\\xampp\\php'
    'TMP' => '\\xampp\\tmp'
    'HTTP_HOST' => 'localhost'
    'HTTP_CONNECTION' => 'keep-alive'
    'HTTP_CACHE_CONTROL' => 'max-age=0'
    'HTTP_UPGRADE_INSECURE_REQUESTS' => '1'
    'HTTP_USER_AGENT' => 'Mozilla/5.0 (Windows NT 10.0; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/57.0.2987.133 Safari/537.36'
    'HTTP_ACCEPT' => 'text/html,application/xhtml+xml,application/xml;q=0.9,image/webp,*/*;q=0.8'
    'HTTP_REFERER' => 'http://localhost/my_first_project/backend/web/index.php?r=comment%2Fview&id=23'
    'HTTP_ACCEPT_ENCODING' => 'gzip, deflate, sdch, br'
    'HTTP_ACCEPT_LANGUAGE' => 'sk-SK,sk;q=0.8,cs;q=0.6,en-US;q=0.4,en;q=0.2'
    'HTTP_COOKIE' => 'advanced-frontend=qn1jja0pc6dukeaus4pmk1pjgv; _csrf-frontend=96b44b0c3b761bfd0b8b127c71cde3c81558a33bbbf5ccc162c667fb730dd1bba%3A2%3A%7Bi%3A0%3Bs%3A14%3A%22_csrf-frontend%22%3Bi%3A1%3Bs%3A32%3A%22rKKxaO1xv9AWY9knVXpGEUDa6afhJTUZ%22%3B%7D; advanced-backend=4e8jei4tgpgeqib4jauvm27npv; _csrf-backend=8a2726ea01abdef9236ad3ad58470fee04ce30e498bcab7d86a3d507552e80eaa%3A2%3A%7Bi%3A0%3Bs%3A13%3A%22_csrf-backend%22%3Bi%3A1%3Bs%3A32%3A%22eRE8j5O-mM-A2LfVm4mqrQ4rp2sZhm-H%22%3B%7D; _identity-backend=d1d69c70ce7f469823cb67981d1919b79c6763a2cefb2bcaed6660e48799a7a0a%3A2%3A%7Bi%3A0%3Bs%3A17%3A%22_identity-backend%22%3Bi%3A1%3Bs%3A46%3A%22%5B3%2C%22PPkftzXE1TXzl3iOCMvFaDdMkCfm40RF%22%2C2592000%5D%22%3B%7D'
    'PATH' => 'C:\\WINDOWS\\system32;C:\\WINDOWS;C:\\WINDOWS\\System32\\Wbem;C:\\WINDOWS\\System32\\WindowsPowerShell\\v1.0\\;C:\\xampp\\php;C:\\ProgramData\\ComposerSetup\\bin;C:\\Program Files\\Git\\cmd;C:\\Users\\Win10\\AppData\\Local\\Microsoft\\WindowsApps;C:\\Users\\Win10\\AppData\\Roaming\\Composer\\vendor\\bin'
    'SystemRoot' => 'C:\\WINDOWS'
    'COMSPEC' => 'C:\\WINDOWS\\system32\\cmd.exe'
    'PATHEXT' => '.COM;.EXE;.BAT;.CMD;.VBS;.VBE;.JS;.JSE;.WSF;.WSH;.MSC'
    'WINDIR' => 'C:\\WINDOWS'
    'SERVER_SIGNATURE' => '<address>Apache/2.4.25 (Win32) OpenSSL/1.0.2j PHP/7.1.1 Server at localhost Port 80</address>
'
    'SERVER_SOFTWARE' => 'Apache/2.4.25 (Win32) OpenSSL/1.0.2j PHP/7.1.1'
    'SERVER_NAME' => 'localhost'
    'SERVER_ADDR' => '::1'
    'SERVER_PORT' => '80'
    'REMOTE_ADDR' => '::1'
    'DOCUMENT_ROOT' => 'C:/xampp/htdocs'
    'REQUEST_SCHEME' => 'http'
    'CONTEXT_PREFIX' => ''
    'CONTEXT_DOCUMENT_ROOT' => 'C:/xampp/htdocs'
    'SERVER_ADMIN' => 'postmaster@localhost'
    'SCRIPT_FILENAME' => 'C:/xampp/htdocs/my_first_project/backend/web/index.php'
    'REMOTE_PORT' => '55342'
    'GATEWAY_INTERFACE' => 'CGI/1.1'
    'SERVER_PROTOCOL' => 'HTTP/1.1'
    'REQUEST_METHOD' => 'GET'
    'QUERY_STRING' => 'r=comment%2Fview&id=%3E'
    'REQUEST_URI' => '/my_first_project/backend/web/index.php?r=comment%2Fview&id=%3E'
    'SCRIPT_NAME' => '/my_first_project/backend/web/index.php'
    'PHP_SELF' => '/my_first_project/backend/web/index.php'
    'REQUEST_TIME_FLOAT' => 1492063706.798
    'REQUEST_TIME' => 1492063706
]
2017-04-13 08:08:31 [::1][3][4e8jei4tgpgeqib4jauvm27npv][error][yii\web\HttpException:404] yii\web\NotFoundHttpException: The requested page does not exist. in C:\xampp\htdocs\my_first_project\backend\controllers\CommentController.php:139
Stack trace:
#0 C:\xampp\htdocs\my_first_project\backend\controllers\CommentController.php(57): backend\controllers\CommentController->findModel('''>')
#1 [internal function]: backend\controllers\CommentController->actionView('''>')
#2 C:\xampp\htdocs\my_first_project\vendor\yiisoft\yii2\base\InlineAction.php(57): call_user_func_array(Array, Array)
#3 C:\xampp\htdocs\my_first_project\vendor\yiisoft\yii2\base\Controller.php(156): yii\base\InlineAction->runWithParams(Array)
#4 C:\xampp\htdocs\my_first_project\vendor\yiisoft\yii2\base\Module.php(523): yii\base\Controller->runAction('view', Array)
#5 C:\xampp\htdocs\my_first_project\vendor\yiisoft\yii2\web\Application.php(102): yii\base\Module->runAction('comment/view', Array)
#6 C:\xampp\htdocs\my_first_project\vendor\yiisoft\yii2\base\Application.php(380): yii\web\Application->handleRequest(Object(yii\web\Request))
#7 C:\xampp\htdocs\my_first_project\backend\web\index.php(17): yii\base\Application->run()
#8 {main}
2017-04-13 08:08:31 [::1][3][4e8jei4tgpgeqib4jauvm27npv][info][application] $_GET = [
    'r' => 'comment/view'
    'id' => '\'\'>'
]

$_COOKIE = [
    'advanced-frontend' => 'qn1jja0pc6dukeaus4pmk1pjgv'
    '_csrf-frontend' => '96b44b0c3b761bfd0b8b127c71cde3c81558a33bbbf5ccc162c667fb730dd1bba:2:{i:0;s:14:\"_csrf-frontend\";i:1;s:32:\"rKKxaO1xv9AWY9knVXpGEUDa6afhJTUZ\";}'
    'advanced-backend' => '4e8jei4tgpgeqib4jauvm27npv'
    '_csrf-backend' => '8a2726ea01abdef9236ad3ad58470fee04ce30e498bcab7d86a3d507552e80eaa:2:{i:0;s:13:\"_csrf-backend\";i:1;s:32:\"eRE8j5O-mM-A2LfVm4mqrQ4rp2sZhm-H\";}'
    '_identity-backend' => 'd1d69c70ce7f469823cb67981d1919b79c6763a2cefb2bcaed6660e48799a7a0a:2:{i:0;s:17:\"_identity-backend\";i:1;s:46:\"[3,\"PPkftzXE1TXzl3iOCMvFaDdMkCfm40RF\",2592000]\";}'
]

$_SESSION = [
    '__flash' => []
    '__id' => 3
]

$_SERVER = [
    'MIBDIRS' => 'C:/xampp/php/extras/mibs'
    'MYSQL_HOME' => '\\xampp\\mysql\\bin'
    'OPENSSL_CONF' => 'C:/xampp/apache/bin/openssl.cnf'
    'PHP_PEAR_SYSCONF_DIR' => '\\xampp\\php'
    'PHPRC' => '\\xampp\\php'
    'TMP' => '\\xampp\\tmp'
    'HTTP_HOST' => 'localhost'
    'HTTP_CONNECTION' => 'keep-alive'
    'HTTP_UPGRADE_INSECURE_REQUESTS' => '1'
    'HTTP_USER_AGENT' => 'Mozilla/5.0 (Windows NT 10.0; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/57.0.2987.133 Safari/537.36'
    'HTTP_ACCEPT' => 'text/html,application/xhtml+xml,application/xml;q=0.9,image/webp,*/*;q=0.8'
    'HTTP_REFERER' => 'http://localhost/my_first_project/backend/web/index.php?r=comment%2Fview&id=23'
    'HTTP_ACCEPT_ENCODING' => 'gzip, deflate, sdch, br'
    'HTTP_ACCEPT_LANGUAGE' => 'sk-SK,sk;q=0.8,cs;q=0.6,en-US;q=0.4,en;q=0.2'
    'HTTP_COOKIE' => 'advanced-frontend=qn1jja0pc6dukeaus4pmk1pjgv; _csrf-frontend=96b44b0c3b761bfd0b8b127c71cde3c81558a33bbbf5ccc162c667fb730dd1bba%3A2%3A%7Bi%3A0%3Bs%3A14%3A%22_csrf-frontend%22%3Bi%3A1%3Bs%3A32%3A%22rKKxaO1xv9AWY9knVXpGEUDa6afhJTUZ%22%3B%7D; advanced-backend=4e8jei4tgpgeqib4jauvm27npv; _csrf-backend=8a2726ea01abdef9236ad3ad58470fee04ce30e498bcab7d86a3d507552e80eaa%3A2%3A%7Bi%3A0%3Bs%3A13%3A%22_csrf-backend%22%3Bi%3A1%3Bs%3A32%3A%22eRE8j5O-mM-A2LfVm4mqrQ4rp2sZhm-H%22%3B%7D; _identity-backend=d1d69c70ce7f469823cb67981d1919b79c6763a2cefb2bcaed6660e48799a7a0a%3A2%3A%7Bi%3A0%3Bs%3A17%3A%22_identity-backend%22%3Bi%3A1%3Bs%3A46%3A%22%5B3%2C%22PPkftzXE1TXzl3iOCMvFaDdMkCfm40RF%22%2C2592000%5D%22%3B%7D'
    'PATH' => 'C:\\WINDOWS\\system32;C:\\WINDOWS;C:\\WINDOWS\\System32\\Wbem;C:\\WINDOWS\\System32\\WindowsPowerShell\\v1.0\\;C:\\xampp\\php;C:\\ProgramData\\ComposerSetup\\bin;C:\\Program Files\\Git\\cmd;C:\\Users\\Win10\\AppData\\Local\\Microsoft\\WindowsApps;C:\\Users\\Win10\\AppData\\Roaming\\Composer\\vendor\\bin'
    'SystemRoot' => 'C:\\WINDOWS'
    'COMSPEC' => 'C:\\WINDOWS\\system32\\cmd.exe'
    'PATHEXT' => '.COM;.EXE;.BAT;.CMD;.VBS;.VBE;.JS;.JSE;.WSF;.WSH;.MSC'
    'WINDIR' => 'C:\\WINDOWS'
    'SERVER_SIGNATURE' => '<address>Apache/2.4.25 (Win32) OpenSSL/1.0.2j PHP/7.1.1 Server at localhost Port 80</address>
'
    'SERVER_SOFTWARE' => 'Apache/2.4.25 (Win32) OpenSSL/1.0.2j PHP/7.1.1'
    'SERVER_NAME' => 'localhost'
    'SERVER_ADDR' => '::1'
    'SERVER_PORT' => '80'
    'REMOTE_ADDR' => '::1'
    'DOCUMENT_ROOT' => 'C:/xampp/htdocs'
    'REQUEST_SCHEME' => 'http'
    'CONTEXT_PREFIX' => ''
    'CONTEXT_DOCUMENT_ROOT' => 'C:/xampp/htdocs'
    'SERVER_ADMIN' => 'postmaster@localhost'
    'SCRIPT_FILENAME' => 'C:/xampp/htdocs/my_first_project/backend/web/index.php'
    'REMOTE_PORT' => '55343'
    'GATEWAY_INTERFACE' => 'CGI/1.1'
    'SERVER_PROTOCOL' => 'HTTP/1.1'
    'REQUEST_METHOD' => 'GET'
    'QUERY_STRING' => 'r=comment%2Fview&id=%27%27%3E'
    'REQUEST_URI' => '/my_first_project/backend/web/index.php?r=comment%2Fview&id=%27%27%3E'
    'SCRIPT_NAME' => '/my_first_project/backend/web/index.php'
    'PHP_SELF' => '/my_first_project/backend/web/index.php'
    'REQUEST_TIME_FLOAT' => 1492063711.022
    'REQUEST_TIME' => 1492063711
]
2017-04-13 08:09:04 [::1][3][4e8jei4tgpgeqib4jauvm27npv][error][yii\web\HttpException:404] yii\web\NotFoundHttpException: The requested page does not exist. in C:\xampp\htdocs\my_first_project\backend\controllers\PostController.php:138
Stack trace:
#0 C:\xampp\htdocs\my_first_project\backend\controllers\PostController.php(56): backend\controllers\PostController->findModel('''>')
#1 [internal function]: backend\controllers\PostController->actionView('''>')
#2 C:\xampp\htdocs\my_first_project\vendor\yiisoft\yii2\base\InlineAction.php(57): call_user_func_array(Array, Array)
#3 C:\xampp\htdocs\my_first_project\vendor\yiisoft\yii2\base\Controller.php(156): yii\base\InlineAction->runWithParams(Array)
#4 C:\xampp\htdocs\my_first_project\vendor\yiisoft\yii2\base\Module.php(523): yii\base\Controller->runAction('view', Array)
#5 C:\xampp\htdocs\my_first_project\vendor\yiisoft\yii2\web\Application.php(102): yii\base\Module->runAction('post/view', Array)
#6 C:\xampp\htdocs\my_first_project\vendor\yiisoft\yii2\base\Application.php(380): yii\web\Application->handleRequest(Object(yii\web\Request))
#7 C:\xampp\htdocs\my_first_project\backend\web\index.php(17): yii\base\Application->run()
#8 {main}
2017-04-13 08:09:04 [::1][3][4e8jei4tgpgeqib4jauvm27npv][info][application] $_GET = [
    'r' => 'post/view'
    'id' => '\'\'>'
]

$_COOKIE = [
    'advanced-frontend' => 'qn1jja0pc6dukeaus4pmk1pjgv'
    '_csrf-frontend' => '96b44b0c3b761bfd0b8b127c71cde3c81558a33bbbf5ccc162c667fb730dd1bba:2:{i:0;s:14:\"_csrf-frontend\";i:1;s:32:\"rKKxaO1xv9AWY9knVXpGEUDa6afhJTUZ\";}'
    'advanced-backend' => '4e8jei4tgpgeqib4jauvm27npv'
    '_csrf-backend' => '8a2726ea01abdef9236ad3ad58470fee04ce30e498bcab7d86a3d507552e80eaa:2:{i:0;s:13:\"_csrf-backend\";i:1;s:32:\"eRE8j5O-mM-A2LfVm4mqrQ4rp2sZhm-H\";}'
    '_identity-backend' => 'd1d69c70ce7f469823cb67981d1919b79c6763a2cefb2bcaed6660e48799a7a0a:2:{i:0;s:17:\"_identity-backend\";i:1;s:46:\"[3,\"PPkftzXE1TXzl3iOCMvFaDdMkCfm40RF\",2592000]\";}'
]

$_SESSION = [
    '__flash' => []
    '__id' => 3
]

$_SERVER = [
    'MIBDIRS' => 'C:/xampp/php/extras/mibs'
    'MYSQL_HOME' => '\\xampp\\mysql\\bin'
    'OPENSSL_CONF' => 'C:/xampp/apache/bin/openssl.cnf'
    'PHP_PEAR_SYSCONF_DIR' => '\\xampp\\php'
    'PHPRC' => '\\xampp\\php'
    'TMP' => '\\xampp\\tmp'
    'HTTP_HOST' => 'localhost'
    'HTTP_CONNECTION' => 'keep-alive'
    'HTTP_UPGRADE_INSECURE_REQUESTS' => '1'
    'HTTP_USER_AGENT' => 'Mozilla/5.0 (Windows NT 10.0; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/57.0.2987.133 Safari/537.36'
    'HTTP_ACCEPT' => 'text/html,application/xhtml+xml,application/xml;q=0.9,image/webp,*/*;q=0.8'
    'HTTP_REFERER' => 'http://localhost/my_first_project/backend/web/index.php?r=comment%2Fview&id=23'
    'HTTP_ACCEPT_ENCODING' => 'gzip, deflate, sdch, br'
    'HTTP_ACCEPT_LANGUAGE' => 'sk-SK,sk;q=0.8,cs;q=0.6,en-US;q=0.4,en;q=0.2'
    'HTTP_COOKIE' => 'advanced-frontend=qn1jja0pc6dukeaus4pmk1pjgv; _csrf-frontend=96b44b0c3b761bfd0b8b127c71cde3c81558a33bbbf5ccc162c667fb730dd1bba%3A2%3A%7Bi%3A0%3Bs%3A14%3A%22_csrf-frontend%22%3Bi%3A1%3Bs%3A32%3A%22rKKxaO1xv9AWY9knVXpGEUDa6afhJTUZ%22%3B%7D; advanced-backend=4e8jei4tgpgeqib4jauvm27npv; _csrf-backend=8a2726ea01abdef9236ad3ad58470fee04ce30e498bcab7d86a3d507552e80eaa%3A2%3A%7Bi%3A0%3Bs%3A13%3A%22_csrf-backend%22%3Bi%3A1%3Bs%3A32%3A%22eRE8j5O-mM-A2LfVm4mqrQ4rp2sZhm-H%22%3B%7D; _identity-backend=d1d69c70ce7f469823cb67981d1919b79c6763a2cefb2bcaed6660e48799a7a0a%3A2%3A%7Bi%3A0%3Bs%3A17%3A%22_identity-backend%22%3Bi%3A1%3Bs%3A46%3A%22%5B3%2C%22PPkftzXE1TXzl3iOCMvFaDdMkCfm40RF%22%2C2592000%5D%22%3B%7D'
    'PATH' => 'C:\\WINDOWS\\system32;C:\\WINDOWS;C:\\WINDOWS\\System32\\Wbem;C:\\WINDOWS\\System32\\WindowsPowerShell\\v1.0\\;C:\\xampp\\php;C:\\ProgramData\\ComposerSetup\\bin;C:\\Program Files\\Git\\cmd;C:\\Users\\Win10\\AppData\\Local\\Microsoft\\WindowsApps;C:\\Users\\Win10\\AppData\\Roaming\\Composer\\vendor\\bin'
    'SystemRoot' => 'C:\\WINDOWS'
    'COMSPEC' => 'C:\\WINDOWS\\system32\\cmd.exe'
    'PATHEXT' => '.COM;.EXE;.BAT;.CMD;.VBS;.VBE;.JS;.JSE;.WSF;.WSH;.MSC'
    'WINDIR' => 'C:\\WINDOWS'
    'SERVER_SIGNATURE' => '<address>Apache/2.4.25 (Win32) OpenSSL/1.0.2j PHP/7.1.1 Server at localhost Port 80</address>
'
    'SERVER_SOFTWARE' => 'Apache/2.4.25 (Win32) OpenSSL/1.0.2j PHP/7.1.1'
    'SERVER_NAME' => 'localhost'
    'SERVER_ADDR' => '::1'
    'SERVER_PORT' => '80'
    'REMOTE_ADDR' => '::1'
    'DOCUMENT_ROOT' => 'C:/xampp/htdocs'
    'REQUEST_SCHEME' => 'http'
    'CONTEXT_PREFIX' => ''
    'CONTEXT_DOCUMENT_ROOT' => 'C:/xampp/htdocs'
    'SERVER_ADMIN' => 'postmaster@localhost'
    'SCRIPT_FILENAME' => 'C:/xampp/htdocs/my_first_project/backend/web/index.php'
    'REMOTE_PORT' => '55353'
    'GATEWAY_INTERFACE' => 'CGI/1.1'
    'SERVER_PROTOCOL' => 'HTTP/1.1'
    'REQUEST_METHOD' => 'GET'
    'QUERY_STRING' => 'r=post%2Fview&id=%27%27%3E'
    'REQUEST_URI' => '/my_first_project/backend/web/index.php?r=post%2Fview&id=%27%27%3E'
    'SCRIPT_NAME' => '/my_first_project/backend/web/index.php'
    'PHP_SELF' => '/my_first_project/backend/web/index.php'
    'REQUEST_TIME_FLOAT' => 1492063744.062
    'REQUEST_TIME' => 1492063744
]
2017-04-13 08:10:08 [::1][3][4e8jei4tgpgeqib4jauvm27npv][error][yii\web\HttpException:404] yii\web\NotFoundHttpException: The requested page does not exist. in C:\xampp\htdocs\my_first_project\backend\controllers\PostController.php:138
Stack trace:
#0 C:\xampp\htdocs\my_first_project\backend\controllers\PostController.php(56): backend\controllers\PostController->findModel(''3'>')
#1 [internal function]: backend\controllers\PostController->actionView(''3'>')
#2 C:\xampp\htdocs\my_first_project\vendor\yiisoft\yii2\base\InlineAction.php(57): call_user_func_array(Array, Array)
#3 C:\xampp\htdocs\my_first_project\vendor\yiisoft\yii2\base\Controller.php(156): yii\base\InlineAction->runWithParams(Array)
#4 C:\xampp\htdocs\my_first_project\vendor\yiisoft\yii2\base\Module.php(523): yii\base\Controller->runAction('view', Array)
#5 C:\xampp\htdocs\my_first_project\vendor\yiisoft\yii2\web\Application.php(102): yii\base\Module->runAction('post/view', Array)
#6 C:\xampp\htdocs\my_first_project\vendor\yiisoft\yii2\base\Application.php(380): yii\web\Application->handleRequest(Object(yii\web\Request))
#7 C:\xampp\htdocs\my_first_project\backend\web\index.php(17): yii\base\Application->run()
#8 {main}
2017-04-13 08:10:08 [::1][3][4e8jei4tgpgeqib4jauvm27npv][info][application] $_GET = [
    'r' => 'post/view'
    'id' => '\'3\'>'
]

$_COOKIE = [
    'advanced-frontend' => 'qn1jja0pc6dukeaus4pmk1pjgv'
    '_csrf-frontend' => '96b44b0c3b761bfd0b8b127c71cde3c81558a33bbbf5ccc162c667fb730dd1bba:2:{i:0;s:14:\"_csrf-frontend\";i:1;s:32:\"rKKxaO1xv9AWY9knVXpGEUDa6afhJTUZ\";}'
    'advanced-backend' => '4e8jei4tgpgeqib4jauvm27npv'
    '_csrf-backend' => '8a2726ea01abdef9236ad3ad58470fee04ce30e498bcab7d86a3d507552e80eaa:2:{i:0;s:13:\"_csrf-backend\";i:1;s:32:\"eRE8j5O-mM-A2LfVm4mqrQ4rp2sZhm-H\";}'
    '_identity-backend' => 'd1d69c70ce7f469823cb67981d1919b79c6763a2cefb2bcaed6660e48799a7a0a:2:{i:0;s:17:\"_identity-backend\";i:1;s:46:\"[3,\"PPkftzXE1TXzl3iOCMvFaDdMkCfm40RF\",2592000]\";}'
]

$_SESSION = [
    '__flash' => []
    '__id' => 3
]

$_SERVER = [
    'MIBDIRS' => 'C:/xampp/php/extras/mibs'
    'MYSQL_HOME' => '\\xampp\\mysql\\bin'
    'OPENSSL_CONF' => 'C:/xampp/apache/bin/openssl.cnf'
    'PHP_PEAR_SYSCONF_DIR' => '\\xampp\\php'
    'PHPRC' => '\\xampp\\php'
    'TMP' => '\\xampp\\tmp'
    'HTTP_HOST' => 'localhost'
    'HTTP_CONNECTION' => 'keep-alive'
    'HTTP_UPGRADE_INSECURE_REQUESTS' => '1'
    'HTTP_USER_AGENT' => 'Mozilla/5.0 (Windows NT 10.0; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/57.0.2987.133 Safari/537.36'
    'HTTP_ACCEPT' => 'text/html,application/xhtml+xml,application/xml;q=0.9,image/webp,*/*;q=0.8'
    'HTTP_REFERER' => 'http://localhost/my_first_project/backend/web/index.php?r=comment%2Fview&id=23'
    'HTTP_ACCEPT_ENCODING' => 'gzip, deflate, sdch, br'
    'HTTP_ACCEPT_LANGUAGE' => 'sk-SK,sk;q=0.8,cs;q=0.6,en-US;q=0.4,en;q=0.2'
    'HTTP_COOKIE' => 'advanced-frontend=qn1jja0pc6dukeaus4pmk1pjgv; _csrf-frontend=96b44b0c3b761bfd0b8b127c71cde3c81558a33bbbf5ccc162c667fb730dd1bba%3A2%3A%7Bi%3A0%3Bs%3A14%3A%22_csrf-frontend%22%3Bi%3A1%3Bs%3A32%3A%22rKKxaO1xv9AWY9knVXpGEUDa6afhJTUZ%22%3B%7D; advanced-backend=4e8jei4tgpgeqib4jauvm27npv; _csrf-backend=8a2726ea01abdef9236ad3ad58470fee04ce30e498bcab7d86a3d507552e80eaa%3A2%3A%7Bi%3A0%3Bs%3A13%3A%22_csrf-backend%22%3Bi%3A1%3Bs%3A32%3A%22eRE8j5O-mM-A2LfVm4mqrQ4rp2sZhm-H%22%3B%7D; _identity-backend=d1d69c70ce7f469823cb67981d1919b79c6763a2cefb2bcaed6660e48799a7a0a%3A2%3A%7Bi%3A0%3Bs%3A17%3A%22_identity-backend%22%3Bi%3A1%3Bs%3A46%3A%22%5B3%2C%22PPkftzXE1TXzl3iOCMvFaDdMkCfm40RF%22%2C2592000%5D%22%3B%7D'
    'PATH' => 'C:\\WINDOWS\\system32;C:\\WINDOWS;C:\\WINDOWS\\System32\\Wbem;C:\\WINDOWS\\System32\\WindowsPowerShell\\v1.0\\;C:\\xampp\\php;C:\\ProgramData\\ComposerSetup\\bin;C:\\Program Files\\Git\\cmd;C:\\Users\\Win10\\AppData\\Local\\Microsoft\\WindowsApps;C:\\Users\\Win10\\AppData\\Roaming\\Composer\\vendor\\bin'
    'SystemRoot' => 'C:\\WINDOWS'
    'COMSPEC' => 'C:\\WINDOWS\\system32\\cmd.exe'
    'PATHEXT' => '.COM;.EXE;.BAT;.CMD;.VBS;.VBE;.JS;.JSE;.WSF;.WSH;.MSC'
    'WINDIR' => 'C:\\WINDOWS'
    'SERVER_SIGNATURE' => '<address>Apache/2.4.25 (Win32) OpenSSL/1.0.2j PHP/7.1.1 Server at localhost Port 80</address>
'
    'SERVER_SOFTWARE' => 'Apache/2.4.25 (Win32) OpenSSL/1.0.2j PHP/7.1.1'
    'SERVER_NAME' => 'localhost'
    'SERVER_ADDR' => '::1'
    'SERVER_PORT' => '80'
    'REMOTE_ADDR' => '::1'
    'DOCUMENT_ROOT' => 'C:/xampp/htdocs'
    'REQUEST_SCHEME' => 'http'
    'CONTEXT_PREFIX' => ''
    'CONTEXT_DOCUMENT_ROOT' => 'C:/xampp/htdocs'
    'SERVER_ADMIN' => 'postmaster@localhost'
    'SCRIPT_FILENAME' => 'C:/xampp/htdocs/my_first_project/backend/web/index.php'
    'REMOTE_PORT' => '55385'
    'GATEWAY_INTERFACE' => 'CGI/1.1'
    'SERVER_PROTOCOL' => 'HTTP/1.1'
    'REQUEST_METHOD' => 'GET'
    'QUERY_STRING' => 'r=post%2Fview&id=%273%27%3E'
    'REQUEST_URI' => '/my_first_project/backend/web/index.php?r=post%2Fview&id=%273%27%3E'
    'SCRIPT_NAME' => '/my_first_project/backend/web/index.php'
    'PHP_SELF' => '/my_first_project/backend/web/index.php'
    'REQUEST_TIME_FLOAT' => 1492063808.623
    'REQUEST_TIME' => 1492063808
]
2017-04-13 08:14:03 [::1][3][4e8jei4tgpgeqib4jauvm27npv][error][yii\web\HttpException:404] yii\web\NotFoundHttpException: The requested page does not exist. in C:\xampp\htdocs\my_first_project\backend\controllers\PostController.php:138
Stack trace:
#0 C:\xampp\htdocs\my_first_project\backend\controllers\PostController.php(56): backend\controllers\PostController->findModel(''3'>')
#1 [internal function]: backend\controllers\PostController->actionView(''3'>')
#2 C:\xampp\htdocs\my_first_project\vendor\yiisoft\yii2\base\InlineAction.php(57): call_user_func_array(Array, Array)
#3 C:\xampp\htdocs\my_first_project\vendor\yiisoft\yii2\base\Controller.php(156): yii\base\InlineAction->runWithParams(Array)
#4 C:\xampp\htdocs\my_first_project\vendor\yiisoft\yii2\base\Module.php(523): yii\base\Controller->runAction('view', Array)
#5 C:\xampp\htdocs\my_first_project\vendor\yiisoft\yii2\web\Application.php(102): yii\base\Module->runAction('post/view', Array)
#6 C:\xampp\htdocs\my_first_project\vendor\yiisoft\yii2\base\Application.php(380): yii\web\Application->handleRequest(Object(yii\web\Request))
#7 C:\xampp\htdocs\my_first_project\backend\web\index.php(17): yii\base\Application->run()
#8 {main}
2017-04-13 08:14:03 [::1][3][4e8jei4tgpgeqib4jauvm27npv][info][application] $_GET = [
    'r' => 'post/view'
    'id' => '\'3\'>'
]

$_COOKIE = [
    'advanced-frontend' => 'qn1jja0pc6dukeaus4pmk1pjgv'
    '_csrf-frontend' => '96b44b0c3b761bfd0b8b127c71cde3c81558a33bbbf5ccc162c667fb730dd1bba:2:{i:0;s:14:\"_csrf-frontend\";i:1;s:32:\"rKKxaO1xv9AWY9knVXpGEUDa6afhJTUZ\";}'
    'advanced-backend' => '4e8jei4tgpgeqib4jauvm27npv'
    '_csrf-backend' => '8a2726ea01abdef9236ad3ad58470fee04ce30e498bcab7d86a3d507552e80eaa:2:{i:0;s:13:\"_csrf-backend\";i:1;s:32:\"eRE8j5O-mM-A2LfVm4mqrQ4rp2sZhm-H\";}'
    '_identity-backend' => 'd1d69c70ce7f469823cb67981d1919b79c6763a2cefb2bcaed6660e48799a7a0a:2:{i:0;s:17:\"_identity-backend\";i:1;s:46:\"[3,\"PPkftzXE1TXzl3iOCMvFaDdMkCfm40RF\",2592000]\";}'
]

$_SESSION = [
    '__flash' => []
    '__id' => 3
]

$_SERVER = [
    'MIBDIRS' => 'C:/xampp/php/extras/mibs'
    'MYSQL_HOME' => '\\xampp\\mysql\\bin'
    'OPENSSL_CONF' => 'C:/xampp/apache/bin/openssl.cnf'
    'PHP_PEAR_SYSCONF_DIR' => '\\xampp\\php'
    'PHPRC' => '\\xampp\\php'
    'TMP' => '\\xampp\\tmp'
    'HTTP_HOST' => 'localhost'
    'HTTP_CONNECTION' => 'keep-alive'
    'HTTP_CACHE_CONTROL' => 'max-age=0'
    'HTTP_UPGRADE_INSECURE_REQUESTS' => '1'
    'HTTP_USER_AGENT' => 'Mozilla/5.0 (Windows NT 10.0; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/57.0.2987.133 Safari/537.36'
    'HTTP_ACCEPT' => 'text/html,application/xhtml+xml,application/xml;q=0.9,image/webp,*/*;q=0.8'
    'HTTP_REFERER' => 'http://localhost/my_first_project/backend/web/index.php?r=comment%2Fview&id=23'
    'HTTP_ACCEPT_ENCODING' => 'gzip, deflate, sdch, br'
    'HTTP_ACCEPT_LANGUAGE' => 'sk-SK,sk;q=0.8,cs;q=0.6,en-US;q=0.4,en;q=0.2'
    'HTTP_COOKIE' => 'advanced-frontend=qn1jja0pc6dukeaus4pmk1pjgv; _csrf-frontend=96b44b0c3b761bfd0b8b127c71cde3c81558a33bbbf5ccc162c667fb730dd1bba%3A2%3A%7Bi%3A0%3Bs%3A14%3A%22_csrf-frontend%22%3Bi%3A1%3Bs%3A32%3A%22rKKxaO1xv9AWY9knVXpGEUDa6afhJTUZ%22%3B%7D; advanced-backend=4e8jei4tgpgeqib4jauvm27npv; _csrf-backend=8a2726ea01abdef9236ad3ad58470fee04ce30e498bcab7d86a3d507552e80eaa%3A2%3A%7Bi%3A0%3Bs%3A13%3A%22_csrf-backend%22%3Bi%3A1%3Bs%3A32%3A%22eRE8j5O-mM-A2LfVm4mqrQ4rp2sZhm-H%22%3B%7D; _identity-backend=d1d69c70ce7f469823cb67981d1919b79c6763a2cefb2bcaed6660e48799a7a0a%3A2%3A%7Bi%3A0%3Bs%3A17%3A%22_identity-backend%22%3Bi%3A1%3Bs%3A46%3A%22%5B3%2C%22PPkftzXE1TXzl3iOCMvFaDdMkCfm40RF%22%2C2592000%5D%22%3B%7D'
    'PATH' => 'C:\\WINDOWS\\system32;C:\\WINDOWS;C:\\WINDOWS\\System32\\Wbem;C:\\WINDOWS\\System32\\WindowsPowerShell\\v1.0\\;C:\\xampp\\php;C:\\ProgramData\\ComposerSetup\\bin;C:\\Program Files\\Git\\cmd;C:\\Users\\Win10\\AppData\\Local\\Microsoft\\WindowsApps;C:\\Users\\Win10\\AppData\\Roaming\\Composer\\vendor\\bin'
    'SystemRoot' => 'C:\\WINDOWS'
    'COMSPEC' => 'C:\\WINDOWS\\system32\\cmd.exe'
    'PATHEXT' => '.COM;.EXE;.BAT;.CMD;.VBS;.VBE;.JS;.JSE;.WSF;.WSH;.MSC'
    'WINDIR' => 'C:\\WINDOWS'
    'SERVER_SIGNATURE' => '<address>Apache/2.4.25 (Win32) OpenSSL/1.0.2j PHP/7.1.1 Server at localhost Port 80</address>
'
    'SERVER_SOFTWARE' => 'Apache/2.4.25 (Win32) OpenSSL/1.0.2j PHP/7.1.1'
    'SERVER_NAME' => 'localhost'
    'SERVER_ADDR' => '::1'
    'SERVER_PORT' => '80'
    'REMOTE_ADDR' => '::1'
    'DOCUMENT_ROOT' => 'C:/xampp/htdocs'
    'REQUEST_SCHEME' => 'http'
    'CONTEXT_PREFIX' => ''
    'CONTEXT_DOCUMENT_ROOT' => 'C:/xampp/htdocs'
    'SERVER_ADMIN' => 'postmaster@localhost'
    'SCRIPT_FILENAME' => 'C:/xampp/htdocs/my_first_project/backend/web/index.php'
    'REMOTE_PORT' => '55417'
    'GATEWAY_INTERFACE' => 'CGI/1.1'
    'SERVER_PROTOCOL' => 'HTTP/1.1'
    'REQUEST_METHOD' => 'GET'
    'QUERY_STRING' => 'r=post%2Fview&id=%273%27%3E'
    'REQUEST_URI' => '/my_first_project/backend/web/index.php?r=post%2Fview&id=%273%27%3E'
    'SCRIPT_NAME' => '/my_first_project/backend/web/index.php'
    'PHP_SELF' => '/my_first_project/backend/web/index.php'
    'REQUEST_TIME_FLOAT' => 1492064043.287
    'REQUEST_TIME' => 1492064043
]
