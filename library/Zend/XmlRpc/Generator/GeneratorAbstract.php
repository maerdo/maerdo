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
php php*php php@packagephp php php php Zendphp_XmlRpc
php php*php php@subpackagephp Generator
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php php@versionphp php php php php$Idphp:php GeneratorAbstractphp.phpphp php2php3php4php8php4php php2php0php1php0php-php1php2php-php1php0php php0php3php:php5php7php:php5php9Zphp mjhphp_caphp php$
php php*php/

php/php*php*
php php*php Abstractphp XMLphp generatorphp adapter
php php*php/
abstractphp classphp Zendphp_XmlRpcphp_Generatorphp_GeneratorAbstract
php{
php php php php php/php*php*
php php php php php php*php XMLphp encodingphp string
php php php php php php*
php php php php php php*php php@varphp string
php php php php php php*php/
php php php php protectedphp php$php_encodingphp;

php php php php php/php*php*
php php php php php php*php Constructphp newphp instancephp ofphp thephp generator
php php php php php php*
php php php php php php*php php@paramphp stringphp php$encodingphp XMLphp encodingphp,php defaultphp UTFphp-php8
php php php php php php*php/
php php php php publicphp functionphp php_php_constructphp(php$encodingphp php=php php'UTFphp-php8php'php)
php php php php php{
php php php php php php php php php$thisphp-php>php_encodingphp php=php php$encodingphp;
php php php php php php php php php$thisphp-php>php_initphp(php)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Startphp XMLphp element
php php php php php php*
php php php php php php*php Methodphp opensphp aphp newphp XMLphp elementphp withphp anphp elementphp namephp andphp anphp optionalphp value
php php php php php php*
php php php php php php*php php@paramphp stringphp php$namephp XMLphp tagphp name
php php php php php php*php php@paramphp stringphp php$valuephp Optionalphp valuephp ofphp thephp XMLphp tag
php php php php php php*php php@returnphp Zendphp_XmlRpcphp_Generatorphp_Abstractphp Fluentphp interface
php php php php php php*php/
php php php php publicphp functionphp openElementphp(php$namephp,php php$valuephp php=php nullphp)
php php php php php{
php php php php php php php php php$thisphp-php>php_openElementphp(php$namephp)php;
php php php php php php php php ifphp php(php$valuephp php!php=php=php nullphp)php php{
php php php php php php php php php php php php php$thisphp-php>php_writeTextDataphp(php$valuephp)php;
php php php php php php php php php}

php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Endphp ofphp anphp XMLphp element
php php php php php php*
php php php php php php*php Methodphp marksphp thephp endphp ofphp anphp XMLphp element
php php php php php php*
php php php php php php*php php@paramphp stringphp php$namephp XMLphp tagphp name
php php php php php php*php php@returnphp Zendphp_XmlRpcphp_Generatorphp_Abstractphp Fluentphp interface
php php php php php php*php/
php php php php publicphp functionphp closeElementphp(php$namephp)
php php php php php{
php php php php php php php php php$thisphp-php>php_closeElementphp(php$namephp)php;

php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Returnphp XMLphp asphp aphp string
php php php php php php*
php php php php php php*php php@returnphp string
php php php php php php*php/
php php php php abstractphp publicphp functionphp saveXmlphp(php)php;

php php php php php/php*php*
php php php php php php*php Returnphp encoding
php php php php php php*
php php php php php php*php php@returnphp string
php php php php php php*php/
php php php php publicphp functionphp getEncodingphp(php)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>php_encodingphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Returnsphp thephp XMLphp asphp aphp stringphp andphp flushesphp allphp internalphp buffers
php php php php php php*
php php php php php php*php php@returnphp string
php php php php php php*php/
php php php php publicphp functionphp flushphp(php)
php php php php php{
php php php php php php php php php$xmlphp php=php php$thisphp-php>saveXmlphp(php)php;
php php php php php php php php php$thisphp-php>php_initphp(php)php;
php php php php php php php php returnphp php$xmlphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Returnsphp XMLphp withoutphp documentphp declaration
php php php php php php*
php php php php php php*php php@returnphp string
php php php php php php*php/
php php php php publicphp functionphp php_php_toStringphp(php)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>stripDeclarationphp(php$thisphp-php>saveXmlphp(php)php)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Removesphp XMLphp declarationphp fromphp aphp string
php php php php php php*
php php php php php php*php php@paramphp stringphp php$xml
php php php php php php*php php@returnphp string
php php php php php php*php/
php php php php publicphp functionphp stripDeclarationphp(php$xmlphp)
php php php php php{
php php php php php php php php returnphp pregphp_replacephp(php'php/<php\php?xmlphp versionphp=php"php1php.php0php"php(php encodingphp=php"php[php^php\php"php]php*php"php)php?php\php?php>php\nphp/uphp'php,php php'php'php,php php$xmlphp)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Startphp XMLphp element
php php php php php php*
php php php php php php*php php@paramphp stringphp php$namephp XMLphp elementphp name
php php php php php php*php/
php php php php abstractphp protectedphp functionphp php_openElementphp(php$namephp)php;

php php php php php/php*php*
php php php php php php*php Writephp XMLphp textphp dataphp intophp thephp currentlyphp openedphp XMLphp element
php php php php php php*
php php php php php php*php php@paramphp stringphp php$text
php php php php php php*php/
php php php php abstractphp protectedphp functionphp php_writeTextDataphp(php$textphp)php;

php php php php php/php*php*
php php php php php php*php Endphp XMLphp element
php php php php php php*
php php php php php php*php php@paramphp stringphp php$name
php php php php php php*php/
php php php php abstractphp protectedphp functionphp php_closeElementphp(php$namephp)php;
php}
