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
php php*php php@packagephp php php php Zendphp_Feedphp_Writer
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php php@versionphp php php php php$Idphp:php Deletedphp.phpphp php2php3php4php8php4php php2php0php1php0php-php1php2php-php1php0php php0php3php:php5php7php:php5php9Zphp mjhphp_caphp php$
php php*php/

php/php*php*
php php*php php@seephp Zendphp_Feedphp_Writerphp_Rendererphp_RendererAbstract
php php*php/
requirephp_oncephp php'Zendphp/Feedphp/Writerphp/Rendererphp/RendererAbstractphp.phpphp'php;

php/php*php*
php php*php php@categoryphp php php Zend
php php*php php@packagephp php php php Zendphp_Feedphp_Writer
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php/
classphp Zendphp_Feedphp_Writerphp_Rendererphp_Entryphp_Atomphp_Deleted
php php php php extendsphp Zendphp_Feedphp_Writerphp_Rendererphp_RendererAbstract
php php php php implementsphp Zendphp_Feedphp_Writerphp_Rendererphp_RendererInterface
php{
php php php php php/php*php*
php php php php php php*php Constructor
php php php php php php*
php php php php php php*php php@paramphp php Zendphp_Feedphp_Writerphp_Deletedphp php$container
php php php php php php*php php@returnphp void
php php php php php php*php/
php php php php publicphp functionphp php_php_constructphp php(Zendphp_Feedphp_Writerphp_Deletedphp php$containerphp)
php php php php php{
php php php php php php php php parentphp:php:php_php_constructphp(php$containerphp)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Renderphp atomphp entry
php php php php php php*
php php php php php php*php php@returnphp Zendphp_Feedphp_Writerphp_Rendererphp_Entryphp_Atom
php php php php php php*php/
php php php php publicphp functionphp renderphp(php)
php php php php php{
php php php php php php php php php$thisphp-php>php_domphp php=php newphp DOMDocumentphp(php'php1php.php0php'php,php php$thisphp-php>php_containerphp-php>getEncodingphp(php)php)php;
php php php php php php php php php$thisphp-php>php_domphp-php>formatOutputphp php=php truephp;
php php php php php php php php php$entryphp php=php php$thisphp-php>php_domphp-php>createElementphp(php'atphp:deletedphp-entryphp'php)php;
php php php php php php php php php$thisphp-php>php_domphp-php>appendChildphp(php$entryphp)php;

php php php php php php php php php$entryphp-php>setAttributephp(php'refphp'php,php php$thisphp-php>php_containerphp-php>getReferencephp(php)php)php;
php php php php php php php php php$entryphp-php>setAttributephp(php'whenphp'php,php php$thisphp-php>php_containerphp-php>getWhenphp(php)php-php>getphp(Zendphp_Datephp:php:ISOphp_php8php6php0php1php)php)php;

php php php php php php php php php$thisphp-php>php_setByphp(php$thisphp-php>php_domphp,php php$entryphp)php;
php php php php php php php php php$thisphp-php>php_setCommentphp(php$thisphp-php>php_domphp,php php$entryphp)php;

php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Setphp tombstonephp comment
php php php php php php*
php php php php php php*php php@paramphp php DOMDocumentphp php$dom
php php php php php php*php php@paramphp php DOMElementphp php$root
php php php php php php*php php@returnphp void
php php php php php php*php/
php php php php protectedphp functionphp php_setCommentphp(DOMDocumentphp php$domphp,php DOMElementphp php$rootphp)
php php php php php{
php php php php php php php php ifphp(php!php$thisphp-php>getDataContainerphp(php)php-php>getCommentphp(php)php)php php{
php php php php php php php php php php php php returnphp;
php php php php php php php php php}
php php php php php php php php php$cphp php=php php$domphp-php>createElementphp(php'atphp:commentphp'php)php;
php php php php php php php php php$rootphp-php>appendChildphp(php$cphp)php;
php php php php php php php php php$cphp-php>setAttributephp(php'typephp'php,php php'htmlphp'php)php;
php php php php php php php php php$cdataphp php=php php$domphp-php>createCDATASectionphp(php$thisphp-php>getDataContainerphp(php)php-php>getCommentphp(php)php)php;
php php php php php php php php php$cphp-php>appendChildphp(php$cdataphp)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Setphp entryphp authors
php php php php php php*
php php php php php php*php php@paramphp php DOMDocumentphp php$dom
php php php php php php*php php@paramphp php DOMElementphp php$root
php php php php php php*php php@returnphp void
php php php php php php*php/
php php php php protectedphp functionphp php_setByphp(DOMDocumentphp php$domphp,php DOMElementphp php$rootphp)
php php php php php{
php php php php php php php php php$dataphp php=php php$thisphp-php>php_containerphp-php>getByphp(php)php;
php php php php php php php php ifphp php(php(php!php$dataphp php|php|php emptyphp(php$dataphp)php)php)php php{
php php php php php php php php php php php php returnphp;
php php php php php php php php php}
php php php php php php php php php$authorphp php=php php$thisphp-php>php_domphp-php>createElementphp(php'atphp:byphp'php)php;
php php php php php php php php php$namephp php=php php$thisphp-php>php_domphp-php>createElementphp(php'namephp'php)php;
php php php php php php php php php$authorphp-php>appendChildphp(php$namephp)php;
php php php php php php php php php$rootphp-php>appendChildphp(php$authorphp)php;
php php php php php php php php php$textphp php=php php$domphp-php>createTextNodephp(php$dataphp[php'namephp'php]php)php;
php php php php php php php php php$namephp-php>appendChildphp(php$textphp)php;
php php php php php php php php ifphp php(arrayphp_keyphp_existsphp(php'emailphp'php,php php$dataphp)php)php php{
php php php php php php php php php php php php php$emailphp php=php php$thisphp-php>php_domphp-php>createElementphp(php'emailphp'php)php;
php php php php php php php php php php php php php$authorphp-php>appendChildphp(php$emailphp)php;
php php php php php php php php php php php php php$textphp php=php php$domphp-php>createTextNodephp(php$dataphp[php'emailphp'php]php)php;
php php php php php php php php php php php php php$emailphp-php>appendChildphp(php$textphp)php;
php php php php php php php php php}
php php php php php php php php ifphp php(arrayphp_keyphp_existsphp(php'uriphp'php,php php$dataphp)php)php php{
php php php php php php php php php php php php php$uriphp php=php php$thisphp-php>php_domphp-php>createElementphp(php'uriphp'php)php;
php php php php php php php php php php php php php$authorphp-php>appendChildphp(php$uriphp)php;
php php php php php php php php php php php php php$textphp php=php php$domphp-php>createTextNodephp(php$dataphp[php'uriphp'php]php)php;
php php php php php php php php php php php php php$uriphp-php>appendChildphp(php$textphp)php;
php php php php php php php php php}
php php php php php}

php}
