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
php php*php php@packagephp php php php Zendphp_Filter
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php php@versionphp php php php php$Idphp:php HtmlEntitiesphp.phpphp php2php1php0php6php0php php2php0php1php0php-php0php2php-php1php5php php2php1php:php5php6php:php0php7Zphp thomasphp php$
php php*php/

php/php*php*
php php*php php@seephp Zendphp_Filterphp_Interface
php php*php/
requirephp_oncephp php'Zendphp/Filterphp/Interfacephp.phpphp'php;

php/php*php*
php php*php php@categoryphp php php Zend
php php*php php@packagephp php php php Zendphp_Filter
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php/
classphp Zendphp_Filterphp_HtmlEntitiesphp implementsphp Zendphp_Filterphp_Interface
php{
php php php php php/php*php*
php php php php php php*php Correspondsphp tophp thephp secondphp htmlentitiesphp(php)php argument
php php php php php php*
php php php php php php*php php@varphp integer
php php php php php php*php/
php php php php protectedphp php$php_quoteStylephp;

php php php php php/php*php*
php php php php php php*php Correspondsphp tophp thephp thirdphp htmlentitiesphp(php)php argument
php php php php php php*
php php php php php php*php php@varphp string
php php php php php php*php/
php php php php protectedphp php$php_encodingphp;

php php php php php/php*php*
php php php php php php*php Correspondsphp tophp thephp forthphp htmlentitiesphp(php)php argument
php php php php php php*
php php php php php php*php php@varphp unknownphp_type
php php php php php php*php/
php php php php protectedphp php$php_doubleQuotephp;

php php php php php/php*php*
php php php php php php*php Setsphp filterphp options
php php php php php php*
php php php php php php*php php@paramphp php integerphp|arrayphp php$quoteStyle
php php php php php php*php php@paramphp php stringphp php php$charSet
php php php php php php*php php@returnphp void
php php php php php php*php/
php php php php publicphp functionphp php_php_constructphp(php$optionsphp php=php arrayphp(php)php)
php php php php php{
php php php php php php php php ifphp php(php$optionsphp instanceofphp Zendphp_Configphp)php php{
php php php php php php php php php php php php php$optionsphp php=php php$optionsphp-php>toArrayphp(php)php;
php php php php php php php php php}php elsephp ifphp php(php!isphp_arrayphp(php$optionsphp)php)php php{
php php php php php php php php php php php php php$optionsphp php=php funcphp_getphp_argsphp(php)php;
php php php php php php php php php php php php php$tempphp[php'quotestylephp'php]php php=php arrayphp_shiftphp(php$optionsphp)php;
php php php php php php php php php php php php ifphp php(php!emptyphp(php$optionsphp)php)php php{
php php php php php php php php php php php php php php php php php$tempphp[php'charsetphp'php]php php=php arrayphp_shiftphp(php$optionsphp)php;
php php php php php php php php php php php php php}

php php php php php php php php php php php php php$optionsphp php=php php$tempphp;
php php php php php php php php php}

php php php php php php php php ifphp php(php!issetphp(php$optionsphp[php'quotestylephp'php]php)php)php php{
php php php php php php php php php php php php php$optionsphp[php'quotestylephp'php]php php=php ENTphp_COMPATphp;
php php php php php php php php php}

php php php php php php php php ifphp php(php!issetphp(php$optionsphp[php'encodingphp'php]php)php)php php{
php php php php php php php php php php php php php$optionsphp[php'encodingphp'php]php php=php php'UTFphp-php8php'php;
php php php php php php php php php}
php php php php php php php php ifphp php(issetphp(php$optionsphp[php'charsetphp'php]php)php)php php{
php php php php php php php php php php php php php$optionsphp[php'encodingphp'php]php php=php php$optionsphp[php'charsetphp'php]php;
php php php php php php php php php}

php php php php php php php php ifphp php(php!issetphp(php$optionsphp[php'doublequotephp'php]php)php)php php{
php php php php php php php php php php php php php$optionsphp[php'doublequotephp'php]php php=php truephp;
php php php php php php php php php}

php php php php php php php php php$thisphp-php>setQuoteStylephp(php$optionsphp[php'quotestylephp'php]php)php;
php php php php php php php php php$thisphp-php>setEncodingphp(php$optionsphp[php'encodingphp'php]php)php;
php php php php php php php php php$thisphp-php>setDoubleQuotephp(php$optionsphp[php'doublequotephp'php]php)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Returnsphp thephp quoteStylephp option
php php php php php php*
php php php php php php*php php@returnphp integer
php php php php php php*php/
php php php php publicphp functionphp getQuoteStylephp(php)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>php_quoteStylephp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Setsphp thephp quoteStylephp option
php php php php php php*
php php php php php php*php php@paramphp php integerphp php$quoteStyle
php php php php php php*php php@returnphp Zendphp_Filterphp_HtmlEntitiesphp Providesphp aphp fluentphp interface
php php php php php php*php/
php php php php publicphp functionphp setQuoteStylephp(php$quoteStylephp)
php php php php php{
php php php php php php php php php$thisphp-php>php_quoteStylephp php=php php$quoteStylephp;
php php php php php php php php returnphp php$thisphp;
php php php php php}


php php php php php/php*php*
php php php php php php*php Getphp encoding
php php php php php php*
php php php php php php*php php@returnphp string
php php php php php php*php/
php php php php publicphp functionphp getEncodingphp(php)
php php php php php{
php php php php php php php php php returnphp php$thisphp-php>php_encodingphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Setphp encoding
php php php php php php*
php php php php php php*php php@paramphp php stringphp php$value
php php php php php php*php php@returnphp Zendphp_Filterphp_HtmlEntities
php php php php php php*php/
php php php php publicphp functionphp setEncodingphp(php$valuephp)
php php php php php{
php php php php php php php php php$thisphp-php>php_encodingphp php=php php(stringphp)php php$valuephp;
php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Returnsphp thephp charSetphp option
php php php php php php*
php php php php php php*php Proxiesphp tophp php{php@linkphp getEncodingphp(php)php}
php php php php php php*
php php php php php php*php php@returnphp string
php php php php php php*php/
php php php php publicphp functionphp getCharSetphp(php)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>getEncodingphp(php)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Setsphp thephp charSetphp option
php php php php php php*
php php php php php php*php Proxiesphp tophp php{php@linkphp setEncodingphp(php)php}
php php php php php php*
php php php php php php*php php@paramphp php stringphp php$charSet
php php php php php php*php php@returnphp Zendphp_Filterphp_HtmlEntitiesphp Providesphp aphp fluentphp interface
php php php php php php*php/
php php php php publicphp functionphp setCharSetphp(php$charSetphp)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>setEncodingphp(php$charSetphp)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Returnsphp thephp doubleQuotephp option
php php php php php php*
php php php php php php*php php@returnphp boolean
php php php php php php*php/
php php php php publicphp functionphp getDoubleQuotephp(php)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>php_doubleQuotephp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Setsphp thephp doubleQuotephp option
php php php php php php*
php php php php php php*php php@paramphp booleanphp php$doubleQuote
php php php php php php*php php@returnphp Zendphp_Filterphp_HtmlEntitiesphp Providesphp aphp fluentphp interface
php php php php php php*php/
php php php php publicphp functionphp setDoubleQuotephp(php$doubleQuotephp)
php php php php php{
php php php php php php php php php$thisphp-php>php_doubleQuotephp php=php php(booleanphp)php php$doubleQuotephp;
php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Definedphp byphp Zendphp_Filterphp_Interface
php php php php php php*
php php php php php php*php Returnsphp thephp stringphp php$valuephp,php convertingphp charactersphp tophp theirphp correspondingphp HTMLphp entity
php php php php php php*php equivalentsphp wherephp theyphp exist
php php php php php php*
php php php php php php*php php@paramphp php stringphp php$value
php php php php php php*php php@returnphp string
php php php php php php*php/
php php php php publicphp functionphp filterphp(php$valuephp)
php php php php php{
php php php php php php php php returnphp htmlentitiesphp(php(stringphp)php php$valuephp,php php$thisphp-php>getQuoteStylephp(php)php,php php$thisphp-php>getEncodingphp(php)php,php php$thisphp-php>getDoubleQuotephp(php)php)php;
php php php php php}
php}
