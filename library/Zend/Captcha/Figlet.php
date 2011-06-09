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
php php*php php@packagephp php php php Zendphp_Captcha
php php*php php@subpackagephp Adapter
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php/

php/php*php*php php@seephp Zendphp_Captchaphp_Wordphp php*php/
requirephp_oncephp php'Zendphp/Captchaphp/Wordphp.phpphp'php;

php/php*php*php php@seephp Zendphp_Textphp_Figletphp php*php/
requirephp_oncephp php'Zendphp/Textphp/Figletphp.phpphp'php;

php/php*php*
php php*php Captchaphp basedphp onphp figletphp textphp renderingphp service
php php*
php php*php Notephp thatphp thisphp enginephp seemsphp notphp tophp likephp numbers
php php*
php php*php php@categoryphp php php Zend
php php*php php@packagephp php php php Zendphp_Captcha
php php*php php@subpackagephp Adapter
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php php@versionphp php php php php$Idphp:php Figletphp.phpphp php2php0php0php9php6php php2php0php1php0php-php0php1php-php0php6php php0php2php:php0php5php:php0php9Zphp bkarwinphp php$
php php*php/
classphp Zendphp_Captchaphp_Figletphp extendsphp Zendphp_Captchaphp_Word
php{
php php php php php/php*php*
php php php php php php*php Figletphp textphp renderer
php php php php php php*
php php php php php php*php php@varphp Zendphp_Textphp_Figlet
php php php php php php*php/
php php php php protectedphp php$php_figletphp;

php php php php php/php*php*
php php php php php php*php Constructor
php php php php php php*
php php php php php php*php php@paramphp php nullphp|stringphp|arrayphp|Zendphp_Configphp php$options
php php php php php php*php php@returnphp void
php php php php php php*php/
php php php php publicphp functionphp php_php_constructphp(php$optionsphp php=php nullphp)
php php php php php{
php php php php php php php php parentphp:php:php_php_constructphp(php$optionsphp)php;
php php php php php php php php php$thisphp-php>php_figletphp php=php newphp Zendphp_Textphp_Figletphp(php$optionsphp)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Generatephp newphp captcha
php php php php php php*
php php php php php php*php php@returnphp string
php php php php php php*php/
php php php php publicphp functionphp generatephp(php)
php php php php php{
php php php php php php php php php$thisphp-php>php_useNumbersphp php=php falsephp;
php php php php php php php php returnphp parentphp:php:generatephp(php)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Displayphp thephp captcha
php php php php php php*
php php php php php php*php php@paramphp Zendphp_Viewphp_Interfacephp php$view
php php php php php php*php php@paramphp mixedphp php$element
php php php php php php*php php@returnphp string
php php php php php php*php/
php php php php publicphp functionphp renderphp(Zendphp_Viewphp_Interfacephp php$viewphp php=php nullphp,php php$elementphp php=php nullphp)
php php php php php{
php php php php php php php php returnphp php'php<prephp>php'
php php php php php php php php php php php php php php.php php$thisphp-php>php_figletphp-php>renderphp(php$thisphp-php>getWordphp(php)php)
php php php php php php php php php php php php php php.php php"<php/prephp>php\nphp"php;
php php php php php}
php}
