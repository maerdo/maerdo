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
php php*php php@packagephp php php php Zendphp_View
php php*php php@subpackagephp Helper
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@versionphp php php php php$Idphp:php Registryphp.phpphp php2php3php5php4php5php php2php0php1php0php-php1php2php-php1php8php php0php1php:php4php2php:php5php7Zphp ramonphp php$
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php/

php/php*php*php Zendphp_Registryphp php*php/
requirephp_oncephp php'Zendphp/Registryphp.phpphp'php;

php/php*php*php Zendphp_Viewphp_Helperphp_Placeholderphp_Containerphp_Abstractphp php*php/
requirephp_oncephp php'Zendphp/Viewphp/Helperphp/Placeholderphp/Containerphp/Abstractphp.phpphp'php;

php/php*php*php Zendphp_Viewphp_Helperphp_Placeholderphp_Containerphp php*php/
requirephp_oncephp php'Zendphp/Viewphp/Helperphp/Placeholderphp/Containerphp.phpphp'php;

php/php*php*
php php*php Registryphp forphp placeholderphp containers
php php*
php php*php php@packagephp php php php Zendphp_View
php php*php php@subpackagephp Helper
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php/
classphp Zendphp_Viewphp_Helperphp_Placeholderphp_Registry
php{
php php php php php/php*php*
php php php php php php*php Zendphp_Registryphp keyphp underphp whichphp placeholderphp registryphp exists
php php php php php php*php php@constphp string
php php php php php php*php/
php php php php constphp REGISTRYphp_KEYphp php=php php'Zendphp_Viewphp_Helperphp_Placeholderphp_Registryphp'php;

php php php php php/php*php*
php php php php php php*php Defaultphp containerphp class
php php php php php php*php php@varphp string
php php php php php php*php/
php php php php protectedphp php$php_containerClassphp php=php php'Zendphp_Viewphp_Helperphp_Placeholderphp_Containerphp'php;

php php php php php/php*php*
php php php php php php*php Placeholderphp containers
php php php php php php*php php@varphp array
php php php php php php*php/
php php php php protectedphp php$php_itemsphp php=php arrayphp(php)php;

php php php php php/php*php*
php php php php php php*php Retrievephp orphp createphp registryphp instnace
php php php php php php*
php php php php php php*php php@returnphp void
php php php php php php*php/
php php php php publicphp staticphp functionphp getRegistryphp(php)
php php php php php{
php php php php php php php php ifphp php(Zendphp_Registryphp:php:isRegisteredphp(selfphp:php:REGISTRYphp_KEYphp)php)php php{
php php php php php php php php php php php php php$registryphp php=php Zendphp_Registryphp:php:getphp(selfphp:php:REGISTRYphp_KEYphp)php;
php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php$registryphp php=php newphp selfphp(php)php;
php php php php php php php php php php php php Zendphp_Registryphp:php:setphp(selfphp:php:REGISTRYphp_KEYphp,php php$registryphp)php;
php php php php php php php php php}

php php php php php php php php returnphp php$registryphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php createContainer
php php php php php php*
php php php php php php*php php@paramphp php stringphp php$key
php php php php php php*php php@paramphp php arrayphp php$value
php php php php php php*php php@returnphp Zendphp_Viewphp_Helperphp_Placeholderphp_Containerphp_Abstract
php php php php php php*php/
php php php php publicphp functionphp createContainerphp(php$keyphp,php arrayphp php$valuephp php=php arrayphp(php)php)
php php php php php{
php php php php php php php php php$keyphp php=php php(stringphp)php php$keyphp;

php php php php php php php php php$thisphp-php>php_itemsphp[php$keyphp]php php=php newphp php$thisphp-php>php_containerClassphp(php$valuephp)php;
php php php php php php php php returnphp php$thisphp-php>php_itemsphp[php$keyphp]php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Retrievephp aphp placeholderphp container
php php php php php php*
php php php php php php*php php@paramphp php stringphp php$key
php php php php php php*php php@returnphp Zendphp_Viewphp_Helperphp_Placeholderphp_Containerphp_Abstract
php php php php php php*php/
php php php php publicphp functionphp getContainerphp(php$keyphp)
php php php php php{
php php php php php php php php php$keyphp php=php php(stringphp)php php$keyphp;
php php php php php php php php ifphp php(issetphp(php$thisphp-php>php_itemsphp[php$keyphp]php)php)php php{
php php php php php php php php php php php php returnphp php$thisphp-php>php_itemsphp[php$keyphp]php;
php php php php php php php php php}

php php php php php php php php php$containerphp php=php php$thisphp-php>createContainerphp(php$keyphp)php;

php php php php php php php php returnphp php$containerphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Doesphp aphp particularphp containerphp existphp?
php php php php php php*
php php php php php php*php php@paramphp php stringphp php$key
php php php php php php*php php@returnphp bool
php php php php php php*php/
php php php php publicphp functionphp containerExistsphp(php$keyphp)
php php php php php{
php php php php php php php php php$keyphp php=php php(stringphp)php php$keyphp;
php php php php php php php php php$returnphp php=php php arrayphp_keyphp_existsphp(php$keyphp,php php$thisphp-php>php_itemsphp)php;
php php php php php php php php returnphp php$returnphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Setphp thephp containerphp forphp anphp itemphp inphp thephp registry
php php php php php php*
php php php php php php*php php@paramphp php stringphp php$key
php php php php php php*php php@paramphp php Zendphp_Viewphp_Placeholderphp_Containerphp_Abstractphp php$container
php php php php php php*php php@returnphp Zendphp_Viewphp_Placeholderphp_Registry
php php php php php php*php/
php php php php publicphp functionphp setContainerphp(php$keyphp,php Zendphp_Viewphp_Helperphp_Placeholderphp_Containerphp_Abstractphp php$containerphp)
php php php php php{
php php php php php php php php php$keyphp php=php php(stringphp)php php$keyphp;
php php php php php php php php php$thisphp-php>php_itemsphp[php$keyphp]php php=php php$containerphp;
php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Deletephp aphp container
php php php php php php*
php php php php php php*php php@paramphp php stringphp php$key
php php php php php php*php php@returnphp bool
php php php php php php*php/
php php php php publicphp functionphp deleteContainerphp(php$keyphp)
php php php php php{
php php php php php php php php php$keyphp php=php php(stringphp)php php$keyphp;
php php php php php php php php ifphp php(issetphp(php$thisphp-php>php_itemsphp[php$keyphp]php)php)php php{
php php php php php php php php php php php php unsetphp(php$thisphp-php>php_itemsphp[php$keyphp]php)php;
php php php php php php php php php php php php returnphp truephp;
php php php php php php php php php}

php php php php php php php php returnphp falsephp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Setphp thephp containerphp classphp tophp use
php php php php php php*
php php php php php php*php php@paramphp php stringphp php$name
php php php php php php*php php@returnphp Zendphp_Viewphp_Helperphp_Placeholderphp_Registry
php php php php php php*php/
php php php php publicphp functionphp setContainerClassphp(php$namephp)
php php php php php{
php php php php php php php php ifphp php(php!classphp_existsphp(php$namephp)php)php php{
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Loaderphp.phpphp'php;
php php php php php php php php php php php php Zendphp_Loaderphp:php:loadClassphp(php$namephp)php;
php php php php php php php php php}

php php php php php php php php php$reflectionphp php=php newphp ReflectionClassphp(php$namephp)php;
php php php php php php php php ifphp php(php!php$reflectionphp-php>isSubclassOfphp(newphp ReflectionClassphp(php'Zendphp_Viewphp_Helperphp_Placeholderphp_Containerphp_Abstractphp'php)php)php)php php{
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Viewphp/Helperphp/Placeholderphp/Registryphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php php$ephp php=php newphp Zendphp_Viewphp_Helperphp_Placeholderphp_Registryphp_Exceptionphp(php'Invalidphp Containerphp classphp specifiedphp'php)php;
php php php php php php php php php php php php php$ephp-php>setViewphp(php$thisphp-php>viewphp)php;
php php php php php php php php php php php php throwphp php$ephp;
php php php php php php php php php}

php php php php php php php php php$thisphp-php>php_containerClassphp php=php php$namephp;
php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Retrievephp thephp containerphp class
php php php php php php*
php php php php php php*php php@returnphp string
php php php php php php*php/
php php php php publicphp functionphp getContainerClassphp(php)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>php_containerClassphp;
php php php php php}
php}
