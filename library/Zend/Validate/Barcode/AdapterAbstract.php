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
php php*php php@packagephp php php php Zendphp_Validate
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php php@versionphp php php php php$Idphp:php AdapterAbstractphp.phpphp php2php0php7php8php5php php2php0php1php0php-php0php1php-php3php1php php0php9php:php4php3php:php0php3Zphp mikaelkaelphp php$
php php*php/

php/php*php*
php php*php php@seephp Zendphp_Validatephp_Barcodephp_AdapterInterface
php php*php/
requirephp_oncephp php'Zendphp/Validatephp/Barcodephp/AdapterInterfacephp.phpphp'php;

php/php*php*
php php*php php@categoryphp php php Zend
php php*php php@packagephp php php php Zendphp_Validate
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php/
abstractphp classphp Zendphp_Validatephp_Barcodephp_AdapterAbstract
php php php php implementsphp Zendphp_Validatephp_Barcodephp_AdapterInterface
php{
php php php php php/php*php*
php php php php php php*php Allowedphp barcodephp lengths
php php php php php php*php php@varphp integerphp|arrayphp|string
php php php php php php*php/
php php php php protectedphp php$php_lengthphp;

php php php php php/php*php*
php php php php php php*php Allowedphp barcodephp characters
php php php php php php*php php@varphp string
php php php php php php*php/
php php php php protectedphp php$php_charactersphp;

php php php php php/php*php*
php php php php php php*php Callbackphp tophp checksumphp function
php php php php php php*php php@varphp stringphp|array
php php php php php php*php/
php php php php protectedphp php$php_checksumphp;

php php php php php/php*php*
php php php php php php*php Isphp aphp checksumphp valuephp includedphp?
php php php php php php*php php@varphp boolean
php php php php php php*php/
php php php php protectedphp php$php_hasChecksumphp php=php truephp;

php php php php php/php*php*
php php php php php php*php Checksphp thephp lengthphp ofphp aphp barcode
php php php php php php*
php php php php php php*php php@paramphp php stringphp php$valuephp Thephp barcodephp tophp checkphp forphp properphp length
php php php php php php*php php@returnphp boolean
php php php php php php*php/
php php php php publicphp functionphp checkLengthphp(php$valuephp)
php php php php php{
php php php php php php php php ifphp php(php!isphp_stringphp(php$valuephp)php)php php{
php php php php php php php php php php php php returnphp falsephp;
php php php php php php php php php}

php php php php php php php php php$fixumphp php php=php strlenphp(php$valuephp)php;
php php php php php php php php php$foundphp php php=php falsephp;
php php php php php php php php php$lengthphp php=php php$thisphp-php>getLengthphp(php)php;
php php php php php php php php ifphp php(isphp_arrayphp(php$lengthphp)php)php php{
php php php php php php php php php php php php foreachphp php(php$lengthphp asphp php$valuephp)php php{
php php php php php php php php php php php php php php php php ifphp php(php$fixumphp php=php=php php$valuephp)php php{
php php php php php php php php php php php php php php php php php php php php php$foundphp php=php truephp;
php php php php php php php php php php php php php php php php php}

php php php php php php php php php php php php php php php php ifphp php(php$valuephp php=php=php php-php1php)php php{
php php php php php php php php php php php php php php php php php php php php php$foundphp php=php truephp;
php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php}
php php php php php php php php php}php elseifphp php(php$fixumphp php=php=php php$lengthphp)php php{
php php php php php php php php php php php php php$foundphp php=php truephp;
php php php php php php php php php}php elseifphp php(php$lengthphp php=php=php php-php1php)php php{
php php php php php php php php php php php php php$foundphp php=php truephp;
php php php php php php php php php}php elseifphp php(php$lengthphp php=php=php php'evenphp'php)php php{
php php php php php php php php php php php php php$countphp php=php php$fixumphp php%php php2php;
php php php php php php php php php php php php php$foundphp php=php php(php$countphp php=php=php php0php)php php?php truephp php:php falsephp;
php php php php php php php php php}php elseifphp php(php$lengthphp php=php=php php'oddphp'php)php php{
php php php php php php php php php php php php php$countphp php=php php$fixumphp php%php php2php;
php php php php php php php php php php php php php$foundphp php=php php(php$countphp php=php=php php1php)php php?php truephp php:php falsephp;
php php php php php php php php php}

php php php php php php php php returnphp php$foundphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Checksphp forphp allowedphp charactersphp withinphp thephp barcode
php php php php php php*
php php php php php php*php php@paramphp php stringphp php$valuephp Thephp barcodephp tophp checkphp forphp allowedphp characters
php php php php php php*php php@returnphp boolean
php php php php php php*php/
php php php php publicphp functionphp checkCharsphp(php$valuephp)
php php php php php{
php php php php php php php php ifphp php(php!isphp_stringphp(php$valuephp)php)php php{
php php php php php php php php php php php php returnphp falsephp;
php php php php php php php php php}

php php php php php php php php php$charactersphp php=php php$thisphp-php>getCharactersphp(php)php;
php php php php php php php php ifphp php(php$charactersphp php=php=php php1php2php8php)php php{
php php php php php php php php php php php php forphp php(php$xphp php=php php0php;php php$xphp <php php1php2php8php;php php+php+php$xphp)php php{
php php php php php php php php php php php php php php php php php$valuephp php=php strphp_replacephp(chrphp(php$xphp)php,php php'php'php,php php$valuephp)php;
php php php php php php php php php php php php php}
php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php$charsphp php=php strphp_splitphp(php$charactersphp)php;
php php php php php php php php php php php php foreachphp php(php$charsphp asphp php$charphp)php php{
php php php php php php php php php php php php php php php php php$valuephp php=php strphp_replacephp(php$charphp,php php'php'php,php php$valuephp)php;
php php php php php php php php php php php php php}
php php php php php php php php php}

php php php php php php php php ifphp php(strlenphp(php$valuephp)php php>php php0php)php php{
php php php php php php php php php php php php returnphp falsephp;
php php php php php php php php php}

php php php php php php php php returnphp truephp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Validatesphp thephp checksum
php php php php php php*
php php php php php php*php php@paramphp php stringphp php$valuephp Thephp barcodephp tophp checkphp thephp checksumphp for
php php php php php php*php php@returnphp boolean
php php php php php php*php/
php php php php publicphp functionphp checksumphp(php$valuephp)
php php php php php{
php php php php php php php php php$checksumphp php=php php$thisphp-php>getChecksumphp(php)php;
php php php php php php php php ifphp php(php!emptyphp(php$checksumphp)php)php php{
php php php php php php php php php php php php ifphp php(methodphp_existsphp(php$thisphp,php php$checksumphp)php)php php{
php php php php php php php php php php php php php php php php returnphp callphp_userphp_funcphp(arrayphp(php$thisphp,php php$checksumphp)php,php php$valuephp)php;
php php php php php php php php php php php php php}
php php php php php php php php php}

php php php php php php php php returnphp falsephp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Returnsphp thephp allowedphp barcodephp length
php php php php php php*
php php php php php php*php php@returnphp string
php php php php php php*php/
php php php php publicphp functionphp getLengthphp(php)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>php_lengthphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Returnsphp thephp allowedphp characters
php php php php php php*
php php php php php php*php php@returnphp integerphp|string
php php php php php php*php/
php php php php publicphp functionphp getCharactersphp(php)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>php_charactersphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Returnsphp thephp checksumphp functionphp name
php php php php php php*
php php php php php php*php/
php php php php publicphp functionphp getChecksumphp(php)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>php_checksumphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Returnsphp ifphp barcodephp usesphp checksum
php php php php php php*
php php php php php php*php php@returnphp boolean
php php php php php php*php/
php php php php publicphp functionphp getCheckphp(php)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>php_hasChecksumphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Setsphp thephp checksumphp validation
php php php php php php*
php php php php php php*php php@paramphp php booleanphp php$check
php php php php php php*php php@returnphp Zendphp_Validatephp_Barcodephp_AdapterAbstract
php php php php php php*php/
php php php php publicphp functionphp setCheckphp(php$checkphp)
php php php php php{
php php php php php php php php php$thisphp-php>php_hasChecksumphp php=php php(booleanphp)php php$checkphp;
php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Validatesphp thephp checksumphp php(Modulophp php1php0php)
php php php php php php*php GTINphp implementationphp factorphp php3
php php php php php php*
php php php php php php*php php@paramphp php stringphp php$valuephp Thephp barcodephp tophp validate
php php php php php php*php php@returnphp boolean
php php php php php php*php/
php php php php protectedphp functionphp php_gtinphp(php$valuephp)
php php php php php{
php php php php php php php php php$barcodephp php=php substrphp(php$valuephp,php php0php,php php-php1php)php;
php php php php php php php php php$sumphp php php php php php=php php0php;
php php php php php php php php php$lengthphp php php=php strlenphp(php$barcodephp)php php-php php1php;

php php php php php php php php forphp php(php$iphp php=php php0php;php php$iphp <php=php php$lengthphp;php php$iphp+php+php)php php{
php php php php php php php php php php php php ifphp php(php(php$iphp php%php php2php)php php=php=php=php php0php)php php{
php php php php php php php php php php php php php php php php php$sumphp php+php=php php$barcodephp[php$lengthphp php-php php$iphp]php php*php php3php;
php php php php php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php php php php php$sumphp php+php=php php$barcodephp[php$lengthphp php-php php$iphp]php;
php php php php php php php php php php php php php}
php php php php php php php php php}

php php php php php php php php php$calcphp php php php php php=php php$sumphp php%php php1php0php;
php php php php php php php php php$checksumphp php=php php(php$calcphp php=php=php=php php0php)php php?php php0php php:php php(php1php0php php-php php$calcphp)php;
php php php php php php php php ifphp php(php$valuephp[php$lengthphp php+php php1php]php php!php=php php$checksumphp)php php{
php php php php php php php php php php php php returnphp falsephp;
php php php php php php php php php}

php php php php php php php php returnphp truephp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Validatesphp thephp checksumphp php(Modulophp php1php0php)
php php php php php php*php IDENTCODEphp implementationphp factorsphp php9php andphp php4
php php php php php php*
php php php php php php*php php@paramphp php stringphp php$valuephp Thephp barcodephp tophp validate
php php php php php php*php php@returnphp boolean
php php php php php php*php/
php php php php protectedphp functionphp php_identcodephp(php$valuephp)
php php php php php{
php php php php php php php php php$barcodephp php=php substrphp(php$valuephp,php php0php,php php-php1php)php;
php php php php php php php php php$sumphp php php php php php=php php0php;
php php php php php php php php php$lengthphp php php=php strlenphp(php$valuephp)php php-php php2php;

php php php php php php php php forphp php(php$iphp php=php php0php;php php$iphp <php=php php$lengthphp;php php$iphp+php+php)php php{
php php php php php php php php php php php php ifphp php(php(php$iphp php%php php2php)php php=php=php=php php0php)php php{
php php php php php php php php php php php php php php php php php$sumphp php+php=php php$barcodephp[php$lengthphp php-php php$iphp]php php*php php4php;
php php php php php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php php php php php$sumphp php+php=php php$barcodephp[php$lengthphp php-php php$iphp]php php*php php9php;
php php php php php php php php php php php php php}
php php php php php php php php php}

php php php php php php php php php$calcphp php php php php php=php php$sumphp php%php php1php0php;
php php php php php php php php php$checksumphp php=php php(php$calcphp php=php=php=php php0php)php php?php php0php php:php php(php1php0php php-php php$calcphp)php;
php php php php php php php php ifphp php(php$valuephp[php$lengthphp php+php php1php]php php!php=php php$checksumphp)php php{
php php php php php php php php php php php php returnphp falsephp;
php php php php php php php php php}

php php php php php php php php returnphp truephp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Validatesphp thephp checksumphp php(Modulophp php1php0php)
php php php php php php*php CODEphp2php5php implementationphp factorphp php3
php php php php php php*
php php php php php php*php php@paramphp php stringphp php$valuephp Thephp barcodephp tophp validate
php php php php php php*php php@returnphp boolean
php php php php php php*php/
php php php php protectedphp functionphp php_codephp2php5php(php$valuephp)
php php php php php{
php php php php php php php php php$barcodephp php=php substrphp(php$valuephp,php php0php,php php-php1php)php;
php php php php php php php php php$sumphp php php php php php=php php0php;
php php php php php php php php php$lengthphp php php=php strlenphp(php$barcodephp)php php-php php1php;

php php php php php php php php forphp php(php$iphp php=php php0php;php php$iphp <php=php php$lengthphp;php php$iphp+php+php)php php{
php php php php php php php php php php php php ifphp php(php(php$iphp php%php php2php)php php=php=php=php php0php)php php{
php php php php php php php php php php php php php php php php php$sumphp php+php=php php$barcodephp[php$iphp]php php*php php3php;
php php php php php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php php php php php$sumphp php+php=php php$barcodephp[php$iphp]php;
php php php php php php php php php php php php php}
php php php php php php php php php}

php php php php php php php php php$calcphp php php php php php=php php$sumphp php%php php1php0php;
php php php php php php php php php$checksumphp php=php php(php$calcphp php=php=php=php php0php)php php?php php0php php:php php(php1php0php php-php php$calcphp)php;
php php php php php php php php ifphp php(php$valuephp[php$lengthphp php+php php1php]php php!php=php php$checksumphp)php php{
php php php php php php php php php php php php returnphp falsephp;
php php php php php php php php php}

php php php php php php php php returnphp truephp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Validatesphp thephp checksumphp php(php)
php php php php php php*php POSTNETphp implementation
php php php php php php*
php php php php php php*php php@paramphp php stringphp php$valuephp Thephp barcodephp tophp validate
php php php php php php*php php@returnphp boolean
php php php php php php*php/
php php php php protectedphp functionphp php_postnetphp(php$valuephp)
php php php php php{
php php php php php php php php php$checksumphp php=php substrphp(php$valuephp,php php-php1php,php php1php)php;
php php php php php php php php php$valuesphp php php php=php strphp_splitphp(substrphp(php$valuephp,php php0php,php php-php1php)php)php;

php php php php php php php php php$checkphp php=php php0php;
php php php php php php php php foreachphp(php$valuesphp asphp php$rowphp)php php{
php php php php php php php php php php php php php$checkphp php+php=php php$rowphp;
php php php php php php php php php}

php php php php php php php php php$checkphp php%php=php php1php0php;
php php php php php php php php php$checkphp php=php php1php0php php-php php$checkphp;
php php php php php php php php ifphp php(php$checkphp php=php=php php$checksumphp)php php{
php php php php php php php php php php php php returnphp truephp;
php php php php php php php php php}

php php php php php php php php returnphp falsephp;
php php php php php}
php}
