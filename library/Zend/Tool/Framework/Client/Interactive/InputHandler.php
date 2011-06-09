<php?php
php/php*php*
php php*php Zendphp Framework
php php*
php php*php LICENSE
php php*
php php*php Thisphp sourcephp filephp isphp subjectphp tophp thephp newphp BSDphp licensephp thatphp isphp bundled
php php*php withphp thisphp packagephp inphp thephp filephp LICENSEphp.txtphp.
php php*php Itphp isphp alsophp availablephp throughphp thephp worldphp-widephp-webphp atphp thisphp URLphp:
php php*php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsd
php php*php Ifphp youphp didphp notphp receivephp aphp copyphp ofphp thephp licensephp andphp arephp unablephp to
php php*php obtainphp itphp throughphp thephp worldphp-widephp-webphp,php pleasephp sendphp anphp email
php php*php tophp licensephp@zendphp.comphp sophp wephp canphp sendphp youphp aphp copyphp immediatelyphp.
php php*
php php*php php@categoryphp php php Zend
php php*php php@packagephp php php php Zendphp_Tool
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php php@versionphp php php php php$Idphp:php InputHandlerphp.phpphp php2php0php0php9php6php php2php0php1php0php-php0php1php-php0php6php php0php2php:php0php5php:php0php9Zphp bkarwinphp php$
php php*php/

php/php*php*
php php*php php@categoryphp php php Zend
php php*php php@packagephp php php php Zendphp_Tool
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php/
classphp Zendphp_Toolphp_Frameworkphp_Clientphp_Interactivephp_InputHandler
php{

php php php php php/php*php*
php php php php php php*php php@varphp Zendphp_Toolphp_Frameworkphp_Clientphp_Interactivephp_InputInterface
php php php php php php*php/
php php php php protectedphp php$php_clientphp php=php nullphp;

php php php php protectedphp php$php_inputRequestphp php=php nullphp;

php php php php publicphp functionphp setClientphp(Zendphp_Toolphp_Frameworkphp_Clientphp_Interactivephp_InputInterfacephp php$clientphp)
php php php php php{
php php php php php php php php php$thisphp-php>php_clientphp php=php php$clientphp;
php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php publicphp functionphp setInputRequestphp(php$inputRequestphp)
php php php php php{
php php php php php php php php ifphp php(isphp_stringphp(php$inputRequestphp)php)php php{
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Toolphp/Frameworkphp/Clientphp/Interactivephp/InputRequestphp.phpphp'php;
php php php php php php php php php php php php php$inputRequestphp php=php newphp Zendphp_Toolphp_Frameworkphp_Clientphp_Interactivephp_InputRequestphp(php$inputRequestphp)php;
php php php php php php php php php}php elseifphp php(php!php$inputRequestphp instanceofphp Zendphp_Toolphp_Frameworkphp_Clientphp_Interactivephp_InputRequestphp)php php{
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Toolphp/Frameworkphp/Clientphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Toolphp_Frameworkphp_Clientphp_Exceptionphp(php'promptInteractivephp(php)php requiresphp eitherphp aphp stringphp orphp anphp instancephp ofphp Zendphp_Toolphp_Frameworkphp_Clientphp_Interactivephp_InputRequestphp.php'php)php;
php php php php php php php php php}

php php php php php php php php php$thisphp-php>php_inputRequestphp php=php php$inputRequestphp;
php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php publicphp functionphp handlephp(php)
php php php php php{
php php php php php php php php php$inputResponsephp php=php php$thisphp-php>php_clientphp-php>handleInteractiveInputRequestphp(php$thisphp-php>php_inputRequestphp)php;

php php php php php php php php ifphp php(isphp_stringphp(php$inputResponsephp)php)php php{
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Toolphp/Frameworkphp/Clientphp/Interactivephp/InputResponsephp.phpphp'php;
php php php php php php php php php php php php php$inputResponsephp php=php newphp Zendphp_Toolphp_Frameworkphp_Clientphp_Interactivephp_InputResponsephp(php$inputResponsephp)php;
php php php php php php php php php}php elseifphp php(php!php$inputResponsephp instanceofphp Zendphp_Toolphp_Frameworkphp_Clientphp_Interactivephp_InputResponsephp)php php{
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Toolphp/Frameworkphp/Clientphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Toolphp_Frameworkphp_Clientphp_Exceptionphp(php'Thephp registeredphp php$php_interactiveCallbackphp forphp thephp clientphp mustphp eitherphp returnphp aphp stringphp orphp anphp instancephp ofphp Zendphp_Toolphp_Frameworkphp_Clientphp_Interactivephp_InputResponsephp.php'php)php;
php php php php php php php php php}

php php php php php php php php returnphp php$inputResponsephp;
php php php php php}


php}
