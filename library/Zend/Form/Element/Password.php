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
php php*php php@packagephp php php php Zendphp_Form
php php*php php@subpackagephp Element
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php/

php/php*php*php Zendphp_Formphp_Elementphp_Xhtmlphp php*php/
requirephp_oncephp php'Zendphp/Formphp/Elementphp/Xhtmlphp.phpphp'php;

php/php*php*
php php*php Passwordphp formphp element
php php*
php php*php php@categoryphp php php Zend
php php*php php@packagephp php php php Zendphp_Form
php php*php php@subpackagephp Element
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php php@versionphp php php php php$Idphp:php Passwordphp.phpphp php2php0php0php9php6php php2php0php1php0php-php0php1php-php0php6php php0php2php:php0php5php:php0php9Zphp bkarwinphp php$
php php*php/
classphp Zendphp_Formphp_Elementphp_Passwordphp extendsphp Zendphp_Formphp_Elementphp_Xhtml
php{
php php php php php/php*php*
php php php php php php*php Usephp formPasswordphp viewphp helperphp byphp default
php php php php php php*php php@varphp string
php php php php php php*php/
php php php php publicphp php$helperphp php=php php'formPasswordphp'php;

php php php php php/php*php*
php php php php php php*php Whetherphp orphp notphp tophp renderphp thephp password
php php php php php php*php php@varphp bool
php php php php php php*php/
php php php php publicphp php$renderPasswordphp php=php falsephp;

php php php php php/php*php*
php php php php php php*php Setphp flagphp indicatingphp whetherphp orphp notphp tophp renderphp thephp password
php php php php php php*php php@paramphp php boolphp php$flag
php php php php php php*php php@returnphp Zendphp_Formphp_Elementphp_Password
php php php php php php*php/
php php php php publicphp functionphp setRenderPasswordphp(php$flagphp)
php php php php php{
php php php php php php php php php$thisphp-php>renderPasswordphp php=php php(boolphp)php php$flagphp;
php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Getphp valuephp ofphp renderPasswordphp flag
php php php php php php*
php php php php php php*php php@returnphp bool
php php php php php php*php/
php php php php publicphp functionphp renderPasswordphp(php)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>renderPasswordphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Overridephp isValidphp(php)
php php php php php php*
php php php php php php*php Ensurephp thatphp validationphp errorphp messagesphp maskphp passwordphp valuephp.
php php php php php php*
php php php php php php*php php@paramphp php stringphp php$value
php php php php php php*php php@paramphp php mixedphp php$context
php php php php php php*php php@returnphp bool
php php php php php php*php/
php php php php publicphp functionphp isValidphp(php$valuephp,php php$contextphp php=php nullphp)
php php php php php{
php php php php php php php php foreachphp php(php$thisphp-php>getValidatorsphp(php)php asphp php$validatorphp)php php{
php php php php php php php php php php php php ifphp php(php$validatorphp instanceofphp Zendphp_Validatephp_Abstractphp)php php{
php php php php php php php php php php php php php php php php php$validatorphp-php>setObscureValuephp(truephp)php;
php php php php php php php php php php php php php}
php php php php php php php php php}
php php php php php php php php returnphp parentphp:php:isValidphp(php$valuephp,php php$contextphp)php;
php php php php php}
php}
